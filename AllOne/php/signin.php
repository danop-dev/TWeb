<?php
include 'validation.php';
include 'conectbd.php';

if(isset($_POST["input_email"], $_POST['input_psw'])){
    $email = $_POST["input_email"]; 
    $password = $_POST['input_psw'];

    $error_input = true;

    if(!validEmail($email)){
        $error_input = false;
    }
    if(!validPassword($password)){
        $error_input = false;
    }

    if($error_input){
        $conbd = connect();
        $checkEmail = "SELECT email FROM users WHERE email='$email'";    
        
        $resultcheckEmail = $conbd -> query($checkEmail);
        
        if ($resultcheckEmail -> num_rows == 1){
            $checkPsw = "SELECT password FROM users WHERE email='$email'";
            $password = md5($password);

            if ($checkPsw == $password){
                echo json_encode(array('statusCode' => 200));
            } else{
                echo json_encode(array('statusCode' => 201));
            }

        } else {
            echo json_encode(array('statusCode' => 201));
        }
    } else {
        echo json_encode(array('statusCode' => 201));
    }
}
?>    
