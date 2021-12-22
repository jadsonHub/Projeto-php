<?php

namespace app\controllers;

class Home
{
   public static function index($parametros)
    {
       $users = listarTodos('user');
       return [
           'view' => 'home.php',
           'dados' => ['title' => "Home", 'users' =>  $users,'estadoHome' => 'active']
       ];
      
    }
}
