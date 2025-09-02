<?php 
### CRUD de Marcas (Create Read Update Delete) ###
function listarMarcas(){

    # Funcion para leer la informacion de la tabla de marcas
    
    $link=conectar();
    $sql="SELECT idMarca, mkNombre FROM marcas";
    $resultado=mysqli_query($link, $sql);
    return $resultado;
}

function agregarMarca(){

    #Funcion para agregar marcas a nuestra tabla con el INSERT statement de SQL

    $mkNombre=$_POST["mkNombre"];
    $link=conectar();
    $sql="INSERT INTO marcas (mknombre) VALUES '$mkNombre'";
    $resultado=mysqli_query($link,$sql);
    return $resultado;
}

function modificarMarca(){

    # Funcion para modificar marca utilizando el id de la misma y la sentencia UPDATE de SQL

    $idMarca=$_POST["idMarca"];
    $mkNombre=$_POST["mkNombre"];
    $link=conectar();
    $sql="UPDATE marcas SET mkNombre='$mkNombre' WHERE idMarca='$idMarca'";
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}

function eliminarMarca(){

    # Funcion para eliminar marcas con la sentencia DELETE usando el id de marca

    $idMarca=$_POST["idMarca"];
    $link=conectar();
    $sql="DELETE FROM marcas WHERE idMarca='$idMarca'";
    $resultado=mysqli_query($link,$sql);
    return $resultado;
}

function verMarcaPorId(){

    # Se lee la informacion por marca, usando el id

    $idMarca=$_GET["idMarca"];
    $link=conectar();
    $sql="SELECT idMarca, mkNombre from marcas WHERE idMarca='$idMarca'";
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    $marca=mysqli_fetch_assoc($resultado);
    return $marca;
}


?>
