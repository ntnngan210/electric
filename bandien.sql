-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 02:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandien`
--

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `mahd` varchar(10) NOT NULL,
  `madk` varchar(8) NOT NULL,
  `dntt` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`mahd`, `madk`, `dntt`, `dongia`) VALUES
('1', '1', 200, 1000),
('2', '2', 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `dienke`
--

CREATE TABLE `dienke` (
  `madk` varchar(8) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaysx` datetime NOT NULL,
  `ngaylap` datetime NOT NULL,
  `mota` char(100) NOT NULL,
  `trangthai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dienke`
--

INSERT INTO `dienke` (`madk`, `makh`, `ngaysx`, `ngaylap`, `mota`, `trangthai`) VALUES
('1', 3, '2022-04-18 13:01:27', '2022-04-18 13:01:27', '', b'1'),
('2', 4, '2022-04-18 13:01:27', '2022-04-18 13:01:27', '', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `giadien`
--

CREATE TABLE `giadien` (
  `mabac` int(11) NOT NULL,
  `tenbac` char(50) NOT NULL,
  `tusokw` int(11) NOT NULL,
  `densokw` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `ngayapdung` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giadien`
--

INSERT INTO `giadien` (`mabac`, `tenbac`, `tusokw`, `densokw`, `dongia`, `ngayapdung`) VALUES
(1, 'bac 1', 0, 100, 1242, '2022-04-18 13:02:34'),
(2, 'bac 2', 101, 150, 1304, '2022-04-18 13:02:34'),
(3, 'bac 3', 151, 200, 1651, '2022-04-18 13:02:34'),
(4, 'bac 4', 201, 300, 1788, '2022-04-18 13:02:34'),
(5, 'bac 5', 301, 400, 1912, '2022-04-18 13:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(10) NOT NULL,
  `ky` varchar(7) NOT NULL,
  `tungay` datetime NOT NULL,
  `denngay` datetime NOT NULL,
  `chisodau` int(11) NOT NULL,
  `chisocuoi` int(11) NOT NULL,
  `tongthanhtien` int(11) NOT NULL,
  `ngaylaphd` datetime NOT NULL,
  `tinhtrang` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `ky`, `tungay`, `denngay`, `chisodau`, `chisocuoi`, `tongthanhtien`, `ngaylaphd`, `tinhtrang`) VALUES
('1', '4', '2022-02-01 18:09:30', '2022-03-01 18:09:30', 15, 215, 100000, '2022-04-18 13:09:30', b'1'),
('2', '1', '2022-02-01 18:09:30', '2022-03-01 18:09:30', 100, 500, 1000, '2022-04-18 13:09:30', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dt` varchar(12) NOT NULL,
  `cmnd` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `diachi`, `dt`, `cmnd`) VALUES
(3, 'Trình Khoa', '222 Nguyễn thị minh khai', '123128371891', '225612750'),
(4, 'Trần Văn B', '321 Ngã 7 ', '0123813711', '225122321'),
(5, 'Trần Văn C', '5555 Dateh, Lâm Đồng', '01232137112', '225122323'),
(6, 'Nguyễn Thị K', '5554 Dateh, Lâm Đồng', '01232137111', '225122322');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `pk_cthoadon_dienke` (`madk`);

--
-- Indexes for table `dienke`
--
ALTER TABLE `dienke`
  ADD PRIMARY KEY (`madk`),
  ADD KEY `pk_dienke_khachhang` (`makh`);

--
-- Indexes for table `giadien`
--
ALTER TABLE `giadien`
  ADD PRIMARY KEY (`mabac`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `pk_cthoadon_dienke` FOREIGN KEY (`madk`) REFERENCES `dienke` (`madk`),
  ADD CONSTRAINT `pk_cthoadon_hoadon` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`);

--
-- Constraints for table `dienke`
--
ALTER TABLE `dienke`
  ADD CONSTRAINT `pk_dienke_khachhang` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
