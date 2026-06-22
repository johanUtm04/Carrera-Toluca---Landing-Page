-- MySQL dump 10.13  Distrib 8.4.3, for Win64 (x86_64)
--
-- Host: localhost    Database: carrera_toluca
-- ------------------------------------------------------
-- Server version	8.4.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2026_05_22_170538_add_payments_fields_users_table',1),(2,'2026_05_26_213141_add_payment_fields_to_users_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `registration_id` bigint unsigned NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` enum('stripe','mercadopago','paypal','cash') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `registration_id` (`registration_id`),
  UNIQUE KEY `transaction_id` (`transaction_id`),
  CONSTRAINT `fk_payments_registration` FOREIGN KEY (`registration_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `races`
--

DROP TABLE IF EXISTS `races`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `races` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `race_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `distance_km` decimal(5,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `races`
--

LOCK TABLES `races` WRITE;
/*!40000 ALTER TABLE `races` DISABLE KEYS */;
/*!40000 ALTER TABLE `races` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `runner_id` bigint unsigned NOT NULL,
  `race_id` bigint unsigned NOT NULL,
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `bib_number` int DEFAULT NULL,
  `status` enum('pending','paid','cancelled') DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bib_number` (`bib_number`),
  KEY `fk_registrations_runner` (`runner_id`),
  KEY `fk_registrations_race` (`race_id`),
  CONSTRAINT `fk_registrations_race` FOREIGN KEY (`race_id`) REFERENCES `races` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_registrations_runner` FOREIGN KEY (`runner_id`) REFERENCES `runners` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrations`
--

LOCK TABLES `registrations` WRITE;
/*!40000 ALTER TABLE `registrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `runners`
--

DROP TABLE IF EXISTS `runners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `runners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `age` int NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `t_shirt_size` enum('XS','S','M','L','XL','XXL') NOT NULL,
  `emergency_contact_phone` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `fk_runners_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `runners`
--

LOCK TABLES `runners` WRITE;
/*!40000 ALTER TABLE `runners` DISABLE KEYS */;
/*!40000 ALTER TABLE `runners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('runner','admin') DEFAULT 'runner',
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `payment_id` varchar(255) DEFAULT NULL,
  `bib_number` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stripe_session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Runner Test','test@test.com','$2y$12$HaU/idevrFcb2I5kolDGg.uegyEG/pLJaoQ4R.XLRFcWUy6hKtvva','runner','pending',NULL,NULL,'zdVUlawWegcyMwMCnTbIy7iqzamZFbkZBZw1ktMGOuyxwb9GxtQhSfeyKA0H','2026-05-21 00:08:51','2026-05-22 18:32:11',NULL),(2,'Axel Gabriel','axel@gmail.com','$2y$12$5s0f89hdBit99EAot4uoieroijv9JTtsXwcsJDod5PpuJv4GXbCa2','runner','pending',NULL,NULL,NULL,'2026-05-22 22:12:52','2026-05-22 22:12:52',NULL),(3,'Karen Reyes Gutiérrez','keren@gmail.com','$2y$12$SQ15jrkiiOL82OF6.i9XXems7aymrXK2wa90lFGyn6hb5wt1Rocp.','runner','pending',NULL,NULL,NULL,'2026-05-23 02:36:45','2026-05-23 02:36:45',NULL),(4,'johan','johan@gmail.com','$2y$12$xKjoy1WarhPxiJPzOrKrmuTRsb0yIhWjqaZRc0MDSsUcJk5f8qQIi','runner','pending',NULL,NULL,NULL,'2026-05-27 03:20:17','2026-05-27 03:20:17',NULL),(5,'goku perez','perez@gmail.com','$2y$12$kupAvSmUhJI9jMR0WMoOrud8Btv997c0O2HytBER/s45yoUZyL0fK','runner','unpaid',NULL,NULL,'Ugp72LGLnfeQuynelg93ux2hM3T9VcoVL9w9ycTvNwT5rOaaFXxC8DPuVjE0','2026-05-28 21:15:48','2026-05-28 18:29:00',NULL),(6,'aczino','aczino@gmail.com','$2y$12$hYI4IFjqCE.1N2wMLJUkj.WIXs/LlFEBWEMUkO8e5wdz7N/dCd7yy','runner','unpaid',NULL,NULL,NULL,'2026-05-28 23:25:07','2026-05-28 23:25:07',NULL),(7,'natanel cano','natanel@gmail.com','$2y$12$VZ9UivMV9PuG1Snr.FrSOOnMHPQpALReq5Gs1bnizumUndmaONrfm','runner','unpaid',NULL,NULL,NULL,'2026-05-29 00:29:45','2026-05-29 00:29:45',NULL),(8,'lucas','lucas@gmail.com','$2y$12$fGX02sFtFpWh8.AEdlrOuuFEBBmHEWRRe1mD9YsdekJ5WxicsgzEW','runner','unpaid',NULL,NULL,NULL,'2026-05-29 00:35:19','2026-05-29 00:35:19',NULL),(9,'mario','mario@gmail.com','$2y$12$KqnAd30ZFDC4TmZarsZcdesJiEjtu0yurEij8o/WuqxlZtDWNNVPi','runner','unpaid',NULL,NULL,NULL,'2026-05-29 00:52:43','2026-05-29 00:52:43',NULL),(10,'luigui','luigui@gmail.com','$2y$12$vnGO9J23xFornMeKXKdfSukAdTNkoiOsuo.VROBxGnK45H7b/5/4e','runner','unpaid',NULL,NULL,NULL,'2026-05-29 00:58:57','2026-05-29 00:58:57',NULL),(11,'toad','toad@gmail.com','$2y$12$YaIivun4EOK7kX1MiqUb2.VkVCZpr3r5uzt3tbtrwTpPrUh63eeEu','runner','unpaid',NULL,NULL,NULL,'2026-05-29 01:01:48','2026-05-29 01:01:48',NULL),(12,'peach','peach@gmail.com','$2y$12$N.0Nfd9B3n9OKe9KFvCA8u/B95sTckTVBEjkTpc/q9v7.WQgGYZee','runner','unpaid',NULL,NULL,NULL,'2026-05-29 01:06:13','2026-05-29 01:06:13',NULL),(13,'juegos','juegos@gmail.com','$2y$12$eQU4e96FryCr2f7vGA.HUO.iAtwQCUkOiDkKfBIvUW/5okgSifx36','runner','unpaid',NULL,NULL,NULL,'2026-05-29 01:25:04','2026-05-29 01:25:04',NULL),(14,'link','link@gmail.com','$2y$12$GLPvx024P4qbhbFqUOUxpOg4nN8Yk4av.FGcqOuzklMmdIxMuYsaa','runner','unpaid',NULL,NULL,NULL,'2026-05-29 01:32:14','2026-05-29 01:32:14',NULL),(15,'fedelobo','fedelobo@gmail.com','$2y$12$3t5X21RGCJIrVBwSv5OFjuAtNPVeF4PfSJyIgZ1pjb6CeTaZVUve6','runner','paid',NULL,NULL,NULL,'2026-05-29 01:42:59','2026-05-29 01:43:30','cs_test_a1hzf4HHQyn7zvgzWmB4D1c6bhP7q6I811qppYloqkb9LI3WAeRFVZtasQ'),(16,'Luisito Rey','luisitorey@gmail.com','$2y$12$fxKJOsHs4hFyUjC7eSFfsuS/2eFL8mom9DskHEDlPosLMhjYMTgzy','runner','paid',NULL,NULL,'bmtww8zUEjTHggJvR6zOaUCWa4YAgsxDAR5c0VgWueOET8v2SDf5DM30JCuf','2026-05-29 01:46:09','2026-05-28 19:57:14','cs_test_a1wJFw9MIaSyojA2FjyzoWjeVGtriZsX2Q0KnauEA46fbkklgndp29d3MK'),(17,'ronaldo','ronaldo@gmail.com','$2y$12$6RFpvaAVWx/DIXYBs.fVKu8iu2WHV6457tvjhTdjfNhvBS88hHBTq','runner','unpaid',NULL,NULL,NULL,'2026-05-29 20:47:43','2026-05-29 20:47:44','cs_test_a1RenSCwYRgN5UsyWtJkKB4yteVynTXGoXkd32SnAHHLx7MAKsCvI5YZCv');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-22 15:58:26
