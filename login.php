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
				header("Location: homepage.php");
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
            <h1> <a href="homepage.php"> WEB OS</a></h1> 

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


<br>
<div>

<img src="conference_room.png" id="home-main-image">
</div>
<hr>

<section class="home-info-module">


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
    
 




<br>
<br>
</section>







      

<footer>
        <p>© 2020 All rights reserved. | VHARSH43</p>
        </footer>
</body>

</html>
