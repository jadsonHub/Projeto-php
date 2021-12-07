<?php

namespace app\controllers;

class Home
{
   public static function index($parametros)
    {
        $users = all('user');
       return [
           'view' => 'home.php',
           'dados' => ['title' => "Home"]
       ];
      
    }
}
