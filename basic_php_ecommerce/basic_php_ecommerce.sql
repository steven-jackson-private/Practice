-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 09:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `basic_php_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`name`, `email`) VALUES
('asd', 'asd'),
('testing ', 'testing email'),
('dfg', 'dfg'),
('asd', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(200) NOT NULL,
  `tags` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `bestseller` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `img`, `tags`, `description`, `bestseller`) VALUES
(1925, 'Product 1', 599.99, '/images/product-1.jpg', 'boys', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'false'),
(1357, 'Product 2', 1999.99, '/images/product-2.jpg', 'boys', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'true'),
(1264, 'Product 3', 15.99, '/images/product-3.jpg', 'girls', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'true'),
(1111, 'Product 4', 1999.99, '/images/product-4.jpg', 'girls', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'true'),
(357, 'Product 5', 874.99, '/images/product-5.jpg', 'girls', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'true'),
(1926, 'Product 6', 1199.99, '/images/product-6.jpg', 'common', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'true'),
(1321, 'Product 7', 27.99, '/images/product-7.jpg', 'common', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'true'),
(299, 'Product 8', 4.99, '/images/product-8.jpg', 'common', 'Lorem ipsum In ad tempor occaecat occaecat veniam ad ex ea id occaecat qui voluptate officia eu mollit adipisicing sint cupidatat nisi mollit ullamco ullamco voluptate nostrud.', 'true');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
