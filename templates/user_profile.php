<h1><b>  <?php
          $userId =  $_GET['id'];
        //    echo $userId ;
        //   $user = array();
          //$_POST=getUserById($userId);

      // $user = getUsersById($_SESSION['$userId']);
      // print_r($user]);
        //echo $user['name'];
        // print_r('$user['name']'');
//print_r($firstquarter);

  $stmt = $dbh->prepare('SELECT * FROM users WHERE userId = ?');
  $stmt->execute(array($userId));
  $user= $stmt->fetch();
//echo $user['username'];

 ?>
  </b></h1>

﻿<div id="id01" class="modal">
    <form class="modal-content animate" action="action_add_edit_user.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="resources/example_user.jpg" alt="Avatar" class="avatar" />
        </div>
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="<?php
                        echo $user['username'];
             ?> " name="username" required=required />
            <label><b>Password</b></label>
            <input type="password" placeholder="nova password" name="password" required=required />
            <label><b>Nome</b></label>
            <input type="text" placeholder="  <?php
                        echo $user['name'];
             ?> " name ="name" required=required />
            <label><b>Imagem</b></label>
            <input type="file" placeholder="Enter image" name="image" required="required" />
            <button type="submit" id="button_register">Alterar</button>
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
            <button type="submit" id="button_register">Adicionar</button>
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
    <img src=" <?php
                echo $user['image_dir'];
     ?> " alt="Avatar" style="width:100%" />
    <div class="container">

        <h3><b> <?php
                    echo $user['name'];
         ?>   </b></h3>
        <p> <?php

                    echo $user['username'];
         ?> </p>
    </div>
</div>
<br />
<button onclick="document.getElementById('id01').style.display='block'" >Editar Utilizador</button>
<button onclick="document.getElementById('id02').style.display='block'" >Adicionar Restaurante</button>
<br />
<br />
