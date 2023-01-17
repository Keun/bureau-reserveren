<?php
$servername = "localhost";
$username = "DB_USER";
$password = "DB_PASS";
$dbname = "DB_NAME";

$db = new mysqli($servername, $username, $password, $dbname);
if ($db->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}