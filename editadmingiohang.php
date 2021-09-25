<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 15%;
  height: 300px; /* only for demonstration, should be removed */
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 85%;
  height: 300px; /* only for demonstration, should be removed */
  /* text-align: center; */
}
.luu{
     margin-top: 10px;
     height: 40px;
     width: 90px;
     border: 1px solid black;
     border-radius: 8px;
    
}
.luu:hover{
    background-color: #EEB422
}
/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 100%) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<header>


  <h2>Admin</h2>
</header>

<section>

  <nav>
    <ul>
    <li><a href="home.php">Trang Chủ</a></li>
      <li><a href="#"></br></a> </li>
      <li><a href="admin.php">Tổng quan</a></li>
      <li><a href="#"></br></a> </li>
      <li><a href="quanlygiohang.php">quản lý giỏ hàng</a></li>
    </ul>
  </nav>  
  <article>
    <?php
    require_once "./connect.php";
    $sql = 'SELECT * FROM thanhtoan WHERE  id="' . $_GET['id'] 	. '" ';
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      $data = $result->fetch_assoc();
    } else {
      echo "0 results";
    }

 
    ?>
  <form action="getupeditgiohang.php"  method="post" enctype="multipart/form-data">
  
    <table width="60%" >
    <tr>  
    <td width="45"><input type="hidden" name="id" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['id']?>"></td>
    <td width="45"><input type="hidden" name="acc_id" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['acc_id']?>"></td>
  </tr>
  <tr>
    <td width="25%" height="50">họ và tên</td>
    <td width="45"><input type="text" name="hovaten" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['hovaten']?>"></td>
  </tr>
  <tr>
    <td height="50">Địa chỉ</td>

    <td><input type="text" name="diachi" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['diachi']?>"></td>
  </tr>
  <tr>
    <td height="50">số điện thoại</td>

    <td><input type="number" name="sodt" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['sodt']?>"></td>
  </tr>
  <tr>
    <td height="50">loại thanh toán</td>
    <td><input type="text" name="loaithanhtoan" style="height: 25px;width: 327px; padding: 5px 10px"required value="<?php echo $data['loaithanhtoan']?>"></td>
  </tr>
  <tr>
    <td height="50">tên sản phẩm</td>
    <td><input type="text" name="tên_sp" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['tên_sp']?>"></td>
  </tr>
  <tr>
    <td width="25%" height="50">id loại sản phẩm</td>
    <td width="45"><input type="text" name="sp_id" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['sp_id']?>"></td>
  </tr>
  <tr>
    <td height="50">số lượng</td>
    <td><input type="number" name="soluong" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['soluong']?>"></td>
  </tr>
  <tr>
    <td height="50">tổng tiền</td>
    <td><input type="number" name="tongtien" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['tongtien']?>"></td>
  </tr>
  </table>
   
  <a href=""> <input type="submit" value="Lưu" class="luu" ></a>

  </form>
  </article>
</section>



</body>
</html>
