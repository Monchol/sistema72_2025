<?php
    #CRUD de usuarios #

    function listarUsuarios(){
        $link=conectar();
        $sql="SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuEstado FROM usuarios";
        $resultado=mysqli_query($link,$sql);
        return $resultado;
    }

    function agregarUsuario(){
        $usuNombre=$_POST["usuNombre"];
        $usuApellido=$_POST["usuApellido"];
        $usuEmail=$_POST["usuEmail"];
        $usuPass=$_POST["usuPass"];

        $link = conectar();
        $sql="INSERT INTO usuarios VALUES (DEFAULT,'$usuNombre','$usuApellido','$usuEmail','$usuPass',1)";
        $resultado=mysqli_query($link, $sql) or die(mysqli_error($link));
        return $resultado;
        
    }

    function modificarUsuario(){
        $usuNombre=$_POST["usuNombre"];
        $usuApellido=$_POST["usuApellido"];
        $usuEmail=$_POST["usuEmail"];
        $usuPass=$_POST["usuPass"];
        $idUsuario=$_POST["idUsuario"];
        $usuEstado=$_POST["usuEstado"];
        $link = conectar();
        $sql="UPDATE `usuarios` SET `usuNombre`='$usuNombre',`usuApellido`='$usuApellido',`usuEmail`='$usuEmail',`usuPass`='$usuPass',`usuEstado`='$usuEstado' WHERE `idUsuario`='$idUsuario' ";
        $resultado=mysqli_query($link, $sql) or die(mysqli_error($link));
        return $resultado;
    }

    function eliminarUsuario(){

        # Funcion para eliminar marcas con la sentencia DELETE usando el id de marca
    
        $idUsuario=$_POST["idUsuario"];
        $link=conectar();
        $sql="DELETE FROM usuarios WHERE idUsuario='$idUsuario'";
        $resultado=mysqli_query($link,$sql);
        return $resultado;
    }

    function verUsuarioPorId(){

        # Se lee la informacion por marca, usando el id
    
        $idUsuario=$_GET["idUsuario"];
        $link=conectar();
        $sql="SELECT `idUsuario`, `usuNombre`, `usuApellido`, `usuEmail`, `usuPass` FROM `usuarios` WHERE `idUsuario`='$idUsuario'";
        $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
        $marca=mysqli_fetch_assoc($resultado);
        return $marca;
    }


?>