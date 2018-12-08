-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2018 at 02:04 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon`
--

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `BOOK_NAME`, `COURSE`, `DATE_PUBLISHED`, `INVENTORY_AV`, `Price`) VALUES
(10000000, 'Introduction to Web applications', 'CIS 3000', '2018-11-26 20:44:38', 10, 100),
(10000001, 'Introduction to Web development', 'CIS 3050', '2018-11-26 20:44:38', 20, 95),
(10000002, 'Introduction to C++', 'CIS 3100', '2018-11-26 20:44:38', 30, 95),
(10000003, 'Introduction to Phython', 'CIS 3200', '2018-11-26 20:44:38', 40, 112),
(10000004, 'Introduction to JAVA', 'CIS 3300', '2018-11-26 20:44:38', 10, 105),
(10000005, 'Advanced Web app Development', 'CIS 4000', '2018-11-26 20:44:38', 12, 120),
(10000006, 'Advanced Web Design', 'CIS 4100', '2018-11-26 20:44:38', 11, 115),
(10000007, 'Advanced C++', 'CIS 4110', '2018-11-26 20:44:38', 5, 140),
(10000009, 'Advanced Python', 'CIS 4260', '2018-11-26 20:44:38', 2, 140),
(10000010, 'Advanced JAVA', 'CIS 4380', '2018-11-26 20:44:38', 0, 95),
(10000011, 'Introduction to Cyber Security', 'CIS 3400', '2018-11-26 20:55:41', 0, 120),
(10000012, 'Introduction to Databases', 'CIS 3560', '2018-11-26 20:55:41', 6, 122),
(10000013, 'Advanced Cyber Security', 'CIS 4800', '2018-11-26 20:55:41', 5, 150),
(10000014, 'Advanced Databases', 'CIS 4950', '2018-11-26 20:55:41', 0, 109),
(10000015, 'Introduction to Information Tech Audit', 'CIS 3900', '2018-11-26 20:55:41', 9, 111),
(10000016, 'Advanced Information Tech Audit', 'CIS 4870', '2018-11-26 20:55:41', 8, 115),
(10000017, 'Data Analytics', 'CIS 3600', '2018-11-26 20:55:41', 40, 102),
(10000018, 'Advanced Data Analytics', 'CIS 4600', '2018-11-26 20:55:41', 50, 100),
(10000019, 'Python Workbook', 'CIS 400', '2018-11-26 20:55:41', 18, 50),
(10000020, 'JAVA Workbook', 'CIS 300', '2018-11-26 20:55:41', 19, 50),
(10000021, 'C++ Workbook', 'CIS 200', '2018-11-26 21:06:10', 20, 55),
(10000022, 'Javascript workbook', 'CIS 100', '2018-11-26 21:06:10', 10, 65),
(10000023, 'Javascript for beginners', 'CIS 3750', '2018-11-26 21:06:10', 15, 103),
(10000024, 'SQL Manual', 'CIS 600', '2018-11-26 21:06:10', 4, 50),
(10000025, 'Strategic IT', 'CIS 4450', '2018-11-26 21:06:10', 30, 85),
(10000026, 'Green IT', 'CIS 4390', '2018-11-26 21:06:10', 31, 75),
(10000027, 'Social Media Technologies', 'CIS 3110', '2018-11-26 21:06:10', 40, 60),
(10000028, 'Advance Strategic IT', 'CIS 5000', '2018-11-26 21:06:10', 6, 99),
(10000029, 'Advance Green IT', 'CIS 5100', '2018-11-26 21:06:10', 0, 105),
(10000030, 'System Analysis', 'CIS 5950', '2018-11-26 21:06:10', 9, 200),
(10000031, 'Advanced Web app Development', 'CIS 4000', '2018-11-26 20:44:38', 12, 120);

--
-- Dumping data for table `Other_Products`
--

INSERT INTO `Other_Products` (`Product_ID`, `Product_Name`, `Inventory`, `Price`) VALUES
(123489, 'NO_2 Pemcil', 800, 2),
(123490, 'College ruled Notebook', 890, 8),
(123491, 'Ballpoint Pen', 890, 3),
(123492, 'Folder', 100, 6),
(123493, 'Cardigan', 100, 25),
(123494, 'Snickers', 10000, 1),
(123495, 'Kitkat', 1000, 1),
(123496, 'Orbit Gum', 700, 2),
(123497, 'Trident Gum', 700, 2),
(123498, 'Cadbury Chocolate', 500, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
