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
            'dados' => ['title' => "Detalhes", 'user' =>  $user, 'estadoDetalhes' => 'active']
        ];
    }

    public static function login()
    {
        return [
            'view' => 'login.php',
            'dados' => ['title' => "Login", 'estadoLogin' => 'active']
        ];
    }

    public static function create()
    {
        return [
            'view' => 'create.php',
            'dados' => ['title' => "Criar conta", 'estadoCreate' => 'active']
        ];
    }
}
