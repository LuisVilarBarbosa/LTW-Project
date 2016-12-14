<?php
  function createRestaurantReview($userId, $restaurantId, $comment, $score) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO restaurantReviews (userId, restaurantId, comment, score) VALUES (?, ?, ?, ?)');
    $stmt->execute(array($userId, $restaurantId, $comment, $score));
  }
?>
