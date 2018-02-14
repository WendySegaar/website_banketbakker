var slideIndex = 1;
var slides = new Array("images/slide1.png", "images/slide2.png", "images/slide3.png");

window.onload = function timer() {
	setInterval(changeSlide, 3000);
}
function changeSlide() {
	document.getElementById("slide").setAttribute("src", slides[slideIndex]);
	slideIndex++;
	if (slideIndex >= slides.length) {
		slideIndex = 0;
	}
}
