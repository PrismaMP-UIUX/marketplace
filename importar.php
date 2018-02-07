<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <div>
    <?php include '_partials/header.php'; ?>
    <?php include '_partials/nav.php'; ?>
  </div>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2 import">
    <div class="container">

      <div class="row">
        <div id="masonry-grid" class="row">
          <div class="col s12 m10 offset-m1 l6 offset-l3">
            <div class="row">
              <div class="card-panel">
                <form>
                  <h3 class="card-title">¿Querés importar tus pagos anteriores?</h3>
                  <p class="summary">De esta manera podrás acceder a la información de los servicios que pagabas con tu usuario bancario.</p>
                  <div class="row">
                    <div class="input-field col s12 m12 l12 xl8">
                      <p class="import_selector import_description">Seleccioná tu banco</p>
                      <select>
                        <option value="" disabled selected>Sanrander Río</option>
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
                  </div> 
                  <div class="row">
                    <p class="col s12 m12 l12 xl12 import_description">Ingresa los últimos cuatro digitos de tu tarjeta de débito:</p>
                    <div class="input-field col s6 m4 l4 xl4">
                      <input value="" id="user" type="text" class="validate">
                    </div>
                  </div>
                  <div class="row">
                      <div class="col s12">
                        <a href="inicio_conpendientes.php" class="btn blue left">Importar</a>
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