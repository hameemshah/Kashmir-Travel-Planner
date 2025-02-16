-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2025 at 01:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kashmir`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookhotel`
--

CREATE TABLE `bookhotel` (
  `id` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ceid` varchar(100) NOT NULL,
  `rtype` varchar(20) NOT NULL,
  `ccnum` bigint(20) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `room` tinyint(4) NOT NULL,
  `crcnum` bigint(20) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `cpin` tinyint(4) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookhotel`
--

INSERT INTO `bookhotel` (`id`, `cname`, `ceid`, `rtype`, `ccnum`, `cin`, `cout`, `room`, `crcnum`, `bank`, `cpin`, `amount`) VALUES
('reservation@hotelzamrud.com', '', '', 'Single Room', 0, '2022-05-18', '0000-00-00', 0, 0, 'State Bank of India', 0, 0),
('hashim34@yahoo.com', '', '', 'Single Room', 0, '2022-05-20', '2022-05-22', 0, 0, 'State Bank of India', 0, 0),
('hashim34@yahoo.com', '', '', 'Single Room', 0, '0000-00-00', '0000-00-00', 0, 0, 'State Bank of India', 0, 0),
('hashim34@yahoo.com', '', '', 'King Size Room', 0, '2022-05-28', '2022-05-31', 3, 0, 'Axis Bank', 0, 0),
('reservation@hotelzamrud.com', '', '', 'Single Room', 0, '0000-00-00', '0000-00-00', 0, 0, 'State Bank of India', 0, 2000),
('reservation@hotelzamrud.com', '', '', 'Queen Size Room', 0, '2024-06-23', '2024-06-03', 3, 0, 'Allahbad Bank', 0, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `bookshikara`
--

CREATE TABLE `bookshikara` (
  `id` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ceid` varchar(50) NOT NULL,
  `ccnum` bigint(20) UNSIGNED NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `crcnum` bigint(20) UNSIGNED NOT NULL,
  `bank` varchar(100) NOT NULL,
  `cpin` tinyint(3) UNSIGNED NOT NULL,
  `amount` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `id` varchar(255) NOT NULL,
  `food` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ceid` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`id`, `food`, `cname`, `ceid`, `address`) VALUES
('', 'eats@streets.com', 'HAMEEM HUSSAIN SHAH', 'muhammad.hameem.shah@gmail.com', 'DAV College Amritsar'),
('eats@streets.com', 'eats@streets.com', 'HAMEEM HUSSAIN SHAH', 'muhammad.hameem.shah@gmail.com', 'DAV College Amritsar'),
('eats@streets.com', 'eats@streets.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Property` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_No` bigint(20) UNSIGNED NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Pic1` varchar(255) NOT NULL,
  `Pic2` varchar(255) NOT NULL,
  `Pic3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `Name`, `Property`, `Email`, `Mobile_No`, `City`, `Address`, `Type`, `Pic1`, `Pic2`, `Pic3`) VALUES
(1, 'Dum Aaloo', 'Eats & Streets', 'eats@streets.com', 658741523, 'Srinagar', 'boulvard lane road', 'Veg', 'alo1.jpg', 'alo2.jpg', 'alo3.jpg'),
(2, 'Lotus Stem', 'Kahmir Fusion', 'kashmir@fusion.com', 958741524, 'Srinagar', '32 Gayan Marg Link road , New Srinagar', 'Veg', 'lotus1.jpg', 'lotus2.jpg', 'lotus3.jpg'),
(3, 'Mutton Rogan Josh', 'Kahmir Fusion', 'kashmirifoods@gmailcom', 958741524, 'Srinagar', '32 Gayan Marg Link road , New Srinagar', 'Non-Veg', 'mutton1.jpg', 'mutton2.jpg', 'mutton3.jpg'),
(4, 'Khatte Baingan', 'Eat Street', 'eatstreet@gamil.com', 9854751203, 'Anantnag', 'Mughal,Darbar lal chowk, Anantnag 192101', 'three-star', 'baingan1.jpg', 'baingan2.jpg', 'baingan3.jpg'),
(5, 'Haak', 'Koshur Hotel', 'koshurhotel@gamil.com', 9854751236, 'Anantnag', 'Mughal,Darbar lal chowk, Anantnag 192101', 'Veg', 'haak1.jpg', 'haak2.webp', 'haak3.jpg'),
(6, 'Paneer Chaman', 'Koshur Hotel', 'koshurhotel2@gamil.com', 9854751236, 'Anantnag', 'Mughal,Darbar lal chowk, Anantnag 192101', 'Veg', 'chaman1.webp', 'chaman2.jpg', 'chaman3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `breakfast` enum('Yes','No') NOT NULL,
  `lunch` enum('Yes','No') NOT NULL,
  `dinner` enum('Yes','No') NOT NULL,
  `wifi` enum('Yes','No') NOT NULL,
  `ac` enum('Yes','No') NOT NULL,
  `kitchen` enum('Yes','No') NOT NULL,
  `pic1` varchar(255) DEFAULT NULL,
  `pic2` varchar(255) DEFAULT NULL,
  `pic3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pop1` varchar(20) NOT NULL,
  `pop2` varchar(20) NOT NULL,
  `pop3` varchar(20) NOT NULL,
  `distance` varchar(10) NOT NULL,
  `detail` mediumtext NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `pic3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `type`, `district`, `pop1`, `pop2`, `pop3`, `distance`, `detail`, `pic1`, `pic2`, `pic3`) VALUES
(1, 'Pahalgam', 'Hill Station', 'Anantnag', 'Lidder River', 'Kolhoi Glacier', 'Mountains', '66 K.M', 'Pahalgam is a town and a notified area committee in Anantnag district of Kashmir. It is a popular tourist destination and hill station. Its lush green meadows and pristine waters attract thousands of tourists from all over the world each year.\r\n          ', 'pahalgam1.jpg', 'pahalgam2.jpg', 'pahalgam3.jpg'),
(2, 'Tulip Garden', 'Garden', 'Srinagar', 'Tulips', 'Mountains', 'Pleasent weather', '8 K.Ms', 'Indira Gandhi Memorial Tulip garden, previously Model Floriculture Center, is a tulip garden in Srinagar, Jammu and Kashmir, India. It is the largest tulip garden in Asia spread over an area of about 30 ha (74 acres).[1][2] It is situated at the base of the Zabarwan range, built on a sloping ground in a terraced fashion consisting of seven terraces with an overview of the Dal Lake. The garden was opened in 2007 with the aim to boost floriculture and tourism in the Kashmir Valley.[3] It was formerly known as Siraj Bagh.[4][5] About 1.5 million tulip bulbs, all in multiple colours, were brought Keukenhof tulip gardens of Amsterdam.[6] Besides tulips, there are 46 varieties of flowers, including hyacinths, daffodils and ranunculus which were also brought from Holland.[7] The tulip garden is home to around 68 varieties of tulips.', 'tulip1.jpg', 'tulip2.jpg', 'tulip3.jpg'),
(4, 'Srinagar', 'Hill Station', 'Srinagar', 'Dal Lake', 'Nageen Lake', 'City Center', '0 K.M', 'Srinagar is an astounding hill station which will leave you in love with its beauty. This hill station lies on the banks of the Jhelum river and has a cool, pleasant climate all year round. Thus, contributing to the perpetual influx of tourists visiting this city. Srinagar offers a plethora of gorgeous scenic vistas. As you reach Srinagar, you must hire a houseboat and pay a visit to the magnificent Dal lake. Moreover, you can spend a night in one of the houseboats and wake up to a magnificent sunrise that will take your breath away.', 'srinagar1.jpg', 'srinagar2.jpg', 'srinagar3.jpg'),
(5, 'Pathar Masjid', 'Mosque', 'Srinagar', 'Mughal Architecture', 'Spirituality', 'Islam', '4 K.M', 'Pathar Mosque, known locally as Naev Masheed, is a Mughal era stone mosque located in the old city of Srinagar, in the Indian state of Jammu and Kashmir. It is located on the left bank of the River Jhelum, just opposite the shrine of Khanqah-e-Moula.It was built by Mughal Empress Noor Jehan, the wife of emperor Jehangir, in 1623.The mosque has some distinct features that separate it from the rest of the mosques in the Kashmir Valley. Unlike other mosques, it does not have the traditional pyramidal roof. Furthermore, the mosque has nine mehraabs (arches), with the central one being larger than the others', 'masjid1.jpg', 'masjid2.jpg', 'masjid3.jpg'),
(6, 'Pari Mahal', 'Monument', 'Srinagar', 'Fort', 'Hill', 'Park', '10 K.M', 'Pari Mahal or Peer Mahal, also known as The Palace of Fairies, is a seven-terraced garden located at the top of Zabarwan mountain range, overlooking the city of Srinagar and the south-west of Dal Lake in the Indian union territory of Jammu and Kashmir. It is an example of Islamic architecture and patronage of art during the reign of the then Mughal Emperor Shah Jahan.', 'parimahal1.jpg', 'parimahal2.jpg', 'parimahal3.jpg'),
(7, 'Gulmarg', 'Hill Station', 'Baramulla', 'Skiing', 'Gondola', 'Trekking', '10 K.M', 'This hill station is known for its scenic beauty and has also been a popular destination for shooting of various Bollywood films. Gulmarg is surrounded by snow-covered mountains, evergreen hills and valleys. This hill station has also been developed as an adventure hub as the Indian Institute of Skiing and Mountaineering is located here. One of the prime attractions here is the cable car, which is said to be the second largest cable car in the world.', 'gulmarg1.jpg', 'gulmarg2.jpg', 'gulmarg3.jpg'),
(8, 'Shankaracharya Temple', 'Temple', 'Srinagar', 'Hindu Culture', 'Spirituality', 'Lord Shiva', '12 K.M', 'Shankaracharya Temple or Jyeshteshwara Temple is a Hindu temple situated on top of the Shankaracharya Hill on the Zabarwan Range in Srinagar, Jammu and Kashmir, India. It is dedicated to Lord Shiva. The temple is at a height of 1,000 feet above the valley floor and overlooks the city of Srinagar.\r\n\r\nOn festivals such as Herath, as Maha Shivratri is known as in the region, the temple is visited by Kashmiri Hindus.The temple is also considered as a Buddhist icon, and with the hill which has had multiple names over the centuries, is connected to the Persian and Muslim faith as well.\r\n\r\nThe temple and adjacent land is a monument of national importance, centrally protected under the Archaeological Survey of India.Dharmarth Trust has managed the temple since the 19th century, along with others in the region.Karan Singh is the sole chairperson trustee.', 'shankaracharya1.webp', 'shankaracharya2.jpg', 'shankaracharya3.jpg'),
(9, 'Martand Temple', 'Temple', 'Anantnag', 'Ancient Culture', 'History', 'Spritiuality', '9 K.M', 'The Martand Sun Temple is a Hindu temple located near the city of Anantnag in the Kashmir Valley of Jammu and Kashmir (union territory), India. It dates back to the eighth century AD and was dedicated to Surya, the chief solar deity in Hinduism; Surya is also known by the Sanskrit-language synonym Martand. The temple was destroyed by Sikandar Shah Miri.\r\nThe Martand temple was built on top of a plateau from where one can view whole of the Kashmir Valley. From the ruins and related archaeological findings, it can be said it was an excellent specimen of Kashmiri architecture, which had blended the Gandharan, Gupta and Chinese forms of architecture.', 'martand1.webp', 'martand2.jpg', 'martand3.webp'),
(10, 'Shalimar', 'Garden', 'Srinagar', 'Mughal Architecture', 'Springs', 'Garden', '14 K.M', 'Shalimar Bagh is a Mughal garden in Srinagar, Jammu and Kashmir, India, linked through a channel to the northeast of Dal Lake. It also known as Shalimar Gardens, Farah Baksh, and Faiz Baksh. The other famous shoreline garden in the vicinity is Nishat Bagh,The Garden of Delight. The Bagh was built by Mughal Emperor Jahangir, for his wife Nur Jahan, in 1619. The Bagh is considered the high point of Mughal horticulture. It is now a public park and also referred to as the \"Crown of Srinagar\"', 'shalimar1.jpg', 'shalimar2.jpg', 'shalimar3.jpg'),
(11, 'Hameem Hussain Shah', 'Veg', 'Srinagar', 'Night Life', 'Music', 'Dance', '0', 'Good', 'shikara-boat-500x500.webp', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shik`
--

CREATE TABLE `shik` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `city` varchar(25) NOT NULL,
  `Pic1` varchar(255) NOT NULL,
  `Pic2` varchar(255) NOT NULL,
  `Pic3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shik`
--

INSERT INTO `shik` (`id`, `name`, `email`, `mobile`, `city`, `Pic1`, `Pic2`, `Pic3`) VALUES
(1, 'Shikara Queen', 'hameemshah3@gmail.com', 4444, 'Srinagar', 'shik1.1.jpg', 'shik1.2.jpg', 'shik1.3.jpg'),
(2, 'Gondola Ride', 'gondolaride@kashmir.com', 9865478512, 'Gulmarg', 'gondola1.jpg', 'gondola2.jpg', 'gondola3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s_no` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_no`, `username`, `password`, `create_time`) VALUES
(6, 'hameem', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '2024-10-26 09:47:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shik`
--
ALTER TABLE `shik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shik`
--
ALTER TABLE `shik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
