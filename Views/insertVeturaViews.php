<?php

    include_once '../Controller/veturaController.php';

    if(isset($_REQUEST['postoVeturen'])){
        $marka=$_REQUEST['marka'];
        $modeli=$_REQUEST['modeli'];
        $viti=$_REQUEST['viti'];
        $motorri=$_REQUEST['motorri'];
        $kilometrat=$_REQUEST['kilometrat'];
        $view = new insertView();
        $view-> insertVetura($marka, $modeli, $viti, $motorri, $kilometrat);
    }

    class insertView{
        public function insertVetura($marka, $modeli, $viti, $motorri, $kilometrat){
            $controller = new veturaController();
            $response =$controller->insertVetura($marka, $modeli, $viti, $motorri, $kilometrat);
            
            if($response){
                ?>
                <h1>U regjistrua me sukses</h1>
                <?php
            }
            else{
                ?>
                <h1>Nuk u regjistrua me sukses</h1>
                <?php
            }
        }
    }
?>