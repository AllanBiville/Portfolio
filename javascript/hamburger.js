function myFunction() {
    var x = document.getElementById("nav_id");
    if (x.className === "nav_class") {
      x.className += " responsive";
    } else {
      x.className = "nav_class";
    }
  }
function myFunction_FermerMenuQuandClique(){
  var x = document.getElementById("nav_id");
  if (x.className === "nav_class responsive"){
    x.className = "nav_class";
  }
}
