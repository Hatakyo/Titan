<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once './connect.php';
// echo '<pre>' ;
// print_r($_SESSION);
// echo '</pre>';
echo '<pre>' ;
print_r($_POST);
echo '</pre>';


$id_acc = $_SESSION['id'];


$data = $_POST;

   $sql = 'INSERT INTO ykienkh  values ("","'.$id_acc.'","'.$data['name'].'","'.$data['email'].'","'.$data['sdt'].'","'.$data['comment'].'");';
   mysqli_query($connection, $sql);


// unset($_SESSION['cart']);
header('Location:./lienhe.php');