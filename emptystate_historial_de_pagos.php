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
                                <h3 class="card-title">Mis Pagos realizados
                                    <span class="hide-on-med-and-up">en</span>
                                </h3>
                                        <div class="card-content">
                                            <div id="swipe-pagos" class="white">
                                                <div class="row">

                                                    <div id="seleccionDeRubro">
                                                        <p class="mg-10">Seleccioná el rubro del pago que hiciste</p>
                                                        <!-- Vista Rubros -->
                                                        <div class="clearfix flex flex-wrap rubros main-rubros flex-j-center width-100">
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
                                                                        <img src="img/rubros/establecimientoseducativos.svg" class="left white relative circle responsive-img lighten-3 z-depth-2"
                                                                            alt="">
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

                                                        <table class="bordered">
                                                            <thead>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mg-t-0">¿Qué empresa busca?</p>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#!" class="flex align-i-center">
                                                                            <rubro class="mg-r-15 max-50 hide-on-small-only">
                                                                                <img src="img/claro.jpg" class="circle responsive-img">
                                                                            </rubro>

                                                                            <span class="blue-text mg-r-15">Claro</span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td >
                                                                        <a href="#!" class="flex align-i-center">
                                                                            <rubro class="mg-r-15 max-50 hide-on-small-only">
                                                                                <img src="img/movistar.jpg" class="circle responsive-img">
                                                                            </rubro>

                                                                            <span class="blue-text mg-r-15">Movistar</span>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="historial-main" class="hide">
                                                        <aside id="historial-filtros-side" class="col s12 m4 flex flex-j-center">
                                                            <div class="hide-on-small-only width-100">
                                                                <div class="rubros width-100">
                                                                    <p class="filtro-name width-100">
                                                                        <b class="blue-text">Rubro</b>
                                                                    </p>
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
                                                                    <p class="width-100 filtro-name mg-t-0">
                                                                        <b class="blue-text">Empresa</b>
                                                                    </p>
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
                                                                    <p class="width-100 filtro-name mg-t-0">
                                                                        <b class="blue-text">Medio de pago</b>
                                                                    </p>
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
                                                                                    <label for="5433">Tarjeta de crédito VISA terminada en
                                                                                        7869
                                                                                    </label>
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                        <div class="col s12 m8 center-align emptystate">
														<p><img src="img/emptystate_paso_02.svg" class="circle max-150" alt=""></p>
																<h3 class="card-title">No hay pagos realizados</h3			
																<p>Aquí podras chequear tus pagos</p>
																<a href="#nuevopago" class="btn btn-two-lines blue modal-trigger mg-30">Hacer un Pago</a>
															
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
	<?php include '_partials/footer.php'; ?>
    <?php include '_partials/modal_ticket.php'; ?>