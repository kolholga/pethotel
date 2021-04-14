-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2021 г., 23:10
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pethotel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `subject`, `email`, `date`) VALUES
(1, 'vvvvvvvv', 'vvvvvvvvvvvvvvvvvv', 'vvvvvvvvvvvvvv', 'kolholga@gmail.com', '0000-00-00 00:00:00'),
(2, 'ssssssssssssssssss', 'sssssssssssssss', 'sssssssssssssssss', 'kolholga@mail.ru', '0000-00-00 00:00:00'),
(3, 'ssssssssssssssssss', 'sssssssssssssss', 'sssssssssssssssss', 'kolholga@mail.ru', '0000-00-00 00:00:00'),
(4, 'ssssssssssssssssss', 'sssssssssssssss', 'sssssssssssssssss', 'kolholga@mail.ru', '0000-00-00 00:00:00'),
(5, 'ssssssssssssssssss', 'sssssssssssssss', 'sssssssssssssssss', 'kolholga@mail.ru', '0000-00-00 00:00:00'),
(6, 'xxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'kolholga@mail.ru', '0000-00-00 00:00:00'),
(7, 'gggggggggg', 'ggggggggggggggg', 'gggggggggggggggg', 'kolholga@gmail.com', '2021-04-14 22:51:30');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shot_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `shot_description`, `image`) VALUES
(1, 'Страхование животных', 'Работники предприятия осуществляют посредническую деятельность по заключению договоров страхования от имени унитарного страхового предприятия «Белгосстрах». Мы осуществляем два вида страхования:<br>\r\n\r\n                        Добровольное страхование породистых, племенных животных (Правила страховые 35) в возрасте от 3 месяцев до 8 лет при наличии родословной. Страхование проводится на случай утраты (гибели) животного в результате болезней, стихийных бедствий, несчастных случаев, неправомерных действий третьих лиц.на случай осуществления расходов на ветеринарное обслуживание в период действия договора страхования и др.<br>\r\n\r\n                        Добровольное страхование гражданской ответственности владельцев животных (Правила страховые 86). Страхованию подлежат все животные в не зависимости от возраста и породы. Страховым случаем является:<br>\r\n\r\n                        факт причинения животным в результате его агрессивного и (или) непредвиденного действия вреда жизни, здоровью и (или) имуществу потерпевшего;<br>\r\n\r\n                        факт осуществления страхователем (ответственным лицом) судебных расходов в связи с причинением животным вреда жизни, здоровью и (или) имуществу потерпевших.<br>\r\n\r\n                        Возмещению подлежит прямой имущественный ущерб, а также причиненный вред жизни, здоровью потерпевшего в результате агрессивного и (или) непредвиденного поведения животного.', 'Работники предприятия осуществляют посредническую деятельность по заключению договоров страхования от имени УСП «Белгосстрах»', '/img/service/service_icon_1.png'),
(2, 'Ветеринарные услуги', 'Гостиница для животных оказывает ветеринарные услуги по самым низким ценам:<br>\r\n\r\n                        стерилизация, кастрация;<br>\r\n                        - вакцинация (с оформлением ветеринарного паспорта)<br>\r\n                        - диагностика микроспории, трихофитии;<br>\r\n                        - обрезка когтей и др.<br>\r\n                        Только у нас вы можете оставить свое животное для необходимого послеоперационного ухода после проведенной операции до полного выздоровления!<br>\r\n                        Вашему питомцу окажут квалифицированный уход ветеринарные специалисты (обработка и снятие швов, снятие попоны, инъекции лекарственных препаратов и др.).<br>\r\n                        Мы избавим вас от трудностей ухода за выздоравливающим четвероногим другом! Вы будете приятно удивлены ценами!', 'Cтерилизация, кастрация; вакцинация (с оформлением ветеринарного паспорта) диагностика микроспории, трихофитии; обрезка когтей и др.', '/img/service/service_icon_2.png'),
(3, 'Услуги кинолога', 'На базе гостиницы для животных организуются курсы подготовки владельцев собак.<br>\r\n                        Обучение рассчитано на 70 академических часов.<br>\r\n                        В программу обучения входят теоретические занятия, охватывающие нормативную базу документов, регламентирующих содержание собак в населенных пунктах РБ, основы биологии вида, советы по выбору породы собаки и воспитанию щенков, рекомендации по содержанию и кормлению собак, физиологические основы дрессировки, техника дрессировки, основные болезни собак.<br>\r\n\r\n                        Практически занятия – 48 часов – включают в себя занятия с Вашим питомцем и кинологом на специально оборудованной площадке для усвоения теоретического курса.', 'На базе гостиницы для животных организуются курсы подготовки владельцев собак. Обучение рассчитано на 70 академических часов.', '/img/service/service_icon_3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `specialists`
--

CREATE TABLE `specialists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `specialization`, `image`) VALUES
(1, 'Наталья Иванова', 'Страховщик', '/img/team/1.png'),
(2, 'Дмитрий Пипкин', 'Ветеринарный врач', '/img/team/2.png'),
(3, 'Мария Кац', 'Кинолог', '/img/team/3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@pethotel.com', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialists`
--
ALTER TABLE `specialists`
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
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
