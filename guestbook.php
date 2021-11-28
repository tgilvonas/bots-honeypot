<?php

require 'config.php';

/*
echo '<pre>';
var_dump($connection);
echo '</pre>';
*/

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
/*
$mysqli = new mysqli($connection['db_host'], $connection['db_user'], $connection['db_password'], $connection['db_name']);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM `testimonial` ORDER BY `id` DESC LIMIT 20";
$result = $mysqli->query($sql);

// Fetch all
$testimonials = $result->fetch_all(MYSQLI_ASSOC);

// Free result set
$result->free_result();

$mysqli->close();
*/

?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'partials/head.php'; ?>
</head>
<body>
	<div class="main-wrapper">
		<div class="header">
			<?php include 'partials/header.php'; ?>
		</div>
		<div class="main-content">
			<h1>Guestbook</h1>
			<form class="testimonial-form" method="post" action="/post-actions/write-testimonial.php">
				<h2>Write testimonial</h2>
				<p>We appreciate your testimonials.</p>
				<p class="warning"><b>Warning!</b> This page is experimental! Please <b>do not provide your sensitive personal data!</b> We respect EU General Data Protection Reglament and your privacy!</p>
				<div class="">
					<label>Name:</label>
					<input type="text" name="name">
				</div>
				<div class="">
					<label>Email:</label>
					<input type="text" name="email">
				</div>
				<div class="">
					<label>Your testimonial:</label>
					<textarea name="testimonial"></textarea>
				</div>
				<button type="Submit">Post a testimonial!</button>
			</form>
		</div>
	</div>
</body>
</html>
