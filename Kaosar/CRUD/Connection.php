<?php

$method = $_SERVER['REQUEST_METHOD'];

// Database connection variables
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "PHP_CRUD";
$tableName = "Users";

$connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($connection->connect_error) {
  echo'Database connection failed';
} else {
  echo 'Database is connected';
}

