-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2019 at 06:42 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webschoolprojecttest`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(4) NOT NULL,
  `Mr of Mrs` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Lastname` varchar(300) NOT NULL,
  `Class` int(2) NOT NULL,
  `Classnumber` int(2) NOT NULL,
  `Number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Mr of Mrs`, `Name`, `Lastname`, `Class`, `Classnumber`, `Number`) VALUES
(1, 'นาย', 'ไก่', 'ย่าง', 1, 1, 1),
(2, 'นาย', 'ไก่', 'ทอด', 1, 1, 2),
(3, 'นางสาว', 'ฟ้า', 'สีคราม', 1, 1, 3),
(4, 'นางสาว', 'ไพร', 'พงไพร', 1, 1, 4),
(5, 'นาย', 'ไก่', 'ขัน', 1, 1, 5),
(6, 'นาย', 'ไก่', 'ร้อง', 1, 1, 6),
(7, 'นางสาว', 'ปลายฟ้า', 'สีคราม', 1, 1, 7),
(8, 'นางสาว', 'มาลัย', 'สามชาย', 1, 1, 8),
(9, 'นาย', 'ไชย', 'จระเข้', 1, 1, 9),
(10, 'นางสาว', 'มะลิ', 'ซ่อนกลิ่น', 1, 1, 10),
(11, 'นาย', 'มาลัย', 'มาดี', 1, 2, 1),
(12, 'นาย', 'มานพ', 'สมสมัย', 1, 2, 2),
(13, 'นาย', 'ต้นกล้า', 'ท้องนา', 1, 2, 3),
(14, 'นาย', 'ต้นข้าว', 'ท้องนา', 1, 2, 4),
(15, 'นาย', 'ใบชา', 'ต้นชา', 1, 2, 5),
(16, 'นางสาว', 'พานทอง', 'สายสมร', 1, 2, 6),
(17, 'นางสาว', 'ราตรี', 'ค่ำคืน', 1, 2, 7),
(18, 'นางสาว', 'สายใจ', 'สบายดี', 1, 2, 8),
(19, 'นางสาว', 'พานพุ่ม', 'อุดมสมบูรณ์', 1, 2, 9),
(20, 'นางสาว', 'ราตรี', 'อนาคตดี', 1, 2, 10),
(21, 'นาย', 'อนาคตใหม่', 'ชาติเจริญ', 1, 3, 1),
(22, 'นาย', 'ประหยัด', 'สมชื่อ', 1, 3, 2),
(23, 'นาย', 'เกียรตินาคิน', 'พาณิชย์', 1, 3, 3),
(24, 'นาย', 'เกียรติพาคิน', 'พาณิชย์', 1, 3, 4),
(25, 'นาย', 'ชาติชาย', 'ประเทศราช', 1, 3, 5),
(26, 'นางสาว', 'สมใจ', 'มาลัยดี', 1, 3, 6),
(27, 'นางสาว', 'ยิ้มดี', 'พราวเสน่', 1, 3, 7),
(28, 'นางสาว', 'ปรายดาว', 'ฟ้าคราม', 1, 3, 8),
(29, 'นางสาว', 'ปรายฟ้า', 'ราชวิถี', 1, 3, 9),
(30, 'นางสาว', 'ลาวดี', 'มีปรีดา', 1, 3, 10),
(31, 'นาย', 'ธงชาติ', 'ไทยสยาม', 2, 1, 1),
(32, 'นาย', 'องค์ชาย', 'ลายทหาร', 2, 1, 2),
(33, 'นาย', 'มาดี', 'ศรีชาติ', 2, 1, 3),
(34, 'นาย', 'มานพ', 'ทรงไชย', 2, 1, 4),
(35, 'นาย', 'ธงชัย', 'ประภาษดี', 2, 1, 5),
(36, 'นางสาว', 'สายน้ำ', 'ธารน้ำใจ', 2, 1, 6),
(37, 'นางสาว', 'พราวดี', 'ปรีดา', 2, 1, 7),
(38, 'นางสาว', 'กรกช', 'เขียวขจี', 2, 1, 8),
(39, 'นางสาว', 'ใหม่', 'คลายดารา', 2, 1, 9),
(40, 'นางสาว', 'พานทอง', 'สงบใจ', 2, 1, 10),
(41, 'นาย', 'พละ', 'ศึกษา', 2, 2, 1),
(42, 'นาย', 'ศีลดี', 'มีสุข', 2, 2, 2),
(43, 'นาย', 'พงไพร', 'เขียวขจี', 2, 2, 3),
(44, 'นาย', 'หินผา', 'ตรึงตรา', 2, 2, 4),
(45, 'นาย', 'ทระนง', 'สมชาติ', 2, 2, 5),
(46, 'นาย', 'สงขรา', 'ชงชาติมี', 2, 2, 6),
(47, 'นาย', 'กรนัย', 'กามสิน', 2, 2, 7),
(48, 'นาย', 'สุทธิ ', 'กายนา', 2, 2, 8),
(49, 'นาย', 'สุทันดา', 'ทาสี', 2, 2, 9),
(50, 'นาย', 'สุทิน', 'ยิ่งดี', 2, 2, 10),
(51, 'นาย', 'สาสุน', 'อุ่นออม', 2, 3, 1),
(52, 'นาย', 'สูทิตา', 'กามาระ', 2, 3, 2),
(53, 'นาย', 'กานทา', 'นามมี', 2, 3, 3),
(54, 'นาย', 'กันทิน', 'ทุกทาน', 2, 3, 4),
(55, 'นาย', 'กุณซือ', 'ฮองกง', 2, 3, 5),
(56, 'นางสาว', 'กานทินดา', 'สามีดี', 2, 3, 6),
(57, 'นางสาว', 'กันทิดา', 'สินดี', 2, 3, 7),
(58, 'นางสาว', 'กิววะณี', 'สีทิน', 2, 3, 8),
(59, 'นางสาว', 'กืนนา', 'สามหมื่น', 2, 3, 9),
(60, 'นางสาว', 'ปานิดา', 'นองสิน', 2, 3, 10),
(61, 'นาย', 'กัมมี', 'มันกาล', 3, 1, 1),
(62, 'นาย', 'ครึกศร', 'ทรนง', 3, 1, 2),
(63, 'นาย', 'คนิยา', 'สารมี', 3, 1, 3),
(64, 'นาย', 'วาที', 'ทีโอมา', 3, 1, 4),
(65, 'นาย', 'วานิน', 'ทาราทิป', 3, 1, 5),
(66, 'นางสาว', 'ปัททาธิ', 'สินมา', 3, 1, 6),
(67, 'นางสาว', 'ปะทิน', 'กินมา', 3, 1, 7),
(68, 'นางสาว', 'ดาริน', 'ดีแน่', 3, 1, 8),
(69, 'นางสาว', 'มารีนา', 'สามศรี', 3, 1, 9),
(70, 'นางสาว', 'ดลธิดา', 'กาลศรี', 3, 1, 10),
(71, 'นาย', 'ปรายุ', 'ยุยงทน', 3, 2, 1),
(72, 'นาย', 'ปรานี', 'ทินนาวุต', 3, 2, 2),
(73, 'นาย', 'ปับปัย', 'ทุรราดิน', 3, 2, 3),
(74, 'นาย', 'จกิต', 'สีทองสู้', 3, 2, 4),
(75, 'นาย', 'บานาลี', 'กาจัยนา', 3, 2, 5),
(76, 'นางสาว', 'ชิวาลี', 'สมฤดี', 3, 2, 6),
(77, 'นางสาว', 'ณัตธิดา', 'นามิน', 3, 2, 7),
(78, 'นางสาว', 'มารี', 'ศรีกุมาร', 3, 2, 8),
(79, 'นางสาว', 'ชลฤดี', 'สิงห์ทอง', 3, 2, 9),
(80, 'นางสาว', 'นานา', 'สาทิน', 3, 2, 10),
(81, 'นาย', 'ทาสานี', 'ทุกข์สุข', 3, 3, 1),
(82, 'นาย', 'มีสาวี', 'มีทุกวัน', 3, 3, 2),
(83, 'นาย', 'กานนา', 'ขามี', 3, 3, 3),
(84, 'นาย', 'ฉัตรชัย', 'มาดีกาล', 3, 3, 4),
(85, 'นาย', 'พรเทพ', 'เจ้าคงคา', 3, 3, 5),
(86, 'นางสาว', 'นิลดา', 'ปราถนา', 3, 3, 6),
(87, 'นางสาว', 'นุสิตรา', 'พราวดี', 3, 3, 7),
(88, 'นางสาว', 'สุกันยา', 'สินดินดี', 3, 3, 8),
(89, 'นางสาว', 'ปราณี', 'ทรัพย์พึงมี', 3, 3, 9),
(90, 'นางสาว', 'กนกวัล', 'ศรีดารา', 3, 3, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
