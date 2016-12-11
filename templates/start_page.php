 <!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


   
	
		
		<link rel="stylesheet" type="text/css" href="css/start_page.css"/>
		
	</head>
	
	<!--   <script type="text/javascript" src="../javascript/slideshow.js"></script>  -->
	

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Registar</button>
		
		
            
		<br />
        <br />

        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="resources/img1.jpeg" style="width:100%" />
                <div class="text">Tapas da Eira</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="resources/img2.jpg" style="width:100%" />
                <div class="text">Rio Este</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="resources/img3.jpg" style="width:100%" />
                <div class="text">Riça</div>
            </div>

            
        </div>
        <br />

        <div style="text-align:left">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>


	<!--
		<section id="new_entry" >
				<div class="entry_form">
				
					<h2>Registo:</h2>						
					
					<form  action = "nome do ficheiro de adicionar base dados" method ="post">
						
								Nome:
								<input type="text" name="name">
								<br />
									
								Nome de Utilizador:
								<input type="text" name="username">
								<br />
						
								Palavra-passe:
								<input type="text" name="password">
								<br />
									
								Imagem:
								<input type="text" name="img">
								<br />
								
									<input type="submit" value="Entrar">
					</form>
        </div>
        </section>
        -->

       

        <div id="id01" class="modal">

            <form class="modal-content animate" action="action_add_edit_user.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="resources/example_user.jpg" alt="Avatar" class="avatar" />
                </div>

                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required=required />

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required=required />

					<label><b>Nome</b></label>
                    <input type="text" placeholder="Enter Name" name="name" required=required />

					<label><b>Imagem</b></label>
                    <input type="text" placeholder="Enter image URL" name="image" required=required />

					

                    <button type="submit">Registar</button>
                   
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                   
                </div>
            </form>
        </div>

		
		<script src="javascript/slideshow.js"></script>


        <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
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

   

	