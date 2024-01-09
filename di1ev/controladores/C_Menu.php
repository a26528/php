<?php 
require_once 'controladores/Controlador.php';
require_once 'vistas/Vistas.php';
require_once 'modelos/M_Menu.php';

class C_Menu extends Controlador {
private $modelo;

public function __construct() {

    parent::__construct();
    $this->modelo = new M_Menu();
}
    public function mostrarMenu() {
   $menu= $this->modelo->showMenu();
   echo json_encode($menu);
}
}

?>