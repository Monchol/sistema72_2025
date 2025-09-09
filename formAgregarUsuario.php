<?php
include 'includes/header.php';
?>

<main class="container">
    <h1>Alta de nuevo usuario</h1>
    <div class="alert alert-secondary p-4 col-8 mx-auto">
        <form action="agregarUsuario.php" method="POST">
            Nombre:

            <input class='form-control' type="text" name="usuNombre" required> <br>
            Apellido:

            <input class='form-control' type="text" name="usuApellido" required> <br>
            E-mail:

            <input class='form-control' type="email" name="usuEmail" required> <br>
            Clave:

            <input class='form-control' type="password" name="usuPass" required> <br>

            <input class='form-control' type="submit" button class="btn btn-dark mr-3 px-4" value="Agregar">
        </form>
        <a href="adminUsuarios.php">
            <button class="btn btn-outline-secondary my-4 p2">Volver al panel</button>
        </a>
    </div>
</main>
<?php include 'includes/footer.php'; ?>