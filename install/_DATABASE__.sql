-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 01 2020 г., 17:53
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `car_market`
--
CREATE DATABASE IF NOT EXISTS `car_market` DEFAULT CHARACTER SET utf16 COLLATE utf16_bin;
USE `car_market`;

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `name_of_car` varchar(200) NOT NULL COMMENT 'Название',
  `year_of_issue` varchar(100) NOT NULL COMMENT 'Дата выпуска',
  `condition_car` varchar(100) NOT NULL COMMENT 'Состояние',
  `mileage` varchar(100) NOT NULL COMMENT 'Пробег',
  `fuel_type` varchar(100) NOT NULL COMMENT 'Тип топлива',
  `volume` varchar(11) NOT NULL COMMENT 'Объем л.',
  `color` varchar(100) NOT NULL COMMENT 'Цвет',
  `body_type` varchar(100) NOT NULL COMMENT 'Тип кузова',
  `transmission` varchar(100) NOT NULL COMMENT 'Тип коробки передач',
  `drive_unit` varchar(100) NOT NULL COMMENT 'Тип привода',
  `price` varchar(100) NOT NULL COMMENT 'Цена',
  `users_id` int(11) NOT NULL COMMENT 'Номер пользователя',
  `image` varchar(100) NOT NULL COMMENT 'Изображение'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id`, `name_of_car`, `year_of_issue`, `condition_car`, `mileage`, `fuel_type`, `volume`, `color`, `body_type`, `transmission`, `drive_unit`, `price`, `users_id`, `image`) VALUES
(15, 'Дедовская', '1945', 'С пробегом', '1003400', 'дизель', '100', 'радужный', 'Купешечка', 'Механика ', 'Задний', '3400', 3, 'public.jpeg'),
(18, 'Джип', '2007', 'с пробегом', '235000', 'бензин', '3700', 'серебристый', 'внедорожник', 'Автомат', 'Постоянный полный', '22644', 5, 'public_16716276_b_dc6f400.jpeg'),
(19, 'BMW 3 серия F30, F31 BMW 3 серия F30 328 xdrive, 2015', '2015', 'с пробегом', '64000 км', 'бензин', '2000 см3', 'черный', 'седан', 'Автомат', 'Постоянный полный', '51 796 р', 4, 'public_18718341_b_a1a845d.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL COMMENT '№',
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `cod` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Код'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `cod`) VALUES
(1, 'Администратор', 'admin'),
(2, 'Пользователь', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL COMMENT '№',
  `text` text COLLATE utf16_bin NOT NULL COMMENT 'Текст',
  `name` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'Имя'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `guestbook`
--

INSERT INTO `guestbook` (`id`, `text`, `name`) VALUES
(1, 'aaa', 'dd'),
(2, '', '2222');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `FIO`, `city`, `phone`) VALUES
(2, 'Pavel', '929ccc52e633a637f8bf60e98ffc4b1f', 1, 'БОНДАРЕНКО ПАВЕЛ ВЛАДИМИРОВИЧ', '', ''),
(3, 'Vasya', '2836a7191f6a9e2455b763469ca4ec6d', 2, 'ПУПКИН ВАСИЛИЙ', '', ''),
(4, 'Ivan', '432f45b44c432414d2f97df0e5743818', 1, 'Иванов Иван Иванович', '', ''),
(5, 'Peter', '2b7c0e435a43e9c7453c8063b1ac2358', 1, 'Петров Петр Петрович', '', ''),
(6, 'Sidorov', '2836a7191f6a9e2455b763469ca4ec6d', 1, 'Сидоров', '', ''),
(33, 'asdasd', '5fc8cf618051513019be6bf621986d1aede1b729', 1, 'Валерка Борисов', 'Винница', '+04322225464'),
(34, 'Nikita', '4d0f4a64104d422ee024a786d52136170e53f60c', 1, 'Ковалев Н.С.', 'Витебск', '+375290000000'),
(35, 'Arkash321', '4d0f4a64104d422ee024a786d52136170e53f60c', 1, 'Аркадий', '', ''),
(36, 'Gosha123', 'cf3cf62065e9acb6208a23c8a643ebc6f9b8f8ae', 2, 'Гоша', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`users_id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
