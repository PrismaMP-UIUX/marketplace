<div class="fixed plano-main">
  <header>
    <div class="container">
      <!-- <a href="#" data-activates="mobile-demo" class="button-collapse left hide-on-med-and-up"><i class="material-icons">menu</i></a> -->
    	<a href="inicioTabla.php"><img src="img/pmc.svg" class="logo_banco hide-on-small-only" alt="PagoMisCuentas"></a>
    	<a href="inicioTabla.php"><img src="img/pmc_min.svg" class="logo_banco in-mobile left hide-on-med-and-up mg-t-5" alt="PagoMisCuentas"></a>
      <!-- <div id="mobile-search" class="hide-on-med-and-up">
        <input class="input-mobile-search" autocomplete="off" id="search" name="search" type="text" placeholder="¿Qué querés pagar?">
        <input class="input-icon-mobile-search" id="search_submit" type="submit"><i class="material-icons">search</i>
      </div> -->
      <div class="hide-on-med-and-up" id="mobile-search">
        <i class="prisma buscar inside-icon"></i>
        <input type="text" class="autocomplete pd-r-45">
      <ul class="autocomplete-content dropdown-content"></ul></div>
      <!-- <a href="#" class="btn-floating orange right hide-on-med-and-up"><i class="material-icons left">shopping_cart</i></a> -->
      <div class="right dropdown-button hide-on-small-only pointer dropdownOnClickTo" data-activates='userDropdown' id="usuario">
         <a href="#" class="btn-floating blue white-text"><i class="material-icons">person</i></a>
         <span class="blue-text hide-on-small-only mg-t-6 right"><i class="fa fa-angle-down h3 mg-l-10" aria-hidden="true"></i></span>
         <span class="blue-text hide-on-small-only mg-t-10 mg-l-10 right">¡Hola, <b>Mariano</b>! </span>
      </div>

      <!-- Dropdown Structure -->
      <div id='userDropdown' class='dropdown-content'>
        <ul>
          <li><a href="perfil.php" class="blue-text">Mi perfil</a></li>
          <li><a href="medio_de_pago.php" class="blue-text">Mis Medios de Pago</a></li>
          <!-- <li><a href="#!" class="blue-text">Mis Facturas</a></li> -->
          <li><a href="pagos-realizados.php" class="blue-text">Mis Pagos Realizados</a></li>
          <li><a href="saldosYDisponibles.php" class="blue-text">Mis Saldos</a></li>
          <li class="divider"></li>
          <li class="height-30"><p class="pd-5 pd-l-20 pd-r-20 height-30 grey-text mg-0 noselect no-pointer" style="font-size:0.9em;">Tu última conexión fue hace <b>30 días</b></p></li>
          <li class="height-30"><p class="pd-5 pd-l-20 pd-r-20 height-30 red-text mg-0 noselect no-pointer" style="font-size:0.9em;">Tu clave vence <b>mañana</b></p></li>
          <li class="divider"></li>
          <li><a href="#salir" class="modal-trigger blue-text" onclick="$('.buscador-detalles').modal(); $('#salir').modal('open');"><span class="prisma salir mg-r-10"></span> Cerrar sesión</a></li>
        </ul>
      </div>

    </div>
  </header>
</div>
<ul class="side-nav blue white-text" id="mobile-demo">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="img/fondo_menu.png">
        </div>
        <a href="#" class="btn-floating blue white-text"><i class="material-icons">person</i></a>
        <a href="#!name"><span class="white-text name">Mariano López</span></a>
        <a href="#!email"><span class="white-text email">mlopez@gmail.com</span></a>
      </div>
    </li>
    <!-- <li class="hide-on-small-only"><a href="buscar.php">% Pagar</a></li>
    <li class="hide-on-small-only"><a href="#!">% Recargar</a></li>
    <li class="hide-on-small-only"><a href="#!">% Donar</a></li>
    <li class="hide-on-small-only"><a href="#!">% Consultar</a></li>
    <li class="hide-on-small-only"><a href="#!">% Afip</a></li>
    <li class="hide-on-small-only"><a href="#!">% Comprobantes</a></li>
    <li class="hide-on-small-only"><a href="#!">% Mi Perfil</a></li>
    <li class="hide-on-small-only"><div class="divider"></div></li>
    <li class="hide-on-small-only"><a href="#!" class="text-lighten-1">% Carrito</a></li>
    <li class="hide-on-small-only"><a href="#!" class="text-lighten-1">% Salir</a></li> -->
    <li class="show-on-small"><a href="perfil.php" class="white-text"><i class="material-icons white-text">person</i> Mi perfil</a></li>
    <li class="show-on-small"><a href="medio_de_pago.php"  class="white-text"><i class="material-icons white-text">account_balance_wallet</i> Mis Medios de Pago</a></li>
    <li class="show-on-small"><a href="pagos-realizados.php" class="white-text"><i class="material-icons white-text">receipt</i> Mis Pagos Realizados</a></li>
    <li class="show-on-small"><a href="saldosYDisponibles.php" class="white-text"> <i class="material-icons white-text">monetization_on</i> Mis Saldos</a></li>
    <li class="divider show-on-small"></li>
    <li class="show-on-small height-30"><p class="height-30 pd-l-30 white-text mg-0 no-pointer" style="font-size:0.9em;">Tu última conexión fue hace <b>30 días</b></p></li>
    <li class="show-on-small height-30 mg-b-15"><p class="height-30 pd-l-30 white-text mg-0 no-pointer" style="font-size:0.9em;">Tu clave vence <b>mañana</b></p></li>
    <li class="divider show-on-small"></li>
    <li class="show-on-small"><a href="#salir" class="modal-trigger white-text" onclick="$('.buscador-detalles').modal(); $('#salir').modal('open');"><i class="fa fa-sign-out white-text"></i> Cerrar sesión</a></li>
</ul>

  <div id="preloudin" class="hide">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
