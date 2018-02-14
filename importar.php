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
                        <option data-icon="img/bancos_CH/bancos_CH_santanderrio.svg" value="" disabled selected>Santander Río</option>
                        <option data-icon="img/bancos_CH/bancos_CH_columbia.svg" value="1">Columbia</option>
                        <option data-icon="img/bancos_CH/bancos_CH_itau.svg" value="2">Itaú</option>
                        <option data-icon="img/bancos_CH/bancos_CH_santanderrio.svg" value="3">Santander Río</option>
                        <option data-icon="img/bancos_CH/bancos_CH_comafi.svg" value="4">Banco Comafi</option>
                        <option data-icon="img/bancos_CH/bancos_CH_hsbc.svg" value="5">HSBC</option>
                        <option data-icon="img/bancos_CH/bancos_CH_tucuman.svg" value="6">Banco Tucumán</option>
                        <option data-icon="img/bancos_CH/bancos_CH_galicia.svg" value="7">Galicia</option>
                        <option data-icon="img/bancos_CH/bancos_CH_macro.svg" value="8">Macro</option>
                        <option data-icon="img/bancos_CH/bancos_CH_icbc.svg" value="9">ICBC</option>
                        <option data-icon="img/bancos_CH/bancos_CH_frances.svg" value="10">BBVA Francés</option>
                        <option data-icon="img/bancos_CH/bancos_CH_patagonia.svg" value="11">Banco Patagonia</option>
                        <option data-icon="img/bancos_CH/bancos_CH_supervielle.svg" value="12">Supervielle</option>
                        <option data-icon="img/bancos_CH/bancos_CH_bancodelsol.svg" value="13">Banco del Sol</option>
                        <option data-icon="img/bancos_CH/bancos_CH_bancorepublica.svg" value="14">Banco República</option>
                        <option data-icon="img/bancos_CH/bancos_CH_bst.svg" value="15">BST</option>
                        <option data-icon="img/bancos_CH/bancos_CH_efectivosi.svg" value="16">Efectivo Sí</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <p class="col s12 m12 l12 xl12 import_description">Ingresa los últimos cuatro digitos de tu tarjeta de débito:</p>
                    <div class="input-field col s6 m4 l4 xl4">
                      <input value="" id="user" type="text" class="validate">
                    </div>
                  </div> -->
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
