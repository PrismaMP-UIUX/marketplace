<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header_out.php'; ?>

  <main class="grey-text text-darken-2">
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
                  <label for="email">Dirección de mail</label>
                  <input type="email" class="validate" name="email" id="email"/>
                </div>
                <div class="input-field">
                  <input id="password" type="password" class="validate invalid" value="c0ntra4s3n14">
                  <label for="password" class="active" data-error="La contraseña es incorrecta. Te quedan 5 intentos.">Contraseña</label>
                  <a href="#" class="inside-icon"><i class="material-icons" for="password">remove_red_eye</i></a>
                </div>
              </div>
              <div class="card-action">
                <div class="flex flex-j-between align-i-center flex-flow-wrap-reverse">
                  <div class="mg-5">
                    <a href="nologueado_olvide_usuario.php" class="block mg-b-5">Olvidé mi usuario</a>
                    <a href="nologueado_olvide_pass" class="block">Olvidé mi contraseña</a>
                  </div>
                  <div class="mg-5">
                    <a href="emptystate_sin_billetera.php" class="btn blue" type="submit">Ingresar</a>
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
  })
});
</script>

</body>
</html>
