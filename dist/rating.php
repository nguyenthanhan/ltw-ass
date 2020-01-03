<?php
	$point = $_GET['point'];
	$user = $_GET['user'];
	$truyen = $_GET['truyen'];
	include('config.php');
	$sql_kiemtra = "select * from truyen_thanhvien where id_thanhvien = ".$user." and id_truyen = ".$truyen;
	$rst = $conn->query($sql_kiemtra);
	if(!($rst -> fetch_assoc()) ){
	    $sql_them = "INSERT INTO `truyen_thanhvien` (id_truyen, id_thanhvien) VALUES ('".$truyen."','".$user."')";
	    $rst = $conn->query($sql_them);
	}
	
	$sql_check = 'SELECT * FROM truyen_thanhvien WHERE id_truyen = '.$truyen.' and id_thanhvien = '.$user;
	$rst = $conn->query($sql_check);
	$ratecheck = $rst->fetch_assoc();
	if($ratecheck['rate']){
	  
	    $sql='update truyen_thanhvien set rate = '.$point.' where id_truyen= '.$truyen.' and  id_thanhvien= '.$user;
	    echo $sql;
	    $rst=$conn->query($sql);
	    if($rst){
	        echo 'thanh cong';
	    }
	    else 
	        echo 'khong thanh cong';
	}
?>