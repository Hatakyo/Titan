<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div id="header"> <?php require_once 'header.php'; ?> </div>
	<hr>
	<!--tao 1 đường kẻ-->
	<br>
	<!--lenh xuong dong-->
	<table width="100%" border="0">
		<tr>
			<td width="50%" height="526">
				<table width="100%" border="0">
					<tr>
						<td ><img src="./img/titan.jpg" width="100%" height="370" /></td>
						</tr>
					<tr>
						<td><span>Cửa hàng quà tặng - Vật phẩm trong game : Liên minh huyền thoại, Overwatch, ... - Phụ kiện anime : Onepiece, Naruto, dragonball, Attack on Titan... - Vật phẩm trong siêu anh hùng... Chất lượng đảm bảo - uy tín - Độc nhất</span></td>
					</tr>
				</table>
			</td>
			<td width="40%">
				<table width="100%" border="0">
					<tr>
						<td width="100%">Tên : <br />
							<input type="text" style="height: 25px;width: 500px;border-style: solid; padding: 5px 10px" /></td>
					</tr>
					<tr>
						<td>Email : <br /><input type="text" style="height: 25px;width: 500px;border-style: solid; padding: 5px 10px"></td>
					</tr>
					<tr>
						<td>Điện thoại : <br /><input type="text" style="height: 25px;width: 500px;border-style: solid; padding: 5px 10px"></td>
					</tr>
					<tr>
						<td>Tin nhắn : <br /><textarea type="text" style="height: 100px;width: 500px;border-style: solid; padding: 5px 10px"> </textarea> </td>
					</tr>
					<tr>
						<td style="padding: 10px 20px; font-size: 30px;"><a><input type="submit" value="Gửi"></a></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<div id="footer"><?php require_once 'footer.php'; ?></div>
</body>

</html>