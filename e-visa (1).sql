-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 11:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-visa`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyer`
--

CREATE TABLE `applyer` (
  `email` varchar(256) NOT NULL,
  `passport` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `visa` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyer`
--

INSERT INTO `applyer` (`email`, `passport`, `photo`, `visa`, `country`) VALUES
('manali1315@gmail.com', 'Snapchat-1881168274.jpg', 'Snapchat-1881168274.jpg', 'Tourist', ''),
('nilpesh@gmail.com', 'Snapchat-1187627580.jpg', 'Snapchat-1187627580.jpg', 'Student', ''),
('PArthiv@gmail.com', 'Snapchat-1881168274.jpg', 'Screenshot_2023-02-08-23-26-49-53_f890dc7e3b036af087bf4fc99a642c7d.jpg', 'Invester', ''),
('jay@gmail.com', 'IMG_20211230_185717_263.jpg', 'IMG_20211019_125404_690.jpg', 'Student', 'CA'),
('dev@gmail.com', 'R.jpg', 'R (1).jpg', 'Tourist', 'BH'),
('mit99@gmail.com', 'wp5632674.webp', 'R.jpg', 'Student', 'CU'),
('harsh@gmail.com', 'R3.jpg', 'rajvee_vasavada.jpg', 'Tourist', 'AT');

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `sub` varchar(256) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`id`, `name`, `email`, `sub`, `msg`) VALUES
(1, 'Vraj', 'vrajsurani606@gmail.com', 'hello', ''),
(2, 'Vraj', 'vrajsurani606@gmail.com', 'qef', ''),
(5, 'Vraj', 'vrajsurani606@gmail.com', 'hello', 'hello'),
(6, 'Vraj', 'vrajsurani606@gmail.com', 'hello', 'hello'),
(7, 'Vraj', 'vrajsurani606@gmail.com', 'jii', 'jiiijiii'),
(8, 'bina', 'bina99@gmail.com', 'hello', 'contact me'),
(9, 'bina', 'bina99@gmail.com', 'hello', 'contact me'),
(10, 'bina', 'bina99@gmail.com', 'hello', 'contact me'),
(11, 'bina', 'bina99@gmail.com', 'hello', 'contact me');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `card` int(100) NOT NULL,
  `expiry` varchar(100) NOT NULL,
  `cvv` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`name`, `email`, `card`, `expiry`, `cvv`) VALUES
('Vraj M Surani', 'vrajsurani606@gmail.com', 0, '', 0),
('Vraj M Surani', 'vrajsurani606@gmail.com', 0, '', 0),
('Vraj M Surani', 'vrajsurani606@gmail.com', 0, '', 0),
('Vraj M Surani', 'vrajsurani606@gmail.com', 0, '', 0),
('Vraj M Surani', 'vrajsurani606@gmail.com', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `p_detail`
--

CREATE TABLE `p_detail` (
  `id` int(200) NOT NULL,
  `f_name` varchar(256) NOT NULL,
  `l_name` varchar(256) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` int(200) NOT NULL,
  `passno` varchar(256) NOT NULL,
  `Aadharno` int(200) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_detail`
--

INSERT INTO `p_detail` (`id`, `f_name`, `l_name`, `birthdate`, `email`, `phone`, `passno`, `Aadharno`, `status`) VALUES
(12, '  manali', 'rathod', '2000-03-13', 'manali1315@gmail.com', 2147483647, '789456123321', 2147483647, 'reject'),
(13, '   rajvee', 'vasavda', '2000-06-15', 'RAJVEE344@GMAIL.COM', 2147483647, '787878525623', 2147483647, 'reject'),
(16, '   Avish', 'shiroya', '2000-01-29', 'avish22@gmail.com', 2147483647, '987987987987', 2147483647, 'accept'),
(17, 'Vraj', 'Surani', '2023-09-18', 'vrajsurani606@gmail.com', 2147483647, '555555555555', 2147483647, 'reject'),
(18, ' dev', 'vad', '2000-06-15', 'dev@gmail.com', 2147483647, '888888888888', 2147483647, 'accept'),
(19, '  mit', 'surname', '2023-10-01', 'mit99@gmail.com', 2147483647, '555555555555', 2147483647, ''),
(20, 'harsh ', 'surani', '2023-10-12', 'harsh@gmail.com', 2147483647, '222222222222', 2147483647, 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `email`, `password`) VALUES
('avish', 'avish22@gmail.com', '22'),
('Chandni', 'Chandni@gmail.com', '123'),
('dev', 'dev@gmail.com', '789'),
('harsh', 'harsh@gmail.com', '789'),
('jay', 'jay@gmail.com', 'jay'),
('kuldip', 'kuldip99@gmail.com', 'kuldip@99'),
('Vraj_Surani', 'main123@gmail.com', '1506'),
('manali rathod', 'manali1315@gmail.com', '13151315'),
('mit', 'mit2@gmail.com', '25'),
('mit', 'mit99@gmail.com', '9911'),
('nilpesh', 'nilpesh@gmail.com', '123'),
('PArthiv', 'PArthiv@gmail.com', '2004'),
('RAJVEE', 'RAJVEE344@GMAIL.COM', '852852'),
('jay thummar', 'thummarj00@gmail.com', '111'),
('Vraj_Surani', 'vrajsurani606@gmail.com', '9724085965');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyer`
--
ALTER TABLE `applyer`
  ADD KEY `email` (`email`);

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_detail`
--
ALTER TABLE `p_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `p_detail`
--
ALTER TABLE `p_detail`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applyer`
--
ALTER TABLE `applyer`
  ADD CONSTRAINT `apply_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `p_detail`
--
ALTER TABLE `p_detail`
  ADD CONSTRAINT `p_detail_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
