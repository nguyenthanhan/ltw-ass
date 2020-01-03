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
 
  
<style >
input[type=text] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin: 10px auto;
}
select {
width:50%;
  margin: 10px 0;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}input[type=file] {
  margin: 10px 0;
}
textarea {
width: 100%;
height:200px;}
.container{
width:500px;
}
input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>
<body>
<div class = "container">

<h1>Thêm Truyện Mới </h1>
<?php 
include("../dist/config.php");
$sql_theloai ="select * from theloai";
$querytheloai = $conn->query($sql_theloai);

$sql_tacgia ="select * from tacgia";
$querytacgia = $conn->query($sql_tacgia);
$tacgia= $querytacgia->fetch_assoc();
session_start();
$id_taikhoan  = $_SESSION["id"];
$sql = "select * from admin where id_taikhoan = ".$id_taikhoan;
$queryadmin = $conn->query($sql);
$admin= $queryadmin->fetch_assoc();
?>

<?php
if (isset($_POST['up']) ) {
    if(isset($_FILES['fileUpload'])){
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../assets/img/front-book/' . $_FILES['fileUpload']['name']);
        $ten =$_POST["ten"];
        $theloai =$_POST["theloai"];
        $frontbook =$_FILES['fileUpload']['name'];
        $year =$_POST["year"];
        $tacgia =$_POST["tacgia"];
        $trangthai =$_POST["trangthai"];
        $mota =mysqli_real_escape_string($conn,$_POST["mota"]);
         $sql_insertbook ="INSERT INTO `truyen` (`ten`, `id_tacgia`,
            `id_theloai`, `id_admin`, `trangthai`, `anh`, `namxb`, `mota`)
        VALUES ('".$ten."','".$tacgia."','".$theloai."','".$admin["id"]."','".$trangthai."','".$frontbook."','".$year."','".$mota."')";
   
         $result = $conn-> query($sql_insertbook);
        if($result) echo "them duoc";
            else echo "them khong duoc";
    }
    }
    
}
?>
	
<form action ="themtruyen.php" method="post" enctype="multipart/form-data">
	Tên truyện: <input type="text" name="ten"><br>
	Thể loại:<br>
	 <select name="theloai" >
	 <?php 
	 while($theloai= $querytheloai->fetch_assoc()){
	     echo " <option value=".$theloai["id"],">".$theloai["ten"]."</option>";
	 }
	 ?>
	 </select><br>
	Ảnh: <input type="file" name="fileUpload"><br>
    Năm xuất bản: <input type="text" name="year"><br>
    Tác giả: <br>
    <select name="tacgia" >
	 <?php 
	 while($tacgia= $querytacgia->fetch_assoc()){
	     echo " <option value=".$tacgia["id"],">".$tacgia["ten"]."</option>";
	 }
	 ?>
	 </select><br>
	Mô tả:<br> <Textarea type="text" name="mota"></textarea><br>
	Trạng thái: <br>
	<select name= "trangthai">
	<option value="0"> Chưa hoàn thành </option>
	<option value="1"> Hoàn thành </option>
	</select>
	<br>
	<input type="submit" value="Thêm" name="up" >
</form>
	<a href= "../admin/index.php" id="">
   <input type="submit" value ="Tro ve" action="../admin/index.php">
   </a>
</div>
</body>