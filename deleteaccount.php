<?php session_start();
if (empty($_SESSION['user'])) {
    //redirect
    header("Location: index.php");

    exit();
}

include "ssmysqliconnect.php";
include "header.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<style>
	.delete{
		padding: 2em;
	}
	</style>
</head>
	<body><div class="delete"><p>Are you sure you want to delete your account? This action cannot be undone. All information will be permanently deleted. Proceed?</p><a href="delete.php"><button>Delete Account</button></a></div>
	<footer><?php include "footer.php";?></footer></body>
	</html>
	