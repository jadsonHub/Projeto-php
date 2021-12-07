<?php

function loaderController($uriFixa, $parametros)
{


    [$controller, $metodo] = explode('@', array_values($uriFixa)[0]);
    $controllerNome = CONTROLLER . $controller;

   

        if(!class_exists($controllerNome)){
               throw new Exception("Controller {$controller} não existe!");
        }
        $controllerIntancia = new $controllerNome;

        if(!method_exists($controllerIntancia,$metodo)){
            throw new Exception("O metodo {$metodo} não existe no controller {$controller}!");
        }

       return $controllerIntancia->$metodo($parametros);
}
