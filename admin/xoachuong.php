<?php 
include("../dist/config.php");
$id=$_GET["id"];
$sql = "select * from chuong where id = ".$id;
$result = $conn-> query($sql);
$chuong= $result -> fetch_assoc();
$sql = "DELETE FROM chuong WHERE id = ".$id;
$result = $conn-> query($sql);
header('Location: chuong.php?state="2"&id='.$chuong["id_truyen"]);
?>