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
        $sql = "INSERT INTO AutoSalloni (marka,modeli,viti,motorri,kilometrat) values (:marka,:modeli,:viti,:motorri,:kilometrat)";

        $statement = $this->connection->prepare($sql);

        $statement->bindParam(":marka",$vetura->getMarka());
        $statement->bindParam(":modeli",$vetura->getModeli());
        $statement->bindParam(":viti",$vetura->getViti());
        $statement->bindParam(":motorri",$vetura->getMotorri());
        $statement->bindParam(":kilometrat",$vetura->getKilometrat());

        $statement->execute();
    }
}
?>