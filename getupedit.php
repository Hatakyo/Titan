<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "./connect.php";
$file = $_FILES['anh'];
if ($file['name'] !== null) {
    $fileName = $file['tmp_name'];
    $path = './img/'  . $file['name'];
    move_uploaded_file($fileName, $path);
}
$sql = ' UPDATE sanpham set  ten="'.$_POST['ten'].'", type="'.$_POST['type'].'" , anh="'.$file['name'].'", gia="'.$_POST['gia'].'", mota="'.$_POST['mota'].'" Where id_sp='.$_POST['id_sp'].'  ';
 mysqli_query($connection, $sql);
 echo $sql;
 header('Location:./admin.php');

