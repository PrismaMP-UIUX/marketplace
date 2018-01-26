<!-- Login -->
<div class="fixed-action-btn noprint" id="prisma-actions"> <!-- style="bottom: 45px; right: 24px;" -->
  <a id="actions-flotante" class="btn-floating btn-large blue z-depth-3 scale-transition scale-out" style="padding: 4px 0px;">
    <i class="large material-icons waves-effect waves-light">add</i>
  </a>

  <!-- Tap Target Structure -->
  <div class="tap-target" data-activates="actions-flotante">
    <div class="tap-target-content white-text">
      <h5 class="white-text">Bienvenido</h5>
      <p>Para comenzar a pagar tenes que tener adheridos tus medios de pago</p>
    </div>
  </div>

  <ul>
    <li>
      <a href="#!" class="btn-floating blue z-depth-2 tooltipped" data-position="left" data-delay="1" data-text="Buscar facturas" onclick="openSearch()"><i class="fa fa-search" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="alta_tarjeta.php" class="btn-floating pulse blue z-depth-2 tooltipped" data-position="left" data-delay="1" data-text="Nueva tarjeta"><i class="fa fa-credit-card" aria-hidden="true"></i></a>
    </li>
    <!-- <li>
      <a href="perfil.php" class="btn-floating blue z-depth-2 tooltipped" data-position="left" data-delay="1" data-text="Cambiar contraseña"><i class="material-icons mg-r-5" data-position="right">lock</i></a>
    </li> -->
    <li>
      <a href="#salir" class="btn-floating red z-depth-2 tooltipped modal-trigger" data-position="left" data-delay="1" data-text="Salir"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </li>
  </ul>

</div>

