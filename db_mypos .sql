-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 12:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mypos`
--

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE `custumer` (
  `custumer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custumer`
--

INSERT INTO `custumer` (`custumer_id`, `name`, `jenis_kelamin`, `phone`, `address`, `created`, `updated`) VALUES
(3, 'Rahman', 'L', '082647483738', 'Jl Anda', '2020-05-28 15:55:20', '0000-00-00'),
(4, 'Yuda', 'L', '082647453838', 'Jl jalan', '2020-05-28 15:56:04', '0000-00-00'),
(5, 'Ayu', 'P', '082337453749', 'Jl hati hati', '2020-05-28 15:57:02', '0000-00-00'),
(6, 'Ais', 'P', '082394417373', 'Jl indah', '2020-06-01 01:42:22', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `updated`) VALUES
(10, 'IPHONE', '2020-05-26 02:10:36', '0000-00-00 00:00:00'),
(11, 'OPPO', '2020-05-26 02:10:47', '0000-00-00 00:00:00'),
(12, 'XIAOMI', '2020-05-26 02:11:02', '0000-00-00 00:00:00'),
(13, 'ASUS', '2020-05-26 02:11:10', '0000-00-00 00:00:00'),
(14, 'SAMSUNG', '2020-05-29 23:57:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(10) NOT NULL DEFAULT 0,
  `image` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `image`, `created`, `updated`) VALUES
(3, 'A001', 'ASUS ROG Phone 2', 13, 9, 8000000, 5, 'item-200529-097802338c.jpg', '2020-05-26 02:12:44', '2020-05-31 02:20:33'),
(4, 'A002', 'IPHONE X ', 10, 9, 13000000, 0, 'item-200527-d67bfed038.jpg', '2020-05-26 02:13:11', '2020-05-29 23:48:40'),
(5, 'A003', 'Oppo A3s', 11, 9, 2800000, 0, 'item-200527-630a4665e1.jpg', '2020-05-26 02:39:43', '2020-05-27 12:21:30'),
(8, 'A004', 'Xiaomi Mi CC9e ', 12, 9, 4800000, 0, 'item-200528-2d54d1b8b1.jpg', '2020-05-28 16:03:57', NULL),
(12, 'A005', 'XIOMI Redmi Note 8', 12, 9, 2000000, 0, 'item-200530-bc34e3a8e9.jpg', '2020-05-30 00:14:01', NULL),
(13, 'A006', 'SAMSUNG GALAXY A20', 14, 9, 1800000, 0, 'item-200530-29f73c4f4c.jpg', '2020-05-30 00:15:21', NULL),
(14, 'A007', 'IPHONE SE 2020', 10, 9, 8000000, 0, 'item-200530-21f12adc91.png', '2020-05-30 00:16:13', NULL),
(15, 'A008', 'OPPO A5', 11, 9, 2500000, 0, 'item-200530-56963a4438.jpg', '2020-05-30 00:17:47', NULL),
(16, 'A009', 'SAMSUNG A50', 14, 9, 3000000, 0, 'item-200530-12cf64a51f.jpg', '2020-05-30 00:19:02', NULL),
(17, 'A010', 'XIAOMI BLACKSHARK 2', 12, 9, 7000000, 0, 'item-200530-b773965fe7.jpg', '2020-05-30 00:34:09', NULL),
(18, 'A011', 'ASUS Zenfone 6', 13, 9, 3000000, 0, 'item-200530-a7e7ce25fa.jpg', '2020-05-30 00:36:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(9, 'Buah', '2020-05-26 02:11:26', '2020-05-26 04:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(10, 'TOKO A ', '0441-676-120', 'Makassar', 'Supplier Asus', '2020-05-21 20:12:57', '2020-05-26 04:51:29'),
(11, 'TOKO B', '0441-2728-77', 'Jl kentang', 'Supplier OPPO', '2020-05-26 04:52:03', '2020-05-28 16:00:24'),
(12, 'TOKO C', '0441-3673-37', 'Jl Perhatian', 'Toko', '2020-05-28 15:57:45', '2020-05-28 20:57:45'),
(13, 'TOKO D', '0441-8485-87', 'Jl Kemana', 'Toko ', '2020-05-28 15:58:35', '2020-05-28 20:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(100) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `supplier_id`, `qty`, `date`, `created`, `user_id`) VALUES
(1, 3, 'in', '64 GB', 10, 2, '2020-06-03', '0000-00-00 00:00:00', 1),
(2, 3, 'in', '64 GB', 10, 3, '2020-06-03', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addres` text NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `addres`, `level`) VALUES
(1, 'admin', 'admin', 'Fawwaz Bayureksa', 'Makassar', 1),
(2, 'kasir', 'kasir', 'Ainul', 'Jenneponto', 2),
(6, 'ullah', 'ullah', 'Nasrullah', 'Galesong', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`custumer_id`);

--
-- Indexes for table `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `custumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `p_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `p_category` (`category_id`),
  ADD CONSTRAINT `p_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`);

--
-- Constraints for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
