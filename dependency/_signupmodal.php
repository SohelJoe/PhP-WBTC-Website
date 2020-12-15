<?php
  include "_dbconnect.php";
  $signup = false;
  $error = false;
  $u_exist = false;
  $e_exist = false;
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
        header("location: /wbtc/index.php?success=true");
        exit;
      }
      else{
        $error = 'T_Error';
      }
    }
    elseif($u_exist == true){
      $error = 'U_Error';
    }
    elseif($e_exist == true){
      $error = 'E_Error';
    }
    else{
      $error = 'PM_Error';
    }
    header("location: /wbtc/index.php?success=false&error=$error");
    
  }
?>

<!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" role="dialog" aria-labelledby="SignupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SignupModalLabel">Create a New Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/wbtc/dependency/_signupmodal.php" id="form" method="post">
            <div class="form-group">
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
                <p style="font-size:14px; color:#538b01; font-weight:bold;" id="conPassError"></p>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkbox" required>
                <p class="text-muted"><label class="form-check-label" for="checkbox">By Creating  Your Account you agree to accept our <a href="#" class="text-danger">Terms and Conditions</a></p></label>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div>
