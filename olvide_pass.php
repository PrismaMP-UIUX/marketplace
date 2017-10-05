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
                <span class="card-title">Olvide mi contraseña</span>
                <p>Esto no es tan comun... pero es sencillo de resolver</p>
                <div class="row mg-t-20 mg-b-0">
                  <div class="input-field col s4">
                    <select>
                      <option value="" disabled selected>Tipo</option>
                       <option value="1">DNI</option>
                       <option value="2">Cédula</option>
                       <option value="3">Pasaporte</option>
                    </select>
                    <label>Tipo</label>
                   </div>
                   <div class="input-field col s8">
                    <input id="dni" type="text" class="validate">
                    <label for="dni">Número</label>
                  </div>
                </div>
              </div>
              <div class="card-action">
                <div class="row mg-b-0 valign-wrapper">
                  <div class="col s12 right-align">
                    <a href="index_invalid.php" class="btn orange">Recuperar</a>
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
