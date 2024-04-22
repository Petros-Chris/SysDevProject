-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2024 at 07:29 PM
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
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `brand`, `model`, `color`, `cost_price`, `shape`, `size`, `optical_sun`, `description`, `quantity`, `disable`) VALUES
(1, 'Cartier', 'ESW00632', 'Brown,Red,Tortoise', 787.50, 'Rectangle', 51, 'Optical', 'Timeless aesthetics with modern functionality.', 1, 0),
(2, 'Cartier', 'ESW00629', 'Black', 475.00, 'Oval', 46, 'Sun', 'Bold and modern, stands out in any crowd.', 1, 0),
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
(81, 'Cartier', 'odkowkod', 'Black', 120.00, 'Oval', 12, 'Sun', ' very good', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
