<?php
include_once 'DbConn.php';
include_once 'userModel.php';
class UserMapper
{
    private $useri;
    private $connection;
    public function __construct(User $useri)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->useri = $useri;
    }

    public function Insert($emri, $mbiemri, $email)
    {
        $sql = "INSERT INTO users (emri,mbiemri,email) VALUES (:emri,:mbiemri,:email)";

        $emri = $this->useri->getEmri();
        $mbiemri = $this->useri->getMbiemri();
        $phone = $this->useri->getEmail();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":mbiemri", $mbiemri);
        $statement->bindParam(":email", $email);

        $statement->execute();
    }

    // public function Update()
    // {
    //     // duhet te ndryshohet query dhe atributet qe pranohen
    //     $sql = "INSERT INTO Studenti (Firstname,lastname,phone) VALUES (:firstname,:lastname,:phone)";
    //     $statement = $this->connection->prepare($sql);

    //     $emri = $this->studenti->getFirstName();
    //     $mbiemri = $this->studenti->getLastName();
    //     $phone = $this->studenti->getPhone();

    //     $statement->bindParam(":firstname", $emri);
    //     $statement->bindParam(":lastname", $mbiemri);
    //     $statement->bindParam(":phone", $phone);

    //     $statement->execute();
    // }
}
