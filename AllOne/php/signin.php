<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
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
            <p class="send_mess"> <?php echo "Email: ".$_POST['email'] ?> </p>
            <p class="send_mess"> <?php echo "Password: ".$_POST['password'] ?> </p>
        </div>
    </header>
</body>
</html>