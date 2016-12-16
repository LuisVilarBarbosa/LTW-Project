$(document).ready(function () {
	// Get the modal
	var modal = document.getElementById("id01");
	var modal2 = document.getElementById("id02");

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		else if (event.target == modal2) {
			modal2.style.display = "none";
		}
	}		
	
	$('header').click(function (){	
		var url = document.URL, 
		shortUrl=url.substring(0,url.lastIndexOf("/"));
		res = shortUrl.concat('/start_page.php');
		window.location = res;
	});
	
	$('#button_popup').click(function (){
		modal.style.display = "block";
	});
	
	$('#edit_user').click(function (){
		modal.style.display = "block";
	});
	
	$('#add_restaurant').click(function (){
		modal2.style.display = "block";
	});
	
	$('#x1').click(function (){
		modal.style.display = "none";
	});
	
	$('#x2').click(function (){
		modal2.style.display = "none";
	});
	
	$('#cancel1').click(function (){
		modal.style.display = "none";
	}); 
	
	$('#cancel2').click(function (){
		modal2.style.display = "none";
	});
});
