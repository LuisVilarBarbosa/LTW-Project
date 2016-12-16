<?php

	include('config/init.php');
	include('verify_session.php');
	include('database/restaurant.php');
	include('database/user.php');

	try {
		$user = getUserById($_SESSION['userId']);
		$restaurant=getRestaurantById($_GET['restaurantId']);
	} catch(PDOException $e) {
		array_push($_SESSION['error_messages'], $e->getMessage());
	}

	include('templates/header.php');
	include('templates/restaurant_page.php');
	include('templates/footer.php');
?>
