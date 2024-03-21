-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2024 г., 10:06
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `impression`
--

-- --------------------------------------------------------

--
-- Структура таблицы `call_me_back`
--

CREATE TABLE `call_me_back` (
  `id` int NOT NULL,
  `status_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `call_me_back`
--

INSERT INTO `call_me_back` (`id`, `status_id`, `name`, `tel`) VALUES
(1, 2, '1', '89136400340'),
(2, 3, '1', '1'),
(3, 1, '3', '3'),
(4, 1, 'Яна', '+7 (999) 999-99-99'),
(5, 3, 'Яна', '+7 (444) 444-44-44'),
(6, 3, 'Яна', '+7 (444) 444-44-44'),
(7, 2, 'zyf', '+7 (888) 888-88-88'),
(8, 1, 'Яна', '+7 (444) 444-44-44');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `statuses_id` int NOT NULL,
  `number_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `statuses_id`, `number_product`) VALUES
(1, 8, 1),
(2, 2, 3),
(4, 1, 2),
(6, 5, 4),
(7, 4, 5),
(8, 1, 6),
(9, 4, 88),
(10, 2, 3243),
(11, 3, 5555);

-- --------------------------------------------------------

--
-- Структура таблицы `rec_mc`
--

CREATE TABLE `rec_mc` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_status` int NOT NULL,
  `name_mc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT '2024-03-01',
  `time` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rec_mc`
--

INSERT INTO `rec_mc` (`id`, `id_user`, `id_status`, `name_mc`, `tel`, `date`, `time`) VALUES
(3, 6, 2, 'fdgdf', '+7 (333) 333-33-33', '2024-03-26', '07:09:00'),
(4, 6, 2, 'лепка', '+7 (333) 333-33-33', '2024-03-22', '08:09:00'),
(5, 7, 1, 'sdfs', '+7 (555) 555-55-55', '2024-03-19', '08:10:00'),
(6, 6, 1, 'роспись', '+7 (444) 444-44-44', '2024-03-17', '06:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses_call_me_back`
--

CREATE TABLE `statuses_call_me_back` (
  `id` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses_call_me_back`
--

INSERT INTO `statuses_call_me_back` (`id`, `status`) VALUES
(1, 'Звонок совершен'),
(2, 'Ждут звонка'),
(3, 'Номер недоступен');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses_product`
--

CREATE TABLE `statuses_product` (
  `id` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses_product`
--

INSERT INTO `statuses_product` (`id`, `status`) VALUES
(1, 'Ждет обжиг'),
(2, 'Прошло 1 обжиг'),
(3, 'Прошло 2 обжиг'),
(4, 'Готово к выдаче'),
(5, 'Брак'),
(8, 'Выдано');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses_rec_mc`
--

CREATE TABLE `statuses_rec_mc` (
  `id` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses_rec_mc`
--

INSERT INTO `statuses_rec_mc` (`id`, `status`) VALUES
(1, 'Подтверждено'),
(2, 'Не подтверждено');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `isAdmin` tinyint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `name`, `surname`, `email`, `password`) VALUES
(6, 0, 'Яна', 'Лебедева', 'l13yana@yandex.ru', '333333'),
(7, 1, 'Яна', 'Лебедева', 'yae.lebedeva@gmail.com', '121212');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `call_me_back`
--
ALTER TABLE `call_me_back`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cmb_ibfk_1` (`status_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_id` (`statuses_id`);

--
-- Индексы таблицы `rec_mc`
--
ALTER TABLE `rec_mc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `user_id` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `statuses_call_me_back`
--
ALTER TABLE `statuses_call_me_back`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statuses_product`
--
ALTER TABLE `statuses_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statuses_rec_mc`
--
ALTER TABLE `statuses_rec_mc`
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
-- AUTO_INCREMENT для таблицы `call_me_back`
--
ALTER TABLE `call_me_back`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `rec_mc`
--
ALTER TABLE `rec_mc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `statuses_call_me_back`
--
ALTER TABLE `statuses_call_me_back`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `statuses_product`
--
ALTER TABLE `statuses_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `statuses_rec_mc`
--
ALTER TABLE `statuses_rec_mc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `call_me_back`
--
ALTER TABLE `call_me_back`
  ADD CONSTRAINT `cmb_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `statuses_call_me_back` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`statuses_id`) REFERENCES `statuses_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `rec_mc`
--
ALTER TABLE `rec_mc`
  ADD CONSTRAINT `idu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `statuses_rec_mc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
