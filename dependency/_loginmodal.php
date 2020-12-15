<!--Connecting Database-->
<?php
  include "_dbconnect.php";
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
          header("location: /wbtc/welcome.php");
          exit;
        }
        else{
          $error = 'UP_Error';
        }
      }

    }
    else{
        $error = 'UP_Error';
    }
    if($error){
        header("location: /wbtc/index.php?success=false&error=$error");
    }
  }
?>

<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModalLabel">Login Your Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/wbtc/dependency/_loginmodal.php" id="form" method="post">
          <div class="form-group">
            <label for="userName"><h5>Username</h5></label>
            <input type="userName" class="form-control form-control-lg" id="userName" name="userName" maxlength='30' minlength='2' required placeholder="Minimum 2 - 30 Characters">
          </div>
          <div class="form-group mt-4">
            <label for="password"><h5>Password</h5></label>
            <input type="password" class="form-control form-control-lg" id="password" name="password" minlength='6' required placeholder="Minimum 6 Characters of Length">
          </div>
          <button type="submit" class="btn btn-primary">Log In</button>
        </form>
      </div>
    </div>
  </div>
</div>

