<?php
session_start();
session_destroy();
header("Location:index.php");
exit;
?>

<html>

<div class="header">
<h1>You are now logged out!</h1>
<br><br>
<!-- back to login page -->
<button type="button" onclick="location.href='index.php'">Go to home page</button>

</html>