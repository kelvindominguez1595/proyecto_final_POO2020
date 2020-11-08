<?php
// importamos nuestro modelo
require_once 'Model/Marcas.php';
class MarcasController{
    // para accender al modelo y sus atributos
    private $model;

    // Constructos
    public function __CONSTRUCT(){
        $this->model = new Marcas();
    }

   /** Inicio de llamado de la vistas */
    public function Index(){
        require_once 'views/header.php';
        require_once 'views/Marcas/index.php';
        require_once 'views/footer.php';
    }
    public function NuevoMarca(){
        require_once 'views/header.php';
        require_once 'views/Marcas/crear.php';
        require_once 'views/footer.php';
    }

    public function EditarMarcas(){
        // Capturamos el id enviado por get
        $id = $_REQUEST['id'];
        // crear el metodo para listar un dato especifico
        $data = $this->model->obtenerRegistro($id);
        require_once 'views/header.php';
        require_once 'views/Marcas/editar.php';
        require_once 'views/footer.php';
    }
    public function BorrarMarcas(){
        // Capturamos el id enviado por get
        $id = $_REQUEST['id'];
        require_once 'views/header.php';
        require_once 'views/Marcas/borrar.php';
        require_once 'views/footer.php';
    }
    /** Fin de llamado de la vistas */

    /** Metodos CRUD */
    
    
    public function CrearMarcas(){
        // capturo los valores enviados por post o get
        $this->model->nombre_marca = $_REQUEST['nombre_marca'] ;

        // utilizamos el metodo de guardar de SQL
        if($this->model->RegistrarMarca($this->model)){
            $texto = "Registro exitosamente";
            $tipo = "success";
            $this->model->SesionesMessage($texto, $tipo);
        }else{
            $texto = "Ocurrio un error";
            $tipo = "error";
            $this->model->SesionesMessage($texto, $tipo);
        }
    }

    public function ActualizarMarcas(){
        // capturo los valores enviados por post o get
        $this->model->id = $_REQUEST['id'];
        $this->model->nombre_marca = $_REQUEST['nombre_marca'] ;

        // utilizamos el metodo de guardar de SQL
        if($this->model->ActualizarMar($this->model)){
            $texto = "Actualizó exitosamente";
            $tipo = "success";
            $this->model->SesionesMessage($texto, $tipo);
        }else{
            $texto = "Ocurrio un error";
            $tipo = "error";
            $this->model->SesionesMessage($texto, $tipo);
        }
    }

    public function BorrarMarca(){
        // capturo los valores enviados por post o get
        $this->model->id = $_REQUEST['id'];
        // utilizamos el metodo de guardar de SQL
        if($this->model->BorrarMarc($this->model)){            
            $texto = "Registro borrado exitosamente";
            $tipo = "success";
            $this->model->SesionesMessage($texto, $tipo);
        }else{
            $texto = "Ocurrio un error ";
            $tipo = "error";
            $this->model->SesionesMessage($texto, $tipo);
        }
    }


}
?>