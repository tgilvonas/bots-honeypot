<?php

require '../config.php';

// Create connection
$conn = new mysqli($connection['db_host'], $connection['db_user'], $connection['db_password'], $connection['db_name']);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO guestbook (name, email, testimonial) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $testimonial);

// set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$testimonial = $_POST['testimonial'];
$stmt->execute();

$stmt->close();
$conn->close();

header('Location: /guestbook.php');
exit();
