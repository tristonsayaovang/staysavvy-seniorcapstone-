<?php session_start();
include "header.php";
error_reporting(0);

  ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Home - StaySavvy</title>
  </head>
  <body>
      <div class="ss-container-outer ss-banner-bg">
          <div class="row ss-banner-row ss-banner-row-header">
            <div class="ss-banner-header">
              <h1 class="text-uppercase ss-banner-title">Welcome to StaySavvy</h1>
              <p class="ss-banner-subtitle">A one-stop shop for rental properties in Milwaukee, WI</p>       
            </div>
          </div> <!-- row -->

        <div class="row ss-banner-row">
          <form action="search.php" method="post" class="ss-search-form">
            <div class="form-row ss-search-form-row">
              <div class="form-group ss-form-group ss-form-group-pad ss-form-group-3">
                <label>Check In: </label>
                <input name="checkin" type="date" class="form-control" id="inputCheckIn" placeholder="Check In (MM/DD/YYYY)" required pattern="\d{4}-\d{2}-\d{2}">
              </div>
              <div class="form-group ss-form-group ss-form-group-pad ss-form-group-3">
                <label>Check Out: </label>
                <input name="checkout" type="date" class="form-control" id="inputCheckOut" placeholder="Check Out (MM/DD/YYYY)" required pattern="\d{4}-\d{2}-\d{2}">
              </div>
              <div class="form-row ss-search-form-row">                                
                <div class="form-group ss-form-group ss-form-group-pad ss-form-group-2">
                  <label>Guests: </label>
                  <input name="guests" type="number" class="form-control" id="guests" placeholder="Number of Guests" style="width:200px;">
                </div>
              </div>
              <div>
                <input class="search-button" type="submit" name="submit" value="Search Milwaukee!">
              </div>
            </div>                              
          </form> 
          </div> <!-- row -->
        <div class="ss-banner-overlay"></div>
      </div>     <!-- .ss-container-outer -->                 
    
    
  </body>
  
  <?php include "footer.php"
    ?>

</html>