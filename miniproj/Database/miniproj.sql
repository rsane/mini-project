-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 09:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` text NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `prod_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `email`, `password`) VALUES
('Sample_23', 'real.sim@gmail.com', 'Sample@23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_name` varchar(20) NOT NULL,
  `prod_price` int(5) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `description` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_name`, `prod_price`, `type`, `description`, `img`, `url`) VALUES
('Redgear G-20', 1143, 'keyboard', 'keyboards rgb buttons ', 'redgear.png', 'http://localhost/miniproj/products/redgear.php'),
('Zebronics', 1500, 'keyboard', 'zebronics keyboards rgb buttons ', 'zebronics.png', 'http://localhost/miniproj/products/zebronics.php'),
('Cosmic Byte', 1284, 'keyboard', 'cosmic byte keyboards rgb buttons ', 'cosmic.png', 'http://localhost/miniproj/products/cosmicbyte.php'),
('HP GK100', 1780, 'keyboard', 'HP GK100 keyboards rgb buttons ', 'HPkey.png', 'http://localhost/miniproj/products/hpkey.php'),
('G.Skills Ripjaws 8GB', 4399, 'ram', 'gskills ripjaws 8gb ram card ', 'gskills.png', 'http://localhost/miniproj/products/skills.php'),
('Corsair Vengence 8GB', 4500, 'ram', 'corsair vengence 8gb ram card ', 'corsair.png', 'http://localhost/miniproj/products/corsair.php'),
('HyperX Fury 8GB', 4399, 'ram', 'hyperx fury 8gb ram card ', 'hyperx.png', 'http://localhost/miniproj/products/hyperx.php'),
('Ballistix Crucial 8G', 4399, 'ram', 'ballistix crucial 8gb ram card ', 'ballistix.png', 'http://localhost/miniproj/products/ballistix.php'),
('Intel i5', 16000, 'CPU', 'intel i5 processor dual octa core', 'inteli5.png', 'http://localhost/miniproj/products/inteli5.php'),
('Intel i7', 25000, 'CPU', 'intel i7 processor dual octa core', 'inteli7.png', 'http://localhost/miniproj/products/inteli7.php'),
('AMD Ryzen 5', 12900, 'CPU', 'amd ryzen 5 processor dual octa core', 'amd5.png', 'http://localhost/miniproj/products/ryzen5.php'),
('AMD Ryzen 7', 15500, 'CPU', 'amd ryzen 7 processor dual octa core', 'amd7.png', 'http://localhost/miniproj/products/ryzen7.php'),
('Nvidia 1080Ti', 62600, 'GPU', 'nvidia 1080ti graphics cards 8gb', 'nvidia10.png', 'http://localhost/miniproj/products/nvidia1080.php'),
('Nvidia 1650', 28999, 'GPU', 'nvidia 1650 graphics cards 8gb', 'nvidia16.png', 'http://localhost/miniproj/products/nvidia1650.php'),
('MSI RTX 3060', 69999, 'GPU', 'msi rtx 3060 graphics cards 8gb', 'msi30.png', 'http://localhost/miniproj/products/msirtx.php'),
('MSI GTX 1080', 67800, 'GPU', 'msi gtx 1080 graphics cards 8gb', 'msi10.png', 'http://localhost/miniproj/products/msigtx.php'),
('Lenovo Legion', 1159, 'mouse', 'lenovo legion mouse wired rgb', 'lenovo.png', 'http://localhost/miniproj/products/lenovo.php'),
('Razer DeathAdder', 1599, 'mouse', 'razer deathadder mouse wired rgb', 'razer.png', 'http://localhost/miniproj/products/razer.php'),
('Logitech G102', 11595, 'mouse', 'logitech g102 mouse wired rgb', 'logitec.png', 'http://localhost/miniproj/products/logitech.php'),
('Redragon M808', 11790, 'mouse', 'redragon m808 mouse wired rgb', 'redragon.png', 'http://localhost/miniproj/products/redragon.php');

-- --------------------------------------------------------

--
-- Table structure for table `report_prod`
--

CREATE TABLE `report_prod` (
  `prod_name` varchar(20) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `qty_sold` int(4) NOT NULL,
  `prod_price` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_prod`
--

INSERT INTO `report_prod` (`prod_name`, `type`, `qty_sold`, `prod_price`) VALUES
('Redgear G-20', 'keyboard', 0, 1143),
('Zebronics', 'keyboard', 0, 1500),
('Cosmic Byte', 'keyboard', 0, 1284),
('HP GK100', 'keyboard', 4, 1780),
('G.Skills Ripjaws 8GB', 'ram', 0, 4399),
('Corsair Vengence 8GB', 'ram', 0, 4500),
('HyperX Fury 8GB', 'ram', 0, 4399),
('Ballistix Crucial 8G', 'ram', 0, 4399),
('Intel i5', 'CPU', 2, 16000),
('Intel i7', 'CPU', 0, 25000),
('AMD Ryzen 5', 'CPU', 9, 12900),
('AMD Ryzen 7', 'CPU', 0, 15500),
('Nvidia 1080Ti', 'GPU', 0, 62600),
('Nvidia 1650', 'GPU', 0, 28999),
('MSI RTX 3060', 'GPU', 0, 69999),
('MSI GTX 1080', 'GPU', 0, 67800),
('Lenovo Legion', 'mouse', 0, 1159),
('Razer DeathAdder', 'mouse', 0, 1599),
('Logitech G102', 'mouse', 0, 11595),
('Redragon M808', 'mouse', 6, 11790);

-- --------------------------------------------------------

--
-- Table structure for table `sell_prod`
--

CREATE TABLE `sell_prod` (
  `username` text NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `prod_price` int(5) NOT NULL,
  `prod_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell_prod`
--

INSERT INTO `sell_prod` (`username`, `prod_name`, `prod_price`, `prod_img`) VALUES
('user123', 'GK100', 1500, 'HPkey.png'),
('user123', 'amd5', 7600, 'amd5.png'),
('sample123', 'Corsair Vengence 8GB', 4500, 'corsair.png'),
('sample123', 'HyperX Fury 8GB', 4300, 'hyperx.png'),
('trial123', 'Crosshair', 5350, 'ballistix.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
