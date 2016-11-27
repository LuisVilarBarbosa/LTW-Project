<?php

  function addRestaurant($dbh, $name, $description, $image_dir) {
    $stmt = $dbh->prepare('INSERT INTO Restaurant (name, description, image_dir) VALUES (?, ?, ?)');
    $stmt->execute(array($name, $description, $image_dir));
  }

  function getRestaurantId($dbh, $name, $description, $image_dir) {
    $stmt = $dbh->prepare('SELECT restaurantId FROM Restaurant WHERE name=? AND description=? AND image_dir=?');
    $stmt->execute(array($name, $description, $image_dir));
    return $stmt->fetchAll();
  }

?>
