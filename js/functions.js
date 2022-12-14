	function togglepass() 
    {
		var x = document.getElementById("pass");
		if (x.type === "password") 
        {
			x.type = "text";
		} 
        else 
        {
			x.type = "password";
		}	
	}

	function togglepass2() 
    {
		var x1 = document.getElementById("pass1");
		if (x1.type === "password") 
        {
			x1.type = "text";
		} 
        else 
        {
			x1.type = "password";
		}	

		var x2 = document.getElementById("pass2");
		if (x2.type === "password") 
        {
			x2.type = "text";
		} 
        else 
        {
			x2.type = "password";
		}	        
	}    

    const rmCheck = document.getElementById("btn_recordar"),
          passInput    = document.getElementById("pass"),
          emailInput = document.getElementById("usermail");      

    if (localStorage.checkbox && localStorage.checkbox != '') {
        $('#btn_recordar').attr('checked', 'checked');
        $('#usermail').val(localStorage.username);
        $('#pass').val(localStorage.pass);
    } else {
        // $('#btn_recordar').removeAttr('checked');
        // $('#usermail').val('');
        // $('#pass').val('');
    }


    function remember_me()
    {
        
        if($("#btn_recordar").prop('checked'))
        {
          $('#form_login').formcache();
          localStorage.username = emailInput.value;
          localStorage.checkbox = rmCheck.value;    
          localStorage.pass = passInput.value;    
          
        //   if (window.PasswordCredential) {
        //     var c = new PasswordCredential(e.target);
        //     return navigator.credentials.store(c);
        //   } else {
        //     return Promise.resolve(profile);
        //   }          


        }else
        {
            $('#form_login').formcache('removeCache');
            $('#form_login').formcache('removeCaches');
            localStorage.username = "";
            localStorage.checkbox = "";
            localStorage.pass = "";
        }

     
       
    }

// $( document ).ready(function() { 
//     $('#form_login').formcache(); 
//     if($("#user_mail").val()!="" || $("#pass").val()!="")
//     {
//         $("#btn_recordar").attr('checked','checked');
//     }           
//     });  

// $('form').submit(function(e) {
//     e.preventDefault();
//     // or return false;
// });

function send_form(){
    
            var mail = document.getElementById("usermail").value;
            var password = document.getElementById("pass").value;
            if (mail == "" || password == "") {
                swal({
                title: 'Error',
                text: 'Sapindex email account and password must be filled in.',
                type: 'error',
                confirmButtonText: 'Ok'
                }) 
                // alert("Sapindex email account and password must be filled in.");
            }
            else{
                if (validateEmail(mail)){
                   document.getElementById("form_login").submit(); 
                }
                else{
                    swal({
                        title: 'Error',
                        text: 'The email account is not valid.',
                        type: 'error',
                        confirmButtonText: 'Ok'
                        }) 
                }
                
            }                                
                            
}      

function validateEmail(email) 
{
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
}

function send_pass(){
    
    var password1 = document.getElementById("pass1").value;
    var password2 = document.getElementById("pass2").value;
    if ( password1 != password2 ) {
        swal({
        title: 'Error',
        text: 'The passwords do not match.',
        type: 'error',
        confirmButtonText: 'Ok'
        }) 
        // alert("Sapindex email account and password must be filled in.");
    }
    else {
        if (password1.length > 6){
           document.getElementById("form_login2").submit(); 
        }
        else{
            swal({
                title: 'Error',
                text: 'The password must be longer than 6 characters.',
                type: 'error',
                confirmButtonText: 'Ok'
                }) 
        }
        
    }                                
                    
} 

function send_forgot(){
    
    var mail = document.getElementById("mailforgot").value;    
    if (mail == "" ) {
        swal({
        title: 'Error',
        text: 'Sapindex email account must be filled in.',
        type: 'error',
        confirmButtonText: 'Ok'
        }) 
        // alert("Sapindex email account and password must be filled in.");
    }
    else{
        if (validateEmail(mail)){
           document.getElementById("form_forgot").submit(); 
        }
        else{
            swal({
                title: 'Error',
                text: 'The email account is not valid.',
                type: 'error',
                confirmButtonText: 'Ok'
                }) 
        }
        
    }                                
                    
}  

