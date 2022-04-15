function myFunction() {
  var x = document.getElementById("nav_id");
  if (x.className === "nav_class") {
    x.className += " responsive";
  } else {
    x.className = "nav_class";
  }
}
window.onscroll = function () {
  myFunction2();
};
var nav_id = document.getElementById("nav_id");
var sticky = nav_id.offsetTop;
function myFunction2() {
  if (window.pageYOffset >= sticky) {
    nav_id.classList.add("sticky");
  } else {
    nav_id.classList.remove("sticky");
  }
}
