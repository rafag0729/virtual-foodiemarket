<?php

// CONEXION BASE DE DATOS

$servidor = "localhost";
$usuario = "administrador";
$password = "administrador";
$db = "miahorro";
$puerto = 3308;

$conexionDB = mysqli_connect($servidor, $usuario, $password, $db, $puerto);

if($conexionDB){
    
    echo "Yes, there is a conexion to the DB </br>";
    mysqli_set_charset($conexionDB, "utf8");

    
} else {
    printf('Connect Error Number: ' . mysqli_connect_errno());
    echo "Connect error: " . mysqli_connect_error();
}

?>