<?php 

function all($tabela){

    try{
        $conect = conect();

        $query = $conect->query("select from {$tabela};");
        return $query->fetchAll();

    }catch(PDOException $e){

    }
}