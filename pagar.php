<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

	<?php include '_partials/header.php'; ?>
	<?php include '_partials/nav.php'; ?>
	<?php include '_partials/actions.php'; ?>

	<main class="grey-text text-darken-2">
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l10 offset-l1 ">
					<!-- list -->

					<div class="card">
						<div class="card-content">
							<span class="card-title mg-b-20"><b>Mariano</b>, vas a pagar</span>

							<ul class="collection z-depth-1">
								<li class="collection-item avatar grey lighten-3 valign-wrapper hide-on-small-only"> <!-- li // desktop -->
									<img src="img/aysa.jpg" alt="servicio1" class="circle">
									<span class="blue-text">Agua Casa (<b>Aysa</b>)&nbsp;</span>
									<span class="hide-on-small-only">un monto de <b>$1091</b><i class="material-icons">mode_edit</i> desde&nbsp;</span>
									<select class="icons">
										<option value="" data-icon="img/master.png" selected class="left">010319844</option>
										<option value="" data-icon="img/master.png" class="left">010319692</option>
									</select>
									<a href="#!" class="grey-text"><i class="material-icons">delete_forever</i></a>
								</li> <!-- end desktop -->
								<li class="collection-item avatar grey lighten-3 hide-on-med-and-up"> <!-- li // mobile -->
									<img src="img/aysa.jpg" alt="servicio1" class="circle">
									<span class="title blue-text">Agua Casa (<b>Aysa</b>)</span> <!-- mobile -->
									<p><b>$1091 <i class="material-icons">mode_edit</i></b></p> <!-- mobile -->
									<div class="col s10 pull-s1"> <!-- desktop & mobile -->
										<select class="icons">
											<option value="" data-icon="img/master.png" selected class="left">010319844</option>
											<option value="" data-icon="img/master.png" class="left">010319692</option>
										</select>
									</div>
									<a href="#!" class="grey-text"><i class="material-icons">delete_forever</i></a>
									<br><br>
								</li> <!-- end mobile -->
								<!-- fin servicio 01 -->
								<!-- a pagar servicio 02 -->
								<li class="collection-item avatar white valign-wrapper hide-on-small-only"> <!-- li // desktop -->
									<img src="img/claro.jpg" alt="servicio02" class="circle">
										<span class="blue-text"><b>Claro&nbsp;</b></span>
										<span class="hide-on-small-only">un monto de <b> $491 <i class="material-icons">mode_edit</i></b>desde&nbsp;</span>
										<select class="icons">
											<option value="" data-icon="img/master.png" selected class="left">010319844</option>
											<option value="" data-icon="img/master.png" class="left">010319692</option>
										</select>
									<a href="#!" class="grey-text"><i class="material-icons">delete_forever</i></a>
								</li> <!-- end desktop -->
								<li class="collection-item white avatar hide-on-med-and-up"> <!-- li // mobile -->
									<img src="img/claro.jpg" alt="servicio02" class="circle">
									<span class="title blue-text"><b>Claro</b></span> <!-- mobile -->
									<p><b>$491 <i class="material-icons">mode_edit</i></b></p> <!-- mobile -->
									<div class="col s10 pull-s1"> <!-- desktop & mobile -->
										<select class="icons">
											<option value="" data-icon="img/master.png" selected class="left">010319844</option>
											<option value="" data-icon="img/master.png" class="left">010319692</option>
										</select>
									</div>
									<a href="#!" class="grey-text"><i class="material-icons">delete_forever</i></a>
									<br><br>
								</li> <!-- end mobile -->
								<!-- fin servicio 02  -->

								<!-- a pagar servicio 03 -->
								<li class="collection-item avatar grey lighten-3 valign-wrapper hide-on-small-only"> <!-- li // desktop -->
									<img src="img/metrogas.png" alt="servicio03" class="circle">
										<span class="blue-text">Gas Mardel tía (<b>Metrogas</b>)&nbsp;</span>
										<span class="hide-on-small-only">un monto de <b>$1400,10 <i class="material-icons">mode_edit</i></b> desde&nbsp;</span>
										<select class="icons">
											<option value="" data-icon="img/master.png" selected class="left">010319844</option>
											<option value="" data-icon="img/master.png" class="left">010319692</option>
											</select>
									<a href="#!" class="grey-text"><i class="material-icons">delete_forever</i></a>
								</li> <!-- end desktop -->
								<li class="collection-item avatar grey lighten-3 hide-on-med-and-up"> <!-- li // mobile -->
									<img src="img/metrogas.png" alt="servicio03" class="circle">

									<span class="title blue-text">Gas Mardel tía (<b>Metrogas</b>)</span>

									<p><b>$1400,10 <i class="material-icons">mode_edit</i></b></p> <!-- mobile -->
									<div class="col s10 pull-s1">
										<select class="icons">
											<option value="" data-icon="img/master.png" selected class="left">010319844</option>
											<option value="" data-icon="img/master.png" class="left">010319692</option>
										</select>
									</div>
									<a href="#!" class="grey-text"><i class="material-icons">delete_forever</i></a>
									<br><br>
								</li> <!-- end mobile -->
								<!-- fin servicio 03 -->

							</ul>
							<!-- end list -->

							<div class="row mg-b-0">
								<div class="col s12">
									<h3 class="right-align mg-b-0">Total $2.000 / USD 121,21</h3>
								</div>
							</div>



						</div>

						<div class="card-action">
							<!-- Botones de acción - DESKTOP -->
							<div class="hide-on-small-only justify-between">
								<a href="inicio.php" class="btn-flat waves-effect waves-light red-text"><i class="material-icons left">close</i> Cancelar</a>
								<div class="padre">
									<a class="btn white  waves-effect waves-light blue-text mg-r-10"><i class="material-icons left">add</i> Agregar otra</a>
									<a class="btn blue  waves-effect waves-light"><i class="material-icons left">check</i> Pagar</a>
								</div>
							</div><!-- fin botones de acción - DESKTOP -->

							<!-- botones de acción - MOBILE -->
							<div class="hide-on-med-and-up ">
								<a href="inicio.php" class="btn-floating waves-effect waves-red white" data-position="top" data-delay="50" data-tooltip="Cancelar"><i class="material-icons red-text">close</i></a>
								<a class="btn-floating waves-effect waves-light white tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar otra"><i class="material-icons blue-text">add</i></a>
								<a class="btn-floating waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Pagar"><i class="material-icons">check</i></a>
							</div><!-- fin botones de acción - MOBILE -->
						</div>

					</div>


				</div>
			</div>

		</div>
	</main>

	<!-- Javascript -->
	<?php include '_partials/footer.php'; ?>

	<script type="text/javascript">
		$(document).ready(function() {

		});
	</script>

</body>
</html>
