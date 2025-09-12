<?php
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
$usuarios = listarUsuarios();

include 'includes/header.php';

?>

<main class="container">
    <h1>Panel de Usuarios</h1>
    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>E-mail</th>
                <th>Estado</th>
                <th colspan="2">
                    <a href="formAgregarUsuario.php" class="btn btn-dark"> Agregar</a>
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
                    <td>                        
                        <form action="formModificarUsuario.php" method="get" class="">
                            <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">
                            <input type="submit" class="btn btn-outline-secondary" value="Modificar">
                        </form>
                    </td>
                    <td> 
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