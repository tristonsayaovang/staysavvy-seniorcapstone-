<?php include "header.php";
  ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><link href="css/aboutus.css" rel="stylesheet" type="text/css">
    <title>About Us</title>
  </head>
  <body>
    <br/>
    <center>
      
        <h2><b>Our Mission</b></h2>
        <div class="mission"> 
        <p>Here at StaySavvy, we believe in empowering our users by providing a platform that is conveinent, efficient, and easy to use. We understand how frustrating it can be to navigate through dozens of opened tabs trying to decide on the right choice. One day we thought "Wouldn't it be amazing if all of your hospitality options would just jump right into your lap?" and thus StaySavvy was born. From hotels, bed & breakfasts, suites, and more, we bring every possible choice straight to your fingertips so you can choose the BEST option for you.</p>          </div>
      <div class="meet"><p><a href="ourteam.php">Meet the team!</a></p></div><br><br>
    </center>
   <section class="main">
    <aside>
      <button class="collapsible" style="text-align:center; background-color:#f4f4f4;"><img src="images/api.webp" width="25%" height="25%"><br>Our Tools</button>
  			<div class="content"><p>Using APIs, we find the best possible options for you based on your desired criteria. Currently, we are using RapidAPI as our main source of information retrieval. As we continue to grow, StaySavvy plans on implementing as many APIs as possible to allow for the widest coverage of stay booking options! If you would like to support us and our mission, consider becoming a  <a href="premium.php">StaySavvy Premium Member!</a></p>
        </div>
    </aside>
    <aside>
      <button class="collapsible" style="text-align:center; background-color:#f4f4f4;"><img src="images/Person.svg" width="25%" height="25%"><br>For the Savvy Stayer</button>
			  <div class="content"><p>Whether you're searching for specific amenities and accomodations, wanting to stay within a certain price range, or looking to stay near a famous location, StaySavvy has you covered! We pride ourselves in bringing you all of your options to compare in one place. There's always something out there for everyone, and we'll find it for you! Searching for a place to stay has never been easier and more conveinent!</p>
		  </div>
    </aside>
    <aside>
      <button class="collapsible" style="text-align:center; background-color:#f4f4f4;"><img src="images/house.svg" width="25%" height="25%" style="padding-top:28px;"><br>For the Property Owner</button>
        <div class="content"><p>Looking to list your property as a hospitality service but don't want to go through the lengthy complicated process of other travel companies? Look no further! We provide a simple and easy way to list your property on our site. We understand that listing your property on various different sites can be cumbersome, so we provide Simply fill out a form and submit for review! Upon approval, your property will be listed in our results upon relevant searches of booking options!</p>
        
      </div>
    </aside>
  </section>
    
  <div class="clear"></div>
    
<!--    <section class="our-team">
    <center><h2><b><a href="ourteam.php" style="color:black;">Meet the team!</a></b></h2></center><br> -->
<!--     <aside>
      <div class="hailey">
        <h3 style="color:#fbbb5c;">Hailey Davis</h3>
  			<h7>Handler/Hustler</h7></div>
        <img src="images/hailey.png" class="hailey-img">
    </aside>
    <aside>
      <div class="mikayla">
        <h3 style="color:#fbbb5c;">Mikayla Eliyha</h3>
			    <h7>Hacker/Hipster (Backup Handler)</h7></div>
        <img src="images/mikayla.jpeg" class="mikayla-img">
    </aside>
    <aside>
      <div class="triston">
        <h3 style="color:#fbbb5c;">Triston Sayaovang</h3>
          <h7>Hacker/Hipster</h7></div>
          <img src="images/triston.jpg" class="triston-img">
    </aside> -->
  </section>
    
<br><br><br><br><br><br><br><br><br><br><br><br><br> 
    
  <footer>
<?php include "footer.php"?>
</footer>

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