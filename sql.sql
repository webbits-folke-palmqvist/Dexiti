-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 29 jan 2013 kl 21:13
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `dexiti`
--
CREATE DATABASE `dexiti` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `dexiti`;

-- --------------------------------------------------------

--
-- Tabellstruktur `company`
--

CREATE TABLE `company` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `owner` int(64) NOT NULL,
  `name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `money` int(64) NOT NULL DEFAULT '0',
  `employees` int(64) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `company`
--

INSERT INTO `company` (`id`, `owner`, `name`, `money`, `employees`) VALUES
(1, 1, 'Webbits', 0, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `rank` tinyint(1) NOT NULL,
  `money` int(64) NOT NULL DEFAULT '100000',
  `company` int(64) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=7 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `rank`, `money`, `company`) VALUES
(1, 'Folke', '21d19c3560ddb85975b9dd27388b95b7', 'folke.palmqvist@folkesgaming.com', 9, 100000, 1);
