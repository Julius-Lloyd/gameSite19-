-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2020 at 11:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamesite`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `game_tag` varchar(255) NOT NULL,
  `tlf` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_email`, `game_tag`, `tlf`, `user_password`) VALUES
(50, 'juju@juju.com', 'juju', '12345678', '7821683496e6dd0f65d290fb696703110c48d106946dfb9e4261676e493c79deaf5a10038910f4e739f4ddcf230ded4051a2c1520a84355c664d1adbcc3fd988'),
(49, 'bazzle@bazzle.com ', 'bazzle', '12345678', 'dece118122dd9843001f1ba62c97d4fd00cfc9c6a44e62a13f2804f67b172e33fbd63383dcfadb27ac9f6af82d731eadf5c2594d1ad29057dcf207ff4a796581'),
(48, 'james@james.com', 'james', '12345678', '6650b93de423c1949e6d1b73a9a2e578cf1a4eea6bf4f9f5146a58344a4726afb009a425824b7e322833aca8807392260fffb60ddf99c112712f35d1be422e7e'),
(47, 'Max@max.dk', 'Max', '12345678', 'b73b6b2dc67fbfce5686978c98cfae3e2b1cddb3282926e65e6cded214f136896d13bce461bc60c1b450dccdb3db84a0ed0248f8b10e2fc595e4788d9d1733dd'),
(46, 'max@hrj.dk', 'max', '12345678', 'b73b6b2dc67fbfce5686978c98cfae3e2b1cddb3282926e65e6cded214f136896d13bce461bc60c1b450dccdb3db84a0ed0248f8b10e2fc595e4788d9d1733dd'),
(45, 'kim@jung.com', 'Kim jung', '12345678', 'f0d42cea3b60b6cf2b60261898428675036ee157597579e202c3f2436e1939d71131c8174ee397764456eca974f605031671c9757f7097145ecbabb24ed54507'),
(44, 'john@tester.com', 'John', '12345678', '2386fb65ef69d15d0db863293591dba378011e5cd1a93d8f40ca70fdf2eb4d256810c5c0d5406f6485bc9cc2bca7a300b3025a2995050f020c740360f60fce74'),
(43, 'fjekopfnjpef', 'kojfop', '4', '2386fb65ef69d15d0db863293591dba378011e5cd1a93d8f40ca70fdf2eb4d256810c5c0d5406f6485bc9cc2bca7a300b3025a2995050f020c740360f60fce74'),
(42, 'you', 'yo', '', '0342527b9342518047aa67d4d192bcaeaee99dfbce56f0c3d79cf4e9d91a83e078c7053c5d8f4ebd6a715235e0f55e11107de2439aca5993055dc548e0ace9f4'),
(40, 'juj', 'john', '4435534534', '57feb8b11e1c30345347237cac311498b7249227f83e8b77ec872728fa59212d715efa49385394d7076d0cc3b34acd0e153eec0ace5889b1e86b3046d27e8533'),
(41, 'James', 'james', '12345667788', '10b784b1fa68e9ad5b2ca0009317dd994f705943e805fff3f56ec4116b0dc3d225d051cb1c9f5c49f0af88b316b824769c4bda0c6267414fab36f1455d6d4098'),
(38, 'gJGJ', 'john', '5435345345', '0342527b9342518047aa67d4d192bcaeaee99dfbce56f0c3d79cf4e9d91a83e078c7053c5d8f4ebd6a715235e0f55e11107de2439aca5993055dc548e0ace9f4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
