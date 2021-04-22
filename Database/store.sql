
-- table for mobile

CREATE TABLE `mobile` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- insert data for table `mobile`
--

INSERT INTO `mobile` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 152.00, './images/mobile/1.png'), -- NOW()
(2, 'Redmi', 'Redmi Note 7', 122.00, './images/mobile/2.png' ),
(3, 'Redmi', 'Redmi Note 6', 122.00, './images/mobile/3.png'),
(4, 'Redmi', 'Redmi Note 5', 122.00, './images/mobile/4.png'),
(5, 'Redmi', 'Redmi Note 4', 122.00, './images/mobile/5.png'),
(6, 'Redmi', 'Redmi Note 8', 122.00, './images/mobile/6.png'),
(7, 'Redmi', 'Redmi Note 9', 122.00, './images/mobile/8.png'),
(8, 'Redmi', 'Redmi Note', 122.00, './images/mobile/10.png'),
(9, 'Samsung', 'Samsung Galaxy S6', 152.00, './images/mobile/11.png'),
(10, 'Samsung', 'Samsung Galaxy S7', 152.00, './images/mobile/12.png'),
(11, 'Apple', 'Apple iPhone 5', 152.00, './images/mobile/13.png'),
(12, 'Apple', 'Apple iPhone 6', 152.00, './images/mobile/14.png'),
(13, 'Apple', 'Apple iPhone 7', 152.00, './images/mobile/15.png'),
(14, 'NA', 'Tripod', 152.00, './images/mobile/t.jpg'),
(15, 'NA', 'Back Cover', 152.00, './images/mobile/cover.jpg');




-- table for mobile

CREATE TABLE `computer` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- insert data for table `mobile`
--

INSERT INTO `computer` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'NA', 'Keyboard', 152.00, './images/computer/keyboard.jpg'),
(2, 'NA', 'Mouse', 152.00, './images/computer/mouse.jpeg'),
(3, 'NA', 'SSD', 152.00, './images/computer/ssd.jpg'),
(4, 'NA', 'Laptop Skin', 152.00, './images/computer/skin.jpeg'),
(5, 'NA', 'Extension Board', 152.00, './images/computer/exten.jpeg'),
(6, 'NA', 'HDD', 152.00, './images/computer/disk.jpg'),
(7, 'NA', 'PC Charger', 152.00, './images/computer/pccharge.jpg');



-- table for headphone

CREATE TABLE `headphone` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- insert data for table `headphone`
--

INSERT INTO `headphone` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'NA', 'BOAT Ear phone', 152.00, './images/headphone/boat.jpg'),
(2, 'NA', 'BOAT Head phone', 152.00, './images/headphone/head.jpg'),
(3, 'NA', 'Head phone', 152.00, './images/headphone/lead.jpg'),
(4, 'NA', 'Buds', 152.00, './images/headphone/buds.jpg'),
(5, 'NA', 'Speakers', 152.00, './images/headphone/speaker.jpg'),
(6, 'NA', 'Home Theater', 152.00, './images/headphone/sound.jpg'),
(7, 'NA', 'Bluetooth', 152.00, './images/headphone/blue.jpg');


-- table for camera

CREATE TABLE `camera` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- insert data for table `camera`
--

INSERT INTO `camera` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'NA', 'Canon Camera', 152.00, './images/camera/canon.jpg'),
(2, 'NA', 'TV', 152.00, './images/camera/tv.jpg'),
(3, 'NA', 'Set-Up box', 152.00, './images/camera/setup.jpg');




-- table for camera

CREATE TABLE `other` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- insert data for table `camera`
--

INSERT INTO `other` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'NA', 'Pendrive', 152.00, './images/other/2.jpg'),
(2, 'NA', 'Router', 152.00, './images/other/3.jpg'),
(3, 'NA', 'Smart Watch', 152.00, './images/other/4.jpg'),
(4, 'NA', 'Digital Pad', 152.00, './images/other/pad.jpg'),
(5, 'NA', 'Car Charger', 152.00, './images/other/1.jpg');