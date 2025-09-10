<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';

$marca = verMarcaPorID();

include 'includes/header.php';

?>
<main class="container d-flex flex-column p-5">
    <h1 class="align-self-start px-3">Modificar Marca</h1>
    <form action="modificarMarca.php" method="POST" class="w-50 d-flex flex-column gap-3 m-2 p-5 border border-secondary rounded">
        <div class="d-none">
            <input type="text" name="idMarca" value="<?= $marca['idMarca'] ?>" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="mkNombre">Marca:</label>
            <input type="text" class="form-control" name="mkNombre" value="<?= $marca['mkNombre'] ?>" required>
        </div>
        <div class="form-group">
            <input type="submit" name="" value="Modificar" class="btn btn-outline-secondary">
        </div>
    </form>
</main>

<?php
include 'includes/footer.php';
?>