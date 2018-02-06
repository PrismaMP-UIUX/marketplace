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
        <div class="row">
          <div class="col s12 m6 offset-m3">
            <div class="row">
              <div class="card-panel">
                <form>
                  <h3 class="card-title mg-10">Recarga prepago</h3>
                  <p class="mg-10">La manera más fácil de obtener crédito para tus servicios.</p>
                  <p class="mg-10">Elegí tu servicio.</p>
                  <div class="row">
                    <div class="col s12">
                      <div class="row stock-images mg-10">
                        <div class="col s6 m6 l2">
                          <input id="directv" name="carrier" type="radio" />
                          <label for="directv">
                            <img class="image" src="/img/DirecTV_logo.jpg">
                          </label>
                        </div>
                        <div class="col s6 m6 l2">
                          <input id="pim" name="carrier" type="radio" />
                          <label for="pim">
                            <img class="image" src="/img/logo-pim.jpg">
                          </label>
                        </div>
                      </div>
                      <div class="input-field col s12 m12 l8">
                        <input value="" id="cellphone-number" type="text" class="validate">
                        <label class="active" for="cellphone-number">Número de socio</label>
                        <p class="helper">Ej: 1153334444</p>
                      </div>
                      <div class="input-field col s12 m12 l8">
                        <input value="" id="amount" type="text" class="validate">
                        <label class="active" for="amount">Importe a recargar</label>
                      </div>
                      <div class="input-field col s12 m12 l8">
                          <select>
                            <option value="" disabled selected>Seleccioná el medio de pago</option>
                            <option value="1">CA #0000-00</option>
                            <option value="2">Visa -0392</option>
                            <option value="3">Mastercard -3333</option>
                          </select>
                          <label>Medio de pago</label>
                        </div>
                        <div class="form-footer col s8">
                          <button class="btn waves-effect waves-light blue" type="submit" name="action">Recargar</button>
                        </div>
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
