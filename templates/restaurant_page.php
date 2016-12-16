<section class="restaurant_info">
	<h1><b><?=$restaurant['name']?></b></h1>
	<img src=<?=$restaurant['image_dir']?> alt="Image" style="" />
	<p>Description: <?=$restaurant['description']?></p>
	<p>Address: <?=$restaurant['address']?></p>
	<p>Average score: <?=$avgScore?></p>
	<p>Owner: <?=$owner['name']?></p>
</section>

<section name="new_review">
	<form action="action_add_restaurant_review.php" method="post">
	  <label for="score">Rating (between 1 and 5):</label>
	  <input type="number" name="score" value="5" min="1" max="5" required="required" />
	  <br />
	  <br />
	  <label for="comment">Comment: </label>
	  <input type="text" name="comment" placeholder="Comment" />
	  <br />
	  <br />
		<input type="hidden" name="restaurantId" value=<?=$restaurant['restaurantId']?> />
	  <input type="submit" name="submit" value="Submit" />
	</form>
</section>

<section name="comments">
  <?php foreach ($reviews as $review) { ?>
    <p>Score: <?=$review['score']?></p>
    <p>Comment: <?=$review['comment']?></p>

		<?php if($_SESSION['userId'] == $restaurant['ownerId'] && $review['answer'] == '') { ?>

			<form action="action_add_answer.php" method="post">
			  <label for="answer">Answer: </label>
			  <input type="text" name="answer" placeholder="Answer" />
				<input type="hidden" name="reviewId" value=<?=$review['reviewId']?> />
        <input type="hidden" name="restaurantId" value=<?=$restaurant['restaurantId']?> />
        <input type="submit" name="submit" value="Submit" />
			</form>
		<?php } else { ?>
			<p>Answer: <?=$review['answer']?></p>
		<?php } ?>

  <?php  } ?>
</section>
