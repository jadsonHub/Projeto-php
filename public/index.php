<?php

require_once 'bootstrap.php';

try {

    $dados = Router();

    if(!isset($dados['dados'])){
        throw new Exception("O indice dados esta faltando");
    }
   

    if (!isset($dados['view'])) {
        throw new Exception("O indice view esta faltando");
    }
    if (!file_exists(VIEWS . $dados['view'])) {
        throw new Exception("A pagina " . $dados['view'] . "não existe!");
    }
    
    extract($dados['dados']);

    $view = $dados['view'];
    require_once VIEWS . 'master.php';
} catch (Exception $e) {
    var_dump($e->getMessage());
}
