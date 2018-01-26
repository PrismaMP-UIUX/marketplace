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
          <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3 grey-text text-darken-2">

            <div class="card z-depth-2">
              <div class="card-content">
                <!-- <h5><span class="big right-align"><i class="fa fa-info-circle"></i></span> Titulo del mensaje</h5> -->
                <p class="word-wrap">Te enviamos un email a mdalmeida@prismamp.com. Por favor confirmalo en las próximas 23:00 hs.</p>
              </div>
              <div class="card-action right-align">
                <a href="inicio.php" class="blue-text">Click en el mail confirmar cuenta</a>
              </div>
            </div>

            <div class="card z-depth-2">
              <div class="card-content">
                <!-- <h5><span class="big right-align"><i class="fa fa-info-circle"></i></span> Titulo del mensaje</h5> -->
                <p class="word-wrap">Te enviamos un email a mdalmeida@prismamp.com para que puedas RECUPERAR tu contraseña</p>
              </div>
              <div class="card-action right-align">
                <a href="nologueado_seguridad.php" class="blue-text">Click en el mail</a>
              </div>
            </div>

            <div class="card z-depth-2">
              <div class="card-content">
                <!-- <h5><span class="big right-align"><i class="fa fa-info-circle"></i></span> Titulo del mensaje</h5> -->
                <p>Tu nueva contraseña fue guardada correctamente</p>
              </div>
              <div class="card-action right-align">
                <a href="javascript:history.back(1)" class="blue-text">Volver</a>
              </div>
            </div>

            <div class="card z-depth-2">
              <div class="card-content">
                <!-- <h5><span class="big right-align"><i class="fa fa-info-circle"></i></span> Titulo del mensaje</h5> -->
                <p>Un operador de Atención al cliente te llamará en el horario que nos indictaste. Muchas gracias.</p>
              </div>
              <div class="card-action right-align">
                <a href="javascript:history.back(1)" class="blue-text">Volver</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include '_partials/footer.php'; ?>
  <script type="text/javascript">
  $(document).ready(function() {
    //Escondo carrito
    $('.cantidad').hide();
  });
  </script>
</body>
</html>
