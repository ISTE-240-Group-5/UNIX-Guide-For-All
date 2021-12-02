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
      include 'miscCommandsSubDir/chgrp_command.php';
      include 'miscCommandsSubDir/chown_command.php';
      include 'miscCommandsSubDir/cron_command.php';
      include 'miscCommandsSubDir/date_command.php';
      include 'miscCommandsSubDir/df_command.php';
      include 'miscCommandsSubDir/echo_command.php';
      include 'miscCommandsSubDir/free_command.php';
      include 'miscCommandsSubDir/help_command.php';
      include 'miscCommandsSubDir/hostname_command.php';
      include 'miscCommandsSubDir/ping_command.php';
      include 'miscCommandsSubDir/ps_command.php';
      include 'miscCommandsSubDir/restart_command.php';
      include 'miscCommandsSubDir/shutdown_command.php';
      include 'miscCommandsSubDir/sshkeygen_command.php';
      include 'miscCommandsSubDir/su_command.php';
      include 'miscCommandsSubDir/texteditors.php';
      include 'miscCommandsSubDir/top_command.php';
      include 'miscCommandsSubDir/uname_command.php';
      include 'miscCommandsSubDir/unix_modifiers.php';
      include 'miscCommandsSubDir/wget_command.php';
      include 'miscCommandsSubDir/whatis_command.php';
      include 'miscCommandsSubDir/who_command.php';





     ?>

    <script class="js/scripts.js?v=1.0"></script>

</div>
<?php

    //include footer
	require('../global/footer.php');


?>
