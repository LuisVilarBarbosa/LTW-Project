<div id="id01" class="modal">
    <form class="modal-content animate" action="action_add_edit_user.php" method="post" enctype="multipart/form-data">
        <div class="imgcontainer">
            <span class="close" id="x1" title="Close Modal">&times;</span>
            <img src="<?=$user['image_dir']?>" alt="Avatar" class="avatar" />
        </div>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" value=<?=$user['name']?> required="required "/>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="New password" name="password" required="required" />
            <label for="name"><b>Name</b></label>
            <input type="text" name ="name" value=<?=$user['name']?> required="required" />
            <label for="image"><b>Image</b></label>
            <input type="file" name="image" required="required" />
            <button type="submit" class="save_button">Change</button>
        </div>
        <div class="cancel_container">
			    <button type="button" class="cancelbtn" id="cancel1">Cancel</button>
        </div>
    </form>
</div>
<div id="id02" class="modal">
    <?php include('templates/add_edit_restaurant.php'); ?>
</div>
<br />

<form id="searchbox" >
    <input type="text" name="restaurant_search" placeholder="Type here and click on the down arrow" required="required"/>
    <input type="button" name="search" value="Search" />
</form>

<h2>User</h2>
<div class="card">
    <img src=" <?=$user['image_dir']?> " alt="Avatar" style="width:100%" />
    <div class="container">
        <h3><b><?=$user['name']?></b></h3>
         <h4><b><?=$user['username']?></b></h4>
         <p>Reviewer</p>
         <?php if(sizeof($restaurants) != 0) { ?>
           <p>Owner</p>
         <?php } ?>
    </div>
</div>
<br />

<button id="edit_user">Edit user</button>
<button id="add_restaurant">Add restaurant</button>

<br />
<br />
<section>
    <h2>Restaurants<h2>
      <?php foreach ($restaurants as $restaurant) {
	         $link = "restaurant_page.php?restaurantId=" . $restaurant['restaurantId']; ?>
        <a href=<?=$link?>><?=$restaurant['name']?></a>
      <?php  } ?>
</section>

<script>
$("input[name='restaurant_search']").keyup(function( event ) {
  var input = $("input[name='restaurant_search']").val();
  var names = <?php echo json_encode($allRestaurants); ?>;
  var done = false;

  if(event.keyCode == 40) { // down arrow
    for(var i = 0; i < names.length && !done; i++) {
      if(names[i]['name'] == input) {
        $("input[name='restaurant_search']").val(names[(i + 1) % names.length]['name']);
        done = true;
      }
    }

    if (!done && names.length != 0)
      $("input[name='restaurant_search']").val(names[0]['name']);
  }


});

$("input[name='search']").on("click", function( event ) {
  var input = $("input[name='restaurant_search']").val();
  var names = <?php echo json_encode($allRestaurants); ?>;
  var restaurantId = null;

  for(var i = 0; i < names.length; i++) {
    if(names[i]['name'].search(input) != -1) {
      restaurantId = names[i]['restaurantId'];
      break;
    }
  }

  if (restaurantId != null)
    window.location.href = './restaurant_page.php?restaurantId=' + restaurantId;
});
</script>
