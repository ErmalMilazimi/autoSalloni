<?php 

    if(isset($_REQUEST['regSubmit']))
    {
        $check = validateReg($_REQUEST["usernameReg"],$_REQUEST["passwordReg"],$_REQUEST["emailReg"]);

        if($check){
            validateUser($_REQUEST["usernameReg"],$_REQUEST["passwordReg"],$_REQUEST["emailReg"]);
        }
        else{
            echo 'reg not successful';
        }
    }
    else
    {
        echo 'reg not successful';
    }

    function validateReg($username, $email, $password){
        if(empty($username)){
            return false;
        }
        else if(empty($email)){
            return false;
        }
        else if (empty($password)){
            return false;
        }

        return true;
    }

    function validateUser($username, $email, $password){
        $userArr = [$username, $email, $password];
    }

?>