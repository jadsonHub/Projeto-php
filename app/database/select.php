<?php 

function all($tabela){

    try{
        $conect = conect();

        $query = $conect->query("select * from {$tabela};");
        return $query->fetchAll();

    }catch(PDOException $e){
        var_dump($e->getMessage());
    }

}

function buscar($tabela,$coluna,$valor){

    try{
        $conect = conect();

        $query = $conect->query("select * from " . $tabela . " where " . $coluna . " = ". $valor .';');
        return $query->fetch();

    }catch(PDOException $e){
        var_dump($e->getMessage());
    }

}