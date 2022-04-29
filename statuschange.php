<?php
session_start();
include('ssmysqliconnect.php');
include ('header.php');

if (empty($_SESSION['user'])) {
    //user must log in
    $login = "login.php";
    echo "ERROR. Please sign into your account first. ";
    echo "<a href='login.php'>Log in here</a>";
}
  else{
    $email = $_SESSION['user'];
    $query = mysqli_query($dbc, "UPDATE accounts SET premium_status = '1' WHERE email = '$email'");
    $query;
    echo "Status successfully changed. Welcome to StaySavvy Premium!";
  }

?>
<html>
<body>
  <footer><?php include "footer.php"?></footer>
</body>

</html>