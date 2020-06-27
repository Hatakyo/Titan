<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once './connect.php';
// echo '<pre>' ;
// print_r($_SESSION);
// echo '</pre>';
// echo '<pre>' ;
// print_r($_POST);
// echo '</pre>';

$username = $_SESSION['username'];
$tenkh = $_POST['name'];
$diachi = $_POST['city'];
$sodt = $_POST['phone'];
$donhang ="";
 
// echo $username;
// echo $tenkh;
// echo $diachi;
// echo $sodt;
// echo $donhang;

foreach($_SESSION['cart'] as $key => $value)
{
   $donhang .= $value['ten'] . " ";


    // $sanpham = $connect ->('SELECT * FROM '.$value['sp'].'WHERE id_sp="'.$value['$id'].'"   ');
    // $donhang .= $sanpham[0]['ten']. " | ";
    // echo 'INSERT INTO khachhang VALUES ("'.$username.'","'.$tenkh.'","'.$diachi.'","'.$sodt.'","'.$donhang.'");';
// $database ->inserData('INSERT INTO khachhang VALUES ("'.$username.'","'.$tenkh.'","'.$diachi.'","'.$sodt.'","'.$donhang.'");');
}

$sql = 'INSERT INTO khachhang  values ("'.$username.'","'.$tenkh.'","'.$diachi.'","'.$sodt.'","'.$donhang.'");';
echo $sql;
mysqli_query($connection, $sql);
unset($_SESSION['cart']);
header('Location:./home.php');
