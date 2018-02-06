<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <div>
    <?php include '_partials/header.php'; ?>
    <?php include '_partials/nav.php'; ?>
  </div>
  <?php include '_partials/actions.php'; ?>

  <main class="donate grey-text text-darken-2">
    <div class="container">

      <div class="row">

        <div class="row">
          <div class="col s12 m12 l10 offset-l1 xl10 offset-xl1">
            <div class="row">
              <div class="card-panel">
                <form>
                  <h3 class="card-title">Donar</h3>
                  <p>La manera más sencilla de aportar a la sociedad.</p>
                  <div class="row">
                    
                    <div class="donate_options col s12 m6 l6 xl7">

                        <p> Elige una organización.</p>
                        <div class="stock-images row col s12 m12">
                          <div class="col s12 m12"><input id="unicef" name="donation" type="radio" /><label for="unicef">
                              <img src="/img/banner-unicef.png">
                            </label>
                          </div>
                          <div class="col s3 m6 l4"><input id="fundacion_leer" name="donation" type="radio" /><label for="fundacion_leer">
                              <img class="image" src="/img/fundacion-leer-logo.png">
                            </label>
                          </div>
                          <div class="col s3 m6 l4"><input id="cilsa" name="donation" type="radio" /><label for="cilsa">
                              <img class="image" src="/img/cilsa.png">
                            </label>
                          </div>
                          <div class="col s3 m6 l4">
                            <input checked="checked" id="vivienda_digna" name="donation" type="radio" /><label for="vivienda_digna">
                              <img class="image" src="/img/vivienda-digna.png">
                            </label>
                          </div>
                          <div class="col s3 m6 l4">
                            <input checked="checked" id="caritas_logo" name="donation" type="radio" /><label for="caritas_logo">
                              <img class="image" src="/img/caritas-logo.png">
                            </label>
                          </div>
                          <div class="col s3 m6 l4">
                            <input checked="checked" id="infancia_segura" name="donation" type="radio" /><label for="infancia_segura">
                              <img class="image" src="/img/fundacion-infancia-segura.png">
                            </label>
                          </div>
                          <div class="col s3 m6 l4">
                            <input checked="checked" id="banco_de_alimentos" name="donation" type="radio" /><label for="banco_de_alimentos">
                              <img class="image" src="/img/menos-hambre.png">
                            </label>
                          </div>
                        </div>
                    </div><!--/donate_options-->


                    <div class="col s12 m6 l6 xl5 ">
                      <div class="donate_description">
                        <h3>Unicef</h3>
                        <p><strong>UNICEF</strong> trabaja en 190 países y territorios para salvar las vidas de los niños y niñas. Para defender sus derechos. Para ayudarles a alcanzar su máximo potencial. Y nunca nos rendimos. 
                        <p>El apoyo de donantes individuales constituye la mayor parte de los fondos con los que <strong>UNICEF</strong> financia sus programas. Gracias a ello, se logra continuar y ampliar las acciones que benefician a los niños, niñas y adolescentes argentinos.
                        </p>
                      </div>
                    </div>
                  </div><!--/row-->
                  <div class="form-footer">
                    <a class="btn blue modal-action waves-effect waves-light" href="donar.php">Hacé tu donación</a>
                    <a href="buscar.php" class="waves-teal btn-flat"><strong>Buscar más organizaciones</strong></a>
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
