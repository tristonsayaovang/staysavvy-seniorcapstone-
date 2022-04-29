<?php session_start();
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
  </head>
  <header>
    <div class="grad-bar"></div>
    <div class="header">
    
        <ul class="logo-name">
          <li>
            <img src="images/StaySavvy-Logo-nowords.png" alt="Image of logo" height="100px" width="100px">
            <div class="name"><a href="index.php">StaySavvy</a></div>
          </li>
        </ul>
      
        <ul class="main-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="premium.php">StaySavvy Premium</a></li>
          <?php if (empty($_SESSION['user'])) {
              echo '<li><a href="login.php">Login</a></li>';
          }
          else{
              echo "<li><a href='logout.php'>Log Out</a></li>";
              echo "<li><a href='myaccount.php'>My Account</a></li>";
          }?>
          <button class="listprop"><li><a href="listyourproperty.php" style="color:white;">List Your Property</a></li></button>
        </ul>
      </header>
    </div>
  <body>
    <script src="script.js"></script>
  </body>
</html>