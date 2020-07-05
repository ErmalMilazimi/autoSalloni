<?php

    if(isset($_REQUEST['logSubmit']))
    {
        validateLog($_REQUEST["usernameLog"],$_REQUEST["passwordLog"]);
    }
    else
    {
        echo 'login not successful';
    }

    function validateLog($username,$password){
        echo 'login successful';
    }

?>