<?php

$dbc = mysqli_connect("localhost","staystav_user","staysavvyinfost490","staystav_useraccounts");



// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  exit();

}

?>