 <!-- 
Name         : quiz
File         : quiz.php
Objectives   : _________________________________________
Usage        : Read directly in browser.
Compatibility: caniuse.com, allmost all browsers.
Rights       : Copyright (c) 2021 Quasar - GPLv3             
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quasar Quizzes</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../../css/stylesheet.css">
</head>
<body>
    <?php 
        $path = './';
        //include header
        require($path.'../../global/header.php');

    ?>	
    <div class="quizPageMargins">

    <form name="question 1" onsubmit="return gradeQ1();">
	<div id="q1" class="qdiv">
    <h1 class="header"> Introduction Quiz </h1>
    <h2 class="subheader">1. What is UNIX?</h2>
    <input class="qDivFont" type="radio" name ="1" value = "A system of mathematical equations" id="1-1"/><label for="1-1">A system of mathematical equations</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "A multitasking and multifunctional operating system" id="1-2"/><label for="1-2">A multitasking and multifunctional operating system</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "A server organizer"  id="1-3"/><label for="1-3">A server organizer</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "All of the above"  id="1-4"/><label for="1-4">All of the above</label><br/>
    <input type="submit"  name="submit"  value="Submit"  />
    </div>
    </form>

    </div>
    
    <script>

    function gradeQ1(){
        if(document.getElementById('1-4').checked) {
            .highlight {background-color: green;}
        }else if(document.getElementById('1-1').checked) {
            .highlight {background-color: red;}
        }else if(document.getElementById('1-2').checked) {
            .highlight {background-color: red;}
        }else if(document.getElementById('1-3').checked) {
            .highlight {background-color: red;}
        }else{
            echo("oh no");
        }
    }


        function scrolldiv() {
            var q1 = document.getElementById("q1");
            q1.scrollIntoView();
        }

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

    <?php 

        //include footer
        require($path.'../footer.php');


    ?>
</body>
</html>
