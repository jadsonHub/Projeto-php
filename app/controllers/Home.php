<?php

namespace app\controllers;

class Home
{
   public static function index($parametros)
    {
        $users = all('user');
        // var_dump($users);
        // die();
       return [
           'view' => 'home.php',
           'dados' => ['title' => "Home", 'users' =>  $users,'estadoHome' => 'active']
       ];
      
    }
}
