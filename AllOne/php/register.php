<?php

if(isset($_POST['register-input'])){
    $fname = $_POST['regFname'];
    $lname = $_POST['regLname'];
    if (!preg_match ("/^[a-zA-z]*$/", $fname) ||  !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($fname <= 1) || strlen($lname <= 1)) {
        $nameErr = "*Invalid name format";
    }

    $user = $_POST['regUsername'];
    if (!preg_match ("/^[a-zA-z0-9]*$/", $user) || strlen($user) <= 6) {
        $userErr = "*Invalid user format";
    }

    $email = $_POST['regEmail'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "*Invalid email format";
    }

    
    $password = $_POST['regPassword'];
    $passwordCheck = $_POST['regPasswordCheck'];

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    if (!$uppercase || !$lowercase || !$number || strlen($password) < 6 || $password != $passwordCheck) {
        $passwordErr = "*Invalid password format";
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
                    $lname = $_POST['regLname'];
                    if (!preg_match ("/^[a-zA-z]*$/", $fname) || strlen($fname < 2)) {
                        $fname = "*Invalid First Name format";
                    }
                    echo "First Name: ".$fname;
                ?> 
            </p>
            <p class="send_mess"> 
                <?php
                    $lname = $_POST['regLname'];
                    if (!preg_match ("/^[a-zA-z]*$/", $lname) || strlen($lname < 2)) {
                        $lname = "*Invalid Last Name format";
                    }
                    echo "Last Name: ".$lname;
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $user = $_POST['regUsername'];
                    if (!preg_match ("/^[a-zA-z0-9]*$/", $user) || strlen($user <= 6)) {
                        $user = "*Invalid user format";
                    }
                    echo "Username: ".$user;
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $email = $_POST['regEmail'];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $email = "Invalid email format";
                    }
                    echo "Email: ".$email; 
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $password = $_POST['regPassword'];
                    $passwordCheck = $_POST['regPasswordCheck'];

                    $uppercase = preg_match('@[A-Z]@', $password);
                    $lowercase = preg_match('@[a-z]@', $password);
                    $number    = preg_match('@[0-9]@', $password);
                
                    if (!$uppercase || !$lowercase || !$number || strlen($password) < 6 || $password != $passwordCheck) {
                        $password = "*Invalid password format";
                    }
                    echo "Password: ".$password;
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