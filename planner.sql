-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2023 at 01:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsiveform4`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `locations` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  `r2` varchar(255) NOT NULL,
  `rr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `location`, `locations`, `duration`, `total`, `options`, `r2`, `rr`) VALUES
(85, 'jhkl.', 'lkj.', '19 May 2023 - 15 Jun 2023', '', 'Popular', 'Slow & easy', 'Outdoors,Romantic,Historic'),
(86, 'jhkl.', 'lkj.', '19 May 2023 - 15 Jun 2023', '', 'Popular', 'Slow & easy', 'Outdoors,Romantic,Historic'),
(87, 'ghm', 'ghmvn ', '11 May 2023 - 29 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Beaches,Historic'),
(88, 'ghm', 'ghmvn ', '11 May 2023 - 29 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Beaches,Historic'),
(89, 'yul', 'yuhlk', '12 May 2023 - 16 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Shopping,Wildlife'),
(90, 'yul', 'yuhlk', '12 May 2023 - 16 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Shopping,Wildlife'),
(91, 'yul', 'yuhlk', '12 May 2023 - 16 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Shopping,Wildlife'),
(92, 'yul', 'yuhlk', '12 May 2023 - 16 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Shopping,Wildlife'),
(93, 'yul', 'yuhlk', '12 May 2023 - 16 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Shopping,Wildlife'),
(94, 'yul', 'yuhlk', '12 May 2023 - 16 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Shopping,Wildlife'),
(95, 'gkj', 'ghnkj', '19 May 2023 - 23 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Beaches,Historic'),
(96, 'gkj', 'ghnkj', '19 May 2023 - 23 Jun 2023', '', 'Popular', 'Slow & easy', 'Romantic,Beaches,Historic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
