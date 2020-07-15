<?php
    include 'DbConnection/DbConn.php';

    if (isset($_REQUEST['adminBtn'])) {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        

        $id = $_REQUEST['userId'];

        $admin = 2;

        $sql = $conn->prepare("UPDATE useri SET isAdmin=:admin WHERE id=:id");

        // $sql->bindParam('isAdmin', $admin);

        $sql->execute(array("id"=>$id ,"isAdmin"=>$admin));

        header("Location: dashboard.php");
    }

?>
    