-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 04:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `avatar`, `create_at`) VALUES
(1, 'admin@gmail.com', 'c93ccd78b2076528346216b3b2f701e6', '', '2023-11-22 18:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `img`, `created_at`) VALUES
(1, 'Aasd', 'sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd sa fs df ds fsd ', '1701748281-66e10d3d0eebfaf951dcf9da4e798bf3.jpg', '2023-12-20 09:31:06'),
(2, 'Tes', ' fds ', '1701750741-8460d0dd48775efa04acb4152462aac6.png', '2023-12-05 10:02:21'),
(3, 'Sad as ', ' ds fsd f sd fsd', '1701750748-4079566d6c64609bfb4f209b74bb71fc.avif', '2023-12-05 10:02:28'),
(4, 'Sd fsd f', 'sd f dsf ', '1701750757-ac1d676ff5366f556c3bc8995836224e.avif', '2023-12-05 10:02:37'),
(5, 'Sdf ', ' fds f', '1701750772-66e10d3d0eebfaf951dcf9da4e798bf3.jpg', '2023-12-05 10:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `created_at`) VALUES
(1, 'shoes', '1700232098-category-3.png', '2023-11-17 20:11:38'),
(2, 'kids', '1700232106-category-2.png', '2023-11-17 20:11:46'),
(6, 'test', '1700835100-4004b318d3e9302aed086ab498e4a1cc.jpg', '2023-11-24 19:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `address`, `mobile`, `email`, `created_at`) VALUES
(3, 'USA Officee', 'PO Box 16122 Collins Street West Victoria 8007 Canada', ' +91 7891560120', ' info@example.com', '2023-11-24 18:35:09'),
(4, 'USA Officee', 'PO Box 16122 Collins Street West Victoria 8007 Canada', ' +91 7891560120', ' info@example.com', '2023-11-24 18:35:09'),
(5, 'USA Office', 'PO Box 16122 Collins Street West Victoria 8007 Canada', ' +91 7891560120', ' info@example.com', '2023-11-24 18:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `subject`, `msg`, `created_at`) VALUES
(1, 'asdsa', 'asdsa', 'asdsa', 'asdsa', 'asd', '2023-12-05 09:48:06'),
(2, 'asdsa', 'asdsa', 'asdsa', 'asdsa', 'asd', '2023-12-05 09:48:55'),
(3, 'asdsa', 'asdsa@d.c', 'asdsa', 'asdsa', 'asd', '2023-12-05 09:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `shipping_address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'pending = 0, shipped = 1, delivered = 2',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `invoice_id`, `price`, `shipping_address`, `status`, `created_at`) VALUES
(6, 10, '#10ECOM', '100', '6', 0, '2023-11-24 19:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `user_id`, `product_id`, `price`, `created_at`) VALUES
(3, 6, 10, 2, '100', '0000-00-00 00:00:00'),
(4, 6, 10, 3, '100', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `long_description` text NOT NULL,
  `img` text NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `long_description`, `img`, `category`, `created_at`) VALUES
(1, 'camera', '200', 'camera', 'camera camera', 'shop-1.jpg', 1, '2023-11-16 20:17:09'),
(2, 'maruti', '100', 'maruti', 'maruti maruti', 'shop-3.jpg', 2, '2023-11-16 20:17:09'),
(3, 'samsung', '500', 'samsung', 'samsung samsung', 'shop-1.jpg', 2, '2023-11-16 20:17:09'),
(4, 'headphone', '50', 'headphone', 'headphone', 'shop-3.jpg', 1, '2023-11-16 20:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `created_at`) VALUES
(10, 'test', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00 00:00:00'),
(11, '1231', 'test@gmail.comd', 'e10adc3949ba59abbe56e057f20f883e', '', '0000-00-00 00:00:00'),
(12, 'sdf', 'fgdtest@gmail.com', '7a94a589b0568e8f02eb3f81df22163b', '', '0000-00-00 00:00:00'),
(13, 'demo', 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `order_notes` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `user_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `zipcode`, `order_notes`, `created_at`) VALUES
(6, 10, 'test', 'test', 'test@fgmIL.COM', '12315646', 'dsfsd', 'sdg', 123, 'dsf fdsf', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
