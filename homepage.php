<?php
    

    
    session_start();

    if (!isset($_SESSION["user_id"])) 
    {
        echo " Please login to get Full access !!   &nbsp &nbsp" ;
       // echo '<script>alert("Please login to get Full access !! ")</script>';

    } 
    
    else{
        $username = $_SESSION["username"];
                    echo "Welcome, logged in as:  " .$_SESSION['username']. "&nbsp &nbsp" ;	
        echo '<a href="logout.php">Sign Out</a>   <br/>'  ;	



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
    
    
    
    // check to see if the form was submitted
	if (isset($_POST["submitted"]) && $_POST["submitted"]) {
		// get the username and password and check that they aren't empty
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		if (strlen($username) > 0 && strlen($password) > 0) {
			// load the database and verify the username/password
            $db = new mysqli("localhost", "hbv559", "Gj53185", "hbv559");
            if ($db->connect_error) {
		  		die ("Connection failed: " . $db->connect_error);
		  	}
		  
		  	$q = "SELECT user_id, username FROM user WHERE email = '$username' AND password = '$password';";
		  	$result = $db->query($q);
		  
		  	if ($row = $result->fetch_assoc()) {
		  		// login successful
		  		session_start();
				$_SESSION["user_id"] = $row["user_id"];
				$_SESSION["username"] = $row["username"];
				header("Location: management.php");
				$db->close();
				exit();
			} else {
				// login unsuccessful
				$error = ("The username/password combination was incorrect.");
				$db->close();
			}
		} else {
			$error = ("You must enter a non-blank username/password combination to login.");
		}
	} else {
		$error = "";
	}

?>




<!DOCTYPE html>
<html>
<head>
    <title>Conference Portal</title>
		
		<link rel="shortcut icon" href="icon.png" type="image/x-icon">
		
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <script type="text/javascript" src="validate.js"></script>

                <link rel="stylesheet" type="text/css" media="screen and (min-width: 581px)" href="large-devices1.css" />
</head>


<style>
    .err_msg{ color:#c20101;
      text-decoration:underline;
  
    }
  
  
    </style>

<body>   
<header>
   
    <div class="companyheader">
        <div class="ch1">
            <a href="homepage.php"> <img src="logoo.png" alt="logo" height="60px" width="max">    </a>  

        </div>
        <div class="ch2">
            <h1> <a href="homepage.php"> CONFERENCE PORTAL</a></h1> 

        </div>
        <div    class="ch4">
           <div class="ch4-1">
          <!-- <img src="<?php echo $photo; ?>" width = "50px" height = "50px" > -->
            
           </div>
            <div class="ch4-2">
          <!--  <h3> <?php echo $usrname; ?></h3>   -->
                </div>
        
        </div>
        
    </div>

</header>

<hr>


<div class="topnav">
                <a href="homepage.php">Home Page</a>
         
          <a href="management.php">Room Management</a>
       <div class="topnav-right">
        
       </div>
       
              </div>
<br>
<div>

<img src="conference_room.png" id="home-main-image">
</div>
<hr>

<section class="home-info-module">
<h2 >About </h2>
<article>
<p> 
    All meeting rooms will be booked on a first come first serve basis,<br>
    With priority given to government authoritties.
    <br><br>
    We offer more than 2 reported conference listings, including all facilities, equipments, and other unique accessories for Business meetings.
    <br>Wherever you want to book, We make it easy and supports you with 24/7 customer support.
</p>
</article>
</section>


<div class="signin-module">
        <div class="container">
          <h2>Sign in</h2>
<hr>

<h3>Login</h3>
<p class="error"><?=$error?></p>
		<form action="homepage.php" method="post">
			<input type="hidden" name="submitted" value="1" />
			<p><label>
				Username
                <input type="text" id="username" name="username" />

				</label>
                <br>
				<span id="username_error" class="hide_error"> 
					(You must enter your username.)</span>
			</p>
			<p><label>
				Password
                <input type="password"  id="password" name="password" />

				</label>
                <br>
				<span id="password_error" class="hide_error">
					(You must enter your password.)</span>
			</p>
			<p>
            <input type="submit"  id="submit" class="registerbtn" />

				<input type="reset"  class="registerbtn"/>
			</p>
		</form>
		
		<p id="tooltip" class="hide_tooltip">placeholder text</p>

      
        <script type="text/javascript" src="signin-r.js"></script>
       
      
            <p>Create account? &nbsp;<a href="signup.php">Sign Up</a></p>
        </div>
</div>
    
 





<section class="home-room-avilable-module"> 
    <div class="home-room-avilable-top">         
           <h2>RIC 214</h2>
    <img src="room1.png" id="home-room-image">
    <br>
    <br>

    <div class="home-room-avilable-bottom">
        <div class="home-room-avilable-3">
            <p2><b>Avilable</b></p2>
            <br><br>
            <p3>Yes</p3>
     </div>
     <div class="home-room-avilable-3">
            <p2>Booked By</p2>
            <br><br>

            <img src="male.png" id="user-image">
        </div>
     <div class="home-room-avilable-3">
        <p2><b>Book Now</b></p2>
        <br><br>
        <p3><a href="booking.php">+ Reserve</a></p3>     </div>
    </div>

    </div>
<div class="home-room-avilable-top">
         <h2>RIC 315</h2>
  <img src="room2.png" id="home-room-image">
  <br>
    <br>


  <div class="home-room-avilable-bottom">
            <div class="home-room-avilable-3">
                <p2><b>Avilable</b></p2>
                <br><br>
                <p3>No</p3>
            </div>
         <div class="home-room-avilable-3">
                <p2>Booked By</p2>
                <br><br>

                <img src="harsh.png" id="user-image">
            </div>
         <div class="home-room-avilable-3">
            <p2><b>Book Now</b></p2>
            <br><br>
            <p3><a href="booking.php">+ Reserve</a></p3>  
        </div>
        </div>
</div>
<br>
<br>

</div>
<div class="home-room-avilable-top">
         <h2>RIC 330</h2>
  <img src="room3.png" id="home-room-image">

  <br>
    <br>

  <div class="home-room-avilable-bottom">
    <div class="home-room-avilable-3">
        <p2><b>Avilable</b></p2>
        <br><br>
        <p3>Yes</p3>
    </div>
 <div class="home-room-avilable-3">
        <p2>Booked By</p2>
        <br><br>

        <img src="female.png" id="user-image">
    </div>
 <div class="home-room-avilable-3">
    <p2><b>Book Now</b></p2>
    <br><br>
    <p3><a href="booking.php">+ Reserve</a></p3>  
    </div>
</div>
<br>
    <br>
</div>

</section>


<section class="home-info-extra-module"> 
    
    <p2>Select Date: &nbsp;
    <input type="date">
    </p2>    
    <h3>Recent Booking Schedules</h3>


    <article>

    <!--
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FRegina&amp;src=amJ0Ym9xOWxhczBmYWxtcGZ0N3M4djY5aGNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23402175&amp;showTitle=1&amp;showNav=1&amp;showTabs=0&amp;showCalendars=0&amp;showPrint=0&amp;mode=WEEK&amp;showTz=0&amp;title=Conference%20Portal" style="border-width:0" width="1550" height="600" frameborder="0" scrolling="no"></iframe>
    -->

</article>
</section>






      

<footer>
        <p>© 2020 All rights reserved. | VHARSH43</p>
        </footer>
</body>

</html>
