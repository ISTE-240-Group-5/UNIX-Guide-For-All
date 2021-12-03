<div style="margin-top: 0;"class="content">

<h3 class="subsubheader">cat Command</h3>

<p class="text">reads a file and sends the contents to an output. Can be used to
   append files or output the contents into the terminal window.</p>

  <h4 class="subsub" >Options</h4>

  <p class="text">
    -b: starting at 1, number non-blank output lines
    -n: starting at 1, number all output lines
    -u: Output is displayed unbuffered
  </p>


  <h4 class="subsub" >Operators</h4>

  <p class="text">
    >   redirects the output to the specified location, rather than the standard output.  If the destination file does not exist, it will be created.  If it does exist, it will be overwritten.

    >>  appends the end of an existing file with the output.  If the file does not exist, it will be created.

  </p>


<div class="term">
    <?php
      file_get_contents('http://solace.ist.rit.edu/~iste240t18/project-dev/assets/inc/qCLI/ls.php');
    ?>
</div>


<p class="text">Syntax: cat [option] [files]</p>

<h4 class="subsub" >Example 1: cat quasar.txt</h4>

<p class="text">The contents of “quasar.txt” are printed in the terminal</p>

<h4 class="subsub" >Example 1: cat file1 file2 > file3</h4>

<<<<<<< HEAD
<p class="text">Takes the contents of file1 and file2  and concatenates them into file3</p>



</div>
=======
<p class="text">Takes the contents of file1 and file2  and concatenates them into file3</p>
>>>>>>> d8907568567dc8960a9093e05c782ac4fb93ad10
