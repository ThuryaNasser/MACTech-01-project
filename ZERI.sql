-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2020 at 02:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ZERI`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Admin_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Admin_Password` varchar(45) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Admin_id`, `Admin_Password`) VALUES
('Abeer_Salem', 'AA123456'),
('Admin', '123123'),
('Aisha Almuniee', 'AA123456'),
('Bashayer_Abdullah', 'BB123456'),
('Doaa_Abdullah', 'DD123456'),
('Elaf_Mohammed', 'EE123456'),
('Fedaa_Mohammad', 'FF123456'),
('Walaa_Wadeea', 'WW123456'),
('Zahraa_Maher', 'ZZ123456');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Product_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Product_img` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Product_Name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Product_Description` text CHARACTER SET latin1 DEFAULT NULL,
  `Product_price` double DEFAULT NULL,
  `Product_quantity` int(11) NOT NULL,
  `Admin_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Product_size` set('XS','S','M','L','XL','2XL') NOT NULL,
  `Product_category` set('Dress','Abaya','Jalabya','Kids Ware','Accessories') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Product_id`, `Product_img`, `Product_Name`, `Product_Description`, `Product_price`, `Product_quantity`, `Admin_id`, `Product_size`, `Product_category`) VALUES
('A000001', 'img-pro-04.jpg', 'Beaded evening dress', 'Charming evening dress in gray color with high neck and Concealed zipper placket on reverse, beaded and embellished with pearls, small sparkling crystals and fringe details.', 2400, 12, 'Admin', 'XS,S,M,L,XL,2XL', 'Dress'),
('A000002', 'img-pro-01.jpg', 'White summer dress', 'Whte, Sheer Panel Fit & Flare Mesh and Lace Dress for summer', 420, 10, 'Admin', 'XS,S,M,L,XL,2XL', 'Dress'),
('A000003', 'img-pro-03.JPG', 'Embellished black abaya', 'The minimalistic black colored abaya is a sophisticated outerwear choice. The material fuses fashion with function and promises to enrich your work-to-weekend line-up. Wear it for the wedding function or layered over a slip dress when off duty- the possibilities are endless.', 340, 8, 'Admin', 'XS,S,M,L,XL,2XL', 'Abaya'),
('A000004', 'img-pro-02.JPG', 'Navy sequin dress', 'LOVE&LEMONADEout Navy Sequin Prom Dress for parties', 2600, 5, 'Admin', 'XS,S,M,L,XL,2XL', 'Dress'),
('A000005', 'img-pro-05.jpg', 'White stripes details abaya', 'Round neckline Long sleeves Snap button closure at front Soft pleats at front waist and sleeves Contrast floral patchwork embroidery Comes with a sheila Dry clean only', 280, 9, 'Admin', 'XS,S,M,L,XL,2XL', 'Abaya'),
('A000006', 'img-pro-06.jpg', 'Green & white design jalabya', 'Plunging Neck Twist Split Tight Floral Jalabya', 530, 6, 'Admin', 'XS,S,M,L,XL,2XL', 'Jalabya'),
('A000007', 'img-pro-07.jpg', 'Green kid\'s tie dress', 'Toddler Girls Floral Embroidery Frill Cuff Turquoise Dress', 150, 15, 'Admin', 'XS,S,M,L,XL,2XL', 'Kids Ware'),
('A000008', 'img-pro-08.jpg', 'Pink feathered kid\'s dress', 'Toddler Girls Contrast Collar Bow Lace Fur Panel Dress', 280, 4, 'Admin', 'XS,S,M,L,XL,2XL', 'Kids Ware'),
('A000009', 'img-pro-09.jpg', 'Off-white & gold detail jalabya', 'High Neck Off-white & gold detail Jacquard Thread Jalabya', 490, 4, 'Admin', 'XS,S,M,L,XL,2XL', 'Jalabya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Admin_id` (`Admin_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `Admin` (`Admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
