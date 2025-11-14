<?php
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';

    $conexion = mysqli_connect()//colocar el nombre de la base de datos para hacer la conexion

    if (mysqli_connect_error()){ //evaluar si hay un error al conectarse a la base de datos
        exit('Ocurrio un error al intentar conectarse a la base de datos': . mysqli_connect_error());
    }
    if (!isset($_POST['loginNombre'], $_POST['loginClave'])){ //evaluar si se enviarion datos en los campos
        header('Location: login.html');
        exit;
    }
    if ($stmt = $conexion->prepare('SELECT usuNombre, usuPass FROM usuarios WHERE loginNombre = ?')){
        $stmt->bind_param('s', $_POST['loginNombre']);
        $stmt->execute();
        $stmt->store_result();

    $stmt->store_result(); //validar si lo que ingresa coincide con lo que hay en la base de datos
    if ($stmt->num_rows > 0){
        $stmt->bind_result($nombre, $clave);
        $stmt->fetch();
    }
    if ($_POST['loginClave'] === $clave){ //valida la contraseña
        //conexion exitosa
        session_regenerate_id();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $nombre;
        header('Location: ')//colocar la ubicacion para volver al inicio
        exit;
    }
    else{ //en caso de que el usuario sea incorrecto
        $class = 'alert alert';
        $mensaje = 'Nombre de usuario o contraseña incorrecto';
        header('Location: login.html');
        exit;
    }
    $stmt->close();
    }
    else{
        exit('Error en la consulta a la base de datos');
    }
?>