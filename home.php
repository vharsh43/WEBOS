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



<!DOCTYPE HTML>
<html lang="en-US" class="no-js">
<head>
    <title>WEB OS</title>
		
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
   
   
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		
                <script type="text/javascript" src="validate.js"></script>      
               <!-- <link rel="stylesheet" type="text/css" href="large-devices1.css" /> -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="res/css/style.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="res/js/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="res/js/modernizr.js"></script> 
<script type="text/javascript" src="res/js/fix-and-clock.js"></script>
<link rel="canonical" href="http://www2.cs.uregina.ca/~hbv559/" />
</head>






<body>   
 <!--  
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
        -->

<!-- DESKTOP -->


<div id="page">
<header id="head">
	<nav id="menu">
    	<ul>
        <li class="apple">
        	<a href="#all">Apple</a>
            <ul class="sublist">
            <li><a href="#about-this-mac" data-rel="show">About This Mac</a></li>
            <li>Software Updates...</li>
            <li>App Store...</li>
            <li class="divider"></li>
            <li>System Preferences...</li>
            <li>Dock
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>Turn Hiding Off</li>
                <li>Turn Magnification Off</li>
                <li class="divider"></li>
                <li>Position on Left</li>
                <li>Position on Bottom</li>
                <li>Position on Right</li>
                <li class="divider"></li>
                <li>Dock Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Recent Items
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">Applications</li>
                <li class="divider"></li>
                <li class="disable">Documents</li>
                <li class="divider"></li>
                <li class="disable">Servers</li>
                <li class="divider"></li>
                <li>Clear Menu</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Force Quit...</li>
            <li class="divider"></li>
            <li>Sleep</li>
            <li>Restart...</li>
            <li>Shut Down...</li>
            <li class="divider"></li>
            <li><a href="logout.php">Log Out...</a></li>
            </ul>
        </li>
        <li class="here">
        	<a href="#all">Finder</a>
        	<ul class="sublist">
            <li><a href="#finder" data-rel="show">About Finder</a></li>
            <li class="divider"></li>
            <li>Preferences...</li>
            <li class="divider"></li>
            <li>Secure Empty Trash...</li>
            <li class="divider"></li>
            <li>Services
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">No Services Apply</li>
                <li>Services Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Hide Finder</li>
            <li>Hide Others</li>
            <li class="disable">Show All</li>
            </ul>
        </li>
        <li>
        	<a href="#all">File</a>
            <ul class="sublist">
            <li>New Finder Window</li>
            <li>New Folder</li>
            <li class="disable">New Folder with Selection</li>
            <li>New Smart Folder</li>
            <li>New Burn Folder</li>
            <li class="disable">Open</li>
            <li class="disable">Open With
            	<span class="arrow"></span>
            </li>
            <li class="disable">Print</li>
            <li class="disable">Close Window</li>
            <li class="divider"></li>
            <li>Get Info</li>
            <li class="divider"></li>
            <li class="disable">Compress</li>
            <li class="divider"></li>
            <li class="disable">Duplicate</li>
            <li class="disable">Make Alias</li>
            <li class="disable">Quick Look</li>
            <li class="disable">Show Original</li>
            <li class="disable">Add to Sidebar</li>
            <li class="divider"></li>
            <li class="disable">Move to Trash</li>
            <li class="disable">Eject</li>
            <li>Burn "Desktop" to Disc...</li>
            <li class="divider"></li>
            <li>Find</li>
            <li class="divider"></li>
            <li class="disable">Label:</li>
            </ul>
        </li>
        <li>
        	<a href="#all">Edit</a>
        	<ul class="sublist">
            <li class="disable">Undo</li>
            <li class="disable">Redo</li>
            <li class="divider"></li>
            <li class="disable">Cut</li>
            <li class="disable">Copy</li>
            <li class="disable">Paste</li>
            <li>Select All</li>
            <li class="divider"></li>
            <li>Show Clipboard</li>
            <li class="divider"></li>
            <li>Special Characters...</li>
            </ul>
        </li>
        <li>
        	<a href="#all">View</a>
        	<ul class="sublist">
            <li class="disable">as Icons</li>
            <li class="disable">as List</li>
            <li class="disable">as Columns</li>
            <li class="disable">as Cover Flow</li>
            <li class="divider"></li>
            <li>Clean Up</li>
            <li>Clean Up By
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>Name</li>
                <li>Kind</li>
                <li>Date Modified</li>
                <li>Date Created</li>
                <li>Size</li>
                <li>Label</li>
                </ul>
            </li>
            <li>Sort By
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>None</li>
                <li class="divider"></li>
                <li>Snap to Grid</li>
                <li class="divider"></li>
                <li>Name</li>
                <li>Kind</li>
                <li>Date Last Opened</li>
                <li>Date Added</li>
                <li>Date Modified</li>
                <li>Date Created</li>
                <li>Size</li>
                <li>Label</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="disable">Hide Path Bar</li>
            <li class="disable">Hide Status Bar</li>
            <li class="disable">Hide Sidebar</li>
            <li class="divider"></li>
            <li class="disable">Toolbar</li>
            <li class="disable">Customize Toolbar...</li>
            <li class="divider"></li>
            <li>Show View Options...</li>
            </ul>
        </li>
        <li>
        	<a href="#all">Go</a>
        	<ul class="sublist">
            <li class="disable">Back</li>
            <li class="disable">Forward</li>
            <li>Enclosing Folder</li>
            <li class="divider"></li>
            <li>All My Files</li>
            <li>Documents</li>
            <li>Desktop</li>
            <li>Downloads</li>
            <li>Home</li>
            <li>Computer</li>
            <li>AirDrop</li>
            <li>Network</li>
            <li>Applications</li>
            <li>Utilities</li>
            <li class="divider"></li>
            <li>Recent Folders
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>2012-01-10</li>
                <li>Archieves</li>
                <li>buildFiles</li>
                <li>MyProjects</li>
                <li>XCode_iPhone</li>
                <li class="divider"></li>
                <li>Clear Menu</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Go to Folder...</li>
            <li>Connect to Server...</li>
            </ul>
        </li>
        <li>
        	<a href="#all">Window</a>
         	<ul class="sublist">
            <li class="disable">Minimize</li>
            <li class="disable">Zoom</li>
            <li class="disable">Cycle Through Windows</li>
            <li class="divider"></li>
            <li>Bring All to Front</li>
            </ul>
        </li>
        <li><a href="#all">Help</a></li>
        </ul>
	</nav>
    <nav id="menu-dx">
    	<ul>
        <li class="wireless">
        	<a href="#all">Wireless</a>
        </li>
        <li class="time">
        	<ul>
            <li id="DateAbbr"> </li>
            <li class="hour"> </li>
    		<li class="point">:</li>
        <li class="mins"> </li>
        <li class="sec"></li>
            </ul>
        </li>
        <li class="photo">
        <img src="<?php echo $photo; ?>" width = "21px" height = "21px" >
        </li>
        <li class="username">
        	<a href="#all"><?php echo $usrname; ?></a>
        </li>
		</ul>
    </nav>
</header>


<div id="finder" class="window finder">
	<nav class="control-window">
    <a href="#finder" class="close" data-rel="close">close</a>
    <a href="#" class="minimize">minimize</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">About Finder</h1>
    <div class="container">
    	<div class="container-inside">
        <img src="res/img/FinderIcon.png" alt="Finder"/>
        <div class="about-this">
        <h2>Finder</h2>
        <p>The Macintosh Desktop Experience</p>
        <p class="small">Finder version 10.7.1</p>
        </div>
        <div class="copyright">
        <p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
        </div>
        </div>
    </div>
</div>

<div id="about-this-mac" class="window mac">
	<nav class="control-window">
    <a href="#about-this-mac" class="close" data-rel="close">close</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="title-mac">About This Mac</h1>
    <div class="container">
    	<div class="container-inside">
    	<img src="res/img/MacOSX.png" alt="Mac OS X"/>
    	<div class="about-this">
    	<p>Version 10.7.2</p>
        <p><a class="button about" href="#">Software Update...</a></p>
        <ul class="hardware">
        <li><strong>Processor</strong> 2 Ghz Intel Core 2 Duo</li>
        <li><strong>Memory</strong> 4 GB 1067 Mhz DDR3</li>
        <li><strong>Startup Disk</strong> Macintosh HD</li>
        </ul>
        <p><a class="button about" href="#">More Info...</a></p>
    	<div class="copyright">
    	<p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
    	</div>
    	</div>
    	</div>
    </div>
</div>

<div id="warning" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="res/img/Alert.png" alt="alert"/>
        <div class="about-alert">
        <h2>Alert</h2>
        <p>This application cannot be used in this version</p>
        <a href="#warning" class="button blink" data-rel="close">Close</a>
        </div>
        </div>
    </div>
</div>

<div id="trash" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="res/img/FinderIcon.png" width="48px" height="48px" alt="alert"/>
        <div class="about-alert">
        <h2>Secure Empty Trash permanently erases the items in the Trash. Are you sure you want to permanently erase them?</h2>
        <p>If you choose Secure Empty Trash, you can't recover the items unless you've backed them up using Time Machine or another backup program.</p>
        <a href="#warning" class="button blink" data-rel="">Secure Empty Trash</a>
        <a href="#trash" class="button simple" data-rel="close">Cancel</a>
        </div>
        </div>
    </div>
</div>



<div id="spec" class="window spec">
	<nav class="control-window">
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">Project Specifics</h1>
    <div class="container">
    	<div class="container-inside">
        <img src="res/img/folder.png" alt="Project Specifics" />
        <div class="about-this">
    	<p class="vers">Version 1.1</p>
        <p><strong>New Version Featured</strong></p>
        <p>Replace some image elements with CSS3, Dock, hide and show window, fix and optimize the code</p>
		<p><strong>Modern Browser Supported</strong></p>
    	<p>Firefox, Safari and Chrome</p>
        <p><strong>HTML 5 and CSS3</strong></p>
    	<p>Intensive use of the CSS3 Keyframes Animations and :target pseudo-class and for GUI</p>
        <p><strong>Javascript</strong></p>
        <p>Clock, Fake Login and add special classes after login to remove animations and fix the desktop, hide and show window and and added classes for the dock</p>
        <p><strong>Draggable Window</strong></p>
        <p>Use a jQuery UI Draggable plugin</p>
        <p><strong>Images</strong></p>
        <p>Use images for logos, user-avatar, spinner loading, cursors, background images, icons</p>
        </div>
        </div>
    </div>
</div>



<!-- DOCK -->
<div class="dock">
	<ul>
    	<li id="finderr">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Finder</span></em>
                <img src="res/img/FinderIcon.png" alt="Finder"/>
            </a>
        </li>
        <li id="launchPad">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Launchpad</span></em>
                <img src="res/img/launchPad.png" alt="Launchpad"/>
            </a>
        </li>
        <li id="expose">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Mission Control</span></em>
                <img src="res/img/expose.png" alt="Mission Control"/>
            </a>
        </li>
        <li id="appStore">
        	<a href="#warning" data-rel="showOp">
            	<em><span>App Store</span></em>
                <img src="res/img/appstore.png" alt="App Store"/>
            </a>
        </li>
        <li id="safari">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Safari</span></em>
                <img src="res/img/Safari.png" alt="Safari"/>
            </a>
        </li>
        <li id="iChat">
        	<a href="#warning" data-rel="showOp">
            	<em><span>iChat</span></em>
                <img src="res/img/ichat.png" alt="iChat"/>
            </a>
        </li>
        <li id="facetime">
        	<a href="#warning" data-rel="showOp">
            	<em><span>FaceTime</span></em>
                <img src="res/img/facetime.png" alt="Facetime"/>
            </a>
        </li>
        <li id="addressBook">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Address Book</span></em>
                <img src="res/img/address.png" alt="Address Book"/>
            </a>
        </li>
        <li id="preview">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Preview</span></em>
                <img src="res/img/preview.png" alt="Preview"/>
            </a>
        </li>
        <li id="iTunes">
        	<a href="#warning" data-rel="showOp">
            	<em><span>iTunes</span></em>
                <img src="res/img/iTunes.png" alt="iTunes"/>
            </a>
        </li>
        <li id="preferences">
        	<a href="#warning" data-rel="showOp">
            	<em><span>System Preferences</span></em>
                <img src="res/img/preferences.png" alt="System Preferences"/>
            </a>
        </li>
        <li id="trash">
        	<a href="#trash" data-rel="showOpTrash">
            	<em><span>Trash</span></em>
                <img src="res/img/trash.png" alt="Trash"/>
            </a>
        </li>
    </ul>
</div>

</div>






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

</script>

  </body>

  </html>