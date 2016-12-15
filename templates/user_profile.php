<div id="id01" class="modal">
    <form class="modal-content animate" action="action_add_edit_user.php" method="post">
        <div class="imgcontainer">
            <span class="close" id="x1" title="Close Modal">&times;</span>
            <img src="<?=$user['image_dir']?>" alt="Avatar" class="avatar" />
        </div>
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" name="username" value=<?=$user['name']?> required="required "/>
            <label><b>Password</b></label>
            <input type="password" placeholder="New password" name="password" required="required" />
            <label><b>Nome</b></label>
            <input type="text" name ="name" value=<?=$user['name']?> required="required" />
            <label><b>Imagem</b></label>
            <input type="file" name="image" required="required" />
            <button type="submit" class="save_button">Alterar</button>
        </div>
        <div class="cancel_container">
			<button type="button" class="cancelbtn" id="cancel1">Cancel</button>
        </div>
    </form>
</div>
<div id="id02" class="modal">
    <form class="modal-content animate" action="action_add_edit_restaurant.php" method="post">
        <div class="imgcontainer">
            <span class="close" id="x2" title="Close Modal">&times;</span>
        </div>
        <div class="container">
            <label><b>Name</b></label>
            <input type="text" placeholder="Nome do Restaurante" name="name" required="required" />
            <label><b>Descrição</b></label>
            <input type="text" placeholder="Descricao" name="description" required="required" />
            <label><b>Morada</b></label>
            <input type="text" placeholder="Morada" name="adress" required="required" />
            <label><b>Imagem</b></label>
            <input type="file" name="image" required="required" />  <br/>
            <button type="submit" class="save_button">Adicionar</button>
        </div>
        <div class="cancel_container">
			<button type="button" class="cancelbtn" id="cancel2">Cancel</button>
        </div>
    </form>
</div>
<br />

<form id="searchbox" action="searchRestaurants(restaurant_name)">
    <input id="search" type="text" placeholder="Type here"  name="restaurant_name" required="required"/>
    <input id="button" type="submit" value="Search" />
</form>

<h2>Utilizador</h2>
<div class="card">
    <img src=" <?=$user['image_dir']?> " alt="Avatar" style="width:100%" />
    <div class="container">
        <h3><b><?=$user['name']?></b></h3>
         <h4><b><?=$user['username']?></b></h4>

         <php  if(   sizeof($restaurants) != 0){ ?>
                <p> Owner/reviewer </p>

    <?php}   ?>
    </div>
</div>
<br />

<button id="edit_user">Editar Utilizador</button>
<button id="add_restaurant">Adicionar Restaurante</button>

<br />
<br />
<section>
    <h2>Restaurants<h2>

<?php
      global $dbh;
      $stmt = $dbh->prepare('SELECT * FROM restaurants WHERE ownerId = ?');
      $stmt->execute(array($ownerId));
      $restaurants= $stmt->fetchAll();
      // // href ="restaurant_page?restaurantId=". <?=$rest['restaurantId']?>
 ?>

 <?php
      foreach ($restaurants as $rest) { ?>


    <?php  } ?>




</section>
