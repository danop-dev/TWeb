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
        }
    });
});

