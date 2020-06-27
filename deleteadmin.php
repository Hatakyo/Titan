<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "./connect.php";
// $sql = ' UPDATE sanpham  set ten = $_POST['ten']
$sql = ' DELETE FROM sanpham Where id_sp="'.$_GET['id'].'" ; ';
 mysqli_query($connection, $sql);
 header('Location:./admin.php');

