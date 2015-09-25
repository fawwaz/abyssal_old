-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2014 at 10:12 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abyssal_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id_blog` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `category`, `date`, `content`, `author`, `picture`) VALUES
(1, 'Lorem Ipsum Dolor Sit Amet', 'Wallet', '2013-05-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio, nec sagittis orci ligula quis nunc.', 'agung dlgs', 'full-wallet3.jpg'),
(2, 'Dolor Sit Amet', 'Belt', '2013-05-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio, nec sagittis orci ligula quis nunc.', 'abdurahman', 'full-wallet3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'Wallet'),
(2, 'Belt');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id_goods` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `vote` int(4) NOT NULL,
  `tweeter` int(11) NOT NULL,
  `facebook` int(11) NOT NULL,
  PRIMARY KEY (`id_goods`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id_goods`, `category`, `title`, `description`, `price`, `image1`, `image2`, `image3`, `vote`, `tweeter`, `facebook`) VALUES
(1, 'Wallet', 'Green Mohz', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 230000, 'amerta.jpg', 'character.png', 'character.png', 9, 0, 0),
(2, 'Wallet', 'Black Mamba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 295000, 'blackmamba1.JPG', 'blackmamba2.JPG', 'blackmamba4.JPG', 13, 0, 0),
(3, 'Belt', 'Brazilian Leather Belt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 190000, 'belt1.JPG', '', '', 0, 0, 0),
(4, 'Wallet', 'Brown Reddish', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 235000, 'brownreddish1.jpg', 'brownreddish2.jpg', 'brownreddish2.jpg', 0, 0, 0),
(5, 'Wallet', 'Canvast!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 265000, 'canvast1.jpg', 'canvast2.jpg', 'canvast3.jpg', 0, 0, 0),
(6, 'Wallet', 'C.L.O.U.D', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 275000, 'cloud2.jpg', 'cloud1.jpg', 'cloud1.jpg', 0, 0, 0),
(7, 'Wallet', 'Greenedile', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 225000, 'greenedile1.jpg', 'greenedile2.jpg', 'greenedile3.jpg', 0, 0, 0),
(8, 'Wallet', 'Greenezation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 245000, 'greenezation1.jpg', 'greenezation2.jpg', 'greenezation3.jpg', 0, 0, 0),
(9, 'Wallet', 'The Man 2.0', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 325000, 'theman1.jpg', 'theman2.jpg', 'theman3.jpg', 0, 0, 0),
(10, 'Wallet', 'Ultra Marine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio', 230000, 'ultramarine1.jpg', 'ultramarine2.jpg', 'ultramarine3.jpg', 0, 0, 0),
(11, '', 'test 123', 'test 123', 235000, 'background2.jpg', 'background3.jpg', 'background4.jpg', 0, 0, 0),
(12, '', 'test 123', 'test 123', 235000, 'background2.jpg', 'background3.jpg', 'background4.jpg', 0, 0, 0),
(13, '', 'test 1', 'test 1', 45000, '5501755_20130524082739.jpg', 'amerta.jpg', '', 0, 0, 0),
(14, '', 'test 12', 'test 12', 45000, '5501755_20130524082739.jpg', 'amerta.jpg', '', 0, 0, 0),
(15, '', 'Dompet imba', 'test 123', 450000, '5501755_20130524082739.jpg', 'background4.jpg', 'client_server.fw.png', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `has_tag`
--

CREATE TABLE IF NOT EXISTS `has_tag` (
  `id_hastag` int(11) NOT NULL AUTO_INCREMENT,
  `id_tag` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  PRIMARY KEY (`id_hastag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `has_tag`
--


-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `id_story` int(11) NOT NULL AUTO_INCREMENT,
  `date_modified` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `story` text NOT NULL,
  PRIMARY KEY (`id_story`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id_story`, `date_modified`, `title`, `story`) VALUES
(1, '2013-04-01', 'Abyssal & Pellagic', 'The indulgence of constructing the beauty within your attire was driven from a little intention of us. It was embarked on a small room, in which we play our creativity untill we fall asleep. One thing which still remains, is the truth that our intention of bringing such satisfaction to you was born together with the elegance of adorning. Abyssal..');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tag`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('mamba', 'ac25a004ee5f349325d4a5fd2b0049e3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
