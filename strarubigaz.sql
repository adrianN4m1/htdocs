-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 02:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strarubigazv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `full_address` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `full_address`, `user_id`, `branch_type`) VALUES
(1, 'Main Branch', '140 Loyola St., Pasig City, Metro Manila', 2, 1),
(2, 'Quezon City', '34 Quezon Avenue, Quezon City, Metro Manila', 16, 1),
(3, 'Pasay City', '420 A. Apolinario, Pasay City, Metro Manila', 17, 1),
(4, 'Biñan', 'CALAX - Greenfield Parkway Exit', 18, 1),
(5, 'San Pedro', '20 Pacita Avenue, San Pedro City, Laguna', 20, 1),
(6, 'Cebu', '11 Mangubat St., Mactan, Cebu', 19, 1),
(7, 'test', 'test', NULL, 0),
(8, 'adu', 'asda', NULL, 1),
(9, 'kjhk', 'jh', NULL, 1),
(10, 'test', 'test', 79, 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch_customer`
--

CREATE TABLE `branch_customer` (
  `Bcust_ID` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Bcst_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='branch_customer';

--
-- Dumping data for table `branch_customer`
--

INSERT INTO `branch_customer` (`Bcust_ID`, `branch_id`, `user_id`, `Bcst_type`) VALUES
(1, 1, 51, 1),
(2, 1, 52, 1),
(3, 1, 53, 1),
(4, 1, 54, 0),
(5, 2, 55, 1),
(6, 2, 56, 1),
(7, 2, 57, 1),
(8, 2, 58, 1),
(9, 3, 59, 1),
(10, 3, 60, 1),
(11, 3, 61, 1),
(12, 3, 62, 1),
(13, 4, 63, 1),
(14, 4, 64, 1),
(15, 4, 65, 1),
(16, 4, 66, 1),
(17, 5, 67, 1),
(18, 5, 68, 1),
(19, 5, 69, 1),
(20, 5, 70, 1),
(21, 5, 71, 0),
(22, 1, 72, 0),
(23, 2, 74, 0),
(24, 1, 75, 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `expense_type` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `Inv_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `product_id`, `quantity`, `Inv_Type`) VALUES
(1, 1, 1000, 0),
(2, 2, 1, 1),
(3, 3, 6969, 1),
(4, 4, 99999999, 1),
(5, 5, 24, 1),
(6, 6, 24, 1),
(7, 7, 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','In Progress','Completed','Cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `Prod_type` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `Product_Type` int(11) NOT NULL,
  `base_price` decimal(10,2) DEFAULT NULL,
  `prod_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `Prod_type`, `price`, `supplier_id`, `expiration_date`, `Product_Type`, `base_price`, `prod_image`) VALUES
(1, 'DAD', 'Diesel', 1550.00, 202400112, '0000-00-00', 1, 40.90, '416008438_2697363370425187_4118653189230528044_n.jpg'),
(2, 'Karldereta', 'Diesel', 68.09, 202400112, '0000-00-00', 1, 40.90, '423105885_2147249585623914_3143380331863502220_n.jpg'),
(3, 'Sevy', 'Diesel', 68.09, 202400112, '0000-00-00', 1, 40.90, '423541780_1085905049343969_6808135332460782536_n.jpg'),
(4, 'LORD ISRAEL', 'Diesel', 68.09, 202400112, '0000-00-00', 1, 40.90, '430409393_943180997469614_7509784515726083412_n.jpg'),
(5, '', 'Diesel', 68.09, 202400112, '0000-00-00', 1, 40.90, '96276354_2705802066212650_504183324659417088_n.jpg'),
(6, '', 'Diesel', 68.09, 202400112, '0000-00-00', 1, 40.90, '423541780_1085905049343969_6808135332460782536_n.jpg'),
(7, '', 'test', 1.00, 202400125, '0000-00-00', 1, 1.00, '416008438_2697363370425187_4118653189230528044_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchases`
--

CREATE TABLE `product_purchases` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `points_earned` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `reward_id` int(11) NOT NULL,
  `reward_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `point_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reward_claims`
--

CREATE TABLE `reward_claims` (
  `claim_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `reward_id` int(11) DEFAULT NULL,
  `points_redeemed` int(11) NOT NULL,
  `claim_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `Spplr_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `contact_name`, `email`, `phone_number`, `address`, `Spplr_type`) VALUES
(202400111, 'israel', 'Optimus', 'Optimus@gmail,com', '9123456891', 'test', 0),
(202400112, 'test', 'test', 'test@gmail,com', '123544564', 'e rod', 1),
(202400113, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '42 San Miguel Avenue. 1550 Mandaluyong City', 1),
(202400114, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '43 San Miguel Avenue. 1550 Mandaluyong City', 1),
(202400115, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '44 San Miguel Avenue. 1550 Mandaluyong City', 1),
(202400116, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 1),
(202400117, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 1),
(202400118, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 1),
(202400119, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 1),
(202400120, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 1),
(202400121, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400122, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400123, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400124, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400125, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400126, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400127, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400128, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400129, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400130, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400131, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400132, '', '', '', '', '', 0),
(202400133, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `reward_id` int(11) DEFAULT NULL,
  `transaction_type` enum('Purchase','Redeem') NOT NULL,
  `points` int(11) NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Super Admin','Admin','Customer') NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `email`, `phone_number`, `user_type`) VALUES
(1, 'username', 'password', '', 'email', 'phone_number', 0),
(2, 'BJ Angeles', '!admin123', 'Super Admin', 'Sadmin@gmail.com', '9391386488', 1),
(16, 'Adrian Mones', '!adrian123', 'Admin', 'admin.adrian@gmail.com', '9391386488', 1),
(17, 'Israel Breta', '!israel123', 'Admin', 'admin.israel@gmail.com', '9997126384', 1),
(18, 'Sev Constantino', '!sev123', 'Admin', 'admin.israel@gmail.com', '9871623712', 1),
(19, 'Karl Catalan', '!karl123', 'Admin', 'admin.karl@gmail.com', '9126739110', 1),
(20, 'John Doe', '!John123', 'Admin', 'admin.john@gmail.com', '9271247883', 1),
(51, 'Miguel Manabat', 'manabat432.', 'Customer', 'miguel.manabat21@gmail.com', '9371222110', 1),
(52, 'Angelica Ruiz', 'iamanangel123', 'Customer', 'angelicar@gmail.com', '9131492880', 1),
(53, 'Anne Abalos', 'annewithane333', 'Customer', 'anneabalos0110@gmail.com', '9943134920', 1),
(54, 'Rianna Maniego', '3219.Lovely', 'Customer', 'riannamaniego24@gmail.com', '9927213211', 0),
(55, 'Lorenzo Corpuz', 'ilovemiatacarS12', 'Customer', 'lorenzo.cpz@gmail.com', '9234726182', 1),
(56, 'Lawrence Diaz', 'Rence8989', 'Customer', 'lawrence.lawrence@gmail.com', '9182734912', 1),
(57, 'Drew Reyes', 'drewr4621', 'Customer', 'drew_reyes411@gmail.com', '9271623481', 1),
(58, 'Sam Yu', 'sam1special00', 'Customer', 'samyuarefine@gmail.com', '9275492714', 1),
(59, 'Carol Reed', 'TWDcarol65', 'Customer', 'carol.deer@gmail.com', '9277548293', 1),
(60, 'Victor Clemente', 'VictorVC7', 'Customer', 'victorclemente720@gmail.com', '9204726166', 1),
(61, 'Samuel Manuel', 'Samueleunam88', 'Customer', 'samuelm42@gmail.com', '9155358230', 1),
(62, 'Christine Reyes', 'CHR.apple123', 'Customer', 'chrstnrys102@gmail.com', '9370021952', 1),
(63, 'Paul Pinto', '120621pprun', 'Customer', 'paulpin2@gmail.com', '9775182621', 1),
(64, 'Jake Flores', 'ilikesnakesZZ00', 'Customer', 'jake_flores20@gmail.com', '9195434622', 1),
(65, 'Aliyah Sotto', 'ahnanihh3242', 'Customer', 'aliyahsotto09@gmail.com', '9196447207', 1),
(66, 'Maverick Vegas', 'Mbydck72', 'Customer', 'mavedck72@gmail.com', '9726528226', 1),
(67, 'Matthew Hermi', 'manofronin720', 'Customer', 'matthew.hermi@gmail.com', '9277254596', 1),
(68, 'Ethan Garcia', 'caesar92', 'Customer', 'ethanethang@gmail.com', '9278927552', 1),
(69, 'Juana Capiz', 'allithinkaboutisu123', 'Customer', 'jcapiz435@gmail.com', '9198750982', 1),
(70, 'Maloi Rellosa', 'chicken.feet72', 'Customer', 'maloifree@gmail.com', '9727798002', 1),
(71, 'test test', '123', 'Customer', 'test@gmail.com', 'test', 0),
(72, 'test test', '123', 'Customer', 'test@gmail.com', 'test', 0),
(73, 'root', '123', 'Admin', 'Sadmin@gmail.com', '09391386488', 0),
(74, 'ets test', '123', 'Customer', 'asda2@gmail.com', '12312', 0),
(75, 'asd Mones', '123', 'Customer', 'sevyo@gmail.com', '09812731', 0),
(76, 'root', '123', 'Admin', 'sevyo@gmail.com', '09391386488', 0),
(77, 'root', '123', 'Admin', 'Sadmin@gmail.com', '09391386488', 0),
(78, 'Ralph Adrian Mones', '123', 'Admin', 'sevyo@gmail.com', '09391386488', 0),
(79, 'test test', '123', 'Admin', 'test@gmail.com', '123445', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `branch_customer`
--
ALTER TABLE `branch_customer`
  ADD PRIMARY KEY (`Bcust_ID`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_purchases`
--
ALTER TABLE `product_purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indexes for table `reward_claims`
--
ALTER TABLE `reward_claims`
  ADD PRIMARY KEY (`claim_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branch_customer`
--
ALTER TABLE `branch_customer`
  MODIFY `Bcust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_purchases`
--
ALTER TABLE `product_purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reward_claims`
--
ALTER TABLE `reward_claims`
  MODIFY `claim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202400134;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
