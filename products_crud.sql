-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `create_date`) VALUES
(43, 'asus x552m', '', 'images/Kx7YYVI2/59330261_2173756485994163_3893062119209304064_n.jpg', '999', '2021-05-11 19:10:08'),
(44, 'asus x552m', '', 'images/LU5NfSTb/ASUS-X552MD-SX098D10020.jpg', '1457', '2021-05-11 19:11:22'),
(45, 'asus x552m', '', 'images/RGL7S4kJ/ASUS-X552MD-SX098D10020.jpg', '1478', '2021-05-11 19:12:42'),
(46, 'Samsung Galaxy S21 Ultra', 'Samsung Galaxy S21 Ultra Dual Sim 12GB RAM 256GB 5G Silver', 'images/FxWxOvwZ/samsungGalaxyS21Ultra.jpg', '3999', '2021-05-11 19:18:50'),
(47, 'Xiaomi Redmi 9T Dual Sim 4GB RAM 64GB LTE Blue', 'Xiaomi Redmi 9T Dual Sim 4GB RAM 64GB LTE Blue', 'images/KRZDCGDW/0133976_xiaomi-redmi-9t-dual-sim-4gb-ram-64gb-lte-blue_550.png', '596', '2021-05-11 19:24:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
