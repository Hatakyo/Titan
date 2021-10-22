-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 11:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titan`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 1),
(2, 'linh', 'linh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(50) NOT NULL,
  `ten` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten`, `anh`, `mota`) VALUES
(1, 'Mô hình cao cấp', 'chibi.jpg', 'tập hợp các mô hình chính hãng của Onepiece, Naruto, dragonball, Attack on Titan.... cũng như các nhân vật trong Liên minh huyền thoại, Overwatch, ...'),
(2, 'Phụ kiện', 'kiem.jpg', 'phụ kiện titan áp dụng trên tất cả các nhất vật anime , thông tin về tai nghe , móc khóa găng tay, nhẫn , vòng cổ vòng tay ,các phụ kiện khác'),
(3, 'Đồ chơi công nghệ', 'gun.jpg', 'Các công nghệ càng được cải tiến thì mọi người  càng có nhiều cơ hội sở hữu thêm những bộ đồ chơi để họ được bận rộn vào những lúc rảnh rỗi không đi làm');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(50) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `ten` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(259) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(50) NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `type`, `ten`, `anh`, `gia`, `mota`) VALUES
(1, 0, 'ACE RỰC LỬA', 'img1.jpg', 10200000, 'Figure Ace rực lửa - bom tấn 2019 Hàng limitted<br />Kích thước : 34 * 34 * 46<br />Khối lượng dự kiến 15kg'),
(2, 0, 'GOKU SSJ 3', 'img2.jpg', 15300000, 'Figure Goku SSJ 3 phiên bản mới nhất 2019 <br />Kích thước:50*56*60<br />Cân nặng khoảng:30kg '),
(3, 0, 'ITACHI SASUNO', 'img3.jpg', 15800000, 'Figure Itachi sasuno siêu phẩm 2019<br />Kích thước : 63 * 70 * 50<br />Khối lượng dự kiến 43kg'),
(4, 0, 'MONKEY D. LUFFY', 'img4.png', 12500000, 'Hello các bạn, chắc hẳn đã là một fan One Piece thì chúng ta không xa lạ gì với thuyển truởng băng hải tặc mũ rơm Monkey D. Luffy nhỉ, Luffy đang lên kế hoạch liên minh với Law lật đổ một trong những tứ hoàng phải nói là \"tự sát mà không chết\" Kaido, để cổ vũ tinh thân của \"Ngũ Hoàng\" Luffy shop nhận order mẫu mô hình chất luợng này :<br />Kích thước: 54cm*32cm*32cm<br />Cân nặng khoảng: 9 KG'),
(5, 0, 'ZORO CỰC BỰA', 'img5.jpg', 350000, 'Tên: Mô hình Zoro cực bựa<br />Chất liệu: Nhựa PVC cao cấp bền màu<br />Chiều cao: 18cm'),
(6, 0, 'GOD USOPP', 'img6.png', 11500000, 'Dưới trướng ta là 80 triệu thuộc hạ God Usopp, sức mạnh của  Thánh Gió  là một cái gì đó khiến cho kẻ thù khiếp sợ. Là xạ thủ cừ khôi của băng hải tặc Mũ Rơm. <br />Kích thước: 45cm*43cm*46cm<br />Cân nặng khoảng: 15 KG<br />Số luợng : 378 sản phẩm trên thế giới<br />Tỉ Lệ : 1/6'),
(7, 0, 'KAKASHI HATAKE', 'img8.jpg', 800000, 'Mô hình cao khoảng 10cm. <br />Chất liệu: Nhựa PVC cao cấp, không độc hại. <br />Mô hình có sẵn đế trưng bày, 3 dạng mặt biểu cảm và phụ kiện đi kèm.<br />Nendoroid không thể tự đứng được, bạn phải dùng giá đỡ đi kèm. <br />Mô hình có độ chi tiết tốt , có thiết kế đẹp mắt, màu sắc tươi sáng, dễ thương, thích hợp để trang trí hay chụp ảnh'),
(8, 0, 'Hyuuga Hinata', 'img9.jpg', 300000, 'Chất liệu: Nhựa PVc cao cấp bền màu<br />Chiều cao: 21cm'),
(9, 0, 'HULK', 'img10.jpg', 50000, 'Chất liệu: Nhựa PVC cao cấp bền màu<br />Chiều cao: 25cm<br />Có thể cứ động khớp bụng, tay, chân'),
(10, 0, 'TONY STARK (IRON MAN)', 'img11.jpg', 780000, 'He is Iron Man<br />Một Figure đỉnh từ đầu đến cuối: nét mặt, box và dáng, phụ kiện,....<br />Avengers đã tạo nên một Tony Stark quá đẳng cấp<br />Như một lời tri ân - Titan sẽ cố hết sức mang điều đó về cho anh em<br />Chiều cao: 20 cm<br />Chất liệu: PVC cao cấp bền màu'),
(11, 0, 'SÚNG CHƠI GAME THỰC TẾ ẢO AR', 'gun.jpg', 50000, 'mẫu đồ chơi thông minh cao cấp đem lại cảm giác chơi game SIÊU chân thật.<br />Với 29 thể loại game khác nhau và đầy đủ các thể loại.<br />Tương thích với hầu hết tất cả các dòng điện thoại hiện nay!!!'),
(13, 1, 'Nhẫn Sharingan Naruto Shippuuden', 'img13.jpg', 17000, ' Nhẫn Sharingan Cosplay Anime Naruto Shippuuden<br />\r\nCác chi tiết được làm bằng tay hết sức tỉ mỉ <br />\r\nKích thước: Đường kính khoảng 1,8-1,9cm, nhẫn một kích thước không điều chỉnh được;<br />\r\nChất Liệu : hợp kim'),
(14, 1, '\r\nDây chuyền mảnh ghép anime Yugioh', 'img14.jpg', 24000, 'Màu sắc: bạc, vàng<br />\r\n Chất liệu: hợp kim<br />\r\n Gói hàng bao gồm: 1 x sản phẩm<br />\r\n Kích thước: như hình ảnh<br />\r\n Dây chuyền mặt hình mảnh ghép anime Yugioh phối tua rua độc đáo dùng làm quà tặng'),
(15, 1, 'Nhẫn Thép Anime Kurokawa', 'img15.jpg', 19000, 'Màu sắc: Như hình <br />\r\nGói chứa: 1 * Nhẫn / Vòng cổ<br />\r\nKích thước: 1.8cm<br />\r\nLoại sản phẩm: Nhẫn / Vòng cổ <br />\r\nVật liệu: thép không gỉ <br />\r\nGhi chú: <br />\r\nVui lòng cho phép lỗi nhỏ do đo lường thủ công.<br />\r\nMàu sắc có thể có một chút khác biệt đối với các màn hình khác nhau.'),
(16, 1, 'Dây Chuyền Mặt Hình Phong Cách ', 'img16.jpg', 25999, 'Loại sản phẩm: Dây chuyền <br />\r\n\r\nChất liệu: Kim loại <br />\r\n\r\nGói hàng bao gồm: 1x Dây chuyền mặt kim loại phong cách anime'),
(17, 1, 'Vòng đeo tay da PU ', 'img17.jpg', 39000, '\r\nchất liệu: da + hợp kim <br />\r\nkích thước vòng tay: 20 * 1.2cm<br />\r\ntrọng lượng: 25g / pc<br />\r\nmàu nâu<br />'),
(18, 1, 'Bộ 7 viên Ngọc Rồng Dragon Ball', 'img18.jpg', 989000, 'Tên sản phẩm: Bộ 7 Viên Ngọc Rồng Fullbox Size Lớn 7.5cm - Dragon Ball <br />\r\nĐường kinh: Đường Kính Lớn 7.5 Cm Mỗi Viên  <br />\r\nChất liệu: Thủy Tính Hữu Cơ Bền Đép , Sáng Bóng  <br />\r\nĐống Hộp : Sản phẩm đi kèm bộ hộp đẹp sáng trong như hình  <br />\r\nSử dụng: Trưng Bầy Mô Hình Đọc Đáo, Quà tặng , kỉ niệm, Bộ sưu tập dragon ball'),
(23, 1, 'Nhẫn Sharingan Naruto Shippuuden', 'img13.jpg', 17000, ' Nhẫn Sharingan Cosplay Anime Naruto Shippuuden<br />\r\nCác chi tiết được làm bằng tay hết sức tỉ mỉ <br />\r\nKích thước: Đường kính khoảng 1,8-1,9cm, nhẫn một kích thước không điều chỉnh được;<br />\r\nChất Liệu : hợp kim'),
(24, 1, '\r\nDây chuyền Yugioh', 'img14.jpg', 24000, 'Màu sắc: bạc, vàng<br />\r\n Chất liệu: hợp kim<br />\r\n Gói hàng bao gồm: 1 x sản phẩm<br />\r\n Kích thước: như hình ảnh<br />\r\n Dây chuyền mặt hình mảnh ghép anime Yugioh phối tua rua độc đáo dùng làm quà tặng');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `hovaten` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sodt` int(11) DEFAULT NULL,
  `loaithanhtoan` varchar(255) DEFAULT NULL,
  `tên_sp` varchar(255) DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`id`, `acc_id`, `sp_id`, `hovaten`, `diachi`, `sodt`, `loaithanhtoan`, `tên_sp`, `soluong`, `tongtien`) VALUES
(1, 2, 1, 'Phan Quang Linh', 'Hà Nội', 333881198, 'Trực tiếp Paypal', 'ACE RỰC LỬA', 2, 20400000),
(2, 2, 3, 'Phan Quang Linh', 'Hà Nội', 333881198, 'Trực tiếp Paypal', 'ITACHI SASUNO', 3, 47400000),
(3, 2, 2, 'hishis', 'Hà Nội', 333881198, 'Ships', 'GOKU SSJ 3', 3, 45900000),
(4, 2, 1, 'Phan Quang Linh', 'nha', 333881198, 'Ships', 'ACE RỰC LỬA', 2, 20400000),
(5, 2, 3, 'Phan Quang Linh', 'nha', 333881198, 'Ships', 'ITACHI SASUNO', 2, 31600000);

-- --------------------------------------------------------

--
-- Table structure for table `ykienkh`
--

CREATE TABLE `ykienkh` (
  `id` int(11) NOT NULL,
  `id_acc` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ykienkh`
--

INSERT INTO `ykienkh` (`id`, `id_acc`, `name`, `email`, `sdt`, `comment`) VALUES
(2, 1, 'Phan Quang Linh', 'hatakyooo1@gmail.com', 123123, ''),
(3, 1, 'Phan Quang Linh', 'hatakyooo1@gmail.com', 123123, ' sản phẩm khá tốt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ykienkh`
--
ALTER TABLE `ykienkh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ykienkh`
--
ALTER TABLE `ykienkh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
