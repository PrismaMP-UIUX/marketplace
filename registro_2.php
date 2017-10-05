<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header_out.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">

      <div class="row mg-t-20">
        <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3 ">
          <div class="card hoverable">
            <form>
              <div class="card-content">
                <span class="card-title">Bienvenido Sebastian!</span>
                <p>Solo unos datos mas...</p>

                <div class="row mg-t-20 mg-b-0">
                  <div class="input-field mg-b-30 col s12">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="validate" name="pass" id="pass" />
                    <a href="#" style="position: absolute; right: 40px; top: 12px;"><i class="material-icons" for="pass">remove_red_eye</i></a>
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
                    <span class="nota grey-text text-lighten-1"><i>Ojo! Recordaremos las mayusculas y minusculas</i></span>
                  </div>
                  <div class="input-field mg-b-0 col s4">
                    <select>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="1">Movistar</option>
                      <option value="2">Personal</option>
                      <option value="3">X</option>
                    </select>
                    <label>Compañia de celular</label>
                  </div>
                  <div class="input-field mg-b-0 col s8">
                    <label for="nro">Tu numero</label>
                    <input type="text" class="validate" name="nro" id="nro" value="1168736072"/>
                  </div>
                  <div class="col s12 mg-b-20">
                    <p class="blue-text">¿Porqué preguntan esto?</p>
                    <p class="nota">De esta forma podemos garantizar la total seguridad de tus datos y pagos</p>
                  </div>
                </div>
              </div>

              <div class="card-action">
                <div clas="row mg-b-0 valign-wrapper">
                  <div class=" s12 right-align">
                    <a href="registro_2.php" class="btn orange">Listo</a>
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
