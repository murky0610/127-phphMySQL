-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 10:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `duration` float NOT NULL,
  `date_showing` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `cover_img`, `description`, `duration`, `date_showing`, `end_date`, `price`) VALUES
(10, 'Fast & Furious 9', 'f9.jpg', 'Vin Diesel’s Dom Toretto is leading a quiet life off the grid with Letty and his son, little Brian, but they know that danger always lurks just over their peaceful horizon. This time, that threat will force Dom to confront the sins of his past if he’s going to save those he loves most. His crew joins together to stop a world-shattering plot led by the most skilled assassin and high-performance driver they’ve ever encountered: a man who also happens to be Dom’s forsaken brother, Jakob (John Cena).', 2.25, '2021-06-25', '2021-06-29', 40),
(11, 'False Positive', 'fp.jpg', 'After months of trying and failing to get pregnant, Lucy (Ilana Glazer) and Adrian (Justin Theroux) finally find their dream fertility doctor in the illustrious Dr. Hindle (Pierce Brosnan). But after becoming pregnant with a healthy baby girl, Lucy begins to notice something sinister through Hindle’s gleaming charm, and she sets out to uncover the unsettling truth about him, and her own “birth story.” As if getting pregnant weren’t complicated enough…', 1.32, '2021-06-25', '2021-06-29', 50),
(12, 'Werewolves Within', 'ww.jpg', 'After a proposed gas pipeline creates divisions within the small town of Beaverfield, and a snowstorm traps its residents together inside the local inn, newly arrived forest ranger FINN (Sam Richardson) and postal worker CECILY (Milana Vayntrub) must try to keep the peace and uncover the truth behind a mysterious creature that has begun terrorizing the community.', 1.4, '2021-06-25', '2021-06-29', 60),
(14, 'Felix and The Hidden Treasure', 'fathd.jpg', 'Twelve-year-old Felix is convinced that his father, who went missing at sea two years ago, is still alive. So Felix sets off to find him, accompanied by Tom, a retired sailor; Squawk, a thieving one-legged parrot; and Rover, a cat who acts like a dog. Their journey leads them to Darkshadow Island, where they find a secret underground city ruled over by the tyrannical Morgäa, keeper of an incredible treasure', 1.3, '2021-06-25', '2021-06-29', 50),
(16, 'Against The Current', 'atc.jpg', 'How far do you have to travel to find yourself? And what sacrifices are you willing to make to get there? Veiga Grétarsdóttir is the first person in the world to attempt to kayak the 1,300 mile circumference of Iceland, counter-clockwise and against the current, an achievement that has been compared to climbing K2. Veiga’s personal journey is no less remarkable. She was born 44 years ago as a boy in a fishing village on the far west coast of Iceland. By the age of 38 Veigar had a wife and family but decided that she could no longer live as a man and decided to undergo gender reassignment. The inner struggle for Veigar to become Veiga was a journey as difficult if not more so than the solo kayak expedition she undertakes. These two stories of conflict and struggle are intertwined as the film follows her amazing 103 day journey around Iceland, with the magical, rugged coastline of the country a backdrop to the story of Veiga’s transition', 1.3, '2021-06-25', '2021-06-29', 60),
(19, 'I Carry You With Me', 'icywm.jpg', 'Based on true love, this decades spanning romance begins in Mexico between an aspiring chef and a teacher. Their lives restart in incredible ways as societal pressure propels the couple to embark on a treacherous journey to New York with dreams, hopes, and memories in tow.', 1.5, '2021-06-25', '2021-06-29', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
