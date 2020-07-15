<?php
    require '../DbConnection/DbConn.php';

    if(isset($_REQUEST['logSubmit']))
    {
        $check = validateLog($_REQUEST["usernameLog"],$_REQUEST["passwordLog"]);

        if($check){

            $user = validateUser($_REQUEST["usernameLog"],$_REQUEST["passwordLog"]);

            if($user){
                if(isAdmin($_REQUEST["usernameLog"],$_REQUEST["passwordLog"])){
                    header("Location: http://localhost:8012/AutoSalloniProjekt/dashboard.php");
                    exit();
                }
                else{
                    header("Location: http://localhost:8012/AutoSalloniProjekt/sukses.php");
                    exit();
                }
            }
            else{
                echo 'log not successful';
            }
            
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

        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = $conn->prepare("SELECT username,password FROM useri");

        $sql->execute();

        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
            if($result['username'] == $username and $result['password'] == $password){
                return  true;            
            }
        }
    }

    function isAdmin($username,$password){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = $conn->prepare("SELECT username,password,isAdmin FROM useri");

        $sql->execute();

        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
            if($result['username'] == $username and $result['password'] == $password){
                if($result['isAdmin'] == 1){
                    return true;
                }          
            }
        }
    }
?>