<?php
  include('config/init.php');

  session_destroy();

  header('Location: start_page.php');
?>
