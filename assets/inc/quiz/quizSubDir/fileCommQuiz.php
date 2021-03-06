 <!-- 
Name         : quiz
File         : quiz.php
Objectives   : _________________________________________
Usage        : Read directly in browser.
Compatibility: caniuse.com, allmost all browsers.
Rights       : Copyright (c) 2021 Quasar - GPLv3             
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quasar Quizzes</title>

        <meta name="QUASAR" content="File-Quiz">

        <!-- Mobile-friendly viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../css/stylesheet.css">

    </head>
    <body>

        <?php 
            $path = './';
            //include header
            require($path.'../../global/header.php');
            require('../../global/nav.php');
        ?>

        <div class="quizPageMargins">
                        <!---------------------------------------------------------------------->
            <form name="question 1">
                <div id="q1p" class="qdiv">
                    <h1 class="header"> File Command Quiz </h1>
                    <h2 class="subheader">1. How can you change file permissions?</h2>
                        <input class="qDivFont" type="radio" name ="1" value = "Perm"                     id="1a"/><label    id="a1" >Perm</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "Chmod"    id="1d"/><label    id="d1" >Chmod</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "Mv"                                     id="1c"/><label    id="c1" >Mv</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "Ch"                                       id="1b"/><label    id="b1" >Ch</label><br/>
                            <button type="button" onclick="Q1()">Submit</button>
                            <button type="button" onclick="scrollTQ2()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 2">
                <div id="q2p" class="qdiv">
                    <h1 class="header"> File Command Quiz </h1>
                    <h2 class="subheader">2. What command reads and outputs the contents of a file?</h2>
                        <input class="qDivFont" type="radio" name ="2" value = "Open"                     id="2a"/><label    id="a2" >Open</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "Read"    id="2b"/><label    id="b2" >Read</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "Ls"                                     id="2c"/><label    id="c2" >Ls</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "Cat"                                       id="2d"/><label    id="d2" >Cat</label><br/>
                            <button type="button" onclick="Q2()">Submit</button>
                            <button type="button" onclick="scrollTQ3()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 3">
                <div id="q3p" class="qdiv">
                    <h1 class="header"> File Command Quiz </h1>
                    <h2 class="subheader">3. Which of these commands would open a file in a text editor?</h2>
                        <input class="qDivFont" type="radio" name ="3" value = "Vim filename"                     id="3d"/><label    id="d3" >Vim filename</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "Cat filename"    id="3b"/><label    id="b3" >Cat filename</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "Open filename"                                     id="3c"/><label    id="c3" >Open filename</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "Txt filename"                                       id="3a"/><label    id="a3" >Txt filename</label><br/>
                            <button type="button" onclick="Q3()">Submit</button>
                            <button type="button" onclick="scrollTQ4()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 4">
                <div id="q4p" class="qdiv">
                    <h1 class="header"> File Command Quiz </h1>
                    <h2 class="subheader">4. In the text editor vim, what command is used to save the working file?</h2>
                        <input class="qDivFont" type="radio" name ="4" value = "Ctrl s"                     id="4a"/><label    id="a4" >Ctrl s</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = ":o filename"    id="4b"/><label    id="b4" >:o filename</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = ":s filename"                                     id="4c"/><label    id="c4" >:s filename</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = ":w filename"                                       id="4d"/><label    id="d4" >:w filename</label><br/>
                            <button type="button" onclick="Q4()">Submit</button>
                            <button type="button" onclick="scrollTQ5()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 5">
                <div id="q5p" class="qdiv">
                    <h1 class="header"> File Command Quiz </h1>
                    <h2 class="subheader">5. How do you exit a text file in vim?</h2>
                        <input class="qDivFont" type="radio" name ="5" value = "Esc"                     id="5a"/><label    id="a5" >Esc</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = ":q!"    id="5d"/><label    id="d5" >:q!</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = ":e!"                                     id="5c"/><label    id="c5" >:e!</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = "-q"                                       id="5b"/><label    id="b5" >-q</label><br/>
                            <button type="button" onclick="Q5()">Submit</button>
                            <button type="button" onclick="scrollTQ6()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 6">
                <div id="q6p" class="qdiv">
                    <h1 class="header"> File Command Quiz </h1>
                    <h2 class="subheader">6. What command copies the current line?</h2>
                        <input class="qDivFont" type="radio" name ="6" value = "Yy"                     id="6d"/><label    id="d6" >Yy</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "Xx"    id="6b"/><label    id="b6" >Xx</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "Cc"                                     id="6c"/><label    id="c6" >Cc</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "Ctrl + c"                                       id="6a"/><label    id="a6" >Ctrl + c</label><br/>
                            <button type="button" onclick="Q6()">Submit</button>
                            <button type="button" onclick="scrollTQ1()">Back to the begining</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
        </div>


        <script id="q1p">
        function Q1() {
            if(document.getElementById("1a").checked==true){
                document.getElementById("a1").style.backgroundColor = "red";
                document.getElementById("b1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d1").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("1b").checked==true){
                    document.getElementById("a1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b1").style.backgroundColor = "red";
                    document.getElementById("c1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d1").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("1c").checked==true){
                        document.getElementById("a1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c1").style.backgroundColor = "red";
                        document.getElementById("d1").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("1d").checked==true){
                            document.getElementById("a1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c1").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d1").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ2(){
            document.getElementById("q2").scrollIntoView(true);
            document.getElementById("q2").scrollIntoView(false);
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q2p">
        function Q2() {
            if(document.getElementById("2a").checked==true){
                document.getElementById("a2").style.backgroundColor = "red";
                document.getElementById("b2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d2").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("2b").checked==true){
                    document.getElementById("a2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b2").style.backgroundColor = "red";
                    document.getElementById("c2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d2").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("2c").checked==true){
                        document.getElementById("a2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c2").style.backgroundColor = "red";
                        document.getElementById("d2").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("2d").checked==true){
                            document.getElementById("a2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c2").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d2").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ3(){
            document.getElementById("q3").scrollIntoView(true);
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q3p">
        function Q3() {
            if(document.getElementById("3a").checked==true){
                document.getElementById("a3").style.backgroundColor = "red";
                document.getElementById("b3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d3").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("3b").checked==true){
                    document.getElementById("a3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b3").style.backgroundColor = "red";
                    document.getElementById("c3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d3").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("3c").checked==true){
                        document.getElementById("a3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c3").style.backgroundColor = "red";
                        document.getElementById("d3").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("3d").checked==true){
                            document.getElementById("a3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c3").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d3").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ4(){
            document.getElementById("q4").scrollIntoView(true);
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q4p">
        function Q4() {
            if(document.getElementById("4a").checked==true){
                document.getElementById("a4").style.backgroundColor = "red";
                document.getElementById("b4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d4").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("4b").checked==true){
                    document.getElementById("a4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b4").style.backgroundColor = "red";
                    document.getElementById("c4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d4").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("4c").checked==true){
                        document.getElementById("a4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c4").style.backgroundColor = "red";
                        document.getElementById("d4").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("4d").checked==true){
                            document.getElementById("a4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c4").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d4").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ5(){
            document.getElementById("q5").scrollIntoView(true);
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q5p">
        function Q5() {
            if(document.getElementById("5a").checked==true){
                document.getElementById("a5").style.backgroundColor = "red";
                document.getElementById("b5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d5").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("5b").checked==true){
                    document.getElementById("a5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b5").style.backgroundColor = "red";
                    document.getElementById("c5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d5").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("5c").checked==true){
                        document.getElementById("a5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c5").style.backgroundColor = "red";
                        document.getElementById("d5").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("5d").checked==true){
                            document.getElementById("a5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c5").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d5").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ6(){
            document.getElementById("q6").scrollIntoView(true);
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q6p">
        function Q6() {
            if(document.getElementById("6a").checked==true){
                document.getElementById("a6").style.backgroundColor = "red";
                document.getElementById("b6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d6").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("6b").checked==true){
                    document.getElementById("a6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b6").style.backgroundColor = "red";
                    document.getElementById("c6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d6").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("6c").checked==true){
                        document.getElementById("a6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c6").style.backgroundColor = "red";
                        document.getElementById("d6").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("6d").checked==true){
                            document.getElementById("a6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c6").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d6").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ1(){
            document.getElementById("q1").scrollIntoView(true);
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <?php 
            //include footer
            require($path.'../../global/footer.php');
        ?>
    </body>
</html>
