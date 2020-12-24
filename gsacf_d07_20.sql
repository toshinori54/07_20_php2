-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-12-24 14:15:29
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d07_20`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `golf_table`
--

CREATE TABLE `golf_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `golf_table`
--

INSERT INTO `golf_table` (`id`, `username`, `play`, `created_at`, `updated_at`) VALUES
(1, '山田太郎', '2020-12-24', '2020-12-24 00:00:30', '2020-12-24 00:00:30'),
(2, '杉山', '2020-12-26', '2020-12-24 07:02:40', '2020-12-24 07:02:40'),
(3, '松坂桃李', '2020-12-26', '2020-12-24 22:01:21', '2020-12-24 22:01:21'),
(4, '佐藤健', '2020-12-26', '2020-12-24 22:01:32', '2020-12-24 22:01:32'),
(5, '小栗旬', '2020-12-26', '2020-12-24 22:01:41', '2020-12-24 22:01:41'),
(6, '山田孝之', '2020-12-26', '2020-12-24 22:03:05', '2020-12-24 22:03:05'),
(7, '杉山俊範', '2020-12-26', '2020-12-24 22:03:27', '2020-12-24 22:03:27');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'クリスマスぱーて', '2020-12-19', '2020-12-19 15:50:47', '2020-12-19 15:50:47'),
(2, '床屋', '2020-12-20', '2020-12-19 15:54:38', '2020-12-19 15:54:38'),
(3, 'メシ', '2020-12-19', '2020-12-19 16:04:07', '2020-12-19 16:04:07'),
(4, '12345', '2020-12-23', '2020-12-19 17:11:04', '2020-12-19 17:11:04'),
(5, '101', '2020-12-24', '2020-12-19 17:12:40', '2020-12-19 17:12:40'),
(6, 'gragrwg', '2020-12-24', '2020-12-19 17:14:19', '2020-12-19 17:14:19'),
(7, '課題', '2020-12-24', '2020-12-19 17:18:22', '2020-12-19 17:18:22'),
(9, '食事', '2020-12-24', '2020-12-23 00:01:09', '2020-12-23 00:01:09');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `golf_table`
--
ALTER TABLE `golf_table`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `golf_table`
--
ALTER TABLE `golf_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
