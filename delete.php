<?php session_start();
if (empty($_SESSION['user'])) {
    //redirect
    header("Location: index.php");

    exit();
}

include "ssmysqliconnect.php";
include "header.php";

$email = $_SESSION['user'];
$query = "DELETE FROM `accounts` WHERE `email` = '$email'";
$search = "SELECT * FROM `accounts` WHERE `email` = '$email'";
$search2 = mysqli_query($dbc, $search);
$row_cnt = mysqli_num_rows($search2);
$delete = mysqli_query($dbc, $query);

if (($row_cnt) == 1){
	$delete;
	echo "Account successfully deleted<br>";
	unset($_SESSION['user']);
	echo "<a href='logout.php'>Go to Homepage</a>";
}
else{
	echo "An error has occurred";

}
include "footer.php";
?>


