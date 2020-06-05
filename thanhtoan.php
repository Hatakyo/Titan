<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	.button{
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
<h2 style="color:#F00;text-align: center; ">Xác nhận đơn hàng </h2>
 <hr> <!--tao 1 đường kẻ-->
    <table  width="100%" border="0"  >
	  <th>
	     <td width="40%">
        <table width="50%" border="0" form action="checkout-complete.php" method="post" >
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
           </table>
           </td>
		   </th>
           <th>
		  <table  width="100%" border="0"   >
		<tr style="height: 50px; text-align: center; border-bottom-style:solid; background-color:#CCC">
			<td width="29%">Tên Sản phẩm</td>
			<td width="30%">Hình ảnh</td>
            <td width="24%">Đơn giá</td>			
			<td width="17%">Số lượng</td>
					
		</tr>  
            <tr>
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
		foreach ($_SESSION['cart'] as $value) {
			echo '<tr>';
			echo '<td width="24%">';
			echo $value['ten'] . '<br />';
			echo '</td>';
			echo '<td width="26%">';
			echo '<img src="./img/'.$value['anh'].'" alt="" width="200" height="150" >' . '<br />';
			echo '</td>';
			echo '<td width="20%">';
			echo vndFormat($value['gia']) . '<br />';
			echo '</td>';
			echo '<td width="13%">';
			echo '<p>1</p>';
			echo '</td>';
			echo '<td width="17%">';
			$total += $value['gia'];
			
			echo '</tr>';
		}	
        echo '</td>';
		?>
		</tr>
		</table>
		<a style="padding: 15px 32px;margin-left: 70%; "> Tổng tiền : <a><?= vndFormat($total) ?>
		
		
		<input type="submit" class="button" value="Thanh toán">
  </th>
</table>
		
</body>

</html>