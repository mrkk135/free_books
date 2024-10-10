-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 09:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_store`
--

CREATE TABLE `books_store` (
  `b_no` varchar(200) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `categories` varchar(200) NOT NULL,
  `path` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `writer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books_store`
--

INSERT INTO `books_store` (`b_no`, `b_name`, `price`, `categories`, `path`, `img`, `writer`) VALUES
('301', 'Digital Marketing', '175', 'Management, Engineering, Pharmacy, and Computer Science', 'book/books_file/Digital Marketing Sem-3 .pdf', 'book/image/digital marketing1.jpg', 'Nirali Prakashan'),
('302', 'Data Structure', '315', 'Management, Engineering, Pharmacy, and Computer Science', 'book/books_file/Data Structure Sem 3.pdf', 'book/image/Data structure1.jpg', 'Nirali Prakashan'),
('403', 'CPP', '290', 'Management, Engineering, Pharmacy, and Computer Science', 'book/books_file/CPP.pdf', 'book/image/cpp1.jpg', 'Nirali Prakashan'),
('504', 'Python', '240', 'Management, Engineering, Pharmacy, and Computer Science', 'book/books_file/Python textbook.pdf', 'book/image/python1.jpg', 'Nirali Prakashan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `passd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `passd`) VALUES
(10, 'kamlesh', 'kumavatk77@gmail.com', '2022'),
(12, 'root', 'abc@gmail.comm', '2022'),
(13, 'mahima', 'mahima135@gamil.com', '2022'),
(15, 'vidit', 'abc135@gmail.com', '2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_store`
--
ALTER TABLE `books_store`
  ADD PRIMARY KEY (`b_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
