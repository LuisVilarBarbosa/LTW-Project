<?php
  if (!isset($_POST['name']) || trim($_POST['name']) == '') die('Name is mandatory.');
  if (!isset($_POST['description']) || trim($_POST['description']) == '') die('Description is mandatory.');
  if (!isset($_POST['image_dir']) || trim($_POST['image_dir']) == '') die('Image directory is mandatory.');

  /*$target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);	# full dir must not exist in database
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is an actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image."; # manter na página e alertar utilizador
          $uploadOk = 0;
      }
  }*/

  include_once('database/connection.php');
  include_once('database/manipulate_database.php');

  try {
    addRestaurant($dbh, $_POST['name'], $_POST['description'], $_POST['image_dir']);
    $array = getRestaurantId($dbh, $_POST['name'], $_POST['description'], $_POST['image_dir']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  if(sizeof($array) != 1)
    die('Zero or more than one restaurants with the same caracteristics found in the database.');

  header('Location: view_restaurant.php?id=' . $array[0]['restaurantId']);
?>
