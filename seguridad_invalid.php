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
                <span class="card-title">Para estar seguros...</span>
                <p>Necesitamos que respondas a tu pregunta de Seguridad</p>
                <div class="row mg-t-30 mg-b-0">
                    <div class="col s12">La ciudad de nacimiento de tu madre es...</div>
                    <div class="input-field col s12">
                      <input id="dni" type="text" class="validate invalid" value="San Martin">
                      <label for="dni" class="active" data-error="Oops.. eso no es lo que nos dijiste la primera vez. Te quedan 3 intentos.">Tu respuesta</label>
                    </div>
                </div>
              </div>
              <div class="card-action ">
                <div class="row mg-b-0 valign-wrapper">
                  <div class="col s8">
                    <a href="index_invalid.php" class="">Olvide mi pregunta de seguridad</a>
                  </div>
                  <div class="col s4 right-align">
                    <a href="index_invalid.php" class="btn orange">Comrpobar</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <p class="left nota">Powered by <a href="#" class="orange-text">Todo Pago</a></p>
          <p class="right"><a href="index.php">Ya lo recorde</a></p>
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

  $("tabs-content").change(function(a,b,c) {
    console.log(a);
    console.log(b);
    console.log(c);
  })
});
</script>

</body>
</html>
