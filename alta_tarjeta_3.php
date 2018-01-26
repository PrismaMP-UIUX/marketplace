<!-- Header -->
<?php include '_partials/head.php'; ?>

<body>

  <div>
    <?php include '_partials/header.php'; ?>
    <?php include '_partials/nav.php'; ?>
  </div>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <!-- steps -->

          <div class="card">
            <div class="card-content">
              <h3 class="card-title mg-10">Nuevo Medio de Pago</h3>
              <div class="row">
                <div class="card-wrapper col s12 m10 offset-m1 l6 hide-on-small-only"></div>
                  <form class="tarjeta">
                    <ul class="stepper linear col s12 m10 offset-m1 l6">
                      <li id="paso1" class="step active">
                        <div class="step-title waves-effect waves-white blue-text">Número de Tarjeta</div>
                        <div class="step-content">
                          <div class="row">
                            <div class="col s12">
                            <p class="gray-text">Ingresá el número de la tarjeta.</p>
                              <div class="input-field">
                                <input id="tarjeta" name="tarjeta" type="text" class="center-align" maxlength="19" placeholder="0000 0000 0000 0000 0000"
                                  required>

                              </div>
                            </div>
                          </div>
                          <div class="step-actions">
                            <button data-feedback="anyThing" class="btn blue waves-effect waves-white next-step">Siguiente</button>
                            <!-- data-feedback="anyThing" -->
                          </div>
                        </div>
                      </li>
                      <li id="paso2" class="step">
                        <div class="step-title waves-effect waves-white blue-text">Fecha de Vencimiento</div>
                        <div class="step-content">

                          <div class="row">
                            <div class="col m12 s12">
                              <p class="gray-text">Ingresá la fecha de vencimiento, primero el mes y luego el año.</p>
                              <div class="input-field col s12">
                              <input id="mes" name="mes" type="text" pattern="^(0?[1-9]|1[012])$" maxlength="2" class="date-card center-align width-45 left validate"
                              placeholder="MM" required>
                              <input id="anio" name="anio" type="text" pattern="\d*" maxlength="2" class="date-card center-align width-45 right validate" placeholder="AA"
                              required>
                            </div>
                            </div>
                          </div>

                          <div class="step-actions">
                            <a href="#paso1" class="btn-flat waves-effect waves-white previous-step hide-on-small-only">Atrás</a>
                            <button class="btn blue waves-effect waves-white next-step">Siguiente</button>
                          </div>
                        </div>
                      </li>
                      <li id="paso3" class="step">
                        <div class="step-title waves-effect waves-white blue-text">Código de seguridad</div>
                        <div class="step-content">

                          <div class="row">
                            <div class="col m12 s12">
                            <p class="gray-text">Ingresá el código de seguridad.</p>
                              <div class="input-field col m6">
                                <input id="seguridad" name="seguridad" type="text" class="center-align" placeholder="0000" required>
                              </div>
                            </div>
                          </div>

                          <div class="step-actions">
                            <a href="#paso2" class="waves-effect waves-dark btn-flat previous-step hide-on-small-only">Atrás</a>
                            <button class="waves-effect waves-dark btn blue next-step">Siguiente</button>
                          </div>
                        </div>
                      </li>
                      <li class="step">
                        <div class="step-title waves-effect waves-white blue-text">Habilitar tarjeta</div>
                        <div class="step-content">
                          <p class="grey-text text-darken-2 pd-b-20">
                            1. Ingresá a tu home banking.
                          </p>
                          <p class="grey-text text-darken-2 pd-b-20">
                            2. Revisá los últimos movimientos de la tarjeta.
                          </p>
                          <p class="grey-text text-darken-2 pd-b-20">
                            3. Ingresá acá el importe debitado y te devolvemos el dinero.
                          </p>
                          <div class="pd-b-20">
                            <span>$</span>
                            <input type="text" class="max-70 pd-l-10mg-b-0">
                          </div>
                          <button data-feedback="anyThing" class="btn blue waves-effect waves-white next-step">Validar</button>
                        </div>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
            <!-- end steps -->
          </div>
        </div>

      </div>
    </div>
  </main>


  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>

  <script>
    function anyThing() {
      setTimeout(function () {
        $('.stepper').nextStep();
      }, 1500);
    }
    $(function () {
      $(".stepper").activateStepper();

    });

    $(document).ready(function () {
      //Esconder el carrito mobile del nav
      $('.cantidad').hide();
      $('.jp-card-name').hide();

      $('.jp-card-front .jp-card-logo.jp-card-visa').text("");
      $('.jp-card-front .jp-card-logo.jp-card-mastercard').text("");
      $('.jp-card-front .jp-card-logo.jp-card-maestro').text("");
      $('.jp-card-front .jp-card-logo.jp-card-amex').text("");
    });

    $(".date-card").keyup(function () {
    if (this.value.length == this.maxLength) {
      var $next = $(this).next('.date-card');
      if ($next.length)
          $(this).next('.date-card').focus();
      else
          $(this).blur();
    }
});
  </script>


</body>

</html>
