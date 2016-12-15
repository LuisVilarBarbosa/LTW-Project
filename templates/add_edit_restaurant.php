<form action="action_add_edit_restaurant.php" method="post" enctype="multipart/form-data">
  <label for="name">Name: </label>
  <input type="text" name="name" <?php if ($restaurant != NULL) ?> value=<?=$restaurant['name']?> />
  <br />
  <br />
  <label for="description">Description: </label>
  <input type="text" name="description" <?php if ($restaurant != NULL) ?> value=<?=$restaurant['description']?> />
  <br />
  <br />
  <label for="image_url">Image URL: </label>
  <input type="url" name="image_url" <?php if ($restaurant != NULL) ?> value=<?=$restaurant['image_dir']?> />
  <br />
  <br />
  <label for="image_file">Image file: </label>
  <input type="file" name="image_file" />
  <br />
  <br />
  <label for="address">Address: </label>
  <input type="text" name="address" <?php if ($restaurant != NULL) ?> value=<?=$restaurant['address']?> />
  <br />
  <br />
  <input type="submit" name="submit" value="Submit" />
</form>
