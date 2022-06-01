-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 02:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclassses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `pass`) VALUES
(1, 'admin@gmail.com', '121');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `item_id` text NOT NULL,
  `ordered` text NOT NULL,
  `quantity` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `item_id`, `ordered`, `quantity`, `date`) VALUES
(108, '21', '56', 'Yes', '', '31/05/2022'),
(107, '21', '46', 'Yes', '', '29/05/2022'),
(106, '21', '45', 'Yes', '', '29/05/2022'),
(105, '21', '44', 'Yes', '', '29/05/2022'),
(104, '21', '44', 'Yes', '', '29/05/2022'),
(103, '21', '43', 'Yes', '', '29/05/2022'),
(102, '21', '43', 'Yes', '', '29/05/2022'),
(101, '21', '42', 'Yes', '', '29/05/2022'),
(100, '21', '42', 'Yes', '', '29/05/2022'),
(99, '21', '41', 'Yes', '', '29/05/2022'),
(98, '21', '41', 'Yes', '', '29/05/2022'),
(97, '21', '41', 'Yes', '', '29/05/2022'),
(96, '21', '41', 'Yes', '', '29/05/2022'),
(95, '21', '41', 'Yes', '', '29/05/2022'),
(94, '21', '9', 'Yes', '', '29/05/2022'),
(93, '21', '9', 'Yes', '', '29/05/2022'),
(92, '21', '9', 'Yes', '', '29/05/2022'),
(91, '21', '9', 'Yes', '', '29/05/2022'),
(90, '21', '9', 'Yes', '', '29/05/2022'),
(89, '21', '9', 'Yes', '', '29/05/2022'),
(88, '21', '9', 'Yes', '', '29/05/2022'),
(87, '21', '9', 'Yes', '', '29/05/2022'),
(86, '21', '9', 'Yes', '', '29/05/2022'),
(85, '', '10', 'no', '', '29/05/2022'),
(84, '21', '9', 'Yes', '', '29/05/2022'),
(83, '21', '14', 'Yes', '', '25/05/2022'),
(82, '21', '11', 'Yes', '', '25/05/2022'),
(81, '21', '9', 'Yes', '', '25/05/2022'),
(80, '21', '16', 'Yes', '', '25/05/2022'),
(79, '21', '14', 'Yes', '', '25/05/2022'),
(109, '21', '58', 'Yes', '', '31/05/2022');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `stock` text NOT NULL,
  `teacher` varchar(40) NOT NULL,
  `price` text NOT NULL,
  `category` text NOT NULL,
  `video` varchar(500) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `date`, `image`, `stock`, `teacher`, `price`, `category`, `video`, `location`) VALUES
(8, 'The Web Application Hacker\'s ', 'The highly successful security book returns with a new edition, completely updated Web applications are the front door to most organizations, exposing them to attacks that may disclose personal information, execute fraudulent transactions, or compromise ordinary users', '03/12/2021', 'uploads/hacking1.jpg', '3', 'Gagandeep Singh', '10', '1', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(4, 'Easy French Step-by-Step ', 'Easy French Step-by-Step proves that a solid grounding in grammar basics is the key to mastering a second language. You are quickly introduced to grammatical rules and concepts in order of importance, which you can build on as you progress through the book. You will also learn more than 300 verbs, chosen by their frequency of use. Numerous exercises and engaging readings help you quickly build your speaking and comprehension prowess.', '01/12/2021', 'uploads/other1.jpg', '10', 'pargol danial', '50000', '3', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(6, 'The C Programming Language', 'The C Programming Language is a computer programming book written by Brian Kernighan and Dennis Ritchie, the latter of whom originally designed and implemented the language, as well as co-designed the Unix operating system with which development of the language was closely intertwined.', '01/12/2021', 'uploads/pro1.jpg', '5', 'pargol', '45', '2', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(9, 'The Hacker', 'Just as a professional athlete doesnt show up without a solid game plan, ethical hackers, IT professionals, and security researchers should not be unprepared, either. The Hacker Playbook provides them their own game plans', '03/12/2021', 'uploads/hacking4.jpg', '1', 'Gagandeep Singh', '20', '1', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(10, 'Black Hat Python', 'When it comes to creating powerful and effective hacking tools, Python is the language of choice for most security analysts.', '03/12/2021', 'uploads/hacking5.jpg', '1', 'pargol', '6', '1', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(11, 'Hacking: Computer Hacking Beginners Guide ', 'Get this Amazing Book - Great Deal!This book will teach you how you can protect yourself from most common hacking attacks -- by knowing how hacking actually works! After all, in order to prevent your system from being compromised, you need to stay a step ahead of any criminal hacker.', '03/12/2021', 'uploads/hacking6.jpg', '7', 'lucas', '5', '1', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(12, 'Metasploit: The Penetration Tester\'s Guide', 'The Metasploit Framework makes discovering, exploiting, and sharing vulnerabilities quick and relatively painless. But while Metasploit is used by security professionals everywhere, documentation is lacking and the tool can be hard to grasp for first-time users.', '03/12/2021', 'uploads/hacking7.jpg', '10', 'lucas', '200', '1', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(13, 'The Intelligent Investor', 'This classic text is annotated to update Graham timeless wisdom for today market conditions. . .The greatest investment advisor of the twentieth century, Benjamin Graham, taught and inspired people worldwide. Graham philosophy of value investing - which shields investors from substantial error and teaches them to develop long-term strategies - has made The Intelligent Investor the stock market bible ever since its original publication in 1949.', '03/12/2021', 'uploads/other2.jpg', '7', 'pargol', '35', '3', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(14, 'Python Crash Course', 'The second edition of the best-selling Python book in the world (over 1 million copies sold!). A fast-paced, no-nonsense guide to programming in Python. ', '03/12/2021', 'uploads/pro2.jpg', '5', 'lucas', '20', '2', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(15, 'JavaScript', 'For web developers and other programmers interested in using JavaScript, this bestselling book provides the most comprehensive JavaScript material on the market', '03/12/2021', 'uploads/pro3.jpg', '3', 'pargol', '30', '2', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(16, 'C++', 'Bestselling Programming Tutorial and Reference Completely Rewritten for the New C++11 Standard Fully updated and recast for the newly released C++11 standard, this authoritative and comprehensive introduction to C++ will help you to learn the language fast, and to use it in modern, highly effective ways', '03/12/2021', 'uploads/pro4.jpg', '7', 'lucas', '40', '2', 'https://www.youtube.com/embed/fNzpcB7ODxQ', ''),
(48, 'Learn Java', 'It is 8 hours long study.', '30/05/2022', 'uploads/6294ca2e5399e6.29934288.jpg', '5', 'pargol', '7', '2', 'https://www.youtube.com/embed/xk4_1vDrzzo', ''),
(57, 'Learn Java', 'It is 8 hours long study.', '31/05/2022', 'uploads/629675d6e5eaa7.83132214.jpg', '5', 'pargol', '7', '1', 'https://www.youtube.com/embed/xk4_1vDrzzo', ''),
(59, 'hii', 'mi', '31/05/2022', 'uploads/6296791f6b8a57.75927874.jpg', '8', 'pargol', '200', '1', 'no', ''),
(58, 'Learn Java', 'It is 8 hours long study.', '31/05/2022', 'uploads/62967645ead2f8.51795725.jpg', '5', 'pargol', '7', '1', 'https://www.youtube.com/embed/xk4_1vDrzzo', '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `date` text NOT NULL,
  `loc` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `user_id`, `date`, `loc`, `phone`) VALUES
(1, '18', '26/11/2021', 'safdsfsd', '123456789'),
(2, '19', '8/12/2021', 'Canada', '123456123'),
(3, '17', '4/05/2022', 'canada ', '6475635699'),
(4, '21', '11/05/2022', 'MOntreal', '6475635699'),
(5, '22', '11/05/2022', 'rg', '65565');

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE `maincategory` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`id`, `name`) VALUES
(1, 'Ethical Hacking'),
(2, 'Web programming'),
(3, 'Other Courses'),
(6, 'Programming'),
(7, 'Programming'),
(8, 'Programming'),
(10, 'test123'),
(11, 'Networking'),
(12, 'Networking'),
(13, 'Networking');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`id`, `username`, `course_name`) VALUES
(45, 'student@gmail.com', '11'),
(57, 'student@gmail.com', '41'),
(58, 'student@gmail.com', '41'),
(59, 'student@gmail.com', '41'),
(60, 'student@gmail.com', '41'),
(61, 'student@gmail.com', '41'),
(64, 'student@gmail.com', '43'),
(65, 'student@gmail.com', '43'),
(66, 'student@gmail.com', '44'),
(67, 'student@gmail.com', '44'),
(68, 'student@gmail.com', '45'),
(69, 'student@gmail.com', '46'),
(70, 'student@gmail.com', '56'),
(71, 'student@gmail.com', '58');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(20) NOT NULL,
  `course` varchar(100) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `teacherid` varchar(50) NOT NULL,
  `teacherusername` varchar(20) NOT NULL,
  `teacheremail` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `course`, `studentid`, `username`, `email`, `teacherid`, `teacherusername`, `teacheremail`, `message`, `reply`) VALUES
(1, '9', '21', ' sagar', 'student@gmail.com', '1', 'Gagandeep Singh', 'teacher@gmail.com', 'how much cost', ''),
(2, '9', '21', ' sagar', 'student@gmail.com', '1', 'Gagandeep Singh', 'teacher@gmail.com', '', ''),
(5, 'q', '21', ' sagar', 'student@gmail.com', '2', 'pargol', 'd@gmail.com', 'How much cost', 'Yes Course is included all the basic information'),
(6, 'q', '21', ' sagar', 'student2@gmail.com', '2', 'pargol', 'd@gmail.com', '', ''),
(7, 'q', '21', ' sagar', 'student@gmail.com', '2', 'pargol', 'd1@gmail.com', '', 'hiii'),
(8, 'q', '21', ' sagar', 'student@gmail.com', '2', 'pargol', 'd@gmail.com', 'hlo', 'no'),
(9, 'The Hacker', '21', ' sagar', 'student@gmail.com', '1', 'Gagandeep Singh', 'teacher@gmail.com', 'Can you please tell me the duration of course', '20min'),
(10, 'The Hacker', '21', ' sagar', 'student@gmail.com', '1', 'Gagandeep Singh', 'teacher@gmail.com', 'Can you please tell me the duration of course', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `email`, `pass`, `date`) VALUES
(1, 'Gagandeep Singh', 'teacher@gmail.com', 'Gagan@123', 'Active'),
(2, 'pargol', 'd@gmail.com', 'Pargol@123', 'Active'),
(3, 'Lucas', '12@gmail.com', 'Lucas@123', 'Blocked'),
(4, 'h', 'teache123r@gmail.com', '123456789', 'Blocked'),
(8, 'Gagan Sagar', 'sagar@gmail.com', '123456789', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `date` text NOT NULL,
  `card_number` int(20) NOT NULL,
  `ex_date` int(20) NOT NULL,
  `cvv` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `date`, `card_number`, `ex_date`, `cvv`) VALUES
(21, 'sagar', 'student@gmail.com', 'Student@123', 'Active', 987654321, 1129, 429),
(22, 'gagan', 'gagan2@gmail.com', '12345678', 'Blocked', 123, 123, 123),
(23, 'Gagandeep', 'Gagan@gmail.com', 'Sagar@123', 'Active', 123456789, 929, 688),
(24, 'Gagandeep', 'Gagan@gmail.com', 'Sagar@123', 'Active', 123456789, 929, 688),
(27, 'Gagandeep', 'Gagan1@gmail.com', 'Sagar@123', 'Active', 0, 929, 688),
(33, 'Gagandeep', 'Gagan32@gmail.com', 'Sagar@123', 'Active', 123456789, 929, 688);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(500) NOT NULL,
  `teacher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `location`, `teacher`) VALUES
(4, '20151030_210620.mp4', 'videos/20151030_210620.mp4', 'pargol'),
(5, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(6, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(7, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(8, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(9, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(10, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(11, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(12, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol'),
(13, 'Quick Google Hacks _', 'videos/Quick Google Hacks _ Use Google Like a Pro_HIGH.mp4', 'pargol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maincategory`
--
ALTER TABLE `maincategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maincategory`
--
ALTER TABLE `maincategory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
