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
    <title>Quasar: Advanced Commands</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesheet.css">
</head>
<body>
    <?php
        $page = 'advancedCommands';
        //include footer
        require('../global/header.php');
        require('../global/nav.php');
    ?>

    <div class="content">
    <h1 class="header"> Advanced Commands </h1>

    <p class="text"> Consectetur minim laboris sunt consectetur ea excepteur laboris nisi culpa culpa pariatur enim. Sit dolor veniam reprehenderit non est eu voluptate proident eu et in commodo ea. Commodo aliquip officia duis non aliquip elit duis nisi.  </p>

    <?php
      include 'advCommandsSubDir/cron_command.php';
      include 'miscCommandsSubDir/date_command.php';
      include 'miscCommandsSubDir/df_command.php';
      include 'advCommandsSubDir/sshkeygen_command.php';
      include 'miscCommandsSubDir/grep_command.php';
      include 'miscCommandsSubDir/chmod_command.php';







     ?>

    <script class="js/scripts.js?v=1.0"></script>

</div>
<?php

    //include footer
	require('../global/footer.php');


?>
