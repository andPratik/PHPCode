<?php
define('DB_HOST', 'localhost:3307');
define('DB_USER', 'myadmin');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

//creating conntion
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//cheking connection
if ($con->connect_error) {
    die("connnection failed" . $con->connect_error);
}

