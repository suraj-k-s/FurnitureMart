-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 07:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_furnituremart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL DEFAULT '0',
  `booking_amount` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `booking_status`, `booking_amount`, `user_id`) VALUES
(17, '2022-11-06', '1', 4000, 1),
(18, '2022-11-14', '1', 34020, 2),
(19, '2022-11-14', '1', 202500, 3),
(20, '2022-11-14', '1', 202500, 3),
(24, '2022-11-14', '1', 34020, 2),
(25, '2022-11-14', '1', 34020, 2),
(28, '2022-11-14', '1', 202500, 3),
(30, '2022-11-13', '1', 7000, 5),
(31, '2022-11-13', '0', 0, 5),
(32, '2022-11-14', '1', 34020, 2),
(33, '2022-11-14', '1', 202500, 3),
(34, '2022-11-14', '1', 202500, 3),
(35, '2022-11-14', '1', 202500, 3),
(36, '2022-11-14', '0', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(1, 'Chairman'),
(2, 'Damro'),
(3, 'Zuari '),
(4, 'Peps'),
(5, 'Wooden Street');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_quantity` varchar(100) NOT NULL DEFAULT '1',
  `product_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cart_quantity`, `product_id`, `booking_id`, `cart_status`) VALUES
(23, '1', 9, 17, 1),
(24, '2', 17, 18, 4),
(25, '1', 17, 19, 4),
(26, '1', 17, 20, 4),
(27, '2', 17, 21, 4),
(28, '1', 22, 22, 4),
(29, '1', 17, 23, 1),
(30, '1', 23, 23, 1),
(31, '1', 22, 24, 4),
(32, '1', 17, 25, 4),
(33, '1', 13, 26, 1),
(34, '1', 16, 27, 1),
(35, '1', 16, 28, 1),
(36, '1', 22, 28, 1),
(37, '10', 17, 29, 1),
(38, '1', 16, 30, 4),
(40, '6', 16, 32, 4),
(41, '1', 16, 33, 4),
(42, '1', 27, 34, 4),
(43, '10', 25, 35, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Sofa'),
(2, 'Chair'),
(3, 'Beds'),
(6, 'Table'),
(7, 'Desk'),
(9, 'Coat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complainttype_id` int(11) NOT NULL,
  `complaint_content` varchar(100) NOT NULL,
  `complaint_date` varchar(100) NOT NULL,
  `complaint_reply` varchar(100) NOT NULL DEFAULT 'Not Yet Replyed',
  `user_id` int(11) NOT NULL,
  `complaint_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complainttype_id`, `complaint_content`, `complaint_date`, `complaint_reply`, `user_id`, `complaint_status`) VALUES
(1, 2, 'Not as expected quality', '2022-11-05', 'thank you for your comment', 1, 1),
(2, 3, 'Not as expected quality', '2022-11-06', 'We will ensure good quality', 3, 1),
(3, 1, 'asdfghj', '2022-11-08', 'Not Yet Replyed', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainttype`
--

CREATE TABLE `tbl_complainttype` (
  `complainttype_id` int(11) NOT NULL,
  `complainttype_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complainttype`
--

INSERT INTO `tbl_complainttype` (`complainttype_id`, `complainttype_name`) VALUES
(1, 'Bad Service'),
(3, 'Not good quality'),
(4, 'Lack of follow up');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(1, 'Kottayam'),
(2, 'Ernakulam'),
(3, 'Kannur'),
(4, 'Kollam'),
(5, 'Idukki'),
(6, 'Wayanad'),
(7, 'Palakkad'),
(8, 'Kozhikode'),
(9, 'Malappuram'),
(10, ' Thrissur'),
(11, 'Pathanamthitta'),
(12, 'Thiruvananthapuram'),
(13, 'Alappuzha'),
(14, 'Kasaragod');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(100) NOT NULL,
  `feedback_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(1, 'Peruva', 1),
(2, 'Piravom', 2),
(3, 'Thalassery,', 3),
(4, 'Payyanur,', 3),
(5, 'Karunagappally', 4),
(6, 'Chathannoor', 4),
(7, 'Thamarassery', 8),
(8, 'Kappad', 8),
(9, 'Munnar', 5),
(10, 'Thodupuzha', 5),
(11, 'Ambalappuzha', 13),
(12, 'Aroor', 13),
(13, 'Vellarikkund', 14),
(14, 'Manjeshwaram', 14),
(15, 'Ranni', 11),
(16, 'Kozhenchery', 11),
(17, 'Edakkad', 3),
(18, 'Azhikode', 3),
(19, 'Vaikom', 1),
(20, 'Cheruvakkal', 12),
(21, 'Cheruvakkal', 12),
(22, 'Sulthanbathery', 6),
(23, 'Mananthavady', 6),
(24, 'Ottapalam', 7),
(25, 'Kanjirapuzha', 7),
(26, 'Thrippunithura', 2),
(28, 'Perinthalmanna	', 9),
(29, 'Ponnani', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_photo` varchar(100) NOT NULL,
  `product_details` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_photo`, `product_details`, `product_price`, `shop_id`, `subcategory_id`, `brand_id`) VALUES
(13, 'Tex', 'officeChair.jpg', 'Highly confortable chair.\r\nMAde in India', 6000, 3, 6, 2),
(16, 'Getex', 'officechair2.jpg', 'Comfortable product.\r\nMade in India', 7000, 3, 6, 5),
(17, 'Batroz', 'gamingchair1.jpg', 'Comfortable  Gaming chair.\r\nHigh durablity.Light weight', 10000, 3, 18, 2),
(20, 'Simple Table', 'diningtable1.png', 'Comfortable.\r\nMade in US', 10000, 3, 19, 5),
(21, 'Softin', 'chair2.png', 'Comfortable product.\r\nLight Weght.Made in Germany', 5000, 3, 4, 2),
(22, 'Yeloit', 'fur3.png', 'Made in US.\r\nLight weight', 4000, 3, 20, 1),
(23, 'Whitin', 'fur1.png', 'Mae in Canada.\r\nComfortable to use.Light Weight', 15000, 3, 14, 2),
(25, 'Knotix', 'Knole Sofa.jpg', 'Comfortable product.\r\nMade in US.', 25000, 4, 17, 2),
(26, 'Blacktin', 'studytable11.png', 'Handmade product.\r\nMade in Germany.', 9000, 4, 11, 2),
(27, 'Whitetable', 'pngwing.com (4).png', 'Handmade product .\r\nMade in US.', 6000, 4, 11, 2),
(28, 'Pinklet', 'studytable2.png', 'Custom made tables for children.\r\nMade in Itlay.', 5000, 4, 11, 5),
(30, 'Tabledin', 'diningtable2.png', 'Made in Germany.\r\nCustomizable product.', 15000, 4, 19, 2),
(31, 'Wellton', 'pngwing.com (1).png', 'High quality product.\r\nMade in US.Leather finished', 20000, 4, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `review_datetime` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_review` varchar(100) NOT NULL,
  `user_rating` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `review_datetime`, `product_id`, `user_review`, `user_rating`, `user_name`) VALUES
(4, '2022-11-05 12:03:44', 7, 'Good user experience', '0', 'Arjun'),
(5, '2022-11-06 10:34:19', 16, 'Good service', '4', 'Sanu'),
(6, '2022-11-06 10:54:51', 10, 'Good', '4', 'Syam'),
(7, '2022-11-06 11:26:55', 10, 'Nice', '3', 'Varghees'),
(8, '2022-11-06 12:12:49', 16, 'Comfortable', '0', 'Syam Kumar'),
(9, '2022-11-07 13:45:22', 17, 'Good service', '3', 'Merin'),
(10, '2022-11-08 13:44:15', 17, 'Nice', '1', 'Sanu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `shop_contact` varchar(100) NOT NULL,
  `shop_address` varchar(100) NOT NULL,
  `shop_email` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  `shop_photo` varchar(100) NOT NULL,
  `shop_proof` varchar(100) NOT NULL,
  `shop_status` varchar(100) NOT NULL DEFAULT '0',
  `shop_password` varchar(100) NOT NULL,
  `shop_doj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`shop_id`, `shop_name`, `shop_contact`, `shop_address`, `shop_email`, `place_id`, `shop_photo`, `shop_proof`, `shop_status`, `shop_password`, `shop_doj`) VALUES
(3, 'Wood Arts', '9500551831', 'Villa2 Mulakulam south P.O Kottayam', 'arjun701u@gmail.com', 1, 'Arjun.jpg', 'arjunproof.jpg', '1', '123456', 20221105),
(4, 'ShivaStores', '9544001128', 'Shivahop lane1 Ernakulam ', 'sivadeth22@gmail.com', 26, 'joju.jpg', 'jojuProof.jpg', '1', 'shiva@123', 20221111);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_quantity` varchar(100) NOT NULL,
  `stock_date` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `stock_quantity`, `stock_date`, `product_id`) VALUES
(1, '1', '28-10-2022', 9),
(16, '10', '2022-11-06', 17),
(17, '3', '2022-11-08', 23),
(18, '1', '2022-11-08', 22),
(19, '2', '2022-11-09', 22),
(21, '10', '2022-11-08', 16),
(22, '7', '2022-11-09', 16),
(23, '10', '2022-11-10', 16),
(24, '10', '2022-11-01', 16),
(25, '-1', '2022-11-11', 24),
(26, '10', '2022-11-12', 25),
(27, '20', '2022-11-12', 26),
(28, '30', '2022-11-12', 27),
(33, '1', '2022-11-14', 13),
(36, '5', '2022-11-14', 25),
(37, '6', '2022-11-14', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(4, 'Garden Chair', 2),
(5, 'Armchair', 2),
(6, 'Office Chair', 2),
(7, 'Club Chair', 2),
(8, 'Bunk bed', 3),
(9, 'Four-poster bed', 3),
(10, 'Bed base', 3),
(11, 'Study Table', 6),
(12, 'Computer Desk', 7),
(13, 'Shell Desk', 7),
(14, 'Sectional Sofa', 1),
(15, 'Camelback Sofa', 1),
(16, 'Cabriole Sofa', 1),
(17, 'Knole Sofa', 1),
(18, 'Gaming Chair', 2),
(19, 'Dinning Table', 6),
(20, 'Simple Chair', 2),
(21, 'Wood Coat', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_contact` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_address`, `user_password`, `user_photo`, `place_id`, `user_gender`, `user_dob`) VALUES
(1, 'Arjun V S', '9544001151', 'surajks28101999@gmail.com', 'Valel (H) Mulakulam south P.O Kottayam', 'Surajks@28101999', 'Arjun.jpg', 2, 'male', '2001-11-19'),
(2, 'Joju P Yacob', '9544001154', 'jojupyacob666@gmail.com', 'Jojuvilla (H) Mulakulam south P.O Kottayam', 'siva123', 'joju.jpg', 2, 'male', '2001-02-12'),
(3, 'Syam Kumar', '6522449124', 'syamk2222@gmail.com', 'Syam Villa  Thripunithara  Nadakkavu P.O Ernalulam', 'syam2001', 'syam.jpg', 2, 'male', '2022-11-06'),
(5, 'Athul', '9544001157', 'Athul123@gmail.com', 'Va (H) Mulakulam south P.O Kottayam', '123456', 'fur4.png', 11, 'male', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_complainttype`
--
ALTER TABLE `tbl_complainttype`
  ADD PRIMARY KEY (`complainttype_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_complainttype`
--
ALTER TABLE `tbl_complainttype`
  MODIFY `complainttype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
