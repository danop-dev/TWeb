$("#subscribe").click(function(e){
    e.preventDefault();
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
            } else if(response.statusCode == 201){
                alert("Error: Faild login");
            }

        }
    })
});

$("#register-input").click(function(e){
    e.preventDefault();
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
});