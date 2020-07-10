<?php 
    class Vetura{
        private $veturaID;
        private $marka;
        private $modeli;
        private $viti;
        private $motorri;
        private $kilometrat;

        public function __contruct($marka,$modeli,$viti,$motorri,$kilometrat){
            $this->marka = $marka;
            $this->modeli = $modeli;
            $this->viti = $viti;
            $this->motorri = $motorri;
            $this->kilometrat = $kilometrat;
        }

        public function getMarka(){
            return $this->marka;
        }

        public function getModeli(){
            return $this->modeli;
        }

        public function getViti(){
            return $this->viti;
        }

        public function getMotorri(){
            return $this->motorri;
        }

        public function getKilometrat(){
            return $this->kilometrat;
        }

        public function setMarka($marka){
            $this->marka = $marka;
        }
        
        public function setModeli($modeli){
            $this->modeli = $modeli;
        }

        public function setViti($viti){
            $this->viti = $viti;
        }

        public function setMotorri($motorri){
            $this->motorri = $motorri;
        }

        public function setKilometrat($kilometrat){
            $this->kilometrat = $kilometrat;
        }
    }
?>