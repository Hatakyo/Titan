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
.button{
    margin-top: 10px;
    height: 40px;
    width: 90px;
    border: 0px solid black;
    border-radius: 8px;


}
.button:hover{
    background-color: #EEB422
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
      <li><a href="#">Tổng quan</a></li>
    </ul>
  </nav>  
  <article>
  <form action="deleteadmin.php" method="post">

        <table width="100%" border = "1" >
        <tr style=" text-align: center; ">
        <td  width="10%" >id_sp </td>
		    <td width="15%" >Tên </td>
		    <td width="10%" >Hình ảnh </td>
		    <td width="15%">Giá </td>
		    <td width="45%">Mô tả </td>
        <td width="10%">Xóa </td>
        </tr> 
       
			
        <?php
        require_once "./connect.php";
		$sql = "SELECT * FROM sanpham";
		$query = $connection->query($sql);
		while($row = $query->fetch_assoc())  :?>
          <div class="nav">
            <tr style=" text-align: center;">
            <td width=10% >
            <a><?= $row['id_sp']?> </a> <br />
            </td>
            <td width=15%>
            <a ><?= $row['ten'] ?></a><br />
            </td>
			      <td width=10%>
		       	<a ><img src="./img/<?= $row['anh'] ?>"alt="" width="229" height="200"> </a><br />
		      	</td>
            <td width=15%>
            <a ><?= number_format( $row['gia']) ?> VNĐ  </a><br />
            </td>
            <td width=45%>
		      	<a > <?= $row['mota']?> </a> <br />
            </td>
            <td width=10%>
            <a href="./deleteadmin.php?id=<?= $row['id_sp']?>"> X </a>
            </td>
            </tr>
          </div>
          <?php endwhile; ?>
        </table>    
        
        </form >

        <a href="addadmin.php"> <input class="button" type="submit" value="Thêm"></a>
        <a href="editadmin.php"> <input class="button" type="submit" value="sửa"></a>
          </article>
</section>



</body>
</html>
