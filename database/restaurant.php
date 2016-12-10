<?php
  function createRestaurant($dbh, $name, $description, $image_dir, $address, $ownerId) {
    $stmt = $dbh->prepare('INSERT INTO restaurants (name, description, image_dir, address, ownerId) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute(array($name, $description, $image_dir, $address, $ownerId));
  }

  function getRestaurantId($dbh, $name, $description, $image_dir, $address, $ownerId) {
    $stmt = $dbh->prepare('SELECT restaurantId FROM restaurants WHERE name = ? AND description = ? AND image_dir = ? AND address = ? AND ownerId = ?');
    $stmt->execute(array($name, $description, $image_dir, $address, $ownerId));
    return $stmt->fetch();	// what if there are more than one restaurant with this values?
  }

  function getRestaurantsByOwner($dbh, $ownerId) {
    $stmt = $dbh->prepare('SELECT * FROM restaurants WHERE ownerId = ?');
    $stmt->execute(array($ownerId));
    return $stmt->fetchAll();
  }
?>
