<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once './connect.php';
echo '<pre>' ;
print_r($_SESSION);
echo '</pre>';
echo '<pre>' ;
print_r($_POST);
echo '</pre>';
// die('aaaaaaaa');
$acc_id = $_SESSION['id'];
$username = $_SESSION['username'];
$tenkh = $_POST['name'];
$diachi = $_POST['city'];
$sodt = $_POST['phone'];
$donhang ="";
$format = $_POST['format'];


echo $username;
echo $tenkh;
echo $diachi;
echo $sodt;
echo $format;
echo $donhang;

$data = $_POST;
foreach($data['sp'] as $key => $value)
{
   $sql = 'INSERT INTO thanhtoan  values ("","'.$acc_id.'","'.$value['id'].'","'.$tenkh.'","'.$diachi.'","'.$sodt.'","'.$format.'","'.$value['ten'].'","'.$value['soluong'].'","'.$value['tongtien'].'");';
   mysqli_query($connection, $sql);
}

unset($_SESSION['cart']);
header('Location:./home.php');
