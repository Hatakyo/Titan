<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Titan</title>
	<link rel="stylesheet" href="./css/login.css">
	<style>
		.main-login {
    background-color: white;
    width: 100%;
    height: 80vh;
    display: grid;
    grid-template-rows: 1fr auto 1fr;
	
}
.imgs {
    width: 65%;
}
	</style>
	<?php
	session_start();
	?>
	
</head>

<body>

	<div id="header"><?php require_once 'header.php' ?></div>
	<div class="main">
        <div class="main-login">
            <div class="main-logo">
                <img class="logo" src="./img/logo.png">

            </div>
            <div class="login">
                <h6 class="Dn">Đăng nhập</h6>

				<form action="processLogin.php" method="post">
                    <div class="input">
                        <input type="text" name="username" autocomplete="off" required />
                        <label for="username" class="label-name">
                          <span class="content-name">Tài khoản</span>
                        </label>
                    </div>
                    <div class="input">
                        <input type="password" name="pass" autocomplete="off" required />
                        <label for="pass" class="label-name">
												<span class="content-name">Mật khẩu</span>
											</label>
                    </div>
                    <input type="checkbox" id="remember-password">
                    <label class="remember-password" for="remember-password">Nhớ mật khẩu</label>
                    <button type="submit" class="submit-btn">Đăng nhập</button>
                    
                </form>
            </div>
        </div>
        <div class="main-img">
            <img src="./img/kuroko.jpg"
                class="imgs">
            <div class="main-text">
                <p>Chỉ cần câu không bỏ cuộc thì</br> điều gì cũng có thể xảy ra</br>
                    <br /><i>- Kuroko Tetsuya -</i></p>
            </div>
        </div>
    </div>
	</div>
</body>

</html>