-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 05:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `emp_id` varchar(8) NOT NULL,
  `pwd` longtext NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `uname`, `emp_id`, `pwd`, `fname`, `lname`, `email`, `phone`, `secque`, `secans`, `time`, `added_time`) VALUES
(1, 'admin1', '12g8888', '0e7517141fb53f21ee439b355b5a1d0a', 'Girish', 'Jain', 'girishgv21@gmail.com', '9742492316', 'Which is your Favourite Mobile Company?', 'OnePlus', '2024-05-24 21:09:09', '2024-05-24 21:09:09'),
(2, 'vp', '2345678', 'a78dba24a9dec2314f58f668ae0ae427', 'Varun', 'VP', 'vp@gmail.com', '890863432', 'Which is your First Phone?', 'Samsung', '2024-05-24 21:09:09', '2024-05-24 21:09:09'),
(3, 'admin2', '34567890', '0e7517141fb53f21ee439b355b5a1d0a', 'Sharath', 'GV', 'gvs@gmail.com', '9876765678', 'Which is your First Phone?', 'Nokia', '2024-05-24 21:09:09', '2024-05-24 21:09:09'),
(9, 'admin3', '3rdg46er', '1c4453807f819bde7f3895884c842df4', 'rutuja admin3', 'khan', 'khanvilkarrutu222@gmail.com', '4433112255', 'Which is Favourite Food?', 'cake', '2024-05-24 21:09:09', '2024-05-24 21:09:09'),
(16, 'ddd', 'd2d2d2', '3efb7a1c2b2da4ff7e5e2328cb15c814', 'ddd', 'ddd', 'dd@gmail.com', '2233445511', 'Which is your First Phone?', 'oppo', '2024-05-24 21:09:09', '2024-05-24 21:09:09'),
(18, '1sdfwef', '12g5hh3', '251800da8d338eb82819105d5f3c7629', 'Vibha', 'Jain', 'a@gmail.com', '9594451428', 'Which was your first phone?', 'cake', '2024-05-26 18:31:07', '2024-05-26 18:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Pending',
  `jobtype` varchar(200) DEFAULT NULL,
  `jobrole` varchar(200) DEFAULT NULL,
  `companyuser` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `yop` varchar(100) NOT NULL,
  `percentage` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `name`, `lname`, `companyname`, `status`, `jobtype`, `jobrole`, `companyuser`, `branch`, `email`, `yop`, `percentage`, `time`, `added_time`) VALUES
(87, 'rutu', '0', 'Wipro', 'Pending', 'internship', 'Analyst', 'Wipro123', 'ENC', 'khanrutu02@gmail.com', '2024', '56', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(81, 'sakshi1', '0', 'Vivo ', 'round2', 'internship', 'GET', 'vivo1', 'DS', 'khanvilkarsakshi.21@gmail.com', '2024', '90%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(82, 'sakshi1', '0', 'Wipro', 'Pending', 'FTO', 'Analyst', 'Wipro123', 'DS', 'khanvilkarsakshi.21@gmail.com', '2024', '90%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(83, 'sakshi1', '0', 'Police Gov', 'Pending', 'PPO', 'App Developer', 'dhanu1', 'DS', 'khanvilkarsakshi.21@gmail.com', '2024', '90%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(1, 'komal1', '0', 'TCS', 'onhold', 'PPO', 'data analysis', 'TCS123', 'CE', 'komal.kk.1206@gmail.com', '2025', '70%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(2, 'Vibha1', '0', 'Wipro', 'Pending', 'FTO', 'Analysts', 'Wipro123', 'CE', 'kotianvibha4@gmail.com', '2024', '66%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(3, 'Vibha1', '0', 'Lenovo', 'Selected', 'internship', 'Data Analysts', 'lenovo1', 'CE', 'kotianvibha4@gmail.com', '2025', '66%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(6, 'Sru', '0', 'Police Gov', 'Pending', 'PPO', 'App Developer', 'dhanu1', 'IT', 'jsrushti08@gmail.com', '2024', '85%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(4, 'naveen', '0', 'TCS', 'selected', 'PPO', 'data analysis', 'TCS123', 'IT', 'naveenrs@gmail.com', '2018', '70%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(10, 'naveen', '0', 'Lenovo', 'Pending', 'FTO', 'App Developer', 'lenovo1', 'IT', 'naveenrs@gmail.com', '2018', '70', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(11, 'Naveen', '0', 'Police Gov', 'Pending', 'PPO', 'App Developer', 'dhanu1', 'IT', 'naveenrs@gmail.com', '2018', '70', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(9, 'sakshi1', '0', 'Lenovo', 'Pending', 'internship', 'Data Analyst', 'lenovo1', 'DS', 'khanvillkarsakshi.21@gmail.com', '2024', '90%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(8, 'komal1', '0', 'TCS', 'onhold', 'FTO', 'App Developer', 'TCS123', 'ENC', 'komal.kk.1206@gmail.com', '2024', '70%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(5, 'Sru', '0', 'TCS', 'round3', 'FTO', 'App Developer', 'TCS123', 'IT', 'jsrushti08@gmail.com', '2024', '85%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(7, 'sakshi1', '0', 'TCS', 'selected', 'PPO', 'data analysis', 'TCS123', 'DS', 'khanvillkarsakshi.21@gmail.com', '2024', '90%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(85, 'rutu', '0', 'TCS', 'round3', 'PPO', 'data analysis', 'TCS123', 'ENC', 'khanrutu02@gmail.com', '2024', '56', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(88, 'sakshi1', 'sakshi1', 'TCS', 'Pending', 'PPO', 'data analysis', 'TCS123', 'DS', 'khanvilkarsakshi.21@gmail.com', '2024', '90%', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(98, 'Naveen', 'Raveen', 'Vivo ', 'Pending', 'internship', 'GET', 'vivo1', 'IT', 'naveenrs@gmail.com', '2018', '70', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(99, 'komal', 'kamble', 'TCS', 'Pending', 'PPO', 'data analysis', 'TCS123', 'IT', 'komal.kk.1206@gmail.com', '2024', '90', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(97, 'Naveen', 'Raveen', 'TCS', 'Pending', 'PPO', 'data analysis', 'TCS123', 'IT', 'naveenrs@gmail.com', '2018', '70', '2024-05-24 21:09:45', '2024-05-24 21:09:45'),
(100, 'Naveen', 'Pawar', 'TCS', 'Pending', 'FTO', 'App Developer', 'TCS123', 'IT', 'naveenrs@gmail.com', '2025', '88', '2024-05-27 06:52:55', '2024-05-27 06:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` text NOT NULL,
  `replies` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi', 'Hello i am here to assist you with your placement related doubts.'),
(2, 'What is the average campus placement?', 'UMIT has always been in the preferred list of industries for campus placement\r\nand on an average 80% students are placed every year.\r\n'),
(3, 'Which are the companies that come here for recruitment?', 'Accenture, Barclays, Colgate, Capgemini, Infosys, Microsoft, Deloitte, Oracle,\r\nQunnox, Northgate, Nibble Technology, Xoriant, Persistent, Target, Ericsson,\r\nMu Sigma.'),
(4, 'What is the difference in placement policy between various branches?\r\n', 'Placement policy is the same for all branches. In most of the companies students from all branches are eligible to apply; except few depending on the job profile.'),
(5, 'who are you', 'I am tcp, the chatBot of this application.'),
(6, 'What can you do', 'I am in charge to answer your questions.'),
(7, 'what is PHP', 'PHP (recursive acronym for PHP: Hypertext Preprocessor ) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.'),
(8, 'What is ChatBot', 'A chatbot is a software application used to conduct an on-line chat conversation via text or text-to-speech, in lieu of providing direct contact with a live human agent.'),
(9, 'hie', 'Hi there, how can I help you ? :)'),
(10, 'hello', 'Hi there, how can I help you ? :)'),
(11, 'how are you', 'I am good. You can ask me query related to placement?'),
(12, 'good day', 'Hi there, how can I help you ? :)'),
(13, 'what are you', 'I am tcp, the chatBot of this application.'),
(14, 'what topic can I ask', 'You can ask me about something related to this website.'),
(15, 'what is your name', 'I am tcp, the chatBot of this application.'),
(16, 'okay ', 'i\'m glad to help you.'),
(17, 'ok', 'i\'m glad to help you.'),
(18, 'k', 'i\'m glad to help you.'),
(19, 'what is umit?', 'Usha Mittal Institute of Technology(UMIT) is an engineering college in mumbai affiliated to SNDT Women\'s University.'),
(20, 'what is tpc?', 'Training And Placement Cell (TPC). Provide training and placement to the students of umit.'),
(21, 'UMIT', 'Usha Mittal Institute of Technology(UMIT) is an engineering college in mumbai affiliated to SNDT Women\'s University.'),
(22, 'TPC', 'Training And Placement Cell (TPC). Provide training and placement to the students of umit.');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(255) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `companyname` varchar(20) NOT NULL,
  `pwd` longtext NOT NULL,
  `managerfname` varchar(15) NOT NULL,
  `managerlname` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active',
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `uname`, `companyname`, `pwd`, `managerfname`, `managerlname`, `address`, `phone`, `email`, `website`, `status`, `secque`, `secans`, `time`, `added_time`) VALUES
(1, 'TCS123', 'TCS', '4f49720f9658150681629132bb2398b3', 'poorva', 'kalekar', 'Mumbai, Maharashtra', '8967879890', 'poorvakalekar@gmail.com', 'https://www.tcs.com/', 'active', 'Which is your Favourite Mobile Company?', 'OnePlus', '2024-05-24 20:55:48', '2024-05-24 20:56:58'),
(2, 'lenovo1', 'Lenovo', '8832789d759fea5db3e1c3411d7aecae', 'Pakhi', 'singh', '', '2334567789', 'pakhi@gmail.com', 'www.lenovo.in', 'Active', '', '', '2024-05-24 20:55:48', '2024-05-24 20:56:58'),
(3, 'Wipro123', 'Wipro', 'c8d7f74f6a9923ac6384f3ff363e7aa8', 'srusthi', 'jadhav', ' Block C, Sarjapur Main Rd, Doddakannelli, Bengaluru, Karnataka 560035', '9078767654', 'srusthijadhav@gmail.com', 'https://www.wipro.com/', 'active', '', '', '2024-05-24 20:55:48', '2024-05-24 20:56:58'),
(4, 'dhanu1', 'Police Gov', '8c573d3c10b1f8574dee32a4796dbaca', 'Sneha', 'Potle', 'nalasopara', '7867564534', 'sneha@gmail.com', 'www.police.com', 'Inactive', 'NO', 'NO', '2024-05-24 20:55:48', '2024-05-24 20:56:58'),
(5, 'vivo1', 'Vivo', '735539d6599b36208bddadd93351e6c9', 'Harash', 'Patak', 'Malad east upper', '2345674567', 'vivo@gmail.com', 'www.vivo.com', 'active', '', '', '2024-05-24 20:57:54', '2024-05-24 20:56:58'),
(33, 'mommagic', 'mommagic', '74be16979710d4c4e7c6647856088456', 'a', 'b', 'dr.Ambedkar road/parel', '9321568813', 'khanvilkarpriya.22224@gmail.com', 'https://web.whatsapp.com/', 'inactive', '', '', '2024-05-24 20:59:35', '2024-05-24 20:56:58'),
(36, 'naveen', 'HSBC', 'a6043fef020f59bc8006d208a2361768', 'hhhh', 'hhhh', 'hhhhh', '2233556677', 'ss@gmail.com', 'www.hsbc.com', 'active', 'Which is your favourite food?', 'cake', '2024-05-24 20:59:23', '2024-05-24 20:59:23');

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
(1, 'admin1', 'Hello everybody this is the demo text on your feed youll receive further updates in the same way!!', '2023-09-05', '19:14:39'),
(2, 'vp', 'Infosys company has been added interested students can apply !!\r\n-Admin', '2023-11-05', '20:04:42'),
(3, 'admin1', 'More IT companies added! -Admin', '2023-10-07', '12:31:27'),
(4, 'admin1', 'Do not post unnecessary comments!!', '2023-10-25', '22:48:06'),
(5, 'admin1', '4 more companies added checkout!!!\r\n-Admin', '2023-09-25', '22:50:41'),
(6, 'admin1', 'Infosys interview is being held tomorrow at 10:00 AM in college campus', '2023-10-19', '11:10:10'),
(7, 'admin1', 'Hello All . Here Is An Announcment.', '2024-01-22', '21:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`, `name`, `email`, `phone`) VALUES
(1, 'ggggggggggggg', 'sak', 'a@gmail.com', 1122334455),
(2, 'xhgfipjln \r\n', 'sak', 'a@gmail.com', 2147483647),
(3, 'xhgfipjln \r\n', 'sak', 'a@gmail.com', 2147483647),
(4, 'nice work', 'sakshi', 'khan@email.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `status` varchar(100) DEFAULT 'active',
  `jobtype` varchar(200) DEFAULT NULL,
  `jobrole` varchar(200) DEFAULT NULL,
  `joblocation` varchar(200) DEFAULT NULL,
  `salary` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `cname`, `status`, `jobtype`, `jobrole`, `joblocation`, `salary`, `time`, `added_time`) VALUES
(1, 'TCS', 'active', 'FTO', 'data analysis', 'Delhi', '800000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(2, 'Wipro', 'inactive', 'internship', 'software engineer', 'All Pan', '450000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(21, 'Wipro', 'active', 'internship', 'Analyst', 'ALL PAN', 'no', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(3, 'TCS', 'active', 'FTO', 'App Developer', 'Mumbai', '450000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(4, 'Wipro', 'active', 'FTO', 'Analyst', 'Pune', '500000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(5, 'Vivo ', 'active', 'PPO', 'Web Developer', 'Mumbai', '6,70,000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(6, 'Lenovo', 'active', 'FTO', 'App Developer', 'Banglore', '500000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(7, 'Police Gov', 'active', 'PPO', 'App Developer', 'ALL PAN', '500000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(8, 'Lenovo', 'active', 'internship', 'Data Analyst', 'Pune', '4,50000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(9, 'Vivo ', 'active', 'internship', 'GET', 'ALL PAN', '4,50000', '2024-05-24 21:11:05', '2024-05-24 21:11:05'),
(22, 'mommagic', 'active', 'FTO', 'software engineer', 'ALL PAN', '8,70,000', '2024-05-24 21:11:05', '2024-05-24 21:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(100) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `query` text NOT NULL,
  `answer` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `uname`, `email`, `query`, `answer`, `time`, `added_time`) VALUES
(1, 'komal1', 'komal@gmail.com', 'how to apply job?', 'Go to apply you will find button to apply active jobs.', '2024-05-27 03:44:29', '2024-05-24 21:12:11'),
(2, 'naveen', 'khanvilkarsakshi.21@gmail.com', 'How to access study material?', 'First you need to login using your credentials. After successful login you will reach to student dasboard there you can access study material .', '2024-05-27 03:46:00', '2024-05-24 21:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(200) NOT NULL,
  `query` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(255) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `time1` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `companyname`, `date`, `time`, `added_time`, `description`, `time1`) VALUES
(1, 'Vivo india', '2024-03-20', '03:58:00', '2024-05-24 21:13:29', 'ppt session', '2024-05-24 21:13:29'),
(2, 'Vivo india', '2024-03-20', '01:23:00', '2024-05-24 21:13:29', 'coding test', '2024-05-24 21:13:29'),
(3, 'Vivo india', '2024-03-21', '01:24:00', '2024-05-24 21:13:29', 'ppt session', '2024-05-24 21:13:29'),
(4, 'Vivo', '2024-03-21', '16:00:00', '2024-05-24 21:13:29', 'Interview round for shortlisted students.', '2024-05-24 21:13:29'),
(5, 'Vivo', '2024-03-21', '16:00:00', '2024-05-24 21:13:29', 'email has been send by  company', '2024-05-24 21:13:29'),
(6, 'Wipro', '2024-05-17', '10:00:00', '2024-05-24 21:13:29', 'Interview round for shortlisted students.', '2024-05-24 21:13:29'),
(13, 'mommagic', '2024-05-24', '18:00:00', '2024-05-24 21:13:29', 'ppt session', '2024-05-24 21:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(100) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `prn` longtext NOT NULL,
  `pwd` longtext NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL,
  `yop` varchar(10) DEFAULT '',
  `ssc` varchar(100) DEFAULT NULL,
  `hsc` varchar(100) DEFAULT 'NULL',
  `cv_file` blob NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `uname`, `prn`, `pwd`, `fname`, `lname`, `email`, `phone`, `secque`, `secans`, `branch`, `percentage`, `yop`, `ssc`, `hsc`, `cv_file`, `time`, `added_time`) VALUES
(1, 'naveen', '21474844503647', '071192c8d403cbf6f58930672d1abfd0', 'Naveen', 'Pawar', 'naveenrs@gmail.com', '9868909876', 'Which is Favourite Food?', 'Gobi Manchurian', 'IT', '88', '2024', '86', '65', 0x524553554d452d4b617573747562682d315f3232313233315f3136333630392e706466, '2024-05-27 06:58:49', '2024-05-24 21:14:24'),
(2, 'mohith', '2147483647', '4342b324522f1854e5bf538b5b79b53c', 'Mohith', 'Shah', 'mohith@gmail.com', '9876789865', 'Which is your First Phone?', 'Samsung', 'DS', '82', '2019', '77', '68', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24'),
(3, 'priya1', '2147483647777788', '3e17f774c90d60dc17444c0423470e04', 'Priya', 'Khan', 'khanvilkarpriya.24@gmail.com', '9632629993', 'Which is your Favourite Mobile Company?', 'OnePlus', 'ENC', '82', '2025', '59', '82', '', '2024-05-24 21:17:23', '2024-05-24 21:14:24'),
(4, 'aaru', '2147483647556677', 'e565ac342472bcb7a539e35b2aabd521', 'Aarya', 'Jadhav', 'aaru@gmail.com', '7400126959', 'Which is your First Phone?', 'realme', 'IT', '90', '2025', '80', '90', '', '2024-05-27 06:33:22', '2024-05-24 21:14:24'),
(5, 'komal1', '2147483647', '32b53ec065c1159dc44e2d7d4294caa3', 'komal', 'kamble', 'komal.kk.1206@gmail.com', '7738494969', 'Which is your Favourite Mobile Company?', 'Apple', 'IT', '90', '2024', '72', '69', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24'),
(6, 'Sru', '2020220231', '180678f14685f808f9d792ef15d9d65e', 'Srushti', 'Jadhav', 'jsrushti08@gmail.com', '9987602530', 'Which is your First Phone?', 'Apple', 'IT', '80', '2024', '85', '90', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24'),
(40, 'rutu02', '20101611008999', 'f7b98b2da0fdc0f3bfe852ce7548ef18', 'rutu', 'khan', 'khanrutu02@gmail.com', '2233556677', '', '', 'ENC', '78', '2024', '80', '65', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24'),
(7, 'narayani1', '2147483647', '8ecba84b703fe6d27b4838d35c063b33', 'Narayani', 'Shelkhe', 'narayanishelke28@gmail.com', '6756453423', 'Which is Favourite Food?', 'No', 'IT', '90', '2024', '80', '20', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24'),
(8, 'Vibha1', '2147483647', '5271e303a7c3cba5195e5c86cca4059c', 'Vibha', 'Kotian', 'kotianvibha4@gmail.com', '9978675645', 'Which is Favourite Food?', 'Lolipop', 'CE', '70', '2024', '79', '66', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24'),
(9, 'krishna', '21212', '81dc9bdb52d04dc20036dbd8313ed055', 'Krishna', 'Gupta', 'gupta10krishna@gmail.com', '0993016879', 'Which is Favourite Food?', 'Any', 'IT', '90%', '2024', '80%', '79%', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24'),
(10, 'sakshi1', '21212', '2b74f124d93d105484bd00f8556fb0ee', 'sakshi', 'khanvilkar', 'khanvilkarsakshi.21@gmail.com', '4356346346', 'Which is Favourite Food?', 'Any', 'DS', '90%', '2024', '80%', '79%', '', '2024-05-24 21:14:24', '2024-05-24 21:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `study_materials`
--

CREATE TABLE `study_materials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `file_url` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_materials`
--

INSERT INTO `study_materials` (`id`, `title`, `category`, `description`, `file_url`, `time`, `added_time`) VALUES
(1, 'Cracking the Coding Interview', '', 'A comprehensive book covering technical interview preparation with coding exercises and strategies.', 'http://git_hub/cracking_the_coding_interview.com', '2024-05-24 21:16:53', '2024-05-24 21:16:53'),
(2, 'LeetCode Practice Guide', '', 'A collection of LeetCode problems categorized by topic for focused practice.', 'https://leetcode.com/problemset/', '2024-05-27 04:29:58', '2024-05-24 21:16:53'),
(3, 'System Design Primer', '', 'A guide to designing large-scale systems, covering topics like scalability, availability, and performance.', 'https://www.youtube.com/watch?v=1_Z7qhbJpV4', '2024-05-27 04:35:11', '2024-05-24 21:16:53'),
(4, 'Algorithms by Robert Sedgewick and Kevin Wayne', '', 'A book on algorithms and data structures with detailed explanations and examples in Java.', 'https://www.geeksforgeeks.org/practice-for-cracking-any-coding-interview/', '2024-05-27 04:24:47', '2024-05-24 21:16:53'),
(5, 'Cracking the Coding Interview', '', 'A comprehensive book covering technical interview preparation with coding exercises and strategies.', 'http://www.crackingthecode.com/cracking_the_coding_interview.pdf', '2024-05-24 21:16:53', '2024-05-24 21:16:53'),
(6, 'LeetCode Practice Guide', '', 'A collection of LeetCode problems categorized by topic for focused practice.', 'http://www.leetcode.com/leetcode_practice_guide.pdf', '2024-05-24 21:16:53', '2024-05-24 21:16:53'),
(8, 'Algorithms by Robert Sedgewick and Kevin Wayne', '', 'A book on algorithms and data structures with detailed explanations and examples in Java.', 'https://algs4.cs.princeton.edu/home/', '2024-05-27 04:32:18', '2024-05-24 21:16:53'),
(9, 'Dynamic Programming: A Top-Down Approach', '', 'A guide to dynamic programming with examples and practice problems.', 'http://www.gfg.com/dynamic_programming_guide.pdf', '2024-05-24 21:16:53', '2024-05-24 21:16:53'),
(10, 'Introduction to System Architecture', '', 'An overview of computer system architecture and design principles.', 'http://www.system_architecture.com/system_architecture_intro.pdf', '2024-05-24 21:16:53', '2024-05-24 21:16:53');

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
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `study_materials`
--
ALTER TABLE `study_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
