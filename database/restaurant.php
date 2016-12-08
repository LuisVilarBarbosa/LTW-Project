<?php
  function createRestaurant($dbh, $name, $description, $image_dir, $address) {
    $stmt = $dbh->prepare('INSERT INTO restaurants (name, description, image_dir, address) VALUES (?, ?, ?, ?)');
    $stmt->execute(array($name, $description, $image_dir, $address));
  }

  function getRestaurantId($dbh, $name, $description, $image_dir, $address) {
    $stmt = $dbh->prepare('SELECT restaurantId FROM Restaurant WHERE name = ? AND description = ? AND image_dir = ? AND address = ?');
    $stmt->execute(array($name, $description, $image_dir, $address));
    return $stmt->fetch();	// what if there are more than one restaurant with this values?
  }
?>
