<!DOCTYPE html
          PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link rel="stylesheet" type="text/css" href="css/start_page.css" />
<div id="id01" class="modal">
    <form class="modal-content animate" action="action_add_edit_user.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="resources/example_user.jpg" alt="Avatar" class="avatar" />
        </div>
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="<?php  user = getUsersById($_SESSION['userId0]);
			echo $user['username'];
			?>" name="uname" required=required />
            <label><b>Password</b></label>
            <input type="password" placeholder="<?php  user = getUsersById($_SESSION['userId0]);
			echo $user['password'];
			?>" required=required />
            <label><b>Nome</b></label>
            <input type="text" placeholder="<?php  user = getUsersById($_SESSION['userId0]);
			echo $user['name'];
			?>" required=required />
            <label><b>Imagem</b></label>
            <input type="text" placeholder="<?php  user = getUsersById($_SESSION['userId0]);
			echo $user['image_dir'];
			?>" name="image" required=required />
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
    <img src="<?php  user = getUsersById($_SESSION['userId0]);
			echo $user['image_dir'];
			?>" alt="Avatar" style="width:100%" />
    <div class="container">


  $user = getUsersById($_SESSION['userId0]);
   e acedes ao que queres, por exemplo, $user['name'].



        <h4><b>GetNome    <?php  user = getUsersById($_SESSION['userId0]);
			echo $user['name'];
			?>
		
		          </b></h4>
        <p>get username
						<?php  user = getUsersById($_SESSION['userId0]);
			echo $user['username'];
			?>
		</p>
    </div>
</div>
<br />
<button onclick="document.getElementById('id01').style.display='block'" >Editar Utilizador</button>
<button onclick="document.getElementById('id02').style.display='block'" >Adicionar Restaurante</button>
<br />
<br />
<ul class="tab">
    <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">Restaurantes</a></li>
</ul>
<div id="London" class="tabcontent">
    <p>Lista de restaurantes do utilizador:</p>
</div>
<br />
<br />
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</html>
