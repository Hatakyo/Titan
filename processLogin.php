<?php
session_start();
require_once 'connect.php';

$query = $connection->query('SELECT * FROM account WHERE username="' . $_POST['username'] . '" AND password="' . $_POST['pass'] . '" ');
$row = $query->fetch_array(MYSQLI_NUM);

if (isset($row)) {
	$_SESSION['username'] = $row[0];
	$_SESSION['isLogin'] = 1;
	$_SESSION['type'] = $row[2];
	header('Location:./home.php');
} else {
	header('Location:./login.php');
}
