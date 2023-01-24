-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023-01-18 05:45:43
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
(7, '主３', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'rakuten.png'),
(9, '主２2', 'ああaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'rakuten.png'),
(10, '主', 'ああaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'rakuten.png'),
(11, '主', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'rakuten.png');

-- --------------------------------------------------------

--
-- テーブルの構造 `kojin`
--

CREATE TABLE `kojin` (
  `code` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass2` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `juusyo` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `denwa` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kojin`
--

INSERT INTO `kojin` (`code`, `name`, `pass`, `pass2`, `juusyo`, `denwa`, `mail`) VALUES
(1, 'ss', 'まま', 'ssss', 'ssss', 'ssss', '220625@jc-21.jp');

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_product`
--

CREATE TABLE `mst_product` (
  `code` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `gazou` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_product`
--

INSERT INTO `mst_product` (`code`, `name`, `price`, `gazou`) VALUES
(7, 'あなたは', 233, 'kyabetsu.jpg'),
(8, 'オットセイ', 233, 'kabocha.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_staff`
--

CREATE TABLE `mst_staff` (
  `code` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_staff`
--

INSERT INTO `mst_staff` (`code`, `name`, `password`) VALUES
(1, 'ろくまる', '12345678901234567890123456789012'),
(2, '懇', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `kojin`
--
ALTER TABLE `kojin`
  ADD PRIMARY KEY (`code`);

--
-- テーブルのインデックス `mst_product`
--
ALTER TABLE `mst_product`
  ADD PRIMARY KEY (`code`);

--
-- テーブルのインデックス `mst_staff`
--
ALTER TABLE `mst_staff`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- テーブルの AUTO_INCREMENT `kojin`
--
ALTER TABLE `kojin`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `mst_product`
--
ALTER TABLE `mst_product`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `mst_staff`
--
ALTER TABLE `mst_staff`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
