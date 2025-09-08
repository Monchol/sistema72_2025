<?php
require 'funciones/conexion.php';
require 'funciones/marcas.php';

$marca = verMarcaPorID();

include 'includes/header.html';

?>
<main class="container">
    <h1>Modificar Marca</h1>

    <form action="modificarMarca.php" method="POST">
        ID:
        <input type="text" name="idMarca" value="<?= $marca['idMarca'] ?>" required>
        Marca:
        <input type="text" name="mkNombre" value="<?= $marca['mkNombre'] ?>" required>
        <input type="submit" name="" value="MODIFICAR">
    </form>
</main>

<?php
include 'includes/footer.php';
?>