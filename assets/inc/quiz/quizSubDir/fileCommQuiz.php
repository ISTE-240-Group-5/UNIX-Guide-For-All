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
        <title>Introduction Quiz</title>

        <meta name="QUASAR" content="fileComm-quiz">

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
                <div id="q1" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="1" value = "A system of mathematical equations"                     id="1a"/><label    id="a1" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "A multitasking and multifunctional operating system"    id="1b"/><label    id="b1" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "A server organizer"                                     id="1c"/><label    id="c1" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="1" value = "All of the above"                                       id="1d"/><label    id="d1" >All of the above</label><br/>
                            <button type="button" onclick="Q1()">Submit</button>
                            <button type="button" onclick="scrollTQ2()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 2">
                <div id="q2" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="2" value = "A system of mathematical equations"                     id="2a"/><label    id="a2" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "A multitasking and multifunctional operating system"    id="2b"/><label    id="b2" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "A server organizer"                                     id="2c"/><label    id="c2" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="2" value = "All of the above"                                       id="2d"/><label    id="d2" >All of the above</label><br/>
                            <button type="button" onclick="Q2()">Submit</button>
                            <button type="button" onclick="scrollTQ3()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 3">
                <div id="q3" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="3" value = "A system of mathematical equations"                     id="3a"/><label    id="a3" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "A multitasking and multifunctional operating system"    id="3b"/><label    id="b3" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "A server organizer"                                     id="3c"/><label    id="c3" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="3" value = "All of the above"                                       id="3d"/><label    id="d3" >All of the above</label><br/>
                            <button type="button" onclick="Q3()">Submit</button>
                            <button type="button" onclick="scrollTQ4()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 4">
                <div id="q4" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="4" value = "A system of mathematical equations"                     id="4a"/><label    id="a4" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = "A multitasking and multifunctional operating system"    id="4b"/><label    id="b4" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = "A server organizer"                                     id="4c"/><label    id="c4" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="4" value = "All of the above"                                       id="4d"/><label    id="d4" >All of the above</label><br/>
                            <button type="button" onclick="Q4()">Submit</button>
                            <button type="button" onclick="scrollTQ5()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 5">
                <div id="q5" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="5" value = "A system of mathematical equations"                     id="5a"/><label    id="a5" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = "A multitasking and multifunctional operating system"    id="5b"/><label    id="b5" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = "A server organizer"                                     id="5c"/><label    id="c5" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="5" value = "All of the above"                                       id="5d"/><label    id="d5" >All of the above</label><br/>
                            <button type="button" onclick="Q5()">Submit</button>
                            <button type="button" onclick="scrollTQ6()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 6">
                <div id="q6" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="6" value = "A system of mathematical equations"                     id="6a"/><label    id="a6" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "A multitasking and multifunctional operating system"    id="6b"/><label    id="b6" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "A server organizer"                                     id="6c"/><label    id="c6" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="6" value = "All of the above"                                       id="6d"/><label    id="d6" >All of the above</label><br/>
                            <button type="button" onclick="Q6()">Submit</button>
                            <button type="button" onclick="scrollTQ7()">Back to the begining</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
                        <form name="question 7">
                <div id="q7" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="7" value = "A system of mathematical equations"                     id="7a"/><label    id="a7" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="7" value = "A multitasking and multifunctional operating system"    id="7b"/><label    id="b7" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="7" value = "A server organizer"                                     id="7c"/><label    id="c7" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="7" value = "All of the above"                                       id="7d"/><label    id="d7" >All of the above</label><br/>
                            <button type="button" onclick="Q7()">Submit</button>
                            <button type="button" onclick="scrollTQ8()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 8">
                <div id="q8" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="8" value = "A system of mathematical equations"                     id="8a"/><label    id="a8" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="8" value = "A multitasking and multifunctional operating system"    id="8b"/><label    id="b8" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="8" value = "A server organizer"                                     id="8c"/><label    id="c8" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="8" value = "All of the above"                                       id="8d"/><label    id="d8" >All of the above</label><br/>
                            <button type="button" onclick="Q8()">Submit</button>
                            <button type="button" onclick="scrollTQ9()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 9">
                <div id="q9" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="9" value = "A system of mathematical equations"                     id="9a"/><label    id="a9" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="9" value = "A multitasking and multifunctional operating system"    id="9b"/><label    id="b9" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="9" value = "A server organizer"                                     id="9c"/><label    id="c9" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="9" value = "All of the above"                                       id="9d"/><label    id="d9" >All of the above</label><br/>
                            <button type="button" onclick="Q9()">Submit</button>
                            <button type="button" onclick="scrollTQ10()">Next Question</button>
                </div>
            </form>
                        <!---------------------------------------------------------------------->
            <form name="question 10">
                <div id="q10" class="qdiv">
                    <h1 class="header"> Introduction Quiz </h1>
                    <h2 class="subheader">1. What is UNIX?</h2>
                        <input class="qDivFont" type="radio" name ="10" value = "A system of mathematical equations"                     id="10a"/><label    id="a10" >A system of mathematical equations</label><br/>
                        <input class="qDivFont" type="radio" name ="10" value = "A multitasking and multifunctional operating system"    id="10b"/><label    id="b10" >A multitasking and multifunctional operating system</label><br/>
                        <input class="qDivFont" type="radio" name ="10" value = "A server organizer"                                     id="10c"/><label    id="c10" >A server organizer</label><br/>
                        <input class="qDivFont" type="radio" name ="10" value = "All of the above"                                       id="10d"/><label    id="d10" >All of the above</label><br/>
                            <button type="button" onclick="Q10()">Submit</button>
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
            document.getElementById("q2").scrollIntoView({behavior: "smooth"});
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
            document.getElementById("q3").scrollIntoView({behavior: "smooth"});
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
            document.getElementById("q4").scrollIntoView({behavior: "smooth"});
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
            document.getElementById("q5").scrollIntoView({behavior: "smooth"});
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
            document.getElementById("q6").scrollIntoView({behavior: "smooth"});
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
            document.getElementById("q7").scrollIntoView({behavior: "smooth"});
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <script id="q7p">
        function Q7() {
            if(document.getElementById("7a").checked==true){
                document.getElementById("a7").style.backgroundColor = "red";
                document.getElementById("b7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d7").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("7b").checked==true){
                    document.getElementById("a7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b7").style.backgroundColor = "red";
                    document.getElementById("c7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d7").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("7c").checked==true){
                        document.getElementById("a7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c7").style.backgroundColor = "red";
                        document.getElementById("d7").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("7d").checked==true){
                            document.getElementById("a7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c7").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d7").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ4(){
            document.getElementById("q8").scrollIntoView({behavior: "smooth"});
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q8p">
        function Q8() {
            if(document.getElementById("8a").checked==true){
                document.getElementById("a8").style.backgroundColor = "red";
                document.getElementById("b8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d8").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("8b").checked==true){
                    document.getElementById("a8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b8").style.backgroundColor = "red";
                    document.getElementById("c8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d8").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("8c").checked==true){
                        document.getElementById("a8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c8").style.backgroundColor = "red";
                        document.getElementById("d8").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("8d").checked==true){
                            document.getElementById("a8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c8").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d8").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ5(){
            document.getElementById("q9").scrollIntoView({behavior: "smooth"});
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q9p">
        function Q9() {
            if(document.getElementById("9a").checked==true){
                document.getElementById("a9").style.backgroundColor = "red";
                document.getElementById("b9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d9").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("9b").checked==true){
                    document.getElementById("a9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b9").style.backgroundColor = "red";
                    document.getElementById("c9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d9").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("9c").checked==true){
                        document.getElementById("a9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c9").style.backgroundColor = "red";
                        document.getElementById("d9").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("9d").checked==true){
                            document.getElementById("a9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c9").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d9").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ6(){
            document.getElementById("q10").scrollIntoView({behavior: "smooth"});
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <script id="q10p">
        function Q10() {
            if(document.getElementById("10a").checked==true){
                document.getElementById("a10").style.backgroundColor = "red";
                document.getElementById("b10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("c10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                document.getElementById("d10").style.backgroundColor = "limegreen";
            }else{
                if(document.getElementById("10b").checked==true){
                    document.getElementById("a10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("b10").style.backgroundColor = "red";
                    document.getElementById("c10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                    document.getElementById("d10").style.backgroundColor = "limegreen";
                }else{
                    if(document.getElementById("10c").checked==true){
                        document.getElementById("a10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("b10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                        document.getElementById("c10").style.backgroundColor = "red";
                        document.getElementById("d10").style.backgroundColor = "limegreen";
                    }else{
                        if(document.getElementById("10d").checked==true){
                            document.getElementById("a10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("b10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("c10").style.backgroundColor = "rgba(255, 255, 255, 0)";
                            document.getElementById("d10").style.backgroundColor = "limegreen";
                        }else{
                            echo('fuck');
                        }
                    }
                }
            }
        }

        function scrollTQ1(){
            document.getElementById("q1").scrollIntoView({behavior: "smooth"});
        }
        </script>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <?php 
            //include footer
            require($path.'../../global/footer.php');
        ?>
    </body>
</html>
