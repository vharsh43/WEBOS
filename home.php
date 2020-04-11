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
		<div class="ch4">
			<div class="ch4-1">
				<img src="
					<?php echo $photo; ?>" width = "50px" height = "50px" >
				</div>
				<div class="ch4-2">
					<h3>
						<?php echo $usrname; ?>
					</h3>
				</div>
			</div>
			<div id="MyClockDisplay">
				<iframe src="http://free.timeanddate.com/clock/i78ihu39/n210/fn6/fcfff/tct/pct/avb/tt0/tm1/th2/tb4" frameborder="0" width="168" height="34" allowTransparency="true" style="pointer-events: none;"></iframe>
			</div>
			<div id="div1" class="fa"></div>
			<a href="logout.php">Sign Out</a>
		</div>
	</div>
</div>
          




<hr>


<!---      WIN 10


     Taskbar 
    <div class="taskbar">
        <div class="icons">
            <div class="icons-left">
                <a href="#start-menu-modal" id="start-menu"><i class="fab fa-windows"></i></a>
                <a href="#search" id="search"></a>
                <a href="#tabs" id="tabs-windows"></a>
                <a href="#" class="px"></a>
                <a href="#folder" id="folder" class="border"></a>
                <a href="#chrome-pop-up" id="chrome" class="border"></a>
            </div>
            <div class="icons-right">
                    <a href="#up" id="up" class="small-icons"><i class="fas fa-chevron-up"></i></a>
                    <a href="#sound-modal" id="sound" class="small-icons"></a>
                    <a href="#wifi-modal" id="wifi" class="small-icons"></a>
                    <div class="datetime">
                        <span class="hour">
                            23:58
                        </span>
                        <span class="date">
                            03/05/2018
                        </span>
                    </div>
                    <a href="#notifications" id="notifications"><i class="far fa-bell"></i></a>
                    <a href="#" class="clear disabled"></a>
                    <a href="#" id="return"></a>
            </div>
        </div>
    </div>

    <div class="desktop">

        <div class="icons-dekstop">
            <div class="icon-desktop">
                <a href="#chrome-pop-up"><img src="https://image.noelshack.com/fichiers/2018/22/1/1527510180-chrome-5122.png" alt=""><span>Chrome</span></a>
            </div>
            <div class="icon-desktop">
                <a href="#"><img src="https://image.noelshack.com/fichiers/2018/22/1/1527510180-visual-studio-code-0-10-1-icon2.png" alt=""><span>Code</span></a>
            </div>
            <div class="icon-desktop">
                <a href="#"><img src="https://image.noelshack.com/fichiers/2018/18/6/1525513595-screenshot-5.png" alt=""><span>File Explorer</span></a>
            </div>
            <div class="icon-desktop">
                <a href="#"><img src="https://image.noelshack.com/fichiers/2018/18/6/1525514340-screenshot-6.png" alt=""><span>Recycle bin</span></a>
            </div>
        </div>

        <div id="sound-modal">
            <div class="sound-text">
                <span>Speakers</span>
            </div>
            <div class="sound-progress">
                <i class="fas fa-volume-up"></i>
                <div class="bar-sound"></div>
                <div class="bar-sound-drag"></div> 
                <span class="data-value">50%</span>   
            </div>
        </div>

        <div id="wifi-modal">
                <div class="list-networks">
                    <div class="networks">
                        <div class="icons-wifi">
                        <i class="fas fa-wifi"></i>
                        </div>
                        <div class="text-wifi">
                            <span class="name-wifi">Wifi</span>
                            <span class="type-wifi">Connected, securised</span>
                            <span class="propriety">Propriety</span>
                            <button>Disconnect</button>
                        </div>
                    </div>
                    <div class="networks">
                            <div class="icons-wifi">
                                <i class="fas fa-wifi"></i>
                            </div>
                        <span class="name-wifi">Wifi</span>
                        <span class="type-wifi">Open</span>
                    </div>
                    <div class="networks">
                            <div class="icons-wifi">
                                <i class="fas fa-wifi"></i>
                            </div>
                        <span class="name-wifi">Wifi</span>
                        <span class="type-wifi">Open</span>
                    </div>
                    <div class="options-wifi">
                        <div class="options-wifi-text">
                            <span>Options internet & security</span>
                            <span>Modify options, for a better connection</span>
                        </div>
                        <div class="options-bloc">
                            <div class="bloc-options">
                                <i class="fas fa-wifi"></i>
                                <span>Wifi</span>
                            </div>
                            <div class="bloc-options">
                                <i class="fas fa-plane"></i>
                                <span>Plane mode</span>
                            </div>
                            <div class="bloc-options">
                                <i class="fab fa-bluetooth-b"></i>
                                <span>Bluetooth</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="chrome" id="chrome-pop-up">
        <div class="pop-up">

            
            <div class="chrome-top">
                <div class="chrome-tabs">
                    <div class="triangle"></div>
                    <div class="tabs">
                        <span class="icons-tabs">
                            <i class="fab fa-codepen"></i>
                        </span>
                        <span class="text-tabs">CodePen</span>
                        <span class="close-tabs">x</span>
                    </div>
                    <div class="triangle-2"></div>
                    <div class="new-tabs"></div>
                </div>
                <div class="chrome-close">
                    <a href="#"><i class="fas fa-minus"></i></a>
                    <a href="#"><i class="far fa-window-restore"></i></a>
                    <a href="#"><i class="fas fa-times"></i></a>
                </div>
            </div>
            <div class="chrome-bottom">
                <div class="options-bar">
                    <div class="icons-bar">
                        <div class="arrows">
                            <a href="#"><i class="fas fa-arrow-left"></i></a>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                            <a href="#"><i class="fas fa-sync"></i></a>
                        </div>
                        <div class="search-bar">
                            <span class="info"><i class="fas fa-lock"></i> Securised</span>
                            <input type="text" value="http://codepen.io/guilome">
                            <span class="star"><i class="far fa-star"></i></span>
                        </div>
                        <div class="points-bar">
                            <div class="points">
                                <span>•</span>
                                <span>•</span>
                                <span>•</span>
                            </div>
                        </div>
                    </div>
                    <div class="bookmarks">
                            <div class="folder-book">
                                <a target="_blank" href="https://purecss.io/"><span>P</span> Pure</a>
                            </div>
                            <div class="folder-book">
                                <a target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS"><i class="fab fa-css3-alt"></i> CSS</a>
                            </div>
                            <div class="folder-book">
                                <a target="_blank" href="https://www.microsoft.com/fr-fr/windows"><i class="fab fa-windows"></i> Windows 10</a>
                            </div>
                    </div>
                </div>
                
            </div>
            <iframe src="http://codepen.io/Guilome" frameborder="0" width="895px" height="404px"></iframe>
        </div> 
    </div>

    
    <div id="start-menu-modal">
        <div id="user">
            <a class="push" href="#"><i class="fas fa-bars"></i></a>
            <a href="#"><i class="fas fa-user"></i></a>
            <a href="#"><i class="fas fa-cog"></i></a>
            <a href="#"><i class="fas fa-power-off"></i></a>
        </div>
        <div id="apps">
            <a class="category" href="#">&</a>
            <a href="#"><img src="https://image.noelshack.com/fichiers/2018/22/1/1527510180-logo-microsoft-access-20132.png" alt="access"> <span>Access</span></a>
            <a href="#"><img src="http://assets.nnm-club.ws/forum/image.php?link=http://s019.radikal.ru/i622/1709/cc/334931ae4fe7.png" alt="sublime"> <span>Sublime text 3</span></a>
        </div>
        <div id="others">
            <div class="title-others">
                Office 365
            </div>
            <div class="box-others">
                <div class="box">
                    <img src="https://image.noelshack.com/fichiers/2018/22/1/1527527145-logo-microsoft-word-20132.png" alt="">
                    <span>Word</span>
                </div>
                <div class="box">
                    <img src="https://image.noelshack.com/fichiers/2018/22/1/1527527145-logo-microsoft-excel-20132.png" alt="">
                    <span>Excel</span>
                </div>
                <div class="box">
                    <img src="https://image.noelshack.com/fichiers/2018/22/1/1527527145-logo-microsoft-powerpoint-2013.png" alt="">
                    <span>Powerpoint</span>
                </div>
                <div class="box">
                    <img src="https://image.noelshack.com/fichiers/2018/22/1/1527527145-logo-microsoft-outlook-2013.png" alt="">
                    <span>Outlook</span>
                </div>
                <div class="box">
                    <img src="https://image.noelshack.com/fichiers/2018/22/1/1527527458-publisher-by-navdbest-d6186xo-600x6002.png" alt="">
                    <span>Publisher</span>
                </div>
                <div class="box">
                    <img src="https://image.noelshack.com/fichiers/2018/22/1/1527527243-logo-microsoft-onenote-20132.png" alt="">
                    <span>OneNote</span>
                </div>
            </div>
        </div>
    </div>


            -->









            
            
            
            
            
            
            

            
   
            


<div class="popup" id="popup-1">
  <div class="overlay"></div>
   <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
    <h1>Calculator</h1>
    <iframe src='https://www.embed.com/app/calculator/gray-calculator.html' style='width: 500px; height: 500px;' scrolling='no' frameBorder='0' sandbox></iframe>
  </div>
</div>













<table>
    <tr><td><button onclick="window.location.href = 'calculator.php';">edit</button></td></tr>
    <tr><td><button onclick="togglePopup()">edit</button></td></tr>
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