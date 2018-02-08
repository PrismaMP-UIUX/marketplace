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
                  <h3 class="card-title mg-10">Recarga transporte</h3>
                  <p class="mg-10">La manera más fácil de obtener crédito para tus servicios.</p>
                  <p class="mg-10 summary">Elegí tu compañía.</p>
                  <div class="row">
                    <div class="col s12">
                      <div class="row stock-images">
                        <div class="col s2 m6 l3">
                          <input id="sube" name="carrier" type="radio" />
                          <label for="sube">
                            <img class="image" src="/img/logo_sube.jpg">
                          </label>
                        </div>
                        <div class="col s2 m6 l3">
                          <input id="movi-tarjeta" name="carrier" type="radio" />
                          <label for="movi-tarjeta">
                            <img class="image" src="/img/movi-tarjeta.jpg">
                          </label>
                        </div>
                        <div class="col s2 m6 l3">
                          <input id="saeta" name="carrier" type="radio" />
                          <label for="saeta">
                            <img class="image" src="/img/logo_saeta.jpg">
                          </label>
                        </div>
                        <div class="col s2 m6 l3">
                          <input checked="checked" id="red-bus" name="carrier" type="radio" />
                          <label for="red-bus">
                              <img class="image" src="/img/red-bus.png">
                         </label>
                        </div>
                      </div>
                      <div class="input-field col s12 m12 l8">
                        <input value="" id="cellphone-number" type="text" class="validate">
                        <label class="active" for="cellphone-number">Número de tarjeta</label>
                        <p class="helper">Se encuentra en el frente de la misma</p>
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
