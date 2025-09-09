<?php
# CRUD de categorias #
function listarCategorias()
{

    # Funcion para leer la informacion de la tabla de categorias

    $link = conectar();
    $sql = "SELECT idCategoria, catNombre FROM categorias";
    $resultado = mysqli_query($link, $sql);
    return $resultado;
}

function agregarCategorias()
{

    # Funcion para leer la informacion de la tabla de categorias

    $catNombre = $_POST['catNombre'];
    $link = conectar();
    $sql = "INSERT INTO `categorias`(`catNombre`) VALUES ('$catNombre')";
    $resultado = mysqli_query($link, $sql);
    return $resultado;
}

function modificarCategorias()
{

    # Funcion para leer la informacion de la tabla de categorias

    $idCategoria = $_POST['idCategoria'];
    $catNombre = $_POST['catNombre'];
    $link = conectar();
    $sql = "UPDATE categorias SET catNombre='$catNombre' WHERE idCategoria='$idCategoria'";
    $resultado = mysqli_query($link, $sql);
    return $resultado;
}

function eliminarCategorias()
{

    # Funcion para leer la informacion de la tabla de categorias

    $idCategoria = $_POST["idCategoria"];
    $link = conectar();
    $sql = "DELETE FROM categorias WHERE idCategoria='$idCategoria'";
    $resultado = mysqli_query($link, $sql);
    return $resultado;
}

function verCategoriaPorId()
{

    # Se lee la informacion por categoria, usando el id

    $idCategoria = $_GET["idCategoria"];
    $link = conectar();
    $sql = "SELECT idCategoria, catNombre from categorias WHERE idCategoria='$idCategoria'";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    $categoria = mysqli_fetch_assoc($resultado);
    return $categoria;
}

?>