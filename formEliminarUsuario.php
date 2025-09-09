<?php
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
include 'includes/header.php';

$idUsuario = $_GET['idUsuario'] ?? null;

if (!$idUsuario) {
    echo "<div class='container mt-5 alert alert-danger'>No se especificó el usuario a eliminar.</div>";
    exit;
}

$sql = "DELETE FROM usuarios WHERE idUsuario = $idUsuario";
$resultado = mysqli_query($link, $sql);

if ($resultado) {
    header("Location: usuarios.php?msg=Usuario eliminado correctamente");
    exit;
} else {
    echo "<div class='container mt-5 alert alert-danger'>
            Error al eliminar el usuario: " . mysqli_error($link) . "
          </div>";
}
?>