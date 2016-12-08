<?php
  function createRestaurantReview($dbh, $userId, $restaurantId, $comment, $score) {
    $stmt = $dbh->prepare('INSERT INTO restaurantReviews VALUES (?, ?, ?, ?)');
    $stmt->execute(array($userId, $restaurantId, $comment, $score));
  }
?>
