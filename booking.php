<?php




  session_start();

  $booking_id =$_GET['booking_id']; 
  
  

	if (!isset($_SESSION["user_id"])) {
		header("Location: homepage.php");
		exit();
	} else {
		$user_id = $_SESSION["user_id"];
    
    //If somebody is logged in, display a welcome message
		echo "Welcome, logged in as:  " .$_SESSION['username']. "<br />" ;	
    

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





$comment0 = "SELECT * FROM bookroom WHERE booking_id = $booking_id";
$r0 = $db->query($comment0);
  //$row0 = $r0->fetch_assoc();
  
  while($row0 = $r0->fetch_assoc())
  {

  {
    $room_id= $row0["room_id"];
  $user_id = $row0["user_id"];
  $date = $row0["date"];
  $stime = $row0["stime"];
  $etime = $row0["etime"];
  $last_update = $row0["last_update"];
  }

}
  $comment01 = "Select note FROM notes WHERE booking_id=$booking_id";
  $r01 = $db->query($comment01);

  while($c01 = $r01->fetch_assoc())
  {
  //$row01=$r01->fetch_assoc();
  $note = $c01["note"];
  
  }

  $comment02 = "Select room_no FROM rooms WHERE booking_id=$booking_id";
  $r02 = $db->query($comment02);



    if (isset($_POST["update"]) && $_POST["update"])
    {

    $note1 = $_POST["description"];
    $date1 = $_POST["date"];
    $stime1 = $_POST["stime"];
    $etime1 = $_POST["etime"];
//    $room1=$_POST['room'];


    $change1 = "UPDATE bookroom SET date = '$date1' ,stime = '$stime1' ,etime = '$etime1' , last_update = now() WHERE booking_id = $booking_id";
    $change2 ="UPDATE notes SET note= '$note1' , last_update =now() WHERE booking_id=$booking_id" ;

    $r3 = $db->query($change1);
    $r4 = $db->query($change2);

    header("Location: management.php");

    
    }

    
    if (isset($_POST["delete"]) && $_POST["delete"])
    {
    $note1 = $_POST["description"];
    $date1 = $_POST["date"];
    $stime1 = $_POST["stime"];
    $etime1 = $_POST["etime"];
    $room_no = $_POST["room_no"];

    $change1 = "UPDATE bookroom SET date = ' ' ,stime = ' ' ,etime = ' ' , last_update = now() WHERE booking_id = $booking_id";
    $change2 ="UPDATE notes SET note= ' ' , last_update =now() WHERE booking_id=$booking_id" ;
    
    
    $r3 = $db->query($change1);
    $r4 = $db->query($change2);

    header("Location: management.php");

    }
  }
   

  
?>







<!DOCTYPE html>
<html>
<head>
  <title>Conference Portal</title>
		
		<link rel="shortcut icon" href="icon.png" type="x-icon">
		
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <script type="text/javascript" src="validate.js"></script>


                <link rel="stylesheet" type="text/css" media="screen and (min-width: 581px)" href="large-devices1.css" />
</head>



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
           <img src="<?php echo $photo; ?>" width = "50px" height = "50px" >
            
           </div>
            <div class="ch4-2">
            <h3> <?php echo $username; ?></h3>   
                </div>
        
        </div>
        
    </div>

</header>

<hr>

<div class="topnav">
                <a href="homepage.php">Home Page</a>
                <a href="management.php">Room Management</a>
        

          <div class="topnav-right">
            <a href="logout.php">Sign Out</a>
           </div>
       
</div>
              
<br>



 <div class="booking-module">
   

  <form id="RoomBook" method="POST">
  <input type = "hidden" name= "submit" value ="1"/>
    <table>

  <h1 style="text-align: center;">Book Room</h1>


  <tr> <td>
  <div class="booking">

    <textarea name="description"  class="booking" rows="5" cols="88"  onkeyup="countChar(this,'100');"><?php echo $note; ?></textarea>
    <p id="charNum">100 characters remaining</p>
  </div>
  </td>
  </tr>
  <tr>  



    <td><label> Date: </label>

      <label id="date_msg" class="err_msg"></label>
</td>
</tr>

<tr>

<td>  
    <input type="text"  name="date" size="125" value="<?php echo $date ?>">  </input>
</td>
</tr>
<tr>
  <td>
  <label> Start Time: </label>
  <label id="stime_msg" class="err_msg"> </label>

</td>
</tr>
<tr>
  <td>
    <input type="text" name="stime" id="stime" value="<?php echo $stime ?>" name="stime" >
</td>
</tr>

<tr>
<td>
  <label> End Time: </label>
  <label id="etime_msg" class="err_msg"></label>

</td>
</tr>
<tr>
  <td>
    <input type="text" name="etime" id="etime" value="<?php echo $etime ?>" name="etime" >
</td>
</tr>
</table>
<br>
  <input type="submit" value="update" name="update" class="booking-button"  /> 
  <input type="submit" value="delete" name="delete" class="booking-button"  /> 


</form>

<script type="text/javascript" src="roombook-r.js"></script>


</div>





<footer style="margin-top:5.5%;" >
  <p>© 2020 All rights reserved. | VHARSH43</p>
    </footer>
</body>




  </body>
  </html>