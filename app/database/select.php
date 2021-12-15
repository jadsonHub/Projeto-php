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

function buscar($tabela,$id){

    try{
        $conect = conect();

        $query = $conect->query("select * from {$tabela} where id_user = {$id};");
        return $query->fetch();

    }catch(PDOException $e){
        var_dump($e->getMessage());
    }

}