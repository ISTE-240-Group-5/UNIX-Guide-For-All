
<!-- 
Name         : about us
File         : about.php
Objectives   : _________________________________________
Usage        : Read directly in browser.
Compatibility: caniuse.com, allmost all browsers.
Rights       : Copyright (c) 2021 Quasar - GPLv3             
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About Quasar</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <script src="assets/js/javascript.js"></script>

</head>
<body>

<?php 
    //include header
    $page = 'about';
	require('assets/inc/header.php');
	require('assets/inc/nav.php');
?>


<div class="content">
    <h1 class="header">About Quasar</h1>
    <p class="text">At Quasar, we make it our #1 priority to educate the next generation of aspiring web developers. We wish to equip them with the knowledge that they may need in each of their careers. Learning Unix is simply a subset of that knowledge base. We hope that by having more tools, you can maximize your chance of success and impress your employers too!
    </p>

    <h2 class="subheader team">Our Team</h2>

    <div class="grid"> 

        <div class="card ja">
            <img class="teamImg" src="assets/images/raw/jason.png" alt="Jason">
            <div class="container">
                <h2 class="subheader">Chinonso Akujuobi</h2>
                <p class="title">Information Architect</p>
            </div>
        </div>

         <div class="card jo">
            <img class="teamImg" src="assets/images/raw/josh.jpeg" alt="Josh">
            <div class="container">
                <h2 class="subheader">Joshua Kelly</h2>
                <p class="title">Interaction Designer</p>
            </div>
        </div>

        <div class="card ju">
            <img class="teamImg" src="" alt="Julian">
            <div class="container">
                <h2 class="subheader">Julian Mato Hernandez</h2>
                <p class="title">Team Leader</p>
            </div>
        </div>

        <div class="card zo">
            <img class="teamImg" src="assets/images/raw/zoe.jpeg" alt="Zoe">
            <div class="container">
                <h2 class="subheader">Zoe Zapata</h2>
                <p class="title">Graphic Designer</p>
            </div>
        </div>

        <div class="card mg">
            <img class="teamImg" src="assets/images/raw/matt.png" alt="Matt">
            <div class="container">
                <h2 class="subheader">Matt Grober</h2>
                <p class="title">Content Creator</p>
            </div>
        </div>

        <div class="card ms">
            <img class="teamImg" src="" alt="Mark">
            <div class="container">
                <h2 class="subheader">Mark Stubble</h2>
                <p class="title">Content Creator</p>
            </div>
        </div>

    </div> 

</div>



<?php 
    //include footer
	require('assets/inc/footer.php');

?>
