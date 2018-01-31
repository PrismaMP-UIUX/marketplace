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
          <div class="col s12 m6 offset-m3">
            <div class="row">
              <div class="card-panel">
                <form>
                  <h3 class="card-title">Donar</h3>
                  <p>Para poder donar completa tus datos.</p>
                  <div class="row">
                    <div class="col s12">
                      <div class="input-field col s12 m12 l8">
                        <input value="" id="cellphone-number" type="text" class="validate">
                        <label class="active" for="id-number">DNI (Número de documento)</label>
                        <p class="helper">Ej: 36524856</p>
                      </div>
                      <div class="input-field col s12 m12 l6">
                        <input value="" id="amount" type="text" class="validate">
                        <label class="active" for="amount">Importe a donar</label>
                      </div>
                      <div class="input-field donate-radio col s12 m12 l6">
                        <input name="grp1" type="radio" id="r1" checked="checked">
                        <label for="r1">Solo por esta vez</label>
                        <input name="grp1" type="radio" id="r2">
                        <label for="r2">Mensual</label>
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
                        <button class="btn waves-effect waves-light blue" type="submit" name="action">Donar</button>
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
