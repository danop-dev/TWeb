<?php
include 'validation.php';

if(isset($_POST['register-input'])){
    $fname = $_POST['regFname'];
    $lname = $_POST['regLname'];

    if(validName($fname) && validName($lname)){
        echo "*Invalid name format";
    } else {
        $name = $fname." ".$lname;
        echo $name;
    }

    $user = $_POST['regUsername'];
    if(validUser($user)){
        echo "*Invalid user format";  
    } else {
        echo $user;
    }

    $email = $_POST['regEmail'];
    if(validEmail($email)){
        echo "*Invalid email format";
    } else {
        echo $email;
    }

    $password = $_POST['regPassword'];
    $passwordCheck = $_POST['regPasswordCheck'];

    if(validPassword($password) && $password != $passwordCheck){
        echo "*Invalid password format";  
    } else {
        echo $password;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="../css/succes.css">
</head>
<body>
    <header class="header">
        <div class="box">
            <div class="box-header">
                <i class="fas fa-check"></i>
                <p>Succes Register</p>
            </div>

            <p class="send_mess"> 
                <?php 
                    $fname = $_POST['regFname'];
                    if(validName($fname)){
                        echo "First Name: ". $fname;
                    } else {
                        echo "*Invalid fname format";
                    }
                ?>
            </p>
            <p class="send_mess"> 
                <?php
                    $lname = $_POST['regLname'];
                    if(validName($fname)){
                        echo "First Name: ". $lname;
                    } else {
                        echo "*Invalid lname format";
                    }
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $user = $_POST['regUsername'];
                    if(validUser($user)){
                        echo "User: ". $user;
                    } else {
                        echo "*Invalid user format";
                    }
                    
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $email = $_POST['regEmail'];
                    if(validEmail($email)){
                        echo $email;
                    } else {
                        echo "*Invalid email format";
                    }
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $password = $_POST['regPassword'];
                    $passwordCheck = $_POST['regPasswordCheck'];

                    if(validPassword($password) && $password != $passwordCheck){
                        echo "*Invalid password format";  
                    } else {
                        echo $password;
                    }
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $checkbox = $_POST['autoAgree'];
                
                    if (!$checkbox) {
                        $checkbox = "*Invalid password format";
                    }
                    echo "Checkbox: ".$checkbox;
                ?> 
            </p>
        </div>
    </header>
</body>
</html>