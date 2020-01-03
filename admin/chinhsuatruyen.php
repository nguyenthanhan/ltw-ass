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
<h1>Cập nhật truyện </h1>
<?php 
include("../dist/config.php");
$sql_theloai ="select * from theloai";
$querytheloai = $conn->query($sql_theloai);

$sql_tacgia ="select * from tacgia";
$querytacgia = $conn->query($sql_tacgia);

$admin =  1;
$id = $_GET["id"];
$sql_truyen = "select * from truyen where id =".$id;
$querytruyen = $conn->query($sql_truyen);
$truyen = $querytruyen->fetch_assoc();
?>

<?php
if (isset($_POST['up']) ) {
    if(isset($_FILES['fileUpload'])){
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../assets/img/front-book/' . $_FILES['fileUpload']['name']);
        $sql_updateanh = "UPDATE `truyen` SET `anh` = ".$_FILES['fileUpload']['name']." WHERE `truyen`.`id` =".$id;
        $rstupanh = $conn->query($sql_updateanh);
    }
    }
    $ten =$_POST["ten"];
    $theloai =$_POST["theloai"];
    $year =$_POST["year"];
    $authur =$_POST["tacgia"];
    $trangthai =$_POST["trangthai"];
    $mota =mysqli_real_escape_string($conn,$_POST["mota"]);
    $sql_updatebook ="UPDATE `truyen` SET 
      ten = '".$ten.
      "', namxb = '".$year.
      "', id_admin = '".$admin.
      "', id_theloai = '".$theloai.
      "', mota = '".$mota.
      "', trangthai = '".$trangthai.
      "', id_tacgia = '".$authur.
      "' WHERE `truyen`.`id` =".$id;
    echo $sql_updatebook;
    $result = $conn-> query($sql_updatebook);
    if($result) echo "them duoc";
    else echo "them khong duoc";
    header('Location: index.php');
}
?>
	
<form action ="#" method="post" enctype="multipart/form-data">
	Tên truyện: <input type="text" name="ten" value=<?php echo "\"".$truyen['ten']."\"";?>><br>
	Thể loại:<br>
	 <select name="theloai" >
	 <?php 
	 while($theloai= $querytheloai->fetch_assoc()){
	     echo " <option ";
	     if($theloai["id"] == $id) echo "selected ";
         echo " value=".$theloai["id"],">".$theloai["ten"]."</option>";
	 }
	 ?>
	 </select><br>
	Ảnh: <input type="file" name="fileUpload"><br>
    Năm xuất bản: <input type="text" name="year" value=<?php echo "\"".$truyen["namxb"]."\""?>><br>
    Tác giả: <br>
    <select name="tacgia" >
	 <?php 
	 while($tacgia= $querytacgia->fetch_assoc()){
	     echo " <option ";
	     if($tacgia["id"]== $truyen["id_tacgia"]) echo "selected";
	     echo " value=".$tacgia["id"],">".$tacgia["ten"]."</option>";
	 }
	 ?>
	 </select><br>
	Mô tả:<br> <Textarea type="text" name="mota" defaultvalue = "aaaa"><?php echo $truyen["mota"] ?></textarea><br>
	Trạng thái: <br>
	<select name= "trangthai">
	<option value="0" <?php if($truyen["trangthai"] == 0) echo "selected" ;?>> Chưa hoàn thành </option>
	<option value="1" <?php if($truyen["trangthai"] == 1) echo "selected" ;?>> Hoàn thành </option>
	</select>
	<br>
	<input type="submit" value="Cập nhật" name="up" >
</form>
<a href= <?php echo "../admin/index.php" ?> id="">
   <input type="submit" value ="Tro ve" action="">
   </a>
</div>
</body>