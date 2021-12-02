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
    <title>Quasar: Directory Commands</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesheet.css">

     <script src="../../js/javascript.js"></script>
     
      <?php 
        //include header
        $page = 'dirCommands';
        require('../global/header.php');
        require('../global/nav.php');
        ?>
</head>
<body>
<?php

        require('./dirComandsSubDir/dirSideNav.php');

    ?>

    <div class="content">
    <h1 class="header"> Directory Commands </h1>

    <p class="text"> Directory commands are Unix commands that apply to your directory. They can change permissions, delete, rename, and move directories!
    
    <b> Think of directories like the folders on your computer and files are the objects inside of them! </b>  </p>


    <!--CD Command Here-->
    <?php
        include './dirComandsSubDir/cd_command.php';

        include './dirComandsSubDir/cp_command.php';

        include './dirComandsSubDir/ls_command.php';

        include './dirComandsSubDir/gzip_command.php';

        include './dirComandsSubDir/mkdir_command.php';

        include './dirComandsSubDir/rmdir_command.php';

        include './dirComandsSubDir/tar_command.php';

    ?>


</div>

<?php

    //include footer
    require('../global/footer.php');


?>
