-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8888
-- Время создания: Фев 16 2020 г., 17:18
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `year` int(11) NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`ID`, `name`, `year`, `author`) VALUES
(1, 'Американская трагедия', 1925, 'Теодор Драйзер'),
(13, 'Гарри Поттер и Тайная комната', 1998, 'Дж.К.Роулинг');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
