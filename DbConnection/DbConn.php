<?php 
class DBConnection
{
    private $servername='DESKTOP-CDM4S9H\SQLEXPRESS';
    private $user='ermal';
    private $pass='ermal';
    private $databaseName='AutoSalloni';

    public function getConnection()
    {
        try {
            $connection = new PDO("sqlsrv:Server=$this->servername;Database=$this->databaseName", $this->user, $this->pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return null;
        }
        return $connection;
    }
}

?>