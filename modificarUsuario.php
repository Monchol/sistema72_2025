<?php
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
$chequeo = modificarUsuario();

include 'includes/header.html';
include 'includes/nav.php';
?>
<main class="container">
    <h1> Modificar usuario </h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede modificar un usuario';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Usuario modificado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>
<?php include 'includes/footer.php';?>