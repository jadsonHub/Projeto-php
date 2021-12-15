<?php

function conect(){
    return new PDO('mysql:host=localhost;dbname=users','root','123edu',[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
}