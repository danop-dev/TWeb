<?php

if(isset($_POST['register-input'])){
    $fname = $_POST['regFname'];
    $lname = $_POST['regLname'];
    $user = $_POST['regUsername'];
    $email = $_POST['regEmail'];
    $password = $_POST['regPassword'];    
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
            <p class="send_mess"> <?php echo "First Name: ".$_POST['regFname'] ?> </p>
            <p class="send_mess"> <?php echo "Last Name: ".$_POST['regLname'] ?> </p>
            <p class="send_mess"> <?php echo "Username: ".$_POST['regUsername'] ?> </p>
            <p class="send_mess"> <?php echo "Email: ".$_POST['regEmail'] ?> </p>
            <p class="send_mess"> <?php echo "Password: ".$_POST['regPassword'] ?> </p>
        </div>
    </header>
</body>
</html>