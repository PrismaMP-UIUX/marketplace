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
                <span class="card-title">Olvidé mi usuario</span>
                <p>Esto no es tan común... pero es sencillo de resolver</p>
                <div class="row mg-t-20 mg-b-0">
                  <div class="input-field col s4 mg-b-20">
                    <select>
                      <!-- <option value="" disabled selected>Tipo</option> -->
                       <option value="1">DNI</option>
                       <option value="2">Cédula</option>
                       <option value="3">Pasaporte</option>
                    </select>
                    <label>Tipo</label>
                   </div>
                   <div class="input-field col s8 mg-b-20">
                    <input id="dni" type="text" class="validate">
                    <label for="dni">Número</label>
                  </div>
                  <div class="col s12">
                    Sexo:
                    <input name="group1" type="radio" class="with-gap" id="test1" />
                    <label for="test1" class="mg-l-3">Masculino</label>
                    <input name="group1" type="radio" class="with-gap" id="test2" />
                    <label for="test2" class="mg-l-40">Femenino</label>
                  </div>
                </div>
              </div>
              <div class="card-action">
                <div class="flex flex-j-end align-i-center">
                  <div class="">
                    <a href="nologueado_ayudita.php" class="btn blue">Recuperar</a>
                  </div>
                </div>
              </div>
            </form>
                <!-- <p class="right-align nota"><a href="nologueado_noregistrado.php" class="red-text">en caso de que no lo reconozca ni a palos</a></p> -->
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
