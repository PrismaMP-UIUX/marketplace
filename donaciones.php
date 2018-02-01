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
                  <h3 class="card-title">Donaciones</h3>
                  <p>La manera más sencilla de aportar a la sociedad.</p>
                  <a>Cómo reducir impuestos</a>
                  <div class="row">
                    <div class="col s12">
                      <div class="row stock-images">
                        <div class="col s6 m2"><input id="movistar" name="carrier" type="radio" /><label for="movistar">
                            <div class="image" style="background-image: url(http://loremflickr.com/620/440/london)"></div>
                          </label>
                        </div>
                        <div class="col s6 m2"><input id="claro" name="carrier" type="radio" /><label for="claro">
                            <div class="image" style="background-image: url(http://loremflickr.com/620/440/london)"></div>
                          </label>
                        </div>
                        <div class="col s6 m2"><input id="test2" name="carrier" type="radio" /><label for="test2">
                            <div class="image" style="background-image: url(http://loremflickr.com/620/440/london)"></div>
                          </label>
                        </div>
                        <div class="col s6 m2">
                          <input checked="checked" id="test3" name="carrier" type="radio" /><label for="test3">
                            <div class="image" style="background-image: url(http://loremflickr.com/620/440/london)"></div>
                          </label>
                        </div>
                        <div class="col s6 m2"><input id="test4" name="carrier" type="radio" /><label for="test4">
                            <div class="image" style="background-image: url(http://loremflickr.com/620/440/london)"></div>
                          </label>
                        </div>
                      </div>
                      <div class="row mg-b-30">
                        <div class="col s12">
                          <div class="valign-wrapper">
                            <input type="text" id="search1" placeholder="Buscá otras causas">
                            <!-- <label for="search1" class="active">Buscá otras causas</label> -->
                          </div>
                        </div>
                      </div>
                      <div class="form-footer col s8">
                      <a class="btn blue modal-action modal-close waves-effect waves-light" href="donar.php"> Siguiente</a>
                        <!--<button class="btn waves-effect waves-light blue" type="submit" name="action">Siguiente</button>-->
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
