
<!-- 
Name         : contact us
File         : contact.php
Objectives   : _________________________________________
Usage        : Read directly in browser.
Compatibility: caniuse.com, allmost all browsers.
Rights       : Copyright (c) 2021 Quasar - GPLv3             
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Quasar</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <script src="assets/js/javascript.js"></script>

</head>
<body>

<?php 
    //include header
    $page = 'contact';
    require('assets/inc/global/header.php');
	require('assets/inc/global/nav.php');
?>

<div class="content">

    <h1 class="header">Contact us</h1>
    <p>Have any questions or suggestions? Reach the team at Quasar below:</p>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contactProcess.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <input type="submit" name="Submit"  value=" Send Message"/>
        </div>

    </form>

</div>


<?php 
    //include footer
	require('assets/inc/global/footer.php');

?>

