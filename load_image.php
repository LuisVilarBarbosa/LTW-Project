<?php
  function load_image($image /* from $_FILES */) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image['name']);

    // Check if image file is an actual image or fake image
    $check = getimagesize($image['tmp_name']); // $check has image info
    if($check !== false) {
      if(!move_uploaded_file($image['tmp_name'], $target_file))
        die('Error storing image.');
    } else
      die('Not an image.');

    return $target_file;
  }
?>
