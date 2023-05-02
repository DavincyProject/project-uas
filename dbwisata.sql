-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 06:34 AM
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
-- Database: `dbwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Billy', 'admin@admin.com', '$2y$10$/nY3RNZaLda2agxXianjhOhJkCq1vZgftPfe.1EbhZe1frbmj6Vaq', NULL, '2023-04-21 04:58:28', NULL),
(4, 'tes', 'super@gmail.com', '$2y$10$4FiVXD6OPiUIGxVzqR2qEeDgh4.KI0GJPi21u3TZwZC.usKjCN/4u', '2023-04-17 13:55:35', '2023-04-21 04:48:55', '2023-04-21 04:48:55'),
(5, 'bejo', 'bejo@gmail.com', '$2y$10$1/ndbxVpU1ielURlT9hU6.8sxgo8Xj8XmkPXyhJ3si3d/ZQ5uEA2.', '2023-04-21 04:48:26', '2023-04-21 04:48:56', '2023-04-21 04:48:56'),
(6, 'tes', 'tes@gmail.com', '$2y$10$E3vgQP36x7TRqt9Ecy7/1eRACHR3lrcqZ7XGwKWmNuVAbfUUYi2Ly', '2023-04-21 04:55:45', '2023-04-21 04:55:48', '2023-04-21 04:55:48'),
(7, 'asdasd', 'asdasd@gmail.com', '$2y$10$H6wpBg46etiOwvrs2Q9/POIhXY4ygClYAoSe9RzcmNh0N5WzNaTny', '2023-04-21 05:24:30', '2023-04-21 05:24:32', '2023-04-21 05:24:32'),
(8, 'tes', 'asd@gmail.com', '$2y$10$YMTQIbjEAYlVpwo1UP5JGuNNOK4W/11t6f/1S6.7xOhzEEVKCurnC', '2023-04-21 05:25:24', '2023-04-21 05:25:26', '2023-04-21 05:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` varchar(150) NOT NULL,
  `id` varchar(21) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `qty_anak` varchar(10) DEFAULT NULL,
  `qty_dewasa` varchar(10) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_datang` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `snap` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id`, `id_wisata`, `qty_anak`, `qty_dewasa`, `total`, `tgl_berangkat`, `tgl_datang`, `status`, `snap`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1681783199', '1681626566', 29, '0', '1', '2500000', '2023-04-18', '2023-04-21', 'settlement', '995f2934-f007-4822-8bf9-5e7765bc0f8e', '2023-04-18 02:00:00', '2023-04-18 02:00:17', NULL),
('1681785476', '1681785443', 29, '0', '1', '2500000', '2023-04-20', '2023-04-27', 'settlement', 'd358f1ce-27a5-4dde-aa0d-1f17a340b463', '2023-04-18 02:37:57', '2023-04-18 02:40:25', NULL),
('1681812594', '1681785443', 27, '0', '1', '1500000', '2023-04-18', '2023-04-28', 'pending', '8836b63d-13ea-479b-9457-a82040750691', '2023-04-18 10:09:56', '2023-04-19 09:07:48', NULL),
('1682048778', NULL, 27, '0', '1', '1500000', '2023-04-28', '2023-04-01', NULL, '527449c5-49e5-4fbf-ace4-b7befab76bd6', '2023-04-21 03:46:21', '2023-04-21 03:46:21', NULL),
('1682056104', '1682056073', 27, '0', '1', '15000', '2023-04-21', '2023-04-29', 'settlement', 'ca5a039b-0d10-4e6b-860c-25b713ac8065', '2023-04-21 05:48:26', '2023-04-21 05:48:53', NULL),
('1682071179', '1681785443', 27, '0', '1', '15000', '2023-04-04', '2023-04-18', NULL, '7c7ceddc-e712-478b-bbff-f90b2bddc1f4', '2023-04-21 09:59:42', '2023-04-21 09:59:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(40) NOT NULL,
  `nama_users` varchar(100) DEFAULT NULL,
  `kelamin` varchar(30) DEFAULT NULL,
  `ponsel` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_users`, `kelamin`, `ponsel`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1681785443', 'billy', 'laki-laki', '0812123456', 'tes@gmail.com', '$2y$10$QubilnAzmNFi2b/1nlUS0e2zgCIphJkyYq2.dKfQMbIYdidlwCC9i', '2023-04-18 02:37:23', '2023-04-18 02:37:23', NULL),
('1681812685', 'akun test', 'laki-laki', '000000000000', 'akuntes@gmail.com', '$2y$10$ODwKjTGKke/IwooWsLnxKORgXL78y/wbHK3sUvUSfiJu6OvgZZm/y', '2023-04-18 10:11:25', '2023-04-18 10:11:25', NULL),
('1681901489', 'bil', 'laki-laki', '089655071447', 'bil@gmail.com', '$2y$10$YELAZANU4ZqOmjMnF9RTTet9.snO9n.PML8jayCcKeO78BPqBuj6G', '2023-04-19 10:51:29', '2023-04-19 10:51:29', NULL),
('1682056073', 'jojo', 'laki-laki', '089655071147', 'jojo@gmail.com', '$2y$10$rRhGwUxUxRp8z1IDKV3xYOm6MWeVy46oEuU1qWUla43ka0mBUVB4G', '2023-04-21 05:47:53', '2023-04-21 05:47:53', NULL),
('1682764188', 'postman', 'laki-laki', '081212341234', 'pos@gmail.com', '$2y$10$UkUMVHE5pEXtEBLyPZ0qNud6iPC8s93MFSHP6a61Z0EL6UEL37u6.', '2023-04-29 10:29:48', '2023-04-29 10:29:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `deskripsi`, `harga`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'Bali', 'asdasd', '15000', 'bali.png', '2023-04-15 10:21:58', '2023-04-21 04:08:23', NULL),
(28, 'Jogja', 'asd', '1000000', 'jogja.jpg', '2023-04-15 10:22:12', '2023-04-15 10:22:12', NULL),
(29, 'Singapore', 'asd', '1500000', 'singapore.jpeg', '2023-04-15 10:22:26', '2023-04-21 04:13:23', NULL),
(34, 'raja ampat', 'asdalksjdlkahjsldkjasd', '700000', 'raja.jpeg', '2023-04-21 04:12:02', '2023-04-21 04:12:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
