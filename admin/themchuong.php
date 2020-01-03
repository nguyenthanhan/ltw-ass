<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    Mục thần ký
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

</style>
</head>
<body>
<div class = "container">
<h1>Thêm Chương Mới </h1>
<?php 
include("../dist/config.php");

?>

<?php
$id=$_GET['id'];
if (isset($_POST['up']) ) {    
    $ten =$_POST["ten"];
    $so =$_POST["so"];
    $noidung =mysqli_real_escape_string($conn,$_POST["noidung"]);
    $sql_chuong ="INSERT INTO `chuong` (`noidung`, `id_truyen`, `so`, `ten`) VALUES ('".$noidung."', '".$id."', '".$so."', '".$ten."')";
    $result = $conn-> query($sql_chuong);
    if($result){
        header('Location: chuong.php?state=1&id='.$id);
    }
    else 
    {
        header('Location: chuong.php?state=2&id='.$id);
    }
    
}
?></html>
<h3> Thêm Chương</h3>
<form action ="#" method="post" enctype="multipart/form-data">
    Số : <input type="text" name="so"><br>
	Tên: <input type="text" name="ten"><br>
	Nội dung:<br> <Textarea type="text" name="noidung"></textarea><br>
	<input type="submit" value="Thêm" name="up" >
</form>
<a href= <?php echo "../admin/chuong.php?state=0&id=".$id ?> id="">
   <input type="submit" value ="Tro ve" action="../admin/index.php">
   </a>
</div>
</body>