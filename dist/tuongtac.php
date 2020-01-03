<?php 
include('config.php');
$truyen = $_GET['truyen'];
$user = $_GET["user"];
$trangthai = $_GET["trangthai"];
$loai = $_GET["loai"];
$sql_kiemtra = "select * from truyen_thanhvien where id_thanhvien = ".$user." and id_truyen = ".$truyen;
$rst = $conn->query($sql_kiemtra);
if(!($rst -> fetch_assoc()) ){
    $sql_them = "INSERT INTO `truyen_thanhvien` (id_truyen, id_thanhvien) VALUES ('".$truyen."','".$user."')";
    $rst = $conn->query($sql_them);
}
if($trangthai == 0) $set =1;
else $set = 0;
switch($loai){
    case 1:
        $sql_update = "UPDATE truyen_thanhvien
    SET yeuthich = ".$set." WHERE id_truyen = ".$truyen." and id_thanhvien = ".$user;
        $rst = $conn->query($sql_update);
        break;
    case 2:
        $sql_update = "UPDATE truyen_thanhvien
    SET theodoi = ".$set." WHERE id_truyen = ".$truyen." and id_thanhvien = ".$user;
        $rst = $conn->query($sql_update);
        break;
    case 3:
        $sql_update = "UPDATE truyen_thanhvien
        SET dexuat = ".$set." WHERE id_truyen = ".$truyen." and id_thanhvien = ".$user;
        $rst = $conn->query($sql_update);
        break;
}
if($rst){
    echo "thanh cong update";
}
else {
    echo "that bai";
}
?>