-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 14 2017 г., 22:57
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `itua`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table_itua`
--

CREATE TABLE `table_itua` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` int(15) NOT NULL,
  `path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `table_itua`
--

INSERT INTO `table_itua` (`id`, `user_name`, `name`, `email`, `text`, `date`, `IP`, `path`) VALUES
(42, 'Kim', 'lee', 'lee@deltalogisticsllc.com', 'Create a full-width navbar that scrolls away with the page by adding .navbar-static-top and include a .container or .container-fluid to center and pad navbar content.', '2017-03-13 22:00:00', 0, 'uploads/14-03-17-09-40-07.jpg'),
(43, 'Kim', 'Dima', 'dima@sdmg', 'Create a full-width navbar that scrolls away with the page by adding .navbar-static-top and include a .container or .container-fluid to center and pad navbar content.', '2017-03-14 22:00:00', 0, ''),
(44, 'kim', 'dima', 'kim@gmail.com', 'Create a full-width navbar that scrolls away with the page by adding .navbar-static-top and include a .container or .container-fluid to center and pad navbar content.\r\n\r\n', '2017-03-13 22:00:00', 0, ''),
(45, 'Kim', 'dima', 'lee@deltalogisticsllc.com', ' font-family: "Helvetica Neue",Helvetica,Arial,sans-serif"', '2017-03-12 22:00:00', 0, ''),
(46, 'Kim', 'Dima', 'nawapy@gmail.com', 'Create a full-width navbar that scrolls away with the page by adding .navbar-static-top and include a .container or .container-fluid to center and pad navbar content.\r\n\r\n', '2017-03-11 22:00:00', 0, ''),
(47, 'kim', 'dima', 'nawapy@gmail.com', 'Create a full-width navbar that scrolls away with the page by adding .navbar-static-top and include a .container or .container-fluid to center and pad navbar content.\r\n\r\n', '2017-03-13 22:00:00', 0, ''),
(48, 'Kim', 'Dima', 'lee@deltalogisticsllc.com', 'Create a full-width navbar that scrolls away with the page by adding .navbar-static-top and include a .container or .container-fluid to center and pad navbar content.', '2017-03-13 22:00:00', 0, ''),
(49, 'Kim', 'Dima', 'dima@sdmg', 'For any nav component (tabs or pills), add .disabled for gray links and no hover effects.\r\n\r\n', '2017-03-13 22:00:00', 0, ''),
(50, 'katya', 'Katya', 'nonusi4ka@wildpark.net', 'ÐŸÑ€Ð¾Ð±Ð»ÐµÐ¼Ð¼Ð° Ð² Ñ‚Ð¾Ð¼, Ñ‡Ñ‚Ð¾ Ð¼Ð½Ðµ Ð½ÑƒÐ¶Ð½Ð¾ ÑÐ¾Ñ€Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð½Ðµ Ð¿Ð¾ ÑÐ¾Ð·Ð´Ð°Ð½Ð¸ÑŽ Ð·Ð°Ð¿Ð¸ÑÐµÐ¹ Ð² Ñ‚Ð°Ð±Ð»Ð¸Ñ†Ðµ, Ð° Ð¿Ð¾ Ð·Ð°Ð¿Ð¸ÑÐ¸ Ð² ÐºÐ¾Ð»Ð¾Ð½ÐºÐµ Ð´Ð°Ñ‚Ð°, Ð½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€ 29.09.07 Ð´Ð°Ñ‚Ð° ...', '0000-00-00 00:00:00', 0, ''),
(51, 'Yulya', 'Bitch', 'lee@deltalogisticsllc.com', 'ÐŸÑ€Ð¾Ð±Ð»ÐµÐ¼Ð¼Ð° Ð² Ñ‚Ð¾Ð¼, Ñ‡Ñ‚Ð¾ Ð¼Ð½Ðµ Ð½ÑƒÐ¶Ð½Ð¾ ÑÐ¾Ñ€Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð½Ðµ Ð¿Ð¾ ÑÐ¾Ð·Ð´Ð°Ð½Ð¸ÑŽ Ð·Ð°Ð¿Ð¸ÑÐµÐ¹ Ð² Ñ‚Ð°Ð±Ð»Ð¸Ñ†Ðµ, Ð° Ð¿Ð¾ Ð·Ð°Ð¿Ð¸ÑÐ¸ Ð² ÐºÐ¾Ð»Ð¾Ð½ÐºÐµ Ð´Ð°Ñ‚Ð°, Ð½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€ 29.09.07 Ð´Ð°Ñ‚Ð° ...', '2017-03-14 19:36:46', 0, ''),
(52, 'kareec', 'dima', 'lee@deltalogisticsllc.com', 'Ð©Ð¾Ð± Ñ€Ð¾Ð·Ñ‚ÑÐ³Ð½ÑƒÑ‚Ð¸ Ð¿ÐµÐ²Ð½Ð¸Ð¹ ÐµÐ»ÐµÐ¼ÐµÐ½Ñ‚ Ð½Ð° Ð²ÑÑŽ ÑˆÐ¸Ñ€Ð¸Ð½Ñƒ ÑÑ‚Ð¾Ñ€Ñ–Ð½ÐºÐ¸, Ð½ÐµÐ¼Ð°Ñ” Ð½ÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ð¾ÑÑ‚Ñ– Ð´Ð¾Ð´Ð°Ð²Ð°Ñ‚Ð¸ ÑÐ¿ÐµÑ†Ñ–Ð°Ð»ÑŒÐ½Ð¸Ð¹ ÐºÐ»Ð°Ñ.', '2017-03-14 20:47:39', 0, ''),
(53, 'Kareec', 'dima', 'nawappy@gmail.com', 'Ð©Ð¾Ð± Ñ€Ð¾Ð·Ñ‚ÑÐ³Ð½ÑƒÑ‚Ð¸ Ð¿ÐµÐ²Ð½Ð¸Ð¹ ÐµÐ»ÐµÐ¼ÐµÐ½Ñ‚ Ð½Ð° Ð²ÑÑŽ ÑˆÐ¸Ñ€Ð¸Ð½Ñƒ ÑÑ‚Ð¾Ñ€Ñ–Ð½ÐºÐ¸, Ð½ÐµÐ¼Ð°Ñ” Ð½ÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ð¾ÑÑ‚Ñ– Ð´Ð¾Ð´Ð°Ð²Ð°Ñ‚Ð¸ ÑÐ¿ÐµÑ†Ñ–Ð°Ð»ÑŒÐ½Ð¸Ð¹ ÐºÐ»Ð°Ñ.', '2017-03-14 20:48:46', 0, ''),
(54, 'Kim', 'dima', 'nawapy@gmail.com', 'Ð©Ð¾Ð± Ñ€Ð¾Ð·Ñ‚ÑÐ³Ð½ÑƒÑ‚Ð¸ Ð¿ÐµÐ²Ð½Ð¸Ð¹ ÐµÐ»ÐµÐ¼ÐµÐ½Ñ‚ Ð½Ð° Ð²ÑÑŽ ÑˆÐ¸Ñ€Ð¸Ð½Ñƒ ÑÑ‚Ð¾Ñ€Ñ–Ð½ÐºÐ¸, Ð½ÐµÐ¼Ð°Ñ” Ð½ÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ð¾ÑÑ‚Ñ– Ð´Ð¾Ð´Ð°Ð²Ð°Ñ‚Ð¸ ÑÐ¿ÐµÑ†Ñ–Ð°Ð»ÑŒÐ½Ð¸Ð¹ ÐºÐ»Ð°Ñ.', '2017-03-14 20:50:52', 0, 'uploads/14-03-17-09-50-52.jpg'),
(55, 'lee', 'Dmitriy', 'nawapy@gmail.com', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit', '2017-03-14 21:14:51', 0, 'uploads/14-03-17-10-14-51.pdf');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table_itua`
--
ALTER TABLE `table_itua`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table_itua`
--
ALTER TABLE `table_itua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
