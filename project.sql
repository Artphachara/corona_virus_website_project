-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 10:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `level_detail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_detail`) VALUES
(1, 'read  articles  only'),
(2, 'add/edit articles '),
(3, 'can add/edit/delete article/news '),
(4, 'can add/edit/delete article/news and edit home      pages');

-- --------------------------------------------------------

--
-- Table structure for table `medical_personnal`
--

CREATE TABLE `medical_personnal` (
  `medicalp_id` int(11) NOT NULL,
  `fristname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medical_personnal`
--

INSERT INTO `medical_personnal` (`medicalp_id`, `fristname`, `lastname`, `position`, `user_id`) VALUES
(1, 'สมชาย', 'ใจดีมาก', 'ศาสตราจารย์', 2),
(2, 'สมหญิง', 'งานหยาบ', 'พยาบาล', 4),
(3, 'สมุทร', 'สงคราม', 'แพทย์', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `news_message` text COLLATE utf8_unicode_ci NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_message`, `date_update`) VALUES
(11, 'Reimbursement for medical bills for Covid-19 ', 'PHOTO: Bangkok Metro Policefollow us in feedly\r\nTwo university students have died and a third has been rescued after the three allegedly attempted suicide by jumping off the Rama VIII Bridge in Bangkok over the weekend. The three young women jumped off the bridge wishing to end their lives from fears of Covid-19.', '2020-04-06 07:38:01'),
(12, 'CORONAVIRUS (COVID-19)Phuket shuts down two more s', 'Last night at 10pm Phuket?s Governor Phakaphong Tavipatana, announced the ?lock down? of Rawai and Karon districts to contain the spread of the Covid-19outbreak. The proclamation starts today until further notice.\r\n\r\n?People are asked to say in their homes at all times, while public health teams will be deployed to check any common area for the virus.?', '2020-04-06 07:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(4) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level_id`) VALUES
(1, 'admin1', 1111, 4),
(2, 'doctor1', 1111, 2),
(3, 'admin2', 1111, 3),
(4, 'doctor2', 1111, 2),
(5, 'doctor3', 1111, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `medical_personnal`
--
ALTER TABLE `medical_personnal`
  ADD PRIMARY KEY (`medicalp_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical_personnal`
--
ALTER TABLE `medical_personnal`
  MODIFY `medicalp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- country

CREATE TABLE country (
	country_code varchar(55) NOT NULL,
    country_name varchar(255),
    population_million float,
    confirmed_cases_covid int,
    CONSTRAINT pk_country_code
    PRIMARY KEY(country_code)
);

INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (1,'Nakhon Ratchasima',2.61,5);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (2,'Chiang Mai',1.66,12);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (3,'Kanchanaburi',0.84,3);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (4,'Tak',0.53,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (5,'Ubon Ratchathani',1.83,2);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (6,'Surat Thani',1.03,5);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (7,'Chaiyaphum',1.13,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (8,'Mae Hong Son',0.24,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (9,'Phetchabun',0.99,2);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (10,'Lampang',0.75,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (11,'Udon Thani',1.56,2);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (12,'Chiang Rai',1.20,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (13,'Nan',0.24,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (14,'Loei',0.63,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (15,'Khon Kaen',1.78,2);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (16,'Phitsanulok',0.85,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (17,'Buriram',1.57,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (18,'Nakhon Si Thammarat',1.54,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (19,'Sakon Nakhon',1.13,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (20,'Nakhon Sawan',1.07,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (21,'Sisaket',1.46,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (22,'Kamphaeng Phet',0.72,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (23,'Roi Et',1.30,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (24,'Surin',1.38,3);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (25,'Uttaradit',0.46,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (26,'Songkhla',1.38,5);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (27,'Sa Kaeo',0.55,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (28,'Kalasin',0.98,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (29,'Uthai Thani',0.32,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (30,'Sukhothai',0.60,3);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (31,'Phrae',0.45,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (32,'Prachuap Khiri Khan',0.52,6);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (33,'Chanthaburi',0.52,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (34,'Phayao',0.48,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (35,'Phetchaburi',0.47,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (36,'Lopburi',0.75,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (37,'Chumphon',0.49,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (38,'Nakhon Phanom',0.71,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (39,'Suphan Buri',0.84,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (40,'Chachoengsao',0.69,5);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (41,'Maha Sarakham',0.95,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (42,'Ratchaburi',0.85,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (43,'Trang',0.63,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (44,'Prachinburi',0.47,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (45,'Krabi',0.45,2);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (46,'Phichit',0.54,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (47,'Yala',0.50,4);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (48,'Lamphun',0.40,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (49,'Narathiwat',0.76,6);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (50,'Chonburi',1.39,6);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (51,'Mukdahan',0.34,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (52,'Bueng Kan',0.41,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (53,'Phang Nga',0.25,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (54,'Yasothon',0.54,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (55,'Nong Bua Lamphu',0.50,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (56,'Saraburi',0.62,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (57,'Rayong',0.66,2);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (58,'Phatthalung',0.51,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (59,'Ranong',0.17,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (60,'Amnat Charoen',0.37,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (61,'Nong Khai',0.51,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (62,'Trat',0.33,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (63,'Phra Nakhon Si Ayutthaya',0.79,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (64,'Satun',0.30,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (65,'Chai Nat',0.33,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (66,'Nakhon Pathom',0.88,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (67,'Nakhon Nayok',0.25,1);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (68,'Pattani',0.96,11);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (69,'Bangkok',5.68,284);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (70,'Pathum Thani',1.05,4);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (71,'Samut Prakan',1.24,18);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (72,'Ang Thong',0.28,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (73,'Samut Sakhon',0.51,2);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (74,'Sing Buri',0.21,NULL);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (75,'Nonthaburi',1.15,9);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (76,'Phuket',0.36,13);
INSERT INTO `country` (`country_code`,`country_name`,`population_million`,`confirmed_cases_covid`) VALUES (77,'Samut Songkhram',0.51,NULL);