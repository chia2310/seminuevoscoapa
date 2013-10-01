<?php


function conectar(){
    $db = array(
        'user' => 'root',
        'pass' => '',
        'database' => 'seminuevos',
        'host' => 'localhost'
    );
    
    $conn = mysql_connect($db['host'],$db['user'],$db['pass']);
    mysql_select_db($db['database'],$conn);
    mysql_query("SET NAMES 'UTF8'");
    
    return $conn;
}

function conectar_mysqli(){
    $db = array(
        'user' => 'root',
        'pass' => '',
        'database' => 'seminuevos',
        'host' => 'localhost'
    );
    $conexion = new mysqli($db['host'], $db['user'], $db['pass'], $db['database']);

    if ($conexion->connect_error) {
        die("Error en la conexion : ".$conexion->connect_errno.
        "-".$conexion->connect_error);
    }
    return $conexion;
}

