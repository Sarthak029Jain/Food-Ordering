-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 03:27 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@ssfood.com', 'adminssfood');

-- --------------------------------------------------------

--
-- Table structure for table `buynow`
--

CREATE TABLE `buynow` (
  `buy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `bdate` varchar(15) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `food_price` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 
-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_title` varchar(120) NOT NULL,
  `food_price` varchar(10) NOT NULL,
  `cdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_title` varchar(120) NOT NULL,
  `food_price` varchar(10) NOT NULL,
  `food_veg` varchar(10) NOT NULL,
  `food_category` varchar(60) NOT NULL,
  `food_type` varchar(60) NOT NULL,
  `food_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_title`, `food_price`, `food_veg`, `food_category`, `food_type`, `food_pic`) VALUES
(1, 'Cheese Burgers', '120', 'veg', 'Mexican', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/1.jpg'),
(2, 'Chicken Burger', '150', 'nonveg', 'Indian', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/2.jpg'),
(3, 'Chicken BBQ Pizza', '205', 'nonveg', 'Italian', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/3.jpg'),
(4, 'Grilled Cheese Sandwich', '65', 'veg', 'Mexican', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/4.jpg'),
(5, 'Double Cheese Pizza', '290', 'veg', 'Italian', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/5.jpg'),
(6, 'Grilled Veg Burger', '85', 'veg', 'Indian', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/6.jpg'),
(7, 'Samosa', '25', 'veg', 'Indian', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/7.jpg'),
(8, 'Choco Chip Cookies', '110', 'veg', 'Dessert/Cakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/8.jpg'),
(9, 'Black Forest Cake', '320', 'veg', 'Dessert/Cakes', 'Specials', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/9.jpg'),
(10, 'Chocolate Brownies', '150', 'veg', 'Dessert/Cakes', 'Specials', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/10.jpg'),
(11, 'Rock Road Pastry', '55', 'nonveg', 'Dessert/Cakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/11.jpg'),
(12, 'Rainbow Muffins', '60', 'veg', 'Dessert/Cakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/12.jpg'),
(13, 'Loaded Fries', '85', 'veg', 'Italian', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/13.jpg'),
(14, 'Choco Lava Cake', '99', 'veg', 'Dessert/Cakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/14.jpg'),
(15, 'Cold Coffee', '120', 'veg', 'Beverage/Shakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/15.jpg'),
(16, 'Chocolate Shake', '90', 'veg', 'Beverage/Shakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/16.jpg'),
(17, 'Vanilla Shake', '70', 'veg', 'Beverage/Shakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/17.jpg'),
(18, 'Iced Tea', '55', 'veg', 'Beverage/Shakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/18.jpg'),
(19, 'Swiss Roll', '60', 'nonveg', 'Dessert/Cakes', 'Specials', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/19.jpg'),
(20, 'Butter Chicken', '220', 'nonveg', 'Indian', 'Dinner', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/20.jpg'),
(21, 'Shahi Paneer', '250', 'veg', 'Indian', 'Dinner', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/21.jpg'),
(22, 'Chicken Biryani', '180', 'nonveg', 'Indian', 'Lunch', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/22.jpg'),
(23, 'Chole Bhature', '110', 'veg', 'Indian', 'Lunch', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/23.jpg'),
(24, 'Chicken Roll', '80', 'nonveg', 'Indian', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/24.jpg'),
(25, 'Veg Roll', '65', 'veg', 'Chinese', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/25.jpg'),
(26, 'Chicken Tikka', '200', 'nonveg', 'Indian', 'Dinner', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/26.jpg'),
(27, 'Paneer Tikka', '180', 'veg', 'Indian', 'Dinner', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/27.jpg'),
(28, 'Poha', '60', 'veg', 'Indian', 'Breakfast', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/28.jpg'),
(29, 'Pancakes', '120', 'veg', 'Mexican', 'Breakfast', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/29.jpg'),
(30, 'Noodles', '120', 'veg', 'Chinese', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/30.jpg'),
(31, 'Egg Breakfast', '45', 'nonveg', 'Indian', 'Breakfast', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/31.jpg'),
(32, 'White Pasta', '135', 'veg', 'Italian', 'Lunch', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/32.jpg'),
(33, 'Red Sauce Pasta', '140', 'veg', 'Italian', 'Lunch', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/37.jpg'),
(34, 'Hot Coffee', '130', 'veg', 'Beverage/Shakes', 'Snack', 'http://localhost/OnlineFoodOrdering/project/SSFood/admin/uploads/38.jpg');
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
CREATE TABLE `orders` ( 
`order_id` INT NOT NULL , 
`user_name` VARCHAR(30) NOT NULL , 
`user_email` VARCHAR(30) NOT NULL , 
`user_phone` INT NOT NULL , 
`user_address` VARCHAR(45) NOT NULL , 
`food_id` TEXT NOT NULL , 
`payment_status` VARCHAR(10) NOT NULL DEFAULT 'Pending' 
) ENGINE = InnoDB DEFAULT CHARSET=latin1; 


-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
 `email_verify` varchar(15) NOT NULL,
  `user_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `buynow`
--
ALTER TABLE `buynow`
  ADD PRIMARY KEY (`buy_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buynow`
--
ALTER TABLE `buynow`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
