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
              <div class="row mg-b-0">
                <form class="tarjeta">
                  <div class="mg-t-0 col s12 m10 offset-m1 l6">
                    <div class="input-field col s12">
                      <input id="tarjeta" name="tarjeta" type="text" class="center-align" maxlength="20" placeholder="0000 0000 0000 0000 0000" required>
                      <label class="active">Número de la tarjeta</label>
                    </div>
                    <div class="input-field col s12 clearfix mg-t-40" id="vencimiento">
                      <label class="active" for="vencimiento">Fecha de vencimiento</label>
                      <div class="input-field col s5 pd-0 mg-t-0">
                        <input id="mes" name="mes" type="text" pattern="^(0?[1-9]|1[012])$" maxlength="2" class="date-card center-align left validate" placeholder="MM" required>
                        <label class="active" for="mes" data-error="Ingresá el mes en formato numérico." data-success="Válido"></label>
                      </div>
                      <div class="input-field col s5 offset-s2 pd-0 mg-t-0">
                        <input id="anio" name="anio" type="text" pattern="\d*" maxlength="2" class="date-card2 center-align right validate" placeholder="AA" required>
                        <label class="active" for="anio" data-error="Ingresá el año en formato numérico." data-success="Válido"></label>
                      </div>
                    </div>
                    <div class="input-field col s6 clearfix mg-t-40">
                      <input id="seguridad" name="seguridad" type="text" class="center-align" maxlength="4" placeholder="0000" required>
                      <label class="active">Código de seguridad</label>
                    </div>
                    <div class="col s12 mg-t-20">
                      <a class="waves-effect waves-dark btn blue" id="agregarMP" onclick="$('.agregarMP').show();">Agregar</a>
                    </div>
                  </div>
                </form>
                <div class="card-wrapper col s12 m10 offset-m1 l6 hide-on-small-only"></div>
              </div>
              <div class="row agregarMP" style="display: none;">
                <div class="col s12 m8 offset-m2 mg-t-20">
                  <p class="grey-text text-darken-2">Enviamos un pequeño consumo a tu tarjeta. Consulta el importe exacto en tu estado de cuenta (Home Banking). Ingresa a la sección Billetera de <b>Todo Pago</b> nuevamente y completa este valor haciendo click en (xxxxx). No te preocupes, reembolsaremos ese dinero a tu Medio de Pago.
                  <a href="#" class="orange-text">Ir a Todo Pago.</a>
                  </p>
                  <div class="col m4 push-m4">
                    <img src="img/mediosdepago/todopago.svg" alt="todopago" width="100%">
                  </div>
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
        var $next = $('.date-card2').focus();
        // console.log($next);
        // if ($next.length){
        //   $(this).next('.date-card').focus();
        // }
        // else {
        //   $(this).blur();
        // }
      }
    });

  </script>


</body>

</html>
