$(document).ready(function () {

    //### CONTACT FORM VALIDATE ###
    $("#contact-form").validate({
        rules: {
            fname: "required",
            lname: "required",
            email: {
                required: true,
                email: true
            },
            message: "required"
        },
        messages: {
            fname: "*Please enter your first name",
            lname: "*Please enter your last name",
            email: {
                required: "*Please enter a email address",
                email: "*Please enter a valid email address"
            },
            message: "*Please enter a message"
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $("#signin-form").validate({
        rules: {
            password:{
                required: true,
                minlength: 6
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "*Please enter a email address",
                email: "*Please enter a valid email address"
            },
            password:{
                required: "*Please enter a password",
            }
            
        },
        
        submitHandler: function(form) {
            form.submit();
            console.log("Test");
            let input_email = $("#sign-email").val();
            let input_psw = $("#sign-password").val();
            $.ajax({
                type: 'POST',
                url: 'php/signin.php',
                data:{
                    input_email: input_email,
                    input_psw: input_psw
                },
                dataType: "json",
                success: function(response){
                    console.log("Succes!!");

                    if(response.statusCode == 200){
                        alert("Succes login");
                        location.replace("http://localhost/AllOne/main.html");
                    } else if(response.statusCode == 201){
                        alert("Error: Faild login");
                    }

                }
            })
            
        }
    });

    $("#register-form").validate({
        rules: {
            regFname: "required",
            regLname: "required",
            regUsername: "required",
            regEmail: {
                required: true,
                email: true
            },
            regPassword:{
                required: true,
                minlength: 6
            },
            regPasswordCheck:{
                minlength: 6,
                equalTo : "#reg-password"
            },
            autoAgree:{
                required: true
            } 
        },
        messages: {
            regFname: "*Please enter your first name",
            regLname: "*Please enter your last name",
            regUsername: "*Please enter your username",
            regEmail: {
                required: "*Please enter a email address",
                email: "*Please enter a valid email address"
            },
            regPassword:{
                required: "*Please enter a password",
                minlength: "*Please enter at least 6 characters"
            },
            regPasswordCheck:{
                minlength: "*Please enter at least 6 characters",
                equalTo : "*Invalid Password"
            },
            autoAgree:{
                required: "*"
            }
        },
        
        submitHandler: function(form) {
            form.submit();
            let reg_fname = $("#reg-fname").val();
            let reg_lname = $("#reg-lname").val();
            let reg_username = $("#reg-username").val();
            let reg_email = $("#reg-email").val();
            let reg_psw = $("#reg-password").val();
            let reg_pswCheck = $("#reg-password-check").val();
            $.ajax({
                type: 'POST',
                url: 'php/register.php',
                data:{
                    reg_fname: reg_fname,
                    reg_lname: reg_lname,
                    reg_username: reg_username,
                    reg_email: reg_email,
                    reg_psw: reg_psw,
                    reg_pswCheck: reg_pswCheck

                },
                dataType: "json",
                success: function(response){
                    if(response.statusCode == 200){
                        alert("Succes register");
                    } else if(response.statusCode == 201){
                        alert("Error: Faild register");
                    }
                    
                }
            })
            
        }
    });
});