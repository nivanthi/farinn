-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2019 at 06:17 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `admin_level` varchar(45) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NIC` varchar(11) NOT NULL,
  `password` varchar(254) NOT NULL,
  `phone` int(15) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `email`, `admin_level`, `photo`, `date_created`, `NIC`, `password`, `phone`, `reg_date`) VALUES
(3, 'Nivanthi', 'Wijerathna', 'nivanthiw@ymail.com', '1', '83817-img_20140927_144419.jpg', '2015-05-26 05:52:42', '908140672V', '81dc9bdb52d04dc20036dbd8313ed055', 710689632, '2015-06-20 21:20:56'),
(4, 'Andrew', 'Ferdinandus', 'andy@gmail.com', '1', '8fa52-lec7.jpg', '2015-06-01 07:33:31', '854788962V', '202cb962ac59075b964b07152d234b70', 710627697, '2015-06-20 21:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `banquet`
--

DROP TABLE IF EXISTS `banquet`;
CREATE TABLE IF NOT EXISTS `banquet` (
  `hall_id` int(10) NOT NULL AUTO_INCREMENT,
  `hall_name` varchar(25) NOT NULL,
  `FLOOR` varchar(25) NOT NULL,
  `capacity` varchar(25) NOT NULL,
  `sqr_meters` varchar(25) NOT NULL,
  PRIMARY KEY (`hall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet`
--

INSERT INTO `banquet` (`hall_id`, `hall_name`, `FLOOR`, `capacity`, `sqr_meters`) VALUES
(1, 'Royal Princes VIP', '2', '400', ''),
(2, 'Grand Ballroom', '1', '400', '');

-- --------------------------------------------------------

--
-- Table structure for table `banquet_extra`
--

DROP TABLE IF EXISTS `banquet_extra`;
CREATE TABLE IF NOT EXISTS `banquet_extra` (
  `banquet_extra_id` int(11) NOT NULL AUTO_INCREMENT,
  `banquet_reservation_id` int(11) DEFAULT NULL,
  `liqueur` decimal(8,2) DEFAULT NULL,
  `poruwa` decimal(8,2) DEFAULT NULL,
  `musicGroup` decimal(8,2) DEFAULT NULL,
  `dancingGroup` decimal(8,2) DEFAULT NULL,
  `flowerArrengement` decimal(8,2) DEFAULT NULL,
  `cakeStructure` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`banquet_extra_id`),
  KEY `banquet_extra_fk_banquet_reservation` (`banquet_reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet_extra`
--

INSERT INTO `banquet_extra` (`banquet_extra_id`, `banquet_reservation_id`, `liqueur`, `poruwa`, `musicGroup`, `dancingGroup`, `flowerArrengement`, `cakeStructure`) VALUES
(2, 27, '0.00', '0.00', '10000.00', '10000.00', '0.00', '0.00'),
(3, 28, '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00'),
(4, 29, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(5, 30, '0.00', '12000.00', '15000.00', '0.00', '15000.00', '25000.00'),
(6, 31, '30000.00', '0.00', '20000.00', '10000.00', '0.00', '0.00'),
(7, 32, '40000.00', '0.00', '0.00', '0.00', '0.00', '20000.00'),
(8, 33, '0.00', '0.00', '0.00', '0.00', '0.00', '25000.00'),
(9, 34, '0.00', '0.00', '25000.00', '0.00', '0.00', '0.00'),
(10, 35, '10000.00', '0.00', '17000.00', '0.00', '0.00', '7000.00'),
(11, 36, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(12, 37, '25000.00', '0.00', '30000.00', '15000.00', '20000.00', '12000.00'),
(13, 38, '8000.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(15, 40, '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(16, 41, '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(17, 42, '2000.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(18, 43, '2000.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(19, 44, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(24, 49, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(25, 50, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(26, 51, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(27, 52, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(28, 53, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(29, 54, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(30, 55, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(31, 56, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(32, 57, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(33, 58, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(34, 59, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(35, 60, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(36, 61, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(37, 62, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(38, 63, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(39, 64, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(40, 65, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(41, 66, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(42, 67, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(43, 68, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(44, 69, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(47, 72, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(48, 73, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(49, 74, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(50, 75, '20000.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `banquet_inquires`
--

DROP TABLE IF EXISTS `banquet_inquires`;
CREATE TABLE IF NOT EXISTS `banquet_inquires` (
  `banquet_inquires_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact` int(15) DEFAULT NULL,
  `type_f_event` varchar(30) DEFAULT NULL,
  `date_f_event` date DEFAULT NULL,
  `time_f_event` decimal(10,0) DEFAULT NULL,
  `excepted_guest` int(50) DEFAULT NULL,
  PRIMARY KEY (`banquet_inquires_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet_inquires`
--

INSERT INTO `banquet_inquires` (`banquet_inquires_id`, `f_name`, `l_name`, `email`, `contact`, `type_f_event`, `date_f_event`, `time_f_event`, `excepted_guest`) VALUES
(1, 'nivanthi', 'wijerathna', 'nivanthiw@gmail.com', 712280101, 'BirthDay', '2015-08-25', '14', 100),
(2, 'Dinush', 'Nalaka', 'nalaka@ymail.com', 712280101, 'Wedding', '2015-08-27', '10', 250),
(3, 'dinushika', 'prasangani', 'dp@gmail.com', 712140291, 'anniversary', '2015-08-21', '16', 75),
(4, 'Shiranthi', 'Basilika', 'basilika@ymail.com', 729105799, 'Birth Day', '2015-10-07', '16', 75),
(5, 'Kamal', 'Senanayaka', 'kamal1979@yahoo.com', 713329101, 'homecoming', '2015-12-10', '18', 250),
(6, 'Vijitha', 'Shriyani', 'vijithas@gmail.com', 712210161, 'Wedding', '2015-09-23', '9', 300),
(7, 'Basil', 'Wijerathna', 'wijerathna@yahoo.com', 712280111, 'cooperate', '2015-09-01', '10', 50),
(8, 'Mahesha', 'Pathini', 'maheshap@ymail.com', 712231017, 'business', '2016-01-06', '9', 50),
(9, 'Andrew', 'Fernando', 'andy@ymail.com', 713210765, 'homecoming', '2016-03-16', '18', 100),
(10, 'Loshan ', 'Jayasekara', 'loshan@yahoo.com', 772180165, 'cooperate', '2015-12-16', '11', 75),
(11, 'Shenon ', 'Wikramathilaka', 'shenonw@gmail.com', 752180101, 'Birth Day', '2016-06-15', '15', 250),
(12, 'Dinushika', 'Wijerathna', 'dinu@ymail.com', 712281111, 'Wedding', '2015-12-02', '10', 300),
(13, 'Julian', 'Claessen', 'claessen@gamail.com', 778787091, 'BirthDay', '2019-04-23', '18', 50);

-- --------------------------------------------------------

--
-- Table structure for table `banquet_menu`
--

DROP TABLE IF EXISTS `banquet_menu`;
CREATE TABLE IF NOT EXISTS `banquet_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_no` varchar(25) NOT NULL,
  `local_price` decimal(10,2) DEFAULT NULL,
  `service_charges` int(25) DEFAULT NULL,
  `menu_description` text,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet_menu`
--

INSERT INTO `banquet_menu` (`menu_id`, `menu_no`, `local_price`, `service_charges`, `menu_description`) VALUES
(1, 'menu no 01', '1680.00', 10, '<p>\r\n <strong>Well come drink</strong></p>\r\n<p>\r\n Seasonal flavored chilled drink with chopped fruit</p>\r\n<p>\r\n <strong>Mirrors of trays(select two)</strong></p>\r\n<p>\r\n Sea food cocktail/Sri Lankan style egg mirror/Marble egg with curry mayonnaise</p>\r\n<p>\r\n <strong>Salad (select Ã‚Â three)</strong></p>\r\n<p>\r\n Chick-pea &coriander leaves salad/ garden fresh gotukola salad/oriental vegetables salad/eggs & beans salad</p>\r\n<p>\r\n <strong>Dressing</strong></p>\r\n<p>\r\n Lemon vinaigrette/ cocktail sauce</p>\r\n<p>\r\n <strong>Chicken(select one)</strong></p>\r\n<p>\r\n Chilly chicken/chicken with lemon sauce/Indian style chicken kuruma</p>\r\n<p>\r\n <strong>Beef/Pork(select one)</strong></p>\r\n<p>\r\n Beef black curry/ beef with kankun/sri lankan style beef stew/pork black curry/pork stew</p>\r\n<p>\r\n <strong>Fish/Sea food fish(select one)</strong></p>\r\n<p>\r\n Fish red curry/ devilled fish/sweet & sour fish/mixed sea food curry/mixed sea food devilled</p>\r\n<p>\r\n <strong>Vegetable(select four)</strong></p>\r\n<p>\r\n Vegetable kaliya/potatoes curry/brinjol moju/beans tempered/ mixed vegetable kuruma/cashew curry/grilled vegetables</p>\r\n<p>\r\n <strong>Rice/Noodles(select three)</strong></p>\r\n<p>\r\n Vegetable biriyani/steamed rice/mixed fried rice/egg noddles/chilly fried noodles/vegetable fried rice</p>\r\n<p>\r\n <strong>Condiments(select four)</strong></p>\r\n<p>\r\n Fish cutlets/papadam/malay pickle/minchi sambol lime pickle with onion & green chilly/Sri Lankan pickle/Manago Chutney</p>\r\n<p>\r\n <strong>Desserts(select five)</strong></p>\r\n<p>\r\n Fresh cut fruit/fruit jelly/ice cream/watalappan/fruit mousse/fruit trifle with custard/pudding</p>\r\n<p>\r\n Ã‚Â </p>\r\n<p>\r\n Ã‚Â </p>\r\n'),
(2, 'menu no 02', '2026.00', 10, '<p>\r\n <strong>Well come drink</strong></p>\r\n<p>\r\n Seasonal flavored chilled drink with chopped fruit</p>\r\n<p>\r\n <strong>Mirrors of trays(select two)</strong></p>\r\n<p>\r\n Sea food cocktail/Russian style egg mirror/stuffed modha/assorted cold meat platter</p>\r\n<p>\r\n <strong>Salad (select Â four)</strong></p>\r\n<p>\r\n Chick-pea &coriander leaves salad/ garden fresh gotukola salad/oriental vegetables salad/eggs & beans salad/cole slaw salad/apple & nut salad/pasata& egg salad</p>\r\n<p>\r\n <strong>Dressing</strong></p>\r\n<p>\r\n Lemon vinaigrette/ cocktail sauce/fresh dressing</p>\r\n<p>\r\n <strong>Chicken(select one)</strong></p>\r\n<p>\r\n Chilly chicken/chicken with lemon sauce/Indian style chicken kuruma/batterd chicken</p>\r\n<p>\r\n <strong>Beef/Pork(select one)</strong></p>\r\n<p>\r\n Beef black curry/ beef with kankun/sri lankan style beef stew/pork black curry/pork stew</p>\r\n<p>\r\n <strong>Fish/Sea food fish(select one)</strong></p>\r\n<p>\r\n Fish red curry/ devilled fish/sweet & sour fish/mixed sea food curry/mixed sea food devilled</p>\r\n<p>\r\n <strong>Vegetable(select four)</strong></p>\r\n<p>\r\n Vegetable kaliya/potatoes curry/brinjol moju/beans tempered/ mixed vegetable kuruma/cashew curry/grilled vegetables/dhal curry</p>\r\n<p>\r\n <strong>Rice/Noodles(select three)</strong></p>\r\n<p>\r\n Vegetable biriyani/steamed rice/mixed fried rice/egg noddles/chilly fried noodles/vegetable fried rice/thai style noodles/saffron gee rice with raisins & nuts</p>\r\n<p>\r\n <strong>Condiments(select four)</strong></p>\r\n<p>\r\n Fish cutlets/papadam/malay pickle/minchi sambol lime pickle with onion & green chilly/Sri Lankan pickle/Manago Chutney/lime pickle/</p>\r\n<p>\r\n <strong>Desserts(select five)</strong></p>\r\n<p>\r\n Fresh cut fruit/fruit jelly/ice cream/watalappan/fruit mousse/fruit trifle with custard/pudding/chocolate & mint mouse/pineapple mouse/biscuit pudding</p>\r\n<p>\r\n Â </p>\r\n<p>\r\n Â </p>\r\n'),
(3, 'menu no 03', '2340.00', 10, '<p>\r\n <strong>Well come drink</strong></p>\r\n<p>\r\n Seasonal flavored chilled drink with chopped fruit</p>\r\n<p>\r\n Cream of chicken or cream of vegetable soup with bread & butter</p>\r\n<p>\r\n <strong>Mirrors of trays(select two)</strong></p>\r\n<p>\r\n Sea food cocktail/Russian style egg mirror/stuffed modha/assorted cold meat platter/chicken ham/chicken roll/vegetable terrine</p>\r\n<p>\r\n <strong>Salad (select Â four)</strong></p>\r\n<p>\r\n Chick-pea &coriander leaves salad/ garden fresh gotukola salad/oriental vegetables salad/eggs & beans salad/cole slaw salad/apple & nut salad/pasata& egg salad/broccoli & egg salad/pasata & tuna salad</p>\r\n<p>\r\n <strong>Dressing</strong></p>\r\n<p>\r\n Lemon vinaigrette/ cocktail sauce/fresh dressing</p>\r\n<p>\r\n <strong>Chicken(select one)</strong></p>\r\n<p>\r\n Chilly chicken/chicken with lemon sauce/Indian style chicken kuruma/batterd chicken /spicy B.B.Q</p>\r\n<p>\r\n <strong>Beef/Pork/Mutton(select two)</strong></p>\r\n<p>\r\n Beef black curry/ beef with kankun/sri lankan style beef stew/pork black curry/pork stew/mutton curry/mutton masala</p>\r\n<p>\r\n <strong>Fish/Sea food fish(select one)</strong></p>\r\n<p>\r\n Fish red curry/ devilled fish/sweet & sour fish/mixed sea food curry/mixed sea food devilled/hot butter cuttle/herbs chilly prawns/fish masala</p>\r\n<p>\r\n <strong>Vegetable(select four)</strong></p>\r\n<p>\r\n Vegetable kaliya/potatoes curry/brinjol moju/beans tempered/ mixed vegetable kuruma/cashew curry/grilled vegetables/dhal curry/</p>\r\n<p>\r\n <strong>Rice/Noodles(select three)</strong></p>\r\n<p>\r\n mixed fried rice/egg noddles/chilly fried noodles/vegetable fried rice/thai style noodles/saffron gee rice with raisins & nuts fried vermossoli/young chow rice/singapor fried vermossoli</p>\r\n<p>\r\n <strong>Condiments(select four)</strong></p>\r\n<p>\r\n Fish cutlets/papadam/malay pickle/minchi sambol lime pickle with onion & green chilly/Sri Lankan pickle/Manago Chutney/lime pickle/prawns cracker/beetroot pickle</p>\r\n<p>\r\n <strong>Desserts(select five)</strong></p>\r\n<p>\r\n Fresh cut fruit/fruit jelly/ice cream/watalappan/fruit mousse/fruit trifle with custard/pudding/chocolate & mint mouse/pineapple mouse/biscuit pudding/nuga mousse/jugry pudding/coffe mouse</p>\r\n<p>\r\n Â </p>\r\n<p>\r\n Â </p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `banquet_menu_request`
--

DROP TABLE IF EXISTS `banquet_menu_request`;
CREATE TABLE IF NOT EXISTS `banquet_menu_request` (
  `banquet_menu_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `banquet_reservation_id` int(11) DEFAULT NULL,
  `descrip` varchar(150) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `unit_price` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`banquet_menu_request_id`),
  KEY `banquet_menu_request_fk_banquet_reservation` (`banquet_reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banquet_other_charges`
--

DROP TABLE IF EXISTS `banquet_other_charges`;
CREATE TABLE IF NOT EXISTS `banquet_other_charges` (
  `banquet_other_charges_id` int(11) NOT NULL AUTO_INCREMENT,
  `banquet_reservation_id` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `cost` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`banquet_other_charges_id`),
  KEY `banquet_other_charges_fk_banquet_reservation` (`banquet_reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banquet_request`
--

DROP TABLE IF EXISTS `banquet_request`;
CREATE TABLE IF NOT EXISTS `banquet_request` (
  `b_request_id` int(20) NOT NULL AUTO_INCREMENT,
  `hall_id` int(10) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `contancName` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_of_guest` int(5) NOT NULL,
  `date_of_function` date NOT NULL,
  `function_type_id` int(2) NOT NULL,
  `TIME` int(3) NOT NULL,
  `no_of_hours` int(3) NOT NULL,
  PRIMARY KEY (`b_request_id`),
  KEY `br_fk_banquet` (`hall_id`),
  KEY `br_fk_bmenu` (`menu_id`),
  KEY `br_fk_function` (`function_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banquet_reservation`
--

DROP TABLE IF EXISTS `banquet_reservation`;
CREATE TABLE IF NOT EXISTS `banquet_reservation` (
  `banquet_reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `function_type_id` int(2) DEFAULT NULL,
  `banquet_menu_id` int(11) DEFAULT NULL,
  `banquet_id` int(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `hour` decimal(10,0) DEFAULT NULL,
  `customer` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact` int(15) DEFAULT NULL,
  `guest_count` int(5) DEFAULT NULL,
  PRIMARY KEY (`banquet_reservation_id`),
  KEY `banquet_reservation_fk_function_type` (`function_type_id`),
  KEY `banquet_reservation_fk_banquet_menu` (`banquet_menu_id`),
  KEY `banquet_reservation_fk_banquet` (`banquet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet_reservation`
--

INSERT INTO `banquet_reservation` (`banquet_reservation_id`, `function_type_id`, `banquet_menu_id`, `banquet_id`, `date`, `time`, `hour`, `customer`, `email`, `contact`, `guest_count`) VALUES
(27, 2, 1, 2, '2015-10-03', '6', '6', 'shiranthi wijerathna', '', 729105799, 150),
(28, 3, 1, 2, '2015-08-12', '6', '4', 'Dinushika nivanthi', 'dinushika@ymail.com', 712280111, 50),
(29, 6, 2, 2, '2015-10-22', '10', '5', 'Basil wijerathna', '', 71529382, 60),
(30, 1, 2, 1, '2015-12-02', '10', '6', 'dinushika prasangani', 'dinushi123@ymail.com', 712230547, 150),
(31, 1, 1, 1, '2015-12-10', '10', '6', 'Dinush Nalaka', 'nalaka@ymail.com', 722485555, 150),
(32, 1, 1, 1, '2015-12-13', '18', '4', 'Andrew ferdinandus', 'andy@ymail.com', 713240758, 150),
(33, 1, 2, 1, '2015-08-21', '10', '6', 'Shalani tharaka', 'shalani@yahoo.com', 713342760, 170),
(34, 3, 1, 2, '2015-09-16', '17', '4', 'kamal senanayaka', 'kamal1979@yahoo.com', 718865901, 75),
(35, 4, 3, 1, '2015-09-20', '17', '5', 'vijitha sriyani silva', '', 11929307, 85),
(36, 6, 3, 2, '2015-09-16', '9', '8', 'mahesha pathini', 'mahesha@gmail.com', 713342801, 75),
(37, 2, 1, 1, '2015-10-18', '17', '5', 'isuru nimnuwan', 'isuru1991@gmail.com', 712232901, 150),
(38, 6, 2, 2, '2015-08-12', '10', '0', 'shiranthi wijerathna', '', 11929307, 120),
(40, 3, 2, 1, '2015-08-05', '3', '0', 'Randika Ranasinghe', '', 710258963, 100),
(41, 3, 2, 1, '2015-08-11', '3', '0', 'Randika Ranasinghe', '', 710258963, 100),
(42, 2, 3, 1, '2015-08-04', '3', '0', 'Randika Ranasinghe', '', 710258963, 200),
(43, 2, 3, 1, '2015-08-10', '3', '0', 'Randika Ranasinghe', '', 710258963, 120),
(44, 2, 3, 2, '2015-08-04', '3', '0', 'Randika Ranasinghe', '', 710258963, 100),
(49, 1, 1, 2, '2015-08-11', '3', '0', 'D P Ranasinghe', '', 712589632, 120),
(50, 2, 1, 2, '2015-08-05', '3', '0', ' Ranasinghe', '', 712589632, 120),
(51, 2, 2, 2, '2015-08-12', '3', '0', 'Ranasinghe', '', 712589632, 120),
(52, 2, 2, 2, '2015-08-12', '3', '0', 'Ranasinghe', '', 712589632, 120),
(53, 2, 1, 2, '2015-08-18', '3', '0', 'aaa', '', 712589632, 120),
(54, 2, 1, 2, '2015-08-18', '3', '0', 'aaa', '', 712589632, 120),
(55, 2, 2, 1, '2015-08-11', '3', '0', 'aaa', '', 712589632, 120),
(56, 3, 2, 2, '2015-08-12', '4', '0', 'aaa', '', 712589632, 120),
(57, 2, 3, 1, '2015-08-11', '3', '0', 'aaa', '', 712589632, 120),
(58, 2, 3, 1, '2015-08-11', '3', '0', 'aaa', '', 712589632, 120),
(59, 1, 2, 2, '2015-08-14', '2', '0', 'Nivanthi', '', 712589632, 120),
(60, 2, 1, 2, '2015-08-18', '3', '0', 'Nivanthi', '', 712589632, 120),
(61, 3, 2, 1, '2015-08-05', '3', '0', 'Nivanthi', '', 712589632, 120),
(62, 3, 2, 1, '2015-08-05', '3', '0', 'Nivanthi', '', 712589632, 120),
(63, 3, 2, 2, '2015-08-12', '3', '0', 'Nivanthi', '', 712589632, 120),
(64, 3, 2, 2, '2015-08-12', '3', '0', 'Nivanthi', '', 712589632, 120),
(65, 3, 2, 2, '2015-08-12', '3', '0', 'Nivanthi', '', 712589632, 120),
(66, 3, 2, 1, '2015-08-08', '3', '0', 'Nivanthi', '', 712589632, 120),
(67, 3, 2, 2, '2015-08-11', '3', '0', 'D P Ranasinghe', '', 712589632, 120),
(68, 3, 2, 2, '2015-08-11', '3', '0', 'D P Ranasinghe', '', 712589632, 120),
(69, 4, 2, 2, '2015-08-11', '3', '0', 'Nivanthi', '', 712589632, 120),
(72, 3, 2, 1, '2015-07-08', '3', '0', 'DDD', '', 715489963, 150),
(73, 2, 2, 2, '2015-08-11', '3', '0', 'XXX', '', 715489963, 120),
(74, 1, 2, 1, '2015-08-13', '3', '5', 'dinu', '', 712280101, 150),
(75, 1, 3, 1, '2015-08-03', '2', '4', 'nivanthi', '', 712280101, 150),
(76, 2, 2, 1, '2019-11-30', '14:30:30', '5', 'Sanuj', 'sanuj@gmail.com', 778895622, 50);

-- --------------------------------------------------------

--
-- Table structure for table `banquet_total_charges`
--

DROP TABLE IF EXISTS `banquet_total_charges`;
CREATE TABLE IF NOT EXISTS `banquet_total_charges` (
  `banquet_total_charges_id` int(11) NOT NULL AUTO_INCREMENT,
  `banquet_reservation_id` int(11) DEFAULT NULL,
  `banquet_charge` decimal(8,2) DEFAULT NULL,
  `extra_facility_charge` decimal(8,2) DEFAULT NULL,
  `menu_request_charge` decimal(8,2) DEFAULT NULL,
  `other_charge` decimal(8,2) DEFAULT NULL,
  `sub_total` decimal(8,2) DEFAULT NULL,
  `discount` decimal(8,2) DEFAULT NULL,
  `dis_ammount` decimal(8,2) DEFAULT NULL,
  `nbt_rate` decimal(10,0) DEFAULT NULL,
  `nbt_ammount` decimal(8,2) DEFAULT NULL,
  `vat_rate` decimal(10,0) DEFAULT NULL,
  `vat_ammount` decimal(8,2) DEFAULT NULL,
  `grand_total` decimal(8,2) DEFAULT NULL,
  `first_payment` decimal(8,2) DEFAULT NULL,
  `first_pay_date` date NOT NULL,
  `balance_after_first_pay` decimal(8,2) DEFAULT NULL,
  `final_payment` decimal(8,2) DEFAULT NULL,
  `final_pay_date` date DEFAULT NULL,
  `pay_complete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`banquet_total_charges_id`),
  KEY `banquet_total_charges_fk_banquet_reservation` (`banquet_reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet_total_charges`
--

INSERT INTO `banquet_total_charges` (`banquet_total_charges_id`, `banquet_reservation_id`, `banquet_charge`, `extra_facility_charge`, `menu_request_charge`, `other_charge`, `sub_total`, `discount`, `dis_ammount`, `nbt_rate`, `nbt_ammount`, `vat_rate`, `vat_ammount`, `grand_total`, `first_payment`, `first_pay_date`, `balance_after_first_pay`, `final_payment`, `final_pay_date`, `pay_complete`) VALUES
(2, 27, '252000.00', '20000.00', '3150.00', '0.00', '275150.00', '5150.00', '270000.00', '12', '33018.00', '8', '22012.00', '325030.00', '20000.00', '2015-05-21', '305030.00', NULL, NULL, 1),
(3, 28, '84000.00', '5000.00', '2750.00', '400.00', '92150.00', '5000.00', '87150.00', '12', '11058.00', '8', '7372.00', '105580.00', '50000.00', '2015-08-09', '55580.00', NULL, NULL, 0),
(4, 29, '121560.00', '0.00', '0.00', '40000.00', '161560.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '161560.00', '0.00', '2015-08-07', '161560.00', NULL, NULL, 1),
(5, 30, '303900.00', '67000.00', '3500.00', '5000.00', '379400.00', '5000.00', '374400.00', '12', '45528.00', '8', '30352.00', '450280.00', '75000.00', '2015-09-07', '375280.00', NULL, NULL, 0),
(6, 31, '252000.00', '60000.00', '0.00', '0.00', '312000.00', '2000.00', '310000.00', '12', '37440.00', '8', '24960.00', '372400.00', '150000.00', '2015-08-13', '222400.00', NULL, NULL, 0),
(7, 32, '252000.00', '60000.00', '1225.00', '5500.00', '318725.00', '7000.00', '311725.00', '12', '38247.00', '8', '25498.00', '375470.00', '175470.00', '2015-08-29', '200000.00', NULL, NULL, 0),
(8, 33, '344420.00', '25000.00', '0.00', '0.00', '369420.00', '6000.00', '363420.00', '12', '44330.40', '8', '29553.60', '437304.00', '175000.00', '2015-09-01', '262304.00', NULL, NULL, 0),
(9, 34, '126000.00', '25000.00', '1905.00', '3500.00', '156405.00', '2500.00', '153905.00', '12', '18768.60', '8', '12512.40', '185186.00', '100000.00', '2015-08-22', '85186.00', NULL, NULL, 0),
(10, 35, '198900.00', '34000.00', '1875.00', '2700.00', '237475.00', '4000.00', '233475.00', '12', '28497.00', '8', '18998.00', '280970.00', '150000.00', '2015-08-21', '130970.00', NULL, NULL, 0),
(11, 36, '175500.00', '0.00', '0.00', '0.00', '175500.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '175500.00', '75500.00', '2015-08-30', '100000.00', NULL, NULL, 0),
(12, 37, '252000.00', '102000.00', '3290.00', '7000.00', '364290.00', '20000.00', '344290.00', '12', '43714.80', '8', '29143.20', '417148.00', '250000.00', '2015-09-07', '167148.00', NULL, NULL, 0),
(13, 38, '243120.00', '8000.00', '1750.00', '500.00', '253370.00', '3370.00', '250000.00', '0', '0.00', '0', '0.00', '250000.00', '50000.00', '0000-00-00', '200000.00', NULL, NULL, 0),
(14, 40, '202600.00', '5000.00', '0.00', '5000.00', '212600.00', '12600.00', '200000.00', '12', '25512.00', '8', '17008.00', '242520.00', '42520.00', '0000-00-00', '200000.00', NULL, NULL, 0),
(15, 41, '202600.00', '5000.00', '1000.00', '5000.00', '213600.00', '13600.00', '200000.00', '12', '25632.00', '8', '17088.00', '242720.00', '42720.00', '2015-09-20', '200000.00', NULL, NULL, 0),
(16, 42, '468000.00', '2000.00', '100.00', '2000.00', '472100.00', '4500.00', '467600.00', '12', '56652.00', '8', '37768.00', '562020.00', '20000.00', '2015-06-12', '542020.00', NULL, NULL, 0),
(17, 43, '280800.00', '2000.00', '0.00', '0.00', '282800.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '282800.00', '0.00', '0000-00-00', '282800.00', NULL, NULL, 0),
(18, 44, '234000.00', '0.00', '0.00', '0.00', '234000.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '234000.00', '0.00', '0000-00-00', '234000.00', NULL, NULL, 0),
(23, 49, '201600.00', '0.00', '0.00', '0.00', '201600.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '201600.00', '0.00', '0000-00-00', '201600.00', NULL, NULL, 0),
(24, 50, '201600.00', '0.00', '0.00', '0.00', '201600.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '201600.00', '0.00', '0000-00-00', '201600.00', NULL, NULL, 0),
(25, 51, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(26, 52, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(27, 53, '201600.00', '0.00', '0.00', '0.00', '201600.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '201600.00', '0.00', '0000-00-00', '201600.00', NULL, NULL, 0),
(28, 54, '201600.00', '0.00', '0.00', '0.00', '201600.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '201600.00', '0.00', '0000-00-00', '201600.00', NULL, NULL, 0),
(29, 55, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(30, 56, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(31, 57, '280800.00', '0.00', '0.00', '0.00', '280800.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '280800.00', '0.00', '0000-00-00', '280800.00', NULL, NULL, 0),
(32, 58, '280800.00', '0.00', '0.00', '0.00', '280800.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '280800.00', '0.00', '0000-00-00', '280800.00', NULL, NULL, 0),
(33, 59, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(34, 60, '201600.00', '0.00', '0.00', '0.00', '201600.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '201600.00', '0.00', '0000-00-00', '201600.00', NULL, NULL, 0),
(35, 61, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(36, 62, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(37, 63, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(38, 64, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(39, 65, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(40, 66, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(41, 67, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(42, 68, '243120.00', '0.00', '0.00', '0.00', '243120.00', '2000.00', '241120.00', '0', '0.00', '0', '0.00', '241120.00', '0.00', '0000-00-00', '241120.00', NULL, NULL, 0),
(43, 69, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(46, 72, '303900.00', '0.00', '0.00', '0.00', '303900.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '303900.00', '0.00', '0000-00-00', '303900.00', NULL, NULL, 0),
(47, 73, '243120.00', '0.00', '0.00', '0.00', '243120.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '243120.00', '0.00', '0000-00-00', '243120.00', NULL, NULL, 0),
(48, 74, '303900.00', '0.00', '0.00', '0.00', '303900.00', '0.00', '0.00', '0', '0.00', '0', '0.00', '303900.00', '0.00', '0000-00-00', '303900.00', NULL, NULL, 0),
(49, 75, '351000.00', '20000.00', '24000.00', '0.00', '395000.00', '5000.00', '390000.00', '12', '47400.00', '8', '31600.00', '469000.00', '56787.00', '0000-00-00', '412213.00', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `basis`
--

DROP TABLE IF EXISTS `basis`;
CREATE TABLE IF NOT EXISTS `basis` (
  `basis_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `ro` decimal(10,2) DEFAULT NULL,
  `breakfast` decimal(10,2) DEFAULT NULL,
  `lunch` decimal(10,2) DEFAULT NULL,
  `dinner` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`basis_id`),
  UNIQUE KEY `basis_uk` (`type_id`,`currency`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basis`
--

INSERT INTO `basis` (`basis_id`, `type_id`, `currency`, `ro`, `breakfast`, `lunch`, `dinner`) VALUES
(8, 3, 'foreign', '55.00', '15.00', '30.00', '25.00'),
(9, 3, 'local', '7000.00', '1500.00', '2500.00', '2500.00'),
(10, 1, 'foreign', '65.00', '15.00', '25.00', '25.00'),
(11, 1, 'local', '8500.00', '1500.00', '2500.00', '2500.00'),
(12, 2, 'foreign', '90.00', '15.00', '25.00', '25.00'),
(13, 2, 'local', '10000.00', '1500.00', '2500.00', '2500.00');

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

DROP TABLE IF EXISTS `beverage`;
CREATE TABLE IF NOT EXISTS `beverage` (
  `beverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `beverage_code` varchar(20) NOT NULL,
  `beverage_name` varchar(25) NOT NULL,
  `local_price` decimal(10,2) DEFAULT NULL,
  `foreign_price` decimal(10,2) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`beverage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beverage`
--

INSERT INTO `beverage` (`beverage_id`, `beverage_code`, `beverage_name`, `local_price`, `foreign_price`, `description`) VALUES
(1, 'B1', 'water(1 ltr)', '60.00', '1.00', NULL),
(2, 'B2', 'water(1.5 ltr)', '80.00', '1.20', NULL),
(3, 'B3', 'Pepsi', '110.00', '1.50', NULL),
(4, 'B4', 'Merenda', '110.00', '1.50', NULL),
(5, 'B5', 'Seven-up', '110.00', '1.50', NULL),
(6, 'B6', 'Tea', '50.00', '1.00', NULL),
(7, 'B7', 'Coffe', '50.00', '1.00', NULL),
(8, 'B8', 'Cappuccino', '75.00', '1.20', NULL),
(9, 'B10', 'Hot', NULL, NULL, NULL),
(10, 'B10', 'Hot Chocolate', '100.00', '2.00', NULL),
(11, 'B11', 'Mixed Fruit Fresh', '130.00', '2.00', NULL),
(12, 'B12', 'Orange Fresh', '150.00', '2.00', NULL),
(13, 'B13', 'Mango Fresh', '150.00', '2.00', NULL),
(14, 'B14', 'Banana with Coconut', '100.00', '1.30', NULL),
(15, 'B15', 'Guva Fresh', '130.00', '1.80', NULL),
(16, 'B16', 'Watermelon Fresh', '130.00', '1.80', NULL),
(17, 'B17', 'Beli Fresh', '130.00', '1.80', NULL),
(18, 'B18', 'Milk Shake', '200.00', '2.50', NULL),
(19, 'B19', 'Beer', '500.00', '5.00', '<p>\r\n per one bottle</p>\r\n'),
(20, 'B20', 'Beer', '350.00', '3.00', '<p>\r\n per one glass</p>\r\n'),
(21, 'B21', 'Wine', '350.00', '3.00', '<p>\r\n perÂ  one glass</p>\r\n'),
(22, 'B22', 'Vodka', '200.00', '4.70', '<p>\r\n per glass</p>\r\n'),
(23, 'B23', 'shampaine', '350.00', '4.80', '<p>\r\n per glass</p>\r\n'),
(24, 'B24', 'shampaine', '2500.00', '20.00', '<p>\r\n per bottle</p>\r\n'),
(25, 'B25', 'Wiskey', '2500.00', '20.00', '<p>\r\n per bottle</p>\r\n'),
(26, 'B26', 'Wiskey', '350.00', '4.00', '<p>\r\n per glass</p>\r\n'),
(27, 'B27', 'Brandy', '350.00', '4.00', '<p>\r\n per glass</p>\r\n'),
(28, 'B28', 'Brandy', '2500.00', '20.00', '<p>\r\n per bottle</p>\r\n'),
(29, 'B29', 'Cocktail', '700.00', '6.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

DROP TABLE IF EXISTS `cheque`;
CREATE TABLE IF NOT EXISTS `cheque` (
  `cheque_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) DEFAULT NULL,
  `cheque_no` int(11) DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  PRIMARY KEY (`cheque_id`),
  KEY `cheque_fk_payment` (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cheque`
--

INSERT INTO `cheque` (`cheque_id`, `payment_id`, `cheque_no`, `cheque_date`) VALUES
(1, 4, 1234567890, '2019-09-25'),
(2, 7, 6873545, '2019-09-25'),
(3, 8, 6873545, '2019-09-25'),
(4, 9, 6873545, '2019-09-25'),
(5, 10, 6873545, '2019-09-25'),
(6, 11, 6873545, '2019-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0084f652f2c3f09d64bc9bdaa9eaf705', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('0097e749f84b732ffdbd26aaa4844f68', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('00cf4580dc8e7973fea7b6a55c6d0335', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('02df5bd5e8913cc473c418072a68d954', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('04538c64fa822dc74f35eed719547142', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('07396b7e47303fb962e26de37a643b1d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('07d1e49a79516d409ce5f503c4bb4969', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572195427, ''),
('07d6322e2ea796a3ed33352aead58863', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('082c9586f1cdb2627e82efbfd6b7a944', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194443, ''),
('089a98ccc5b9e081d8d7aa3b8aba17e8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('095d55ded9ca21771bb483b9589d474c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('0a0147a67fd6cb76342d8c62f266abd8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199854, ''),
('0a26798a26e32cf3903409c0efc57275', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('0a812c80ed239feb70dc717608ae0c4a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('0ac3805bc3a3a13574b44220394cdba0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('0b5bf15bbdf798d7a8b49dec9f36e871', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('0b5cc7b3c33f40a29ec4adeb85d9454e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('0bda19934dbab24479109efa98894e92', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('0be27ed8a6a6aad68080b4f7c440f2cc', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('0c88061b2eee05b529605ae1320b2bb2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('0cb99d19caf385d5cc4da32dd33a0ee0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194441, ''),
('0d62befc5d7a86208136f670532c3963', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('0db16cbe87373c1e1daef4e98d9da9e1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167043, ''),
('0e02c021b3ddd43e3a61539048c7e889', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('0e1a0fe66cb60ddf30a4a3a160bd7bd5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('0f7607a58744c625cbfafeb70164d775', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('100632260b5ea7258698a5048d67c0b2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('1021a786f28fb9e50c0efbcd9de2c9dd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('117ed649e22d36cbdcfec8be77f9df26', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('130d29d786c5a41a32f08d679bdd0d5d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('141177efb978a25186a15eba615a7819', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('153133c7f743bfc8d43223b8431b2ba8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('15487d6a9296e94bb61f1954e02e6a46', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('1584c973b37e50ecd3811ffd99fe7287', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('15d4910e18e26382ae6ae3354cb5925b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('15e545f64eaf6d54b01955ac0b5c2596', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('173f91b087298637d4b4b98f2db37441', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('18931956fd47cdb5ebe7603271c8cee4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572190024, ''),
('1927f229ede8c99835245c2304019113', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('198eb3b5fe39652abf74a08f7abafecb', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('1b528b4cf1b1441347d24344a67fc566', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('1b99ba8624c397e20e8556d1729f2d3d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('1bdb9d099fffbe1301f43ab7b881bb74', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('1c5fe6a15c7ef0ce4c09b5bfc8eb9e4c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('1eab8a6fc017a32c1dab3594178e215d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('1ef0ead4fc101f9e7ccc902e16474627', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572189898, ''),
('1fac28856e77f06aca33a26e2014a009', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('20979e428ffa07baae31cbe77ecd9ab3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199964, ''),
('21db93899a84c4a23d2743a03b9b9044', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('223da1fed452d23a19a95a88f011e5d8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('240246432ab976716c454954113aa853', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('2462fb14bdf62eaaee84656ce28a1d62', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194277, ''),
('254cc3b593fc2f347a17cbd8beb3c217', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('25ed4f94e87bb613d990a1bb8d130cac', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('2631c878fe73959fe5db67eac09b43de', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('26c18a35687bd786f766c071954f9b2d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182888, ''),
('283c1496778d2b9c79ec5cefc01c643a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('29576ad6fb6982b1f30faf7c25716c68', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('297defefb1f02809fad456abb8f77d69', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('29b35a12121ba67b37659a27e3908124', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194456, ''),
('29c4572779e023984106e93cf3d418c7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194377, ''),
('2af2d4201d4e60637b167b4f42ac4f33', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('2bfb954f76e0f53aade0011f0d992a5e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182006, ''),
('2d1f9b93c114b7161fc80b05f3ca757d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199964, ''),
('2d95a6b26d7bf6a35eff2430fa9305db', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194252, ''),
('2e10ad0e4abedc18b1453911b321ed70', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('2e5fa87d331d5b04ef7f8406c1ae337d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('2ea565674304fdfcd783f69e37eab768', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194279, ''),
('2eb174e90ef7c0898087f647acb4b08a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194442, ''),
('2f50d5012a9b4e25e4e029d8e1ccd1a2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('2fe64cfeee1a9fdea54bb2f4b9250447', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('314c6f5edd698dbbccd25c41028c4508', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('31a019ca8795258575355cf759211a91', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('31f97566f4bfd5bf6c508a9f463cd3d0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('338b2fe5173ef9b9a511ecb5e04cf325', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('33986bd6db43403dcbc3c6bf106c929a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('34d273ad457eff917ffcf8fe62c988b8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('36891d023b04124af319fe7d1a22fb81', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('36e0256c7050b58d1d2b0a5f93c51bc2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('37094cd47a6ba7f74a0b72792a2dbaf4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('37375d71a273660d7767284012ab5a47', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('377f13a48e9f8bce4a218f58c7dc6b21', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('378e9db6e433a1dbca287a381b4b2026', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('37d085d67c8f598ace32349c8a2c5f9e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('3802cb0c32cd5139c1fcf22a640c8f36', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('3937abba3bf1792ec25748c3c2455868', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('396d8f9e5a6a605029a67f3a91af3d9c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167044, ''),
('3ade6bfc1c2d7bab2b8c585611949d3f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('3b8027ade5dbdecf06041a7dd42bcfe6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('3beaa17ee77c43c9849ba79c5276a7a3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('3bfb02913ea26213617bf2a19c6952a5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('3d83db0985d69609ca8b872d02fc8ada', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('3dd6208b4fef89b9d75761292af07b36', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('3f3d8bf6483ea4f8c1293e086c977558', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('3ffcff05a9f90f601764a7c74bee9fe7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('400d2ac6d6e8a7d43f2bb41eafa1b116', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('4093053818a77761b848a1be6fb459db', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('40d2b9447ea64122755a1efaf3cd5d49', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192308, ''),
('416afdbfff339fed49f71407d8b55235', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194441, ''),
('41dbff0ff9b58fe1985d25f3283eaee2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('4205a05240223de17c77c1341452df4f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('4268cce785b535fdef03d481ccc8ca9f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('42cc69a3148eb784f19e17b545129b7e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('4375ed1196046f83039fae6e7d4cb4e8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194532, ''),
('439a2a9bc75147e5b4e0bca71af5a2a4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572195146, ''),
('43d969acded962bd6e7fdc4267979fb6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('43f818bb9d72b98334a73fee8a1b02cb', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('4428f007d933ec425619e194514c5813', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('446b44830af0324f8c90d9a140f87f32', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('456f70611e737226855092390dcee557', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('45a8f2e84b557e1d91113cbe45fa6e65', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199983, ''),
('46e9a047257a39b5a164a96268d6902d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('47272c0af3d35ecda15a68cd27e41f21', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('475244fc43c3847d88a0fac6ce51690a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('484e5cadbd554a450af76d1a23827fd4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('4865f9b49df1876c056c0c6206687da6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192308, ''),
('48bf47f178a3a002a10bfced74ba8277', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('491ca39ce08ec6cd75f3c1cb436d5f1a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('4934e66da5d07c3664a9874e46bd3fc3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('49e717ff46d385e969ead9a64478bda0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('4e308d4e2ea4dc6ceb329096f9a9fb4f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('4e4207d1d4476c86d00fed7d6d22eadb', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('4f0a4f21ff42fb70549148049a720e64', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('504b0ea70e2c05e3eeebc0331776db96', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('51262454c04de5916e52c140e94b8329', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('51e3e02defc7426ba9dc0add07d9ce4e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('52190d897b386b3e92e35bd1bca29260', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194442, ''),
('53039b471831a69b3e937d5dbf0f520c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('53057c0a52e233431cd5842eb10f71c6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('53548baf567dd5ec18799bd65e2de792', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('53739d70f8e0e83b5ec9df028bd9e139', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194233, ''),
('53b1a16ddbd0b8390671fabab1806244', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194589, ''),
('53c4b958ee574a6078ccf1ee09b277e2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('53ce787b631239300bbee127a14c7e9d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194442, ''),
('54f5427e2f3df892070be59adf217b7d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194589, ''),
('55250714acbc238dbc23b2076be3547e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194285, ''),
('55433c1d9eab87e4c7191820ad3ff94c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('554637ac68ed7d874d20790cdfbb6998', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('56996670544ba9cc0237526030ba0bbf', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('56b7aa891f75cb378c6a4be1cd2f3d1c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('56c59bbca8a1d24de21d8fd1c08d8757', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('56fa1c5742edd00b7b8a1862ee5fd013', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182123, ''),
('57af3c9a158aa4b7050c6d53729454de', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194296, ''),
('57b82bfffdcb45bb718c8a692bc57f52', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('59ca81c62b356e0aaa41e9528abe0437', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('5a930060eb2aa8020f46043885385c92', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('5bf9a6dbdf0481390675cd0905cbeb90', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('5c9a6b8da4a517b3df04ee6c76e7cdef', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('5ecb4a5ba5129ea35c9dada4d67de70a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('5eeae4b4fa16281bc4670e9123d431cf', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('5fb079497e1c7a15ccfc60d391137a23', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('5ffb0c6406041c5bf1a9fe6d48b024e4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199571, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";b:1;s:8:\"user_det\";O:8:\"stdClass\":6:{s:8:\"admin_id\";s:1:\"3\";s:9:\"firstname\";s:8:\"Nivanthi\";s:8:\"lastname\";s:10:\"Wijerathna\";s:5:\"photo\";s:29:\"83817-img_20140927_144419.jpg\";s:11:\"admin_level\";s:1:\"1\";s:5:\"email\";s:19:\"nivanthiw@ymail.com\";}}'),
('60a1b0efe139348ad1804374f30cec64', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('61790ddb59e4a19076ca320c40f46529', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('61c260e7aab73b6c1cf2892353f9d9d6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('61fc620cf3f9498b5fd9ad4789e63001', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('62b6918998b8bcedf55e2e983a1eaad3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('64eceb1645f15df33d4776d34fc08e81', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('652dcf925485111b8ab5ae6b0139c965', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194442, ''),
('6538c6dd4860c027011e392ce49f34fe', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('65dcbd2ca83a4ef013670a827bd34f60', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('65dde5689f9012b48c55789428087486', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194442, ''),
('66ed9c99fbf23ec8c6ffa5d5aa5b1525', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('6735b3e6fcdf51210b92620d02754d1f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194532, ''),
('675397b111abafe8e90898f9e651b778', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194443, ''),
('676253164381f768328f287bb16eb43d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('68073fb1ed7a2c6ba11b57d630872ee1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('68d0d32fde08d72329a54b7bb7c46491', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('693cd8b927ac4553a9d2182de0034051', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('698fafaa071c40918c142f24b7b979c9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182914, ''),
('69a88d68a19bd003db17f9486a91a8e0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('6c98bb1afb62688b95c7c8cd90fcbd33', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('6d942a031c999c03bccac992b602315c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('6d9451465e53017b39e158eabdc63472', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('6e5e4ea46c9e0dce6375a113db5b351c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194257, ''),
('6e76c33720a6697b8e4ae9d7b3a670c8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('6edcebd8c5476db24de75d4e49493a91', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('6f2ba4ee32e653d973ecd06950f2c067', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('6f896c3c3302a95a5bb0dbe6c88c8bde', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('7130a52f3f551955ef8c0436139f6ad8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('71b031af8a408abdfe71f14ae6ee4106', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('71b1ad1c6b78015fe83735090f47f846', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('7225febdfc5c4ac18a34527393bcece6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194442, ''),
('725e44df6f18f8c1e7c06bc7fd1919fc', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('72a9c1b11edb1f5986b81f3107240976', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192308, ''),
('732e2360ce92ad604ea68030fcfdefe2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('735e1811e3357ba95f22422d41dea050', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('736c7e4faa8a36b31b044314096992da', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('73ef0fbdfb29a72c5fbc0ee53957b012', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182658, ''),
('74fde2bfc170d0df759e9c4e2e01376e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('75b8ad02cbd1df04e5e7962c60b3e3a7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194293, ''),
('761605f5db9e4891c513a6d6bd673a9f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572195455, ''),
('7657080a7208c5adea2b1ffda95a8c67', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('76ad15342f2a3eb0f453b48e2a49801f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572195214, ''),
('77ac7926361541205b8fdda13180715a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192740, ''),
('77ccd7d4396d188678ff93422ff8f461', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('788bd5c4bdb72e72fcebdd8bb310e8b3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194441, ''),
('7a5575d0d939a809b309c4ad09dd1819', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('7c18e16ad32294d976945fa7d286e335', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('7c3e9e9af696a7b35670818f6e9ca751', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('7d8ebb8edf441da0b5a958b54850a6d0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('7eac3f0999678385b623cbc2ad2f04c1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('7f1ab5899bbf620192d1782a89ca4acf', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('7f218e3a09835473b734bad4d2406f7e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('7f61ebeb4406f26c53ff4c528e74da12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('840b18102ef43790f0f56636c5a588e8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('851ca1cd8fec102b50729a50c88580aa', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('859aeb61cfc7815745d7959d5e0cc207', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('86e10a3a3eff77b9426f8e40e70805d4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194450, ''),
('86f8483a9955c44a61f9a202f72c4a5c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('8863783b074a49a93c563dce396d2ae8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('887177d4c76b9b4392828d322d5c72fc', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182123, ''),
('8879aa882ab74669b06475061f7272ec', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('896d794737c9f88d26b0b6791d571e94', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('898c30c47f12cf36b376ab6fa7e7cbe5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('8a8610094ddd88da0f684eedb1013924', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('8b4a36abb1331ae4e789b4e3307e3d31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572159351, ''),
('8bb4547d6724db1c5fec297dd0b6f28d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194589, ''),
('8c2d2c56178c37e59b9e37f82487b0df', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('8cdcff91aa23c494323f051561eae17b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('8cf1b16a0f8c4361786313cebfd1f806', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('8d3e5cc1a2f959e06a3b2cc67bbf7697', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182121, ''),
('8e899616e698cb1ba66f580bbb495a74', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('904c4654a88a76d7ed53ad419a04b4d0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('93b1fb667c117d6079f491df611d5216', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('962cf93fe5eb32e6841799bc428440db', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('96fe0993a871ac4b0d93f787106b07ab', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('978b4512475721e8cfe211af548d53e6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('9820084b947975f5949ab8bc4b8c79b5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('996220cd9e1296bbfff7180b6f747884', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('99a423ecaf4a664b258284c322595ef9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('99a44f52e8ca0c75599f682b5611d10e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('9a140b69ed2ac68ad96b64bafa7ce64b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194443, ''),
('9c1cbdfbbf4aac1402fd764d821ebb14', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('9c802b469373d130b9159fb59a787899', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199786, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";b:1;s:8:\"user_det\";O:8:\"stdClass\":6:{s:8:\"admin_id\";s:1:\"3\";s:9:\"firstname\";s:8:\"Nivanthi\";s:8:\"lastname\";s:10:\"Wijerathna\";s:5:\"photo\";s:29:\"83817-img_20140927_144419.jpg\";s:11:\"admin_level\";s:1:\"1\";s:5:\"email\";s:19:\"nivanthiw@ymail.com\";}}'),
('9c8ab02c859e00abdb4abf1ad9a9fc29', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194535, ''),
('9dbb200ea3aee588bbea896df3bc112f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('9de75f774a1ab646b77d7c0109d882ea', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181697, ''),
('9ea5bd52bc4eda9e817db88c37a70216', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('a005cfd76d781d8157e3d61509a8f9c7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('a090339b87ab692d6dd2c46ce466bc6c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194456, ''),
('a0ca65318e9722f00646e6562fdabdbb', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194388, ''),
('a2cc8fa3fa06d949b2d14c70fddec020', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('a37464686e22cff228dd10000a91fc47', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('a3d2856c66171acb0d6ffa61d56011d1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194282, ''),
('a3e947c40dceeaef0a54bda842bbc582', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('a4649c1a199a6c9bd50f9afc53f6c7af', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('a8230ab0a8955ae6ec8b8dcd623d4e37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199964, ''),
('a82506ee34d41cf064bc84c5e588670b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('ac752dbb44e0d217712ce9edfebbad1f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('acbff8564f4fd72fbc2c3ce302b04608', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('adc99ddc3303970681922547bfff4d6c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182123, ''),
('aec8bdb03b165bbc86cc7f88933adda8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('af177984db0b38eaa8ceccabe618055e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182121, ''),
('af398f98ee8b5ca207075b80d931f7bb', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('b1d1def2ceec73fc78372171fdd5db42', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('b1edc7aa0171aa95617f1e046dbad691', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('b1ff78acfefb1644cfb509acb31ba0be', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('b2d1e10479aed23c312a5add9d38da37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('b3140e156621b5a0f80c1a187ed81553', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('b31c932b3b815ab46467e2b94d18dd73', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('b35ade20210db7b401e844d79e238920', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('b37e1c33c2655b04ecfce98660ff2180', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('b37f891e851c117502ef22683732956b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('b4f12eed0a6b21cb4ed09f345d62b865', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('b6cff4f3ce453a262426fa42fdcef571', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('b6d851aee941291634c5023ddd14d406', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('b6fda98165a20022db961fe5686e0b4b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199951, ''),
('b7ab70f11cc1a2eb273b5489364f6ed6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('ba06ec3b10677a50a0ca771bfb4ef2fd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('bb0ac0f78dd68b93636fb5b224a048d8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199843, ''),
('bb10e48f243d633f3b1bd57a5ce2c155', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('bb1ef8028dc18a7d85793a10d847f0c1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192308, ''),
('bb84efb1613cd0d2ddd7078a67bb353e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('bbbcf1583f657b50489721e58c4c0eef', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('bbe3a246945cbb069632088d639e8ac5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('bc07cfd1b362a7e92f98d7ee7cd9d5ce', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('bc2d5b6eba9a8d30ddef56051879e5b8', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192452, ''),
('bccb8180e4d27e8167e4b985082948ab', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199835, ''),
('bd35507bb0a8b5602a64dba4113acd14', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194442, ''),
('bdf9a606821c0302b53d91af5bb70697', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('beb233f570c9eec5439c2cd49eae7f25', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('c02106e527e286c113740d2a8554b17e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572198231, ''),
('c0740db0d4d92fdf7c9aff422f83b5be', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('c099cd7202f04cf3b7e15fbcf9d80065', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('c10820912ee98f65e094a84305ad3627', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('c1a452aba4118c3b921d485a8dd73d37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('c1ed60c4368ce2c0de5ebb230704c547', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('c2674b9922c9ed226d21d3cb41aa9e48', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('c472fda15b8ec8dd559750a5e850afcf', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('c4f8396c2f3b92c3b95039a6604cc2a9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194589, ''),
('c5e4c7cd4d1ebfcd969122526aa26d42', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('c621b5da7bd901df4cd29f5bb1f0dc21', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572189970, ''),
('c6388afc2e959761aa369b001159b242', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194527, ''),
('c66bbf8bc62906608c5b4c84e61a0a0d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199964, ''),
('c682745e7f16ae8544b3f3b7d4041259', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('c6c56191522dbf95772847eb54091dcf', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('c82983d56ecfc2e29433aea07e4e6f9b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('c8b1599aaa2ca42244674e32215c7e1e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182655, ''),
('c8ded17139a66afc1dae891ba7298e1d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194298, ''),
('ca15b3b062d57979a7c0da957f68ac94', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182122, ''),
('ca6e7b59bfcb34832833e98fbd6a07e0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194589, ''),
('cb0181338fa034815b66ee0e844208ce', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('cb190f9f73fcee529ad23f35fbd761b0', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572166725, ''),
('cbdb7de08debfd22a5881e9df1fe7302', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('ccd6e2d7f08243813f6496046052c2b6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194458, ''),
('cded2df137d0bfe53c982aeea0963b42', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181697, ''),
('ce257364bb064eb1d192d2192f9c1e67', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('cf0b9189100e9fb09c850beb0e9b0788', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167095, ''),
('cf39a26756685dabe111af07e8775bd6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182123, ''),
('cf84b385e591dfdf03e3ac2e410a00c1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194457, ''),
('d24baa4c81356924d3101365db8dc151', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194735, ''),
('d28fedb5725e8dd35e5f2a35c7c417bf', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194742, ''),
('d2a3ebbde95ed0c142d176f118ef691e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192308, ''),
('d31b532b6e01c6ba06cfc8e060f3c4ec', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194443, ''),
('d3c66978b786a2ca1baba9cbc47cc8e5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194246, ''),
('d4b7ca7b99904131b5490d88f12b3417', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('d4f21bf3bf25ccfc1b5b2c6578a94182', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('d4ff982a40a596256962185f6d6d4129', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('d6afa4f26a6030b33d6515c8b5754c9b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194530, ''),
('d6cc4a71fc5d399ef00dafd5813bd026', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('d847e2f8f68c4abf9ea931ea4fe1caaf', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192308, ''),
('d94dcf19e2fa94f215524deed5b22c28', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182123, ''),
('d9af5baf5bd5e0ebceac6657c32e2c78', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('dac00960f5860733ef2abfd6153e4621', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572198369, ''),
('dac06dbd2243c110228ca7c729e85158', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572195136, ''),
('db606ac85d6e30f5c28d2e90e5321a87', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('dbe45c0e284f1e2c7a314ee03e5c1837', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194531, ''),
('dbedca3be312de881ea0677c0df94ad2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('dd4b75252502cb37229ba75277c1bd64', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('defe0fe792de3d379f8f110010693f54', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('dfa98fdcafcacb20467951ccb71a4d38', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167096, ''),
('e082e0b3ff7c19b5f68e55c76aeb7c20', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182007, ''),
('e14d56058080bf880d2b6e22bb627725', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('e16df56950d18ef5da696ed5f4d6de7b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194589, ''),
('e1926a61b5f399e9c36fa99b26fdda8c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('e35479df8af0b8ff401da0cc187c673e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('e3d142add91c2b8cce59e7920d978ab5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('e43ee715ab43c6a36c37405c1eaa65ca', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('e46bb4f5b623481d3636b5c57c07c52d', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('e99e75c0b24f0e563d1ee27f524ffa85', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('ec0737b976cd9c698d9aba10bb371817', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('ec2a1be35583870ed4d7f4fdfaf715e9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572198058, ''),
('ee6e269f6f066a51763322cdec12795f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182290, ''),
('ee97f66400f8f3107bce3632c63fa33a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192791, ''),
('ef0720d537ebe1d99db8dd9bae17668e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('ef146ce3f30074dada4282bf4ee266b6', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('ef363a10c603a264846f459a01ece2d1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192450, ''),
('ef885e2750f7ed133fc5366fec60e3f7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572167043, '');
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f1c74a41217ef785139d2733d702615b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181696, ''),
('f255eaf3b59b6d90bc37a1bfb6638767', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194589, ''),
('f46ee854b3a704670e2845fcae19d208', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192451, ''),
('f4b225149ea4d049a2e11496787d538b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572195364, ''),
('f7306c365bd5d502597560eefaa645f5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('f7c1831436568c9252c6d9315b7fc111', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199966, ''),
('f7e95d0ffc2c2583ca8045dddebe0166', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182123, ''),
('f8f880becfa04e180681deac2583e617', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('f9c47ed498f85a0f122204144464b0fc', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('fb04e69644006416716725220313fd5c', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194743, ''),
('fb5d2eb888981dff9e9ebce18c5eaac3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182289, ''),
('fbe5bc9d7a30b5af5e2c8bfc84a6a82e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572181695, ''),
('fd8c5cc177d5c39084a1419113c6cdd5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572199965, ''),
('fe62c683b6206e552a008018c4aa3c41', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572194588, ''),
('ff030967133892267f4f9b1446b23167', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572182008, ''),
('ff0c6849a473b862de99d14b4cd4682a', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, ''),
('ff148a5a45c78fab3c01ea9d8f02d264', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192310, ''),
('ff4db25895e0ef9a501442ad8fecccfa', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0', 1572192309, '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(25) DEFAULT NULL,
  `contact_person` varchar(25) DEFAULT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `CompanyAddress` text NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People\'s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'XK', 'Kosovo'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People\'s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'ME', 'Montenegro'),
(146, 'MS', 'Montserrat'),
(147, 'MA', 'Morocco'),
(148, 'MZ', 'Mozambique'),
(149, 'MM', 'Myanmar'),
(150, 'NA', 'Namibia'),
(151, 'NR', 'Nauru'),
(152, 'NP', 'Nepal'),
(153, 'NL', 'Netherlands'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NC', 'New Caledonia'),
(156, 'NZ', 'New Zealand'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Niger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Norfork Island'),
(162, 'MP', 'Northern Mariana Islands'),
(163, 'NO', 'Norway'),
(164, 'OM', 'Oman'),
(165, 'PK', 'Pakistan'),
(166, 'PW', 'Palau'),
(167, 'PA', 'Panama'),
(168, 'PG', 'Papua New Guinea'),
(169, 'PY', 'Paraguay'),
(170, 'PE', 'Peru'),
(171, 'PH', 'Philippines'),
(172, 'PN', 'Pitcairn'),
(173, 'PL', 'Poland'),
(174, 'PT', 'Portugal'),
(175, 'PR', 'Puerto Rico'),
(176, 'QA', 'Qatar'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `country_t`
--

DROP TABLE IF EXISTS `country_t`;
CREATE TABLE IF NOT EXISTS `country_t` (
  `country_id` int(5) NOT NULL AUTO_INCREMENT,
  `iso2` char(2) DEFAULT NULL,
  `short_name` varchar(80) NOT NULL DEFAULT '',
  `long_name` varchar(80) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  `numcode` varchar(6) DEFAULT NULL,
  `un_member` varchar(12) DEFAULT NULL,
  `calling_code` varchar(8) DEFAULT NULL,
  `cctld` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_t`
--

INSERT INTO `country_t` (`country_id`, `iso2`, `short_name`, `long_name`, `iso3`, `numcode`, `un_member`, `calling_code`, `cctld`) VALUES
(1, 'AF', 'Afghanistan', 'Islamic Republic of Afghanistan', 'AFG', '004', 'yes', '93', '.af'),
(2, 'AX', 'Aland Islands', '&Aring;land Islands', 'ALA', '248', 'no', '358', '.ax'),
(3, 'AL', 'Albania', 'Republic of Albania', 'ALB', '008', 'yes', '355', '.al'),
(4, 'DZ', 'Algeria', 'People\'s Democratic Republic of Algeria', 'DZA', '012', 'yes', '213', '.dz'),
(5, 'AS', 'American Samoa', 'American Samoa', 'ASM', '016', 'no', '1+684', '.as'),
(6, 'AD', 'Andorra', 'Principality of Andorra', 'AND', '020', 'yes', '376', '.ad'),
(7, 'AO', 'Angola', 'Republic of Angola', 'AGO', '024', 'yes', '244', '.ao'),
(8, 'AI', 'Anguilla', 'Anguilla', 'AIA', '660', 'no', '1+264', '.ai'),
(9, 'AQ', 'Antarctica', 'Antarctica', 'ATA', '010', 'no', '672', '.aq'),
(10, 'AG', 'Antigua and Barbuda', 'Antigua and Barbuda', 'ATG', '028', 'yes', '1+268', '.ag'),
(11, 'AR', 'Argentina', 'Argentine Republic', 'ARG', '032', 'yes', '54', '.ar'),
(12, 'AM', 'Armenia', 'Republic of Armenia', 'ARM', '051', 'yes', '374', '.am'),
(13, 'AW', 'Aruba', 'Aruba', 'ABW', '533', 'no', '297', '.aw'),
(14, 'AU', 'Australia', 'Commonwealth of Australia', 'AUS', '036', 'yes', '61', '.au'),
(15, 'AT', 'Austria', 'Republic of Austria', 'AUT', '040', 'yes', '43', '.at'),
(16, 'AZ', 'Azerbaijan', 'Republic of Azerbaijan', 'AZE', '031', 'yes', '994', '.az'),
(17, 'BS', 'Bahamas', 'Commonwealth of The Bahamas', 'BHS', '044', 'yes', '1+242', '.bs'),
(18, 'BH', 'Bahrain', 'Kingdom of Bahrain', 'BHR', '048', 'yes', '973', '.bh'),
(19, 'BD', 'Bangladesh', 'People\'s Republic of Bangladesh', 'BGD', '050', 'yes', '880', '.bd'),
(20, 'BB', 'Barbados', 'Barbados', 'BRB', '052', 'yes', '1+246', '.bb'),
(21, 'BY', 'Belarus', 'Republic of Belarus', 'BLR', '112', 'yes', '375', '.by'),
(22, 'BE', 'Belgium', 'Kingdom of Belgium', 'BEL', '056', 'yes', '32', '.be'),
(23, 'BZ', 'Belize', 'Belize', 'BLZ', '084', 'yes', '501', '.bz'),
(24, 'BJ', 'Benin', 'Republic of Benin', 'BEN', '204', 'yes', '229', '.bj'),
(25, 'BM', 'Bermuda', 'Bermuda Islands', 'BMU', '060', 'no', '1+441', '.bm'),
(26, 'BT', 'Bhutan', 'Kingdom of Bhutan', 'BTN', '064', 'yes', '975', '.bt'),
(27, 'BO', 'Bolivia', 'Plurinational State of Bolivia', 'BOL', '068', 'yes', '591', '.bo'),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', '535', 'no', '599', '.bq'),
(29, 'BA', 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BIH', '070', 'yes', '387', '.ba'),
(30, 'BW', 'Botswana', 'Republic of Botswana', 'BWA', '072', 'yes', '267', '.bw'),
(31, 'BV', 'Bouvet Island', 'Bouvet Island', 'BVT', '074', 'no', 'NONE', '.bv'),
(32, 'BR', 'Brazil', 'Federative Republic of Brazil', 'BRA', '076', 'yes', '55', '.br'),
(33, 'IO', 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'IOT', '086', 'no', '246', '.io'),
(34, 'BN', 'Brunei', 'Brunei Darussalam', 'BRN', '096', 'yes', '673', '.bn'),
(35, 'BG', 'Bulgaria', 'Republic of Bulgaria', 'BGR', '100', 'yes', '359', '.bg'),
(36, 'BF', 'Burkina Faso', 'Burkina Faso', 'BFA', '854', 'yes', '226', '.bf'),
(37, 'BI', 'Burundi', 'Republic of Burundi', 'BDI', '108', 'yes', '257', '.bi'),
(38, 'KH', 'Cambodia', 'Kingdom of Cambodia', 'KHM', '116', 'yes', '855', '.kh'),
(39, 'CM', 'Cameroon', 'Republic of Cameroon', 'CMR', '120', 'yes', '237', '.cm'),
(40, 'CA', 'Canada', 'Canada', 'CAN', '124', 'yes', '1', '.ca'),
(41, 'CV', 'Cape Verde', 'Republic of Cape Verde', 'CPV', '132', 'yes', '238', '.cv'),
(42, 'KY', 'Cayman Islands', 'The Cayman Islands', 'CYM', '136', 'no', '1+345', '.ky'),
(43, 'CF', 'Central African Republic', 'Central African Republic', 'CAF', '140', 'yes', '236', '.cf'),
(44, 'TD', 'Chad', 'Republic of Chad', 'TCD', '148', 'yes', '235', '.td'),
(45, 'CL', 'Chile', 'Republic of Chile', 'CHL', '152', 'yes', '56', '.cl'),
(46, 'CN', 'China', 'People\'s Republic of China', 'CHN', '156', 'yes', '86', '.cn'),
(47, 'CX', 'Christmas Island', 'Christmas Island', 'CXR', '162', 'no', '61', '.cx'),
(48, 'CC', 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CCK', '166', 'no', '61', '.cc'),
(49, 'CO', 'Colombia', 'Republic of Colombia', 'COL', '170', 'yes', '57', '.co'),
(50, 'KM', 'Comoros', 'Union of the Comoros', 'COM', '174', 'yes', '269', '.km'),
(51, 'CG', 'Congo', 'Republic of the Congo', 'COG', '178', 'yes', '242', '.cg'),
(52, 'CK', 'Cook Islands', 'Cook Islands', 'COK', '184', 'some', '682', '.ck'),
(53, 'CR', 'Costa Rica', 'Republic of Costa Rica', 'CRI', '188', 'yes', '506', '.cr'),
(54, 'CI', 'Cote d\'ivoire (Ivory Coast)', 'Republic of C&ocirc;te D\'Ivoire (Ivory Coast)', 'CIV', '384', 'yes', '225', '.ci'),
(55, 'HR', 'Croatia', 'Republic of Croatia', 'HRV', '191', 'yes', '385', '.hr'),
(56, 'CU', 'Cuba', 'Republic of Cuba', 'CUB', '192', 'yes', '53', '.cu'),
(57, 'CW', 'Curacao', 'Cura&ccedil;ao', 'CUW', '531', 'no', '599', '.cw'),
(58, 'CY', 'Cyprus', 'Republic of Cyprus', 'CYP', '196', 'yes', '357', '.cy'),
(59, 'CZ', 'Czech Republic', 'Czech Republic', 'CZE', '203', 'yes', '420', '.cz'),
(60, 'CD', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', 'COD', '180', 'yes', '243', '.cd'),
(61, 'DK', 'Denmark', 'Kingdom of Denmark', 'DNK', '208', 'yes', '45', '.dk'),
(62, 'DJ', 'Djibouti', 'Republic of Djibouti', 'DJI', '262', 'yes', '253', '.dj'),
(63, 'DM', 'Dominica', 'Commonwealth of Dominica', 'DMA', '212', 'yes', '1+767', '.dm'),
(64, 'DO', 'Dominican Republic', 'Dominican Republic', 'DOM', '214', 'yes', '1+809, 8', '.do'),
(65, 'EC', 'Ecuador', 'Republic of Ecuador', 'ECU', '218', 'yes', '593', '.ec'),
(66, 'EG', 'Egypt', 'Arab Republic of Egypt', 'EGY', '818', 'yes', '20', '.eg'),
(67, 'SV', 'El Salvador', 'Republic of El Salvador', 'SLV', '222', 'yes', '503', '.sv'),
(68, 'GQ', 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GNQ', '226', 'yes', '240', '.gq'),
(69, 'ER', 'Eritrea', 'State of Eritrea', 'ERI', '232', 'yes', '291', '.er'),
(70, 'EE', 'Estonia', 'Republic of Estonia', 'EST', '233', 'yes', '372', '.ee'),
(71, 'ET', 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ETH', '231', 'yes', '251', '.et'),
(72, 'FK', 'Falkland Islands (Malvinas)', 'The Falkland Islands (Malvinas)', 'FLK', '238', 'no', '500', '.fk'),
(73, 'FO', 'Faroe Islands', 'The Faroe Islands', 'FRO', '234', 'no', '298', '.fo'),
(74, 'FJ', 'Fiji', 'Republic of Fiji', 'FJI', '242', 'yes', '679', '.fj'),
(75, 'FI', 'Finland', 'Republic of Finland', 'FIN', '246', 'yes', '358', '.fi'),
(76, 'FR', 'France', 'French Republic', 'FRA', '250', 'yes', '33', '.fr'),
(77, 'GF', 'French Guiana', 'French Guiana', 'GUF', '254', 'no', '594', '.gf'),
(78, 'PF', 'French Polynesia', 'French Polynesia', 'PYF', '258', 'no', '689', '.pf'),
(79, 'TF', 'French Southern Territories', 'French Southern Territories', 'ATF', '260', 'no', NULL, '.tf'),
(80, 'GA', 'Gabon', 'Gabonese Republic', 'GAB', '266', 'yes', '241', '.ga'),
(81, 'GM', 'Gambia', 'Republic of The Gambia', 'GMB', '270', 'yes', '220', '.gm'),
(82, 'GE', 'Georgia', 'Georgia', 'GEO', '268', 'yes', '995', '.ge'),
(83, 'DE', 'Germany', 'Federal Republic of Germany', 'DEU', '276', 'yes', '49', '.de'),
(84, 'GH', 'Ghana', 'Republic of Ghana', 'GHA', '288', 'yes', '233', '.gh'),
(85, 'GI', 'Gibraltar', 'Gibraltar', 'GIB', '292', 'no', '350', '.gi'),
(86, 'GR', 'Greece', 'Hellenic Republic', 'GRC', '300', 'yes', '30', '.gr'),
(87, 'GL', 'Greenland', 'Greenland', 'GRL', '304', 'no', '299', '.gl'),
(88, 'GD', 'Grenada', 'Grenada', 'GRD', '308', 'yes', '1+473', '.gd'),
(89, 'GP', 'Guadaloupe', 'Guadeloupe', 'GLP', '312', 'no', '590', '.gp'),
(90, 'GU', 'Guam', 'Guam', 'GUM', '316', 'no', '1+671', '.gu'),
(91, 'GT', 'Guatemala', 'Republic of Guatemala', 'GTM', '320', 'yes', '502', '.gt'),
(92, 'GG', 'Guernsey', 'Guernsey', 'GGY', '831', 'no', '44', '.gg'),
(93, 'GN', 'Guinea', 'Republic of Guinea', 'GIN', '324', 'yes', '224', '.gn'),
(94, 'GW', 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GNB', '624', 'yes', '245', '.gw'),
(95, 'GY', 'Guyana', 'Co-operative Republic of Guyana', 'GUY', '328', 'yes', '592', '.gy'),
(96, 'HT', 'Haiti', 'Republic of Haiti', 'HTI', '332', 'yes', '509', '.ht'),
(97, 'HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HMD', '334', 'no', 'NONE', '.hm'),
(98, 'HN', 'Honduras', 'Republic of Honduras', 'HND', '340', 'yes', '504', '.hn'),
(99, 'HK', 'Hong Kong', 'Hong Kong', 'HKG', '344', 'no', '852', '.hk'),
(100, 'HU', 'Hungary', 'Hungary', 'HUN', '348', 'yes', '36', '.hu'),
(101, 'IS', 'Iceland', 'Republic of Iceland', 'ISL', '352', 'yes', '354', '.is'),
(102, 'IN', 'India', 'Republic of India', 'IND', '356', 'yes', '91', '.in'),
(103, 'ID', 'Indonesia', 'Republic of Indonesia', 'IDN', '360', 'yes', '62', '.id'),
(104, 'IR', 'Iran', 'Islamic Republic of Iran', 'IRN', '364', 'yes', '98', '.ir'),
(105, 'IQ', 'Iraq', 'Republic of Iraq', 'IRQ', '368', 'yes', '964', '.iq'),
(106, 'IE', 'Ireland', 'Ireland', 'IRL', '372', 'yes', '353', '.ie'),
(107, 'IM', 'Isle of Man', 'Isle of Man', 'IMN', '833', 'no', '44', '.im'),
(108, 'IL', 'Israel', 'State of Israel', 'ISR', '376', 'yes', '972', '.il'),
(109, 'IT', 'Italy', 'Italian Republic', 'ITA', '380', 'yes', '39', '.jm'),
(110, 'JM', 'Jamaica', 'Jamaica', 'JAM', '388', 'yes', '1+876', '.jm'),
(111, 'JP', 'Japan', 'Japan', 'JPN', '392', 'yes', '81', '.jp'),
(112, 'JE', 'Jersey', 'The Bailiwick of Jersey', 'JEY', '832', 'no', '44', '.je'),
(113, 'JO', 'Jordan', 'Hashemite Kingdom of Jordan', 'JOR', '400', 'yes', '962', '.jo'),
(114, 'KZ', 'Kazakhstan', 'Republic of Kazakhstan', 'KAZ', '398', 'yes', '7', '.kz'),
(115, 'KE', 'Kenya', 'Republic of Kenya', 'KEN', '404', 'yes', '254', '.ke'),
(116, 'KI', 'Kiribati', 'Republic of Kiribati', 'KIR', '296', 'yes', '686', '.ki'),
(117, 'XK', 'Kosovo', 'Republic of Kosovo', '---', '---', 'some', '381', ''),
(118, 'KW', 'Kuwait', 'State of Kuwait', 'KWT', '414', 'yes', '965', '.kw'),
(119, 'KG', 'Kyrgyzstan', 'Kyrgyz Republic', 'KGZ', '417', 'yes', '996', '.kg'),
(120, 'LA', 'Laos', 'Lao People\'s Democratic Republic', 'LAO', '418', 'yes', '856', '.la'),
(121, 'LV', 'Latvia', 'Republic of Latvia', 'LVA', '428', 'yes', '371', '.lv'),
(122, 'LB', 'Lebanon', 'Republic of Lebanon', 'LBN', '422', 'yes', '961', '.lb'),
(123, 'LS', 'Lesotho', 'Kingdom of Lesotho', 'LSO', '426', 'yes', '266', '.ls'),
(124, 'LR', 'Liberia', 'Republic of Liberia', 'LBR', '430', 'yes', '231', '.lr'),
(125, 'LY', 'Libya', 'Libya', 'LBY', '434', 'yes', '218', '.ly'),
(126, 'LI', 'Liechtenstein', 'Principality of Liechtenstein', 'LIE', '438', 'yes', '423', '.li'),
(127, 'LT', 'Lithuania', 'Republic of Lithuania', 'LTU', '440', 'yes', '370', '.lt'),
(128, 'LU', 'Luxembourg', 'Grand Duchy of Luxembourg', 'LUX', '442', 'yes', '352', '.lu'),
(129, 'MO', 'Macao', 'The Macao Special Administrative Region', 'MAC', '446', 'no', '853', '.mo'),
(130, 'MK', 'Macedonia', 'The Former Yugoslav Republic of Macedonia', 'MKD', '807', 'yes', '389', '.mk'),
(131, 'MG', 'Madagascar', 'Republic of Madagascar', 'MDG', '450', 'yes', '261', '.mg'),
(132, 'MW', 'Malawi', 'Republic of Malawi', 'MWI', '454', 'yes', '265', '.mw'),
(133, 'MY', 'Malaysia', 'Malaysia', 'MYS', '458', 'yes', '60', '.my'),
(134, 'MV', 'Maldives', 'Republic of Maldives', 'MDV', '462', 'yes', '960', '.mv'),
(135, 'ML', 'Mali', 'Republic of Mali', 'MLI', '466', 'yes', '223', '.ml'),
(136, 'MT', 'Malta', 'Republic of Malta', 'MLT', '470', 'yes', '356', '.mt'),
(137, 'MH', 'Marshall Islands', 'Republic of the Marshall Islands', 'MHL', '584', 'yes', '692', '.mh'),
(138, 'MQ', 'Martinique', 'Martinique', 'MTQ', '474', 'no', '596', '.mq'),
(139, 'MR', 'Mauritania', 'Islamic Republic of Mauritania', 'MRT', '478', 'yes', '222', '.mr'),
(140, 'MU', 'Mauritius', 'Republic of Mauritius', 'MUS', '480', 'yes', '230', '.mu'),
(141, 'YT', 'Mayotte', 'Mayotte', 'MYT', '175', 'no', '262', '.yt'),
(142, 'MX', 'Mexico', 'United Mexican States', 'MEX', '484', 'yes', '52', '.mx'),
(143, 'FM', 'Micronesia', 'Federated States of Micronesia', 'FSM', '583', 'yes', '691', '.fm'),
(144, 'MD', 'Moldava', 'Republic of Moldova', 'MDA', '498', 'yes', '373', '.md'),
(145, 'MC', 'Monaco', 'Principality of Monaco', 'MCO', '492', 'yes', '377', '.mc'),
(146, 'MN', 'Mongolia', 'Mongolia', 'MNG', '496', 'yes', '976', '.mn'),
(147, 'ME', 'Montenegro', 'Montenegro', 'MNE', '499', 'yes', '382', '.me'),
(148, 'MS', 'Montserrat', 'Montserrat', 'MSR', '500', 'no', '1+664', '.ms'),
(149, 'MA', 'Morocco', 'Kingdom of Morocco', 'MAR', '504', 'yes', '212', '.ma'),
(150, 'MZ', 'Mozambique', 'Republic of Mozambique', 'MOZ', '508', 'yes', '258', '.mz'),
(151, 'MM', 'Myanmar (Burma)', 'Republic of the Union of Myanmar', 'MMR', '104', 'yes', '95', '.mm'),
(152, 'NA', 'Namibia', 'Republic of Namibia', 'NAM', '516', 'yes', '264', '.na'),
(153, 'NR', 'Nauru', 'Republic of Nauru', 'NRU', '520', 'yes', '674', '.nr'),
(154, 'NP', 'Nepal', 'Federal Democratic Republic of Nepal', 'NPL', '524', 'yes', '977', '.np'),
(155, 'NL', 'Netherlands', 'Kingdom of the Netherlands', 'NLD', '528', 'yes', '31', '.nl'),
(156, 'NC', 'New Caledonia', 'New Caledonia', 'NCL', '540', 'no', '687', '.nc'),
(157, 'NZ', 'New Zealand', 'New Zealand', 'NZL', '554', 'yes', '64', '.nz'),
(158, 'NI', 'Nicaragua', 'Republic of Nicaragua', 'NIC', '558', 'yes', '505', '.ni'),
(159, 'NE', 'Niger', 'Republic of Niger', 'NER', '562', 'yes', '227', '.ne'),
(160, 'NG', 'Nigeria', 'Federal Republic of Nigeria', 'NGA', '566', 'yes', '234', '.ng'),
(161, 'NU', 'Niue', 'Niue', 'NIU', '570', 'some', '683', '.nu'),
(162, 'NF', 'Norfolk Island', 'Norfolk Island', 'NFK', '574', 'no', '672', '.nf'),
(163, 'KP', 'North Korea', 'Democratic People\'s Republic of Korea', 'PRK', '408', 'yes', '850', '.kp'),
(164, 'MP', 'Northern Mariana Islands', 'Northern Mariana Islands', 'MNP', '580', 'no', '1+670', '.mp'),
(165, 'NO', 'Norway', 'Kingdom of Norway', 'NOR', '578', 'yes', '47', '.no'),
(166, 'OM', 'Oman', 'Sultanate of Oman', 'OMN', '512', 'yes', '968', '.om'),
(167, 'PK', 'Pakistan', 'Islamic Republic of Pakistan', 'PAK', '586', 'yes', '92', '.pk'),
(168, 'PW', 'Palau', 'Republic of Palau', 'PLW', '585', 'yes', '680', '.pw'),
(169, 'PS', 'Palestine', 'State of Palestine (or Occupied Palestinian Territory)', 'PSE', '275', 'some', '970', '.ps'),
(170, 'PA', 'Panama', 'Republic of Panama', 'PAN', '591', 'yes', '507', '.pa'),
(171, 'PG', 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PNG', '598', 'yes', '675', '.pg'),
(172, 'PY', 'Paraguay', 'Republic of Paraguay', 'PRY', '600', 'yes', '595', '.py'),
(173, 'PE', 'Peru', 'Republic of Peru', 'PER', '604', 'yes', '51', '.pe'),
(174, 'PH', 'Phillipines', 'Republic of the Philippines', 'PHL', '608', 'yes', '63', '.ph'),
(175, 'PN', 'Pitcairn', 'Pitcairn', 'PCN', '612', 'no', 'NONE', '.pn'),
(176, 'PL', 'Poland', 'Republic of Poland', 'POL', '616', 'yes', '48', '.pl'),
(177, 'PT', 'Portugal', 'Portuguese Republic', 'PRT', '620', 'yes', '351', '.pt'),
(178, 'PR', 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PRI', '630', 'no', '1+939', '.pr'),
(179, 'QA', 'Qatar', 'State of Qatar', 'QAT', '634', 'yes', '974', '.qa'),
(180, 'RE', 'Reunion', 'R&eacute;union', 'REU', '638', 'no', '262', '.re'),
(181, 'RO', 'Romania', 'Romania', 'ROU', '642', 'yes', '40', '.ro'),
(182, 'RU', 'Russia', 'Russian Federation', 'RUS', '643', 'yes', '7', '.ru'),
(183, 'RW', 'Rwanda', 'Republic of Rwanda', 'RWA', '646', 'yes', '250', '.rw'),
(184, 'BL', 'Saint Barthelemy', 'Saint Barth&eacute;lemy', 'BLM', '652', 'no', '590', '.bl'),
(185, 'SH', 'Saint Helena', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', '654', 'no', '290', '.sh'),
(186, 'KN', 'Saint Kitts and Nevis', 'Federation of Saint Christopher and Nevis', 'KNA', '659', 'yes', '1+869', '.kn'),
(187, 'LC', 'Saint Lucia', 'Saint Lucia', 'LCA', '662', 'yes', '1+758', '.lc'),
(188, 'MF', 'Saint Martin', 'Saint Martin', 'MAF', '663', 'no', '590', '.mf'),
(189, 'PM', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'SPM', '666', 'no', '508', '.pm'),
(190, 'VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VCT', '670', 'yes', '1+784', '.vc'),
(191, 'WS', 'Samoa', 'Independent State of Samoa', 'WSM', '882', 'yes', '685', '.ws'),
(192, 'SM', 'San Marino', 'Republic of San Marino', 'SMR', '674', 'yes', '378', '.sm'),
(193, 'ST', 'Sao Tome and Principe', 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'STP', '678', 'yes', '239', '.st'),
(194, 'SA', 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SAU', '682', 'yes', '966', '.sa'),
(195, 'SN', 'Senegal', 'Republic of Senegal', 'SEN', '686', 'yes', '221', '.sn'),
(196, 'RS', 'Serbia', 'Republic of Serbia', 'SRB', '688', 'yes', '381', '.rs'),
(197, 'SC', 'Seychelles', 'Republic of Seychelles', 'SYC', '690', 'yes', '248', '.sc'),
(198, 'SL', 'Sierra Leone', 'Republic of Sierra Leone', 'SLE', '694', 'yes', '232', '.sl'),
(199, 'SG', 'Singapore', 'Republic of Singapore', 'SGP', '702', 'yes', '65', '.sg'),
(200, 'SX', 'Sint Maarten', 'Sint Maarten', 'SXM', '534', 'no', '1+721', '.sx'),
(201, 'SK', 'Slovakia', 'Slovak Republic', 'SVK', '703', 'yes', '421', '.sk'),
(202, 'SI', 'Slovenia', 'Republic of Slovenia', 'SVN', '705', 'yes', '386', '.si'),
(203, 'SB', 'Solomon Islands', 'Solomon Islands', 'SLB', '090', 'yes', '677', '.sb'),
(204, 'SO', 'Somalia', 'Somali Republic', 'SOM', '706', 'yes', '252', '.so'),
(205, 'ZA', 'South Africa', 'Republic of South Africa', 'ZAF', '710', 'yes', '27', '.za'),
(206, 'GS', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'SGS', '239', 'no', '500', '.gs'),
(207, 'KR', 'South Korea', 'Republic of Korea', 'KOR', '410', 'yes', '82', '.kr'),
(208, 'SS', 'South Sudan', 'Republic of South Sudan', 'SSD', '728', 'yes', '211', '.ss'),
(209, 'ES', 'Spain', 'Kingdom of Spain', 'ESP', '724', 'yes', '34', '.es'),
(210, 'LK', 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LKA', '144', 'yes', '94', '.lk'),
(211, 'SD', 'Sudan', 'Republic of the Sudan', 'SDN', '729', 'yes', '249', '.sd'),
(212, 'SR', 'Suriname', 'Republic of Suriname', 'SUR', '740', 'yes', '597', '.sr'),
(213, 'SJ', 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'SJM', '744', 'no', '47', '.sj'),
(214, 'SZ', 'Swaziland', 'Kingdom of Swaziland', 'SWZ', '748', 'yes', '268', '.sz'),
(215, 'SE', 'Sweden', 'Kingdom of Sweden', 'SWE', '752', 'yes', '46', '.se'),
(216, 'CH', 'Switzerland', 'Swiss Confederation', 'CHE', '756', 'yes', '41', '.ch'),
(217, 'SY', 'Syria', 'Syrian Arab Republic', 'SYR', '760', 'yes', '963', '.sy'),
(218, 'TW', 'Taiwan', 'Republic of China (Taiwan)', 'TWN', '158', 'former', '886', '.tw'),
(219, 'TJ', 'Tajikistan', 'Republic of Tajikistan', 'TJK', '762', 'yes', '992', '.tj'),
(220, 'TZ', 'Tanzania', 'United Republic of Tanzania', 'TZA', '834', 'yes', '255', '.tz'),
(221, 'TH', 'Thailand', 'Kingdom of Thailand', 'THA', '764', 'yes', '66', '.th'),
(222, 'TL', 'Timor-Leste (East Timor)', 'Democratic Republic of Timor-Leste', 'TLS', '626', 'yes', '670', '.tl'),
(223, 'TG', 'Togo', 'Togolese Republic', 'TGO', '768', 'yes', '228', '.tg'),
(224, 'TK', 'Tokelau', 'Tokelau', 'TKL', '772', 'no', '690', '.tk'),
(225, 'TO', 'Tonga', 'Kingdom of Tonga', 'TON', '776', 'yes', '676', '.to'),
(226, 'TT', 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TTO', '780', 'yes', '1+868', '.tt'),
(227, 'TN', 'Tunisia', 'Republic of Tunisia', 'TUN', '788', 'yes', '216', '.tn'),
(228, 'TR', 'Turkey', 'Republic of Turkey', 'TUR', '792', 'yes', '90', '.tr'),
(229, 'TM', 'Turkmenistan', 'Turkmenistan', 'TKM', '795', 'yes', '993', '.tm'),
(230, 'TC', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TCA', '796', 'no', '1+649', '.tc'),
(231, 'TV', 'Tuvalu', 'Tuvalu', 'TUV', '798', 'yes', '688', '.tv'),
(232, 'UG', 'Uganda', 'Republic of Uganda', 'UGA', '800', 'yes', '256', '.ug'),
(233, 'UA', 'Ukraine', 'Ukraine', 'UKR', '804', 'yes', '380', '.ua'),
(234, 'AE', 'United Arab Emirates', 'United Arab Emirates', 'ARE', '784', 'yes', '971', '.ae'),
(235, 'GB', 'United Kingdom', 'United Kingdom of Great Britain and Nothern Ireland', 'GBR', '826', 'yes', '44', '.uk'),
(236, 'US', 'United States', 'United States of America', 'USA', '840', 'yes', '1', '.us'),
(237, 'UM', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UMI', '581', 'no', 'NONE', 'NONE'),
(238, 'UY', 'Uruguay', 'Eastern Republic of Uruguay', 'URY', '858', 'yes', '598', '.uy'),
(239, 'UZ', 'Uzbekistan', 'Republic of Uzbekistan', 'UZB', '860', 'yes', '998', '.uz'),
(240, 'VU', 'Vanuatu', 'Republic of Vanuatu', 'VUT', '548', 'yes', '678', '.vu'),
(241, 'VA', 'Vatican City', 'State of the Vatican City', 'VAT', '336', 'no', '39', '.va'),
(242, 'VE', 'Venezuela', 'Bolivarian Republic of Venezuela', 'VEN', '862', 'yes', '58', '.ve'),
(243, 'VN', 'Vietnam', 'Socialist Republic of Vietnam', 'VNM', '704', 'yes', '84', '.vn'),
(244, 'VG', 'Virgin Islands, British', 'British Virgin Islands', 'VGB', '092', 'no', '1+284', '.vg'),
(245, 'VI', 'Virgin Islands, US', 'Virgin Islands of the United States', 'VIR', '850', 'no', '1+340', '.vi'),
(246, 'WF', 'Wallis and Futuna', 'Wallis and Futuna', 'WLF', '876', 'no', '681', '.wf'),
(247, 'EH', 'Western Sahara', 'Western Sahara', 'ESH', '732', 'no', '212', '.eh'),
(248, 'YE', 'Yemen', 'Republic of Yemen', 'YEM', '887', 'yes', '967', '.ye'),
(249, 'ZM', 'Zambia', 'Republic of Zambia', 'ZMB', '894', 'yes', '260', '.zm'),
(250, 'ZW', 'Zimbabwe', 'Republic of Zimbabwe', 'ZWE', '716', 'yes', '263', '.zw');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `food_code` varchar(20) NOT NULL,
  `food_name` varchar(25) NOT NULL,
  `local_price` decimal(10,2) DEFAULT NULL,
  `foreign_price` decimal(10,2) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_code`, `food_name`, `local_price`, `foreign_price`, `description`) VALUES
(2, 'SH1', 'string hoppers', '350.00', '3.00', '<p>\r\n 10 string hopers with chicken curry</p>\r\n'),
(3, 'SH2', 'string hoppers', '350.00', '3.00', '<p>\r\n 10 string hopeers wih roasted chicken leg</p>\r\n'),
(4, 'SH3', 'string hoppers', '300.00', '2.08', '<p>\r\n 10 string hoppers with beef curry</p>\r\n'),
(5, 'SH4', 'string hoppers', '500.00', '6.00', '<p>\r\n 10 string hoppers with sea food curry</p>\r\n'),
(6, 'SH5', 'string hoppers', '300.00', '2.08', '<p>\r\n 10 string hoppers with egg curry</p>\r\n'),
(7, 'TB1', 'chicken toast', '400.00', '4.00', '<p>\r\n 2 pies f bread with chicken,vegetable salad</p>\r\n'),
(8, 'TB2', 'beef toast', '300.00', '3.00', '<p>\r\n 2 pies f bread with beef,vegetable salad</p>\r\n'),
(9, 'TB3', 'sea food toast', '400.00', '4.00', '<p>\r\n 2 pies f bread with sea food,vegetable salad</p>\r\n'),
(10, 'TB4', 'vegetable toast', '200.00', '2.08', '<p>\r\n 2 pies f bread with boiled vegetable,and butter cream</p>\r\n'),
(11, 'TB5', 'egg toast', '300.00', '3.00', '<p>\r\n 2 pies f bread with boiled/fried egg,vegetable salad</p>\r\n'),
(12, 'MR1', 'red milk rice', '250.00', '1.05', '<p>\r\n 2 pies of milk rice and chilly paste</p>\r\n'),
(13, 'MR2', 'white milk rice', '250.00', '1.05', '<p>\r\n 2 pies of milk rice and chilly paste</p>\r\n'),
(14, 'RD1', 'sea food f.rice', '500.00', '6.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(15, 'RD2', 'mixed nasi goreng', '600.00', '6.05', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(16, 'RD3', 'roasted chicken f.rice', '500.00', '6.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(17, 'RD4', 'vegetable f.rice', '400.00', '5.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(18, 'RD5', 'rice and curry', '250.00', '2.09', '<p>\r\n 3 vegetable curry and chicken/beef/egg/seafood</p>\r\n'),
(19, 'ND1', 'rosted chicken noddles', '500.00', '6.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(20, 'ND2', 'sea food noodles', '500.00', '6.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(21, 'ND3', 'vegetable noodles', '450.00', '2.05', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(22, 'ND4', 'beef mixed noodles', '500.00', '6.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(23, 'ND5', 'spicy noodles', '500.00', '6.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(24, 'R1', 'egg rotti', '150.00', '1.02', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(25, 'R2', 'ornion rotti', '100.00', '1.00', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(26, 'R3', 'cheese rotti', '200.00', '2.08', '<p>\r\n wih vegetable salad and chilly paste</p>\r\n'),
(27, 'R4', 'pol rotti', '75.00', '5.00', '<p>\r\n cup of curry and chilly paste</p>\r\n'),
(28, 'H1', 'red hoppers', '30.00', '3.00', '<p>\r\n sinisamble or chilly paste</p>\r\n'),
(29, 'H2', 'white hoppers', '30.00', '0.03', '<p>\r\n sinisamble or chilly paste</p>\r\n'),
(30, 'H3', 'egg hoppers ', '75.00', '0.05', '<p>\r\n sinisamble or chilly paste and white or red hopper</p>\r\n'),
(31, 'S1', 'chicken soup', '200.00', '1.05', '<p>\r\n with a bun</p>\r\n'),
(32, 'S2', 'beef soup', '200.00', '1.05', '<p>\r\n with a bun</p>\r\n'),
(33, 'S3', 'vegetable soup', '150.00', '1.02', NULL),
(34, 'S4', 'mixed soup', '300.00', '4.00', NULL),
(35, 'S5', 'spicy mixed thai soup', '300.00', '4.00', NULL),
(36, 'S6', 'sweet baby corn soup', '200.00', '1.05', NULL),
(37, 'A1', 'village salad', '250.00', '1.05', '<p>\r\n fresh vegetables tossed in home made souce</p>\r\n'),
(38, 'A2', 'chiken salad', '370.00', '2.03', '<p>\r\n delicated mix of fresh vegetables & diced chicken dressed with home made souce</p>\r\n'),
(39, 'A3', 'quuen\'s salad', '350.00', '3.00', '<p>\r\n delicate mis of fresh vegetables,fruits and cheese dressed with special sauce topped with black olives</p>\r\n'),
(40, 'A4', 'tuna salad', '400.00', '3.03', '<p>\r\n tuna fish,boiled vegetable mixed with special sauce</p>\r\n'),
(41, 'A5', 'onion salad', '200.00', '1.00', '<p>\r\n sri lanakan&#39;s favourite spices,onion and tomato cut in to julienne,dressed with lemon juice</p>\r\n'),
(42, 'A6', 'french fries', '150.00', '0.09', '<p>\r\n 100g</p>\r\n'),
(43, 'A7', 'garlic bread', '150.00', '0.09', NULL),
(44, 'SA1', 'chicken club sandwich', '330.00', '2.08', NULL),
(45, 'SA2', 'tuna club sandwich', '340.00', '3.00', NULL),
(46, 'SA3', 'vegetable club sandwich', '310.00', '2.08', NULL),
(47, 'SA4', 'chicken sharwan', '380.00', '2.09', NULL),
(48, 'D1', 'fruit salad with icecream', '300.00', '3.00', NULL),
(49, 'D2', 'ice cream', '150.00', '1.05', NULL),
(50, 'D3', 'caramal pudding', '250.00', '2.07', NULL),
(51, 'D4', 'chocolate pudding', '300.00', '2.09', NULL),
(52, 'D5', 'bread pudding', '300.00', '2.09', NULL),
(53, 'D6', 'curd with jugry', '200.00', '2.04', NULL),
(54, 'D7', 'choclate cake', '300.00', '2.07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `function_type`
--

DROP TABLE IF EXISTS `function_type`;
CREATE TABLE IF NOT EXISTS `function_type` (
  `function_type_id` int(2) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`function_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_type`
--

INSERT INTO `function_type` (`function_type_id`, `type`, `description`) VALUES
(1, 'Wedding Ceremony', NULL),
(2, 'Home Coming', NULL),
(3, 'Birthday Party', NULL),
(4, 'Anniversary Party', NULL),
(5, 'Cooperate Gathering ', NULL),
(6, 'Business Conference ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meal_time`
--

DROP TABLE IF EXISTS `meal_time`;
CREATE TABLE IF NOT EXISTS `meal_time` (
  `meal_time_id` int(2) NOT NULL AUTO_INCREMENT,
  `meal_time_name` varchar(25) NOT NULL,
  PRIMARY KEY (`meal_time_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_time`
--

INSERT INTO `meal_time` (`meal_time_id`, `meal_time_name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Evening Snack');

-- --------------------------------------------------------

--
-- Table structure for table `meal_time_food`
--

DROP TABLE IF EXISTS `meal_time_food`;
CREATE TABLE IF NOT EXISTS `meal_time_food` (
  `meal_time_food` int(11) NOT NULL AUTO_INCREMENT,
  `meal_time_id` int(2) NOT NULL,
  `food_id` int(11) NOT NULL,
  PRIMARY KEY (`meal_time_food`),
  KEY `meal_time_food_fk_meal_time` (`meal_time_id`),
  KEY `meal_time_food_fk_food` (`food_id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_time_food`
--

INSERT INTO `meal_time_food` (`meal_time_food`, `meal_time_id`, `food_id`) VALUES
(3, 1, 2),
(4, 3, 2),
(5, 1, 3),
(6, 3, 3),
(7, 1, 4),
(8, 3, 4),
(9, 1, 5),
(10, 3, 5),
(11, 1, 6),
(12, 3, 6),
(13, 1, 7),
(14, 3, 7),
(15, 1, 8),
(16, 3, 8),
(17, 1, 9),
(18, 3, 9),
(19, 1, 10),
(20, 3, 10),
(21, 1, 11),
(22, 3, 11),
(23, 1, 12),
(24, 1, 13),
(25, 1, 14),
(26, 3, 14),
(27, 2, 14),
(28, 3, 15),
(29, 2, 15),
(30, 3, 16),
(31, 2, 16),
(32, 3, 17),
(33, 2, 17),
(34, 1, 18),
(35, 3, 18),
(36, 2, 18),
(37, 1, 19),
(38, 3, 19),
(39, 1, 20),
(40, 3, 20),
(41, 1, 21),
(42, 3, 21),
(43, 1, 22),
(44, 3, 22),
(45, 1, 23),
(46, 3, 23),
(47, 1, 24),
(48, 3, 24),
(49, 1, 25),
(50, 3, 25),
(51, 1, 26),
(52, 3, 26),
(53, 1, 27),
(54, 3, 27),
(55, 1, 28),
(56, 3, 28),
(57, 1, 29),
(58, 3, 29),
(59, 1, 30),
(60, 3, 30),
(61, 1, 31),
(62, 3, 31),
(63, 2, 31),
(64, 1, 32),
(65, 3, 32),
(66, 2, 32),
(67, 1, 33),
(68, 3, 33),
(69, 2, 33),
(70, 1, 34),
(71, 3, 34),
(72, 2, 34),
(73, 1, 35),
(74, 3, 35),
(75, 2, 35),
(76, 1, 36),
(77, 3, 36),
(78, 2, 36),
(79, 1, 37),
(80, 3, 37),
(81, 2, 37),
(82, 1, 38),
(83, 3, 38),
(84, 2, 38),
(85, 1, 39),
(86, 3, 39),
(87, 2, 39),
(88, 1, 40),
(89, 3, 40),
(90, 3, 41),
(91, 2, 41),
(92, 1, 42),
(93, 3, 42),
(94, 3, 43),
(95, 1, 44),
(96, 3, 44),
(97, 1, 45),
(98, 3, 45),
(99, 1, 46),
(100, 3, 46),
(101, 1, 47),
(102, 3, 47),
(103, 1, 48),
(104, 3, 48),
(105, 4, 48),
(106, 2, 48),
(107, 1, 49),
(108, 3, 49),
(109, 4, 49),
(110, 2, 49),
(111, 1, 50),
(112, 3, 50),
(113, 4, 50),
(114, 2, 50),
(115, 1, 51),
(116, 3, 51),
(117, 4, 51),
(118, 2, 51),
(119, 1, 52),
(120, 3, 52),
(121, 4, 52),
(122, 2, 52),
(123, 1, 53),
(124, 3, 53),
(125, 4, 53),
(126, 2, 53),
(127, 1, 54),
(128, 3, 54),
(129, 4, 54),
(130, 2, 54),
(131, 4, 47),
(132, 4, 46),
(133, 4, 45),
(134, 4, 44),
(135, 4, 42),
(136, 4, 33);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) DEFAULT NULL,
  `tour_cost` decimal(8,2) DEFAULT NULL,
  `meal_cost` decimal(8,2) DEFAULT NULL,
  `package_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `tour_cost`, `meal_cost`, `package_description`) VALUES
(1, 'CULTURE', '25.00', '20.00', 'Munneshwaram Hindu Temple & Chilaw City (day out)'),
(2, 'NATURE1', '35.00', '20.00', 'Willpaththu National Park (one day)'),
(3, 'NATURE2', '26.00', '10.00', 'Anavilundawa Bird Sanctury(early morning)'),
(4, 'ADVENTURE1', '28.00', '20.00', 'Kalpitiya Dilphin Watching(one day)'),
(5, 'ADVENTURE2', '60.00', '20.00', 'Chilaw Lagoon Bort Ride(day time)');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_no` int(11) DEFAULT NULL,
  `room_charges` varchar(100) DEFAULT NULL,
  `meal_charges` varchar(100) DEFAULT NULL,
  `total_charges` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `discount_amount` varchar(100) DEFAULT NULL,
  `nbt` varchar(100) DEFAULT NULL,
  `vat` varchar(100) DEFAULT NULL,
  `grand_total` varchar(100) DEFAULT NULL,
  `advance` varchar(100) DEFAULT NULL,
  `balance` varchar(100) DEFAULT NULL,
  `payement_date` date DEFAULT NULL,
  `advance_payement_date` date DEFAULT NULL,
  `payement_method` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `reservation_no`, `room_charges`, `meal_charges`, `total_charges`, `discount`, `discount_amount`, `nbt`, `vat`, `grand_total`, `advance`, `balance`, `payement_date`, `advance_payement_date`, `payement_method`) VALUES
(1, 2, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(2, 2, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(3, 2, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(4, 2, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(5, 4, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Card'),
(6, 5, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Card'),
(7, 6, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(8, 7, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(9, 8, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(10, 9, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(11, 10, '500', '0', '500', '2', '10', '1', '1', '1000', '500', '500', '2019-09-24', NULL, 'Cheque'),
(12, 11, '60', '562', '23', '897', '23', '2', '2', '1000', '500', '500', '2019-10-09', NULL, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) DEFAULT NULL,
  `f_name` varchar(25) DEFAULT NULL,
  `l_name` varchar(25) DEFAULT NULL,
  `Nic-Passport` varchar(50) NOT NULL,
  `address_1` varchar(25) DEFAULT NULL,
  `address_2` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `country_id` int(5) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `Remark` text,
  PRIMARY KEY (`person_id`),
  KEY `person_fk_countries` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `title`, `f_name`, `l_name`, `Nic-Passport`, `address_1`, `address_2`, `city`, `country_id`, `phone`, `email`, `Remark`) VALUES
(1, NULL, 'Julian', 'Claessen', '', '52/A wattala', '', 'Colombo', 4, 1234678, 'asdadda@hab.lk', '123456'),
(2, NULL, 'Julian', 'Claessen', '', '52/A wattala', '', 'Colombo', 4, 1234678, 'asdadda@hab.lk', '123456'),
(3, 'Mr.', 'sdf', 'sdf', '234567890v', 'sdf', 'sfds', 'sdf', 13, 234567890, 'julian@pp.lk', NULL),
(4, 'Mr.', 'sdf', 'sdf', '234567890v', 'sdf', 'sfds', 'sdf', 13, 234567890, 'julian@pp.lk', NULL),
(5, 'Mr.', 'sdf', 'sdf', '234567890v', 'sdf', 'sfds', 'sdf', 13, 234567890, 'julian@pp.lk', NULL),
(6, 'Mr.', 'sdf', 'sdf', '234567890v', 'sdf', 'sfds', 'sdf', 13, 234567890, 'julian@pp.lk', NULL),
(7, 'Mr.', 'sdf', 'sdf', '234567890v', 'sdf', 'sfds', 'sdf', 13, 234567890, 'julian@pp.lk', NULL),
(8, 'Mr.', 'sdf', 'sdf', '234567890v', 'sdf', 'sfds', 'sdf', 13, 234567890, 'julian@pp.lk', NULL),
(9, 'Mr.', 'sdf', 'sdf', '234567890v', 'sdf', 'sfds', 'sdf', 13, 234567890, 'julian@pp.lk', NULL),
(10, 'Mr.', 'aaa', 'bbb', '234567890v', '213v sdfdsfsd sfsdf', 'sdfdsgs', 'Colombo', 15, 234567890, 'julian@pp.lk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_no` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) DEFAULT NULL,
  `reservation_status` varchar(250) DEFAULT NULL,
  `arrival_date` date NOT NULL,
  `depature_date` date NOT NULL,
  `no_of_days` varchar(10) NOT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `basis` varchar(100) DEFAULT NULL,
  `room_type` varchar(100) DEFAULT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reservation_no`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_no`, `person_id`, `reservation_status`, `arrival_date`, `depature_date`, `no_of_days`, `currency`, `basis`, `room_type`, `DateTime`) VALUES
(1, NULL, 'Reserved', '2019-05-01', '2019-05-08', '2', 'USD', 'Bed & Breakfast', 'Standard', '0000-00-00 00:00:00'),
(2, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '0000-00-00 00:00:00'),
(3, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:09:10'),
(4, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:09:51'),
(5, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:10:28'),
(6, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:16:15'),
(7, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:16:56'),
(8, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:17:12'),
(9, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:19:55'),
(10, NULL, 'pending', '2019-09-19', '2019-09-20', '1', 'LKR', 'BB', '1', '2019-09-30 12:21:06'),
(11, NULL, 'pending', '2019-10-09', '2019-10-11', '2', 'LKR', 'BB', '1', '2019-10-05 17:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `reserved_room`
--

DROP TABLE IF EXISTS `reserved_room`;
CREATE TABLE IF NOT EXISTS `reserved_room` (
  `reserved_room_no` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_no` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`reserved_room_no`),
  KEY `reserved_room_fk_reservation` (`reservation_no`),
  KEY `reserved_room_fk_room` (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserved_room`
--

INSERT INTO `reserved_room` (`reserved_room_no`, `reservation_no`, `room_id`) VALUES
(1, 2, 4),
(2, 2, 8),
(3, 2, 9),
(4, 3, 3),
(5, 4, 3),
(6, 5, 1),
(7, 6, 1),
(8, 7, 8),
(9, 8, 5),
(10, 9, 7),
(11, 10, 9),
(12, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(10) DEFAULT NULL,
  `floor_no` int(2) DEFAULT NULL,
  `description` text,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  KEY `room_fk_room_type` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `floor_no`, `description`, `type_id`) VALUES
(1, '101', 1, '<p>\r\n Sea Side</p>\r\n', 1),
(2, '102', 1, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(3, '103', 1, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(4, '104', 1, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(5, '105', 1, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(6, '118', 2, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(7, '119', 2, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(8, '120', 2, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(9, '123', 2, '<p>\r\n [Floor space] 19.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 1),
(10, '106', 1, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(11, '107', 1, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(12, '108', 1, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(13, '108', 1, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(14, '109', 1, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(15, '110', 1, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(16, '111', 1, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(17, '124', 2, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(18, '125', 2, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(19, '126', 2, '<p>\r\n [Floor space] 23.4sqm/251sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 940x1,970</p>\r\n', 3),
(20, '127', 2, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(21, '128', 2, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(22, '129', 2, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(23, '130', 2, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(24, '112', 1, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(25, '113', 1, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(26, '114', 1, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(27, '115', 1, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(28, '116', 1, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2),
(29, '117', 1, '<p>\r\n [Floor space] 25.2sqm/270sq.ft.</p>\r\n<p>\r\n [Bed-sized(mm)] 1,100x2,000</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

DROP TABLE IF EXISTS `room_type`;
CREATE TABLE IF NOT EXISTS `room_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `description` text,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`type_id`, `type`, `description`) VALUES
(1, 'Suite Rooms', '<p>\r\n Double Bed Free Internet Free Newspaper 60 square meter Cable Tv facilities 2 persons DVD Library Telephone Hot/Cold water Flat Screen TV</p>\r\n'),
(2, 'Delux Rooms', 'Double Bed \r\nFree Internet \r\nFree Newspaper\r\n100 square meter 	\r\nCable Tv facilities 	\r\n2 persons\r\nDVD Library 	\r\nTelephone 	\r\nHot/Cold water\r\nPrivate Balcony 	\r\nFlat Screen TV 	\r\n'),
(3, 'Standard Rooms', 'Double Bed \r\nFree Internet 	\r\nFree Newspaper\r\n80 square meter 	\r\nCable Tv facilities 	\r\n2 persons\r\nDVD Library 	\r\nTelephone 	\r\nHot/Cold water\r\nPrivate Balcony 	\r\nFlat Screen TV 	');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
CREATE TABLE IF NOT EXISTS `tour` (
  `tour_id` int(20) NOT NULL AUTO_INCREMENT,
  `places` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `vehical_no` varchar(20) NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_cost`
--

DROP TABLE IF EXISTS `tour_cost`;
CREATE TABLE IF NOT EXISTS `tour_cost` (
  `tour_cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_no` int(11) DEFAULT NULL,
  `tour_cost` decimal(8,2) DEFAULT NULL,
  `meal_cost` decimal(8,2) DEFAULT NULL,
  `other_charges` decimal(8,2) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tour_cost_id`),
  KEY `tour_cost_fk_reservation` (`reservation_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_request`
--

DROP TABLE IF EXISTS `tour_request`;
CREATE TABLE IF NOT EXISTS `tour_request` (
  `tour_request_id` int(20) NOT NULL AUTO_INCREMENT,
  `tour_id` int(20) NOT NULL,
  `reservation_no` int(20) NOT NULL,
  `tour_date` date NOT NULL,
  `starting_time` time NOT NULL,
  PRIMARY KEY (`tour_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_reservation`
--

DROP TABLE IF EXISTS `tour_reservation`;
CREATE TABLE IF NOT EXISTS `tour_reservation` (
  `tour_reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_no` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `tour_cost` decimal(8,2) DEFAULT NULL,
  `meal_cost` decimal(8,2) DEFAULT NULL,
  `participant` int(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`tour_reservation_id`),
  KEY `tour_reservation_fk_reservation` (`reservation_no`),
  KEY `tour_reservation_fk_packages` (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_reservation`
--

INSERT INTO `tour_reservation` (`tour_reservation_id`, `reservation_no`, `package_id`, `tour_cost`, `meal_cost`, `participant`, `description`, `date`, `time`) VALUES
(1, 1, 2, '25.00', '60.00', 3, 'Test edit2', '2019-10-23', '01:30:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banquet_menu_request`
--
ALTER TABLE `banquet_menu_request`
  ADD CONSTRAINT `banquet_menu_request_fk_banquet_reservation` FOREIGN KEY (`banquet_reservation_id`) REFERENCES `banquet_reservation` (`banquet_reservation_id`);

--
-- Constraints for table `banquet_other_charges`
--
ALTER TABLE `banquet_other_charges`
  ADD CONSTRAINT `banquet_other_charges_fk_banquet_reservation` FOREIGN KEY (`banquet_reservation_id`) REFERENCES `banquet_reservation` (`banquet_reservation_id`);

--
-- Constraints for table `banquet_request`
--
ALTER TABLE `banquet_request`
  ADD CONSTRAINT `br_fk_banquet` FOREIGN KEY (`hall_id`) REFERENCES `banquet` (`hall_id`),
  ADD CONSTRAINT `br_fk_bmenu` FOREIGN KEY (`menu_id`) REFERENCES `banquet_menu` (`menu_id`),
  ADD CONSTRAINT `br_fk_function` FOREIGN KEY (`function_type_id`) REFERENCES `function_type` (`function_type_id`);

--
-- Constraints for table `banquet_reservation`
--
ALTER TABLE `banquet_reservation`
  ADD CONSTRAINT `banquet_reservation_fk_banquet` FOREIGN KEY (`banquet_id`) REFERENCES `banquet` (`hall_id`),
  ADD CONSTRAINT `banquet_reservation_fk_banquet_menu` FOREIGN KEY (`banquet_menu_id`) REFERENCES `banquet_menu` (`menu_id`),
  ADD CONSTRAINT `banquet_reservation_fk_function_type` FOREIGN KEY (`function_type_id`) REFERENCES `function_type` (`function_type_id`);

--
-- Constraints for table `basis`
--
ALTER TABLE `basis`
  ADD CONSTRAINT `basis_fk_room_type` FOREIGN KEY (`type_id`) REFERENCES `room_type` (`type_id`);

--
-- Constraints for table `cheque`
--
ALTER TABLE `cheque`
  ADD CONSTRAINT `cheque_fk_payment` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `meal_time_food`
--
ALTER TABLE `meal_time_food`
  ADD CONSTRAINT `meal_time_food_fk_food` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`),
  ADD CONSTRAINT `meal_time_food_fk_meal_time` FOREIGN KEY (`meal_time_id`) REFERENCES `meal_time` (`meal_time_id`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_fk_countries` FOREIGN KEY (`country_id`) REFERENCES `country_t` (`country_id`);

--
-- Constraints for table `reserved_room`
--
ALTER TABLE `reserved_room`
  ADD CONSTRAINT `reserved_room_fk_reservation` FOREIGN KEY (`reservation_no`) REFERENCES `reservation` (`reservation_no`),
  ADD CONSTRAINT `reserved_room_fk_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_fk_room_type` FOREIGN KEY (`type_id`) REFERENCES `room_type` (`type_id`);

--
-- Constraints for table `tour_cost`
--
ALTER TABLE `tour_cost`
  ADD CONSTRAINT `tour_cost_fk_reservation` FOREIGN KEY (`reservation_no`) REFERENCES `reservation` (`reservation_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
