<?php
  include('config/init.php');
  include('database/user.php');

  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];

  try {
    if (verifyUser($username, $password)) {
      $userId = getUserId($username, $password);
      $_SESSION['userId'] = $userId;
    }
  else
    array_push($_SESSION['error_messages'], 'Invalid credentials.');
  } catch (PDOException $e) {
    array_push($_SESSION['error_messages'], $e->getMessage());
  }

  if (isset($_SESSION['userId']))
    header('Location: user_profile.php?id=' . $userId);
  else
    header('Location: start_page.php');
?>
