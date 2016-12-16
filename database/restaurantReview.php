<?php
  function createRestaurantReview($userId, $restaurantId, $comment, $score) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO restaurantReviews (userId, restaurantId, comment, score) VALUES (?, ?, ?, ?)');
    $stmt->execute(array($userId, $restaurantId, $comment, $score));
  }

  function getRestaurantReviewsByRestaurantId($restaurantId) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM restaurantReviews WHERE restaurantId = ?)');
    $stmt->execute(array($restaurantId));
    return $stmt->fetchAll();
  }
?>
