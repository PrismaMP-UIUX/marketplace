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
                <span class="card-title">Registrate</span>
                <p class="enlace_postitulo"><a href="https://pmcempresas.pagomiscuentas.com.ar/" target="_blank">Registrate como EMPRESA</a></p>

                <div class="row">
                  <div class="input-field col s12 m6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="validate" name="nombre" id="nombre" />
                  </div>
                  <div class="input-field col s12 m6">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="validate" name="apellido" id="apellido" />
                  </div>
                  <div class="input-field col s4">
                    <select>
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
                  <div class="input-field col s12">
                    <label for="email">Email address</label>
                    <input type="email" class="validate" name="email" id="email" />
                  </div>
                  <div class="input-field mg-b-30 col s12">
                    <select>
                      <option value="" selected>Capital Federal</option>
                      <option value="1">Buenos Aires</option>
                      <option value="2">Chaco</option>
                      <option value="3">Santiago del Estero</option>
                    </select>
                    <label>Provincia donde residis</label>
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
                <div class="flex flex-j-between align-i-center flex-flow-wrap-reverse">
                  <div class="mg-5">
                    <span class="nota">Al registrarme acepto los <a href="#modal_terminosycondiciones" class="modal-trigger mg-0">Términos y Condiciones</a> de Todo Pago y PagoMisCuentas.</span>
                  </div>
                  <div class="mg-5">
                    <a href="nologueado_registro_2.php" class="btn blue">Siguiente</a>
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
  <?php include '_partials/modal_terminosycondiciones.php'; ?>

  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>

  <script type="text/javascript">
    $(document).ready(function() {
  //   $("input[type=checkbox]").change(function(){
  //     $(this).parent(".card-action").parent(".card").toggleClass("serv_select");
  //   })

  $("#registrate").hide();

  $("tabs-content").change(function(a,b,c) {
    console.log(a);
    console.log(b);
    console.log(c);
  })
});
</script>

</body>
</html>
