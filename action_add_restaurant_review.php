<?php
  include_once("config/init.php");
  include_once("database/restaurantReview.php");

  $userId = $_SESSION['userId'];
  $restaurantId = load_image($_POST['restaurantId']);
  $comment = trim(strip_tags($_POST['comment']));
  $score = $_POST['score'];

  if($comment == '')
    $comment = NULL;

  createRestaurantReview($dbh, $userId, $restaurantId, $comment, $score);

  //header('Location: ');
?>
