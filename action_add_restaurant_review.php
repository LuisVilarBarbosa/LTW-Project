<?php
  include('config/init.php');
  include('verify_session.php');
  include('database/restaurantReview.php');

  $userId = $_SESSION['userId'];
  $restaurantId = $_GET['restaurantId']);
  $comment = trim(strip_tags($_POST['comment']));
  $score = $_POST['score'];

  if($comment == '')
    $comment = NULL;

  try {
    createRestaurantReview($userId, $restaurantId, $comment, $score);
  } catch (PDOException $e) {
    array_push($_SESSION['error_messages'], $e->getMessage());
  }

  header('Location: restaurant_page.php?id=' . $restaurantId);
?>
