-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 04:18 PM
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
-- Database: `sps`
--

-- --------------------------------------------------------

--
-- Table structure for table `ifm`
--

CREATE TABLE `ifm` (
  `ifm_id` int(15) NOT NULL COMMENT 'รหัสประชาสัมพันธ์',
  `ifm_user_id` int(15) NOT NULL COMMENT 'รหัสผู้พักอาศัย',
  `ifm_name` varchar(255) NOT NULL COMMENT 'ชื่อประชาสัมพันธ์',
  `ifm_detail` varchar(255) NOT NULL COMMENT 'รายละเอียดประชาสัมพันธ์',
  `ifm_date_open` date NOT NULL COMMENT 'วันเปิดประชาสัมพันธ์',
  `ifm_date_close` date NOT NULL COMMENT 'วันปิดประชาสัมพันธ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ifm`
--

INSERT INTO `ifm` (`ifm_id`, `ifm_user_id`, `ifm_name`, `ifm_detail`, `ifm_date_open`, `ifm_date_close`) VALUES
(1, 1, 'วันนี้ฝนอาจจะตก', 'วันนี้ช่วงบ่ายโมง ฝนน่าจะตก\r\n', '2021-06-10', '2021-08-05'),
(2, 1, 'วันนี้เรียนยุทธวิธีตำรวจ', 'วันที่ 12 ฝึกยุทธวิธี ในเวลาบ่ายว่าง', '2021-06-13', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL COMMENT 'รหัสผู้พักอาศัย',
  `user_type_id` int(10) NOT NULL COMMENT 'รหัสสิท',
  `user_firstname` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `user_lastname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `user_phone` varchar(50) NOT NULL COMMENT 'เบอร์โทร',
  `user_code` varchar(255) NOT NULL COMMENT 'คณะ',
  `user_parent` varchar(255) NOT NULL COMMENT 'สาขา',
  `user_username` varchar(255) NOT NULL COMMENT 'รหัสผู้ใช้',
  `user_password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `user_address` varchar(100) NOT NULL COMMENT 'บ้านเลขที่',
  `user_amphur` varchar(100) NOT NULL COMMENT 'อำเภอ',
  `user_province` varchar(100) NOT NULL COMMENT 'จังหวัด',
  `user_zipcode` varchar(50) NOT NULL COMMENT 'เลขไปษณี',
  `user_image` varchar(255) NOT NULL COMMENT 'รูป'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type_id`, `user_firstname`, `user_lastname`, `user_phone`, `user_code`, `user_parent`, `user_username`, `user_password`, `user_address`, `user_amphur`, `user_province`, `user_zipcode`, `user_image`) VALUES
(1, 1, 'กิตติพงษ์', 'ปลิงกระโทก', '0848283681', 'วิศวกรรมศาสตร์', 'สาขาวิศวกรรมคอมพิวเตอร์', 'abc@123', 'abc@123', '25/3', 'โชคชัย', 'นครราชสีมา', '30190', ''),
(2, 2, 'ณัฐพล', 'คงขุนทด', '0894466555', 'วิศวกรรมศาสตร์', 'สาขาวิศวกรรมไฟฟ้า', 'test123456', 'test123456', '56', 'เมือง', 'นคคราชสีมา', '30000', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(10) NOT NULL COMMENT 'รหัสสิทธิ์',
  `user_type_name` varchar(100) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'เจ้าหน้าที่กองกลาง'),
(2, 'กรรมการหอพัก'),
(3, 'ผู้พักอาศัย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ifm`
--
ALTER TABLE `ifm`
  ADD PRIMARY KEY (`ifm_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ifm`
--
ALTER TABLE `ifm`
  MODIFY `ifm_id` int(15) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประชาสัมพันธ์', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้พักอาศัย', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสิทธิ์', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
