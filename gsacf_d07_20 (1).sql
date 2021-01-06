-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-01-06 14:56:07
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
(1, '杉山俊範', '2021-01-08', '2020-12-24 00:00:30', '2020-12-30 17:28:46'),
(2, '宮本武蔵', '2021-01-09', '2020-12-24 07:02:40', '2020-12-30 17:29:08'),
(3, '佐々木小次郎', '2021-01-09', '2020-12-24 22:01:21', '2020-12-30 17:29:20'),
(4, '佐藤健', '2020-12-26', '2020-12-24 22:01:32', '2020-12-24 22:01:32'),
(5, '小栗旬', '2020-12-26', '2020-12-24 22:01:41', '2020-12-24 22:01:41'),
(6, '山田孝之', '2020-12-26', '2020-12-24 22:03:05', '2020-12-24 22:03:05'),
(7, '杉山俊範', '2020-12-26', '2020-12-24 22:03:27', '2020-12-24 22:03:27'),
(8, '山田　剛', '2020-12-26', '2020-12-26 11:21:22', '2020-12-26 11:21:22'),
(9, '123', '2020-12-31', '2020-12-26 17:44:52', '2020-12-26 17:44:52'),
(10, '杉山俊範', '2020-12-31', '2020-12-30 15:36:42', '2020-12-30 15:36:42');

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
(3, 'メシ', '2020-12-19', '2020-12-19 16:04:07', '2020-12-19 16:04:07'),
(4, '12345', '2020-12-23', '2020-12-19 17:11:04', '2020-12-19 17:11:04'),
(5, '101', '2020-12-24', '2020-12-19 17:12:40', '2020-12-19 17:12:40'),
(6, 'gragrwg', '2020-12-24', '2020-12-19 17:14:19', '2020-12-19 17:14:19'),
(7, '課題', '2020-12-24', '2020-12-19 17:18:22', '2020-12-19 17:18:22'),
(9, '食事', '2020-12-24', '2020-12-23 00:01:09', '2020-12-23 00:01:09');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `golf_table`
--
ALTER TABLE `golf_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
