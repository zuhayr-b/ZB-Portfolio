//mobile menu //

// toggleMenu();
// window.onresize = function(){
//   toggleMenu();
// }
//
// function toggleMenu() {
//     if (window.innerWidth < 800){
//       document.getElementById("mobileNav").style.display = "none";
//     }
//     else {
//       document.getElementById("mobileNav").style.display = "inline-block";
//     }
// }


function toggleMenu() {
  var x = document.getElementById('mobileNav');
  if (x.style.display === "inline-block") {
      x.style.display = "none";
  } else {
    x.style.display = "inline-block";
  }
}
