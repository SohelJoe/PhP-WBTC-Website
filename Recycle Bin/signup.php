
<!DOCTYPE html>
<html lang="en">
<head>
<!--Connecting Database-->
<?php
  include "dependency/_dbconnect.php";
  $signup = false;
  $error = false;
  $u_exist = false;
  $e_exist = false;
  $pass_mismatch = false;
  if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $username = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_pass = $_POST['conPassword'];

    $qry = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn, $qry);
    if(mysqli_num_rows($result) > 0){
      $u_exist = true;
    }

    $qry = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($conn, $qry);
    if(mysqli_num_rows($result) > 0){
      $e_exist = true;
    }
    
    if($password == $con_pass && $u_exist == false && $e_exist == false){
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $qry = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$hash')";
      $result = mysqli_query($conn, $qry);
      if($result){
        $signup = true;
      }
      else{
        $error = ' We Cannot create your Acoount Right now for Some Technical Deficulties.Try Again later.';
      }
    }
    elseif($u_exist == true && $e_exist == false){
      $error = ' Username Already Exsist';
    }
    elseif($u_exist == true && $e_exist == true){
      $error = ' Email & Username Already Exsist';
    }
    elseif($u_exist == false && $e_exist == true){
      $error = ' Email Already Exsist';
    }
    else{
      $pass_mismatch = true;
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
<title>Admin Sign Up-WBTC West Bengal Transport Corporation</title>
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
      
      <a class="btn btn-outline-primary" href="login.php" role="button">Log In</a>
    </div>
  </div>
</nav>

<?php
  if($signup){
    echo '<div class="container alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Successful!</strong> You have sucessfully Signed Up.You can Log In to your account From <a href="login.php">here...</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
  }
  if($error){
    echo '<div class="container alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Unsuccessful!</strong>'. $error .'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
  }
?>

<div class="container">
    <form action="/wbtc/signup.php" id="form" class="mt-5" method="post">
        <h2>Create a New Account</h2>
        <hr class="border border-secondary">
        <div class="form-group mt-4">
            <label for="userName"><h5>Username</h5></label>
            <input type="userName" class="form-control form-control-lg" id="userName" name="userName" maxlength='30' minlength='2' required placeholder="Minimum 2 - 30 Characters">
        </div>
        <div class="form-group mt-4">
            <label for="email"><h5>Email</h5></label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" aria-describedby="emailHelp" required placeholder=" ">
        </div>
        <div class="form-group mt-4">
            <label for="password"><h5>Password</h5></label>
            <input type="password" class="form-control form-control-lg" id="password" name="password" minlength='6' required placeholder="Minimum 6 Characters of Length">
        </div>
        <div class="form-group mt-4">
            <label for="conPassword"><h5>Confirm Password</h5></label>
            <input type="Password" class="form-control form-control-lg" id="conPassword" name="conPassword" minlength='6' required placeholder="Re-enter the Password">
            <?php if($pass_mismatch){ echo '<p style="font-size:14px; color:#538b01; font-weight:bold;" id="conPassError">Password Mismatch, Check Your Password</p>'; } ?>
        </div>
        <div class="form-group mt-4">
        <p>Already have an Account? <a href="login.php" class="text-primary">Login Now</a></p>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkbox" required>
            <p class="text-muted"><label class="form-check-label" for="checkbox">By Creating  Your Account you agree to accept our <a href="#" class="text-danger">Terms and Conditions</a></p></label>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
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