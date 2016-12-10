<?php
  include_once("database/user.php");
  include_once("load_image.php");

  $name = trim(strip_tags($_POST['name']));
  $image_dir = load_image($_FILES['image']);
  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];

  $errors = array();
  if($name == '') array_push($errors, 'A name must be indicated.');
  if($image_dir == '') array_push($errors, 'An image must be indicated.');
  if($username == '') array_push($errors, 'An username must be indicated.');
  if($password == '') array_push($errors, 'A password must be indicated.');

  if (sizeof($errors) != 0) {
    foreach($errors as $e)
      echo $e . '<br>';
  }
  else {
    if(isset($_SESSION['userId']))
      updateUser($_SESSION['userId'], $name, $image_dir, $username, $password);
    else
      createUser($name, $image_dir, $username, $password);
  }

  //header('Location: ');
?>
