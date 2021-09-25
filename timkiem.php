<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		/* san pham */

		.product {
			width: 1400px;
			margin: 50px auto;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
			gap: 25px;
		}

		.oneProduct {
			width: 100%;
			text-align: center;
		}

		.productImg img {
			width: 100%;
		}

		.sreach {
			width: 20%;
			margin: auto;
		}
		.thongbao{
			font-size: 1.5rem;
			text-align: center;
            grid-column: 3
		}
	</style>
</head>

<body>
	<div id="header"><?php include("header.php") ?></div>
	<div id=" banner">
		<img src="img/bansp.png" width="100%" height="250px">
	</div>
	<hr>
	<!--tao 1 đường kẻ-->
	<br>

	
	<div class="product">
	<?php
		 	if (session_status() == PHP_SESSION_NONE) {
				session_start();
			}
			require_once './connect.php';
	//   if (isset($_POST['timkiem'])) {
		$key = addslashes($_POST['timkiem']);
		$sql = "SELECT * FROM sanpham WHERE (LOWER(ten) LIKE '%$key%')";
		
	
	$query = $connection->query($sql);
	
	if ($query->num_rows <= 0) {
		echo '<h4 class="thongbao"> ';
		echo 'Xin lỗi sản này hiện tại shop đã hết hàng';
		echo '</h4>';
	}
	
	while ($row = $query->fetch_assoc()) : ?>

	<div class="oneProduct">
		<div class="productImg">
			<a href="chitietsp.php?id=<?= $row['id_sp'] ?>" style="margin: 0;"><img src="./img/<?= $row['anh'] ?>"
					alt=""></a><br />
		</div>
		<div class="productDetails">
			<a href="chitietsp.php?id=<?= $row['id_sp'] ?>" style="margin: 0;"><?= $row['ten'] ?></a><br />
			<a style="margin: 0;"><?= number_format($row['gia']) ?>VNĐ</a><br />
			<?php if (isset($_SESSION['isLogin'])) : ?>

			<button style="background-color: #EEB422; border: none;  font-size: 14px; padding: 8px; cursor: pointer;"><a
					href="buyNowCart.php?&id=<?= $row['id_sp'] ?>" style="text-decoration: none; color: white; ">Mua
					ngay</a></button>
			<button style="background-color: #296E01; border: none; font-size: 14px;  padding: 8px;cursor: pointer;"><a
					href="addcart.php?id=<?= $row['id_sp'] ?>" style="text-decoration: none;color: white; ">Thêm Vào Giỏ
					Hàng</a></button><br />

			<?php else :?>

			<button style="background-color: #EEB422; border: none;  font-size: 14px; padding: 8px; cursor: pointer;"><a
					href="login.php" style="text-decoration: none; color: white; ">Mua ngay</a></button>
			<button style="background-color: #296E01; border: none; font-size: 14px;  padding: 8px;cursor: pointer;"><a
					href="login.php" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />

			<?php endif ?>
		</div>
	</div>

	<?php endwhile; ?>

			</div>
</body>

</html>