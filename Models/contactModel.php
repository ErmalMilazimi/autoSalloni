<?php
class Contact
{
    private $emri;
    private $email;
    private $komenti;

    public function __construct($emri, $email, $komenti)
    {
        $this->emri = $emri;
        $this->email = $email;
        $this->komenti = $komenti;
    }

    public function getEmri()
    {
        return $this->emri;
    }
    public function getKomenti()
    {
        return $this->komenti;
    }
    public function getEmail()
    {
        return $this->email;
    }
}
