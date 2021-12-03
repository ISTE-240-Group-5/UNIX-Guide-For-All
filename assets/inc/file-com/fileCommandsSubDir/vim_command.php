<h3 class="subsubheader">vim Command</h3>

<p class="text">vim: Launches a text editor called Vim and creates a file with
  the specified name, if it does not exist. Vim has two main modes: edit and
  command. You can switch between these modes by pressing esc.

  <h4 class="subsub" >Command Mode</h4>

  <p class="text">
    :e filename: Opens a file, where filename is the name of the file you want to open
    :w filename: saves the working file with the specified file name
    :wq : saves the file and quits Vim
    :q! : quits the file without saving
  </p>


  <h4 class="subsub" >Movement Commands in Vim</h4>

  <p class="text">
    h : Moves the cursor to the left
    l : Moves the cursor to the right
    j : Moves the cursor down one line
    k : Moves the cursor up one line
    H : Moves the cursor to the top of the screen
    M : Moves the cursor to the middle of the screen
    L : Moves the cursor to the bottom of the screen
    w : Moves the cursor to the start of the next word
    b : Moves the cursor to the start of the previous word
    $ : Moves the cursor to the end of the line
    0 : Moves the cursor to the start of the line
    Ctrl + f : Takes you to the next page
    Ctrl + b : Takes you to the previous page
    gg : Moves the cursor to the start of the file
    G :  Moves the cursor to the end of the file
    n  : Where n  is a line number, moves the cursor to the start of line n

  </p>

  <h4 class="subsub" >Editing commands in Vim</h4>

  <p class="text">
    yy : Copies the line the cursor is on
    yw : Copies the word the cursor is on
    y$ :  Copies everything between the cursor and the end of the line
    p : Pastes the copied text
    d : Deletes the highlighted text
    dd : Deletes the line the cursor is on
    x : Deletes a single character
    u : undo the last operation
    Ctrl + r : redo the last undo
    . : repeat the last action
  </p>


<p class="text">Syntax: vim filename</p>


