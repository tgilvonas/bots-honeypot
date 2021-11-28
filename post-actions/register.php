<?php

require '../config.php';

/*
echo '<pre>';
var_dump($connection);
echo '</pre>';
*/

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli($connection['db_host'], $connection['db_user'], $connection['db_password'], $connection['db_name']);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO register (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

// set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$stmt->execute();

$stmt->close();
$conn->close();

header('Location: /order-food-or-table.php');
exit();
