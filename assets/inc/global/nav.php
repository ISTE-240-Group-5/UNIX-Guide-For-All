 <div class="topnav">
    	 <!-- <span class="link" style="font-size:20px; padding: 15px; cursor:pointer" onclick="openNav()">&#9776;</span> -->
         
            <a class="link <?php echo((isset($page) && $page=='gettingStarted')? ' active"' : ''); ?>   " href="assets/inc/get-start/gettingStarted.php">Getting Started</a>            
            <a class="link <?php echo((isset($page) && $page=='dirCommands')? ' active"' : ''); ?>    " href="assets/inc/dir-com/dirCommands.php">Directory Commands</a>
            <a class="link <?php echo((isset($page) && $page=='fileCommands')? ' active"' : ''); ?>   " href="assets/inc/file-com/fileCommands.php">File Commands</a>
            <a class="link <?php echo((isset($page) && $page=='advancedCommands')? ' active"' : ''); ?>    " href="assets/inc/adv-com/advCommands.php">Advanced Commands</a>
            <a class="link <?php echo((isset($page) && $page=='quizzes')? ' active"' : ''); ?>    " href="assets/inc/quiz/quiz.php">Quizzes</a>

                    <!-- search bar right align -->
            <div class="search">
                <form action="#">
                	<img class="searchButton" 	
					src="https://img.icons8.com/material-outlined/24/ffffff/search--v1.png"/>
				<input type="text" name="search">
                </form>
            </div>


        </div>
    </div>
