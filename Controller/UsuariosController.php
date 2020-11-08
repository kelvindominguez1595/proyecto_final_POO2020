<?php
// importamos nuestro modelo
require_once 'Model/Usuarios.php';
class UsuariosController{
    // para accender al modelo y sus atributos
    private $model;

    // Constructos
    public function __CONSTRUCT(){
        $this->model = new Usuarios();
    }

   /** Inicio de llamado de la vistas */
    public function Index(){
        require_once 'views/header.php';
        require_once 'views/usuarios/index.php';
        require_once 'views/footer.php';
    }
    public function NuevoUsuarios(){
        require_once 'views/header.php';
        require_once 'views/usuarios/crear.php';
        require_once 'views/footer.php';
    }

    public function EditarUsuarios(){
        // Capturamos el id enviado por get
        $id = $_REQUEST['id'];
        // crear el metodo para listar un dato especifico
        $data = $this->model->obtenerRegistro($id);
        require_once 'views/header.php';
        require_once 'views/usuarios/editar.php';
        require_once 'views/footer.php';
    }
    public function BorrarUsuarios(){
        // Capturamos el id enviado por get
        $id = $_REQUEST['id'];
        require_once 'views/header.php';
        require_once 'views/usuarios/borrar.php';
        require_once 'views/footer.php';
    }
    /** Fin de llamado de la vistas */

    /** Metodos CRUD */
    
    
    public function CrearUsuario(){
        // capturo los valores enviados por post o get
        $this->model->nombres  =$_REQUEST['nombres'];
        $this->model->direccion = $_REQUEST['direccion'];
        $this->model->usuario = $_REQUEST['usuario'];
        $this->model->pass = $_REQUEST['pass'];
        $this->model->telefono = $_REQUEST['telefono'];
        $this->model->roles_id = $_REQUEST['roles_id'];
        
        // utilizamos el metodo de guardar de SQL
        if($this->model->RegistrarUsuario($this->model)){
            $texto = "Registro exitosamente";
            $tipo = "success";
            $this->model->SesionesMessage($texto, $tipo);
        }else{
            $texto = "Ocurrio un error";
            $tipo = "error";
            $this->model->SesionesMessage($texto, $tipo);
        }
    }

    public function ActualizarUsuario(){
        // capturo los valores enviados por post o get
        $this->model->id = $_REQUEST['id'];
        $this->model->nombres  =$_REQUEST['nombres'];
        $this->model->direccion = $_REQUEST['direccion'];
        $this->model->usuario = $_REQUEST['usuario'];
        $this->model->pass = $_REQUEST['pass'];
        $this->model->telefono = $_REQUEST['telefono'];
        $this->model->roles_id = $_REQUEST['roles_id'];
        
        // utilizamos el metodo de guardar de SQL
        if($this->model->actualizarUsuario($this->model)){
            $texto = "Actualizó exitosamente";
            $tipo = "success";
            $this->model->SesionesMessage($texto, $tipo);
        }else{
            $texto = "Ocurrio un error";
            $tipo = "error";
            $this->model->SesionesMessage($texto, $tipo);
        }
    }

    public function BorrarUsuario(){
        // capturo los valores enviados por post o get
        $this->model->id = $_REQUEST['id'];
        // utilizamos el metodo de guardar de SQL
        if($this->model->BorrarUsuarios($this->model)){            
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