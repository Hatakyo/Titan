<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "./connect.php";


$sql = ' DELETE FROM ykienkh Where id="'.$_GET['id'].'" ; ';
 mysqli_query($connection, $sql);
 header('Location:./adminykienkh.php');