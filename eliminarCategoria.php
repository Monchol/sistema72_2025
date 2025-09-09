<?php
require 'funciones/conexion.php';
require 'funciones/categorias.php';
include 'includes/header.php';

$idCategoria = $_GET['idCategoria'] ?? null;

if (!$idCategoria) {
    echo "<div class='container mt-5 alert alert-danger'>No se especificó la categoría a eliminar.</div>";
    exit;
}

$sql = "DELETE FROM categorias WHERE idCategoria = $idCategoria";
$resultado = mysqli_query($link, $sql);

if ($resultado) {
    header("Location: categorias.php?msg=Categoría eliminada correctamente");
    exit;
} else {
    echo "<div class='container mt-5 alert alert-danger'>
            Error al eliminar la categoría: " . mysqli_error($link) . "
          </div>";
}

include 'includes/footer.php'

?>