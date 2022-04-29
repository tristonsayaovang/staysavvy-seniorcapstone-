<?php 
//check if cookie is present
session_start();

if (empty($_SESSION['user'])) {
    //redirect
    header("Location: index.php");

    exit();
}

include "header.php";

?>

<!DOCTYPE html>

  <div class="header">
  <h1>Logged In</h1>
  
<!--Logout button-->
<button onclick="window.location.href='logout.php';">Log out</button><br><br>

<br><br>




</html>