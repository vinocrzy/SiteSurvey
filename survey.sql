-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 08:00 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey_list`
--

CREATE TABLE `survey_list` (
  `sid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `clientid` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `geotag` varchar(50) DEFAULT NULL,
  `phno` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `squarefeet` int(50) NOT NULL,
  `NewOrExisting` varchar(50) NOT NULL,
  `is_it_Modular` varchar(50) NOT NULL,
  `ModularBrand` varchar(50) DEFAULT NULL,
  `Internet_Enabled` varchar(50) NOT NULL,
  `IoT_Needed` varchar(50) NOT NULL,
  `NoOfRooms` int(50) NOT NULL,
  `NoOfDooralarm` int(50) NOT NULL,
  `rooms` mediumtext,
  `DoorSensor` mediumtext,
  `remark` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_list`
--

INSERT INTO `survey_list` (`sid`, `name`, `clientid`, `address`, `city`, `geotag`, `phno`, `email`, `squarefeet`, `NewOrExisting`, `is_it_Modular`, `ModularBrand`, `Internet_Enabled`, `IoT_Needed`, `NoOfRooms`, `NoOfDooralarm`, `rooms`, `DoorSensor`, `remark`) VALUES
(1, 'vinoth kanna', '564654654', '258/6 main road', 'thirunelvelli', '', 2147483647, 'vinoth.vinothkanna.kanna2@gmail.com', 675765, 'New', 'Yes', 'kjhkjh', 'Yes', 'Yes', 1, 1, '[{\"name\":\"living\",\"panels\":\"1\",\"switche\":[{\"id\":\"eo02\",\"size\":\"6575\",\"morning\":\"Sw1\",\"evening\":\"Sw2\",\"night\":\"Sw3\"}],\"MotionSensor\":[{\"evening\":\"Nill\",\"night\":\"Autolight\"}]}]', '[{\"switche\":{\"id\":\"d450\",\"Doors_to_be_fitted\":\"kjhjhkj\",\"morning\":\"Autolight\",\"evening\":\"Secure\",\"night\":\"Nill\"}}]', NULL),
(5, 'vinoth kanna', '43534', '258/6 main road', 'thirunelvelli', NULL, 2147483647, 'vinoth.vinothkanna.kanna2@gmail.com', 987897, 'Existing', 'Yes', 'jhhj', 'Yes', 'Yes', 2, 2, '[{\"name\":\"living\",\"panels\":\"2\",\"switche\":[{\"id\":\"fdgfd3\",\"morning\":\"Sw2\",\"evening\":\"Sw3\",\"night\":\"Sw5\"},{\"id\":\"lkjljkl4\",\"morning\":\"Sw4\",\"evening\":\"Sw3\",\"night\":\"Sw3\"}],\"MotionSensor\":[{\"evening\":\"Nill\",\"night\":\"Autolight\"},{\"evening\":\"Autolight\",\"night\":\"Secure\"}]},{\"name\":\"kitchen\",\"panels\":\"1\",\"switche\":[{\"id\":\"kjhjhg3\",\"morning\":\"Sw1\",\"evening\":\"Sw2\",\"night\":\"Sw2\"}],\"MotionSensor\":[{\"evening\":\"Autolight\",\"night\":\"Secure\"}]}]', '[{\"switche\":{\"id\":\"jhkjh\",\"Doors_to_be_fitted\":\"lkjlkhlk\",\"morning\":\"Secure\",\"evening\":\"Nill\",\"night\":\"Autolight\"}},{\"switche\":{\"id\":\"lkhkjh\",\"Doors_to_be_fitted\":\"kjgjhg\",\"morning\":\"Autolight\",\"evening\":\"Autolight\",\"night\":\"Secure\"}}]', '1'),
(6, 'Mr. Kalidoss', 'etouch001', 'Main Road', 'Abishegapatti', NULL, 2147483647, 'Kalidoss@gmail.com', 1500, 'Existing', 'Yes', 'Kundan', 'Yes', 'Yes', 2, 2, '[{\"name\":\"Kundan\",\"panels\":\"2\",\"switche\":[{\"id\":\"ET01\",\"morning\":\"Sw1\",\"evening\":\"Sw2\",\"night\":\"Sw3\"},{\"id\":\"ET02\",\"morning\":\"Sw2\",\"evening\":\"Sw4\",\"night\":\"Sw5\"}],\"MotionSensor\":[{\"evening\":\"Autolight\",\"night\":\"Secure\"},{\"evening\":\"Autolight\",\"night\":\"Autolight\"}]},{\"name\":\"Kitchen\",\"panels\":\"1\",\"switche\":[{\"id\":\"ET03\",\"morning\":\"Sw1\",\"evening\":\"Sw3\",\"night\":\"Sw5\"}],\"MotionSensor\":[{\"evening\":\"Autolight\",\"night\":\"Secure\"}]}]', '[{\"switche\":{\"id\":\"DA01\",\"Doors_to_be_fitted\":\"Living Entrance\",\"morning\":\"Nill\",\"evening\":\"Autolight\",\"night\":\"Secure\"}},{\"switche\":{\"id\":\"DA01\",\"Doors_to_be_fitted\":\"Kitchen Outdoor\",\"morning\":\"Nill\",\"evening\":\"Autolight\",\"night\":\"Secure\"}}]', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey_list`
--
ALTER TABLE `survey_list`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey_list`
--
ALTER TABLE `survey_list`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
