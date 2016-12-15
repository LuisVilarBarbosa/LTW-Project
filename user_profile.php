<?php

	include('config/init.php');
  $user = getUserById($_SESSION['userId']);
	//$restaurants=getRestaurantsByOwner($_SESSION['userId']);
	include('templates/header.php');
	include('templates/user_profile.php');
	include('templates/footer.php');




?>
