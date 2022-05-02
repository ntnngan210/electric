-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 04:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

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
  `dntt` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dienke`
--

CREATE TABLE `dienke` (
  `madk` varchar(8) NOT NULL,
  `makh` varchar(13) NOT NULL,
  `ngaysx` datetime NOT NULL,
  `ngaylap` datetime NOT NULL,
  `mota` char(100) NOT NULL,
  `trangthai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dienke`
--

INSERT INTO `dienke` (`madk`, `makh`, `ngaysx`, `ngaylap`, `mota`, `trangthai`) VALUES
('DK001', 'KH00000000001', '2022-04-24 15:10:19', '2022-04-24 15:10:19', '', b'1'),
('DK002', 'KH00000000001', '2022-04-24 15:10:19', '2022-04-24 15:10:19', '', b'1'),
('DK003', 'KH00000000003', '2022-04-24 15:10:56', '2022-04-24 15:10:56', '', b'1'),
('DK004', 'KH00000000003', '2022-04-24 15:10:56', '2022-04-24 15:10:56', '', b'1'),
('DK005', 'KH00000000004', '2022-04-24 15:11:24', '2022-04-24 15:11:24', '', b'1'),
('DK006', 'KH00000000004', '2022-04-24 15:11:24', '2022-04-24 15:11:24', '', b'1');

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
  `ngayapdung` datetime NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giadien`
--

INSERT INTO `giadien` (`mabac`, `tenbac`, `tusokw`, `densokw`, `dongia`, `ngayapdung`, `trangthai`) VALUES
(1, 'bac 1', 0, 100, 1242, '2022-04-18 13:02:34', 1),
(2, 'bac 2', 101, 150, 1304, '2022-04-18 13:02:34', 1),
(3, 'bac 3', 151, 200, 1651, '2022-04-18 13:02:34', 1),
(4, 'bac 4', 201, 300, 1788, '2022-04-18 13:02:34', 1),
(5, 'bac 5', 301, 400, 1912, '2022-04-18 13:02:34', 1),
(9, 'bac 6', 560, 700, 1557, '2022-05-01 00:00:00', 1),
(10, 'bac 6', 560, 700, 158, '2022-05-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(10) NOT NULL,
  `madk` varchar(8) NOT NULL,
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

INSERT INTO `hoadon` (`mahd`, `madk`, `ky`, `tungay`, `denngay`, `chisodau`, `chisocuoi`, `tongthanhtien`, `ngaylaphd`, `tinhtrang`) VALUES
('HD0DK00110', 'DK001', '1', '2022-04-24 00:00:00', '2022-04-07 00:00:00', 0, 320, 10579607, '2022-04-24 00:00:00', b'0'),
('HD0DK00113', 'DK001', '1', '2022-04-26 00:00:00', '2022-05-02 00:00:00', 541, 1000, 727158, '2022-05-02 00:00:00', b'0'),
('HD0DK00121', 'DK001', '2', '2022-04-07 00:00:00', '2022-04-24 00:00:00', 320, 526, 279723, '2022-04-24 00:00:00', b'0'),
('HD0DK00133', 'DK001', '3', '2022-04-24 00:00:00', '2022-05-02 00:00:00', 526, 1500, 896567, '2022-05-02 00:00:00', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(13) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dt` varchar(12) NOT NULL,
  `cmnd` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `diachi`, `dt`, `cmnd`) VALUES
('KH00000000001', 'Trình Khoa', '222 Nguyễn thị minh khai', '1234567597', '225612750'),
('KH00000000003', 'Trần Văn C', '5555 Dateh, Lâm Đồng', '01232137112', '225122323'),
('KH00000000004', 'Nguyễn Thị K', '5554 Dateh, Lâm Đồng', '012321371111', '225122322'),
('KH00000000005', 'Vũ Thị L', '1010 Trần Phú', '21231231231', '812831122'),
('KH00000000006', 'Hoàng Phi Hồng', '3828 Mạc Tiến', '0352279796', '212312312'),
('KH00000000007', 'Huỳnh Văn P', '1232 Đồng Khởi', '21231231233', '812831124'),
('KH00000000008', 'Ko Ko Mi', '392 Ma khao', '0382727621', '282732722'),
('KH00000000009', 'Ko Ko MiA', '392 Ma khao', '0382727620', '282732721'),
('KH00000000010', 'Ko Ko Ok', '393 Ma khao', '0382727629', '282732720'),
('KH00000000011', 'Hắc Phong', '292 Lâm Phong', '0282362362', '823198291'),
('KH00000000013', 'jdsa 12', 'ádadasdad', '1231231313', '123333333'),
('KH00000000014', 'anhkhoat6@gmail.com', 'ádadasdad', '12312313133', '213133331'),
('KH00000000015', 'admin', 'ádadasdad', '12312313131', '322313132');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `mabac` int(11) NOT NULL,
  `macha` int(11) NOT NULL,
  `tusokw` int(11) NOT NULL,
  `densokw` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `ngaycapnhat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`mabac`, `macha`, `tusokw`, `densokw`, `dongia`, `ngaycapnhat`) VALUES
(1, 9, 560, 700, 1548, '2022-05-01 00:00:00'),
(2, 9, 560, 700, 1553, '2022-05-01 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`mahd`);

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
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `pk_hoadon_dienke` (`madk`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`mabac`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giadien`
--
ALTER TABLE `giadien`
  MODIFY `mabac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `mabac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `pk_cthoadon_hoadon` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`);

--
-- Constraints for table `dienke`
--
ALTER TABLE `dienke`
  ADD CONSTRAINT `pk_dienke_khachhang` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `pk_hoadon_dienke` FOREIGN KEY (`madk`) REFERENCES `dienke` (`madk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
