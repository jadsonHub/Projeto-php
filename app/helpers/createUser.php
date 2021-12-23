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
        'p_nome' => filter_input(INPUT_POST, 'p_nome', FILTER_SANITIZE_STRING),
        's_nome' => filter_input(INPUT_POST, 's_nome', FILTER_SANITIZE_STRING),
        'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
        'login' => filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING),
        'senha' => filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING),
        'img_perfil' => salvarImagem('img_perfil')
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
    } else {




        foreach ($campos as $indice => $value) {
            $colunas = $colunas . $indice . ',';
            $valor = $valor . "'" . $value . "'" . ',';
        }

        $semVirgulaValor = rtrim($valor, ',');
        $semVirgulaColunas = rtrim($colunas, ',');





        $sql = "insert into user({$semVirgulaColunas})values({$semVirgulaValor});";
        executarSQL($sql);
        enviarEmail($campos['email'],'cadastro',mensagemEmail('cadastro'));
        return true;
    }
}
