<?php 
include "header.php";
include "ssmysqliconnect.php";
if (empty($_SESSION['user'])) {
    //redirect
    header("Location: index.php");

    exit();
}

?>
<style>
  input {
  border-radius: 5px;
  border: 0px;
  padding: 10px;
  margin-left: 10px;
  margin-right: 5px;
  background-color: #8d8c91;
  color: white;
  text-transform: uppercase;
}

input:hover {
  opacity: 0.5;
}
  
</style>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Change Password</title>
  </head>
<body>
  <br>
  <div><form name ="changepassword" id="changepassword" action="changepassword_handle.php" method="post">

<fieldset>

<!-- Information entry via text -->
    <p><label>Old Password: <input type="password" name="oldpassword" size="50" maxlength="50"></label></p>
    <p><label>New Password: <input type="password" name="newpassword" size="50" maxlength="50"></label></p>
    <p><input class="submit" type='submit' name='submit' value='Change Password'></p>
</fieldset>
</form>
</div>

<footer><?php include "footer.php";?></footer></body>

</html>