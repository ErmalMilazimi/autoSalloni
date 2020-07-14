<?php
include_once '../Controller/contactController.php';
if (isset($_REQUEST['submitCtc'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $komenti = $_REQUEST['komenti'];
    $view = new InsertView();
    $view->insertContact($name, $email, $komenti);
}

class InsertView
{
    public function insertContact($name, $email, $komenti)
    {
        $controller = new ContactController();
        $response = $controller->insertCtc($name, $email, $komenti);

        if ($response) {
            // header("Location: http://localhost:8012/AutoSalloniProjekt/index.php");
            // exit();
            ?>
            <h1>Kontakti u krye</h1>
<?php

        } else {
        ?>
            <h1>Nuk u regjistrua me sukses</h1>
<?php
        }
    }
}
