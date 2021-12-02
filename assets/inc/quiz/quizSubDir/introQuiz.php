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

    <script>
    function highlight() {
        if(document.getElementById("p1").checked){
            document.write(2 + 3);
        }
    }
    </script>
</head>
<body>
    <?php 
        $path = './';
        //include header
        require($path.'../../global/header.php');
        require('../../global/nav.php');

    ?>	
    <div class="quizPageMargins">

    <form name="question 1">
	<div id="q1" class="qdiv">
    <h1 class="header"> Introduction Quiz </h1>
    <h2 class="subheader">1. What is UNIX?</h2>
    <input id="p1" class="qDivFont" type="radio" name ="1" value = "A system of mathematical equations" /><label for="1-1">A system of mathematical equations</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "A multitasking and multifunctional operating system" id="1-2"/><label for="1-2">A multitasking and multifunctional operating system</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "A server organizer"  id="1-3"/><label for="1-3">A server organizer</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "All of the above"  id="1-4"/><label for="1-4">All of the above</label><br/>
    <input type="submit" onclick=highlight()/>
    </div>
    </form>

    </div>
    

    <?php 
        //include footer
        require($path.'../../global/footer.php');
    ?>
</body>
</html>
