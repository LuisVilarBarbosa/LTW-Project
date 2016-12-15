<?php
	include('config/init.php');
	include('verify_session.php');
	//include('database/restaurant.php');
	include('database/user.php');

	try {
		$user = getUserById($_SESSION['userId']);
		//$restaurants=getRestaurantsByOwner($_SESSION['userId']);
	} catch(PDOException $e) {
		array_push($_SESSION['error_messages'], $e->getMessage());
	}

	include('templates/header.php');
	include('templates/user_profile.php');
	include('templates/footer.php');
?>
