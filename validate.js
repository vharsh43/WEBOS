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

