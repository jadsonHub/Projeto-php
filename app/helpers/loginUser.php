<?php

function logarUser()
{
    $senha = filter_input(INPUT_POST, 'senhaLogin', FILTER_SANITIZE_STRING);
    $login = filter_input(INPUT_POST, 'usuarioLogin', FILTER_SANITIZE_STRING);
    $user = executarSQL("select login,senha from user where login  = '$login' and senha = '$senha';");
    if ($user->login === $login) {
        if ($user->senha === $senha) {
            return true;
        }
    }
  return false;
}
