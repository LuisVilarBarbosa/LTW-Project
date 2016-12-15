<?php
  include('config/init.php');
  include('verify_session.php');
  include('database/restaurant.php');

  try {
    if(isset($_GET['restaurantId']))
      $restaurant = getRestaurantById($_GET['restaurantId']);
    else
      $restaurant = NULL;
  } catch (PDOException $e) {
    array_push($_SESSION['error_messages'], $e->getMessage());
  }

  include('templates/header.php');
  include('templates/add_edit_restaurant.php');
  include('templates/footer.php');
?>
