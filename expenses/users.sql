-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 04:13 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expanse`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `monthly` int(255) NOT NULL,
  `saving` int(255) NOT NULL,
  `spending` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `monthly`, `saving`, `spending`) VALUES
(2, 'Codearena', 'Premsaiswain@gmail.com', 'qq', 12, 123, 0),
(8, '182084', 'raavdhsbefegrg@fnsadu', '1', 12, 12, 0),
(9, 'prem', 'Premsaiswain@gmail.com', '987', 13, 1, 0),
(17, '1', 'Premsaiswain@gmail.com', '111', 12, 1, 0),
(18, 'www', 'Premsaiswain@gmail.com', '11', 12, 1, 0),
(19, 'rahul', 'rahul@gmail.com', '$2y$10$Q6zdrOj4JpJcAq.tc1Y02OPrIKStoxk3HVINk6QqH5XoWL2wXxKMO', 12, 1, 0),
(20, 'pratyush', 'pratyushkumarswain23@gmail.com', '$2y$10$y5X4Iu74z6xWSD.J6QrbweyIzDJnbfvKjDM3Nbs3wrfKHuce58KTG', 12000, 3000, 0),
(21, 'rahul23', 'rahul12@gmail.com', '$2y$10$cWJ9HRXkG4WyzeN86v/DTOGcV957xPxfvZiMsNKU7NqJL0TfyqTMm', 123, 1, 0),
(22, 'qweeee', 'qwe@gmail.com', '$2y$10$xvUnnUoGmZKUMSZpxR2Cx.uQJy8NJvWfPNFrENMOnfLMtdIZvvGbO', 0, 0, 0),
(23, 'qweeeeeeee', 'sss@gmail.com', '$2y$10$.UJHKoCm8Pp9n2orBh1e2.uwbCjrA2d2z0SeVyzxLeiIbVXRyx7vW', 0, 0, 0),
(24, 'fab123', 'Premsaiswain@gmail.com', '$2y$10$bSNf4ggD6PwPYBzUavhE1ee7lfSpLlsXNDKJeZBXmLCyyeRCbQD4O', 0, 1000, 0),
(25, '', '', '', 0, 0, 0),
(31, 'daddy', 'Premsaiswain@gmail.com', '$2y$10$plnqQEV4GFUP1SECJ5jOv.Obd.r9Gk4kPwo.uXYR.6SDrCYlWG/l6', 14935, 2300, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
