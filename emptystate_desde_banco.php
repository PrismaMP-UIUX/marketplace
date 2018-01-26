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
							<span class="card-title">Bienvenido</span>
							<p>Para empezar a pagar tus facturas, seguí estos simples pasos.</p>
							<div class="row center-align mg-t-40 mg-b-0">
								<div class="col s12 m6 mg-b-20">
									<p><img src="img/emptystate_paso_02.svg" class="circle max-150" alt=""></p>
									<a href="#nuevopago" class="btn-two-lines btn blue mg-t-10">Buscar empresas</a>
								</div>
								<div class="col s12 m6 mg-b-20">
									<p><img src="img/emptystate_paso_03.svg" class="circle max-150" alt=""></p>
									<a href="#nuevopago" class="btn-two-lines btn blue modal-trigger mg-t-10">Buscar facturas</a>
								</div>
							</div>
						</div>
						<!--<div class="card-action center-align">
							<a href="#nuevopago" class="btn blue mg-r-30 modal-trigger">Buscar facturas</a>
						</div>-->
					</div>
					<a href="emptystate_sin_deudas.php">si ya pago todo y no tiene deudas</a>
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

		//Esconder carrito mobile del nav
		$('.cantidad').hide();
	})
</script>

</body>
</html>
