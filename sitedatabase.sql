-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 05:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverage_table`
--

CREATE TABLE `beverage_table` (
  `Id` int(5) NOT NULL,
  `Price` int(5) NOT NULL,
  `Drink` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL DEFAULT 'Drink'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverage_table`
--

INSERT INTO `beverage_table` (`Id`, `Price`, `Drink`, `Type`) VALUES
(3, 40, 'Lassi', 'Drink'),
(4, 20, 'Shikanji', 'Drink'),
(5, 30, 'Juice', 'Drink'),
(6, 20, 'Doodh Soda', 'Drink'),
(7, 15, 'Cool Drink', 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `bridal_dress`
--

CREATE TABLE `bridal_dress` (
  `Id` int(5) NOT NULL,
  `Dress` varchar(30) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bridal_dress`
--

INSERT INTO `bridal_dress` (`Id`, `Dress`, `Price`) VALUES
(1, 'Shower dec/ 150k', 150000),
(2, 'Casual dec/20k', 20000),
(3, 'Meeting dec/20k', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Id` int(5) NOT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Id`, `City`) VALUES
(1, 'Islamabad'),
(21, 'Rawalpindi');

-- --------------------------------------------------------

--
-- Table structure for table `curry_table`
--

CREATE TABLE `curry_table` (
  `Id` int(5) NOT NULL,
  `Price` int(5) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL DEFAULT 'Curry'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curry_table`
--

INSERT INTO `curry_table` (`Id`, `Price`, `Dish`, `Type`) VALUES
(1, 120, 'Bone less chicken', 'Curry'),
(2, 130, 'Mutton qorma', 'Curry'),
(3, 100, 'Palak chicken', 'Curry'),
(4, 160, 'Chicken Madras', 'Curry'),
(5, 170, 'Creamy chicken korma', 'Curry'),
(6, 90, 'Chicken ', 'Curry'),
(7, 110, 'Chicken korma', 'Curry'),
(8, 190, 'Mutton', 'Curry'),
(9, 140, 'Chicken tikka masala', 'Curry');

-- --------------------------------------------------------

--
-- Table structure for table `dish_type`
--

CREATE TABLE `dish_type` (
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_type`
--

INSERT INTO `dish_type` (`Type`) VALUES
('BEVERAGE'),
('CURRY'),
('RICE'),
('SALAD'),
('Sweet');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `CNIC` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`CNIC`, `Email`, `Name`, `Phone`, `DOB`, `Password`) VALUES
('3830211282073', 'rn45819@gmail.com', 'Ramzan Niazi', '03063961138', '2000-12-26', 'Mianwali'),
('3830211282079', 'akniaxxi@.com', 'Arsalan', '03063961139', '2000-12-26', 'Mianwali');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `Id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`Id`, `Name`, `Price`) VALUES
(1, 'Nadeem asghar/ 40k', 40000),
(2, 'Sagar hussain/ 38k', 38000),
(3, 'Nabeeha alam/ 57k', 57000),
(4, 'Hussain tariq/ 60k', 60000),
(5, 'Sara nadeem / 39k', 39000);

-- --------------------------------------------------------

--
-- Table structure for table `rental_car`
--

CREATE TABLE `rental_car` (
  `Id` int(5) NOT NULL,
  `Car` varchar(30) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental_car`
--

INSERT INTO `rental_car` (`Id`, `Car`, `Price`) VALUES
(1, 'Toyata GLI /5000', 5000),
(2, 'Toyata XLI/ 5000', 5000),
(3, 'Toyata forturne/1500', 15000),
(4, 'Honda civic / 8000', 8000),
(5, 'Mercedes\'s benz/25000', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `rice_table`
--

CREATE TABLE `rice_table` (
  `Id` int(5) NOT NULL,
  `Price` int(5) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Type` varchar(20) DEFAULT 'Rice'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rice_table`
--

INSERT INTO `rice_table` (`Id`, `Price`, `Dish`, `Type`) VALUES
(1, 200, 'Beef biryani', 'RICE'),
(2, 110, 'Vegetable biryani', 'RICE'),
(3, 110, 'Chinese Rice', 'RICE'),
(4, 190, 'Lamb biryani', 'RICE'),
(5, 100, 'Baryani', 'RICE');

-- --------------------------------------------------------

--
-- Table structure for table `salad_table`
--

CREATE TABLE `salad_table` (
  `Id` int(5) NOT NULL,
  `Price` int(5) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL DEFAULT 'Salad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salad_table`
--

INSERT INTO `salad_table` (`Id`, `Price`, `Dish`, `Type`) VALUES
(1, 70, 'Classic Macaroni Sal', 'Salad'),
(2, 70, 'Russian Salad', 'Salad'),
(3, 75, 'Olivier Salad Russia', 'Salad'),
(4, 70, 'Creamy Bacon Pea Sal', 'Salad'),
(5, 60, 'Sweet Pasta Salad', 'Salad');

-- --------------------------------------------------------

--
-- Table structure for table `stage_decoraction`
--

CREATE TABLE `stage_decoraction` (
  `Id` int(5) NOT NULL,
  `Service` varchar(20) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stage_decoraction`
--

INSERT INTO `stage_decoraction` (`Id`, `Service`, `Price`) VALUES
(1, 'Mehndi special/20k', 20000),
(2, 'Barat special/50k', 50000),
(3, 'Bridel match/120k', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `sweet`
--

CREATE TABLE `sweet` (
  `Id` int(5) NOT NULL,
  `Dish` varchar(20) NOT NULL,
  `Price` int(5) NOT NULL,
  `Type` varchar(20) NOT NULL DEFAULT 'Sweet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sweet`
--

INSERT INTO `sweet` (`Id`, `Dish`, `Price`, `Type`) VALUES
(1, 'Gulab Jaman', 100, 'Sweet'),
(2, 'Suji Ka Halwa', 100, 'Sweet'),
(3, 'Sohan Halwa', 150, 'Sweet'),
(4, 'Sheer Khurma', 150, 'Sweet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverage_table`
--
ALTER TABLE `beverage_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bridal_dress`
--
ALTER TABLE `bridal_dress`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `curry_table`
--
ALTER TABLE `curry_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dish_type`
--
ALTER TABLE `dish_type`
  ADD PRIMARY KEY (`Type`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`CNIC`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rental_car`
--
ALTER TABLE `rental_car`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rice_table`
--
ALTER TABLE `rice_table`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Type` (`Type`);

--
-- Indexes for table `salad_table`
--
ALTER TABLE `salad_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stage_decoraction`
--
ALTER TABLE `stage_decoraction`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sweet`
--
ALTER TABLE `sweet`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverage_table`
--
ALTER TABLE `beverage_table`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bridal_dress`
--
ALTER TABLE `bridal_dress`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `curry_table`
--
ALTER TABLE `curry_table`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rental_car`
--
ALTER TABLE `rental_car`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rice_table`
--
ALTER TABLE `rice_table`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salad_table`
--
ALTER TABLE `salad_table`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stage_decoraction`
--
ALTER TABLE `stage_decoraction`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sweet`
--
ALTER TABLE `sweet`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
