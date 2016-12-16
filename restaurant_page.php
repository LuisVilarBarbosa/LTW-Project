<?php
	include('config/init.php');
	include('verify_session.php');
	include('database/restaurant.php');
	include('database/user.php');
	include('database/restaurantReview.php');

	try {
		$user = getUserById($_SESSION['userId']);
		$restaurant = getRestaurantById($_GET['restaurantId']);
		$restaurants = getRestaurantsByOwner($_SESSION['userId']);
		$reviews = getRestaurantReviewsByRestaurantId($_GET['restaurantId']);
		$owner = getUserById($restaurant['ownerId']);
	} catch(PDOException $e) {
		array_push($_SESSION['error_messages'], $e->getMessage());
	}

	$sum = 0;
	foreach($comments as $comment)
		$sum += $comment['score'];
	$avgScore = $sum / sizeof($comments);

	include('templates/header.php');
	include('templates/restaurant_page.php');
	include('templates/footer.php');
?>
