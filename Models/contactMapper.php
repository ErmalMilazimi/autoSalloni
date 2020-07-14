<?php
include_once '../DbConnection/DbConn.php';
include_once 'contactModel.php';
class contactMapper
{
    private $contact;
    private $connection;
    public function __construct(Contact $contact)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->contact = $contact;
    }

    public function Insert($emri, $email, $komenti)
    {
        $sql = "INSERT INTO contactTable (emri,email,komenti) VALUES (:emri,:email,:komenti)";

        // $username = $this->contact->getEmri();
        // $email = $this->contact->getEmail();
        // $komenti = $this->contact->getKomenti();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":komenti", $komenti);

        $statement->execute();
    }
}
?>