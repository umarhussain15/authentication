-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2016 at 07:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `am_users`
--

CREATE TABLE IF NOT EXISTS `am_users` (
  `idam_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ngoemail` varchar(45) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `ngoname` varchar(45) NOT NULL,
  PRIMARY KEY (`idam_users`),
  KEY `id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `am_users`
--

INSERT INTO `am_users` (`idam_users`, `user_id`, `ngoemail`, `phonenumber`, `ngoname`) VALUES
(1, 19, '12wdqw@23131', '923121134567', 'qqweqw'),
(2, 24, '13beseuhussain@edu.pk', '923121234567', 'ngoname');

-- --------------------------------------------------------

--
-- Table structure for table `answer_info`
--

CREATE TABLE IF NOT EXISTS `answer_info` (
  `que_id` int(11) NOT NULL AUTO_INCREMENT,
  `ans1` varchar(45) NOT NULL,
  `ans2` varchar(45) NOT NULL,
  `ans3` varchar(45) NOT NULL,
  `ans4` varchar(45) NOT NULL,
  `true_ans` varchar(45) NOT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `answer_info`
--

INSERT INTO `answer_info` (`que_id`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(10, 'matter', 'big particles', 'elementary', 'ions', '4'),
(11, '1699 m', '1799 m', '1809 m ', '1609 m', '2'),
(12, '3', '4', '5', '2', '2'),
(13, 'Angstorm ', 'micron ', 'radian ', 'light year  ', '2'),
(14, 'giga', 'beta', 'mega', 'deca', '2'),
(15, '0.25', '0.50', '1', '.50', '1'),
(16, 'aqueous NaCl', 'molten NaCl', 'KOH', 'NaNO3', '1'),
(17, 'non spontaneous reaction', 'reversible reaction ', 'spontaneous reaction ', 'irreversible reaction ', '3'),
(18, 'caF2', 'NaCl', 'glass', 'All of these ', '2'),
(19, '9%', '10%', '11%', '12%', '1'),
(20, 'reflexive', 'transitive', 'trichotomy', 'symmetric', '2'),
(21, '(18,3)', '(18,-3)', '(38,9)', '(38,-9)', '4'),
(22, '(1,1)', '(1,2)', '(2,1)', '(2,2)', '1'),
(23, '(0,0)', '(1,0)', '(0,1)', '(1,1)', '2'),
(24, 'a = b', 'a != b', 'cannot be evaluated ', 'impossible ', '1'),
(25, 'q', 'q`', 'q', 'q', '3'),
(26, 'a', 'a', 'a', 'a', '3');

-- --------------------------------------------------------

--
-- Table structure for table `an_users`
--

CREATE TABLE IF NOT EXISTS `an_users` (
  `idan_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_role` varchar(45) NOT NULL DEFAULT 'student',
  PRIMARY KEY (`idan_users`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `an_users`
--

INSERT INTO `an_users` (`idan_users`, `user_id`, `user_role`) VALUES
(1, 19, 'student'),
(2, 20, 'student'),
(3, 21, 'student'),
(4, 22, 'student'),
(5, 23, 'student'),
(6, 24, 'student'),
(7, 25, 'student'),
(8, 26, 'student'),
(9, 27, 'student'),
(10, 28, 'student'),
(11, 29, 'student'),
(12, 30, 'student'),
(13, 31, 'student'),
(14, 32, 'student'),
(15, 33, 'student'),
(16, 34, 'student'),
(17, 35, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `blood_req`
--

CREATE TABLE IF NOT EXISTS `blood_req` (
  `pat_name` varchar(20) NOT NULL,
  `typ_dis` varchar(20) NOT NULL,
  `doc_name` varchar(20) NOT NULL,
  `whn_req` date NOT NULL,
  `cont_num` varchar(12) NOT NULL,
  `blood_grp` varchar(5) NOT NULL,
  `quan` varchar(3) NOT NULL,
  `req_city` varchar(20) NOT NULL,
  `cont_per_name` varchar(20) NOT NULL,
  `hosp_add` varchar(50) NOT NULL,
  `dt` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_req`
--

INSERT INTO `blood_req` (`pat_name`, `typ_dis`, `doc_name`, `whn_req`, `cont_num`, `blood_grp`, `quan`, `req_city`, `cont_per_name`, `hosp_add`, `dt`) VALUES
('Usman', 'AIDS', 'Dr. Fahad', '2016-01-20', '03007787781', 'A+', '100', 'Islamabad', 'Sultan Mehmood', 'PIMS, Islamabad', '2016-01-02'),
('Basit', 'Fever', 'Dr. Arslan', '2016-01-22', '03007784678', 'A+', '50m', 'Lahore', 'Civil Hospital', 'Model Town Lahore', '2016-01-02'),
('Junaid', 'mental', 'Dr. Who', '2016-01-20', '03007787781', 'AB+', '200', 'Peshawar', 'Sultan Mehmood', 'PIMS, Peshawar', '2016-01-02'),
('Junaid', 'mental', 'Dr. Who', '2016-01-20', '03007787781', 'AB+', '200', 'Peshawar', 'Sultan Mehmood', 'PIMS, Peshawar', '2016-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `timestamp_t` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(15) NOT NULL,
  `mob_num` varchar(12) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `mob_num`, `e_mail`, `message`) VALUES
('Usman', '036878687', 'usman@gmail.com', 'Hello. I want some info.');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article` text COLLATE utf8_unicode_ci NOT NULL,
  `date_published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` enum('0','1','2','3','4','5') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `user_id`, `cat_id`, `title`, `article`, `date_published`, `rating`) VALUES
(1, 0, 'A-1', 'چند اہم اصطلاحات', ':(Infection) وبا يا اچھوت\r\nعام حالات میں جانوروں اور پرندوں میں مختلف جراثیم، وائرس موجود ہوتے ہيں۔ کسی قسم کی ناگہانی صورت يا دباؤ کی وجہ سے جانوروں ياں پرندوں کا مدافعاتی نظام اس حد تک کمزور ہو جاتا ہے کہ يہ جراثيم ان کے اندرونی اعضاء تک رساي حاصل کر ليتے ہيں اور بيماری کا سبب بنتے ہيں۔ اس کو چھوت يا وبا کہتے ہيں۔ مثال کے طور پہ مرغیوں ميں متعدی نزلہ وغيرہ۔\r\n\r\n:(Disease) مرض\r\nصحت کی عمومی حالت سے مختلف ايسی صورت جس ميں جانور يا پرندے کو کسی قسم کی دشواری پيش ہو مرض يا بيماری کہلاتی ہے۔\r\n\r\n:(Pathogen) پيتھوجن\r\nوہ زندہ اجسام جو کسی بيماری کو پيدا کرنے کا سبب بتے ہيں۔ ازقسم بيکٹيريا، وائرس، پروٹوزوا، بيرونی يا اندرونی کرم وغيرہ۔\r\nان کو دو حصوں ميں تقسيم کيا جا سکتا ہے:\r\nاؤل: ايسے جراثيم جو بغير کسی بيرونی اثرکی موجودگی کے بيماری پيداکرنے کی اہليت رکھتے ہيں پرائمری پيتھوجن کہلاتے ہيں\r\nدوسری: ايسے جراثيم جو صحت مند جسم مين بيماری تو پیدا کر سکتے ہيں مگر اس مقصد کے ليے انکو چند بيرونی عواملکی ضرورت ہوتی ہے۔ مثلا کمزور مدافعتی نظام ار عضليات کو چوٹ، زخم وغيرہ۔\r\n\r\n :(Vaccine) ويکسين\r\nجانوروں ميں کسی بيماری سے حفاظت کے ليے حفظ ماتقدم کے طور پر دی جانے والی دوائ کو وےکسين کہتے ہيں۔ کسی بھی بيماری کے ليے ویکسین اسی بيماری کو پھيلانے والے جراثيم ؛وائرس يا بيکٹيريا سے بنائ جاتی ہے جو کہ ويکسين ميں مردہ، نيم مردہ يا زندہ حالت ميں پائے جاتے ہيں۔ ويکسين عمومن وبائ امراض کے ليے کی جاتی ہے۔\r\n\r\n:(Antibiotics) اينٹی بايئوٹکس\r\nايسے اجزاء جو بيکٹيريا سے حاصل کئے جائيں اور انہی کے خاتمے کے ليے استعمال کيے جائيں۔', '2016-01-03 09:40:27', '0');

-- --------------------------------------------------------

--
-- Table structure for table `content_android_devlopment`
--

CREATE TABLE IF NOT EXISTS `content_android_devlopment` (
  `chapter_no` int(11) NOT NULL,
  `video_link` varchar(500) NOT NULL,
  `video_summary` mediumtext NOT NULL,
  UNIQUE KEY `chapter_no` (`chapter_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_android_devlopment`
--

INSERT INTO `content_android_devlopment` (`chapter_no`, `video_link`, `video_summary`) VALUES
(1, 'https://www.youtube.com/watch?v=EknEIzswvC0&list=PLS1QulWo1RIbb1cYyzZpLFCKvdYV_yJ-E', 'Lesson 1 - User Interface Components \r\n\r\nIn this lesson, we will highlight various important components of the Android User Interface (UI) — like Radio Buttons, Grid Views and several more — that will allow you to make highly functional mobile apps. We will focus on each UI component by trying to answer the question, "How do I use ________ in Android?"\r\n\r\nFor each question below, we will guide you to the best Internet tutorial that will offer step-by-step instructions on how to use the UI component in a new android app. Here is the full list of questions we will answer in this course:\r\n\r\nInteractive Controls (about 3 hours)\r\n\r\nHow do I use a Toggle Button in Android?\r\nHow do I use a Radio Button in Android?\r\nHow do I use EditText in Android?\r\nWhat are Arrays (or lists) in Java and how do I use them?\r\nHow do I show suggestions (or autocomplete) when typing into an EditText?\r\nHow do I use a Spinner (or drop down list) in Android?\r\nHow do I change the orientation of the emulator while using shortcuts?\r\nHow do I simulate a button click with code in Android?\r\nMenus (about 2 hours)\r\n\r\nHow do I automatically add missing import statements in my code?\r\nHow do I create an Options Menu in Android?\r\nHow do I add a Popup Menu in Android?');

-- --------------------------------------------------------

--
-- Table structure for table `courses_info`
--

CREATE TABLE IF NOT EXISTS `courses_info` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `enrolled_students` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `image_logo` varchar(100) NOT NULL,
  `contentTable_name` varchar(50) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `courses_info`
--

INSERT INTO `courses_info` (`course_id`, `course_name`, `enrolled_students`, `description`, `image_logo`, `contentTable_name`) VALUES
(1, 'Android Development for Beginners', 15, 'To access the free version of this course, click the blue button that says Access Course Materials.\r\n\r\nLearn the basics of Android and Java programming, and take the first step on your journey to becoming an Android developer!\r\n\r\nThis course is designed for students who are new to programming, and want to learn how to build Android apps. You don’t need any programming experience to take this course. If you’ve been using a smartphone to surf the web and chat with friends, then you’re our perfect target student!\r\n\r\nLearning anything new can be tough. We will walk you through the process of making Android apps, but to get the most out of this course, you must bring your enthusiasm for learning, and budget time on your calendar to learn with us.\r\n\r\nBy the end of the course, you’ll build two simple (but powerful) apps that you can share with your friends. We also hope that you will learn enough through this course to decide how best to continue your journey as an Android app developer, if you''re interesting in pursuing such a path.', 'android-app.jpg', 'content_android_development');

-- --------------------------------------------------------

--
-- Table structure for table `cwmigrations`
--

CREATE TABLE IF NOT EXISTS `cwmigrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cwmigrations`
--

INSERT INTO `cwmigrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_05_200000_create_problems_table', 1),
('2015_12_06_300000_add_cashier_columns', 1),
('2015_12_06_400000_create_money_table', 1),
('2015_12_12_500000_create_things_table', 1),
('2015_12_13_600000_create_donate_table', 1),
('2015_12_18_700000_add_fk_to_problems_table', 2),
('2016_01_02_221718_add_problemId_col_to_donate_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cwusers`
--

CREATE TABLE IF NOT EXISTS `cwusers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `donner` tinyint(1) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stripe_active` tinyint(4) NOT NULL DEFAULT '0',
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_plan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_four` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `subscription_ends_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cwusers`
--

INSERT INTO `cwusers` (`id`, `name`, `email`, `phone`, `address`, `donner`, `password`, `remember_token`, `created_at`, `updated_at`, `stripe_active`, `stripe_id`, `stripe_subscription`, `stripe_plan`, `last_four`, `trial_ends_at`, `subscription_ends_at`) VALUES
(1, 'Waqas Raza', 'donor@gmail.com', '03048346944', 'nust h-12', 1, '$2y$10$Zun.sbyg15ucY.ncEnguMuYvhaPxxKuy3GktnndYbSMuXFAjnGzhy', 'CgNaGin86M0REgm3uCq3EXJPcWCYyvP5v3l0Bwrf8cEoR7LtseHcquC8mMKM', '2015-12-18 15:28:39', '2016-01-03 03:13:34', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Steve Austin', 'needy@gmail.com', '5096805330', 'street 32', 0, '$2y$10$tSFnnNDDiWZtlr2aqHvsS./qHSOE.dPk0BeT4xM0GTcIdNWRAqLWq', 'UxF4zuBUv3ysXhLzND1RiCpcXmsjtHAo005W1DaHW6fzgxP5rojdisOgC0cS', '2015-12-18 15:29:07', '2016-01-03 12:28:38', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Beverly Hills', 'bhills_3366@mailinator.com', '3105553366', '3366 Beverly Dr', 0, '$2y$10$mfccsoqr6IIoLoXHmLVi4eJ7xWCxpxHi0uih6z.3Ou5F0i2W8xa8.', NULL, '2015-12-20 06:59:50', '2015-12-20 06:59:50', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Beverly Hills', 'bhills_4992@mailinator.com', '3105554992', '4992 Beverly Dr', 1, '$2y$10$0zmu03ZfPIQZw45CuNs7YeSMRbiT9bTRg3JB39euEPlC0rDwE0Mkq', NULL, '2015-12-20 07:01:13', '2015-12-20 07:01:13', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Beverly Hills', 'bhills_9501@mailinator.com', '3105559501', '9501 Beverly Dr', 0, '$2y$10$qZUzQtb5s4M9juPQEUabiOxIFuts2nL6k7RPq7K1nMyYEWbRavWlO', NULL, '2015-12-20 13:11:59', '2015-12-20 13:11:59', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Beverly Hills', 'bhills_9685@mailinator.com', '3105559685', '9685 Beverly Dr', 0, '$2y$10$YkmClzF84L7Za9kabB.E/e0YjAJQzIVDPvrpZex8k.ebWFlKYAx7W', NULL, '2015-12-20 13:12:44', '2015-12-20 13:12:44', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Beverly Hills', 'bhills_6683@mailinator.com', '3105556683', '6683 Beverly Dr', 0, '$2y$10$ayI38zEc7daKs4sRSqa4yu2acqfDTiRq5qe/7E.x1wQIC6ZM7J21u', 'NVXuWIBda5crSirAnU9NyzOMkf401YhwxCEGeVGFs0bICsq13cFGqutCoGqi', '2015-12-20 13:14:01', '2015-12-20 13:14:18', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Beverly Hills', 'bhills_7547@mailinator.com', '3105557547', '7547 Beverly Dr', 1, '$2y$10$KtYvWgfX/7WrdP95c1xeceEmlrqsNsp04BcRP2EUJ0H6pNBMolRI2', 'RkNToSmDRkoD25Jz5Hk6IOYKeQNQETyd5Blo8F05WJDa9SVT1NFRF0hvuxEf', '2015-12-20 13:14:41', '2015-12-20 13:43:17', 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cw_users`
--

CREATE TABLE IF NOT EXISTS `cw_users` (
  `id_cw_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `isdonor` tinyint(4) NOT NULL DEFAULT '1',
  `phonenumber` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cw_users`),
  KEY `p_user_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cw_users`
--

INSERT INTO `cw_users` (`id_cw_users`, `user_id`, `isdonor`, `phonenumber`) VALUES
(1, 19, 1, '923121234567'),
(2, 22, 0, '923121234567'),
(3, 24, 0, '923121234567'),
(4, 25, 1, '923121234567'),
(5, 33, 1, '923121234567'),
(6, 35, 1, '923121234567');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `definition` text COLLATE utf8_unicode_ci NOT NULL,
  `incidence` text COLLATE utf8_unicode_ci NOT NULL,
  `cause` text COLLATE utf8_unicode_ci NOT NULL,
  `transmission` text COLLATE utf8_unicode_ci NOT NULL,
  `symptoms` text COLLATE utf8_unicode_ci NOT NULL,
  `postmortem_exam` text COLLATE utf8_unicode_ci NOT NULL,
  `diagnosis` text COLLATE utf8_unicode_ci NOT NULL,
  `treatment` text COLLATE utf8_unicode_ci NOT NULL,
  `prevention` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` enum('0','1','2','3','4','5') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `user_id`, `cat_id`, `category`, `name`, `definition`, `incidence`, `cause`, `transmission`, `symptoms`, `postmortem_exam`, `diagnosis`, `treatment`, `prevention`, `publication_date`, `rating`) VALUES
(1, 0, 'P-1', 'Virus', ' (New Castle Disease) رانی کھیت ', 'نیو کیسل بیماری تمام عمر کے پولٹری کو متاثر  کرنے والی ایک انتہائی متعدی وائرل بیماری ہے . متاثرہ پرجاتیوں مرگی ، ترکی ، کبوتر اور بتھ شامل ہیں. حالت شاذ و نادر ہی بتھ میں تشخیص لیکن پیداوار قطرے / ارورتا مسائل کی ایک ممکنہ وجہ ہے . \r\nدوسرے پرجاتی کبھی کبھار ستنداریوں سمیت سنکردوست کیا جا سکتا (مثلا انسان میں آشوب چشم )\r\n', '', 'مملوث وائرس Paramyxovirus PMV 1 ، متغیر pathogenicity کی ہے جو ہے . نشانیاں عام طور پر ، اعصابی نظام تنفس یا تولیدی نظام کی بیماری ہیں . روگنتا عام طور پر زیادہ ہے اور اموات 0-100٪ سے مختلف ہوتی ہے . زیادہ اموات ویکسین سے محروم اسٹاک میں velogenic بیماری میں دیکھا جاتا ہے ', 'ٹرانسمیشن ایروسولز ، پرندوں ، fomites ، زائرین اور (اکثر asymptomatic ) درآمد psittacines کے ذریعے ہے . یہ عام طور پر عمودی نہیں ہے (لیکن چوزوں آلودہ گولوں سے \r\nافزائش گاہیں میں متاثرہ بن سکتا ہے ) \r\n', 'نشانیاں انتہائی متغیر ہیں اور انفیکشن وائرس ( اوپر ملاحظہ کریں) ، سنکرامک خوراک اور گزشتہ نمائش یا ویکسینیشن سے استثنی کی ڈگری کی نوعیت پر انحصار کرے گا .\r\n\r\nاچانک موت\r\nذہنی دباؤ.\r\nکم بھوک لگنا .\r\nکھانسی.\r\nڈائریا .\r\nاعصابی علامات .\r\nفالج .\r\nبٹی ہوئی گردن .\r\nانڈے کی پیداوار میں شدید کمی .\r\n', '', 'ایک گھمنڈی تشخیص نشانیوں، پوسٹ-ماورٹیم لیسانس، سرالوجی میں بڑھتی ہوئی ٹاٹری پر ہے. یہ تنہائی عیسوی، HA، ہیلو میں ND سیرم کے یا کیا آپ کو (کم کراس کے رد عمل), اف کے ساتھ تصدیق ہوتی ہے ۔ Cross-reactions پمو-3 کے ساتھ بنیادی طور پر کیا گیا ہے ۔ پیتھوگاناکاٹی موت کا مطلب ہے وقت کی طرف سے امبریاوس میں، انٹراسریبرال کا جائزہ لیا یا لڑکیاں میں ۴ پیتھوگاناکاٹی ۔ نمونے - داخل رغامی یا کلواکال ۔   فرق ہے متعدی بحفاظت، لارینگوٹراکہیاٹاس، متعدی کورازا، برڈفلو، EDS-76، حیموررحگاک کی بیماری، انکیپہالومیلاٹاس، انکیپہالومالاکیا، انٹسیکاٹانس، دائیں کان کے انفیکشن/کھوپڑی عثٹیاٹاس، پنیومووروس انفیکشن سے ۔', 'کوئی بھی ، اینٹی بایوٹک ثانوی بیکٹیریا کو کنٹرول کرنے کے لیے', 'سنگرودھ (Quarantine)  ، بائیو سیکیورٹی ، تمام میں / تمام آؤٹ پیداوار ، ویکسینیشن . یہ خاص طور پر معمول سیرم سائنسی نگرانی کے استعمال کی طرف سے پرندوں عمل میں ، ویکسی نیشن کے جواب کی نگرانی کے لئے عام ہے . HI بڑے پیمانے پر استعمال کیا گیا ہے؛ یلسا اب بھی استعمال کیا جاتا ہے . یہ ٹیسٹ براہ راست تاہم ، کے Mucosal استثنی کا اندازہ نہیں .\r\n\r\nحفاظتی ٹیکوں کے پروگرام مناسب طریقے سے محفوظ کیا جاتا ہے جس میں اعلی طاقت کی ویکسین ، استعمال کرتے ہیں اور اکاؤنٹ میں مقامی حالات لینا چاہئے . ایک مخصوص پروگرام دن 14 دنوں میں LaSota قسم ویکسین کے بعد کی عمر میں Hitchner B1 ویکسین شامل کر سکتے ہیں . LaSota قسم ویکسین بھی خطرہ زیادہ ہے تو عمر کے 35-40 دنوں میں بار بار کر سکتے ہیں . سپرے درخواست کے استعمال کی سفارش کی ہے لیکن یہ کم سے کم رد عمل کے ساتھ اچھا تحفظ حاصل کرنے کے لئے دیکھ بھال کے ساتھ لاگو کیا جا کرنے کی ضرورت ہے .\r\nفعال ویکسین زیادہ تر عام میں زندہ ویکسین کے استعمال کی جگہ لے لی ہے لیکن وہ مقامی بیماریوں کے لگنے کی روک تھام کے لیے نہیں .\r\n\r\nانیکٹاویٹد ویکسین زیادہ تر عام میں براہ راست ویکسین کے استعمال کی جگہ لے لی ہے بلکہ انہیں مقامی بیماریوں کے لگنے سے منع نہیں ہے ۔   کی روک تھام یا واکانال کے رد عمل میں نوجوان چوزوں کم کرنے کے لیے اس دن پرانی ہے ماؤں کو یکساں ٹاریس ضروری ہے ۔ واکانال رد عمل آشوبِ چشم، سناکانگ، اور کبھی کبھار کم trachea میں پیپ کا ایک پلگ کی وجہ سے سانس لینا کے طور پر پیش کرسکتا ہے ۔ کچھ ممالک میں اسے گلیزر واککانال ردعمل کے ادوار کے دوران اینٹی پروفیلیکٹاکالل فراہم کرنے کے لئے موجود رہی ہے ۔ اچھا انتظام کے تحت میکوپلاسم گاللاسیپٹیکم مفت اسٹاک کے استعمال کا خطرہ واکانال رد عمل کی گھٹا دیتا ہے ۔\r\n', '2016-01-03 09:51:48', '0'),
(2, 0, 'P-2', 'Virus', 'ميريکس کی بيماری (Marek’s Disease)', 'مرغیوں کی وہ بیماری اور شاذ و نادر ہی مرغیوں کے ساتھ قریبی ایسوسی ایشن میں ترکوں، دنیا بھر میں دیکھا کی ایک ہرپیز وائرس انفیکشن ہے. 1980 اور 1990 کے عشرے سے انتہائی کمزوری اپبھیدوں شمالی امریکہ اور یورپ میں ایک مسئلہ بن چکے ہیں ۔ مرض 10-50 فیصد اور شرح اموات 100 فیصد ہے ۔ ایک متاثرہ ریوڑ میں شرح اموات عام طور پر ایک اعتدال پسند یا اعلی کی شرح پر کافی چند ہفتوں تک جاری رہتا ہے ۔ ''دیر'' وہ میں کی اموات کی عمر 40 ہفتے کو وسیع کر سکتے ہیں ۔ متاثرہ پرندے زیادہ دیگر بیماریوں کے لئے، پرجیوی اور بیکٹیریل دونوں ساتھ ہیں ۔', '', 'انفیکشن کا راستہ عموماً تنفس ہے اور یہ بیماری پھیلانے متعدی پنکھ گلٹی غصہ، فاوماٹیس، وغیرہ کی طرف سے اعلی متعدی ہے ۔ متاثرہ پرندوں کی زندگی کے لئے واریماک رہیں ۔ عمودی ٹرانسمیشن اہم نہیں تصور کی جاتی ہے ۔', '', 'پیروں، پروں اور گردن کافالج . وزن میں کمی ۔ گرے iris یا Pupil۔ رویا تنظیمیں ۔ پنکھ کے follicles  کا اٹھنا اور رووگہان کے ارد گردکھردری جلد ہے ۔', 'جگر، طحال، گردوں، پھیپھڑوں، گوندس، دل اور استخوان بندی پٹھوں میں   گرے-سفید فوکا نیوپلاسٹاک ٹش ۔ عصبی تنوں اور سٹریاشن کا نقصان ہوا گاڑھا ہونا. ماکراسوپاکالل - لیمفواد گھسپیٹھ کی کثیرشکلیت ہے ', 'تاریخ، طبی علامات، لیسانس ، ہسٹوپیٹہولوجی ۔  لیمپہواد لیوکوساس، عصیھ، ٹہاامانا کی کمی، خاص طور پر آغاز پر، Ca/فاسفورس/وٹامن ڈی کی کمی ۔', 'کوئی نہیں', 'حفظان صحت، سب-میں/سب-out پیداوار، مزاحم اپبھیدوں، 1500PFU  کے HVT میں پرانے دن (مگر اب تیزی کے ساتھ میں اووا ایپلی کیشن پر منتقلی کے)، ایسوسی ایشن کے دیگر اپبھیدوں (SB1 سارو-قسم 2) کے ساتھ اور راسپان کے ساتھ عام طور پر قطرے پلانے ہیں ۔   یہ ویکسین کی مختلف اقسام کے امتزاج کی کوشش میں وسیع تحفظ حاصل کرنے کے لیے استعمال کرنا عام رواج ہے ۔ وراثیات B21 جین ہے جو وہ کی بیماری چیلنج کے لیے بڑھتی ہوئی مزاحمت ویسےہی کی فریکوئنسی میں اضافہ کی طرف سے مدد کر سکتے ہیں ۔', '2016-01-03 09:55:50', '0');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `donorId` int(10) unsigned NOT NULL,
  `moneyId` int(10) unsigned NOT NULL,
  `thingId` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `problemId` int(10) unsigned NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `donate_donorid_foreign` (`donorId`),
  KEY `donate_problemid_foreign` (`problemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `donorId`, `moneyId`, `thingId`, `created_at`, `updated_at`, `problemId`) VALUES
(46, 2, 4, 0, '2016-01-02 13:48:26', '2016-01-02 13:48:26', 2),
(47, 1, 2, 0, '2016-01-02 13:53:31', '2016-01-02 13:53:31', 2),
(48, 1, 2, 0, '2016-01-02 14:14:07', '2016-01-02 14:14:07', 2),
(49, 1, 2, 0, '2016-01-02 14:16:25', '2016-01-02 14:16:25', 2),
(50, 1, 5, 0, '2016-01-02 14:25:14', '2016-01-02 14:25:14', 2),
(51, 1, 2, 0, '2016-01-02 15:08:22', '2016-01-02 15:08:22', 2),
(52, 1, 2, 0, '2016-01-03 03:10:26', '2016-01-03 03:10:26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `donation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`donation_id`),
  KEY `donations_user_id_foreign` (`user_id`),
  KEY `donations_school_id_foreign` (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donor_reg`
--

CREATE TABLE IF NOT EXISTS `donor_reg` (
  `uname` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `weight` int(4) NOT NULL,
  `b_gp` varchar(5) NOT NULL,
  `ldd` date NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `mob_num` varchar(12) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `msg` varchar(50) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_reg`
--

INSERT INTO `donor_reg` (`uname`, `pass`, `name`, `age`, `gender`, `dob`, `weight`, `b_gp`, `ldd`, `state`, `city`, `pin_code`, `mob_num`, `e_mail`, `msg`) VALUES
('amad', '2345', 'ahmed', 13, 'male', '2013-45-67', 34, 'A+', '0000-00-00', 'Punjab', 'Multan', 44000, '35338573', 'asd@gmail.com', 'fggfc fgdg gdhg gd');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_table`
--

CREATE TABLE IF NOT EXISTS `enrollment_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enrollment_table`
--

INSERT INTO `enrollment_table` (`id`, `course_name`, `student_name`, `status`) VALUES
(1, 'Introduction to android development', 'ahmed191', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_expense` int(11) NOT NULL,
  `teachers_salary` int(11) NOT NULL,
  `staff_salary` int(11) NOT NULL,
  `bills` int(11) NOT NULL,
  `extras` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`exp_id`, `date`, `student_expense`, `teachers_salary`, `staff_salary`, `bills`, `extras`) VALUES
(2, '2015-11-30 19:00:00', 54355, 54635, 4354, 5435, 12000),
(23, '2016-01-02 16:41:59', 65767, 5000, 45435, 564, 432),
(24, '2016-01-02 16:42:19', 3123, 5000, 45435, 567, 67567),
(26, '2016-01-02 17:25:38', 571332, 5000, 45435, 435, 4535),
(27, '2016-01-02 17:26:02', 571332, 5000, 45435, 234, 342),
(28, '2016-01-03 15:40:52', 0, 5000, 49434, 75767, 57767),
(29, '2016-01-03 15:41:13', 0, 5000, 49434, 2, 2),
(30, '2016-01-03 15:46:31', 571332, 5000, 49434, 44, 44);

-- --------------------------------------------------------

--
-- Table structure for table `facuties_tbl`
--

CREATE TABLE IF NOT EXISTS `facuties_tbl` (
  `faculties_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faculties_name` varchar(50) NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`faculties_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `facuties_tbl`
--

INSERT INTO `facuties_tbl` (`faculties_id`, `faculties_name`, `note`) VALUES
(3, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `forum_table`
--

CREATE TABLE IF NOT EXISTS `forum_table` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comments_table` varchar(100) NOT NULL,
  `post_text` varchar(4000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forum_table`
--

INSERT INTO `forum_table` (`post_id`, `username`, `subject`, `comments_table`, `post_text`, `created_at`) VALUES
(1, 'ahmed191', 'Multiple forms in android eclipse', 'post_table1', 'how to link multiple form in android eclipse?*Do i have to make multiple xml files in res/layout/main.xml and if this how to use them?*', '2015-12-31 21:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `hw_users`
--

CREATE TABLE IF NOT EXISTS `hw_users` (
  `id_hw_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  PRIMARY KEY (`id_hw_users`),
  KEY `user_id_hw_users_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hw_users`
--

INSERT INTO `hw_users` (`id_hw_users`, `user_id`, `phone_number`) VALUES
(1, 24, '923121234567'),
(2, 19, '923121234567'),
(3, 27, '923127199912'),
(4, 33, '923121234567');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `scan_image` blob NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(45) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `user_id`, `password`) VALUES
('', 19, ''),
('a', 26, 'a'),
('aaaa', 8, 'aaaa'),
('add', 15, 'qq'),
('admin', 6, 'admin'),
('asfandyar', 3, 'hashmi'),
('aw', 23, 'aw'),
('b', 172, 'b'),
('c', 14, 'c'),
('eee', 16, 'eee'),
('f', 4, 'p'),
('j', 172, 'j'),
('m', 18, 'm'),
('moazzam', 5, 'khan'),
('moiz', 2, 'farooq'),
('moiza', 25, '12345'),
('n', 20, 'n'),
('q', 12, 'q'),
('qq', 10, 'q'),
('qwe', 24, 'aa'),
('ss', 7, 'aa'),
('t', 17, 't'),
('talha', 1, 'munir'),
('usman', 4, 'asghar'),
('z', 9, 'z'),
('zz', 13, 'z');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member_reg`
--

CREATE TABLE IF NOT EXISTS `member_reg` (
  `uname` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mob_num` varchar(12) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_reg`
--

INSERT INTO `member_reg` (`uname`, `pass`, `name`, `mob_num`, `e_mail`, `msg`) VALUES
('omer', '12345', 'Omer', '0515151667', 'omer@gmail.com', 'Stay Blessed everyone.'),
('Ali', 'pakistan', 'Ali Khan', '03006752872', 'ali@gmail.com', 'Hi, I am ALi. Have a Nice Day.'),
('basit', '12345', 'Basit Ali', '03005675671', 'basit@gmail.com', 'Happy New Year. '),
('usman', '12345', 'Hafiz Usman', '03331234567', 'h.usman@gmail.com', 'Hi, I am Usman.\r\nThanks'),
('ndsad', '1232', 'ewqe', '523423', 'qwe4r3', 'asdd');

-- --------------------------------------------------------

--
-- Table structure for table `metirial_donation`
--

CREATE TABLE IF NOT EXISTS `metirial_donation` (
  `metirial_id` int(11) NOT NULL AUTO_INCREMENT,
  `metirial_name` varchar(60) NOT NULL,
  `category` varchar(30) NOT NULL,
  `picture` varchar(60) DEFAULT NULL,
  `sent` int(1) NOT NULL,
  `reserved` int(1) NOT NULL,
  `recieved` int(1) NOT NULL,
  PRIMARY KEY (`metirial_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `metirial_donation`
--

INSERT INTO `metirial_donation` (`metirial_id`, `metirial_name`, `category`, `picture`, `sent`, `reserved`, `recieved`) VALUES
(45, '4564654', 'Clothes', 'pics/445dd8.jpg', 0, 0, 0),
(46, '4564654', 'Clothes', 'pics/445dd8.jpg', 0, 0, 0),
(47, 'sdfsdfs', 'Bags', 'pics/1511628_624478180923496_1200703402_n.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `metirial_donation_acceptor`
--

CREATE TABLE IF NOT EXISTS `metirial_donation_acceptor` (
  `metirial_id` int(11) NOT NULL DEFAULT '0',
  `user_first_name` varchar(15) NOT NULL,
  `user_last_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  PRIMARY KEY (`metirial_id`),
  KEY `user_first_name` (`user_first_name`,`user_last_name`,`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `metirial_donation_user`
--

CREATE TABLE IF NOT EXISTS `metirial_donation_user` (
  `metirial_id` int(11) NOT NULL DEFAULT '0',
  `user_first_name` varchar(15) NOT NULL,
  `user_last_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  PRIMARY KEY (`metirial_id`),
  KEY `user_first_name` (`user_first_name`,`user_last_name`,`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metirial_donation_user`
--

INSERT INTO `metirial_donation_user` (`metirial_id`, `user_first_name`, `user_last_name`, `user_email`) VALUES
(45, '1234', 'Mouse', '13beseuhussain@seecsada.edu.pk'),
(46, '1234', 'Mouse', '13beseuhussain@seecsada.edu.pk'),
(47, '1234', 'Mouse', '13beseuhussain@seecsada.edu.pk');

-- --------------------------------------------------------

--
-- Table structure for table `mh_users`
--

CREATE TABLE IF NOT EXISTS `mh_users` (
  `id_mh_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `contact_number` varchar(45) NOT NULL,
  `is_donor` tinyint(4) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id_mh_users`),
  KEY `userlnk_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mh_users`
--

INSERT INTO `mh_users` (`id_mh_users`, `user_id`, `contact_number`, `is_donor`, `address`) VALUES
(1, 19, '923121234567', 0, 'house 1 street 2 awqq'),
(3, 21, '923121234567', 1, 'asasewe sdfsdfsd sdfsd f'),
(4, 24, '923121234567', 0, 'asdasjhd'),
(5, 25, '923121234567', 1, 'sdfsdf'),
(6, 33, '923121234567', 1, 'sdasd asdasd adada');

-- --------------------------------------------------------

--
-- Table structure for table `mh_user_data`
--

CREATE TABLE IF NOT EXISTS `mh_user_data` (
  `user_first_name` varchar(15) NOT NULL,
  `user_last_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_donor` varchar(1) DEFAULT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_contact_number` int(12) NOT NULL,
  PRIMARY KEY (`user_first_name`,`user_last_name`,`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mh_user_data`
--

INSERT INTO `mh_user_data` (`user_first_name`, `user_last_name`, `user_email`, `user_donor`, `user_password`, `user_address`, `user_contact_number`) VALUES
('1234', 'Mouse', '13beseuhussain@seecsada.edu.pk', '1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sdasd asdasd adada', 2147483647),
('test', 'check', 'abc@kg.com', '1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asasewe sdfsdfsd sdfsd f', 2147483647),
('test', 'check', 'skipper.umar@gmail.cd.com', '1', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'sdfsdf', 2147483647),
('umar', 'hussain', '13beseuhussain@edu.pk', '0', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asdasjhd', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_01_01_062528_create_images_table', 1),
('2016_01_02_062528_create_MMusers_table', 1),
('2016_01_03_062528_create_schools_table', 1),
('2016_01_04_062528_create_password_resets_table', 1),
('2016_01_05_062528_create_donations_table', 1),
('2016_01_01_062528_create_images_table', 1),
('2016_01_02_062528_create_MMusers_table', 1),
('2016_01_03_062528_create_schools_table', 1),
('2016_01_04_062528_create_password_resets_table', 1),
('2016_01_05_062528_create_donations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mmm_users`
--

CREATE TABLE IF NOT EXISTS `mmm_users` (
  `id_mm_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `bio` longtext NOT NULL,
  `more_info` text NOT NULL,
  `occupation` varchar(45) NOT NULL,
  PRIMARY KEY (`id_mm_users`),
  KEY `user_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mmm_users`
--

INSERT INTO `mmm_users` (`id_mm_users`, `user_id`, `phone_number`, `bio`, `more_info`, `occupation`) VALUES
(1, 22, '923121345678', 'sdfhsdfsdnfjk fsdjk f', 'sdfsdfnsdfk sdfsdk fsdkfs', 'carpainter'),
(2, 24, '923121234567', 'sdfsdfsd', 'sdfsd', 'dfsdf'),
(3, 25, '923121234567', 'fwfjkwefnw vk jkdsjksdnfsjknsjkdf sd fsdfw ieof wehdsfi oifoweoif uwo f wofjoweiow f ow fowe ofwo fow eo fuou fowe fowe ufouwe fuweuo fuweo fuoweiu iofu weiofwri uf orwfuru frefu erfoe rg eru ger gerio geroi goeri goetg trgu er ger goer oesfsdfsdfsdfsdfsdfsdf sdfsdfsd sd fsd fs  sd  d  d d d d d d werwern wefw jif rf erj fnd fn n efn wejn fn fne rfn enmr gmn rmn nmd vcm vern n vd fvn sdm vmsnd fnmw em mw', 'sfsdfsdssd', 'fwe'),
(4, 33, '923121234567', 'asdasdasd', 'asdasdadasdas', 'adasa'),
(5, 35, '923121234567', 'buhbuhj', 'zxdfxfgc', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `mm_users`
--

CREATE TABLE IF NOT EXISTS `mm_users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `more_info` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `mm_users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mm_users`
--

INSERT INTO `mm_users` (`user_id`, `name`, `email`, `password`, `phone_number`, `occupation`, `role`, `bio`, `more_info`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Abdul Basit12', 'basit850@gmail.co12m', 'abcd123423', 'abcd123re4', 'Teacherer', 0, 'nothing Special ', 'fdsaf', 's7bp05t1wawJpX3SRmGlILYpxXGHbvbgekvXZxaGX9MyYgDpGr9XKCPgEes6', '0000-00-00 00:00:00', '2016-01-02 05:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `monetary_donation`
--

CREATE TABLE IF NOT EXISTS `monetary_donation` (
  `problem_id` int(11) NOT NULL AUTO_INCREMENT,
  `problem_name` varchar(30) NOT NULL,
  `problem_description` varchar(500) NOT NULL,
  `money_required` int(11) DEFAULT NULL,
  `money_recieved` int(11) DEFAULT '0',
  `picture` varchar(30) DEFAULT NULL,
  `acceptor_contact` varchar(12) NOT NULL,
  PRIMARY KEY (`problem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE IF NOT EXISTS `money` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(10) unsigned NOT NULL,
  `problemId` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `money_problemid_foreign` (`problemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `name`, `organization`, `phone`, `email`, `address`, `city`, `state`, `cost`, `problemId`, `created_at`, `updated_at`) VALUES
(32, 'Beverly Hills', 'Xfwgc', '3105551253', 'bhills_1253@mailinator.com', 'Cmqhzi lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Beverly Hills', 'CA', 1253, 4, '2016-01-02 13:48:26', '2016-01-02 13:48:26'),
(33, 'Beverly Hills', 'Jhhgy', '3105550533', 'bhills_0533@mailinator.com', 'Haenuf lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Beverly Hills', 'CA', 533, 2, '2016-01-02 13:53:31', '2016-01-02 13:53:31'),
(34, 'Beverly Hills', 'Ckhvd', '3105557836', 'bhills_7836@mailinator.com', 'Yngafe lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Beverly Hills', 'CA', 7836, 2, '2016-01-02 14:14:07', '2016-01-02 14:14:07'),
(35, 'Beverly Hills', 'Xaaxh', '3105555886', 'bhills_5886@mailinator.com', 'Gdjvnc lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Beverly Hills', 'CA', 5886, 2, '2016-01-02 14:16:25', '2016-01-02 14:16:25'),
(36, 'Beverly Hills', 'Sygdo', '3105555116', 'bhills_5116@mailinator.com', 'Wahhoo lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Beverly Hills', 'CA', 5116, 5, '2016-01-02 14:25:14', '2016-01-02 14:25:14'),
(37, 'Beverly Hills', 'Xdodi', '3105551598', 'bhills_1598@mailinator.com', 'Qqqbvi lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Beverly Hills', 'CA', 1598, 2, '2016-01-02 15:08:22', '2016-01-02 15:08:22'),
(38, 'Beverly Hills', 'Iiayf', '3105554852', 'bhills_4852@mailinator.com', 'Jrjoaq lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Beverly Hills', 'CA', 4852, 2, '2016-01-03 03:10:26', '2016-01-03 03:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `mr_users`
--

CREATE TABLE IF NOT EXISTS `mr_users` (
  `idmr_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`idmr_users`),
  KEY `userid_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mr_users`
--

INSERT INTO `mr_users` (`idmr_users`, `user_id`, `contact`, `role`) VALUES
(1, 24, '923121234567', 0),
(2, 33, '923121234567', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
  `user_id` int(11) NOT NULL,
  `ngo_name` varchar(255) NOT NULL,
  `ngo_email` varchar(50) NOT NULL,
  `ngo_phone` varchar(20) DEFAULT NULL,
  `ngo_image` varchar(50) DEFAULT NULL,
  `ngo_description` varchar(255) DEFAULT NULL,
  `ngo_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ngo_rating` float DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `ngo_name` (`ngo_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_cause`
--

CREATE TABLE IF NOT EXISTS `ngo_cause` (
  `cause_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cause_title` varchar(50) DEFAULT NULL,
  `cause_venue` varchar(100) DEFAULT NULL,
  `cause_cover` varchar(50) DEFAULT NULL,
  `cause_description` varchar(255) DEFAULT NULL,
  `is_completed` tinyint(1) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `finishing_date` date DEFAULT NULL,
  PRIMARY KEY (`cause_id`),
  KEY `User_ID_Cause_FK` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_item`
--

CREATE TABLE IF NOT EXISTS `ngo_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `cause_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_description` varchar(255) DEFAULT NULL,
  `item_worth` int(11) DEFAULT NULL,
  `item_required` int(11) DEFAULT NULL,
  `item_recieved` int(11) DEFAULT NULL,
  `item_promised` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `Cause_ID_FK` (`cause_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_message`
--

CREATE TABLE IF NOT EXISTS `ngo_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `message_subject` varchar(100) DEFAULT NULL,
  `message_body` varchar(100) DEFAULT NULL,
  `send_date` date DEFAULT NULL,
  PRIMARY KEY (`message_id`),
  KEY `User_ID_Message_FK` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_user`
--

CREATE TABLE IF NOT EXISTS `ngo_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(75) NOT NULL,
  `is_user_ngo` tinyint(1) DEFAULT NULL,
  `is_user_admin` tinyint(1) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_user`
--

INSERT INTO `ngo_user` (`user_id`, `user_name`, `is_user_ngo`, `is_user_admin`, `pass`) VALUES
(1, 'wqe', 1, 1, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `pamphlets`
--

CREATE TABLE IF NOT EXISTS `pamphlets` (
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `pam_id` int(11) NOT NULL,
  `pam_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `cell` varchar(25) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `sponsored` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`, `title`, `cell`, `fullname`, `price`, `sponsored`) VALUES
(61, 'photos/kk.jpg', 'hssa', 'bmwclassic', '03939933', 'hussnain', '3773373', 0),
(60, 'photos/kk.jpg', 'hushwuhushwu', 'bmw classic', '', '', '120000', 0),
(59, 'photos/1546385_657214171063958_5685249054500195149_n.jpg', '', '', '', '', '', 0),
(58, 'photos/10566357_915123541847414_2117040397_n.jpg', 'hdhushudhhdus', 'hussnain', '03128888822', 'hussnain', '1200000', 0),
(57, 'photos/10566357_915123541847414_2117040397_n.jpg', 'hdhushudhhdus', 'hussnain', '03128888822', 'hussnain', '1200000', 0),
(56, 'photos/', '', '', '', '', '', 0),
(53, 'photos/ss.jpg', 'brandnew', 'bmw classic', '', '', '200000', 0),
(54, 'photos/rolls.jpg', 'shsuhushushus', 'HealthyFit', '', '', '3939', 0),
(55, 'photos/kk.jpg', 'hey there', 'hhhhh', '99999', 'hhhhhhhhhhh', '313232', 0),
(62, 'photos/kk.jpg', 'nice one', 'bmw classic', '03333222', 'hussnain', '1230', 0),
(63, 'photos/', '', '', '', '', '', 0),
(64, 'photos/kk.jpgss', 'hssass', 'bmwclassicss', '03939933ss', 'hussnainss', '3773373ss', 1),
(65, '', '', '', '', '', '', 0),
(66, '', '', '', '', '', '', 0),
(67, '', '', '', '', '', '', 0),
(68, '', '', '', '', '', '', 0),
(69, '', '', '', '', '', '', 0),
(70, '', '', '', '', '', '', 0),
(71, '', '', '', '', '', '', 0),
(72, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_table1`
--

CREATE TABLE IF NOT EXISTS `post_table1` (
  `cmnt-num` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `comment` mediumtext NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cmnt-num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_table1`
--

INSERT INTO `post_table1` (`cmnt-num`, `username`, `comment`, `posted_at`) VALUES
(1, 'James', '\r\naccepted\r\nI''ll make a quick explanation for you at your level of understanding. You will want to follow the tutorial Houcine gave you, but to answer your question best I can:\r\n\r\nFirst off: A form is a field that users input information into. Like a textbox, or a checkbox. You CAN put multiple forms on a single page. For example:\r\n\r\n<LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"\r\nandroid:layout_width="fill_parent"\r\nandroid:layout_height="fill_parent"\r\nandroid:orientation="vertical" >\r\n\r\n<TextView\r\n    android:layout_width="fill_parent"\r\n    android:layout_height="wrap_content"\r\n    android:text="@string/hello" />\r\n\r\n<EditText\r\n    android:id="@+id/editText1"\r\n    android:layout_width="match_parent"\r\n    android:layout_height="wrap_content" >\r\n\r\n    <requestFocus />\r\n</EditText>\r\n\r\n<CheckBox\r\n    android:id="@+id/checkBox1"\r\n    android:layout_width="wrap_content"\r\n    android:layout_height="wrap_content"\r\n    android:text="CheckBox" />\r\n\r\n<RadioButton\r\n    android:id="@+id/radioButton1"\r\n    android:layout_width="wrap_content"\r\n    android:layout_height="wrap_content"\r\n    android:text="RadioButton" />\r\n\r\n<Spinner\r\n    android:id="@+id/spinner1"\r\n    android:layout_width="match_parent"\r\n    android:layout_height="wrap_content" />\r\nSee, all sorts of forms!\r\n\r\nBut I think what you mean to ask is, how do I link to different layouts.\r\n\r\nThe answer to your second question is: Yes! Simply make a new xml file in your res>layout folder! Toss a <?xml version="1.0" encoding="utf-8"?> at the top then have fun!\r\n\r\nIf you want to link to that new layout, make a button or something in main.xml. in the .xml file of that button, add android:onClick="doThis" (or whatever you want in the quotations) to the button.\r\n\r\nNow, make your second page (a new class) in the same directory as your main.java. Call it whatever you want. I''m going to call it Page2Activity.java.\r\n\r\nNow, to switch between layouts easily as a beginner, I found this is the easiest way: Lets say our second page was page2.xml, add this piece of code into your main activity''s java file.\r\n\r\n    public void doThis(View view) {\r\n    Intent page2 = new Intent();\r\n    page2.setClassName("com.yourproject",\r\n            "com.yourproject.page2Activity");\r\n    startActivity(page2);\r\nThis should take you to the next class! Great huh? But we still need to use our page2.xml. You could use inflaters, (read up on those sometimes), but for beginner''s sake just put\r\n\r\nsetContentView(R.layout.page2);\r\nafter\r\n\r\n    public void onCreate(Bundle savedInstanceState) {\r\n    super.onCreate(savedInstanceState);\r\nIn your Page2Activity\r\n\r\nONE MORE THING: You have to add your new activity to your manifest! Easy peasy. Open up your AndroidManifest.xml, and add\r\n\r\n<activity android:name=".Page2Activity"</activity>\r\nright after the first you see (which would be the main one)\r\n\r\nTry it out!', '2015-12-31 21:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `problem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `severity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `solved` int(10) unsigned NOT NULL DEFAULT '0',
  `userId` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `problems_phone_unique` (`phone`),
  KEY `problems_userid_foreign` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `name`, `phone`, `address`, `problem`, `severity`, `cost`, `solved`, `userId`, `created_at`, `updated_at`) VALUES
(2, 'Beverly Hills', '3105550065', '0065 Beverly Dr', 'Awlqla lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'high', 65, 1, 2, '2015-12-18 15:35:57', '2015-12-21 14:10:26'),
(3, 'Beverly Hills', '3105557186', '7186 Beverly Dr', 'Qhtjed lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'high', 7186, 1, 2, '2015-12-18 15:36:16', '2015-12-19 08:37:43'),
(4, 'Waqas', '025998989', 'some address', 'Problem Detail', 'extreme', 989, 0, 2, '2015-12-19 09:58:06', '2015-12-19 09:58:06'),
(5, 'Beverly Hills', '3105552657', '2657 Beverly Dr', 'Bzaygi lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'high', 2657, 0, 2, '2016-01-02 13:09:02', '2016-01-02 13:09:02'),
(9, 'Beverly Hills', '310555552657', '2657 Beverly Dr', 'Bzaygi lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'high', 2657, 0, 1, '2016-01-02 13:09:55', '2016-01-02 13:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `profile_users`
--

CREATE TABLE IF NOT EXISTS `profile_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `gender` int(11) NOT NULL,
  `education` varchar(250) DEFAULT NULL,
  `likes` varchar(250) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_info`
--

CREATE TABLE IF NOT EXISTS `question_info` (
  `que_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) DEFAULT NULL,
  `ques_desc` varchar(135) NOT NULL,
  PRIMARY KEY (`que_id`),
  KEY `test_id_idx` (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `question_info`
--

INSERT INTO `question_info` (`que_id`, `test_id`, `ques_desc`) VALUES
(10, 2, 'In high energy physics scientist study '),
(11, 2, '1 mile is equal to '),
(12, 2, 'Number of significant figure in 0.0173 are:'),
(13, 2, 'which one of the following is not the unit of length:'),
(14, 2, 'which one is highest power multiple '),
(15, 4, 'The number of moles of CO2 which contain 8gm of O2'),
(16, 4, 'The electrolyte used in fuel cell is '),
(17, 4, 'burning of coal is an example of '),
(18, 4, 'which of the given is pseudo solid '),
(19, 4, 'Ice occupies more space than water '),
(20, 6, 'if a =b and b=c then a = c this property is called '),
(21, 6, 'if the product of complex number (4,3) and (5,-6) is'),
(22, 6, '(2,6)/(4,2)'),
(23, 6, 'multiplicative identity of complex number is '),
(24, 6, 'if a > b and b>a then'),
(25, 2, 'q'),
(26, 2, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `rating_number` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`),
  KEY `user_id_FK` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registered_modules`
--

CREATE TABLE IF NOT EXISTS `registered_modules` (
  `id_registered_modules` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `module_id` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_registered_modules`),
  KEY `users_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `registered_modules`
--

INSERT INTO `registered_modules` (`id_registered_modules`, `user_id`, `module_id`, `password`) VALUES
(1, 19, './school_management', ''),
(2, 19, './drixel', ''),
(3, 19, './academic_scholorships', ''),
(4, 19, './donations', ''),
(5, 19, './d2quiz', ''),
(6, 19, './ngos', ''),
(7, 19, './problem_sharing', ''),
(8, 21, './d2quiz', ''),
(10, 21, './donations', ''),
(11, 21, './school_management', ''),
(12, 22, './school_renovation', ''),
(13, 22, './problem_sharing', ''),
(14, 22, './drixel', ''),
(15, 22, './d2quiz', ''),
(16, 22, './school_management', ''),
(17, 24, './academic_scholorships', ''),
(18, 24, './school_renovation', ''),
(19, 24, './problem_sharing', ''),
(20, 24, './food_sustenance', ''),
(21, 24, './donations', ''),
(22, 24, './p2p_ecommerce', ''),
(23, 24, './drixel', ''),
(24, 24, './school_management', ''),
(25, 24, './d2quiz', ''),
(26, 24, './ngos', ''),
(27, 24, './blood_donations', ''),
(28, 25, './problem_sharing', ''),
(29, 25, './drixel', ''),
(30, 25, './school_management', ''),
(31, 25, './school_renovation', ''),
(32, 25, './academic_scholorships', ''),
(33, 25, './donations', ''),
(34, 19, './p2p_ecommerce', ''),
(35, 19, './blood_donations', ''),
(36, 27, './school_management', ''),
(37, 27, './p2p_ecommerce', ''),
(38, 27, './blood_donations', ''),
(39, 28, './blood_donations', ''),
(40, 29, './school_management', ''),
(41, 30, './school_management', ''),
(42, 31, './school_management', ''),
(43, 32, './school_management', ''),
(44, 32, './academic_scholorships', ''),
(45, 33, './donations', ''),
(48, 33, './academic_scholorships', ''),
(49, 33, './p2p_ecommerce', ''),
(50, 33, './drixel', ''),
(51, 33, './blood_donations', ''),
(52, 33, './d2quiz', ''),
(53, 33, './problem_sharing', ''),
(54, 33, './food_sustenance', ''),
(55, 33, './school_renovation', ''),
(56, 33, './school_management', ''),
(57, 34, './blood_donations', ''),
(58, 34, './school_management', ''),
(59, 35, './school_renovation', NULL),
(60, 35, './problem_sharing', NULL),
(61, 35, './academic_scholorships', NULL),
(62, 35, './drixel', NULL),
(63, 35, './d2quiz', NULL),
(64, 35, './blood_donations', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `username` varchar(45) DEFAULT NULL,
  `test_id` int(11) NOT NULL,
  `test_date` datetime DEFAULT NULL,
  `score` int(11) NOT NULL,
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`result_id`),
  KEY `test_id2_idx` (`test_id`),
  KEY `username1_idx` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`username`, `test_id`, `test_date`, `score`, `result_id`) VALUES
('talha', 6, '2015-01-26 03:27:34', 0, 1),
('talha', 6, '2015-01-26 03:29:43', 2, 2),
('talha', 6, '2015-01-26 03:31:13', 1, 3),
('talha', 2, '2015-01-26 12:00:07', 0, 4),
('talha', 2, '2015-01-26 12:11:46', 0, 5),
('talha', 2, '2015-01-26 13:11:12', 0, 6),
('talha', 6, '2015-01-27 10:08:12', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `amount_required` int(11) NOT NULL,
  `amount_gathered` int(11) NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`school_id`),
  KEY `schools_user_id_foreign` (`user_id`),
  KEY `schools_image_id_foreign` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sch_communication`
--

CREATE TABLE IF NOT EXISTS `sch_communication` (
  `school_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_is` tinyint(1) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sch_donations`
--

CREATE TABLE IF NOT EXISTS `sch_donations` (
  `don_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `don_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`don_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sch_requests`
--

CREATE TABLE IF NOT EXISTS `sch_requests` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `req_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `full_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `course_degree` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `approx_amount` int(11) NOT NULL,
  `school_name` varchar(80) NOT NULL,
  `req_text` text NOT NULL,
  `add_info` text NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sch_requests`
--

INSERT INTO `sch_requests` (`req_id`, `user_id`, `req_time`, `full_name`, `father_name`, `course_degree`, `age`, `gender`, `approx_amount`, `school_name`, `req_text`, `add_info`) VALUES
(1, 32, '0000-00-00 00:00:00', '11', 'abc', 'bs', 21, '0', 5000, 'fsd sdfs', 'erwereiw ', 'werwer');

-- --------------------------------------------------------

--
-- Table structure for table `sch_school`
--

CREATE TABLE IF NOT EXISTS `sch_school` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `school_ame` varchar(80) NOT NULL,
  `school_address` varchar(100) NOT NULL,
  `school_contact` varchar(20) NOT NULL,
  `school_email` varchar(30) NOT NULL,
  `school_website` varchar(40) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sch_school`
--

INSERT INTO `sch_school` (`school_id`, `user_id`, `school_ame`, `school_address`, `school_contact`, `school_email`, `school_website`) VALUES
(1, 9, 'abc school', 'xyz city', '03236566', 's@l.com', 'sdfsf'),
(3, 14, 'a', 'b', 'c', 'd@e.com', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `sch_users`
--

CREATE TABLE IF NOT EXISTS `sch_users` (
  `sch_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `is_school` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sch_users`
--

INSERT INTO `sch_users` (`sch_id`, `user_id`, `rating`, `is_school`, `is_admin`) VALUES
(1, 8, 0, 0, 1),
(2, 9, 0, 1, 0),
(3, 14, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sr_users`
--

CREATE TABLE IF NOT EXISTS `sr_users` (
  `idsr_users` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_role` varchar(45) NOT NULL DEFAULT 'student',
  PRIMARY KEY (`idsr_users`),
  KEY `userid_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sr_users`
--

INSERT INTO `sr_users` (`idsr_users`, `user_id`, `user_role`) VALUES
(1, 19, 'student'),
(2, 20, 'student'),
(3, 21, 'student'),
(4, 22, 'student'),
(5, 23, 'student'),
(6, 24, 'student'),
(7, 25, 'student'),
(8, 26, 'student'),
(9, 27, 'student'),
(10, 28, 'student'),
(11, 29, 'student'),
(12, 30, 'teacher'),
(13, 31, 'admin'),
(14, 32, 'admin'),
(15, 33, 'teacher'),
(16, 34, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `stu_score_tbl`
--

CREATE TABLE IF NOT EXISTS `stu_score_tbl` (
  `ss_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(50) NOT NULL,
  `faculties_id` varchar(50) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `miderm` float NOT NULL,
  `final` float NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`ss_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `stu_score_tbl`
--

INSERT INTO `stu_score_tbl` (`ss_id`, `stu_id`, `faculties_id`, `sub_id`, `miderm`, `final`, `note`) VALUES
(29, 'Saif-ur- Rehman', 'test', 'fdsf', 45, 80, 'fgdgsg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_tbl`
--

CREATE TABLE IF NOT EXISTS `stu_tbl` (
  `roll_no` int(10) NOT NULL,
  `stu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `student_expense` int(11) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `stu_tbl`
--

INSERT INTO `stu_tbl` (`roll_no`, `stu_id`, `f_name`, `l_name`, `gender`, `dob`, `address`, `phone`, `email`, `student_expense`) VALUES
(2116, 1, 'Saif-ur-', 'Rehman', 'male', '1991-03-01', 'Lahore', '56456654654', 'saif-ur@gmail.com', 564565),
(2115, 2, 'Jazib', 'Bashir', 'male', '1990-05-04', '  Lahore', '03054038588', 'jazib@yahoo.com', 6767),
(2103, 3, 'Tahir', 'Awan', 'Male', '1988-05-05', '   Lahore', '03054038588', 'tahir@gmail.com   ', 0),
(2110, 4, 'Abdul', 'Jabbar', 'Male', '1989-06-06', 'Lahore', '03054038588 ', 'jabbar@gmail.com', 0),
(435, 5, 'gfdgfdg', 'gsfgdf', 'male', '2016-01-21', 'fdsfdf', '435435345435', 'fdggfsdg@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject_info`
--

CREATE TABLE IF NOT EXISTS `subject_info` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(45) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subject_info`
--

INSERT INTO `subject_info` (`sub_id`, `subject_name`) VALUES
(1, 'physics'),
(2, 'chemistry'),
(3, 'maths'),
(4, 'Biology'),
(5, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `sub_tbl`
--

CREATE TABLE IF NOT EXISTS `sub_tbl` (
  `sub_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faculties_id` varchar(50) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sub_tbl`
--

INSERT INTO `sub_tbl` (`sub_id`, `faculties_id`, `teacher_id`, `semester`, `sub_name`, `note`) VALUES
(7, 'test', 'Yameen Bashir', '4', 'fdsf', 'dsfdf');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE IF NOT EXISTS `teacher_tbl` (
  `teacher_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `salary` float NOT NULL,
  `married` char(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(80) NOT NULL DEFAULT 'teacher',
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`teacher_id`, `f_name`, `l_name`, `gender`, `dob`, `address`, `degree`, `salary`, `married`, `phone`, `email`, `type`) VALUES
(1, 'Yameen', 'Bashir', 'Male', '1985-03-05', 'Lahore', 'Master', 1500, 'No', '015 871 787', 'yameen.like@gmail.com', 'teacher'),
(2, 'Atta-ur-', 'Rehman', 'Male', '1986-03-08', 'Lahore', 'Bachelor', 1500, 'Yes', '016 572 393', 'attarehman@gmail.com', 'teacher'),
(3, 'Hussain', 'Naqvi', 'Male', '1990-07-03', 'Lahore', 'Bachelor', 1000, 'Yes', '087 666 55 ', 'hussain@gmail.com', 'teacher'),
(4, 'Maria', 'Atif', 'Male', '0000-00-00', 'Lahore', 'Bachelor', 1000, 'Yes', '099 77 66 33', 'maria@gmail.com', 'teacher'),
(8, 'trett', 'terert', 'female', '2016-01-20', 'gtyrtyrty', 'FSC', 45435, 'female', '45454354353453', '', 'staff'),
(9, 'tret', 'ghgfh', 'male', '2016-01-06', 'rtetret', 'Matric', 543, 'male', '565654654656', '', 'staff'),
(10, 'qwe', 'qwe', 'male', '2016-01-13', 'gfdgfg', 'Basic', 3456, 'yes', '45345454556', '', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `test_info`
--

CREATE TABLE IF NOT EXISTS `test_info` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) NOT NULL,
  `test_name` varchar(45) DEFAULT NULL,
  `total_que` int(11) DEFAULT NULL,
  PRIMARY KEY (`test_id`),
  KEY `sub_id_idx` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `test_info`
--

INSERT INTO `test_info` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(1, 1, 'first year', 5),
(2, 1, 'second year', 5),
(3, 2, 'first year', 5),
(4, 2, 'second year', 5),
(5, 3, 'first year ', 5),
(6, 3, 'second year', 5);

-- --------------------------------------------------------

--
-- Table structure for table `things`
--

CREATE TABLE IF NOT EXISTS `things` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `problemId` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ua_users`
--

CREATE TABLE IF NOT EXISTS `ua_users` (
  `idua_users` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idua_users`),
  KEY `userss_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ua_users`
--

INSERT INTO `ua_users` (`idua_users`, `role`, `phonenumber`, `user_id`) VALUES
(1, 0, '923121234567', 28),
(2, 1, '923121234567', 33),
(3, 0, '923121234567', 34),
(4, 1, '923121234567', 35);

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE IF NOT EXISTS `useranswer` (
  `user_name` varchar(45) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_id` int(11) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL,
  `userans_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userans_id`),
  KEY `test_id_idx` (`test_id`),
  KEY `que_id_idx` (`que_id`),
  KEY `username_idx` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`user_name`, `test_id`, `que_id`, `true_ans`, `your_ans`, `userans_id`) VALUES
('talha', 6, 20, 2, 4, 1),
('talha', 6, 21, 4, 1, 2),
('talha', 6, 22, 1, 2, 3),
('talha', 6, 23, 2, 2, 4),
('talha', 6, 24, 1, 1, 5),
('talha', 6, 20, 2, 4, 6),
('talha', 6, 21, 4, 1, 7),
('talha', 6, 22, 1, 2, 8),
('talha', 6, 23, 2, 2, 9),
('talha', 6, 24, 1, 2, 10),
('talha', 2, 10, 4, 1, 11),
('talha', 2, 11, 2, 1, 12),
('talha', 2, 12, 2, 1, 13),
('talha', 2, 13, 2, 1, 14),
('talha', 2, 14, 2, 1, 15),
('talha', 2, 10, 4, 1, 16),
('talha', 2, 11, 2, 1, 17),
('talha', 2, 12, 2, 1, 18),
('talha', 2, 14, 2, 1, 19),
('talha', 2, 10, 4, 1, 20),
('talha', 2, 11, 2, 1, 21),
('talha', 2, 12, 2, 1, 22),
('talha', 2, 13, 2, 1, 23),
('talha', 2, 14, 2, 1, 24),
('talha', 6, 20, 2, 1, 25),
('talha', 6, 21, 4, 2, 26),
('talha', 6, 22, 1, 1, 27),
('talha', 6, 23, 2, 1, 28),
('talha', 6, 24, 1, 1, 29);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE IF NOT EXISTS `users_tbl` (
  `u_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `type` char(10) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`u_id`, `username`, `type`, `approved`) VALUES
(1, 'admin', 'admin', 1),
(4, 'moazkhan', 'admin', 1),
(5, 'teacher', 'teacher', 0),
(6, 'alikhan', 'student', 1),
(8, 'bilalkhan', 'teacher', 1),
(11, 'ter', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(19, 'admin11', 'Mickey', 'Mouse', '13beseuhussain@seecs.edu.pk', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(20, '77', 'Mickey', 'Mouse', 'ab@q', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(21, '2345', 'test', 'check', 'abc@kg.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(22, '13beseuhussain', '1234', 'asd', 'sk@q', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(23, '123456', 'dasadas', 'ewe', 'skipper.umar@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(24, 'test21', 'umar', 'hussain', '13beseuhussain@edu.pk', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(25, 'finaltest', 'test', 'check', 'skipper.umar@gmail.cd.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 0),
(26, '14bbb123', '1234', 'Mouse', '13beseuhussain@scs.edu.pk', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(27, '78945687', 'qwe', 'Mouse', '13beseuhussain@seecs.e.pk', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(28, '654321', '1234', 'asd', 'skipper.umar@il.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(29, 'portar43', 'test', '87', 'skipper.umar@g.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(30, '13beseuhussain32', 'dasadas', '78979', 'qwee@dew.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(31, 'moazkhan', 'Moaz', 'Khan', '13besemmoaz@seecs.edu.pk', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(32, 'safierehman', 'Safieur', 'Rehman', '13beserrehman@seecs.edu.pk', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(33, 'admin112', '1234', 'Mouse', '13beseuhussain@seecsada.edu.pk', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(34, '110beseuhussain', 'Mickey', 'Mouse', 'sakipper.umar@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(35, 'testtest', 'Mickey', 'Mouse', 'skipper.umar@gmailfgdf.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `confirm_pass` varchar(45) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `username_idx` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `pass`, `confirm_pass`, `firstname`, `lastname`, `address`, `city`, `phone`, `email`) VALUES
(1, 'talha', 'munir', 'munir', 'talha', 'munir', '151/E garden town', 'Multan', '3317098137', 'talhamunir@gmail.com'),
(2, 'moiz', 'farooq', 'farooq', 'AbdulMoiz', 'Farooq', '22 Ghazali Street', 'Abbotabad', '3455900866', 'abdulmoiz@gmail.com'),
(27, 'Talha', '12345', '12345', 'Talha', 'Munir', '2', '1', '2', 'talhamunir95@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_num` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `skills` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `date_of_birth`, `gender`, `age`, `address`, `contact_num`, `image`, `skills`) VALUES
(101, '2000-01-21', 'male', 16, 'Bahria town phase 9, lahore', 2147483647, 'ahmed.jpg', 'Article Writing , Editing & Database Management');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `first name` varchar(15) NOT NULL,
  `last name` varchar(15) NOT NULL,
  `email id` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10146 ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `first name`, `last name`, `email id`, `password`, `role`) VALUES
(101, 'ahmed19', 'Ahmed', 'Mubashar', 'ahmed_191@gmail.com', 'ahmed1234', 'student'),
(10145, '2000-01-21', 'male', '16', 'Bahria town phase 9, lahore', '2147483647', 'ahmed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_comment`
--

CREATE TABLE IF NOT EXISTS `visitor_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_name` varchar(30) NOT NULL,
  `visitor_email` varchar(30) NOT NULL,
  `visitor_subject` varchar(55) DEFAULT NULL,
  `visitor_message` varchar(400) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `am_users`
--
ALTER TABLE `am_users`
  ADD CONSTRAINT `id` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `answer_info`
--
ALTER TABLE `answer_info`
  ADD CONSTRAINT `que_id3` FOREIGN KEY (`que_id`) REFERENCES `question_info` (`que_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `an_users`
--
ALTER TABLE `an_users`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cw_users`
--
ALTER TABLE `cw_users`
  ADD CONSTRAINT `p_user` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`),
  ADD CONSTRAINT `donations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `mm_users` (`user_id`);

--
-- Constraints for table `hw_users`
--
ALTER TABLE `hw_users`
  ADD CONSTRAINT `user_id_hw_users` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mh_users`
--
ALTER TABLE `mh_users`
  ADD CONSTRAINT `userlnk` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `mmm_users`
--
ALTER TABLE `mmm_users`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mr_users`
--
ALTER TABLE `mr_users`
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `ngo`
--
ALTER TABLE `ngo`
  ADD CONSTRAINT `User_ID_FK` FOREIGN KEY (`user_id`) REFERENCES `ngo_user` (`user_id`);

--
-- Constraints for table `ngo_cause`
--
ALTER TABLE `ngo_cause`
  ADD CONSTRAINT `User_ID_Cause_FK` FOREIGN KEY (`user_id`) REFERENCES `ngo_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ngo_item`
--
ALTER TABLE `ngo_item`
  ADD CONSTRAINT `Cause_ID_FK` FOREIGN KEY (`cause_id`) REFERENCES `ngo_cause` (`cause_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ngo_message`
--
ALTER TABLE `ngo_message`
  ADD CONSTRAINT `User_ID_Message_FK` FOREIGN KEY (`user_id`) REFERENCES `ngo_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_info`
--
ALTER TABLE `question_info`
  ADD CONSTRAINT `test_id` FOREIGN KEY (`test_id`) REFERENCES `test_info` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registered_modules`
--
ALTER TABLE `registered_modules`
  ADD CONSTRAINT `users` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `test_id2` FOREIGN KEY (`test_id`) REFERENCES `test_info` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `username1` FOREIGN KEY (`username`) REFERENCES `login` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`),
  ADD CONSTRAINT `schools_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `mm_users` (`user_id`);

--
-- Constraints for table `sr_users`
--
ALTER TABLE `sr_users`
  ADD CONSTRAINT `sr_userid` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test_info`
--
ALTER TABLE `test_info`
  ADD CONSTRAINT `sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subject_info` (`sub_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ua_users`
--
ALTER TABLE `ua_users`
  ADD CONSTRAINT `userss` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
