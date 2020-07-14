<?php
include_once '../Controller/veturaController.php';

class VeturatView
{
    public function FillTableRowsWithVetura()
    {
        
        $controller = new veturaController();
        $controller->GetVeturaController();

        return $controller();
    }
}
?>