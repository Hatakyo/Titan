<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.sanpham {
			float: left;
			width: 250px;
			margin: 40px;
			text-align: center;
		}
	</style>
</head>
<div id="header"><?php require_once 'header.php' ?></div>
<div id=" banner">
	<img src="img/bansp.png" width="1300px" height="250px">
</div>
<hr>
<!--tao 1 đường kẻ-->
<br>
<!--lenh xuong dong-->

<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once "./connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM sanpham  where id_sp='$id' ";
$query = $connection->query($sql);
while ($row = $query->fetch_assoc()) : ?>
	<table width="100%" border="0">
	<tr>
	<td width="36%" height="250">
	<img src="./img/<?= $row['anh'] ?>" alt="" width="350" height="330" style="margin-top:30px; margin-left:80px">
	</td>
	<td width="64%" height="250" >
	<a style="margin: 0; text-transform: uppercase; font-size: 3em"><?= $row['ten'] ?></a><br />
	<br />
	<a style="margin: 0;font-weight: bold"><?= number_format($row['gia']) ?>VNĐ</a><br />
	<br />
	<a style="margin: 0;"><?= $row['mota'] ?></a><br />
	<br />
	<button style="background-color: #EEB422; border: none;  font-size: 16px; margin: 8px; cursor: pointer;"><a href="cart.php?&id=<?= $row['id_sp'] ?>" style="text-decoration: none; color: white">Mua ngay</a></button>
	<button style="background-color: #296E01; border: none; font-size: 16px; text-decoration: none; margin: 8px;cursor: pointer;"><a href="cart.php?id=<?= $row['id_sp'] ?>" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
	</td>
	</tr>
	</table>
	<?php
		$_SESSION['cart'][$row['id_sp']]['anh'] = $row['anh'];
		$_SESSION['cart'][$row['id_sp']]['ten'] = $row['ten'];
		$_SESSION['cart'][$row['id_sp']]['gia'] = $row['gia'];
		$_SESSION['cart'][$row['id_sp']]['mota'] = $row['mota'];
		// $_SESSION['cart']['id_sp']['id_sp'] = $row['id_sp'];
	?>
<?php endwhile; ?>

</body>

</html>