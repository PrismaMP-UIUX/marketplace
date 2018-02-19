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
        <div class="mg-t-20 col s12 m8 offset-m2 l6 offset-l3 ">
          <div class="card">
            <form>
              <div class="card-content">
                <h3 class="card-title">Mi Perfil</h3>
                <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width mg-b-30">
                  <li class="tab col s3"><a href="#usr" class="active">Contraseña</a></li>
                  <li class="tab col s3"><a href="#mensajes">Mensajes</a></li>
                </ul>
                <div id="usr">
                  <p>Cambiar contraseña:</p>
                  <div class="input-field mg-b-30">
                    <input id="pa" type="password" class="validate grey-text card-title">
                    <a href="#" class="inside-icon mostrar-pass" style="transform: scale(0);"><i for="pa" class="material-icons">remove_red_eye</i></a>
                    <label for="pa">Contraseña actual</label>
                  </div>
                  <div class="input-field autoPassValidator">
                    <input id="pn" type="password" class="validate grey-text card-title" maxlength="8">
                    <label for="pn ">Contraseña nueva</label>
                    <a href="#" class="inside-icon second-icon mostrar-pass" style="transform: scale(0);"><i for="pn" class="material-icons">remove_red_eye</i></a>
                    <i class="material-icons inside-icon tooltipped toHideInMobile" data-text="
                      <ul class='left-align autoPassValidatorContent' style='font-size: 0.85em'>
                        <li class='mg-b-10 condition1'><i class='material-icons tiny'>info</i> Tener exactamente una longitud de 8 dígitos.</li>
                        <li class='mg-b-10 condition2'><i class='material-icons tiny'>info</i> Solo puede contener números.</li>
                        <li class='mg-b-10 condition3'><i class='material-icons tiny'>info</i> No podrá ser tu número de documento.</li>
                        <li class='mg-b-10 condition4'><i class='material-icons tiny'>info</i> No podrá ser tu fecha de nacimiento.</li>
                        <li class='mg-b-10 condition5'><i class='material-icons tiny'>info</i> No podrá contener 3 caracteres consecutivos iguales o en forma secuencial (Por ejemplo: 123 ó 321 ó 333).</li>
                        <li class='mg-b-10 condition6'><i class='material-icons tiny'>info</i> Los 4 primeros dígitos no pueden ser iguales a los últimos (Por ejemplo:48204820).</li>
                        <li class='mg-b-10 condition7'><i class='material-icons tiny'>info</i> Cuando cambies tu clave, la nueva no podrá contener más de 5 dígitos que coincidan con la clave anterior.</li>
                      </ul>
                    " data-position="right">help_outline</i>
                  </div>
                </div>
                <div id="mensajes">
                  <div>
                    <p class="mg-b-20">Selecciona el tipo de mensajes que querés recibir:</p>
                    <p class="mg-b-15">
                      <input type="checkbox" chekced class="filled-in" id="funcionalidades" />
                      <label for="funcionalidades"><span class="mg-neg-t-2 block">Informe general sobre nuevas funcionalidades del servicio, incorporación de empresas, etc.</span></label>
                    </p>
                    <p class="mg-b-15">
                      <input type="checkbox" chekced class="filled-in" id="vencimientos" />
                      <label for="vencimientos"><span class="mg-neg-t-2 block">Información sobre vencimiento, próximos vencimientos de cuentas registradas</span></label>
                    </p>
                    <!-- <p class="mg-b-15">
                      <input type="checkbox" chekced class="filled-in" id="nada" />
                      <label for="nada"><span class="mg-neg-t-2 block">No deseo recibir información de ningún tipo</span></label>
                    </p> -->
                  </div>
                </div>
              </div>
              <div class="card-action clearfix pd-t-20">
               <div class="right">
                 <a href="perfil_error.php" class="right btn blue" type="submit">Listo</a>
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

    $("input[name=group3]").on("change", function(){

      $(".toggleUser").toggleClass("hide");
    });

    $('.cantidad').hide();

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
});
</script>

</body>
</html>
