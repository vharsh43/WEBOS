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

</header>

<hr>


<div class="topnav">
                <a href="homepage.php">Home Page</a>
        

          <div class="topnav-right">
            <a href="logout.php">Sign Out</a>
           </div>
       
</div>
              
<br>





  <div class="mgmt-table-box">
    <div class="mgmt-table-inside">

<div class="mgmt-table-container">
    <h2 style="text-align: center;">Rooms Booked</h2>
    
    <table class="mgmt-table-all mgmt-hoverable">
        
      <thead>
          <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
                <th> </th>
              
          </tr>
        <tr class="mgmt-light-grey">
          <th>Room Number</th>
          <th>Booking ID</th>
          <th>Date</th>
          <th>Start</th>
          <th>End</th>
          <th>Note</th>
          <th> Edit / Delete Booking</th>
          <th>Notes</th>
          </thead>
          </tr>

 
  
  
  <?php  	


 $connection = mysqli_connect ("localhost", "hbv559", "Gj53185", "hbv559");
    
  $db = mysqli_select_db($connection,'hbv559');

   // echo "1",$id,"2",$_SESSION['user_id'];

  $query = "SELECT room_no,b.booking_id,date,stime,etime,note FROM bookroom b JOIN rooms r ON b.room_id = r.room_id JOIN notes n ON b.booking_id = n.booking_id WHERE b.user_id =$id";
  $query_run = mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($query_run))
  {
    ?>

<tr>
                <th>  <?echo $row['room_no'] ?></th>
                <th>  <?echo $row['booking_id'] ?></th>
                <th>  <?echo $row['date'] ?></th>
                <th>  <?echo $row['stime'] ?></th>
                <th>  <?echo $row['etime'] ?></th>
                <th>  <?echo $row['note'] ?> </th>

                
                <th> <a href="http://www2.cs.uregina.ca/~hbv559/assign5/booking.php?booking_id=<?echo $row['booking_id'] ?> " style="text-decoration:none; color: red; font-size: 20px;">Make Changes</a></th>
                <th><a href="http://www2.cs.uregina.ca/~hbv559/assign5/note.php?booking_id=<?echo $row['booking_id'] ?>" style="color:red;font-size: 20px;">Edit/Delete</a></th>
                
</tr>

                <?php

  }
?>

    </table>

  </div>

</div>

</div>




<footer style="margin-top:41%;">
    <p>© 2020 All rights reserved. | VHARSH43</p>
    </footer>
</body>



  </body>
  </html>