 <!-- 
Name         : gettingstarted
File         : gettingstarted.php
Objectives   : _________________________________________
Usage        : Read directly in browser.
Compatibility: caniuse.com, allmost all browsers.
Rights       : Copyright (c) 2021 Quasar - GPLv3             
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quasar-edu.page</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
	
	<div class="content">
    <h1 class="header"> UNIX 101: A Survival Guide </h1>
    
   <?php
   
   /*
   require 'gettingStartedSubDir/whatIsLinuxnix.php';
   
   require 'gettingStartedSubDir/howToUseUnix.php';
   
   require 'gettingStartedSubDir/howToTerm.php';
   */
   
   ?>
   
    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
    
    </div>
   
    <script>
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
</script>

</body>
</html>
