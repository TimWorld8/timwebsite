
<?php 
session_start();
include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="top-bar">
        <div class="logo">My World</div>
        <div class="use"><?php echo $_SESSION['username'];
                            echo" ";  echo "Credit : ";
                               echo $_SESSION['credit'];
                               echo $_SESSION['lastid'];?></div> <!-- Add your Credit-->
        
        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="credit.php">Credit</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <main>
        <!-- Add your main content here -->
        <h1>Welcome to My Website</h1>
      
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>