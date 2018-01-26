<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header_out.php'; ?>

  <main class="grey-text text-darken-2 plano-5">
    <div class="container">

      <div class="row mg-t-20">
        <div class="col s12 m10 offset-m1 l6 offset-l3">
          <div class="card hoverable">
            <form>
              <div class="card-content">
                <div class="mg-b-20 clearfix">
                  <span class="card-title left">Ingresá</span>
                  <p class="enlace_postitulo right">
                    <a href="nologueado_login.php" style="min-width: 240px;">
                      <img src="img/riop.svg" style="max-width: 20px; vertical-align: sub;"> Ingresá con otra cuenta
                    </a>
                  </p>
                </div>
                <span class="card-title">NombreDeUsuario</span>
                <div>
                  <img src="img/riop.svg" style="max-width: 20px; vertical-align: sub;">
                  <label style="font-size: 14px;">MdAlmeida@prismamp.com</label>
                  <a href="nologueado_login.php" class="pd-l-10">QUITAR ESTA CUENTA</a>
                </div>
                <div class="input-field">
                  <label for="password" data-error="La contraseña es incorrecta. Te quedan 5 intentos.">Contraseña</label>
                  <input id="password" type="password">
                  <a href="#" class="inside-icon mostrar-pass" style="transform: scale(0);"><i for="password" class="material-icons">remove_red_eye</i></a>
                  <!-- <i class="material-icons inside-icon tooltipped" data-position="right">info_outline</i> -->
                </div>
              </div>
              <div class="card-action">
               <div class="flex flex-j-between align-i-center flex-flow-wrap-reverse">
                  <div class="mg-5">
                    <a href="nologueado_olvide_pass.php" class="">Olvidé mi contraseña</a>
                  </div>
                  <div class="mg-5">
                    <a href="inicio.php" class="right btn blue" type="submit">Ingresar</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <p class="nota">Powered by <a href="#powered-todopago" class="modal-trigger">Todo Pago</a></p>
        </div>
      </div>
    </div>
  </main>

  <?php include '_partials/modal_powered.php'; ?>


  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>

  <script type="text/javascript">
    $(document).ready(function() {
  //   $("input[type=checkbox]").change(function(){
  //     $(this).parent(".card-action").parent(".card").toggleClass("serv_select");
  //   })

  $("#ingresar").hide();
  $("tabs-content").change(function(a,b,c) {
    console.log(a);
    console.log(b);
    console.log(c);
  });

  // Mostrar pass
  $(".mostrar-pass").each(function(){
    var takeme = $(this);
    takeme.siblings("input").on('keyup', function(e) {
      if(takeme.siblings("input").val().length>0){
        takeme.attr("style", " ");
        takeme.removeClass("scale-transition scale-out");
        takeme.addClass("scale-transition scale-in");
      }else{
        takeme.removeClass("scale-transition scale-in");
        takeme.addClass("scale-transition scale-out");
      };
    });
  });


  setTimeout(function() {
    Materialize.updateTextFields();
  }, 200);
});
</script>

</body>
</html>
