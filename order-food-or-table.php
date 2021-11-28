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
			<h1>Order food or table</h1>
			<form class="login-or-register-form" method="post" action="/post-actions/register.php">
				<h2>Register</h2>
				<p>If you are not registered, you have to register to order food or table in restaurant.</p>
				<p>It takes only one easy step!</p>
				<p class="warning"><b>Warning!</b> This reservation system is still experimental! Please <b>do not provide your sensitive personal data!</b> We respect EU General Data Protection Reglament and your privacy!</p>
				<label>Name:</label>
				<input type="text" name="name">
				<label>Email:</label>
				<input type="text" name="email">
				<label>Address:</label>
				<input type="text" name="address">
				<label>Password:</label>
				<input type="password" name="password">
				<label>Confirm password:</label>
				<input type="password" name="confirm_password">
				<button type="Submit">Register</button>
			</form>
			<form class="login-or-register-form" method="get" action="/order-food-or-table.php">
				<h2>Log in</h2>
				<p>Log in to order food or to reserve a table at our restaurant.</p>
				<label>Email:</label>
				<input type="text" name="email">
				<label>Password:</label>
				<input type="password" name="password">
				<button type="Submit">Log in</button>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>
