<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
  Cập nhật chương
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
margin:10px 0;
padding: 20px;
width: 100%;
height:2000px;}
.container{
width:1000px;
}
input[type=submit]:hover {
  background-color: #45a049;
}
}
</style>
</head>
<body>
<div class = "container">
<h1>Cập nhật chương </h1>
<?php 
include("../dist/config.php");
$admin =  1;
$id = $_GET["id"];
$sql_chuong = "select * from chuong where id =".$id;
$querychuong = $conn->query($sql_chuong);
$chuong = $querychuong->fetch_assoc();
?>

<?php
if (isset($_POST['up']) ) {
    $ten =$_POST["ten"];
    $so =$_POST["so"];
    $noidung =mysqli_real_escape_string($conn,$_POST["noidung"]);
    $sql_chuong ="UPDATE chuong 
set noidung = '".$noidung."', so = '".$so."',ten='".$ten."'
WHERE id = ".$id;
    $result = $conn-> query($sql_chuong);
    if($result){
        header('Location: chuong.php?state=3&id='.$chuong['id_truyen']);
    }
    else
    {
        header('Location: chuong.php?state=4&id='.$chuong["id_truyen"]);
    }
    
}
?>
	
<form action ="#" method="post" enctype="multipart/form-data">
    Số : <input type="text" name="so" value=<?php echo "\"".$chuong["so"]."\"";?>> <br>
	Tên: <input type="text" name="ten" value=<?php echo "\"".$chuong["ten"]."\"";?>><br>
	Nội dung:<br> <Textarea type="text" name="noidung"><?php echo $chuong["noidung"];?></textarea><br>
	<input type="submit" value="Sửa" name="up" >
</form>
<a href= <?php echo "../admin/index.php" ?> id="">
   <input type="submit" value ="Tro ve" action="">
   </a>
</div>
</body>