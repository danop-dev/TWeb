<?php
include 'validation.php';
include 'conectbd.php';

if(isset($_POST["reg_fname"], $_POST['reg_lname'], $_POST["reg_username"], $_POST["reg_email"], $_POST["reg_psw"], $_POST["reg_pswCheck"])){

    $fname = $_POST['reg_fname'];
    $lname = $_POST['reg_lname'];
    $user = $_POST['reg_username'];
    $email = $_POST['reg_email'];
    $password = $_POST['reg_psw'];
    $passwordCheck = $_POST['reg_pswCheck'];


    $error_input = true;
    if(!(validName($fname) && validName($lname))){
        $error_input = false;
    }
    if(!validUser($user)){
        $error_input = false; 
    }
    if(!validEmail($email)){
        $error_input = false;
    }
    if(validPassword($password) && $password != $passwordCheck){
        $error_input = false;
    }

    if($error_input){
        $conbd = connect();
        $checkEmail = "SELECT email FROM users WHERE email='$email'";

        $resultcheckEmail = $conbd -> query($checkEmail);
        
        if ($resultcheckEmail -> num_rows == 0){
            $password = md5($password);
            $insert_sql = "INSERT INTO users(fname, lname, username, email, password) VALUES('$fname', '$lname', '$user', '$email', '$password')";
            mysqli_query($conbd, $insert_sql);
            echo json_encode(array('statusCode' => 200));
        } else {
            echo json_encode(array('statusCode' => 201));
        }  
    } else{
        echo json_encode(array('statusCode' => 201));
    }
}
?>