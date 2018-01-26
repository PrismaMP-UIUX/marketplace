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
                <span class="card-title">¡Hola Mariano!</span>
                <p>Por favor, asigná una nueva contraseña a tu cuenta</p>
                <div class="input-field">
                    <label for="password" data-error="La contraseña es incorrecta. Te quedan 5 intentos.">Contraseña</label>
                    <input id="password" type="password" class="validate">
                    <a href="#" class="inside-icon mostrar-pass"><i for="password" class="material-icons">remove_red_eye</i></a>
                    <p class="valign-wrapper italic"><i class="material-icons">info_outline</i> Más de 8 Caracteres. Letras y números.</p>
                  </div>
              </div>
              <div class="card-action ">
                <div class="flex flex-j-end align-i-center">
                  <div class="">
                    <a href="mensaje.php" class="btn blue">Guardar</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <p class="left nota">Powered by <a href="#powered-todopago" class="modal-trigger">Todo Pago</a></p>
          <p class="right"><a href="nologueado_login.php" class="valign-wrapper"><i class="material-icons blue-text mg-r-5">arrow_back</i> Ya lo recordé</a></p>
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

  $("tabs-content").change(function(a,b,c) {
    console.log(a);
    console.log(b);
    console.log(c);
  })
});
</script>

</body>
</html>
