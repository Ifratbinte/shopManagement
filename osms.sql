-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 07:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyingprice`
--

CREATE TABLE `buyingprice` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Buying_Price_Lot` double NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Buying_Price` double NOT NULL,
  `Employee_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyingprice`
--

INSERT INTO `buyingprice` (`Id`, `Product_Id`, `Buying_Price_Lot`, `Date_Time`, `Quantity`, `Buying_Price`, `Employee_Id`) VALUES
(1, 4, 500, '0000-00-00 00:00:00', 2, 250, 1),
(2, 2, 400, '2019-04-12 14:01:00', 10, 40, 1),
(3, 4, 500, '0000-00-00 00:00:00', 2, 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Product_Id`, `Customer_Id`, `Quantity`, `Date_Time`) VALUES
(40, 2, 4, 9, '2020-01-06 16:36:10'),
(41, 1, 4, 10, '2020-01-06 16:36:19'),
(42, 6, 4, 1, '2020-01-07 23:29:07'),
(43, 5, 4, 1, '2020-01-07 23:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `Description`, `img_path`) VALUES
(1, 'Cloths', 'Discover an exclusive range of ladies dresses, party wear dresses, western dresses for women on our webstore.', 'img/assorted-blurred-background-boutique-994523.jpg'),
(2, 'Foods', ' A vast number of foods are both healthy and tasty. By filling your plate with fruits, vegetables, quality protein', 'img/asparagus-barbecue-bbq-675951.jpg'),
(3, 'Kids zone', 'Buy kids dresses online in india. Shop for latest trendy dresses for kids from fresh collection at Myntra.', 'img/adorable-baby-beautiful-35188.jpg'),
(4, 'Electronic Gadgets', 'Quality Electronic Gadgets with Competitive Price. Safe Trading Electronic Gadgets Leading  Platform', 'img/computer-keyboard-connection-contemporary-2585916.jpg'),
(26, 'Health & Beauty', 'H&B manufacture, market and export top quality skin, body and hair care products all over the world', 'img/makeup_brush\r\n.jpg'),
(27, 'Babies & Toys', 'Check out our entire collection of Fisher-Price® infant and baby toys for boys and girls', 'img/car.jpg'),
(28, 'Watch & Accessories', 'Shop for the best watch accessories including all kinds of watch band, watch, watch screen protector', 'img/watch.jpg'),
(30, 'Shoe', 'its a shoe type something', 'img/product/cloth/man_shoe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ZipCode` int(11) NOT NULL,
  `Join_Date` datetime NOT NULL,
  `Login_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Email`, `Phone`, `Address`, `ZipCode`, `Join_Date`, `Login_Id`) VALUES
(1, 'Shawn Joy', 'shawn@gmail.com', 16888888, 'lalmai,cumilla', 3500, '2019-08-21 09:00:00', 2),
(2, 'asdf', 'qwque', 12345, 'info', 3500, '2019-03-22 00:00:00', 8),
(3, 'asg', 'ing', 12345, 'asghds', 3500, '2019-02-03 00:00:00', 9),
(4, 'kew na', 'kew@gmail.com', 420, 'nai', 3500, '2016-11-21 00:00:00', 23),
(5, 'hahaha', 'haha@gmail.com', 321, 'nai', 3500, '2019-09-16 00:00:00', 24),
(6, 'Ifrat', 'ifrat@gmail.com', 1831305640, 'Cumilla', 0, '2020-01-07 00:00:00', 31);

-- --------------------------------------------------------

--
-- Stand-in structure for view `customerlogin`
-- (See below for the actual view)
--
CREATE TABLE `customerlogin` (
`Id` int(11)
,`Name` varchar(20)
,`Email` varchar(30)
,`Phone` int(11)
,`Address` varchar(50)
,`Join_Date` datetime
,`Login_Id` int(11)
,`User_Name` varchar(40)
,`Password` varchar(30)
,`Type` varchar(20)
,`Status` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Join_Date` datetime NOT NULL,
  `Salary` int(11) NOT NULL,
  `Login_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `Name`, `Email`, `Phone`, `Address`, `Join_Date`, `Salary`, `Login_Id`) VALUES
(1, 'Mahibul Islam', 'mahibulislam404@gmail.com', 1832545802, 'Bissawroad,Comilla', '2019-08-21 09:00:00', 50000, 1),
(2, 'Taslimul Islam', 'taslimulislam4004@gmail.com', 1865425856, 'bissawroad, comilla', '2019-08-15 09:00:00', 50000, 3),
(3, 'abul mia', 'abul@gmail.com', 1234567878, 'uganda', '2000-02-01 00:00:00', 600, 17),
(4, 'Ifrat', 'info@gmail.com', 12345, 'asd', '2019-01-02 00:00:00', 122, 18),
(5, 'Ifrat', 'info@gmail.com', 123, 'asd', '2019-02-03 00:00:00', 123, 19),
(6, 'Ifrat', 'info@gmail.com', 12345, 'uganda', '2122-02-11 00:00:00', 122, 20),
(7, 'hdbxjhsa', 'jagshwas', 123213, 'dsds', '1012-02-12 00:00:00', 123213, 21),
(8, 'w2e', 'qewew', 1232, 'sdsf', '3232-12-02 00:00:00', 12313, 22);

-- --------------------------------------------------------

--
-- Stand-in structure for view `employeelogin`
-- (See below for the actual view)
--
CREATE TABLE `employeelogin` (
`Id` int(11)
,`Name` varchar(40)
,`Email` varchar(50)
,`Phone` int(11)
,`Address` varchar(100)
,`Join_Date` datetime
,`Salary` int(11)
,`Login_Id` int(11)
,`User_Name` varchar(40)
,`Password` varchar(30)
,`Type` varchar(20)
,`Status` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Id` int(11) NOT NULL,
  `Employee_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Id`, `Employee_Id`, `Customer_Id`, `Date_Time`, `Total_Price`, `Status`) VALUES
(1, 1, 1, '2019-08-22 09:00:08', 200, 'packaging');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `User_Name` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `User_Name`, `Password`, `Type`, `Status`) VALUES
(1, 'Mahibul Islam', 'mahibul28', 'ADMIN', 'ACTIVE'),
(2, 'Shawn Joy', '12345', 'user', 'ACTIVE'),
(3, 'Taslimul Islam', '12345', 'ADMIN', 'ACTIVE'),
(4, 'admin', '111', 'user', 'ACTIVE'),
(5, 'abul', 'asdd', 'customer', 'ACTIVE'),
(6, 'mnbm', '123', 'customer', 'ACTIVE'),
(7, 'mnbm', '123', 'customer', 'ACTIVE'),
(8, 'mnbm', '123', 'customer', 'ACTIVE'),
(9, 'sdhjks', 'ksdjks', 'customer', 'ACTIVE'),
(10, '', '123', 'employee', 'ACTIVE'),
(11, 'ifrat', '123', 'employee', 'ACTIVE'),
(12, 'ifrat', '111', 'employee', 'ACTIVE'),
(13, 'ifrat', '111', 'employee', 'ACTIVE'),
(14, 'ifrat', '123', 'employee', 'ACTIVE'),
(15, 'ifrat', '123', 'employee', 'ACTIVE'),
(16, 'abul', '12345', 'employee', 'ACTIVE'),
(17, 'abul', '12345', 'user', 'ACTIVE'),
(18, 'ifrat', '1235', 'admin', 'ACTIVE'),
(19, 'ifrat', '1233', 'user', 'ACTIVE'),
(20, 'ifrat', 'ksdjks', 'user', 'ACTIVE'),
(21, 'dsd', '1231', 'admin', 'ACTIVE'),
(22, 'def', 'dwef', 'user', 'ACTIVE'),
(23, 'hudai', '123', '', 'ACTIVE'),
(24, 'nai', '1111', 'user', 'ACTIVE'),
(25, 'fancy', '12345', 'admin', 'ACTIVE'),
(26, 'fancyi', '12345', 'admin', 'ACTIVE'),
(27, 'fancil', '12345', 'admin', 'ACTIVE'),
(28, 'alu', '1234555', 'admin', 'ACTIVE'),
(29, 'a', 'a', 'admin', 'ACTIVE'),
(30, 'asd', '123qwe', 'user', 'ACTIVE'),
(31, 'ifratbinte', '123', 'user', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Invoice_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`Id`, `Product_Id`, `Customer_Id`, `Quantity`, `Price`, `Total_Price`, `Invoice_Id`) VALUES
(1, 1, 1, 2, 200, 400, 1),
(2, 3, 1, 5, 100, 500, 1),
(3, 3, 5, 5, 100, 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Buying_Price` float NOT NULL,
  `Selling_Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Sub_Category_Id` int(11) NOT NULL,
  `img_path` varchar(1000) DEFAULT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Buying_Price`, `Selling_Price`, `Quantity`, `Status`, `Description`, `Sub_Category_Id`, `img_path`, `Date_Time`) VALUES
(1, 'Long Kurti', 3000, 4000, 10, 'popular', 'Buy Formal Suits & Blazers for men online at lowest prices', 3, 'img/product/cloth/women1.jpg', '0000-00-00 00:00:00'),
(2, 'Laptop', 60000, 70000, 5, 'popular', 'Laptop Mag reviews and benchmarks the latest laptops', 9, 'productImg/subcategory/apple.jpg', '0000-00-00 00:00:00'),
(3, 'Biscuit', 600, 700, 7, 'recent', 'Butter Cookies ', 2, 'productImg/subcategory/biscuit.jpg', '0000-00-00 00:00:00'),
(4, 'Headset', 1500, 2000, 10, 'available', 'Here\'s our list of the 15 best PC gaming headsets we\'ve tested', 12, 'productImg/subcategory/headset.jpg', '0000-00-00 00:00:00'),
(5, 'sharee', 1000, 1200, 1, 'popular', 'Buy from a wide range of sharee & sharee online from Shoppers Stop. Order today', 3, 'img/product/cloth/women3.jpg', '0000-00-00 00:00:00'),
(6, 'Watch', 500, 700, 2, 'available', 'Branded watches have their own charm', 1, 'productImg/subcategory/man_watch.jpg', '0000-00-00 00:00:00'),
(7, 'Shari', 1500, 2000, 10, 'popular', 'Indian Jorjet', 3, 'productImg/subcategory/ladies_wedding_dress.jpg', '0000-00-00 00:00:00'),
(9, 'Juice', 400, 550, 6, 'available', 'Mango Juice', 4, 'productImg/subcategory/juice.jpg', '0000-00-00 00:00:00'),
(10, 'Oil', 100, 150, 3, 'popular', 'Olive oil', 4, 'productImg/subcategory/olive_oil.jpg', '0000-00-00 00:00:00'),
(11, 'Chocolate', 400, 600, 6, 'recent', 'Dark katbery ', 10, 'productImg/subcategory/chocolate.jpg', '0000-00-00 00:00:00'),
(12, 'Suiter', 1500, 2200, 10, 'available', 'Baby switer', 7, 'productImg/subcategory/baby_dress.jpg', '0000-00-00 00:00:00'),
(13, 'Shoe', 200, 300, 4, 'available ', 'Baby shoe', 7, 'productImg/subcategory/baby_shoe.jpg', '0000-00-00 00:00:00'),
(14, 'Car', 400, 550, 5, 'available', 'car', 8, 'productImg/subcategory/car.jpg', '0000-00-00 00:00:00'),
(15, 'Hat', 500, 580, 3, 'recent', 'Baby Hat', 8, 'productImg/subcategory/kids_hat.jpg', '0000-00-00 00:00:00'),
(16, 'Hair Bent', 100, 150, 10, 'available', 'Hair baby bent', 11, 'productImg/subcategory/baby_sweeter.jpg', '0000-00-00 00:00:00'),
(17, 'Doll', 300, 400, 3, 'recent', 'Plastic Doll', 11, 'productImg/subcategory/doll.jpg', '0000-00-00 00:00:00'),
(18, 'I_phone', 15000, 17000, 8, 'popular', 'I_phone phone', 6, 'productImg/subcategory/i_phone.jpg', '0000-00-00 00:00:00'),
(19, 'Blooth Speaker', 1500, 2000, 10, 'available', 'Speaker', 12, 'productImg/subcategory/mini_speaker.jpg', '0000-00-00 00:00:00'),
(20, 'Juice', 100, 100, 2, 'popular', 'Orange Juice', 2, 'img/product/food/juice.jpg', '0000-00-00 00:00:00'),
(23, 'Chocolate Pestry ', 100, 120, 5, 'popular', 'flowers', 2, 'img/product/food/s1.jpg', '0000-00-00 00:00:00'),
(24, 'Jeens', 700, 800, 4, 'avaliable', 'Discover the meaning of the Jeens name on Ancestry®. Find your family\'s average life expectancy', 1, 'img/product/cloth/P0.jpg', '0000-00-00 00:00:00'),
(25, 'Black Suit', 4000, 4500, 2, 'avaliable', 'Tailored finesse meets technical craftsmanship. “SUIT” is a true example of when two apparel industries', 1, 'img/product/suitt.jpg', '0000-00-00 00:00:00'),
(26, 'Frok', 700, 900, 4, 'avaliable', 'A Baby Frock Should Be Functional\r\nCreation and Trendyy Girls, bring to you baby dresses that are not only stylish,', 14, 'img/product/kids/baby1.jpg', '0000-00-00 00:00:00'),
(27, 'Scart', 500, 600, 8, 'avaliable', 'Kids Dress Wear, Kids Gown, Dresses Kids Girl, Kids Wear, Baby Dresses, Kids Lehenga Choli', 14, 'img/product/kids/baby2.jpg', '0000-00-00 00:00:00'),
(28, 'Lehenga', 1200, 1500, 1, 'available', 'Different types of kids lehenga choli designs - ArtsyCraftsyDad. ... Frocks For Girls, Kids Frocks', 14, 'img/product/kids/baby3.jpeg\r\n', '0000-00-00 00:00:00'),
(29, 'Hair Oil', 400, 500, 3, 'avaliable', 'World\'s Largest Brand Marketplace. Choose Your Favorite Product and Order Now! Trade Assurance.', 15, 'img/product/health and beauty/h3', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `productandsubcatandcat`
-- (See below for the actual view)
--
CREATE TABLE `productandsubcatandcat` (
`Id` int(11)
,`Name` varchar(30)
,`Buying_Price` float
,`Selling_Price` float
,`Quantity` int(11)
,`Status` varchar(50)
,`Description` varchar(500)
,`Sub_Category_Id` int(11)
,`img_path` varchar(1000)
,`SCid` int(11)
,`SCname` varchar(30)
,`cid` int(11)
,`cname` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `productcart`
-- (See below for the actual view)
--
CREATE TABLE `productcart` (
`Id` int(11)
,`Name` varchar(30)
,`Buying_Price` float
,`Selling_Price` float
,`Quantity` int(11)
,`Status` varchar(50)
,`Description` varchar(500)
,`Sub_Category_Id` int(11)
,`img_path` varchar(1000)
,`Cart_Id` int(11)
,`Customer_Id` int(11)
,`Cart_Quantity` int(11)
,`Date_Time` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `Id` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `Product_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`Id`, `img_path`, `Product_Id`) VALUES
(1, 'productImg/subcategory/i_phone.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`Id`, `Product_Id`, `Customer_Id`, `Date_Time`, `Ratings`) VALUES
(1, 1, 1, '2019-08-22 22:59:59', 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subcatandcat`
-- (See below for the actual view)
--
CREATE TABLE `subcatandcat` (
`Id` int(11)
,`Name` varchar(30)
,`Category_Id` int(11)
,`Description` varchar(500)
,`cid` int(11)
,`Cname` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Name`, `Category_Id`, `Description`, `img_path`) VALUES
(1, 'Mens Fashion', 1, 'Get men\'s fashion tips and style advice daily from the experts at FashionBeans', 'img/product/cloth/man_jeans.jpg'),
(2, 'Junk-Food', 2, 'All the latest breaking news on junk food.', 'img/product/food/biscuit.jpg'),
(3, 'Womens Fashion', 1, ' Womens fashion online shopping in Bangladesh. Buy Best Quality Ladies dress, Jewelry, Bags & more at ajkerdeal in Bangladesh', 'img/product/cloth/women2.jpeg'),
(4, 'Liquid ', 2, 'A full-liquid diet involves consuming only liquids', 'img/product/food/jelly.jpg\"'),
(6, 'Mobile', 4, ' Buy mobile phones online at best price in Bangladesh.', 'img/product/mobile and acccsoris/samsung_mobile.jpg'),
(7, 'Winter Package', 3, 'Winter Cllection', 'img/product/kids/baby_dress.jpg '),
(8, 'Car', 3, 'kinds Car toy', 'img/product/kids/car.jpg'),
(9, 'Computer & Laptop', 4, 'Shop a wide selection of laptops, tablets, desktop ', 'img/product/computer and leptop/work_station.jpg'),
(10, 'Chocolate', 2, 'Choose from a wide selection of Chocolate', 'img/product/food/chocolate.jpg'),
(11, 'Doll', 3, ' Discover the best selection of Barbie Dolls', 'img/product/kids/doll.jpg '),
(12, 'Audio', 4, 'Feel the clear, crisp sound engineered', 'img/product/audio/headset.jpg'),
(14, 'Baby', 1, 'Children\'s clothing or kids\' clothing is clothing for children who have not yet grown to full height', 'img/product/kids/shirt.jpg'),
(15, 'Hair Treatment', 26, 'World\'s Largest Brand Marketplace. Choose Your Favorite Product and Order Now! Most Popular.', 'img/product/health and beauty/h1.jpg'),
(16, 'Mask', 26, 'A mask is an object normally worn on the face, typically for protection, disguise, performance, or entertainment', 'img/product/health and beauty/h2.jpg'),
(17, 'Parfume', 26, 'Parfume synonyms, Parfume pronunciation, Parfume translation, English dictionary definition of Parfume', 'img/product/health and beauty/perfume.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Id`, `Product_Id`, `Customer_Id`, `Date_Time`) VALUES
(1, 1, 1, '2019-08-22 09:28:08');

-- --------------------------------------------------------

--
-- Structure for view `customerlogin`
--
DROP TABLE IF EXISTS `customerlogin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customerlogin`  AS  select `c`.`Id` AS `Id`,`c`.`Name` AS `Name`,`c`.`Email` AS `Email`,`c`.`Phone` AS `Phone`,`c`.`Address` AS `Address`,`c`.`Join_Date` AS `Join_Date`,`c`.`Login_Id` AS `Login_Id`,`l`.`User_Name` AS `User_Name`,`l`.`Password` AS `Password`,`l`.`Type` AS `Type`,`l`.`Status` AS `Status` from (`customer` `c` join `login` `l`) where `c`.`Login_Id` = `l`.`Id` ;

-- --------------------------------------------------------

--
-- Structure for view `employeelogin`
--
DROP TABLE IF EXISTS `employeelogin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employeelogin`  AS  select `e`.`Id` AS `Id`,`e`.`Name` AS `Name`,`e`.`Email` AS `Email`,`e`.`Phone` AS `Phone`,`e`.`Address` AS `Address`,`e`.`Join_Date` AS `Join_Date`,`e`.`Salary` AS `Salary`,`e`.`Login_Id` AS `Login_Id`,`l`.`User_Name` AS `User_Name`,`l`.`Password` AS `Password`,`l`.`Type` AS `Type`,`l`.`Status` AS `Status` from (`employee` `e` join `login` `l`) where `e`.`Login_Id` = `l`.`Id` ;

-- --------------------------------------------------------

--
-- Structure for view `productandsubcatandcat`
--
DROP TABLE IF EXISTS `productandsubcatandcat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productandsubcatandcat`  AS  select `p`.`Id` AS `Id`,`p`.`Name` AS `Name`,`p`.`Buying_Price` AS `Buying_Price`,`p`.`Selling_Price` AS `Selling_Price`,`p`.`Quantity` AS `Quantity`,`p`.`Status` AS `Status`,`p`.`Description` AS `Description`,`p`.`Sub_Category_Id` AS `Sub_Category_Id`,`p`.`img_path` AS `img_path`,`s`.`Id` AS `SCid`,`s`.`Name` AS `SCname`,`s`.`cid` AS `cid`,`s`.`Cname` AS `cname` from (`product` `p` join `subcatandcat` `s`) where `p`.`Id` = `s`.`Id` ;

-- --------------------------------------------------------

--
-- Structure for view `productcart`
--
DROP TABLE IF EXISTS `productcart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productcart`  AS  select `p`.`Id` AS `Id`,`p`.`Name` AS `Name`,`p`.`Buying_Price` AS `Buying_Price`,`p`.`Selling_Price` AS `Selling_Price`,`p`.`Quantity` AS `Quantity`,`p`.`Status` AS `Status`,`p`.`Description` AS `Description`,`p`.`Sub_Category_Id` AS `Sub_Category_Id`,`p`.`img_path` AS `img_path`,`c`.`Id` AS `Cart_Id`,`c`.`Customer_Id` AS `Customer_Id`,`c`.`Quantity` AS `Cart_Quantity`,`c`.`Date_Time` AS `Date_Time` from (`product` `p` join `cart` `c`) where `p`.`Id` = `c`.`Product_Id` ;

-- --------------------------------------------------------

--
-- Structure for view `subcatandcat`
--
DROP TABLE IF EXISTS `subcatandcat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subcatandcat`  AS  select `s`.`Id` AS `Id`,`s`.`Name` AS `Name`,`s`.`Category_Id` AS `Category_Id`,`s`.`Description` AS `Description`,`c`.`Id` AS `cid`,`c`.`Name` AS `Cname` from (`subcategory` `s` join `category` `c`) where `s`.`Category_Id` = `c`.`Id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyingprice`
--
ALTER TABLE `buyingprice`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `EmployeeId` (`Employee_Id`),
  ADD KEY `Id_2` (`Id`),
  ADD KEY `EmployeeId_2` (`Employee_Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `EmployeeId_3` (`Employee_Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Id_2` (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `LoginId` (`Login_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Login_Id` (`Login_Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `EmployeeId` (`Employee_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`),
  ADD KEY `InvoiceId` (`Invoice_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Sub_Category_Id` (`Sub_Category_Id`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `CategoryId` (`Category_Id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyingprice`
--
ALTER TABLE `buyingprice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyingprice`
--
ALTER TABLE `buyingprice`
  ADD CONSTRAINT `buyingprice_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `buyingprice_ibfk_2` FOREIGN KEY (`Employee_Id`) REFERENCES `employee` (`Id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Login_Id`) REFERENCES `login` (`Id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Login_Id`) REFERENCES `login` (`Id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`Employee_Id`) REFERENCES `employee` (`Id`);

--
-- Constraints for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD CONSTRAINT `orderlist_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `orderlist_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `orderlist_ibfk_3` FOREIGN KEY (`Invoice_Id`) REFERENCES `invoice` (`Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Sub_Category_Id`) REFERENCES `subcategory` (`Id`);

--
-- Constraints for table `productimage`
--
ALTER TABLE `productimage`
  ADD CONSTRAINT `productimage_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`Category_Id`) REFERENCES `category` (`Id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
