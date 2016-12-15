<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Restaurant Advisor</title>
	<meta name="author" name="Diogo Cruz, Luis Barbosa, Rui Araujo" />
	<meta name="description" content="Restaurants: Yelp like" />
	<meta name="keywords" content="FEUP, LTW, Restaurants, Food" />
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="javascript/view_restaurant.js"></script>
    <script type="text/javascript" src="javascript/pop_up.js"></script>
	<script type="text/javascript" src="javascript/slideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<header>
		<h1>Restaurant Advisor</h1>
	</header>

	<!-- Show errors -->
	<section class="errors">
		<?php foreach($error_messages as $error) {?>
			<p><?=$error?></p>
			<br />
		<?php } ?>
	</section>

	<section id="login_logout">
		<?php if (!isset($_SESSION['userId'])) { ?>
			<form action="action_login.php" method="post">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter username" name="username" required="required" />
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter password" name="password" required="required" />
				<button type="submit">Login</button>
			</form>
		<?php } else { ?>
			<form action="action_logout.php">
				<button type="submit">Logout</button>
			</form>
		<?php } ?>
	</section>
