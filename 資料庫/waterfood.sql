-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-12-20 16:23:52
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `waterfood`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(32) NOT NULL,
  `adminmimi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`adminID`, `adminmimi`) VALUES
('admin1114', '1114');

-- --------------------------------------------------------

--
-- 資料表結構 `food`
--

CREATE TABLE `food` (
  `ID` int(11) NOT NULL COMMENT '編號',
  `flist` varchar(32) NOT NULL COMMENT '訂單編號',
  `fdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '訂單日期',
  `ftel` varchar(32) NOT NULL COMMENT '訂單電話',
  `fcont` varchar(32) NOT NULL COMMENT '訂單內容',
  `fmon` varchar(32) NOT NULL COMMENT '訂單金額'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `food`
--

INSERT INTO `food` (`ID`, `flist`, `fdate`, `ftel`, `fcont`, `fmon`) VALUES
(30, '20231220134744', '2023-12-20 05:47:49', '11', '1', '500'),
(31, '20231220134750', '2023-12-20 05:47:54', '12121212', '12', '6000'),
(32, '20231220134755', '2023-12-20 05:48:02', '123123123', '55', '27500'),
(33, '20231220145048', '2023-12-20 06:50:53', '', '', '0'),
(34, '2023122014524', '2023-12-20 06:52:18', '', '', '0'),
(36, '20231220155737', '2023-12-20 07:57:48', '', '1', '500'),
(37, '20231220155959', '2023-12-20 08:00:04', '', '12', '6000'),
(38, '2023122016535', '2023-12-20 08:05:43', '', '', '0');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- 資料表索引 `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
