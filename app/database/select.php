<?php 

function listarTodos($tabela){

    try{
        $conect = conect();

        $query = $conect->query("select * from {$tabela};");
        return $query->fetchAll();

    }catch(PDOException $e){
        var_dump($e->getMessage());
    }

}

function executarSQL($sql){

    try{
        $conect = conect();

        $query = $conect->query($sql);
        return $query->fetch();

    }catch(PDOException $e){
        var_dump($e->getMessage());
    }

}