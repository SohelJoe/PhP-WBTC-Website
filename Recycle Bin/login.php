<!DOCTYPE html>
<html lang="en">
<head>
<!--Connecting Database-->
<?php
  include "dependency/_dbconnect.php";
  $login = false;
  $error = false;
  if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $username = $_POST['userName'];
    $password = $_POST['password'];

    // $qry = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
    $qry = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn, $qry);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        if(password_verify($password, $row['password'])){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location: welcome.php");
        }
        else{
          $error = true;
        }
      }

    }
    else{
      $error = true;
    }
  }
?>

<!--favicon-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!--favicon END-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Log In-WBTC West Bengal Transport Corporation</title>
<!-- Bootstrap -->
<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
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
      
      <a class="btn btn-outline-primary" href="signup.php" role="button">Sign Up</a>
    </div>
  </div>
</nav>

<?php
  if($login){
    echo '<div class="container alert alert-primary alert-dismissible fade show" role="alert"><strong>Sucessful!</strong>
    You have sucessfully Loged In '.$username.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>';
  }
  if($error){
    echo '<div class="container alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Incorrect Username or Password.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>';
  }
?>

<div class="container">
  <form id="form" action="/wbtc/login.php" class="mt-5" method="post">
    <h2>Login Your Account</h2>
    <hr class="border border-secondary">
    <div class="form-group mt-4">
      <label for="userName"><h5>Username</h5></label>
      <input type="userName" class="form-control form-control-lg" id="userName" name="userName" maxlength='30' minlength='2' required placeholder="Minimum 2 - 30 Characters">
    </div>
    <div class="form-group mt-4">
      <label for="password"><h5>Password</h5></label>
      <input type="password" class="form-control form-control-lg" id="password" name="password" minlength='6' required placeholder="Minimum 6 Characters of Length">
    </div>

    <div class="form-group mt-4">
      <p>Don't have an Account? <a href="signup.php" class="text-primary">Sign Up Here</a></p>
    </div>
    <button type="submit" class="btn btn-primary">Log In</button>
  </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.2.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.0.0.js"></script>
<br><br><br><br>

<!--footer start from here-->
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