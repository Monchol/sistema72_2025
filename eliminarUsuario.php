<?php

require 'funciones/conexion.php';
require 'funciones/usuarios.php';

$chequeo = eliminarUsuario();

include 'includes/header.php';

?>

<main class="container p-5">
    <h1>Baja de Usuario</h1>

    <?php
    $class = 'danger';
    $mensaje = 'No se puede eliminar el usuario';

    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Usuario eliminado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
    <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver</a>

</main>
<script src="js/goToIndex.js"></script>
<?php include 'includes/footer.php';
?>
?>