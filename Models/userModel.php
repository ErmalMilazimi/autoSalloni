<?php
class User
{
    private $userID;
    private $emri;
    private $mbiemri;
    private $email;

    public function __construct($emri, $mbiemri, $email)
    {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
    }

    public function getEmri()
    {
        return $this->emri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmri($emri)
    {
        $this->emri = $emri;
    }
    public function setMbiemri($mbiemri)
    {
        $this->mbiemri = $mbiemri;
    }
}
