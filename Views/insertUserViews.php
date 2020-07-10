<?php
include_once '../Controller/userController.php';
if (isset($_REQUEST['regSubmit'])) {
    $emri = $_REQUEST['usernameReg'];
    $mbiemri = $_REQUEST['passwordReg'];
    $email = $_REQUEST['emailReg'];
    $view = new InsertView();
    $view->insertUser($emri, $mbiemri, $email);
}

class InsertView
{
    public function insertUser($emri, $mbiemri, $email)
    {
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $response = $controller->InsertUser($emri, $mbiemri, $email);

        if ($response) {
?>
            <h1>U regjistrua me sukses</h1>
        <?php

        } else {
        ?>
            <h1>Nuk u regjistrua me sukses</h1>
<?php
        }
    }
}
