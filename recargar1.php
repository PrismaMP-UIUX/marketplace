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

          <div class="card-panel col m6 l6 xl6">
            <div class="card-content">
              <form>
                <h3 class="card-title mg-10">Recargas online</h3>
                <p class="mg-10">La manera más fácil de obtener crédito para tus servicios.</p>
                <div class="row">
                  <div class="col s12 offset-m1 m10 offset-l1 l10 offset-xl1 xl10">
                    <div class="row stock-images mg-10">

                      <div class="col s6 m4">
                        <input id="movistar" name="carrier" type="radio" /><label for="movistar">
                        <img src="/img/rubros/recargas.svg">
                        </label>
                        <a href="recargar.php" class="step-title waves-effect waves-white blue-text">Recarga celular</a>
                      </div>

                      <div class="col s6 m4"><input id="claro" name="carrier" type="radio" /><label for="claro">
                          <img src="/img/rubros/prepagos.svg">
                        </label>
                        <a href="recargar.php" class="step-title waves-effect waves-white blue-text">Carga prepago</a>
                      </div>

                      <div class="col s6 m4"><input id="test2" name="carrier" type="radio" /><label for="test2">
                          <img src="/img/rubros/transportes.svg">
                        </label>
                        <a href="recargar.php" class="step-title waves-effect waves-white blue-text">Carga transporte</a>
                      </div>

                    </div><!--/row stock-images-->
                  </div>
                </div>
              </form>
            </div>
          </div><!-- donaciones-->
          <div>
            <h3>Unisef</h3>
            <p>El apoyo de donantes individuales constituye la mayor parte de los fondos con los que UNICEF financia sus programas. Gracias a ello, se logra continuar y ampliar las acciones que benefician a los niños, niñas y adolescentes argentinos.</p>
          </div><!--/párrafo-->
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
