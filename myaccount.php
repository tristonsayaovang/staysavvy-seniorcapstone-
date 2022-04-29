<?php session_start();
if (empty($_SESSION['user'])) {
    //redirect
    header("Location: index.php");

    exit();
}

include "ssmysqliconnect.php";
include "header.php";
?>
  <head><meta charset="utf-8">
  
  <style>
    .user{
      padding: 2em;
    }

    button {
      border-radius: 10px;
      border: 0px;
      padding: 10px;
      margin-left: 10px;
      margin-right: 5px;
      background-color: #8d8c91;
      color: white;
      text-transform: uppercase;
    }
    
    button:hover {
      opacity: 0.5;
    }
  </style></head>



<?php

$email = $_SESSION['user'];
$query = "SELECT * FROM accounts WHERE email = '$email'";
$result = mysqli_query($dbc, $query);

echo "<body><center><div class='user'><img src = 'images/usericon.png'><br>";
echo "<table class = 'userinfo' border='1'>
<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Premium Status</th></tr>";

while($row    = mysqli_fetch_assoc($result)){
  if ($row['premium_status'] == 1){
    $status = "Yes";
  }
  else{
    $status = "No";

  }

  echo "<tr>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>Premium: " . $status . "</td>";
  echo "</tr>";
  }
echo "</table>";

if ($status == "Yes"){
  echo "<br><br><a href='cancelpremium.php'><button>Cancel Premium Subscription</button></a>";
}
else{
  echo "<br><br><a href='premiumsignup.php'><button>Join Premium!</button></a><br>";
}
echo "<br><a href='changepassword.php'><button>Change Password</button></a></div></center><br><br><center><a href='deleteaccount.php'><button>Delete Account</button></a></center>";
mysqli_close($dbc);

?>
<footer><?php include "footer.php";?> </footer></body>