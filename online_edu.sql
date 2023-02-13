-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `password`) VALUES
(1, 'admin123', '12');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(266) NOT NULL,
  `category_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Programming', 'img/categories/1.jpg'),
(2, 'Web Design', 'img/categories/2.jpg'),
(3, 'Illustration & Drawing', 'img/categories/3.jpg'),
(4, 'Social Media', 'img/categories/4.jpg'),
(5, 'Photoshop', 'img/categories/5.jpg'),
(6, 'Cryptocurrencies', 'img/categories/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment_notification_table`
--

CREATE TABLE `comment_notification_table` (
  `notification_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `notification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_notification_table`
--

INSERT INTO `comment_notification_table` (`notification_id`, `course_id`, `notification`) VALUES
(6, 14, 0),
(7, 13, 0),
(8, 14, 0),
(9, 14, 0),
(10, 18, 0),
(11, 1, 0),
(12, 1, 0),
(13, 1, 0),
(14, 15, 0),
(15, 2, 0),
(16, 2, 0),
(17, 2, 0),
(18, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `comment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`comment_id`, `student_id`, `comment`, `course_id`, `date`) VALUES
(11, 10, 'nice tutorial ', 15, '2021-02-26 13:17:44'),
(12, 8, 'this is awesome. thanks for share with us', 14, '2021-02-26 13:20:33'),
(13, 10, 'very god tutorial ', 14, '2021-02-26 13:21:29'),
(14, 10, 'sdfdsf', 14, '2021-02-26 13:28:39'),
(15, 10, 'fsdfsdf', 13, '2021-02-26 13:28:58'),
(16, 10, 'sfdsf', 14, '2021-02-26 13:30:34'),
(17, 10, 'fsdfsdf', 14, '2021-02-26 13:30:41'),
(18, 11, 'very good ', 18, '2021-03-07 17:37:33'),
(19, 4, 'GGG', 1, '2022-03-11 17:18:24'),
(20, 10, 'HH', 1, '2022-03-11 17:18:44'),
(21, 10, 'HH', 1, '2022-03-11 17:53:39'),
(22, 1, 'aa\r\n', 15, '2022-08-21 06:56:37'),
(23, 1, 'opdfkgd', 2, '2022-10-02 14:56:10'),
(24, 1, 'fd', 2, '2022-10-02 14:56:21'),
(25, 1, 'is it safe ?', 2, '2022-11-04 16:42:31'),
(26, 1, 'fds\r\n', 17, '2022-12-12 17:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(266) NOT NULL,
  `course_details` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `price` varchar(300) NOT NULL,
  `course_image` varchar(250) NOT NULL,
  `course_feature` tinyint(4) NOT NULL,
  `pay_status` tinyint(4) NOT NULL,
  `rat_total` int(11) NOT NULL,
  `rat_hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`course_id`, `course_title`, `course_details`, `category_id`, `teacher_id`, `price`, `course_image`, `course_feature`, `pay_status`, `rat_total`, `rat_hit`) VALUES
(1, 'Art & Crafts', 'Lorem ipsum dolor sit amet, consectetur', 1, 4, '2500', 'img/courses/1.jpg', 1, 1, 5, 6),
(2, 'IT Development', 'Lorem ipsum dolor sit amet, consectetur', 2, 4, '5555', 'img/courses/2.jpg', 1, 1, 5, 3),
(3, 'Socia Media', 'Lorem ipsum dolor sit amet, consectetur', 3, 4, '0', 'img/courses/3.jpg', 0, 0, 0, 7),
(13, 'JAVA BEGINER', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let application developers write once, run anywhere (WORA),[17] meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.[18] Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub,[19][20] particularly for client-server web applications, with a reported 9 million developers.[21] ', 1, 8, '7000', 'img/java-logo.png', 0, 0, 0, 0),
(14, 'JAVA Advance', 'Java was originally developed by James Gosling at Sun Microsystems (which has since been acquired by Oracle) and released in 1995 as a core component of Sun Microsystems\' Java platform. The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun had relicensed most of its Java technologies under the GNU General Public License. Oracle offers its own HotSpot Java Virtual Machine, however the official reference implementation is the OpenJDK JVM which is free open source software and used by most developers and is the default JVM for almost all Linux distributions.\r\n\r\nAs of September 2020, the latest version is Java 15, with Java 11, a currently supported long-term support (LTS) version, released on September 25, 2018. Oracle released the last zero-cost public update for the legacy version Java 8 LTS in January 2019 for commercial use, although it will otherwise still support Java 8 with public updates for personal use indefinitely. Other vendors have begun to offer zero-cost builds of OpenJDK 8 and 11 that are still receiving security and other upgrades.\r\n\r\nOracle (and others) highly recommend uninstalling outdated versions of Java because of serious risks due to unresolved security issues.[22] Since Java 9, 10, 12, 13, and 14 are no longer supported, Oracle advises its users to immediately transition to the lates', 1, 8, '15000', 'img/how-to-troubleshoot-java-cpu.jpg', 0, 0, 5, 1),
(15, 'JAVA WEB', 'Java was originally developed by James Gosling at Sun Microsystems (which has since been acquired by Oracle) and released in 1995 as a core component of Sun Microsystems\' Java platform. The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun had relicensed most of its Java technologies under the GNU General Public License. Oracle offers its own HotSpot Java Virtual Machine, however the official reference implementation is the OpenJDK JVM which is free open source software and used by most developers and is the default JVM for almost all Linux distributions.\r\n\r\nAs of September 2020, the latest version is Java 15, with Java 11, a currently supported long-term support (LTS) version, released on September 25, 2018. Oracle released the last zero-cost public update for the legacy version Java 8 LTS in January 2019 for commercial use, although it will otherwise still support Java 8 with public updates for personal use indefinitely. Other vendors have begun to offer zero-cost builds of OpenJDK 8 and 11 that are still receiving security and other upgrades.\r\n\r\nOracle (and others) highly recommend uninstalling outdated versions of Java because of serious risks due to unresolved security issues.[22] Since Java 9, 10, 12, 13, and 14 are no longer supported, Oracle advises its users to immediately transition to the lates', 1, 8, '10000', 'img/what-is-java-web-application.png', 0, 0, 5, 1),
(16, 'Digital Marketing ', 'Digital marketing is the component of marketing that utilizes internet and online based digital technologies such as desktop computers, mobile phones and other digital media and platforms to promote products and services.[1][2] Its development during the 1990s and 2000s, changed the way brands and businesses use technology for marketing. As digital platforms became increasingly incorporated into marketing plans and everyday life,[3] and as people increasingly use digital devices instead of visiting physical shops,[4][5] digital marketing campaigns have become prevalent, employing combinations of search engine optimization (SEO), search engine marketing (SEM), content marketing, influencer marketing, content automation, campaign marketing, data-driven marketing, e-commerce marketing, social media marketing, social media optimization, e-mail direct marketing, display advertising, e–books, and optical disks and games have become commonplace. Digital marketing extends to non-Internet channels that provide digital media, such as television, mobile phones (SMS and MMS), callback, and on-hold mobile ring tones.[6] The extension to non-Internet channels differentiates digital marketing from online ', 4, 9, '5000', 'img/DIGITAL-MARKETING.jpg', 0, 0, 5, 1),
(17, 'Affilate marketing', 'Wake up at an ungodly hour. Drive to the office through total gridlock, streets jammed with other half-asleep commuters. Slog through email after mind-numbing email until the sweet release at five o’clock.\r\n\r\nSound terrible?\r\n\r\nWhat if, instead of dealing with the monotony and stupor of the rat race to earn a few bucks, you could make money at any time, from anywhere — even while you sleep?\r\n\r\nThat’s the concept behind affiliate marketing.', 4, 9, '2000', 'img/MG-Blog-8.png', 0, 0, 0, 0),
(18, 'logo design', 'about logo design এর ছবির ফলাফল\r\nLogo design is a branding and marketing tool that can be used to signify a business. Put simply; your logo represents your business brand. ... We see logo design every day, most logo design is used in a business context, or to represent a business. A logo design is used as a signifier.', 5, 11, '10000', 'img/8df2cfa314f6704ca1ee0d9c42361e01.jpg', 0, 0, 5, 1),
(19, 'fsdfn fjaf ', 'dnsfss jdslf', 3, 4, '', 'img/308929843_126710550145926_2290180168558119142_n.jpg', 0, 0, 0, 0),
(20, 'Optio consectetur ', 'Commodo minus eiusmo', 1, 4, '500', 'img/75px-Laravel.svg.png', 0, 0, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrole_student_list`
--

CREATE TABLE `enrole_student_list` (
  `enrole_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pay_status` tinyint(4) NOT NULL,
  `student_account` varchar(191) DEFAULT NULL,
  `student_payment_type` varchar(191) NOT NULL,
  `teacher_pay` decimal(30,2) NOT NULL,
  `t_pay` tinyint(4) NOT NULL,
  `teacher_account` varchar(191) DEFAULT NULL,
  `teacher_payment_type` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrole_student_list`
--

INSERT INTO `enrole_student_list` (`enrole_id`, `student_id`, `course_id`, `price`, `pay_status`, `student_account`, `student_payment_type`, `teacher_pay`, `t_pay`, `teacher_account`, `teacher_payment_type`) VALUES
(39, 1, 2, '5555', 1, '234578', 'Nogod', '4444.00', 1, '545454', 'Bkash'),
(40, 1, 3, '0', 1, '01767654345', 'Bkash', '0.00', 0, '545454', 'Bkash'),
(41, 1, 13, '7000', 1, '45678909654', 'Nogod', '5600.00', 1, '123456789', 'Nogod'),
(42, 1, 16, '5000', 1, '01767654345', 'Bkash', '4000.00', 1, '2147483647', 'Bkash');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_table`
--

CREATE TABLE `pdf_table` (
  `pdf_id` int(11) NOT NULL,
  `pdf_title` varchar(300) NOT NULL,
  `pdf_file` varchar(300) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratecheck_table`
--

CREATE TABLE `ratecheck_table` (
  `ratcheck_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `replay_table`
--

CREATE TABLE `replay_table` (
  `replay_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `replay` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replay_table`
--

INSERT INTO `replay_table` (`replay_id`, `comment_id`, `teacher_id`, `replay`, `date`) VALUES
(12, 12, 8, 'sd', '2021-02-26 13:21:52'),
(13, 12, 8, 'dfdsf', '2021-02-26 13:29:11'),
(14, 15, 8, 'fdsfsdf', '2021-02-26 13:29:27'),
(15, 12, 8, 'sdfdf', '2021-02-26 13:30:56'),
(16, 18, 11, 'thank you', '2021-03-07 17:37:53'),
(17, 19, 4, 'JJ', '2022-03-11 17:19:13'),
(18, 20, 4, 'JJMM', '2022-03-11 17:19:28'),
(19, 19, 4, 'sa', '2022-10-02 14:57:20'),
(20, 20, 4, 'aa', '2022-10-02 14:57:27'),
(21, 21, 4, 'af', '2022-10-02 14:57:35'),
(22, 11, 4, 'a', '2022-10-02 14:57:53'),
(23, 23, 4, '1234', '2022-11-04 16:45:20'),
(24, 25, 4, 'yes\r\n', '2022-11-04 16:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `student_email` varchar(266) NOT NULL,
  `student_phone` varchar(200) NOT NULL,
  `student_password` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_id`, `student_name`, `student_email`, `student_phone`, `student_password`, `gender`, `created_at`) VALUES
(1, 'student', 'student@gmail.com', '123456789', '123', 'male', '2021-02-08 06:14:03'),
(10, 'student one', 'student1@gmail.com', '4553453453', '12', 'male', '2021-02-26 13:12:11'),
(11, 'sohan ', 'sohan@gmail.com', '123456697888', '12', 'male', '2021-03-07 17:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_table`
--

CREATE TABLE `teacher_table` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(300) NOT NULL,
  `teacher_email` varchar(300) NOT NULL,
  `teacher_phone` varchar(300) NOT NULL,
  `teacher_image` varchar(266) NOT NULL,
  `teacher_password` varchar(266) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `account_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_table`
--

INSERT INTO `teacher_table` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_phone`, `teacher_image`, `teacher_password`, `created_at`, `account_no`) VALUES
(4, 'teacher', 'teacher@gmail.com', '3535', 'img/527934_323469164413605_2096107876_n.jpg', '12', '2021-02-08 04:53:33', 545454),
(7, 'sohan', 'sohan@gmail.com', '12345678', 'img/8563475581_df05e9906d_b.jpg', '12', '2021-02-26 07:18:50', 123456),
(8, 'TEACHER ONE', 'teacher1@gmail.com', '0161234568', 'img/127995587-attractive-smart-man-in-eyeglasses-reading-interesting-book-while-sitting-at-cafe-.jpg', '12', '2021-02-26 08:58:29', 123456789),
(9, 'teacher two', 'teacher2@gmail.com', '123456789962', 'img/maxresdefault.jpg', '12', '2021-02-26 09:00:03', 2147483647),
(10, 'TEACHER THREE', 'teacher3@gmail.com', '0161234568', 'img/smart-person-eyewear-man-official-clothes-stands-against-white-background-studio-165962936.jpg', '12', '2021-02-26 09:02:15', 123456468),
(11, 'TEACHER FOUR', 'teacher4@gmail.com', '0161234568', 'img/Super_Intelligence_v3.jpg', '12', '2021-02-26 09:02:56', 1215469846),
(23, 'dipta', 'stufdssddent@gmail.com', '01654543456', '', '123452345', '2023-02-06 17:49:32', 123);

-- --------------------------------------------------------

--
-- Table structure for table `video_table`
--

CREATE TABLE `video_table` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(300) NOT NULL,
  `video_file` varchar(300) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_table`
--

INSERT INTO `video_table` (`video_id`, `video_title`, `video_file`, `course_id`) VALUES
(6, 'intro 1', 'video/yt1s.com - Java Bangla Tutorials 10 Format specifier_v144P.mp4', 13),
(7, 'v 1 ', 'video/yt1s.com - Java Bangla Tutorials 15 Temperature Converter_v144P.mp4', 13),
(8, 'v2', 'video/yt1s.com - Java Bangla Tutorials 17 Relational Operator_v144P.mp4', 13),
(9, 'v3', 'video/yt1s.com - Java Bangla Tutorials 19 Checking EvenOdd Number_v144P.mp4', 13),
(10, 'v4', 'video/yt1s.com - Java Bangla Tutorials 23 set up jdk with netbeans together jdk not found solution_v144P.mp4', 13),
(11, 'v5', 'video/yt1s.com - Java Bangla Tutorials 23 switch part1_v144P.mp4', 13),
(12, 'Java Programming 1', 'video/yt1s.com - Java Bangla Tutorials 10 Format specifier_v144P.mp4', 14),
(13, 'Java Programming  2', 'video/yt1s.com - Java Bangla Tutorials 15 Temperature Converter_v144P.mp4', 14),
(14, 'Java Programming 3', 'video/yt1s.com - Java Bangla Tutorials 23 switch part1_v144P.mp4', 14),
(15, 'Java Programming 4', 'video/yt1s.com - Java Bangla Tutorials 19 Checking EvenOdd Number_v144P.mp4', 14),
(16, 'Java Programming 5', 'video/yt1s.com - Java Bangla Tutorials 17 Relational Operator_v144P.mp4', 14),
(17, 'java web 1 ', 'video/yt1s.com - Java Bangla Tutorials 23 set up jdk with netbeans together jdk not found solution_v144P.mp4', 15),
(18, 'java web 2 ', 'video/yt1s.com - Java Bangla Tutorials 10 Format specifier_v144P.mp4', 15),
(19, 'digital 1', 'video/yt1s.com - Java Bangla Tutorials 10 Format specifier_v144P.mp4', 16),
(20, 'digital 2', 'video/yt1s.com - Java Bangla Tutorials 15 Temperature Converter_v144P.mp4', 16),
(21, 'digital 3', 'video/yt1s.com - Java Bangla Tutorials 19 Checking EvenOdd Number_v144P.mp4', 16),
(22, 'a 1 ', 'video/yt1s.com - Java Bangla Tutorials 10 Format specifier_v144P.mp4', 17),
(23, 'a 2 ', 'video/yt1s.com - Java Bangla Tutorials 15 Temperature Converter_v144P.mp4', 17),
(24, 'a 3', 'video/yt1s.com - Java Bangla Tutorials 17 Relational Operator_v144P.mp4', 17),
(25, 'video 1 ', 'video/yt1s.com - Java Bangla Tutorials 17 Relational Operator_v144P.mp4', 18),
(26, 'video 2', 'video/yt1s.com - Java Bangla Tutorials 23 switch part1_v144P.mp4', 18),
(27, 'jfl', 'video/videoplayback (1).mp4', 20),
(28, '', 'video/yt1s.com - Java Bangla Tutorials 23 switch part1_v144P.mp4', 1),
(29, 'dfgh', 'video/yt1s.com - Java Bangla Tutorials 23 set up jdk with netbeans together jdk not found solution_v144P.mp4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment_notification_table`
--
ALTER TABLE `comment_notification_table`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrole_student_list`
--
ALTER TABLE `enrole_student_list`
  ADD PRIMARY KEY (`enrole_id`);

--
-- Indexes for table `pdf_table`
--
ALTER TABLE `pdf_table`
  ADD PRIMARY KEY (`pdf_id`);

--
-- Indexes for table `ratecheck_table`
--
ALTER TABLE `ratecheck_table`
  ADD PRIMARY KEY (`ratcheck_id`);

--
-- Indexes for table `replay_table`
--
ALTER TABLE `replay_table`
  ADD PRIMARY KEY (`replay_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher_table`
--
ALTER TABLE `teacher_table`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `video_table`
--
ALTER TABLE `video_table`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment_notification_table`
--
ALTER TABLE `comment_notification_table`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enrole_student_list`
--
ALTER TABLE `enrole_student_list`
  MODIFY `enrole_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pdf_table`
--
ALTER TABLE `pdf_table`
  MODIFY `pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratecheck_table`
--
ALTER TABLE `ratecheck_table`
  MODIFY `ratcheck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `replay_table`
--
ALTER TABLE `replay_table`
  MODIFY `replay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher_table`
--
ALTER TABLE `teacher_table`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `video_table`
--
ALTER TABLE `video_table`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
