-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 04:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rasa` varchar(100) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `deskripsi`, `rasa`, `harga`) VALUES
(1, 'Croissant', 'Pastry', 'Almond', 'Rp75.000,00');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id` int(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rasa` varchar(200) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id`, `nama`, `deskripsi`, `rasa`, `harga`) VALUES
(1, 'Juice', 'Non-Coffee', 'Strawberry', 'Rp30.000,00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `telp` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `telp`, `email`, `alamat`) VALUES
(2, 'Maura', 123, 'maura@gmail.com', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, ' cafe@gmail.com ', ' $2y$10$kQYRKbC/NW/mTwMpOl..a.qQASjOHH0ujOPvdRUfM889uz5HZXzv. '),
(2, ' coffee@gmail.com ', ' $2y$10$/epzXm9AHKNpL6T9SLm1D.wkpfxJ4c4IZsfnGR5rBxhjxxUwYgOMC '),
(3, ' coffee@gmail.com ', ' $2y$10$squ.6e9xKnBnf56IDdlLN.GuziHysPtoeOktQwPIXC7E2LShAVKeq '),
(4, 'maura@gmail.com', '$2y$10$jB84otF1G2sTxV7wH.ryOOPWZCKaP5BeECWYFD4OiTtztmu28YskG'),
(5, 'rasyade@gmail.com', '$2y$10$ZWdkXDZQZsI1aH/ylwsNsOvsK9GOfCvab7TNmNLS2DXEp1NHlRKei'),
(6, 'kopi@gmail.com', '$2y$10$PLPbvTMGk6MyAV.I2a5ffuWANb9UnAJeO0kp1Qmex9UsTkSj58PTW'),
(7, 'roti@gmail.com', '$2y$10$QbehHANHr2yCYZDxT512FOcaS3w083Tp1WvHcLcKFQLY0JOnxdPqm'),
(8, 'cangkir@gmail.com', '$2y$10$Dh2ZS0VB9/Fs1f7qRnDzNOyX5t7yqvuNslwxLrGW3.gLW0PelgpGa'),
(9, 'garpu@gmail.com', '$2y$10$mar3JoRqQOK9uL8eHG3dn.f9q6l.Io9es7Ax0uHvbZ3/hWje96E3i'),
(10, 'sendok@gmail.com', '$2y$10$oFIj73TaLg6G2eX6Jl.U3Ogh6yWkeNlt9yxT4kqEwy9pS5oT3CA5i'),
(11, 'kayu@gmail.com', '$2y$10$6fAd75S9S0dyW4dqaQ3aQe/MWWimq46VIs0lcaILbqxfiLaWKB8SC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
