<?php
  include_once('config/init.php');
  include_once('database/user.php');

  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];

  if (verifyUser($dbh, $username, $password)) {
    $userId = getUserId($dbh, $username, $password);
    $_SESSION['userId'] = $userId;
  }

  //header('Location: ');  
?>
