<?php


namespace app\controllers;

class User
{
    public static function show($parametros)
    {
        $user = buscar('user', $parametros['user']);

        if (!$user or !$parametros['user']) {
            return redirecionarPara('/');
        }


        return [
            'view' => 'detalhes.php',
            'dados' => ['title' => "Detalhes", 'user' =>  $user]
        ];
    }

    public static function login()
    {
        
    }
}
