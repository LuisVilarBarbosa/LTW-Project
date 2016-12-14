<?php
  include('config/init.php');
  include('database/restaurant.php');
  include('load_image.php');

  $name = trim($_POST['name']);
  $description = trim($_POST['description']);
  $image_url = trim($_POST['image_url']);
  $image_file = $_FILES['image_file'];
  $address = trim($_POST['address']);
  $restaurantId = $_GET['restaurantId'] || NULL;

  if ($name == '') array_push($_SESSION['error_messages'], 'Name is mandatory.');
  if ($description == '') array_push($_SESSION['error_messages'], 'Description is mandatory.');
  if ($image_url == '' && $image_file['name'] == '') array_push($_SESSION['error_messages'], 'Image URL or image file is mandatory.');
  if ($image_url != '' && $image_file['name'] != '') array_push($_SESSION['error_messages'], 'Only one field must be filled (image URL or image file).');
  if ($address == '') array_push($_SESSION['error_messages'], 'Address is mandatory.');
  if (!isset($_SESSION['userId'])) array_push($errors, 'userId not set.'); // if the page is well done, must never be true

  if (sizeof($_SESSION['error_messages']) != 0) {
    header('Location: add_edit_restaurant.php');
  }
  else {

    function add_edit_restaurant($restaurantId, $name, $description, $image_dir, $address, $ownerId) {
      if ($restaurantId != NULL)
        updateRestaurant($restaurantId, $name, $description, $image_dir, $address, $ownerId);
      else {
        createRestaurant($name, $description, $image_dir, $address, $ownerId);
        $_GET['restaurantId'] = getRestaurantId($name, $description, $image_dir, $address, $ownerId);
      }
    }

    try {
      if ($image_url != '')
        add_edit_restaurant($restaurantId, $name, $description, $image_url, $address, $_SESSION['userId']);
      else if ($image_file['name'] != '') {
        $imege_dir = load_image($image_file);
        if ($imege_dir == NULL)
          array_push($_SESSION['error_messages'], 'File is not an image.');
        else
          add_edit_restaurant($restaurantId, $name, $description, $target_dir, $address, $_SESSION['userId']);
      }
      else
        array_push($_SESSION['error_messages'], 'Error choosing image type to add restaurant to database.');
    } catch (PDOException $e) {
      array_push($_SESSION['error_messages'], $e->getMessage());
    }

    if (sizeof($_SESSION['error_messages']) != 0)
      header('Location: add_edit_restaurant.php');
    else
      header('Location: view_restaurant.php?id=' . $_GET['restaurantId']);
  }
?>
