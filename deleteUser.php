<?php
    include 'DbConnection/DbConn.php';

    if (isset($_REQUEST['deleteBtn'])) {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();


        $id = $_REQUEST['userId'];
        
        $type = gettype($id);

        if($type == 'integer'){
            if($sql = $conn->prepare("SELECT FROM useri WHERE id= :id")){
                $sql2 = $conn->prepare("DELETE FROM useri WHERE id= :id");
                $sql2->execute(['id' => $id]);
            }else{
                header("Location: http://localhost:8012/AutoSalloniProjekt/dashboard.php");
            }
        }
        

        header("Location: http://localhost:8012/AutoSalloniProjekt/dashboard.php");
    }

?>
    