

<section class="temp">

<h1><?=$restaurant['name']?></b></h1>


<img src="$restaurant['image_dir']?>" alt="Image" style="">
<p><?=$restaurant['description']?></p>
<p><?=$restaurant['address']?></p>
<p>	Average score  </p>
<p>Nome do dono?</p>

</section>

<section name="new_comment">
	<form action="action_add_restaurant_review.php" method="post" enctype="multipart/form-data">
	  <label for="">Rating:(between 0 and 5) </label>
	  <input type="number" name="score" value= "score"min="0" max="5">
	  <br />
	  <br />
	  <label for="">Comment: </label>
	  <input type="text" name="comment" placeholder="comment" />
	  <br />
	  <br />

	  <input type="submit" name="submit" value="Submit" />
	</form>
</section>


<section name="comments">

  <?php foreach ($comments as $review) { ?>
    <p><?=$review['score']?></p>
    <p><?=$review['comment']?></p>
  <?php  } ?>


</section>
