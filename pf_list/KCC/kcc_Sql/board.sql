-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-11-30 16:05
-- 서버 버전: 10.1.10-MariaDB
-- PHP 버전: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kcc`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `hit` varchar(15) NOT NULL DEFAULT '0',
  `content` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_enc` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `date`, `hit`, `content`, `name`, `file`, `file_enc`, `created_at`) VALUES
(22, '도는', '', '5', '도는 맛없는 도라지\r\n레는 신 레에몬 \r\n미는 도레ㅁ에ㅔㅇ미 \r\n', '응디가', 'db.sql', '3fd062528642549206eec5f2b5fd5031db.sql', '2016-11-29 19:31:13'),
(23, '민석이가', '', '8', '먹겠데용', '퀵켓을', '20140727_160052.jpg', 'fbead40a9c34e6c1eba25b5ac64ace1520140727_160052.jpg', '2016-11-29 20:01:27');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
