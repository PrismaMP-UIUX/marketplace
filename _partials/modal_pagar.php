<!-- Modal Otro Pago -->
<div id="otropago" class="modal otroPago">
    <div class="modal-content">
        <i class="material-icons right modal-close">close</i>
        <h3 class="card-title">Completá los datos</h3>
        <div class="row mg-b-0">
          <h6 class="grey-text text-darken-2 mg-b-20">Por favor Mariano N D Almeida <i>(tal como figura en la tarjeta)</i>, ingresá una tarjeta a tu nombre.</h6>
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
                <input type="checkbox" class="filled-in" id="filled-in-box-1"/>
                <label for="filled-in-box-1" class="mg-t-20">AGREGAR MEDIO DE PAGO</label>
                <div class="container agregarMP" style="display: none;">
                  <p class="grey-text text-darken-2">Enviamos un pequeño consumo a tu tarjeta. Consulta el importe exacto en tu estado de cuenta (Home
                    Banking). Ingresa a la sección Billetera de
                    <b>Todo Pago</b> nuevamente y completa este valor haciendo click en (xxxxx). No te preocupes, reembolsaremos
                    ese dinero a tu Medio de Pago.
                    <a href="#" class="orange-text">Ir a Todo Pago.</a>
                  </p>
                  <div class="col m4 push-m3">
                    <img src="img/mediosdepago/todopago.svg" alt="todopago" width="100%">
                  </div>
                </div>
              </div>
            </form>
            <div class="card-wrapper col s12 m10 offset-m1 l6 hide-on-med-and-down mg-t-50"></div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="left">
            <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat">
                <i class="material-icons left">close</i> Cancelar</a>
        </div>
        <div class="right">
            <a href="#" class="modal-action modal-close waves-effect waves-light btn blue"> Continuar</a>
        </div>
    </div>
</div>

<script>
    $('#tarjeta').on('keypress change', function () {
      $(this).val(function (index, value) {
    	  return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
      });
    });

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

      $('input[type=checkbox].filled-in').on('click', function(){
        var chksLen = $("input[type=checkbox].filled-in:checked").length;
        if (chksLen > 0) {
          $('.agregarMP').show("slow");
        } else {
          $('.agregarMP').hide("slow");
        }
      });

    });
</script>
