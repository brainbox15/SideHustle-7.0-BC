-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 03:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `title`, `content`) VALUES
(1, 'How to Deploy a site', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet officia recusandae dolore temporibus pariatur, voluptatem ullam hic, dicta fugit nulla praesentium odio cumque eos perspiciatis esse dolorum! Laudantium unde aliquid accusamus iure, eaque odio consequatur, corrupti commodi explicabo hic numquam, illum optio id? Aperiam quidem ex voluptatem veniam esse omnis eius recusandae corporis.'),
(11, 'How to deploy an andriod app', '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum doloremque quo sunt, quidem labore, consequuntur exercitationem tempore suscipit enim aperiam repellendus consequatur! Deleniti repellendus beatae dolores tempora, dignissimos dicta reprehenderit maiores consequatur architecto saepe explicabo esse modi suscipit tenetur ex in rerum rem temporibus magnam, eligendi itaque illo quae provident.\r\n'),
(17, 'Interior Design Trends : from moss-core to lighting', 'Milan Design Week was back in full force this year, with luminaries from the interiors, architecture, and fashion worlds convening to get a sneak peak at all things new and noteworthy.'),
(18, 'Raising a Decorating Genius? A Bold Nursery Is a Good Way to Begin.', 'At the risk of offending a flotilla of momfluencers, I’ll say it: Having an aesthetically flawless nursery does not matter. Not to the baby, at least.'),
(21, 'How to learn to code', '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid non illum sit natus nesciunt delectus labore blanditiis ipsam qui sint tenetur et, magnam adipisci ipsa quasi vero repellat dolore repudiandae cum, ea, minima quia veritatis voluptatibus ullam. Officiis, fugit sed! Quae facilis tempore impedit, cupiditate dolores, corrupti quia vel inventore doloremque eius culpa sequi quibusdam accusantium nihil placeat perferendis aut est quasi debitis fugiat nostrum enim eaque incidunt repellendus. Eligendi, alias repellendus expedita praesentium dolores nobis repudiandae vel error velit ips');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
