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
                  <p> Elige una organización.</p>
                  <div class="row">
                    <div class="col s12">
                        <div class="row stock-images col s12 m12 offset-m1">
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
                      <div class="row mg-b-0">
                        <div class="col s12 mg-t-20 input-field">
                          <input type="text" id="autocomplete-input" class="autocomplete" autocomplete="off">
                          <label for="autocomplete-input" class="">Buscá otras causas</label>
                        <ul class="autocomplete-content dropdown-content"></ul>
                        </div>
                      </div>
                      <div class="form-footer">
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
