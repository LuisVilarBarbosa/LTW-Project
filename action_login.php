<?php
  include_once('database/user.php');

  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];

  if (verifyUser($username, $password)) {
    $userId = getUserId($username, $password);
    $_SESSION['userId'] = $userId;
  }

  header('Location: user_profile.php?id=" . $userId');  
?>
