<?php 
  session_start();
  include('server.php');
  include 'login_db.php';

  $errors = array();
  if(isset($_POST['add_credit'])){
    $credit_add = mysqli_real_escape_string($conn, $_POST['credit']);
    $credit_add_int = intval($credit_add);
 

    if(empty($credit_add))
    {
        array_push($errors,"credit is required");
    }
    if(count($errors)==0){
        $username =  $_SESSION['username'];
      //   $credit_push = "INSERT INTO  credit (user_id,credit)
    //   VALUES($credit_add_int +99,0)";
   // $username = 'TimWorld';

       $credit_push = "INSERT INTO credit (user_id, credit) SELECT u.id, last_credit.credit + $credit_add_int FROM ( SELECT c.user_id, c.credit FROM credit c JOIN user u ON c.user_id = u.id WHERE u.username =  '$username' ORDER BY c.id DESC LIMIT 1 ) AS last_credit JOIN user u ON last_credit.user_id = u.id";
        
        $result = mysqli_query($conn,$credit_push);
            header("Location: credit.php");
        }else{
            array_push($errors,"Wrong username/password combination");
            $_SESSION['error']="Wrong username/password try agin" ;
            header("Location: credit.php");
        }

  }


?> 