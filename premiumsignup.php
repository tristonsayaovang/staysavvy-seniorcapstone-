<?php 
include "header.php";?>

<html>
  <head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
<style>
form{
  padding-left: 5em;
  padding-right: 5em;

}

  h3{ padding-left: 2em; padding-right: 2em; padding-top:2em;}

.info{
  padding-left: 5em;
  padding-right: 5em;
}

  .member {
  border-radius: 5px;
  border: 0px;
  padding: 10px;
  margin-left: 80px;
  margin-right: 5px;
  background-color: #8d8c91;
  color: white;
  text-transform: uppercase;
}

.member:hover {
  opacity: 0.5;
}

  
</style>
    <h3>Payment Information</h3>
    <body><br>
    <div class="info"><p>Enjoy bonus perks with a StaySavvy Premium membership! Trial ends 30 days after submitting payment information. A recurring charge of $6.99 will be billed monthly after end of trial if subscription is not canceled.</p></div>
<fieldset>
<form action="POST">
<!-- Information entry via text -->
    <p><label>Credit Card: <input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx-xxxx-xxxx-xxxx"></label></p>
</form>
<button class="member" onclick="window.location.href='statuschange.php';">Become a Member!</button>
</fieldset><br/><br/>


  <footer><?php include "footer.php"?></footer>
</body>
  </html>
