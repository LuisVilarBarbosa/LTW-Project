<?php
  include('config/init.php');
  include('database/user.php');
  include('load_image.php');

  $name = trim(strip_tags($_POST['name']));
  $image_dir = load_image($_FILES['image']);
  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];

  $errors = array();
  if($name == '') array_push($errors, 'A name must be indicated.');
  if($image_dir == NULL) array_push($errors, 'File is not an image. / An image must be indicated.');
  if($username == '') array_push($errors, 'An username must be indicated.');
  if($password == '') array_push($errors, 'A password must be indicated.');

  if (sizeof($errors) != 0) {
    foreach($errors as $e)
      echo $e . '<br>';
  }
  else {
    if(isset($_SESSION['userId']))
      updateUser($_SESSION['userId'], $name, $image_dir, $username, $password);
    else {
      createUser($name, $image_dir, $username, $password);
      header('Location: action_login.php');
    }
  }
?>
