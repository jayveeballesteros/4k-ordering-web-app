-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 07:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

CREATE TABLE `cart2` (
  `cart_ID` int(11) NOT NULL,
  `pro_image` varchar(300) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart2`
--

INSERT INTO `cart2` (`cart_ID`, `pro_image`, `pro_name`, `pro_price`, `pro_quantity`) VALUES
(12, 'https://images-na.ssl-images-amazon.com/images/I/91ldsI5w2%2BL._AC_SL1500_.jpg', 'sony watch', 300, 3),
(13, 'https://images-na.ssl-images-amazon.com/images/I/91ldsI5w2%2BL._AC_SL1500_.jpg', 'sony watch', 300, 4),
(15, 'http://pngimg.com/uploads/watches/watches_PNG9899.png', 'Rado Watch', 1000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart2`
--
ALTER TABLE `cart2`
  ADD PRIMARY KEY (`cart_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart2`
--
ALTER TABLE `cart2`
  MODIFY `cart_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
