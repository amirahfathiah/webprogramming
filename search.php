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
                
                <h2><img src ="panda-highscore3.png" width="300px"></h2>
                <h2>Search Page</h2>
                <br>
                <form action ="search.php" method="POST">
                    <input type="text" id="myinput" name="search" placeholder="Search by name...">&nbsp;&nbsp;
                    <button type="submit" id = "submitButton" name="submit-search" value="Search">Submit</button><br><br>
                </form>
                        
                <div id="container" style="background-color: rgb(0,0,0,.5)">
                    <table>
                        
                    <?php
                        if (isset($_POST['submit-search'])) {
                            $search = mysqli_real_escape_string($conn, $_POST['search']);
                            $sql = "SELECT score.*, patient.Name FROM score, patient
                            WHERE score.Username LIKE '%$search%'
                            AND score.Username = patient.Username";
                            $result = mysqli_query($conn, $sql);
                            $queryResult = mysqli_num_rows($result);
                            $x = 1;
                            
                            if ($queryResult > 0) {
                                echo "<tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Score</th>
                                <th>Time</th>
                                </tr>";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td>$x</td><td>".$row["Name"]."</td><td>".$row["username"]."</td><td>".$row["score"]."</td><td>".$row["time"].
                                    "</td></tr>";
                                    $x++;
                                }
                            }
                            else { 
                                echo "<text>There are no results matching your search.</text>";
                            }
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