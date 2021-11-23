        <div class="topnav">
    	 <span class="link" style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776;</span>
         
            <a class="link
                <?php 
                    echo((isset($page) && $page=='gettingStarted')? ' active' : ''); 
                ?>  
            
            " href="gettingStarted.php">Getting Started</a>

            <!-- <a class="link" href="header.php">Getting Started</a> -->
            
            <a class="link" href="#">Directory Commands</a>
            <a class="link" href="#">File Commands</a>
            <a class="link" href="#">Advanced Commands</a>
            <a class="link" href="#">Quizzes</a>

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


