<?php

//$restaurant=getRestaurantById($_POST['restaurantId']);
 ?>


 <nav>
 	<ul>
 		<li><a href="index.php">Homepage</a></li>
 		<li><a href=" header('Location: user_profile.php?id=' . $userId)">Perfil do user </a></li>

 	</ul>
 </nav>

<section class="temp">

	<h1><?=$restaurant['name']?></b></h1>

	<img src="$restaurant['image_dir']?>" alt="Image" style="">
	<p><?=$restaurant['description']?></p>
	<p>	Average score </p>

</section>
<?php
		// funcao que vai buscar todas as reviews do restaurante
 ?>

<section name="new_comment">
	<form action=" ...................." method="post" enctype="multipart/form-data">
	  <label for="score">Rating: </label>
	  <input type="number" name="score" value= "score">
	  <br />
	  <br />
	  <label for="comment">Description: </label>
	  <input type="text" name="comment" value="comment" />
	  <br />
	  <br />

	  <input type="submit" name="submit" value="Submit" />
	</form>
</section>

<section name="comments">
<!--
	foreach () { ?>

<p><?=$...['comment']?></p>
<p><?=$...['score']?></p>


<?php  } ?>
-->
		<h3> Nome do user </h3>
		<p>Comment</p>
		<p>score given</p>


</section>
