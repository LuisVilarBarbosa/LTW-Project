<!DOCTYPE html>
<head>
	<title>Restaurant Advisor</title>
	<meta charset="UTF-8">
	<meta name="author" name="Diogo Cruz, Luis Barbosa, Rui Araujo" />
	<meta name="description" content="Restaurants: Yelp like" />
	<meta name="keywords" content="FEUP, LTW, Restaurants, Food" />
</head>
<body>
	<header>
		<h1>Restaurant Advisor</h1>
	</header>

	<!-- Show errors -->
	<section id="errors">
			<?php foreach($error_messages as $error) {?>
				<label><?=$error?></label>
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
