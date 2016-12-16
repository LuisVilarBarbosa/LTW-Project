<form class="modal-content animate" action="action_add_edit_restaurant.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
       <span class="close" id="x2" title="Close Modal">&times;</span>
    </div>
    <div class="container">
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Restaurant name" name="name" <?php if ($restaurant != NULL) { ?> value=<?=$restaurant['name']?> <?php } ?> />
        <label for="description"><b>Description</></label>
        <input type="text" placeholder="Description" name="description" <?php if ($restaurant != NULL) { ?> value=<?=$restaurant['description']?> <?php } ?> />
        <label for="image_url"><b>Image URL</b></label>
        <input type="url" placeholder="Image URL" name="image_url" <?php if ($restaurant != NULL) { ?> value=<?=$restaurant['image_dir']?> <?php } ?> />
        <label for="image_file"><b>Image file</b></label>
        <input type="file" name="image_file" />
        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Address" name="address" <?php if ($restaurant != NULL) { ?> value=<?=$restaurant['address']?> <?php } ?> />
        <button type="submit" class="save_button">Add</button>
    </div>
    <div class="cancel_container">
  <button type="button" class="cancelbtn" id="cancel2">Cancel</button>
    </div>
</form>
