<?php

    include_once '../Controller/veturaController.php';

    if(isset($_REQUEST['postoVeturen'])){
        $marka=$_REQUEST['marka'];
        $modeli=$_REQUEST['modeli'];
        $viti=$_REQUEST['viti'];
        $motorri=$_REQUEST['motorri'];
        $kilometrat=$_REQUEST['kilometrat'];
        $img=$_REQUEST['images'];
        $view = new insertView();
        $view-> insertVetura($marka, $modeli, $viti, $motorri, $kilometrat,$img);
    }

    class insertView{
        public function insertVetura($marka, $modeli, $viti, $motorri, $kilometrat,$img){
            $controller = new veturaController();
            $response =$controller->insertVeturaController($marka, $modeli, $viti, $motorri, $kilometrat,$img);
            
            if($response){
                header("Location: http://localhost:8012/AutoSalloniProjekt/veturat.php");
                exit();
            }
            else{
                ?>
                <h1>Nuk u regjistrua me sukses</h1>
                <?php
            }
        }
    }
?>