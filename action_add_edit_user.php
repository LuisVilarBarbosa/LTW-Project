<?php
  include('config/init.php');
  include('database/user.php');
  include('load_image.php');

  $name = trim(strip_tags($_POST['name']));
  $image_dir = load_image($_FILES['image']);
  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];

  if($name == '') array_push($_SESSION['error_messages'], 'A name must be indicated.');
  if($image_dir == NULL) array_push($_SESSION['error_messages'], 'File is not an image. / An image must be indicated.');
  if($username == '') array_push($_SESSION['error_messages'], 'An username must be indicated.');
  if($password == '') array_push($_SESSION['error_messages'], 'A password must be indicated.');

  if(sizeof($_SESSION['error_messages']) == 0) {
    try {
      if(isset($_SESSION['userId']))
        updateUser($_SESSION['userId'], $name, $image_dir, $username, $password);
      else
        createUser($name, $image_dir, $username, $password);
    } catch(PDOException $e) {
      if($e->getCode() == 23000)
        array_push($_SESSION['error_messages'], 'Existing username. Try another.');
      else
        array_push($_SESSION['error_messages'], $e->getMessage());
    }
  }

  if(isset($_SESSION['userId']))
    header('Location: user_profile.php');
  else
    header('Location: start_page.php');
?>
