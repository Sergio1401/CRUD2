<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "CRUD4";

    $conexion = new mysqli($host,$user,$pass,$db);

    if(!$conexion){
        echo 'conexion Fallida';
    }