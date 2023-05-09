-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2023 at 02:34 PM
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

INSERT INTO `form` (`location`, `locations`, `duration`, `total`, `options`, `r2`, `rr`) VALUES
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '0', '', '', ''),
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '0', '', '', ''),
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '0', '', '', ''),
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '0', '', '', ''),
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '0', '', '', ''),
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '0', '', '', ''),
('retfgh', 'ftgjmhv,fghjmvb,fvyhmkj', '24 May 2023 - 12 Jun 2023', '0', '', '', ''),
('retfgh', 'ftgjmhv,fghjmvb,fvyhmkj', '24 May 2023 - 12 Jun 2023', '0', '', '', ''),
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '', '', '', ''),
('rtfgjhmn', 'ghmn', '10 May 2023 - 12 Jun 2023', '', '', '', ''),
('dxfgbh', 'dfgvb,fvgb', '08 May 2023 - 09 May 2023', '', '', '', ''),
('dxfgbh', 'dfgvb,fvgb', '08 May 2023 - 09 May 2023', '', '', '', ''),
('jk;l', 'jnkl', '10 May 2023 - 15 Jun 2023', '', '', '', ''),
('jk;l', 'jnkl', '10 May 2023 - 15 Jun 2023', '', '', '', ''),
('fgjn', 'dfghnb', '10 May 2023 - 16 Jun 2023', '3', '', '', ''),
('fgjn', 'dfghnb', '10 May 2023 - 16 Jun 2023', '3', '', '', ''),
('dxfgbh', 'dfgvb,fvgb', '08 May 2023 - 09 May 2023', '', '', '', ''),
('dxfgbh', 'dfgvb,fvgb', '08 May 2023 - 09 May 2023', '', '', '', ''),
('xfgtynhj', 'xdfrtgbh', '12 May 2023 - 16 Jun 2023', '4', '', '', ''),
('xfgtynhj', 'xdfrtgbh', '12 May 2023 - 16 Jun 2023', '4', '', '', ''),
('ghm', 'ghjm,k', '10 May 2023 - 12 Jun 2023', '3', '', '', ''),
('ghm', 'ghjm,k', '10 May 2023 - 12 Jun 2023', '3', '', '', ''),
('ghm', 'ghjm,k', '10 May 2023 - 12 Jun 2023', '3', '', '', ''),
('ghm', 'ghjm,k', '10 May 2023 - 12 Jun 2023', '3', '', '', ''),
('ghn', 'fvghmk', '11 May 2023 - 16 Jun 2023', '6', '', '', ''),
('ghn', 'fvghmk', '11 May 2023 - 16 Jun 2023', '6', '', '', ''),
('fghncgfj', 'fghnmj', '10 May 2023 - 15 Jun 2023', '5', '', '', ''),
('fghncgfj', 'fghnmj', '10 May 2023 - 15 Jun 2023', '5', '', '', ''),
('fghncgfj', 'fghnmj', '10 May 2023 - 15 Jun 2023', '5', '', '', ''),
('fghncgfj', 'fghnmj', '10 May 2023 - 15 Jun 2023', '5', '', '', ''),
('xfyhjm', 'ghjbnm,k', '13 May 2023 - 14 Jun 2023', '4', '', '', ''),
('xfyhjm', 'ghjbnm,k', '13 May 2023 - 14 Jun 2023', '4', '', '', ''),
('tgyhjk', 'cyghk', '08 May 2023 - 09 May 2023', '4', '', '', ''),
('tgyhjk', 'cyghk', '08 May 2023 - 09 May 2023', '4', '', '', ''),
('tgyhjk', 'cyghk', '08 May 2023 - 09 May 2023', '4', '', '', ''),
('tgyhjk', 'cyghk', '08 May 2023 - 09 May 2023', '4', '', '', ''),
('xfrtgj', 'cfghj', '18 May 2023 - 18 Jun 2023', '', 'on', 'on', 'option1,option2,option4,option5'),
('xfrtgj', 'cfghj', '18 May 2023 - 18 Jun 2023', '', 'on', 'on', 'option1,option2,option4,option5'),
('xfrtgj', 'cfghj', '18 May 2023 - 18 Jun 2023', '', 'on', 'on', 'option1,option2,option4,option5'),
('xfrtgj', 'cfghj', '18 May 2023 - 18 Jun 2023', '', 'on', 'on', 'option1,option2,option4,option5'),
('xfghbnmj', 'cghvnm,vgbhnm', '17 May 2023 - 13 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Outdoors,Relaxing,Romantic,Beaches,Historic,Shopping,Wildlife'),
('xfghbnmj', 'cghvnm,vgbhnm', '17 May 2023 - 13 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Outdoors,Relaxing,Romantic,Beaches,Historic,Shopping,Wildlife'),
('xfghbnmj', 'cghvnm,vgbhnm', '17 May 2023 - 13 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Outdoors,Relaxing,Romantic,Beaches,Historic,Shopping,Wildlife'),
('xfghbnmj', 'cghvnm,vgbhnm', '17 May 2023 - 13 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Outdoors,Relaxing,Romantic,Beaches,Historic,Shopping,Wildlife'),
('xfghbnmj', 'cghvnm,vgbhnm', '17 May 2023 - 13 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Outdoors,Relaxing,Romantic,Beaches,Historic,Shopping,Wildlife'),
('xfghbnmj', 'cghvnm,vgbhnm', '17 May 2023 - 13 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Outdoors,Relaxing,Romantic,Beaches,Historic,Shopping,Wildlife'),
('gchnm', 'hjnm,', '12 May 2023 - 12 Jun 2023', '', 'Popular', 'Slow & easy ', 'Culture,Outdoors,Romantic,Beaches,Historic,Shopping,Wildlife'),
('gchnm', 'hjnm,', '12 May 2023 - 12 Jun 2023', '', 'Popular', 'Slow & easy ', 'Culture,Outdoors,Romantic,Beaches,Historic,Shopping,Wildlife'),
('rftygh', 'fvyghj', '12 May 2023 - 17 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Relaxing,Romantic,Beaches,Historic'),
('rftygh', 'fvyghj', '12 May 2023 - 17 Jun 2023', '', 'Balanced', 'Medium ', 'Culture,Relaxing,Romantic,Beaches,Historic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
