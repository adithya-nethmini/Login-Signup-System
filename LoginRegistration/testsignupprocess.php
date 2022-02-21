<?php 
session_start();
include "connect.php";
$username = "";
$name = "";
$login_type = "";
$errors = array(); 

if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $login_type = mysqli_real_escape_string($con, $_POST['login_type']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_pass = mysqli_real_escape_string($con, $_POST['confirm_password']);
  
    // form validation: ensure that the password is matched ...
    if ($pass != $confirm_pass) {
      header("Location: signup.php?error=The confirmation password  does not match");
    }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "select * from user_login WHERE username='$username'";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
   // if user exists
      if ($user['username'] === $username) {
        header("Location: signup.php?error=Username already exists try another");
      }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $pass = md5($pass);//encrypt the password before saving in the database
  
        $query = "insert into user_login (username, name, password, login_type) 
                  VALUES('$username', '$name', '$pass', '$login_type')";
        mysqli_query($con, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
  }

?>