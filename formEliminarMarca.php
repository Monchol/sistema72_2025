<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';
include 'includes/header.php';

$idMarca = $_GET['idMarca'] ?? null;

if (!$idMarca) {
    echo "<div class='container mt-5 alert alert-danger'>No se especificó la marca a eliminar.</div>";
    exit;
}

$sql = "DELETE FROM marcas WHERE idMarca ='$idMarca'";
$resultado = mysqli_query($link, $sql);

if ($resultado) {
    header("Location: marcas.php?msg=Marca eliminada correctamente");
    exit;
} else {
    echo "<div class='container mt-5 alert alert-danger'>
            Error al eliminar la marca: " . mysqli_error($link) . "
          </div>";
}
?>