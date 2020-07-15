<?php
    include 'DbConnection/DbConn.php';

    if (isset($_REQUEST['deleteBtn'])) {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();


        $id = $_REQUEST['userId'];
        $sql = $conn->prepare("DELETE FROM useri WHERE id= :id");
            
        $sql->execute(['id' => $id]);
        

        header("Location: http://localhost:8012/AutoSalloniProjekt/dashboard.php");
    }

?>
    