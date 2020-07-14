<?php
include_once '../DbConnection/DbConn.php';
include_once 'veturaModels.php';

class veturaMapper{
    private $vetura;
    private $connection;

    public function __construct(Vetura $vetura)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->vetura=$vetura;
    }

    public function Insert($marka,$modeli,$viti,$motorri,$kilometrat)
    {
        $sql = "INSERT INTO veturat (marka,modeli,viti,motorri,kilometrat) VALUES (:marka, :modeli, :viti, :motorri, :kilometrat)";

        // $marka = $this->vetura->getMarka();
        // $modeli = $this->vetura->getModeli();
        // $viti = $this->vetura->getViti();
        // $motorri = $this->vetura->getMotorri();
        // $kilometrat = $this->vetura->getKilometrat();

        $statement = $this->connection->prepare($sql);

        $statement->bindParam(":marka",$marka);
        $statement->bindParam(":modeli",$modeli);
        $statement->bindParam(":viti",$viti);
        $statement->bindParam(":motorri",$motorri);
        $statement->bindParam(":kilometrat",$kilometrat);

        $statement->execute();
    }

    public function GetVeturaMapper(){

        $sql = $this->connection->prepare("SELECT * FROM veturat");

        $sql->execute(); 

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    
}
?>