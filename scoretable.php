<?php
    include_once 'phptest.php';

?>

<!DOCTYPE html>

<html>

    <head>
        <title>AlzheimerGame</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="gamestyle.css"/>
        
        <!--favicon-->
        <link rel="icon" href="panda.png" type="image/png" sizes="16x16"/>
        
        <!--font for menu-->
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
        <!--font for header-->
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
        
    </head>
    
    <div id="wrapper">
        <body>
        
            <!--The one where I put PandaGame-->
            <header>
                
                <nav>
                    <div id="home">
                        <button><a href="index.html"><img src="homeicon.png" height="70px"><br>HOME</a></button>
                    </div>
            
                    <div id="back">
                        <button><a href="gamemenu.html"><img src="backicon.png" height="70px"><br>BACK</a></button>
                    </div>
                </nav>
                
                <h1><img src="panda2.ico">&nbsp;AlzheimerGame</h1>
            </header>
            
            <main>

                <h2><img src ="score.png" width="300px"></h2>
                
                 <form action ="search.php" method="POST">
                    <input type="text" id="myinput" name="search" placeholder="Search by name...">&nbsp;&nbsp;
                    <button type="submit" id = "submitButton" name="submit-search" value="Search">Submit</button><br><br>
                </form>
                <br>
                
                <div id="container" style="background-color: rgb(0,0,0,.5); font-size: 30px; color: black;">
                    <table id="container" style="color: black;">
                     <?php
                      $dbServername = "localhost";
                      $dbUsername = "root";
                      $dbPassword = "";
                      $dbName = "pandagame";

                      $conn = mysqli_connect("localhost", "root", "", "pandagame");
                        if ($conn -> connect_error){
                            die("Connection failed:".$conn->connect_error);
                        }
                        $sql = "SELECT * FROM scoreboard ORDER BY time DESC;";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows >0){
                            $x = 1;
                            echo "<tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Score</th>
                            <th>Time Taken</th>
                            <th>Level</th>
                            <th>Time</th>
                            <th>Date</th>
                            </tr>";
                            while($row = $result-> fetch_assoc()  ){
                                 
                                echo "<tr><td>$x</td><td>".$row["username"]."</td><td>".$row["score"]."</td><td>".$row["timetaken"]."</td><td>".$row["level"]."</td><td>".$row["time"]."</td><td>".$row["date"]."</td></tr>";
                                $x++;   
                                 }
                            
                            
                        }else{
                            echo "0 Result";
                        }
                        $conn-> close();
                        
                    ?>
                     </table>
                </div>
            </main>

       
        </body>
        
        <footer>
            <p>Copyright &copy;PANDA 2019</p>
        
        </footer>
    </div>

</html>