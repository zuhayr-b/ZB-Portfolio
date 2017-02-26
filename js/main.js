//mobile navigation menu
function toggleMenu() {
  var x = document.getElementById('mobileNav');
  if (x.style.display === "inline-block") {
      x.style.display = "none";
  } else {
    x.style.display = "inline-block";
  }
}

//skills slideshow animation
var i = 0;
var images = [];
var images2 = [];
var time = 3000;
//
images[0] = "../images/HTML5.png";
images[1] = "../images/CSS3.png";
images[2] = "../images/Javascript.png";

images2[0] = "../images/graphic.png";
images2[1] = "../images/web-design.png";
images2[2] = "../images/photoshop.png";

function changeImg(){
  document.skillslide.src = images[i];
	document.skillslide2.src = images2[i];
	if(i < images2.length - 1 && i < images.length - 1){
	  i++;
	} else {
		i = 0;
	}
	setTimeout("changeImg()", time);
}
window.onload=changeImg;
