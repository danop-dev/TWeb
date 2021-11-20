<?php
include 'validation.php';


if(isset($_POST['submit'])){
    $email = ($_POST["email"]);
    if(validEmail($email)){
        echo $email;
    } else {
        echo "*Invalid email format";
    }
    
    $password = $_POST['password'];
    if(validPassword($password)){
        echo $password;
    } else {
        echo "*Invalid password format";
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
                <p>Succes</p>
            </div>
            <p class="send_mess"> 
                <?php 
                    $email = ($_POST["email"]);                   
                    if(validEmail($email)){
                        echo $email;
                    } else {
                        echo "*Invalid email format";
                    }
                    
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $password = $_POST['password'];
                    if(validPassword($password)){
                        echo $password;
                    } else {
                        echo "*Invalid password format";
                    }
                ?> 
            </p>           
        </div>
    </header>
</body>
</html>