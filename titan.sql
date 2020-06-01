-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 07:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(50) NOT NULL,
  `ten` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(50) NOT NULL,
  `soluong` int(50) NOT NULL,
  `id_sp` int(50) NOT NULL,
  `anh` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `ten`, `gia`, `soluong`, `id_sp`, `anh`) VALUES
(1, 'ACE RỰC LỬA', 10200000, 1, 1, 'img1.jpg'),
(2, 'GOKU SSJ 3', 15300000, 1, 2, 'img2.jpg'),
(3, 'ITACHI SASUNO', 15800000, 1, 3, 'img3.jpg'),
(4, 'MONKEY D. LUFFY', 12500000, 1, 4, 'img4.png'),
(5, 'ZORO CỰC BỰA', 350000, 1, 5, 'img5.jpg'),
(6, 'GOD USOPP', 11500000, 1, 6, 'img6.png'),
(7, 'KAKASHI HATAKE', 800000, 1, 7, 'img8.jpg'),
(8, 'Hyuuga Hinata', 300000, 1, 8, 'img9.jpg'),
(9, 'HULK', 50000, 1, 9, 'img10.jpg'),
(10, 'TONY STARK (IRON MAN)', 780000, 1, 10, 'img11.jpg'),
(11, 'SÚNG CHƠI GAME THỰC TẾ ẢO AR', 50000, 1, 11, 'gun.jpg'),
(12, 'Kiếm UCHIHA', 350000, 1, 12, 'kiem.jpg');

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
  `ten` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(259) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(50) NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten`, `anh`, `gia`, `mota`) VALUES
(1, 'ACE RỰC LỬA', 'img1.jpg', 10200000, 'Figure Ace rực lửa - bom tấn 2019 Hàng limitted<br />Kích thước : 34 * 34 * 46<br />Khối lượng dự kiến 15kg'),
(2, 'GOKU SSJ 3', 'img2.jpg', 15300000, 'Figure Goku SSJ 3 phiên bản mới nhất 2019 <br />Kích thước:50*56*60<br />Cân nặng khoảng:30kg '),
(3, 'ITACHI SASUNO', 'img3.jpg', 15800000, 'Figure Itachi sasuno siêu phẩm 2019<br />Kích thước : 63 * 70 * 50<br />Khối lượng dự kiến 43kg'),
(4, 'MONKEY D. LUFFY', 'img4.png', 12500000, 'Hello các bạn, chắc hẳn đã là một fan One Piece thì chúng ta không xa lạ gì với thuyển truởng băng hải tặc mũ rơm Monkey D. Luffy nhỉ, Luffy đang lên kế hoạch liên minh với Law lật đổ một trong những tứ hoàng phải nói là \"tự sát mà không chết\" Kaido, để cổ vũ tinh thân của \"Ngũ Hoàng\" Luffy shop nhận order mẫu mô hình chất luợng này :<br />Kích thước: 54cm*32cm*32cm<br />Cân nặng khoảng: 9 KG'),
(5, 'ZORO CỰC BỰA', 'img5.jpg', 350000, 'Tên: Mô hình Zoro cực bựa<br />Chất liệu: Nhựa PVC cao cấp bền màu<br />Chiều cao: 18cm'),
(6, 'GOD USOPP', 'img6.png', 11500000, 'Dưới trướng ta là 80 triệu thuộc hạ God Usopp, sức mạnh của  Thánh Gió  là một cái gì đó khiến cho kẻ thù khiếp sợ. Là xạ thủ cừ khôi của băng hải tặc Mũ Rơm. <br />Kích thước: 45cm*43cm*46cm<br />Cân nặng khoảng: 15 KG<br />Số luợng : 378 sản phẩm trên thế giới<br />Tỉ Lệ : 1/6'),
(7, 'KAKASHI HATAKE', 'img8.jpg', 800000, 'Mô hình cao khoảng 10cm. <br />Chất liệu: Nhựa PVC cao cấp, không độc hại. <br />Mô hình có sẵn đế trưng bày, 3 dạng mặt biểu cảm và phụ kiện đi kèm.<br />Nendoroid không thể tự đứng được, bạn phải dùng giá đỡ đi kèm. <br />Mô hình có độ chi tiết tốt , có thiết kế đẹp mắt, màu sắc tươi sáng, dễ thương, thích hợp để trang trí hay chụp ảnh'),
(8, 'Hyuuga Hinata', 'img9.jpg', 300000, 'Chất liệu: Nhựa PVc cao cấp bền màu<br />Chiều cao: 21cm'),
(9, 'HULK', 'img10.jpg', 50000, 'Chất liệu: Nhựa PVC cao cấp bền màu<br />Chiều cao: 25cm<br />Có thể cứ động khớp bụng, tay, chân'),
(10, 'TONY STARK (IRON MAN)', 'img11.jpg', 780000, 'He is Iron Man<br />Một Figure đỉnh từ đầu đến cuối: nét mặt, box và dáng, phụ kiện,....<br />Avengers đã tạo nên một Tony Stark quá đẳng cấp<br />Như một lời tri ân - Titan sẽ cố hết sức mang điều đó về cho anh em<br />Chiều cao: 20 cm<br />Chất liệu: PVC cao cấp bền màu'),
(11, 'SÚNG CHƠI GAME THỰC TẾ ẢO AR', 'gun.jpg', 50000, 'mẫu đồ chơi thông minh cao cấp đem lại cảm giác chơi game SIÊU chân thật.<br />Với 29 thể loại game khác nhau và đầy đủ các thể loại.<br />Tương thích với hầu hết tất cả các dòng điện thoại hiện nay!!!'),
(12, 'Kiếm UCHIHA', 'kiem.jpg', 350000, 'KIẾM GỖ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
