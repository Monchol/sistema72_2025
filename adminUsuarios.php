<?php
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
$usuarios = listarUsuarios();

include 'includes/header.php';

?>

<main class="container p-5">
    <h1>Panel de Usuarios</h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">Volver a principal</a>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>E-mail</th>
                <th>Estado</th>
                <th colspan="2" class="justify-content-end d-flex">
                    <a href="formAgregarUsuario.php" class="btn btn-success"> Agregar</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($usuario = mysqli_fetch_assoc($usuarios)) {
                ?>
                <tr>
                    <td> <?= $usuario['idUsuario']; ?></td>
                    <td> <?= $usuario['usuNombre']; ?></td>
                    <td> <?= $usuario['usuApellido']; ?></td>
                    <td> <?= $usuario['usuEmail']; ?></td>
                    <td> <?= $usuario['usuEstado']; ?></td>
                    <td class='justify-content-end d-flex gap-2'>                        
                        <form action="formModificarUsuario.php" method="get" class="">
                            <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">
                            <input type="submit" class="btn btn-outline-secondary" value="Modificar">
                        </form>
                        <form action="formEliminarUsuario.php" method="post" class="">
                            <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">
                            <input type="submit" class="btn btn-outline-danger" value="Elimniar">
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
</main>

<?= include 'includes/footer.php' ?>