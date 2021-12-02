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
        require('../../global/nav.php');

    ?>	
    <div class="quizPageMargins">
                    <!---------------------------------------------------------------------->
        <form name="question 1">
            <div id="q1" class="qdiv">
                <h1 class="header"> Introduction Quiz </h1>
                <h2 class="subheader">1. What is UNIX?</h2>
                    <input class="qDivFont" type="radio" name ="1" value = "A system of mathematical equations"                     id="1a"/><label    id="a1" >A system of mathematical equations</label><br/>
                    <input class="qDivFont" type="radio" name ="1" value = "A multitasking and multifunctional operating system"    id="1b"/><label    id="b1" >A multitasking and multifunctional operating system</label><br/>
                    <input class="qDivFont" type="radio" name ="1" value = "A server organizer"                                     id="1c"/><label    id="c1" >A server organizer</label><br/>
                    <input class="qDivFont" type="radio" name ="1" value = "All of the above"                                       id="1d"/><label    id="d1" >All of the above</label><br/>
                        <button type="button" onclick="Q1()">Submit</button>
                        <button type="button" onclick="myFunction()">Next</button>
            </div>
        </form>
                    <!---------------------------------------------------------------------->
        <form name="question 2">
            <div id="q2" class="qdiv">
                <h1 class="header"> Introduction Quiz </h1>
                <h2 class="subheader">1. What is UNIX?</h2>
                    <input class="qDivFont" type="radio" name ="2" value = "A system of mathematical equations"                     id="2a"/><label    id="a2" >A system of mathematical equations</label><br/>
                    <input class="qDivFont" type="radio" name ="2" value = "A multitasking and multifunctional operating system"    id="2b"/><label    id="b2" >A multitasking and multifunctional operating system</label><br/>
                    <input class="qDivFont" type="radio" name ="2" value = "A server organizer"                                     id="2c"/><label    id="c2" >A server organizer</label><br/>
                    <input class="qDivFont" type="radio" name ="2" value = "All of the above"                                       id="2d"/><label    id="d2" >All of the above</label><br/>
                        <button type="button" onclick="Q2()">Submit</button>
                        <button type="button" onclick="myFunction()">Next Question</button>
            </div>
        </form>
                    <!---------------------------------------------------------------------->
    </div>
    
    <script>
    function Q1() {
        if(document.getElementById("1a").checked==true){
            document.getElementById("a1").style.backgroundColor = "red";
            document.getElementById("b1").style.backgroundColor = "rgba(255, 255, 255, 0)";
            document.getElementById("c1").style.backgroundColor = "rgba(255, 255, 255, 0)";
            document.getElementById("d1").style.backgroundColor = "limegreen";
        }else{
            if(document.getElementById("1b").checked==true){
                document.getElementById("a1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("b1").style.backgroundColor = "red";
                document.getElementById("c1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d1").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("1c").checked==true){
                    document.getElementById("a1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("c1").style.backgroundColor = "red";
                    document.getElementById("d1").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("1d").checked==true){
                        document.getElementById("a1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("d1").style.backgroundColor = "limegreen";
                    }else{
                        echo('fuck');
                    }
                }
            }
        }
    }
    </script>
    <script>
    function Q2() {
        if(document.getElementById("2a").checked==true){
            document.getElementById("a2").style.backgroundColor = "red";
            document.getElementById("b2").style.backgroundColor = "rgba(255, 255, 255, 0)";
            document.getElementById("c2").style.backgroundColor = "rgba(255, 255, 255, 0)";
            document.getElementById("d2").style.backgroundColor = "limegreen";
        }else{
            if(document.getElementById("2b").checked==true){
                document.getElementById("a2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("b2").style.backgroundColor = "red";
                document.getElementById("c2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d2").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("2c").checked==true){
                    document.getElementById("a2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("c2").style.backgroundColor = "red";
                    document.getElementById("d2").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("2d").checked==true){
                        document.getElementById("a2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("d2").style.backgroundColor = "limegreen";
                    }else{
                        echo('fuck');
                    }
                }
            }
        }
    }

    function scrollQ2(){
        var myElement = document.getElementById('element_within_div');
        var topPos = myElement.offsetTop;
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
        require($path.'../../global/footer.php');


    ?>
</body>
</html>
