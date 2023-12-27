-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 12:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$12$q2FPNwdhyY/8CJ/QMx5I7ewHj1RTdm41xdVEIhCNuh7wGaQ4q0d2O', '2023-12-02 09:33:33', '2023-12-02 09:33:33'),
(2, 'Abhilash Achugatla', 'abhi@gmail.com', '$2y$12$YLKY.weLgDomy0CvddTYVOIlq/Kn06nMnsmX/7G4zmgTVEzq37LNq', '2023-12-13 05:00:35', '2023-12-13 05:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Electronics', 'electronic.jpg', '2023-11-27 01:13:17', '2023-11-27 01:13:17'),
(4, 'Beauty', 'beauty.jpg', '2023-11-27 01:13:33', '2023-11-27 01:13:33'),
(5, 'Furniture', 'furniture.jpg', '2023-11-27 01:14:31', '2023-11-27 01:14:31'),
(6, 'Luggage & Bags', 'Luggage.jpg', '2023-11-27 01:23:52', '2023-11-27 01:23:52'),
(8, 'Musical Instruments', 'musical-instruments.png', '2023-11-27 02:47:39', '2023-11-27 02:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `totalbill` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `name`, `email`, `mobileno`, `address`, `country`, `city`, `state`, `pincode`, `productname`, `totalbill`, `paymentmode`, `created_at`, `updated_at`) VALUES
(5, 'Ashwini Achugatla', 'ashwiniachugatla@gmail.com', '9420356595', 'Bhavani peth', 'India', 'Solapur', 'Maharashtra', '413005', '[[\"Suitcase Bag\"]]', '10000', 'cash', '2023-12-15 03:39:03', '2023-12-15 03:39:03'),
(6, 'Namrata Rumal', 'namratarumal2406@gmail.com', '9452368710', 'Akkalkot Road', 'India', 'Solapur', 'Maharashtra', '413005', '[[\"Guitar\"]]', '9990', 'check', '2023-12-15 03:41:35', '2023-12-15 03:41:35'),
(7, 'Ashwini Achugatla', 'ashwiniachugatla@gmail.com', '9404927827', 'Akkalkot Road', 'India', 'Solapur', 'Maharashtra', '413005', '[[\"Noise Buds\"]]', '1499', 'cash', '2023-12-16 04:54:04', '2023-12-16 04:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Hiral Gadgi', 'hiral@gmail.com', 'abc', 'mkiursacxzqiyfgvb', '2023-12-11 00:26:28', '2023-12-11 00:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inwards`
--

CREATE TABLE `inwards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inwards`
--

INSERT INTO `inwards` (`id`, `pid`, `stock`, `date`, `created_at`, `updated_at`) VALUES
(1, '1', '6', '2023-12-13', '2023-12-15 09:27:41', '2023-12-16 02:22:04'),
(2, '2', '15', '2023-12-15', '2023-12-15 09:31:51', '2023-12-15 09:31:51'),
(3, '3', '10', '2023-12-15', '2023-12-15 09:33:48', '2023-12-15 09:33:48'),
(4, '4', '10', '2023-12-15', '2023-12-15 09:34:42', '2023-12-15 09:34:42'),
(5, '5', '20', '2023-12-16', '2023-12-16 01:23:45', '2023-12-16 01:23:45'),
(6, '6', '10', '2023-12-16', '2023-12-16 01:24:04', '2023-12-16 01:24:04'),
(7, '7', '15', '2023-12-16', '2023-12-16 01:24:25', '2023-12-16 01:24:25'),
(8, '8', '5', '2023-12-16', '2023-12-16 01:24:45', '2023-12-16 01:24:45'),
(9, '9', '10', '2023-12-16', '2023-12-16 01:25:19', '2023-12-16 01:25:19'),
(10, '10', '10', '2023-12-16', '2023-12-16 01:25:54', '2023-12-16 01:25:54'),
(11, '11', '15', '2023-12-16', '2023-12-16 01:26:15', '2023-12-16 01:26:15'),
(12, '12', '10', '2023-12-16', '2023-12-16 01:26:30', '2023-12-16 01:26:30'),
(13, '13', '5', '2023-12-16', '2023-12-16 01:26:51', '2023-12-16 01:26:51'),
(14, '14', '20', '2023-12-16', '2023-12-16 01:27:09', '2023-12-16 01:27:09'),
(15, '15', '12', '2023-12-16', '2023-12-16 01:27:36', '2023-12-16 01:27:36'),
(16, '16', '10', '2023-12-16', '2023-12-16 01:28:25', '2023-12-16 01:28:25'),
(17, '17', '10', '2023-12-16', '2023-12-16 01:29:07', '2023-12-16 01:29:07'),
(18, '18', '5', '2023-12-16', '2023-12-16 01:29:41', '2023-12-16 01:29:41'),
(19, '19', '10', '2023-12-16', '2023-12-16 01:30:19', '2023-12-16 01:30:19'),
(20, '20', '5', '2023-12-16', '2023-12-16 01:30:48', '2023-12-16 01:30:48'),
(21, '21', '7', '2023-12-16', '2023-12-16 01:31:08', '2023-12-16 01:31:08'),
(22, '22', '20', '2023-12-16', '2023-12-16 01:31:32', '2023-12-16 01:31:32'),
(23, '23', '8', '2023-12-16', '2023-12-16 01:31:57', '2023-12-16 01:31:57'),
(24, '24', '15', '2023-12-16', '2023-12-16 01:32:27', '2023-12-16 01:32:27'),
(25, '25', '18', '2023-12-16', '2023-12-16 01:33:41', '2023-12-16 01:33:41'),
(26, '1', '10', '2023-12-16', '2023-12-16 04:49:02', '2023-12-16 04:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_054346_create_categories_table', 1),
(6, '2023_11_27_092808_create_products_table', 2),
(7, '2023_11_27_100125_create_products_table', 3),
(8, '2023_12_02_143639_create_admins_table', 4),
(9, '2023_12_03_140520_create_users_table', 5),
(10, '2023_12_11_050349_create_contacts_table', 6),
(11, '2023_12_11_100807_create_shippings_table', 7),
(12, '2023_12_12_111741_create_checkouts_table', 8),
(13, '2023_12_12_113740_create_checkouts_table', 9),
(14, '2023_12_15_061857_create_ordertables_table', 10),
(15, '2023_12_15_142515_create_inwards_table', 11),
(16, '2023_12_16_070526_create_product_stocks_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ordertables`
--

CREATE TABLE `ordertables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordertables`
--

INSERT INTO `ordertables` (`id`, `uid`, `pid`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(8, '1', '18', '10000', '1', '2023-12-15 03:39:03', '2023-12-15 03:39:03'),
(9, '5', '24', '9990', '1', '2023-12-15 03:41:35', '2023-12-15 03:41:35'),
(10, '1', '1', '1499', '1', '2023-12-16 04:54:04', '2023-12-16 04:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cid`, `name`, `image`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, '3', 'Noise Buds', '[\"buds.jpg\",\"buds1.jpg\",\"buds2.jpg\",\"buds3.jpg\"]', 'Noise Buds VS104 Max Truly Wireless in-Ear Earbuds with ANC(Up to 25dB),Up to 45H Playtime, Quad Mic with ENC, Instacharge(10 min=180 min), 13mm Driver, BT v5.3 (Silver Grey)', '1499', '2023-11-27 05:24:47', '2023-12-15 13:44:07'),
(2, '3', 'Boat Bluetooth', '[\"bluetooth.jpeg\",\"bluetooth1.jpeg\",\"bluetooth2.jpeg\",\"bluetooth3.jpeg\",\"bluetooth4.jpeg\",\"bluetooth5.jpeg\"]', 'boAt Rockerz 255 Pro+ Bluetooth Neckband with Upto 60 Hours Playback, ASAP Charge, IPX7, Dual Pairing and Bluetooth v5.2(Navy Blue)', '3990', '2023-11-27 05:29:18', '2023-12-15 13:50:49'),
(3, '3', 'JBL Bluetooth Speaker', '[\"speaker.jpeg\",\"speaker1.jpeg\",\"speaker2.jpeg\",\"speaker3.jpeg\"]', 'JBL Go 3, Wireless Ultra Portable Bluetooth Speaker, Pro Sound, Vibrant Colors with Rugged Fabric Design, Waterproof, Type C (Without Mic, Blue)', '4499', '2023-11-27 05:35:00', '2023-12-15 13:55:09'),
(4, '3', 'MI Power Bank', '[\"powerbank.jpeg\",\"powerbank1.jpeg\",\"powerbank2.jpeg\",\"powerbank3.jpeg\",\"powerbank4.jpeg\"]', 'MI Power Bank 3i 20000mAh Lithium Polymer 18W Fast Power Delivery Charging | Input- Type C | Micro USB| Triple Output | Sandstone Black', '2199', '2023-11-27 05:38:54', '2023-12-15 23:52:04'),
(5, '3', 'Motorola', '[\"mobile.jpeg\",\"mobile1.jpeg\",\"mobile2.jpeg\",\"mobile3.jpeg\"]', 'Motorola Edge 30 (8GB, 128GB) (Meteor Grey)', '32999', '2023-11-27 06:04:46', '2023-12-15 23:54:13'),
(6, '4', 'Maybelline New York Liquid Foundation', '[\"foundation.jpeg\",\"foundation1.jpeg\",\"foundation2.jpeg\"]', 'Maybelline New York Full Coverage Liquid Foundation, Lightweight Feel, Water and Transfer Resistant, SuperStay 24H, Sun Beige 310, 30ml', '750', '2023-11-28 09:52:01', '2023-12-16 00:00:24'),
(7, '4', 'LAKMÉ', '[\"compact.jpeg\",\"compact1.jpeg\",\"compact2.jpeg\"]', 'LAKMÉ Face It Compact, Pearl, 9 g', '180', '2023-11-28 09:55:45', '2023-12-16 00:02:42'),
(8, '4', 'Elle 18 Black Kajal', '[\"kajal.jpeg\",\"kajal1.jpeg\",\"kajal2.jpeg\",\"kajal3.jpeg\"]', 'Elle 18 Eye Drama Bold Black Kajal 0.35 g, Matte Finish Kajal Black, Waterproof, Smudge Proof & Long Lasting Kajal with Matte Finish', '99', '2023-11-28 09:59:56', '2023-12-16 00:05:09'),
(9, '4', 'Lakme Eye Liner', '[\"liner.jpeg\",\"liner1.jpeg\",\"liner2.jpeg\",\"liner3.jpeg\"]', 'Lakme Insta Eye Liner, Black Semi_Matte Finish, Water Resistant, Long-Lasting, 9 Ml', '130', '2023-11-28 10:03:23', '2023-12-16 00:08:51'),
(10, '4', 'Maybelline New York Matte Lipstick', '[\"lipstick.jpeg\",\"lipstick1.jpeg\",\"lipstick2.jpeg\",\"lipstick3.jpeg\"]', 'Maybelline New York Matte Lipstick, Intense Colour, Moisturised Lips, Color Sensational Creamy Matte, 507 Almond Pink, 3.9g', '329', '2023-11-28 10:06:39', '2023-12-16 00:10:56'),
(11, '5', 'Round Coffee Table', '[\"coffeetable.jpeg\",\"coffeetable1.jpeg\",\"coffeetable2.jpeg\"]', 'Twist Home Round Coffee Table, Modern Living Room Coffee Table, Balcony Coffee Table Side Table Combination, Furniture Small Round Table -Golden White White', '6999', '2023-11-28 10:10:15', '2023-12-16 00:31:45'),
(12, '5', 'Bookshelf', '[\"bookshelf.jpeg\",\"bookshelf1.jpeg\",\"bookshelf2.jpeg\"]', 'Amazon Brand - Solimo Altamore Engineered Wood Bookshelf (Walnut Finish)', '15000', '2023-11-28 10:13:14', '2023-12-16 00:37:52'),
(13, '5', 'Sofa Set', '[\"sofaset.jpeg\",\"sofaset1.jpeg\",\"sofaset2.jpeg\",\"sofaset3.jpeg\"]', 'Dream Look Furniture Solid Sheesham Wood Standard Sofa Set 6 Seater Furniture Wooden 6 Seater Sofa Set (3+2+1) Teak Wood Sofa Set Furniture | Home Living Room with Cushions - Walnut Finish', '31834', '2023-11-28 10:15:48', '2023-12-16 00:45:17'),
(14, '5', 'Bean Bag Chair with Stool', '[\"bean.jpeg\",\"bean1.jpeg\",\"bean2.jpeg\",\"bean3.jpeg\"]', 'NOOSY Brand - XXL Faux Leather Bean Bag Chair with Stool & Cushion Without Beans (Navy Blue)', '1799', '2023-11-29 03:40:05', '2023-12-16 00:48:28'),
(15, '5', 'Shoe Storage Cabinet', '[\"shoestorage.jpeg\",\"shoestorage1.jpeg\",\"shoestorage2.jpeg\",\"shoestorage3.jpeg\"]', 'AYSIS Shoe Rack Organizer, 36 Pair Shoe Storage Cabinet with Door Expandable Plastic Shoe Shelves for Closet,Heels,Boots,Slippers,12 Tier Black', '7699', '2023-11-29 03:43:50', '2023-12-16 00:51:37'),
(16, '6', 'Strolley Duffle Bag', '[\"bag.jpeg\",\"bag1.jpeg\",\"bag2.jpeg\",\"bag3.jpeg\"]', 'FEDRA Epoch Nylon 55 litres Waterproof Strolley Duffle Bag- 2 Wheels - Luggage Bag - (Green White)', '2299', '2023-11-29 05:11:42', '2023-12-16 00:54:03'),
(17, '6', 'Travel Bag', '[\"travelbag.jpeg\",\"travelbag1.jpeg\",\"travelbag2.jpeg\",\"travelbag3.jpeg\"]', 'NFI essentials Small Canvas Duffle Travel Bag for Men and Women, Luggage Travelling Bag for Women, Stylish Duffel Cabin Size Air Bag Hand Bag (21L)', '1299', '2023-11-29 05:16:01', '2023-12-16 00:56:41'),
(18, '6', 'Suitcase Bag', '[\"suitcasebag.jpeg\",\"suitcasebag1.jpeg\",\"suitcasebag2.jpeg\",\"suitcasebag3.jpeg\",\"suitcasebag4.jpeg\"]', 'Aristocrat Airpro 66 cms Medium Check-in Polypropylene Hardsided 8 Wheels Luggage/Suitcase/Trolley Bag- Cross Teal Blue', '10000', '2023-11-29 05:20:40', '2023-12-16 00:59:34'),
(19, '6', 'Casual Bag for trekking', '[\"casualbag.jpeg\",\"casualbag1.jpeg\",\"casualbag2.jpeg\",\"casualbag3.jpeg\"]', 'TRAWOC Travel Backpack for Men and Women, 40 Litre Laptop Backpack with Rain Cover & Shoe Compartment, Casual Bag for trekking & Hiking', '2999', '2023-11-29 05:23:50', '2023-12-16 01:03:05'),
(20, '6', 'Gym Bag', '[\"gymbag.jpeg\",\"gymbag1.jpeg\",\"gymbag2.jpeg\",\"gymbag3.jpeg\"]', 'PAZZO Trance 44L Water Resistant Gym/Trekking/Travel/Sports Duffel/Duffle Bag (Black and Grey)', '1199', '2023-11-29 05:26:32', '2023-12-16 01:05:46'),
(21, '8', 'Electronic Drum Set', '[\"drum.jpeg\",\"drum1.jpeg\",\"drum2.jpeg\",\"drum3.jpeg\",\"drum4.jpeg\"]', 'Donner DED-80 Electronic Drum Set, Electric Drum Set for Beginner with 4 Quiet Mesh Drum Pads, 2 Switch Pedal, 180+ Sounds, Throne, On-Ear Headphones, Sticks, and Melodics Lessons Included Black', '31000', '2023-11-29 05:30:15', '2023-12-16 01:09:29'),
(22, '8', 'Mouth Organ', '[\"mouthorgan.jpeg\",\"mouthorgan1.jpeg\",\"mouthorgan2.jpeg\",\"mouthorgan3.jpeg\",\"mouthorgan4.jpeg\"]', 'East top Chromatic Mouth Organ 12 Holes 48 Tones Forerunner Chromatic Harmonica Key of C, Chromatic Harmonica Mouth Organ Musical Instrument for Beginners and Professionals', '5070', '2023-11-29 05:32:22', '2023-12-16 01:11:43'),
(23, '8', 'Keyboard Piano', '[\"piano.jpeg\",\"piano1.jpeg\",\"piano2.jpeg\",\"piano3.jpeg\"]', 'JUAREZ Octavé JRK661 61-Key Electronic Keyboard Piano with LED Display | Adapter | Key Note Stickers | Mic |Music Sheet Stand | 255 Rhythms | 255 Timbres | 24 Demos | 8 Percussions', '6500', '2023-11-29 05:36:58', '2023-12-16 01:14:17'),
(24, '8', 'Guitar', '[\"guitar.jpeg\",\"guitar1.jpeg\",\"guitar2.jpeg\",\"guitar3.jpeg\",\"guitar4.jpeg\"]', 'JUAREZ Arpeggio Guitar JRA41SP-RD-K, red', '9990', '2023-11-29 05:45:58', '2023-12-16 01:17:00'),
(25, '8', 'Flute', '[\"flute.jpeg\",\"flute1.jpeg\",\"flute2.jpeg\"]', 'Radhe Flutes | Right Handed C Natural With Velvet Cover | Tuned With Tanpura A=440Hz | PVC Fiber | Blue & Light Green', '799', '2023-11-29 05:50:37', '2023-12-16 01:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_stocks`
--

INSERT INTO `product_stocks` (`id`, `pid`, `stock`, `created_at`, `updated_at`) VALUES
(1, '1', '15', '2023-12-16 02:10:50', '2023-12-16 04:54:04'),
(2, '2', '5', '2023-12-16 02:11:04', '2023-12-16 02:11:04'),
(3, '3', '5', '2023-12-16 02:11:17', '2023-12-16 02:11:17'),
(4, '4', '5', '2023-12-16 02:11:29', '2023-12-16 02:11:29'),
(5, '5', '5', '2023-12-16 02:11:43', '2023-12-16 02:11:43'),
(6, '6', '5', '2023-12-16 02:11:58', '2023-12-16 02:11:58'),
(7, '7', '5', '2023-12-16 02:12:11', '2023-12-16 02:12:11'),
(8, '8', '5', '2023-12-16 02:12:23', '2023-12-16 02:12:23'),
(9, '9', '5', '2023-12-16 02:12:36', '2023-12-16 02:12:36'),
(10, '10', '5', '2023-12-16 02:12:59', '2023-12-16 02:12:59'),
(11, '11', '5', '2023-12-16 02:13:15', '2023-12-16 02:13:15'),
(12, '12', '5', '2023-12-16 02:13:31', '2023-12-16 02:13:31'),
(13, '13', '5', '2023-12-16 02:13:47', '2023-12-16 02:13:47'),
(14, '14', '5', '2023-12-16 02:14:15', '2023-12-16 02:14:15'),
(15, '15', '5', '2023-12-16 02:14:32', '2023-12-16 02:14:32'),
(16, '16', '5', '2023-12-16 02:15:01', '2023-12-16 02:15:01'),
(17, '17', '5', '2023-12-16 02:15:14', '2023-12-16 02:15:14'),
(18, '18', '5', '2023-12-16 02:15:32', '2023-12-16 02:15:32'),
(19, '19', '5', '2023-12-16 02:15:48', '2023-12-16 02:15:48'),
(20, '20', '5', '2023-12-16 02:16:03', '2023-12-16 02:16:03'),
(21, '21', '5', '2023-12-16 02:16:21', '2023-12-16 02:16:21'),
(22, '22', '5', '2023-12-16 02:16:46', '2023-12-16 02:16:46'),
(23, '23', '5', '2023-12-16 02:16:59', '2023-12-16 02:16:59'),
(24, '24', '5', '2023-12-16 02:17:17', '2023-12-16 02:17:17'),
(25, '25', '5', '2023-12-16 02:17:32', '2023-12-16 02:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `email`, `mobileno`, `address`, `country`, `city`, `state`, `pincode`, `created_at`, `updated_at`) VALUES
(39, 'Ashwini Achugatla', 'ashwiniachugatla@gmail.com', '9420356595', 'Bhavani peth', 'India', 'Solapur', 'Maharashtra', '413005', '2023-12-15 03:39:03', '2023-12-15 03:39:03'),
(40, 'Namrata Rumal', 'namratarumal2406@gmail.com', '9452368710', 'Akkalkot Road', 'India', 'Solapur', 'Maharashtra', '413005', '2023-12-15 03:41:35', '2023-12-15 03:41:35'),
(41, 'Ashwini Achugatla', 'ashwiniachugatla@gmail.com', '9404927827', 'Akkalkot Road', 'India', 'Solapur', 'Maharashtra', '413005', '2023-12-16 04:54:04', '2023-12-16 04:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ashwini Achugatla', 'ashwiniachugatla@gmail.com', '$2y$12$DPGbdYPQTJHWao0Nfh1qcOD.C0vi8AOVMYu1gq114kt.5IpVM6gne', '2023-12-03 08:47:09', '2023-12-03 08:47:09'),
(2, 'Hiral Gadgi', 'hiral@gmail.com', '$2y$12$I5C7jFXlhu.N4imXEh9B.Owcdm1exOahcUDZAaoybyAE7B2oy6gFi', '2023-12-04 04:21:34', '2023-12-04 04:21:34'),
(4, 'Vasudha Kanaki', 'vasudhakanaki@gmail.com', '$2y$12$vTd0k.yW/g3VKsYdIImbe./zE0ypOSuvjE5H2XiOQgQgmtbRaGgd2', '2023-12-14 23:52:19', '2023-12-14 23:52:19'),
(5, 'Namrata Rumal', 'namratarumal2406@gmail.com', '$2y$12$WAOJXzBdHVqemgXp7pEHjuIvZIlkq2CM596WCQLDrD8c5RNoP7hgm', '2023-12-15 00:07:07', '2023-12-15 00:07:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inwards`
--
ALTER TABLE `inwards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertables`
--
ALTER TABLE `ordertables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inwards`
--
ALTER TABLE `inwards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ordertables`
--
ALTER TABLE `ordertables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
