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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="../assets/css/search.css">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/search.js"></script>
</head>

<body>
  <!-- partial:index.partial.html -->

  <head>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'>
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head> 
  <body>
<?php 
include('../dist/config.php');
session_start();
$sqltheloai = 'select * from theloai';
$list_theloai = $conn->query($sqltheloai);
$index_theloai = 0;
$id_user = 2;
$sql_user = " select thanhvien.id as id_thanhvien, thanhvien.level as level,taikhoan.id as id_taikhoan,taikhoan.avatar,taikhoan.username,taikhoan.password,taikhoan.ten from thanhvien 
join taikhoan on thanhvien.id_taikhoan = taikhoan.id
where thanhvien.id=".$id_user ;
$rst = $conn->query($sql_user);
$userinfo = $rst->fetch_assoc();
?>
  <div class="nav-medimum">
    <ul class="menu">
      <div class="hompage-medium"><a href= ""></a>Trang chủ</a></div>
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
      <i class="fas fa-bars"></i>
    </div>
      <div id="nav">
<ul>
  <li><a id="homepage" href="../index.php">Trang chủ </a></li>
<?php
$rst = $conn->query('select * from theloai limit 0,5');
while($row = $rst->fetch_assoc()){
?>
  <li><a href=<?php echo "search.php?type=kind&key=".str_replace(' ', '%20', $row["ten"])?>><?php echo $row['ten'] ?></a></li>
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
      <a href=<?php echo "..\search.php?type=kind&key=".str_replace(' ', '%20', $row["ten"])?>><?php echo $row['ten'] ?></a>
      <?php }?>
  </div>
  </li>
  </ul>
    </div>
    
    <div id="search" class="fr">
      <ul>
        <li>
          <form id="frmURL" action="" method="get">
            <input id="search-input" type="text" autocomplete="off" placeholder="tìm kiếm">
            </input>
            <label class="icon-search" onclick ="searchtextnav()">
              <i class="fas fa-search"></i>
            </label>
          </form>
        </li>
        <li class="account">
          <a href=<?php if(isset($_SESSION['id'] )) echo "../src/dashboard.php"; else echo "../src/login-page.php" ;?>>
            <i> Tài khoản </i>
            <i class="far fa-user"></i>
          </a>
        </li>
    </div>
  </div>
  <!-- container  -->
  
  
  <div class="background-top"></div>
  <div class="link-area">
    <form class="search-center" action="#" method="get">
    <input type = "text" id="searchtext"></input>
    <label onclick = "search_respond()"><i class="fas fa-search"></i></label>
    </form>
  </div>
  <div id="border-shadow">
  </div>
  <div id="content-wrap">
 
 
    <?php 
    $key= $_GET['key'];
    $type= $_GET['type'];
    if($type == "name"){
    $sql_searchname=
    "Select truyen.id,truyen.ten as tentruyen,truyen.trangthai,truyen.anh as anhbia,truyen.luotxem,truyen.mota,tacgia.ten as tentacgia,theloai.ten as theloai from truyen
inner join tacgia on  truyen.id_tacgia = tacgia.id
INNER JOIN theloai on   truyen.id_theloai = theloai.id
where truyen.ten like '%".$key."%'";}
    else if($type == "author")
    {
        $sql_searchname=
        "Select truyen.id,truyen.ten as tentruyen,truyen.trangthai,truyen.anh as anhbia,truyen.luotxem,truyen.mota,tacgia.ten as tentacgia,theloai.ten as theloai from truyen
        inner join tacgia on  truyen.id_tacgia = tacgia.id
        INNER JOIN theloai on   truyen.id_theloai = theloai.id
        where tacgia.ten like '%".$key."%'";
    }
    else if($type == "kind"){
        $sql_searchname = "Select truyen.id,truyen.ten as tentruyen,truyen.trangthai,truyen.anh as anhbia,truyen.luotxem,truyen.mota,tacgia.ten as tentacgia,theloai.ten as theloai from truyen
        inner join tacgia on  truyen.id_tacgia = tacgia.id
        INNER JOIN theloai on   truyen.id_theloai = theloai.id
        where theloai.ten like '%".$key."%'";
    }
    else if($type == "tag"){
        $sql_searchname = "Select truyen.id,truyen.ten as tentruyen,truyen.trangthai,truyen.anh as anhbia,truyen.luotxem,truyen.mota,tacgia.ten as tentacgia,theloai.ten as theloai from tag
        INNER JOIN truyen on truyen.id = tag.id_truyen
        inner join tacgia on  truyen.id_tacgia = tacgia.id
        INNER JOIN theloai on   truyen.id_theloai = theloai.id
        where tag.tag like '%".$key."%'";
    }
    
    
    $rst = $conn->query($sql_searchname)  ;
    if(!$rst){
        echo "
<div class=\"book-infomation\">
<h3>Không có kết quả nào được trả về! </h3>
</div>
";
    }
    else{
    while($search = $rst->fetch_assoc()){
   echo "
    <div class=\"book-infomation\">
      <div class=\"img-book\">
      <img src=\"../assets/img/front-book/".$search['anhbia']."\">
      </div> ";
     // <!--==============INFOMATION OF BOOK======================= -->
      echo "<div class=\"info-book\">";
      echo " <h1>".$search["tentruyen"]."</h1>";
       // <!-------------------TAG------------------------------------->
      echo " <p class=\"tag\">
          <a class=\"bluetag\">".$search["tentacgia"]."</a>
          <span class=\"bluetag\"> Đã Hoàn Thành </span>
          <a class=\"redtag\">".$search["theloai"]." </a>
          <div class=\"clearfix\"></div>
        </p>";
       // <!----------------INTRO----------------------------------->
        echo "<p class=\"intro\">".
            substr($search["mota"], 0, 65)."..
        </p>";
        //<!-----------------TRAFFIC---------------------------->
            $sql_tuongtac=
            "select sum(dexuat) as dexuat, SUM(theodoi) as theodoi, SUM(yeuthich) as yeuthich,AVG(rate) as rate from truyen_thanhvien group by id_truyen having id_truyen=";
            $rstsearch = $conn->query($sql_tuongtac.$search["id"]);
            $tuongtac = $rstsearch->fetch_assoc();
            
       echo "<div class=\"traffic-medi\">
          <div class=\"wrap-traffic-medi\">
            <li>
              <div class=\"like\">";
              if($tuongtac["yeuthich"]) echo $tuongtac["yeuthich"]; else echo 0 ;
              echo "</div>
              <p>Yêu thích</p>
            </li>
            <li>
              <div class=\"view\">";
              if($search["luotxem"]) echo $search["luotxem"]; else echo 0 ;
              echo "</div>
              <p>Lượt xem</p>
            </li>
            <li>
                <div class=\"follow\">";
              if($tuongtac["theodoi"]) echo $tuongtac["theodoi"]; else echo 0 ;
              echo "</div>
              <p>Theo dõi</p>
            </li>
            <li>
              <  <div class=\"nominate\">";
              if($tuongtac["dexuat"]) echo $tuongtac["dexuat"]; else echo 0 ;
              echo "</div>
              <p>Đề xuất</p>
            </li>
            <div class=\"clear-fix\"></div>
          </div>
          <div class=\"clear-fix\"></div>
        </div>
        <div class=\"clear-fix\"></div>
        <p class=\"traffic\">
          <em class=\"like\">";
          if($tuongtac["yeuthich"]) echo $tuongtac["yeuthich"]; else echo 0 ;
          echo "</em>
          <cite>Yêu thích</cite>
          <i>|</i>
          <em class=\"view\">";
          if($search["luotxem"]) echo $search["luotxem"]; else echo 0 ;
          echo "</em>
          <cite>Lượt xem</cite>
          <i>|</i>
          <em class=\"follow\">";
          if($tuongtac["theodoi"]) echo $tuongtac["theodoi"]; else echo 0 ;
          echo "</em>
          <cite>Theo dõi</cite>
          <i>|</i>
          <em class=\"nominate\">";
          if($tuongtac["dexuat"]) echo $tuongtac["dexuat"]; else echo 0 ;
          echo "</em>
          <cite>Đề xuất </cite>
        </p>
        <div class=\"clear-fix\"></div>
      </div>
<div class = \"btngroup\">";
          $sqlrst = "SELECT * FROM `chuong` WHERE id_truyen= ".$search["id"]." ORDER by so ASC limit 0,1";
          $rstchuongdau = $conn->query($sqlrst);
          $chuongdau = $rstchuongdau->fetch_assoc();
          if($chuongdau["id"]){
     echo "<a class=\"btn btn-primary btn-lg btn-3d button\" href=\"../dist/doctruyen.php?id=".$chuongdau["id"]."\">Đọc truyện</a>";}
     echo "<a class=\"btn btn-primary btn-lg btn-3d likebtn\" href=\"../dist/chitiettruyen.php?id=";
     echo $search["id"]."\">Chi tiết</a>
  </div>
    <div class=\"clearfix\"></div>

  <div class = \"btngroup-medi\">";
     if($chuongdau["id"]){
         echo "<a class=\"btn btn-primary btn-lg btn-3d button\" href=\"../dist/doctruyen.php?id=".$chuongdau["id"]."\">Đọc truyện</a>";}
     echo "<a class=\"btn btn-primary btn-lg btn-3d likebtn\" href=\"../dist/chitiettruyen.php?id=";
     echo $search["id"]."\">Chi tiết</a>
  </div>";
    //<!--============INFO_BOOK_TAB=====================--->

    //<!--------------END OF INFO BOOK TAB -------------->

  echo "</div>";
    };
    }
    ?>
 

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
</div>
</body>
<!-- partial -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src="../assets/js/custom.js"></script>

</body>

</html>
