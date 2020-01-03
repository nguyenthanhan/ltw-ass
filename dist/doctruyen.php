<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    Đọc truyện online
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <!-- <link rel="stylesheet" href="./assets/bootstrap-4.3.1-dist/css/bootstrap.min.css"> -->
  <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body class="index-page sidebar-collapse">
<?php 
session_start();
include("config.php");
$id_chapter = $_GET['id'];
$sql_chapter ="select * from chuong where id= ".$id_chapter;
$rst = $conn->query($sql_chapter);
$chapter = $rst->fetch_assoc();
$sql_truyen=
"Select truyen.id,truyen.ten as tentruyen,truyen.id_tacgia,truyen.id_theloai,truyen.trangthai,truyen.id_admin,truyen.anh as anhbia,truyen.namxb,truyen.luotxem,truyen.mota,tacgia.ten as tentacgia,tacgia.anh as anhtacgia,theloai.ten as theloai,admin.id_taikhoan from truyen
inner join tacgia on  truyen.id_tacgia = tacgia.id
INNER JOIN theloai on   truyen.id_theloai = theloai.id
INNER JOIN admin on truyen.id_admin  = admin.id
where truyen.id=";
$rst = $conn->query($sql_truyen.$chapter['id_truyen']);
$truyen = $rst->fetch_assoc();
$sql_nguoidang = "select * from taikhoan where id=".$truyen["id_taikhoan"];
$rst = $conn->query($sql_nguoidang);
$nguoidang = $rst->fetch_assoc();
$sql_chuongtiep = "select * from chuong  where so > (select so from chuong where id = ".$id_chapter." and id_truyen=".$truyen["id"]." ) and id_truyen= ".$truyen["id"]." order by so ASC limit 0,1 ";
$rst = $conn->query($sql_chuongtiep);
$chuongtiep = $rst->fetch_assoc();
$sql_chuongtruoc = "select * from chuong  where so < (select so from chuong where id = ".$id_chapter." and id_truyen=".$truyen["id"]." ) AND id_truyen= ".$truyen["id"]." order by so DESC limit 0,1";
$rst = $conn->query($sql_chuongtruoc);
$chuongtruoc = $rst->fetch_assoc();
?>
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" id="sectionsNav" >
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand truot" href="../index.php">
          <i class="material-icons">home</i>Trang chủ </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse">

        <ul class="navbar-nav ml-auto">

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown">
              <i class="material-icons">apps</i> Danh mục
            </a>
            <div class="dropdown-menu dropdown-with-icons ">
            <?php 
            $sql = "select * from theloai" ;
            $rst = $conn->query($sql);
            while ($theloai = $rst->fetch_assoc()){
                echo "<a href=\"../src/search.php?type=kind&key=".str_replace(' ', '%20', $theloai["ten"])."\" class=\"dropdown-item\">
                <i class=\"material-icons\">layers</i> ".$theloai["ten"]."
              </a>";
            }
             
              ?>
            </div>
          </li>
          <?php if(!isset($_SESSION['id'] )){
          echo "<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"../src/login-page.php\">
              <i class=\"material-icons\">perm_identity</i> Đăng nhập
            </a>
          </li>";
          }
          ?>
           <?php if(isset($_SESSION['id'] )){
          echo "<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"./src/notifications.php\">
              <i class=\"material-icons\">email</i> Thông báo
            </a>
          </li>";
           } ;?>
          <li class="dropdown nav-item">
            <a href=<?php if(!isset($_SESSION['id'] )) echo "\"../src/login-page.php\""; else echo "\"#\" data-toggle=\"dropdown\" ";?> class="dropdown-toggle nav-link " >
              <i class="material-icons">account_box</i> Trang cá nhân
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-with-icons">
              <h6 class="dropdown-header"><?php echo $_SESSION['username'];?></h6>
              <a href="../src/dashboard.php" class="dropdown-item">
                <i class="material-icons">dashboard</i>Tổng quan</a>
              <a href="../src/user.php" class="dropdown-item">
                <i class="material-icons">account_circle</i>Hồ sơ</a>
              <a href="../src/setting.php" class="dropdown-item">
                <i class="material-icons">settings</i>Cài đặt</a>
              <a href="../logout.php" class="dropdown-item">
                <i class="material-icons" >power_settings_new</i>Đăng xuất</a>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter page-header-height" data-parallax="true" >
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand" >
             <a href=<?php echo "chitiettruyen.php?id=".$truyen["id"] ?> class="link-color-white"> <h2> <?php echo $truyen["tentruyen"]?></h2></a>
             <h3>Tác giả: <a href="#" class="link-color-white"><?php echo $truyen["tentacgia"]?></a> </h3>
            <h3>Người đăng: <a href="#" class="link-color-white"></a><?php echo $nguoidang["ten"] ?> </h3><br>

          </div>
        </div>

      </div>

    </div>
  </div>
  <div class="main main-raised">
      
    <!--         carousel  -->

    <div class="section section-tabs pd-bottom pd-top">
      <div class="container">
        <div class="row justify-content-center">
          <button type="button" class="btn btn-success btn-rounded"><?php echo "chương ".$chapter["so"]?></button><br>

        </div>
        <div class="row justify-content-center">
          <h2><strong><?php echo  $chapter["ten"]?></strong></h2>
        </div>
        <!--                nav tabs	             -->
        <div class="col-md-12 justify-content-center">
          <br>
          <h3>
          <?php echo $chapter["noidung"]; ?>
                  <br>
          </h3>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12" >
            <ul class="pagination pagination-lg justify-content-center pagination-info" >
              <!--
              color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
          -->
              <li class="active page-item">
                <a href= <?php if($chuongtruoc["id"]) echo "doctruyen.php?id=".$chuongtruoc["id"]; else echo "#"; ?> class="page-link">Chương Trước</a>
              </li>
              <li class="active page-item">
              <a href=  <?php if($chuongtiep["id"]) echo "doctruyen.php?id=".$chuongtiep["id"]; else echo "#" ?> class="page-link">Chương Tiếp</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <!-- Error -->
    <div>
      <div id="relative-pos2">
        <span class="badge badge-pill badge-secondary">Phản hồi</span>
        <div class="transparent">
          <a href="#" class="nav-link border-white"><i class="material-icons">vertical_align_top</i></a>
          <!-- <div> <a href="#" class="nav-link border-white"><i class="material-icons">vertical_align_bottom</i> </a> -->
          </div>
        </div>
      </div>

      <div class="section section-download pd-top" id="downloadSection">
        <div class="container">
          <div class="sharing-area text-center">
            <button id="twitter" class="btn btn-raised btn-twitter sharrre">
              <i class="fa fa-twitter"></i> Tweet
            </button>
            <button id="facebook" class="btn btn-raised btn-facebook sharrre">
              <i class="fa fa-facebook-square"></i> Share
            </button>
            <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
              <i class="fa fa-google-plus"></i> Share
            </button>
            <a id="github" href="https://github.com/creativetimofficial/material-kit" target="_blank"
              class="btn btn-raised btn-github">
              <i class="fa fa-github"></i> Star
            </a>
          </div>
        </div>
      </div>


    </div>

    <!--  End Modal -->
    <footer class="footer" data-background-color="black">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="../index.php">
                Giới Thiệu
              </a>
            </li>
            <li>
              <a href="#blog">
                Liên Hệ
              </a>
            </li>
            <li>
              <a href="#license">
                Điều Khoản Dịch Vụ
              </a>
            </li>
            <li>
              <a href="#license">
                Quy Định Riêng Tư
              </a>
            </li>
            <li>
              <a href="#license">
                Vấn Đề Bản Quyền
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="#" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
    <script src="../assets/js/custom.js"></script>

</body>

</html>