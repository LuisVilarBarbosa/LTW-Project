<section class="restaurant_info">
	<h1><?=$restaurant['name']?></b></h1>
	<img src=<?=$restaurant['image_dir']?> alt="Image" style="">
	<p>Description: <?=$restaurant['description']?></p>
	<p>Address: <?=$restaurant['address']?></p>
	<p>Average score: <?=$avgScore?></p>
	<p>Owner: <?=$owner?></p>
</section>

<section name="new_review">
	<form action="action_add_restaurant_review.php" method="post" enctype="multipart/form-data">
	  <label for="score">Rating (between 1 and 5):</label>
	  <input type="number" name="score" value="score" min="1" max="5" required="required">
	  <br />
	  <br />
	  <label for="comment">Comment: </label>
	  <input type="text" name="comment" placeholder="comment" />
	  <br />
	  <br />
	  <input type="submit" name="submit" value="Submit" />
	</form>
</section>

<section name="comments">
  <?php foreach ($reviews as $review) { ?>
    <p><?=$review['score']?></p>
    <p><?=$review['comment']?></p>
  <?php  } ?>
</section>
