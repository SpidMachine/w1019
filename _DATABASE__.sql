-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2020 at 07:07 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_market`
--
CREATE DATABASE IF NOT EXISTS `car_market` DEFAULT CHARACTER SET utf16 COLLATE utf16_bin;
USE `car_market`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `year_of_issue` int(11) NOT NULL COMMENT 'Дата выпуска',
  `condition_car` varchar(100) NOT NULL COMMENT 'Состояние',
  `mileage` int(11) NOT NULL COMMENT '\r\nПробег',
  `fuel_type` varchar(100) NOT NULL COMMENT 'Тип топлива',
  `volume` int(11) NOT NULL COMMENT 'Объем л.',
  `color` varchar(100) NOT NULL COMMENT 'Цвет',
  `body_type` varchar(100) NOT NULL COMMENT 'Тип кузова',
  `transmission` varchar(100) NOT NULL COMMENT 'Тип коробки передач',
  `drive_unit` varchar(100) NOT NULL COMMENT 'Тип привода',
  `price` int(11) NOT NULL COMMENT 'Цена',
  `users_id` int(11) NOT NULL COMMENT 'Номер пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `year_of_issue`, `condition_car`, `mileage`, `fuel_type`, `volume`, `color`, `body_type`, `transmission`, `drive_unit`, `price`, `users_id`) VALUES
(3, 12, '123', 123, '123', 123, '123', '123', '123', '123', 123, 3);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL COMMENT '№',
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `cod` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Код'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `cod`) VALUES
(1, 'Администратор', 'admin'),
(2, 'Пользователь', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL COMMENT '№',
  `text` text COLLATE utf16_bin NOT NULL COMMENT 'Текст',
  `phonenumber` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'Телефон',
  `email` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'Почта',
  `name` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'Имя'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `text`, `phonenumber`, `email`, `name`) VALUES
(1, 'aaa', 'dd', 'ff@mail.ru', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '№',
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пользователь',
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пароль',
  `group_id` int(11) NOT NULL COMMENT 'Группа',
  `FIO` varchar(150) NOT NULL COMMENT 'ФИО',
  `city` varchar(100) NOT NULL COMMENT 'Город',
  `phone` varchar(100) NOT NULL COMMENT 'Номер телефона'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `FIO`, `city`, `phone`) VALUES
(2, 'Pavel', '929ccc52e633a637f8bf60e98ffc4b1f', 1, 'БОНДАРЕНКО ПАВЕЛ ВЛАДИМИРОВИЧ', '', ''),
(3, 'Vasya', '2836a7191f6a9e2455b763469ca4ec6d', 2, 'ПУПКИН ВАСИЛИЙ', '', ''),
(4, 'Ivan', '432f45b44c432414d2f97df0e5743818', 1, 'Иванов Иван Иванович', '', ''),
(5, 'Peter', '2b7c0e435a43e9c7453c8063b1ac2358', 1, 'Петров Петр Петрович', '', ''),
(6, 'Sidorov', '2836a7191f6a9e2455b763469ca4ec6d', 1, 'Сидоров', '', ''),
(30, 'Nikita', '155cc4b3ca33ea30480903c2f411a5a2c4a05363', 1, 'Ковалев Н.С.', 'Витебск', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`users_id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
