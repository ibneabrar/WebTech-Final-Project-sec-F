-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 12:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(255) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `bookLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `bookName`, `authorName`, `bookLink`) VALUES
(1, 'Educated', 'Tara Westover', 'https://www.amazon.com/Educated-Memoir-Tara-Westover/dp/0399590501'),
(2, 'To Kill a Mockingbird', 'To Kill a Mockingbird', 'https://www.amazon.com/Kill-Mockingbird-Harper-Lee/dp/0060935464'),
(3, 'Introduction to Electrodynamics', 'David J. Griffiths', 'https://www.amazon.co.jp/Introduction-Electrodynamics-David-J-Griffiths/dp/0321856562'),
(4, 'The Feynman Lectures on Physics', 'Richard Feynman, Robert B. Leighton, and Matthew Sands', 'https://en.wikipedia.org/wiki/The_Feynman_Lectures_on_Physics'),
(5, 'General Relativity', 'Robert M. Wald', 'https://en.wikipedia.org/wiki/General_Relativity_(book)'),
(6, '[value-2]', '[value-3]', '[value-4]');

-- --------------------------------------------------------

--
-- Table structure for table `regdata`
--

CREATE TABLE `regdata` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regdata`
--

INSERT INTO `regdata` (`id`, `name`, `email`, `gender`, `password`, `image`) VALUES
(6, 'rafiq', 'rafiq@email.com', 'male', '$2y$10$1jI51AjZ1lt0M5N14O1louHahB4yMzjhPDYx9s3mE1BZZS/pY3oeO', ''),
(10, 'john', 'john@email.com', 'male', '$2y$10$cqZNqRc9fyKORTMEeFeur.UyVZ3KRcO0DuYQZRoa8bk8QWGrLzEv6', ''),
(11, 'sam', 'sam@gmail.com', 'male', '$2y$10$QGyf3jBBj3sex4ie1fr5I.Zul21swbKzZy.Ik4cZHuan/Rkv6dl6y', ''),
(12, 'smith', 'smith10@gmail.com', 'male', 'sm23', ''),
(13, 'qweqwe', 'sakib@gmail.com', 'male', '123', ''),
(14, 'nabil', 'nabil@gmail.com', 'male', '123', ''),
(15, 'fahim', 'fahim@gmail.com', 'male', 'fahim', ''),
(16, 'ahmed', 'ahmed@gmail.com', 'male', 'ahmed', ''),
(17, 'abab', 'abab@email.com', 'male', 'ab', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, 'messi', 'messi@gmail.com', 'male', 'mmm', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `stName` varchar(255) NOT NULL,
  `stClass` varchar(255) NOT NULL,
  `stAge` int(255) NOT NULL,
  `stGender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stName`, `stClass`, `stAge`, `stGender`) VALUES
(1, 'Max', '10', 17, 'Male'),
(2, 'John', '9', 16, 'Male'),
(3, 'Mary', '10', 18, 'Female'),
(4, 'Ashraf', '5', 12, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regdata`
--
ALTER TABLE `regdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regdata`
--
ALTER TABLE `regdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
