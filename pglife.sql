-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 05:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pglife`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `people` int(10) NOT NULL,
  `rooms` int(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `arrival` varchar(56) NOT NULL,
  `room_pr` varchar(50) NOT NULL,
  `pg_name` varchar(224) NOT NULL,
  `city_n` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `name`, `email`, `phone`, `people`, `rooms`, `dob`, `arrival`, `room_pr`, `pg_name`, `city_n`, `created_at`) VALUES
(29, 3, 'Ramesh kumar', 'ramesh@gmail.co', '5658795123', 1, 2, '2023-05-09', '2023-05-26', 'adjacent', 'Ganpati Paying Guest', 'Bangluru', '2023-05-29 16:20:10.874857'),
(30, 3, 'Arjun', 'Arjun@gmail.com', '9087654321', 1, 1, '2023-05-26', '2023-05-31', 'adjoining', 'Ganpati Paying Guest', 'Bangluru', '2023-05-29 16:20:10.920724'),
(39, 2, 'Rohan', 'Rohan12@gmail.com', '9876543210', 1, 1, '2023-05-26', '2023-05-18', 'connecting', 'Sweet Homes', 'delhi', '2023-05-30 06:04:21.952686'),
(40, 12, 'vikram', 'vikram12@gmail.com', '9876543210', 1, 1, '2023-06-10', '2023-05-20', 'adjacent', 'Space Paying Guest', 'mumbai', '2023-05-30 06:34:24.246724');

-- --------------------------------------------------------

--
-- Table structure for table `flightbooking`
--

CREATE TABLE `flightbooking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `flight_name` varchar(100) NOT NULL,
  `fromm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(23) NOT NULL,
  `seat_type` varchar(22) NOT NULL,
  `pnr` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flightbooking`
--

INSERT INTO `flightbooking` (`id`, `name`, `age`, `flight_name`, `fromm`, `too`, `date`, `time`, `seat_type`, `pnr`) VALUES
(15, 'Prashant Prajapati', 21, 'IndiG0', 'delhi', 'mumbai', ',2023-05-17,', '02:30', 'First Class', 'fl.82520_15');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `f` varchar(100) NOT NULL,
  `t` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `f`, `t`) VALUES
(1, 'mumbai', 'delhi'),
(2, 'delhi', 'mumbai'),
(3, 'kolkata', 'delhi'),
(4, 'delhi', 'kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `pgtable`
--

CREATE TABLE `pgtable` (
  `id` int(11) NOT NULL,
  `flightsname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pgtable`
--

INSERT INTO `pgtable` (`id`, `flightsname`, `email`, `password`) VALUES
(2, 'Indigo', 'prajapati12@gmail.com', '123654'),
(3, 'SpiceJet', 'cndkcnkdkc', 'kcnl'),
(4, 'Vistara', 'kcmpdkcd', 'lmcldc'),
(8, 'ph', 'prashant4@gmail.com', 'ncdncl'),
(9, '', 'king@gmail.com', 'ncdncl'),
(10, 'kingooo', 'rohit123@gmail.com', 'ncdncl'),
(11, 'kingooo', 'king@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pgweb`
--

CREATE TABLE `pgweb` (
  `id` int(11) NOT NULL,
  `pgname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_name2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pgweb`
--

INSERT INTO `pgweb` (`id`, `pgname`, `address`, `city`, `image1`, `image2`, `image3`, `image4`, `image5`, `test_name`, `test_name2`) VALUES
(6, 'Ganpati Homes', 'B-44, Gali No-2,Nirman Vihar New Delhi(110092)', 'delhi', 'img1.webp', 'img2.webp', 'img3.jpg', 'men.png', 'male.png', 'Prashant', 'Tushar'),
(7, 'Sweet Homes', 'A-33, 2nd Floor, Laxmi Nagar New Delhi(110091)', 'delhi', 'img5.jpg', 'img6.jpeg', 'img7.jpeg', 'men.png', 'unisex.png', 'Prashant ', 'Tushar\r\n'),
(8, 'PG for Girls Pandav Nagar', 'Plot no.258/D4,Gali no.2, Pandav Nagar New Delhi(110091)', 'delhi', 'img10.jpg', 'img11.jpg', 'img12.jpg', 'women.png', 'female.png', 'Kiran', 'Roni'),
(9, 'Space Paying Guest', 'Kondivita, Andheri East, Mumbai, India', 'mumbai', 'img4.jpg', 'img8.jpeg', 'img13.jpg', 'men.png', 'male.png', 'Prashant', 'Tushar'),
(10, 'Zolo Heritage Pg', 'Bharat Mata nagar,1st main road, Perungudi, Mumbai(600096) India', 'mumbai', 'img14.jpg', 'img15.jpg', 'img16.jpg', 'men.png', 'unisex.png', 'Prashant', 'Tushar'),
(11, 'Chennai Homes for Girls', 'Sai Nagar, Kurla, Mumbai(600097) India', 'mumbai', 'img17.jpg', 'img18.jpeg', 'img19.jpeg', 'women.png', 'female.png', 'Kiran', 'Lisa'),
(12, 'Navkar Paying Guest', '14/7 Mahatma Gandhi Road, Bengaluru 560042 India', 'bangluru', 'img20.jpeg', 'img21.webp', 'img22.webp', 'men.png', 'male.png', 'Prashant', 'Tushar'),
(13, 'Ganpati Paying Guest', 'Plot No - 30, Rajaram Mohan Roy Road Off Richmond Road, Bengaluru 560027 India', 'bangluru', 'img23.webp', 'img24.jpeg', 'img25.jpeg', 'men.png', 'unisex.png', 'Prashant', 'Tushar'),
(14, 'The Girls PG', 'Kundana Hobli Plot No 12a Hegganahalli Village Devanahalli Taluk, Bengaluru 560052 India', 'bangluru', 'img26.jpg', 'img27.jpg', 'img28.jpg', 'women.png', 'female.png', 'Kiran', 'Roni'),
(15, 'The Shelter', 'A.S. Rao Nagar, 500062, Hyderabad', 'Hyderabad', 'img29.jpg', 'img30.jpg', 'img31.jpg', 'men.png', 'male.png', 'Prashant', 'Tushar'),
(16, 'OM Paying Guest', '1-12-28, Near Rachakonda Towers,, 500010, Hyderabad', 'Hyderabad', 'img32.jpg', 'img14.jpg', 'img5.jpg', 'men.png', 'unisex.png', 'Prashant', 'Tushar'),
(17, 'Homes PG for Girls ', '8-2-293/82/1/238, A/C, Rd Number 12, Banjara Hills,, 500034, Hyderabad', 'Hyderabad', 'img7.jpeg', 'img18.jpeg', 'img16.jpeg', 'women.png', 'female.png', 'Kiran', 'Lisa');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE `practice` (
  `id` int(11) NOT NULL,
  `no` int(23) NOT NULL,
  `data` varchar(34) NOT NULL,
  `data2` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`id`, `no`, `data`, `data2`) VALUES
(2, 2, '56', '54');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `full_name`, `phone`, `email`, `password`, `college_name`, `gender`) VALUES
(1, 'Prashant Prajapati', 1236549870, 'prashant123@gmail.co', '123654', 'sgit', 'male'),
(2, 'Krish Prajapati', 2147483647, 'krish123@gmail.com', 'krish123', 'vip', 'male'),
(3, 'Prashant kumar', 2147483647, 'prashant34@gmail.com', '123654', 'sgit', 'male'),
(11, 'Rohit', 2147483647, 'rish123@gmail.com', 'Rohit@123', 'sgit', 'male'),
(12, 'Rohit Kumar', 2147483647, 'irish123@gmail.com', 'Rohit@123', 'sgit', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flightbooking`
--
ALTER TABLE `flightbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgtable`
--
ALTER TABLE `pgtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgweb`
--
ALTER TABLE `pgweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice`
--
ALTER TABLE `practice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `flightbooking`
--
ALTER TABLE `flightbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pgtable`
--
ALTER TABLE `pgtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pgweb`
--
ALTER TABLE `pgweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `practice`
--
ALTER TABLE `practice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `practice`
--
ALTER TABLE `practice`
  ADD CONSTRAINT `practice_ibfk_1` FOREIGN KEY (`no`) REFERENCES `pgtable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
