<?php

    require_once 'conexion.php';
    
    $products = array_filter($_POST, function($data){
                    if(strpos($data, "art") === 0){
                        return $data;
                    }
                }, ARRAY_FILTER_USE_KEY);
    
    if(isset($_POST["nameCombo"]) and isset($_POST["costo"]) and count($products) >= 5){
        
        $_SESSION["datos-combo"] = array(
            "nombre-combo" => $_POST["nameCombo"],
            "productos" => implode(", ", $products),
            "costo" => intval($_POST["costo"])
        );
     
        header('Location: ../formulario.php');
        
    } else {
        
        $_SESSION["error-cart"] = "Este carrito no contiene todos los elementos necesario, por favor construya uno nuevo";
        header('Location: ../carrito.php');
    }
    
                
?>