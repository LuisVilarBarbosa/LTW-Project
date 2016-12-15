<?php
  function load_image($image /* from $_FILES */) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image['name']);

    // Check if image file is an actual image or fake image
    $check = getimagesize($image['tmp_name']); // $check has image info
    if($check !== false) {
      if(!move_uploaded_file($image['tmp_name'], $target_file)) {
        array_push($_SESSION['error_messages'], 'Error storing image.');
        return NULL;
      }
    } else {
      array_push($_SESSION['error_messages'], 'File is not an image. / An image must be indicated.');
      return NULL;
    }

    return $target_file;
  }
?>
