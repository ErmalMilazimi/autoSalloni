<?php 

    if(isset($_REQUEST['regSubmit']))
    {
        validateReg($_REQUEST["usernameReg"],$_REQUEST["passwordReg"],$_REQUEST["emailReg"]);
    }
    else
    {
        echo 'reg not successful';
    }

    function validateReg($username, $email, $password){
        echo 'reg successful';
    }

?>