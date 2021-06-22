-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 08:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmlp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  `Payment_ID` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `email`, `password`, `phone`, `address`, `Points`, `Payment_ID`, `id`) VALUES
('JC', 'jcwarain@gmail.com', '$2y$10$mxWqc/B2cbtbmxw1BsjY3uUo2haXEVTdZKIz0CVUJKQvQd62wxajG', '+9234425982234', 'Toril', NULL, NULL, 0),
('JC123', 'jcwarain@yahoo.com', '$2y$10$WShzadhcbDOzju8AihpdUuXmIgfwm1jWl7.wDHg/LeiKmsOcgirpG', NULL, NULL, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `duration` float NOT NULL,
  `date_showing` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `cover_img`, `description`, `duration`, `date_showing`, `end_date`) VALUES
(10, 'Mortal Kombat 11', 'MK11.jpg', 'Hunted by the fearsome warrior Sub-Zero, MMA fighter Cole Young finds sanctuary at the temple of Lord Raiden. Training with experienced fighters Liu Kang, Kung Lao and the rogue mercenary Kano, Cole prepares to stand with Earth\'s greatest champions to take on the enemies from Outworld in a high-stakes battle for the universe.', 1.83, '2021-06-19', '2021-06-25'),
(11, 'Raya and the Last Dragon', 'Raya.webp', 'Raya, a warrior, sets out to track down Sisu, a dragon, who transferred all her powers into a magical gem which is now scattered all over the kingdom of Kumandra, dividing its people.', 2, '2021-06-19', '2021-06-25'),
(12, 'The Mitchells vs. the Machines', 'mitchell.jpg', 'Young Katie Mitchell embarks on a road trip with her proud parents, younger brother and beloved dog to start her first year at film school. But their plans to bond as a family soon get interrupted when the world\'s electronic devices come to life to stage an uprising. With help from two friendly robots, the Mitchells must now come together to save one another -- and the planet -- from the new technological revolution.', 2, '2021-06-19', '2021-06-25'),
(13, 'Malcolm & Marie', 'malcolm.jpg', 'A filmmaker on the brink of Hollywood glory and his girlfriend, whose story made his career, find themselves pushed towards a reckoning as a single tumultuous night decides the fate of their relationship.\r\n\r\nRated R', 1.9, '2021-06-19', '2021-06-25'),
(14, 'Outside the Wire', 'out_wire.jpg', 'In the near future, a drone pilot sent into a war zone finds himself paired up with a top-secret android officer on a mission to stop a nuclear attack.', 1.9, '2021-06-19', '2021-06-25'),
(16, 'The Little Things', 'little.jpg', 'Deputy Sheriff Joe \"Deke\" Deacon joins forces with Sgt. Jim Baxter to search for a serial killer who\'s terrorizing Los Angeles. As they track the culprit, Baxter is unaware that the investigation is dredging up echoes of Deke\'s past, uncovering disturbing secrets that could threaten more than his case.', 2.2, '2021-06-19', '2021-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `payment_form`
--

CREATE TABLE `payment_form` (
  `payment_ID` int(11) NOT NULL,
  `Paymaya_ID` int(11) DEFAULT NULL,
  `GCash_ID` int(11) DEFAULT NULL,
  `debit_card_no` int(11) DEFAULT NULL,
  `credit_card_no` int(11) DEFAULT NULL,
  `Paypal_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `name`) VALUES
(1, '3D'),
(2, 'Theater 1');

-- --------------------------------------------------------

--
-- Table structure for table `theater_settings`
--

CREATE TABLE `theater_settings` (
  `id` int(30) NOT NULL,
  `theater_id` int(30) NOT NULL,
  `seat_group` varchar(250) NOT NULL,
  `seat_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_settings`
--

INSERT INTO `theater_settings` (`id`, `theater_id`, `seat_group`, `seat_count`) VALUES
(2, 2, 'Box 1', 20),
(3, 2, 'Box 2', 30),
(4, 1, 'Box 1', 30),
(5, 1, 'Box 2', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(30) NOT NULL,
  `movie_id` int(30) NOT NULL,
  `ts_id` int(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `movie_id`, `ts_id`, `qty`, `date`, `time`, `id`) VALUES
(48, 12, 4, 7, '2021-06-21', '09:00:00', 0),
(51, 11, 4, 20, '2021-06-21', '09:00:00', 0),
(52, 11, 4, 19, '2021-06-21', '09:00:00', 0),
(53, 11, 0, 0, '0000-00-00', '00:00:00', 0),
(54, 11, 2, 6, '2021-06-21', '09:00:00', 0),
(55, 12, 4, 14, '2021-06-21', '09:00:00', 0),
(56, 12, 4, 16, '2021-06-21', '09:00:00', 0),
(57, 12, 4, 11, '2021-06-21', '09:00:00', 0),
(58, 11, 4, 22, '2021-06-21', '09:00:00', 0),
(59, 11, 4, 20, '2021-06-21', '09:00:00', 0),
(60, 11, 4, 18, '2021-06-21', '09:00:00', 8),
(61, 12, 4, 4, '2021-06-21', '09:00:00', 0),
(62, 12, 4, 20, '2021-06-21', '09:00:00', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_form`
--
ALTER TABLE `payment_form`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_settings`
--
ALTER TABLE `theater_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `customers->id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment_form`
--
ALTER TABLE `payment_form`
  MODIFY `payment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `customers->id` FOREIGN KEY (`id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
