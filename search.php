<?php include "header.php";
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$curl = curl_init();

$result = curl_setopt_array($curl, [
	CURLOPT_URL => "https://hotels4.p.rapidapi.com/properties/list?destinationId=1524870&pageNumber=1&pageSize=25&". $checkin . "&" . $checkout . "&adults1=1&sortOrder=PRICE&locale=en_US&currency=USD",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: hotels4.p.rapidapi.com",
		"x-rapidapi-key: e84125fff5msh32b6fe2972feccbp1c9466jsnda96dd26dfde"
	],
]);


$response = curl_exec($curl);
$err = curl_error($curl);
$name = json_decode($response, true);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
  //There are multiple arrays within arrays. Especially in RESULTS

}

$info = $name['data']['body']['searchResults']['results'];
$size = sizeof($info);
//print_r($info);


   for ($i = 0; $i < $size; $i++) {
      error_reporting(0);
      $propname = $info[$i]['name'];
      $streetAddress = $info[$i]['address']['streetAddress'];
      $rating = $info[$i]['guestReviews']['rating'];
      $postalcode = $info[$i]['address']['postalCode'];
      $rateplan = $info[$i]['ratePlan']['price']['exactCurrent'];
      $totalcost = $info[$i]['ratePlan']['price']['fullyBundledPricePerStay'];
      $picture = $info[$i]['optimizedThumbUrls']['srpDesktop'];
     
 ?>

<style>
body{
  padding-left: 2em;
  padding-right: 2em;
}
#search{
    align: center;
    padding: 2em;
    background-color: #f4f4f4;
    border-radius: 10px;
/*     border: solid; */
}

#properties{
    padding: 2em;
}
     
.listings{
  float: left;
  display: block;
  vertical-align: top;
  padding-top: 2em;
}

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

.book {
  
}

table {
  background-color: #f4f4f4;
}

</style>
<br>
    <div id="search">
    
    <table id="properties">
      <img class="listings" src="<?php echo $picture; ?>"><tr>
   <?php 
   error_reporting(0);
   echo '<td><strong>' . $propname . '</strong><br>' . $streetAddress. '<br>' . $rating . '<br>' . $postalcode . '<br> $' . $rateplan . '<br>' . $totalcost . '</td><td>' . '<br><br><div class="book"><input type="submit" action="#" value="Book Now!"></div></td>';

   ?>

      </tr></table></div> <?php
//     //print_r(sizeof($info));       
   }
//}

?>