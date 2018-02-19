
<div class="navbar-fixed hide-on-small-only plano-4">
	<nav  role="navigation" class="hide-on-small-only">
		<div class="container">
			<div class="nav-wrapper">
				<ul class="hide-on-small-only">
					<?php
    			$pages = array(
				        'inicioTabla.php' => 'Pagar',
				        'recargar.php' => 'Recargar',
				      	'donaciones.php' => 'Donar',
				    		'consultar.php' => 'Consultar');
				?>
				  <?php foreach ($pages as $pageId => $pageTitle): ?>
				  <li <?=((basename($_SERVER['PHP_SELF']) == $pageId) ? 'class="active"' : '')?>><a href="<?=$pageId?>"><?=$pageTitle?></a></li>
				  <?php endforeach; ?>
				  <li class="cantidad white right grey-text text-darken-2 mg-l-15" style="display:none;"><span class="prisma accion-pagar"></span><div class="totalFacturas nro">2</div><b> <span class="total">$2.500,00</span></b> <a href="pagar.php" class="btn orange darken-1 waves-effect waves-light">Pagar Total</a></li>
				  <li class="right"><a class="waves-light btn white blue-text z-depth-0"> Añadir nueva factura</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="navbar-fixed hide-on-med-and-up">
  <nav>
    <div class="nav-wrapper" style="">
			<ul>
				<li class="left">
					<a href="#" data-activates="mobile-demo" class="button-collapse left hide-on-med-and-up"><i class="material-icons">menu</i></a>
				</li>
				<li class="cantidad white-text right pulse grey-text text-darken-2 pd-0 hide-on-med-and-up" style="display: none;">
					<a href="pagar.php" class="btn orange darken-1 mg-0 mg-r-15 height-40 waves-effect waves-light  tada animated">
						<span class="prisma white-text accion-pagar mg-r-20"></span>
						<div class="totalFacturas nro">1</div>
						<span>Pagar</span>
						<b class="white-text"> <span class="total">$450,00</span></b>
					</a>
				</li>
			</ul>
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
						<label for="first_name">¿Qué querés pagar?</label>
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
						<label for="first_name">¿Qué querés pagar?</label>
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

  <?php include '_partials/buscador.php'; ?>


