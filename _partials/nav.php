
<div class="navbar-fixed hide-on-small-only">
  <nav  role="navigation" class="hide-on-small-only">
    <div class="container">
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="hide-on-small-only">
          <li><a href="inicio.php" data-activates="pagar"><i class="material-icons left">home</i> Inicio</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="recargar"><span class="prisma recarga-tel"></span> Recargar</a></li>
          <li><a href="#!"><span class="prisma donacion"></span> Donar</a></li>
          <li class="mg-r-100"><a href="#!"><span class="prisma accion-pagar"></span> Pagar Afip</a></li>
          <!-- cuando no hay facturas para pagar -->

          <!-- <li><span><b>$0</b></span> <a href="pagar.php" class="btn-flat white-text mg-r-20">Pagar</a></li> -->

           <!-- fin cuando no hay facturas para pagar -->

          <!-- cuando tiene facturas para pagar -->

           <li id="cantidad" class="white pulse mg-l-100 mg-r-0" style="display:none;"><span id="total" class="blue-text mg-l-20 mg-t-20"><b>2</b> facturas por <b>$2.500,00</b></span> <a href="pagar.php" class="btn blue waves-effect waves-light mg-r-20">Pagar Total</a></li>
          <!-- fin cuando tiene facturas para pagar -->
          <li class="right block"><a href="index.php">Salir</a></li> <!-- botón de acción -->
        </ul>
      </div>
    </div>
  </nav>
</div>


<!-- Dropdown Structure -->
<div id="pagar" class="dropdown-content">
  <div class="row" onclick="event.stopPropagation()" ontouchstart="event.stopPropagation()">
    <div class="col s8 active">
      <form onclick="event.stopPropagation()" ontouchstart="event.stopPropagation()">
        <div class="row black-text">
          <div class="input-field col s12">
            <i class="material-icons prefix">search</i>
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Que queres pagar?</label>
          </div>
        </div>
      </form>
      <a class="hide" onclick="togleEmpresaRubro()">Por Empresa</a>
    </div>
    <div class="col s4">
      <form onclick="event.stopPropagation()" ontouchstart="event.stopPropagation()" class="hide">
        <div class="row black-text">
          <div class="input-field col s12">
            <i class="material-icons prefix">search</i>
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Que queres pagar?</label>
          </div>
        </div>
      </form>
      <a onclick="togleEmpresaRubro()">Por Rubro</a>
    </div>
  </div>
</div>

<!-- script dropdown ///
<script type="text/javascript">
  function togleEmpresaRubro(){
    $("#dropdown1 .row > .col:not(.input-field)").toggleClass('active s8 s4');
    $("#dropdown1 .row > .col:not(.input-field) form").toggleClass('hide');
    $("#dropdown1 .row > .col:not(.input-field) a").toggleClass('hide');
  }
</script>
-->
