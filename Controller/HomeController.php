<<<<<<< HEAD
<?php
require_once 'Model/Productos.php';
require_once 'Model/Categorias.php';
class HomeController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Productos();
        $this->model = new Categorias();
    }



    public function Index(){
    require_once 'views/header.php';
    require_once 'views/home.php';
    require_once 'views/footer.php';
    }

    public function Home(){
    require_once 'views/frontend/header.php';
    require_once 'views/frontend/Home/index.php';
    require_once 'views/frontend/footer.php';
    }

    public function Shopping(){
    require_once 'views/frontend/header.php';
    require_once 'views/frontend/Shopping/index.php';
    require_once 'views/frontend/footer.php';
    }

    public function SingleProduct(){
    require_once 'views/frontend/header.php';
    require_once 'views/frontend/SingleProduct/index.php';
    require_once 'views/frontend/footer.php';
    }
    
    public function Contacto(){
    require_once 'views/frontend/header.php';
    require_once 'views/frontend/Contacto/index.php';
    require_once 'views/frontend/footer.php';
    }

}
?>
=======
<?php
require_once 'Model/Productos.php';

class HomeController{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Productos();
    }
       
    public function Index()
    {
        require_once 'views/header.php';
        require_once 'views/home.php';
        require_once 'views/footer.php';
    }

    public function Home()
    {
        require_once 'views/frontend/header.php';
        require_once 'views/frontend/Home/index.php';
        require_once 'views/frontend/footer.php';
    }

    public function Shopping()
    {
        require_once 'views/frontend/header.php';
        require_once 'views/frontend/Shopping/index.php';
        require_once 'views/frontend/footer.php';
    }

    public function SingleProduct()
    {
        require_once 'views/frontend/header.php';
        require_once 'views/frontend/SingleProduct/index.php';
        require_once 'views/frontend/footer.php';
    }

    public function Contacto()
    {
        require_once 'views/frontend/header.php';
        require_once 'views/frontend/Contacto/index.php';
        require_once 'views/frontend/footer.php';
    }
    public function  arboldeCategoriasLista ($parent = 0, $user_tree_array = '') 
    {
      include 'DB/Database.php';
      if (!is_array($user_tree_array))
      $user_tree_array = array();
   
      $sql = "SELECT `id_categoria`, `categoria`,  FROM `categorias` WHERE 1 AND `categoria` = $parent ORDER BY id_categoria ASC";
      $query = $connection->prepare($sql);
      $query->execute();
      $total = $query->rowCount();
   
      if ($total > 0) 
      {
        $user_tree_array[] = "<ul>";
        while ($row = $query->fetch(PDO::FETCH_OBJ)) 
        {
          $user_tree_array[] = "<li>". $row->categoria."</li>";
          $user_tree_array = arboldeCategoriasLista ($row->id_categoria, $user_tree_array);
        }
        $user_tree_array[] = "</ul>";
      }
      return $user_tree_array;
    }
}
   
>>>>>>> 3efc0b9 (Litado de productos de la nueva plantilla)
