<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.login{
style: font-weight: bold;	
}
.login h2{	
	color: red;
	margin-bottom: 20px;
	text-align:center
}
.login table{
text-align:left;
margin-left:38%;
}
.buton{
	padding: 5px 10px;
	margin: 20px;  
	text-align:center;
	font-size: 30px;
	}

</style>
<?php
session_start();
?>   
	
</head>
<body>

<div id="header"> <?php include("header.php") ?> </div>
    <hr> <!--tao 1 đường kẻ-->
	<br><!--lenh xuong dong-->
	

		
<div class="login">
<h2>Đăng nhập hệ thống</h2>

	<table width="400" border="0" >
   <tr>
     <td>Tên : <br /><input name="username" type="text" style="height: 25px;width: 327px;border-style: solid; padding: 5px 10px"></td>
   </tr>
   <tr>
     <td>Mật khẩu : <br /><input name="pass" type="text" style="height: 25px;width: 327px;border-style: solid; padding: 5px 10px"></td>
   </tr>
   </table>

<div class="buton">  
    <a><input name="btn_submit" type="submit" value="Đăng nhập"></a>
   </div>
</div>
</div>
</body>
</html>