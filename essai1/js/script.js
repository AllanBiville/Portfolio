function MenuHamburger() {
  var x = document.getElementById("menu_boutonID");
  if (x.className === "menu_bouton") {
    x.className += " responsive";
  } else {
    x.className = "menu_bouton";
  }
}