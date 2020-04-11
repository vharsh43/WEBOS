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
<html>
<head>
    <title>WEB OS</title>
		
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
   
   
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		
                <script type="text/javascript" src="validate.js"></script>               
                <link rel="stylesheet" type="text/css" href="large-devices1.css" />

</head>


<style>

    .err_msg{ color:#c20101;
      text-decoration:underline;
    }
  
    </style>

<body>   


   
<div class="topnav">
                <a href="home.php">Home Page</a>
          <div class="topnav-right">
          <div id="MyClockDisplay" style>
          <iframe src="http://free.timeanddate.com/clock/i78ihu39/n210/fn6/fcfff/tct/pct/avb/tt0/tm1/th2/tb4" frameborder="0" width="168" height="34" allowTransparency="true" style="pointer-events: none;"></iframe>
          </div>
            <a href="logout.php">Sign Out</a>
           </div>
</div>

       


<!--
    <div class="companyheader">
        <div class="ch1">
            <a href="home.php"> <img src="logoo.png" alt="logo" height="60px" width="max">    </a>  

        </div>
        <div class="ch2">
            <h1> <a href="home.php"> WEB OS</a></h1> 

        </div>
        <div    class="ch4">
           <div class="ch4-1">
           <img src="<?php echo $photo; ?>" width = "50px" height = "50px" >
            
           </div>
            <div class="ch4-2">
            <h3> <?php echo $usrname; ?></h3>   
                </div>
        
        </div>
        
    </div>

  -->


<hr>
              
<br>


<!-- <div class="mgmt-table-box">
    <div class="mgmt-table-inside">

<div class="mgmt-table-container">
    <h2 style="text-align: center;">Rooms Booked</h2>
    <img src="wallpaper.jpg" height="100%" width="100%"> 
</div>

</div>

</div>

-->







<footer style="margin-top:41%;">
    <p>© 2020 All rights reserved. | VHARSH43</p>
    </footer>
</body>



  </body>
  </html>