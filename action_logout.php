<?php
  include('config/init.php');
  include('verify_session.php');

  session_destroy();

  header('Location: start_page.php');
?>
