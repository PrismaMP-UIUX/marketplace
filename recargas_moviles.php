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
          <div class="col s6 offset-s3">
            <div class="row">
              <div class="card-panel">
                <form>
                  <h3 class="card-title">Recargas móviles</h3>
                  <p>La manera más fácil de obtener crédito para tus servicios.</p>
                  <p>Elegí tu operadora de celular.</p>
                  <div class="row">
                    <div class="col s12">
                      <div class="row stock-images">
                        <div class="col s6 m2">
                          <input id="movistar" name="carrier" type="radio" />
                          <label for="movistar">
                            <img class="image" src="/img/movistar.jpg">
                          </label>
                        </div>
                        <div class="col s6 m2">
                          <input id="claro" name="carrier" type="radio" />
                          <label for="claro">
                            <img class="image" src="/img/claro.jpg">
                          </label>
                        </div>
                        <div class="col s6 m2">
                          <input id="nextel" name="carrier" type="radio" />
                          <label for="nextel">
                            <img class="image" src="/img/nextel.jpg">
                          </label>
                        </div>
                        <div class="col s6 m2">
                          <input checked="checked" id="personal" name="carrier" type="radio" />
                          <label for="personal">
                              <img class="image" src="/img/personal.jpg">
                         </label>
                        </div>
                        <div class="col s6 m2">
                          <input id="tuenti" name="carrier" type="radio" />
                          <label for="tuenti">
                            <img class="image" src="/img/tuenti.jpg">
                          </label>
                        </div>
                      </div>
                      <div class="input-field col s8">
                        <input value="" id="cellphone-number" type="text" class="validate">
                        <label class="active" for="cellphone-number">Número de celular</label>
                        <p class="helper">Ej: 1153334444</p>
                      </div>
                      <div class="input-field col s8">
                        <input value="" id="amount" type="text" class="validate">
                        <label class="active" for="amount">Importe a recargar</label>
                      </div>
                      <div class="input-field col s8">
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
