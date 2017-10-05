<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header.php'; ?>
  <?php include '_partials/nav.php'; ?>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">
      <div class="row">
        <div class="col s12 m7 l7 offset-l2 ">
          <!-- steps -->

                      <div class="card hoverable">
                        <div class="card-title">
                        <div class="col s12">
                          <div class="col m9 s6 mg-t-30">
                            <h2 class="hide-on-small-only"><b>Medios de Pago</b></h2>
                            <h4 class="hide-on-med-and-up"><b>Medios de Pago</b></h4>
                          </div>
                          <div class="col m3 pull-m1 s5 mg-t-40">
                            <img src="img/todopago.jpg" alt="todopago" width="100%">                                                    
                          </div>
                        </div>
                        </div>
                         <div class="card-content">
                           <div class="row">
                             <div class="col s12">
                               <h5 class="black-text">Creá tu Billetera Virtual y recordá los datos de tus tarjetas para los próximos pagos.</h5>
                              <p class="grey-text">
                                ¡Es fácil! Deberás ingresar manualmente y por única vez todos los datos de la tarjeta de crédito y débito que desees adherir. Nosotros validaremos la titularidad.
                              </p>
                             </div>
                           </div>

                           <div class="row">
                             <div class="col s12">
                              <h6 class="pink-text"><b>Sobre Todo Pago</b></h6>
                             </div>
                             <div class="col s12">
                               <ul class="collapsible" data-collapsible="accordion">
                                  <li>
                                    <div class="collapsible-header grey lighten-3"><i class="material-icons">add</i>¿Qué es Todo Pago?</div>
                                    <div class="collapsible-body">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                      </p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="collapsible-header grey lighten-3"><i class="material-icons">add</i>Lorem ipsum dolor sit amet.</div>
                                    <div class="collapsible-body">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                      </p>
                                    </div>
                                  </li>
                                </ul>
                             </div>
                           </div>

                           <div class="row">
                             <div class="col s12">
                              <h6 class="pink-text"><b>Lorem ipsum dolor sit amet</b></h6>
                             </div>
                             <div class="col s12">
                               <ul class="collapsible" data-collapsible="accordion">
                                  <li>
                                    <div class="collapsible-header grey lighten-3"><i class="material-icons">add</i><span class="pink-text">¿Lorem ipsum, dolor?</span></div>
                                    <div class="collapsible-body">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                      </p>
                                    </div>
                                  </li>
                                </ul>
                             </div>
                           </div>

                           <div class="row">
                             <div class="col s12 m9 push-m1 right">
                               <a class="btn blue waves-effect waves-light" href="alta_tarjeta.php"><span class="hide-on-small-only">Comencemos /</span> Agregar Medio de Pago</a>
                             </div>
                           </div>

                         </div>
                      </div>

          <!-- end steps -->
        </div>
      </div>

    </div>
  </main>


  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>

  <script>
  $(function(){
     $('.stepper').activateStepper();
  });
  </script>


</body>
</html>
