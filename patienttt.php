<?php
    //include_once '.php';

?>

<!DOCTYPE html>
<html lang="en" >

<!-- Head -->
<head>
  <meta charset="UTF-8">
  <title>Admin-Patients</title>
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
  <link rel="stylesheet" href="alzheimer.css">
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
<body>

<!-- side nav bar --> 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="patient.html">Patients Library</a>
  <a href="guardian.php">Guardians Library</a>
  <a href="index.html">Log out</a>
</div>

<!-- nav bar --> 
<div id="main">
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <div>
        <ul style="font-weight: bolder; font-size: 13px">
        <li><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></li>
        <li><a href="index-admin.html" style="color: white;">Home</a></li>
        <li><a href="about-admin.html" style="color: white;">About Us</a></li>
        <li><a href="game.html" style="color: white;">Game</a></li>
        <li><a href="contact-admin.html" style="color: white;">Contact</a></li>
      </ul>
    </div> 
  </div>
</div>

<body style="background-color: white">
    <div class="container">
    <center><h1>Patients Library</h1></center><br><br>

  <!-- Editable table -->
      <div id="table" class="table-editable">
      <a href= register.html><span class="table-add glyphicon glyphicon-plus"></span></a>
      <table class="table"> 
          
          <!-- Import data from databases to table-->    
        <?php
          $link_name = "View";
          $conn = mysqli_connect("localhost", "root", "", "pandagame");
          if ($conn -> connect_error){
            die("Connection failed:".$conn->connect_error);
          }
          $sql = "SELECT * FROM patient ORDER BY Name;";
          $result = $conn->query($sql);
                        
          if($result->num_rows >0){
          echo "<tr>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Severity</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Postcode</th>
                  <th>State</th>
                  <th></th>
                  
                </tr>";
                while($row = $result-> fetch_assoc()  ){
                    
                  echo "<tr>
                          <td>".$row["Name"]."</td>
                          <td>".$row["Age"]."</td>
                          <td>".$row["Gender"]."</td>
                          <td>".$row["DOB"]."</td>
                          <td>".$row["Severity"]."</td>
                          <td>".$row["Address"]."</td>
                          <td>".$row["City"]."</td>
                          <td>".$row["Postcode"]."</td>
                          <td>".$row["State"]."</td>
                                                  
                        </tr>";
                }
          }
                        
          else{
            echo "0 Result";
          }

          $conn-> close();
                        
          ?>

       

        <!-- Clonable table line -->
        <tr class="hide">
            <td>New Patient</td>
            <td>Enter Age</td>
            <td>Enter DOB</td>
            <td></td>
        </tr>
    </table>
    </div>
  </div>
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore.js'></script>
  <script  src="alzheimer.js"></script>
  <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  }
</script>
</body>
</html>
