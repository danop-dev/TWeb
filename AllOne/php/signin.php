<?php

if(isset($_POST['submit'])){
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "*Invalid email format";
    }
    
    $password = $_POST['password'];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    if (!$uppercase || !$lowercase || !$number || strlen($password) < 6) {
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
                <p>Succes</p>
            </div>
            <p class="send_mess"> 
                <?php 
                    $email = ($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $email = "*Invalid email format";
                    }
                    echo "Email: ".$email 
                ?> 
            </p>
            <p class="send_mess"> 
                <?php 
                    $password = $_POST['password'];
                
                    $uppercase = preg_match('@[A-Z]@', $password);
                    $lowercase = preg_match('@[a-z]@', $password);
                    $number    = preg_match('@[0-9]@', $password);

                    if (!$uppercase || !$lowercase || !$number || strlen($password) < 6) {
                        $password = "*Invalid password format";
                    }
                    echo "Password: ".$password
                ?> 
            </p>
        </div>
    </header>
</body>
</html>