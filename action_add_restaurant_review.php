<?php
  include('config/init.php');
  include('verify_session.php');
  include('database/restaurantReview.php');

  $userId = $_SESSION['userId'];
  $restaurantId = $_GET['restaurantId']);
  $comment = trim(strip_tags($_POST['comment']));
  $score = $_POST['score'];

  preg_match('/[1-5]/', $score, $matches);
  if(sizeof($matches) != 1 || $matches[0] != $score) array_push($_SESSION['error_messages'], 'The score must be between 1 and 5.');

  if(sizeof($_SESSION['error_messages']) == 0) {
    try {
      createRestaurantReview($userId, $restaurantId, $comment, $score);
    } catch (PDOException $e) {
      array_push($_SESSION['error_messages'], $e->getMessage());
    }
  }

  header('Location: restaurant_page.php?id=' . $restaurantId);
?>
