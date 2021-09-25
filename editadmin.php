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
    $sql = 'SELECT * FROM sanpham WHERE  id_sp="' . $_GET['id'] 	. '" ';
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      $data = $result->fetch_assoc();
      
    } else {
      echo "0 results";
    }

 
    ?>
  <form action="getupedit.php"  method="post" enctype="multipart/form-data">
  
    <table width="60%" >
    <tr>
    <td width="25%" height="50">id sản phẩm</td>
    <td width="45"><input type="text" name="id_sp" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['id_sp']?>"></td>
  </tr>
  <tr>
    <td width="25%" height="50">Type</td>
    <td width="45"><input type="number" name="type" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['type']?>"></td>
  </tr>
  <tr>
    <td height="50">Tên sản phẩm</td>

    <td><input type="text" name="ten" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['ten']?>"></td>
  </tr>
  <tr>
    <td height="50">Hình ảnh</td>


 <td>
   <p><?php echo $data['anh']?></p>
   <input type="file" name="anh" style="height: 25px;width: 327px; padding: 5px 10px" required value="<?php echo $data['anh']?>">
  </td>
  </tr>
  <tr>
    <td height="50">Giá</td>
    <td><input type="number" name="gia" style="height: 25px;width: 327px; padding: 5px 10px"required value="<?php echo $data['gia']?>"></td>
  </tr>
  <tr>
    <td height="50">Mô tả</td>
    <td><textarea type="text"  name="mota"  style="height: 100px;width: 327px; padding: 5px 10px" required > <?php echo $data['mota']?></textarea></td>
  </tr>
  </table>
   
  <a href=""> <input type="submit" value="Lưu" class="luu" ></a>

  </form>
  </article>
</section>



</body>
</html>
