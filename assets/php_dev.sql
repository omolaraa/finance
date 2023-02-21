-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 04:54 PM
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
-- Database: `php_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `client-info`
--

CREATE TABLE `client-info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client-info`
--

INSERT INTO `client-info` (`id`, `name`, `email`, `body`, `date`) VALUES
(1, 'tobi', 'g3osunleye@outlook.com', 'I need financial services please', '2023-02-21 12:00:19'),
(2, 'Olutobilola Osunleye', 'g3osunleye@outlook.com', 'Contact me. 0705943458', '2023-02-21 12:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `header`, `address`, `number`, `email`) VALUES
(1, 'Headquaters', 'Address: 9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.', 'Telephone: +1 800 603 6035', 'Email: mail@demolink.org'),
(2, 'Support Centre', 'Address: 9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45.', 'Telephone: +1 800 603 6035', 'Email: mail@demolink.org');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--
-- Error reading structure for table php_dev.feedback: #1932 - Table &#039;php_dev.feedback&#039; doesn&#039;t exist in engine
-- Error reading data for table php_dev.feedback: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `php_dev`.`feedback`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `heading-top` varchar(255) NOT NULL,
  `heading-bottom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `heading-top`, `heading-bottom`) VALUES
(1, 'fa-brands fa-slack', 'Creating digital advantage', 'Creating meaningful and transformative steps toward success'),
(2, 'fa-brands fa-github', 'Creating digital advantage', 'Creating meaningful and transformative steps toward success'),
(3, 'fa-solid fa-star', 'Creating digital advantage', 'Creating meaningful and transformative steps toward success');

-- --------------------------------------------------------

--
-- Table structure for table `strategies`
--

CREATE TABLE `strategies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strategies`
--

INSERT INTO `strategies` (`id`, `title`, `description`) VALUES
(1, 'Strategy Buildup', 'Quis autem vel eum iure reprehenderit qui eluptate velit esse quam nihil molestiae consequatur'),
(2, 'Business Monitoring', 'Quis autem vel eum iure reprehenderit qui eluptate velit esse quam nihil molestiae consequatur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client-info`
--
ALTER TABLE `client-info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategies`
--
ALTER TABLE `strategies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client-info`
--
ALTER TABLE `client-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strategies`
--
ALTER TABLE `strategies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
