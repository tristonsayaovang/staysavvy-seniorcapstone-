<?php session_start();
include('ssmysqliconnect.php');
include ('header.php');

if (empty($_SESSION['user'])) {
    //user must log in
    $login = "login.php";
    echo "ERROR. Please sign into your account first. ";
    echo "<a href='login.php'>Log in here</a>";
}
$email = $_SESSION['user'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$query = "SELECT * from accounts WHERE `email` = '$email' AND `password` = SHA2('$oldpassword', 256)"; 
$passwordupdate = "UPDATE accounts SET `password` = SHA2('$newpassword', 256) WHERE email = '$email' AND password = SHA2('$oldpassword', 256)";

// Run the query
$result = mysqli_query($dbc, $query);
$row_cnt = mysqli_num_rows($result);

if(($row_cnt) == 1){
  mysqli_query($dbc, $passwordupdate);
  echo "Password successfully changed. <br> <a href='index.php'><button>Go to Homepage</button></a>";

}
else {
  echo "Something went wrong";
}
?>