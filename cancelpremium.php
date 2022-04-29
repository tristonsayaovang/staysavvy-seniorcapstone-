<?php 
session_start();
include "ssmysqliconnect.php";
include "header.php";
if (empty($_SESSION['user'])) {
    //redirect
    header("Location: index.php");

    exit();
}
else{
    $email = $_SESSION['user'];
    $query = mysqli_query($dbc, "UPDATE accounts SET premium_status = '0' WHERE email = '$email'");
    $query;
    echo "Premium subscription canceled. We're sad to see you go, but StaySavvy is all about doing what's best for you. If you ever change your mind, we'll always be here!";
  }
?>
<body><footer><?php include "footer.php";?></footer></body>