<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			background: #fafafa;
		}
		.detailsMain {
    width: 100%;
    display: flex;
    justify-content: space-between;
	border-radius: 10px;
    border: 1px solid;
    padding: 10px;
	background: #fff;
}

.detailsImg {
    width: 42%;
}

.detailsImg img {
    width: 100%;
}

.detaisText {
    width: 55%;
}
.transport{
	display: flex;
	margin-bottom:50px ;
}
.transportLeft h4 {
    font-size: 1.2em;
}
.transportRight{
	padding: 0px 10px
}
.transportRight h5{
	font-size: 1.2em;
	color: #636363;
	margin: 0 0 10px 0;
}
.transportRight h5 span{
	font-size: 1em;
	opacity: .6;
}
.price{
	background: #fafafa;
	padding: 20px;
}


.price h5{
	color: #d0011b;
	margin-top:10px ;
}
.price h5 span{
	color: #333;
}
	</style>
</head>
<div id="header"><?php require_once 'header.php' ?></div>
<div id=" banner">
	<img src="img/bansp.png" width="100%" height="300px">
</div>
<hr>
<!--tao 1 đường kẻ-->
<br>
<!--lenh xuong dong-->
<div class="Containers">
<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once "./connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM sanpham  where id_sp='$id' ";
$query = $connection->query($sql);
while ($row = $query->fetch_assoc()) : ?>

	<div class="detailsMain">
		<div class="detailsImg">
		<img src="./img/<?= $row['anh'] ?>" alt="" >
		</div>
		<div class="detaisText">
		<a  style="margin: 0; text-transform: uppercase; font-size: 3em"><?= $row['ten'] ?></a><br />
		<br /><br />
		<div class="price">
	
	   <a class="priceRed" style="color: #d0011b; margin: 15px 0;font-weight: bold;font-size: 1.5em"><?= number_format($row['gia']) ?>VNĐ</a><br />
	
		<h5>
			gì cũng rẻ <span><i class="fal fa-question-circle"></i></span>
		</h5>
		<span>Giá tốt nhất so với các sản phẩm cùng loại trên thị trường!</span>
		</div>
		<br />
		<br />
	<h3>Mô tả sản phẩm: </h3>
	<br />
	<a style="margin: 15px 0;font-size: 1.2em"><?= $row['mota'] ?></a><br />
	<br />
	<br />
	<br />
	<div class="transport">
		<div class="transportLeft">
			<h4>Vận chuyển : </h4>
		</div>
		<div class="transportRight">
			<h5>Xử lý đơn hàng bởi Titan</h5>
			<h5>Miễn Phí vận chuyển </br>
		<Span>Miễn phí vận chuyển cho đơn hàng trên 1.000.000đ</Span>
		</h5>
		</div>

	</div>
	<?php if (isset($_SESSION['isLogin'])) : ?>
		      <button style="background-color: #EEB422; border: none;  font-size: 14px; padding: 8px; cursor: pointer;"><a href="addcart.php?&id=<?= $row['id_sp'] ?>" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  padding: 8px;cursor: pointer;"><a href="addcart.php?id=<?= $row['id_sp'] ?>" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
					
					<?php else :?>
						<button style="background-color: #EEB422; border: none;  font-size: 14px; padding: 8px; cursor: pointer;"><a href="login.php" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  padding: 8px;cursor: pointer;"><a href="login.php" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
					
					<?php endif ?>
		</div>
	</div>
	<?php
		$_SESSION['cart'][$row['id_sp']]['anh'] = $row['anh'];
		$_SESSION['cart'][$row['id_sp']]['ten'] = $row['ten'];
		$_SESSION['cart'][$row['id_sp']]['gia'] = $row['gia'];
		$_SESSION['cart'][$row['id_sp']]['mota'] = $row['mota'];
		// $_SESSION['cart']['id_sp']['id_sp'] = $row['id_sp'];
	?>
<?php endwhile; ?>

 <h2 class="Content "><span>Sản phẩm nổi bật</span></h4>
	<br />

	<?php
    if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	require_once './connect.php';
	
	$count = 0;
	$sql = "SELECT * FROM sanpham where type = '0'";
	$query = $connection->query($sql);
	
	echo ' <div class="scrolly">';
	echo '<ul class="carouselPre carouselPreS1">';
	
	while ($row = $query->fetch_assoc()) : ?>
	
		<?php
		
		$count++;
        if ($count <= 8) : ?>
		<li class="itemsC itemsS1">
                    <div class="bgImg"><a href="chitietsp.php?id=<?= $row['id_sp'] ?>"><img src="./img/<?= $row['anh'] ?>" alt="" width="229" height="200"></a></div>
                        <h3><?= $row['ten'] ?></h3>
                        <span><?= number_format($row['gia']) ?> đ</span>
						<br />
						<div class="btnH">
						<?php if (isset($_SESSION['isLogin'])) : ?>
				
					<button style="background-color: #EEB422; border: none;  font-size: 14px; padding: 8px; cursor: pointer;"><a href="addcart.php?&id=<?= $row['id_sp'] ?>" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  padding: 8px;cursor: pointer;"><a href="addcart.php?id=<?= $row['id_sp'] ?>" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
					
					<?php else :?>
					
					<button style="background-color: #EEB422; border: none;  font-size: 14px; padding: 8px; cursor: pointer;"><a href="login.php" style="text-decoration: none; color: white; ">Mua ngay</a></button>
					<button style="background-color: #296E01; border: none; font-size: 14px;  padding: 8px;cursor: pointer;"><a href="login.php" style="text-decoration: none;color: white; ">Thêm Vào Giỏ Hàng</a></button><br />
					
					<?php endif ?>     
					</div>   
			</li>
			
		<?php endif; ?>
	<?php endwhile; ?>
					
	</ul>
					<button id="left" class="leftS1"><i class="fas fa-chevron-left"></i></button>
                   <button id="right" class="rightS1"><i class="fas fa-chevron-right"></i></button>
					</div>      
            <div class="more">
                <a href="sanpham.php">Xem thêm</a>
            </div>
</div>
<script>
		 let nextS1 = document.querySelector('.leftS1');
let preS1 = document.querySelector('.rightS1');
let carouselSlideS1 = document.querySelector('.carouselPreS1');
let carouselS1 = document.querySelectorAll('.itemsS1');
let counters1 = 0;
const sizeS1 = carouselS1[0].clientWidth + 20;

function renderSlides1() {
    carouselSlideS1.style.transform = 'translateX(' + (-sizeS1 * counters1) + 'px)';
    carouselSlideS1.style.transition = "transform .75s ease";
    if (counters1 === 0) {
        preS1.style.display = 'none';
    } else {
        preS1.style.display = 'block';
    }
    if (counters1 === (carouselS1.length - 4)) {
        nextS1.style.display = 'none';
    } else {
        nextS1.style.display = 'block';
    }

}
nextS1.addEventListener('click', function() {
    ++counters1;
    renderSlides1();
    preS1.style.opacity = '1'
});
preS1.addEventListener('click', function() {
    --counters1;
    renderSlides1();
});
	  </script>
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100164285092432"
  logged_in_greeting="tóm lại có định mua không ? "
  logged_out_greeting="tóm lại có định mua không ? ">
      </div>
</body>

</html>