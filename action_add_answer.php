<?php
  include('config/init.php');
  include('verify_session.php');
  include('database/restaurantReview.php');

  $reviewId = $_POST['reviewId'];
  $answer = trim(strip_tags($_POST['answer']));
  $restaurantId = $_POST['restaurantId'];

  try {
    addRestaurantReviewAnswer($reviewId, $answer);
  } catch (PDOException $e) {
    array_push($_SESSION['error_messages'], $e->getMessage());
  }

  header('Location: restaurant_page.php?id=' . $restaurantId);
?>
