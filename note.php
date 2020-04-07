<?php




    session_start();
    
    $b_id =$_GET['booking_id']; 

	if (!isset($_SESSION["user_id"])) {
		header("Location: homepage.php");
		exit();
	} else {
		$user_id = $_SESSION["user_id"];
    

    $username = $_SESSION["username"];
    
    //If somebody is logged in, display a welcome message
		echo "Welcome, logged in as:  " .$_SESSION['username']. "<br />" ;	
		
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


        $comment01 = "Select note FROM notes WHERE booking_id=$b_id";
        $r01 = $db->query($comment01);
      
        while($c01 = $r01->fetch_assoc())
        {
        //$row01=$r01->fetch_assoc();
        $note = $c01["note"];
        
        }


{

$db = new mysqli("Localhost", "hbv559", "Gj53185", "hbv559");
  

if ($db->connect_error)
   {
       die ("Connection failed: " . $db->connect_error);
   }


if (isset($_POST["submit"]) && $_POST["submit"])
{

$cc = $_POST["message"];
$change = "UPDATE notes SET note = '$cc' , last_update=now() WHERE booking_id = $b_id";
$r3 = $db->query($change);
header("Location: management.php");

}

if (isset($_POST["delete"]) && $_POST["delete"])
{
$cc = $_POST["message"];
$change = "UPDATE notes SET note = '' , last_update=now() WHERE booking_id = $b_id";
$r3 = $db->query($change);
header("Location: management.php");


}






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
            <h3> <?php echo $usrname; ?></h3>   
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




    <div class="notes-module">
        <h1>Add / Edit Notes</h1>
        <div>

        <form  id="Note" method="POST" >
        <input type = "hidden" name= "submit" value ="1"/>
            <label id="desc_msg" class="err_msg"></label>
<br>
            <input type="hidden" id="bookingId" name="bookingId" value="8738">

            <textarea name="message" rows="10" cols="89" style="border-radius: 0.5rem;   background-color: rgba(255, 255, 255, 0.856);  "  onkeyup="countChar(this,'500'); " ><?php echo $note ?></textarea>
            <p id="charNum">500 characters remaining</p>

                <br>
                <br>

                <input type="submit" value="submit" name="submit" class="booking-button"  />
                <input type="submit" value="delete" name="delete" class="booking-button" />
        </form>
    
        <script type="text/javascript" src="note-r.js"></script>

    </div>
    </div>




<footer style="margin-top:17.5%;" >
    <p>© 2020 All rights reserved. | VHARSH43</p>
    </footer>
</body>



  </body>
  </html>