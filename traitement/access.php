<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cinema";
$dsn = "mysql:host=localhost;dbname=cinema";

// Create connection
$conn = new PDO($dsn, $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);

// Check connection
?>