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
$id = $_GET['id'];
$sql = "SELECT * FROM cart  where id_sp='$id' ";
$query = $connection->query($sql);
echo '<table  width="100%" border="0"  >';
echo '<tr style="height: 50px; text-align: center; border-bottom-style:solid;background-color:#CCC">';
echo '<th width="23%">Tên Sản phẩm</th>';
echo '<th width="23%">Hình ảnh</th>';
echo '<th width="14%">Đơn giá</th>';
echo '<th width="14%">Số lượng</th>';
echo '<th width="16%">Thành tiền</th>';
echo '<th>Xóa</th>';
echo '</tr> ';
// while($row = $query->fetch_assoc()) {
//     echo '<tr style="text-align: center;">';
//         echo '<td width="23%">'; 
//         echo '<a style="margin: 0;">'. $row['ten'] .'</a>' ;
//         echo '</td>';
//         echo '<td width="23%">';
//         echo '<img src="./img/'.$row['anh'].'" alt=""/ width="229" height="200">';
//         echo '</td>';
//         echo '<td width="14%">';
//         echo '<a style="margin: 0;" class="cost";>'. number_format( $row['gia']).'VNĐ'.'</a>';
//         echo '</td>';
//         echo '<td width="14%">';
//         echo '<input class="quantity" type="number" value="1" onclick="sum()"  style="height: 25px; width: 90px;" >';
//         echo '</td>';
//         echo '<td width="14%">';
//         echo '<a style="margin: 0;" class="sum";>'. number_format( $row['gia']).'VNĐ'.'</a>';
//         echo '</td>';
//         echo '<td width="14%">';
//         echo '<a href="cart.php?id=0" style="margin: 0;">'.'X'.'</a>';
//         echo '</td>';
//     echo '</tr>';
// }   
foreach ($_SESSION['cart'] as $key => $value) {
	echo '<tr style="text-align: center;">';
	echo '<td width="23%">';
	echo '<a href="chitietsp.php?id=' . $key . '" style="margin: 0;">' . $value['ten'] . '</a>';
	echo '</td>';
	echo '<td width="23%">';
	echo '<img src="./img/' . $value['anh'] . '" alt=""/ width="229" height="200">';
	echo '</td>';
	echo '<td width="14%">';
	echo '<a style="margin: 0;" class="cost";>' . number_format($value['gia']) . 'VNĐ' . '</a>';
	echo '</td>';
	echo '<td width="14%">';
	echo '<input class="quantity" type="number" value="1" onclick="sum()"  style="height: 25px; width: 90px;" >';
	echo '</td>';
	echo '<td width="14%">';
	echo '<a style="margin: 0;" class="sum";>' . number_format($value['gia']) . 'VNĐ' . '</a>';
	echo '</td>';
	echo '<td width="14%">';
	echo '<a href="cart.php?id=' . $key . '" style="margin: 0;">' . 'X' . '</a>';
	echo '</td>';
	echo '</tr>';
}
echo '</table> ';
?>

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
		//return cost * quantity;
	}
</script>
</body>

</html>