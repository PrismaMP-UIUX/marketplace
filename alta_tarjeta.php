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

                      <div class="card">
                        <div class="card-title">
                          <div class="col s12 push-m1">
                            <br>
                            <h3>Nuevo Medio de Pago</h3>
                          </div>
                        </div>
                         <div class="card-content">
                           <ul class="stepper linear">
                                                <li id="paso1" class="step active">
                                                   <div class="step-title waves-effect waves-white blue-text">Número de Tarjeta</div>
                                                   <div class="step-content">
                                                      <div class="row">
                                                        <div class="col m5 hide-on-small-only">
                                                          <img src="img/paso1.svg" alt="alta" width="380px">
                                                        </div>
                                                        <div class="col s12 hide-on-med-and-up">
                                                            <img src="img/paso1.svg" alt="alta" width="100%">
                                                        </div>
                                                      </div>

                                                      <div class="row">
                                                        <div class="col m12 s12">
                                                          <p class="grey-text">Ingresá el número de la tarjeta.</p>
                                                          <div class="input-field col m6 s11">
                                                             <input id="tarjeta" name="tarjeta" type="text" class="validate center-align" placeholder="0000 0000 0000 0000 0000" required>
                                                          </div>
                                                        </div>
                                                      </div>

                                                      <div class="step-actions">
                                                         <a href="#paso2" class="btn blue waves-effect waves-white next-step">Siguiente</a> <!-- data-feedback="anyThing" -->
                                                      </div>
                                                   </div>
                                                </li>
                                                <li id="paso2" class="step">
                                                   <div class="step-title waves-effect waves-white blue-text">Fecha de Vencimiento</div>
                                                   <div class="step-content">
                                                     <div class="row">
                                                       <div class="col m5 hide-on-small-only">
                                                         <img src="img/paso2.svg" alt="vencimiento" width="380px">
                                                       </div>

                                                       <div class="col s12 hide-on-med-and-up">
                                                          <img src="img/paso2.svg" alt="vencimiento" width="100%">
                                                       </div>
                                                     </div>

                                                     <div class="row">
                                                       <div class="col m12 s12">
                                                          <p class="grey-text">Ingresá la fecha de vencimiento, primero el mes y luego el año.</p>
                                                          <div class="input-field col m3 s6">
                                                             <input id="mes" name="mes" type="text" class="validate center-align" placeholder="MM" required>
                                                          </div>
                                                          <div class="input-field col m3 s6">
                                                             <input id="anio" name="anio" type="text" class="validate center-align" placeholder="AAAA" required>
                                                          </div>
                                                       </div>
                                                     </div>

                                                      <div class="step-actions">
                                                        <a href="#paso1" class="btn-flat waves-effect waves-white previous-step hide-on-small-only">Atrás</a>
                                                         <a href="#paso3" class="btn blue waves-effect waves-white next-step">Siguiente</a>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li id="paso3" class="step">
                                                  <div class="step-title waves-effect waves-white blue-text">Código de seguridad</div>
                                                  <div class="step-content">
                                                    <div class="row">
                                                      <div class="col m5 hide-on-small-only">
                                                        <img src="img/paso3.svg" alt="vencimiento" width="380px">
                                                      </div>
                                                      <div class="col m5 hide-on-med-and-up">
                                                         <img src="img/paso3.svg" alt="vencimiento" width="100%">
                                                      </div>
                                                    </div>

                                                    <div class="row">
                                                      <div class="col m12 s12">
                                                        <p class="grey-text">Ingresá el código que se encuentra en el reverso de la tarjeta.</p>
                                                        <div class="input-field col m3 s8">
                                                           <input id="seguridad" name="seguridad" type="text" class="validate center-align" placeholder="0000" required>
                                                        </div>
                                                      </div>
                                                    </div>

                                                     <div class="step-actions">
                                                       <button class="waves-effect waves-dark btn-flat previous-step hide-on-small-only">Atrás</button>
                                                        <button class="waves-effect waves-dark btn blue next-step">Siguiente</button>
                                                     </div>
                                                   </div>
                                                </li>
                                                <li class="step">
                                                   <div class="step-title waves-effect waves-white blue-text">Habilitar tarjeta en Todo Pago</div>

                                                   <div class="step-content">
                                                      <p class="grey-text">
                                                        Enviamos un pequeño consumo a tu tarjeta. Consulta el importe exacto en tu estado de cuenta (Home Banking). Ingresa a la seccióon Billetera de <b>Todo Pago</b>
                                                        nuevamente y completa este valor haciendo click en (xxxxx). No te preocupes, reembolsaremos ese dinero a tu Medio de Pago. <a href="#" class="orange-text">Ir a Todo Pago.</a>
                                                      </p>
                                                    <div class="col m4 push-m3">
                                                      <img src="img/todopago.jpg" alt="todopago" width="100%">
                                                    </div>
                                                   </div>
                                                </li>
                                             </ul>

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
