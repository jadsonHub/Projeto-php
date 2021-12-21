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

    //rota post
    public static function logar(){
        $senha = $_POST['senhaLogin'];
        $login = $_POST['usuarioLogin'];
        

    }

    public static function create()
    {
        return [
            'view' => 'create.php',
            'dados' => ['title' => "Criar conta", 'estadoCreate' => 'active']
        ];
    }

    public static function update()
    {
        return [
            'view' => 'create.php',
            'dados' => ['title' => "Atualizar dados"]
        ];
    }

    public static function recuperarConta()
    {

        if (self::validarEmail() === 1) {
            return [
                'view' => 'recuperar.php',
                'dados' => ['title' => "Recuperar conta", 'validado' => 1]
            ];
        }

        if (self::validarToken() === 2) {
            return [
                'view' => 'recuperar.php',
                'dados' => ['title' => "Recuperar conta", 'validado' => 2]
            ];
        }
        
            return [
                'view' => 'recuperar.php',
                'dados' => ['title' => "Recuperar conta", 'validado' => 0]
            ];
        
    }

    private static function validarEmail()
    {

        if ($_POST['email_rec'] === 'jadson@gmail.com') {
            return 2;
        }
        return 1;
    }

    private static function validarToken()
    {

        if ($_POST['token_rec'] === 'jhdhdsad') {
            return 2;
        }
        return 2;
    }
}
