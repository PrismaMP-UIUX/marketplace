<?php include '_partials/head.php'; ?>
<body>
  <?php include '_partials/header_out.php'; ?>
  <main class="celestito">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3">
            <div class="card z-depth-2">
              <div class="card-content">
                <h5><span class="big red-text right-align"><i class="fa fa-times-circle"></i></span> Operación con error</h5>
                <p>${exception.mensaje}[${exception.codigo}]</p>
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
</body>
</html>
