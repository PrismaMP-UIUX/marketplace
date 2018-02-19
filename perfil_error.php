<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <div>
    <?php include '_partials/header.php'; ?>
    <?php include '_partials/nav.php'; ?>
  </div>
  <?php include '_partials/actions.php'; ?>

  <main class="plano-5">
    <div class="container">
      <div class="row clearfix">
        <div class="mg-t-20 col s10 offset-s1 m8 offset-m2 l6 offset-l3 ">
          <div class="card">
            <form>
              <div class="card-content">
              <!-- <span class="card-title">Mi perfil</span> -->
              <h3 class="card-title">Mi Perfil</h3>
                <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width mg-b-30">
                  <li class="tab col s3"><a class="active" href="#userPass">Usuario y contraseña</a></li>
                  <li class="tab col s3"><a href="#email"><!-- Direccion de e-mail -->Notificaciones</a></li>
                </ul>
                <div id="userPass">
                  <div class="mg-b-30 grey-text text-lighten-1">
                    <p class="mg-b-20">Seleccioná la forma en que quieres ingresar a PagoMisCuentas</p>
                    <p class="mg-b-10">
                      <input class="with-gap" name="group3" type="radio" id="condocumento" checked />
                      <label for="condocumento">Quiero ingresar con tipo y número de documento</label>
                    </p>
                    <p class="mg-b-10">
                     <input class="with-gap" name="group3" type="radio" id="conusuario" checked />
                     <label for="conusuario">Quiero ingresar con usuario</label>
                    </p>
                    <!-- <p class="mg-l-35 mg-b-20">Si quieres elegir tu usuario, completa el siguiente campo:</p> -->
                    <div class="input-field mg-l-35 mg-0">
                      <input id="f" type="text" class="validate valid card-title">
                      <label for="f">Usuario nuevo</label>
                    </div>
                  </div>
                  <div class="mg-b-40 grey-text text-lighten-1">
                    <h5 class="blue-text valign-wrapper mg-b-20"><i class="material-icons mg-r-5" data-position="right">lock</i> <span>Cambiar contraseña</span></h5>
                    <!-- <p class="mg-b-20">Si desea cambiar la contraseña ingrése los siguientes cambios</p> -->
                    <div class="input-field">
                      <input id="password" type="password" class="validate invalid" value="c0ntra4s3n14">
                      <label for="password" class="active" data-error="La contraseña actual es incorrecta.">Contraseña</label>
                    </div>
                    <div class="input-field mg-t-30">
                      <input id="pn" type="password" class="validate valid card-title">
                      <label for="pn " data-error="wrong" class="active">Contraseña nueva</label>
                      <i class="material-icons inside-icon tooltipped" data-text="
                        <ul class='left-align' style='font-size: 0.85em'>
                          <li class='mg-b-10'><i class='material-icons tiny'>info</i> Tener exactamente una longitud de 8 dígitos y solo puede contener números.</li>
                          <li class='mg-b-10'><i class='material-icons tiny'>info</i> No podrá ser tu número de documento.</li>
                          <li class='mg-b-10'><i class='material-icons tiny'>info</i> No podrá ser tu fecha de nacimiento.</li>
                          <li class='mg-b-10'><i class='material-icons tiny'>info</i> No podrá contener 3 caracteres consecutivos iguales o en forma secuencial (Por ejemplo: 123 ó 321 ó 333).</li>
                          <li class='mg-b-10'><i class='material-icons tiny green-text text-lighten-3'>check_circle</i> Los 4 primeros dígitos no pueden ser iguales a los últimos (Por ejemplo:48204820).</li>
                          <li class='mg-b-10'><i class='material-icons tiny red-text text-lighten-2'>info</i></i> Cuando cambies tu clave, la nueva no podrá contener más de 5 dígitos que coincidan con la clave anterior.</li>
                        </ul>
                      " data-position="right">help_outline</i>
                    </div>
                  </div>
                </div>
                <div id="email">
                  <div class="mg-b-30 grey-text text-lighten-1">
                    <!-- <p class="mg-0">Ingresa tu dirección de e-mail para que podamos enviarte notificaciones</p>
                    <div class="input-field flex align-i-center height-45 mg-t-0 mg-l-0 mg-r-10 max-200">
                      <input value="mi_email@gmail.com" id="first_name2" type="email" class="validate pd-l-10 pd-r-15 mg-b-0  valid">
                      <a href="#" class="prisma editar tooltipped inside-icon" data-position="top" data-tooltip="Editar"></a>
                    </div> -->
                    <p class="mg-b-15">Selecciona el tipo de notificacioners que quieres recibir</p>
                    <p>
                      <input type="checkbox" class="filled-in" id="funcionalidades" />
                      <label for="funcionalidades"><span class="mg-neg-t-2 block">Informe general sobre nuevas funcionalidades del servicio, incorporación de empresas, etc.</span></label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="vencimientos" />
                      <label for="vencimientos"><span class="mg-neg-t-2 block">Información sobre vencimiento, próximos vencimientos de cuentas registradas</span></label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="nada" />
                      <label for="nada"><span class="mg-neg-t-2 block">No deseo recibir información de ningún tipo</span></label>
                    </p>
                  </div>
                </div>
              </div>
              <div class="card-action clearfix pd-t-20">
               <div class="right">
                 <a href="#.php" class="right btn blue" type="submit">Listo</a>
               </div>
              </div>
            </form>
          </div>
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
    });

    // Mostrar pass
    $(".mostrar-pass").each(function(){
      var takeme = $(this);
      takeme.siblings("input").keyup(function(e) {
        if(takeme.siblings("input").val().length>0){
          takeme.attr("style", " ");
          takeme.removeClass("scale-transition scale-out");
          takeme.addClass("scale-transition scale-in");
        }else{
          takeme.removeClass("scale-transition scale-in");
          takeme.addClass("scale-transition scale-out");
        };
      });
    });

    //esconder el carrito mobile del nav
    $('.cantidad').hide();

});
</script>

</body>
</html>
