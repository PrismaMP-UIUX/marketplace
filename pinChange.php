<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>


  <div>
    <?php include '_partials/header.php'; ?>
    <?php include '_partials/nav.php'; ?>
  </div>
  <?php include '_partials/actions.php'; ?>

  <main class="celestito">
  <div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
          <div class="card margindown hoverable">
                <div class="card-content">
                  <span class="card-title blue-text">Cambio de Clave de acceso</span>
                  <p>Solo tenes que ingresar tu clave actual, luego una clave nueva y confirmala para verificar que la hayas ingresado bien.</p>
                  <div class="input-field width-100 left">
                    <input id="password" name="password" type="password" class="validate" >
                    <a href="#" class="inside-icon mostrar-pass" style="transform: scale(0);"><i for="password" class="material-icons">remove_red_eye</i></a>
                    <label for="password">Clave actual</label>
                  </div>
                  <div class="input-field width-100 left autoPassValidator" id="newPass">
                    <input name="newpass" type="password" class="validate onKeyPressValidator" id="passwordB" maxlength="8">
                    <label for="newPassInput">Clave nueva</label>
                    <a href="#" class="inside-icon second-icon mostrar-pass" style="transform: scale(0);"><i for="passwordB" class="material-icons">remove_red_eye</i></a>
                    <i class="material-icons inside-icon tooltipped toHideInMobile" data-text="
                      <ul class='left-align autoPassValidatorContent' style='font-size: 0.85em; animation-duration: .5s'>
                        <li class='mg-b-10 condition1'><i class='material-icons tiny'>info</i> Tener exactamente una longitud de 8 dígitos.</li>
                        <li class='mg-b-10 condition2'><i class='material-icons tiny'>info</i> Solo puede contener números.</li>
                        <li class='mg-b-10 condition3'><i class='material-icons tiny'>info</i> No podrá ser tu número de documento.</li>
                        <li class='mg-b-10 condition4'><i class='material-icons tiny'>info</i> No podrá ser tu fecha de nacimiento.</li>
                        <li class='mg-b-10 condition5'><i class='material-icons tiny'>info</i> No podrá contener 3 caracteres consecutivos iguales o en forma secuencial (Por ejemplo: 123 ó 321 ó 333).</li>
                        <li class='mg-b-10 condition6'><i class='material-icons tiny'>info</i> Los 4 primeros dígitos no pueden ser iguales a los últimos (Por ejemplo:48204820).</li>
                        <li class='mg-b-10 condition7'><i class='material-icons tiny'>info</i> Cuando cambies tu clave, la nueva no podrá contener más de 5 dígitos que coincidan con la clave anterior.</li>
                        <li>Ver requisitos</li>
                      </ul>
                    " data-position="right">help_outline</i>
                  </div>
                  <ul class='left-align autoPassValidatorContent hide hide-on-med-and-up pd-r-10 pd-l-10' style='font-size: 0.85em; animation-duration: .5s'>
                    <li class='mg-b-10 condition1'><i class='material-icons tiny'>info</i> Tener exactamente una longitud de 8 dígitos.</li>
                    <li class='mg-b-10 condition2'><i class='material-icons tiny'>info</i> Solo puede contener números.</li>
                    <li class='mg-b-10 condition3'><i class='material-icons tiny'>info</i> No podrá ser tu número de documento.</li>
                    <li class='mg-b-10 condition4'><i class='material-icons tiny'>info</i> No podrá ser tu fecha de nacimiento.</li>
                    <li class='mg-b-10 condition5'><i class='material-icons tiny'>info</i> No podrá contener 3 caracteres consecutivos iguales o en forma secuencial (Por ejemplo: 123 ó 321 ó 333).</li>
                    <li class='mg-b-10 condition6'><i class='material-icons tiny'>info</i> Los 4 primeros dígitos no pueden ser iguales a los últimos (Por ejemplo:48204820).</li>
                    <li class='mg-b-10 condition7'><i class='material-icons tiny'>info</i> Cuando cambies tu clave, la nueva no podrá contener más de 5 dígitos que coincidan con la clave anterior.</li>
                  </ul>
                  <div class="input-field width-100 left equalPass" id="repeatNewPass">
                    <input name="reNewPass" type="password" class="" id="passwordC">
                    <label for="reNewPass">Reingrese la clave nueva</label>
                    <a href="#" class="inside-icon mostrar-pass second-icon" style="transform: scale(0);"><i for="passwordC" class="material-icons">remove_red_eye</i></a>
                  </div>
                  <p class="small center-align">&nbsp;</p> <!-- No se por que necesito esto -->
                </div>
                <div class="card-action right-align">
                  <a class="waves-effect waves blue white-text btn" href="ticket.php"><!-- <i class="fa fa-pencil"></i> --><span class="pmc-font icono-cambioclave"></span> Cambiar clave</a>
                </div>
              </div>
              <a href="inicio.php">Tiene deudas</a>
          </div>
        </div>
      </div>
    </div>
</main>


<!-- Javascript -->
<?php include '_partials/footer.php'; ?>
  <script type="text/javascript">
  $(document).ready(function() {
    //Escondo carrito
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
