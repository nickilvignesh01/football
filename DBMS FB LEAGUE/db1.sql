-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 11:32 AM
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
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `id` int(25) NOT NULL,
  `Team` varchar(20) NOT NULL,
  `Matches` int(25) NOT NULL,
  `Wins` int(25) NOT NULL,
  `Losses` int(25) NOT NULL,
  `Points` int(25) NOT NULL,
  `Draw` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `players` (
    'id' INT PRIMARY KEY AUTO_INCREMENT,
    'player_name' VARCHAR(255),
    'goals' INT(25),
    team_name VARCHAR(255),
    'matches_played' INT
);


--
-- Dumping data for table `league`
--

INSERT INTO `league` (`id`, `Team`, `Matches`, `Wins`, `Losses`, `Points`, `Draw`) VALUES
(1, 'Barcelona', 5, 4, 1, 10, 0),
(2, 'Real Madrid', 5, 3, 2, 6, 0);

INSERT INTO `players` (`name`, `team`, `goals`) VALUES
    ('Lionel Messi', 'Barcelona', 30),
    ('Karim Benzema', 'Real Madrid', 25),
    ('Gerard Moreno', 'Villarreal', 22),
    ('Luis Suarez', 'Atletico Madrid', 20),
    ('Iago Aspas', 'Celta Vigo', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
