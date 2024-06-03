-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 03:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `pic`) VALUES
(1, 'yash agrawal', '12345', 'profile_picture/627d23389939bScreenshot_2022_0507_114610.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `img`) VALUES
(12, 'brochure/627f3685b4cdbbr2.PNG'),
(13, 'brochure/627f369ad2f06br3.jpg'),
(14, 'brochure/627f36aa7e1dabr4.jpg'),
(15, 'brochure/627f36bcf1f86br5.jpg'),
(16, 'brochure/627f36cea6b0bbr6.jpg'),
(17, 'brochure/627f36ddaf8d2br7.jpg'),
(18, 'brochure/627f36e9e4809br8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(2, 'site supervisor'),
(3, 'junior engineer'),
(4, 'construction manager');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `email`, `phone`, `password`, `img`) VALUES
(2, 'Muneeb', 'muneebch647@gmail.com', '03048244692', '12345', 'clients/62601e163c823face7.jpg'),
(3, 'jiya', 'jiya@gmail.com', '4375476898907', '1234', 'clients/627b7c317629514915318_10155148305236754_7471955098066766739_n.0.jpg'),
(4, 'jiya', 'jiyaagrawal200315@gmail.com', '67545345350', '123', 'clients/629c782408985IMG_20220302_133431-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'Muneeb', '03048244692', 'muneebch647@gmail.com', 'Test', 'This is test message'),
(2, 'Muneeb', '03048244692', 'muneebch647@gmail.com', 'About Website', 'this is best company thanks');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `des_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `des_name`) VALUES
(1, 'site supervisor'),
(3, 'junior engineer'),
(4, 'construction manager'),
(5, 'architect'),
(6, 'civil engineer drafter'),
(7, 'civil engineer technician'),
(8, 'land surveyor');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `leader_role` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `fname`, `email`, `phone`, `password`, `img`, `leader_role`, `status`) VALUES
(7, 'prashant', 'prashant@gmail.com', '98765432109', '123', 'sellers/627f444449e37prashant01 (1).png', '1', 1),
(8, 'jagesh', 'jagesh@gmail.com', '98786534210', '123', 'sellers/627f39d893fd1const11 (1)e.png', '3', 1),
(11, 'rahul', 'rahul@gmail.com', '98086754231', '123', 'sellers/627f44b73a490jagesh00 (1).png', '4', 1),
(12, 'vaibhav', 'vaibhav@gmail.com', '98745615234', '123', 'sellers/627f43bd45473vaibhav03 (1).png', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `leader_id`, `fname`, `email`, `phone`, `img`, `status`) VALUES
(2, 7, 'pankaj', 'pankaj@gmail.com', '89764532109', 'members/627d2c0b69563th.jpg', 1),
(3, 7, 'ajay', 'ajay@gmail.com', '78564312908', 'members/627d30308b41ath.jpg', 1),
(4, 7, 'sahil', 'sahil@gmail.com', '78564321908', 'members/627d3071ac659th.jpg', 1),
(5, 7, 'mahesh', 'mahesh@gmail.com', '097856432167', 'members/627d309d2d674th.jpg', 0),
(6, 12, 'aniket', 'aniket@gmail.com', '90874567342', 'members/627e75d30d966th.jpg', 1),
(7, 12, 'karan', 'karan@gmail.com', '87954625150', 'members/627e75fb1011bth.jpg', 1),
(8, 12, 'arjun', 'arjun@gmail.com', '7024567890', 'members/627e76237e3bbth.jpg', 1),
(9, 12, 'rajesh', 'rajesh@gmail.com', '7890657845', 'members/627e76495a267th.jpg', 0),
(10, 11, 'jay', 'jay@gmail.com', '7865453210', 'members/627e77875a903th.jpg', 1),
(11, 11, 'kamlesh', 'kamlesh@gmail.com', '89078653421', 'members/627e77be8c296th.jpg', 0),
(12, 11, 'ram', 'ram@gmail.com', '78654567890', 'members/627e77e54806cth.jpg', 1),
(13, 11, 'shyam', 'shyam@gmail.com', '9874532157', 'members/627e784cddad9th.jpg', 1),
(14, 8, 'mukesh', 'mukesh@gmail.com', '7865432190', 'members/627e78f8d5034th.jpg', 1),
(15, 8, 'mahindra', 'mahindra@gmail.com', '9745862130', 'members/627e791f95306th.jpg', 1),
(16, 8, 'yuvraj', 'yuvraj@gmail.com', '8945762130', 'members/627e79410f01fth.jpg', 0),
(17, 8, 'joel', 'joel@gmail.com', '91856552403', 'members/627e79690b115th.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `des` longtext NOT NULL,
  `img` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `leader_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `client_id`, `category`, `title`, `start`, `end_date`, `amount`, `des`, `img`, `status`, `leader_id`) VALUES
(3, 2, 2, 'Test', '2022-04-20', '2022-05-07', '150000', 'Test description', 'work/626026d97f669img_2.jpg', 2, 4),
(4, 2, 3, 'Test', '2022-04-25', '2022-04-30', '15000', 'This is test', 'work/6266dd009db54img_1.jpg', 2, 4),
(5, 4, 4, 'Commercial Project', '2022-02-11', '2022-05-29', '250000', 'Brown Home construction', 'work/629c6cb615aee1.jpg', 2, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
