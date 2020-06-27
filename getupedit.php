<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "./connect.php";
$sql = ' UPDATE sanpham set ten="'.$_POST['ten'].'",  anh="'.$_POST['anh'].'", gia="'.$_POST['gia'].'", mota="'.$_POST['mota'].'" Where id_sp='.$_POST['id_sp'].'  ';
 mysqli_query($connection, $sql);
 header('Location:./admin.php');

