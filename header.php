<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
	<style>
		.productHide:hover .productAll {
    opacity: 1;
}
	.nav-text ul li ul {
    display: block !important;
    z-index: 99;
    opacity: 0;
    position: absolute !important;
    top: 70px;
    background-color: #FFF;
    width: 120px;
    text-align: center;
}
.nav-text ul li ul li {
    position: relative;
    height: 40px !important;
}
	</style>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

	<!-- <div class="menu">
		<table width="100%" border="0">
			<tr>
			
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
                <li class="productHide">
                    <a >
                        <span>Sản phẩm</span>
                    </a>
					<ul class="productAll">
						<li><a href="sanpham.php">
                        <span>Tất cả sản phẩm</span>
                    </a></li>
					<li><a href="sanphammohinh.php">
                        <span>Mô hình</span>
                    </a></li>
					<li><a href="phukien.php">
                        <span>Phụ kiện</span>
                    </a></li>
					
								</ul>
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
			<li>
                    <a>
                        <form action ="./timkiem.php" class="search-box" method="post">
                            <input type="text" name="timkiem" value="" placeholder="Tìm Kiếm">

                            <button class="search-button" type="button" name="Tìm Kiếm">
                            <i class="fal fa-search" aria-hidden="true"></i>  
                        </button>
                        </form>
                    </a>
                </li>
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