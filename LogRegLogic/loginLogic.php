<?php

    if(isset($_REQUEST['logSubmit']))
    {
        $check = validateLog($_REQUEST["usernameLog"],$_REQUEST["passwordLog"]);

        if($check){
            validateUser($_REQUEST["usernameLog"],$_REQUEST["passwordLog"]);
        }
        else{
            echo 'log not successful';
        }
    }
    else
    {
        echo 'login not successful';
    }

    function validateLog($username,$password){
        if(empty($username)){
            return false;
        }
        else if (empty($password)){
            return false;
        }

        return true;
    }

    function validateUser($username, $password){
        $userArr = [$username, $password];
    }
?>