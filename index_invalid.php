<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header_out.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">

      <div class="row mg-t-20">
        <div class="col s12 m10 offset-m1 l6 offset-l3 ">
          <div class="card hoverable">
            <form>
              <div class="card-content">
                <span class="card-title">Ingresa</span>
                <p class="enlace_postitulo"><a href="login_banco.php">Ingresá con tu banco</a></p>

                <div class="row">
                  <div class="input-field col s12">
                    <label for="email">Email address</label>
                    <input type="email" class="validate" name="email" id="email"/>
                  </div>
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate invalid" value="c0ntra4s3n14">
                    <label for="password" class="active" data-error="La contraseña es incorrecta. Te quedan 5 intentos.">Contraseña</label>
                    <a href="#" style="position: absolute; right: 40px; top: 12px;"><i class="material-icons" for="password">remove_red_eye</i></a>
                  </div>
                </div>
              </div>
              <div class="card-action">
                <div class="row valign-wrapper mg-b-0">
                  <div class="col s8">
                    <a href="#" class="block">Olvidé mi usuario</a>
                    <a href="#" class="block">Olvidé mi contraseña</a>
                  </div>
                  <div class="col s4 right-align">
                    <a href="inicio.php" class="right btn orange" type="submit">Ingresar</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <p class="nota">Powered by <a href="#" class="orange-text">Todo Pago</a></p>
        </div>
      </div>
    </div>
  </main>

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
