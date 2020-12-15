<!DOCTYPE html>
<html lang="en">
<head>
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
    <a class="navbar-brand" href="#"><img src="images/logo.png" width="220" height="65" alt=""/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> 
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
      
      <?php
        session_start();
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
          echo '<button class="btn btn-outline-primary " data-toggle="modal" data-target="#LoginModal">Log In</button>
          <button class="btn btn-outline-primary mx-2" data-toggle="modal" data-target="#SignupModal">Sign Up</button>';
        }
        else{
          echo '<a class="btn btn-outline-primary mx-2" href="welcome.php">'. $_SESSION['username'] .'</a>';
        }

        include 'dependency/_loginmodal.php';
        include 'dependency/_signupmodal.php';
      ?>
    </div>
  </div>
</nav>
<?php
  include 'dependency/_error.php'
?>

<div class="container">  
  <!-- Start WOWSlider.com BODY section -->
  <div id="wowslider-container1">
    <div class="ws_images">
      <ul>
        <li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
        <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li>
        <li><a href="http://wowslider.net"><img src="data1/images/3.jpg" alt="css slideshow" title="3" id="wows1_2"/></a></li>
        <li><img src="data1/images/4.jpg" alt="4" title="4" id="wows1_3"/></li>
        <li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_4"/></li>
      </ul>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slideshow html code</a> by WOWSlider.com v9.0</div>
    <div class="ws_shadow"></div>
  </div>
  <script type="text/javascript" src="engine1/wowslider.js"></script> 
  <script type="text/javascript" src="engine1/script.js"></script>
  <div class="wrapper">
    <h3 style="text-align: center"><b>WBTC</b></h3>
    <h4 style="text-align: center" class="vc_custom_heading vc_custom_1576742856811">Public Transport Solution for Every Commuter</h4>
    <h4 style="color: #a3a3a3;text-align: center">Kolkata Metropolitan Area (KMA) &amp; Long Distance Transport Services</h4>
  </div>
  <div class="row" id="transport_service" style="margin-top: 50px">
    <div class="col-sm-4"> <img src="images\busb.png" class="rounded" alt="WBTC BUS" width="250" height="136"><br>
      <br>
      <h3>Bus Service</h3>
      <p>WBTC serves commuters in a posse of ever increasing number of buses by the day in West Bengal and Kolkata city. The complexity of the bus route network,is unparallel as it connects different parts of the state through road in addition to the mesh of Kolkata city. This continuous upgrade is the result…</p>
      <a href="bus_service.php">Read More</a> </div>
    <div class="col-sm-4"> <img src="images\tram.png" class="rounded" alt="WBTC BUS" width="250" height="136"><br>
      <br>
      <h3>Tram Service</h3>
      <p>Trams in Kolkata city surpasses a mere iconic and heritage value, it is now very state-of-environment owing to its pollution less and commuters friendly and road safety aspects. The hassle-free ride allures a different genre of commuters too who wants an assured and laid-back joy ride…</p>
      <a href="Tram_service.html">Read More</a> </div>
    <div class="col-sm-4"> <img src="images/ferry.jpg" class="rounded" alt="WBTC BUS" width="250" height="136"><br>
      <br>
      <h3>Ferry Service</h3>
      <p>Waterways travelling on the mighty Ganges is beneficial to commuters from many aspects like ease, cost, airy, soothing and joy ride encapsulated. Decongesting a heavy traffic megacity was the prime consideration and now is the best and most effective journey. Helps in dissipating pollution too!…</p>
      <a href="ferry_service.html">Read More</a> </div>
  </div>
  <div class="row" style="margin-top: 50px">
    <div class="col-sm-4"> <img src="images\busn.jpg" class="rounded" alt="WBTC BUS" width="250" height="136"><br>
      <br>
      <h3>Night Service</h3>
      <p>WBTC fulfils demands of a modern metropolitan city with 24X7 public transportation service by Night Special Busses controlled with safety measures & monitoring that run night hours on roads. An important service with strategically planned routes touching major and relevant destinations in Kolkata that citizens rely on…</p>
      <a href="night_service.html">Read More</a> </div>
    <div class="col-sm-4"> <img src="images\bus.png" class="rounded" alt="WBTC BUS" width="250" height="136"><br>
      <br>
      <h3>Banglashree Service</h3>
      <p>Commuters from near and far flung districts flocking to the megacity is a rather exigent demand that needed service very urgently. This service adds to the existing rail services and now joins ad-hoc and uncharted points to the city. The suburbs and distant commuters now have accepted this service with gusto.</p>
      <a href="banglashree.html">Read More</a> </div>
    <div class="col-sm-4"> <img src="images/buss.jpg" class="rounded" alt="WBTC BUS" width="250" height="136"><br>
      <br>
      <h3>Specials Service</h3>
      <p>Kolkata is a cosmopolitan city hosting numerous festivals, national and international events throughout the year attracting people of different religions, cultures, taste and passion. WBTC operates with launching special bus services to ease public transportation during these occasions.</p>
      <a href="special_service.html">Read More</a> </div>
  </div>
  <div class="row" id="smart" style="margin-top: 50px">
    <h3>SMART SERVICES</h3>
    <hr style="width: 100%; color: #0275d8; height: 1px; background-color:#0275d8; margin-top: 0" />
  </div>
  <div class="row" style="margin-top: 25px;margin-bottom: 50px">
    <div class="col-sm-4">
    
		<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/sol1.jpg" style="width:100%; height: 250px">
    </div>
    <div class="flip-card-back">
      <h1>WBTC</h1> 
      <p>WBTC ADVT.</p> 
      <p>WBTC ADVT.</p>
    </div>
  </div>
</div>
		
    </div>
  
    <div class="col-sm-4"> 
	  
		<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/sol2.jpg" style="width:100%; height: 250px">
    </div>
    <div class="flip-card-back">
      <h1>WBTC</h1> 
      <p>WBTC ADVT.</p> 
      <p>WBTC ADVT.</p>
    </div>
  </div>
</div>
	  
	  </div>
	  
    <div class="col-sm-4">
		
	<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/sol3.jpg" style="width:100%; height: 250px">
    </div>
    <div class="flip-card-back">
      <h1>WBTC</h1> 
      <p>WBTC ADVT.</p> 
      <p>WBTC ADVT.</p>
    </div>
  </div>
</div>
		
	</div>
	  
  </div>
</div>



<div class="p-3 my-3 bg-dark text-white" id="contact">
  <div class="container">
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