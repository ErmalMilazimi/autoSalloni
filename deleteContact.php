<?php
    include 'DbConnection/DbConn.php';

    if (isset($_REQUEST['deleteBtn'])) {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();


        $emri = $_REQUEST['emri'];
        $sql = $conn->prepare("DELETE FROM contactTable WHERE emri= :emri");

        $sql->execute(['emri' => $emri]);

        header("Location: dashboard.php");
    }

?>
    