<?php 
include 'includes/header.php';

?>
    <div class="m-2 p-5">

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Tu carrito</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nombre del producto</h6>
                <small class="text-muted">Descripción breve</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Segundo producto</h6>
                <small class="text-muted">Descripción breve</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Tercer producto</h6>
                <small class="text-muted">Descripción breve</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código promocional</h6>
                <small>CÓDIGODEEJEMPLO</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (ARG)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Canjear</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dirección de facturación</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  El nombre es obligatorio.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  El apellido es obligatorio..
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Nombre de usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Usuario" required>
                <div class="invalid-feedback" style="width: 100%;">
                  El nombre de usuario es obligatorio.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Correo electronico <span class="text-muted">(Opcional)</span></label>
               <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com">
              <div class="invalid-feedback">
                Ingresa una dirección de correo válida para recibir actualizaciones de envío.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Dirección</label>
              <input type="text" class="form-control" id="address" placeholder="Calle 1234" required>
              <div class="invalid-feedback">
                Ingresa tu dirección de envío.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Dirección 2 <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Departamento o suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Pais</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Selecciona...</option>
                  <option>Argentina</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, selecciona un país válido.
                </div>
              </div>
             <div class="col-md-4 mb-3">
            <label for="state">Provincia</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Selecciona...</option>
              <option>Buenos Aires</option>
              <option>Ciudad Autónoma de Buenos Aires</option>
              <option>Córdoba</option>
              <option>Santa Fe</option>
              <option>Mendoza</option>
            </select>
            <div class="invalid-feedback">
              Por favor, selecciona una provincia válida.
            </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Ciudad</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  La ciudad es obligatoria.
                </div>
              </div>
            </div>
            <h4 class="mb-3">Método de pago</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Tarjeta de débito</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nombre en la tarjeta</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nombre completo como aparece en la tarjeta</small>
                <div class="invalid-feedback">
                  El nombre en la tarjeta es obligatorio.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">>Número de tarjet</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  El número de la tarjeta es obligatorio.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Fecha de expiración</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  La fecha de expiración es obligatoria.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                   El código de seguridad es obligatorio.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar con la compra</button>
          </form>
        </div>
      </div>
  </div>


    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
<?php 
include 'includes/footer.php';
?>