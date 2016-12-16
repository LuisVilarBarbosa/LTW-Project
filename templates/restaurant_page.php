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

 <!-- falta permite ao dono (apenas) escrever uma única resposta a cada review
 			e as reviews apresentarem a resposta do dono, se existir.-->

<section name="comments">
  <?php foreach ($reviews as $review) { ?>
    <p><?=$review['score']?></p>
    <p><?=$review['comment']?></p>
		<p><?=$review['answer']?></p>

		<?php if($user['userId']== $restaurant['ownerId'] ) { ?>

			<form action="action_add_answer.php" method="post" enctype="multipart/form-data">

			  <label for="answer">Answer: </label>
			  <input type="text" name="answer" placeholder="answer" />
				<input type="hidden" name="id" value="<?=$review['reviewId']?>	">
			  <input type="submit" name="submit" value="Submit" />
			</form>
		<?php } ?>

  <?php  } ?>
</section>
