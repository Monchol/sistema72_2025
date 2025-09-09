<?php
require 'funciones/conexion.php';
require 'funciones/usuarios.php';
$usuario = verUsuarioPorID();

include 'includes/header.php';
?>
<main class="contanier">
    <h1> Modificar Usuarios </h1>
    <form action="ModificarUsuario.php" method="POST">
        Nombre:
        <input type="text" name="usuNombre" value=" <?= $usuario['usuNombre'] ?>" required>
        Apellido:
        <input type="text" name="usuApellido" value=" <?= $usuario['usuApellido'] ?>" required>
        Email:
        <input type="email" name="usuEmail" value=" <?= $usuario['usuEmail'] ?>" required>
        Clave:
        <input type="password" name="usuPass" value=" <?= $usuario['usuPass'] ?>" required>
        <input type="hiddem" name="idUsuario" value=" <?= $usuario['idUsuario'] ?>">
        <input type="sumbit" name="" value="MODIFICAR">
    </form>
</main>
<?php include 'includes/footer.php'; ?>