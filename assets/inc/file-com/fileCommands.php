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
    <title>Quasar: File Commands</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    <!-- Mobile-friendly viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesheet.css">

     <script src="../../js/javascript.js"></script>
     <?php 
    //include header
    $page = 'fileCommands';
    require('../global/header.php');
    require('../global/nav.php');
    ?>
	
</head>
<body class="contentSide">
<?php 
    
    require('./fileCommandsSubDir/fileSideNav.php');	
?>
<div class="content">
<h1 class="header"> File Commands </h1>

<p class="text"> File commands are Unix commands that apply to individual files. They can delete, change, or move files in your Terminal!

  <b> Think of files like the objects within a folder and the folder is the directory! </b>  </p>

<?php

  include('./fileCommandsSubDir/cat_command.php');
  include ('./fileCommandsSubDir/vim_command.php');

 ?>




</div>
<?php

    //include footer
	require('../global/footer.php');


?>
