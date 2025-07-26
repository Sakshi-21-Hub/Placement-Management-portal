-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 11:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `uname`, `pwd`, `fname`, `lname`, `email`, `phone`, `secque`, `secans`) VALUES
(1, 'admin1', '123', 'Girish', 'GV', 'girishgv21@gmail.com', '9742492316', 'Which is your Favourite Mobile Company?', 'OnePlus'),
(2, 'vp', '12345', 'Varun', 'VP', 'vp@gmail.com', '890863432', 'Which is your First Phone?', 'Samsung'),
(3, 'admin2', '12345', 'Sharath', 'GV', 'gvs@gmail.com', '9876765678', 'Which is your First Phone?', 'Nokia'),
(4, 'abc', 'abc', 'a', 'b', 'abc@gmail.com', '9988776655', 'Which is Favourite Food?', 'cake');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Unknown',
  `jobtype` varchar(200) DEFAULT NULL,
  `jobrole` varchar(200) DEFAULT NULL,
  `chances` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `name`, `companyname`, `status`, `jobtype`, `jobrole`, `chances`) VALUES
(1, 'Mohith', 'Infosys', 'Attended', 'Internship', 'software engineer', NULL),
(2, 'Mohith', 'TCS', 'Accepted', 'full time', 'software engineer', NULL),
(3, 'Girish', 'Mobinius', 'Unknown', 'full time', 'software engineer', NULL),
(4, 'Girish', 'Infosys', 'Selected', 'Internship', 'software engineer', NULL),
(5, 'Naveen', 'Invensis Technologies Private Limited', 'Rejected', 'full time', 'software devoloper', NULL),
(6, 'Vinay ', 'Transact Bpo Services', 'Unknown', 'full time', 'software engineer', NULL),
(7, 'Vinay ', 'Qbix Intergrated Services', 'Unknown', 'full time', 'data engineer', NULL),
(9, 'Bharath', 'Invensis Technologies Private Limited', 'Unknown', 'full time', 'data engineer', NULL),
(10, 'Girish', 'Mobinius', 'Unknown', 'Internship', 'data engineer', NULL),
(11, 'Girish', 'Cognizant Technology Solutions', 'Unknown', 'full time', 'software engineer', NULL),
(12, 'Naveen', 'Infosys', 'Rejected', 'full time', 'software engineer', NULL),
(26, 'Naveen', 'Connexions', 'Unknown', NULL, 'software engineer', NULL),
(25, 'Naveen', 'Connexions', 'Selected\r\n', NULL, 'software engineer', NULL),
(24, 'Naveen', 'TCS', 'Unknown', NULL, 'data analysis', NULL),
(27, 'mina', 'TCS', 'Unknown', NULL, 'data analysis', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(100) NOT NULL,
  `companyname` varchar(10) NOT NULL,
  `jobtype` varchar(150) NOT NULL,
  `jobrole` varchar(20) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `managerfname` varchar(15) NOT NULL,
  `managerlname` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active',
  `minperc` varchar(100) NOT NULL DEFAULT '0',
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `companyname`, `jobtype`, `jobrole`, `pwd`, `managerfname`, `managerlname`, `address`, `phone`, `email`, `website`, `status`, `minperc`, `secque`, `secans`) VALUES
(1, 'Infosys', 'internship', 'data analysis', 'infosys123', 'sakshi', 'khanvilkar', ' 27th Main, Old Madiwala, Jay Bheema Nagar, 1st Stage, BTM Layout 1, Bengaluru, Karnataka 560068', '9897876564', 'khanvilkarsakshi@gmail.com', 'https://www.infosys.com/', 'Active', '70', 'Which is Favourite Food?', 'icecream'),
(2, 'TCS', 'internship', 'data analysis', 'tcs123', 'poorva', 'kalekar', 'Mumbai, Maharashtra', '8967879890', 'poorvakalekar@gmail.com', 'https://www.tcs.com/', 'Inactive', '70', 'Which is your Favourite Mobile Company?', 'OnePlus'),
(3, 'Connexions', 'full time', 'software engineer', 'connexions', 'nimesh', 'tambat', 'No.130, Chithaara House, 4th Floor, 5th Main Rd, 3rd Phase, J. P. Nagar, Bengaluru, Karnataka 560078', '8965456789', 'nimeshtambat@gmail.com', 'https://connexionsbpo.com', 'Active', '70', 'Which is your First Phone?', 'Samsung'),
(4, 'Invensis T', 'full time', 'data analysis', 'invensis12', 'komal', 'kamble', '34/1, Upkar Chambers, Rashtriya Vidyalaya Road, 2nd Block, Basavanagudi, Bengaluru, Karnataka 560004', '8026572306', 'komalkamble@gmail.com', 'https://www.invensis.net', 'Active', '50', 'Which is your First Phone?', 'Nokia'),
(5, 'Mobinius', 'full time', 'data analysis', 'mobinius12', 'sakshi', 'kale', 'No. 311/ 19, 2nd Floor, 1st Main Rd, 8th Block, Jayanagar, Bengaluru, Karnataka 560082', '8050892700', 'sakshikale@gmail.com', 'https://www.mobinius.com', 'Active', '70', 'Which is your Favourite Mobile Company?', 'Samsung'),
(6, 'Wipro', 'internship', 'software engineer', 'wipro123', 'srusthi', 'jadhav', ' Block C, Sarjapur Main Rd, Doddakannelli, Bengaluru, Karnataka 560035', '9078767654', 'srusthijadhav@gmail.com', 'https://www.wipro.com/', 'Active', '80%', 'Which is Favourite Food?', 'icecream'),
(7, 'Techiesys ', 'full time', 'software engineer', 'techiesys1', 'srusthi', 'ghadi', ' #65/2, Shree Ganesh towers 3rd floor Shop no 1,2, Near Unilet opp sumangali Silks, B Narayanaswamappa Rd, Yeswanthpur, Bengaluru, Karnataka 560022', '99003 44725', 'srusthighadi@gmail.com', 'https://www.techiesys.in/', 'Active', '60%', 'Which is Favourite Food?', 'icecream'),
(8, 'ABC', 'internship', 'software engineer', 'abc123', 'adesh', 'bandekar', 'abc road,parel,mumbai-12', '8965456789', 'adeshbandekar@gmail.com', 'https://ab.com', 'Active', '0', 'Which is your Favourite Mobile Company?', 'OnePlus'),
(0, 'abcd', 'internship', 'software engineer', 'abcd', 'a', 'b', 'abcd', '2233445566', 'abcd@gmail.com', 'www.abcd.in', 'Active', '0', 'Which is Favourite Food?', 'cake');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(255) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `user`, `message`, `date`, `time`) VALUES
(2, 'admin1', 'Hello everybody this is the demo text on your feed youll receive further updates in the same way!!', '2023-09-05', '19:14:39'),
(4, 'vp', 'Infosys company has been added interested students can apply !!\r\n-Admin', '2023-11-05', '20:04:42'),
(7, 'admin1', 'More IT companies added! -Admin', '2023-10-07', '12:31:27'),
(5, 'admin1', 'Do not post unnecessary comments!!', '2023-10-25', '22:48:06'),
(6, 'admin1', '4 more companies added checkout!!!\r\n-Admin', '2023-09-25', '22:50:41'),
(8, 'admin1', 'Infosys interview is being held tomorrow at 10:00 AM in college campus', '2023-10-19', '11:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(100) NOT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'active',
  `jobtype` varchar(200) DEFAULT NULL,
  `jobrole` varchar(200) DEFAULT NULL,
  `joblocation` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `companyname`, `status`, `jobtype`, `jobrole`, `joblocation`) VALUES
(1, 'Infosys', 'active', 'internship', 'data analysis', 'Bengaluru'),
(3, 'Connexions', 'active', 'full time', 'software engineer', 'mumbai'),
(4, 'TCS', 'active', 'internship', 'data analysis', 'Delhi'),
(5, 'Wipro', 'active', 'internship', 'software engineer', 'All Pan\r\n'),
(6, 'Techiesys', 'active', 'full time', 'software engineer', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(100) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `pnr` int(20) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL,
  `course` varchar(100) DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL,
  `yop` varchar(10) DEFAULT 'curdate()',
  `ssc` varchar(100) DEFAULT NULL,
  `hsc` varchar(100) DEFAULT NULL,
  `cv_file` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `uname`, `pnr`, `pwd`, `fname`, `lname`, `email`, `phone`, `secque`, `secans`, `course`, `percentage`, `yop`, `ssc`, `hsc`, `cv_file`) VALUES
(1, 'naveen', 2147483647, '1234', 'Naveen', 'RS', 'naveenrs@gmail.com', '9868909876', 'Which is Favourite Food?', 'Gobi Manchurian', 'BCOM', '70', '2018', '88', '77', 0x426861697261766e617468204d656e752e706466),
(2, 'girishgv21', 2147483647, '12345', 'Girish', 'G V', 'girishgv21@gmail.com', '9742492316', 'Which is your Favourite Mobile Company?', 'Motorola', 'BCA', '78', '2019', '92', '72', ''),
(7, 'mohith', 2147483647, '12345', 'Mohith', 'SB', 'mohith@gmail.com', '9876789865', 'Which is your First Phone?', 'Samsung', 'BCA', '82', '2019', NULL, NULL, ''),
(9, 'vinay', 2147483647, '12345', 'Vinay ', 'Kumar', 'vinay@gmail.com', '9089876789', 'Which is your First Phone?', 'Nokia', 'BBA', '60', '2018', '50', '40', ''),
(10, 'bharath', 2147483647, '12345', 'Bharath', 'N', 'bharath@gmail.com', '9632629993', 'Which is your Favourite Mobile Company?', 'OnePlus', 'BCOM', '82', '2019', '59', '82', ''),
(11, 'rutu', 2147483647, 'rutu123', 'rutuja', 'khanvilkar', 'khanvilkarrutuja@gmail.com', '8652748274', 'Which is Favourite Food?', 'cake', NULL, NULL, 'curdate()', NULL, NULL, ''),
(12, 'mina123', 2147483647, '12345', 'mina', 'gore', 'minagore@gmail.com', '7788224567', 'Which is your First Phone?', 'nokia', NULL, '8.92', '2018', '80', '80', ''),
(13, 'sak', 2147483647, '1234', 'sak', 'khan', 'sakkhan@gmail.com', '6677889944', 'Which is your Favourite Mobile Company?', 'oppo', NULL, NULL, 'curdate()', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `study_materials`
--

CREATE TABLE `study_materials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_materials`
--

INSERT INTO `study_materials` (`id`, `title`, `description`, `file_url`) VALUES
(1, 'Cracking the Coding Interview', 'A comprehensive book covering technical interview preparation with coding exercises and strategies.', 'http://example.com/cracking_the_coding_interview.pdf'),
(2, 'LeetCode Practice Guide', 'A collection of LeetCode problems categorized by topic for focused practice.', 'http://example.com/leetcode_practice_guide.pdf'),
(3, 'System Design Primer', 'A guide to designing large-scale systems, covering topics like scalability, availability, and performance.', 'http://example.com/system_design_primer.pdf'),
(4, 'Algorithms by Robert Sedgewick and Kevin Wayne', 'A book on algorithms and data structures with detailed explanations and examples in Java.', 'http://example.com/algorithms_by_sedgewick_and_wayne.pdf'),
(5, 'Cracking the Coding Interview', 'A comprehensive book covering technical interview preparation with coding exercises and strategies.', 'http://www.crackingthecode.com/cracking_the_coding_interview.pdf'),
(6, 'LeetCode Practice Guide', 'A collection of LeetCode problems categorized by topic for focused practice.', 'http://www.leetcode.com/leetcode_practice_guide.pdf'),
(7, 'System Design Primer', 'A guide to designing large-scale systems, covering topics like scalability, availability, and performance.', 'http://www.systemdesignprimer.com/system_design_primer.pdf'),
(8, 'Algorithms by Robert Sedgewick and Kevin Wayne', 'A book on algorithms and data structures with detailed explanations and examples in Java.', 'http://www.dsa.com/algorithms_by_sedgewick_and_wayne.pdf'),
(9, 'Dynamic Programming: A Top-Down Approach', 'A guide to dynamic programming with examples and practice problems.', 'http://www.gfg.com/dynamic_programming_guide.pdf'),
(10, 'Introduction to System Architecture', 'An overview of computer system architecture and design principles.', 'http://www.system_architecture.com/system_architecture_intro.pdf'),
(11, 'Networking Essentials', 'A comprehensive guide to computer networking concepts and protocols.', 'http://www.cn.com/networking_essentials.pdf'),
(12, 'Effective Coding Interviews: Problems and Solutions', 'A book with in-depth explanations and solutions to common coding interview problems.', 'http://www.example.com/effective_coding_interviews.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companyname` (`companyname`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`),
  ADD UNIQUE KEY `companyname` (`companyname`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `study_materials`
--
ALTER TABLE `study_materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `study_materials`
--
ALTER TABLE `study_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
