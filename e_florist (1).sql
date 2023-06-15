-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 07:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sana', 'admin@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `id` int(100) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` datetime(6) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `days` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `starting_date`, `ending_date`, `image`, `details`, `days`) VALUES
(1, '2022-02-01', '0000-00-00 00:00:00.000000', 'images/1643701351pimg.jpeg', ' Mother\'\'\'\'s Day Is Coming, Are You Ready?', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `payment_id` varchar(60) NOT NULL,
  `event_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `date_time`, `name`, `address`, `phone`, `payment_id`, `event_id`, `u_id`) VALUES
(3, '2021-12-19 21:22:00', 'Super Man', 'sahiwal', '+923007391433', 'jC1639927011', 4, 2),
(4, '2021-12-20 13:23:00', 'Super Man', 'sahiwal', '+923007391433', 'jC1639985046', 4, 2),
(5, '2021-12-22 09:30:00', 'sana', 'okara', '03123456789', 'jC1640100606', 7, 1),
(6, '2021-12-26 06:29:00', 'sana', 'sadsadsadsadsas', '03123456789', 'jC1640417388', 4, 1),
(7, '2022-02-24 00:00:00', 'sahil', 'okara', '03004439662', 'jC1643951014', 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `u_id`, `p_id`, `quantity`) VALUES
(192, 4, 5, 1),
(198, 2, 5, 1),
(199, 2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `u_id`, `p_id`) VALUES
(5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, expedita.', 2, 5),
(6, 'awesome and flowers were fresh', 2, 6),
(7, 'ggfhgfhgf', 2, 3),
(9, 'awesome product', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cover_image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `cover_image`, `price`) VALUES
(4, 'Birthday Event Planning', 'Corporate events\r\nFun fair\r\nMusic concerts\r\nWedding ceremony\r\nBirthday parties                                                       ', 'images/1639910523pimg.jpg', 50000),
(5, 'Fresh Flowers For Mothers Day', 'Mothers Day Decoration', 'images/1638343383pimg.jpeg', 30000),
(6, 'Flowers For Independence Day', 'Independence Day decoration', 'images/1638343485pimg.jpeg', 90000),
(7, 'Flowers For weding', 'Weding Events', 'images/1639918223pimg.jpg', 88),
(8, 'Interior Decor', 'abc', 'images/1643707343pimg.jpeg', 10000),
(9, 'Wedding Decor', 'abc', 'images/1643707435pimg.jpg', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `event_images`
--

CREATE TABLE `event_images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_images`
--

INSERT INTO `event_images` (`id`, `image`, `event_id`) VALUES
(4, 'images/1639910345pimg.png', 4),
(5, 'images/1639910357pimg.jpg', 4),
(6, 'images/1639910369pimg.jpg', 4),
(7, 'images/1639910378pimg.jpg', 4),
(8, 'images/1639913510pimg.jpg', 4),
(9, 'images/1639913528pimg.jpg', 4),
(10, 'images/1643707178pimg.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `event_services`
--

CREATE TABLE `event_services` (
  `id` int(11) NOT NULL,
  `service` varchar(200) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_services`
--

INSERT INTO `event_services` (`id`, `service`, `event_id`) VALUES
(1, 'Stage Decoration', 4),
(5, 'Stage Decoration', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `placed_on` datetime NOT NULL,
  `delivered_on` datetime NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `rider_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `u_id`, `status`, `placed_on`, `delivered_on`, `shipping_cost`, `name`, `phone`, `address`, `payment_method`, `payment_id`, `rider_id`) VALUES
(30, 2, 'delivered', '2021-12-20 12:07:32', '2021-12-20 12:08:37', 40, 'Super Man', '+923007391433', 'sahiwal', 'jazz_cash', 'jC1639984052', 1),
(28, 2, 'delivered', '2021-12-19 19:16:00', '2022-02-01 12:10:42', 60, 'sana', '+923007391433', 'okara', 'cod', 'cod1643699442', 6),
(29, 2, 'delivered', '2021-12-20 12:05:33', '2021-12-20 12:06:18', 60, 'Super Man', '+923007391433', 'sahiwal', 'cod', 'cod1639983978', 1),
(35, 5, 'delivered', '2022-01-31 06:00:44', '2022-02-01 12:08:59', 40, 'sana', '03123456789', 'okara', 'jazz_cash', 'jC1643590844', 6),
(34, 4, 'delivered', '2021-12-27 15:34:34', '2022-02-01 12:09:41', 40, 'sana', '03123456789', 'OKARA', 'jazz_cash', 'jC1640601274', 6),
(36, 5, 'processing', '2022-01-31 06:23:59', '0000-00-00 00:00:00', 60, 'sana sabir', '03004439662', 'okara', 'jazz_cash', 'jC1643592239', NULL),
(37, 5, 'delivered', '2022-02-02 11:51:49', '2022-02-02 12:00:54', 60, 'sana', '03123456789', 'okara', 'jazz_cash', 'jC1643784709', 6),
(38, 5, 'delivered', '2022-02-02 12:12:43', '2022-02-02 12:13:13', 40, 'sir', '03123456789', 'arid', 'jazz_cash', 'jC1643785963', 6),
(39, 5, 'delivered', '2022-02-02 17:49:04', '2022-02-02 17:50:38', 60, 'danish', '03004439662', 'okara', 'jazz_cash', 'jC1643806144', 6),
(40, 5, 'processing', '2022-02-04 10:06:53', '0000-00-00 00:00:00', 60, 'sana', '03123456789', 'okara', 'jazz_cash', 'jC1643951213', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `p_id`, `o_id`, `quantity`) VALUES
(46, 6, 28, 1),
(45, 5, 28, 1),
(49, 1, 30, 1),
(48, 1, 29, 1),
(47, 5, 29, 2),
(63, 4, 37, 1),
(62, 4, 36, 1),
(61, 5, 36, 1),
(60, 6, 36, 1),
(59, 5, 35, 3),
(58, 5, 34, 1),
(57, 6, 34, 1),
(64, 5, 38, 1),
(65, 5, 39, 1),
(66, 4, 39, 1),
(67, 5, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `received_from` varchar(100) NOT NULL,
  `received_by` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `received_from`, `received_by`, `amount`, `currency`, `date_time`) VALUES
(24, 'jC1643592239', 'sana', '', 1980, 'pkr', '2022-01-31 01:23:59'),
(23, 'jC1643590844', 'sana', '', 2137, 'pkr', '2022-01-31 01:00:44'),
(22, 'jC1640601274', 'hasan', '', 1627, 'pkr', '2021-12-27 10:34:34'),
(17, 'jC1639984052', 'Rana ', '', 2039, 'pkr', '2021-12-20 07:07:32'),
(20, 'jC1640100606', 'Sana ', '', 44, 'pkr', '2021-12-21 15:30:06'),
(21, 'jC1640417388', 'Sana ', '', 25000, 'pkr', '2021-12-25 07:29:48'),
(25, 'cod1643699442', 'sana', 'sana', 1647, 'pkr', '2022-02-01 07:10:42'),
(26, 'jC1643784709', 'sana', '', 393, 'pkr', '2022-02-02 06:51:49'),
(27, 'jC1643785963', 'sana', '', 739, 'pkr', '2022-02-02 07:12:43'),
(28, 'jC1643806144', 'sana', '', 1092, 'pkr', '2022-02-02 12:49:04'),
(29, 'jC1643951014', 'sana', '', 10000, 'pkr', '2022-02-04 05:03:34'),
(30, 'jC1643951213', 'sana', '', 759, 'pkr', '2022-02-04 05:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `tags` varchar(200) NOT NULL,
  `discount` int(40) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `colors` varchar(100) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `featured`, `hot`, `tags`, `discount`, `quantity`, `colors`, `categories`) VALUES
(3, 'Flowers Bouquet Pinknbnn', 344, 'Ready-to-open.', 1, 1, 'love, joy, gift ', 0, 0, 'blue', ''),
(4, 'Flower Rose Bouquet', 333, 'Feature:\r\n*Material: Made of soft high quality latex foam which gives them the look of fresh roses. \r\n*Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost.\r\n*Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long. \r\n*Style: Vintage, Rustic, Chic, Retro, American-style village style\r\n*They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 1, 1, 'joy, love, gift', 20, 8, 'pink', ''),
(5, 'Flower Rose Bouquet', 699, 'Feature:\r\n*Material: Made of soft high quality latex foam which gives them the look of fresh roses. \r\n*Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost.\r\n*Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long. \r\n*Style: Vintage, Rustic, Chic, Retro, American-style village style\r\n*They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 1, 1, 'love, joy', 5, 8, 'purple', ''),
(6, 'glower Rose Bouquet', 888, 'Feature:\r\n*Material: Made of soft high quality latex foam which gives them the look of fresh roses. \r\n*Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost.\r\n*Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long. \r\n*Style: Vintage, Rustic, Chic, Retro, American-style village style\r\n*They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 1, 0, 'joy, love', 10, 56, 'white', ''),
(7, 'Pink Flower', 4000, 'Feature:\r\n*Material: Made of soft high quality latex foam which gives them the look of fresh roses. \r\n*Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost.\r\n*Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long. \r\n*Style: Vintage, Rustic, Chic, Retro, American-style village style\r\n*They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 1, 1, 'love, joy', 3, 0, 'hotpink', ''),
(8, 'Flowers Bouquet Pink', 222, 'Feature: *Material: Made of soft high quality latex foam which gives them the look of fresh roses.  *Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost. *Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long.  *Style: Vintage, Rustic, Chic, Retro, American-style village style *They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 1, 1, 'joy, boquits', 5, 3, '', ''),
(21, 'Yellow Flowers', 5656, 'Feature:\r\n*Material: Made of soft high quality latex foam which gives them the look of fresh roses. \r\n*Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost.\r\n*Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long. \r\n*Style: Vintage, Rustic, Chic, Retro, American-style village style\r\n*They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 0, 0, 'good quality', 3, 8, '', ''),
(22, 'purple Flowers', 656, 'Feature: *Material: Made of soft high quality latex foam which gives them the look of fresh roses.  *Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost. *Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long.  *Style: Vintage, Rustic, Chic, Retro, American-style village style *They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 0, 0, 'gftf', 20, 5, '', ''),
(23, 'pink flowers', 750, 'Feature:\r\n*Material: Made of soft high quality latex foam which gives them the look of fresh roses. \r\n*Packing: 25pcs/bag. This Ready to Ship is packed in OPP bag to save you shipping cost.\r\n*Size: Each rose head is aprrox. 3 inches, the stem is about 8 inches long. \r\n*Style: Vintage, Rustic, Chic, Retro, American-style village style\r\n*They have thin wire stem for easy DIY work. It’s easily bent or cut down as you need. They are perfect for making bouquets, centerpieces, kissing balls, boutonnieres, cake flowers or any other flower decorations/arrangements that you want at your wedding, party, baby shower or home.', 1, 1, 'good quality', 0, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `image`, `p_id`) VALUES
(7, 'images/product-2.jpg', 4),
(47, 'images/1637948181pimg.jpg', 0),
(60, 'images/1638360404pimg.webp', 21),
(62, 'images/1638383577pimg.jpg', 8),
(63, 'images/1638383617pimg.png', 7),
(64, 'images/1638383660pimg.jpg', 6),
(67, 'images/1640653660pimg.jpg', 22),
(69, 'images/1640654027pimg.webp', 8),
(70, 'images/1640654339pimg.png', 5),
(71, 'images/1640654437pimg.jpg', 3),
(72, 'images/1640655292pimg.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `rate` int(1) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rate`, `u_id`, `p_id`) VALUES
(9, 2, 2, 3),
(8, 4, 2, 6),
(12, 4, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `rider_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`id`, `name`, `phone`, `rider_id`) VALUES
(1, 'Usman Rana', '030192384', '241ns'),
(3, 'Super Man', '+923007391433', '241n'),
(4, 'Ali', '03123456789', '345'),
(5, 'Ali', '03004439662', '22'),
(6, 'sana', '03123456789', '55');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `starting_time` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `discount`, `days`, `starting_time`, `status`) VALUES
(1, 20, 3, '2022-02-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(2, 'Rana ', 'ali@gmail.com', '123', '039234892384', 'Sahiwal, Punjab               '),
(4, 'hasan', 'hasan@gmail.com', '666', '', '                            '),
(5, 'sana', 'sanasabir0011@gmail.com', 'sanaali', '', 'okara       ');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `u_id`, `p_id`) VALUES
(8, 1, 6),
(9, 1, 4),
(10, 1, 3),
(11, 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_images`
--
ALTER TABLE `event_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_services`
--
ALTER TABLE `event_services`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
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
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event_images`
--
ALTER TABLE `event_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event_services`
--
ALTER TABLE `event_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
