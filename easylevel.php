<!DOCTYPE html>

<html>

    <head>
        <title>AlzheimerGame</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="game.css">
        
        <!--favicon-->
        <link rel="icon" href="panda.png" type="image/png" sizes="16x16"/>
        
        <!--font for menu-->
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
        <!--font for header-->
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
         <!--to close window for EXIT menu-->
        <script language="javascript" type="text/javascript">
            function windowClose() {
                window.open('','_parent','');
                window.close();
            }
        </script>
    </head>
    
    <div id="wrapper">
        <body>
        
            <!--The one where I put PandaGame-->
            <header>
                
                <!-- <nav>
                    <div id="home">
                        <button><a href="game.html"><img src="images/homeicon.png" height="70px"><br>HOME</a></button>
                    </div>
            
                    <div id="back">
                        <button><a href="gamemenu.html"><img src="images/exit2.png" height="70px"><br>QUIT</a></button>
                    </div>
                </nav> -->

                
                <h1><img src="panda2.ico">&nbsp;AlzheimerGame</h1>
            </header>
             <div class="controls">
            <a href="#" id="mutebtn"><img src="speaker.png" onclick="change();" id="sound" width="80px" onmousedown="bleep.play()"></a>
            <a href="#" class="buttonL" ><img src="pause.png" width="80px" onclick="changePic();" id="play&pause" onmousedown="bleep.play()"></a>
            <a href="#" id="myBtn" class="buttonL" ><img src="stop.png" width="80px" onClick="stopwatch.stop();" onmousedown="bleep.play()"></a> 
        </div>
                <main>
                    <!--all menu-->
                     <br>
                    <center><h2 class="buttonP">Score: <output id='out'>0</output>&nbsp;&nbsp;&nbsp;&nbsp;Time: <output class="stopwatch"></output></h2></center>
                    <br>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 10</div>
                        <img src="questions/easyQ1.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(2); plus();" onmousedown="correct.play()"><img src="options/option3.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(2); minus();" onmousedown="correct.play()"><img src="options/option6.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(2); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                    </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 10</div>
                        <img src="questions/easyQ2.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(3); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(3); plus();" onmousedown="correct.play()"><img src="options/option2.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(3); minus();" onmousedown="correct.play()"><img src="options/option4.png" width="150px"></button>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 10</div>
                        <img src="questions/easyQ3.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(4); minus();" onmousedown="correct.play()"><img src="options/option5.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(4); plus();" onmousedown="correct.play()"><img src="options/option6.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(4); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">4 / 10</div>
                        <img src="questions/easyQ4.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(5); plus();" onmousedown="correct.play()"><img src="options/option0.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(5); minus();" onmousedown="correct.play()"><img src="options/option6.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(5); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">5 / 10</div>
                        <img src="questions/easyQ5.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(6); plus();" onmousedown="correct.play()"><img src="options/option6.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(6); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(6); minus();" onmousedown="correct.play()"><img src="options/option10.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">6 / 10</div>
                        <img src="questions/easyQ6.png" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(7); minus();" onmousedown="correct.play()"><img src="options/option3.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(7); plus();" onmousedown="correct.play()"><img src="options/option1.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(7); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">7 / 10</div>
                        <img src="questions/easyQ7.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(8); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(8); plus();" onmousedown="correct.play()"><img src="options/option7.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(8); minus();" onmousedown="correct.play()"><img src="options/option1.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">8 / 10</div>
                        <img src="questions/easyQ8.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(9); plus();" onmousedown="correct.play()"><img src="options/option4.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(9); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(9); minus();" onmousedown="correct.play()"><img src="options/option9.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">9 / 10</div>
                        <img src="questions/easyQ9.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="currentSlide(10); plus();" onmousedown="correct.play()"><img src="options/option2.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(10); minus();" onmousedown="correct.play()"><img src="options/option5.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="currentSlide(10); minus();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">10 / 10</div>
                        <img src="questions/easyQ10.jpg" style="width:100%">
                        <div class="text">Choose one...</div>
                        <button onclick="minus(); show();" onmousedown="correct.play()"><img src="options/option8.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="minus(); show();" onmousedown="correct.play()"><img src="options/option5.png" width="150px"></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button onclick="plus(); show();" onmousedown="correct.play()"><img src="options/option1.png" width="150px"></button>
                </div>

                <!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
                 <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <center><h1>EXCELLENT!</h1>
        <br>
    <!-- <h2>Score:  </h2>
    <h2 id="demo"></h2>
    <h2>Time:</h2>
    <h2 id="timetaken"></h2> -->
    <form action="insertEasy.php" method="post">
    <h2>Score:</h2><input type="text" name="score" id="input2" style="border: none; color: black; font-family: 'Black Ops One', cursive;
    font-size: 30px; text-align: center;">
<br/>
<br>
<h2>Time: </h2><input type="text" name="timetaken" id="input3" style="border: none; color: black; font-family: 'Black Ops One', cursive;
    font-size: 30px; text-align: center;">
<br/>
<input type="text" name="username" id="username" style="border: none; color: white; opacity: 100%;">
<!-- <input type="text" name="level" id="input4" style="border: none; color: white; opacity: 100%;"> -->
<input type="text" name="time" id="input5" style="border: none; color: white; opacity: 100%;">
<input type="text" name="date" id="input6" style="border: none; color: white; opacity: 100%;">
<br>
<input type="submit" value="Save" onmousedown="bleep.play()">
<br>
<br>
<!-- <a href="savescore.php"><input type="submit" value="Exit" onmousedown="bleep.play()"></a> -->
</form>
  </div>
</div> 

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span> 
                <span class="dot" onclick="currentSlide(6)"></span> 
                <span class="dot" onclick="currentSlide(7)"></span> 
                <span class="dot" onclick="currentSlide(8)"></span> 
                <span class="dot" onclick="currentSlide(9)"></span> 
                <span class="dot" onclick="currentSlide(10)"></span> 
            </div>
            
                </main>
            
            
            <!-- <div id="timer">
            <img src="timericon.png" width="150px"></div>
            <div id="pause">
            <button><img src="pauseicon.png" width="100px"><br>PAUSE</button>
            </div> -->
            <script src="main.js"></script>
        </body>
        
        <footer>
            <p>Copyright &copy;PANDA 2019</p>
        
        </footer>
    </div>

</html>