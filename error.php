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
          <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3">
            <div class="card z-depth-2">
              <div class="card-content center-align">
                <h3 class="blue-text mg-b-20">Disculpá no pudimos continuar</h3>
                <img src="img/error1.png" alt="">
                <p class="grey-text mg-t-20">Lamentablemente no hemos podido conectarte.<br>Reintentá para acceder a la página.</p>
                <!-- <h5><span class="big red-text right-align"><i class="fa fa-times-circle"></i></span> Operación con error</h5> -->
                <!-- <p>${exception.mensaje}[${exception.codigo}]</p> -->
              </div>
              <div class="card-action right-align flex flex-j-center align-i-center">
                <a href="#" class="btn btn-flat white blue-text waves-effect waves-light mg-5">Volver al inicio</a>
                <a href="#" class="btn blue waves-effect waves-light mg-5">Reintentar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3">
            <div class="card z-depth-2">
              <div class="card-content center-align">
                <h3 class="blue-text mg-b-20">Hubo un problema de conexión</h3>
                <img src="img/error2.png" alt="">
                <p class="grey-text mg-t-20">No hemos podido conectarte.<br>Reintenta para acceder a la página.</p>
                <!-- <h5><span class="big red-text right-align"><i class="fa fa-times-circle"></i></span> Operación con error</h5> -->
                <!-- <p>${exception.mensaje}[${exception.codigo}]</p> -->
              </div>
              <div class="card-action right-align flex flex-j-center align-i-center">
                <a href="#" class="btn btn-flat white blue-text waves-effect waves-light mg-5">Volver al inicio</a>
                <a href="#" class="btn blue waves-effect waves-light mg-5">Reintentar</a>
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
