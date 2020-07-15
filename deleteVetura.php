<?php
    include 'DbConnection/DbConn.php';

    if (isset($_REQUEST['deleteBtn'])) {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();


        $id = $_REQUEST['veturaid'];
        $sql = $conn->prepare("DELETE FROM veturat WHERE id= :id");

        $sql->execute(['id' => $id]);

        header("Location: dashboard.php");
    }

?>
    