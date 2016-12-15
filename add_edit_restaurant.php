<?php
  include('config/init.php');
  include('verify_session.php');
  include('database/restaurant.php');

  if(isset($_GET['restaurantId']))
    $restaurant = getRestaurantById($_GET['restaurantId']);
  else
    $restaurant = NULL;

  include('templates/header.php');
  include('templates/add_edit_restaurant.php');
  include('templates/footer.php');
?>
