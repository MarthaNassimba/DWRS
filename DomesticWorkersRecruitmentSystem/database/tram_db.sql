-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2023 at 04:30 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tram_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

DROP TABLE IF EXISTS `tblbooking`;
CREATE TABLE IF NOT EXISTS `tblbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BookingNumber` bigint(12) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `maidId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `BookingNumber`, `userEmail`, `maidId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`, `LastUpdationDate`) VALUES
(1, 123456789, 'test@gmail.com', 1, '2020-07-07', '2020-07-09', 'What  is the cost?', 1, '2020-07-07 14:03:09', NULL),
(2, 987456321, 'test@gmail.com', 4, '2020-07-19', '2020-07-24', 'hfghg', 1, '2020-07-09 17:49:21', '2020-07-11 12:20:57'),
(3, 757456479, 'insubuga5@gmail.com', 20, '2023-06-01', '2023-07-01', 'hello', 1, '2023-05-28 03:46:57', '2023-05-28 05:26:46'),
(4, 476038247, 'insubuga5@gmail.com', 19, '2023-06-08', '2023-08-08', 'kgifiouogi', 2, '2023-05-28 14:58:31', '2023-05-30 15:47:07'),
(5, 762758869, 'insubuga5@gmail.com', 21, '2023-06-02', '2023-09-10', 'I would like to know more about this person.', 1, '2023-05-30 15:32:02', '2023-05-30 15:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `CreationDate`, `UpdationDate`) VALUES
(19, 'Cleaners', '2023-05-22 18:00:41', '2023-05-22 18:01:58'),
(20, 'Baby Sitters', '2023-05-22 18:02:17', NULL),
(21, 'Cook', '2023-05-22 18:02:41', '2023-05-22 19:21:01'),
(22, 'Shamba boys', '2023-05-22 18:02:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

DROP TABLE IF EXISTS `tblcontactusinfo`;
CREATE TABLE IF NOT EXISTS `tblcontactusinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Gaba', 'info@tram.com', '0750615389');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

DROP TABLE IF EXISTS `tblcontactusquery`;
CREATE TABLE IF NOT EXISTS `tblcontactusquery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Kunal ', 'kunal@gmail.com', '7977779798', 'I want to know you brach in Chandigarh?', '2020-07-07 09:34:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmaids`
--

DROP TABLE IF EXISTS `tblmaids`;
CREATE TABLE IF NOT EXISTS `tblmaids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(250) DEFAULT NULL,
  `categoryname` int(150) DEFAULT NULL,
  `maidview` longtext,
  `contact` varchar(250) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `tribe` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `nok` varchar(250) NOT NULL,
  `nokc` varchar(250) NOT NULL,
  `noka` varchar(250) NOT NULL,
  `img` varchar(120) DEFAULT NULL,
  `moslem` int(11) DEFAULT NULL,
  `christian` int(11) DEFAULT NULL,
  `catholic` int(11) DEFAULT NULL,
  `protestant` int(11) DEFAULT NULL,
  `seventhday` int(11) DEFAULT NULL,
  `other` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmaids`
--

INSERT INTO `tblmaids` (`id`, `names`, `categoryname`, `maidview`, `contact`, `education`, `tribe`, `age`, `address`, `nok`, `nokc`, `noka`, `img`, `moslem`, `christian`, `catholic`, `protestant`, `seventhday`, `other`, `RegDate`, `UpdationDate`) VALUES
(19, 'Martha Nassimba', 21, 'Structure your answer in a way that makes sense. Stick to the past-present-future format, and you\'re all good!\r\nKeep it relevant and brief (1-2 minutes max). No one wants to hear your whole life story.\r\nMention any of your top achievements and relevant work experiences.', '0783771698', 'Degree', 'Apese', '34', 'kireka', 'Kalyesubula Jimmy', '0784251680', 'Mukono', 'ceo.png', NULL, 1, NULL, NULL, NULL, NULL, '2023-05-22 18:53:14', '2023-05-30 03:55:56'),
(20, 'Nsubuga Ibrahim', 22, 'Greetings! I am Anna, 37 years old from the Philippines and a mother of 3 children. I have been working in Singapore for 8 years. I am good at taking care of children and elderly. I can cook simple dishes and i can follow recipes. I have experience with cats and dogs too. I am finishing my contract on the end of October this year and i am looking for a new family to work with. My current employer can be contactable for a reference and I look forward to hearing from you.', '0752170350', 'A-Level', 'Mutooro', '22', 'Mukono', 'Kalyesubula Jimmy', '0784251680', 'Mukono', 'ibra.png', 1, NULL, NULL, NULL, NULL, NULL, '2023-05-23 08:36:49', '2023-05-28 03:04:40'),
(21, 'Martha Nassimba', 20, 'Structure your answer in a way that makes sense. Stick to the past-present-future format, and you\'re all good!\r\nKeep it relevant and brief (1-2 minutes max). No one wants to hear your whole life story.\r\nMention any of your top achievements and relevant work experiences.', '0752170350', 'O-Level', 'Mutooro', '22', 'kireka', 'Kalyesubula Jimmy', '0784251680', 'Mukono', 'maid6.webp', NULL, NULL, NULL, NULL, NULL, 1, '2023-05-29 21:16:37', NULL),
(22, 'Nakigozi Remah', 21, 'Structure your answer in a way that makes sense. Stick to the past-present-future format, and you\'re all good!\r\nKeep it relevant and brief (1-2 minutes max). No one wants to hear your whole life story.\r\nMention any of your top achievements and relevant work experiences.', '0783771698', 'Degree', 'Muluya', '29', 'kireka', 'Kalyesubula Jimmy', '0784251680', 'Mukono', 'ceo.png', NULL, 1, NULL, NULL, NULL, NULL, '2023-05-29 21:17:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

DROP TABLE IF EXISTS `tblpages`;
CREATE TABLE IF NOT EXISTS `tblpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'Privacy Policy', 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '										Tram Recruitment Company is Uganda\'s only platform through which home owners can hire a domestic worker online.<div>Our vision is to be the Uganda\'s largest aggregator for domestic maid bureaus; to build a place where anyone can come to discover and hire any domestic worker they want.</div><div><br></div><div style=\"text-align: center;\"><span style=\"font-weight: bold; text-decoration-line: underline; font-size: x-large; font-family: &quot;comic sans ms&quot;;\">5 ways we are different&nbsp;</span><br></div><div style=\"text-align: left;\"><span style=\"font-family: &quot;comic sans ms&quot;; font-weight: bold; font-size: large;\">We are professionals.</span></div><div style=\"text-align: left;\"><span style=\"font-family: &quot;comic sans ms&quot;; font-weight: bold; font-size: large;\">We are a technology company.</span></div><div style=\"text-align: left;\"><span style=\"font-family: &quot;comic sans ms&quot;; font-weight: bold; font-size: large;\">We are an aggregator.</span></div><div style=\"text-align: left;\"><span style=\"font-family: &quot;comic sans ms&quot;; font-weight: bold; font-size: large;\">We deliver great experience and value your time.</span></div><div style=\"text-align: left;\"><span style=\"font-family: &quot;comic sans ms&quot;; font-weight: bold; font-size: large;\">We hire smart and creative people.</span></div><div style=\"text-align: left;\"><span style=\"font-family: &quot;comic sans ms&quot;; font-weight: bold; font-size: large;\"><br></span></div>\r\n										'),
(11, 'FAQs', 'faqs', '																														<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test &nbsp; &nbsp;dsfdsfds</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

DROP TABLE IF EXISTS `tblsubscribers`;
CREATE TABLE IF NOT EXISTS `tblsubscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(4, 'harish@gmail.com', '2020-07-07 09:26:21'),
(5, 'kunal@gmail.com', '2020-07-07 09:35:07'),
(6, 'insubuga5@gmail.com', '2023-05-30 15:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

DROP TABLE IF EXISTS `tbltestimonial`;
CREATE TABLE IF NOT EXISTS `tbltestimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'test@gmail.com', 'I am satisfied with their service great job', '2020-07-07 14:30:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `EmailId` (`EmailId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Test', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '6465465465', '', 'L-890, Gaur City Ghaziabad', 'Ghaziabad', 'India', '2020-07-07 14:00:49', '2020-07-12 05:44:29'),
(2, 'Nsubuga Ibrahim', 'insubuga5@gmail.com', 'fb1eaf2bd9f2a7013602be235c305e7a', '0752170350', NULL, NULL, NULL, NULL, '2023-05-01 22:20:56', NULL),
(3, 'Nassimba Martha', 'mart2@gmail.com', '1722a28089f91b73fff8708c26800a5e', '0752170350', NULL, NULL, NULL, NULL, '2023-05-13 07:45:02', NULL),
(4, 'Nakazi Noor', 'nur@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0797298700', NULL, NULL, NULL, NULL, '2023-05-30 16:14:55', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
