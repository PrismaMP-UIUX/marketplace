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
                            <div class="card-panel clearfix">
                                <h3 class="card-title">Mis Pagos realizados
                                    <!-- <span class="hide-on-med-and-up">en</span> -->
                                </h3>
                                <div class="card-content">
                                    <div id="swipe-pagos" class="white">
                                        <div id="seleccionDeRubro">
                                            <!-- <p class="mg-10">Seleccioná el rubro del pago que hiciste</p> -->
                                            <!-- Vista Rubros -->
                                            <div class="input-field col s12 m6">
                                                <select>
                                                    <option value="0" selected disabled>Seleccioná uno</option>
                                                    <option value="1" data-icon="img/rubros/afip.svg">AFIP</option>
                                                    <option value="2" data-icon="img/rubros/agua.svg">Agua</option>
                                                    <option value="3" data-icon="img/rubros/barriosprivados.svg">Barrios privados</option>
                                                    <option value="4" data-icon="img/rubros/clubesyasociaciones.svg">Clubes y asociaciones</option>
                                                    <option value="5" data-icon="img/rubros/consorcios.svg">Consorcios</option>
                                                    <option value="6" data-icon="img/rubros/cooperativas.svg">Cooperativas</option>
                                                    <option value="7" data-icon="img/rubros/donaciones.svg">Donaciones</option>
                                                    <option value="8" data-icon="img/rubros/electricidad.svg">Electricidad</option>
                                                    <option value="9" data-icon="img/rubros/emergencias.svg">Emergencias médicas</option>
                                                    <option value="10" data-icon="img/rubros/establecimientoseducativos.svg">Establecimientos educativos</option>
                                                    <option value="11" data-icon="img/rubros/gas.svg">Gas</option>
                                                    <option value="12" data-icon="img/rubros/impuestos.svg">Impuestos</option>
                                                    <option value="13" data-icon="img/rubros/prepaga.svg">Medicina prepaga</option>
                                                    <option value="14" data-icon="img/rubros/operadorestv.svg">Operadores de TV</option>
                                                    <option value="15" data-icon="img/rubros/otrosservicios.svg">Otros servicios</option>
                                                    <option value="16" data-icon="img/rubros/patentes.svg">Patentes</option>
                                                    <option value="17" data-icon="img/rubros/planesdeahorro.svg">Planes de ahorro</option>
                                                    <option value="18" data-icon="img/rubros/prestamos.svg">Préstamos</option>
                                                    <option value="19" data-icon="img/rubros/proveedoresinternet.svg">Proveedores de internet</option>
                                                    <option value="20" data-icon="img/rubros/recargas.svg">Recargas</option>
                                                    <option value="21" data-icon="img/rubros/seguridad.svg">Seguridad</option>
                                                    <option value="22" data-icon="img/rubros/seguros.svg">Seguros</option>
                                                    <option value="23" data-icon="img/rubros/segurosderetiro.svg">Seguros de retiro</option>
                                                    <option value="24" data-icon="img/rubros/segurodevida.svg">Seguros de vida</option>
                                                    <option value="25" data-icon="img/rubros/serviciosweb.svg">Servicios web</option>
                                                    <option value="26" data-icon="img/rubros/solicituddeinformes.svg">Solicitudes de informes</option>
                                                    <option value="27" data-icon="img/rubros/tarjetasdecredito.svg">Tarjetas de crédito</option>
                                                    <option value="28" data-icon="img/rubros/telefonia.svg">Telefonía</option>
                                                    <option value="29" data-icon="img/rubros/viajesyturismo.svg">Viajes y turismo</option>
                                                </select>
                                                <label>Seleccioná el rubro del pago que hiciste</label>
                                            </div>
                                            <div class="clearfix flex flex-wrap rubros main-rubros flex-j-center width-100">
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
                                                        <!-- <div class="notificacion blue tooltipped" data-position="top" data-delay="50" data-text="Empresas guardadas <br> y pagadas">
                                                            <i class="material-icons white-text">receipt</i>
                                                        </div> -->
                                                        <rubro>
                                                            <img src="img/rubros/recargas.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                                        </rubro>
                                                    </div>
                                                    <p class="width-100 center-align mg-t-10">Recargas</p>
                                                </a>
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
                                                        <rubro>
                                                            <img src="img/rubros/barriosprivados.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                                        </rubro>
                                                    </div>
                                                    <p class="width-100 center-align mg-t-10">Barrios privados</p>
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
                                                        <rubro>
                                                            <img src="img/rubros/emergencias.svg" class="left white relative circle responsive-img lighten-3 z-depth-2" alt="">
                                                        </rubro>
                                                    </div>
                                                    <p class="width-100 center-align mg-t-10">Emergencias Médicas</p>
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
                                            <div class="center-align">
                                                <a href="#!" class="btn blue white-text todosLosRubros" onclick="$('.main-rubros').children('a').children('div').children('rubro:first-child').parents('a').toggleClass('hide');">Ver todos los rubros</a>
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
                                                            <p class="mg-t-0">¿Qué empresa buscas?</p>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="flex align-i-center">
                                                                <rubro class="mg-r-15 max-50 hide-on-small-only">
                                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAPyElEQVR4Xu2da4hdVxXH1533JFQDESkqPiJaoUQKtWr7wdKC9UEfSENrLJZimlSwJBZijaAlVKUxBlrbFCxpJTS0UUkrxIgGIX18aME2WKwFq/RBIRKLgWjIzNw7M/fKGZMmk2Tm7rXvOufsdfcvX/qh+6yz1u+/8s85++y9b+PYuhUd4Q8EIJAlgQYGkKXuFA2BOQIYAI0AgYwJYAAZi0/pEMAA6AEIZEwAA8hYfEqHAAZAD0AgYwIYQMbiUzoEMAB6AAIZE8AAMhaf0iGAAdADEMiYAAaQsfiUDgEMgB6AQMYEMICMxad0CGAA9AAEMiaAAWQsPqVDAAOgByCQMQEMIGPxKR0CGAA9AIGMCWAAGYtP6RDAAOgBCGRMAAPIWHxKhwAGQA9AIGMCGEDG4lM6BDAAegACGRPAADIWn9IhgAHQAxDImAAGkLH4lA4BDIAegEDGBDCAjMWndAhgAPQABDImgAFkLD6lQwADoAcgkDEBDCBj8SkdAhgAPQCBjAlgABmLT+kQwADoAQhkTAADyFh8SocABkAPQCBjAhhAxuJTOgQwAHoAAhkTwAAyFp/SIYAB0AMQyJgABpCx+JQOAQyAHoBAxgQwgIzFp3QIYAD0AAQyJoABZCw+pUMAA6AHIJAxAQwgY/EpHQIYAD0AgYwJYAAZi0/pEMAA6AEIZEwAA8hYfEqHAAZAD0AgYwIYQMbiUzoEMAB6AAIZE8AAMhaf0iGAAdADEMiYAAaQsfiUDgEMgB6AQMYEMICMxad0CGAA9AAEMiaAAWQsPqVDAAOgByCQMQEMIGPxKR0CGAA9AIGMCWAAGYtP6RDAAOgBCGRMAAPIWHxKhwAGQA9AIGMCGEDG4lM6BDAAegACGRPAADIWn9IhgAHQAxDImAAGkLH4lA4BDIAegEDGBDCAjMWndAhgAPQABDImgAH0ufjjtz8sgyuvCK9yuimtffdL6w8/D7+GkW4JYABupeue+OAFl8rYN7ZJY9n53QefNmL2Hy/I5Lavqq5hsE8CGIBP3YKyHvnKd2Tk82tEBoeDxr8zaOI/MrV7s8z8aa/uOka7I4ABuJMsMOHRpbJk424Z+OCFgRecNqzTkZkXfitTj9yhv5YrXBHAAFzJFZ7s0KXXy9iNPxAZPy/8otM94MghmdyxXtpvvBR1PRf5IIAB+NBJneXYmntl6JJrRBoN9bVzF8xOS+uPj0jrNz+Nu56rXBDAAFzIpEty4CMXyfja+6Wx/P26C88Y3X7rFZnYtlqkebynOFycLgEMIF1tojMbufbbMvKF20SGRqJjzF3YPC7NJ34i08881lscrk6WAAaQrDTxiY1v/KUMfuyS+ACnXTn78lMyuf1Wk1gESY8ABpCeJj1lNPTpa2Vs9WaRJe/uKc7Jizv//bdM7bxTZl95xiQeQdIigAGkpUfP2YzevEWGL1sVP/l3Zgadtkw/u1uaj9/Vc24ESI8ABpCeJtEZNd77YRn/1g4ZOH9F1xido/+SxnnLRQaHuo5tH35dJh9cK5233+w6lgG+CGAAvvRaNNuRL35TRq5eLzI8unhVxUKfP++XoQs+K7J0WXcC7A/ozsjpCAzAqXDnSnv8jl0y+InLulfUmpLW7x6Qoc9cJwPv+3j38cWyACYDgzh5G4QBeFNsgXwHL7xcxm7ZKo13vadrRZ1jR2Tq0U0ydNFVwfMFTAZ2xepyAAbgUrazkx792t0y/LnVIo2BrhW1D70qE3d/WYYvv0lGr/+uyOjSrtcIk4HdGTkcgQE4FO2slIuNP5v2BD/Oz7y4T6Z2bBDNpGFxTyYD+6FZ5teAAfSBpqp/yWda0tr/kLT23jdXuWrPAJOBfdAtGEDfiag59efk+//sXw7McVCZRzEZyGEhfdU/PAE4l1N76k/7rb/KxI+ve6dq7WuAcFiI847hCaCvBFSd+tPpyPRze6T56KZ5DFSrBzkspK/6hycAz3JqT/2ZPCZTv/qhzDz/xLyqtfsHOhwW4rlr5uWOATiWUnvqz4Kz+Foj4bAQx13DK0DfiKeawe/y6D66evPchGDIOoK5T4IcFtIXfcQTgFMZ1af+dDncY/CTV8rYzVv+v0Eo5A+HhYRQSn4MBpC8ROdOUHvqT8giHu1BIuwPcNo8p6WNATjVUPWXNXDmPng34Qlm7A9w2jwYgG/htLP2od/u1a8V7A/w3UgiwhOAQwlV3+2VE3aqiUX2BzjsHr4CuBZNvXJP+clOuzRY2B/gu5+OrVvRcV1BZsmr39OPHpapX2yU2VefDyOlXRPA/oAwromO4hUgUWEWSiv41J8TAWJm6kdXfU+Gr7wl6LzAuduwP8BZF51KFwNwJJ3m1J+5spoT0nxyq0w/vUtVpfo+gV8ZVEkwuBICGEAlmG1uojn1p7hjyLf/BZ80bn9YBldeEZw4+wOCUSU1EANISo5FklGe+tPrEV7DV62T0Ws2iIyMhRFSTjaGBWVU2QQwgLIJG8VXz84fPypTj31fZg7+PioD9dcG5efGqKS4yJwABmCOtJyAmlN/igwsTu7Rrjfgx0TL0b7MqBhAmXSNYmtP/ZEzzv2LTUO94pDfD4hFXdt1GEBt6MNvrDr1R0QsJ+RUew6Ke/NjouHCJjASA0hAhEVT0C7MMf4kpzWfXicfU5ej3/LDABJXVHvqj/V7uHqDUI+fHxOXo+/SwwASl1S9OaeEk3rG1v5Mhj51dTgp9geEs6p5JAZQswCL3V79r+/sjEwf2CnNPfeYVqX+BGn0FcK0CIKdkwAGkHBjaE/9KW0CTjsPUUwGnvgB0pM/QJIw5qxTwwASll87Ax+z8Se0fO2hoUwGhpKtdxwGUC//Be+u/gZf8nu3eoMQk4GJdtb8tDCARGXSrsLrZeNPKALtVmQOCwklW984DKA+9gveWb0Of4Gf/LIuTXsYSXF/iyXJ1nUQ7xQBDCDBblD/RavoQA61MRVsK8otQRldpIQBJCiT9lG7/dpBmdh6QyWVaNcliPHKxEqKzOgmGEBiYqsn2yreh6+enDTem5CYXO7TwQASk1B76o/lxp9QFEvu/LUMfPTi0OEiFZtUeGKMxAAS6oGod+yE8l8sFX5MNE2hMICEdIlZcptQ+ounwo+JJikVBpCQLNpTfxJKPSiVMlcqBiXAoLMIYACJNIV68i+RvDVplLZXQZMEY+cRwAASaQj1wRuJ5K1Kgx8TVeGqYjAGUAXlbveI2G3XLWSq/7+KJcup1p5iXhhAAqr09eTfmXxL3rSUgJyuUsAAEpBLvbougZx7SYH9Ab3Qs70WA7DlqY6mPvVHfYcEL2B/QDKiYAA1S5HF5N+ZjNkfUHPXnbo9BlCzFNpTf2pO1+z2dSxhNku+jwJhADWKGbOxJsXFNEMXf0nGbvqRyNJl4TTZHxDOqsSRGECJcLuFVk/+JTyDHvMkw/6Abh1S/v/HAMpnfM47xGz86bz9pkw8sEaK/6b2R32ISVEA+wNqlxEDqEkC9V+YxCfOBj60UsZv2y6N5R9QEU3xlUZVgPPBGEBNAqofmR38a6l+peHHRGvqPr4C1Ao+ZuOPh/flmElNfj+g1lYUngBq4K899cfNX5LIPQ3sD6ihCU/cEgOomH3U5J+jn9mKWtiU8NeNituj8tthABUjj9n442ntfOzSZk81Vtwypd4OAygV79nB1af+zLSktf8hae29r+JM42+nrrG4FfsD4oH3cCUG0AM87aUxk38el8zGPOW4mefQip74eAygQoFi3o9dfidnMrDCrurtVhhAb/zCr475S9GckOaTW2X66V3h90lkpPpLR5E3k4GVq4cBVIQ85rHY8+exmNedQgomAytqSD4DVgtavUquol/8LZMCk4Fl0rWJzROADcdFo0R9GuuDWXH1foeCYuJ7Hipol0pvgQFUgDtm8s/D0t9u6GIWPc15wJFDMrljvbTfeKnbLfj/PRLAAHoEGHK5euPP7IxMH9gpzT33hIRPekzUZCCHhVSmKQZQMuqYDTL99As6MfUXkvTDE1DJrWUSHgMwwbhwEPXkXzET/rfnZPLer5ecWXXh1U9ARWoOtj9XR7C8O2EA5bGVqHfgPvwWHjUZWBjhy0/J5PZbS1SI0BhAiT0Q0/j9OAEW9RWEw0JK7MxToTGAEjHHPPrOvLhPpnZsKDGrekLHvAqxP6B8rTCAkhhHrYTr4/fe6MnAw6/L5INrkzwItaTWqTQsBlAS7pjPX+1//l0mtqyamwDruz8xeyEKCH04J5KSthhACWpETf512jL97G5pPn5XCRmlETJmQVSROfsDytMPAyiBbczGnxwOxIidDMyBTQltGBQSAwjCpBsUswmm/dpBmdh6g+5GDkfHsGF/QHlCYwDGbKMm/zJa+hr1dMT+AOMu5TNgaUAJDAFPBHgC8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwROB/KQ9ram4NAeIAAAAASUVORK5CYII="
                                                                    class="circle responsive-img">
                                                                </rubro>

                                                                <span class="blue-text mg-r-15 nombreEmpresa">Claro</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="flex align-i-center">
                                                                <rubro class="mg-r-15 max-50 hide-on-small-only">
                                                                    <img src="data:image/png;base64,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YAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwROB/KQ9ram4NAeIAAAAASUVORK5CYII="
                                                                    class="circle responsive-img">
                                                                </rubro>

                                                                <span class="blue-text mg-r-15 nombreEmpresa">Movistar</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="flex align-i-center">
                                                                <rubro class="mg-r-15 max-50 hide-on-small-only">
                                                                    <img src="data:image/png;base64,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YAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwROB/KQ9ram4NAeIAAAAASUVORK5CYII="
                                                                    class="circle responsive-img">
                                                                </rubro>

                                                                <span class="blue-text mg-r-15 nombreEmpresa">Personal</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="flex align-i-center">
                                                                <rubro class="mg-r-15 max-50 hide-on-small-only">
                                                                    <img src="data:image/png;base64,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YAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwROB/KQ9ram4NAeIAAAAASUVORK5CYII="
                                                                    class="circle responsive-img">
                                                                </rubro>
                                                                <span class="blue-text mg-r-15 nombreEmpresa">Aguas</span>
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
                                                            <input type="checkbox" class="filled-in" id="tess6" />
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
                                                        <a href="#!" class="pd-15 flex flex-j-center rubroActivo width-100 height-40 mg-b-15">
                                                            <div class="truncate white-text relative pd-l-20 pd-r-25 mg-l-10 width-100" style="width: auto;">

                                                                <span class="truncate pd-0 mg-t-10 mg-b-9 chip-empresa"></span>
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
                                                                <div class="collapsible-header">Medio de pago</div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                        <input type="checkbox" class="filled-in" id="312423" checked />
                                                                        <label for="312423">Cuenta bancaria xxxx-xxxx-xxxx</label>
                                                                    </p>
                                                                    <p>
                                                                        <input type="checkbox" class="filled-in" id="5433" />
                                                                        <label for="5433">Tarjeta de crédito VISA terminada en 7869
                                                                        </label>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </aside>
                                            <div class="col s12 m8">
                                                <div class="pd-b-10 collection-item relative flex flex-j-between align-i-center">
                                                    <div class="flex flex-j-start align-i-center" id="print-button">
                                                        <a href="#!" class="btn blue white-text mg-b-5" disabled><i class="material-icons left">local_printshop</i></a>
                                                        <a href="#!" class="btn blue white-text mg-l-10 mg-b-5" disabled><i class="material-icons left">file_download</i></a>
                                                        <p class="mg-0 mg-b-5 mg-l-10 hide"><span class="checkedLen"></span> seleccionado(s)</p>
                                                    </div>
                                                    <div class="flex flex-j-end align-i-center">
                                                        <a class='dropdown-button btn grey lighten-4 blue-text' href='#' data-activates='filtro-ordenar'>Ordenar<i class="material-icons right">sort</i></a>
                                                        <ul id='filtro-ordenar' class='dropdown-content'>
                                                            <li><a class="blue-text" href="#!" onclick="ordenarMonto('mayor');">Mayor importe</a></li>
                                                            <li><a class="blue-text" href="#!" onclick="ordenarMonto('menor');">Menor importe</a></li>
                                                            <li><a class="blue-text" href="#!" onclick="ordenarFecha('mayor');">Más reciente</a></li>
                                                            <li><a class="blue-text" href="#!" onclick="ordenarFecha('menor');">Más antiguo</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="collection mg-t-0 clearfix listaPagos">
                                                    <li id="pago_1" class="pd-15 collection-item width-100 flex-inline itemPago checkTrigger pointer">
                                                        <div class="flex align-i-center">
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="">
                                                            <label for="filled-in-box-1"></label>
                                                        </div>
                                                        <div class="mg-r-15 max-40 hide-on-small-only flex align-i-center">
                                                            <img src="img/receipt.svg" class="circle responsive-img">
                                                        </div>
                                                        <div class="flex flex-grow align-i-center">
                                                            <div class="mg-r-20">
                                                                <p class="mg-0 font-18"><b>Aysa</b> (Agua de casa)</p>
                                                                <p class="mg-0 font-10">Nro de control: <b>78945</b></p>
                                                            </div>
                                                            <span class="mg-r-15 importe font-18"><b>$1900</b></span>
                                                            <span class="mg-r-15 date-pay font-10"><b>10/06/2017</b></span>
                                                        </div>
                                                        <div class="flex align-i-center flex-j-end">
                                                            <a href="#imprimir" class="btn-flat blue-text modal-trigger white flex-inline"><i class="material-icons left">remove_red_eye</i><span class="hide-on-small-only">VER</span></a>
                                                        </div>
                                                    </li>
                                                    <li id="pago_2" class="pd-15 collection-item width-100 flex-inline itemPago checkTrigger pointer">
                                                        <div class="flex align-i-center">
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="">
                                                            <label for="filled-in-box-1"></label>
                                                        </div>
                                                        <div class="mg-r-15 max-40 hide-on-small-only flex align-i-center">
                                                            <img src="img/receipt.svg" class="circle responsive-img">
                                                        </div>
                                                        <div class="flex flex-grow align-i-center">
                                                            <div class="mg-r-20">
                                                                <p class="mg-0 font-18"><b>Personal</b> (Celu vieja)</p>
                                                                <p class="mg-0 font-10">Nro de control: <b>78945</b></p>
                                                            </div>
                                                            <span class="mg-r-15 importe font-18"><b>$8000</b></span>
                                                            <span class="mg-r-15 date-pay font-10"><b>03/06/2017</b></span>
                                                        </div>
                                                        <div class="flex align-i-center flex-j-end">
                                                            <a href="#imprimir" class="btn-flat blue-text modal-trigger white flex-inline"><i class="material-icons left">remove_red_eye</i><span class="hide-on-small-only">VER</span></a>
                                                        </div>
                                                    </li>
                                                    <li id="pago_3" class="pd-15 collection-item width-100 flex-inline itemPago checkTrigger pointer">
                                                        <div class="flex align-i-center">
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="">
                                                            <label for="filled-in-box-1"></label>
                                                        </div>
                                                        <div class="mg-r-15 max-40 hide-on-small-only flex align-i-center">
                                                            <img src="img/receipt.svg" class="circle responsive-img">
                                                        </div>
                                                        <div class="flex flex-grow align-i-center">
                                                            <div class="mg-r-20">
                                                                <p class="mg-0 font-18"><b>Claro</b> (Celu Maru)</p>
                                                                <p class="mg-0 font-10">Nro de control: <b>78945</b></p>
                                                            </div>
                                                            <span class="mg-r-15 importe font-18"><b>$7000</b></span>
                                                            <span class="mg-r-15 date-pay font-10"><b>06/06/2017</b></span>
                                                        </div>
                                                        <div class="flex align-i-center flex-j-end">
                                                            <a href="#imprimir" class="btn-flat blue-text modal-trigger white flex-inline"><i class="material-icons left">remove_red_eye</i><span class="hide-on-small-only">VER</span></a>
                                                        </div>
                                                    </li>
                                                    <li id="pago_4" class="pd-15 collection-item width-100 flex-inline itemPago checkTrigger pointer">
                                                        <div class="flex align-i-center">
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="">
                                                            <label for="filled-in-box-1"></label>
                                                        </div>
                                                        <div class="mg-r-15 max-40 hide-on-small-only flex align-i-center">
                                                            <img src="img/receipt.svg" class="circle responsive-img">
                                                        </div>
                                                        <div class="flex flex-grow align-i-center">
                                                            <div class="mg-r-20">
                                                                <p class="mg-0 font-18"><b>Cablevisión</b> (Internet)</p>
                                                                <p class="mg-0 font-10">Nro de control: <b>78945</b></p>
                                                            </div>
                                                            <span class="mg-r-15 importe font-18"><b>$2500</b></span>
                                                            <span class="mg-r-15 date-pay font-10"><b>26/06/2017</b></span>
                                                        </div>
                                                        <div class="flex align-i-center flex-j-end">
                                                            <a href="#imprimir" class="btn-flat blue-text modal-trigger white flex-inline"><i class="material-icons left">remove_red_eye</i><span class="hide-on-small-only">VER</span></a>
                                                        </div>
                                                    </li>
                                                    <li id="pago_5" class="pd-15 collection-item width-100 flex-inline itemPago checkTrigger pointer">
                                                        <div class="flex align-i-center">
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="">
                                                            <label for="filled-in-box-1"></label>
                                                        </div>
                                                        <div class="mg-r-15 max-40 hide-on-small-only flex align-i-center">
                                                            <img src="img/receipt.svg" class="circle responsive-img">
                                                        </div>
                                                        <div class="flex flex-grow align-i-center">
                                                            <div class="mg-r-20">
                                                                <p class="mg-0 font-18"><b>Edesur</b> (Luz del pasillo)</p>
                                                                <p class="mg-0 font-10">Nro de control: <b>78945</b></p>
                                                            </div>
                                                            <span class="mg-r-15 importe font-18"><b>$3000</b></span>
                                                            <span class="mg-r-15 date-pay font-10"><b>30/06/2017</b></span>
                                                        </div>
                                                        <div class="flex align-i-center flex-j-end">
                                                            <a href="#imprimir" class="btn-flat blue-text modal-trigger white flex-inline"><i class="material-icons left">remove_red_eye</i><span class="hide-on-small-only">VER</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="clearfix mg-t-30">
                                                    <a href="#!" class="btn-flat blue- hide-on-small-onlytext right mg-b-15">Ver más</a>
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

    <script>
    $(document).ready(function () {

        var conPagos = $('.main-rubros').children('a').children('div').find('.notificacion').length;
        console.log(conPagos);

        if (conPagos > 0){
            $('.main-rubros').children('a').children('div').children('.notificacion').parents('a').css('display', 'block');
            $('.main-rubros').children('a').children('div').children('rubro:first-child').parents('a').addClass('hide');
        } else {
            $('.main-rubros').children('a').children('div').children('rubro:first-child').parents('a').addClass('hide');
            $('.main-rubros').append('<h4 class="center-align grey-text text-darken-2 mg-b-20">No tenés pagos realizados <br> :(</h4>');
        }

        //Cuando hace click en el botón de ver todos los rubros
        $('.todosLosRubros').on('click', function(){
            var rubroEscondido = $('.main-rubros').children('a').children('div').children('rubro:first-child').parents('a');
            if (rubroEscondido.hasClass('hide')){
                $(this).text('Ver todos los rubros');
            } else {
                $(this).text('Ver rubros con pagos');
            }
        });


        $(".collection-item.checkTrigger").hover(function(){
                //ENTRO AL HOVER
                var chk = $(this).closest(".itemPago").find("input[type=checkbox].filled-in");

                if (chk.prop('checked')){ //si está checked
                    $("div:nth-of-type(3)",this).addClass("blue-text");
                    $("a",this).removeClass("white");
                    $("a",this).removeClass("blue-text");
                    $("a",this).addClass("white-text");
                    $("a",this).addClass("blue");
                } else { //si no está checked
                    $("div:nth-of-type(3)",this).addClass("blue-text");
                    $("a",this).removeClass("white");
                    $("a",this).removeClass("blue-text");
                    $("a",this).addClass("white-text");
                    $("a",this).addClass("blue");
                }
            }, function(){
                //SALGO DEL HOVER
                var chk = $(this).closest(".itemPago").find("input[type=checkbox].filled-in");

                if (chk.prop('checked')){ //si está checked
                    $("div:nth-of-type(3)",this).removeClass("blue-text");
                } else { //si no está checked
                    $("div:nth-of-type(3)",this).removeClass("blue-text");
                    $("a",this).addClass("white");
                    $("a",this).addClass("blue-text");
                    $("a",this).removeClass("white-text");
                    $("a",this).removeClass("blue");
                }

        });
        // var chks = $("input[type=checkbox].filled-in");

        //Cuando hace click en el collection
        $(".checkTrigger").on("click", function() {

            var chk = $(this).closest(".itemPago").find("input[type=checkbox].filled-in");

            if (!chk.prop('checked')){
                chk.prop("checked", true);
                $(this).css("background", "#EAF7FF");
                $("a",this).removeClass("white");
                $("a",this).removeClass("blue-text");
                $("a",this).addClass("white-text");
                $("a",this).addClass("blue");
            } else {
                chk.prop("checked", false);
                $(this).css("background", "#FFFFFF");
            }
            //Muestra y cambia el texto del boton de imprimir/descargar
            var chksLen = $(".itemPago input[type=checkbox].filled-in:checked").length;
            if (chksLen > 0) {
                $('#print-button a').removeAttr("disabled");
                $('#print-button span.checkedLen').text(chksLen);
                $('#print-button p').removeClass('hide').fadeIn();
            } else {
                $('#print-button a').attr("disabled", "disabled");
                $('#print-button span.checkedLen').text("");
                $('#print-button p').addClass('hide');
            }
        });

        //Cuando hace click en el check
        // $("input[type=checkbox].filled-in").on("click", function() {
        //     //Muestra y cambia el texto del boton de imprimir/descargar
        //     var chksLen = $(".itemPago input[type=checkbox].filled-in:checked").length;
        //     console.log(chksLen);
        //     if (chksLen > 0) {
        //         $('#print-button a').removeAttr("disabled");
        //         $('#print-button span.checkedLen').text(chksLen);
        //     } else {
        //         $('#print-button a').attr("disabled", "disabled");
        //         $('#print-button span.checkedLen').text("");
        //     }
        // });


        //Para ordenar por fecha de pago
        // var count = 0;
        // $('#ordenarFecha').on("click", function () {
        //     count +=1;
        //     // console.log(count);
        //     if (count % 2 === 0) { //cuando el click es par
        //         ordenarFecha('mayor');
        //         // $('#ordenarFecha b span').text("▼");
        //     } else { //cuando el click es impar
        //         ordenarFecha('menor');
        //         // $('#ordenarFecha b span').text("▲");
        //     }

        // });
        // ordenarFecha('mayor');

        // //Para ordenar por importe
        // var count = 0;
        // $('#ordenarMonto').on("click", function () {
        //     count +=1;
        //     // console.log(count);
        //     if (count % 2 === 0) { //cuando el click es par
        //         ordenarMonto('mayor');
        //         // $('#ordenarMonto b span').text("▼");
        //     } else { //cuando el click es impar
        //         ordenarMonto('menor');
        //         // $('#ordenarMonto b span').text("▲");
        //     }

        // });
        // ordenarMonto('mayor');
    });

    //Funcion para ordenar por Fecha
    function ordenarFecha(order = 'menor') {
        var arrayPagos = $('.itemPago').map(function () {
            var obj = {};
            obj['id'] = this.id;
            obj['fecha'] = $(this).find('.date-pay').children().text();

            // console.log(obj);

            return obj;
        }).sort(function (a, b) {
            if (order == 'menor')
                return a.fecha > b.fecha;
            else
                return a.fecha < b.fecha;
        })
        for (var i = 1; i <= arrayPagos.length - 1; i++) {
            $('#' + arrayPagos[i].id).insertAfter('#' + arrayPagos[i - 1].id);
        }
    }

    //Funcion para ordenar por Monto
    function ordenarMonto(order = 'menor') {
        var arrayPagos = $('.itemPago').map(function () {
            var obj = {};
            obj['id'] = this.id;
            obj['importe'] = $(this).find('.importe').children().text();

            // console.log(obj);

            return obj;
        }).sort(function (a, b) {
            if (order == 'menor')
                return a.importe > b.importe;
            else
                return a.importe < b.importe;
        })
        for (var i = 1; i <= arrayPagos.length - 1; i++) {
            $('#' + arrayPagos[i].id).insertAfter('#' + arrayPagos[i - 1].id);
        }
    }
    </script>
