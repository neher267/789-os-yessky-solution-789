-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table sky.airports
CREATE TABLE IF NOT EXISTS `airports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `airports_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.airports: ~0 rows (approximately)
/*!40000 ALTER TABLE `airports` DISABLE KEYS */;
INSERT INTO `airports` (`id`, `country_id`, `created_by`, `city`, `name`, `address`, `info`, `created_at`, `updated_at`) VALUES
	(1, 2, 4, 'ASDF', 'Test', 'ASDFAS', 'DSA', '2019-01-13 06:03:25', '2019-01-13 06:03:25');
/*!40000 ALTER TABLE `airports` ENABLE KEYS */;

-- Dumping structure for table sky.continents
CREATE TABLE IF NOT EXISTS `continents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `continents_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.continents: ~7 rows (approximately)
/*!40000 ALTER TABLE `continents` DISABLE KEYS */;
INSERT INTO `continents` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'North America', '2018-10-24 14:58:57', '2018-10-24 14:58:57'),
	(2, 'South America', '2018-10-24 14:59:09', '2018-10-24 14:59:10'),
	(3, 'Antarctica', '2018-10-24 14:59:18', '2018-10-24 14:59:19'),
	(4, 'Europe', '2018-10-24 14:59:29', '2018-10-24 14:59:29'),
	(5, 'Asia', '2018-10-24 14:59:36', '2018-10-24 14:59:37'),
	(6, 'Africa', '2018-10-24 14:59:44', '2018-10-24 14:59:44'),
	(7, 'Australia', '2018-10-24 14:59:51', '2018-10-24 14:59:51');
/*!40000 ALTER TABLE `continents` ENABLE KEYS */;

-- Dumping structure for table sky.countries
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `continent_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `countries_name_unique` (`name`),
  UNIQUE KEY `countries_short_name_unique` (`short_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.countries: ~1 rows (approximately)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `continent_id`, `name`, `short_name`, `created_at`, `updated_at`) VALUES
	(2, 5, 'Bangladesh', 'BD', '2018-10-31 10:45:19', '2018-11-03 06:52:52');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Dumping structure for table sky.langing_requests
CREATE TABLE IF NOT EXISTS `langing_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `request_id` int(10) unsigned NOT NULL,
  `flightPlan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ospAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aocValidity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corValidity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coaValidity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insuranceValidity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goingDepDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goingEtdUtc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goingDepFrom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goingArrDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goingAtaUtc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goingArrTo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.langing_requests: ~0 rows (approximately)
/*!40000 ALTER TABLE `langing_requests` DISABLE KEYS */;
INSERT INTO `langing_requests` (`id`, `request_id`, `flightPlan`, `ospAgent`, `aocValidity`, `corValidity`, `coaValidity`, `insuranceValidity`, `goingDepDate`, `goingEtdUtc`, `goingDepFrom`, `goingArrDate`, `goingAtaUtc`, `goingArrTo`, `created_at`, `updated_at`) VALUES
	(1, 2, 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpACF9.tmp', '# 10. Advance Aviation Management Ltd', '10/08/2018', '10/09/2018', '10/10/2018', '10/11/2018', '10/09/2018', '02:00', '1', '10/08/2018', '03:00', '1', '2018-10-08 07:31:54', '2018-10-08 07:31:54');
/*!40000 ALTER TABLE `langing_requests` ENABLE KEYS */;

-- Dumping structure for table sky.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_10_02_104637_create_requests_table', 2),
	(4, '2018_10_08_071258_create_langing_requests_table', 3),
	(5, '2018_10_22_050724_create_operators_table', 3),
	(6, '2018_10_22_104559_create_countries_table', 4),
	(7, '2018_10_23_063718_create_continents_table', 4),
	(8, '2018_12_24_071552_create_airports_table', 5),
	(9, '2018_12_31_054039_create_orders_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sky.operators
CREATE TABLE IF NOT EXISTS `operators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `city_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_phone_extension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `operators_name_unique` (`name`),
  UNIQUE KEY `operators_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.operators: ~4 rows (approximately)
/*!40000 ALTER TABLE `operators` DISABLE KEYS */;
INSERT INTO `operators` (`id`, `country_id`, `created_by`, `city_id`, `name`, `email`, `address_line_1`, `address_line_2`, `business_phone`, `postal_code`, `business_phone_extension`, `fax_number`, `icao`, `website`, `comment`, `created_at`, `updated_at`) VALUES
	(6, 2, 1, 'Dhaka', 'Another Test', 'another-test@gmail.com', 'Another-test1', 'Another-test2', '01784255196', '1209', NULL, NULL, NULL, NULL, NULL, '2018-10-31 10:45:44', '2018-10-31 10:45:44'),
	(7, 2, 5, 'Dhaka', 'Test by Moderator', 'tests@gmail.com', 'Billing Address Line 1', 'Billing Address Line 2', '01784255133', '1212', '+880', NULL, NULL, 'www.google.com', NULL, '2018-11-03 06:28:53', '2018-11-03 06:39:24'),
	(8, 2, 4, NULL, 'neher', NULL, 'adfafdadf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-11 05:15:06', '2018-12-11 05:15:06'),
	(9, 2, 4, NULL, 'One more Test', NULL, 'One more billing address', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-11 05:16:07', '2018-12-11 05:16:07');
/*!40000 ALTER TABLE `operators` ENABLE KEYS */;

-- Dumping structure for table sky.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.orders: ~1 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`order_id`, `order_status`, `grand_total`, `currency`, `created_at`, `updated_at`) VALUES
	(1, 'Pending', 10.00, 'BDT', '2019-02-10 05:14:16', '2019-02-10 05:14:16');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table sky.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table sky.requests
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_add` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aircraft_reg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_sign` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_ref_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aircraft_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_weight` decimal(8,2) NOT NULL,
  `max_weight_unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goods_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_rules` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crew_count` decimal(8,2) NOT NULL,
  `pax_count` decimal(8,2) NOT NULL,
  `depar_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arri_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etd_utc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eta_utc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aerodrome_of_departure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aerodrome_of_estination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fir_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fir_out` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.requests: ~4 rows (approximately)
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` (`id`, `user_id`, `type`, `operator`, `billing_add`, `aircraft_reg`, `call_sign`, `trip_ref_no`, `aircraft_type`, `max_weight`, `max_weight_unit`, `purpose`, `goods_type`, `notes`, `flight_rules`, `sector`, `flight_level`, `crew_count`, `pax_count`, `depar_date`, `arri_date`, `etd_utc`, `eta_utc`, `aerodrome_of_departure`, `aerodrome_of_estination`, `fir_in`, `fir_out`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Overfly', 'Name of Operator', 'Billing Address', 'Regis', 'Call Sign', 'rip Reference No', 'Type of Aircraft', 1200.00, 'kgs', '1', '0', '122', 'IFR', 'Sector', 'Flight Leve', 10.00, 200.00, '10/08/2018', '10/08/2018', '03:00', '05:00', '2', '1', 'ATOGA(R472)', 'AGODA(R472)', 'approved', '2018-10-08 06:30:56', '2018-10-09 06:24:11'),
	(2, 1, 'Landing', 'Operator Name', 'Billing Address', 'Regis', 'Call Sign', 'rip Reference No', 'Type of Aircraft', 12000.00, 'kgs', 'Cargo Flight', '0', 'No', 'IFR', 'Sector', 'Flight Leve', 10.00, 250.00, '10/09/2018', '10/09/2018', '02:00', '03:00', '1', '1', 'VANTU(R598)', 'TEBID(G463)', 'cancelled', '2018-10-08 07:31:54', '2018-10-09 05:53:12'),
	(3, 1, 'Overfly', 'Operator', 'Address', 'Regis', 'Call Sign', 'rip Reference No', 'Type of Aircraft', 50000.00, 'kgs', 'Ferry Flight', '0', '123', 'IFR', 'Sector', 'Flight Leve', 10.00, 200.00, '10/16/2018', '10/16/2018', '02:00', '03:00', '1', '1', 'IBAPA(B593)', 'CHILA(A599)', 'cancelled', '2018-10-08 11:20:51', '2018-10-09 06:08:48'),
	(4, 2, 'Overfly', 'Name of Operator', 'Billing Address', 'tratio', 'Call Sign', 'Trip Reference No', 'Type of Aircraft', 496.00, 'kgs', 'Ferry Flight', '0', '1213', 'VFR', 'Sector', 'Flight Level', 5.00, 200.00, '10/10/2018', '10/10/2018', '02:00', '02:00', '1', '1', 'REDAP(R344)', 'SUMAG(B465)', 'pending', '2018-10-09 07:34:25', '2018-10-09 07:34:25');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;

-- Dumping structure for table sky.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `primary_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aditional_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `country_id`, `email`, `role`, `primary_contact`, `secondary_contact`, `address`, `aditional_notes`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admen', 5, 'admen@gmail.com', 'admen', '01784255196', '01784255197', NULL, 'NA', '$2y$10$oVuaEcNQW5CQDIbsm376LOHUy8LK8SaNfVrbVP70zldCArJIYwzyu', 'RGb2XqGBzWTZTYKL5boBasZ3eELKZu5V4uI0Glrt1GOesNyG6RWsuEDWz4uU', '2018-10-02 06:28:32', '2018-10-02 06:28:32'),
	(2, 'Customer', 5, 'customer@gmail.com', 'customer', '01784255199', NULL, NULL, NULL, '$2y$10$8BEmDbRFO6hGUatvJTcVq./yWJF/x5jPA09RK6Yu2UgehOMX.Zw02', 'DmdCNSRZrdzjNBeSrwyufZGhrWgn934Yq1HUXkTJPp5ztValTsHp9OIYXqAL', '2018-10-09 06:56:06', '2018-10-09 06:56:06'),
	(3, 'Customer1', 5, 'customer1@example.com', 'customer', '01784255198', NULL, NULL, NULL, '$2y$10$GORpaX37YgoKvXtb5o.4o.kJ37Ob8QYw.s5QZbxGcAgUXjZzJ76MC', 'MntaaP57YiKVerUWbq7SuWCwepB00xspV691rsaz1Pc1Cw5v4mcBNNHCNUKv', '2018-10-09 07:00:58', '2018-10-09 07:00:58'),
	(4, 'Newton D\'Cruze', 5, 'newtondcruze@gmail.com', 'super-admen', '01777544108', NULL, NULL, NULL, '$2y$10$og/MFZY4Am.DfpN5znGrA.fncM/fCNL2xViic3O3crZ1c5bRd5zF.', '13JBLAVQEVHjpSzkG7HPK9G7EKam4iOeu1CmAZLZFp4F3Tfosw0P44KbRE6q', '2018-10-24 08:42:44', '2018-10-24 08:42:44'),
	(5, 'Moderator', 5, 'moderator@gmail.com', 'moderator', '01784255133', NULL, NULL, NULL, '$2y$10$z8JBSRtUx57enpjenn03GOigZ7D87zD9F0N.Uv5PK/XKnDkZpZ9w2', 'mnz2DTiKETYpgN4vytgqOCjIMuskwemAOFwOWI6ASSaFpPbKMthS8k5xMBMB', '2018-11-03 05:52:05', '2018-11-03 05:52:05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
