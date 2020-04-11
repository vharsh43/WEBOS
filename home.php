<?php
  session_start();


	if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");

		exit();
	} else {


    $username = $_SESSION["username"];
    
		// load the database and get the orders for this user
		$db = new mysqli("localhost", "hbv559", "Gj53185", "hbv559");
	  	if ($db->connect_error) {
	  		die ("Connection failed: " . $db->connect_error);
    }

    $q1 = "SELECT * FROM user WHERE username = '$username'";
    $r1 = $db->query($q1);
    $row = $r1->fetch_assoc();
    $id = $row["user_id"];
    $photo = $row["avatar"];
   $usrname = $row["username"];
   
		$result = $db->query($q);	
  }
  

?>



<!DOCTYPE html>
<html translate="no">
<head>
    <title>WEB OS</title>
		
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
   
   
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		
                <script type="text/javascript" src="validate.js"></script>      
                <link rel="stylesheet" type="text/css" href="large-devices1.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>

<body>   
   
<div class="topnav">
                <a href="home.php">Home Page</a>
          <div class="topnav-right">
          <div    class="ch4">
           <div class="ch4-1">
           <img src="<?php echo $photo; ?>" width = "50px" height = "50px" >
            
           </div>
            <div class="ch4-2">
            <h3> <?php echo $usrname; ?></h3>   
                </div>

        
        </div>
          <div id="MyClockDisplay">
          <iframe src="http://free.timeanddate.com/clock/i78ihu39/n210/fn6/fcfff/tct/pct/avb/tt0/tm1/th2/tb4" frameborder="0" width="168" height="34" allowTransparency="true" style="pointer-events: none;"></iframe>
          
          </div>
          <div id="div1" class="fa"></div>

            <a href="logout.php">Sign Out</a>

           </div>


</div>


<hr>
              



          <div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
    <h1>Calculator</h1>
    <iframe src='https://www.embed.com/app/calculator/gray-calculator.html' style='width: 500px; height: 500px;' scrolling='no' frameBorder='0' sandbox></iframe>
  </div>
</div>
<!--
<button onclick="togglePopup()">Show Popup</button><div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
    <h1>Tiitle 2</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aspernatur laborum rem sed laudantium excepturi veritatis voluptatum architecto, dolore quaerat totam officiis nisi animi accusantium alias inventore nulla atque debitis.</p>
    <iframe src='https://www.embed.com/app/calculator/gray-calculator.html' style='width: 500px; height: 500px;' scrolling='no' frameBorder='0' sandbox></iframe>

  </div>
</div>

    -->


<table style="width:100%">
  <tr>
    <td>
    <button onclick="window.location.href = 'calculator.php';"> Use Calculaltor</button>
    </td>
    </tr>


<tr>
  <td>
<button onclick="togglePopup()">Show Popup</button>
    </td>
    </tr>
    </table>



<footer style="margin-top:41%;">
    <p>© 2020 All rights reserved. | VHARSH43</p>
    </footer>






<script>

function chargebattery() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf244;";
  setTimeout(function () {
      a.innerHTML = "&#xf243;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf242;";
    }, 2000);
  setTimeout(function () {
      a.innerHTML = "&#xf241;";
    }, 3000);
  setTimeout(function () {
      a.innerHTML = "&#xf240;";
    }, 4000);
}


chargebattery();


setInterval(chargebattery, 5000);

function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}
</script>

  </body>

  </html>