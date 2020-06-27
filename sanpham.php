<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.sanpham {
			float: left;
			width: 250px;
			margin: 40px;
			text-align: center;
		}
		.sanpham img {
			transition: all .3s ease-in-out;
		}

		.sanpham img:hover {
			transform: scale(1.2);
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
	<!--lenh xuong dong-->

	<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	require_once './connect.php';
	$sql = "SELECT * FROM sanpham";
	$query = $connection->query($sql);
	while ($row = $query->fetch_assoc()) : ?>
		<div class="sanpham">
			<tr>
				<td>
					<a href="chitietsp.php?id=<?= $row['id_sp'] ?>" style="margin: 0;"><img src="./img/<?= $row['anh'] ?>" alt="" width="229" height="200"></a><br />
				</td>
				<td>
					<a href="chitietsp.php?id=<?= $row['id_sp'] ?>" style="margin: 0;"><?= $row['ten'] ?></a><br />
					<a style="margin: 0;"><?= number_format($row['gia']) ?>VNĐ</a><br />
					<?php if (isset($_SESSION['isLogin'])) : ?>
					<button style="background-color: #EEB422; border: none;  font-size: 14px; margin: 8px; cursor: pointer;"><a href="addcart.php?&id=<?= $row['id_sp'] ?>" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  margin: 8px;cursor: pointer;"><a href="addcart.php?id=<?= $row['id_sp'] ?>" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
				
					<?php else :?>
						<button style="background-color: #EEB422; border: none;  font-size: 14px; margin: 8px; cursor: pointer;"><a href="login.php" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  margin: 8px;cursor: pointer;"><a href="login.php" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
					<?php endif ?>
				</td>
			</tr>
		</div>
	<?php endwhile; ?>
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