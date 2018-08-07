<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "itamar";

$option = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"];

$db = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $dbuser, $dbpass, $option);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


