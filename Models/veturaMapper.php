<?php
include_once 'DbConn.php';
include_once 'veturaModels.php';

class veturaMapper{
    private $vetura;
    private $connection;

    public function __construct($vetura)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->vetura=$vetura;
    }

    public function Insert(){
        $sql = "INSERT INTO vetura (marka,modeli,viti,motorri,kilometrat) values (:marka,:modeli,:viti,:motorri,:kilometrat)";

        $marka = $this->vetura->getMarka();
        $modeli = $this->vetura->getModeli();
        $viti = $this->vetura->getViti();
        $motorri = $this->vetura->getMotorri();
        $kilometrat = $this->vetura->getKilometrat();

        $statement = $this->connection->prepare($sql);

        $statement->bindParam(":marka",$marka);
        $statement->bindParam(":modeli",$modeli);
        $statement->bindParam(":viti",$viti);
        $statement->bindParam(":motorri",$motorri);
        $statement->bindParam(":kilometrat",$kilometrat);

        $statement->execute();
    }
}
?>