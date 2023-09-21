<?php

namespace Controllers;

use MVC\Router;

class RegistroController {
    public static function crear(Router $router) {



        // Render a la vista 
        $router->render('registro/crear', [
            'titulo' => 'Finalizar Registro',
        ]);
    }

}