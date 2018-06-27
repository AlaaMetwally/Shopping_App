-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2018 at 02:36 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shopping_App`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image`) VALUES
(1, 'kids wear', 'css/images.jpeg'),
(2, 'teenagers wear', 'css/1.jpeg'),
(3, 'soiree', 'css/soiree.png'),
(4, 'mans wear', 'css/man.png');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoices_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `produt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `brand` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `category`, `brand`, `price`, `description`, `image`, `categoryId`) VALUES
(1, 'chemise white and black', 'for kids', 'Zara', 400, 'white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan.\r\nmateriale tessuto: 100% cotton\r\n', 'css/main1.png', 1),
(2, 'gray coat', 'for kids', 'Mix', 300, 'white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan. materiale tessuto: 100% cotton \r\n', 'css/main2.png', 1),
(3, 'Red T-shirt', 'for kids', 'Splash', 300, 'Red T-shirt check cotton shirt with front pocket, to be layered with a t-shirt and a cardigan.\r\nmateriale tessuto: 100% cotton\r\n', 'css/main3.png', 1),
(4, 'Gray Sweat Pants', 'for kids', 'Zara', 200, 'Gray Sweat Pants check cotton shirt with front pocket, to be layered with a t-shirt and a cardigan.\r\nmateriale tessuto: 100% cotton\r\n', 'css/main4.png', 1),
(5, 'kids wear', 'for kids', 'zara', 100, ' white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan. materiale tessuto: 100% cotton ', 'css/111.png', 1),
(6, 'kids wear', 'for kids', 'Mix', 300, ' white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan. materiale tessuto: 100% cotton ', 'css/image1.jpg', 1),
(7, 'kids wear', 'for kids', 'splash', 100, 'white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan. materiale tessuto: 100% cotton', 'css/main1.png', 2),
(8, 'kids wear', 'for kids', 'LC Wakiki', 600, ' white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan. materiale tessuto: 100% cotton ', 'css/111.png', 3),
(9, 'kids wear', 'for kids', 'KIDS', 100, 'white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan. materiale tessuto: 100% cotton', 'css/main2.png', 4),
(12, 'fantastic', 'for kids', 'LC Wakiki', 400, 'white and black check cotton chemise with front pocket, to be layered with a t-shirt and a cardigan. materiale tessuto: 100% cotton', 'css/main1.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `productInCart`
--

CREATE TABLE `productInCart` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productInCart`
--

INSERT INTO `productInCart` (`product_id`, `user_id`, `price`) VALUES
(4, 1, 200),
(6, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(11) NOT NULL,
  `mobile` int(20) NOT NULL,
  `address` text NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `password`, `mobile`, `address`, `admin`) VALUES
(1, 'lolo', 'Mamdouh', 'alaametwally48@gmail.com', '123456', 1112238763, '318 Abdel Salam Arf street', 1),
(14, 'Maram', 'Mamdouh', 'marammamdouh48@gmail.com', '7890', 1222774415, '318 Abdel Salam Aref street', 0),
(16, 'Maram', 'Mamdouh', 'marammetwally48@gmail.com', '98765', 1112238763, '318 Abdel Salam Arf street', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoices_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `productInCart`
--
ALTER TABLE `productInCart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoices_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `productInCart`
--
ALTER TABLE `productInCart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
