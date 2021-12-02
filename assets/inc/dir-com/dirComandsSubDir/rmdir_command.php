<h3 class="subsubheader">rmdir Command</h3>

<p class="text"> removes the directory with specified name.
  The directory must be empty. To remove a directory with files,
  see the rm command.
</p>

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
      require '../../qCLI/ls.php';
    ?>
            </div>



<p class="text">Syntax: rmdir [directory]</p>

<h4 class="subsub" >Example 1: rmdir quasar</h4>

<p class="text">Removes directory named “quasar”</p>



</div>
