-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 02:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social security number`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `midname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `gender` enum('m','f','o','') NOT NULL,
  `age` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` enum('british','immigrant','others','') NOT NULL,
  `password` varchar(400) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `ssn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `midname`, `lastname`, `user_name`, `gender`, `age`, `email`, `type`, `password`, `phone`, `ssn`) VALUES
(1, 'mary', 'esohe', 'osagie', 'ivie', 'm', '0000-00-00', 'ivie@gmail.com', '', 'ef6b6081658a81b37f2d9b9f56250e5a', 234968136, ''),
(2, 'mike', 'mike', 'mike', 'mike23', 'm', '0000-00-00', 'mike12@yahoo.com', '', 'a75d6a841eafd550b0a27293ee054614', 90348302, ''),
(3, 'mike', 'mike', 'mike', 'mike11', 'm', '0000-00-00', 'mike22@ymail.com', '', 'fcea920f7412b5da7be0cf42b8c93759', 908090766, '2300157415'),
(4, 'Gary', 'Jones', 'Kimbebe', 'Gary7', 'm', '0000-00-00', 'gary7@yahoo.com', '', '6722be38cdee5f0a4a932e64fb5febc6', 923746522, '3375172728'),
(5, 'Sariah', 'Nephi', 'Mark', 'sarah21', 'm', '0000-00-00', 'sarah21@hotmail.com', '', '08f0fc98bc858e2214e1a09c703e822e', 3495934709, '4165936009'),
(6, 'Ruben', 'Diaz', 'Philips', 'mancity5', 'm', '0000-00-00', 'rubend@outlook.com', '', 'fbb1169bf69d76c6fdbc93ac883069cc', 983654986, '5837467734'),
(7, 'ruth', 'soboye', 'ibifa', 'ruth77', 'm', '0000-00-00', 'ruth77@blue.com', 'british', '8ace72535e8ea08b22681721a437a6f5', 3993459468, '4824035705'),
(8, 'Ronaldo', 'Aviero', 'Delima', 'R9', 'm', '0000-00-00', 'r9@real.com', 'british', '886245c4d519bd088f60daa7fa24fd0a', 9374634707, '3151845055'),
(9, 'Fred', 'Alison', 'Ogolo', 'Fred49', 'm', '0000-00-00', 'fred49@rgu.ac.uk', 'british', '02c75fb22c75b23dc963c7eb91a062cc', 4572575707, '6335977159');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
