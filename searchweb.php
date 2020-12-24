<!DOCTYPE html>
<html>
<head>
<title>PANDA | About Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">

<!-- Icons font CSS-->
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Vendor CSS-->
<link href="vendor/select3/select3.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/main.css" rel="stylesheet" media="all">
</head>

<body >
<!-- Navigation bar -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
        <ul style="font-weight: bolder; font-size: 13px">
        <li><a href="index.html" style="color: white;">Home</a></li>
        <li><a href="about.html" style="color: white;">About Us</a></li>
        <li><a href="game.html" style="color: white;">Game</a></li>
        <li><a href="contact.html" style="color: white;">Contact</a></li>
        <li><a href="register.html" style="color: white;" >Register</a></li>
			 <li class="fl_right"><form style="float:right"action="searchweb.php" method="post"><input type="text" name="search" value='' placeholder = "  Search" style="background: #ffffff url(search2.png) no-repeat right" /> <button style="position: absolute" type="submit" name="submit-search"></button>
	</form>
	  </li>
        <!-- Float right login -->
        <li class="fl_right"><a href="login.html" style="color: white;">Login</a></li>
      </ul>
    </div>
  </div>
</div>

	<body style ="background: #ffffff">
	<div class="wrapper row3">

<?php
#connect to database
include 'connect.php';
?>

<br><br><br>
<h1>Search Result</h1>

<br>
 <?php 
#hide errors
error_reporting(E_PARSE);
		
		#check with database
     if(isset($_POST['submit-search'])){
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		 $sql = "SELECT * FROM find WHERE title LIKE '%$search%'OR a_text LIKE '%$search%' ";
		 $result = mysqli_query($conn, $sql);
		 $queryResult = mysqli_num_rows($result);
		 
#show how many results	 
echo "Showing ".$queryResult." results for '".$search."' ";
		 echo "<br>";
		 
		 #print result
		 if($queryResult > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<br>";
				echo "<h3>".$row[title]."</h3> | ".$row[source]."
				<p>".$row[a_text]."</p>";
				echo "<br>";
		        echo "<hr>";
			} 
		 }
		 else{
			 echo "There are no results matching your search";
		 }
		 
		
		 
	 }



		?> </div></body>