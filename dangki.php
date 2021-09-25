<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/login.css">
	<style>
		.main-login {
    background-color: white;
    width: 100%;
    height: 90vh;
    display: grid;
    grid-template-rows: 1fr auto 1fr;
}
.imgs {
    width: 65%;
}
	</style>
</head>

<body>

	
		<?php
		require_once "./connect.php";
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" ) {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from account where username='$username'";
					$kt=mysqli_query($connection, $sql);
				
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO account (id,username,password) VALUES ('','$username','$password')";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						$result = mysqli_query($connection,$sql);
						   if ($result) {
							header('Location:./login.php');
						   }else{
							echo "Đăng ký thất bại"; 
						   }
						   
				   	
					}
									    
					
			  }
	}
	?>
	<div class="main">
        <div class="main-login">
            <div class="main-logo">
              <img class="logo" src="./img/logo.png"> 

            </div>
            <div class="login">
                <h6 class="Dn">Đăng Kí</h6>

				<form action="dangki.php" method="post">
                    <div class="input">
                        <input type="text" name="username" id="username" autocomplete="off" required />
                        <label for="username" class="label-name">
                          <span class="content-name">Tài khoản</span>
                        </label>
                    </div>
                    <div class="input">
                        <input type="password" name="pass" id="pass" autocomplete="off" required />
                        <label for="pass" class="label-name">
												<span class="content-name">Mật khẩu</span>
											</label>
                    </div>
                     <a href="login.php">đã có tài khoản </a>
                    <input type="submit" name="btn_submit" class="submit-btn" value="Dang ky"></input>
                    
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
	
	</html>
</body>

</html>