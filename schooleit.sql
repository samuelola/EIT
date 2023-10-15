-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2023 at 09:40 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooleit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `level` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT '0',
  `old_price` varchar(255) DEFAULT '0',
  `youtube_link` text NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uuid`, `title`, `description`, `level`, `price`, `old_price`, `youtube_link`, `author`, `image`, `category`, `subcategory`, `type`, `created_at`) VALUES
(1, 'TO4be72a53bf10', 'The Future of Tech Skills: Predictions & Trends', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/lPugPuwVWWA', 'Admin', 'adminuploads/16851023351.png', '12', '23', 'Popular', '2023-05-26 00:00:00'),
(2, 'TO52dd3403ac9d', 'Building an Effective Portfolio for Career Positioning in Tech', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/n2nLRLM-KXw', 'Admin', 'adminuploads/16851024272.png', '12', '23', 'free', '2023-05-26 00:00:00'),
(3, 'TO5fbc2c597fc0', 'Navigating the Tech Job Market: Trends and Insights', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/alxM9HQyBYY', 'Admin', 'adminuploads/16851037843.png', '12', '23', 'free', '2023-05-26 00:00:00'),
(4, 'TO92778250c76a', 'The Tech Talent  Landscape:Insights and opportunities for young professionals', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/6dcN-msrOOg', 'Admin', 'adminuploads/16851039974.png', '12', '23', 'Popular', '2023-05-26 00:00:00'),
(5, 'TO1422305f234d', 'Kick Starting & Advancing a Career In Tech In 2023', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/niVyGLJ4nRc', 'Admin', 'adminuploads/16851041005.png', '12', '23', 'Popular', '2023-05-26 00:00:00'),
(6, 'TO1260f7e49111', 'Closing the Digital Gap: Upskilling & Reskilling', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/NzYbEd03gx4', 'Admin', 'adminuploads/16851041716.png', '12', '23', 'Popular', '2023-05-26 00:00:00'),
(7, 'TO49be8aef2259', 'The Future Of Work- Talent, Technology & Business Transformation', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/0dh93k-dgUs', 'Admin', 'adminuploads/16851046367.png', '12', '23', 'free', '2023-05-26 00:00:00'),
(8, 'TOc9e416879905', 'Unlocking & Maximising Opportunities In Tech', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/njJ6VDmR2Ac', 'Admin', 'adminuploads/16851046928.png', '12', '23', 'Popular', '2023-05-26 00:00:00'),
(9, 'TO5f9e9d98982e', 'Building a Career In Tech and Innovation', '', 'Advanced Level', '', '', 'https://www.youtube.com/embed/aikBabi__Ns', 'Admin', 'adminuploads/16851047479.png', '12', '23', 'Popular', '2023-05-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categories`) VALUES
(1, 'Sales And Marketing'),
(2, 'Design'),
(3, 'Website Development'),
(4, 'Programming Language'),
(5, 'Digital Marketing'),
(6, 'Social Work'),
(7, 'Finance & Accounting\r\n'),
(8, 'Management Skills'),
(9, 'Business Management'),
(10, 'Cyber Security'),
(11, 'Microsoft Office'),
(12, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `agree_toterms` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `email`, `mobile`, `user_type`, `password`, `agree_toterms`, `created_at`) VALUES
(1, 'samuel oladele', 'samuel@gmail.com', '08067932796', 'learner', 'e10adc3949ba59abbe56e057f20f883e', '1', '2023-05-19'),
(2, 'admin', 'admin@gmail.com', '08057575757', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '2023-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory`) VALUES
(1, 1, 'Advertising'),
(2, 1, 'Corporate Sales'),
(3, 2, 'UX/UI Design'),
(4, 2, 'Animation'),
(5, 2, 'Design Software'),
(6, 2, 'Video Design'),
(7, 3, 'Wordpress\r\n'),
(8, 3, 'Web Design'),
(9, 3, 'Full Stack Web Development'),
(10, 4, 'Python Programming'),
(11, 5, 'SEO'),
(12, 5, 'Facebook Marketing'),
(13, 5, 'Affiliate Marketing'),
(14, 6, 'Volunteerism'),
(15, 7, 'Practical Accounting'),
(16, 7, 'Investing & Trading'),
(17, 8, 'Leadership Development '),
(18, 9, 'Entrepreneurship'),
(19, 9, 'Supply Chain & Logistics'),
(20, 9, 'Networking & Negotiation'),
(22, 10, 'Ethical Hacking'),
(23, 12, 'Technology');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
