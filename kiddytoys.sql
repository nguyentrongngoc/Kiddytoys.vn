-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 07:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
  `idphone` int(11) NOT NULL,
  `productname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imglink` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD PRIMARY KEY (`idphone`);

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
  MODIFY `idphone` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
