<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pandagame";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$Name = $_POST["username"];
$Score = $_POST["score"];
$Timetaken = $_POST["timetaken"];
// $Level = $_POST["level"];
$Level = ("Easy");
$Time = $_POST["time"];
$Date = $_POST["date"];


$sql = "insert into scoreboard (username, score, timetaken, level, time, date) values ('$Name','$Score', '$Timetaken', '$Level', '$Time', '$Date')";

if(!mysqli_query($conn,$sql))
{
 echo 'Not Inserted';
}

else
{
 echo 'Inserted Successfully';
}

header("refresh:2; url=gamemenu.php");


?>﻿
 
