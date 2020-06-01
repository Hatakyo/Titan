<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.dangki table{
font-weight: bold;	
text-align:left;
margin: 0 auto;
}
.dangki h2 {	
	color: red;
	margin-bottom: 20px;
  text-align:center
}
.buton{
	padding: 5px 10px; 
	text-align:center;
	font-size: 30px;
	}
.login{
	display: flex;
	}
</style>
</head>

<body>
<div id="header"> <?php include("header.php") ?> </div>
    <hr> <!--tao 1 đường kẻ-->
	<br><!--lenh xuong dong-->
<div class="dangki">
<h2> Đăng kí tài khoản</h2> 

<table width="400" border="0" >
   <tr>
     <td>Tên : <br /><input name="username" type="text" style="height: 25px;width: 327px;border-style: solid; padding: 5px 10px"></td>
   </tr>
   <tr>
     <td>Mật khẩu : <br /><input name="pass" type="text" style="height: 25px;width: 327px;border-style: solid; padding: 5px 10px"></td>
   </tr>
   <tr>
     <td>Nhập lại mật khẩu : <br /><input name="pass" type="text" style="height: 25px;width: 327px;border-style: solid; padding: 5px 10px"></td>
	 </tr>
	</table>
	
	<div class="login">  
		<a href="login.php" style="margin: 0 auto">bạn đã có tài khoản với chúng tôi? Đăng nhập </a>
  </div>
<div class="buton">  
    <a><input type="submit" value="Đăng kí"></a>
   </div>
</div>
</body>
</html>