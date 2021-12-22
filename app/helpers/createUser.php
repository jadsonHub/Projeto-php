<?php

function criarConta()
{
    $colunas = '';
    $valor = '';
    $nomesPostFormat = array(
        'login' => 'nome de usuário',
        's_nome' => 'sobrenome',
        'p_nome' => 'nome'
    );

    $error = array();

    $campos = array(
        'p_nome' => $_POST['p_nome'],
        's_nome' => $_POST['s_nome'],
        'email' => $_POST['email'],
        'login' => $_POST['login'],
        'senha' => $_POST['senha'],
        'img_perfil' => $_FILES['img_perfil']['tmp_name']
    );


    foreach ($campos as $indice => $value) {
        if (empty($campos[$indice])) {
            $error[$indice] = 'preencha este campo ' . $indice;
        }
    }

    $email = $campos['email'];
    $login = $campos['login'];

    $userEmail = executarSQL("select * from user where email = '$email';");
    $userLogin = executarSQL("select * from user where login = '$login';");

    if ($userLogin->login == $login) {

        $error['login_exsit'] = "Este login já esta em uso tente outro";
    }
    if ($userEmail->email == $email) {
        $error['email_exsits'] = "Este email já esta em uso tente outro";
    }


    if ($error) {

        foreach ($nomesPostFormat as $indice => $value) {
            if ($error[$indice]) {
                $error[$indice] = 'preencha o campo ' . $value;
            }
        }

        var_dump($error);
        die();
    } else {

        var_dump('lindooo');
        die();

        foreach ($campos as $indice => $value) {
            $colunas = $colunas . $indice . ',';
            $valor = $valor . "'" . $value . "'" . ',';
        }

        $semVirgulaValor = rtrim($valor, ',');
        $semVirgulaColunas = rtrim($colunas, ',');


        // $sql = "insert into user({$semVirgulaColunas})values({$semVirgulaValor});";
        // $rodei = executarSQL($sql);
        // var_dump($rodei);

    }
}
