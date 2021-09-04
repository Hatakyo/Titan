<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
	<!-- <style>
		div {
			background-color: white;
		}

		html {
			font-family: 'Montserrat', 'Open Sans', sans-serif;
		}

		.menu a {
			text-decoration: none;
			color: black;
			font-size: 15px;
			padding: 18px;
			display: inline-block;
			margin-right: 50px;
			line-height: 1px;
		}

		ul {
			display: inline;
			margin: 0;
			padding: 0;
		}

		ul li {
			display: inline-block;
		}

		ul li:hover {
			background: white;
		}

		ul li:hover ul {
			display: block;
		}

		ul li ul {
			position: absolute;
			width: 18%;
			display: none;
			text-align: left;
		}

		ul li ul li {
			background: white;
			display: block;
		}

		ul li ul li a {
			display: block !important;
		}

		ul li ul li:hover {
			background: white;
		}
	</style> -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<!-- <div class="menu">
		<table width="100%" border="0">
			<tr>
				<th width="20%"><a href="home.php"><img src="./img/logo.png" width="220px" height="80px"> </a> </th>
				<th width="15%"><a href="home.php">trang chủ </a> </th>
				<th width="15%"><a href="sanpham.php">sản phẩm </a> </th>
				<th width="15%"><a href="gioithieu.php">giới thiệu</a> </th>
				<th width="12%"><a href="lienhe.php">liên hệ</a> </th>
				<th width="10%">
					<ul>
						<li>
							<a href="#"><img src="./img/icon.png" width="30px" height="30px"></a>
							<ul>
								<?php
								if (session_status() == PHP_SESSION_NONE) {
									session_start();
								}
								if (isset($_SESSION['isLogin'])) : ?>
								  
									<li><a href="home.php"> Xin chào, <?= $_SESSION['username'] ?></a></li>
									<?php if ($_SESSION['type'] == 1) : ?>
										<li><a href="admin.php"> Admin </a></li> 
										<?php endif ?>	
									<li><a href="logout.php" style="color: red;">Đăng xuất</a></li>
									

								<?php else : ?>
									<li><a href="login.php">Đăng nhập</a></li>
									<li><a href="dangki.php">Đăng kí</a></li>
								<?php endif ?>
							</ul>
						</li>
					</ul>
				</th>
				<th width="10%"><a href="./cart.php"><img src="./img/giohang.jpg" width="30px" height="30px"></a></th>
			</tr>
		</table>
	</div> -->





	<nav class="nav">
        <div class="logo">
		<a href="home.php"><img src="./img/logo.png" width="220px" height="80px"> </a>
        </div>
        <div class="nav-text">
            <ul>
                <li>
                    <a href="home.php">
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="sanpham.php">
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="gioithieu.php">
                        <span>giới thiệu</span>
                    </a>
                </li>
                <li>
                    <a href="lienhe.php">
                        <span>liên hệ</span>
                    </a>
                </li>
               
            </ul>
        </div>
        <div class="nav-icon">
            <ul>
                <li class="userShow">
                    <a >
                        <i class="fas fa-user"></i>
                    </a>
					<ul class="ulHide">
								<?php
								if (session_status() == PHP_SESSION_NONE) {
									session_start();
								}
								if (isset($_SESSION['isLogin'])) : ?>
								  
									<li><a href="home.php"> Xin chào, <?= $_SESSION['username'] ?></a></li>
									<?php if ($_SESSION['type'] == 1) : ?>
										<li><a href="admin.php"> Admin </a></li> 
										<?php endif ?>	
									<li><a href="logout.php" style="color: red;">Đăng xuất</a></li>
									

								<?php else : ?>
									<li><a href="login.php">Đăng nhập</a></li>
									<li><a href="dangki.php">Đăng kí</a></li>
								<?php endif ?>
							</ul>
                </li>
                <li>
                    <a a href="cart.php">
                        <i class="fal fa-cart-arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>