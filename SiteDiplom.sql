-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2024 г., 19:14
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `SiteDiplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news_slider`
--

CREATE TABLE `news_slider` (
  `id` int NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news_slider`
--

INSERT INTO `news_slider` (`id`, `image_url`, `title`, `content`) VALUES
(1, 'https://catherineasquithgallery.com/uploads/posts/2021-02/1614376675_49-p-fon-dlya-prezentatsii-po-fizike-svetlii-54.jpg', 'Слайд 1', 'Описание слайда 1'),
(3, 'https://gas-kvas.com/uploads/posts/2023-02/1675471222_gas-kvas-com-p-fonovie-risunki-dlya-slaidov-34.jpg', 'Слайд 2', 'Описание слайда 2'),
(4, 'https://w.forfun.com/fetch/e3/e3eba37ce15bb560c9be8df022097d43.jpeg', 'слайд 3', 'описание слайд 3');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `description`) VALUES
(1, '1', '1'),
(2, '2', '2'),
(3, '3', '3'),
(4, '4', '4'),
(5, '5', '5'),
(6, '6', '6'),
(7, '7', '7'),
(8, '8', '8'),
(9, '9', '9'),
(10, '10', '10\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(1000) NOT NULL,
  `surname` varchar(1000) NOT NULL,
  `phone` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `login` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `login`, `password`) VALUES
(1, 'Юлия', 'Кузьмина', '+79301519340', 'ulia', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news_slider`
--
ALTER TABLE `news_slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news_slider`
--
ALTER TABLE `news_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
