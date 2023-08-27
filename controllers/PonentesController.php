<?php

namespace Controllers;

use MVC\Router;
use Model\Ponente;

class PonentesController {

    public static function index(Router $router) {


        // Render a la vista 
        $router->render('admin/ponentes/index', [
            'titulo' => 'Ponentes / Conferencistas',
        ]);
    }

    public static function crear(Router $router) {
        $alertas = [];
        $ponente = new Ponente;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponente->sincronizar($_POST);

            // Validar
            $alertas = $ponente->validar();
        }

        // Render a la vista 
        $router->render('admin/ponentes/crear', [
            'titulo' => 'Registrar Ponente',
            'alertas' => $alertas,
            'ponente' => $ponente,
        ]);
    }
}