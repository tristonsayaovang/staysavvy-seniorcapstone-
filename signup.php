<?php include "header.php"
  ?>
<style>
label{
    display: flex;
    flex-direction: column;
    text-align: left;
}
input {
  display: flex;
  flex-direction: column;
  max-width: 900px;

}

form {
        background-color: #f4f4f4;
        border-radius: 10px;
        width: 50%;
        padding: 20px;
      }

  .submit input{
  border-radius: 5px;
  border: 0px;
  padding: 10px;
  margin-left: 10px;
  margin-right: 5px;
  background-color: #8d8c91;
  text-transform: uppercase;
    color: white;
}

.submit input:hover {
  opacity: 0.5;
}
  
</style>
<br>
<center><h2>Sign up! It's free!</h2></center>
<br>

<!-- This is my form -->
<center><form name ="Form" id="form" action="signup_handle.php" method="post">

<!-- <fieldset> -->
  <legend>Please fill out the information below</legend>

<!-- Information entry via text -->
    <p><label>First Name: <input type="text" name="first_name" size="50" maxlength="50"></label></p>
    <p><label>Last Name: <input type="text" name="last_name" size="50" maxlength="50"></label></p>
    <p><label>Email: <input type="text" name="email" size="50" maxlength="60"></label></p>
    <p><label>Password: <input type="password" name="password" size="50" maxlength="60"></label></p>
    <p><label>Date of Birth: <input type="date" name="dob"  size="50" value="2004-03-01" required pattern="\d{4}-\d{2}-\d{2}"></label></p>

    <div class="submit"><p align='center'><input type="submit" name="submit" value="submit"></p></div>
<!-- </fieldset> -->
</form>
</center>

<br><br>

<?php include "footer.php"
  ?>

