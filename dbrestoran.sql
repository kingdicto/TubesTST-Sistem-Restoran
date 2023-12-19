-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 04:56 PM
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
-- Database: `dbrestoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `listmenu`
--

CREATE TABLE `listmenu` (
  `idmenu` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah terpesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listmenu`
--

INSERT INTO `listmenu` (`idmenu`, `nama`, `harga`, `jumlah terpesan`) VALUES
(1, 'Margherita Pizza', 85000, 10),
(2, 'Spaghetti Bolognese', 70000, 15),
(3, 'Risotto ai Funghi', 95000, 50),
(7, 'Tiramisu', 45000, 22),
(12, 'Lasagna al Forno', 80000, 100),
(20, 'Canneloni Ricotta e Spinaci', 75000, 100),
(22, 'Prosciutto e Melone', 60000, 21),
(50, 'Minestrone Soup', 55000, 31),
(55, 'Negroni Cocktail', 90000, 500),
(221, 'Caprese Salad', 50000, 211);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('hugo', '5f4dcc3b5aa765d61d8327deb882cf99', 'dummy1@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewmenu`
-- (See below for the actual view)
--
CREATE TABLE `viewmenu` (
`idmenu` int(11)
,`nama` varchar(255)
,`harga` int(11)
,`jumlah terpesan` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewrekomendasi`
-- (See below for the actual view)
--
CREATE TABLE `viewrekomendasi` (
`idmenu` int(11)
,`nama` varchar(255)
,`harga` int(11)
,`jumlah terpesan` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `viewmenu`
--
DROP TABLE IF EXISTS `viewmenu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewmenu`  AS SELECT `listmenu`.`idmenu` AS `idmenu`, `listmenu`.`nama` AS `nama`, `listmenu`.`harga` AS `harga`, `listmenu`.`jumlah terpesan` AS `jumlah terpesan` FROM `listmenu` ;

-- --------------------------------------------------------

--
-- Structure for view `viewrekomendasi`
--
DROP TABLE IF EXISTS `viewrekomendasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewrekomendasi`  AS SELECT `listmenu`.`idmenu` AS `idmenu`, `listmenu`.`nama` AS `nama`, `listmenu`.`harga` AS `harga`, `listmenu`.`jumlah terpesan` AS `jumlah terpesan` FROM `listmenu` ORDER BY `listmenu`.`jumlah terpesan`* `listmenu`.`harga` DESC LIMIT 0, 10 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listmenu`
--
ALTER TABLE `listmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
