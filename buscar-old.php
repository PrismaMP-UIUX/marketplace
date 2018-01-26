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
          <div class="col s12">

            <div class="row">
              <div class="card-panel">
                <h3 class="card-title">Buscar <span class="hide-on-med-and-up">por</span></h3>
                <div class="row">
                  <div class="col s12">
                    <div class="card-tabs mg-b-30">
                      <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
                        <li class="tab col s3"><a href="#test-swipe-1"><span class="hide-on-small-only">Por</span> Nombre</a></li>
                        <li class="tab col s3 active"><a href="#test-swipe-2"><span class="hide-on-small-only">Por</span> Rubros</a></li>
                        <li class="tab col s3" ><a href="#swipe-pagos"><span class="hide-on-small-only">Pagos</span> Realizados</a></li>
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
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas del litoral</span>
                                <!-- <p class="grey-text text-darken-1">Descripci lorenzo ipsum e querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas del litoral</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-2" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/telefonia.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas Argentinas</span>
                                <!-- <p class="grey-text text-darken-1">Descripci lorenzo ipsum mos poner</p> -->
                              </div>
                              <a href="#bd-3" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/recargas.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Agua Mineral</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo q lorenzo ipsum er</p> -->
                              </div>
                              <a href="#bd-4" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguatero Suplente</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-5" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/telefonia.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas Argentinas</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/recargas.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Agua Mineral</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que lorenzo ipsum ner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguatero Suplente</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas del litoral</span>
                                <!-- <p class="grey-text text-darken-1">Descri lorenzo ipsum que qu Loren ipsum dolor ner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/telefonia.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas Argentinas</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/recargas.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Agua Mineral</span>
                                <!-- <p class="grey-text text-darken-1">Descripció Loren ipsum dolor  que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguatero Suplente</span>
                                <!-- <p class="grey-text text-darken-1">Descr Loren ipsum dolor Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas del litoral</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que Loren ipsum dolor oner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/telefonia.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas Argentinas</span>
                                <!-- <p class="grey-text text-darken-1">Descrip Loren ipsum dolor n Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/recargas.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Agua Mineral</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que que Loren ipsum dolor poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguatero Suplente</span>
                                <!-- p class="grey-text text-darken-1">Descripción Id o algo q Loren ipsum dolor amos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas del litoral</span>
                                <!-- <p class="grey-text text-darken-1">Descripc Loren ipsum dolor Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/telefonia.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Aguas Argentinas</span>
                                <!-- <p class="grey-text text-darken-1">Descripción Id o algo que  Loren ipsum dolor s poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/recargas.svg" alt="" class="circle">
                              </rubro>
                              <div class="left">
                                <span class="h5 mg-r-15">Agua Mineral</span>
                                <!-- <p class="grey-text text-darken-1">Descr Loren ipsum dolor  Id o algo que querramos poner</p> -->
                              </div>
                              <a href="#bd-1" class="modal-trigger btn blue white-text right mg-t-10 mg-b-10">AGREGAR</a>
                            </li>
                            <li href="#!" class="collection-item valign-wrapper flex avatar">
                              <rubro class="flex align-i-center absolute left-0">
                                <img src="img/rubros/operadorestv.svg" alt="" class="circle">
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
                          <!-- <p class="red-text">Se tiene que ver de a uno a medida que los elije</p> -->
                          <div class="clearfix flex flex-wrap rubros rubros-por-rubro flex-j-center">
                            <a href="#!" class="rubroNoActivo max-125 left pd-15 flex flex-j-center">
                              <div>
                                  <rubro>
                                    <img src="img/rubros/agua.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/electricidad.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/barriosprivados.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/impuestos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/establecimientoseducativos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/prepaga.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/emergencias.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/recargas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/patentes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/operadorestv.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/consorcios.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/clubesyasociaciones.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/gas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/cooperativas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/donaciones.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/serviciosweb.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/seguridad.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/proveedoresinternet.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/segurodevida.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/tarjetasdecredito.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/seguros.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/segurosderetiro.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/telefonia.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/viajesyturismo.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/otrosservicios.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/prestamos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/planesdeahorro.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/solicituddeinformes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/generico.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/afip.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/compras.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/imp-provincial.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/registros.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/correo.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/afjp-aportes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/tickets.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                                    <img src="img/rubros/prepagos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
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
                      <div id="swipe-pagos" class="col s12 white">
                        <div class="row">
                          <div class="col s12" id="seleccionDeRubro">
                            <!-- Vista Rubros -->
                            <div class="clearfix flex flex-wrap rubros main-rubros flex-j-center left mg-r-15 width-100">
                              <p class="col s12 center-align">Seleccioná el rubro que querés consultar</p>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/agua.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Agua</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                  <div class="notificacion blue tooltipped" data-position="top" data-delay="50" data-text="Empresas guardadas <br> y pagadas">
                                      <i class="material-icons white-text">receipt</i>
                                    </div>
                                    <rubro>
                                      <img src="img/rubros/electricidad.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Electricidad</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/barriosprivados.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Barrios privados</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                  <div class="notificacion blue tooltipped" data-position="top" data-delay="50" data-text="Empresas guardadas <br> y pagadas">
                                      <i class="material-icons white-text">receipt</i>
                                    </div>
                                    <rubro>
                                      <img src="img/rubros/impuestos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Impuestos</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/establecimientoseducativos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Establecimientos Educativos</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                  <div class="notificacion blue tooltipped" data-position="top" data-delay="50" data-text="Empresas guardadas <br> y pagadas">
                                      <i class="material-icons white-text">receipt</i>
                                    </div>
                                    <rubro>
                                      <img src="img/rubros/prepaga.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Medicina Prepaga</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/emergencias.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Emergencias Médicas</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                  <div class="notificacion blue tooltipped" data-position="top" data-delay="50" data-text="Empresas guardadas <br> y pagadas">
                                      <i class="material-icons white-text">receipt</i>
                                    </div>
                                    <rubro>
                                      <img src="img/rubros/recargas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Recargas</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/patentes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Patentes</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/operadorestv.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Operadores de TV</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/consorcios.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Consorcios</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/clubesyasociaciones.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Clubes y Asociaciones</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/gas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Gas</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/cooperativas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Cooperativas</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <div class="notificacion blue tooltipped" data-position="top" data-delay="50" data-text="Empresas guardadas <br> y pagadas">
                                      <i class="material-icons white-text">receipt</i>
                                    </div>
                                    <rubro>
                                      <img src="img/rubros/donaciones.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Donaciones</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/serviciosweb.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Servicios Web</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/seguridad.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Seguridad</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/proveedoresinternet.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Proveedores de Internet</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/segurodevida.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Seguros de Vida</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/tarjetasdecredito.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Tarjetas de Crédito</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/seguros.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Seguros</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/segurosderetiro.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Seguros de Retiro</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/telefonia.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Telefonía</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/viajesyturismo.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Viajes y Turismo</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/otrosservicios.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Otros Servicios</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/prestamos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Préstamos</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/planesdeahorro.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Planes de Ahorro</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/solicituddeinformes.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Solicitudes de Informes</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                    <rubro>
                                      <img src="img/rubros/afip.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                    </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">AFIP</p>
                              </a>
                            </div>
                          </div>
                          <div id="seleccionEmpresa" class="hide">
                            <div class="rubros width-100">
                              <a href="#!" class="pd-15 flex flex-j-center rubroActivo width-100">
                                <div class="truncate white-text relative pd-l-45 pd-r-45" style="width: auto;">
                                  <rubro>
                                    <img src="img/rubros/recargas.svg" class="top-0 left-0 left white absolute circle responsive-img lighten-3 z-depth-2" alt="">
                                  </rubro>
                                  <span class="truncate pd-0 mg-t-10 mg-b-9 chip-rubro"></span>
                                  <i class="close material-icons white-text tiny top-13 absolute right-10">close</i>
                                </div>
                              </a>
                            </div>
                            <p class="mg-t-0">¿Qué empresa busca?</p>
                            <div class="clearfix flex flex-wrap rubros main-rubros flex-j-center left mg-t-15 width-100">

                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                  <rubro>
                                    <img src="img/aysa.jpg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                  </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Aysa</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                  <rubro>
                                    <img src="img/claro.jpg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                  </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Claro</p>
                              </a>
                              <a href="#!" class="max-125 left pd-15 flex flex-j-center">
                                <div>
                                  <rubro>
                                    <img src="img/personal.jpg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                  </rubro>
                                </div>
                                <p class="width-100 center-align mg-t-10">Personal</p>
                              </a>
                            </div>
                          </div>
                          <div id="historial-main" class="hide">
                            <aside id="historial-filtros-side" class="col s12 m4 flex flex-j-center">
                              <div class="hide-on-small-only width-100">
                                <div class="rubros width-100">
                                  <p class="filtro-name width-100"><b class="blue-text">Rubro</b></p>
                                  <a href="#!" class="pd-15 flex flex-j-center rubroActivo width-100">
                                    <div class="truncate white-text relative pd-l-45 pd-r-45" style="width: auto;">
                                      <rubro>
                                        <img src="img/rubros/recargas.svg" class="top-0 left-0 left white absolute circle responsive-img lighten-3 z-depth-2" alt="">
                                      </rubro>
                                      <span class="truncate pd-0 mg-t-10 mg-b-9 chip-rubro"></span>
                                        <i class="close material-icons white-text tiny top-13 absolute right-10">close</i>
                                    </div>
                                  </a>
                                </div>
                                <div class="pd-r-15 width-100 clearfix">
                                  <p class="width-100 filtro-name mg-t-0"><b class="blue-text">Empresa</b></p>
                                  <div class="input-field left mg-0 relative width-100" style="top: -7px;">
                                    <select>
                                      <option value="" disabled selected>Seleccioná la empresa</option>
                                      <option value="1">Claro</option>
                                      <option value="2">Personal</option>
                                      <option value="2">Movistar</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="pd-r-15 width-100">
                                  <p class="width-100 filtro-name mg-t-0"><b class="blue-text">Fecha</b></p>
                                  <div class="input-field width-100">
                                    <input type="text" class="datepicker" plasholder="Desde">
                                    <label for="first_name">Desde</label>
                                  </div>
                                  <div class="input-field width-100">
                                    <input type="text" class="datepicker" plasholder="Desde">
                                    <label for="first_name">Hasta</label>
                                  </div>
                                </div>

                                <div class="pd-r-15 width-100">
                                  <p class="width-100 filtro-name mg-t-0"><b class="blue-text">Medio de pago</b></p>
                                  <p>
                                    <input type="checkbox" class="filled-in" id="test6" checked />
                                    <label for="test6">Cuenta bancaria xxxx-xxxx-xxxx</label>
                                  </p>
                                  <p>
                                    <input type="checkbox" class="filled-in" id="tess6" checked />
                                    <label for="tess6">Tarjeta de crédito VISA terminada en 7869</label>
                                  </p>
                                </div>
                              </div>
                              <div class="hide-on-med-and-up row width-100">
                                <div class="rubros left">
                                  <a href="#!" class="pd-15 flex flex-j-center rubroActivo width-100 height-40 mg-b-15">
                                    <div class="truncate white-text relative pd-l-45 pd-r-45 width-100" style="width: auto;">
                                      <rubro>
                                        <img src="img/rubros/recargas.svg" class="top-0 left-0 left white absolute circle responsive-img lighten-3 z-depth-2" alt="">
                                      </rubro>
                                      <span class="truncate pd-0 mg-t-10 mg-b-9 chip-rubro"></span>
                                        <i class="close material-icons white-text tiny top-13 absolute right-10">close</i>
                                    </div>
                                  </a>
                                </div>
                                <div class="right">
                                  <a href="#!" class="btn blue right" id="trigger-filtros-mobile">Filtros</a>
                                </div>
                                <div class="col s12">
                                  <ul class="collapsible hide" data-collapsible="accordion" id="filtros-mobile">
                                    <li>
                                      <div class="collapsible-header">Empresa</div>
                                      <div class="collapsible-body">
                                        <p class="input-field mg-0 width-100">
                                          <select>
                                            <option value="1" selected>Claro</option>
                                            <option value="2">Personal</option>
                                            <option value="2">Movistar</option>
                                          </select>
                                        </p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="collapsible-header">Fecha</div>
                                      <div class="collapsible-body">
                                        <p class="input-field width-100">
                                          <input type="text" class="datepicker" plasholder="Desde">
                                          <label for="first_name">Desde</label>
                                        </p>
                                        <p class="input-field width-100">
                                          <input type="text" class="datepicker" plasholder="Desde">
                                          <label for="first_name">Hasta</label>
                                        </p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="collapsible-header">Medio de pago</div>
                                      <div class="collapsible-body">
                                        <p>
                                          <input type="checkbox" class="filled-in" id="312423" checked />
                                          <label for="312423">Cuenta bancaria xxxx-xxxx-xxxx</label>
                                        </p>
                                        <p>
                                          <input type="checkbox" class="filled-in" id="5433" checked />
                                          <label for="5433">Tarjeta de crédito VISA terminada en 7869</label>
                                        </p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </aside>
                            <div class="col s12 m8">
                              <ul class="collection mg-t-0">
                                <li class="pd-15 collection-item">
                                  <p class="h4"><b>Empresa: Claro</b></p>
                                </li>
                                <li class="pd-15 collection-item relative">
                                  <div class="input-container left">
                                    <input type="checkbox" class="filled-in" id="filled-in-box-7" onclick="">
                                    <label for="filled-in-box-7"></label>
                                  </div>
                                  <div class="flex flex-j-between">
                                    <div class="flex valign-wrapper flex-grow flex-flow-column align-i-start">
                                      <div>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>13/10/2017 - $1000</b></span>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (Agua)</span>
                                      </div>
                                      <p class="block grey-text text-lighten-1 width-100 mg-0" style="font-size:.8em;">
                                        Identificación: 131243534 / Nro de control: 6017
                                      </p>
                                    </div>
                                    <div class="flex flex align-i-center">
                                      <a href="#imprimir" class="btn-flat modal-trigger blue-text flex valign-wrapper">
                                        <i class="material-icons mg-r-10">remove_red_eye</i> VER
                                      </a>
                                    </div>
                                  </div>
                                </li>
                                <li class="pd-15 collection-item relative">
                                  <div class="input-container left">
                                    <input type="checkbox" class="filled-in" id="filled-in-box-2" onclick="">
                                    <label for="filled-in-box-2"></label>
                                  </div>
                                  <div class="flex flex-j-between">
                                    <div class="flex valign-wrapper flex-grow flex-flow-column align-i-start">
                                      <div>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>13/10/2017 - $1000</b></span>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (Agua)</span>
                                      </div>
                                      <p class="block grey-text text-lighten-1 width-100 mg-0" style="font-size:.8em;">
                                        Identificación: 131243534 / Nro de control: 6017
                                      </p>
                                    </div>
                                    <div class="flex flex align-i-center">
                                      <a href="#imprimir" class="btn-flat modal-trigger blue-text flex valign-wrapper">
                                        <i class="material-icons mg-r-10">remove_red_eye</i> VER
                                      </a>
                                    </div>
                                  </div>
                                </li>
                                <li class="pd-15 collection-item relative">
                                  <div class="input-container left">
                                    <input type="checkbox" class="filled-in" id="filled-in-box-3" onclick="">
                                    <label for="filled-in-box-3"></label>
                                  </div>
                                  <div class="flex flex-j-between">
                                    <div class="flex valign-wrapper flex-grow flex-flow-column align-i-start">
                                      <div>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>13/09/2017 - $1000</b></span>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (Agua)</span>
                                      </div>
                                      <p class="block grey-text text-lighten-1 width-100 mg-0" style="font-size:.8em;">
                                        Identificación: 131243534 / Nro de control: 6017
                                      </p>
                                    </div>
                                    <div class="flex flex align-i-center">
                                      <a href="#imprimir" class="btn-flat modal-trigger blue-text flex valign-wrapper">
                                        <i class="material-icons mg-r-10">remove_red_eye</i> VER
                                      </a>
                                    </div>
                                  </div>
                                </li>
                                <li class="pd-15 collection-item relative">
                                  <div class="input-container left">
                                    <input type="checkbox" class="filled-in" id="filled-in-box-4" onclick="">
                                    <label for="filled-in-box-4"></label>
                                  </div>
                                  <div class="flex flex-j-between">
                                    <div class="flex valign-wrapper flex-grow flex-flow-column align-i-start">
                                      <div>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>13/08/2017 - $1000</b></span>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (Agua)</span>
                                      </div>
                                      <p class="block grey-text text-lighten-1 width-100 mg-0" style="font-size:.8em;">
                                        Identificación: 131243534 / Nro de control: 6017
                                      </p>
                                    </div>
                                    <div class="flex flex align-i-center">
                                      <a href="#imprimir" class="btn-flat modal-trigger blue-text flex valign-wrapper">
                                        <i class="material-icons mg-r-10">remove_red_eye</i> VER
                                      </a>
                                    </div>
                                  </div>
                                </li>
                                <li class="pd-15 collection-item relative">
                                  <div class="input-container left">
                                    <input type="checkbox" class="filled-in" id="filled-in-box-5" onclick="">
                                    <label for="filled-in-box-5"></label>
                                  </div>
                                  <div class="flex flex-j-between">
                                    <div class="flex valign-wrapper flex-grow flex-flow-column align-i-start">
                                      <div>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>13/07/2017 - $1000</b></span>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (Agua)</span>
                                      </div>
                                      <p class="block grey-text text-lighten-1 width-100 mg-0" style="font-size:.8em;">
                                        Identificación: 131243534 / Nro de control: 6017
                                      </p>
                                    </div>
                                    <div class="flex flex align-i-center">
                                      <a href="#imprimir" class="btn-flat modal-trigger blue-text flex valign-wrapper">
                                        <i class="material-icons mg-r-10">remove_red_eye</i> VER
                                      </a>
                                    </div>
                                  </div>
                                </li>
                                <li class="pd-15 collection-item relative">
                                  <div class="input-container left">
                                    <input type="checkbox" class="filled-in" id="filled-in-box-6" onclick="">
                                    <label for="filled-in-box-6"></label>
                                  </div>
                                  <div class="flex flex-j-between">
                                    <div class="flex valign-wrapper flex-grow flex-flow-column align-i-start">
                                      <div>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>13/06/2017 - $1000</b></span>
                                        <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (Agua)</span>
                                      </div>
                                      <p class="block grey-text text-lighten-1 width-100 mg-0" style="font-size:.8em;">
                                        Identificación: 131243534 / Nro de control: 6017
                                      </p>
                                    </div>
                                    <div class="flex flex align-i-center">
                                      <a href="#imprimir" class="btn-flat modal-trigger blue-text flex valign-wrapper">
                                        <i class="material-icons mg-r-10">remove_red_eye</i> VER
                                      </a>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                              <div class="clearfix">
                                <a href="#!" class="btn-flat blue-text right mg-b-15">Ver más</a>
                                <div class="left flex flex-j-end">
                                  <a href="#!" class="btn blue white-text mg-b-15 hide-on-small-only"><i class="material-icons left">local_printshop</i> Imprimir todas</a>
                                  <a href="#!" class="btn blue white-text mg-b-15 mg-l-15"><i class="material-icons left">file_download</i> Descargar todas</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
