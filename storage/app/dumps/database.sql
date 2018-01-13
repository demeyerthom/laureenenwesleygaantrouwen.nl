
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'author_id','text','Author',1,0,1,1,0,1,'',2),(3,1,'category_id','text','Category',1,0,1,1,1,0,'',3),(4,1,'title','text','Title',1,1,1,1,1,1,'',4),(5,1,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',5),(6,1,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(7,1,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(8,1,'slug','text','slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',8),(9,1,'meta_description','text_area','meta_description',1,0,1,1,1,1,'',9),(10,1,'meta_keywords','text_area','meta_keywords',1,0,1,1,1,1,'',10),(11,1,'status','select_dropdown','status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(12,1,'created_at','timestamp','created_at',0,1,1,0,0,0,'',12),(13,1,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',13),(14,2,'id','number','id',1,0,0,0,0,0,'',1),(15,2,'author_id','text','author_id',1,0,0,0,0,0,'',2),(16,2,'title','text','title',1,1,1,1,1,1,'',3),(17,2,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',4),(18,2,'body','rich_text_box','body',1,0,1,1,1,1,'',5),(19,2,'slug','text','slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"}}',6),(20,2,'meta_description','text','meta_description',1,0,1,1,1,1,'',7),(21,2,'meta_keywords','text','meta_keywords',1,0,1,1,1,1,'',8),(22,2,'status','select_dropdown','status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(23,2,'created_at','timestamp','created_at',1,1,1,0,0,0,'',10),(24,2,'updated_at','timestamp','updated_at',1,0,0,0,0,0,'',11),(25,2,'image','image','image',0,1,1,1,1,1,'',12),(26,3,'id','number','id',1,0,0,0,0,0,'',1),(27,3,'name','text','name',1,1,1,1,1,1,'',2),(28,3,'email','text','email',1,1,1,1,1,1,'',3),(29,3,'password','password','password',0,0,0,1,1,0,'',4),(30,3,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}',10),(31,3,'remember_token','text','remember_token',0,0,0,0,0,0,'',5),(32,3,'created_at','timestamp','created_at',0,1,1,0,0,0,'',6),(33,3,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',7),(34,3,'avatar','image','avatar',0,1,1,1,1,1,'',8),(35,5,'id','number','id',1,0,0,0,0,0,'',1),(36,5,'name','text','name',1,1,1,1,1,1,'',2),(37,5,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(38,5,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(46,6,'id','number','id',1,0,0,0,0,0,'',1),(47,6,'name','text','Name',1,1,1,1,1,1,'',2),(48,6,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(49,6,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(50,6,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(51,1,'seo_title','text','seo_title',0,1,1,1,1,1,'',14),(52,1,'featured','checkbox','featured',1,1,1,1,1,1,'',15),(53,3,'role_id','text','role_id',1,1,1,1,1,1,'',9),(54,8,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(55,8,'name','text','Name',1,1,1,1,1,1,NULL,2),(56,8,'description','text_area','Description',1,1,1,1,1,1,NULL,3),(57,8,'image','image','Image',0,1,1,1,1,1,NULL,4),(58,8,'amount','number','Amount',1,1,1,1,1,1,NULL,5),(59,8,'order','number','Order',0,1,1,1,1,1,NULL,6),(60,8,'active','checkbox','Active',1,1,1,1,1,1,NULL,7),(61,8,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,8),(62,8,'updated_at','timestamp','Updated At',0,1,1,0,0,0,NULL,9),(63,9,'id','number','Id',1,0,0,0,0,0,NULL,1),(64,9,'token','text','Token',1,1,1,1,1,1,NULL,2),(65,9,'reception','checkbox','Reception',1,1,1,1,1,1,NULL,3),(66,9,'dinner','checkbox','Dinner',1,1,1,1,1,1,NULL,4),(67,9,'party','checkbox','Party',1,1,1,1,1,1,NULL,5),(68,9,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(69,9,'updated_at','timestamp','Updated At',0,1,1,0,0,0,NULL,7),(70,10,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(71,10,'gift_id','checkbox','Gift Id',1,0,0,0,0,0,NULL,2),(72,10,'amount','number','Amount',1,1,1,1,1,1,NULL,3),(73,10,'email','text','Email',1,1,1,1,1,1,NULL,4),(74,10,'first_name','text','First Name',1,1,1,1,1,1,NULL,5),(75,10,'last_name','text','Last Name',1,1,1,1,1,1,NULL,6),(76,10,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,7),(77,10,'updated_at','timestamp','Updated At',0,1,1,0,0,0,NULL,8),(78,11,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(79,11,'group_uid','text','Group Uid',1,1,1,1,1,1,NULL,2),(80,11,'event_permission_id','number','Event Permission Id',1,1,1,1,1,1,NULL,3),(81,11,'first_name','text','First Name',1,1,1,1,1,1,NULL,4),(82,11,'last_name','text','Last Name',1,1,1,1,1,1,NULL,5),(83,11,'email','text','Email',1,1,1,1,1,1,NULL,6),(84,11,'at_reception','checkbox','At Reception',0,1,1,1,1,1,NULL,7),(85,11,'at_dinner','checkbox','At Dinner',0,1,1,1,1,1,NULL,8),(86,11,'dinner_type','checkbox','Dinner Type',1,1,1,1,1,1,NULL,9),(87,11,'at_party','checkbox','At Party',0,1,1,1,1,1,NULL,10),(88,11,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,11),(89,11,'updated_at','timestamp','Updated At',0,1,1,0,0,0,NULL,12);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,'2017-12-29 15:22:05','2017-12-29 15:22:05'),(2,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,'2017-12-29 15:22:05','2017-12-29 15:22:05'),(3,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','','',1,0,'2017-12-29 15:22:05','2017-12-29 15:22:05'),(5,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,'2017-12-29 15:22:05','2017-12-29 15:22:05'),(6,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,'2017-12-29 15:22:05','2017-12-29 15:22:05'),(8,'gifts','gifts','Gift','Gifts','voyager-gift','App\\Entity\\Gift',NULL,NULL,NULL,1,0,'2017-12-29 15:29:02','2017-12-29 15:43:19'),(9,'event_permissions','event-permissions','Event Permission','Event Permissions','voyager-ticket','App\\Entity\\EventPermission',NULL,NULL,NULL,1,0,'2018-01-13 11:01:33','2018-01-13 11:01:33'),(10,'gift_reservations','gift-reservations','Gift Reservation','Gift Reservations','voyager-dollar','App\\Entity\\GiftReservation',NULL,NULL,NULL,1,0,'2018-01-13 11:02:23','2018-01-13 11:02:23'),(11,'invitees','invitees','Invitee','Invitees','voyager-people','App\\Entity\\Invitee',NULL,NULL,NULL,1,0,'2018-01-13 11:04:23','2018-01-13 11:04:23');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2017-12-29 15:26:21','2017-12-29 15:26:21','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,6,'2017-12-29 15:26:21','2018-01-13 10:59:21','voyager.media.index',NULL),(4,1,'Users','','_self','voyager-person',NULL,NULL,5,'2017-12-29 15:26:21','2018-01-13 10:59:21','voyager.users.index',NULL),(5,1,'Categories','','_self','voyager-categories',NULL,NULL,8,'2017-12-29 15:26:21','2018-01-13 10:59:21','voyager.categories.index',NULL),(6,1,'Pages','','_self','voyager-file-text',NULL,NULL,7,'2017-12-29 15:26:21','2018-01-13 10:59:21','voyager.pages.index',NULL),(7,1,'Roles','','_self','voyager-lock',NULL,NULL,4,'2017-12-29 15:26:21','2018-01-13 10:59:21','voyager.roles.index',NULL),(9,1,'Menu Builder','','_self','voyager-list',NULL,NULL,3,'2017-12-29 15:26:21','2018-01-13 10:59:21','voyager.menus.index',NULL),(10,1,'Database','','_self','voyager-data',NULL,NULL,10,'2017-12-29 15:26:21','2018-01-13 10:02:25','voyager.database.index',NULL),(12,1,'Settings','','_self','voyager-settings',NULL,NULL,2,'2017-12-29 15:26:21','2018-01-13 10:59:21','voyager.settings.index',NULL),(13,1,'Gifts','/admin/gifts','_self',NULL,NULL,NULL,9,'2017-12-29 15:29:02','2018-01-13 10:02:36',NULL,NULL),(14,2,'Home','','_self',NULL,'#000000',NULL,11,'2018-01-13 10:03:55','2018-01-13 10:03:55','home',NULL),(15,2,'Cadeaus','','_self',NULL,'#000000',NULL,12,'2018-01-13 10:05:05','2018-01-13 10:05:05','gift-list',NULL),(16,2,'Fotoboek','','_self',NULL,'#000000',NULL,13,'2018-01-13 10:05:43','2018-01-13 10:05:43','photobook',NULL),(17,2,'RSVP','','_self',NULL,'#000000',NULL,14,'2018-01-13 10:06:01','2018-01-13 10:06:11','rsvp-form','null'),(18,2,'Nuttige Informatie','/pages/nuttige-informatie','_self',NULL,'#000000',NULL,15,'2018-01-13 10:24:09','2018-01-13 10:24:09',NULL,''),(19,1,'Event Permissions','/admin/event-permissions','_self','voyager-ticket',NULL,NULL,16,'2018-01-13 11:01:33','2018-01-13 11:01:33',NULL,NULL),(20,1,'Gift Reservations','/admin/gift-reservations','_self','voyager-dollar',NULL,NULL,17,'2018-01-13 11:02:23','2018-01-13 11:02:23',NULL,NULL),(21,1,'Invitees','/admin/invitees','_self','voyager-people',NULL,NULL,18,'2018-01-13 11:04:24','2018-01-13 11:04:24',NULL,NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2017-12-29 15:22:05','2017-12-29 15:22:05'),(2,'home','2018-01-13 10:02:53','2018-01-13 10:03:01');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,1,'Nuttige informatie','Nuttige informatie voor de trouwerij','<p><strong>Waar is het</strong></p>\r\n<p>Het is ergens, maar wel een goede vraag waar.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hoe kom je er</strong></p>\r\n<p>Dat moet je eigenlijk zelf uit zoeken....</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Wat kan je er doen</strong></p>\r\n<p>Naar laureen en wesley kijken, en spelen met Louis</p>',NULL,'nuttige-informatie','Nuttige informatie','Nuttige informatie','ACTIVE','2018-01-13 09:50:09','2018-01-13 10:25:45');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `permission_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `permission_groups` WRITE;
/*!40000 ALTER TABLE `permission_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_groups` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,2),(2,1),(2,2),(3,1),(3,2),(4,1),(4,2),(5,1),(5,2),(6,1),(6,2),(7,1),(7,2),(8,1),(8,2),(9,1),(9,2),(10,1),(10,2),(11,1),(11,2),(12,1),(12,2),(13,1),(13,2),(14,1),(14,2),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(20,2),(21,1),(21,2),(22,1),(22,2),(23,1),(23,2),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(40,2),(41,1),(41,2),(42,1),(42,2),(43,1),(43,2),(44,1),(44,2),(45,1),(45,2),(46,1),(46,2),(47,1),(47,2),(48,1),(48,2),(49,1),(49,2),(50,1),(50,2),(51,1),(51,2),(52,1),(52,2),(53,1),(53,2),(54,1),(54,2),(55,1),(55,2),(56,1),(56,2),(57,1),(57,2),(58,1),(58,2),(59,1),(59,2);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(2,'browse_database',NULL,'2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(3,'browse_media',NULL,'2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(4,'browse_compass',NULL,'2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(5,'browse_menus','menus','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(6,'read_menus','menus','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(7,'edit_menus','menus','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(8,'add_menus','menus','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(9,'delete_menus','menus','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(10,'browse_pages','pages','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(11,'read_pages','pages','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(12,'edit_pages','pages','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(13,'add_pages','pages','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(14,'delete_pages','pages','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(15,'browse_roles','roles','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(16,'read_roles','roles','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(17,'edit_roles','roles','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(18,'add_roles','roles','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(19,'delete_roles','roles','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(20,'browse_users','users','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(21,'read_users','users','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(22,'edit_users','users','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(23,'add_users','users','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(24,'delete_users','users','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(25,'browse_posts','posts','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(26,'read_posts','posts','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(27,'edit_posts','posts','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(28,'add_posts','posts','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(29,'delete_posts','posts','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(35,'browse_settings','settings','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(36,'read_settings','settings','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(37,'edit_settings','settings','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(38,'add_settings','settings','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(39,'delete_settings','settings','2017-12-29 15:26:21','2017-12-29 15:26:21',NULL),(40,'browse_gifts','gifts','2017-12-29 15:29:02','2017-12-29 15:29:02',NULL),(41,'read_gifts','gifts','2017-12-29 15:29:02','2017-12-29 15:29:02',NULL),(42,'edit_gifts','gifts','2017-12-29 15:29:02','2017-12-29 15:29:02',NULL),(43,'add_gifts','gifts','2017-12-29 15:29:02','2017-12-29 15:29:02',NULL),(44,'delete_gifts','gifts','2017-12-29 15:29:02','2017-12-29 15:29:02',NULL),(45,'browse_event_permissions','event_permissions','2018-01-13 11:01:33','2018-01-13 11:01:33',NULL),(46,'read_event_permissions','event_permissions','2018-01-13 11:01:33','2018-01-13 11:01:33',NULL),(47,'edit_event_permissions','event_permissions','2018-01-13 11:01:33','2018-01-13 11:01:33',NULL),(48,'add_event_permissions','event_permissions','2018-01-13 11:01:33','2018-01-13 11:01:33',NULL),(49,'delete_event_permissions','event_permissions','2018-01-13 11:01:33','2018-01-13 11:01:33',NULL),(50,'browse_gift_reservations','gift_reservations','2018-01-13 11:02:23','2018-01-13 11:02:23',NULL),(51,'read_gift_reservations','gift_reservations','2018-01-13 11:02:23','2018-01-13 11:02:23',NULL),(52,'edit_gift_reservations','gift_reservations','2018-01-13 11:02:23','2018-01-13 11:02:23',NULL),(53,'add_gift_reservations','gift_reservations','2018-01-13 11:02:23','2018-01-13 11:02:23',NULL),(54,'delete_gift_reservations','gift_reservations','2018-01-13 11:02:23','2018-01-13 11:02:23',NULL),(55,'browse_invitees','invitees','2018-01-13 11:04:24','2018-01-13 11:04:24',NULL),(56,'read_invitees','invitees','2018-01-13 11:04:24','2018-01-13 11:04:24',NULL),(57,'edit_invitees','invitees','2018-01-13 11:04:24','2018-01-13 11:04:24',NULL),(58,'add_invitees','invitees','2018-01-13 11:04:24','2018-01-13 11:04:24',NULL),(59,'delete_invitees','invitees','2018-01-13 11:04:24','2018-01-13 11:04:24',NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2017-12-29 15:20:53','2017-12-29 15:20:53'),(2,'user','Normal User','2017-12-29 15:26:21','2017-12-29 15:26:21');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',8,'en','Gift','2017-12-29 15:30:25','2017-12-29 15:30:25'),(2,'data_types','display_name_plural',8,'en','Gifts','2017-12-29 15:30:25','2017-12-29 15:30:25');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

