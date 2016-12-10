<?php
  include_once('database/restaurant.php');
  include_once('load_image.php');

  $name = trim($_POST['name']);
  $description = trim($_POST['description']);
  $image_url = trim($_POST['image_url']);
  $image_file = $_FILES['image_file'];
  $address = trim($_POST['address']);
  $restaurantId = $_GET['restaurantId'] || NULL;

  $errors = array();
  if ($name == '') array_push($errors, 'Name is mandatory.');
  if ($description == '') array_push($errors, 'Description is mandatory.');
  if ($image_url == '' && $image_file['name'] == '') array_push($errors, 'Image URL or image file is mandatory.');
  if ($image_url != '' && $image_file['name'] != '') array_push($errors, 'Only one field must be filled (image URL or image file).');
  if ($address == '') array_push($errors, 'Address is mandatory.');
  if (!isset($_GET['ownerId'])) array_push($errors, 'ownerId not set.');

  if (sizeof($errors) != 0) {
    foreach($errors as $e)
      echo $e . '<br>';
  }
  else {

    function add_edit_restaurant($restaurantId, $name, $description, $image_dir, $address, $ownerId) {
      if($restaurantId != NULL)
        updateRestaurant($restaurantId, $name, $description, $image_dir, $address, $ownerId);
      else {
        createRestaurant($name, $description, $image_dir, $address, $ownerId);
        $_GET['restaurantId'] = getRestaurantId($name, $description, $image_dir, $address, $ownerId);
      }
    }

    try {
      if ($image_url != '')
        add_edit_restaurant($restaurantId, $name, $description, $image_url, $address, $_GET['ownerId']);
      else if ($image_file['name'] != '') {
        $target_dir = load_image($image_file);
        if($target_dir === false)
          echo 'File is not an image.<br>';
        else
          add_edit_restaurant($restaurantId, $name, $description, $target_dir, $address, $_GET['ownerId']);
      }
      else
        echo 'Error choosing image type to add restaurant to database.<br>';
    } catch (PDOException $e) {
      echo $e->getMessage() . '<br>';
    }

      //header('Location: view_restaurant.php?id=' . $_GET['restaurantId']);
  }
?>
