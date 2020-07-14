<?php
include_once '../Models/contactMapper.php';
include_once '../Models/contactModel.php';
class contactController
{
    public function insertCtc($name, $email, $komenti)
    {
        $contact = new Contact($name, $email, $komenti);
        $contactMapper = new contactMapper($contact);
        $contactMapper->Insert($name, $email, $komenti);
        return true;
    }

}
