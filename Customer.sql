-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2024 at 05:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Customer`
--
CREATE DATABASE IF NOT EXISTS `Customer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Customer`;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
CREATE TABLE IF NOT EXISTS `Customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email_activated` tinyint(1) NOT NULL,
  `disable` tinyint(1) NOT NULL,
  `secret` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customer_id`, `first_name`, `last_name`, `email`, `password_hash`, `email_activated`, `disable`, `secret`) VALUES
(1, 'chris', 'Gainw', 'chirsas@ads.com', '$2y$10$vDTvNtKXK2V3Bhuayb.r6OuczdmRRxY3mVM/oLJS3TwUoq428CWvS', 0, 1, NULL),
(2, 'qwe', 'we', 'asd@das.com', '$2y$10$PHcDMPrwxmcSooHCXEzMTOA5PqfHsmwFrPAACzbqbRiu3NKqMblCa', 0, 1, NULL),
(3, 'qw', 'qw', 'qw', '$2y$10$BmseMsmaZrKqPkDU/P551ODDB0t.A1tnjbUj3YbmbfKd3hZKSZnEK', 0, 1, NULL),
(6, 'q', 'q', 'q', '$2y$10$8NyqsqVjBE9mv9Y6BtSt3.V2Ex8KXuD13aV8nNvutJUWk0ApL1kry', 0, 0, NULL),
(8, 'q', 'q', 'q@q.com', '$2y$10$4Mt/YgAppaLXExGIZUEQaeYldj17RFOM9scnXto2d/x51gTPVvk1C', 0, 0, 'RCHUTGWVNY3BWT2WQUPNFOPXJMHF6F3I'),
(9, 'yu', 'o', 'qwer@asd', '$2y$10$cdGvJi0MT6iLeZ1IVLvJTumz1CfOhv6mqMumHz7z1oLxeg3mqiy5S', 0, 0, NULL),
(10, 'zz', 'zz', 'zz@zz', '$2y$10$ZjMDPwTaD.uklnwFfMIcie9aNjGjMqwQ6zP4U9gZ8k2fSEplgRkv2', 0, 0, NULL),
(13, 'among', 'us', '1@1', '$2y$10$o8RxtMunv6Mn57pqMaIp0OuILthykyRhKtQVKLiiOwS5LCEoOAb2a', 0, 0, NULL),
(14, 'joe', 'biden', '123@e', '$2y$10$j7qQUW89rd/Y7VH3RIcS2O2C73yDuq/Ar/6SHFzGNDfvAxbhJFWf2', 0, 0, NULL),
(15, 'kaie', 'cenatas', 'q@qq', '$2y$10$DMA3enAkbrdd5EaPKS4Fbuvl1OycDnyEhNRDJvkdy7OLs7CyDbx2G', 0, 0, NULL),
(16, 'bruh', 'whatthehape', '2@2', '$2y$10$IR9OupDh8hLADZWbnvYcG.2m9NyRayt1dtk4ZwWZ3HvWYfyq5Pivm', 0, 0, NULL),
(17, 'asd', 'asd', 'e@e', '$2y$10$N.zVaXyuEtJZuwWXsz23MeZVYHg4BLYEe1naqxwwCLFZ2LiiKz14K', 0, 0, NULL),
(18, 'max', 'yaw', 'person@gmail.com', '$2y$10$0GmODj1spPbL/IgNbUmxb.urD5oeM7i4hDq2fKzscnKx5BdedmgK6', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

DROP TABLE IF EXISTS `customer_order`;
CREATE TABLE IF NOT EXISTS `customer_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `state` varchar(40) NOT NULL,
  `total` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `address`, `postal_code`, `state`, `total`, `status`, `timestamp`) VALUES
(1, 14, '37 Edgehill Terrace, Stratford, Canada', '', '', 0, 0, '2024-05-13 19:58:08'),
(2, 14, 'Studio Coolio, Utrechter Straße 48, Germany', '', '', 0, 0, '2024-05-13 19:58:45'),
(3, 14, '36 Place Marie-Hélène, Saint-Joseph-du-Lac, Canada', '', '', 0, 0, '2024-05-13 20:01:58'),
(4, 14, '36 Place Marie-Hélène, Saint-Joseph-du-Lac, Canada', '', '', 787.5, 0, '2024-05-13 21:13:04'),
(5, 14, '36 Place Marie-Hélène, Saint-Joseph-du-Lac, Canada', '', '', 787.5, 0, '2024-05-13 21:15:55'),
(6, 14, '36 Place Marie-Hélène, Saint-Joseph-du-Lac, Canada', '', '', 787.5, 0, '2024-05-13 21:18:10'),
(7, 14, '194 Rue Lamarche, Laval (administrative region), Canada', '', '', 2562.5, 0, '2024-05-13 21:18:50'),
(8, 14, '194 Rue Lamarche, Laval (administrative region), Canada', '', '', 0, 0, '2024-05-13 21:28:33'),
(9, 14, '', '', '', 0, 0, '2024-05-16 03:28:56'),
(10, 13, 'Étienne Road, Laurentides, Canada', 'I2Q 0W0', 'QC', 787.5, 0, '2024-05-23 21:41:34'),
(11, 15, '12e Rue, Laval (administrative region), Canada', 'h7n 1s8', 'NS', 787.5, 0, '2024-05-23 22:05:46'),
(12, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 03:57:09'),
(13, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 03:57:27'),
(14, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 03:57:43'),
(15, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 03:58:05'),
(16, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 03:58:25'),
(17, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 03:58:34'),
(18, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 04:00:03'),
(19, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 04:33:12'),
(20, 15, '399', 'gsdg', 'NB', 787.5, 0, '2024-05-25 04:35:10'),
(21, 15, '512 Chemin Principal, Saint-Elzéar-de-Témiscouata, Canada', '213', 'BC', 787.5, 0, '2024-05-25 21:58:12'),
(22, 15, '12e Rue, Laval (administrative region), Canada', 'h7n 1s8', 'SK', 787.5, 0, '2024-05-28 22:48:29'),
(23, 17, 'Matsumoto-shi, Japan', 'g6n 1s5', 'MB', 787.5, 0, '2024-05-28 23:17:21'),
(24, 18, '12e Rue, Laval (administrative region), Canada', 'h7n 1s8', 'QC', 875, 0, '2024-05-29 18:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `email`, `password_hash`, `admin`) VALUES
(2, 'joe', 'bideb', 'a@a', '$2y$10$ilr8xF20P8Zc8ul7SJ8KD.yL/3VyaIjha4G8GNXG2vgRxbiCunuH.', 1),
(5, 'a', 'a', 'default@default', '$2y$10$ilr8xF20P8Zc8ul7SJ8KD.yL/3VyaIjha4G8GNXG2vgRxbiCunuH.', 1),
(6, 'aqua', 'marine', 'qwe@qwe', '$2y$10$lTs/FtZ99OQgbZVCB1hcG.19owKKQ8txUvpkpengVQJQXd/jKvLYu', 0),
(7, 'yum', 'mers', 'person2@gmail.com', '$2y$10$z7DPwm03gtFACNom8Tgupu7vl./zWagrYuXsHiuUGnNWU36ApXBvK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(6, 1, 1, 787.5),
(7, 1, 1, 787.5),
(7, 7, 1, 800),
(7, 7, 1, 800),
(7, 18, 1, 175),
(10, 1, 1, 787.5),
(11, 1, 1, 787.5),
(12, 1, 1, 787.5),
(13, 1, 1, 787.5),
(14, 1, 1, 787.5),
(15, 1, 1, 787.5),
(16, 1, 1, 787.5),
(17, 1, 1, 787.5),
(18, 1, 1, 787.5),
(19, 1, 1, 787.5),
(20, 1, 1, 787.5),
(21, 1, 1, 787.5),
(22, 1, 1, 787.5),
(23, 1, 1, 787.5),
(24, 9, 1, 875);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` enum('Cartier','Dexter Marx','Boss','Gucci','Ray-Ban','Prada','Oakley','Oliver Peoples') NOT NULL,
  `model` varchar(30) NOT NULL,
  `color` set('Black','Brown','Red','Green','Tortoise','White','Clear') NOT NULL,
  `cost_price` decimal(7,2) NOT NULL,
  `sell_price` decimal(7,2) GENERATED ALWAYS AS (`cost_price` * 2) STORED,
  `shape` enum('Round','Cat eye','Rectangle','Square','Aviator','Geometric','Oval') NOT NULL,
  `size` int(11) NOT NULL,
  `optical_sun` enum('Optical','Sun') NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `disable` tinyint(1) NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `Model` (`model`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `brand`, `model`, `color`, `cost_price`, `shape`, `size`, `optical_sun`, `description`, `quantity`, `disable`) VALUES
(1, 'Cartier', 'ESW00632', 'Brown,Red,Tortoise', 787.50, 'Rectangle', 51, 'Optical', 'Timeless aesthetics with modern functionality.', 1, 1),
(2, 'Cartier', 'ESW00629', 'Black', 475.00, 'Oval', 46, 'Sun', 'Bold and modern, stands out in any crowd.', 3, 1),
(3, 'Cartier', 'ESW00669', 'Black', 550.00, 'Square', 49, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(4, 'Cartier', 'ESW00618', 'Red', 700.00, 'Square', 51, 'Sun', 'Timeless aesthetics with modern functionality.', 1, 0),
(5, 'Cartier', 'ESW00633', 'Black', 495.00, 'Round', 52, 'Optical', 'Chic and refined, suits a professional look.', 1, 0),
(6, 'Cartier', 'ESW00454', 'Brown', 850.00, 'Square', 48, 'Sun', 'Distinctive design with cutting-edge features.', 1, 0),
(7, 'Cartier', 'ESW00475', 'Black', 800.00, 'Aviator', 50, 'Optical', 'Classic design with a contemporary twist.', 1, 0),
(8, 'Cartier', 'ESW00661', 'Black', 1200.00, 'Geometric', 54, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(9, 'Cartier', 'ESW00581', 'Black', 875.00, 'Geometric', 48, 'Sun', 'Chic and refined, suits a professional look.', 1, 0),
(10, 'Cartier', 'ESW00614', 'Black', 1070.00, 'Square', 49, 'Sun', 'Versatile style, ideal for any face shape.', 1, 0),
(11, 'Dexter Marx', 'Storm', 'Brown', 190.00, 'Geometric', 50, 'Optical', 'Bold and modern, stands out in any crowd.', 1, 0),
(12, 'Dexter Marx', 'Clide', 'White', 175.00, 'Geometric', 52, 'Sun', 'Classic design with a contemporary twist.', 1, 0),
(13, 'Dexter Marx', 'Harper', 'White,Clear', 162.50, 'Aviator', 52, 'Optical', 'Chic and refined, suits a professional look.', 1, 0),
(14, 'Dexter Marx', 'Melena', 'Black', 180.00, 'Rectangle', 54, 'Optical', 'Bold and modern, stands out in any crowd.', 1, 0),
(15, 'Dexter Marx', 'Class', 'Red,Green,White', 187.50, 'Aviator', 48, 'Sun', 'Sleek and sophisticated, provides superior comfort.', 1, 0),
(16, 'Dexter Marx', 'Sammy', 'Green', 199.00, 'Cat eye', 51, 'Optical', 'Lightweight frame with exceptional durability.', 1, 0),
(17, 'Dexter Marx', 'Marx', 'Black,Tortoise,White', 210.00, 'Oval', 46, 'Optical', 'Versatile style, ideal for any face shape.', 1, 0),
(18, 'Dexter Marx', 'Hermes', 'Brown,White', 175.00, 'Square', 54, 'Optical', 'Distinctive design with cutting-edge features.', 1, 0),
(19, 'Dexter Marx', 'Fuit', 'Clear', 180.00, 'Oval', 47, 'Optical', 'Timeless aesthetics with modern functionality.', 1, 0),
(20, 'Dexter Marx', 'Alfreda', 'Green', 205.00, 'Aviator', 54, 'Sun', 'Elegant and stylish, perfect for everyday wear.', 1, 0),
(21, 'Boss', '1649/SKB752QT', 'Clear', 162.50, 'Oval', 53, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(22, 'Boss', '1599/S80756KU', 'Black', 165.00, 'Rectangle', 49, 'Optical', 'Elegant and stylish, perfect for everyday wear.', 1, 0),
(23, 'Boss', '1625/S8AS50QT', 'Brown,Tortoise', 147.50, 'Rectangle', 56, 'Optical', 'Classic design with a contemporary twist.', 1, 0),
(24, 'Boss', '1654/S80754IR', 'Black', 155.00, 'Square', 47, 'Optical', 'Lightweight frame with exceptional durability.', 1, 0),
(25, 'Boss', '1608/S2VM50IR', 'Red,Tortoise', 175.00, 'Square', 55, 'Optical', 'Chic and refined, suits a professional look.', 1, 0),
(26, 'Boss', '1455/N/SSDK55IR', 'Black,Brown,Tortoise', 187.50, 'Oval', 49, 'Sun', 'Versatile style, ideal for any face shape.', 1, 0),
(27, 'Boss', '1638TI75021', 'Black,Clear', 145.00, 'Round', 50, 'Optical', 'Bold and modern, stands out in any crowd.', 1, 0),
(28, 'Boss', '16422OS5716', 'Brown,Tortoise', 180.00, 'Rectangle', 46, 'Sun', 'Bold and modern, stands out in any crowd.', 1, 0),
(29, 'Boss', '1626/S80755QT', 'Black', 140.00, 'Square', 56, 'Sun', 'Elegant and stylish, perfect for everyday wear.', 1, 0),
(30, 'Boss', '1671/F/SK00356IR', 'Black,Brown', 172.50, 'Round', 53, 'Sun', 'Sleek and sophisticated, provides superior comfort.', 1, 0),
(31, 'Gucci', 'GG1773S', 'Black,Tortoise,White', 340.00, 'Rectangle', 54, 'Sun', 'Timeless aesthetics with modern functionality.', 1, 0),
(32, 'Gucci', 'GG1527S', 'Black', 282.50, 'Oval', 51, 'Sun', 'Timeless aesthetics with modern functionality.', 1, 0),
(33, 'Gucci', 'GG1544S', 'Black', 180.00, 'Cat eye', 47, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(34, 'Gucci', 'GG1556S', 'Black,Red', 247.50, 'Cat eye', 55, 'Sun', 'Classic design with a contemporary twist.', 1, 0),
(35, 'Gucci', 'GG1547S', 'Black,Tortoise', 247.50, 'Square', 48, 'Sun', 'Distinctive design with cutting-edge features.', 1, 0),
(36, 'Gucci', 'GG1604S', 'Black,Red', 325.00, 'Geometric', 50, 'Sun', 'Lightweight frame with exceptional durability.', 1, 0),
(37, 'Gucci', 'GG1615S', 'Brown', 247.50, 'Square', 55, 'Sun', 'Chic and refined, suits a professional look.', 1, 0),
(38, 'Gucci', 'GG1440S', 'Black,Green', 305.00, 'Aviator', 46, 'Sun', 'Classic design with a contemporary twist.', 1, 0),
(39, 'Gucci', 'GG0447S', 'Black', 340.00, 'Aviator', 47, 'Sun', 'Lightweight frame with exceptional durability.', 1, 0),
(40, 'Gucci', 'GG1427S', 'Black,Brown', 225.00, 'Rectangle', 49, 'Optical', 'Timeless aesthetics with modern functionality.', 1, 0),
(41, 'Ray-Ban', 'RB3170B', 'Black,Green,Tortoise,Clear', 131.50, 'Round', 46, 'Optical', 'Bold and modern, stands out in any crowd.', 1, 0),
(42, 'Ray-Ban', 'RB3447V', 'Black,Brown', 124.00, 'Round', 47, 'Optical', 'Bold and modern, stands out in any crowd.', 1, 0),
(43, 'Ray-Ban', 'RB5228', 'Black,Brown,Tortoise', 131.50, 'Rectangle', 46, 'Optical', 'Distinctive design with cutting-edge features.', 1, 0),
(44, 'Ray-Ban', 'RB6489', 'Black,Brown,Red', 124.00, 'Aviator', 53, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(45, 'Ray-Ban', 'RX7239', 'Black,Brown,Tortoise,Clear', 104.00, 'Rectangle', 48, 'Optical', 'Elegant and stylish, perfect for everyday wear.', 1, 0),
(46, 'Ray-Ban', 'RX5430', 'Black,Brown,Green,Tortoise', 124.00, 'Round', 52, 'Optical', 'Distinctive design with cutting-edge features.', 1, 0),
(47, 'Ray-Ban', 'RX7235', 'Black,Brown,Red', 147.50, 'Round', 54, 'Optical', 'Versatile style, ideal for any face shape.', 1, 0),
(48, 'Ray-Ban', 'RB6448', 'Black,Red,Clear', 124.00, 'Round', 55, 'Optical', 'Elegant and stylish, perfect for everyday wear.', 1, 0),
(49, 'Ray-Ban', 'RB8908', 'Black,Green', 163.50, 'Rectangle', 47, 'Optical', 'Timeless aesthetics with modern functionality.', 1, 0),
(50, 'Ray-Ban', 'RB2241V', 'Brown,Green,Tortoise,White', 124.00, 'Round', 56, 'Optical', 'Lightweight frame with exceptional durability.', 1, 0),
(51, 'Prada', 'SPRA24_E1AB_F05S0_C_043', 'Black', 370.00, 'Round', 56, 'Sun', 'Lightweight frame with exceptional durability.', 1, 0),
(52, 'Prada', 'SPRA27_E16K_F05S0_C_062', 'Black', 372.50, 'Cat eye', 56, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(53, 'Prada', 'SPRA14_E12R_FE30B_C_060', 'Clear', 347.50, 'Rectangle', 48, 'Sun', 'Distinctive design with cutting-edge features.', 1, 0),
(54, 'Prada', 'SPRA14_E142_F05S0_C_060', 'White', 362.50, 'Rectangle', 51, 'Optical', 'Lightweight frame with exceptional durability.', 1, 0),
(55, 'Prada', 'SPR17W_E12R_FE30B_C_049', 'Clear', 350.00, 'Rectangle', 53, 'Optical', 'Sleek and sophisticated, provides superior comfort.', 1, 0),
(56, 'Prada', 'SPR26Z_E14L_FE09Z_C_055', 'Tortoise', 375.00, 'Oval', 56, 'Optical', 'Versatile style, ideal for any face shape.', 1, 0),
(57, 'Prada', 'SPRA09_E12O_FE10D_C_053', 'Black', 342.50, 'Cat eye', 47, 'Sun', 'Elegant and stylish, perfect for everyday wear.', 1, 0),
(58, 'Prada', 'SPRA51_E15N_FE01T_C_058', 'White', 410.00, 'Geometric', 52, 'Optical', 'Versatile style, ideal for any face shape.', 1, 0),
(59, 'Prada', 'SPR24Z_E18N_FE01T_C_056', 'Tortoise', 390.00, 'Square', 49, 'Optical', 'Fashion-forward with a vintage feel.', 1, 0),
(60, 'Prada', 'SPR14Z_E1AB_FE09S_C_050', 'Black', 335.00, 'Cat eye', 54, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(61, 'Oakley', 'OO9102-D655', 'Black,Brown,Green', 129.00, 'Rectangle', 46, 'Sun', 'Chic and refined, suits a professional look.', 1, 0),
(62, 'Oakley', 'OO9482-0157', 'Black,Red', 140.50, 'Geometric', 50, 'Sun', 'Lightweight frame with exceptional durability.', 1, 0),
(63, 'Oakley', 'OO9316 11-63', 'Black,Green', 156.00, 'Rectangle', 46, 'Sun', 'Classic design with a contemporary twist.', 1, 0),
(64, 'Oakley', 'OO9483-0156', 'Black,Brown,White', 143.00, 'Rectangle', 53, 'Optical', 'Fashion-forward with a vintage feel.', 1, 0),
(65, 'Oakley', 'OO9286 05-54', 'Black,Brown,Red,White', 171.00, 'Round', 48, 'Sun', 'Versatile style, ideal for any face shape.', 1, 0),
(66, 'Oakley', 'OO9417-0559', 'Black,Brown', 144.00, 'Rectangle', 47, 'Optical', 'Elegant and stylish, perfect for everyday wear.', 1, 0),
(67, 'Oakley', 'OO9013-F655', 'Brown,White', 170.00, 'Round', 49, 'Sun', 'Classic design with a contemporary twist.', 1, 0),
(68, 'Oakley', 'OO9284 07-55', 'Black,Red', 138.00, 'Round', 49, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(69, 'Oakley', 'OO9272-09', 'Black,Clear', 180.00, 'Rectangle', 47, 'Optical', 'Timeless aesthetics with modern functionality.', 1, 0),
(70, 'Oakley', 'OO9239 30-60', 'Black,Red,Green', 132.00, 'Rectangle', 47, 'Sun', 'Chic and refined, suits a professional look.', 1, 0),
(71, 'Oliver Peoples', 'Mr. Federer-R', 'Black,Brown,Clear', 330.00, 'Rectangle', 50, 'Sun', 'Versatile style, ideal for any face shape.', 1, 0),
(72, 'Oliver Peoples', 'N.05', 'Black,Brown,Green,Tortoise', 342.00, 'Round', 56, 'Optical', 'Fashion-forward with a vintage feel.', 1, 0),
(73, 'Oliver Peoples', 'Rosson', 'Black,Tortoise,Clear', 275.00, 'Rectangle', 54, 'Sun', 'Fashion-forward with a vintage feel.', 1, 0),
(74, 'Oliver Peoples', 'Josianne', 'Black,Tortoise,Clear', 275.00, 'Oval', 50, 'Optical', 'Fashion-forward with a vintage feel.', 1, 0),
(75, 'Oliver Peoples', 'OP-47', 'Black,Brown', 335.00, 'Round', 46, 'Optical', 'Sleek and sophisticated, provides superior comfort.', 1, 0),
(76, 'Oliver Peoples', 'Gregory Peck', 'Black,Brown,Tortoise,Clear', 255.00, 'Round', 54, 'Sun', 'Chic and refined, suits a professional look.', 1, 0),
(77, 'Oliver Peoples', 'Finley 1993', 'Black,Brown,Red,Tortoise,Clear', 290.00, 'Round', 54, 'Sun', 'Lightweight frame with exceptional durability.', 1, 0),
(78, 'Oliver Peoples', 'Birell', 'Black,Brown,Clear', 355.00, 'Rectangle', 54, 'Sun', 'Chic and refined, suits a professional look.', 1, 0),
(79, 'Oliver Peoples', 'Sidell', 'Red,Green,Clear', 362.50, 'Round', 56, 'Optical', 'Bold and modern, stands out in any crowd.', 1, 0),
(80, 'Oliver Peoples', 'Maysen', 'Black,Brown,Red,Clear', 360.00, 'Square', 47, 'Sun', 'Classic design with a contemporary twist.', 1, 0),
(81, 'Cartier', 'odkowkod', 'Black', 120.00, 'Oval', 12, 'Sun', ' very good', 1, 0),
(82, 'Cartier', 'dsfsdf', 'Black', 213.00, 'Aviator', 12, 'Optical', ' fdxfsdf', 8, 1),
(83, 'Gucci', 'epruwhfsoidfgfv', 'Tortoise', 128.00, 'Geometric', 12, 'Sun', ' very pretty to wear, makes you very cool', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `description` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`review_id`),
  KEY `fk_review_product_id_product` (`product_id`),
  KEY `fk_review_customer_id_customer` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `product_id`, `customer_id`, `rating`, `description`, `timestamp`) VALUES
(12, 1, 15, 1, '', '2024-05-24 12:31:42'),
(14, 1, 15, 4, 'gbcvhtrrfdsvcsdqrghjdqwgdfgfd ghfghdf gdfvxcbxc vxcvxc vx', '2024-05-24 18:30:14'),
(15, 82, 15, 5, 'WOOOW this is zonkers', '2024-05-27 21:44:46'),
(16, 1, 15, 1, '', '2024-05-28 20:58:23'),
(17, 1, 15, 5, '', '2024-05-28 21:13:59'),
(19, 1, 17, 5, 'blah blah', '2024-05-28 23:51:12'),
(21, 9, 18, 5, 'lovely', '2024-05-29 18:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `issue` text NOT NULL,
  `issue_title` text NOT NULL,
  `issue_description` text NOT NULL,
  `ticket_status` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `product_id`, `customer_id`, `issue`, `issue_title`, `issue_description`, `ticket_status`, `timestamp`) VALUES
(3, 1, 15, 'Product Issue', 'bruh', 'boy what the hael', 0, '2024-05-24 20:15:31'),
(4, 1, 15, 'Order Issue', 'Man I dont Want to look like a neeerd', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada justo id risus tincidunt, sit amet vestibulum neque posuere. Suspendisse sed nibh ut mauris viverra aliquet in ac lacus. Donec a odio tellus. Nunc vehicula eu augue eget rutrum. Donec eu fringilla arcu. Sed eget dui eget purus lacinia sagittis quis vitae nibh. Sed vulputate leo eu ex imperdiet, vel lacinia quam vehicula. Sed sollicitudin, ligula et ullamcorper aliquet, felis odio ultrices elit, a dignissim libero massa qu', 0, '2024-05-25 00:36:25'),
(5, 1, 15, 'Product Issue', 'BOY WHAT TTHE GLELLO', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada justo id risus tincidunt, sit amet vestibulum neque posuere. Suspendisse sed nibh ut mauris viverra aliquet in ac lacus. Donec a odio tellus. Nunc vehicula eu augue eget rutrum. Donec eu fringilla arcu. Sed eget dui eget purus lacinia sagittis quis vitae nibh. Sed vulputate leo eu ex imperdiet, vel lacinia quam vehicula. Sed sollicitudin, ligula et ullamcorper aliquet, felis odio ultrices elit, a dignissim libero massa quis risus. Vestibulum viverra convallis posuere. Nullam eu ex enim. Nullam malesuada cursus elit, et consectetur ex. Vestibulum at risus et orci rhoncus pharetra non sed libero. Etiam ac erat in justo bibendum congue. Proin tempus rutrum mauris vel maximus. Cras pellentesque molestie magna eu dictum.\r\n\r\nDonec porta sem lacus, ac suscipit leo ultricies sit amet. Vivamus malesuada imperdiet facilisis. Integer et turpis hendrerit orci dictum fermentum eu eu turpis. Vestibulum auctor sit amet mi at egestas. Donec pharetra dapibus nisi, ac euismod lectus congue non. Maecenas id leo ultricies, gravida orci quis, interdum lacus. Cras maximus in nunc at porttitor. Etiam pharetra pellentesque quam et gravida. Curabitur bibendum quam lorem, congue convallis nisi porttitor non. In vel ex quis eros ullamcorper scelerisque et malesuada velit. Cras eget nunc turpis. Cras id sapien vel augue ornare rhoncus id ut arcu. Cras quis volutpat diam, ut sodales magna. Donec egestas mollis justo vitae mollis.', 1, '2024-05-25 18:30:28'),
(6, 1, 16, 'Order Issue', 'BRO WHAT AM I DOING', 'HOW DO I EVEN OCNTACT YOUUUUU 😡😡😡😡😡', 1, '2024-05-25 18:50:23'),
(7, 1, 16, 'Order Issue', 'WOOW DID YOU END MY MESSAGE?!?!?!?', 'IM SUING 😡', 1, '2024-05-25 18:53:59'),
(8, 1, 15, 'Order Issue', 'My glasses is not here yet', 'hurry up I want my Gucci glasses', 0, '2024-05-28 16:57:40'),
(9, 1, 18, 'Product Issue', 'missing product', 'why is not here', 1, '2024-05-29 18:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_message`
--

DROP TABLE IF EXISTS `ticket_message`;
CREATE TABLE IF NOT EXISTS `ticket_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_message`
--

INSERT INTO `ticket_message` (`message_id`, `ticket_id`, `user_id`, `message`, `timestamp`) VALUES
(1, 3, 15, 'bonjour', '2024-05-24 23:53:53'),
(2, 3, 15, 'barh', '2024-05-24 23:54:06'),
(3, 3, 15, 'a', '2024-05-25 00:01:22'),
(4, 3, 15, 'qa', '2024-05-25 00:02:13'),
(5, 3, 15, 'zxc', '2024-05-25 00:02:27'),
(6, 3, 15, 'b', '2024-05-25 00:03:07'),
(7, 4, 15, 'This is becasue whjen your a nerd, you lose 100% coolness', '2024-05-25 00:37:07'),
(8, 4, 15, 'Also Being a nerd means ill be like max which is badd', '2024-05-25 00:37:28'),
(9, 4, 15, 'Because if im like max, that means im very stupid', '2024-05-25 00:37:49'),
(10, 4, 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada justo id risus tincidunt, sit amet vestibulum neque posuere. Suspendisse sed nibh ut mauris viverra aliquet in ac lacus. Donec a odio tellus. Nunc vehicula eu augue eget rutrum. Donec eu fringilla arcu. Sed eget dui eget purus lacinia sagittis quis vitae nibh. Sed vulputate leo eu ex imperdiet, vel lacinia quam vehicula. Sed sollicitudin, ligula et ullamcorper aliquet, felis odio ultrices elit, a dignissim libero massa qu', '2024-05-25 00:38:11'),
(11, 4, 15, 'dfcgvb jhk ', '2024-05-25 16:46:41'),
(12, 4, 2, 'Okay Bruh', '2024-05-25 16:47:52'),
(13, 4, 2, 'yall this so cringee', '2024-05-25 16:54:57'),
(14, 4, 2, 'man why are you asking this', '2024-05-25 16:57:06'),
(15, 4, 2, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada justo id risus tincidunt, sit amet vestibulum neque posuere. Suspendisse sed nibh ut mauris viverra aliquet in ac lacus. Donec a odio tellus. Nunc vehicula eu augue eget rutrum. Donec eu fringilla arcu. Sed eget dui eget purus lacinia sagittis quis vitae nibh. Sed vulputate leo eu ex imperdiet, vel lacinia quam vehicula. Sed sollicitudin, ligula et ullamcorper aliquet, felis odio ultrices elit, a dignissim libero massa quis risus. Vestibulum viverra convallis posuere. Nullam eu ex enim. Nullam malesuada cursus elit, et consectetur ex. Vestibulum at risus et orci rhoncus pharetra non sed libero. Etiam ac erat in justo bibendum congue. Proin tempus rutrum mauris vel maximus. Cras pellentesque molestie magna eu dictum.\r\n\r\nDonec porta sem lacus, ac suscipit leo ultricies sit amet. Vivamus malesuada imperdiet facilisis. Integer et turpis hendrerit orci dictum fermentum eu eu turpis. Vestibulum auctor sit amet mi at egestas. Donec pharetra dapibus nisi, ac euismod lectus congue non. Maecenas id leo ultricies, gravida orci ', '2024-05-25 17:09:10'),
(16, 4, 2, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada justo id risus tincidunt, sit amet vestibulum neque posuere. Suspendisse sed nibh ut mauris viverra aliquet in ac lacus. Donec a odio tellus. Nunc vehicula eu augue eget rutrum. Donec eu fringilla arcu. Sed eget dui eget purus lacinia sagittis quis vitae nibh. Sed vulputate leo eu ex imperdiet, vel lacinia quam vehicula. Sed sollicitudin, ligula et ullamcorper aliquet, felis odio ultrices elit, a dignissim libero massa quis risus. Vestibulum viverra convallis posuere. Nullam eu ex enim. Nullam malesuada cursus elit, et consectetur ex. Vestibulum at risus et orci rhoncus pharetra non sed libero. Etiam ac erat in justo bibendum congue. Proin tempus rutrum mauris vel maximus. Cras pellentesque molestie magna eu dictum.\r\n\r\nDonec porta sem lacus, ac suscipit leo ultricies sit amet. Vivamus malesuada imperdiet facilisis. Integer et turpis hendrerit orci dictum fermentum eu eu turpis. Vestibulum auctor sit amet mi at egestas. Donec pharetra dapibus nisi, ac euismod lectus congue non. Maecenas id leo ultricies, gravida orci quis, interdum lacus. Cras maximus in nunc at porttitor. Etiam pharetra pellentesque quam et gravida. Curabitur bibendum quam lorem, congue convallis nisi porttitor non. In vel ex quis eros ullamcorper scelerisque et malesuada velit. Cras eget nunc turpis. Cras id sapien vel augue ornare rhoncus id ut arcu. Cras quis volutpat diam, ut sodales magna. Donec egestas mollis justo vitae mollis. A', '2024-05-25 17:09:44'),
(17, 5, 2, 'ermm what the sigma', '2024-05-25 17:45:52'),
(18, 6, 2, 'BRO SHUT ur mouth pleawse 🥺🥺🥺', '2024-05-25 18:50:04'),
(19, 7, 2, 'haha nerd you big loser', '2024-05-25 18:53:38'),
(20, 7, 2, 'why did you go bye bye now 🤤', '2024-05-25 18:53:53'),
(21, 8, 15, 'I think they were green', '2024-05-28 17:22:10'),
(22, 9, 18, 'hurry up', '2024-05-29 18:13:29'),
(23, 9, 2, 'its coming soon, dont worry', '2024-05-29 18:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  UNIQUE KEY `product_id` (`product_id`,`customer_id`),
  KEY `fk_wishlist_customer_id_customer` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`product_id`, `customer_id`) VALUES
(3, 14),
(6, 15),
(7, 14),
(7, 15),
(22, 14),
(26, 14),
(27, 14),
(72, 10),
(80, 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_customer_id_customer` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`customer_id`),
  ADD CONSTRAINT `fk_review_product_id_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_wishlist_customer_id_customer` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`customer_id`),
  ADD CONSTRAINT `fk_wishlist_product_id_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
