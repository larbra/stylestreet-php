-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 29 2024 г., 17:46
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `x665`
--

-- --------------------------------------------------------

--
-- Структура таблицы `stylestreet_tovar`
--

CREATE TABLE `stylestreet_tovar` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `material` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stylestreet_tovar`
--

INSERT INTO `stylestreet_tovar` (`id`, `name`, `description`, `material`, `price`, `category`) VALUES
(1, 'Nike Air VaporMax 2023 Flyknit', 'Кроссовки Nike Air VaporMax 2023 Flyknit с поддерживающей амортизацией, созданной для плавного бега, представляет собой совершенно новый взгляд на знакомую коллекцию.\r\n\r\nМодель VaporMax названа в честь команды \"Portland Trail Blazers\". Впервые модель появилась на площадках в 1972 году. Сейчас это уже классика lifestyle от Nike.', 'Кожа', '6 328', 'Женские'),
(2, 'test', 'tesst', 'test', '123321', 'test'),
(3, 'Nike Air VaporMax 2023 Flyknit', 'Nike Air VaporMax 2023 Flyknit с амортизацией, созданной для плавного бега, представляет собой совершенно новый взгляд на знакомую коллекцию.  ', 'Кожа', '6 328', 'Женские  '),
(4, '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `stylestreet_tovar`
--
ALTER TABLE `stylestreet_tovar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `stylestreet_tovar`
--
ALTER TABLE `stylestreet_tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
