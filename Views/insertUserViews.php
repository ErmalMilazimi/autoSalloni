<?php
include_once '../Controller/userController.php';
if (isset($_REQUEST['regSubmit'])) {
    $username = $_REQUEST['usernameReg'];
    $password = $_REQUEST['passwordReg'];
    $email = $_REQUEST['emailReg'];
    $view = new InsertView();
    $view->insertUser($username, $password, $email);


    $sql = "INSERT INTO veturat (marka,modeli,viti,motorri,kilometrat,img) VALUES ( :marka, :modeli, :viti, :motorri, :kilometrat)";
}

class InsertView
{
    public function insertUser($username, $password, $email)
    {
        $controller = new UserController();
        $response = $controller->InsertUser($username, $password, $email);

        if ($response) {
            header("Location: http://localhost:8012/AutoSalloniProjekt/sukses.php");
            exit();

        } else {
        ?>
            <h1>Nuk u regjistrua me sukses</h1>
<?php
        }
    }
}
