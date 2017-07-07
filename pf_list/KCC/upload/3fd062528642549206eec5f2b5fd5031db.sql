-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-11-17 18:10
-- 서버 버전: 10.1.10-MariaDB
-- PHP 버전: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `db`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `hit` int(20) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `name`, `content`, `date`, `hit`, `file`) VALUES
(2, 'update_title', 'afsd', 'update_content', '', 0, ''),
(3, '234567890-', 'dfas', 'kjhgfds', '', 0, ''),
(4, 'fdassg', 'dfas', 'asdf', '', 0, ''),
(5, 'fdassg', 'dfas', 'asdf', '', 0, ''),
(6, 'fdassg', 'dfas', 'asdf', '', 0, ''),
(7, 'radfs', 'asdfsdf', 'asdfdfas', '', 0, ''),
(8, 'radfs', 'asdfsdf', 'asdfdfas', '', 0, ''),
(9, 'title', 'name', 'article', '', 0, ''),
(10, 'title', 'name', 'article', '', 0, ''),
(11, 'afsdadfs', 'asdfasdf', 'asdf', '', 0, ''),
(13, '', '', '', '', 0, ''),
(14, '', '', '', '', 0, ''),
(15, 'hi', '응디', 'fas', '', 0, ''),
(16, 'hello', '응디', '파일을 올려 보겠습니다! ', '', 0, ''),
(17, 'dd', 'd', 'ddd', '', 0, ''),
(18, 'hello', 'd', 'hello', '', 0, ''),
(19, 'dd', 'd', 'ddd', '', 0, ''),
(20, 'dd', 'd', 'ddd', '', 0, ''),
(21, 'dd', 'd', 'ddd', '', 0, ''),
(22, 'dd', 'd', 'ddd', '', 0, ''),
(25, 'file', 'update', 'file', '', 0, ''),
(26, 'file', 'update', 'file', '', 0, ''),
(27, 'file', 'update', 'file', '', 0, ''),
(28, 'filetnwjd', 'update', 'file', '', 0, ''),
(29, 'script', 'adfgsh', 'loactin.href', '', 0, ''),
(30, '수정2', 'adfgsh', '수정1', '', 0, ''),
(31, '파일올리기', '송은지', '파일을 올리자. ', '', 0, ''),
(32, 'h', '4', 'f', '', 0, ''),
(33, 'h', '4', 'f', '', 0, ''),
(34, 'ho', '4', 'ho', '', 0, ''),
(35, '공지사항', '김민석', '바보', '', 0, ''),
(36, '공지사항', '김민석', '바보', '', 0, ''),
(37, '왜', '두개가', '들어가지?', '', 0, ''),
(38, '왜', '두개가', '들어가지?', '', 0, ''),
(39, '왜 ', '두개가 ', '들어가는거지?', '', 0, ''),
(40, '왜 ', '두개가 ', '들어가는거지?', '', 0, ''),
(41, '두개씩 ', '들어가는 ', '이유느?', '', 0, ''),
(42, '두개씩 ', '들어가는 ', '이유느?', '', 0, ''),
(43, '파일이 몇개가 올라가냐ㅡㅡ', '2개씩', '죽고싶냐?', '', 0, 'bg_footer.jpg'),
(44, '파일이 몇개가 올라가냐ㅡㅡ', '2개씩', '죽고싶냐?', '', 0, 'bg_footer.jpg'),
(45, '자 ', '고쳤따 ', 'ㅋ', '', 0, ''),
(46, 'title', '슈퍼준이ㅓ', '규현이 제일 잘생김', '', 0, 'ArrayArray'),
(47, 'fasg', '?', 'agd', '', 0, 'bg_main.jpg'),
(48, 'file', '업로드 하고싶어요....', '피곤하다', '', 0, ''),
(49, 'file', '업로드 하고싶어요....', '피곤하다', '', 0, ''),
(50, 'file', '업로드 하고싶어요....', '피곤하다', '', 0, ''),
(51, 'file', '업로드 하고싶어요....', '피곤하다', '', 0, ''),
(52, 'file', '업로드 하고싶어요....', '피곤하다', '', 0, ''),
(53, 'file update', '업로드 하고싶어요....', '언능 외우고 잦 ㅏ', '', 0, ''),
(55, '22', '22', '222', '', 0, ''),
(56, '22', '22', '222', '', 0, ''),
(57, '22', '22', '222', '', 0, ''),
(58, '22', '22', '222', '', 0, ''),
(62, 'agd', 'agd', 'adgs', '', 0, '');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
