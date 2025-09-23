<?php
include 'includes/header.php';
?>

<main class="container p-5">
    <div class="alert alert-secondary p-4 col-8 mx-auto">
        <h1>Alta de nuevo usuario</h1>
        <form action="agregarUsuario.php" method="POST">
            
            <div class="form-group">
                <label for="" class="form-label">Nombre:</label>
                <input class='form-control' type="text" name="usuNombre" required> <br>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Apellido:</label>
                <input class='form-control' type="text" name="usuApellido" required> <br>
            </div>
            
            <div class="form-group">
                <label for="" class="form-label">E-mail:</label>
                <input class='form-control' type="email" name="usuEmail" required>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Clave:</label>
                <input class='form-control' type="password" name="usuPass" required> <br>
            </div>    
            
            <div class="form-group">
                <input class='form-control' type="submit" button class="btn btn-dark mr-3 px-4" value="Agregar">
            </div>
        
        </form>
    </div>
</main>
<?php include 'includes/footer.php'; ?>