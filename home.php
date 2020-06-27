<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Titan</title>
	<style>
		a {
			text-decoration: none;
		}

		.sp {
			text-align: center;
		}

		.tieude {

			font-weight: bold;
			font-size: 1.5em;
			color: #F90
		}

		.xuhuong {
			float: left;
			width: 100%;
			text-align: center;
		}

		.sp img {
			transition: all .3s ease-in-out;
		}

		.sp img:hover {
			transform: scale(1.2);
		}
		.xuhuong img {
			transition: all .3s ease-in-out;
		}

		.xuhuong img:hover {
			transform: scale(1.2);
		}
	</style>
</head>

<body>
<?php 
require_once './mess.php';
?>
	<div id="header"> <?php require_once 'header.php'; ?></div>
	<div id=" banner">
		<img src="./img/banner.jpg" width="100%" height="250px">
	</div>
	<div id="tienich"> <?php require_once 'tienich.php'; ?></div>
	<hr>
	<!--tao 1 đường kẻ-->
	<br>
	<!--lenh xuong dong-->

	<div class="tieude">
		<p style="text-align: center; text-transform: uppercase;"> sản phẩm nổi bật </p>
	</div>
	<br />

	<?php
    if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	require_once './connect.php';
	
	$count = 0;
	$sql = "SELECT * FROM sanpham";
	$query = $connection->query($sql);
	echo '<table class="sp">';
	echo '<tr>';
	while ($row = $query->fetch_assoc()) : ?>
		<?php
		$count++;
        if ($count <= 5) : ?>
			<td>
				<a href="chitietsp.php?id=<?= $row['id_sp'] ?>"><img src="./img/<?= $row['anh'] ?>" alt="" width="229" height="200"></a><br />
				<a style="margin: 0;"><?= $row['ten'] ?></a><br />
				<a style="margin: 0;"><?= number_format($row['gia']) ?></a><br />
				<?php if (isset($_SESSION['isLogin'])) : ?>
					<button style="background-color: #EEB422; border: none;  font-size: 14px; margin: 8px; cursor: pointer;"><a href="addcart.php?&id=<?= $row['id_sp'] ?>" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  margin: 8px;cursor: pointer;"><a href="addcart.php?id=<?= $row['id_sp'] ?>" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
				
					<?php else :?>
						<button style="background-color: #EEB422; border: none;  font-size: 14px; margin: 8px; cursor: pointer;"><a href="login.php" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  margin: 8px;cursor: pointer;"><a href="login.php" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
					<?php endif ?>
			</td>
		<?php endif; ?>
	<?php endwhile; ?>
	</tr>
	</table>



	<div class="tieude">
		<p style="text-align: center; text-transform: uppercase;"> Xu hướng mua hàng</p>
	</div>
	<br />
	<br />
	<?php
	require_once './connect.php';
	$sql = "SELECT * FROM danhmuc";
	$query = $connection->query($sql);
	?>
	<table class="xuhuong">
		<tr>
			<?php while ($row = $query->fetch_assoc()) : ?>
				<td>
					<a href="sanpham.php"><img src="./img/<?= $row['anh'] ?>" alt="" width="229" height="200"></a><br />
					<a style="margin: 0;"><?= $row['ten'] ?></a><br />
					<a style="margin: 0;"><?= $row['mota'] ?></a><br />
				</td>
			<?php endwhile; ?>
		</tr>
	</table>
	<br />
    <br />
<div id="footer"><?php include("footer.php"); ?></div>
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100164285092432"
  logged_in_greeting="tóm lại có định mua không ? "
  logged_out_greeting="tóm lại có định mua không ? ">
      </div>
</body>

</html>