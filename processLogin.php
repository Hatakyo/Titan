<?php
session_start();
	require_once 'connect.php';
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	$query = $connection->query('SELECT * FROM account WHERE username="'.$_POST['username'].'" AND password="'.$_POST['pass'].'" ');
	$row = $query->fetch_array(MYSQLI_NUM);
	echo "<pre>";
	print_r($row);
	echo "</pre>";
	if(isset($row) ) {
		$_SESSION['username'] = $row[0];
		$_SESSION['isLogin'] = 1;
		$_SESSION['type'] = $row[2];
		header('Location:./index.php');
	} else {
		header('Location:./login.php');
	}
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";