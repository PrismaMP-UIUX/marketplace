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
                <span class="card-title">Bienvenido Sebastian!</span>
                <p>Solo unos datos mas...</p>

                <div class="row mg-t-20 mg-b-0">
                  <div class="input-field mg-b-30 col s12">
                    <label for="pass">Creá tu contraseña</label>
                    <input type="password" class="validate" name="pass" id="pass" />
                    <p class="valign-wrapper italic"><i class="material-icons">info_outline</i> Más de 8 Caracteres. Letras y números</p>
                    <a href="#" class="inside-icon"><i class="material-icons" for="pass">remove_red_eye</i></a>
                  </div>
                   <div class="input-field mg-b-0 col s12">
                    <select>
                      <option value="" selected>Ciudad de nacimiento de mi madre</option>
                      <option value="1">Otra pregunta de seguridad 1</option>
                      <option value="2">Otra pregunta de seguridad 2</option>
                      <option value="3">Otra pregunta de seguridad 3</option>
                    </select>
                    <label>Pregunta de seguridad</label>
                   </div>
                  <div class="input-field mg-b-50 mg-t-0 col s12">
                    <label for="email">Tu Respuesta</label>
                    <input type="text" class="validate mg-b-0" name="email" id="email"/> <!-- value="Alberti, Buenos Aires" -->
                    <!-- <p class="ayuda_input"><i class="material-icons ayuda_input">info_outline</i> Ojo! Recordaremos las mayusculas y minusculas</p> -->
                    <span class="ayuda_input">Ojo! Recordaremos las mayusculas y minusculas</span>
                  </div>
                  <div class="input-field mg-b-0 col m4 s12">
                    <select>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="1">Movistar</option>
                      <option value="2">Personal</option>
                      <option value="3">X</option>
                    </select>
                    <label>Compañia de celular</label>
                  </div>
                  <div class="input-field mg-b-0 col m8 s12">
                    <label for="nro">Tu numero</label>
                    <input type="text" class="validate" name="nro" id="nro" value="1168736072"/>
                  </div>
                  <div class="col s12 mg-b-20">
                    <p class="ayuda_input"><b>¿Porqué preguntan esto?</b> De esta forma podemos garantizar la total seguridad de tus datos y pagos</p>
                  </div>
                </div>
              </div>

              <div class="card-action">
                <div clas="flex flex-j-end align-i-center">
                  <div class="flex flex-j-end">
                    <a href="mensaje.php" class="btn blue">Listo</a>
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
