-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 06:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taka_bazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(3) NOT NULL COMMENT 'Primary_key',
  `about_name` varchar(60) DEFAULT NULL,
  `about_designation` varchar(60) DEFAULT NULL,
  `about_fb` text,
  `about_google` text,
  `about_twitter` text,
  `about_image` varchar(200) NOT NULL DEFAULT 'img_blank',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=publish, 1=unPublish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='abouts_111';

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_name`, `about_designation`, `about_fb`, `about_google`, `about_twitter`, `about_image`, `status`) VALUES
(1, 'Md Nasim', 'Founder & CEO at Ralit Soft', 'https://www.facebook.com/mdnasim.info', 'http://ralitsoft.com/', 'http://ralitsoft.com/', 'ap/images/about_img/hFeS6b5xhuHYuehWwzFM.jpg', 1),
(2, 'Yamin Alam Sarker', 'Software Developer', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'ap/images/about_img/ABEcHaEbwiSQhOHkjGuS.jpg', 1),
(3, 'Farhan Tanvir Kousik', 'Senior Software Developer', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'ap/images/about_img/SMs3Vh7UeJCZaRNLjBip.jpg', 1),
(4, 'Md Mizan', 'Software Engineer', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'ap/images/about_img/otWQYbJHQ1BrtlfqrZeV.jpg', 1),
(5, 'Nazmus Sakib', 'Senior Software Develooper', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'http://ralitsoft.com/team', 'ap/images/about_img/j5D9GbFXUjQQVIkc8qJD.jpg', 1),
(6, 'kamrul hasan', 'Programmer', 'http://ralitsoft.com/', 'http://ralitsoft.com/', 'http://ralitsoft.com/', 'ap/images/about_img/3eName9GU1eEtBdH8Y1p.jpg', 1),
(7, 'sakib', 'Programmer', 'sdf', 'fsd', 'dfsd', 'img_blank.jpg', 1),
(8, 'jannat', 'kjlk', 'kjklj', 'klj', 'kj', 'ap/images/about_img/nURfNBax7R8QkL9aKv2M.jpg', 1),
(15, 'ralif', NULL, NULL, NULL, NULL, 'img_blank', 1),
(16, 'nasim', NULL, NULL, NULL, NULL, 'img_blank', 1),
(17, 'rafi', NULL, NULL, NULL, NULL, 'img_blank', 0);

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` int(2) NOT NULL COMMENT 'PrimaryKey',
  `add_name` varchar(60) DEFAULT NULL,
  `add_type` tinyint(1) NOT NULL DEFAULT '1',
  `add_desc` text,
  `add_image_url` varchar(200) DEFAULT NULL,
  `add_link` varchar(300) DEFAULT NULL COMMENT 'webSite_outGoing_link',
  `add_status` tinyint(1) DEFAULT NULL COMMENT '0=unPublish, 1=publish',
  `add_company_name` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='advertises_11';

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`id`, `add_name`, `add_type`, `add_desc`, `add_image_url`, `add_link`, `add_status`, `add_company_name`, `created_at`, `updated_at`) VALUES
(1, 'Bank Information', 1, 'ppppppp ppppppppp           pppppppppppp', 'ap/images/advertise/CFnJLmMaYrcpaiAZxIpM.jpg', 'laravel.com/docs/5.4/eloquent', 0, 'Ralit Soft', NULL, NULL),
(2, 'Vertego Information See', 1, 'ghg fd df dsf sdf df df dsf df', 'ap/images/advertise/GCUj7ANeulu1NVJbPijM.png', 'vnv.in/products.htm', 1, 'Ralit Soft', NULL, NULL),
(3, 'fdgd', 2, 'fdgdfgdf', 'ap/images/advertise/LhaodBAFwShJlz8opNrA.png', 'dfgdf', 1, 'dfgdfg', NULL, NULL),
(4, 'Ralit Group', 2, 'Ralit Group', 'ap/images/advertise/k6NlrGCrJuYXvBGIKHYG.png', 'ralitsoft.com', 1, 'Ralit Group', NULL, NULL),
(5, 'The New Hope', 2, 'The New Hope', 'ap/images/advertise/beYosmTzDp0i1ygmCNtq.png', 'thenewhopebd.com', 1, 'The New Hope', NULL, NULL),
(6, 'dfdddf', 3, 'dfsdfsdf sdf sdf sdfsdf', 'ap/images/advertise/y7sTqGlKrM8YHyQhg6CP.png', 'others.com', 1, 'Others Rough', NULL, NULL),
(7, 'dsfsd', 2, 'sdfsd', 'ap/images/advertise/BKbjzR0XwcNRjZwxIeqd.gif', 'fsdf', NULL, 'dfsd', NULL, NULL),
(8, 'ykjh', 3, 'hjkh hkj', 'ap/images/advertise/y3ukVRGN93h8QDiZmDM6.jpg', 'hjkhjk', NULL, 'kjhjk', NULL, NULL),
(9, 'ppppppppppp', 3, 'ppppppppppp ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp ppppppppppppppppppp pppppppppppp', 'ap/images/advertise/jSrTm9FFjirvbfUZn8me.png', 'pppppppp', NULL, 'ppppp', NULL, NULL),
(10, 'hgfhfg', 3, 'fgh fgh fhgg fgh fgh fgh gfgdfgdsf df', 'ap/images/advertise/Xel9IAcInQhZH0oRH429.png', 'gfhfghfghfg', 1, 'hgfghfghfgh', NULL, NULL),
(11, 'uyhjghjghj', 2, 'dsfsd fdsfsd ds ds sd', 'ap/images/advertise/yrRHaXN8MQiHxuzox61s.jpg', 'www.ralitsoft.com', 1, 'Ralit Soft', NULL, NULL),
(12, 'Dream Land', 2, 'Dream Land Company Ltd', 'ap/images/advertise/rHUuVwPweItDUBJy8bc6.png', 'dreamland.com', NULL, 'Dream Land', NULL, NULL),
(13, 'Bank Information', 3, 'sdfsd', 'ap/images/advertise/pptHJc3lGMK9vlx5nHXs.png', 'dreamland.com', 1, 'Dfsd', NULL, NULL),
(14, 'ggggg', 3, 'gggg', 'ap/images/advertise/dsKWjDJV3aAp57VGLEdg.jpg', 'gggg.com', NULL, 'gggg', NULL, NULL),
(15, 'mmm', 2, 'mmmm', 'ap/images/advertise/wUqrq2LBQKTuBtrt81wr.jpg', 'mmm.com', NULL, 'mmm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applyings`
--

CREATE TABLE `applyings` (
  `id` int(6) NOT NULL COMMENT 'PrimaryKey',
  `aply_name` varchar(40) DEFAULT NULL,
  `aply_mobile` varchar(11) DEFAULT NULL,
  `aply_email` varchar(256) DEFAULT NULL,
  `aply_location` varchar(200) DEFAULT NULL,
  `aply_company_name` varchar(100) DEFAULT NULL,
  `aply_position` varchar(60) DEFAULT NULL,
  `aply_year_transaction` int(8) DEFAULT NULL,
  `aply_trade_licence` varchar(60) DEFAULT NULL,
  `aply_monthly_income` int(6) DEFAULT NULL,
  `aply_loan_exit` varchar(100) DEFAULT NULL,
  `bank_id` int(3) NOT NULL COMMENT 'foreign_key_of_banks_table',
  `aply_status` tinyint(1) DEFAULT NULL COMMENT '0=success, 1=request, 2=pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aply_offering_type` smallint(2) DEFAULT NULL COMMENT '33=loans, 44=investments, 55=insurances, 77=cards',
  `investment_id` int(4) NOT NULL DEFAULT '0' COMMENT 'foreign_key_of_investments_table',
  `loan_id` int(4) NOT NULL DEFAULT '0' COMMENT 'foreign_key_of_loans_table',
  `insurance_id` int(4) NOT NULL DEFAULT '0' COMMENT 'foreign_key_of_insurances_table',
  `cards_id` int(4) NOT NULL DEFAULT '0' COMMENT 'foreign_key_of_cards_table'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='applyings_66';

--
-- Dumping data for table `applyings`
--

INSERT INTO `applyings` (`id`, `aply_name`, `aply_mobile`, `aply_email`, `aply_location`, `aply_company_name`, `aply_position`, `aply_year_transaction`, `aply_trade_licence`, `aply_monthly_income`, `aply_loan_exit`, `bank_id`, `aply_status`, `created_at`, `updated_at`, `aply_offering_type`, `investment_id`, `loan_id`, `insurance_id`, `cards_id`) VALUES
(1, 'yamin alam sarker yamin alam sarker', '01751300314', 'yamin@gmail.com', 'dhanmondi', 'Dhurbin Lab', 'Developer', 2017, '78978978978', 30000, '3 years', 1, 2, NULL, NULL, 44, 15, 0, 0, 0),
(2, 'Chapa Baj', '01777888754', 'virus@gmail.com', 'Kalabagan', 'Ralit Soft', 'System Analysis & Designer', 2017, '5645645', 15000, '2 years', 2, 0, NULL, NULL, 33, 0, 3, 0, 0),
(3, 'hgjghjgh', '5645645654', 'rterter@gmail.com', 'Rajshahi', 'dfksl', 'kjlkj', 2017, '6876876786786', 23456, NULL, 6, 2, NULL, NULL, 33, 0, 4, 0, 0),
(4, 'Raihan Talakdur', '01751300345', 'raihanA@gmail.com', 'Faridpur', 'fkjsfjsfjs', 'fsdfdk sdf sdfj fksd f', 2017, NULL, 76567567, '2019', 5, 0, NULL, NULL, 33, 0, 1, 0, 0),
(5, 'Kim Rafi', '01677788898', 'rafi@gamil.com', 'Norsingdi', 'kdjfakj', 'ksfjsk fdkf ', 2017, '432423423423423kjjk34', 23423, '2019', 8, 0, NULL, NULL, 44, 17, 0, 0, 0),
(6, 'dfd fdsfsda fsd', '4234234234', 'dfsdfsdfsd@gmail.com', 'dsfsdfsdfsdfs', 'dfsdfsdaf', 'fsdfsdfsdfsdfsd', 2017, '78978978978', 234234, '20129', 5, 0, '2017-07-09 18:00:00', NULL, 44, 18, 0, 0, 0),
(7, 'rwerwrwer rwer', '3453453', 'dgdfdfgdfgd@gmail.com', 'fgds dsfgdf gd', ' gdfgdfgsdf', 'gdfgdfgs fd gdfg', 2017, '5645645', 23423, '2022', 5, 2, '2017-07-09 18:00:00', NULL, 55, 0, 0, 2, 0),
(8, 'fsdfsdf', '4323423', 'dfdfgdg@fgdgf', 'dfgdfg', 'gdgd', 'gfdfgdf', 2017, 'dgdgf', 5345, 'terter', 8, 2, NULL, NULL, 44, 22, 0, 0, 0),
(9, 'fgfdgd', '546456456', 'tyrtyrtyty', 'trytry', 'trytryrtyrty546546', 'tryrtyrtyrt', 2017, '78978978978', 654645, '54645', 11, 2, NULL, NULL, 55, 0, 0, 1, 0),
(10, 'gfdgdfwerweq rweq rwqe rweq', '4543534', 'rwerwerwe', 'rwerwer', 'werwerwerwe', 'werewrwerwe', 2017, '78978978978', 442342, '324', 8, 2, NULL, NULL, 77, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `applying_bank`
--

CREATE TABLE `applying_bank` (
  `id` int(4) NOT NULL COMMENT 'primary_key',
  `applying_id` int(6) DEFAULT NULL COMMENT 'foreign_key',
  `bank_id` int(3) DEFAULT NULL COMMENT 'foreign_key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applying_bank`
--

INSERT INTO `applying_bank` (`id`, `applying_id`, `bank_id`) VALUES
(1, 1, 5),
(2, 2, 6),
(3, 1, 7),
(4, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(3) NOT NULL COMMENT 'PrimaryKey',
  `bank_name` varchar(60) DEFAULT NULL,
  `bank_image_url` varchar(300) DEFAULT 'no_image',
  `bank_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unPublish, 1=Publish',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='banks_22';

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `bank_image_url`, `bank_status`, `created_at`, `updated_at`) VALUES
(1, 'The City Bank Ltd.', 'pJ5Z4SxI3K47GYXEnu5O.jpg', 1, NULL, NULL),
(2, 'Prime Bank Ltd', 'b_52.png', 0, NULL, NULL),
(3, 'United Commercial Bank Limited hhh', 'b_53.png', 1, NULL, NULL),
(4, 'Standard Chartered Bank', 'b_54.png', 1, NULL, NULL),
(5, 'Dutch-Bangla Bank Limited', 'b_55.png', 0, NULL, NULL),
(6, 'AB Bank Limited', 'b_56.png', 1, NULL, NULL),
(8, 'Ralt Bnk Limited', 'i45mUdVA5y2ufNE4seMM.jpg', 1, NULL, NULL),
(10, 'Prime Bank Ltd', '8Rp3fBnkBjEaK0myp7H6.png', 0, NULL, NULL),
(11, 'hgffhf', '7HX0fMk6IaibqdHD8XzT.png', 1, NULL, NULL),
(12, 'rtet5 er tewr erterter', 'LqKnYImTrZQHJBhCxN06.png', 0, NULL, NULL),
(13, 'dfgdsg sdf sdf dsf sdf', 'ICn1AI4kjNjXy9gN5uPP.jpg', 0, NULL, NULL),
(14, 'dsfsdf sdf sdfsdf dsfsdfsdfsdf sd', 'lx7ocv6Ts4uLqigzgQss.png', 1, NULL, NULL),
(15, 'Pdgdfgdsfg df g dsfg dfsg dfg', '440ba6R8B4ETUg4JirZO.gif', 0, NULL, NULL),
(16, 'dfdfgdfgfdg dfgdf dfgdf', 'Gwil0XkkVh0NXf0YFrMQ.jpg', 0, NULL, NULL),
(17, 'hfgh gf dfg fg dfg fg dfg df', 'yVvwdlEPyfxY2rPKjZdq.jpg', 1, NULL, NULL),
(18, 'fgfd fgfd gf df dfg g gdfgdfgdfgdfg', 'VB4qFa2H0bR9su7C0mDn.png', 0, NULL, NULL),
(19, 'Ralt Bnk Limited', 'KOyDyhHau3Nk4xKImsvu.png', 1, NULL, NULL),
(20, 'dfgdfgdf gdfgdfgdf gdfg dfg', 'pFjZpJpjGN5CqfjxwTeC.png', 1, NULL, NULL),
(21, 'ijh hfg hsgdfgdf gdsf', 'kGakeUqwTn4oY5asbsHI.jpg', 0, NULL, NULL),
(22, 'ghfgh hfdg dfgd fg', '9ebmzEM9fB7AjzASTSC2.gif', 1, NULL, NULL),
(23, 'gffdg sdfg dfgdfgdfg ', 'n0Va7tKlOOhMFDdqkmQT.jpg', 1, NULL, NULL),
(24, 'sdfsd fsdfsdafsdf', 'dOMa2dA8MEEQf5QsK7th.jpg', 1, NULL, NULL),
(25, 'dsfsdfs dsf sdfds sdaf sd', 'rkJRVO0KEjY3HVWSSiJN.png', 1, NULL, NULL),
(26, 'Ralit Soft Bank', '7CTuPBydhbTCTBiPfVs8.jpg', 0, '2017-07-11 10:55:29', '2017-07-11 10:55:29'),
(27, 'Nasim Bank Limited', 'nUIaH1Ab6YgPUPrwjO40.gif', 1, '2017-07-11 11:22:54', '2017-07-11 11:22:54'),
(28, 'Ralt Bnk Limited', 'ap/images/banks/MsGH9DfFwkAJYfEUe7rT.png', 1, '2017-07-11 11:58:35', '2017-07-11 11:58:35'),
(29, 'yuikuy, io870 890 ,9890-p.', 'ap/images/banks/sd13ZCTOCbHrqAv6lPWk.jpg', 0, '2017-09-11 12:17:32', '2017-09-11 12:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(4) NOT NULL COMMENT 'Primary-Key',
  `blog_title` varchar(300) DEFAULT NULL,
  `blog_short_desc` text,
  `blog_long_desc` text,
  `blog_author_name` varchar(60) DEFAULT NULL,
  `blog_image` varchar(200) DEFAULT NULL,
  `blog_hit_count` int(6) DEFAULT NULL COMMENT 'hit_count_always_increas',
  `blog_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=unPublish 1=publish,',
  `blog_control` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=pending, 1=publish',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bloguser_id` int(3) NOT NULL COMMENT 'Foreign-Key',
  `category_id` int(2) NOT NULL COMMENT 'Foreign-Key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='blogs_444';

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_short_desc`, `blog_long_desc`, `blog_author_name`, `blog_image`, `blog_hit_count`, `blog_status`, `blog_control`, `created_at`, `updated_at`, `bloguser_id`, `category_id`) VALUES
(1, 'Lets Go Work', '<p>sdfsdf-----fdgdf gdfgdfgdfgdf</p>', '<p>fdsdfsd fsdf sda fsdf---------</p>', 'kamrul hassan', 'fe/img/blog_pic/nEyh2AxftrBMLeKFYzzi.jpg', 1, 1, 1, '2017-09-12 11:07:19', '2017-09-07 16:10:06', 2, 6),
(2, 'dsfsdf', '<p>sdfsdf ======</p>', '<p>fdsdfsd fsdf sda fsdf =========</p>', 'kamrul hassan', 'fe/img/blog_pic/98j2TbCvVWa908dwwtAk.jpg', 19, 0, 0, '2017-09-09 10:46:37', '2017-09-07 16:10:35', 2, 1),
(3, 'fsdfsdf', '<p><strong>fdsf dsfsd fsdf sdf sdf</strong></p>', '<p>sdffsdf sdf sdf ewrwer gdfgsd &nbsp;fsdf sdfsd f</p>', 'kamrul hassan', 'fe/img/blog_pic/bgFpdfPsMrtBffZWB0dP.jpg', 4, 1, 0, '2017-09-10 03:08:00', '2017-09-07 16:13:00', 2, 2),
(4, 'Money For Life', '<p>Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd gdfgdfgdfgsdf</p>', '<p>Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;Life For Money eeresdf dsf sdf sdf sdfsdfsdfdsfsdfsdfsd&nbsp;</p>', 'kamrul hassan', 'fe/img/blog_pic/hbU11tlCUVDHx90vBx5N.jpg', 61, 1, 1, '2017-09-11 15:55:00', '2017-09-08 03:43:37', 2, 3),
(5, 'Marketing Needed For Any Product', '<p>fdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdf</p>', '<p>fdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdffdsrfwer werwe fds fdsf sdf sdf</p>', 'kamrul hassan', 'fe/img/blog_pic/2zaRdMavcCNwGRYBCMGG.jpg', 85, 1, 1, '2017-09-11 11:45:00', '2017-09-08 03:56:58', 2, 4),
(6, 'অফশোর ব্যাংকিংয়ে ৬ মাসে ৭,৫৪৪ কোটি টাকা ঋণ', '<p>কম সুদ হওয়ায় ব্যাংকের অফশোর ইউনিটের ঋণের দিকে ঝুঁকছেন ব্যবসায়ীরা। ফলে চলতি বছরের প্রথম ছয় মাসে (জানুয়ারি-জুন) এ ইউনিটের মাধ্যমে ঋণ বিতরণ হয়েছে ৭ হাজার ৫৪৪ কোটি টাকা। এতে ব্যাংক খাতের অফশোর ইউনিটের ঋণের স্থিতি দাঁড়িয়েছে ৪৬ হাজার ৮৭৪ কোটি টাকা।</p>', '<p>গত জুন পর্যন্ত অফশোর ইউনিটে খেলাপি ঋণ ছিল ৪২০ কোটি টাকা। এর মধ্যে এবি ব্যাংকের অফশোর ইউনিটের মাধ্যমে পাচার হওয়া ৩১৩ কোটি টাকা খেলাপি হয়ে গেছে। অফশোর ঋণ-সংক্রান্ত বাংলাদেশ ব্যাংকের প্রতিবেদন থেকে এসব তথ্য পাওয়া গেছে।</p><p>এবি ব্যাংকের ব্যবস্থাপনা পরিচালক মসিউর রহমান চৌধুরী&nbsp;<em>প্রথম আলো</em>কে বলেন, &lsquo;বাংলাদেশ ব্যাংকের নির্দেশে ঋণটি খেলাপি করা হয়েছে। তবে আদায় অব্যাহত আছে। আশা করছি, ডিসেম্বরের মধ্যে ঋণের বড় অংশ আদায় হবে।&rsquo;</p><p>অফশোর ব্যাংকিং হলো ব্যাংকের অভ্যন্তরে পৃথক ব্যাংকিং। বিদেশি কোম্পানিকে ঋণ প্রদান ও বিদেশি উৎস থেকে আমানত সংগ্রহের সুযোগ রয়েছে অফশোর ব্যাংকিংয়ে। স্থানীয় মুদ্রার পরিবর্তে বৈদেশিক মুদ্রায় হিসাব হয় অফশোর ব্যাংকিংয়ে। ব্যাংকের কোনো নিয়ম-নীতিমালা অফশোর ব্যাংকিংয়ের ক্ষেত্রে প্রয়োগ হয় না। কেবল মুনাফা ও লোকসানের হিসাব যোগ হয় ব্যাংকের মূল হিসাবে। বাংলাদেশে এখন পর্যন্ত অফশোর ব্যাংকিং পরিচালনার কোনো নীতিমালা হয়নি। ফলে ব্যাংকগুলো ইচ্ছেমতো ব্যবসা বাড়াচ্ছে। বর্তমানে অফশোর ব্যাংকিংয়ে ঋণের সুদ হার ৬ শতাংশের নিচে।</p><p>জানা গেছে, গত বছরের ডিসেম্বরে অফশোর ব্যাংকিং ঋণের পরিমাণ ছিল ৩৯ হাজার ৩৩০ কোটি টাকা। গত জুন শেষে তা বেড়ে দাঁড়িয়েছে ৪৬ হাজার ৮৭৪ কোটি টাকা। সেই হিসাবে ছয় মাসে ঋণ বেড়েছে প্রায় সাড়ে ৭ হাজার কোটি টাকা। গত বছরের জুন শেষে এ ঋণের পরিমাণ ছিল ৩৮ হাজার ৮৭ কোটি টাকা। সেই হিসাব ধরলে এক বছরের ব্যবধানে ঋণের পরিমাণ বেড়েছে ৮ হাজার ৭৮৭ কোটি টাকা।</p><p>বাংলাদেশ ব্যাংকসূত্রে পাওয়া তথ্য অনুযায়ী, অফশোর ব্যাংকিংয়ের আওতায় গত জুন পর্যন্ত বেসরকারি ব্যাংকগুলো ২৭ হাজার ৭২৬ কোটি, বিদেশি ব্যাংকগুলো ১৯ হাজার ৬১ কোটি এবং সরকারি বাণিজ্যিক ব্যাংকগুলো ৮৭ কোটি টাকা ঋণ বিতরণ করেছে। এর মধ্যে এইচএসবিসির মাধ্যমে ঋণ বিতরণ করা হয়েছে ১০ হাজার ২৪২ কোটি টাকা, স্ট্যান্ডার্ড চার্টার্ড ব্যাংকের মাধ্যমে ৬ হাজার ৩৮ কোটি টাকা, ইসলামী ব্যাংকের মাধ্যমে ৩ হাজার ৭২৬ কোটি টাকা। এ ছাড়া ব্র্যাক ব্যাংক ২ হাজার ২৮৭ কোটি, ইস্টার্ণ ব্যাংক ২ হাজার ৩০১ কোটি, প্রাইম ব্যাংক ২ হাজার ১৪৬ কোটি, দেশীয় মালিকানার দ্য সিটি ১ হাজার ৫৪৭ কোটি, ইউসিবি ১ হাজার ৫৪৬ কোটি, মার্কেন্টাইল ব্যাংক ১ হাজার ৪৪৫ কোটি এবং এবি ব্যাংক ১ হাজার ১৮৬ কোটি টাকা ঋণ বিতরণ করেছে।</p><p>এখন পর্যন্ত ৫১ ব্যাংক অফশোর ব্যাংকিংয়ের অনুমোদন নিলেও ৩৫ ব্যাংক ঋণ বিতরণ করছে। অফশোর ব্যাংকিং ইউনিটের ওপর কেন্দ্রীয় ব্যাংকের নিয়ন্ত্রণ অনেকাংশে কম। বাংলাদেশ ব্যাংক ১৯৮৫ সালে ব্যাংকগুলোর অফশোর ব্যাংকিং পরিচালনার জন্য একটি নীতিমালা জারি করে। এরপর ৩০ বছর পেরিয়ে গেলেও অফশোর ব্যাংকিংয়ের জন্য হয়নি পূর্ণাঙ্গ কোনো নীতিমালা। এ জন্য একটি পূর্ণাঙ্গ নীতিমালা প্রণয়নের কাজ চলছে। সেপ্টেম্বরেই তা জারি হতে পারে। নীতিমালা জারির আগে ব্যাংকগুলোর সঙ্গে আলোচনা করবে বাংলাদেশ ব্যাংক। বিশ্বব্যাপী অফশোর ব্যাংকিংয়ের মাধ্যমে অর্থ পাচারের বিষয়টি এখন ব্যাপকভাবে আলোচিত।</p>', 'kamrul hassan', 'fe/img/blog_pic/tkkbQPAOQap5CFHimdFu.jpg', 20, 1, 0, '2017-09-11 04:45:11', '2017-09-08 04:32:00', 2, 3),
(7, 'পুলিশের অভিযোগপত্র না নিয়ে র‍্যাবকে তদন্তের নির্দেশ', '<p>চট্টগ্রাম বন্দরে কোকেন জব্দের ঘটনায় পুলিশের দেওয়া অভিযোগপত্র গ্রহণ না করে র&zwj;্যাবকে অধিকতর তদন্তের নির্দেশ দিয়েছেন আদালত। রাষ্ট্রপক্ষের আবেদনের পরিপ্রেক্ষিতে শুনানি শেষে আজ বৃহস্পতিবার বেলা সাড়ে ১১টায় চট্টগ্রাম মহানগর দায়রা জজ মো. শাহেনূর এই আদেশ দেন।</p>', '<p>চলতি বছরের ১৪ মে আটজনকে আসামি করে আদালতে চোরাচালান আইনে অভিযোগপত্রটি দেয় গোয়েন্দা পুলিশ (ডিবি)। এরপর ৯ আগস্ট এটিকে ত্রুটিপূর্ণ জানিয়ে আদালতে নারাজি আবেদন করে রাষ্ট্রপক্ষ।</p><p>চট্টগ্রাম মহানগর সরকারি কৌঁসুলি মো. ফখরুদ্দিন চৌধুরী প্রথম আলোকে বলেন, পুলিশের দেওয়া অভিযোগপত্রটি র&zwj;্যাবের করা তদন্তের সঙ্গে সাংঘর্ষিক হওয়ায় ত্রুটিপূর্ণ উল্লেখ করে আদালতে নারাজি আবেদন করা হয়েছিল। মামলার এজাহারে থাকা আসামি নূর মোহাম্মদকে মামলা থেকে অব্যাহতির সুপারিশ করা হয়। অথচ একই ঘটনায় মাদকদ্রব্য নিয়ন্ত্রণ আইনে র&zwj;্যাবের দেওয়া অভিযোগপত্রে নূর মোহাম্মদকে আসামি করা হয়। রাষ্ট্রপক্ষের দেওয়া নারাজি আবেদনটি গ্রহণ করে আদালত র&zwj;্যাবকে অধিকতর তদন্তের নির্দেশ দিয়েছেন।</p><p>২০১৫ সালের ৬ জুন পুলিশের দেওয়া তথ্যের ভিত্তিতে কোকেন সন্দেহে চট্টগ্রাম বন্দরে সূর্যমুখী তেলের চালান জব্দ করে শুল্ক গোয়েন্দা ও তদন্ত অধিদপ্তর। এরপর ২৭ জুন তেলের চালানের ১০৭টি ড্রামের মধ্যে একটি ড্রামের নমুনায় কোকেন শনাক্ত হয়। বলিভিয়া থেকে আসা চালানটির প্রতিটি ড্রামে ১৮৫ কেজি করে সূর্যমুখী তেল ছিল। পরে পুলিশের অপরাধ তদন্ত বিভাগ (সিআইডি), মাদকদ্রব্য নিয়ন্ত্রণ অধিদপ্তরের রাসায়নিক পরীক্ষাগারসহ চারটি পরীক্ষাগারে তেলের চালানের দুটি ড্রামের (৯৬ ও ৫৯ নম্বর) নমুনায় কোকেন শনাক্ত হয়।</p><p>কোকেন জব্দের ঘটনায় চট্টগ্রামের বন্দর থানায় ২০১৫ সালের ২৭ জুন মাদকদ্রব্য নিয়ন্ত্রণ আইনে মামলা হয়। পরে আদালতের নির্দেশে চোরাচালানের অভিযোগে এই মামলায় বিশেষ ক্ষমতা আইনের ধারাও সংযোজন করা হয়।</p><p>কোকেন জব্দের ঘটনায় মাদক আইনে ২০১৫ সালের নভেম্বর মাসে নূর মোহাম্মদকে বাদ দিয়ে আটজনকে আসামি করে আদালতে অভিযোগপত্র দেওয়া হয়। চট্টগ্রাম নগর গোয়েন্দা পুলিশের (ডিবি) অতিরিক্ত উপকমিশনার মো. কামরুজ্জামানের দেওয়া অভিযোগপত্রটি গ্রহণ না করে র&zwj;্যাবকে দিয়ে অধিকতর তদন্তের নির্দেশ দেন আদালত। কিন্তু দুজন আসামির নাম যুক্ত করা ছাড়া (নূর মোহাম্মদ ও তাঁর ভাই মোস্তাক আহমেদ) র&zwj;্যাবের তদন্তেও চালানটির গন্তব্য বের করা সম্ভব হয়নি। র&zwj;্যাব চলতি বছরের ৩ এপ্রিল অভিযোগপত্র জমা দেয়। আদালত এটি গ্রহণ করেন। বর্তমানে চট্টগ্রাম মহানগর দায়রা জজ আদালতে মাদক আইনে আসামিদের বিরুদ্ধে অভিযোগ গঠনের অপেক্ষায় রয়েছে।</p><p>এদিকে চোরাচালান আইনে চলতি বছরের ১৪ মে তদন্ত কর্মকর্তা কামরুজ্জামান আটজনকে আসামি করে আদালতে অভিযোগপত্র দেন। অভিযোগপত্রে মামলার এজাহারভুক্ত আসামি এবং চালানটির আমদানিকারক প্রতিষ্ঠান খানজাহান আলী লিমিটেডের চেয়ারম্যান নূর মোহাম্মদকে অব্যাহতির সুপারিশ করা হয়।</p>', 'kamrul hassan', 'fe/img/blog_pic/SS9XXLfxABWrbrmzf0Mn.jpg', 89, 1, 1, '2017-09-12 13:14:26', '2017-09-08 10:29:02', 2, 5),
(8, 'মামলা কমে আসায় তদন্তও কমেছে’‘মামলা কমে আসায় তদন্তও কমেছে’‘মামলা কমে আসায় তদন্তও কমেছে', '<p>বাংলাদেশের দাবি, সরকার মানব পাচার প্রতিরোধ কার্যক্রম জোরদার করায় ও পাচার প্রতিরোধে যথাযথ পদক্ষেপ নেওয়ায় পরিস্থিতি আগের চেয়েও অনেক ভালো হয়েছে। সরকারের তদারকির কারণে এ-সংক্রান্ত ঘটনা ও মামলা কমে এসেছে। মামলা কমে আসার কারণে তদন্তও কমে এসেছে।&nbsp;</p>', '<p>বাংলাদেশের এই অবস্থার কথা তুলে ধরে যুক্তরাষ্ট্রে এ-সংক্রান্ত প্রতিবেদন পাঠানোর সিদ্ধান্ত নিয়েছে সরকার। একই সঙ্গে মানব পাচারসংক্রান্ত মামলা পরিচালনায় কেবল পাচারপ্রবণ জেলাগুলোতে বিশেষ পিপি নিয়োগ করতে আইন ও বিচার বিভাগকে অনুরোধ করেছে। মানব পাচারপ্রবণ নয়, এমন জেলায় মানব পাচারসংক্রান্ত মামলা পরিচালনার জন্য বর্তমানে কর্মরত পিপি বা তাঁর অধস্তন ব্যক্তিকে দায়িত্ব দিতে বলা হয়েছে।&nbsp;<br />সম্প্রতি প্রকাশিত যুক্তরাষ্ট্রের মানব পাচারবিষয়ক এক প্রতিবেদনে উল্লেখ করা হয়, বাংলাদেশে পাচার প্রতিরোধে যথাযথ পদক্ষেপ নিতে ব্যর্থতার কারণে পরিস্থিতি আগের চেয়েও খারাপ হয়েছে। সেখানে বলা হয়, মানব পাচার প্রতিরোধে সরকার ন্যূনতম মানও বজায় না রাখায় বাংলাদেশ &lsquo;টায়ার-২&rsquo; থেকে এক ধাপ নেমে &lsquo;টায়ার-২ ওয়াচ লিস্ট&rsquo; বা দ্বিতীয় স্তরের নজরদারিতে থাকা দেশের তালিকায় অন্তর্ভুক্ত হয়েছে।&nbsp;<br />মার্কিন পররাষ্ট্র দপ্তরের ওই বার্ষিক প্রতিবেদন বিষয়ে সরকারের অবস্থান ঠিক করতে গত সপ্তাহে স্বরাষ্ট্র মন্ত্রণালয় মানব পাচার বিষয়ে যাঁরা কাজ করেন, তাঁদের নিয়ে বৈঠক করে বাংলাদেশের অবস্থা নিয়ে আলোচনা করে। এ বিষয়ে যেসব জবাব পাঠানো হবে, তা-ও নির্ধারণ করা হয়।&nbsp;<br />বৈঠকে উপস্থিত একাধিক কর্মকর্তা প্রথম আলোকে বলেন, মানব পাচার প্রতিরোধে সরকার সব ধরনের পদক্ষেপ নিয়েছে। মানব পাচারসংক্রান্ত অভিযোগ তদন্তের জন্য পর্যাপ্ত জনবল রয়েছে। তদন্ত কার্যক্রম দেখার জন্য কয়েকটা ধাপ আছে, অভিযোগপত্র দেওয়া হয়েছে। অর্থাৎ, মামলা কমে যাওয়ার জন্যই তদন্ত কমে গেছে।&nbsp;<br />যুক্তরাষ্ট্রের প্রতিবেদনে মানব পাচার রোধ না করতে পারার কারণ হিসেবে প্রশিক্ষণের অপ্রতুলতা, পাচারের শিকার ব্যক্তিদের সুরক্ষার জন্য আনুষ্ঠানিক ব্যবস্থা, প্রতারণার ক্ষেত্রে প্রয়োজনীয় আইনানুগ ব্যবস্থা গ্রহণ না করা ও জনশক্তি রপ্তানির ক্ষেত্রে উচ্চ ফির বিষয় উল্লেখ করা হয়েছে। যুক্তরাষ্ট্র বাংলাদেশের সমালোচনা করে বলেছে, আগের বছরের তুলনায় মানব পাচারবিষয়ক অপরাধের তদন্ত, মামলা পরিচালনা ও অপরাধীর দণ্ড দেওয়া হচ্ছে না।&nbsp;<br />সরকারের পক্ষ থেকে বলা হচ্ছে, ২০১৬ তে সমুদ্রপথে অবৈধভাবে মালয়েশিয়া যাওয়ার পথে বাধা দেওয়ার কার্যক্রম জোরদার করার কারণেই মামলার সংখ্যা কমেছে। এ ছাড়া অভিযোগ তদন্তের জন্য পর্যাপ্ত জনবল রয়েছে। তদন্ত কার্যক্রম দেখার জন্য কয়েকটা ধাপ আছে। এর মধ্যে অনেক মামলার অভিযোগপত্র দেওয়া হয়েছে। অর্থাৎ, মামলা কমে যাওয়ার জন্যই তদন্ত কমে গেছে। এ বছর কোস্টগার্ড ও বিজিবির তৎপরতার কারণে সমুদ্রপথে পাচার ও মামলার সংখ্যা চার শর মতো কমেছে। মামলা করার পর মামলা পরিচালনার সময় অনেক ভিকটিমকে পাওয়া যায় না, সাক্ষী পাওয়া যায় না বা বিভিন্ন কারণে তারা মামলার বিষয় অস্বীকার করে।&nbsp;<br />জননিরাপত্তা সচিব কামাল উদ্দিনের মতে, মানব পাচার প্রতিরোধ ও দমন আইন বাস্তবায়নের জন্য বিধিমালা প্রণয়ন করা হয়েছে। ফলে মামলা কমেছে।&nbsp;<br />মানব পাচার প্রতিবেদনে বলা হয়েছে, সরকার শ্রমিক পাঠানোর ক্ষেত্রে অর্থ নিয়ন্ত্রণের লক্ষ্যে কয়েকটি দেশের সঙ্গে জনশক্তি রপ্তানি চুক্তি করেছে। পর্যাপ্ত ব্যবস্থা ছাড়াই অবৈধভাবে অতিরিক্ত অর্থ নিয়ে শ্রমিকদের বিদেশে পাঠানোর জন্য পরিচালিত এজেন্টগুলো মানব পাচারের জন্য ঝুঁকিপূর্ণ হয়ে দাঁড়িয়েছে।&nbsp;<br />এ বিষয়ে সরকার বলছে, রিক্রুটিং এজেন্সির মাধ্যমে ভুয়া কাজে যোগ দেয় ও ট্রাভেল এজেন্ট দ্বারা সাধারণ মানুষ পাচারের শিকার হয়। ইউরোপের শরণার্থীশিবিরে বাংলাদেশি ছিল। এজেন্সির বিরুদ্ধে উত্থাপিত অভিযোগ সুনির্দিষ্ট নয়, তবে কোনো কোনো ক্ষেত্রে ব্যক্তির বিরুদ্ধেও ব্যবস্থা নেওয়া হচ্ছে।&nbsp;<br />যুক্তরাষ্ট্র বলছে সরকারের শনাক্ত করা পাচারের শিকার ব্যক্তিদের সংখ্যাও কমে এসেছে। যেহেতু সরকার পাচারের শিকার ব্যক্তিদের সুরক্ষার জন্য আনুষ্ঠানিক ব্যবস্থা নেয়নি। ওই ব্যক্তিদের সুনির্দিষ্ট চাহিদা অনুসারে পুনর্বাসনে সরকার ব্যর্থ হয়েছে। পাচারের শিকার প্রাপ্তবয়স্ক পুরুষদের জন্য যথাযথ ব্যবস্থা নেওয়া হয়নি। যথাযথভাবে নজর না রাখায় এই ব্যক্তিরাই বারবার পাচারের শিকার হয়েছে বলে জানিয়েছে বেসরকারি সংগঠনগুলো।&nbsp;<br />সরকার এ বিষয়ে বলছে, বিদেশে ট্রানজিট হোমগুলোতে যথাযথভাবে সেবা প্রদান করা হয় না। হোমে অব্যবস্থাপনা নিয়ে বাংলাদেশের বক্তব্য, বেনাপোল সীমান্তে সেন্টার হোমের জায়গা চূড়ান্ত হলে তা বাস্তবায়ন করা হবে।&nbsp;<br />এসব বিষয়ে স্বরাষ্ট্রমন্ত্রী আসাদুজ্জামান খান কামাল প্রথম আলোকে বলেন, &lsquo;মানব পাচার অনেক কমে এসেছে। আমরা আমাদের অবস্থা যুক্তরাষ্ট্রের কাছে তুলে ধরব। মানব পাচার মামলা তদারকি কমিটির বৈঠক যেন নিয়মিত হয়, সেদিকে জোর দেব। মানব পাচার বিষয়ে কেউ অভিযোগ করলে দ্রুত ব্যবস্থা নেওয়া হবে।&rsquo;</p>', 'kamrul hassan', 'fe/img/blog_pic/Q6Xu8HJqHf1BtC2ofgqb.jpg', 1, 1, 0, '2017-09-10 08:20:07', '2017-09-08 10:30:28', 2, 5),
(9, 'মুখের দুর্গন্ধে কী করবেন?', '<p>প্রিয়জন বা বন্ধুর সঙ্গে কথা বলার সময়, ইন্টারভিউ বোর্ডে বা অপরিচিত কারও সঙ্গে পরিচিত হওয়ার মুহূর্তে মুখের দুর্গন্ধ আপনাকে বিব্রতকর পরিস্থিতিতে ফেলে দিতে পারে। এ জন্য কমে যেতে পারে সমাজে আপনার মেলামেশা, গ্রহণযোগ্যতা। আপনি আক্রান্ত হতে পারেন হীনম্মন্যতা বা বিষণ্নতায়।</p>', '<p>গবেষণায় দেখা গেছে, প্রধানত মুখের খাদ্যকণা থেকে বিপাকীয় পদ্ধতিতে নির্গত জীবাণুসমূহ থেকে অ্যামাইনো অ্যাসিড তৈরি হয়, যা এই দুর্গন্ধের জন্য দায়ী।</p><p>এ সমস্যায় আক্রান্ত রোগীদের তিন ভাগে ভাগ করা যায়। সত্যিকারের মুখের দুর্গন্ধযুক্ত রোগী, কৃত্রিম মুখের দুর্গন্ধযুক্ত রোগী ও মুখের দুর্গন্ধ সম্পর্কে আতঙ্কিত/ভীত রোগী। সত্যিকারের মুখের দুর্গন্ধযুক্ত রোগীদের ক্ষেত্রে</p><p><strong>পরামর্শ:</strong></p><ul><li>&nbsp;মাড়ির প্রদাহের চিকিৎসা,</li><li>&nbsp;মুখের ও দাঁতের অন্যান্য চিকিৎসা,</li><li>&nbsp;মুখের যত্নের হাতে-কলমে শিক্ষা এবং</li><li>&nbsp;মুখের স্বাস্থ্য সম্পর্কে পরামর্শদান।</li></ul><p><strong>দুর্গন্ধের কারণ হিসেবে সুনির্দিষ্টভাবে কয়েকটি কারণকে চিহ্নিত করা যায়:</strong></p><ul><li>প্রতিবার খাবার গ্রহণে মুখের ভেতরে খাদ্য আবরণ দাঁতের ফাঁকে, মাড়ির ভেতর জমে থেকে দন্তমূল সৃষ্টি করে ও তা থেকে মাড়ির প্রদাহ হয়</li><li>মুখের যেকোনো ধরনের ঘা বা ক্ষত</li><li>আঁকাবাঁকা দাঁত থাকার কারণে খাদ্যকণা ও জীবাণুর অবস্থান</li><li>&nbsp;মুখের ভেতরে ছত্রাকের সংক্রমণ</li><li>মুখের ক্যানসার</li><li>ডেন্টাল সিস্ট বা টিউমার</li><li>দুর্ঘটনার কারণে ফ্রেকচার ও ক্ষত</li><li>&nbsp;অপরিষ্কার জিহ্বা</li></ul><p>তা ছাড়া দেহের অন্যান্য রোগের কারণেও মুখে দুর্গন্ধ হতে পারে, যেমন পেপটিক আলসার বা পরিপাকতন্ত্রের রোগ, লিভারের রোগ, গর্ভাবস্থা, কিডনি রোগ, রিউমেটিক বা বাতজনিত রোগ, ডায়াবেটিস বা বহুমূত্র, হাইপার টেনশন বা উচ্চ রক্তচাপ, গলা বা পাকস্থলীর ক্যানসার, এইডস রোগ, হৃদ্&zwnj;রোগ, মানসিক রোগ, নাক, কান ও গলার রোগ ইত্যাদি।</p><p>মুখের ও দাঁতের সমস্যাগুলো দূর করার পরও যদি দুর্গন্ধ থেকে যায়, তবে দেহের অন্যান্য সাধারণ রোগের উপস্থিতির পরীক্ষাগুলো করিয়ে নেওয়া ভালো। এ ছাড়া জীবনযাপনের পদ্ধতিতে আনতে হবে কিছু পরিবর্তন।</p><p>হরেক ব্র্যান্ডের মাউথওয়াশ/ স্প্রে ইত্যাদি ব্যবহারের ফল কত দূর পাওয়া যায়, তা বলা মুশকিল। তবে মুখে দুর্গন্ধ হলে ঘরে বসে আপনি যা করবেন:</p><ul><li>একটি পরিষ্কার উন্নতমানের দাঁতের ব্রাশ ও পেস্ট দিয়ে দাঁতের সব অংশ ভেতরে-বাইরে পরিষ্কার করুন (তিন বেলা খাবারের পর)।</li><li>জিহ্বা পরিষ্কারের জন্য বাজারে স্টেইনলেস স্টিল অথবা প্লাস্টিকের সরঞ্জাম পাওয়া যায়।</li><li>যেকোনো ধরনের মাউথওয়াশ (ক্লোরোহেক্সিডিন-জাতীয়) দুই চামচ মুখের ভেতরে ৩০ সেকেন্ড রেখে ফেলে দিয়ে আবার অল্প গরম লবণ পানিতে কুলকুচি করুন প্রতিদিন দুবার সকালে ও রাতে খাবারের পর।</li><li>মুখের ভেতরে একটি লং বা এলাচির দানা রাখুন।</li><li>মূল খাবারের আগে বা পরে প্রতিবার সম্ভব হলে দাঁত ব্রাশ করুন অথবা ভালোভাবে কুলকুচি করে ফেলুন।</li><li>ধূমপান বা তামাকজাত দ্রব্য জর্দা, পান ইত্যাদি ত্যাগ করুন।</li></ul><p><strong>সাম্মানিক উপদেষ্টা, দন্ত বিভাগ, বারডেম হাসপাতাল</strong></p>', 'kamrul hassan', 'fe/img/blog_pic/TQxeyRCl9aDQeZDc27PA.jpg', 2, 1, 1, '2017-09-10 03:08:02', '2017-09-08 10:34:42', 2, 15),
(10, 'অপছন্দের বিষয়ে সন্তানকে আগ্রহী করবেন কীভাবে?', '<p>সব বিষয়ে সন্তানের পড়ার আগ্রহ নাও থাকতে পারে। অনেক সময় মা-বাবা তাঁদের পছন্দ-অপছন্দ সন্তানের ওপর চাপিয়ে দেন। কিছু বিষয় থাকে, সন্তান পড়তে না চাইলেও শিশুকালে পড়তে হবে। তখন আসলে করার কোনো কিছু থাকে না। বরং অভিভাবকদের চেষ্টা করতে হবে কতটা আকর্ষণীয়ভাবে তুলে ধরা যায় বিষয়টা। শেখানো যায় সন্তানকে।</p><p>এর জন্য প্রথমেই যা করতে হবে তা হলো সন্তানের মনের সব ধরনের ভয় দূর করতে হবে। বলবেন, চেষ্টা করে যেতে। তাঁকে ভালো করতেই হবে&mdash;এই ধরনের কোনো লক্ষ্য সামনে দিয়ে দেবেন না। তাহলে প্রত্যাশার চাপে ও আতঙ্কে আরও খারাপ করবে।</p>', '<p>এই বিষয় পড়ে পৃথিবীতে কারা কারা অনেক ভালো করছেন, তাঁদের কথা গল্পের ছলে শোনাতে পারেন। কিন্তু কোনো অবস্থাতেই তুলনা করবেন না। তাহলে সন্তানের মনে হীনম্মন্যতা গড়ে উঠবে। যতটা সহজভাবে বিষয়কে উপস্থাপন করা যায়, তা-ই করবেন। পড়াটির সঙ্গে বাস্তব জীবনের কোনো কিছুর মিল দেখাতে পারলে সহজে মনে রাখতে পারবে আপনার সন্তান।</p><p>কোনো কারণে পরীক্ষায় সেই নির্দিষ্ট বিষয়ে ফল খারাপ করলে বকাবকি না করে তাকে পরবর্তীতে ভালো করার জন্য অনুপ্রাণিত করতে হবে। একটানা না পড়িয়ে একটু বিরতি নিয়ে সন্তানকে পড়াবেন। উৎসাহ দেওয়ার পাশাপাশি সন্তান যেন পুষ্টিকর খাবার খায় ও পর্যাপ্ত ঘুমায় সেটাও খেয়াল রাখতে হবে।</p>', 'kamrul hassan', 'fe/img/blog_pic/Toxjvma9SVd3wGVbGI2o.jpg', 60, 1, 1, '2017-09-11 15:54:47', '2017-09-08 10:38:38', 2, 1),
(11, 'রোহিঙ্গাদের ত্রান সহায়তা দিতে কক্সবাজারে পৌঁছেছে তুরস্কের ফাস্ট লেডি', '<p>মায়ানমারের রাখাইন রাজ্য থেকে পালিয়ে আসা রোহিঙ্গাদের ত্রাণ সহায়তা দিতে কক্সবাজারে পৌঁছেছেন তুরস্কের ফার্স্ট লেডি এমিনি এরদোয়ান। আজ বৃহস্পতিবার সকাল পৌনে ১০টায় হযরত শাহজালাল আন্তর্জাতিক বিমানবন্দর থেকে প্রাইভেট বিমানযোগে তিনি কক্সবাজারে পৌছান।&nbsp;এ তথ্য নিশ্চিত করে পররাষ্ট্র মন্ত্রণালয় ।</p>', '<p>এর আগে ভোরে ঢাকায় পৌঁছান তুরস্কের এ ফার্স্ট লেডি। বিমানবন্দরে পররাষ্ট্র প্রতিমন্ত্রী মো. শাহরিয়ার আলম হযরত শাহজালাল আন্তর্জাতিক বিমানবন্দরে তাকে স্বাগত জানান। কক্সবাজার থেকে ফিরে এসে ফার্স্ট লেডি এমিনি এরদোয়ান প্রধানমন্ত্রী শেখ হাসিনার সঙ্গে সাক্ষাত করার কথা রয়েছে। এদিকে, রোহিঙ্গাদের ওপর নির্যাতনের তীব্র নিন্দা জানিয়ে গত শুক্রবার বিবৃতি দিয়েছেন তুর্কি প্রেসিডেন্ট রিসেপ তাইয়েপ এরদোয়ান। তিনি একে গণহত্যা বলেও উল্লেখ করেন।</p><p>এর আগে বৃহস্পতিবার বাংলাদেশের রাষ্ট্রপতি আবদুল হামিদকে ফোন করে তুরস্কের প্রেসিডেন্ট রোহিঙ্গাদের আশ্রয়ের ব্যাপারে বাংলাদেশকে সহায়তার অঙ্গীকার করেন। এছাড়া তিনি মায়ানমারের স্টেট কাউন্সিলর অং সান সু চিকেও হুঁশিয়ার করেছেন।</p>', 'kamrul hassan', 'fe/img/blog_pic/ro3jna44HoTwFZcE1Im0.jpg', 46, 1, 1, '2017-09-11 15:57:20', '2017-09-09 04:59:07', 2, 16),
(12, 'ড্যাফোডিল ও বৃটিশ কাউন্সিলের যৌথ উদ্যোগে শিক্ষক-শিক্ষার্থীদের স্বতঃস্ফূর্ত অংশগ্রহণের মধ্য দিয়ে ইনোভেটিভ টিচিং এন্ড লার্নিং এক্সপো ২০১৭ সমাপ্ত', '<p>শিক্ষক-শিক্ষার্থীদের স্বতঃস্ফূর্ত অংশগ্রহণও বর্ণিল আয়োজনের মধ্য দিয়ে ড্যাফোডিল ও বৃটিশ কাউন্সিলের যৌথ উদ্যোগে রাজধানীর ড্যাফোডিল টাওয়ারে ইনোভেটিভ টিচিং এন্ড লার্নিং এক্সপো ২০১৭ আজ (২৬ আগস্ট) শেষ হয়েছে।।</p>', '<p>ড্যাফোডিল এডুকেশন নেটওয়ার্ক ও বৃটিশ কাউন্সিল, বাংলাদেশ যৌথ উদ্যোগে আয়োজিত এক্সপোর সহযোগিতায় এবং স্ট্রেটিজিক পার্টনার হিসেবে রয়েছেন এনসিসি এডুকেশন (ইউকে), আইডিপি, ভেনচুরাস, বিএসএইচআরএম, এইচআরডিআই, বাংলাদেশ উন্মুক্ত বিশ্ববিদ্যালয়, টেন মিনিট স্কুল, বোল্ড ও জবসবিডি।<br />এক্সপোর সমাপনী ও পুরস্কার বিতরনী অনুষ্ঠানে প্রধান অতিথি হিসেবে উপস্থিত ছিলেন বাংলাদেশ সরকারের প্রধান তথ্য কমিশনার প্রফেসর ড. গোলাম রহমান।</p><p>ড্যাফোডিল ফ্যামিলির চেয়ারম্যান মোঃ সবুর খানের সভাপতিত্বে অনুষ্ঠানে বিশেষ অতিথি হিসেবে উপস্থিত ছিলেন এনসিসি এডুকেশন, ইউকে&rsquo;র প্রধান নির্বার্হী কর্মকর্তা এলান নরটন, ড্যাফোডিল ইন্টারন্যাশনাল ইউনিভার্সিটির উপাচার্য প্রফেসর ড. ইউসুফ এম ইসলাম, বাংলাদেশ উন্মুক্ত বিশ্ববিদ্যালয়ের উপ- উপাচার্য প্রফেসর ড. খোন্দকার মোকাদ্দেম হোসেন ও মোঃ মোশারফ হোসেন, সভাপতি, বিএসএইচআরএম। সমাপনী অনুষ্ঠানে আরো বক্তব্য রাখেন এক্সপো সাংগঠনিক সভাপতি মোহাম্মদ নূরুজ্জামান ও কো চেয়ার প্রফেসর ড. ফরিদ এ সোবহানী।</p><p>এক্সপোতে ছিল প্রজেক্ট প্রদর্শনী, ইনোভেটিভ টিচিং এওয়ার্ড, ইনোভেটিভ প্রজেক্ট এওয়ার্ড, প্লেনারী সেশান সেমিনার, ওয়ার্কশপ, রাউন্ড টেবিল ডিসকাশন ইত্যাদি। এতে দেশি বিদেশী শীর্ষস্থানীয় শিক্ষাবিদ বিশেষজ্ঞগণ সেমিনার. প্লেনারি সেশন ওয়ার্কশপ এবং রাউন্ড টেবিল আলোচনার মাধ্যমে তাদের উদ্ভাবিত বিষয়সমূহ তুলে ধরেন। অনুষ্ঠানে দেশের সর্বস্তরের শিক্ষার্থী ও শিক্ষক, শিক্ষাবিদ, শিক্ষাকর্মী, নীতিনির্ধারক ও শিক্ষা ব্যবস্থাপনার সাথে সংশ্লিষ্ট ব্যক্তিবর্গ অংশ নেন। ড্যাফোডিল ইন্টারন্যাশণাল স্কুলের শিক্ষার্থীদের মনোমুগ্ধকর সাংস্কৃতিক পরিবশনা সমাপনী অনুষ্ঠানকে প্রানবন্ত করে তোলে।</p><p>প্রধান অতিথির বক্তব্যে প্রধান তথ্য কমিশনার প্রফেসর ড. গোলাম রহমান বলেন, শিক্ষাই শক্তি। শিক্ষাই সবকিছু। শিক্ষা মানুষকে ক্ষমতাবান করে। তাই শিক্ষা নিয়ে আমাদেরকে বহুমুখী ভাবনা ভাবতে হবে। সেই চিরাচরিত নিয়মের শিক্ষা পদ্ধতির মধ্যে আটকে থাকলে চলবে না। নতুন নতুন পদ্ধতি উদ্ভাবন করতে হবে। এসময় গোলাম রহমান বলেন, একটা সময় বিশ্ববিদ্যাগুলোতে অল্প কিছু বিষয় পড়ানো হতো। এখন অনেক বিষয় পড়ানো হয়। অনেক বিষয়ের সঙ্গে অনেক নতুন নতুন কোর্স যুক্ত হয়েছে। এসবই শিক্ষাক্ষেত্রে উদ্ভাবন। এখন সময় এসেছে পাঠদান পদ্ধতিতে নতুন কিছু উদ্ভাবন করার।<br />অধ্যাপক গোলাম রহমান আরো বলেন, আমাদের দেশ নানা দিক থেকে উন্নত হচ্ছে, সেই সাথে চ্যালেঞ্জও বাড়ছে। চ্যালেঞ্জগুলোকে মোকাবেলা করতে হলে শিক্ষা ব্যবস্থায় পরিবর্তন আনতে হবে। আর শিক্ষা ব্যবস্থায় পরিবর্তন আনার জন্য এ ধরনের ইনোভেটিভ টিচিং ও লার্নিং এক্সপোর আয়োজন বেশি বেশি হওয়া উচিত। এসময় তিনি ড্যাফোডিল এডুকেশন নেটওয়ার্ক ও ব্রিটিশ কাউন্সিলকে ধন্যবাদ জানান, এ ধরনের এক্সপো আয়োজন করার জন্য।<br />অধ্যাপক গোলাম রহমান বলেন, শিক্ষা ব্যবস্থায় পরিবর্তন আনতে হলে আমাদের শিক্ষকদেরকে ইনোভেটিভ হতে হবে। কিন্তু দুর্ভগ্যজনক ব্যাপার হচ্ছে, আমাদের দেশে শিক্ষকদেরকে ইনোভেটিভ করার তেমন কোনো উদ্যোগ নেই। এসময় তিনি ড্যাফোডিল ইন্টারন্যাশনাল ইউনিভার্সিটির উদারহরণ টেনে বলেন, ড্যাফোডিল বিশ্ববিদ্যালয় নতুন শিক্ষকদের বিভিন্ন ধরনের প্রশিক্ষণ ও কর্মশালার আয়োজন করে থাকে। এতে শিক্ষকদের ইনোভেশন শক্তি তৈরি হয়।<br />সভাপতির বক্তব্যে মোঃ সবুর খান বলেন, তথ্যপ্রযুক্তির অগ্রযাত্রায় শিক্ষার কলা কৌশলে অনেক পরিবর্তন এসেছে, নিত্য নতুন উদ্ভাবন শিক্ষা পদ্ধতিকে বিকশিত করছে। এ পরিবর্তনের সাথে শিক্ষক ও শিক্ষার্থীদের পরিচয় ঘটানোর লক্ষ্যে দেশে প্রথম বারের মত এ এক্সপোর আয়োজন করা হয়েছে। তিনি আগামীতে দেশের ৬৪ টি জেলায় এ ধরনের এক্সপো আয়োজনের আমা প্রকাশ করেন এবং এ ক্ষেত্রে শিক্ষামন্ত্রণালয়ের সর্বাত্মক সহযোগিতা কামনা করেন।<br />এক্সপোতে মোট ইনোভেটিভ টিচিং এন্ড লানিং এর ওপর প্রায় শতাধিক প্রজেক্ট প্রদর্শিত হয়। এর মধ্যে শিক্ষার্থী ক্যাটাগরিতে প্রথম স্থান অধিকার করে ঢাকা রেসিডেন্সিয়াল মডেল কলেজের শিক্ষার্থী মোঃ ওমর ফারুক ও তার সহযোগী মোঃ শাহরিয়ার আলম ও বায়েজিদ খানের অক্সো মাস্ক&rdquo; প্রকল্প এবং দ্বিতীয় স্থান অধিকার করে সেন্ট জোসেফ হায়ার সেকেন্ডারী স্কুলের শিক্ষার্থী সবীর চন্দ্র গুপ্ত ও মাসরুর আহমেদ এর &rdquo;এনি ওয়ে টানেল&rdquo; প্রকল্প।<br />প্রকল্পের এক্সপোতে মোট ৪ টি ওয়ার্কশপ, ৬ টি সেমিনার, ২ টি প্লেনারী সেশান ও ১ টি রাউন্ডটেবিল অনুষ্টিত হবে। আইডিপি, টেন মিনিট স্কুল, আগামী এডুকেশন ফাউন্ডেশন ও পদক্ষেপ তাদের শিক্ষা সামগ্রী ও সেবা সমূহ প্রদর্শন করেন।</p><p><a href="http://www.bdcurrentnews24.com/2017/08/26/%E0%A6%A1%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AB%E0%A7%8B%E0%A6%A1%E0%A6%BF%E0%A6%B2-%E0%A6%93-%E0%A6%AC%E0%A7%83%E0%A6%9F%E0%A6%BF%E0%A6%B6-%E0%A6%95%E0%A6%BE%E0%A6%89%E0%A6%A8%E0%A7%8D%E0%A6%B8-2/" onclick="window.open(this.href, ''RalitSoft'', ''resizable=no,status=no,location=no,toolbar=yes,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=700,left=50,height=700,top=10''); return false;">See Relataed News</a></p>', 'kamrul hassan', 'fe/img/blog_pic/4eFbyxeRccpESPt7kiYj.jpg', 54, 0, 1, '2017-09-11 16:03:35', '2017-09-09 05:02:35', 2, 16),
(13, 'কোটি টাকা মূল্যের অবৈধ ধাতব পদার্থসহ আটক ১', '<p>কোটি টাকা মূল্যের ধাতব পদার্থ নিয়ে চাঁদপুর লঞ্চঘাটে ঢুকার সময় চাঁদপুর নৌ-পুলিশ ১ব্যাক্তিকে আটক করে। আটককৃত ব্যক্তি হল মুন্সিগঞ্জ জেলার শ্রীনগর থানার দয়হাটা গ্রামের মৃত মোফাসসেল হোসেন চৌধুরীর পুত্র দলিল উদ্দিন চৌধুরী (৪৯)।</p>', '<p>আজ বেলা ১২টার সময় পুলিশ অভিযান চালিয়ে কোটি টাকা মূল্যের দাতব পদার্থটি উদ্ধার করে। আটককৃত দলিল জানান, সে একটি এনার্জী বাল্ব কোম্পানীতে চাকুরী করে। তার পূর্ব পরিচিত এজেন্ট অপু ও জামাল তাকে চাঁদপুর আসতে বলে।</p><p>সে তাদের কথামত সোনারতরী লঞ্চে করে&nbsp;আজ সকালে চাঁদপুরে আসে। অপু ও জামাল ধাতব পদার্থটি&nbsp; প্যাকেট করে দলিলের কাছে এনে দিয়ে যায় ঢাকায় নিয়ে বিক্রি করার জন্য। পদার্থটি যে এত দামী এবং অবৈধ সে তা বুঝতে পারেনি।</p><p>চাঁদপুর নৌ থানার অফিসার ইনচার্জ আবুল হাসেম বলেন, প্রতিদিনের মতো আমরা আজ ডিউটি করতে নামি। এক পর্যায়ে দলিলের চলাফেরায় আমাদের সন্দেহ হলে তাকে সার্চ করি এবং মূল্যবান ধাতব পদার্থটি উদ্ধার করি। নৌ পুলিশ সুপারের সাথে আলোচনার পর থানায় সংবাদ দিলে থানা থেকে পুলিশ ফোর্স এসে দলিলকে আটক করে।</p><p>চাঁদপুর মডেল থানার পরিদর্শন মাহবুব মোল্লা জানায়, দ্রব্যটি অবৈধ ও দামী। খালি হাতে এই পয়সা স্পর্শ করলে মৃত্যুও হতে পারে। এক্সপোর্টের মাধ্যমে দ্রব্যটি পরীক্ষা-নীরিক্ষা করা হবে। বর্তমানে দলিল চাঁদপুর মডেল থানার পুলিশ হেফাজতে আছে। ধারনা করা হচ্ছে ধাতব পদার্থটি একটি ম্যাগনেট। যার মূল্য নির্ধারণ করা সম্ভব নয়।</p>', 'kamrul hassan', 'fe/img/blog_pic/iuQzJYwfsoJHde8DGsMI.jpg', 91, 1, 0, '2017-09-11 15:55:13', '2017-09-09 09:33:30', 2, 16),
(14, 'বিশ্বের যে কোনো প্রান্তে বিনা মূল্যে উন্নত শিক্ষা পে​ৗঁছে দেওয়ার স্বপ্ন নিয়ে কাজ করছেন সালমান খান', '<p>অনলাইন শিক্ষার প্ল্যাটফর্ম &lsquo;খান একাডেমি&rsquo;র প্রতিষ্ঠাতা সালমান খান। বাংলাদেশি বংশোদ্ভূত এই তরুণ শিক্ষাবিদ তাঁর ওয়েবসাইটের (www.khanacademy.org) মাধ্যমে বিনা মূল্যে শিক্ষার উপকরণ ও উৎসভিত্তিক সহায়তা দিয়ে আসছেন। বিশ্বের নানা প্রান্ত থেকে প্রায় চার কোটি নিবন্ধিত শিক্ষার্থী আছে এই অনলাইন স্কুলের। গত ২২ জুন বিশ্বব্যাংক আয়োজিত একটি অনুষ্ঠানে সালমান বলেছেন, নানা চড়াই-উতরাই পেরিয়ে কীভাবে গড়ে উঠল খান একাডেমি।</p>', '<p>২০০৪ সাল। বিজনেস স্কুল থেকে বের হয়ে তখন সদ্যই একটা প্রতিষ্ঠানে অ্যানালিস্টের চাকরি পেয়েছি। বিয়ে করেছি। নিউ অরল্যান্স থেকে আত্মীয়রা বাসায় বেড়াতে এসেছিল। তাদের কাছে শুনলাম, আমার ১২ বছর বয়সী কাজিন নাদিয়ার গণিতে কিছুটা সমস্যা হচ্ছে। নাদিয়াকে বললাম, তোমাকে আমি সাহায্য করতে পারি। সেও রাজি। নাদিয়া ফিরে যাওয়ার পর ফোনে, ম্যাসেঞ্জারে আমরা গণিত নিয়ে আলাপ শুরু করলাম।</p><p>একসময় সে ক্লাসের অন্যদের চেয়েও ভালো করতে লাগল। এবং আমি ওর চোখে মোটামুটি &lsquo;টাইগার কাজিন&rsquo; হয়ে উঠলাম। এটা আমার জন্য একটা ছোটখাটো আবিষ্কার ছিল। দুই হাজার মাইল দূর থেকেও কাউকে সহযোগিতা করা যায়&mdash;ব্যাপারটা খুব ভালো লাগল। আমি নাদিয়ার ছোট ভাইদেরও পড়াতে লাগলাম।</p><p>ছোট একটা প্রতিষ্ঠানে কাজ করতাম। এতটাই ছোট যে আমার বসের স্ত্রী যখন স্ট্যানফোর্ড ল স্কুলের অধ্যাপক হিসেবে যোগ দিলেন, তাঁর সুবিধার্থে আমাদের ছোট্ট অফিসটা উত্তর ক্যালিফোর্নিয়ায় স্থানান্তর করা হলো। প্রতিদিন অফিস থেকে বাড়ি ফিরে আমি ১৪-১৫ জন কাজিন ও পারিবারিক বন্ধুকে পড়াতাম।</p><p>লক্ষ করলাম, ছাত্রছাত্রীদের খুব সাধারণ কিছু বিষয়ে দুর্বলতা আছে। এই দুর্বলতা কাটাতে ওদের আরও অনুশীলন দরকার। তখন ওদের জন্য আমি একটা সফটওয়্যার তৈরি করলাম, যেটা অনুশীলন করতে সাহায্য করবে। সফটওয়্যারটা ওয়েবসাইটে তুলে দিয়েছিলাম। এক রকম কৌতুক করেই সেই ওয়েবসাইটটাকে বলতাম খান একাডেমি।</p><p>তখনো এর সঙ্গে কোনো ভিডিও ছিল না। তবে আশপাশের সবাই আমার এই পাগলামির কথা জানত। বলছি ২০০৬ সালের শেষ দিকের কথা। সে সময় একদিন একটা নৈশভোজের অনুষ্ঠানে গিয়েছি। আমন্ত্রণকারীর নাম জুলি। জুলি বলছিল, &lsquo;এতজন ছাত্রছাত্রীর পড়া তুমি সাজাও কীভাবে?&rsquo; আমি বললাম, &lsquo;হ্যাঁ, এটা ঠিক বলেছ। শুধু নাদিয়াকে পড়ানো সহজ ছিল। কিন্তু এতজনকে সামলানো কঠিন। দেখা যায় আমাকে একই জিনিস বারবার বোঝাতে হয়।&rsquo; তখন জুলিই বলল, &lsquo;তুমি তোমার ক্লাসগুলো ভিডিও করে ইউটিউবে আপলোড করছ না কেন?&rsquo;</p><p>রীতিমতো হেসেই উড়িয়ে দিলাম। বললাম, ইউটিউবে তো বিড়াল কীভাবে পিয়ানো বাজায়&mdash;এসব ভিডিও থাকে। জটিল গণিত শেখানোর জায়গা এটা না। তবু, কীভাবে যেন জুলির &lsquo;হাস্যকর&rsquo; বুদ্ধিটাই কাজে লাগালাম। কাজিনদের সমস্যার সমাধানগুলো এক করে ভিডিও বানিয়ে ইউটিউবে আপলোড করলাম। ওদের প্রতিক্রিয়া ছিল অবাক করার মতো। কেউ কেউ এটাও বলল, সামনাসামনি আমাকে দেখার চেয়ে ইউটিউবে দেখতেই নাকি বেশি ভালো লাগে!</p><p>কারণটা আমি ধরতে পেরেছিলাম। কেউ যখন কিছু বোঝায়, তখন সে একটা প্রতিক্রিয়া আশা করে। পাঁচ-দশ মিনিট কথা বলার পর জিজ্ঞেস করে, &lsquo;বুঝতে পারছ?&rsquo; হুট করে এই প্রশ্নটার উত্তর দেওয়া কঠিন। কারণ, শিক্ষকের কথা শুনতে শুনতেই আপনি হয়তো মনের অজান্তে আরও জটিল কিছু ভাবতে শুরু করেন। বেশির ভাগ ক্ষেত্রে ছাত্রছাত্রীরা ইতস্তত করে বলে, &lsquo;উমম...হ্যাঁ হ্যাঁ, বুঝেছি।&rsquo; কিন্তু এটা তাঁদের মধ্যে এক ধরনের মানসিক চাপ তৈরি করে। ভিডিও দেখায় সে &lsquo;ঝামেলা&rsquo; নেই।</p><p>ইউটিউবে &lsquo;ভিউ&rsquo;-এর সংখ্যা বাড়তে লাগল। কিছু ধন্যবাদ আর বেশ কিছু কটু কথা কমেন্ট বক্সে জমা হলো। এক মায়ের লেখা চিঠি ছিল মনে রাখার মতো। তিনি লিখেছেন, তাঁর দুই সন্তানই প্রতিবন্ধী। স্কুলের পড়ার সঙ্গে তাল মেলাতে পারে না। খান একাডেমিই তাদের একমাত্র ভরসা। এই মা তাঁর সন্তানদের নিয়ে প্রতি রাতে আমার এবং আমার পরিবারের জন্য প্রার্থনা করতেন। যে চাকরিটা করতাম, তাতে আর যা-ই হোক, মানুষের আশীর্বাদ পাওয়ার কোনো সম্ভাবনা ছিল না।</p><p>২০০৮ সাল। চাকরিতে মনোযোগ দেওয়াই আমার জন্য কঠিন হয়ে পড়ল। সকালে ঘুম থেকে উঠেই কী ভিডিও বানাব, আজ কে কী &lsquo;কমেন্ট&rsquo; করল&mdash;এসব নিয়ে ব্যস্ত হয়ে পড়তাম। বিশ্বের নানা প্রান্ত থেকে চিঠি আসত আর সেসব পড়ে আমি রোমাঞ্চিত হতাম।</p><p>একপর্যায়ে আমার স্ত্রীর সঙ্গে বসে সিদ্ধান্ত নিলাম। চাকরি ছেড়ে দিয়ে খান একাডেমি নামে একটা অলাভজনক প্রতিষ্ঠানের পেছনেই আমার পুরোটা সময় দেব।</p><p>যখন আপনি একটা উদ্যোগ নেবেন, দেখবেন একধরনের ভ্রান্ত আশাবাদ চেপে বসবে। আপনার মনে হবে, একটা দারুণ কিছু করছি, নিশ্চয়ই এটা পৃথিবীর বিরাট উপকারে আসবে আর অনেকেই অনুদান দিতে রাজি হবে। কিছুদিনের মধ্যেই বাস্তবতা বুঝতে পারবেন। &lsquo;আমরা আসলে এ ধরনের প্রকল্পে টাকা দিই না।&rsquo; কিংবা &lsquo;আমাদের এ বছরের ফান্ড তো দেওয়া হয়ে গেছে।&rsquo; এসব কথা আপনাকে শুনতে হবে। কিন্তু সাত থেকে নয় মাস ধরে এগুলো শোনা সহজ না।</p><p>তত দিনে আমাদের প্রথম সন্তান জন্ম নিয়েছে। খরচ বাড়ছে। মাঝরাতে ঘেমে-নেয়ে ঘুম ভেঙে যেত। ভাবতাম; নিজের সঙ্গে, পরিবারের সঙ্গে এটা আমি কী করলাম? একটা ভালো ক্যারিয়ার ছেড়ে এলাম? এই প্রচণ্ড হতাশার সময়ে ১০ হাজার ডলারের একটা অনুদান পেলাম। যিনি দিয়েছিলেন, তাঁর নাম অ্যান ডোর। আমি তাঁকে ই-মেইল করলাম, &lsquo;অ্যান তোমাকে অসংখ্য ধন্যবাদ। এটাই খান একাডেমির পাওয়া সবচেয়ে বড় অনুদান। খান একাডেমি ইট-কাঠ-পাথরের স্কুল হলে তোমার নামে একটা ভবন তৈরি করা যেত!&rsquo; অ্যান আমার সঙ্গে দেখা করতে চাইল।</p><p>একদিন একটা ভারতীয় রেস্তোরাঁয় আমরা বসলাম। অ্যান বলল, তুমি কী চাও?&rsquo; বললাম, বিশ্বের যেকোনো প্রান্তে যেকোনো মানুষের জন্য বিনা মূল্যে উন্নত শিক্ষা। আমি তাকে বিশ্বের বিভিন্ন প্রান্ত থেকে আসা চিঠিগুলো দেখালাম, সামনের দিনগুলোতে আমার পাঠক্রমের পরিকল্পনা দেখালাম। সে বলল, &lsquo;বেশ। আমার শুধু একটাই প্রশ্ন। তোমার আয়টা হবে কীভাবে?&rsquo; যতখানি গর্বের সঙ্গে বলা যায়, আমি বললাম, &lsquo;আয়ের কথা তো ভাবছি না!&rsquo;</p><p>ফেরার সময় অ্যানের কাছ থেকে একটা খুদে বার্তা পেলাম&mdash;&lsquo;যদিও আয়ের কোনো ইচ্ছে তোমার নেই। আমি তোমাকে এক লাখ ডলার উপহার দিচ্ছি।&rsquo;</p><p>হুম...দিনটা দারুণ ছিল! (হাসি)</p><p>কয়েক মাস পর, আমি একটা স্কুলের বাচ্চাদের গ্রীষ্মকালীন প্রকল্পে বক্তৃতা করছিলাম। এমন সময় অ্যানের কাছ থেকে আমার মোবাইলে প্রায় পাঁচ-ছয়টা মেসেজ এল । মেসেজের সারমর্ম এই&mdash;&lsquo;আমি &ldquo;অ্যাসপেন আইডিয়া ফেস্টিভ্যালে&rdquo; অংশ নিতে কলরোডোতে এসেছি। মঞ্চে বিল গেটস কথা বলছেন। তাঁকে প্রশ্ন করা হয়েছিল, &ldquo;সম্প্রতি কোন উদ্যোগ আপনাকে মুগ্ধ করেছে?&rdquo; প্রশ্নের উত্তরে গত পাঁচ মিনিট ধরে সে তোমার কথা বলছে!&rsquo;</p><p>জলদি কম্পিউটারে অ্যানের কথার প্রমাণ খুঁজতে শুরু করলাম। অনুষ্ঠানটার একটা ভিডিও পেলাম। দেখলাম সত্যিই তাই, বিল গেটস আমার আই কিউয়ের প্রশংসা করছেন! শুধু তা-ই নয়, তিনি বলছেন, &lsquo;এই লোকের স্ত্রী যেদিন তাঁকে চাকরি ছেড়ে দেওয়ার অনুমতি দিয়েছিলেন, নিশ্চয়ই সেটা তাঁর জন্য একটা বিশেষ দিন ছিল।&rsquo; আমি বিস্ময়ে হতবাক হয়ে গেলাম। বিল গেটস আমার ব্যক্তিগত জীবন সম্পর্কেও জানেন!</p><p>মনে আছে, সে দিন রাতে খাবার টেবিলে বসে আমি আর আমার স্ত্রী বোকার মতো একে অপরের দিকে তাকাচ্ছিলাম। ভাবছিলাম, এখন আমার কী করা উচিত? আমি কি বিল গেটসকে ফোন করব? তাঁর নম্বর কি ফোন ডিরেক্টরিতে থাকে!</p><p>দুই সপ্তাহ পর যখন আমি একটা ভিডিও বানানোর প্রস্তুতি নিচ্ছিলাম, একটা ফোন এল। ওপাশ থেকে বলা হলো, &lsquo;হ্যালো, ল্যারি কোলেন বলছি। আমি বিল গেটসের চিফ স্টাফ। তুমি হয়তো শুনেছ, বিল তোমার একজন ভক্ত। যদি ফ্রি থাকো, একবার এসে তাঁর সঙ্গে দেখা করবে? হয়তো আমরা একসঙ্গে কাজ করতে পারি।&rsquo; আমি ক্যালেন্ডারের দিকে কিছুক্ষণ হাঁ করে তাকিয়ে থেকে বললাম, &lsquo;হ্যাঁ, আগামী বুধবারে হতে পারে। এই ফাঁকে আমাকে নখ কাটতে হবে, কাপড় ধুতে হবে। বিল গেটসের সঙ্গে সাক্ষাৎ​ বলে কথা!&rsquo;</p><p>হঠাৎ করেই চাকরি ছেড়ে দেওয়ার ঠিক এক বছর পর আমি গেটস ফাউন্ডেশন ও গুগলের পক্ষ থেকে চার মিলিয়ন ডলার অনুদান পেলাম। এভাবেই আমরা পরিপূর্ণ একটা প্রতিষ্ঠান হয়ে উঠলাম।&nbsp;</p>', 'kamrul hassan', 'fe/img/blog_pic/dvd1eb6AfkjvcNpjMM8J.jpg', 2, 1, 0, '2017-09-11 11:48:47', '2017-09-10 04:21:21', 2, 1),
(15, 'efffffgfgffffffffffffffff', '<p>jhjjjjjjjjjjjjjjjjjjjjjujijljjui8jui8j</p>', '<p>jjjjjjjjjjjjjjjjjkkkkkkkkkkkkkkkkkk9juijukkk</p>', 'kamrul hassan', NULL, NULL, 1, 1, '2017-09-11 11:51:56', '2017-09-11 11:50:23', 2, 1),
(16, 'সবচেয়ে ভয়ানক সংকটে বিশ্ব', '<p>একের পর এক পরমাণু ও ক্ষেপণাস্ত্র পরীক্ষা চালিয়ে যাচ্ছে উত্তর কোরিয়া। এ থেকে তাদের রুখতে সামরিক পদক্ষেপ নেওয়ার হুমকি পর্যন্ত দিচ্ছে যুক্তরাষ্ট্র। এই অবস্থাকে সাম্প্রতিক সময়ের সবচেয়ে ভয়ানক বৈশ্বিক সংকট হিসেবে অভিহিত করলেন জাতিসংঘের মহাসচিব আন্তোনিও গুতেরেস। বলেছেন, বিষয়টি নিয়ে তিনি গভীর উদ্বিগ্ন। চীন ও রাশিয়ার বিরোধিতা সত্ত্বেও পিয়ংইয়ংয়ের ওপর কঠোর অবরোধ আরোপে আজ সোমবার জাতিসংঘের নিরাপত্তা পরিষদে ভোটাভুটির প্রস্তাব দিয়েছে যুক্তরাষ্ট্র। এমন প্রেক্ষাপটে ফ্রান্সের সাপ্তাহিক পত্রিকা লো জুর্নাল দু দিমঁশকে দেওয়া এক সাক্ষাৎকারে আন্তোনিও গুতেরেস তাঁর উদ্বেগের কথা জানালেন। গতকাল রোববার প্রকাশিত হয়েছে তাঁর সাক্ষাৎকারটি।</p>', '<p>সাক্ষাৎকারে জাতিসংঘ মহাসচিব বলেন, এখন পর্যন্ত হওয়া যুদ্ধগুলো অনেক ভাবনাচিন্তার পরই সংঘটিত হয়েছে। কিন্তু এমনও অনেক সংঘাত রয়েছে যেগুলো শুরু হয়েছে কাণ্ডজ্ঞানহীন কর্মকাণ্ডের দরুন। উত্তর কোরিয়ার দিকে ইঙ্গিত করেই তিনি এসব কথা বলেন।</p><p>গুতেরেস বলেন, গত কয়েক বছরে বিশ্বকে যেসব সংকট মোকাবিলা করতে হয়েছে তার মধ্যে এটাই সবচেয়ে মারাত্মক। এখন উত্তর কোরিয়াকে তাদের পরমাণু ও ক্ষেপণাস্ত্র কর্মসূচি বন্ধ করতে এবং নিরাপত্তা পরিষদের প্রস্তাব মানতে&nbsp; হবে। তিনি আরও বলেন, &lsquo;নিরাপত্তা পরিষদে আমাদের যেকোনো মূল্যে ঐকবদ্ধ থাকতে হবে। কূটনৈতিক উদ্যোগ সফল করার এটাই পথ।&rsquo;</p><p>ওয়াশিংটন উত্তর কোরিয়ার তেল ও বস্ত্র খাতের ওপর নিষেধাজ্ঞা আরোপের আহ্বান জানিয়ে জাতিসংঘে একটি খসড়া প্রস্তাব জমা দিয়েছে। এ ছাড়া কিম জং-উনের সম্পদ জব্দের প্রস্তাব দিয়েছে।</p><p>এদিকে জার্মান চ্যান্সেলর আঙ্গেলা ম্যার্কেল গতকাল বলেছেন, উত্তর কোরিয়ার পরমাণু কর্মসূচি বন্ধে কূটনৈতিক চাপ প্রয়োগে রাজি আছেন তিনি। পিয়ংইয়ংয়ের বিরুদ্ধে নতুন করে কঠোর অবরোধ আরোপে জাতিসংঘ নিরাপত্তা পরিষদে ভোটাভুটির জন্য যুক্তরাষ্ট্রের প্রস্তাবের পরপরই ম্যার্কেল তাঁর অবস্থানের কথা জানালেন।</p><p>ম্যার্কেল বলেন, উত্তর কোরিয়া সংকট নিয়ে গত সপ্তাহে ফ্রান্স, যুক্তরাষ্ট্র, চীন, দক্ষিণ কোরিয়া ও জাপানের নেতাদের সঙ্গে আলোচনা করেছেন। আজ তাঁর এ বিষয়ে রুশ প্রেসিডেন্ট ভ্লাদিমির পুতিনের সঙ্গে আলাপের কথা রয়েছে।</p><p>এদিকে উত্তর কোরিয়ার নেতা কিম জং-উন তাঁদের ষষ্ঠ ও সবচেয়ে বড় পরমাণু পরীক্ষার &lsquo;নিখুঁত সাফল্যের&rsquo; প্রশংসা করেছেন বলে গতকাল দেশটির রাষ্ট্রীয় গণমাধ্যমের খবরে বলা হয়েছে।</p>', 'kamrul hassan', 'fe/img/blog_pic/UQbaB4PN1BLf8gwqYrYD.jpg', 7, 1, 1, '2017-09-12 11:07:39', '2017-09-11 16:03:05', 2, 17),
(17, 'উড়োজাহাজে অচেতন হয়ে পড়লেন যাত্রীরা', '<p>ফ্লাইটটি পরিচালনার আগেই ধরা পড়েছিল এর শীতাতপ নিয়ন্ত্রণব্যবস্থা কাজ করছে না। আর এ কারণে উড্ডয়নে তিন ঘণ্টা বিলম্ব করে ফ্লাইটটি। উড়োজাহাজে ওঠার আগেই বিষয়টি জানতে পারেন যাত্রীরা। তবে যাত্রাপথে কোনো সমস্যা হবে না&mdash;এমন আশ্বাস দিয়ে ঝুঁকি নিয়েই উড্ডয়ন করে উড়োজাহাজটি। আর এতে অসুস্থ হয়ে পড়েন বেশির ভাগ যাত্রী। ঘটনাটি ঘটেছে সৌদি অ্যারাবিয়ান এয়ারলাইনসের একটি হজ ফ্লাইটে।</p>', '<p>সৌদি আরবের মদিনা থেকে পাকিস্তানের করাচি যাচ্ছিল এসভি-৭০৬ হজ ফ্লাইটটি। শীতাতপ নিয়ন্ত্রিত যন্ত্রের ত্রুটির কারণে উড্ডয়নে বিলম্ব হয় তিন ঘণ্টা। উড়োজাহাজে উঠে কিছুক্ষণের মধ্যে গরমে অতিষ্ঠ হয়ে পড়েন যাত্রীরা। অনেকে নিশ্বাস নিতে কষ্ট হওয়ায় অচেতন হয়ে পড়েন।</p><p>সামাজিক যোগাযোগমাধ্যমে উড়োজাহাজের ভেতরে তখনকার অবস্থার ভিডিও প্রকাশ করা হলে তা ভাইরাল হয়ে পড়ে। ভিডিওতে দেখা যায়, যাত্রীরা কাগজের লিফলেট পাখা বানিয়ে বাতাস করছেন। কেউ কেউ বের হয়ে যাওয়ার দরজার দিকে এগিয়ে যাচ্ছেন।</p><p>যাত্রীরা বলেন, ফ্লাইটটিতে বেশির ভাগ নারী ও শিশু যাত্রী ছিল। যাত্রীরা উড়োজাহাজে ঢোকার পর জানতে পারেন, প্লেনটির শীতাতপ নিয়ন্ত্রণের যন্ত্রটি কাজ করছে না। অনেকে এ বিষয়ে অভিযোগ করলে তাঁদের বলা হয়, অবতরণের আগে বিষয়টি ঠিক করে ফেলা হবে। তবে পুরো যাত্রাপথে এটি ঠিক করা হয়নি বলে যাত্রীরা জানান।</p><p>করাচি বিমানবন্দরের একটি সূত্র বিষয়টি নিশ্চিত করেছে।</p><p>সারা ইকবাল ও তাঁর স্বামী ছিলেন ফ্লাইটটিতে। তাঁদের বক্তব্যে ভেতরকার পরিস্থিতি কী হয়েছিল, তা কিছুটা জানা যায়। পাকিস্তানের পত্রিকা দ্য ডনকে দেওয়া এক সাক্ষাৎকারে সারা বলেন, &lsquo;সৌদি সময় অনুযায়ী দেড়টার প্লেন ছাড়ার কথা থাকলেও ফ্লাইটটি ছাড়তে দুই ঘণ্টা দেরি করবে বলে জানানো হয়। যখন অপেক্ষা করছিলাম, জানতে পারি বিমানের শীতাতপ নিয়ন্ত্রণব্যবস্থা কাজ করছে না। আর উড্ডয়নের জন্য তাপমাত্রা কমানো প্রয়োজন ছিল। এর কিছুক্ষণ পর হজফেরত&nbsp;৩০০ যাত্রীকে প্লেনে ওঠানো হয়। ঢুকতেই আমরা দেখি, উড়োজাহাজের কর্মীরা ঘামছেন। এরপর সাড়ে চারটার সময় উড়োজাহাজটি ছাড়ে। আমরা ভেতরে গরমে সেদ্ধ হয়ে যাচ্ছিলাম। উড্ডয়নের ৪৫ মিনিটের মধ্যে প্লেনের ভেতরে থাকা বয়স্ক ব্যক্তিরা অচেতন হয়ে পড়েন। তাপমাত্রা বেশি এবং সীমিত জায়গার কারণে অন্যদের মাথাও চক্কর দিচ্ছিল।&rsquo;</p><p>সারা আরও বলেন, &lsquo;যাঁরা অচেতন হয়ে পড়েছিলেন, তাঁদের সাহায্য করেছিলেন চিকিৎসকেরা। তবে পরে আমরা জানতে পারি যে ককপিটের শীতাতপ নিয়ন্ত্রণ যন্ত্রটি ঠিকমতোই কাজ করছে। তবে সবচেয়ে উদ্বেগের বিষয় হলো, নামার সময় এই অসুবিধার জন্য কর্তৃপক্ষ দায়ী নয়&mdash;কাগজে এমন সই নেওয়া হয় যাত্রীদের কাছ থেকে। যাঁরা ওই কাগজে সই করতে চাননি, তাঁদের সঙ্গে খারাপ ব্যবহারও করা হয়েছিল।</p><p>এ বিষয়ে যোগাযোগ করা হলে উড়োজাহাজ পরিবহন সংস্থার কেউই কোনো মন্তব্য করতে রাজি হয়নি।</p>', 'kamrul hassan', 'fe/img/blog_pic/bHBeaUqjjRXbQFRuLmcj.jpg', NULL, 1, 1, '2017-09-12 13:18:54', '2017-09-12 13:18:11', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `blogsubscribers`
--

CREATE TABLE `blogsubscribers` (
  `id` int(4) NOT NULL COMMENT 'Primary_Key',
  `subscriber_eamil` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogsubscribers`
--

INSERT INTO `blogsubscribers` (`id`, `subscriber_eamil`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fourtwenty@raligsoft.com', 1, '2017-09-08 14:47:08', '0000-00-00 00:00:00'),
(2, 'rafi@gmail.com\r\n', 1, '2017-09-08 14:47:49', '0000-00-00 00:00:00'),
(3, 'gourab@gmail.com', 1, '2017-09-08 15:15:23', '2017-09-08 15:15:23'),
(4, 'yamin_alam_sarker@ralitsoft.com', 1, '2017-09-08 15:15:54', '2017-09-08 15:15:54'),
(5, 'sakib@gmail.com', 1, '2017-09-11 15:59:10', '2017-09-11 15:59:10'),
(6, 'shohel@gmail.com', 1, '2017-09-12 13:13:15', '2017-09-12 13:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `blogusers`
--

CREATE TABLE `blogusers` (
  `id` int(3) NOT NULL COMMENT 'Primary-Key',
  `user_name` varchar(60) DEFAULT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_pass` varchar(100) NOT NULL COMMENT 'blog_user_password',
  `user_image` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=unPublish, 1=Publish',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='blogusers_888';

--
-- Dumping data for table `blogusers`
--

INSERT INTO `blogusers` (`id`, `user_name`, `user_email`, `user_pass`, `user_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ralit Soft', 'ralitsoft@gmail.com', 'asd', 'fe/img/blog_pic/tkkbQPAOQap5CFHimdFu.jpg\n', 0, '2017-09-08 14:15:48', '0000-00-00 00:00:00'),
(2, 'Ralit Host', 'ralithost@gmail.com', 'asd', NULL, 1, '2017-09-07 04:20:49', '0000-00-00 00:00:00'),
(3, 'Tuhin', 'tuhin@gmail.com', 'asd', NULL, 0, '2017-09-07 04:16:22', '0000-00-00 00:00:00'),
(4, 'Yamin Alam Sarker', 'yamin@gamil.com ', 'asd', 'fe/img/blog_pic/tkkbQPAOQap5CFHimdFu.jpg\n', 1, '2017-09-08 14:15:50', '2017-09-07 04:17:32'),
(5, 'Raihan Talukdar', 'raihan@gmail.com', 'asd', NULL, 1, '2017-09-07 04:18:38', '2017-09-07 04:18:38'),
(6, 'Sakib Al Alam', 'sakib@ralitsoft.com', 'asd\r\n', NULL, 1, '2017-09-07 04:20:08', '2017-09-07 04:19:17'),
(7, 'tomal', 'tomal@gmail.com', '123', NULL, 1, '2017-09-07 11:54:55', '2017-09-07 11:54:55'),
(8, 'rafi', 'rafi@gmail.com', '123', NULL, 1, '2017-09-07 11:57:32', '2017-09-07 11:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `cardcategories`
--

CREATE TABLE `cardcategories` (
  `id` int(2) NOT NULL COMMENT 'foreign_key',
  `cc_name` varchar(50) DEFAULT NULL,
  `cc_image_url` varchar(200) DEFAULT NULL,
  `cc_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=publish, 0=unPublish',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='card_cardcategories_88';

--
-- Dumping data for table `cardcategories`
--

INSERT INTO `cardcategories` (`id`, `cc_name`, `cc_image_url`, `cc_status`, `created_at`) VALUES
(1, 'ffdgdfgdf', 'ap/images/card_category/u2NFWgQ2wmrawdJLbI9V.gif', 1, '2017-07-11 12:14:58'),
(2, 'Classic Local (Master)', 'ap/images/card_category/W0MEOekEWIV9uhW31tHc.png', 1, '2017-07-12 14:06:17'),
(3, 'VISA Ralit New', 'ap/images/card_category/ABVZi7Ys97xo22uFHyuk.png', 0, '2017-07-18 03:58:28'),
(5, 'Classic Local (VISA)', 'ap/images/card_category/BvoFCXXLwWhEBeYvXszC.gif', 1, '2017-07-11 12:43:13'),
(6, 'VISA Classic Dual', 'ap/images/card_category/KuY7f9Vu8Vnrmfdk94oY.gif', 1, '2017-07-17 16:00:03'),
(7, 'Clasic Ralit Shop', 'ap/images/card_category/ovFgQEgplsvpGsa6dMrp.jpg', 1, '2017-07-18 04:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `carddebits`
--

CREATE TABLE `carddebits` (
  `id` int(3) NOT NULL COMMENT 'Primary_Key',
  `c_yearly_limit` int(8) NOT NULL,
  `c_activation_deposit` int(8) NOT NULL,
  `c_min_balance` int(8) NOT NULL COMMENT 'minimum_balance',
  `c_daily_limit_atm` int(6) NOT NULL COMMENT 'daily_limit_via_atm',
  `c_daily_limit_purchase` int(6) NOT NULL COMMENT 'daily_limit_via_purchase',
  `c_reward_installment` int(6) NOT NULL,
  `c_features_benefits` text,
  `c_eligibility` text,
  `c_requirements` text,
  `c_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=publish, 0=unPublish',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bank_id` int(3) NOT NULL COMMENT 'foreign_key',
  `cardcategorie_id` int(2) NOT NULL COMMENT 'foreign_key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='debit_cards_99';

--
-- Dumping data for table `carddebits`
--

INSERT INTO `carddebits` (`id`, `c_yearly_limit`, `c_activation_deposit`, `c_min_balance`, `c_daily_limit_atm`, `c_daily_limit_purchase`, `c_reward_installment`, `c_features_benefits`, `c_eligibility`, `c_requirements`, `c_status`, `created_at`, `updated_at`, `bank_id`, `cardcategorie_id`) VALUES
(1, 8800000, 5000000, 20000, 50000, 60000, 600, '<p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>', '<p>kkkkkkkkkkkkkkkkkkkk</p>', '<p>kkkkkkkkkkkkkkkkkkkk</p>', 1, '2017-07-17 14:30:37', '0000-00-00 00:00:00', 4, 2),
(2, 9000000, 400000, 400000, 60000, 650000, 800, NULL, NULL, NULL, 1, '2017-07-17 06:52:13', '0000-00-00 00:00:00', 6, 5),
(3, 50000000, 700000, 40000, 40000, 50000, 900, '<p>mmmmmmmmmmmmm</p>', '<p>mmmmmmmmmmm</p>', '<p>mmmmmmmmm</p>', 1, '2017-07-17 12:56:09', NULL, 8, 2),
(4, 7000000, 600000, 40000, 3000, 3000, 400, '<p>ggggggggggggggg</p>', '<p>ggggggggg</p>', '<p>ggggggggggggggg</p>', 0, '2017-07-17 15:27:46', NULL, 6, 5),
(5, 900000, 600000, 60000, 60000, 65000, 600, '<p>bbbbbbbbbbbbbbbbbbbb</p>', '<p>bbbbbbbbbbbbb</p>', '<p>bbbbbbbbbbbbbbbbbbbb</p>', 1, '2017-07-17 15:42:17', NULL, 3, 3),
(6, 500000, 40000, 35000, 50000, 50000, 350, '<p>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p>', '<p>vvvvvvvvvvvvvvvvvv</p>', '<ol><li>vvvvvvvvvvvvvv</li><li>vvvvvvvvvvvvvvv</li><li>vvvvvvvvvvvvvv</li></ol>', 1, '2017-07-17 15:47:40', NULL, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(3) NOT NULL COMMENT 'primary_key',
  `c_interest_per_day` float DEFAULT NULL,
  `c_interest_free_period` int(3) DEFAULT NULL,
  `c_over_limit_free` int(6) DEFAULT NULL,
  `c_cheque_process_free` float DEFAULT NULL,
  `c_late_payment_free` int(6) DEFAULT NULL,
  `c_features_benefits` text,
  `c_eligibility` text,
  `c_requirements` text,
  `c_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=publish, 0=unPublish',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bank_id` int(3) NOT NULL COMMENT 'foreign_key_of_banks_table',
  `cardcategorie_id` int(2) NOT NULL COMMENT 'foreign_key_of_cardcategorys_table'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='credit_cards_77';

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `c_interest_per_day`, `c_interest_free_period`, `c_over_limit_free`, `c_cheque_process_free`, `c_late_payment_free`, `c_features_benefits`, `c_eligibility`, `c_requirements`, `c_status`, `created_at`, `bank_id`, `cardcategorie_id`) VALUES
(1, 0.75, 45, 500, 0.75, 400, '<p>555555555555555555</p>', '<p>55555555</p>', '<p>5555555555555</p>', 1, '2017-07-12 12:15:44', 8, 1),
(2, 0.82, 50, 400, 2, 500, '<p>kk</p>', '<p>kk</p>', '<p>kk</p>', 0, '2017-07-13 05:56:40', 4, 5),
(3, 0.99, 60, 300, 0.75, 2000, '<p>kkkkkkkkkkkkkkkkkkkkkkk</p>', '<p>kkkkkkkkkkkkk</p>', '<p>kkkkkkk</p>', 1, '2017-07-13 05:31:44', 5, 3),
(4, 0.77, 60, 600, 0.66, 600, '<p>yyyyyyyyyyyyyyyyyy</p>', '<ol><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li><li>yyyyyyyyyyyyyyyyyyyyyyy</li></ol>', '<p>yyyyyyyyyyyyyy</p>', 0, '2017-07-12 16:27:11', 2, 3),
(5, 0.77, 75, 700, 0.75, 700, '<p>7777777777777777</p>', '<p>7777777</p>', '<p>7777777777</p>', 1, '2017-07-12 15:46:43', 11, 5),
(6, 0.88, 80, 800, 0.88, 800, '<p>pppppppppppppppppppppppppppppppppp</p>', '<p>ppppppppppppppppppppppppp</p>', '<p>ppppppppppppppppppppppppppppppppppppp</p>', 0, '2017-07-12 16:27:08', 19, 3),
(7, 0.55, 55, 500, 0.75, 200, '<p>ggggggggggggggggggg</p>', '<p>gggggggggggggg</p>', '<p>fgggggggggggggggg</p>', 1, '2017-07-12 15:45:19', 15, 2),
(8, 0.55, 55, 500, 0.55, 500, '<p>bbbbbbbbbbbbb</p>', '<p>bbbbbbbbbbbb</p>', '<p>vbbbbbbbbbbbbbb</p>', 1, '2017-07-12 15:45:50', 6, 5),
(9, 0.88, 45, 500, 0.45, 600, '<p>jhjhjhjhjhjhjhjhjhjhjhjhjhjhjhjh</p>', '<p>jhjhjhjhjhjhjhjhjhjh</p>', '<p>jhjhjhjhjhjhjhjhjh</p>', 1, '2017-07-12 15:48:31', 10, 2),
(10, 0.55, 55, 500, 0.55, 400, '<p>ttttttttttttttttttttttttttttttttttttttttttt</p>', '<p>ttttttttttt</p>', '<p>ttttttttttttttttttttttttttttttttttttttttttt</p>', 1, '2017-07-17 15:55:45', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL COMMENT 'Primary-Key',
  `category_name` varchar(60) DEFAULT NULL,
  `category_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=unPublish, 1=publish',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='categories_555';

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Education', 1, '2017-09-07 03:20:42', '0000-00-00 00:00:00'),
(2, 'Business', 1, '2017-09-07 03:20:50', '0000-00-00 00:00:00'),
(3, 'Finance', 1, '2017-09-07 04:20:44', '0000-00-00 00:00:00'),
(4, 'Marketing', 0, '2017-09-07 03:22:47', '0000-00-00 00:00:00'),
(5, 'Ralit Soft', 1, '2017-09-07 03:23:15', '0000-00-00 00:00:00'),
(6, 'Phychology', 0, '2017-09-07 04:20:13', '2017-09-07 02:35:00'),
(7, 'Product', 1, '2017-09-07 03:30:39', '2017-09-07 02:35:09'),
(8, 'hhhh', 1, '2017-09-07 03:18:50', '2017-09-07 02:35:25'),
(9, 'hhhh', 1, '2017-09-07 03:18:50', '2017-09-07 03:00:24'),
(10, 'hhhh', 0, '2017-09-07 03:29:53', '2017-09-07 03:14:35'),
(11, 'Cricket', 1, '2017-09-07 03:30:17', '2017-09-07 03:15:38'),
(12, 'Football', 1, '2017-09-07 03:30:27', '2017-09-07 03:23:43'),
(13, 'kkkk', 0, '2017-09-07 04:07:26', '2017-09-07 03:24:07'),
(14, 'rere', 1, '2017-09-07 11:40:47', '2017-09-07 11:40:41'),
(15, 'Medical', 1, '2017-09-08 10:33:53', '2017-09-08 10:33:53'),
(16, 'সারাদেশের খবর', 1, '2017-09-09 04:55:53', '2017-09-09 04:55:53'),
(17, 'Sakib Amer Blog', 1, '2017-09-11 16:02:13', '2017-09-11 16:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(2) NOT NULL COMMENT 'Primary-Key',
  `comment_desc` text,
  `comment_status` tinyint(1) DEFAULT '1' COMMENT '0=unPublish, 1=Publish',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `blog_id` int(4) NOT NULL COMMENT 'Foreign-Key',
  `user_id` int(3) NOT NULL COMMENT 'Foreign-Key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment_replay`
--

CREATE TABLE `comment_replay` (
  `id` int(6) NOT NULL COMMENT 'Primary-Key',
  `comment-replay_desc` text,
  `comment-replay_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=unPublish, 1=Publish',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `blog_id` int(4) NOT NULL COMMENT 'Foreign-Key',
  `user_id` int(3) NOT NULL COMMENT 'Foreign-Key',
  `comment_id` int(2) NOT NULL COMMENT 'Foreign-Key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(4) NOT NULL COMMENT 'Primary_key',
  `contact_name` varchar(60) DEFAULT NULL,
  `contact_email` varchar(256) NOT NULL,
  `contact_title` varchar(200) DEFAULT NULL,
  `contact_message` text,
  `upated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='contacts_222';

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_email`, `contact_title`, `contact_message`, `upated_at`, `created_at`) VALUES
(1, 'nasim', 'jsdfk@dfjscom.com', 'sfsf dfsd fsdkljf lsdk jsldkf sdf sdkjf sdlkjf sldjkf ws', 'dfsdfsdf dklfjsdlk fjsdklfj sdlkjf sldkfj lskdfj lksdjf lksdjf ksdjflksdjf sdf', '2017-09-11 09:28:33', '2017-09-11 09:06:04'),
(2, 'rtert', 'ddfd@sdfkj.com', 'retert', 'ttert ert ertert ert ertdffdgdfskj sdkfjsdkl fjklsdfsdj flksdjf sdklfj sdlkfj sdklfj sd fkjsd fjsd fjksdljf sdlkfjklsdjf sdfhklsdhflksd jflksdjfkls djfklsdjfopwejrlwejflksdjf  ', '2017-09-11 09:28:17', '2017-09-11 09:10:03'),
(3, 'sakib', 'sakib@gmail.com', 'rough info', 'i am sakib', '2017-09-11 15:53:38', '2017-09-11 15:53:38'),
(4, 'Rafi Ahamed', 'rafi@gmail.com', 'dggggggggggggggggggggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggg ggggggggggggg', '2017-09-12 13:21:28', '2017-09-12 13:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` int(4) NOT NULL COMMENT 'PrimaryKey',
  `insr_type` tinyint(1) DEFAULT NULL COMMENT '1life, 2=marine, 3=fire, 4=accident, 5=car, 6=bike',
  `insr_person_type` tinyint(1) DEFAULT NULL COMMENT '1=salaried_person, 2=business_man, 3=others',
  `insr_sum_insured` int(8) DEFAULT NULL,
  `insr_period` smallint(2) DEFAULT NULL COMMENT 'for_how_many_years',
  `insr_cover_type` varchar(5) DEFAULT NULL,
  `insr_monthly_payout` int(8) DEFAULT NULL,
  `insr_lump_sum_payout` int(8) DEFAULT NULL COMMENT 'insurence_lump_sum_payout',
  `insr_claim_ratio` smallint(2) DEFAULT NULL COMMENT 'insurence_claim_settelment_ratio',
  `insr_premium` int(8) DEFAULT NULL,
  `insr_rating` tinyint(1) NOT NULL,
  `insr_review` int(6) NOT NULL,
  `insr_features_benefits` text,
  `insr_eligibility` text,
  `insr_requirements` text,
  `insr_rate` text COMMENT 'insurence_rate_of_interest_fees',
  `insr_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=publish, 0=unPublish',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `bank_id` int(3) NOT NULL COMMENT 'ForeignKey'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='insurences_55';

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `insr_type`, `insr_person_type`, `insr_sum_insured`, `insr_period`, `insr_cover_type`, `insr_monthly_payout`, `insr_lump_sum_payout`, `insr_claim_ratio`, `insr_premium`, `insr_rating`, `insr_review`, `insr_features_benefits`, `insr_eligibility`, `insr_requirements`, `insr_rate`, `insr_status`, `created_at`, `updated_at`, `bank_id`) VALUES
(1, 1, 1, 100000, 5, NULL, NULL, NULL, 97, 856, 0, 0, 'fdgdfgdfg', 'dfgdfgdfs', 'dfgdfgd', 'dfgdfgdf', 0, NULL, NULL, 1),
(2, 2, 2, 100000, 5, NULL, NULL, NULL, 97, 2500, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int(4) NOT NULL COMMENT 'PrimaryKey',
  `invst_type` tinyint(1) DEFAULT NULL COMMENT '1=save_Account, 2=fixed_account, 3=mutual_account',
  `invst_person_type` tinyint(1) DEFAULT NULL COMMENT '1=salaried_person, 2=business_man, 3=others',
  `invst_amount_upto` int(8) DEFAULT NULL COMMENT 'investment_amount_up_to',
  `invst_tenure_rate` smallint(2) DEFAULT NULL,
  `invst_interest_rate_from` float DEFAULT '0',
  `invst_interest_rate_to` float DEFAULT '0',
  `invst_rating` tinyint(1) DEFAULT NULL COMMENT 'rating_means_starMark',
  `invst_review` int(6) DEFAULT NULL,
  `invst_features_benefits` text,
  `invst_eligibility` text,
  `invst_requirements` text,
  `invst_rate` text COMMENT 'investment_rate_of_interest_fees',
  `invst_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=publish, 0=unPublish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `bank_id` int(3) NOT NULL COMMENT 'ForeignKey'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='investments_44';

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `invst_type`, `invst_person_type`, `invst_amount_upto`, `invst_tenure_rate`, `invst_interest_rate_from`, `invst_interest_rate_to`, `invst_rating`, `invst_review`, `invst_features_benefits`, `invst_eligibility`, `invst_requirements`, `invst_rate`, `invst_status`, `created_at`, `updated_at`, `bank_id`) VALUES
(5, 1, 1, 800000, 8, 9.69, 11.5, NULL, NULL, '<p>gdfgdfsgdfdf</p>', '<p>dgdfgdfgdsgdsf</p>', '<p>rterterterdfgdfgdfgd</p>', NULL, 1, NULL, NULL, 10),
(6, 1, 1, 700000, 3, 10, 12, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 2),
(7, 1, 2, 6000000, 3, 9, 11, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 10),
(8, 1, 1, 100000, 3, 12, 12.5, NULL, NULL, '<p>dddd</p>', '<p>ddd</p>', '<p>ddd</p>', NULL, 0, NULL, NULL, 4),
(9, 1, 2, 800000, 8, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 19),
(10, 1, 2, 800000, 8, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 10),
(11, 1, 2, 800000, 8, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 10),
(12, 1, 2, 799999, 4, 11.5, 12.33, NULL, NULL, '<p>dddd</p>', '<p>ddd</p>', '<p>dddd</p>', NULL, 1, NULL, NULL, 6),
(13, 1, 2, 800000, 8, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 10),
(14, 1, 3, 799998, 8, 7.99, 8.55, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 10),
(15, 1, 2, 800000, 8, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 26),
(16, 1, 3, 200000, 6, 11, 15, NULL, NULL, '<p>ggggggggggggggggggggggggggggg</p>', '<p>ggggggggggg</p>', '<p>ggggg</p>', NULL, 0, NULL, NULL, 8),
(17, 2, 2, 600000, 3, 9, 11.5, NULL, NULL, '<p>sdfsdfsdfsdf</p>', '<p>fsdfsdfsdf</p>', '<p>ffdfsdfsdaf</p>', NULL, 1, NULL, NULL, 5),
(18, 2, 2, 800000, 8, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 10),
(19, 1, 1, 600000, 5, 6, 9, NULL, NULL, '<p>dfgsdfgsdg</p>', '<p>dfsgdsfgdfsg</p>', '<p>dfdfgdsfgd</p>', NULL, 1, NULL, NULL, 10),
(20, 1, 1, 800000, 4, 5.5, 8.5, NULL, NULL, '<p>kkkkkkkkkkkkkkkkk</p>', '<p>kkkkkkkkk</p>', '<p>kkkkkkkkkkkk</p>', NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(4) NOT NULL COMMENT 'PrimaryKey',
  `loan_type` tinyint(1) DEFAULT NULL COMMENT '1=sme, 2=car, 3=home, 4=personal, 5=others, 6=working_capital',
  `loan_person_type` tinyint(1) DEFAULT NULL COMMENT '1=salaried_person, 2=business_man, 3=others',
  `loan_amount` int(8) DEFAULT NULL,
  `loan_period` smallint(2) DEFAULT NULL,
  `loan_interest_rate` float DEFAULT NULL,
  `loan_monthly_interest` int(8) DEFAULT NULL,
  `loan_interest_payable` int(8) DEFAULT NULL,
  `loan_flating_rate_form` float DEFAULT NULL,
  `loan_flating_rate_to` float DEFAULT NULL,
  `loan_rating` varchar(5) DEFAULT NULL,
  `loan_review` int(6) DEFAULT NULL,
  `loan_features_bfenefits` text,
  `loan_requirements` text COMMENT 'include_all_requiremens',
  `loan_rate` text COMMENT 'rate_of_interest_fees',
  `loan_eligibility` text,
  `loan_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=publish, 0=unPublish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bank_id` int(3) NOT NULL COMMENT 'ForeignKey'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `loan_type`, `loan_person_type`, `loan_amount`, `loan_period`, `loan_interest_rate`, `loan_monthly_interest`, `loan_interest_payable`, `loan_flating_rate_form`, `loan_flating_rate_to`, `loan_rating`, `loan_review`, `loan_features_bfenefits`, `loan_requirements`, `loan_rate`, `loan_eligibility`, `loan_status`, `created_at`, `updated_at`, `bank_id`) VALUES
(1, 1, 1, 200000, 2, 11.5, 930, 4525, 10, NULL, NULL, NULL, '<ol><li>Unlimited transactions (both deposit and withdrawals) are allowed.</li><li>Personalized MICR Cheque Book is available.</li><li>No withdrawal notification required.</li><li>Nominal service charge.</li><li>Any branch banking facility (Cash withdrawal and deposit from any branch)</li><li>Bank accepts Standing Instructions from A/C holders.</li><li>Nomination facility is available to nominate beneficiary for account proceeds.</li><li>Charge free statement of A/C, Balance Confirmation Certificate twice in a year on half yearly basis.</li><li>Option is available to collect e - Statement on monthly basis.</li></ol>', '<ol><li>Requirements</li><li>Rate of Interest &amp; Fees</li><li>No Interest is paid on CD Account.</li><li>Fees and Charges: As per existing schedule of charges which is separately displayed/shown on the web site</li></ol>', NULL, '<ol><li>CD Account can be opened both for Individuals and Firms/Corporate/ Autonomous Bodies etc.</li><li>CD Account can be opened both for resident and non - resident Bangladeshi Nationals.</li><li>Age bar for Personal CD Account: 18 years or above.</li><li>Single/Joint account can be opened.</li><li>Minor account can be opened under the supervision of his / her / their guardian.</li><li>Account can be opened in the name of Trust / Club / Association / Societies / Non - Trading Concerns.</li></ol>', 0, NULL, NULL, 1),
(2, 2, 1, 200000, 2, 12, 930, 4525, 12, NULL, NULL, NULL, '<p>jhkghjk ghjgh hjnfhdg fgdfgdfg</p><p>&nbsp;fdgd gdfg df</p><p>gdfg dfg df</p><p>df fdgdsf gd&nbsp;</p><p>dfg dfg</p>', NULL, NULL, '<p>gdfgdfgdfg&nbsp;</p><p>dfg dfgdfgd fg</p><p>&nbsp;dfgdfgdsf</p><p>&nbsp;fdgdfg</p>', 1, NULL, NULL, 2),
(3, 4, 2, 200000, 2, 12, 930, 4525, NULL, NULL, NULL, NULL, '<p>sarer</p><p>gdfg</p><p>dfg</p><p>dfg</p><p>df</p><p>g</p><p>dfs</p>', '<p>dsfsdfds</p><p>gdf</p><p>dfgd</p><p>fdfgdf</p><p>gdfgdf</p><p>dfgdf</p><p>gdfgdf</p><p>dfgd</p>', 'dfsdsdf', '<p>sddssdfsd</p><p>dfg</p><p>d</p><p>&nbsp;</p><p>df</p><p>sdf</p><p>sdf</p><p>sd</p><p>fsd</p><p>f</p><p>sdf</p>', 1, NULL, NULL, 5),
(4, 3, 3, 450000, 2, 4, 930, 4525, 1, 2, NULL, NULL, '<p>kjllllllllllll</p>', '<p>kjjjjjjjjjjj</p>', NULL, '<p>lljkllllllllllllllll</p>', 1, NULL, NULL, 6),
(6, 4, 1, 3000001, 3, 12, 930, 4525, 0, 11, NULL, NULL, '<p>erwerwe werwerwe</p><p>dfsfsd&nbsp;</p><p>dfgfdg fdgdfg dfyhgfg</p><p>gsdfg</p><p>dfgdfgdg dfgsadf gasdfgsadfsdf sdf sefsdfgfhfgsdf sdf</p><p>dfg</p><p>fghfgh fgh gfdfg</p>', '<p>fgdfgdsfg dfg ghfgh</p><p>tyjy</p><p>iukujk</p>', NULL, '<ol><li>dfsdfsa sdf sd fsd sadf sdffsdf</li><li>dfgdfgdfg dfgdf df gdf sdfsd</li><li>gdfg dfgfd g dfg fgdfsdf sdf</li><li>gd dfgdfsd dsffsdf dsfds</li><li>hgh</li></ol>', 1, NULL, NULL, 7),
(7, 3, 2, 700000, 5, 11.5, 930, 4525, 0, NULL, NULL, NULL, '<p>gsdfg</p>', '<p>hrtgfhfg</p>', NULL, '<p>dfgdfgdsfg</p>', 1, NULL, NULL, 1),
(8, 3, 2, 700000, 4, 10.5, 930, 4525, 11, 15, NULL, NULL, '<p><strong>et ertert re tre ert er</strong></p><ul><li><strong>sdfsdfsd</strong></li><li><strong>sdfsdf</strong></li><li><strong>sdfsdf</strong></li><li><strong>sdfsadfsdfsadfsdfsdf sd</strong></li></ul><p><strong>dsfsfddfg sdafsd dsf df</strong></p>', '<ul><li>tytyrt erte re tr</li><li>dfgdfgdfgdf dfgdsfg</li><li>&nbsp;fsdfsdf dsf sdf sd</li><li>sdfsdf sdf sdf ds</li><li>&nbsp;fsdfsdf</li></ul><p>&nbsp;</p>', NULL, '<ol><li>&nbsp;ert ert ert er terter</li><li>fgdrg&nbsp;</li><li>dfds</li><li>&nbsp;dsfsdf</li><li>&nbsp;sdfsda</li></ol>', 0, NULL, NULL, 2),
(9, 6, 2, 500000, 5, 21, 930, 4525, 1, 14, NULL, NULL, '<p>gfgdfg</p>', '<p>fdf</p>', NULL, '<p>dfgdfg</p>', 1, NULL, NULL, 3),
(10, 3, 2, 8000000, 5, 11, 930, 4525, 1, 12, NULL, NULL, '<p>gdfgdf</p>', '<p>gdf</p>', NULL, '<p>gdfgdf</p>', 1, NULL, NULL, 5),
(11, 3, 1, 75000, 3, 12.5, 930, 4525, 4, 16, NULL, NULL, '<p>gfghfdg</p>', '<p>hjfgh</p>', NULL, '<p>fgg</p>', 1, NULL, NULL, 6),
(12, 4, 2, 5200000, 3, 12, 930, 4525, 10, 12, NULL, NULL, '<p>fsdfsdfsd</p>', '<p>fsdfsdfsd</p>', NULL, '<p>fsdfsd dsfsdfs</p>', 1, NULL, NULL, 4),
(13, 3, 1, 500000, 5, 11, 930, 4525, 8, 12, NULL, NULL, '<p>ffffffffffffffffff</p>', '<p>ffffffffffffffff</p>', NULL, '<p>ffffffffffffffffffffffffffff</p>', 1, NULL, NULL, 18),
(14, 3, 3, 8888888, 5, 11, 930, 4525, 10, 11, NULL, NULL, '<p>hhhhhhhhhhhhhhhhhhhhhh</p>', '<p>hhhhhhhhhhhhhhhh</p>', NULL, '<p>hhhhhhhhhhhhhhhhhhhhhhhh</p>', 1, NULL, NULL, 2),
(15, 4, 2, 44444, 5, 11, 930, 4525, 1, 1, NULL, NULL, '<p>ooooooooooo</p>', '<p>ooooooooooooooooo</p>', NULL, '<p>ooooooooooooooooooooooooo</p>', 1, NULL, NULL, 7),
(16, 5, 2, 543534534, 5, 21, 930, 4525, 11, 15, NULL, NULL, '<p>gggggggggggggggggggggggggggggggggggggggggggggggggggggg</p>', '<p>gggggggggggggggggggggggggggggggggggggggggggggg</p>', NULL, '<p>ggggggggggggggggggggggggggggggggggggggggggggggggggg</p>', 1, NULL, NULL, 6),
(17, 4, 1, 564564, 6, 11, 930, 4525, 7, 6, NULL, NULL, '<p>ffffssssssssssssssssss</p>', '<p>ffffffffffffffffffff</p>', NULL, '<p>ssssssssssdddddddddddddd</p>', 1, NULL, NULL, 10),
(18, 4, 1, 564564, 6, 11, 930, 4525, 7, 6, NULL, NULL, '<p>ffffssssssssssssssssss</p>', '<p>ffffffffffffffffffff</p>', NULL, '<p>ssssssssssdddddddddddddd</p>', 1, NULL, NULL, 10),
(19, 5, 2, 400000, 3, 11, 930, 4525, 9, 11, NULL, NULL, '<p>edddddddddddddddddd</p>', '<p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>', NULL, '<p>dfffffffffffffffffffffff</p>', 1, NULL, NULL, 5),
(20, 1, 1, 600000, 3, 8.5, 18941, 4525, 3, 3, NULL, NULL, '<p>jjjjjjjjjjjjjjjjjj</p>', '<p>jjjjjjjjjjjjjjjjjj</p>', NULL, '<p>jjjjjjjjjjjjjjjjjj</p>', 1, NULL, NULL, 10),
(21, 1, 3, 3000000, 4, 11.5, 78267, 4525, 7, 12, NULL, NULL, '<p>gggggggggggggggg</p>', '<p>hgggggggggg</p>', NULL, '<p>ggggggggggggggggggggg</p>', 1, NULL, NULL, 2),
(22, 2, 2, 200000, 6, 11, 930, 4525, 9, 11, NULL, NULL, '<p>oooooooooooooooooooooooooooooooooooooooooooooooooooo</p>', '<p>oooooooooooooooooooooooooooooooooooooooooooooooooo</p>', NULL, '<p>ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo</p>', 1, NULL, NULL, 1),
(23, 2, 2, 200000, 2, 10.5, 930, 4525, 5, 12, NULL, NULL, '<p>hhhhhhhhhhhhhhh</p>', '<p>hhhhhhhhhhhh</p>', NULL, '<p>hhhhhhhhhhhhhhhhh</p>', 0, NULL, NULL, 6),
(24, 2, 2, 200000, 3, 10.5, 930, 4525, 4, 10, NULL, NULL, '<p>lllllllllllllllllllll</p>', '<p>llllllllll</p>', NULL, '<p>lllllllllllllllllllllll</p>', 1, NULL, NULL, 6),
(25, 2, 2, 200000, 2, 10.5, 8580, 20920, 2, 5, NULL, NULL, '<p>hhhhhhhhhhhhhhhh</p>', '<p>ghhhhhhhhhhh</p>', NULL, '<p>hhhhhhhhhhh</p>', 1, NULL, NULL, 3),
(26, 2, 1, 200000, 2, 10.5, 9275, 22600, 5, 4, NULL, NULL, '<p>kkkkkkkkkkkkkkk</p>', '<p>kkkkkkkk</p>', NULL, '<p>kkkkkkkkkkkkkk</p>', 1, NULL, NULL, 10),
(27, 1, 2, 500000, 5, 10.5, 930, 4525, 8, 11, NULL, NULL, '<p>yyyyyyyyyyyyyyyyyyyy</p>', '<p>yyyyyyyyyyyyyyyyy</p>', NULL, '<ol><li><strong><em>dfjdjkfdsa</em></strong></li><li><strong><em>fdsjhfkjdsf</em></strong></li><li><strong><em>djksfhkjsdhkjf</em></strong></li><li><strong><em>dsfhsdhfkj</em></strong></li><li><strong><em>sdfjlkdsjf</em></strong></li></ol>', 0, NULL, NULL, 10),
(28, 1, 1, 800000, 4, 11.5, 930, 4525, 4, 9, NULL, NULL, '<p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>', '<p>kkkkkk</p>', NULL, '<p>kkkkkkkkkkkkkkk</p>', 1, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_07_02_230147_migration_cartalyst_sentinel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyings`
--
ALTER TABLE `applyings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `applying_bank`
--
ALTER TABLE `applying_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`bloguser_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `blogsubscribers`
--
ALTER TABLE `blogsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogusers`
--
ALTER TABLE `blogusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardcategories`
--
ALTER TABLE `cardcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carddebits`
--
ALTER TABLE `carddebits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comment_replay`
--
ALTER TABLE `comment_replay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary_key', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'PrimaryKey', AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `applyings`
--
ALTER TABLE `applyings`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'PrimaryKey', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `applying_bank`
--
ALTER TABLE `applying_bank`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'primary_key', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'PrimaryKey', AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Primary-Key', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `blogsubscribers`
--
ALTER TABLE `blogsubscribers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Primary_Key', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blogusers`
--
ALTER TABLE `blogusers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary-Key', AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cardcategories`
--
ALTER TABLE `cardcategories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'foreign_key', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `carddebits`
--
ALTER TABLE `carddebits`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary_Key', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'primary_key', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Primary-Key', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Primary-Key';
--
-- AUTO_INCREMENT for table `comment_replay`
--
ALTER TABLE `comment_replay`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'Primary-Key';
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Primary_key', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'PrimaryKey', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'PrimaryKey', AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'PrimaryKey', AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
