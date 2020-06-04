<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Titan</title>
	<style>
		.login {
			font-weight: bold;
		}

		.login h2 {
			color: red;
			margin-bottom: 20px;
			text-align: center;
		}

		.login table {
			text-align: left;
			margin: 0 auto;
		}

		.buton {
			padding: 5px 10px;
			margin: 20px;
			text-align: center;
			font-size: 30px;
		}
	</style>
	<?php
	session_start();
	?>

</head>

<body>

	<div id="header"><?php require_once 'header.php' ?></div>
	<hr>
	<!--tao 1 đường kẻ-->
	<br>
	<!--lenh xuong dong-->

	<div class="login">
		<h2>Đăng nhập hệ thống</h2>
		<form action="processLogin.php" method="post">
			<table width="400" border="0">
				<tr>
					<td>Tên : <br /><input name="username" type="text" style="height: 25px;width: 327px;border-style: solid; padding: 5px 10px"></td>
				</tr>
				<tr>
					<td>Mật khẩu : <br /><input name="pass" type="password" style="height: 25px;width: 327px;border-style: solid; padding: 5px 10px"></td>
				</tr>
			</table>
			<div class="buton">
				<input type="submit" value="Đăng nhập">
			</div>
		</form>
	</div>
	</div>
</body>

</html>