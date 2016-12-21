-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 02:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiddytoys`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ProductID` int(11) NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL,
  `QuantityBuy` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Idproduce` int(11) NOT NULL,
  `productname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imglink` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Idproduce`, `productname`, `price`, `category`, `imglink`) VALUES
(5, 'Cho Dom', 1000, 'thubong', 'uploads/products/16346_1.jpg'),
(4, 'Chim Canh Cut', 1000, 'thubong', 'uploads/products/14632_1.jpg'),
(3, 'YugioH Card', 10000, 'Card', 'uploads/products/10bobaiyugioh25la1bo.jpg'),
(6, 'Cho Đen', 1000, 'thubong', 'uploads/products/16371_1.jpg'),
(7, 'Cho Trắng', 1000, 'thubong', 'uploads/products/16372_1.jpg'),
(8, 'Chó Xù', 1000, 'thubong', 'uploads/products/30294374cho-nui-bernesse-me719.jpg'),
(9, 'Xe Trượt', 10000, 'vandong', 'uploads/products/63773099xe-truot-3-banh-zing400.jpg'),
(10, 'Virizion', 10000, 'dochoitheophim', 'uploads/products/68850850do-choi-thu-nhua--m-050-virizion-699.jpg'),
(11, 'Búp Bê Lấp Lánh', 10000, 'bupbe', 'uploads/products/92131043bup-be-lap-lanh170.jpg'),
(12, 'Xe BMW', 10000, 'robot', 'uploads/products/101425908xe-bmw-i8-514.jpg'),
(13, 'Chó Berhard', 1000, 'thubong', 'uploads/products/158443018cho-st--bernhard343.jpg'),
(14, 'Xe Múc', 1000, 'robot', 'uploads/products/168727614xe-xuc-dao-mini779.jpg'),
(15, 'Terrakion', 10000, 'dochoitheophim', 'uploads/products/207542281do-choi-thu-nhua--m-049-terrakion-436.jpg'),
(16, 'Shandera', 10000, 'dochoitheophim', 'uploads/products/218687512do-choi-thu-nhua--m-005-shandera-125.jpg'),
(17, 'Lọ lem', 10000, 'dochoitheophim', 'uploads/products/236717828thoi-trang-cua-lo-lem-mini848.jpg'),
(18, 'Chó Chăn Cừu Đức', 10000, 'thubong', 'uploads/products/250143744cho-chan-cuu-duc10.jpg'),
(19, 'Xe ben mini', 10000, 'robot', 'uploads/products/285515868xe-ben-mini651.jpg'),
(20, 'Xe điều khiển', 10000, 'robot', 'uploads/products/286634695murcielago-lp670-4-581.jpg'),
(21, 'Xe múc 4 bánh', 10000, 'robot', 'uploads/products/290894841xe-xuc-4-banh-mini238.jpg'),
(22, 'Xe trượt màu đỏ', 1000, 'vandong', 'uploads/products/298210244xe-truot-3-banh-mau-do-den-zing397.jpg'),
(23, 'Lâu đài công chúa', 10000, 'bupbe', 'uploads/products/309570634lau-dai-cong-chua150.jpg'),
(24, 'Thời trang bạch tuyết', 10000, 'dochoitheophim', 'uploads/products/321662565thoi-trang-du-tiec-cua-bach-tuyet-mini320.jpg'),
(25, 'Ulgamoth', 10000, 'dochoitheophim', 'uploads/products/333022955do-choi-thu-nhua--m-038-ulgamoth-new-73.jpg'),
(26, 'Xe tải mercedes', 1000, 'robot', 'uploads/products/448391160xe-tai-mercedes-benz-zetros-voi-bat-phu726.jpg'),
(27, 'Nàng tiên cá', 10000, 'dochoitheophim', 'uploads/products/458761820vu-dieu-dai-duong386.jpg'),
(28, 'Bé cưng', 1000, 'bupbe', 'uploads/products/500201425be-cung-va-ta-giay-than-ki418.jpg'),
(29, 'Xe lắp ráp', 1000, 'robot', 'uploads/products/506010716do-choi-lap-rap-cat---xe-ben--xe-xuc-4-banh---xe-dao-dat132.jpg'),
(30, 'Donnie Thông Minh', 10000, 'dochoitheophim', 'uploads/products/565824892donnie-thong-minh788.jpg'),
(31, 'Bé cưng tập bò', 1000, 'bupbe', 'uploads/products/584629780be-cung-tap-bo538.jpg'),
(32, 'Xe điều khiển cyklone', 1000, 'robot', 'uploads/products/624563273do-choi-xe-dieu-khien-cyklone-360--cam-40-125.jpg'),
(33, 'Công chúa elsa', 1000, 'dochoitheophim', 'uploads/products/630200436bup-be-cong-chua-elsa-mini-lap-lanh389.jpg'),
(34, 'công chúa anna', 1000, 'dochoitheophim', 'uploads/products/647499212cong-chua-anna-va-than-rung695.jpg'),
(35, 'xe đào đất', 1000, 'robot', 'uploads/products/651286009xe-dao-dat-mini613.jpg'),
(36, 'Chó Úc', 10000, 'thubong', 'uploads/products/654943711cho-australian-shepherd-me692.jpg'),
(37, 'elsa', 1000, 'dochoitheophim', 'uploads/products/748537835vui-hat-cung-nu-hoang-elsa318.jpg'),
(38, 'Tamagetake', 10000, 'dochoitheophim', 'uploads/products/748796026do-choi-thu-nhua--m-037-tamagetake-995.jpg'),
(39, 'Công chúa tóc mây', 10000, 'dochoitheophim', 'uploads/products/762135878picnic-cung-cong-chua-toc-may-mini932.jpg'),
(40, 'Công chúa anine', 1000, 'dochoitheophim', 'uploads/products/799100178bup-be-cong-chua-anna-mini-lap-lanh242.jpg'),
(41, 'Xe cyklone đen', 1000, 'robot', 'uploads/products/834902620do-choi-xe-dieu-khien-cyklone-360--den-27-9.jpg'),
(42, 'Xe cyklone xanh', 1000, 'robot', 'uploads/products/905173519do-choi-xe-dieu-khien-cyklone-360--xanh-40-551.jpg'),
(43, 'Công chúa belle', 1000, 'dochoitheophim', 'uploads/products/912230731thoi-trang-cua-cong-chua-belle-mini34.jpg'),
(44, 'Phòng ngủ của anna', 10000, 'dochoitheophim', 'uploads/products/994679624phong-ngu-cua-anna-mini970.jpg'),
(45, 'Chú hổ cảm ứng', 1000, 'robot', 'uploads/products/1035172530do-choi-chu-ho-cam-ung522.jpg'),
(46, 'Bạch tuyết làm vườn', 1000, 'dochoitheophim', 'uploads/products/1057592088lam-vuon-cung-bach-tuyet-mini740.jpg'),
(47, 'Kumasyun', 1000, 'dochoitheophim', 'uploads/products/1163364206do-choi-thu-nhua--m-047-kumasyun-760.jpg'),
(48, 'Búp bê lạ lùng', 10000, 'bupbe', 'uploads/products/1183503080bup-be-la-lung504.jpg'),
(49, 'Chó boxer', 1000, 'thubong', 'uploads/products/1255753441cho-boxer-229.jpg'),
(50, 'Moncole', 1000, 'dochoitheophim', 'uploads/products/1256226790do-choi-thu-nhua--m-006-moncole-kurumiru-970.jpg'),
(51, 'elsa trượt băng', 1000, 'dochoitheophim', 'uploads/products/1312684487truot-bang-cung-elsa-va-anna834.jpg'),
(52, 'Búp bê hồng hào', 1000, 'bupbe', 'uploads/products/1319397445bup-be-hong-hao415.jpg'),
(53, 'Công chúa tóc xù', 1000, 'dochoitheophim', 'uploads/products/1325206736thoi-trang-da-tiec-cua-cong-chua-toc-xu129.jpg'),
(54, 'Chú rùa cảm ứng', 1000, 'robot', 'uploads/products/1327530452do-choi-chu-rua-cam-ung215.jpg'),
(55, 'xe trượt màu hồng', 1000, 'vandong', 'uploads/products/1355759301xe-truot-3-banh-zing147.jpg'),
(56, 'Bộ 6 búp bê', 1000, 'bupbe', 'uploads/products/Bộ búp bê Nữ hoàng băng giá Frozen Elsa và Anna-215x215.jpg'),
(57, 'pokemon lắp ráp', 10000, 'dochoitheophim', 'uploads/products/bo-4-hop-do-choi-lap-rap-pokemon-go-215x215.jpg'),
(58, 'Bộ bàn bilac', 1000, 'game', 'uploads/products/bobanhbannho.jpg'),
(59, 'Bộ bóng rổ', 1000, 'game', 'uploads/products/bobongro3trong1.jpg'),
(60, 'Bộ quay lô tô', 1000, 'game', 'uploads/products/boquayloto.jpg'),
(61, 'Búp bê elsa', 1000, 'bupbe', 'uploads/products/bupbe-elsa.jpg'),
(62, 'nàng bạch tuyết', 1000, 'dochoitheophim', 'uploads/products/bupbe-nangbachtuyet.jpg'),
(63, 'Búp bê sunset', 1000, 'bupbe', 'uploads/products/bupbesunset.jpg'),
(64, 'Bút sáp 48 màu', 1000, 'game', 'uploads/products/butsap48mau.jpg'),
(65, 'Đàn organ', 1000, 'dochoitritue', 'uploads/products/dan-organ-37-phim-co-micro-cap-sac-215x215.jpg'),
(66, 'Lego', 1000, 'dochoitritue', 'uploads/products/do choi LEGO 10558 (3).jpg'),
(67, 'Đồ chơi học tiếng anh', 1000, 'dochoitritue', 'uploads/products/dochoihoctienganh.jpg'),
(68, 'Bộ đồ nấu ăn', 1000, 'dodungnhabep', 'uploads/products/dochoinauanminibox.jpg'),
(69, 'Transformers', 1000, 'dochoitheophim', 'uploads/products/do-choi-rap-xe-may-bay-thanh-robot-10-con-215x215.jpg'),
(70, 'Xe Cứu Hỏa', 1000, 'robot', 'uploads/products/do-choixe-cuu-hoa-co-bon-chua-nuoc-6-banh-chay-tron-3-215x215.jpg'),
(71, 'Xe nhào lộn', 1000, 'robot', 'uploads/products/do-choi-xe-dieu-khien-nhao-lon-banh-den-215x215.jpg'),
(72, 'Bóc trứng pokemon', 1000, 'dochoitheophim', 'uploads/products/hop-do-choi-boc-trung-pokemon-12-qua-bang-nhua-215x215.jpg'),
(73, 'Trống', 1000, 'dochoitritue', 'uploads/products/hop-do-choi-bo-trong-drum-set-kem-ghe-215x215.jpg'),
(74, 'Búp bê cô dâu', 10000, 'bupbe', 'uploads/products/hop-do-choi-bup-be-co-dau-11-khop-noi-chu-re-ken-270x270.jpg'),
(75, 'xe đua f1', 10000, 'robot', 'uploads/products/hop-do-choi-xe-dua-the-thao-f1-dieu-khien-tu-xa-1548-180x180.jpg'),
(76, 'Xe tăng chiến đấu', 10000, 'robot', 'uploads/products/hop-do-choi-xe-tank-chien-dau-dung-pin-270x270.jpg'),
(77, 'Chuột lửa', 1000, 'dochoitheophim', 'uploads/products/pokemon-chuotlua.jpg'),
(78, 'cobalon', 10000, 'dochoitheophim', 'uploads/products/pokemoncobalon.jpg'),
(79, 'Gà lửa', 1000, 'dochoitheophim', 'uploads/products/pokemon-galua.jpg'),
(80, 'Mèo hỏa tiễn', 10000, 'dochoitheophim', 'uploads/products/pokemon-meohoatien.jpg'),
(81, 'pikachu', 10000, 'dochoitheophim', 'uploads/products/pokemon-pikachu.jpg'),
(82, 'Rùa nước', 10000, 'dochoitheophim', 'uploads/products/pokemon-zenigame.jpg'),
(83, 'Robot bắn bi', 1000, 'robot', 'uploads/products/robotbanbi.jpg'),
(84, 'Sách tấm cám', 10000, 'dochoitritue', 'uploads/products/sachtamcam.jpg'),
(85, 'súng nhựa hít tường', 10000, 'game', 'uploads/products/sungnhuahittuong.jpg'),
(86, 'Xe nhỏ', 1000, 'robot', 'uploads/products/vi-do-choi-rap-20-xe-oto-thanh-robot-chay-tron-215x215.jpg'),
(87, 'Xe 3 bánh con ong', 100000, 'dochoivandong', 'uploads/products/xe3banhconong.jpg'),
(88, 'Xe đạp 14inch', 1000000, 'dochoivandong', 'uploads/products/xedap14inch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `phone`, `email`, `pass`) VALUES
(23, 'thai son', '939393', 'thaison1995py@gmail.com', 'son12'),
(22, 'huynh tan loi', '0940', 'tanloi@gmail.com', 'loi12'),
(20, '', '', '', ''),
(21, 'BuiLeHuynh1', '2222', 'huynh@gmail.com', 'huynh12'),
(19, 'BuiLeHuynh', '0000', 'buivana@gmail.com', 'huynh12'),
(15, 'Nguyen Trong Ngoc', '969535756', 'ducdm@uit.edu.vn', 'ngoc'),
(16, 'hoang minh trang', '969535756', 'ducdm@uit.edu.vn', 'trang'),
(18, 'Nguyen Trong Ngoc', '0969535756', 'nguyentrongngoc1995@gmail.com', 'ngoc12'),
(17, 'Nguyen Trong Ngoc', '969535756', 'ducdm@uit.edu.vn', 'ngoc'),
(24, 'vanphong', '9393', 'vanphong@gmail.com', 'phong12'),
(25, 'Nguyen Trong Ngoc', '000093', 'trongngoc@gmail.com', 'ngoc12'),
(26, 'lehuyenh', 'h22', 'lehuynh@gmail.com', 'huynh12'),
(27, 'ThÃ¡i BÃ¡ Äá»©c', '02999', 'thaibaduc@gmail.com', 'duc12'),
(28, 'phuoctan', '000000000000', 'phuoctan@gmail.com', 'tan12'),
(29, '222', '2212222', 'nguye2ntrongngoc1995@gmail.com', '22'),
(30, 'trinh trong tin', '02922222', 'tintrinh@gmail.com', 'tin123'),
(31, 'hehe', 'admin', 'sssss@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`UserID`,`ProductID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Idproduce`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Idproduce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
