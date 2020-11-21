<?php
require_once 'Model/Usuarios.php';
class HomeController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Usuarios();
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
}
?>