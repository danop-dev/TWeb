<?php
	// $to = "crayzeedan@gmail.com";
	// $subject = "titlu";
	// $message = "Mesajul in php\n\n";
	// $message .= "Emailul a fost transmis prin php";

    if(isset($_POST['subscribe'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $name = $fname." ".$lname;

        echo $name;
    }
    mail($email, $subject, $message);

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
                    mail($to, $subject, $message);
                    if ( mail($to, $subject, $message) )
                        echo 'Success!';
                    else
                        echo 'UNSUCCESSFUL...';
                ?>
            </h1>
        </div>
    </header>
</body>
</html>