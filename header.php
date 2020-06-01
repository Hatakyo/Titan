<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
div {background-color: white;}
.menu a {
  text-decoration: none;
  color: black;
  font-size: 20px;
  padding: 18px;
  display:inline-block;
  margin-right: 50px; 
  line-height: 1px;
}
ul {
  display: inline;
  margin: 0;
  padding: 0;
}
ul li {display: inline-block;}
ul li:hover {background: white;}
ul li:hover ul {display: block;}
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
ul li ul li a {display:block !important;} 
ul li ul li:hover {background: white;}

</style>
</head>
<body>
  <div class="menu">
  <table  width="100%" border="0"  >
  <tr>
  <th width="20%"><a href=""><img src="./img/logo.png" width="220px" height="80px" > </a> </th>
  <th width="15%"><a href="home.php">trang chủ </a> </th>
  <th width="15%"><a href="sanpham.php">sản phẩm </a> </th>
  <th width="15%"><a href="gioithieu.php">giới thiệu</a> </th>
  <th width="12%"><a href="lienhe.php">liên hệ</a> </th>
  <th width="10%" >
  <ul>
    <li>
    <a href="#"><img src="./img/icon.png"width="30px" height="30px"></a> 
      <ul>
        <li><a href="login.php">đăng nhập</a></li>
        <li><a href="dangki.php">đăng kí</a></li>
      </ul>                
    </li>
  </ul>
  </th>
  <th width="10%"><a href="#"><img src="./img/giohang.jpg"width="30px" height="30px"></a></th>
  </tr>
  </table>
</div>

</body>
</html>