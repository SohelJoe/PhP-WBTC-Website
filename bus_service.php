<!DOCTYPE html>
<html lang="en">
<head>
<!--Connecting Database-->
<?php
  include "dependency/_dbconnect.php";
?>

<!--favicon-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!--favicon END-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bus Services-WBTC West Bengal Transport Corporation</title>
<!-- Bootstrap -->
<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- body code goes here -->

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="220" height="65" alt=""/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav"> 
        <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> 
        <a class="nav-item nav-link" href="#">Transport Service</a> 
        <a class="nav-item nav-link" href="#">Smart Service</a> 
        <a class="nav-item nav-link" href="#">About us</a> 
      </div>
    </div>
  </nav>
  <img src="images/onlineReservation.jpg" class="busserimg"/>
  <div class="row" style="margin-top: 50px">
    <div class="col-md-12"><h3>Bus Services</h3>
    <p>WBTC serves commuters in a posse of ever increasing number of buses by the day in West Bengal and Kolkata city. The
      complexity of the bus route network is unparalleled as it connects different parts of the state through road in addition to
      the mesh of Kolkata city. This continuous upgrade is the result of daily research and upgrade of the routes considering
      the optimization of the routes driven by various social and economic parameters</p></div>
	  
  </div>
</div>

<div class="container">
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#local">Local Route</button>
  <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#long">Long Route</button>
  <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#fare">Fare Chart</button>

  <div id="local" class="collapse">
    <?php
      $table_local = "<table>
        <br><h3> Local Bus Route List </h3>
        <tr> <th>Route No</th> <th>Source</th> <th>Destination</th> <th>Via</th> <th>Frequency</th> <th>Departure Time</th> </tr>";
    
      $qry = "SELECT * FROM `bus_route` WHERE route_type = 'local'";
      $result = mysqli_query($conn, $qry);

      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          $table_local = $table_local . "<tr><td>".$row['route_no']."</td><td>".$row['source']."</td><td>".$row['destination']."</td><td>".$row['via_route']."</td><td>".$row['frequency']."</td><td>".$row['dpre_time']."</td></tr>";
        }
      }
      echo $table_local . "</table>";
    ?>
  </div>

  <div id="long" class="collapse">
    <?php
      $table_long = "<table>
        <br><br><h3> Long Bus Route List </h3>
        <tr> <th>Route No</th> <th>Source</th> <th>Destination</th> <th>Via</th> <th>Frequency</th>  <th>Departure Time</th> </tr>";
      
      $qry = "SELECT * FROM `bus_route` WHERE route_type = 'long'";
      $result = mysqli_query($conn, $qry);
      
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          $table_long = $table_long . "<tr><td>".$row['route_no']."</td><td>".$row['source']."</td><td>".$row['destination']."</td><td>".$row['via_route']."</td><td>".$row['frequency']."</td><td>".$row['dpre_time']."</td></tr>";
        }
      }
      echo $table_long . "</table>";
    ?>
  </div>

  <div id="fare" class="collapse">
    <?php
      $table_fare = "<table>
        <br><br><h3> Bus Route Fare List </h3>
        <tr> <th>Route No</th> <th>Fare</th> </tr>";
      
      $qry = "SELECT * FROM `fare_list`";
      $result = mysqli_query($conn, $qry);
      
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          $table_fare = $table_fare . "<tr><td>".$row['route_no']."</td><td>".$row['fare']."</td></tr>";
        }
      }
      echo $table_fare . "</table>";
    ?>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.2.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.0.0.js"></script>

<br><br><br><br>

<!--footer start from here -->
<div class="p-3 my-3 bg-dark text-white" id="contact">
  <div class="container ">
    <div class="row">
      <div class="col-sm-6">
        <h4>REACH US</h4>
         <br>
        <p><h6>WBTC Officials</h6></p>
        <p><h6>Hon'ble Board Members</h6></p>
        <p><h6>Locate Us</h6></p>
        <p><h6>Contact Us</h6></p>
      </div>
      <div class="col-sm-6">
        <h4>OUR CONTACTS</h4>
         <br>
        <p><h6>Address: Paribahan Bhavan-1,12, R.N.Mukherjee Road, kolkata 700001,</h6></p>
        <p><h6>Phone: +91 33 2236 1916/2237 26692 </h6></p>
        <p><h6>Email: wbtc@gmail.com</h6></p>
        <p><h6>WhatsApp: 9830177000</h6></p>
      </div>
      </div>
      </div>

</div>
</body>
</html>