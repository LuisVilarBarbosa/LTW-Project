<?php
  function load_image($image /* from $_FILES */) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image['name']);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Check if image file is an actual image or fake image
    $check = getimagesize($image['tmp_name']); // $check has image info
    if($check !== false) {
      move_uploaded_file($image['tmp_name'], $target_dir);
      $uploadOk = true;
    } else
      $uploadOk = false;

    return $uploadOk && $target_dir;
  }
    
?>