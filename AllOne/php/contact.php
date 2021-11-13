<?php
	// $to = "crayzeedan@gmail.com";
	//$subject = "titlu";
	// $message = "Mesajul in php\n\n";
	// $message .= "Emailul a fost transmis prin php";

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
    }
    if (!preg_match ("/^[a-zA-z]*$/", $fname) ||  !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($fname < 1) || strlen($lname < 1)) {
        $nameErr = true;
    } else {
        $nameErr = false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = true;
    } else {
        $emailErr = false;
    }

    if (strlen($message > 2)) {
        $messageErr = true;
    } else {
        $messageErr = false;
    }

    if(!$nameErr){
        $name = $fname." ".$lname;
        $subject = $name;
    }

    if(!($nameErr && $emailErr && $messageErr)){
        mail($email, $subject, $message);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="../css/succes.css">
</head>
<body>
    <header class="header">
        <div class="box">
            <h1>
                <?php

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    if (!preg_match ("/^[a-zA-z]*$/", $fname) ||  !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($fname > 1) || strlen($lname > 1)) {
                        $nameErr = true;
                    } else {
                        $nameErr = false;
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = true;
                    } else {
                        $emailErr = false;
                    }
                
                    if (strlen($message > 2)) {
                        $messageErr = true;
                    } else {
                        $messageErr = false;
                    }
                
                    if($nameErr = false){
                        $name = $fname." ".$lname;
                    }
                    $subject = $name;
                
                    if(!($nameErr && $emailErr && $messageErr)){
                        mail($email, $subject, $message);
                        if ( mail($email, $subject, $message) )
                            echo 'Success!';
                        else
                            echo 'UNSUCCESSFUL...';
                    } else{
                        echo 'UNSUCCESSFUL...';
                    }
                ?>
            </h1>
        </div>
    </header>
</body>
</html>