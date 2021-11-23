
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
    <title>Getting Started</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>

<?php 
    //include header
	require('header.php');
	
	require('gettingStartedSubDir/gettingstartedSidenav.php');

?>
	
	<div class="content">
    <h1 class="header"> UNIX 101: A Survival Guide </h1>
    
    <p class="text"> 
    Welcome, aspiring web developers!  In this guide and throughout our website, you’ll learn the basic ins and outs of Unix along with some essential commands to get you started on your web development journey.  Or, if you’re already a developer, we offer great reference material for that one pesky command that may have slipped your mind.  Don’t worry, it happens to all of us.


If you’re new to Unix, we recommend reading “What is Linux/Unix?”, “How to use Unix”, and “How to access the Terminal”.  After, check out what things you can do with Unix in our commands sections.  Once you’re solid on a particular section, the “Quizzes” page can be used to test your knowledge.  Happy developing!

    </p>
    
   <?php
   
   include 'gettingStartedSubDir/whatIsLinuxUnix.php';
   
   include 'gettingStartedSubDir/howToUseUnix.php';
   
   include 'gettingStartedSubDir/howToTerm.php';
   
   ?>
   
   <!--
    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
    -->
    
    </div>
   
 <script src="../js/javascript.js"></script>

<?php 

    //include footer
	require('footer.php');


?>
