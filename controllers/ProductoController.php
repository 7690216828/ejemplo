<?php
namespace Controllers;
use MVC\Router;

class ProductoController{
    public static function index(Router $router){
        $saludo = "Hola Mundo";
        $router->render('productos/index', [
            "saludo" => $saludo,
        ]);
    }
}
?>