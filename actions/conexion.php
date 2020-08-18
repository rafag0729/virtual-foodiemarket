<?php

session_start();

//HELPFUL FUNCTIONS

function borrarErroresSession(){
    session_unset();
}

function errorConfirmation() {
    if(!isset($_SESSION['confirmacion-compra'])){
        $_SESSION['errores']['no-order-confirmation'] = "No hay una orden confirmada para completar tu compra, por favor construye un nuevo carrito";
        header('Location: index.php');
    }
}

?>