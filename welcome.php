<!DOCTYPE html>
<html lang="en">
<head>
<!--Log In Session Check-->
<?php
  session_start();

  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
  }
?>

<!--favicon-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!--favicon END-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOME-WBTC West Bengal Transport Corporation</title>
<!-- Bootstrap -->
<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body>
<!-- body code goes here -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class='container'>
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="220" height="65" alt=""/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> 
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="#transport_service">Transport Service</a> 
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="#smart">Smart Service</a> 
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="#contact">About us</a>
        </li>
      </ul>
      <a class="btn btn-outline-primary" href="logout.php" role="button">Log Out</a>
    </div>
  </div>
</nav>

<div class="container">
  Welcome - <?php echo $_SESSION['username'] ?>
</div>



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


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.2.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.0.0.js"></script>




</body>
</html>