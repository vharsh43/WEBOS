

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

<style>
  .err_msg{ color:#f37070;
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
        <div    class="ch3">
           
        </div>
    </div>

</header>

<hr>

<div class="topnav">
                <a href="homepage.php">Home Page</a>
          
       
       
              </div>
              
<br>
                  

      
      
      <div class="signup-module">
        <h1>Sign up</h1>
        <hr>

<form id="SignUp" action = "signup.php" method="post"  enctype="multipart/form-data" >    
<input type = "hidden" value ="1" name = "submit">  

  <table>
                     
   <tr><td>   </td><td>
     
    <label id="email_msg" class="err_msg"></label></td></tr>
   <tr>       
   <td>Email: </td><td> 
    <input type="text" placeholder="Enter Email"  name="email" >
    </td>
   </tr>
   <tr><td></td><td>
     <label id="uname_msg" class="err_msg"></label>
    </td></tr>          
  <tr>       
  <td>Username: </td><td> 
    <input type="text" placeholder="Enter Username"  name="uname" >

  </td>
  </tr>
  <tr><td></td><td>
     <label id="photo_msg" class="err_msg"></label>
    </td></tr>          
  <tr> 
  <tr>
    <td>Avatar:</td>
    <td>

    <input type="file"  name="fileToUpload" id="fileToUpload" >

    </td>
  </tr>
  
   <tr><td></td><td><label id="pswd_msg" class="err_msg"></label></td></tr>
   <tr>
   <td>Password: </td><td>
    <input type="password" placeholder="Enter Password"  name="pswd" >
  </td>
   </tr>
  
   
  <tr><td></td><td><label id="pswdr_msg" class="err_msg"></label></td></tr>            
  <tr>
  <td>Confirm Password: </td><td> 
    <input type="password" placeholder="Retype Password"  name="pswdr" size="99">
    
  </td>
  
  </tr>
  <tr><td></td>
  <td>
    <hr>

          <p>By creating an account you agree to our Terms & Privacy</a>.</p>
  </td>
  </tr>
  
  </table>
  <br>
  <td><input type="submit" value="Sign up"  />
  <input type="reset" value="Reset"/></td>
  
  </form>


  <div>

  </div>
  <div id="display_info"></div>
  


<script type="text/javascript" src="signup-r.js"></script> 
 
  <div class="container signin">

    <p>Already have an account? <a href="homepage.php">Sign in</a>.</p>
  </div>








    </div>
    
    




        
<footer>
  <p>© 2020 All rights reserved. | VHARSH43</p>
  </footer>
</body>
    
      

  </body>
  </html>






  <?php


$valid = true;
$error = "";
$email = "";
$username = "";
$Password = "";

$reg_email = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
$rgPassword = "/^(\S*)?\d+(\S*)?$/";
$rgusername = "/^[a-zA-Z0-9_-]+$/";


$target_dir = "upload/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));





if (isset($_POST["submit"]) && $_POST["submit"])
{
    $email = trim($_POST["email"]);
    $username = trim($_POST["uname"]);
    $Password = trim($_POST["pswd"]);
    $Cpassword = trim($_POST["pswdr"]);


    $database = new mysqli("localhost", "hbv559", "Gj53185", "hbv559");
    if ($database->connect_error)
    {
        die ("Connection failed: " . $database->connect_error);
    }
   
    $eq1 = "SELECT * FROM user WHERE email = '$email'";
    $event_1 = $database->query($eq1);

    if($event_1->num_rows > 0)
    {
        $valid = false;

    }
    else
    {
        $comp_email = preg_match($reg_email, $email);
        if($email == null || $email == "" || $comp_email == false)
        {
            $valid = false;
        }
    }




     $uq1 = "SELECT * FROM user WHERE username = '$username'";
     $event_2 = $database->query($uq1);

        $comp_username = preg_match($rgusername, $username);

        if($event_2->num_rows > 0)
    {
        $valid = false;

    }
    else
    {
    $comp_username = preg_match($rgusername, $username);
        if($username == null ||$username == "" || $comp_username == false)
        {
            $valid = false;


        }
    }
    


    
    $pq1 = "SELECT * FROM user WHERE password = '$Password'";
     $event_3 = $database->query($pq1);

        $comp_username = preg_match($rgPassword, $Password);

        if($event_3->num_rows > 0)
    {
        $valid = false;

    }
    else
    {          
        $comp_password = preg_match($rgPassword, $Password); 
       $Plength = strlen($Password);
        $comp_password = preg_match($rgPassword, $Password);
        if($Password == null || $Password == "" || $Plength< 7 || $comp_password == false)
        {

            $valid = false;

        }

    }


    if ($valid == true)
    {
       if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there is an error uploading your file.";
    }
    echo $target_file;
       $info ="insert into user (username, email, avatar, password) values ('$username','$email', '$target_file','$Password')";
       $event_4 = $database->query($info);

        if ($event_4 == true)
        {
            header("Location: homepage.php");
            $database->close();
            exit();
        }
    }
    else{
        $error = "email is not available. Signup failed!";
        $database->close();
    }
}
?>
