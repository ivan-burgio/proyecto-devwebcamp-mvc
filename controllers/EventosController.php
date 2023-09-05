<?php

namespace Controllers;

use MVC\Router;
use Model\Categoria;

class EventosController {

    public static function index(Router $router) {
        if(!is_admin()) {
            header('Location: /login');
        }


        // Render a la vista 
        $router->render('admin/eventos/index', [
            'titulo' => 'Conferencias y Workshops',
        ]);
    }

    public static function crear(Router $router) {
        if(!is_admin()) {
            header('Location: /login');
        }

        $alertas = [];

        $categorias = Categoria::all();

        // Render a la vista 
        $router->render('admin/eventos/crear', [
            'titulo' => 'Registrar Evento',
            'alertas' => $alertas,
            'categorias' => $categorias,
        ]);
    }
}