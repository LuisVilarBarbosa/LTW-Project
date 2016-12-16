$(document).ready(function () {
	if(location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == 'start_page.php'){
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides_fade");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				var img = slides[i];
				img.onload = function() {
					if(img.height > img.width) {
						img.height = '100%';
						img.width = 'auto';
					}
				}
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
		

	}
});

function currentSlide(number){
	var slides = document.getElementsByClassName("mySlides_fade");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slides[number - 1].style.display = "block";
}
