-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 05:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uphone` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `uaddress` varchar(100) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pprice` varchar(50) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `uimage` varchar(100) NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `od` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `cancel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `uname`, `uphone`, `uemail`, `uaddress`, `pname`, `pprice`, `pimage`, `uimage`, `orderid`, `od`, `status`, `size`, `cancel`) VALUES
(230, 'Amit Mandal', '9382370394', 'amitmandal6210@gmail.com', 'Vill+Po: Kantanagar,Ps: Bhagwangola, Dist: Murshidabad, Pin:742135', 'beauty best', '629', 'download (4).jpg', ' squarephoto.photoeditor.photosquare_2022219171237413.png', '713489', '18/08/22', 'Completed', 's', 'Order Canceled'),
(232, 'Amit Mandal', '9382370394', 'amitmandal6210@gmail.com', 'Vill+Po: Kantanagar,Ps: Bhagwangola, Dist: Murshidabad, Pin:742135', 'kurti', '979', 'download (2).jpg', ' squarephoto.photoeditor.photosquare_2022219171237413.png', '977652', '18/08/22', 'Completed', 'xxl', 'Cancel'),
(233, 'Amit Mandal', '9382370394', 'amitmandal6210@gmail.com', 'Vill+Po: Kantanagar,Ps: Bhagwangola, Dist: Murshidabad, Pin:742135', 'beauty best', '629', 'download (4).jpg', ' squarephoto.photoeditor.photosquare_2022219171237413.png', '535423', '18/08/22', 'Processing', 'm', 'Order Canceled'),
(235, 'Samir Mandal', '7699199261', 'mandalsamir649@gmail.com', 'Amdahara Haziganja, West Bengal 742123, India\r\nN097', '3 pices kurti ', '529', 'images (1).jpg', ' default.jpg', '976465', '26/08/22', 'Processing', 'xl', 'Order Canceled'),
(236, 'Amit Mandal', '9382370394', 'amitmandal6210@gmail.com', 'Vill+Po: Kantanagar,Ps: Bhagwangola, Dist: Murshidabad, Pin:742135', 'kurti max', '629', 'download (5).jpg', ' squarephoto.photoeditor.photosquare_2022219171237413.png', '389664', '02/09/22', 'Processing', 'xs', 'Order Canceled');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(38, 'kurti', '350', 'download (2).jpg'),
(39, 'kurti', '780', 'download (3).jpg'),
(40, 'beauty best', '390', 'download (4).jpg'),
(41, 'kurti max', '599', 'download (5).jpg'),
(42, 'professional kurti', '499', 'download.jpg'),
(43, '3 pices kurti ', '499', 'images (1).jpg'),
(44, 'grand op', '200', 'images (2).jpg'),
(45, 'kurti ak', '499', 'images (3).jpg'),
(47, 'fdg', '565', 'images (5).jpg'),
(48, 'kljhh', '652', 'images (7).jpg'),
(49, 'le hungha', '699', 'images (8).jpg'),
(50, 'lehungha macu', '249', 'images (9).jpg'),
(51, 'rteasas', '780', 'images (10).jpg'),
(52, 'retyy', '965', 'images (11).jpg'),
(53, 'sders', '326', 'images (12).jpg'),
(54, 'we', '235', 'images (13).jpg'),
(55, 'ytionm b', '250', 'images (14).jpg'),
(56, 'pokaks', '300', 'images (15).jpg'),
(58, 'qaas', '699', 'images (17).jpg'),
(59, 'laoains', '499', 'images (18).jpg'),
(63, 'asa', '23', 'ryan-hoffman-6Nub980bI3I-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conform` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `address`, `password`, `conform`, `photo`) VALUES
(33, 'Amit Mandal', '9382370394', 'amitmandal6210@gmail.com', 'Vill+Po: Kantanagar,Ps: Bhagwangola, Dist: Murshidabad, Pin:742135', '1', '1', ' squarephoto.photoeditor.photosquare_2022219171237413.png'),
(34, 'MEGHA BHATT', '1234567890', 'megha@gmail.com', 'kolkata', '1', '1', 'b1.jpg'),
(35, 'Amit 2', '1111111111', 'sd@gmail.com', 'Kali', 'l', 'l', ' default.jpg'),
(36, 'Megha Bhatt', '8617421629', 'meghabhatt1403@gmail.com', 'Kharagpur ', 'Meg14', 'Meg14', 'sales-shopping-vector-21931578.jpg'),
(37, 'Samir Mandal', '9382844714', 'mandalsamir2011@gmail.com', 'Amdahara Haziganja, West Bengal 742123, India\r\nN097', 'SAMIROMM', 'SAMIROMM', ' default.jpg'),
(38, 'Samir Mandal', '7699199261', 'mandalsamir649@gmail.com', 'Amdahara Haziganja, West Bengal 742123, India\r\nN097', 'SAMIROMM', 'SAMIROMM', ' default.jpg'),
(39, '', '', '', '', '', '', ' default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
