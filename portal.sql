-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 08:52 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
`college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_name`, `college_code`, `city`, `state`) VALUES
(1, 'Info college of engineering', '123456', 'coimbatore', '');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
`problem_id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `problem_details` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`problem_id`, `department`, `problem`, `problem_details`, `file`, `created_by`, `created_at`) VALUES
(1, 'agriculture', 'test', 'Two-thirds of Indians work as farmers, yet they account for only a fifth of GDP -- and they live in dismal conditions, with little chance of upward mobility, for the most part. Why so?\r\n\r\n', '1521972352.xml', 1, '2018-03-25 18:07:14'),
(2, 'transport', 'test', 'test', '1522002874.jpg', 1, '2018-03-25 18:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE IF NOT EXISTS `solutions` (
`solution_id` int(11) NOT NULL,
  `problem_id` int(11) NOT NULL,
  `solution` text NOT NULL,
  `feedback` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `is_approved` tinyint(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`solution_id`, `problem_id`, `solution`, `feedback`, `file`, `is_approved`, `created_by`, `created_at`) VALUES
(1, 1, 'One of the reasons why this discrepancy exists is because farmers experience trade barriers, like the Agricultural Produce Market Committee (APMC), which puts serious restrictions on whom they can sell to. And solutions that exist in the form of co-operatives often operate as monopolies in the hands of political families who do everything they can to prevent the competing co-operatives. What to do about it? If growth is the mandate, the agricultural economy has to be liberalised and producers set free. Because when farmers and rural industries have access to a steady income, they will invest in improving productivity. That, in turn, will push everybody into building a country where the ruling class and citizens are equals. To start the process, though, one question needs to be answered. Do you expend energies into getting into the Top 10 in terms of GDP? Or do you focus on getting the Human Development Index (HDI), where India has consistently ranked below 120, to higher levels? What a low HDI means is that for all the GDP growth and the consequent prosperity, development is superficial at best.', 'test', '1521976540', 1, 3, '2018-03-25 17:54:11'),
(2, 1, 'test', 'test', '1521976688', 1, 3, '2018-03-25 17:54:12'),
(3, 2, 'test', '', '1522002928', 1, 3, '2018-03-25 18:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `college_id` int(4) NOT NULL,
  `department_id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_role_id`, `college_id`, `department_id`, `name`, `username`, `password`, `last_login`) VALUES
(1, 1, 0, 1, 'Portal admin', 'portal_admin', 'admin@123', '0000-00-00 00:00:00'),
(2, 2, 1, 0, 'Admin', 'college_admin', 'admin@123', '0000-00-00 00:00:00'),
(3, 3, 1, 0, 'Dharani', '17CSE05', 'student@123', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_department`
--

CREATE TABLE IF NOT EXISTS `user_department` (
`department_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
`user_role_id` int(11) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_role_id`, `user_role`, `description`) VALUES
(1, 'admin', 'Admin users'),
(2, 'college_admin', 'college admin'),
(3, 'students', 'students');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
 ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
 ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
 ADD PRIMARY KEY (`solution_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_department`
--
ALTER TABLE `user_department`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
 ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
MODIFY `problem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
MODIFY `solution_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_department`
--
ALTER TABLE `user_department`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
