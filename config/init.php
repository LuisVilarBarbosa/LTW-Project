<?php
  session_start();

  if(isset($_SESSION['error_messages']))
    $error_messages = $_SESSION['error_messages'];

  $_SESSION['error_messages'] = array();

  try {
     $dbh = new PDO('sqlite:database.db');
     $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
     array_push($_SESSION['error_messages'], $e->getMessage());
  }
?>
