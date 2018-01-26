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
                <p class="h6">Para restablecer tu contraseña te solicitamos que nos contactes a nuestro Centro de Atención Telefónica: 0-800-333-0010.<br>Por MD de Twitter o a través de Messenger en Facebook de lunes a viernes de 8 a 24 hs. Sábados y domingos de 10 a 18 hs.</p>
              </div>
              <!-- <div class="card-action ">
                <div class="row mg-b-0 valign-wrapper">
                  <div class="col s12 right-align">
                    <a href="mensaje.php" class="btn blue">Guardar</a>
                  </div>
                </div>
              </div> -->
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






