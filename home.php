<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Titan</title>

</head>

<body>
<?php 
require_once './mess.php';
?>
	<div id="header"> <?php require_once 'header.php'; ?></div>

	<div class="Sliders">
        <div class="itemSlider">
            <img class="img-banner" src="https://wallpaperaccess.com/full/1140732.jpg" alt="pic">
        </div>
        <div class="itemSlider Active">
            <img class="img-banner" src="https://wallpaperaccess.com/full/2741662.jpg" alt="pic">
        </div>
        <div class="itemSlider">
            <img class="img-banner" src="https://wallpaperaccess.com/full/366926.jpg" alt="pic">
        </div>
    </div>


	<!--lenh xuong dong-->
<div class="Containers">
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
				
					<button style="background-color: #EEB422; border: none;  font-size: 14px; padding: 8px; cursor: pointer;"><a href="buyNowCart.php?&id=<?= $row['id_sp'] ?>" style="text-decoration: none; color: white; ">Mua ngay</a></button>
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


	<h2 class="Content "><span>Phụ kiện hot</span></h4>
	<br />

	<?php
    if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	require_once './connect.php';
	
	$count = 0;
	$sql = "SELECT * FROM sanpham where type = '1'";
	$query = $connection->query($sql);
	
	echo ' <div class="scrolly">';
	echo '<ul class="carouselPre carouselPreS2">';
	
	while ($row = $query->fetch_assoc()) : ?>
	
		<?php
		
		$count++;
        if ($count <= 6) : ?>
		<li class="itemsC itemsS2">
                    <div class="bgImg"><a href="chitietsp.php?id=<?= $row['id_sp'] ?>"><img src="./img/<?= $row['anh'] ?>" alt="" width="229" height="200"></a></div>
                        <h4><?= $row['ten'] ?></h3>
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
					<button id="left" class="leftS2"><i class="fas fa-chevron-left"></i></button>
                   <button id="right" class="rightS2"><i class="fas fa-chevron-right"></i></button>
					</div>      
            <div class="more">
                <a href="phukien.php">Xem thêm</a>
            </div>

	<h2 class="Content "><span>Xu hướng hiện nay</span></h4>
	<br />
	<?php
	require_once './connect.php';
	$sql = "SELECT * FROM danhmuc";
	$query = $connection->query($sql);
	?>

     <div class="xuhuong">
		
		 <?php while ($row = $query->fetch_assoc()) : ?>	
			<div class="mainXu">
					<a href="sanpham.php"><img src="./img/<?= $row['anh'] ?>" alt=""></a><br />
					<a style="margin: 0;"><?= $row['ten'] ?></a><br />
					<a style="margin: 0;"><?= $row['mota'] ?></a><br />	
		 </div>
			<?php endwhile; ?>
		
	 </div>

	<br />
	<br />

	<div class="lookimg">
        <img src="./img/gt.png" alt="">
        <img src="./img/img4.png" alt="">
     </div>
	<div id="footer"><?php require_once 'footer.php'; ?></div>
</div>

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

	  <script>
		  let nextS2 = document.querySelector('.leftS2');
let preS2 = document.querySelector('.rightS2');
let carouselSlideS2 = document.querySelector('.carouselPreS2');
let carouselS2 = document.querySelectorAll('.itemsS2');
let counters2 = 0;
const sizeS2 = carouselS2[0].clientWidth + 20;

function renderSlides2() {
    carouselSlideS2.style.transform = 'translateX(' + (-sizeS2 * counters2) + 'px)';
    carouselSlideS2.style.transition = "transform .75s ease";
    if (counters2 === 0) {
        preS2.style.display = 'none';
    } else {
        preS2.style.display = 'block';
    }
    if (counters2 === (carouselS2.length - 4)) {
        nextS2.style.display = 'none';
    } else {
        nextS2.style.display = 'block';
    }

}
nextS2.addEventListener('click', function() {
    ++counters2;
    renderSlides2();
    preS2.style.opacity = '2'
});
preS2.addEventListener('click', function() {
    --counters2;
    renderSlides2();
});
	  </script>
</body>

</html>