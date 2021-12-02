<!-- 
Name         : index
File         : index.html
Objectives   : _________________________________________
Usage        : Read directly in browser.
Compatibility: caniuse.com, allmost all browsers.
Rights       : Copyright (c) 2021 Quasar - GPLv3             
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quasar</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
     <script src="../../js/javascript.js"></script>
</head>
<body id="landingPage">

<?php 
    //include header and nav
    $page = 'landing';
	require('assets/inc/global/header.php');
	require('assets/inc/global/nav.php');
?>
        
        <div class="landingPageMargins">
            <h1 class="quasarHeading">QUASAR</h1>
            <h2 class="landingPageSubHeading"> Unix Learning Company </h2>
        
            <div> 
                <a class="learnmoreButton" href="assets/inc/get-start/gettingStarted.php"> LEARN MORE </a>
            </div>


            <div class="terminalLandingPage">
                <span style="color:#00FF85">example.bot:</span><span style="color:#00F0FF">~ $</span>
                <p id="terminaltext" style="color:white"> echo "Hello World" </p>
            </div>
            
            <div class="missionStatement">
                <p> Dedicated to teaching unix language to web developers of all ages and educational backgrounds </p>
            </div>
        </div>


<?php 

    //include footer
	require('assets/inc/global/footer.php');


?>
