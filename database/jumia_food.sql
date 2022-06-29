-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2022 at 12:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jumia_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `resturant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `product_name`, `product_price`, `product_image`, `description`, `resturant_id`) VALUES
(1, 'Nyama Nyama Burger', 399, '../../assets/nyamanyamaburger.jpg', '2 Chicken Fillets, 1 Cheese Slice,<br>\r\n1 Hash Brown & Colonel Dressing', 6),
(2, 'Chicken Lunchbox', 399, '../../assets/chicken-lunchbox.jpg', '2 pieces regular chicken, regular chips<br>regular coleslaw & 350ml soda', 6),
(3, 'Wings Lunchbox', 367, '../../assets/wings-lunchbox.jpg', '5 pieces zinger wings (hot), regular chips, <br>regular coleslaw & 350ml soda', 6),
(4, 'Crunch Master', 690, '../../assets/crunch-master.jpg', '2 Crunch fillets, double cheese, tomato<br>lettuce, and sweet chili sauce <br> all wrapped in a tortilla', 6),
(5, 'Chicken Burger Lunchbox', 367, '../../assets/chicken-burger-lunchbox.jpg', 'Crunch Burger, regular chips<br>regular coleslaw & 350ml soda', 6),
(6, 'Bazu Burger', 690, '../../assets/bazu-burger.jpg', 'Burger Only', 6),
(7, 'Medium Meat Deluxe Pizza', 800, '../../assets/meat_deluxe.png', 'Meat Deluxe Pizza-Med', 3),
(8, 'Meat Deluxe Pizza-Small', 600, '../../assets/meat_deluxe.png', 'Smaller Meat Deluxe Pizza, perfect for one', 3),
(9, 'Large Meat Deluxe Pizza', 1200, '../../assets/meat_deluxe.png', 'Large Meat Deluxe Pizza, Perfect for a <br>group of friends', 3),
(10, 'Small Ham Pizza', 600, '../../assets/ham.png', 'Ham pizza with choice toppings-Small', 3),
(11, 'Medium Ham Pizza', 900, '../../assets/ham.png', 'Ham Pizza-Medium', 3),
(12, 'BBQ Pizza', 800, '../../assets/bbq_pizza.png', 'Our very Own BBQ Pizza recipe', 3),
(13, 'Chicken Pepperoni', 800, '../../assets/chicken_pepperoni.png', 'Marinated and Roasted chicken, with <br>\r\na thick crust and lots of cheese.', 3),
(14, 'Triple Decker Chicken Pepperoni', 1700, '../../assets/chicken_triple_decker.png', 'Our tasty Chicken Pepperoni but in <br>\r\n3 layers.', 3),
(15, 'Meat Deluxe Pro Max', 1500, '../../assets/meat_deluxe_plus.png', 'Meat Deluxe taken to another level.', 3),
(16, 'Mixed Green Vegetables', 150, '../../assets/mixed_vegetables.jpg', 'A mixture of the freshest green <br>\r\nvegetables.', 2),
(17, 'Terere', 180, '../../assets/terere.jpg', 'Steamed Terere with tomato.', 2),
(18, 'Sukuma Wiki', 150, '../../assets/sukuma.jpg', 'The Kenyan Classic Sukuma', 2),
(19, 'Peanut and Mushroom Stew', 250, '../../assets/peanut_and_mushroom.jpg', 'Mushrooms cooked in peanut stew.', 2),
(20, 'Assorted Cereals', 150, '../../assets/cereals.jpg', 'An assorted mix of nutritious cereals <br> including nuts.', 2),
(21, 'Assorted Berries ', 360, '../../assets/assorted_berries.jpg', 'Mixture of freshly picked berries.', 2),
(22, 'African Nightshade', 150, '../../assets/african_nightshade.jpg', 'Steamed African Nightshade', 2),
(23, 'Sides', 240, '../../assets/sides.png', 'A small serving of fries, sauce and <br> chicken fingers to accompany your pizza.', 3),
(24, 'Roti', 30, '../../assets/roti.jpg', 'Plain Roti', 4),
(25, 'Meatballs in Sauce ', 450, '../../assets/meatballs_sauce.jpg', 'Meatballs Cooked in Sauce. <br>\r\nServing for two', 4),
(26, 'Chicken Stew', 260, '../../assets/chicken_stew.jpg', 'Spicy Chicken Stew.<br>\r\nServing for three.', 4),
(27, 'Yellow Beans ', 150, '../../assets/yellow_beans.jpg', 'Yellow Beans. Comes with 3 Roti', 4),
(28, 'Spring Rolls', 150, '../../assets/spring_rolls.jpg', 'Local spring rolls. Comes in a 3 pack', 4),
(29, 'Samosa', 90, '../../assets/samosa.jpg', 'Comes in a 3 pack. Non-Spicy', 4),
(30, 'Green Peas', 120, '../../assets/green_peas.jpg', 'Comes with 2 roti.', 4),
(31, 'Githeri', 250, '../../assets/githeri.jpg', 'Spiced Githeri. Garnished with Parsley.', 4),
(32, 'Quarter Chicken and Chips', 700, '../../assets/quarterandchips.jpg', 'Quarter Roasted Chicken and one <br> of Galitos Fries', 5),
(33, 'Chicken Wrap', 250, '../../assets/chickenwrap.jpg', 'Chicken and salad wrapped in Roti.', 5),
(34, 'Chicken in Rice', 650, '../../assets/chickenandrice.jpg', 'Chicken cooked in Vegetable Rice', 5),
(35, 'Quarter Chicken ', 520, '../../assets/quarterchicken.jpg', 'Roasted Quarter Chicken', 5),
(36, 'Full Chicken Platter', 2500, '../../assets/fullchickenplatter.jpg', 'Full chicken, Fries, buns and salad.<br>\r\nEnough for up to six.', 5),
(37, 'Half Chicken and Chips ', 920, '../../assets/halfchickenandchips.jpg', 'Half a cut of chicken and large fries.', 5),
(38, 'Full Chicken', 1800, '../../assets/fullchicken.jpg', 'A full roasted Galitos Chicken', 5),
(39, 'Galitos Fries', 170, '../../assets/galitoschips.jpg', 'Tasty and Crispy original Galitos Fries', 5),
(40, 'Fried Chicken Pieces', 250, '../../assets/friedchicken.jpg', 'Iconic Chicken Inn Fried Chicken.<br>\r\nMinimum Order is two pieces', 7),
(41, 'Sticky Chicken', 300, '../../assets/sticky_wings.jpg', 'Sticky Fried Chicken', 7),
(42, '8 Piecer Bucket ', 1700, '../../assets/8BucketChips.jpg', '8 Pieces of Chicken Inn fried Chicken <br> and a Large Chips', 7),
(43, '6 Piecer Bucket ', 1200, '../../assets/6piecebucket.jpg', '6 Pieces of Chicken Inn fried Chicken <br> and a Regular Chips', 7),
(44, '3 Piecer and Regular Chips', 700, '../../assets/3piecer.jpg', '3 Pieces of Chicken and regular chips', 7),
(45, '2 Piecer and Single Chips', 450, '../../assets/2piecer.jpg', '2 pieces of Chicken and Single Chips', 7),
(46, 'Single Piecer and Chips', 350, '../../assets/1piecechips.jpg', 'Single piece of Chicken and small Chips', 7),
(47, 'Smoothies', 350, '../../assets/smoothies.png', 'Smoothie in any flavor you\'d like', 8),
(48, 'Breakfast Tarts', 1200, '../../assets/tarts.png', 'Sweet Breakfast tarts for family', 8),
(49, 'Freshly Squeezed Juices', 250, '../../assets/juices.png', 'Freshly Squezzed Juices. Choose from <br> Mango, Lemon, Lime, Passion <br>\r\nand more.', 8),
(50, 'Freshly baked bread', 180, '../../assets/bread.png', 'Freshly baked in-house Bread', 8),
(51, 'Power Sandwich ', 145, '../../assets/sandwiches.png', 'Quick sandwich to get you through <br> those morning meetings.', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `table_key` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`table_key`, `item_id`, `id`) VALUES
(4, 16, 2),
(5, 18, 2),
(6, 20, 2),
(7, 17, 2),
(8, 18, 2),
(9, 28, 2),
(10, 31, 2),
(11, 2, 2),
(12, 47, 3);

-- --------------------------------------------------------

--
-- Table structure for table `resturants`
--

CREATE TABLE `resturants` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `cover_image` varchar(40) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `food_served` varchar(40) NOT NULL,
  `delivery_time` int(11) NOT NULL,
  `delivery_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resturants`
--

INSERT INTO `resturants` (`id`, `name`, `image`, `cover_image`, `tags`, `food_served`, `delivery_time`, `delivery_fee`) VALUES
(2, 'ABC Place', '../../assets/healthy-abc.jpg', '../../assets/abc-place-cover.jpg', 'Vegeterian • Fair', 'vegeterian', 20, 120),
(3, 'Pizza Inn', '../../assets/pizza-inn-image.jpg', '../../assets/pizza-inn-cover.jpg', 'Pizza • Cheap', 'pizza', 20, 80),
(4, 'Local Delights', '../../assets/swahili.jpg', '../../assets/swahili-cover.jpg', 'Traditional Foods • Value for Money', 'kenyan', 100, 60),
(5, 'Galitos', '../../assets/galitos.jpg', '../../assets/galitos-cover.jpg', 'Chicken • Best Value', 'chicken', 10, 50),
(6, 'KFC', '../../assets/KFC.jpg', '../../assets/KFC-cover.jpg', 'Fast Food • Cheap', 'chicken', 40, 80),
(7, 'Chicken Inn', '../../assets/chicken-inn.jpg', '../../assets/chicken-inn-cover.jpg', 'Chicken • Cheap', 'chicken', 60, 50),
(8, 'Wangu\'s Kitchen', '../../assets/wangu_kitchen.jpg', '../../assets/wangu_kitchen_cover.jpg', 'Breakfast • Fair', 'breakfast', 20, 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(1, 'Sean', 'Kinuthia', '0', 'sean@gmail.com', 'sean'),
(2, 'Test', 'Tester', '+254700251966', 'test@gmail.com', 'test'),
(3, 'Ian', 'Koech', '+254799038737', 'ian@gmail.com', 'ian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resturant_id` (`resturant_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`table_key`),
  ADD KEY `item-id` (`item_id`);

--
-- Indexes for table `resturants`
--
ALTER TABLE `resturants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `table_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resturants`
--
ALTER TABLE `resturants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`resturant_id`) REFERENCES `resturants` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
