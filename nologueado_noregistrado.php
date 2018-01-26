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
                <span class="card-title">¿Nos conocemos?</span>
                <div class="row mg-t-20 mg-b-0">
                  <div class="col s12">
                    <p class="h6">Lamentablemente no reconocemos ningun usuario con esos datos...</p>
                    <p class="h6">¡Pero puede ser una buena oportunidad para que <a href="nologueado_registro.php" class="blue-text">te registres</a>!</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <p class="left nota">Powered by <a href="#powered-todopago" class="modal-trigger">Todo Pago</a></p>
          <p class="right"><a href="nologueado_login.php" class="valign-wrapper"><i class="material-icons blue-text mg-r-5">arrow_back</i>Ya lo recordé</a></p>
        </div>
      </div>
    </div>
  </main>

  <?php include '_partials/modal_powered.php'; ?>

  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>

  <script type="text/javascript">
    $("#flecha-registro").toggleClass("hide");
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
