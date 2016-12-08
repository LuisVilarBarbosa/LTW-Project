<?php
  include_once("config/init.php");
  include_once("database/user.php");
  include_once("load_image.php");

  $name = trim(strip_tags($_POST['name']));
  $image_dir = load_image($_FILES['image']);
  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];

  if($name == '') echo 'A name must be indicated.<br>';
  else if($image_dir == '') echo 'An image must be indicated.<br>';
  else if($username == '') echo 'An username must be indicated.<br>';
  else if($password == '') echo 'A password must be indicated.<br>';
  else
    createUser($dbh, $name, $image_dir, $username, $password);

  //header('Location: ');
?>
