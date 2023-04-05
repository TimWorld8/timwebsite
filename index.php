
<?php 
session_start();
include('server.php'); ?>

<!DOCTYPE html>
 <html lang="en">
<head>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Registration System</title>

<link rel="stylesheet" href="style.css">
</head> 
<body> <h1>Welcome my website</h1>
 <?php if(isset($_SESSION['success'])): ?>
     <div class='success'>
          <h3>
               <?php 
               echo $_SESSION['success'];
               unset($_SESSION['success']);
               ?>
          </h3>
     </div>
     <?php endif ?>
     <button id="generate-button">Generate Number</button>
    <div id="result"></div>
    <script>
      function generateNumber() {
        const randomNum = Math.floor(Math.random() * 10) + 1;
        document.getElementById("result").innerHTML = randomNum;
      }
      document.getElementById("generate-button").addEventListener("click", generateNumber);
    </script>
</body> </html>