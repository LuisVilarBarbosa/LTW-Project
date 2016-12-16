<button id="button_popup">Registar</button>
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

<div id="id01" class="modal">
    <form class="modal-content animate" action="action_add_edit_user.php" method="post" enctype="multipart/form-data">
        <div class="imgcontainer">
			<span class="close" id="x1" title="Close Modal">&times;</span>
			<img src="resources/example_user.jpg" alt="Avatar" class="avatar" />
        </div>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required="required" />
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required="required" />
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required="required" />
            <label for="image"><b>Image</b></label>
            <input type="file" placeholder="Enter image" name="image" required="required" />
            <button type="submit" class="save_button">Sign up</button>
        </div>
        <div class="cancel_container">
            <button type="button" class="cancelbtn" id="cancel1">Cancel</button>
        </div>
    </form>
</div>
