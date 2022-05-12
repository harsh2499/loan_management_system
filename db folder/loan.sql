-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 01:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `type`) VALUES
(6, 'admin', 'admin', '12345', '1'),
(7, 'harshmvaghela99@gmail.com', 'harsh240499', 'harsh240499', '2');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `time`, `date`) VALUES
(12, 'king', '10:03:27', '10-05-2222'),
(13, 'king', '02:35:36', '10-05-2222'),
(14, 'king', '02:38:48', '10-05-2222'),
(15, 'king', '02:44:52', '10-05-2222'),
(16, 'admin', '04:24:38', '10-05-2222'),
(17, 'admin', '04:24:38', '10-05-2222'),
(18, 'harsh240499', '04:26:14', '10-05-2222'),
(19, 'harsh240499', '04:27:42', '10-05-2222'),
(20, 'harsh240499', '04:28:54', '10-05-2222');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tax_id` varchar(250) NOT NULL,
  `date_created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`id`, `fname`, `mname`, `lname`, `contact_no`, `address`, `email`, `tax_id`, `date_created`) VALUES
(4, 'harsh', 'mahendrabhai', 'vaghela', 'gdfgdfg', 'gdfgdg', 'dd@gmail.com', 'asdda', '07-05-22'),
(7, 'mihir', 'gohel', 'mukeshbhai', '9685742566', 'mumbai', 'shahrukh@gmail.com', '336404', '09-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `loan_list`
--

CREATE TABLE `loan_list` (
  `id` int(200) NOT NULL,
  `ref_no` varchar(200) NOT NULL,
  `loan_type_id` varchar(200) NOT NULL,
  `borrower_id` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `plan_id` varchar(200) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_released` varchar(250) NOT NULL,
  `next_payment_date` varchar(200) NOT NULL,
  `date_created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_list`
--

INSERT INTO `loan_list` (`id`, `ref_no`, `loan_type_id`, `borrower_id`, `purpose`, `amount`, `plan_id`, `status`, `date_released`, `next_payment_date`, `date_created`) VALUES
(11, '984376358', '21', '5', 'hello', '15000', '5', '1', '2022-07-10 07:07:27', '2022-06-10 07:07:27', '22-05-09 11:03:56'),
(12, '400639595', '25', '5', 'sdasdasdadasd', '15000', '7', '2', '2022-05-10 07:09:08', '2022-06-10 07:09:08', '22-05-09 11:04:50'),
(13, '467704703', '25', '7', 'dfghdfg', '15000', '6', '2', '2022-05-10 07:09:12', '2022-06-10 07:09:12', '22-05-09 11:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `loan_plan`
--

CREATE TABLE `loan_plan` (
  `id` int(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `interest_rate` varchar(200) NOT NULL,
  `penalty_rate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_plan`
--

INSERT INTO `loan_plan` (`id`, `month`, `interest_rate`, `penalty_rate`) VALUES
(1, '0', '3', '3'),
(5, '2', '2', '6'),
(6, '24', '5', '2'),
(7, '36', '45', '96');

-- --------------------------------------------------------

--
-- Table structure for table `loan_type`
--

CREATE TABLE `loan_type` (
  `id` int(200) NOT NULL,
  `type_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_type`
--

INSERT INTO `loan_type` (`id`, `type_name`, `description`) VALUES
(21, 'Small Business', 'Small Business Loans'),
(25, 'asdasd', 'dasd'),
(35, 'sfsdf', 'fsdf'),
(37, 'fsdf', 'sfds'),
(39, 'gvdasbdbdjhv', 'fsdnkfnsfn'),
(40, 'ertert', 'erertet'),
(41, 'guichsfnsdfn', 'fshfsnfn'),
(42, 'asdnasdansd', 'fsifsfmsofmsdfkm'),
(43, 'fvsfsdf', 'sdffsdfsf'),
(44, 'personal lone', 'long time');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(200) NOT NULL,
  `loan_id` varchar(200) NOT NULL,
  `payee` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `penelty_amount` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `loan_id`, `payee`, `amount`, `penelty_amount`, `date_created`) VALUES
(24, '1', 'gohel  sachin  maganlal', '8109', '459', '22-05-10 08:31:59'),
(45, '11', 'gohel  sachin  maganlal', '8109', '459', '22-05-10 08:58:30'),
(46, '13', 'mukeshbhai  mihir  gohel', '656', '0', '22-05-10 08:58:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_list`
--
ALTER TABLE `loan_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_plan`
--
ALTER TABLE `loan_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_type`
--
ALTER TABLE `loan_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `borrower`
--
ALTER TABLE `borrower`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loan_list`
--
ALTER TABLE `loan_list`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `loan_plan`
--
ALTER TABLE `loan_plan`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loan_type`
--
ALTER TABLE `loan_type`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
