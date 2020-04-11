document.addEventListener('contextmenu', event => event.preventDefault());


function ResetForm(event){ 

	document.getElementById("email_msg").innerHTML ="";
    document.getElementById("uname_msg").innerHTML ="";
    document.getElementById("pswd_msg").innerHTML ="";
    document.getElementById("pswdr_msg").innerHTML ="";
}



function SignInForm(event){
    var email = document.forms.SignIn.email.value;
    var pass  = document.forms.SignIn.pass.value;


    var result = true;

    var email_v = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 

    var pswd_v = /^(\S*)?\d+(\S*)?$/;


    document.getElementById("email_msg").innerHTML ="";
    document.getElementById("pswd_msg").innerHTML ="";



	if ( email==null || email =="" || email_v.test(email) == false){
			
		document.getElementById("email_msg").innerHTML="Email empty or wrong format. Eg: user@xyz.com";
		result = false;
		}
		

    

    if (pass==null || pass=="" ||pswd_v.test(pass) == false || pass.length < 7){  
	    document.getElementById("pswd_msg").innerHTML="Enter correct format. (7 char, No Spaces)";
	    result = false;
    }


    if (result == true)
     {	
        document.location.href = "management.php";

      document.getElementById("SignIn").reset();	
     }



}



function SignUpForm(event){

    var elements = event.currentTarget;



    var l = elements[1].value;
    var m = elements[2].value;
    var c = elements[3].value;
    var n = elements[4].value;
    var o = elements[5].value;
    var f = elements[0].value;
/*
	var l = document.forms.SignUp.email.value;
    var m = document.forms.SignUp.uname.value;
    var a = document.forms.SignUp.fileToUpload.value;
    var n = document.forms.SignUp.pswd.value;
    var o = document.forms.SignUp.pswdr.value;
*/	
	var result = true;
	     
    var email_v = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
	
	var uname_v = /^[a-zA-Z0-9_-]+$/;

	
    var pswd_v = /^(\S*)?\d+(\S*)?$/;
    






    document.getElementById("email_msg").innerHTML ="";
    document.getElementById("uname_msg").innerHTML ="";
    document.getElementById("pswd_msg").innerHTML ="";
    document.getElementById("pswdr_msg").innerHTML ="";
    document.getElementById("photo_msg").innerHTML ="";  

    
    
    




	if (l==null || l =="" || email_v.test(l) == false){
			
		document.getElementById("email_msg").innerHTML="Email address empty or wrong format. example: username@somewhere.sth";
		result = false;
		}
		
	if (m==null || m=="" ||uname_v.test(m) == false){  
	    document.getElementById("uname_msg").innerHTML="Please enter the correct format for Username. (No leading or trailing spaces)";
	    result = false;
    }
	
	
	
    if (n==null || n=="" ||pswd_v.test(n) == false || n.length<7){  
	    document.getElementById("pswd_msg").innerHTML="Please enter the correct format for Password. (8 characters,at least one non-letter)";
	    result = false;
    }


    
    if (o==null || o=="" || o!=n){  
	    document.getElementById("pswdr_msg").innerHTML="Please enter the correct format for confirm Password. (8 characters,at least one non-letter)";
        result = false;
           
    }
    
    if(o!=n)
    {

        document.getElementById("pswdr_msg").innerHTML="Make sure password and confirm passwords match";
        result = false;
    }
    
    if (c==null || c=="")
        {
	    	   
	    document.getElementById("photo_msg").innerHTML="Please upload a photo";
           result = false;
        }

	
     if (result == true)
     {	
         /*
       document.getElementById("display_info").innerHTML="Email: " +l+"<br>"+"Username: "+m+"<br>"+"Gender: "+a+"<br>"+ "Password: " +n+"<br>"
                                                                   +"Confirm Password: "+o+"<br>";	
        */

      	
     }
     else(result == false )
        {    
            
            event.preventDefault();
        }

    															
}



function RoomBookForm(event){



	//var desc = document.forms.RoomBook.description.value;
    var date = document.forms.RoomBook.date.value;
    var stime = document.forms.RoomBook.stime.value;
    var etime = document.forms.RoomBook.etime.value;
	
	var result = true;
	     
    var date_v = /^([0-9][0-9][0-9][0-9])-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01])$/;
    var time_v = /^(00|[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$/;

	





   // document.getElementById("desc_msg").innerHTML ="";
    document.getElementById("date_msg").innerHTML ="";
    document.getElementById("stime_msg").innerHTML ="";
    document.getElementById("etime_msg").innerHTML ="";
    
    
    



	// Validate date
	if (date==null || date=="" ||date_v.test(date) == false){  
        
        document.getElementById("date_msg").innerHTML="Please enter the correct format for Date. (YYYY/MM/DD)";

        result = false;
    }
	
	
    // Validate startTime
   /* 	
    if (stime==null || stime=="" ||time_v.test(stime) == false ){  
	    document.getElementById("stime_msg").innerHTML="Please enter the correct Start Time. HH:MM:SS ";

        result = false;
    }


    // Validate endTime
    
    if (etime==null || etime=="" ||time_v.test(etime) == false ){  
	    document.getElementById("etime_msg").innerHTML="Please enter the correct End Time.  HH:MM:SS ";
        result = false;
           
    }
    
    */






}



    
    
function countChar(obj,maxLength){
    
    
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 0){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">You exceeded limit of '+maxLength+' Characters</span>';
    }else{
        document.getElementById("charNum").innerHTML = charRemain+' Characters remaining';
    }
}



function NoteForm(){


    document.getElementById("desc_msg").innerHTML ="";

	var desc = document.forms.Note.message.value;
    
	var result = true;
         

    if (desc==null || desc =="" || desc.length > 500){
			
		document.getElementById("desc_msg").innerHTML="Description empty or should be Less Than 500." ;
		result = false;
        }

       if(result=true)
       {

       }
     
    
}



/***************************************************************************** */





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