<?php
  include_once('config/init.php');

  function createRestaurantReview($userId, $restaurantId, $comment, $score) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO restaurantReviews VALUES (?, ?, ?, ?)');
    $stmt->execute(array($userId, $restaurantId, $comment, $score));
  }
?>
