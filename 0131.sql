-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023-01-31 05:41:29
-- サーバのバージョン： 10.4.25-MariaDB
-- PHP のバージョン: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `image`
--

INSERT INTO `image` (`id`, `title`, `description`, `file`) VALUES
(3, 'ddd', 'aaa', 'vegalta.png'),
(4, 'ddd', 'aaa', 'vegalta.png'),
(6, 'ddd', 'aaa', 'vegalta.png'),
(7, 'ddd', 'aaa', 'vegalta.png'),
(8, 'ddd', 'aaa', 'vegalta.png'),
(9, 'ddd', 'aaa', 'vegalta.png'),
(10, 'ddd', 'aa', 'vegalta.png'),
(15, 'ddd', 'aaa', 'vegalta.png');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
