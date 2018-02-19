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
        <div class="col s12">
          <!-- Masonry -->
<!--           <div id="masonry-grid" class="row">
            <div class="col s12"> -->

              <!-- <div class="row"> -->
                <div class="card-panel">
                  <!-- <h3 class="card-title">Buscar <span class="hide-on-med-and-up">por</span></h3> -->
                  <div class="row">
                    <div class="col s12">
                      <div class="card-tabs mg-b-30">
                        <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
                          <li class="tab col s6"><a href="#test-swipe-1"><span class="hide-on-small-only">Por</span> Nombre</a></li>
                          <li class="tab col s6 active"><a href="#test-swipe-2"><span class="hide-on-small-only">Por</span> Rubros</a></li>
                        </ul>
                      </div>
                      <div class="card-content">
                        <div id="test-swipe-1" class="col s12 white">
                          <!-- <div class="card-content"> -->
                            <div class="row mg-b-30">
                              <div class="col s12 m10 offset-m1 l8 offset-l2">
                                <div class="valign-wrapper">
                                  <input type="text" id="search1" placeholder="¿qué queres pagar?">
                                  <!-- <label for="search1" class="active">¿qué queres pagar?</label> -->
                                </div>
                              </div>
                            </div>
                            <ul class="collection clearfix">
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                  <!-- <img src="img/rubros/operadorestv.svg" alt="" class="circle"> -->
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas del litoral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripci lorenzo ipsum e querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro agua circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas del litoral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-2" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro recargas circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas Argentinas</span>
                                  <!-- <p class="grey-text text-darken-1">Descripci lorenzo ipsum mos poner</p> -->
                                </div>
                                <a href="#bd-3" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro segurodevida circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Agua Mineral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo q lorenzo ipsum er</p> -->
                                </div>
                                <a href="#bd-4" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro gas circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguatero Suplente</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-5" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro afip circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas Argentinas</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro clubesyasociaciones circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Agua Mineral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que lorenzo ipsum ner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguatero Suplente</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro agua circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas del litoral</span>
                                  <!-- <p class="grey-text text-darken-1">Descri lorenzo ipsum que qu Loren ipsum dolor ner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas Argentinas</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro patentes circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Agua Mineral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripció Loren ipsum dolor  que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguatero Suplente</span>
                                  <!-- <p class="grey-text text-darken-1">Descr Loren ipsum dolor Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro prepaga circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas del litoral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que Loren ipsum dolor oner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas Argentinas</span>
                                  <!-- <p class="grey-text text-darken-1">Descrip Loren ipsum dolor n Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro telefonia circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Agua Mineral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que que Loren ipsum dolor poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguatero Suplente</span>
                                  <!-- p class="grey-text text-darken-1">Descripción Id o algo q Loren ipsum dolor amos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro gas circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas del litoral</span>
                                  <!-- <p class="grey-text text-darken-1">Descripc Loren ipsum dolor Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguas Argentinas</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo que  Loren ipsum dolor s poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro tickets circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Agua Mineral</span>
                                  <!-- <p class="grey-text text-darken-1">Descr Loren ipsum dolor  Id o algo que querramos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                              <li href="#!" class="collection-item valign-wrapper flex avatar">
                                <rubro class="flex align-i-center absolute left-0">
                                  <div class="rubro operadorestv circle border-grey max-42 height-42 z-depth-2"></div>
                                </rubro>
                                <div class="left">
                                  <span class="h5 mg-r-15">Aguatero Suplente</span>
                                  <!-- <p class="grey-text text-darken-1">Descripción Id o algo qu Loren ipsum dolor amos poner</p> -->
                                </div>
                                <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                              </li>
                            </ul>
                        </div>
                        <div id="test-swipe-2" class="col s12 white relative">
                          <!-- <div class="card-content">  -->
                            <div class="row">
                              <div class=" col s12 m8 offset-m2 l8 offset-l2">
                                <select>
                                  <option value="0" selected disabled>Seleccioná uno</option>
                                  <option value="1" data-icon="img/rubros/afip.svg">AFIP</option>
                                  <option value="2" data-icon="img/rubros/afjp-aportes.svg">AFJP Aportes</option>
                                  <option value="3" data-icon="img/rubros/agua.svg">Agua</option>
                                  <option value="4" data-icon="img/rubros/barriosprivados.svg">Barrios privados</option>
                                  <option value="5" data-icon="img/rubros/clubesyasociaciones.svg">Clubes y asociaciones</option>
                                  <option value="6" data-icon="img/rubros/compras.svg">Compras</option>
                                  <option value="7" data-icon="img/rubros/consorcios.svg">Consorcios</option>
                                  <option value="8" data-icon="img/rubros/cooperativas.svg">Cooperativas</option>
                                  <option value="9" data-icon="img/rubros/correo.svg">Correo</option>
                                  <option value="10" data-icon="img/rubros/donaciones.svg">Donaciones</option>
                                  <option value="11" data-icon="img/rubros/electricidad.svg">Electricidad</option>
                                  <option value="12" data-icon="img/rubros/emergencias.svg">Emergencias médicas</option>
                                  <option value="13" data-icon="img/rubros/establecimientoseducativos.svg">Establecimientos educativos</option>
                                  <option value="14" data-icon="img/rubros/gas.svg">Gas</option>
                                  <option value="15" data-icon="img/rubros/generico.svg">Genérico</option>
                                  <option value="16" data-icon="img/rubros/imp-provincial.svg">Impuesto provincial</option>
                                  <option value="17" data-icon="img/rubros/impuestos.svg">Impuestos</option>
                                  <option value="18" data-icon="img/rubros/prepaga.svg">Medicina prepaga</option>
                                  <option value="19" data-icon="img/rubros/operadorestv.svg">Operadores de TV</option>
                                  <option value="20" data-icon="img/rubros/otrosservicios.svg">Otros servicios</option>
                                  <option value="21" data-icon="img/rubros/patentes.svg">Patentes</option>
                                  <option value="22" data-icon="img/rubros/planesdeahorro.svg">Planes de ahorro</option>
                                  <option value="23" data-icon="img/rubros/prepagos.svg">Prepagos</option>
                                  <option value="24" data-icon="img/rubros/prestamos.svg">Préstamos</option>
                                  <option value="25" data-icon="img/rubros/proveedoresinternet.svg">Proveedores de internet</option>
                                  <option value="26" data-icon="img/rubros/recargas.svg">Recargas</option>
                                  <option value="27" data-icon="img/rubros/registros.svg">Registros</option>
                                  <option value="28" data-icon="img/rubros/seguridad.svg">Seguridad</option>
                                  <option value="29" data-icon="img/rubros/seguros.svg">Seguros</option>
                                  <option value="30" data-icon="img/rubros/segurosderetiro.svg">Seguros de retiro</option>
                                  <option value="31" data-icon="img/rubros/segurodevida.svg">Seguros de vida</option>
                                  <option value="32" data-icon="img/rubros/serviciosweb.svg">Servicios web</option>
                                  <option value="33" data-icon="img/rubros/solicituddeinformes.svg">Solicitudes de informes</option>
                                  <option value="34" data-icon="img/rubros/tarjetasdecredito.svg">Tarjetas de crédito</option>
                                  <option value="35" data-icon="img/rubros/telefonia.svg">Telefonía</option>
                                  <option value="36" data-icon="img/rubros/tickets.svg">Tickets</option>
                                  <option value="37" data-icon="img/rubros/viajesyturismo.svg">Viajes y turismo</option>
                                </select>
                                <!-- <label>Seleccioná el rubro del pago que hiciste</label> -->
                              </div>
                            </div>
                            <!-- <p class="red-text">Se tiene que ver de a uno a medida que los elije</p> -->
                            <div class="clearfix flex flex-wrap rubros rubros-por-rubro flex-j-center">
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro agua white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/agua.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Agua</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Agua</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro electricidad white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/electricidad.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Electricidad</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Electricidad</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro barriosprivados white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/barriosprivados.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Barrios privados</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Barrios privados</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro impuestos white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/impuestos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Impuestos</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Impuestos</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro establecimientoseducativos white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/establecimientoseducativos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Establecimientos Educativos</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Establecimientos Educativos</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro prepaga white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/prepaga.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Medicina Prepaga</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Medicina Prepaga</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro emergencias white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/emergencias.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Emergencias médicas</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Emergencias médicas</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro recargas white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/recargas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Recargas</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Recargas</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro patentes white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/patentes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Patentes</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Patentes</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro operadorestv white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/operadorestv.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Operadores de tv</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Operadores de tv</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro consorcios white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/consorcios.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Consorcios</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Consorcios</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro clubesyasociaciones white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/clubesyasociaciones.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Clubes y asociaciones</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Clubes y asociaciones</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro gas white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/gas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Gas</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Gas</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro cooperativas white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/cooperativas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Cooperativas</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Cooperativas</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro donaciones white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/donaciones.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Donaciones</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Donaciones</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro serviciosweb white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/serviciosweb.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Servicios Web</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Servicios Web</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro seguridad white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/seguridad.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Seguridad</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Seguridad</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro proveedoresinternet white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/proveedoresinternet.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Proveedores de Internet</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Proveedores de Internet</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro segurodevida white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/segurodevida.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Seguros de Vida</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Seguros de Vida</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro tarjetasdecredito white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/tarjetasdecredito.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Tarjetas de Crédito</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Tarjetas de Crédito</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro seguros white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/seguros.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Seguros</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Seguros</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro segurosderetiro white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/segurosderetiro.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Seguros de retiro</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Seguros de retiro</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro telefonia white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/telefonia.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Telefonía</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Telefonía</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro viajesyturismo white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/viajesyturismo.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Viajes y turismo</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Viajes y turismo</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro otrosservicios white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/otrosservicios.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Otros servicio</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Otros servicio</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro prestamos white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/prestamos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Préstamos</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Préstamos</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro planesdeahorro white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/planesdeahorro.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Planes de ahorro</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Planes de ahorro</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro solicituddeinformes white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/solicituddeinformes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Solicitudes de informes</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Solicitudes de informes</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro generico white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/generico.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Genérico</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Genérico</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro afip white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/afip.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Afip</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p class="width-100 center-align mg-t-10">Afip</p>
                              </a>

                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro compras white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/compras.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Compras</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Compras</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro imp-provincial white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/imp-provincial.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Impuestos Provinciales</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Impuestos Provinciales</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro registros white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/registros.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Registros Nacionales</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Registros Nacionales</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro correo white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/correo.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Servicios de Correo</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Servicios de Correo</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro afjp-aportes white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/afjp-aportes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>AFJP Aportes Voluntarios</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">AFJP Aportes Voluntarios</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro tickets white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/tickets.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Tickets</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Tickets</p>
                              </a>
                              <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <div class="rubro prepagos white circle border-blue z-depth-2"></div>
                                      <!-- <img src="img/rubros/prepagos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt=""> -->
                                    </rubro>
                                    <p class="valign-wrapper mg-0 right">
                                      <span>Prepagos</span>
                                      <i class="close material-icons white-text tiny mg-l-15">close</i>
                                    </p>
                                </div>
                                <p style="font-size:.9em" class="width-100 center-align mg-t-10">Prepagos</p>
                              </a>

                            </div>

                            <form action="">
                              <div class="hide subrubro input-field">
                                <select>
                                  <option value="" disabled selected>Seleccioná el subrubro</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                                </select>
                                <label>Seleccioná el subrubro</label>
                              </div>
                              <div class="hide empresa-del-rubro input-field">
                                <select id="seleccionarEmpresa">
                                  <option value="" disabled selected>Seleccioná la empresa</option>
                                  <option value="1"><a href="#bd-1" class="modal-trigger">VEP</a></option>
                                  <option value="2"><a href="#bd-2" class="modal-trigger">ABSA</a></option>
                                  <option value="3"><a href="#bd-3" class="modal-trigger">CruzRoja</a></option>
                                  <option value="3"><a href="#bd-4" class="modal-trigger">AySA</a></option>
                                  <option value="3"><a href="#bd-5" class="modal-trigger">Personal</a></option>
                                </select>
                                <label>Seleccioná la empresa</label>
                              </div>
                            </form>

                          <!-- </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- </div> -->

<!--             </div>
          </div> -->

        </div>
      </div>
    </div>
  </main>

  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>
  <?php include '_partials/modal_ticket.php'; ?>

  <script>
  //Para que el div de img de rubro sea responsive
  function rubroResponsive(){
    $('div.rubro').each(function(index){
      $(this).css({
        'height': $(this).width() + 4 + 'px'
      })
    })
  }
  rubroResponsive();
  $(window).resize(rubroResponsive);
  </script>


</body>
</html>
