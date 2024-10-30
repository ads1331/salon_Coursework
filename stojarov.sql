-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 30 2024 г., 16:35
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stojarov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `appointment_time` datetime NOT NULL,
  `master_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `email`, `appointment_time`, `master_id`) VALUES
(1, '123@123', '2024-10-23 17:07:00', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `masters`
--

CREATE TABLE `masters` (
  `master_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `specialty` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `masters`
--

INSERT INTO `masters` (`master_id`, `name`, `specialty`, `description`, `price`, `image`) VALUES
(1, 'Иван Иванов', 'Стрижка', 'Опытный мастер по стрижкам.', '500.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSowk5W3jBTBnwZK8G3H5IhtRbT_Nfw-z4yiw&s'),
(2, 'Анна Сергеева', 'Окрашивание волос', 'Эксперт в технике омбре.', '1000.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiyuvay5O0JDcuBOgE5mvrNVqa9aNCH-yoqw&s'),
(3, 'Дмитрий Павлов', 'Барбер', 'Специалист по мужским стрижкам.', '600.00', 'https://picaschool.ru/userfls/upload/ce87323736c328bd4e9a91cae1592c96.jpg'),
(4, 'Иван Иванов', 'Стрижка', 'Опытный мастер по стрижкам.', '500.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(5, 'Анна Сергеева', 'Окрашивание волос', 'Эксперт в технике омбре.', '1000.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(6, 'Дмитрий Павлов', 'Барбер', 'Специалист по мужским стрижкам.', '600.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(7, 'Иван Иванов', 'Стрижка', 'Опытный мастер по стрижкам.', '500.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(8, 'Анна Сергеева', 'Окрашивание волос', 'Эксперт в технике омбре.', '1000.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(9, 'Дмитрий Павлов', 'Барбер', 'Специалист по мужским стрижкам.', '600.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(10, 'Иван Иванов', 'Стрижка', 'Опытный мастер по стрижкам.', '500.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(11, 'Анна Сергеева', 'Окрашивание волос', 'Эксперт в технике омбре.', '1000.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s'),
(12, 'Дмитрий Павлов', 'Барбер', 'Специалист по мужским стрижкам.', '600.00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICLroOqiHqTw-KkYnlAzV4oBJ3U8g1_dOhQ&s');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `master_id` int NOT NULL,
  `desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `master_id`, `desc`, `name`, `created_at`) VALUES
(1, 2, '123', 'name', '2024-10-30 13:19:50'),
(2, 11, 'Все супер было круто, вообщзе шик', 'фывфывфы', '2024-10-30 13:32:56');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `master_id` (`master_id`);

--
-- Индексы таблицы `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`master_id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_id` (`master_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `masters`
--
ALTER TABLE `masters`
  MODIFY `master_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`master_id`) REFERENCES `masters` (`master_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`master_id`) REFERENCES `masters` (`master_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
