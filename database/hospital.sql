-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 07:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` mediumint(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `pass`, `contact`, `address`, `email`) VALUES
(1, 'abdulKadir', '123456', '5444', 'lhare', 'f168009@nu.edu.pk'),
(2, 'Hasan Arshad', '123456', '333', 'sadiaabad', 'f168303@nu.edu.pk'),
(3, 'Ali Raza Junaid', '123456', '333', 'fsd', 'f168096@nu.edu.pk');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `time` time NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `time`, `descriptions`) VALUES
(1, 23, 9, '11:11:00', 'none'),
(2, 23, 11, '12:00:00', 'none'),
(3, 23, 14, '13:00:00', 'none'),
(4, 23, 25, '01:00:00', 'qwertyu'),
(5, 23, 29, '01:00:00', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donors`
--

CREATE TABLE `blood_donors` (
  `id` int(5) NOT NULL,
  `doc_name` varchar(15) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `age` int(3) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birthday` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donors`
--

INSERT INTO `blood_donors` (`id`, `doc_name`, `blood_group`, `age`, `contact`, `address`, `sex`, `email`, `birthday`) VALUES
(1, 'ali', 'A', 23, '5444', 'lhr', 'mal', '', ''),
(2, 'ali', 'A', 11, '5444', 'lhr', 'mal', 'ali', ''),
(3, 'john', 'A', 1, '5444', 'yj', 'mal', 'f169@nu.edu.pk', ''),
(5, 'ab', 'A+', 12, '123', 'lhr', 'Fem', 'f168009@nu.edu.', '0222-02-22'),
(6, 'ahad', 'A', 23, '5444', 'lda', 'mal', 'f168009@nu.', '1-1-1'),
(8, 'Abdul', 'A', 0, '03337398009', '', '', 'f168009@nu.edu.pkll', ''),
(9, 'abdulKadir', 'A', 23, '5444', 'fsd', 'Mal', 'f168009@nu.edu.pk', '2020-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`) VALUES
(1, 'Cardiology', 'Branch of Medicine That Deals With Diseases and Abnormalities of the Heart.'),
(2, 'Physiotherapy', 'Treatment of Disease, Injury, or Deformity by Physical Methods Such as Massage, Heat Treatment, and Exercise Rather Than by Drugs or Surgery.'),
(3, 'ENT', 'A medical specialist who is concerned with the diagnosis and treatment of disorders of the head and neck, including particularly the ears, nose, and throat. ENT doctors are also called Otolaryngologists.');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `doc_name` varchar(50) NOT NULL,
  `blood_group` varchar(15) DEFAULT NULL,
  `pass` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` tinytext NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `birth_date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` text DEFAULT NULL,
  `shift` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `email`, `doc_name`, `blood_group`, `pass`, `age`, `sex`, `dept_id`, `birth_date`, `salary`, `fee`, `contact`, `address`, `shift`) VALUES
(9, 'f168009@nu.edu.pk', 'abdull', 'B+', '123456', 23, 'male', 1, '2020-05-19', 123, 2300, '544480097', 'lhr', '05:53:54'),
(11, '', 'ahad', 'A+', '123456', 23, 'male', 3, '0001-01-01', 111, 1, '54448009', 'lhr', '00:00:11'),
(12, 'hasan@nu.edu.pk', 'hasan', 'A', '123456', 23, 'Male', 1, '2020-05-04', 123, 345, '', 'fsd', '00:00:02'),
(13, 'hasan1@nu.edu.pk', 'hasan', 'A', '123456', 23, 'Male', 1, '2020-05-04', 123, 345, '09000', 'fsd', '00:00:02'),
(14, '', 'hasan arshad', 'AB+', '123456', 23, 'Male', 1, '2020-01-01', 123, 345, '', 'lhr', '01:00:00'),
(15, 'ali1raza@nu,edu.pk', 'ali', 'A-', '1234', 23, 'Male', 1, '2020-02-01', 123, 345, '', 'lhr', '01:00:00'),
(17, 'ali1raza1123@nu,edu.pk', 'ali', 'A-', '1234', 23, 'Male', 1, '2020-02-01', 123, 345, '', 'lhr', '01:00:00'),
(18, 'ali1raza11213@nu,edu.pk', 'ali', 'A-', '1234', 23, 'Male', 1, '2020-02-01', 123, 345, '', 'lhr', '01:00:00'),
(19, 'hsaan@nu.edu.pk', 'hasan arshad', 'AB+', '123456', 23, 'Male', 1, '2021-01-31', 123, 345, '', 'updated2', '01:00:00'),
(21, 'DANI1234@GMAIL.COM', 'ali', 'A-', '123456', 23, 'Female', 1, '2020-01-01', 123, 345, '', 'fsd', '13:00:00'),
(23, 'f1680009@nu.edu.pk', 'abdull', 'A+', '123456', 23, 'Male', 1, '2020-01-01', 123, 345, '', '123456', '01:00:00'),
(25, 'fawd9@nu.edu.pk1', 'hasan arshad', 'A+', '123456', 23, 'Male', 2, '2020-01-01', 123, 345, '', 'lhr', '13:00:00'),
(28, 'f1609@nu.edu.pk1', 'ali', 'A+', '123456', 23, 'Male', 1, '2020-01-01', 123, 345, '', 'updated2', '01:00:00'),
(29, 'f160009@nu.edu.pk', 'jony', 'A+', '123456', 23, 'Male', 1, '2020-05-19', 123, 345, '54448009', 'updated2', '00:00:02'),
(30, 'dirilis@nu.edu.pk', 'ertugrul', 'A+', '123456', 40, 'Male', 1, '2020-02-22', 1000, 345, '', 'lhr', '13:00:00'),
(31, 'jamal123@nu.edu.pk', 'jamal', 'A-', '123456', 23, 'Male', 1, '2020-01-01', 123, 345, '', '123456', '13:59:00'),
(32, 'jamal1233@nu.edu.pk', 'jamal', 'AB-', '123456', 23, 'Male', 1, '2020-01-31', 123, 345, '', 'lhr', '13:59:00'),
(33, 'kami123@gmail.com', 'Kamal', 'B+', '123456', 23, 'Other', 2, '2020-01-31', 123, 345, '', 'updated23', '13:59:00'),
(34, 'f1680962NU.EDU.PK', 'ali  raza junaid', 'A', '123456', 22, 'male', 1, '2020-05-19', 500, 100, '0333123456', 'fsd', '05:53:54'),
(35, 'f168303@nu.edu.pk', 'Hassan Arshad', 'B', '123456', 22, 'male', 1, '2020-05-19', 500, 100, '0333123456', 'fsd', '05:53:54'),
(36, 'f168096@nu.edu.pk', 'ali  raza junaid', 'A', '123456', 22, 'male', 1, '2020-05-19', 500, 100, '0333123456', 'fsd', '05:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` mediumint(100) UNSIGNED NOT NULL,
  `title` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` int(10) DEFAULT NULL,
  `blood_group` varchar(15) DEFAULT NULL,
  `age` int(10) NOT NULL,
  `sex` text NOT NULL,
  `birth_date` date NOT NULL,
  `salary` smallint(6) NOT NULL,
  `shift` date NOT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `title`, `name`, `password`, `contact`, `blood_group`, `age`, `sex`, `birth_date`, `salary`, `shift`, `address`) VALUES
(1, 'clerk', 'abdulKadir', '123456', 8009, 'B+', 23, 'Male', '2020-12-31', 123, '0000-00-00', 'lhr'),
(2, 'clerk', 'abdulKadir2', '123456', 333333, 'A+', 23, 'Male', '2020-12-31', 123, '0000-00-00', 'lhr');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(3) DEFAULT NULL,
  `pass` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `birth_date` date NOT NULL,
  `sex` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `email`, `name`, `blood_group`, `pass`, `age`, `contact_no`, `address`, `birth_date`, `sex`, `description`) VALUES
(23, 'f168009@nu.edu.pk', 'abdulKadir', 'A', '123456', 23, '333333', 'lhr', '2020-05-19', 'male', 'non4'),
(25, 'f168009@nu.edu.pk1', 'q', 'A-', '123', 12, '2222222', '23', '2022-01-01', 'Male', 'none3'),
(26, 'ali123@nu,edu.pk', 'ali raza', '', '', 23, '54448009', 'fsd', '0000-00-00', '', 'none'),
(29, 'ali1234@nu,edu.pk', 'ali raza', '', '', 23, '54448009', 'fsd', '2020-05-12', '', 'none'),
(38, 'aolli@nu.edu.pl', 'ali raza', 'A+', '123456', 23, '54448009', 'lhr', '2020-05-14', 'Male', 'none'),
(39, 'aaaaaolli@nu.edu.pl', 'ali raza', 'A+', '123456', 23, '54448009', 'lhr', '2020-05-14', 'Male', 'none'),
(40, 'hasan@gmail.com', 'hasan', 'O+', '123456', 23, '54448009', 'sdk', '2020-05-06', 'Male', ''),
(41, 'aqaq7211@gmail.com', 'hasan', 'A', '123456', 23, '54448009', '123456', '2020-05-11', 'Male', ''),
(43, 'hasan7211@gmail.com', 'hasan', 'A+', '123456', 23, '5444', '123456', '2020-05-18', 'Male', ''),
(44, 'f1680009@nu.edu.pk', 'abdulKadir', 'A+', '123456', 23, '54448009', 'updated2', '2020-05-12', 'Male', 'none2'),
(45, 'abdul@nu.edu.pk', 'Abdul', 'A', '123456', 23, '54448009', 'updated2', '2020-05-11', 'Male', 'non4'),
(49, 'f168303@nu.edu.pk', 'hassan arshad', 'A', '123456', 23, '033', 'sadiqabad', '0000-00-00', 'male', 'none'),
(50, 'f168096@nu.edu.pk', 'ali raza junaid', 'A', '123456', 23, '033', 'fsd', '0000-00-00', 'male', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` int(10) UNSIGNED NOT NULL,
  `status` char(1) NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`) VALUES
(1),
(11),
(11),
(1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ad_id` (`id`),
  ADD UNIQUE KEY `ad_id_2` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `blood_donors`
--
ALTER TABLE `blood_donors`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept` (`dept_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`),
  ADD KEY `id` (`patient_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blood_donors`
--
ALTER TABLE `blood_donors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` mediumint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
