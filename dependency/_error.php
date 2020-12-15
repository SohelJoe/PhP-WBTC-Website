<?php
  if(isset($_GET['success']) && $_GET['success']=='true'){
    echo '<div class="container alert alert-primary alert-dismissible fade show my-0" role="alert">
    <strong>Successful!</strong> You have sucessfully Signed Up.You can Log In to your Account.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
  }
  elseif(isset($_GET['error']) && $_GET['error'] == 'UP_Error'){
    echo '<div class="container alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Error! </strong> Username & Password Incorrect<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>';
  }
  elseif(isset($_GET['error']) && $_GET['error'] == 'T_Error'){
    echo '<div class="container alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Error! </strong> We Cannot create your Acoount Right now for Some Technical Deficulties.Try Again later.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>';
  }
  elseif(isset($_GET['error']) && $_GET['error'] == 'U_Error'){
    echo '<div class="container alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Error! </strong> Username Already Exsist<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>';
  }
  elseif(isset($_GET['error']) && $_GET['error'] == 'E_Error'){
    echo '<div class="container alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Error! </strong> Email Already Exsist<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>';
  }
  elseif(isset($_GET['error']) && $_GET['error'] == 'PM_Error'){
    echo '<div class="container alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Error! </strong>Password Mismatch. Check Your Password.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>';
  }
?>