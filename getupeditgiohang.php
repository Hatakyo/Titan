<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "./connect.php";

$sql = 'UPDATE thanhtoan set  acc_id="'.$_POST['acc_id'].'",sp_id="'.$_POST['sp_id'].'", hovaten="'.$_POST['hovaten'].'", diachi="'.$_POST['diachi'].'" , sodt="'.$_POST['sodt'].'", loaithanhtoan="'.$_POST['loaithanhtoan'].'", tên_sp="'.$_POST['tên_sp'].'",soluong="'.$_POST['soluong'].'",tongtien="'.$_POST['tongtien'].'" Where id='.$_POST['id'].'  ';
 mysqli_query($connection, $sql);
 echo $sql;
 header('Location:./quanlygiohang.php');

