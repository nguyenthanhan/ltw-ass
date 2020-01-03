<?php
require_once "system/config.php";

// Initialize the session
session_start();
$truyen = "";
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) { } else { }
if(isset($_POST["searchbtn"])){
  $key = str_replace('','%20',$_POST["searchtxt"]);
  header('location: ../src/search.php?type=name&key='.$key );
}
?>
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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/custom.css">
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand truot" href="/index.php">
          <i class="material-icons">home</i>Trang chủ </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
              <i class="material-icons">view_headline</i> Danh mục
            </a>
            <div class="dropdown-menu dropdown-with-icons ">
              <a href="#hottrongtuan" class="dropdown-item">
                <i class="material-icons">layers</i> Truyện mới hot
              </a>
              <a href="#docnhieunhat" class="dropdown-item">
                <i class="material-icons">layers</i> Truyện xem nhiều
              </a>
              <a href="#truyenmoinhat" class="dropdown-item">
                <i class="material-icons">layers</i> Truyện mới
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown">
              <i class="material-icons">apps</i> Thể loại
            </a>
            <div class="dropdown-menu dropdown-with-icons ">
              <a href="../src/search.php?type=kind&key=Tien%20Hiep" class="dropdown-item">
                <i class="material-icons">layers</i> Tiên Hiệp
              </a>
              <a href="../src/search.php?type=kind&key=Huyen%20Huyen" class="dropdown-item">
                <i class="material-icons">layers</i> Huyền Huyễn
              </a>
              <a href="../src/search.php?type=kind&key=Vo%20Hiep" class="dropdown-item">
                <i class="material-icons">layers</i> Võ hiệp
              </a>
              <a href="../src/search.php?type=kind&key=Khoa%20Huyen" class="dropdown-item">
                <i class="material-icons">layers</i> Khoa Huyễn
              </a>
              <a href="../src/search.php?type=kind&key=Ky%20Huyen" class="dropdown-item">
                <i class="material-icons">layers</i> Kỳ Huyễn
              </a>
              <a href="../src/search.php?type=kind&key=Lich%20Su" class="dropdown-item">
                <i class="material-icons">layers</i> Lịch sử
              </a>
            </div>
          </li>
          <?php
          if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo '<li class="nav-item "  id="login">
              <a class="nav-link" href="./src/login-page.php">
                <i class="material-icons">perm_identity</i> Đăng nhập
              </a>
            </li>';
          } else {
            echo '<li class="nav-item">
            <a class="nav-link" href="./src/notifications.php">
              <i class="material-icons">email</i> Thông báo
            </a>
          </li>

          <li class="dropdown nav-item ">
            <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown">
              <i class="material-icons">account_box</i> Tài khoản
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-with-icons">
              <h6 class="dropdown-header"><?php echo htmlspecialchars($_SESSION["username"]); ?></h6>
              <div class="dropdown-divider"></div>

              <a href="./src/dashboard.php" class="dropdown-item">
                <i class="material-icons">dashboard</i>Thông tin chung</a>
              <a href="./src/user.php" class="dropdown-item">
                <i class="material-icons">account_circle</i>Cá nhân</a>
              <a href="./src/setting.php" class="dropdown-item">
                <i class="material-icons">settings</i>Cài đặt</a>
                <div class="dropdown-divider"></div>';
         
            $user_id = $_SESSION["id"];
          $sql = "select  * from admin where id_taikhoan =".$user_id;
          if ($result = mysqli_query($link, $sql)) {
              if (mysqli_num_rows($result) > 0) {
                 echo
                      '<a href="../admin/index.php" class="dropdown-item">
                      <i class="material-icons">cloud_upload</i>Cập nhật truyện</a> <div class="dropdown-divider"></div> ';
                  }
          }

              echo '

              <a href="/logout.php" class="dropdown-item">
                <i class="material-icons">power_settings_new</i>Đăng xuất</a>
            </div>
          </li>';
          }

          ?>

          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">
              <i class="material-icons">search</i> Tìm kiếm
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./assets/img/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Tàng kinh các</h1>
            <h3>Đây là sân chơi mở và free cho cộng đồng fan truyện chữ. Chúc các bạn có những giây phút thư giãn thoải
              mái sau giờ làm việc và học tập căng thẳng.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">

    <!--         carousel  -->
    <div class="section pd-bottom pd-top" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-10 mr-auto ml-auto">
            <h2>Truyện đang hot</h2>
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="./dist/mucthanky_dt.html"><img class="d-block w-100" src="./assets/img/bg2.jpg" alt="First slide"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h3 class="h3">
                        <a href="./dist/mucthanky_dt.html"> <i class="bg-white title-carousel-card"> Mục thần ký </i>
                        </a>
                      </h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="index.php"><img class="d-block w-100" src="./assets/img/bg7.jpg" alt="Second slide"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h3 class="h3">
                        <a href="#"><i class="bg-white title-carousel-card"> Thư viện Thiên Đạo </i></a>
                      </h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="index.php"><img class="d-block w-100" src="./assets/img/bg80.jpg" alt="Third slide"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h3 class="h3">
                        <a href="#"> <i class="bg-white title-carousel-card"> Thục thiên mộng hoa lục </i> </a>
                      </h3>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
    <!--         end carousel -->
    <div class="section section-tabs pd-bottom pd-top">
      <div class="container">
        <div class="dropdown-divider" id="docnhieunhat"></div>

        <!--                nav tabs	             -->
        <div id="nav-tabs">

          <div class="row">
            <div class="col-md-12">
              <h3>
                <small>Đọc nhiều nhất</small>
              </h3>
              <!-- Tabs with icons on Card -->
              <div class="card card-nav-tabs">
                <div class="card-header card-header-info">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#nhieuprofile" data-toggle="tab">
                            Tất cả
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#nhieumessages" data-toggle="tab">
                            Khoa huyễn
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#nhieusettings" data-toggle="tab">
                            Võ hiệp
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#nhieuhiendai" data-toggle="tab">
                            Kỳ huyễn
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#nhieutrinhtham" data-toggle="tab">
                            Lịch sử
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="nhieuprofile">

                      <div class="row">

                        <?php
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                        ?>

                      </div>

                      <button class="btn btn-info btn-sm">Xem thêm...</button>

                    </div>
                    <div class="tab-pane" id="nhieumessages">
                      <div class="row">
                      <?php
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 3 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>
                    </div>
                    <div class="tab-pane" id="nhieusettings">
                      <div class="row">
                      <?php
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 5 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>
                    </div>
                    <div class="tab-pane" id="nhieuhiendai">
                      <div class="row">
                        <?php 
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 1 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>
                    </div>
                    <div class="tab-pane" id="nhieutrinhtham">
                      <div class="row">
                      <?php 
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 7 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>

                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs with icons on Card -->
            </div>
          </div>

        </div>
        <div class="dropdown-divider" id="hottrongtuan"></div>

<!--                nav tabs	             -->
<div id="nav-tabs">

<div class="row" >
  <div class="col-md-12">
    <h3 \>
      <small>Hot trong tuần</small>
    </h3>
    <!-- Tabs with icons on Card -->
    <div class="card card-nav-tabs">
      <div class="card-header card-header-info">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#hotprofile" data-toggle="tab">
                  Tất cả
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hotmessages" data-toggle="tab">
                  Khoa huyễn
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hotsettings" data-toggle="tab">
                  Võ hiệp
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hothiendai" data-toggle="tab">
                  Kỳ huyễn
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hottrinhtham" data-toggle="tab">
                  Lịch sử
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body ">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="hotprofile">

            <div class="row">

              <?php
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }

              ?>

            </div>

            <button class="btn btn-info btn-sm">Xem thêm...</button>

          </div>
          <div class="tab-pane" id="hotmessages">
            <div class="row">
            <?php
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 3 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }

              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>
          </div>
          <div class="tab-pane" id="hotsettings">
            <div class="row">
            <?php
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 5 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }

              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>
          </div>
          <div class="tab-pane" id="hothiendai">
            <div class="row">
              <?php 
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 1 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>
          </div>
          <div class="tab-pane" id="hottrinhtham">
            <div class="row">
            <?php 
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 7 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>

          </div>
        </div>
      </div>
    </div>
    <!-- End Tabs with icons on Card -->
  </div>
</div>

</div>

        <div class="dropdown-divider" id="truyenmoinhat"></div>

 <!--                nav tabs	             -->
<div id="nav-tabs">

<div class="row">
  <div class="col-md-12">
    <h3>
      <small>Truyện mới nhất</small>
    </h3>
    <!-- Tabs with icons on Card -->
    <div class="card card-nav-tabs">
      <div class="card-header card-header-info">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#chonlocprofile" data-toggle="tab">
                  Tất cả
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#chonlocmessages" data-toggle="tab">
                  Khoa huyễn
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#chonlocsettings" data-toggle="tab">
                  Võ hiệp
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#chonlochiendai" data-toggle="tab">
                  Kỳ huyễn
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#chonloctrinhtham" data-toggle="tab">
                  Lịch sử
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body ">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="chonlocprofile">

            <div class="row">

              <?php
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }

              ?>

            </div>

            <button class="btn btn-info btn-sm">Xem thêm...</button>

          </div>
          <div class="tab-pane" id="chonlocmessages">
            <div class="row">
            <?php
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 3 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }

              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>
          </div>
          <div class="tab-pane" id="chonlocsettings">
            <div class="row">
            <?php
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 5 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }

              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>
          </div>
          <div class="tab-pane" id="chonlochiendai">
            <div class="row">
              <?php 
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 1 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>
          </div>
          <div class="tab-pane" id="chonloctrinhtham">
            <div class="row">
            <?php 
              // Attempt select query execution
              $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 7 LIMIT 6";
              if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    echo '
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-text">
                    <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                      <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                      <h4 class="card-title">' . $row['ten'] . '</h4>
                    </a>
                    <a href="#link">
                      <p class="card-category">
                      ' . $row['tentg'] . '</p>
                    </a>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                    </div>
                  </div>
                </div>
              </div>';
                  }
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              ?>
            </div>
            <button class="btn btn-info btn-sm">Xem thêm...</button>

          </div>
        </div>
      </div>
    </div>
    <!-- End Tabs with icons on Card -->
  </div>
</div>

</div>
        <div class="dropdown-divider"></div>

        <!--                nav tabs	             -->
        <div id="nav-tabs">

          <div class="row">
            <div class="col-md-12">
              <h3>
                <small>Truyện khuyên đọc</small>
              </h3>
              <!-- Tabs with icons on Card -->
              <div class="card card-nav-tabs">
                <div class="card-header card-header-info">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#khuyenprofile" data-toggle="tab">
                            Tất cả
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#khuyenmessages" data-toggle="tab">
                            Khoa huyễn
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#khuyensettings" data-toggle="tab">
                            Võ hiệp
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#khuyenhiendai" data-toggle="tab">
                            Kỳ huyễn
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#khuyentrinhtham" data-toggle="tab">
                            Lịch sử
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="khuyenprofile">

                      <div class="row">

                        <?php
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                        ?>

                      </div>

                      <button class="btn btn-info btn-sm">Xem thêm...</button>

                    </div>
                    <div class="tab-pane" id="khuyenmessages">
                      <div class="row">
                      <?php
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 3 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>
                    </div>
                    <div class="tab-pane" id="khuyensettings">
                      <div class="row">
                      <?php
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 5 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>
                    </div>
                    <div class="tab-pane" id="khuyenhiendai">
                      <div class="row">
                        <?php 
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 1 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>
                    </div>
                    <div class="tab-pane" id="nhieutrinhtham">
                      <div class="row">
                      <?php 
                        // Attempt select query execution
                        $sql = "SELECT truyen.id, truyen.ten, truyen.luotxem, truyen.anh, tacgia.ten AS tentg FROM truyen INNER JOIN tacgia WHERE truyen.id_tacgia = tacgia.id AND truyen.id_theloai = 7 LIMIT 6";
                        if ($result = mysqli_query($link, $sql)) {
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                              echo '
                        <div class="col-md-4">
                          <div class="card card-chart">
                            <div class="card-header card-header-text">
                              <a href="/dist/chitiettruyen.php?id='.$row["id"].'">
                                <img src="/assets/img/front-book/' . $row['anh'] . '" alt="No image" height="280" width="210" class="img-thumbnail">
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="/dist/chitiettruyen.php?id=' . $row['id'] . '">
                                <h4 class="card-title">' . $row['ten'] . '</h4>
                              </a>
                              <a href="#link">
                                <p class="card-category">
                                ' . $row['tentg'] . '</p>
                              </a>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons">access_time</i>' . $row['luotxem'] . ' lượt xem
                              </div>
                            </div>
                          </div>
                        </div>';
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else {
                            echo "No records matching your query were found.";
                          }
                        } else {
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                      </div>
                      <button class="btn btn-info btn-sm">Xem thêm...</button>

                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs with icons on Card -->
            </div>
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
          <a href="https://www.twitter.com">
            <button id="twitter" class="btn btn-raised btn-twitter sharrre">
              <i class="fa fa-twitter"></i> Tweet
            </button>
          </a>
          <button id="facebook" class="btn btn-raised btn-facebook sharrre">
            <i class="fa fa-facebook-square"></i> Share
          </button>
          <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
            <i class="fa fa-google-plus"></i> Share
          </button>
          <a id="github" href="https://github.com/creativetimofficial/material-kit" target="_blank" class="btn btn-raised btn-github">
            <i class="fa fa-github"></i> Star
          </a>
        </div>
      </div>
    </div>


  </div>
  <!-- Classic Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hộp thoại tìm kiếm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
            <div class="form-group">
              <input type="text" name="searchtxt" class="form-control" placeholder="Nhập tên truyện ">
              <div class="model-footer">
              <input type="submit" name="searchbtn" class="btn btn-link" value="Tìm kiếm truyện">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
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
        </script>,
        <a href="#" target="_blank">Creative Tim</a>.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script src="./assets/js/custom.js"></script>

  <?php mysqli_close($link); ?>
</body>

</html>