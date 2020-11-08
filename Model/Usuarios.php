<?php
class Usuarios{
    # atributos 
    private $DB; // para la conexion de la base de datos
    public $id;
    public $nombres;
    public $direccion;
    public $usuario;
    public $pass;
    public $telefono;
    public $roles_id;

    public function __CONSTRUCT(){
        try{
            $this->DB = Database::Conexion();
        }catch(Throwable $t){
            die($t->getMessage());
        }
    }

    public function RegistrarUsuario($data){
        try{
            // Comando SQL
            $sql = "INSERT INTO usuarios(nombres, direccion, usuario, pass, telefono, roles_id) VALUES(?,?,?,?,?,?)";

            // COMENZAMOS LA CONEXION CON PDO
            $pre = $this->DB->prepare($sql);
            $resul = $pre->execute(array($data->nombres, $data->direccion, $data->usuario, $data->pass, $data->telefono, $data->roles_id));
            if($resul > 0){ 
                return true;
            }else{ 
                return false;
            }
        }catch(Throwable $t){
            die($t->getMessage());
        }
    }
    // Metodo para listar los roles
    public function ListarUsuarios(){
        try{        
            $commd = $this->DB->prepare("SELECT * FROM usuarios");
            $commd->execute();
            return $commd->fetchAll(PDO::FETCH_OBJ);
        }catch(Throwable $t){
            die($t->getMessage());
        }
    }

    // Metodo para obtener un registro en especifico
    public function obtenerRegistro($id){
        try{        
            $commd = $this->DB->prepare("SELECT * FROM roles_usuario WHERE id = ?");
            $commd->execute(array($id));
            return $commd->fetch(PDO::FETCH_OBJ);
        }catch(Throwable $t){
            die($t->getMessage());
        }
    }

    // Actualizar
    public function actualizarRol($data){
        try{
            // Comando SQL
            $sql = "UPDATE roles_usuario SET nombre = ?, descripcion = ? WHERE id = ?";

            // COMENZAMOS LA CONEXION CON PDO
            $pre = $this->DB->prepare($sql);
            $resul = $pre->execute(array($data->nombre, $data->descripcion, $data->id));
            if($resul > 0){ 
                return true;
            }else{ 
                return false;
            }
        }catch(Throwable $t){
            die($t->getMessage());
        }
    }
    // Borrar
    public function deleteRol($data){
        try{
            // Comando SQL
            $sql = "DELETE FROM roles_usuario  WHERE id = ?";
            // COMENZAMOS LA CONEXION CON PDO
            $pre = $this->DB->prepare($sql);
            $resul = $pre->execute(array($data->id));
            if($resul > 0){ 
                return true;
            }else{ 
                return false;
            }
        }catch(Throwable $t){
            die($t->getMessage());
        }
    }
    // Para los mensajes
    public function SesionesMessage($texto, $tipo){
        $_SESSION['texto'] = $texto;
        $_SESSION['tipo'] = $tipo;
        header("Location: ?view=Usuarios");
    }

}
?>