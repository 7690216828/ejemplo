<?php
namespace Controllers;
use MVC\Router;

class ProductoController{
    public static function index(Router $router){
        $saludo = "Informatica";
        $router->render('productos/index', [
            "saludo" => $saludo,
        ]);
    }
}
?>