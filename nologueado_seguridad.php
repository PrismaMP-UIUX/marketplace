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
                <span class="card-title">Para estar seguros...</span>
                <span class="ayuda_input">Necesitamos que respondas a tu pregunta de Seguridad</span>
                <div class="row mg-t-30 mg-b-0">
                    <div class="input-field col s12">
                      <input id="dni" type="text" class="validate mg-t-20">
                      <label for="dni">La ciudad de nacimiento de tu madre es...</label>
                    </div>
                </div>
              </div>
              <div class="card-action ">
                <div class="flex flex-j-between align-i-center flex-flow-wrap-reverse">
                  <div class="mg-5">
                    <a href="#" class="">Olvidé mi pregunta de seguridad</a>
                  </div>
                  <div class="mg-5">
                    <a href="nologueado_seguridad_invalid.php" class="btn blue right">Comprobar</a>
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
