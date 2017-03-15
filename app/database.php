<?php

# Database Connection Credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blockblog');

$db = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($db->connect_error){
	die("Sorry! We're having trouble to connect with database. :(");
	exit();
}