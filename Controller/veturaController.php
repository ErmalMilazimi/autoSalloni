<?php 
include_once '../Models/veturaMapper.php';
include_once '../Models/VeturaModels.php';

    class veturaController{
        public function insertVeturaController($marka, $modeli, $viti, $motorri, $kilometrat){

            $vetura = new Vetura($marka, $modeli, $viti, $motorri, $kilometrat);
            $veturaM = new veturaMapper($vetura);
            $veturaM->Insert($marka,$modeli,$viti,$motorri,$kilometrat); 
            return true;
        }
    
        public function GetVeturaController()
        {
            $veturat = new VeturaMapper();
            $veturat->GetVeturaMapper();

            return $veturat;
        }
    
    }
?>