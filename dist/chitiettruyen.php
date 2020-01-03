<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
  </title>
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/book-page.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen" />
 
  </head>
<body>
<?php 
include('config.php');
session_start();
// lấy danh sách thể loại 
$sqltheloai = 'select * from theloai';

$list_theloai = $conn->query($sqltheloai);
$index_theloai = 0;

if(isset($_SESSION["id"])){
$sql = "select * from thanhvien where id_taikhoan=".$_SESSION["id"];
$sqlrst = $conn->query($sql);
$user = $sqlrst -> fetch_assoc();
$id_user = $user["id"];
$sql_user = " select thanhvien.id as id_thanhvien, thanhvien.level as level,taikhoan.id as id_taikhoan,taikhoan.avatar,taikhoan.username,taikhoan.password,taikhoan.ten from thanhvien
join taikhoan on thanhvien.id_taikhoan = taikhoan.id
where thanhvien.id=".$id_user ;
$rst = $conn->query($sql_user);
$userinfo = $rst->fetch_assoc();
}

?>
<div class="nav-medimum">
  <ul class="menu">
    <div class="hompage-medium">Trang chủ</div>
    <div class="catalog-medium">Thể loại</div>
    <div class="account-medium">Tài khoản</div>
    <ul class="catalog-list-medium">
    <?php while($row_theloai = $list_theloai->fetch_assoc()){?>
    <li><?php echo $row_theloai['ten']?></li>
   <?php } ?>
  
    </ul>
  </ul>
  </div>
<div id="nav-search">
  <div class="nav-medi">
    <i id="nav-medi" class="fas fa-bars" ></i>
  </div>
  <div id="nav">
<ul>
  <li><a id="homepage" href="../index.php">Trang chủ </a></li>
<?php
$rst = $conn->query('select * from theloai limit 0,5');
while($row = $rst->fetch_assoc()){
?>
  <li><a href= <?php echo "../src/search.php?type=kind&key=".str_replace(' ', '%20', $row["ten"])?>><?php echo $row['ten']; ?></a></li>
<?php }?>


  <li class="more"><a >Khác</a>
    <div class ="dropdown">
    <?php
$rst = $conn->query('select count(id) as total from theloai');
$row = $rst->fetch_assoc();
$total = $row['total']-5;
$rst = $conn->query('select * from theloai limit 5,'.$total);
?>
        <?php
$rst = $conn->query('select count(id) as total from theloai');
$row = $rst->fetch_assoc();
$total = $row['total']-5;
$rst = $conn->query('select * from theloai limit 5,'.$total);
while($row = $rst->fetch_assoc()){
?>
      <a href = <?php echo "../src/search.php?type=kind&key=".str_replace(' ', '%20', $row["ten"])?>><?php echo $row['ten'] ?></a>
      <?php }?>
  </div>
  </li>
  </ul>
    </div>
  <div id= "search" class= "fr">
    <ul>
      <li>
    <form id="frmURL">
      <input id="search-input" type ="text" autocomplete="off" placeholder="tìm kiếm">
      </input>
  <label class="icon-search" onclick="searchtext-nav()">
    <i class="fas fa-search"></i>
      <label >
    </form>
    </li>
  <li class ="account">
    <a href= <?php if(isset($_SESSION['id'] )) echo "../src/dashboard.php"; else echo "../src/login-page.php"; ?> >
    <i> Tài khoản </i>
    <i class="far fa-user"></i>
  </li>
  </div>
  <div class="clearfix"></div>
</div>
 <?php $id = $_GET['id'];
  // get book information
  $sql_truyen=
  "Select truyen.id,truyen.ten as tentruyen,truyen.id_tacgia,truyen.id_theloai,truyen.trangthai,truyen.id_admin,truyen.anh as anhbia,truyen.namxb,truyen.luotxem,truyen.mota,tacgia.ten as tentacgia,tacgia.anh as anhtacgia,theloai.ten as theloai,admin.id_taikhoan from truyen 
inner join tacgia on  truyen.id_tacgia = tacgia.id
INNER JOIN theloai on   truyen.id_theloai = theloai.id
INNER JOIN admin on truyen.id_admin  = admin.id
where truyen.id=";
  $rst = $conn->query($sql_truyen.$id);
  $truyen = $rst->fetch_assoc();

 // update view by plus one
  $luotxemtruyen = $truyen["luotxem"] +1;
  $sql_updateview = "update truyen set luotxem = ".$luotxemtruyen." where id = ".$truyen["id"];
  $rst = $conn->query($sql_updateview);
  
 //getting  traffic
  $sql_tuongtac=
   "select sum(dexuat) as dexuat, SUM(theodoi) as theodoi, SUM(yeuthich) as yeuthich,AVG(rate) as rate from truyen_thanhvien group by id_truyen having id_truyen=";
    $rst = $conn->query($sql_tuongtac.$id);
    $tuongtac = $rst->fetch_assoc();
   $sql_countrate ='select count(*) as count from truyen_thanhvien WHERE rate>0 GROUP by id_truyen HAVING id_truyen =';
   $rst = $conn->query($sql_countrate.$id);
   $countrate = $rst->fetch_assoc();
   if(isset($_SESSION["id"])){
   $sql_thanhvientuongtac ='select * from truyen_thanhvien WHERE id_truyen= '.$id." and id_thanhvien= ".$id_user;
   $rst = $conn->query($sql_thanhvientuongtac);
   $thanhvientuongtac = $rst->fetch_assoc();}
?>

<!-- container  -->
<div class = "background-top"></div>
<div class ="link-area">
  <span>
    <a href = "../index.php">Trang chủ</a>
    <i class='fas fa-angle-right' style='font-size:14px;color:white'></i>
    <a href=<?php echo "../src/search.php?type=kind&key=".str_replace(' ', '%20',$truyen["theloai"]); ?> ><?php echo $truyen["theloai"]; ?></a>
    <i class='fas fa-angle-right' style='font-size:14px;color:white'></i>
    <a href="#"><?php echo $truyen["tentruyen"];?></a>
</div>
  <div id="border-shadow">
</div>
  <div id="content-wrap">
    <div class="book-infomation">
    <div class="img-book">
      <a >
        <div class="container">
		<div class="book">
			<div class="front">
				<div class="cover">
          <img src=<?php echo "../assets/img/front-book/".$truyen['anhbia']?>>
				</div>
			</div>
			<div class="left-side">
				<h2>
					<span><?php echo $truyen['tentacgia']?></span>
					<span><?php echo $truyen['namxb']?></span>
				</h2>
			</div>
		</div>
	</div>

  </a>

  </div>
  <!--==============INFOMATION OF BOOK======================= -->

    <div class="info-book">
      <h1> <?php echo $truyen['tentruyen']?> </h1>
  <!-------------------TAG------------------------------------->
      <p class ="tag">
        <a  class ="bluetag"><?php echo $truyen['tentacgia']?> </a>
        <span class = "bluetag"> 
        <?php 
        $state = $truyen['trangthai'];
        if($state == 0){
        echo 'Chưa Hoàn Thành';
        }
        else echo'Đã Hoàn Thành';
        ?>
        
         </span>
        <a  class= "redtag"> <?php echo $truyen['theloai']?> </a>
  <div class="clearfix"></div>
      </p>
  <!----------------INTRO----------------------------------->
      <p class= "intro">
       <?php $demo = strtok($truyen['mota'], "\n");
       if(strlen($demo) >65){
           $shortdemo =substr($demo, 0, 65);
           echo $shortdemo.'..';
       }
       else echo $demo.'..';
       ?>
      </p>
  <!-----------------TRAFFIC---------------------------->
         <div class="traffic-medi">
           <div class="wrap-traffic-medi">
           <li>
         <div class="like"><?php if($tuongtac['yeuthich']) echo $tuongtac['yeuthich']; else echo 0; ?></div>
          <p>Yêu thích</p>
  </li>
           <li>
          <div class="view"><?php if($truyen['luotxem']) echo $truyen['luotxem']; else echo 0 ;?></div>
          <p>Lượt xem</p>
  </li>
           <li>
          <div class="follow"><?php if($tuongtac['theodoi']) echo $tuongtac['theodoi']; else echo 0;?></div>
          <p>Theo dõi</p>
  </li>
           <li>
          <div class="nominate"><?php if($tuongtac['dexuat']) echo $tuongtac['dexuat']; else echo 0; ?></div>
          <p>Đề xuất</p>
  </li>
   <div class="clear-fix"></div>
  </div>
   <div class="clear-fix"></div>
      </div>
           <div class="clear-fix"></div>

       <p class="traffic">
         <em class="like"><?php if($tuongtac['yeuthich']) echo $tuongtac['yeuthich']; else echo 0; ?></em>
          <cite>Yêu thích</cite>
         <i>|</i>
          <em class="view"><?php if($truyen['luotxem']) echo $truyen['luotxem']; else echo 0;?></em>
          <cite>Lượt xem</cite>
         <i>|</i>
          <em class="follow"><?php if($tuongtac['theodoi']) echo $tuongtac['theodoi']; else echo 0;?></em>
          <cite>Theo dõi</cite>
         <i>|</i>
          <em class="nominate"><?php if($tuongtac['dexuat']) echo $tuongtac['dexuat']; else echo 0;?></em>
          <cite>Đề xuất</cite>
      </p>
<div class="button-group">
<?php 
$sql = "SELECT * FROM `chuong` WHERE id_truyen= ".$truyen["id"]." ORDER by so ASC limit 0,1";
$rst = $conn->query($sql);
$chuongdau = $rst->fetch_assoc();
?>
  <div class="clear-fix"></div>
    <a class="btn btn-primary btn-lg btn-3d button "  href=<?php if($chuongdau["id"]) echo"doctruyen.php?id=".$chuongdau["id"]; else echo "#"; ?> >Đọc truyện</a>
  <a  id="thichbtn" onclick=<?php if(isset($_SESSION['id'] )) echo "tuongtac(".$id.",".$id_user.",1)"; else echo "login()";  ?> class="btn btn-primary btn-lg btn-3d likebtn lovebtn" ><?php if(isset($_SESSION["id"])){if($thanhvientuongtac['yeuthich'] == 1) echo "Bỏ thích";  else echo "Yêu thích";} else echo "Yêu thích";  ?></a>
  <a  id="theodoibtn" onclick=<?php  if(isset($_SESSION['id'] )) echo "tuongtac(".$id.",".$id_user.",2)"; else echo "login()"; ?> class="btn btn-primary btn-lg btn-3d likebtn" ><?php if(isset($_SESSION["id"])){if($thanhvientuongtac['theodoi'] == 1) echo "Bỏ theo dõi"; else  echo "Theo dõi";} else echo "Theo dõi"; ?></a>
  <a  id="decubtn" onclick=<?php if(isset($_SESSION['id'] )) echo "tuongtac(".$id.",".$id_user.",3)"; else echo "login()"; ?> class="btn btn-primary btn-lg btn-3d likebtn nominatebtn"><?php if(isset($_SESSION["id"])){if($thanhvientuongtac['dexuat'] ==1) echo "Bỏ đề xuất";  else echo "Đề xuất";} else echo "Đề xuất";  ?></a>
  <div class="clear-fix"></div>
    </div>
  </div>

  <!--==============RATING==================================-->
   <div class ="ratingWrap" id="rateWrap-large">
      <cite class="score"><?php if($tuongtac['rate']) echo round($tuongtac['rate'],1); else echo '0'?></cite>
       <div class="clearfix"></div>
      <p><span class="amount-rate"> Lượt đánh giá </span> <?php if($countrate) echo $countrate['count']; else echo 0; ?></p>
        <div class="clearfix"></div>
        <h5 style="color: black"> Bạn thấy truyện này thế nào? </h5>
       
     <div class ="rating-star" >
      <img
      onclick=<?php if(isset($_SESSION['id'] )) echo "rate(5,".$id.",".$id_user.")"; else echo "login()";?>  
      src=<?php if(isset($_SESSION['id'] )){
          if (round($thanhvientuongtac["rate"])== 5 ) 
          echo "\"../assets/img/mucthankydt/star-on.png\"" ;
          else echo  "\"../assets/img/mucthankydt/star-off.png\"";} 
          else echo  "\"../assets/img/mucthankydt/star-on.png\"";?> 
      title="tuyệt cú mèo" alt=1 id='star5' > 
      <img 
      onclick=<?php if(isset($_SESSION['id'] )) echo "rate(4,".$id.",".$id_user.")"; else echo "login()";?> 
     src=<?php if(isset($_SESSION['id'] )){
          if (round($thanhvientuongtac["rate"])>=4 ) 
          echo "\"../assets/img/mucthankydt/star-on.png\"" ;
          else echo  "\"../assets/img/mucthankydt/star-off.png\"";} 
          else echo  "\"../assets/img/mucthankydt/star-on.png\"";?> 
       title="coi bộ hay đó chứ" alt=2 id='star4'>
      <img 
      onclick=<?php if(isset($_SESSION['id'] )) echo "rate(3,".$id.",".$id_user.")"; else echo "login()";?>  
     src=<?php if(isset($_SESSION['id'] )){
          if (round($thanhvientuongtac["rate"])>= 3 ) 
          echo "\"../assets/img/mucthankydt/star-on.png\"" ;
          else echo  "\"../assets/img/mucthankydt/star-off.png\"";} 
          else echo  "\"../assets/img/mucthankydt/star-on.png\"";?> 
      title="ờ, cũng ổn" alt=3 id='star3'>
      <img onclick=<?php if(isset($_SESSION['id'] )) echo "rate(2,".$id.",".$id_user.")"; else echo "login()";?> 
       src=<?php if(isset($_SESSION['id'] )){
          if (round($thanhvientuongtac["rate"])>= 2 ) 
          echo "\"../assets/img/mucthankydt/star-on.png\"" ;
          else echo  "\"../assets/img/mucthankydt/star-off.png\"";} 
          else echo  "\"../assets/img/mucthankydt/star-on.png\"";?> 
        title="khá tệ" alt=4 id='star2'>
      <img onclick=<?php if(isset($_SESSION['id'] )) echo "rate(1,".$id.",".$id_user.")"; else echo "login()";?>  src="../assets/img/mucthankydt/star-on.png" title="quá trời tệ" alt=5 id='star1'>
          <div class="clear-fix"></div>
  </div>
          <div class="clearfix"></div>
  </div>

  <div class="clearfix"></div>


        </div>
        <div class="clearfix"></div>
           <!--============CONTENT- NAVIGATOR ============--->
          <div class="content-nav">
          <ul>
          <li><a class="detail-book-tab" onclick="detailInfo()">Thông tin chi tiết</a></li>
          <?php 
          $sqlsochuong = "select count(*) as cnt from chuong where id_truyen=".$truyen["id"];
          $rst = $conn->query($sqlsochuong);
          $sochuong = $rst -> fetch_assoc();
          ?>
          <li><a class="catalog-book-tab" onclick="detailCatalog()">Danh sách chương (<span class="catalog-num"><?php echo $sochuong["cnt"];?></span> chương)</a></li>
          <li><a class="comment-book-tab" onclick="detailComment()" href="#comment-area">Bình luận</a></li>
          <div class="clearfix"></div>
  </ul>
        <div class="clearfix"></div>
  </div>
        <div class="clearfix"></div>
       <!--============INFO_BOOK_TAB=====================--->
   <div class="info-book-tab">
        <div class="right-col-medi">
         <div class="author-medi">
       <div class="author-img-medi">
   <img  src=<?php echo "../assets/img/authur/".$truyen['anhtacgia'] ?>></img>
  </div>
<ul class="same-author-medi">
   <div class="name-author-medi"> <h5><b> <?php echo $truyen['tentacgia']?></b></h5></div>
   <p> Truyện cùng tác giả </p>
   <?php 
   $sql_sameauthur = "select id, ten from truyen where id_tacgia = ".$truyen["id_tacgia"]." and id != ".$id." limit 0,5";
  $rst= $conn->query($sql_sameauthur);
  while($sameauthur = $rst->fetch_assoc()){
     echo "<li><a href=\"chitiettruyen.php?id=".$sameauthur["id"]."\">".$sameauthur["ten"]."</a></li>";
  }
   ?>
</ul>
  <div class="clearfix"></div>
  </div>
         <div class="clearfix"></div>
       </div>
       <!--------------LEFT_COL----------------------------->
      <div class="left-col">
       <!-------------Info-detail----------------------------->
          <?php include('info_detail.php')?>
       <!------------End-Info-detail----------------------->
       <!------------YOU-MAY-LIKE-------------------------->
         <?php include('youmaylike.php')?>
   <!------------END OF YOU MAY LIKE--------------->
     <!------------COMMENT_SECTION--------------->
         <?php include('comment.php')?>
  </div>
       <!------------END-LEFT-COL----------------------->
        <!----------RIGHT-COL---------->
      <div class="right-col">
        <div class="author">
       <div class="author-img">
   <img  src=<?php echo "../assets/img/authur/".$truyen["anhtacgia"]?>></img>
  </div>
 <h5><b> <?php echo $truyen["tentacgia"]?></b></h5>
  <p> Truyện cùng tác giả </p>
<ul class="same-author">
     <?php 
   $sql_sameauthur = "select id, ten from truyen where id_tacgia = ".$truyen["id_tacgia"]." and id != ".$id." limit 0,5";
  $rst= $conn->query($sql_sameauthur);
  while($sameauthur = $rst->fetch_assoc()){
     echo "<li><a href=\"chitiettruyen.php?id=".$sameauthur["id"]."\">".$sameauthur["ten"]."</a></li>";
  }
   ?>
</ul>
  </div>
      </div>
  <div class ="clearfix"></div>
  <!--------END OF RIGHTCOL -------->

   </div>
     <!--------Catalog List ------------>
    <?php include('chapterlist.php');?>

      <!--------------END OF INFO BOOK TAB -------------->
    </div>
 <div class=footer>
  <div>
    <li><a>GIỚI THIỆU</a> </li>
    <li><a>LIÊN HỆ </a></li>
    <li><a>ĐIỀU KHOẢN DỊCH VỤ</a> </li>
    <li><a>QUY ĐỊNH RIÊNG TƯ </a></li>
    <li><a>VẤN ĐỀ BẢN QUYỀN</a> </li>
    <div class="clearfix"></div>
    </div>
    </div>


</body>

                   </html>
