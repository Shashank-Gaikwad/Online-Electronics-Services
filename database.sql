-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bill`;
CREATE TABLE `bill` (
  `bno` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `cno` int(11) NOT NULL,
  PRIMARY KEY (`bno`),
  KEY `cno` (`cno`),
  CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`cno`) REFERENCES `customer` (`cno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bill` (`bno`, `date`, `amount`, `cno`) VALUES
(8,	'2017-10-08',	50000,	4),
(10,	'2017-10-10',	50000,	4),
(11,	'2017-10-10',	150000,	4),
(12,	'2017-10-10',	20000,	5),
(13,	'2017-10-10',	20000,	7),
(14,	'2017-10-29',	50000,	7),
(15,	'2017-10-29',	50000,	7),
(16,	'2017-10-30',	800,	4),
(17,	'2017-10-30',	1500,	4),
(18,	'2017-10-30',	100000,	4);

DROP TABLE IF EXISTS `bill_product`;
CREATE TABLE `bill_product` (
  `bno` int(11) NOT NULL,
  `pno` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  KEY `pno` (`pno`),
  KEY `bno` (`bno`),
  CONSTRAINT `bill_product_ibfk_2` FOREIGN KEY (`pno`) REFERENCES `product` (`pno`),
  CONSTRAINT `bill_product_ibfk_3` FOREIGN KEY (`bno`) REFERENCES `bill` (`bno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bill_product` (`bno`, `pno`, `quantity`, `order`) VALUES
(8,	1,	1,	1);

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL AUTO_INCREMENT,
  `pno` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cno` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  PRIMARY KEY (`cartId`),
  KEY `pno` (`pno`),
  KEY `cno` (`cno`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pno`) REFERENCES `product` (`pno`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cno`) REFERENCES `customer` (`cno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cart` (`cartId`, `pno`, `price`, `quantity`, `amount`, `cno`, `order_status`) VALUES
(1,	1,	50000,	3,	150000,	4,	1),
(5,	2,	50000,	1,	50000,	4,	1),
(6,	3,	20000,	1,	20000,	5,	1),
(7,	3,	20000,	1,	20000,	7,	1),
(9,	1,	50000,	1,	50000,	7,	1),
(10,	2,	50000,	1,	50000,	7,	1),
(11,	36,	800,	1,	800,	4,	1),
(12,	38,	70000,	1,	70000,	9,	0),
(13,	10,	1500,	1,	1500,	4,	1),
(14,	1,	50000,	2,	100000,	4,	1),
(15,	30,	30000,	1,	30000,	10,	0),
(16,	1,	50000,	1,	50000,	10,	0),
(17,	38,	70000,	1,	70000,	4,	0),
(18,	37,	1200,	1,	1200,	4,	0);

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `cno` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`cno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `customer` (`cno`, `name`, `gender`, `birthdate`, `contact`, `email`, `address`, `password`) VALUES
(4,	'shashank',	'male',	'2001-11-13',	'1234567890',	'shashank@gmail.com',	'qwe',	'123'),
(5,	'bhushan',	'male',	'1987-01-31',	'1234567891',	'bhushan@gmail.com',	'zxc',	'123'),
(6,	'sumit',	'male',	'1998-10-19',	'1234567893',	'sumit@gmail.com',	'asd',	'123'),
(7,	'shashank',	'male',	'2002-07-18',	'1234567890',	'abc@gmail.com',	'fhfjfjyyjf',	'1234'),
(8,	'xyz',	'male',	'1990-12-31',	'1234567890',	'xyz@gmail.com',	'qwerty',	'1234'),
(9,	'rajat',	'male',	'1978-02-08',	'8983790460',	'rajat@gmail.com',	'pune',	'12345'),
(10,	'Rajesh',	'male',	'2013-06-10',	'8983790460',	'rajesh@gmail.com',	'qiqeu',	'qwerty');

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE `enquiry` (
  `eno` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`eno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `enquiry` (`eno`, `name`, `email`, `contact`, `description`) VALUES
(2,	'pqr',	'pqr@gmail.com',	'1234567890',	'qwerty'),
(3,	'xyz',	'xyz@gmail.com',	'1234567890',	'qwerty\r\n');

DROP TABLE IF EXISTS `grant_service`;
CREATE TABLE `grant_service` (
  `gsno` int(11) NOT NULL,
  `cbno` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `pno` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `subcategory` text NOT NULL,
  `image` text NOT NULL,
  `feature` text NOT NULL,
  `price` int(11) NOT NULL,
  `warranty` int(11) NOT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product` (`pno`, `name`, `category`, `subcategory`, `image`, `feature`, `price`, `warranty`) VALUES
(1,	'camera',	'Cameras',	'DSLR',	'images/1.jpg',	'demo',	50000,	2),
(2,	'tv',	'Televisions',	'LED TVs',	'images/2.jpg',	'',	50000,	2),
(3,	'sound system',	'Home Entertainment Systems',	'Home Theater Systems',	'images/3.jpg',	'Aux Mode,USB Mode, High Quality Loud Music',	20000,	1),
(4,	'laptop',	'Computers',	'Laptops',	'images/59d94188ad60c.jpg',	'demo feature',	30000,	2),
(6,	'Sony MDR Headphone',	'Headphones',	'On Ear',	'images/59dc7aa633a68.jpg',	'extra bass, mic',	2000,	2),
(7,	'Sony KDL w800c',	'Televisions',	'LCD TVs',	'images/59f67fe0f117f.jpg',	'Picture Engine HyperReal, DTS Codec DTS Premium sound 5.1',	43000,	1),
(8,	'Samsung smart tv',	'Televisions',	'Smart TVs',	'images/59f6802973e93.jpg',	'Picture Engine HyperReal, DTS Codec DTS Premium sound 5.1',	65000,	1),
(9,	'LG 3D TV',	'Televisions',	'3D TVs',	'images/59f680788bb9a.jpg',	'Picture Engine HyperReal, DTS Codec DTS Premium sound 5.1',	55000,	1),
(10,	'Logitech wireless speaker',	'Home Entertainment Systems',	'Speakers',	'images/59f681479aa18.jpg',	'High Quality Loud Music',	1500,	1),
(11,	'Egate i9',	'Home Entertainment Systems',	'Projectors',	'images/59f681828ec70.jpg',	'Aux Mode,USB Mode, High Quality picture',	3500,	1),
(12,	'Roku Ultra streaming media player',	'Home Entertainment Systems',	'Streaming Media Players',	'images/59f681d64e086.jpg',	'USB Mode, High Quality Loud Music',	3000,	1),
(13,	'Sony MDR Ec 255',	'Headphones',	'In Ear',	'images/59f68225ed347.jpg',	'High Quality Loud Music, Extra Bass',	1800,	1),
(14,	'Sennheiser HD 598',	'Headphones',	'Over Ear',	'images/59f6828906b11.jpg',	'High Quaality Music, Extra Bass',	9000,	1),
(15,	'Soundpeats Qy7',	'Headphones',	'With Microphone',	'images/59f682c9d1fcb.jpg',	'High Quaality Music, Extra bass',	2000,	1),
(16,	'Sennheiser cx 275',	'Headphones',	'Without Microphone',	'images/59f682fc7d9ef.jpg',	'High Quaality Music, Extra bass',	1500,	1),
(17,	'Canon powershot sx720',	'Cameras',	'Point and Shoot',	'images/59f683cc4f838.jpg',	'APS-C size sensor, DIGIC 4+ image processor',	12000,	1),
(18,	'MaxXmove 4K',	'Cameras',	'Mirrorless Cameras',	'images/59f684134416b.jpg',	'APS-C size sensor, DIGIC 4+ image processor',	20000,	1),
(19,	'Cp Plus CCTV Camera',	'Cameras',	'CCTV Cameras',	'images/59f69dd8c4fa1.jpg',	'Easy setup, Night vision, 2 way audio and storage',	3500,	1),
(20,	'Sony NEX Series Lens',	'Cameras',	'Camera Accessories',	'images/59f69ea3c9942.jpg',	'VR image stabilization, silent autofocus',	6000,	1),
(21,	'Sigma AF 70-300mm',	'Cameras',	'Camera Accessories',	'images/59f69eee6d8ef.jpg',	'VR image stabilization, silent autofocus',	35000,	1),
(22,	'Usha QH 3002',	'Heating and Cooling',	'Room Heaters',	'images/59f69fae9da9e.jpg',	'less noise level, low time to heat',	7500,	1),
(23,	'Bajaj Flora',	'Heating and Cooling',	'Water Heaters',	'images/59f6a0196f143.jpg',	'power efficient, easy setup',	4000,	1),
(24,	'LG 1 ton',	'Heating and Cooling',	'Air Conditioners',	'images/59f6a0acc2d2e.jpg',	'Programmable timer, Air direction control',	15000,	2),
(25,	'Havells Leganza',	'Heating and Cooling',	'Fan',	'images/59f6a11dda5dd.jpg',	'Energy efficient',	4500,	1),
(26,	'LG Refrigerator',	'Kitchen and Home Appliances',	'Refrigerators',	'images/59f6a224a17a6.jpg',	'power efficient, multi digital sensors, hot water dispensers',	17000,	2),
(27,	'BPL 6.5 kg',	'Kitchen and Home Appliances',	'Washing Machines',	'images/59f6a2d77417d.jpg',	'8 wash programs, fully automatic',	15000,	1),
(28,	'Philips GC1905',	'Kitchen and Home Appliances',	'Irons',	'images/59f6a3946aa73.jpg',	'Easy Gliding, continuous stream output 13g/min',	1500,	1),
(29,	'Eureka Forbes',	'Kitchen and Home Appliances',	'Vacuum Cleaners',	'images/59f6a421d6ec3.jpg',	'light weight, compact, 800w motor',	2500,	1),
(30,	'Xbox one 500GB',	'Other',	'Gaming Consoles',	'images/59f6a4d36a235.jpg',	'4k streaming, Game DVR ',	30000,	1),
(31,	'Sony PS4 Slim 1TB',	'Other',	'Gaming Consoles',	'images/59f6a5581983a.jpg',	'HDR,Slick Interface',	35000,	1),
(32,	'Galaxy S8',	'Other',	'Mobile Phones',	'images/59f6a5a2ac95e.jpg',	'4GB RAM,Snapdragon 835 octa core',	65000,	1),
(33,	'Lenovo desktop',	'Computers',	'Desktops',	'images/59f6a6264d5f1.jpg',	'intel 5th grn i7, 16gb ram, antiglare display',	40000,	1),
(34,	'HP deskjet',	'Computers',	'Printers',	'images/59f6a6ac4253f.jpg',	'wireless print, copy, scan',	5000,	2),
(35,	'Netgear R6120-100INS ',	'Computers',	'Routers',	'images/59f6a768a2248.jpg',	'Easy setup, incorporated with SPI,NAT etc',	2500,	1),
(36,	'Dell VM126',	'Computers',	'Computer Accessories',	'images/59f6a7a0b2b9a.jpg',	'Easy to use',	800,	1),
(37,	'Logitech K230',	'Computers',	'Computer Accessories',	'images/59f6a7e7a91e4.jpg',	'Easy to use',	1200,	1),
(38,	'Iphone X',	'Other',	'Mobile Phones',	'images/59f6bbf30e31b.jpg',	'4 GB RAM, Face Scanner, IOS 11',	70000,	1);

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `bno` int(11) NOT NULL,
  PRIMARY KEY (`sno`),
  KEY `bno` (`bno`),
  CONSTRAINT `service_ibfk_1` FOREIGN KEY (`bno`) REFERENCES `bill` (`bno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `service` (`sno`, `description`, `date`, `bno`) VALUES
(2,	'asjjkd fjgfkjf',	'2017-10-10',	10),
(3,	'asjskd fklglg',	'2017-10-10',	12),
(4,	'fault in camera',	'2017-10-30',	18);

-- 2017-12-11 10:45:35