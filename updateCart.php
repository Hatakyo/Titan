<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$key = $_GET['id'];
unset($_SESSION['cart'][''.$key.'']);
header('Location: ' . $_SERVER['HTTP_REFERER']);