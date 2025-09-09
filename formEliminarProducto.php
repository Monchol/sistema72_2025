<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';
include 'includes/header.php';

$idProducto = $_GET['idProducto'] ?? null;

if (!$idProducto) {
    echo "<div class='container mt-5 alert alert-danger'>No se especificó el producto a eliminar.</div>";
    exit;
}

$sql = "DELETE FROM productos WHERE idProducto = $idProducto";
$resultado = mysqli_query($link, $sql);

if ($resultado) {
    header("Location: productos.php?msg=Producto eliminado correctamente");
    exit;
} else {
    echo "<div class='container mt-5 alert alert-danger'>
            Error al eliminar el producto: " . mysqli_error($link) . "
          </div>";
}
?>