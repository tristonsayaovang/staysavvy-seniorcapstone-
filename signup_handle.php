<?php include("ssmysqliconnect.php");
include "header.php";?>
<!DOCTYPE html>
<html>
<form action="signup.php" method ="post">
  
<?php 
//getting inputs
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$input_date=$_POST['dob'];

//mysql insertion
$duplicate_search = "SELECT * FROM `accounts` WHERE `email` = '$email'";
$query = "INSERT into accounts(`user_id`, `email`, `password`, `first_name`, `last_name`, `birth_date`, `premium_status`, `admin_status`)
VALUES (NULL, '$email', SHA2('$password', 256), '$first_name', '$last_name', '$input_date', 0, 0)";
$duplicate = mysqli_query($dbc, $duplicate_search);


$row_cnt = mysqli_num_rows($duplicate);

if (($row_cnt) < 1){
    $result = mysqli_query($dbc, $query);
    $result;
    echo "Account created! <br> <a href='login.php'>Log in now!</a>";
}   else {
    echo "An error has occured. Username is already in use" . mysqli_error($dbc);
}



?><html><head><title>Sign up</title>
<style>

body{
    padding: 2em;
}

</style></head>
<body><br><br>
  <footer>
  <?php include "footer.php";?></footer>
</body>
</html>

