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

			<form action="upykienkh.php"  method="post" enctype="multipart/form-data">
				<table width="90%" border="0" style="margin: auto">
				    <tr>
						<td>
							<h1>Ý kiến khách hàng</h1>
						</td>
					</tr>
					<tr>
						<td width="100%">Tên : <br />
							<input type="text" name="name" style="height: 25px;width: 80%;border-style: solid; padding: 5px 10px" required/></td>
					</tr>
					<tr>
						<td>Email : <br /><input type="text" name="email" style="height: 25px;width: 80%;border-style: solid; padding: 5px 10px" required></td>
					</tr>
					<tr>
						<td>Điện thoại : <br /><input type="text" name="sdt" style="height: 25px;width: 80%;border-style: solid; padding: 5px 10px" required></td>
					</tr>
					<tr>
						<td>Tin nhắn : <br /><textarea type="text" name="comment" style="height: 100px;width: 80%;border-style: solid; padding: 5px 10px" required> </textarea> </td>
					</tr>
					<tr>
						<td ><a><input style="padding: 5px 10px;" type="submit" value="Gửi"></a></td>
					</tr>
				</table>
</form>
			</td>
		</tr>
	</table>

</body>

</html>