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


<div id="topNav">
  <div id="leftOptions">
    <div id="appleLogo" class="option fa fa-apple">
      <div id="appleLogoMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="sub-menu-line">About This Mac</li>
          <li>System Preferences...</li>
          <li class="sub-menu-line">App Store...</li>
          <li class="sub-menu-line">Recent Items</li>
          <li class="sub-menu-line">Force Quit...</li>
          <li>Sleep</li>
          <li>Restart...</li>
          <li class="sub-menu-line">Shut Down...</li>
          <li>Log Out Ricardo Mercado...</li>
        </ul>
      </div>
    </div>
    <div id="finderOption" class="option">
      Finder
      <div id="finderOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="sub-menu-line">About Finder</li>
          <li class="sub-menu-line">Preferences...</li>
          <li class="sub-menu-line disabled">Empty Trash...</li>
          <li class="sub-menu-line">Services</li>
          <li>Hide Finder</li>
          <li>Hide Others</li>
          <li class="disabled">Show All</li>
        </ul>
      </div>
    </div>
    <div id="fileOption" class="option">
      File
      <div id="fileOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li>New Finder Window</li>
          <li>New Folder</li>
          <li>New Folder with Selection</li>
          <li>New Smart Folder</li>
          <li>New Tab</li>
          <li>Open</li>
          <li>Open With...</li>
          <li>Print</li>
          <li class="sub-menu-line disabled">Close Window</li>
          <li>Get Info</li>
          <li class="sub-menu-line">Rename</li>
          <li class="sub-menu-line">Compress</li>
          <li>Duplicate</li>
          <li>Make Alias</li>
          <li>Quick Look</li>
          <li class="disabled">Show Original</li>
          <li class="sub-menu-line">Add to Sidebar</li>
          <li>Move to Trash</li>
          <li class="sub-menu-line disabled">Eject</li>
          <li class="sub-menu-line">Find</li>
          <li>Tags...</li>
          <li id="finderTags"></li>
        </ul>
      </div>
    </div>
    <div id="editOption" class="option">
      Edit
      <div id="editOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="disabled">Undo</li>
          <li class="sub-menu-line disabled">Redo</li>
          <li class="disabled">Cut</li>
          <li class="disabled">Copy</li>
          <li class="disabled">Paste</li>
          <li class="sub-menu-line">Select All</li>
          <li class="sub-menu-line">Show Clipboard</li>
          <li class="disabled">Start Dictation</li>
          <li class="sub-menu-line disabled">Close Window</li>
          <li>Emoji & Symbols</li>
        </ul>
      </div>
    </div>
    <div id="viewOption" class="option">
      View
      <div id="viewOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="disabled">as Icons</li>
          <li class="disabled">as List</li>
          <li class="disabled">as Columns</li>
          <li class="sub-menu-list disabled">as Cover Flow</li>
          <li>Clean Up</li>
          <li>Clean Up By</li>
          <li class="sub-menu-line">Sort By</li>
          <li class="disabled">Show Tab Bar</li>
          <li class="disabled">Show Path Bar</li>
          <li class="disabled">Show Status Bar</li>
          <li class="disabled">Hide Sidebar</li>
          <li class="sub-menu-line disabled">Show Preview</li>
          <li class="disabled">Hide Toolbar</li>
          <li class="sub-menu-line disabled">Customize Toolbar...</li>
          <li class="sub-menu-line">Show View Options</li>
          <li class="disabled">Enter Full Screen</li>
        </ul>
      </div>
    </div>
    <div id="goOption" class="option">
      Go
      <div id="goOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="disabled">Back</li>
          <li class="disabled">Forward</li>
          <li class="sub-menu-list">Enclosing Folder</li>
          <li><i class="fa fa-file-text"></i> All My Files</li>
          <li><i class="fa fa-files-o"></i> Documents</li>
          <li><i class="fa fa-desktop"></i> Desktop</li>
          <li><i class="fa fa-arrow-circle-down"></i> Downloads</li>
          <li><i class="fa fa-home"></i> Home</li>
          <li><i class="fa fa-laptop"></i> Computer</li>
          <li><i class="fa fa-bullseye"></i> AirDrop</li>
          <li><i class="fa fa-globe"></i> Network</li>
          <li><i class="fa fa-cloud"></i> iCloud Drive</li>
          <li><i class="fa fa-rocket"></i> Applications</li>
          <li class="sub-menu-line"><i class="fa fa-wrench"></i> Utilities</li>
          <li class="sub-menu-line">Recent Folders</li>
          <li>Go to Folder...</li>
          <li>Connect to Server...</li>
        </ul>
      </div>
    </div>
    <div id="windowOption" class="option">
      Window
      <div id="windowOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="disabled">Minimize</li>
          <li class="disabled">Zoom</li>
          <li class="sub-menu-list">Cycle Through Windows</li>
          <li class="disabled">Show Previous Tab</li>
          <li class="disabled">Show Next Tab</li>
          <li class="disabled">Move Tab to New Window</li>
          <li class="sub-menu-line disabled">Merge All Windows</li>
          <li class="disabled">Bring All To Front</li>
        </ul>
      </div>
    </div>
    <div id="helpOption" class="option">
      Help
      <div id="helpOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="search">
            Search <input id="helpSearchInput" type="text"></input>
          </li>
          <li class="sub-menu-list">Mac Help</li>
          <li>What's New in macOS</li>
          <li>New to Mac</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="rightOptions">
    <div id="volumeOption" class="option fa fa-volume-up">
      <div id="volumeOptionMenu" class="sub-menu">
        <div id="volumeSlider">
          <input type="range" orient="vertical"/>
        </div>
      </div>
    </div>
    <div id="wifiOption" class="option fa fa-wifi">
      <div id="wifiOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="disabled">Wi-Fi: Looking for Networks...</li>
          <li class="sub-menu-line">Turn Wi-Fi Off</li>
          <li class="selected access-point">
            <i class="fa fa-check"></i>
            <span>FutoRickyWiFi</span>
            <div class="signal">
              <i class="fa fa-lock"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li class="access-point">
            <span>Get Off My LAN</span>
            <div class="signal">
              <i class="fa fa-lock"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li class="access-point">
            <span>PorqueFi</span>
            <div class="signal">
              <i class="fa fa-lock hidden"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li class="access-point">
            <span>Two Girls One Router</span>
            <div class="signal">
              <i class="fa fa-lock"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li class="access-point">
            <span>TellMyWiFiLoveHer</span>
            <div class="signal">
              <i class="fa fa-lock"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li class="access-point">
            <span>It Hurts When IP </span>
            <div class="signal">
              <i class="fa fa-lock"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li class="access-point">
            <span>( . )( . )</span>
            <div class="signal">
              <i class="fa fa-lock hidden"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li class="sub-menu-line access-point">
            <span>HideYoKidsHideYoWiFi</span>
            <div class="signal">
              <i class="fa fa-lock hidden"></i>
              <i class="fa fa-wifi"></i>
            </div>
          </li>
          <li>Join Other Network...</li>
          <li>Create Network...</li>
          <li>Open Network Preferences...</li>
        </ul>
      </div>
    </div>
    <div id="bluetoothOption" class="option fa fa-bluetooth-b">
      <div id="bluetoothOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="disabled">Bluetooth: On</li>
          <li class="sub-menu-line">Turn Bluetooth Off</li>
          <li class="disabled">Devices</li>
          <li class="sub-menu-line">Admin's Trackpad</li>
          <li>Send File to Device...</li>
          <li class="sub-menu-line">Browse Files on Device...</li>
          <li class="disabled">Open Bluetooth Preferences...</li>
        </ul>
      </div>
    </div>
    <div id="batteryOption" class="option fa fa-battery-three-quarters">
      <div id="batteryOptionMenu" class="sub-menu">
        <ul class="sub-menu-list">
          <li class="sub-menu-line">Power Source: Battery</li>
          <li class="disabled">Using significant Energy</li>
          <li class="disabled">Devices</li>
          <li class="sub-menu-line">Admin's Trackpad</li>
          <li>Show Battery Percentage</li>
          <li>Open Energy Save Preferences...</li>
        </ul>
      </div>
    </div>
    <div id="timeOption" class="option"></div>
    <div id="searchOption" class="option fa fa-search" onclick="toggleSpotlight()"></div>
    <div id="sideMenuOption" class="option fa fa-list-ul"></div>
  </div>
</div>

<!-- SPOTLIGHT SEARCH -->
<div id="spotlightSearchInput">
  <input type="text" placeholder="Spotlight Search">
</div>

<!-- DOCK -->

<div id="dock">
  <div class="icons">
    <div class="finder">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/finder-icon.png" alt="finder">
      <span class="tooltiptext">Finder</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/safari-icon.png" alt="Safari">
      <span class="tooltiptext">Safari</span>
    </div>
    <div class="icon">
      <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Google_Chrome_icon_(2011).png" alt="Chrome">
      <span class="tooltiptext">Chrome</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/notes-icon.png" alt="Notes">
      <span class="tooltiptext">Notes</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/calendar-icon.png" alt="Calendar">
      <span class="tooltiptext">Calendar</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/reminders-icon.png" alt="reminders">
      <span class="tooltiptext">Reminders</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/facetime-icon.png" alt="facetime" title="" style="">
      <span class="tooltiptext">FaceTime</span>
    </div>
    <div class="icon">
      <img src="http://www.myiconfinder.com/uploads/iconsets/21cabddae0ef1e593f7d11a4262a3ec9-appstore.png" alt="App Store" title="" style="">
      <span class="tooltiptext">App Store</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/contacts-icon.png" alt="contacts">
      <span class="tooltiptext">Contacts</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/mail-icon.png" alt="mail">
      <span class="tooltiptext">Mail</span>
    </div>
    <div class="icon">
      <img src="http://cdn.osxdaily.com/wp-content/uploads/2013/11/maps-icon-os-x-300x300.png" alt="maps">
      <span class="tooltiptext">Maps</span>
    </div>
    <div class="icon">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/messages-icon.png" alt="messages">
      <span class="tooltiptext">Messages</span>
    </div>
    <div class="icon">
      <img src="https://cdn2.iconfinder.com/data/icons/ios7-inspired-mac-icon-set/1024/itunes_5122x.png" alt="itunes">
      <span class="tooltiptext">iTunes</span>
    </div>
    <div class="icon settings">
      <img src="http://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/1024/system-preferences-icon.png" alt="system preferences">
      <span class="tooltiptext">Settings</span>
    </div>
  </div>
</div>







            
            
            
            
            
            
            

            
   
            


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





  // FUNCTIONS
function getClock(){
  // let tday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  let shortTday = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
  let tmonth = ["January","February","March","April","May","June","July","August","September","October","November","December"];
  let d = new Date();
  let nday = d.getDay(), nmonth = d.getMonth(), ndate = d.getDate(), nyear = d.getFullYear();
  let nhour = d.getHours(), nmin = d.getMinutes(), ap;

  switch (true) {
    case (nhour === 0):
      ap = " AM";
      nhour = 12;
      break;
    case (nhour < 12):
      ap = " AM";
      break;
    case (nhour === 12):
      ap = " PM";
      break;
    case (nhour > 12):
      ap = " PM"; 
      nhour -= 12;
      break;
    default:
      ap = "";
  }

  if (nmin <= 9) {
   nmin = "0" + nmin; 
  }

  // document.getElementById('time').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+ap+"";
  document.getElementById('timeOption').innerHTML=""+shortTday[nday]+" "+nhour+":"+nmin+ap+"";
}

function topNavHighlight(target) {
  if (target.hasClass('option')) {
    target.css({
      'background-color': '#2584FB',
      'color': 'white'
    }); 
  }
  $('#topNav').addClass('active');
  target.addClass('active');
  target.addClass('opened');
  target.find('.sub-menu').css('display', 'block')
}

function removeHighlight() {
  $('.option').css({
    'background-color': 'transparent',
    'color': 'black'
  });
  $('.option').find('.sub-menu').css('display', 'none')
  $('.option').removeClass('active');
  $('.option').removeClass('opened');
}

function inactiveTopNav() {
  removeHighlight();
  $('#topNav').removeClass('active');
  $('.option').removeClass('active'); 
}

function setFinderTags() {
  let tagColors = ["red", "orange", "yellow", "green", "blue", "mediumpurple", "gray"]
  for (let i = 0; i < 7; i++) {
    if (tagColors[i] === "mediumpurple") {
      $('#finderTags').append("<div class='finder-tag' style='background-color:" + tagColors[i] + "; border: 1px solid purple;' ></div>");
    } else {
      $('#finderTags').append("<div class='finder-tag' style='background-color:" + tagColors[i] + "; border: 1px solid dark" + tagColors[i] + ";' ></div>"); 
    }
  }
}

function toggleSpotlight() {
  $('#spotlightSearchInput').show();
}

// DOCUMENT READY
$(document).ready(function() {
  $('#spotlightSearchInput').hide();
  getClock();
  setInterval(getClock, 1000);
  setFinderTags();
  
  $(document).on('click', (e) => {
    if (!$(e.target).hasClass('option')) {
      inactiveTopNav();
    }
    if (!$(e.target).is('#spotlightSearchInput input') || !$(e.target).is('#searchOption')) {
      $('#spotlightSearchInput').hide(); 
    }
  })
  
  $('.option').on('click', (e) => {
    if ($(e.target).hasClass('option') && $(e.target).hasClass('active')) {
      inactiveTopNav();
    } else {
      removeHighlight();
      topNavHighlight($(e.target)); 
    }
  })
  
  $('.option').on('mouseover', (e) => {
    if ($('#topNav').hasClass('active') && $(e.target).hasClass('option')) {
      removeHighlight();
      topNavHighlight($(e.target));
    }
  })
  
  $('#helpOption').on('click', () => {
    setTimeout(() => { $('#helpSearchInput').focus() }, 100);
  })

  $('#helpOption').on('mouseover', () => {
    setTimeout(() => { $('#helpSearchInput').focus() }, 100);
  })
});
}
</script>

  </body>

  </html>