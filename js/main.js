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
var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 3000;	// Time Between Switch

// Image List
images[0] = "../images/HTML5.png";
images[1] = "../images/CSS3.png";
images[2] = "../images/Javascript.png";

// Change Image
function changeImg(){
	document.skillslide.src = images[i];
	if(i < images.length - 1){ // Check If Index Is Under Max
	  i++;// Add 1 to Index
	} else {
		i = 0;// Reset Back To O
	}
	setTimeout("changeImg()", time); // Run function every x seconds
}
window.onload=changeImg; // Run function when page loads

//scroll menu animation
// myversion
var AnimatedHeader = (function() {
  var docElem = document.documentElement,
    header = document.getElementsByTagName( 'header' ),
		// header = document.getElementsByTagName('header'),
		didScroll = false,
		changeHeaderOn = 300;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 250 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
      // header.classList.add("fadeaway");
			classie.add( header, 'fadeaway' );
		}
		else {
      // header.classList.remove("fadeaway");
			classie.remove( header, 'fadeaway' );
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();
