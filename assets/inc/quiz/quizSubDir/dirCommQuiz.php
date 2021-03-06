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

        <meta name="QUASAR" content="Directory-Quiz">

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
                    <h1 class="header"> Directory Quiz </h1>
                    <h2 class="subheader">1. What command would be used to change the directory you are in?</h2>
                        <input class="qDivFont" type="radio" name ="1" value = "Mkdir"                     id="1a"/><label    id="a1" >Mkdir</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "Mv"    id="1b"/><label    id="b1" >Mv</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "Cd"                                     id="1d"/><label    id="d1" >Cd</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "Changedir"                                       id="1c"/><label    id="c1" >Changedir</label><br/>
                            <button type="button" onclick="Q1()">Submit</button>
                            <button type="button" onclick="scrollTQ2()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 2">
                <div id="q2p" class="qdiv">
                    <h1 class="header"> Directory Quiz </h1>
                    <h2 class="subheader">2. What command would be used to make a new directory?</h2>
                        <input class="qDivFont" type="radio" name ="2" value = "Mkdir"                     id="2a"/><label    id="a2" >Mkdir</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "Mv"    id="2b"/><label    id="b2" >Mv</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "Cd"                                     id="2c"/><label    id="c2" >Cd</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "Changedir"                                       id="2d"/><label    id="d2" >Changedir</label><br/>
                            <button type="button" onclick="Q2()">Submit</button>
                            <button type="button" onclick="scrollTQ3()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 3">
                <div id="q3p" class="qdiv">
                    <h1 class="header"> Directory Quiz </h1>
                    <h2 class="subheader">3. How would you go back a directory?</h2>
                        <input class="qDivFont" type="radio" name ="3" value = "Cd/prev"                     id="3a"/><label    id="a3" >Cd/prev</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "Cd/.."    id="3d"/><label    id="d3" >Cd/..</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "Back"                                     id="3c"/><label    id="c3" >Back</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "Id"                                       id="3b"/><label    id="b3" >Id</label><br/>
                            <button type="button" onclick="Q3()">Submit</button>
                            <button type="button" onclick="scrollTQ4()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 4">
                <div id="q4p" class="qdiv">
                    <h1 class="header"> Directory Quiz </h1>
                    <h2 class="subheader">4. What command can be used to check the contents of the current directory?</h2>
                        <input class="qDivFont" type="radio" name ="4" value = "Mkdir"                     id="4a"/><label    id="a4" >Mkdir</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = "Cdir"    id="4b"/><label    id="b4" >Cdir</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = "Ls"                                     id="4d"/><label    id="d4" >Ls</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = "Dir"                                       id="4c"/><label    id="c4" >Dir</label><br/>
                            <button type="button" onclick="Q4()">Submit</button>
                            <button type="button" onclick="scrollTQ5()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 5">
                <div id="q5p" class="qdiv">
                    <h1 class="header"> Directory Quiz </h1>
                    <h2 class="subheader">5. What command can be used to delete a directory</h2>
                        <input class="qDivFont" type="radio" name ="5" value = "Del"                     id="5a"/><label    id="a5" >Del</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = "Mv"    id="5b"/><label    id="b5" >Mv</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = "Rmdir"                                     id="5d"/><label    id="d5" >Rmdir</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = "remove"                                       id="5c"/><label    id="c5" >remove</label><br/>
                            <button type="button" onclick="Q5()">Submit</button>
                            <button type="button" onclick="scrollTQ6()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 6">
                <div id="q6p" class="qdiv">
                    <h1 class="header"> Directory Quiz </h1>
                    <h2 class="subheader">6. What command copies a directory or file</h2>
                        <input class="qDivFont" type="radio" name ="6" value = "Copy"                     id="6a"/><label    id="a6" >Copy</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "C"    id="6b"/><label    id="b6" >C</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "X"                                     id="6c"/><label    id="c6" >X</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "Cp"                                       id="6d"/><label    id="d6" >Cp</label><br/>
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
