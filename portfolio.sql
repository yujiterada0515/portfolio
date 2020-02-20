-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2020 at 06:19 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`, `status`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'A'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'U'),
(4, 'mineharu', 'c69dc147f706ad7de4107b9c55695c76', 'U'),
(6, 'yuji', '248dfdd70e60bd3a3d2f0b0485551717', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contract_id` int(11) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `deadline_date` date NOT NULL,
  `claim_day` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`contract_id`, `client_name`, `home_address`, `contact_number`, `email`, `start_date`, `deadline_date`, `claim_day`, `description`, `photo`) VALUES
(1, 'test', 'japan', '12345', 'test@email.com', '2020-02-07', '2020-02-08', '2020-02-09', 'Toilet Broken', NULL),
(6, 'yusuke kume', 'America', '23456789', 'a@gmail.com', '2020-02-15', '2020-02-24', '2020-02-27', 'qwer', ''),
(8, 'Yugo Oka', 'japan', '333333333333', 'test@email.com', '2020-02-14', '2020-02-12', '2020-02-11', '345677', ''),
(9, 'ryou shinkawa', 'japan', '1111111111', 'a@gmail.com', '2020-02-01', '2020-02-04', '2020-02-19', 'qqww', '9008735894420.MP4'),
(10, 'yousuke harasawa', 'japan', '059473374', 'hara@email.com', '2020-02-07', '2020-02-14', '2020-02-27', 'hara', '9008732227315.MP4'),
(11, 'Kirby', 'phillippines', '-1', 'a@gmail.com', '2020-02-08', '2020-02-15', '2020-02-22', 'o', 'IMG_0953.JPG'),
(12, 'Ryo', 'phillippines', '-1', 'a@gmail.com', '2020-02-08', '2020-02-15', '2020-02-22', 'o', 'IMG_0953.JPG'),
(13, 'mentos', 'phillippines', '87', 'mentos@email.com', '2020-02-08', '2020-02-15', '2020-02-22', '2334', 'football in Denmark.JPG'),
(14, 'eiji miyazono', 'japan', '3435533', 'eiji@email.com', '2020-02-01', '2020-02-08', '2020-02-15', 'fjdkjfdifirioajf', '8997136649178.MP4'),
(15, 'q', 'q', '3', 'test@email.com', '2020-02-08', '2020-02-08', '2020-02-15', '1', '8997136649178.MP4'),
(16, 'mineharu', 'japan', '67', 'test@email.com', '2020-02-01', '2020-02-08', '2020-02-22', 'q', '9008732227315.MP4'),
(17, 'Kirby', 'phillippines', '12345', 'test@email.com', '2020-02-01', '2020-02-08', '2020-02-15', 'wqrew', ''),
(18, 'Kirby', 'japan', '5', 'yujiterada5@gmail.com', '2020-02-01', '2020-02-08', '2020-02-14', 'w', ''),
(19, 'teturo nanba', 'japan', '778877999', 'test@email.com', '2020-02-01', '2020-02-08', '2020-02-15', 'q', ''),
(20, 'Kirby', 'phillippines', '5', 'test@email.com', '2020-02-19', '2020-02-29', '2020-03-05', 'test', ''),
(21, 'Kirby', 'japan', '1233456788', 'test@email.com', '2020-02-01', '2020-02-15', '2020-02-22', 'sdf', '8997136649178.MP4');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `material_id` int(11) NOT NULL,
  `material_name` varchar(30) NOT NULL,
  `material_price` varchar(50) NOT NULL,
  `material_quantity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`material_id`, `material_name`, `material_price`, `material_quantity`) VALUES
(1, 'Almonds', '500', '1'),
(2, 'Pipes', '50', '10'),
(3, 'Glass', '100', '50'),
(4, 'Pipes', '100', '5'),
(5, 'mentos', '50', '8');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `contract_id`, `material_id`, `quantity`, `subtotal`) VALUES
(1, 21, 1, 2, 1000),
(2, 21, 3, 5, 500),
(3, 21, 4, 4, 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `account_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `email`, `account_id`) VALUES
(1, 'yuji', 'terada', 'japan', '12345', 'yuji@gmail.com', '1'),
(2, 'admin', 'admin', 'admin', '12345', 'admin@email.com', '2'),
(3, 'user', 'user', 'user', '1234', 'user@email.com', '3'),
(4, 'mineharu', 'terada', 'japan', '12345', 'a@gmail.com', '4'),
(5, 'yuj', 'terada', 'j', '', '', '5'),
(6, 'yuj', 'terada', 'japan', '22222222222', '222222@email.com', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
