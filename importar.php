<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <div>
    <?php include '_partials/header.php'; ?>
    <?php include '_partials/nav.php'; ?>
  </div>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">

      <div class="row">
        <!-- Masonry -->
        <div id="masonry-grid" class="row">
          <div class="col s12 m10 offset-m1 l6 offset-l3">
            <div class="row">
              <div class="card-panel">
                <form>
                  <h3 class="card-title">Importar</h3>
                  <p>Accedé a <strong>PagoMisCuentas</strong> a traves de home banking e importa tu pago directamente.</p>
                  <a href="https://www.pagomiscuentas.com/como-obtener-mi-clave-y-hacer-un-pago#multicollapse-0" target="blank">¿Cómo acceder a mi home banking?</a>
                  <div class="row">
                      <div class="input-field col s12 m12 l12 xl8">
                        <select>
                          <option value="" disabled selected>Seleccioná tu banco</option>
                          <option value="1">CitiBank</option>
                          <option value="2">Itaú</option>
                          <option value="3">Santander Río</option>
                          <option value="4">Banco Comafi</option>
                          <option value="5">HSBC</option>
                          <option value="6">Banco Tucunán</option>
                          <option value="7">Galicia</option>
                          <option value="8">Macro</option>
                          <option value="9">ICBC</option>
                          <option value="10">BBVA Francés</option>
                          <option value="11">Banco Patagonia</option>
                          <option value="12">Supervielle</option>
                        </select>
                      </div>
                      <div class="row col s12">
                        <div class="input-field col s3 m3 l3 xl2">
                          <select>
                            <option value="" disabled selected>DNI</option>
                            <option value="1">DNI</option>
                            <option value="2">LC</option>
                            <option value="3">LE</option>
                            <option value="4">Pasaporte</option>
                          </select>
                        </div>
                        <div class="input-field col s9 m9 l9 xl6">
                          <input value="" id="cellphone-number" type="text" class="validate">
                          <label class="active" for="id-number">DNI (Número de documento)</label>
                          <p class="helper">Ej: 36524856</p>
                        </div>
                      </div>
                      <div class="input-field col s12 m12 l12 xl6">
                        <input value="" id="user" type="text" class="validate">
                        <label class="active" for="user">Usuario</label>
                      </div>
                      <div class="input-field col s12 m12 l12 xl6">
                        <input value="" id="pasword" type="text" class="validate">
                        <label class="active" for="password">Contraseña</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12">
                        <a class="btn-flat modal-close waves-effect pd-l-0"><i class="material-icons left">close</i> Cancelar</a>
                        <a href="inicio_conpendientes.php" class="btn blue right"><i class="material-icons right">check</i>Importar</a>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>
  <?php include '_partials/modal_ticket.php'; ?>