<?php

if(!defined('LYCHEE')) exit('Error: Direct access is not allowed!');

# Database configuration
$dbHost = $_ENV['DB_HOST']; # Host of the database
$dbUser = $_ENV['DB_USER']; # Username of the database
$dbPassword = $_ENV['DB_PASS']; # Password of the database
$dbName = $_ENV['DB_NAME']; # Database name
$dbTablePrefix = ''; # Table prefix

?>