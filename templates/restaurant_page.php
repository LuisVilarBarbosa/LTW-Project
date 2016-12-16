

 <nav>
	 <?php
   $link = "user_profile.php?userId=" . $userId['userId']; ?>
         <a href=<?=$link?>>Voltar ao Perfil</a>
 </nav>

<section class="temp">

<h1><?=$restaurant['name']?></b></h1>


<img src="$restaurant['image_dir']?>" alt="Image" style="">
<p><?=$restaurant['description']?></p>
<p><?=$restaurant['address']?></p>
<p>	Average score  </p>
<p>Nome do dono?</p>

</section>

<!--
<nav>
	<ul>
		<li><a href="index.html">Homepage</a></li>
		<li><a href="about.html">Perfil do user </a></li>

	</ul>
</nav>
-->

<section name="new_comment">
	<form action="action_add_restaurant_review.php" method="post" enctype="multipart/form-data">
	  <label for="">Rating: </label>
	  <input type="number" name="score" value= "score">
	  <br />
	  <br />
	  <label for="">Description: </label>
	  <input type="text" name="comment" value="comment" />
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
