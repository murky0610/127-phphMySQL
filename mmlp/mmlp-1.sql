-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 03:43 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_username` varchar(255) NOT NULL,
  `Ticket_no` int(11) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Points` int(11) NOT NULL,
  `Payment_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `Offer_ID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Points` int(11) NOT NULL,
  `Ticket_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Food_ID` int(11) NOT NULL,
  `Food_Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `Genre_ID` int(11) NOT NULL,
  `gen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `Language_ID` int(11) NOT NULL,
  `lang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_ID` int(11) NOT NULL,
  `Location_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `M_ID` int(11) NOT NULL,
  `Release_date` date NOT NULL,
  `M_name` varchar(255) NOT NULL,
  `Director` varchar(255) NOT NULL,
  `Genre_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `Seat_ID` int(11) NOT NULL,
  `Seat_name` varchar(255) NOT NULL,
  `SeatNo_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seat_no`
--

CREATE TABLE `seat_no` (
  `SeatNo_ID` int(11) NOT NULL,
  `ava_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `showdate`
--

CREATE TABLE `showdate` (
  `Showdate_ID` int(11) NOT NULL,
  `date_showing` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `Show_ID` int(11) NOT NULL,
  `End_time` time NOT NULL,
  `Start_time` time NOT NULL,
  `Language_ID` int(11) NOT NULL,
  `M_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `t_ID` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `Seat_ID` int(11) NOT NULL,
  `Location_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Ticket_no` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Seat_no` int(11) NOT NULL,
  `Showdate_ID` int(11) NOT NULL,
  `Booking_date` datetime NOT NULL,
  `T_ID` int(11) NOT NULL,
  `Food_ID` int(11) NOT NULL,
  `Show_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_username`),
  ADD KEY `any3` (`Ticket_no`),
  ADD KEY `any4` (`Payment_ID`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`Offer_ID`),
  ADD KEY `any9` (`Ticket_no`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`Genre_ID`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`Language_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`M_ID`),
  ADD KEY `any12` (`Genre_ID`);

--
-- Indexes for table `payment_form`
--
ALTER TABLE `payment_form`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`Seat_ID`),
  ADD KEY `any` (`SeatNo_ID`);

--
-- Indexes for table `seat_no`
--
ALTER TABLE `seat_no`
  ADD PRIMARY KEY (`SeatNo_ID`);

--
-- Indexes for table `showdate`
--
ALTER TABLE `showdate`
  ADD PRIMARY KEY (`Showdate_ID`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`Show_ID`),
  ADD KEY `any10` (`Language_ID`),
  ADD KEY `any11` (`M_ID`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`t_ID`),
  ADD KEY `any1` (`Seat_ID`),
  ADD KEY `any2` (`Location_ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Ticket_no`),
  ADD KEY `any5` (`Showdate_ID`),
  ADD KEY `any6` (`T_ID`),
  ADD KEY `any7` (`Food_ID`),
  ADD KEY `any8` (`Show_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `Offer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `Food_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `Genre_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `Language_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_form`
--
ALTER TABLE `payment_form`
  MODIFY `payment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `Seat_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_no`
--
ALTER TABLE `seat_no`
  MODIFY `SeatNo_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showdate`
--
ALTER TABLE `showdate`
  MODIFY `Showdate_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `Show_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `any4` FOREIGN KEY (`Payment_ID`) REFERENCES `payment_form` (`payment_ID`);

--
-- Constraints for table `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `any9` FOREIGN KEY (`Ticket_no`) REFERENCES `ticket` (`Ticket_no`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `any12` FOREIGN KEY (`Genre_ID`) REFERENCES `genre` (`Genre_ID`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `any` FOREIGN KEY (`SeatNo_ID`) REFERENCES `seat_no` (`SeatNo_ID`);

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `any10` FOREIGN KEY (`Language_ID`) REFERENCES `language` (`Language_ID`),
  ADD CONSTRAINT `any11` FOREIGN KEY (`M_ID`) REFERENCES `movie` (`M_ID`);

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `any2` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `any5` FOREIGN KEY (`showdate_ID`) REFERENCES `showdate` (`Showdate_ID`),
  ADD CONSTRAINT `any6` FOREIGN KEY (`T_ID`) REFERENCES `theatre` (`t_ID`),
  ADD CONSTRAINT `any7` FOREIGN KEY (`Food_ID`) REFERENCES `food` (`Food_ID`),
  ADD CONSTRAINT `any8` FOREIGN KEY (`Show_ID`) REFERENCES `shows` (`Show_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
