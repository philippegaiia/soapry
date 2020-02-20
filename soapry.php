<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.9.1
 */

/**
 * Database `soapry`
 */

/* `soapry`.`batches` */
$batches = array(
  array('id' => '1','product_id' => '2','number' => '','production_date' => '2020-02-19','produced' => '0','ready_date' => '2020-02-29','oil_weight' => '26.000','units' => '288','status' => '0','comments' => NULL,'created_at' => NULL,'updated_at' => NULL),
  array('id' => '3','product_id' => '2','number' => 'TEMP1001','production_date' => '2020-02-20','produced' => '1','ready_date' => '2020-02-29','oil_weight' => '25.000','units' => '288','status' => '1','comments' => NULL,'created_at' => '2020-02-17 05:19:49','updated_at' => '2020-02-17 05:20:15'),
  array('id' => '4','product_id' => '3','number' => '477','production_date' => '2020-02-09','produced' => '0','ready_date' => '2020-02-19','oil_weight' => '123.000','units' => '288','status' => '1','comments' => NULL,'created_at' => '2020-02-17 06:05:31','updated_at' => '2020-02-17 08:19:56'),
  array('id' => '5','product_id' => '2','number' => 'TEMP1004','production_date' => '2020-02-28','produced' => '0','ready_date' => '2020-02-27','oil_weight' => '23.000','units' => '288','status' => '1','comments' => NULL,'created_at' => '2020-02-17 06:05:59','updated_at' => '2020-02-17 06:05:59'),
  array('id' => '6','product_id' => '3','number' => '476','production_date' => '2020-02-29','produced' => '0','ready_date' => '2020-03-30','oil_weight' => '26.000','units' => '288','status' => '1','comments' => NULL,'created_at' => '2020-02-17 08:09:54','updated_at' => '2020-02-17 08:13:48')
);

/* `soapry`.`failed_jobs` */
$failed_jobs = array(
);

/* `soapry`.`followups` */
$followups = array(
);

/* `soapry`.`migrations` */
$migrations = array(
  array('id' => '13','migration' => '2014_10_12_000000_create_users_table','batch' => '1'),
  array('id' => '14','migration' => '2014_10_12_100000_create_password_resets_table','batch' => '1'),
  array('id' => '15','migration' => '2019_08_19_000000_create_failed_jobs_table','batch' => '1'),
  array('id' => '25','migration' => '2020_02_08_213126_create_product_categories_table','batch' => '2'),
  array('id' => '46','migration' => '2020_02_09_142304_create_products_table','batch' => '3'),
  array('id' => '47','migration' => '2020_02_09_143507_create_batches_table','batch' => '3'),
  array('id' => '48','migration' => '2020_02_16_155446_create_tasks_table','batch' => '3'),
  array('id' => '49','migration' => '2020_02_16_160917_create_followups_table','batch' => '3')
);

/* `soapry`.`password_resets` */
$password_resets = array(
);

/* `soapry`.`products` */
$products = array(
  array('id' => '2','code' => '02','name' => 'UNIQUE NATURE','weight' => '100','product_category_id' => '1','active' => '1','comments' => 'C','created_at' => '2020-02-16 22:26:14','updated_at' => '2020-02-16 22:26:14'),
  array('id' => '3','code' => '01','name' => 'UNIQUE TRES DOUX','weight' => '100','product_category_id' => '1','active' => '1','comments' => 'dsf','created_at' => '2020-02-17 04:58:51','updated_at' => '2020-02-17 04:58:51'),
  array('id' => '4','code' => '03','name' => 'ALEP 15%','weight' => '100','product_category_id' => '1','active' => '1','comments' => 'C','created_at' => '2020-02-17 08:16:39','updated_at' => '2020-02-17 08:16:39')
);

/* `soapry`.`product_categories` */
$product_categories = array(
  array('id' => '1','code' => 'SAV','name' => 'SAVON','created_at' => NULL,'updated_at' => NULL),
  array('id' => '2','code' => 'BAU','name' => 'BAUMES','created_at' => NULL,'updated_at' => NULL)
);

/* `soapry`.`tasks` */
$tasks = array(
);

/* `soapry`.`users` */
$users = array(
  array('id' => '1','name' => 'Philippe Maradan','email' => 'pmaradan@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$9Y8QypF0ttisaPgzL6dXp.miUdg8wtvCB3XAUis0yR6Q.Hgq2ncr2','remember_token' => NULL,'created_at' => '2020-02-15 10:17:59','updated_at' => '2020-02-15 10:17:59'),
  array('id' => '2','name' => 'Philippe Maradan','email' => 'phil@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$1iwr/SciiWwS2IO25JQcI.Z1vo.O2qYnIpdCW0ORPmONMzw5WL5ry','remember_token' => NULL,'created_at' => '2020-02-16 20:31:26','updated_at' => '2020-02-16 20:31:26')
);
