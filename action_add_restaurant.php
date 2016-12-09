<?php
    $errors = array();
    if (trim($_POST['name']) == '') array_push($errors, 'Name is mandatory.');
    if (trim($_POST['description']) == '') array_push($errors, 'Description is mandatory.');
    if (trim($_POST['image_url']) == '' && $_FILES['image_file']['name'] == '') array_push($errors, 'Image URL or image file is mandatory.');
    if (trim($_POST['image_url']) != '' && $_FILES['image_file']['name'] != '') array_push($errors, 'Only one field must be filled (image URL or image file).');
    if (trim($_POST['address']) == '') array_push($errors, 'Address is mandatory.');
    if (!isset($_GET['ownerId'])) array_push($errors, 'ownerId not set.');
      
    if (sizeof($errors) != 0) {
      foreach($ret['messages'] as $m)
        echo $m . "<br>";
    }
    else {
      include_once('database/init.php');
      include_once('database/restaurant.php');
      include_once('load_image.php');

      try {
        if (trim($_POST['image_url']) != '') {
          addRestaurant($dbh, $_POST['name'], $_POST['description'], $_POST['image_url'], $_POST['address'], $_GET['ownerId']);
          $array = getRestaurantId($dbh, $_POST['name'], $_POST['description'], $_POST['image_url'], $_POST['address'], $_GET['ownerId']);
        }
        else if ($_FILES['image_file']['name'] != '') {
          $target_dir = load_image($_FILES['image_file']);
          if($target_dir === false)
            echo "File is not an image.<br>";
          else {
  	    addRestaurant($dbh, $_POST['name'], $_POST['description'], $target_dir, $_POST['address'], $_GET['ownerId']);
  	    $array = getRestaurantId($dbh, $_POST['name'], $_POST['description'], $target_dir, $_POST['address'], $_GET['ownerId']);
          }
         }
         else
  	   echo 'Error choosing image type to add restaurant to database.<br>';
       } catch (PDOException $e) {
         echo $e->getMessage() . "<br>";
      }

      //header('Location: view_restaurant.php?id=' . $array['restaurantId']);
    }
?>
