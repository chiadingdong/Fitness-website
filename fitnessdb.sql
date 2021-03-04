-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 14, 2021 at 01:43 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnessdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(2) DEFAULT '1',
  `cart_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cart_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
(19, 6, 'Just do it!', 'just-do-it-', 'motivation.jpg', '&lt;p&gt;Believe in yourself. Start today. If not now, then when?&lt;/p&gt;\r\n', 1, '2021-02-14 12:42:35', '2021-02-14 12:42:35'),
(20, 6, 'Tutorial: Plank', 'tutorial-plank', 'plank.jpg', '&lt;p&gt;&lt;a href=&quot;https://www.google.com/search?q=how+to+do+a+plank&amp;amp;rlz=1C1CHBF_enSG841SG841&amp;amp;sxsrf=ALeKk00m640JVm2aSGZn8hyD3j8-NbYDAQ:1613306633911&amp;amp;tbm=isch&amp;amp;source=iu&amp;amp;ictx=1&amp;amp;fir=gmw6dY0iajdeDM%252CSmZRzHKiu37TdM%252C_&amp;amp;vet=1&amp;amp;usg=AI4_-kTFwJ_iSw-55txebY8LQ0572ICuDQ&amp;amp;sa=X&amp;amp;ved=2ahUKEwi2rc_Gs-nuAhXDYysKHVllCx0Q9QF6BAgQEAE#imgrc=gmw6dY0iajdeDM&quot;&gt;&lt;img alt=&quot;Image result for how to do a plank&quot; src=&quot;data:image/jpeg;base64,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&quot; style=&quot;height:160px; margin-left:-7px; margin-right:-8px; width:240px&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Ensure your elbows on the ground directly underneath your shoulders with your feet hip-width apart. Make sure your back is flat and your head and neck are in a neutral position. Drive your elbows into the floor, and squeeze your quads, glutes, and core.&lt;/p&gt;\r\n', 1, '2021-02-14 12:44:20', '2021-02-14 12:44:20'),
(21, 6, 'Benefits of Vitamin C', 'benefits-of-vitamin-c', 'product-03.jpg', '<p>Vitamin C, also known as ascorbic acid, is necessary for the growth, development and repair of all body tissues. It&#39;s involved in many body functions, including formation of&nbsp;<strong>collagen</strong>, absorption of&nbsp;<strong>iron</strong>, the proper functioning of the&nbsp;<strong>immune system</strong>, wound healing, and the maintenance of cartilage,&nbsp;<strong>bones</strong>, and teeth</p>\r\n', 1, '2021-02-14 12:48:09', '2021-02-14 12:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

DROP TABLE IF EXISTS `post_topic`;
CREATE TABLE IF NOT EXISTS `post_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id` (`post_id`),
  KEY `post_topic_ibfk_2` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(50, 19, 8),
(51, 20, 7),
(52, 21, 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(15) NOT NULL,
  `product_description` varchar(2000) NOT NULL,
  `product_quantity` mediumint(8) UNSIGNED NOT NULL,
  `product_cost` float UNSIGNED NOT NULL,
  `product_image` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_quantity`, `product_cost`, `product_image`) VALUES
(2, 'Casein', 'Casein is a slow-digesting dairy protein that people often take as a supplement. It releases amino acids slowly, so people often take it before bed to help with recovery and reduce muscle breakdown while they sleep. Several studies have shown it helps boost muscle growth, along with a ton of other benefits.', 6, 49.99, 'assets/images/product-01.jpg'),
(3, 'Whey Protein', 'Whey protein is the protein fraction of whey, which is a liquid that separates from milk during cheese production. It is a complete, high-quality protein, containing all of the essential amino acids. In addition, it is very digestible, absorbed from the gut quickly compared to other types of protein.', 6, 64.99, 'assets/images/product-02.jpg'),
(4, 'Vitamin C', 'Vitamin C, also known as ascorbic acid, is necessary for the growth, development and repair of all body tissues. It\'s involved in many body functions, including formation of collagen, absorption of iron, the proper functioning of the immune system, wound healing, and the maintenance of cartilage, bones, and teeth.', 8, 14.99, 'assets/images/product-03.jpg'),
(5, 'Omega-3', 'Omega-3s are a family of essential fatty acids that play important roles in your body and may provide a number of health benefits.\r\n\r\nAs your body cannot produce them on its own, you must get them from your diet.\r\n\r\nThe three most important types are ALA (alpha-linolenic acid), DHA (docosahexaenoic acid), and EPA (eicosapentaenoic acid). ALA is mainly found in plants, while DHA and EPA occur mostly in animal foods and algae.\r\n\r\nCommon foods that are high in omega-3 fatty acids include fatty fish, fish oils, flax seeds, chia seeds, flaxseed oil, and walnuts.\r\n\r\nFor people who do not eat much of these foods, an omega-3 supplement, such as fish oil or algal oil, is often recommended.', 10, 29.99, 'assets/images/product-04.jpg'),
(6, 'Weight Gainer', 'High-calorie supplement designed for lean muscle weight gain\r\n \r\nEach serving (when mixed with 2 percent reduced-fat milk) contains 1,850 calories\r\n \r\nServes well as a pre/post-exercise beverage, working to replenish protein loss and prevent muscle breakdown during exercise\r\n \r\nSuitable for fitness enthusiasts and those intending to increase their weight', 10, 25.99, 'assets/images/product-05.jpg'),
(7, 'Vitamin D', 'Vitamin D is required for the regulation of the minerals calcium and phosphorus found in the body. It also plays an important role in maintaining proper bone structure.\r\n\r\nVitamin D deficiency is more common than you might expect. People who don\'t get enough sun, especially people living in Canada and the northern half of the US, are especially at risk. However, even people living in sunny climates might be at risk, possibly because people are staying indoors more, covering up when outside, or using sunscreens to reduce skin cancer risk.', 8, 19.99, 'assets/images/product-06.jpg'),
(8, 'Pre-Workout', 'Pre-workout supplements are designed with ingredients such as caffeine, to give you a boost of energy to meet the demands of a high-intensity workout. They are usually taken 30-60 minutes before a workout and offer nutrients that will power your training session. Some supplements also contain creatine, which is scientifically proven to increase physical performance of short-term, high-intensity exercise, such as weightlifting – perfect if you want to smash those PBs.\r\n\r\n', 8, 20.99, 'assets/images/product-07.jpg'),
(9, 'Protein Powder', 'Protein powders are concentrated sources of protein from animal or plant foods, such as dairy, eggs, rice or peas.\r\n\r\nThere are three common forms:\r\n\r\nProtein concentrates: Produced by extracting protein from whole food using heat and acid or enzymes. These typically supply 60–80% protein, with the remaining 20–40% composed of fat and carbs.\r\n\r\nProtein isolates: An additional filtering process removes more fat and carbs, further concentrating the protein. Protein isolate powders contain about 90–95% protein.\r\nProtein hydrolysates: Produced by further heating with acid or enzymes — which breaks the bonds between amino acids — hydrolysates are absorbed more quickly by your body and muscles.\r\n', 10, 24.99, 'assets/images/product-08.jpg'),
(10, 'Post-Workout', 'When we work out intensely, we damage tissues at the microlevel, and we use fuel.\r\n\r\nThis is what ultimately makes us stronger, leaner, fitter, and more muscular, but in the short term it requires repair.\r\n\r\nRepair and rebuilding occurs through the breakdown of old, damaged proteins (aka protein breakdown) and the construction of new ones (aka protein synthesis) — a process known collectively as protein turnover.\r\n\r\nThus, during the postworkout period, we require protein and carbohydrates.\r\n\r\nThe raw materials we give our body through the consumption of food/supplements in the workout and post-workout periods are critical to creating the metabolic environment we desire.', 8, 35.99, 'assets/images/product-09.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`name`, `email`, `message`, `id`) VALUES
('Justin Tan', 'justin@gmail.com', 'Where can I get my supplements from?', 22);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(6, 'Supplements', 'supplements'),
(7, 'Exercises', 'exercises'),
(8, 'Motivation', 'motivation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(5, 'cd', 'cd@gmail.com', NULL, '823da4223e46ec671a10ea13d7823534', '2021-01-31 10:20:21', '2021-01-31 10:20:21'),
(6, 'test', 'test@gmail.com', 'Admin', '823da4223e46ec671a10ea13d7823534', '2021-01-31 10:28:20', '2021-01-31 10:28:20'),
(9, 'f', 'f@gmail.com', 'Admin', '202cb962ac59075b964b07152d234b70', '2021-02-14 08:28:33', '2021-02-14 08:28:33');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
