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
	
	$('#button_popup').click(function (){
		modal.style.display = "block";
    });
	
	$('#edit_user').click(function (){
		modal.style.display = "block";
    });
	
	$('#add_restaurant').click(function (){
		modal2.style.display = "block";
    });

    $('#cancel1').click(function (){
		modal.style.display = "none";
    }); 
	
	$('#cancel2').click(function (){
		modal2.style.display = "none";
    }); 
});