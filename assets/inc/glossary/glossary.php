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
</head>
<body>
<?php 
    //include header
    $page = 'fileCommands';
    require('../global/header.php');
    require('../global/nav.php');
    require('./fileCommandsSubDir/fileSideNav.php');
	
?>
<div class="content">

<table id="gloss">
  <tr>
    <th>Command Name</th>
  </tr>
  <tr>
    <td>vim</td>
  </tr>
   <tr>
    <td>:e</td>
  </tr>
   <tr>
    <td>:w</td>
  </tr>
   <tr>
    <td>:wq</td>
  </tr>
   <tr>
    <td>:q!</td>
  </tr>
   <tr>
    <td>h</td>
  </tr>
   <tr>
    <td>l</td>
  </tr>
   <tr>
    <td>j</td>
  </tr>
   <tr>
    <td>k</td>
  </tr>
   <tr>
    <td>H</td>
  </tr>
   <tr>
    <td>M</td>
  </tr>
   <tr>
    <td>L</td>
  </tr>
   <tr>
    <td>w</td>
  </tr>
   <tr>
    <td>b</td>
  </tr>
   <tr>
    <td>$</td>
  </tr>
   <tr>
    <td>0</td>
  </tr>
   <tr>
    <td>Ctrl + f</td>
  </tr>
   <tr>
    <td>ctrl + D</td>
  </tr>
   <tr>
    <td>gg</td>
  </tr>
   <tr>
    <td>G</td>
  </tr>
   <tr>
    <td>yy</td>
  </tr>
   <tr>
    <td>yw</td>
  </tr>
   <tr>
    <td>y$</td>
  </tr>
   <tr>
    <td>p</td>
  </tr>
   <tr>
    <td>d</td>
  </tr>
   <tr>
    <td>dd</td>
  </tr>
   <tr>
    <td>x</td>
  </tr>
   <tr>
    <td>u</td>
  </tr>
   <tr>
    <td>Ctrl + r</td>
  </tr>
   <tr>
    <td>.</td>
  </tr>
   <tr>
    <td>cat</td>
  </tr>
   <tr>
    <td>-b</td>
  </tr>
   <tr>
    <td>-n</td>
  </tr>
   <tr>
    <td>-u</td>
  </tr>
   <tr>
    <td>></td>
  </tr>
   <tr>
    <td>>></td>
  </tr>
   <tr>
    <td>mkdir</td>
  </tr>
   <tr>
    <td>mkdir -p</td>
  </tr>
   <tr>
    <td>rmdir</td>
  </tr>
   <tr>
    <td>ls</td>
  </tr>
   <tr>
    <td>ls -l</td>
  </tr>
   <tr>
    <td>ls -a</td>
  </tr>
   <tr>
    <td>pwd</td>
  </tr>
   <tr>
    <td>cd</td>
  </tr>
   <tr>
    <td>cp</td>
  </tr>
   <tr>
    <td>rm</td>
  </tr>
   <tr>
    <td>rm -i</td>
  </tr>
   <tr>
    <td>rm -r</td>
  </tr>
   <tr>
    <td>rm -f</td>
  </tr>
   <tr>
    <td>mv -i</td>
  </tr>
   <tr>
    <td>mv -f</td>
  </tr>
   <tr>
    <td>chmod</td>
  </tr>
  </table>

	
 



    
</div>
<?php 

    //include footer
	require('../global/footer.php');


?>

