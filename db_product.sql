-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 02:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `point` int(11) NOT NULL,
  `info_product` text NOT NULL,
  `qty` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `product_name`, `point`, `info_product`, `qty`, `picture`) VALUES
(1, 'Iphone 11', 20000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 1, 'iphone11.jpg'),
(2, 'Iphone 11 Pro', 18500, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 1, 'iphone11pro.jpg'),
(3, 'Iphone 11 Pro Max', 17000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 1, 'iphone11promax.jpg'),
(4, 'Iphone 12', 15000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 1, 'iphone12.jpg'),
(5, 'Iphone 12 Pro', 19000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 1, 'iphone12pro.jpg'),
(22, 'Iphone 12 Pro Max', 20000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 2, 'iphone12promax.jpg'),
(31, 'Iphone 13', 10000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 2, 'iphone13.jpg'),
(32, 'Iphone 13 Pro', 14000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 5, 'iphone13pro.jpg'),
(33, 'Iphone 14', 12300, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 3, 'iphone14.jpg'),
(34, 'Iphone 14 Pro', 10000, 'iPhone is a brand of smartphone designed and marketed by Apple Inc. and use the iOS mobile operating system. The first generation of iPhone was announced by Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has released new iPhone models and iOS updates every year.', 2, 'iphone14pro.jpg'),
(35, 'Iphone 14 Pro Max', 2000, 'safvsbg', 2, 'iphone14pro.jpg'),
(36, 'Iphone 15 Max', 877, 'jdsvnsiu', 87, 'KNDVKS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
