-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 01:31 PM
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
(6, 'test', 'test', 19, 1),
(7, 'test', 'test', NULL, 0),
(8, 'adu', 'asda', NULL, 0),
(9, 'kjhk', 'jh', NULL, 0),
(10, 'test', 'test', NULL, 0),
(11, 'test', 'test', NULL, 0),
(12, 'test', 'test', NULL, 0),
(13, 'test', 'sd\r\n', NULL, 0),
(14, 'test', '', NULL, 0),
(15, 'test', '\r\n', NULL, 0),
(16, 'sd', 'asd', NULL, 0),
(17, 'test', '', NULL, 0),
(18, 'test', '', NULL, 0),
(19, 'test', '', NULL, 0),
(20, 'test', '', NULL, 0),
(21, 'test', '', NULL, 0),
(22, 'test', 'sd', NULL, 0),
(23, 'last', '', NULL, 0),
(24, 'test', '', NULL, 0),
(25, 'test', '', NULL, 0),
(26, 'adu', '', NULL, 0),
(27, 'test', '', NULL, 0),
(28, 'test', '', NULL, 0),
(29, 'd', '', NULL, 0),
(30, 'd', '', NULL, 0),
(31, 'b', '', NULL, 0),
(32, 'adu', '', NULL, 0),
(33, 'test', '', NULL, 1);

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
(24, 1, 75, 0),
(25, 1, 80, 1),
(26, 1, 81, 1),
(27, 2, 86, 0),
(28, 2, 87, 0),
(29, 2, 88, 0),
(30, 2, 89, 0),
(31, 2, 90, 0),
(32, 2, 91, 0),
(33, 2, 92, 1),
(34, 2, 93, 1),
(35, 2, 94, 1);

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
(2, 2, 1, 0),
(3, 3, 5987, 1),
(4, 4, 99999999, 0),
(5, 5, 24, 0),
(6, 6, 67, 1),
(7, 7, 10000, 0),
(8, 8, 555, 0),
(9, 9, 999, 0),
(10, 10, 110, 1),
(11, 11, 2020, 0),
(12, 12, 456, 1),
(13, 13, 696, 1),
(14, 14, 6564, 1),
(15, 15, 999, 1);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `branch_id`, `order_date`, `status`) VALUES
(11, 51, 1, '2024-04-15 07:09:08', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(22, 11, 14, 1, 56.00),
(23, 11, 12, 2, 20.00),
(24, 11, 3, 1, 70.00);

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
  `base_price` decimal(10,2) DEFAULT NULL,
  `prod_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `Prod_type`, `price`, `supplier_id`, `expiration_date`, `base_price`, `prod_image`) VALUES
(1, 'DAD', 'Diesel', 1550.00, 202400112, '0000-00-00', 40.90, '416008438_2697363370425187_4118653189230528044_n.jpg'),
(2, 'Karldereta', 'Diesel', 68.09, 202400112, '0000-00-00', 40.90, '423105885_2147249585623914_3143380331863502220_n.jpg'),
(3, 'isma', 'tao', 70.00, 202400112, '2025-10-30', 50.90, '430409393_943180997469614_7509784515726083412_n.jpg'),
(4, 'LORD ISRAEL', 'Diesel', 68.09, 202400112, '0000-00-00', 40.90, '96276354_2705802066212650_504183324659417088_n.jpg'),
(5, 'dad', 'Diesel', 68.09, 202400112, '0000-00-00', 40.90, '423541780_1085905049343969_6808135332460782536_n.jpg'),
(6, 'dad', 'Diesel', 68.09, 202400112, '2024-01-01', 40.90, '416008438_2697363370425187_4118653189230528044_n.jpg'),
(7, 'kiwi', 'test', 1.00, 202400125, '0000-00-00', 1.00, 'Screenshot 2023-07-27 204515.png'),
(8, 'lechon', 'kawali', 1000.00, 202400112, '2025-12-02', 2000.00, 'Screenshot 2023-08-22 204336.png'),
(9, 'ang ate', 'breta', 78.00, 202400117, '0000-00-00', NULL, 'Screenshot 2023-11-02 224602.png'),
(10, 'SEV', 'CONSTANTINO', 69.00, 202400125, '2020-02-12', 59.00, '423541780_1085905049343969_6808135332460782536_n.jpg'),
(11, 'test', 'asda', 231.00, 202400135, '0000-00-00', 2000.00, 'Screenshot 2023-07-05 185624.png'),
(12, 'Kiwi', 'DOg', 20.00, 202400135, '0000-00-00', 500.00, 'Screenshot 2023-07-27 204515.png'),
(13, 'ANG ATE', 'asd', 62.00, 202400121, '2025-05-13', 22.00, 'Screenshot 2023-11-02 224602.png'),
(14, 'KARL', 'asdas', 56.00, 202400121, '2024-12-12', 56.00, '423105885_2147249585623914_3143380331863502220_n.jpg'),
(15, '', 'Diesel', 68.09, 202400121, '0000-00-00', 40.90, '96276354_2705802066212650_504183324659417088_n.jpg');

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
  `point_value` int(11) NOT NULL,
  `reward_image` varchar(255) DEFAULT NULL,
  `reward_qty` int(11) NOT NULL,
  `reward_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`reward_id`, `reward_name`, `description`, `point_value`, `reward_image`, `reward_qty`, `reward_type`) VALUES
(2, 'test', 'test', 123, 'william-daigneault-oWrZoAVOBS0-unsplash.jpg', 1230, 0),
(3, 'test', 'tite tes', 2, 'Nitro_Wallpaper_03_3840x2400.jpg', 2, 1),
(4, 'test', 'test\r\n', 89, 'Nitro_Wallpaper_07_3840x2400.jpg', 1000, 0),
(5, 'test', 'test', 12, 'Screenshot 2023-05-10 093203.png', 3123, 1);

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
(202400112, 'aken', 'test', 'test@gmail,com', '123544564', 'test', 0),
(202400113, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '42 San Miguel Avenue. 1550 Mandaluyong City', 0),
(202400114, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '43 San Miguel Avenue. 1550 Mandaluyong City', 0),
(202400115, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '44 San Miguel Avenue. 1550 Mandaluyong City', 0),
(202400116, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400117, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'test', 0),
(202400118, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400119, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400120, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400121, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'test\n', 1),
(202400122, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400123, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400124, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400125, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400126, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400127, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400128, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400129, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 0),
(202400130, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 0),
(202400131, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 0),
(202400132, '', '', '', '', '', 0),
(202400133, '', '', '', '', '', 0),
(202400134, 'tets', 'test', 'tetst@gmail.com', '123', 'aosjdla', 0),
(202400135, 'test', 'test', 'test@gmail.com', '982312', 'lasdkjsla', 1);

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
  `user_reward_pts` decimal(10,2) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `email`, `phone_number`, `user_reward_pts`, `user_type`) VALUES
(1, 'username', 'password', '', 'email', 'phone_number', NULL, 0),
(2, 'BJ Angeles', '!admin123', 'Super Admin', 'Sadmin@gmail.com', '9391386488', NULL, 1),
(16, 'Adrian Mones', '!adrian123', 'Admin', 'admin.adrian@gmail.com', '9391386488', NULL, 1),
(17, 'Israel Breta', '!israel123', 'Admin', 'admin.israel@gmail.com', '9997126384', NULL, 1),
(18, 'Sev Constantino', '!sev123', 'Admin', 'admin.israel@gmail.com', '9871623712', NULL, 1),
(19, 'Karl Catalan', '!karl123', 'Admin', 'admin.karl@gmail.com', '9126739110', NULL, 1),
(20, 'John Doe', '!John123', 'Admin', 'admin.john@gmail.com', '9271247883', NULL, 1),
(51, 'Miguel Manabat', 'manabat432', 'Customer', 'miguel.manabat21@gmail.com', '9371222110', 50.00, 1),
(52, 'Angelica Ruiz', 'iamanangel123', 'Customer', 'angelicar@gmail.com', '9131492880', 50.00, 1),
(53, 'Anne Abalos', 'annewithane333', 'Customer', 'anneabalos0110@gmail.com', '9943134920', NULL, 1),
(54, 'Rianna Maniego', '3219.Lovely', 'Customer', 'riannamaniego24@gmail.com', '9927213211', NULL, 0),
(55, 'Lorenzo Corpuz', 'ilovemiatacarS12', 'Customer', 'lorenzo.cpz@gmail.com', '9234726182', NULL, 1),
(56, 'Lawrence Diaz', 'Rence8989', 'Customer', 'lawrence.lawrence@gmail.com', '9182734912', NULL, 1),
(57, 'Drew Reyes', 'drewr4621', 'Customer', 'drew_reyes411@gmail.com', '9271623481', NULL, 1),
(58, 'Sam Yu', 'sam1special00', 'Customer', 'samyuarefine@gmail.com', '9275492714', NULL, 1),
(59, 'Carol Reed', 'TWDcarol65', 'Customer', 'carol.deer@gmail.com', '9277548293', NULL, 1),
(60, 'Victor Clemente', 'VictorVC7', 'Customer', 'victorclemente720@gmail.com', '9204726166', NULL, 1),
(61, 'Samuel Manuel', 'Samueleunam88', 'Customer', 'samuelm42@gmail.com', '9155358230', NULL, 1),
(62, 'Christine Reyes', 'CHR.apple123', 'Customer', 'chrstnrys102@gmail.com', '9370021952', NULL, 1),
(63, 'Paul Pinto', '120621pprun', 'Customer', 'paulpin2@gmail.com', '9775182621', NULL, 1),
(64, 'Jake Flores', 'ilikesnakesZZ00', 'Customer', 'jake_flores20@gmail.com', '9195434622', NULL, 1),
(65, 'Aliyah Sotto', 'ahnanihh3242', 'Customer', 'aliyahsotto09@gmail.com', '9196447207', NULL, 1),
(66, 'Maverick Vegas', 'Mbydck72', 'Customer', 'mavedck72@gmail.com', '9726528226', NULL, 1),
(67, 'Matthew Hermi', 'manofronin720', 'Customer', 'matthew.hermi@gmail.com', '9277254596', NULL, 1),
(68, 'Ethan Garcia', 'caesar92', 'Customer', 'ethanethang@gmail.com', '9278927552', NULL, 1),
(69, 'Juana Capiz', 'allithinkaboutisu123', 'Customer', 'jcapiz435@gmail.com', '9198750982', NULL, 1),
(70, 'Maloi Rellosa', 'chicken.feet72', 'Customer', 'maloifree@gmail.com', '9727798002', NULL, 1),
(71, 'test test', '123', 'Customer', 'test@gmail.com', 'test', NULL, 0),
(72, 'test test', '123', 'Customer', 'test@gmail.com', 'test', NULL, 0),
(73, 'root', '123', 'Admin', 'Sadmin@gmail.com', '09391386488', NULL, 0),
(74, 'ets test', '123', 'Customer', 'asda2@gmail.com', '12312', NULL, 0),
(75, 'asd Mones', '123', 'Customer', 'sevyo@gmail.com', '09812731', NULL, 0),
(76, 'root', '123', 'Admin', 'sevyo@gmail.com', '09391386488', NULL, 0),
(77, 'root', '123', 'Admin', 'Sadmin@gmail.com', '09391386488', NULL, 0),
(78, 'Ralph Adrian Mones', '123', 'Admin', 'sevyo@gmail.com', '09391386488', NULL, 0),
(79, 'test test', '123', 'Admin', 'test@gmail.com', '123445', NULL, 0),
(80, 'anong@gmail.com asd', '123', 'Customer', 'asda@gmail.com', '2131', NULL, 1),
(81, 'asd sd', '123', 'Customer', 'asdasdas@gmail.com', '123', NULL, 1),
(82, 'test test', '123', 'Admin', 'test@gmail.com', '0971923', NULL, 0),
(83, 'Ralph Adrian Mones', '123', 'Admin', 'sevyo@gmail.com', '09391386488', NULL, 0),
(84, 'test test', '123', 'Customer', 's@gmail.com', '097212', NULL, 1),
(85, ' ', '123', 'Customer', '', '', NULL, 1),
(86, 'test test', '123', 'Customer', 'test@gmail.com', '0872813', NULL, 0),
(87, 'test test', '123', 'Customer', 'test@gmail.com', '817293812', NULL, 0),
(88, 'test test', '123', 'Customer', 'test@gmail.com', 'test', NULL, 0),
(89, 'test test', '123', 'Customer', 'test@gmail.com', '127931', NULL, 0),
(90, 'test test', '123', 'Customer', 'test@gmail.com', '0981273', NULL, 0),
(91, 'asd test', '123', 'Customer', 'rlph12mones@gmail.com', '09982393', NULL, 0),
(92, 'test test', '123', 'Customer', 'test@gmail.com', '099283293', 50.00, 1),
(93, 'mamama test', '123', 'Customer', 'mama@gmail.com', '9234892', NULL, 1),
(94, 'Last Test', '123', 'Customer', 'last@gmail.com', '082738273', 50.00, 1);

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
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `branch_customer`
--
ALTER TABLE `branch_customer`
  MODIFY `Bcust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_purchases`
--
ALTER TABLE `product_purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reward_claims`
--
ALTER TABLE `reward_claims`
  MODIFY `claim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202400136;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
