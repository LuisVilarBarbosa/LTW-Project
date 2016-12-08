<?php
  function createUser($dbh, $name, $image_dir, $username, $password) {
    $options = ['cost' => 15];
    $hash =  password_hash($password, PASSWORD_DEFAULT, $options);

    $stmt = $dbh->prepare('INSERT INTO users VALUES (?, ?, ?, ?)');
    $stmt->execute(array($name, $image_dir, $username, $hash));
  }

  function verifyUser($dbh, $username, $password) {
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetch();
    return ($user !== false && password_verify($password, $user['password']));
  }

  function getUserId($dbh, $username, $password) {  // must be used after validating if user exists (verifyUser)
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));
    $users = $stmt->fetchAll();

    for($user in $users)
      if(password_verify($password, $user['password']) {
        $userId = $user['userId'];
        break;
      }

    return $userId;
  }
?>
