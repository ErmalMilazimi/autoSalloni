<?php 
include_once '../Models/veturaMapper.php';
include_once '../Models/VeturaModels.php';

    class veturaController{
        public function insertVeturaController($marka, $modeli, $viti, $motorri, $kilometrat,$img){

            $vetura = new Vetura($marka, $modeli, $viti, $motorri, $kilometrat,$img);
            $veturaM = new veturaMapper($vetura);
            $veturaM->Insert($marka,$modeli,$viti,$motorri,$kilometrat,$img); 
            return true;
        }
    
        
    
    }
?>