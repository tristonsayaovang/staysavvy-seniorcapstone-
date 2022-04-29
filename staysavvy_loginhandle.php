<?php
session_start();
include('ssmysqliconnect.php');

// data from login page
$email = $_POST['email'];
$password = $_POST['password'];


// query the database
$query = "SELECT `admin_status` from accounts WHERE `email` = '$email' AND `password` = SHA2('$password', 256)"; 

// Run the query
$result = mysqli_query($dbc, $query);
$row_cnt = mysqli_num_rows($result);

$admin_status = mysqli_query($dbc, "SELECT * from accounts WHERE `password` = SHA2('$password', 256) AND admin_status= 1");
$row_cnt2 = mysqli_num_rows($admin_status);

if(($row_cnt) == 1){
    
        // Set session 
    $_SESSION['user'] = $email;
    //if account is an admin, then redirects to admin page instead. Else logs on normally
    if($row_cnt2 > 0){
        header("Location: adminhome.php");
        exit();
    }
    else{
// redirect user to the homepage
    header("Location:index.php");
    // exits
    exit();
    }
}
else{
// redirect user to the login page
    header("Location: login.php");
    
//exits
    exit();
}
?>