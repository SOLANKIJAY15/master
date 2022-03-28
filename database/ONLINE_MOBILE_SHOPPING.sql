-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: Mar 23, 2022 at 05:10 AM
=======
-- Generation Time: Mar 24, 2022 at 06:09 AM
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ONLINE_MOBILE_SHOPPING`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
<<<<<<< HEAD
  `cart_id` int(11) NOT NULL,
=======
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
<<<<<<< HEAD
  `pro_details_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
=======
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
<<<<<<< HEAD
  `cat_name` int(20) NOT NULL,
=======
  `cat_name` varchar(20) NOT NULL,
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `con_id` int(11) NOT NULL,
<<<<<<< HEAD
  `name` varchar(30) NOT NULL,
=======
  `name` varchar(100) NOT NULL,
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `status` tinyint(1) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `isDeleted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<<<<<<< HEAD
--
-- Dumping data for table `country`
--

INSERT INTO `country` (`con_id`, `name`, `status`, `CreatedAt`, `UpdatedAt`, `isDeleted`) VALUES
(1, 'INDIA', 1, '2022-03-21 10:07:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'GUJARAT', 2, '2022-03-21 10:07:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'USA', 1, '2022-03-21 10:07:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'LAS VEGAS', 2, '2022-03-21 10:07:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'AHEMDABAD', 3, '2022-03-21 10:08:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'BARODA', 3, '2022-03-21 10:08:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

=======
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
<<<<<<< HEAD
  `title` varchar(500) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `status` enum('isactive','inactive') NOT NULL,
  `id` int(11) NOT NULL,
  `pro_details_id` int(11) NOT NULL,
=======
  `title` varchar(200) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `status` enum('isactive','inactive') NOT NULL,
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
<<<<<<< HEAD
  `cart_id` int(11) NOT NULL,
  `pro_details_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `CreatedAt` int(11) NOT NULL,
  `UpdatedAt` int(11) NOT NULL
=======
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
<<<<<<< HEAD
  `type` enum('CASH','PAYTM','PHONE PAY','ATM','DEBIT CARD') NOT NULL,
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `CreatedAt` int(11) NOT NULL,
  `UpdatedAt` int(11) NOT NULL
=======
  `type` enum('cash','paytm','ATM','DEBIT') NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
<<<<<<< HEAD
  `brand_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
=======
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `pro_details_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `RAM` int(11) NOT NULL,
  `memory` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
<<<<<<< HEAD
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
=======
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `type` enum('admin','user') NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conform_password` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
<<<<<<< HEAD
  `con_id` int(11) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `street_address` varchar(300) NOT NULL,
  `pincode` int(12) NOT NULL,
=======
  `phone_no` int(15) NOT NULL,
  `street_address` varchar(150) NOT NULL,
  `pincode` int(6) NOT NULL,
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
<<<<<<< HEAD
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type`, `first_name`, `last_name`, `email`, `password`, `conform_password`, `image`, `con_id`, `phone_no`, `street_address`, `pincode`, `CreatedAt`, `UpdatedAt`) VALUES
(2, 'admin', 'jay', 'solanki', 'jyasolanki7622@gmail.com', '123456789', '123456789', 'images (1).jpeg', 5, 2147483647, 'fggrfd bfggfdgfdgfd', 123456, '2022-03-21 12:46:49', '0000-00-00 00:00:00'),
(3, 'admin', 'sdsd', 'jay', 'hh@gmail.com', '123456', '123456', 'images (1).jpeg', 5, 98226571, 'fggrfd bfggfdgfdgfd', 123456, '2022-03-22 05:24:17', '0000-00-00 00:00:00'),
(4, 'admin', 'jay', 'hhu', 'jyasolanki7622@gmail.com', '123456', '125311', 'images (3).jpeg', 5, 2147483647, 'fggrfd bfggfdgfdgfd', 123456, '2022-03-22 05:27:15', '0000-00-00 00:00:00'),
(5, 'admin', 'sdsd', 'solanki', 'admin@gmail.com', '2632232', '21313213', 'download.png', 5, 123456789, 'fggrfd bfggfdgfdgfd', 123456, '2022-03-22 05:34:53', '0000-00-00 00:00:00'),
(6, 'admin', 'himanshu', 'hgfhghgfhgf', 'dasfdfdfdfd@gmail.com', '123456', '123456', 'Screenshot from 2022-02-11 17-12-52.png', 5, 1234567899, 'fggrfd bfggfdgfdgfd', 123456, '2022-03-22 12:41:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
=======
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
<<<<<<< HEAD
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `cart_id` (`cart_id`);
=======
  ADD PRIMARY KEY (`brand_id`);
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
<<<<<<< HEAD
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `pro_details_id` (`pro_details_id`),
  ADD KEY `id` (`id`);
=======
  ADD PRIMARY KEY (`cart_id`);
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
<<<<<<< HEAD
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `id` (`id`),
  ADD KEY `pro_details_id` (`pro_details_id`);
=======
  ADD PRIMARY KEY (`f_id`);
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
<<<<<<< HEAD
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `pro_details_id` (`pro_details_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `id` (`id`);
=======
  ADD PRIMARY KEY (`order_id`);
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
<<<<<<< HEAD
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `id` (`id`);
=======
  ADD PRIMARY KEY (`p_id`);
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- Indexes for table `product`
--
ALTER TABLE `product`
<<<<<<< HEAD
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `id` (`id`);
=======
  ADD PRIMARY KEY (`pro_id`);
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
<<<<<<< HEAD
  ADD PRIMARY KEY (`pro_details_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con_id` (`con_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`pro_details_id`);
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
<<<<<<< HEAD
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
<<<<<<< HEAD
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `pro_details_id` int(11) NOT NULL AUTO_INCREMENT;
<<<<<<< HEAD

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `brand_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_5` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_6` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_7` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_8` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `cart_ibfk_9` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `feedback_ibfk_3` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`);

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `order_tbl_ibfk_2` FOREIGN KEY (`pro_details_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `order_tbl_ibfk_3` FOREIGN KEY (`pro_details_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `order_tbl_ibfk_4` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `order_tbl_ibfk_5` FOREIGN KEY (`pro_details_id`) REFERENCES `product_details` (`pro_details_id`),
  ADD CONSTRAINT `order_tbl_ibfk_6` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `order_tbl_ibfk_7` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_tbl` (`order_id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `product_details_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `product_details_ibfk_3` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`con_id`) REFERENCES `country` (`con_id`);
=======
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
