<?php
require_once 'db_connect.php';

$obj = new DataBase();

$sql2 = "SHOW TABLES";

var_dump($obj->query($sql2));

$sql = "CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `is_done` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
