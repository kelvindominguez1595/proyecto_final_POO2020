<?php
require_once 'Model/Ventas.php';
class VentaController{

    private $model;

    public function __construct()
    {
        $this->model = new Ventas();
    }

    // metodo para agregar y quitar productos del carrito de compras
    public function shopping_cart(){
        if(isset($_REQUEST['btnAction'])){
            $opcion = $_REQUEST['btnAction'];
            switch($opcion){
                case 'Add':
                break;
                case 'Remove':
                break;
            }
        }
    }
} 
?>