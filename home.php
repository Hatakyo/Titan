<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Document</title>
        <style>
    .sanpham {
		float:left;
		width:250px;
		margin: 40px;
		text-align: center;
	}
    .tieude {
	   
	   font-weight: bold;
	   font-size: 1.5em;
	   color:#F90	   
		}
		.xuhuong {
		float:left;
		width:300px;
		margin-left: 120px;
		text-align: center;
	}	
	
    
    </style>
     </head>
     <div id="header"> <?php include("header.php"); ?> </div>	
     <div id=" banner">
     <a><img src="./img/banner.jpg" width="100%" height="250px" > </a> </div>  
     <div id="tienich"> <?php include("tienich.php"); ?></div>

     <hr> <!--tao 1 đường kẻ-->
	 <br><!--lenh xuong dong-->

     <div class="tieude">
     <p> sản phẩm nổi bật </p> </div><br/>
     
     <?php
       
        require_once "./connect.php";
        $count = 0;
		$sql = "SELECT * FROM sanpham";
		$query = $connection->query($sql);
		while($row = $query->fetch_assoc()) {
            $count++;
		if ($count <= 4){
            
            echo '<div class="sanpham">';
            echo '<tr>';
			echo '<td>';
			echo '<a href="chitietsp.php?id='.$row['id_sp'].'">'.'<img src="./img/'.$row['anh'].'" alt=""/ width="229" height="200">'.'</a>'. '<br />';
			echo '</td>';
            echo '<td>'; 
            echo '<a style="margin: 0;">'. $row['ten'] .'</a>'  . '<br />';
			echo '<a style="margin: 0;">'. number_format( $row['gia']).'</a>'  . '<br />';
			echo '<button style="background-color: #ff2400; border: none; margin: 5px; color: white; cursor: pointer;"><a href="cart.php?&id='.$row['id_sp'].'">Mua ngay</a></button>';
			echo '<button style="background-color: #296E01; border: none; margin: 5px; color: white; cursor: pointer;"><a href="cart.php?id='.$row['id_sp'].'">Thêm Vào Giỏ Hàng</a></button>'. '<br />';
            echo '</td>';
            echo '</tr>';
            echo '</div>';

        }     
    }     
	?>
   

    
     <div class="tieude">
     <p> Xu hướng mua hàng</p> </div> 
     <br/>  
     <br/> 
      <?php
       session_start();
       require_once "./connect.php";
       $sql = "SELECT * FROM danhmuc";
       $query = $connection->query($sql);
       while($row = $query->fetch_assoc()) {
           echo '<div class="xuhuong">';
           echo '<tr>';
           echo '<td>';
           echo '<a href="sanpham.php">'.'<img src="./img/'.$row['anh'].'" alt=""/ width="229" height="200">'.'</a>'. '<br />';
           echo '</td>';
           echo '<td>'; 
           echo '<a style="margin: 0;">'. $row['ten'] .'</a>'  . '<br />';
           echo '<a style="margin: 0;">'. $row['mota'].'</a>'  . '<br />';
           echo '</td>';
           echo '</tr>';
           echo '</div>';
       }
        
     ?>

       <br />
    
</body>
</html>