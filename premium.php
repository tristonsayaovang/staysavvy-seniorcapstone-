<?php include "header.php"
  ?>
<html>
  <head><link href="css/premium.css" rel="stylesheet" type="text/css" />
      <title>Premium</title>
  </head>
  
  <body>
    <center>
      <div class = "perks"><h2><b>StaySavvy Premium - Perks!</b></h2><br>
      <div class="background">
      <button class="collapsible" style="text-align:center; background-color:#f4f4f4; width:50%;"><img src="images/noads.svg" width="35px" height="35px">Ad-Free</button>
      <div class="content"><p>Tired of seeing advertisements while browsing through your booking options? Say goodbye to ads with a StaySavvy Premium subscription!</p>
      </div>

    <button class="collapsible" style="text-align:center; background-color:#f4f4f4; width:50%;"><img src="images/rewards.png" width="35px" height="35px"> Exclusive announcements via email</button>
      <div class="content"><p>Every stay rewards you with 100 points which can be redeemed for discounts in the future. With StaySavvy Premium, enjoy double the points with every booking! Redeem 1000 points and have your booking fee on us!</p>
      </div>

    <button class="collapsible" style="text-align:center; background-color:#f4f4f4; width:50%;"><img src="images/discount.svg" width="35px" height="35px"> Discounts & Deals</button>
      <div class="content"><p>Get exclusive stays with properties only listed through our site! Also get deals and discounts available only to our premium members!</p>
      </div>

      <button class="collapsible" style="text-align:center; background-color:#f4f4f4; width:50%;"><img src="images/annoucement.svg" width="35px" height="35px"> Exclusive announcements via email</button>
      <div class="content"><p>With premium, create notifications when your favorite renters have an opening or new listing! Get early emails on reduced prices and hot lists!</p>
      </div></div>
        <br>
        
        <button class="try"><a href="premiumsignup.php" class="try-link">Try it risk-free!</a></button><br><br>
      <p>* Your first month is on us. Cancel anytime prior and you won't receive any charges!</p>
    </div>
    </center>


  <footer><?php include "footer.php"?></footer>

    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }
  </script>
    
  </body>
</html>