<?php
    include 'dashboard.php';
        
    include 'DbConnection/DbConn.php';


    if (isset($_REQUEST['adminBtn'])) {
        // $dbConn = new DBConnection();
        // $conn = $dbConn->getConnection();
        

        $id = $_REQUEST['userId'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];
        $isAdmin = '1';

        $sql = $conn->prepare("UPDATE useri SET isAdmin=:isAdmin WHERE id=:id");

        $sql->execute(array(':id'=>$id, ':isAdmin'=>$isAdmin ));

        header("Location: dashboard.php");
    }

?>
    