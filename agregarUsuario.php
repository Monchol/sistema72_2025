<?php
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
$chequeo = agregarUsuario();

include 'includes/header.php';
?>
<main class="container p-5">
    <h1> Alta de nuevo usuario </h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se puede agregar un usuario';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Usuario agregado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
    <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver</a>
</main>
<?php include 'includes/footer.php';
?>