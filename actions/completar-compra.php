<?php

require_once 'conexion.php';

$fecha = date_create($_POST['fechaEntrega']);
$hoy = date_create_immutable("now");

$difference = date_diff($hoy, $fecha);

var_dump($difference->invert);


if(isset($_SESSION["datos-combo"]) and isset($_POST) and ($difference->invert == 0) ){

    require_once 'conexionDb.php';

    //Escapar todos los datos del usuario y filtrarlos que cumplan las condiciones
    $usuarioCked = array_map(function($item){
        $db = mysqli_connect("localhost", "administrador", "administrador", "miahorro", 3308);

        $erroresUsuario = [];

        mysqli_real_escape_string($db, $item);

        if (!empty($item) and !preg_match('/[0-9]/', $item) and $item != 'on') {//returning strings such as nombre and apellido
            return $item;
        } else {
            $erroresUsuario['nombre-apellido-dir'] = "El campo llenado contiene números que lo hacen no válido";
        }

        if (!empty($item) and is_numeric($item)) {//returning string such as number
            return $item;
        } else {
            $erroresUsuario['celular'] = "El campo llenado no es un número celular válido";
        }

        if ($item == 'on') { //For the autoriza contacto wpp true or false
            return $item = 1;
        }

        if (filter_var($item, FILTER_VALIDATE_EMAIL)) { //string email
            return $item;
        } else {
            $erroresUsuario['email'] = "El campo llenado no es un email válido";
        }

        if(!empty($item) and is_string($item)){ //string direccion
            return $item;
        }

        if(count($erroresUsuario) >= 1){
            $_SESSION['errores-usuario'] = $erroresUsuario;
        }

    }, $_POST);

    if(!isset($usuarioCked['wpp'])){
        $usuarioCked['wpp'] = 0;
    }

    if($usuarioCked['fechaEntrega'] === null){
                $usuarioCked['fechaEntrega'] = 'DATE_ADD(CURDATE(), INTERVAL 1 DAY)';
        } else {
                $usuarioCked['fechaEntrega'] = "'".$usuarioCked['fechaEntrega']."'";
        }

    //Escapar los datos del pedido y que los filtre para que cumplan las condiciones

    $compraCked = array_map(function($item){
        $db = mysqli_connect("localhost", "administrador", "administrador", "miahorro", 3308);

        mysqli_real_escape_string($db, $item);

        if(is_string($item)){
            return $item;
        }

        if(is_numeric($item)){
            return $item;
        }


    }, $_SESSION['datos-combo']);

    if(isset($usuarioCked) and isset($compraCked)){

        //En caso de arrojar un resultado positivo porque si existen datos guardados con ese numero de compra,
        //se deberá realizar una nueva busqueda de un nuevo número de orden para realiza la nueva tarea

        do{
            $noCompra = rand(100000, 999999);

            $sqlQuery = "SELECT id, usuario_id AS 'Comprador', nombreCombo FROM pedidos WHERE numeroCompra = $noCompra;";

            $getNoCompraSql = mysqli_query($conexionDB, $sqlQuery);
        } while(mysqli_num_rows($getNoCompraSql) >= 1);

        // Ahora debemos realizar la inserción de los datos del usuario en la base de datos

        if($noCompra){

            $nombre = $usuarioCked['nombre'];
            $apellido = $usuarioCked['apellido'];
            $celular = $usuarioCked['celular'];
            $wpp = $usuarioCked['wpp'];
            $email = $usuarioCked['email'];
            $direccion = $usuarioCked['direccion'];
            $ciudad = $usuarioCked['ciudad'];

            //Se deberia realizar primero la consulta de si ya existe un id con ese usuario, basado en si existe,
            //se usa la informacion existente, si no existe, simplemente se inserta

            $sqlIdUsuarioReg = "SELECT id, nombre, apellidos FROM usuarios WHERE email = '$email'";
            $gettingIdUsuario = mysqli_query($conexionDB, $sqlIdUsuarioReg);

            if(mysqli_num_rows($gettingIdUsuario) >= 1){
                //Si existe el usuario relacionado, se actualiza la informacion del usuario

                $datos = mysqli_fetch_assoc($gettingIdUsuario);

                $sql_update = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellido', celular = '$celular', direccion = '$direccion', ciudad = '$ciudad' WHERE email = '$email';";
                $update_usuario = mysqli_query($conexionDB, $sql_update);

                $usuarioId = $datos['id'];

            } else {
              // Si no existe el email relacionado, se crea un nuevo usuario
                $usuarioInsSql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellido', '$celular', $wpp, '$email', '$direccion', '$ciudad');";
                $guardarNewUsuario = mysqli_query($conexionDB, $usuarioInsSql);

                var_dump(mysqli_refresh($conexionDB, MYSQLI_REFRESH_LOG));

                if($guardarNewUsuario) {
                    $sqlIdUsuarioReg = "SELECT id, nombre, apellidos FROM usuarios WHERE email = '$email'";
                    $gettingIdUsuario = mysqli_query($conexionDB, $sqlIdUsuarioReg);

                    $datosNewUsuario = mysqli_fetch_assoc($gettingIdUsuario);

                    $usuarioId = $datosNewUsuario['id'];
            }

            }

            $usuarioId;
            $nombreCombo = $compraCked['nombre-combo'];
            $productos = $compraCked['productos'];
            $noCompra;
            $fechaCompra = 'CURDATE()';
            $precio = $compraCked['costo'];
            $fechaLlegada = $usuarioCked['fechaEntrega'];


            $sqlCompra = "INSERT INTO pedidos VALUES (null, $usuarioId, '$nombreCombo', '$productos', '$noCompra', $fechaCompra, $precio, $fechaLlegada, 1, 'Pendiente');";
            $completarCompraDB = mysqli_query($conexionDB, $sqlCompra);

            if($completarCompraDB){

                $_SESSION['numero-orden'] = $noCompra;
                $_SESSION['confirmacion-compra'] = "La orden ha sido completada";
                header('Location: ../confirmacion.php');
            } else {
                echo mysqli_error($conexionDB);
            }
        } else {
            $errorCompra = "No hay un válido número de orden creado";
        }

    }
} else {

    if($difference->invert == 1){
        $_SESSION['error']['fecha'] = "La fecha de llegada agregada es menor al día actual";
        header('Location: ../formulario.php');
    }

    if(!isset($_SESSION["datos-combo"])){
        $_SESSION['error']['combo'] = "Falta información del combo para completar tu orden";
        header('Location: ../carrito.php');
    }

    if(!isset($_POST)){
        $_SESSION['error']['usuario'] = "Falta información del usuario para completar tu orden";
        header('Location: ../carrito.php');
    }
    
}
