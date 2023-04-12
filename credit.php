<?php 
session_start();
include('server.php');
 ?>

<!DOCTYPE html>
 <html lang="en">
<head>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Credit Page</title>

<link rel="stylesheet" href="style.css">
</head> 
</body>
<header class="top-bar">
        <div class="logo">My World</div>
        <div class="use"><?php echo $_SESSION['username'];
                            echo" ";  echo "Credit : ";
                               echo $_SESSION['old_c'];?></div> <!-- Add your Credit-->
        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="credit.php">Credit</a>
            <a href="#">Contact</a>
        </nav>
    </header>
<div class="header">
    <h2>Credit</h2>
</div>
<form action="credit_db.php" method="post" >
<?php include('errors.php'); ?>
    <?php if (isset($_SESSION['error'])): ?>
     <div class='error'>
          <h3>
               <?php 
               echo $_SESSION['error'];
               unset($_SESSION['error']);
               ?>
          </h3>
     </div>
     <?php endif ?>
    <div class="input-group">
      <label for="credit">Credit</label>  
      <input type="text" name="credit">
    </div>
    <div class="input-group">
      
      <button type="submit" name="add_credit" class="btn">Add</button>
    </div>
</form>
</body> 
</html>

