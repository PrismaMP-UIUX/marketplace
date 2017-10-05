<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>


  <?php include '_partials/header.php'; ?>
  <?php include '_partials/nav.php'; ?>
  <?php include '_partials/actions.php'; ?>

  <main class="celestito">
  <div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 l6 offset-l3"> 
          <div class="card margindown hoverable"> 
                <div class="card-content">
                  <span class="card-title blue-text"><i class="fa fa-key" aria-hidden="true"></i>Cambio de Clave de acceso</span>
                  <p>Solo tenes que ingresar tu clave actual, luego una clave nueva y confirmala para verificar que la hayas ingresado bien.</p>
                  <div class="input-field col s12">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Clave actual</label>
                  </div>
                  <div class="input-field col s12 suffix">
                    <input id="newpass" name="newpass" type="password" class="validate">
                    <label for="newpass">Clave nueva</label>
                    <i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="<span class=''>I am a tooltip</span>" >help_outline</i>
                  </div>
                  <div class="input-field col s12">
                    <input id="reNewPass" name="reNewPass" type="password" class="validate">
                    <label for="reNewPass">Reingrese la clave nueva</label>
                  </div>
                  <p class="small center-align">&nbsp;</p> <!-- No se por que necesito esto -->
                </div>
                <div class="card-action right-align">
                  <a class="waves-effect waves blue-text btn-flat" onclick="cambiarPassword()"><!-- <i class="fa fa-pencil"></i> --><span class="pmc-font icono-cambioclave"></span> Cambiar clave</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</main>


<!-- Javascript -->
<?php include '_partials/footer.php'; ?>

</body>
</html>