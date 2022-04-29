<?php include "header.php"
  ?>
<html>
  <head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><link href="css/listyourproperty.css" rel="stylesheet" type="text/css" />
    <title>List Your Property</title>
  </head>
  <center>
    <br>
  <h2>List your property with us!</h2>
  <body>
   <form name ="property" id="property" action="#" method="post">


<fieldset>

<!-- Information entry via text -->
    <p><label>Email: <input type="text" name="email" size="50" maxlength="50"></label></p>
    <p><label>First Name: <input type="text" name="fname" size="50" maxlength="50"></label></p>
    <p><label>Last Name: <input type="text" name="lname" size="50" maxlength="50"></label></p>
  <p><label>Address of Property: <input type="text" name="name" size="50" maxlength="100"></label></p>
  <p><label>Nightly Rate: <input type="number" name="rate" size="50" maxlength="100"></label></p>
    <p><label>Any additional comments: <input type="text" name="name" size="50" maxlength="400"></label></p></label></p>
    <p><div class="submit"><input type='submit' name='submit' value='Submit for review'></div></p>
</fieldset>
</form>
</div></center><br><br>
  </body>
<footer><?php include "footer.php"?></footer>
</html>