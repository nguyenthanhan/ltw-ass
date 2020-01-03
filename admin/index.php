<!DOCTYPE html>
<html>
<head>
	<title>Lab6</title>
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
font-size:16px;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
 margin:10px 10px;

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
.themtruyen{
margin: 0 10px;
}
td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
</style>
<script type="text/javascript">
function confirm(id){
	if(confirm('Are you sure?')){
		location.href="../admin/xoatruyen.php?id="+id;
    }
	else 
	{return false;}
    
};
</script>
</head>
<body>


<div class = nav>
</div>


	<table>
		<tr>
		<th>Id</th>
		<th>Tên truyện</th>
		<th>Thể loại</th>
		<th>Ảnh</th>
		<th>Tác giả</th>
		<th>Năm xuất bản</th>
		<th>Trạng thái</th>
		<th>Action</th>
	</tr>
	<?php
	include("../dist/config.php");
	session_start();
	$id_taikhoan  = $_SESSION["id"];
	$sql = "select * from admin where id_taikhoan = ".$id_taikhoan;
	$queryadmin = $conn->query($sql);
	$admin= $queryadmin->fetch_assoc();
	
	include("../dist/config.php"); ?>
   <ul>
    <a href= "../index.php" id="">
   <input type="submit" value ="Trang chủ" action="themtruyen.php">
   </a>
   <a href= "themtruyen.php" id="">
   <input type="submit" value ="Thêm truyện" action="themtruyen.php">
   </a>
   
   </ul>
   <?php $sql_truyen = "Select truyen.id,truyen.ten as tentruyen,truyen.id_tacgia,truyen.id_theloai,truyen.trangthai,truyen.id_admin,truyen.anh as anhbia,truyen.namxb,truyen.luotxem,truyen.mota,tacgia.ten as tentacgia,tacgia.anh as anhtacgia,theloai.ten as theloai,admin.id_taikhoan from truyen
inner join tacgia on  truyen.id_tacgia = tacgia.id
INNER JOIN theloai on   truyen.id_theloai = theloai.id
INNER JOIN admin on truyen.id_admin  = admin.id
where truyen.id_admin= ".$admin["id"]." order by id";
    $result = $conn-> query($sql_truyen);
    while($truyen= $result->fetch_assoc()){
    		echo "<tr >";
    		echo "<td><a>".$truyen["id"]."</a></td>";
    		echo "<td><a href='chuong.php?id=".$truyen['id']."&state=0'>".$truyen["tentruyen"]."</a></td>";
    		echo "<td>".$truyen["theloai"]."</td>";
    		echo "<td>".substr($truyen["anhbia"], 0, 20)."..."."</td>";
    		echo "<td>".$truyen["tentacgia"]."</td>";
    		echo "<td>".$truyen["namxb"]."</td>";
    		    		echo "<td>".$truyen["trangthai"]."</td>";
    		echo "<td><a href='chinhsuatruyen.php?id=".$truyen['id']."'><input type='button' value='Sửa' ></a>";
    		echo "<a  href = \"xoatruyen.php?id=".$truyen["id"]."\" ><input type='button' value ='Xoá'></td>";
    	
    		echo "</tr>";
    	}
    	echo "</table>";
   
?>

</body>
</html>