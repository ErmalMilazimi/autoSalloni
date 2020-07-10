<?php 
include_once '../Models/veturaMapper.php';
include_once '../Models/VeturaModels.php';

    class veturaController{
        public function insertVetura($marka, $modeli, $viti, $motorri, $kilometrat){

            $vetura = new Vetura($marka, $modeli, $viti, $motorri, $kilometrat);
            $veturaM = new veturaMapper($vetura);
            $veturaM->Insert(); 
            return true;
        }
    }
?>