<?php 
include("../dist/config.php");
$id=$_GET["id"];
$sql = "DELETE FROM truyen WHERE id = ".$id;
$result = $conn-> query($sql);
header('Location: index.php');
?>