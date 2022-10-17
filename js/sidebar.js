//
var navbar = document.getElementById("mySidenav");
var main = document.getElementById("main");
var contents = document.getElementById("contents");

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}


function test(){
  if(document.getElementById("mySidenav").style.width == "250px"){
    closeNav();
  }
  else{
    openNav();
  }
}

$(document).on("click", "#contents", function(){
  closeNav()
});