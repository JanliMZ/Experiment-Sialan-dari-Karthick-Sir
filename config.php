<?php
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'eshop');
define('DB_PORT','3307');

$mysqli = new mysqli('root', '', '127.0.0.1', 'eshop', "3307");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
