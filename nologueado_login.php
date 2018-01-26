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
                  <p class="enlace_postitulo right"><a href="nologueado_login_banco.php">Ingresá con tu banco</a></p>
                </div>
                <div class="input-field">
                  <label for="user" data-error="El usuario es no está registrado.">Usuario</label>
                  <input id="user" type="text">
                </div>
                <div class="input-field">
                  <label for="password" data-error="La contraseña es incorrecta. Te quedan 5 intentos.">Contraseña</label>
                  <input id="password" type="password">
                  <a href="#" class="inside-icon mostrar-pass" style="transform: scale(0);"><i for="password" class="material-icons">remove_red_eye</i></a>
                  <!-- <i class="material-icons inside-icon tooltipped" data-position="right">info_outline</i> -->
                </div>
                <div class="pd-t-10">
                  <input type="checkbox" class="filled-in" id="recordarUsuario"/>
                  <label for="recordarUsuario">Recordar mi usuario para próximos ingresos</label>
                </div>
              </div>
              <div class="card-action">
               <div class="flex flex-j-between align-i-center flex-flow-wrap-reverse">
                  <div class="mg-5">
                    <a href="nologueado_olvide_usuario.php" class="block mg-b-5">Olvidé mi usuario</a>
                    <a href="nologueado_olvide_pass.php" class="block">Olvidé mi contraseña</a>
                  </div>
                  <div class="mg-5">
                    <a href="nologueado_login_invalid.php" class="btn blue" type="submit">Ingresar</a>
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
