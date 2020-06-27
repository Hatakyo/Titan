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
$sql = 'INSERT INTO sanpham  values ("","'.$_POST['ten'].'","'.$file['name'].'","'.$_POST['gia'][0].'","'.$_POST['mota'].'");';
echo $sql;
mysqli_query($connection, $sql);
header('Location:./admin.php');

