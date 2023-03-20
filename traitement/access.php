<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "reflexivite";
$dsn = "mysql:host=localhost;dbname=reflexivite";

// Create connection
$conn = new PDO($dsn, $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);

// Check connection
?>