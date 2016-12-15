<?php
  function generatePasswordHash($password) {
    $options = ['cost' => 15];
    return password_hash($password, PASSWORD_DEFAULT, $options);
  }

  function createUser($name, $image_dir, $username, $password) {
    global $dbh;
    $hash = generatePasswordHash($password);

    $stmt = $dbh->prepare('INSERT INTO users (name, image_dir, username, password) VALUES (?, ?, ?, ?)');
    $stmt->execute(array($name, $image_dir, $username, $hash));
  }

  function verifyUser($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetch();
    return ($user !== false && password_verify($password, $user['password']));
  }

  function getUserId($username, $password) {  // must be used after validating if user exists (verifyUser)
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));
    $users = $stmt->fetchAll();

    foreach($users as $user)
      if(password_verify($password, $user['password'])) {
        $userId = $user['userId'];
        break;
      }

    return $userId;
  }

  function updateUser($userId, $name, $image_dir, $username, $password) {
    global $dbh;
    $hash = generatePasswordHash($password);

    $stmt = $dbh->prepare('UPDATE users SET name = ?, image_dir = ?, username = ?, password = ? WHERE userId = ?');
    $stmt->execute(array($name, $image_dir, $username, $hash, $userId));
  }

  function getUserById($userId) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT name, image_dir, username FROM users WHERE userId = ?');
    $stmt->execute(array($userId));
    return $stmt->fetch();
  }
?>
