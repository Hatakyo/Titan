<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.quantity {
			width: 50px
		}
	</style>
</head>
<div id="header"> <?php include("header.php") ?> </div>
<div id=" banner">
	<a><img src="img/bansp.png" width="100%" height="250px"> </a> </div>
<hr>
<!--tao 1 đường kẻ-->
<br>
<!--lenh xuong dong-->

<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once "./connect.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM cart  where id_sp='$id' ";
	$query = $connection->query($sql);
}
?>
<table width="100%" border="0">
	<tr style="height: 50px; text-align: center; border-bottom-style:solid;background-color:#CCC">
		<th width="23%">Tên Sản phẩm</th>
		<th width="23%">Hình ảnh</th>
		<th width="14%">Đơn giá</th>
		<th width="14%">Số lượng</th>
		<th width="16%">Thành tiền</th>
		<th>Xóa</th>
	</tr>
	<form action="./checkout.php" method="post">
		<?php foreach ($_SESSION['cart'] as $key => $value) : ?>
			<tr style="text-align: center;">
				<td width="23%">
					<a href="chitietsp.php?id=<?= $key ?>" style="margin: 0;"><?= $value['ten'] ?></a>
				</td>
				<td width="23%">
					<img src="./img/<?= $value['anh'] ?>" alt="" width="229" height="200">
				</td>
				<td width="14%">
					<a style="margin: 0;" class="cost"><?= number_format($value['gia']) . 'VNĐ' ?></a>
				</td>
				<td width="14%">
					<input class="quantity" type="number" value="1" onclick="sum()" style="height: 25px; width: 90px;">
				</td>
				<td width="14%">
					<a style="margin: 0;" class="sum"><?= number_format($value['gia']) . 'VNĐ' ?></a>
				</td>
				<td width="14%">
					<a href="updateCart.php?id=<?= $key ?>" style="margin: 0;">X</a>
				</td>
			</tr>
		<?php endforeach;  ?>
</table>

<hr>
<!--tao 1 đường kẻ-->
<br>
<input type="submit" name="btUpdate" value="Thanh toán" style="margin-left: 90%; margin-top: 10px; height: 40px; width: 90px; font-weight: bold; border: 1px solid black; border-radius: 5px;">
<script>
	function sum() {
		var cost = document.querySelector('.cost').innerText;
		cost = cost.replace(',', '');
		cost = cost.replace(',', '');
		cost = cost.replace('VNĐ', '');
		cost = Number(cost);
		var quantity = document.querySelector('.quantity').value;
		var sum = cost * quantity;
		sum = sum.toLocaleString('vi', {
			style: 'currency',
			currency: 'VND'
		});
		document.querySelector('.sum').innerHTML = sum;
	}
</script>
</form>
</body>

</html>