<?php include "header.php"
  ?>
<html>
  <head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><link href="css/login.css" rel="stylesheet" type="text/css" />
    <title>Login</title>
    <style>
      form {
        background-color: #f4f4f4;
        border-radius: 10px;
      }

      .submit {
        border-radius: 5px;
        border: 0px;
        padding: 0;
        margin-left: 10px;
        margin-right: 5px;
        background-color: #8d8c91;
        color: white;
        padding: 10px;
        text-transform: uppercase;
      }

      .submit:hover {
        opacity: 0.5;
      }

      .signup a{
        color: black;
        text-decoration: underline;
      }
            
    </style>
  </head>
  <body> 
    
  <center>
    <h2><b>Login</b></h2>



<!-- form -->
<form name ="Login" id="login" action="staysavvy_loginhandle.php" method="post">


<fieldset>

<!-- Information entry via text -->
    <p><label>Email: <input type="text" name="email" size="50" maxlength="50"></label></p>
    <p><label>Password: <input type="password" name="password" size="50" maxlength="50"></label></p>
    <p><input class="submit" type='submit' name='submit' value='Login'></p>
</fieldset>
</form>
</div><br>
    <p>Don't have an account?</p>
    <div class="signup"><a href="signup.php">Sign up!</a></div>
  </center>
  </body><br><br>
<footer><?php include "footer.php";?></footer>
</html>