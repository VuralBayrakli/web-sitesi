-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql109.epizy.com
-- Generation Time: Jun 24, 2022 at 10:17 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31911215_Bagis`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagis`
--
create database `epiz_31911215_Bagis`;
CREATE TABLE `epiz_31911215_Bagis`.`bagis` (
  `id` int(11) NOT NULL,
  `telNo` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bagis` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bagisTutari` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bagis`
--

INSERT INTO `epiz_31911215_Bagis`.`bagis` (`id`, `telNo`, `bagis`, `bagisTutari`, `date`) VALUES
(210, '1234567892', 'Su Kuyusu', 11212, '2022-06-22'),
(211, '5464512345', 'Cami', 3232, '2022-06-23'),
(212, '1234567852', 'Cami', 1221, '2022-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `epiz_31911215_Bagis`.`users` (
  `id` int(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_lastname` varchar(25) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phoneN` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `epiz_31911215_Bagis`.`users` (`id`, `user_id`, `user_name`, `user_lastname`, `user_email`, `user_phoneN`, `password`, `date`) VALUES

(41, 69019000, 'Burak', 'Burak', 'b@abc.com', '456456555', '$2y$10$h1mJQDB9vE1kMWFJIBnmdOKjUR6DtMpXa/hUYOk134PEctSXMVtkO', '2022-06-12 11:27:10'),
(42, 66827294860739384, 'vural', 'bay', 'qwwq', 'wqwqwq', '$2y$10$SWuXaqlJrw0KF2Fuc00m1OfHlG/k/5.rVAAo1x.kID3UP9vFzsp5i', '2022-06-12 11:40:00'),
(44, 9243322102313389, '', '', '', '', '', '2022-06-12 13:40:58'),
(52, 96461089039519017, 'berk', 'bb', 'abcs@abc.com', '54564545', 'Berkberk?12', '2022-06-21 16:37:02'),
(60, 4290092077290812962, 'Mahmut', 'Ekrem', 'mek@abc.com', '7894584511', 'Mahmut?12', '2022-06-22 20:15:30'),
(61, 1960585406217263102, 'ahmet', 'yÄ±ldÄ±z', 'a@a.com', '4564562514', 'Ahmet?12', '2022-06-22 20:37:41'),
(63, 9393, 'Bekir', 'Kur', 'b@abc.com', '5464512345', 'Bekir+12', '2022-06-23 11:00:38'),
(64, 8109607231477771476, 'Erdal', 'Bay', 'Er@abc.com', '1234567852', 'Erdal=12', '2022-06-24 09:41:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagis`
--
ALTER TABLE `epiz_31911215_Bagis`.`bagis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `epiz_31911215_Bagis`.`users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagis`
--
ALTER TABLE `epiz_31911215_Bagis`.`bagis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `epiz_31911215_Bagis`.`users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
