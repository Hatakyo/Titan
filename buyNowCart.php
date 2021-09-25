<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "./connect.php";

if (isset($_GET['id'])){
    $sql = 'SELECT * FROM sanpham where id_sp="'.$_GET['id'].'"';
    $query = $connection->query($sql);
    while($row = $query->fetch_assoc()) {
         print_r($row);
    $_SESSION['cart'][$row['id_sp']]['anh'] = $row['anh'];
    $_SESSION['cart'][$row['id_sp']]['ten'] = $row['ten'];
    $_SESSION['cart'][$row['id_sp']]['gia'] = $row['gia'];
    }// $_SESSION['cart']['id_sp']['id_sp'] = $row['id_sp'];
    header('Location:./cart.php');
}
