<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="checkout-complete.php" method="post">
		<p>Địa chỉ</p>
		<input type="text" name="city" required>
		<p>Họ tên</p>
		<input type="text" name="name" required>
		<p>Số điện thoại</p>
		<input type="text" name="phone" pattern="(\+84|0)\d{9,10}" required>

		<?php
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		function vndFormat($priceFloat)
		{
			$symbol = 'đ';
			$symbol_thousand = '.';
			$decimal_place = 0;
			$price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
			return $price . $symbol;
		}
		$total = 0;
		echo '<div class="gia">';


		foreach ($_SESSION['cart'] as $value) {
			echo $value['ten'] . '<br />';
			echo vndFormat($value['gia']) . '<br />';
			$total += $value['gia'];
		}
		echo '</div>';
		echo '<p>Tổng tiền</p>';
		echo vndFormat($total);
		?>
		<input type="submit" value="Thanh toán">
</body>

</html>