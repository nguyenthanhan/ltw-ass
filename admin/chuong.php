<!DOCTYPE html>
<html>
<head>
	<title>Chuong</title>
	  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
   Admin
  </title>
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
	
	<style type="text/css">
body{
width:100%;
font-size:20px;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
 margin:10px 0;
}
input[type=submit]:hover {
  background-color: #45a049;
}
input[type=button] {
color:#3d3d3d;
background-color: #e8e8e8;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  border: 1px solid #3d3d3d;
  cursor: pointer;
  float: left;
 margin:10px 10px;
}
input[type=button]:hover {
}



table {
padding: 15px;
width:100%;
text-align: left;

}
tr,td{
margin: 15px;
padding: 8px;
cursor: pointer;
}
tr:nth-child(even) {background-color: #f2f2f2;}
th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 12px 36px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
</style>
<script type="text/javascript">

</script>
</head>
<body>
<a href= "../admin/index.php" id="">
   <input type="submit" value ="Trở về" action="">
   </a>
<?php $id =$_GET["id"];
$state = $_GET["state"];

?> 
	<table>
		<tr>
		<th>Số</th>
		<th>Tên</th>
		<th>Thời gian</th>
		<th>Action</th>
	</tr>
	<?php
	$admin = 1;
	
	include("../dist/config.php");
    echo "<a href='themchuong.php?id=".$id."'><input type = 'button' value='Thêm Chương'></a>";
    $sql_chuong = "SELECT noidung,so,ten,id,thoigian from chuong WHERE id_truyen=".$id." order by so ASC";

    $result = $conn-> query($sql_chuong);
    while($chuong= $result->fetch_assoc()){
    		echo "<tr>";
    		echo "<td>".$chuong["so"]."</a></td>";
    		echo "<td>".$chuong["ten"]."</td>";
    		echo "<td>".$chuong["thoigian"]."</td>";
    		echo "<td><a href='chinhsuachuong.php?id=".$chuong["id"]."'><input type='button' value='edit' ></a>";
    		echo "<a href='xoachuong.php?id=".$chuong["id"]."'><input type='button' value='delete'></td>";
    		"</tr>";
    	}
    	echo "</table>";
   
?>

</body>
</html>