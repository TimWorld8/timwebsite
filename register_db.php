<?php 
  session_start();
  include('server.php');

  $errors = array();
  if(isset($_POST['reg_user'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    if(empty($username))
    {
        array_push($errors,"Username is required");
    }
    if(empty($email))
    {
        array_push($errors,"Email is required");
    }
    if(empty($password_1))
    {
        array_push($errors,"password is required");
    }
    if($password_1 != $password_2)
    {
        array_push($errors,"password not match");
    }

    $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' ";
    $query = mysqli_query($conn,$user_check_query);
    $result = mysqli_fetch_assoc($query);
    
    if($result){
        if($result['username']=== $username){
            array_push($errors,"User already exist");
        }
        if($result['email']=== $eamil){
            array_push($errors,"email already exist");
        }

    }
    if(count($errors)==0){
      $password = md5($password_1);

      $sql = "INSERT INTO user (username,email,password) VALUES('$username','$email','$password')";
      mysqli_query($conn,$sql);

      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
     /// header('location: index.php');
      header("Location: index.php");

    }
    else{
        array_push($errors,"Wrong username/password combination");
            $_SESSION['error']="Have Username Already" ;
            header("Location: register.php");
    }
  }

?> 