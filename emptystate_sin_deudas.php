<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

	<div>
		<?php include '_partials/header.php'; ?>
  	<?php include '_partials/nav.php'; ?>
  	<?php include '_partials/actions_emptystate.php'; ?>
	</div>


	<main>
		<div class="container">

			<div class="row">
				<div class="col s12 m10 offset-m1">

					<div class="card emptystate">
						<div class="card-content">
							<span class="card-title">Estás al día con tus pagos.</span>
							<p>Felicitaciones! No tenés pagos adeudados hasta el día de hoy.</p>
							<div class="row center-align mg-t-40 mg-b-0">
								<div class="col s12">
									<a href="alta_tarjeta.php"><img src="img/emptystate_sin_deudas.svg" class="circle max-150" alt=""></a>
								</div>
							</div>
						</div>
						<div class="card-action center-align">
							<a href="#!" class="blue-text btn btn-flat white"><span class="hide-on-small-only">Ver mi</span> historial de pagos</a>
							<a href="#nuevopago" class="btn blue modal-trigger">Agregar pago</a>
						</div>
					</div>
					<a href="pinChange.php">Tiene que cambiar la clave</a>
				</div>

			</div>

		</div>
	</main>



<?php include '_partials/footer.php'; ?>

<script>
	$(document).ready(function(){
		// //Inicializa tap-target
		// setTimeout(function(){
		// 	$('.tap-target').tapTarget('open');
		// },300);

		//Esconder carrito del nav
		$('.cantidad').hide();
	})
</script>

</body>
</html>
