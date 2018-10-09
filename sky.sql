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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_10_02_104637_create_requests_table', 2),
	(4, '2018_10_08_071258_create_langing_requests_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.requests: ~3 rows (approximately)
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` (`id`, `user_id`, `type`, `operator`, `billing_add`, `aircraft_reg`, `call_sign`, `trip_ref_no`, `aircraft_type`, `max_weight`, `max_weight_unit`, `purpose`, `goods_type`, `notes`, `flight_rules`, `sector`, `flight_level`, `crew_count`, `pax_count`, `depar_date`, `arri_date`, `etd_utc`, `eta_utc`, `aerodrome_of_departure`, `aerodrome_of_estination`, `fir_in`, `fir_out`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Overfly', 'Name of Operator', 'Billing Address', 'Regis', 'Call Sign', 'rip Reference No', 'Type of Aircraft', 1200.00, 'kgs', '1', '0', '122', 'IFR', 'Sector', 'Flight Leve', 10.00, 200.00, '10/08/2018', '10/08/2018', '03:00', '05:00', '2', '1', 'ATOGA(R472)', 'AGODA(R472)', 'approved', '2018-10-08 06:30:56', '2018-10-09 06:24:11'),
	(2, 1, 'Landing', 'Operator Name', 'Billing Address', 'Regis', 'Call Sign', 'rip Reference No', 'Type of Aircraft', 12000.00, 'kgs', 'Cargo Flight', '0', 'No', 'IFR', 'Sector', 'Flight Leve', 10.00, 250.00, '10/09/2018', '10/09/2018', '02:00', '03:00', '1', '1', 'VANTU(R598)', 'TEBID(G463)', 'cancelled', '2018-10-08 07:31:54', '2018-10-09 05:53:12'),
	(3, 1, 'Overfly', 'Operator', 'Address', 'Regis', 'Call Sign', 'rip Reference No', 'Type of Aircraft', 50000.00, 'kgs', 'Ferry Flight', '0', '123', 'IFR', 'Sector', 'Flight Leve', 10.00, 200.00, '10/16/2018', '10/16/2018', '02:00', '03:00', '1', '1', 'IBAPA(B593)', 'CHILA(A599)', 'cancelled', '2018-10-08 11:20:51', '2018-10-09 06:08:48');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;

-- Dumping structure for table sky.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `primary_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aditional_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sky.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `role`, `primary_contact`, `secondary_contact`, `aditional_notes`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Neher', 'neher@example.com', 'admen', '01784255196', '01784255197', 'NA', '$2y$10$oVuaEcNQW5CQDIbsm376LOHUy8LK8SaNfVrbVP70zldCArJIYwzyu', 'SC61PonlQ0KPXP3zrKHfBauwXz6HgOTuja39B7TkxcRigWQuDct3AyjENHNY', '2018-10-02 06:28:32', '2018-10-02 06:28:32'),
	(2, 'Customer', 'customer@gmail.com', 'customer', '01784255199', NULL, NULL, '$2y$10$8BEmDbRFO6hGUatvJTcVq./yWJF/x5jPA09RK6Yu2UgehOMX.Zw02', NULL, '2018-10-09 06:56:06', '2018-10-09 06:56:06'),
	(3, 'Customer1', 'customer1@example.com', 'customer', '01784255198', NULL, NULL, '$2y$10$GORpaX37YgoKvXtb5o.4o.kJ37Ob8QYw.s5QZbxGcAgUXjZzJ76MC', NULL, '2018-10-09 07:00:58', '2018-10-09 07:00:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
