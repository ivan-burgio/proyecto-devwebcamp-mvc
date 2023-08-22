<?php

namespace Controllers;

use MVC\Router;

class PonentesController {

    public static function index(Router $router) {


        // Render a la vista 
        $router->render('admin/ponentes/index', [
            'titulo' => 'Ponentes / Conferencistas',
        ]);
    }

    public static function crear(Router $router) {
        $alertas = [];


        // Render a la vista 
        $router->render('admin/ponentes/crear', [
            'titulo' => 'Registrar Ponente',
            'alertas' => $alertas,
        ]);
    }
}