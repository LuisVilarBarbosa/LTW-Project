<!DOCTYPE html
          PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link rel="stylesheet" type="text/css" href="css/start_page.css" />

<?php

//$user = getUserById($_SESSION['userId']);
//$restaurants=getRestaurantsByOwner($_SESSION['userId']);
echo $_SESSION['name'];

 ?>

<div id="id01" class="modal">
    <form class="modal-content animate" action="action_add_edit_user.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="resources/example_user.jpg" alt="Avatar" class="avatar" />
        </div>
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="<p><?=$user['name']?></p><?php
             ?> " name="username" required="required "/>
            <label><b>Password</b></label>
            <input type="password" placeholder="nova password" name="password" required=required />
            <label><b>Nome</b></label>
            <input type="text" placeholder="  <?php
                        echo $user['name'];
             ?> " name ="name" required=required />
            <label><b>Imagem</b></label>
            <input type="file" placeholder="Enter image" name="image" required="required" />
            <button type="submit">Alterar</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>
<div id="id02" class="modal">
    <form class="modal-content animate" action="action_add_edit_restaurant.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="container">
            <label><b>Name</b></label>
            <input type="text" placeholder="Nome do Restaurante" name="name" required=required />
            <label><b>Password</b></label>
            <input type="password" placeholder="Descricao" ="description" required=required />
            <label><b>Imagem</b></label>
            <input type="text" placeholder="URL da imagem" name="image" required=required />
            <button type="submit">Adicionar</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>
<br />
<input type="text" name="search" placeholder="Search.." />


<h2>Utilizador</h2>
<div class="card">
    <img src=" somestuff " alt="Avatar" style="width:100%" />
    <div class="container">

        <h3><b> <?=$user['name']?>
         </b></h3>

         <h4><b>  <?=$user['username']?>
         </b></h4>





    </div>
</div>
<br />

<button onclick="document.getElementById('id01').style.display='block'" >Editar Utilizador</button>
<button onclick="document.getElementById('id02').style.display='block'" >Adicionar Restaurante</button>

<br />
<br />
<section>
    <h2> restaurants <h2>


teste

</section>
