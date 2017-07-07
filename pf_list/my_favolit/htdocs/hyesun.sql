-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 17-06-13 20:30
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `hyesun`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `bar`
--

CREATE TABLE `bar` (
  `idx` int(11) NOT NULL,
  `upload` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `bar`
--

INSERT INTO `bar` (`idx`, `upload`) VALUES
(1, 'Tulips.jpg'),
(2, 'link_bg_e.gif'),
(3, 'link_bg4.png'),
(4, 'img_wth.png'),
(5, 'm_serch.png'),
(6, 'm_serch.png'),
(7, 'm_serch.png'),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, 'bg_footer.jpg'),
(15, ''),
(16, 'bg_footer.jpg'),
(17, 'btn_close.png'),
(18, 'bg_footer.jpg'),
(19, 'bg_footer.jpg'),
(20, 'C:/xampp/htdocsf_up1cb9ff1bb7c1aacb03f671e8a362391ebg_footer.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `mem_idx` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `hit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `mem_idx`, `name`, `title`, `content`, `date`, `hit`) VALUES
(0, 0, 'jhs', 'asdf', 'asdfghj', '2017-06-03 00:00:00', 3412),
(0, 0, 'dfsd', 'ergergwe', 'dsdsddsfds', '2017-06-30 00:00:00', 2231);

-- --------------------------------------------------------

--
-- 테이블 구조 `board_kcc`
--

CREATE TABLE `board_kcc` (
  `idx` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `notice` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board_kcc`
--

INSERT INTO `board_kcc` (`idx`, `title`, `name`, `notice`, `date`, `hit`) VALUES
(1, 'fdgdfgdfgdf', '31231321', 'fgfg', '0000-00-00', 3),
(2, 'fgdfgdf', '', 'dfdfgdg', '0000-00-00', 0),
(3, 'fdfd', 'fdfddfdfd', 'fdfdf', '2016-11-22', 23123),
(4, '', '', '', '2016-12-04', 0),
(5, '', '', '', '2016-12-04', 0),
(6, '', '', '', '2016-12-04', 0),
(7, '', '', '', '2016-12-04', 0),
(8, '', '', '', '2016-12-04', 0),
(9, '', '', '', '2016-12-04', 0),
(10, '', '', '', '2016-12-04', 0),
(11, '', '', '', '2016-12-04', 0),
(12, '', '', '', '2016-12-04', 0),
(13, '', '', '', '2016-12-04', 0),
(14, '', '', '', '2016-12-04', 0),
(15, '', '', '', '2016-12-04', 0),
(16, 'nbmn ', '', '', '2016-12-04', 5),
(17, 'efefefef', '', '', '2016-12-04', 0),
(18, '', '', '', '2016-12-04', 0),
(19, 'vdvd', '', '', '2016-12-04', 1),
(20, 'dvdvdvdvd', '', '', '2016-12-04', 27);

-- --------------------------------------------------------

--
-- 테이블 구조 `gallery`
--

CREATE TABLE `gallery` (
  `idx` int(11) NOT NULL,
  `mem_idx` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sum_img` varchar(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `hit` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

-- --------------------------------------------------------

--
-- 테이블 구조 `hyesun`
--

CREATE TABLE `hyesun` (
  `Favorit` varchar(255) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `hyesun`
--

INSERT INTO `hyesun` (`Favorit`, `no`) VALUES
('Family', 1),
('Youtuber', 2),
('ONEPIECE', 3),
('Lover', 4),
('Web.toon', 5),
('Fiction', 6),
('Hip.Hop', 7),
('Pink', 8),
('BLACK', 9),
('ROMANCE', 10),
('Wonder.Place', 11),
('Selfie', 12),
('Make.up', 13);

-- --------------------------------------------------------

--
-- 테이블 구조 `kcc_form`
--

CREATE TABLE `kcc_form` (
  `idx` int(11) NOT NULL,
  `name_Ko` varchar(225) NOT NULL,
  `name_En` varchar(225) NOT NULL,
  `birth_Year` int(100) NOT NULL,
  `birth_Month` int(100) NOT NULL,
  `birth_Day` int(100) NOT NULL,
  `id` varchar(255) NOT NULL,
  `pw` varchar(225) NOT NULL,
  `pw_Re` varchar(225) NOT NULL,
  `number_1` int(100) NOT NULL,
  `number_2` int(100) NOT NULL,
  `number_3` int(100) NOT NULL,
  `phonNum_1` int(100) NOT NULL,
  `phonNum_2` int(100) NOT NULL,
  `phonNum_3` int(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `home_post` int(100) NOT NULL,
  `home_post2` int(100) NOT NULL,
  `home_address1` int(100) NOT NULL,
  `home_address2` int(100) NOT NULL,
  `stay` varchar(100) NOT NULL,
  `work_name` varchar(100) NOT NULL,
  `work_kinds` varchar(100) NOT NULL,
  `work_spot` varchar(100) NOT NULL,
  `work_post1` int(100) NOT NULL,
  `work_post2` int(100) NOT NULL,
  `work_address1` int(100) NOT NULL,
  `work_address2` int(100) NOT NULL,
  `work_number1` int(100) NOT NULL,
  `work_number2` int(100) NOT NULL,
  `work_number3` int(100) NOT NULL,
  `fax_number1` int(100) NOT NULL,
  `fax_number2` int(100) NOT NULL,
  `fax_number3` int(100) NOT NULL,
  `wed` varchar(100) NOT NULL,
  `wed_year` int(100) NOT NULL,
  `wed_month` int(100) NOT NULL,
  `wed_day` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `kcc_form`
--

INSERT INTO `kcc_form` (`idx`, `name_Ko`, `name_En`, `birth_Year`, `birth_Month`, `birth_Day`, `id`, `pw`, `pw_Re`, `number_1`, `number_2`, `number_3`, `phonNum_1`, `phonNum_2`, `phonNum_3`, `answer`, `email`, `home_post`, `home_post2`, `home_address1`, `home_address2`, `stay`, `work_name`, `work_kinds`, `work_spot`, `work_post1`, `work_post2`, `work_address1`, `work_address2`, `work_number1`, `work_number2`, `work_number3`, `fax_number1`, `fax_number2`, `fax_number3`, `wed`, `wed_year`, `wed_month`, `wed_day`) VALUES
(12, 'ㅗ', '', 1950, 1, 1, 'ㅌ', 'd', 'd', 2, 0, 0, 10, 0, 0, '', '991015a@naver.com', 0, 0, 0, 0, 'on', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(13, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(14, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(15, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(16, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(17, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@asda', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(18, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(19, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(20, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(21, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(22, 'g', 'g', 1950, 1, 1, 'g', 'g', 'g', 2, 0, 0, 10, 0, 0, 'agreement_y', 'fdf@fdfd', 0, 0, 0, 0, 'home', 'n', 'jn', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(23, 'g', 'g', 1950, 1, 1, 'g', 'h', 'h', 2, 0, 0, 10, 0, 0, 'agreement_y', 'fdf@fdfd', 0, 0, 0, 0, 'home', 'n', 'jn', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(24, 'l', 'l', 1950, 1, 1, 'l', 'l', 'l', 2, 0, 0, 10, 0, 0, 'agreement_y', 'l@naver', 0, 0, 0, 0, 'home', 'l', 'l', 'l', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(25, 'j', 'j', 1950, 1, 1, 'j', 'j', 'j', 2, 0, 0, 10, 0, 0, 'agreement_y', 'j@g', 0, 0, 0, 0, 'home', 'j', '', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(26, 'j', 'j', 1950, 1, 1, 'j', 'j', 'j', 2, 0, 0, 10, 0, 0, 'agreement_y', 'j@g', 0, 0, 0, 0, 'home', 'j', '', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `write_date` varchar(100) NOT NULL,
  `qut_count` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `login_id` varchar(30) NOT NULL,
  `login_pw` varchar(30) NOT NULL,
  `qut_text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `title`, `writer`, `write_date`, `qut_count`, `pw`, `login_id`, `login_pw`, `qut_text`) VALUES
(1, '서울디지텍고등학교 가고싶습니다', '규현', '', '100', '0329', '', '', '디지텍고 고등학교에 가고싶습니다. '),
(2, '서울디지텍고등학교에 입학하려면..', '하라랄', '', '50', '0000', '', '', '서울디지텍고등학교에 입학하려면 내신이 몇퍼센트가 되어야하는건가요?'),
(3, '가는길', '루트', '', '6', '0000', '', '', '서울디지텍고등학교 가는길이 엄청 험하던데 학교를 옮기실 생각은 없으신가욥?'),
(4, '내가 디지텍의 짱이 될것이야', 'kms', '', '200', '1751', '', '', '제가 곧 서울디지텍고등학교를 접수하겠습니다. '),
(5, '급식충', '곧급식', '', '', '1111', '', '', '이 학교의 급식 양, 맛, 퀄리티 어떠한가요?'),
(20, 'title', 'writer', '', '', '', '', '', ''),
(21, 'asfd', 'afsd', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `pf`
--

CREATE TABLE `pf` (
  `no` int(11) NOT NULL,
  `pf_name` varchar(255) NOT NULL,
  `pf_date` datetime NOT NULL,
  `pf_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `pf`
--

INSERT INTO `pf` (`no`, `pf_name`, `pf_date`, `pf_page`) VALUES
(1, 'API', '2017-06-05 00:00:00', 'size.html'),
(3, 'KCC', '2016-12-27 00:00:00', 'index.php'),
(4, 'Samdasoo', '2017-05-18 00:00:00', 'index.php'),
(5, 'SmartSpace', '2016-11-01 00:00:00', 'index.php');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `board_kcc`
--
ALTER TABLE `board_kcc`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `hyesun`
--
ALTER TABLE `hyesun`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `kcc_form`
--
ALTER TABLE `kcc_form`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `pf`
--
ALTER TABLE `pf`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `bar`
--
ALTER TABLE `bar`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 테이블의 AUTO_INCREMENT `board_kcc`
--
ALTER TABLE `board_kcc`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 테이블의 AUTO_INCREMENT `hyesun`
--
ALTER TABLE `hyesun`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 테이블의 AUTO_INCREMENT `kcc_form`
--
ALTER TABLE `kcc_form`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 테이블의 AUTO_INCREMENT `pf`
--
ALTER TABLE `pf`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
