<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';

$marca = verMarcaPorID();

include 'includes/header.php';

?>
<main class="container">
    <h1>Modificar Marca</h1>

    <form action="modificarMarca.php" method="POST">
        <div class="d-none">
            <input type="text" name="idMarca" value="<?= $marca['idMarca'] ?>" required>
        </div>
        <div class="form-group">
            <label for="mkNombre">Marca:</label>
            <input type="text" name="mkNombre" value="<?= $marca['mkNombre'] ?>" required>
        </div>
        <div class="form-group">
            <input type="submit" name="" value="Modificar" class="btn btn-outline-secondary">
        </div>
    </form>
</main>

<?php
include 'includes/footer.php';
?>