<?php
include 'includes/header.php';
?>
<style>
  /*
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
   */
</style>
<link href="css/modal.css" rel="stylesheet">
<main class="body d-flex justify-content-center align-items-center mb-5 pb-5">
    <form class="col-6 m-3 p-5 rounded border d-flex flex-column gap-2">
        <i class="bi bi-person-circle fs-1 align-self-center"></i>
        <h1 class="h3 font-weight-normal">Iniciar sesion</h1>
        <label for="inputEmail" class="sr-only"></label>
        <input type="email" id="inputEmail" name="loginNombre"class="form-control" placeholder="Nombre de usuario" required autofocus>
        <label for="inputPassword" class="sr-only"></label>
        <br><br>
        <input type="password" id="inputPassword" name="loginClave" class="form-control" placeholder="Contraseña" required autofocus>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Recordar contraseña
            </label>
        </div>
        <br>
        <button class="form-signin-button" type="submit"><b>Iniciar</b></button>
        <p class="mt-5 mb-3 text-muted">&copy; 2025</p>
    </form>
</main>
<?php
include 'includes/footer.php';
?>