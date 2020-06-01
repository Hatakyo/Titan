<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once './connect.php';

$cartID = rand(0, 999999);

foreach ($_SESSION['cart'] as $key => $value) {
	$city = $_POST['city'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$id = $key;
	$date = date("Y-m-d");
	$query = $connection->query('INSERT INTO ');
}
