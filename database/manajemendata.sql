-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2017 at 01:07 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manajemendata`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Bret', 'Sincere@april.biz'),
(2, 'Antonette', 'Shanna@melissa.tv'),
(3, 'Samantha', 'Nathan@yesenia.net'),
(4, 'Karianne', 'Julianne.OConner@kory.org'),
(5, 'Kamren', 'Lucio_Hettinger@annie.ca'),
(6, 'Leopoldo_Corkery', 'Karley_Dach@jasper.info'),
(7, 'Elwyn.Skiles', 'Telly.Hoeger@billy.biz'),
(8, 'Maxime_Nienow', 'Sherwood@rosamond.me'),
(9, 'Delphine', 'Chaim_McDermott@dana.io'),
(10, 'Moriah.Stanton', 'Rey.Padberg@karina.biz');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
