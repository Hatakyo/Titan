<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.button {
			background-color: #EEB422;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			margin-left: 80%;
		}
	</style>
</head>

<body>
	<div id="header"><?php require_once 'header.php' ?></div>
	<h2 style="color:#F00;text-align: center;margin:2rem 0">Xác nhận đơn hàng </h2>
	<hr>
	<!--tao 1 đường kẻ-->
	<form action="getthanhtoan.php" method="post">
		<!-- <input type="hidden" name="ten">
		<input type="hidden" name="gia">
		<input type="hidden" name="anh">
		<input type="hidden" name="tongtien">
		<input type="hidden" name="tongtien"> -->
		<table width="100%" border="0">
			<th>
	     <td width="40%">
        <table width="50%" border="0"   >
		   <h2 style="color:#F00;text-align: center">Thông tin khách hàng </h2> 
		   <tr>
		   <td width="90%" height="60">
		   <p>Họ tên</p>
		   <input type="text" name="name" placeholder="Họ & Tên"  style="height: 25px;width: 400px; padding: 5px 10px" required>
		   </td>
		   </tr>
		   <tr>
	      	<td width="90%" height="60">
		   <p>Số điện thoại</p>
		   <input type="text" name="phone" pattern="(\+84|0)\d{9,10}" placeholder="SĐT"  style="height: 25px;width: 400px; padding: 5px 10px" required>
		   </td>
		   </tr>
		   <tr>
	       <td width="90%" height="60">
		   <p>Địa chỉ</p>
		   <input type="text" name="city" placeholder="địa chỉ"  style="height: 25px;width: 400px; padding: 5px 10px" required>
		   </td>
		   </tr>
		   </tr>
		   <tr>
	       <td width="90%" height="60">
		   <p>hình thức thanh toán</p>
             <input type="radio" id="age1" name="format" value="Ships" required>
             <label for="age1">Ships</label><br>
             <input type="radio" id="age2" name="format" value="Trực tiếp Paypal" required>
             <label for="age2">Trực tiếp Paypal</label><br> 
		   </td>
		   </tr>
           </table>
			</td>
		   </th>
			<th>
				<table width="100%" border="0">
					<tr style="height: 50px; text-align: center; border-bottom-style:solid; background-color:#CCC">
						<th width="23%">Tên Sản phẩm</th>
						<th width="23%">Hình ảnh</th>
						<th width="14%">Đơn giá</th>
						<th width="14%">Số lượng</th>
						<th width="16%">Thành tiền</th>

					</tr>
					<tr>
						<?php
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		function vndFormat($priceFloat)
		{
			$symbol = '₫';
			$symbol_thousand = '.';
			$decimal_place = 0;
			$price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
			return $price . $symbol;
		}
		$total = 0;
		// echo '<pre>';
        //             print_r($_POST);
        //             echo '</pre>';
        //             die('Funtion called');
		if (count($_POST) > 0) {
			foreach ($_SESSION['cart'] as $key => $value) {
				echo '<tr>';
				echo '<td width="24%">';
				echo '<input  type="hidden" name="sp['.  $key .'][id]" value="'.$key .'" style="border: none;">';
				echo '<input  type="text" name="sp['.  $key .'][ten]" id="ten" value="'.$value['ten'] .'" style="border: none;">';
				// echo $value['ten'] . '<br />';
				echo '</td>';
				echo '<td width="26%">';
				echo '<img src="./img/'.$value['anh'].'" alt="" width="200" height="150" >' . '<br />';
				echo '</td>';
				echo '<td width="20%">';
				echo vndFormat($value['gia']) . '<br />';
				echo '</td>';
				echo '<td width="13%">';
				echo '<input  type="hidden" name="sp['.  $key .'][soluong]" id="soluong" value="'. $_POST[$key]['soluong'] .'" style="border: none;">';
				echo '<p>'.$_POST[$key]['soluong'].'</p>';
				echo '</td>';
				echo '<td width="17%">';
				echo '<input  type="hidden" name="sp['.  $key .'][tongtien]" id="tongtien" value="'.$_POST[$key]['tongtien'] .'" style="border: none;">';
				echo vndFormat($_POST[$key]['tongtien']);
				echo '</td>';
				echo '</tr>';
				$total += $_POST[$key]['tongtien'];
			}	
		}
		
        echo '</td>';
		
		?>
					</tr>
				</table>
				<a style="padding: 15px 32px;margin-left: 70%; "> Tổng tiền : <a><?= vndFormat($total) ?>

						<input type="submit" class="button" value="Thanh toán">
			</th>
		</table>
		</from>
</body>

</html>