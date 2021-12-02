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

    <form name="question 1">
	<div id="q1" class="qdiv">
    <h1 class="header"> Introduction Quiz </h1>
    <h2 class="subheader">1. What is UNIX?</h2>
    <input class="qDivFont" type="radio" name ="1" value = "A system of mathematical equations" style="background-color: green" id="1-1"/><label for="1-1">A system of mathematical equations</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "A multitasking and multifunctional operating system" id="1-2"/><label for="1-2">A multitasking and multifunctional operating system</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "A server organizer"  id="1-3"/><label for="1-3">A server organizer</label><br/>
	<input class="qDivFont" type="radio" name ="1" value = "All of the above"  id="1-4"/><label for="1-4">All of the above</label><br/>
    <input type="submit" onclick=highlight()/>
    </div>
    </form>

    </div>
    
    <script>


    function highlight(text) {
        var inputText = document.getElementById("1-1");
        var innerHTML = inputText.innerHTML;
        var index = innerHTML.indexOf(text);
        if (index >= 0) { 
            innerHTML = innerHTML.substring(0,index) + "<span class='highlight'>" + innerHTML.substring(index,index+text.length) + "</span>" + innerHTML.substring(index + text.length);
            inputText.innerHTML = innerHTML;
        }
    }

    
    </script>

    <?php 
        //include footer
        require($path.'../../global/footer.php');
    ?>
</body>
</html>
