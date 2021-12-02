<h3 class="subsubheader">rm Command</h3>

<p class="text"> Changes the permissions of a file or directory.
</p>

  <h4 class="subsub" >Modes</h4>

  <p class="text">
    Who:
                u = user
                g = group
                o = other
                a = all (default, if not specified)
  Opcode:
                +  add permission
                -   remove permission
                =  set permission
  Permission:
                r = read
                w = write
                x = execute

  </p>

<div class="terminals">
<p> <span style="color:#00FF85">example.bot:</span><span style="color:#00F0FF">~ $</span>
 cd </p>
        </div>


<p class="text">Syntax: chmod [mode] filename</p>

<h4 class="subsub" >Example 1: chmod rwx example </h4>

<p class="text">Sets file permissions to read, write, execute for all</p>

<h4 class="subsub" >Example 2: chmod u=rwx g=-r o=rw </h4>

<p class="text">
  Sets user permissions to read, write, execute.
    Removes read permission from group.
    Sets other permissions to read, write.



</p>


</div>
