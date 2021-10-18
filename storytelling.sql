-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-10-14 13:09:27
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `storytelling`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `accountID` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `account`
--

INSERT INTO `account` (`accountID`, `username`, `password`, `image`, `status`) VALUES
(1, 'yujun', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(2, 'matt', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(3, 'hi', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(4, 'peter', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(5, 'lolo', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(6, 'lop', 'ff1ccf57e98c817df1efcd9fe44a8aeb', 'user.png', 'S'),
(7, 'name', '6277e2a7446059985dc9bcf0a4ac1a8f', 'user.png', 'S'),
(8, 'iii', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(9, 'hello', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(10, 'gg', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(11, 'hugo', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(12, 'ui', '865c0c0b4ab0e063e5caa3387c1a8741', 'user.png', 'S'),
(13, 'kk', '8fe4c11451281c094a6578e6ddbf5eed', 'user.png', 'S'),
(14, 'll', '5b54c0a045f179bcbbbc9abcb8b5cd4c', 'user.png', 'S'),
(15, 'qq', '099b3b060154898840f0ebdfb46ec78f', 'user.png', 'S'),
(16, 'ff', '633de4b0c14ca52ea2432a3c8a5c4c31', 'user.png', 'S'),
(17, 'fy', '263ed3ca689addde40e4ee6150c611d3', 'user.png', 'S'),
(18, 'op', '11d8c28a64490a987612f2332502467f', 'user.png', 'S'),
(19, 'ii', '6277e2a7446059985dc9bcf0a4ac1a8f', 'user.png', 'S'),
(20, 'jj', 'bf2bc2545a4a5f5683d9ef3ed0d977e0', 'jj.png', 'S'),
(21, 'tt', 'accc9105df5383111407fd5b41255e23', 'user.png', 'S'),
(22, 'iop', '9fbfb220e03aa76d424088e43314b0d0', 'iop.png', 'S');

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `videoID` int(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mark` int(10) NOT NULL,
  `videoName` varchar(25) NOT NULL,
  `dateTimes` varchar(25) NOT NULL,
  `uuids` varchar(50) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `video`
--

INSERT INTO `video` (`videoID`, `email`, `mark`, `videoName`, `dateTimes`, `uuids`, `comments`) VALUES
(1, 'kelvin', 50, 'chan', 'chn', 'chn', 'excellent'),
(2, 'kkkk', 0, 'he', '890000', '28888', 'good');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- 資料表索引 `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`videoID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表 AUTO_INCREMENT `video`
--
ALTER TABLE `video`
  MODIFY `videoID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
