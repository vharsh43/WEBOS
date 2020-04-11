

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


jQuery Mobile1.4.5 DEMOS
iframes in popups
You may need to embed an iframe into a popup to use a 3rd party widget. Here, we'll walk through a few real-world examples of working with iframes: videos and maps.

Video example
Here is an example of a 3rd party video player embedded in a popup:

The markup is an iframe inside a popup container. The popup will have a 15 pixels padding because of class ui-content and a one pixel border because the framework will add class ui-body-a to the popup.

When using an iframe inside a popup it is important to initially set the width and height attributes to 0. This prevents the page to breaking on platforms like Android 2.3. Note that you have to set the attributes, because setting the width and height with CSS is not sufficient. You can leave the actual width and height in the markup for browsers that have JavaScript disabled and use attr() to set the zero values upon the pagecreate event.

Next, bind to the popupbeforeposition event to set the desired size of the iframe when the popup is shown or when the window is resized (e.g. orientation change). For the iframe examples on this page a custom function scale() is used to scale down the iframe to fit smaller screens.

When the popup is closed the width and height should be set back to 0. You can do this by binding to the popupafterclose event.

Note that the video will still be playing in the iframe when the popup is closed. If available you can use the 3rd party API to stop the video on the popupafterclose event. Another way is to create the iframe when the popup is opened and destroy it when the popup is closed, but this would drop support for browsers that have JavaScript disabled.

Map example
In the second example, an iframe is used to display Google Maps API. Using an iframe prevents issues with the controls of the map.

Expand the section below to view the source of the iframe.

Setting the size of the iframe is done exactly the same as for the video example, with one exception. You should also set the width and height of the div that contains the map to prevent the page to break on platforms like Android 2.3. In this example the ID of this div is #map_canvas.

jQuery Mobile Demos version 1.4.5Copyright 2014 The jQuery Foundation
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
// popup examples
$( document ).on( "pagecreate", function() {
    // The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
    function scale( width, height, padding, border ) {
        var scrWidth = $( window ).width() - 30,
            scrHeight = $( window ).height() - 30,
            ifrPadding = 2 * padding,
            ifrBorder = 2 * border,
            ifrWidth = width + ifrPadding + ifrBorder,
            ifrHeight = height + ifrPadding + ifrBorder,
            h, w;
        if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
            w = ifrWidth;
            h = ifrHeight;
        } else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
            w = scrWidth;
            h = ( scrWidth / ifrWidth ) * ifrHeight;
        } else {
            h = scrHeight;
            w = ( scrHeight / ifrHeight ) * ifrWidth;
        }
        return {
            'width': w - ( ifrPadding + ifrBorder ),
            'height': h - ( ifrPadding + ifrBorder )
        };
    };
    $( ".ui-popup iframe" )
        .attr( "width", 0 )
        .attr( "height", "auto" );
    $( "#popupVideo" ).on({
        popupbeforeposition: function() {
            // call our custom function scale() to get the width and height
            var size = scale( 497, 298, 15, 1 ),
                w = size.width,
                h = size.height;
            $( "#popupVideo iframe" )
                .attr( "width", w )
                .attr( "height", h );
        },
        popupafterclose: function() {
            $( "#popupVideo iframe" )
                .attr( "width", 0 )
                .attr( "height", 0 );
        }
    });
});
