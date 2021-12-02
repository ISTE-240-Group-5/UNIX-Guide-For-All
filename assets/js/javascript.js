
/**
//Get the button
	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
 		 if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
   		 mybutton.style.display = "block";
  		} else {
  		  mybutton.style.display = "none";
  		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
 		 document.body.scrollTop = 0;
 		 document.documentElement.scrollTop = 0;
	}
**/
	
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
	if(x.matches){
    document.getElementById("mySidenav").style.width = "250px";
 	 document.getElementsByClassName("content").style.marginTop = 		"20px";
     }
     else{
     document.getElementById("mySidenav").style.width = "250px";
  document.getElementsByClassName("content").style.marginLeft = "50px";
     }
}

function closeNav() {
	if(x.matches){
    document.getElementById("mySidenav").style.width = "0px";
 	 document.getElementsByClassName("content").style.marginTop = 		"10px";
     }
     else{
     document.getElementById("mySidenav").style.width = "00px";
  document.getElementsByClassName("content").style.marginLeft = "50px";
     }
}

var x = window.matchMedia("(max-width: 600px)")

