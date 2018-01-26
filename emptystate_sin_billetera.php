<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>


	<?php include '_partials/header.php'; ?>
	<?php include '_partials/nav.php'; ?>
	<?php include '_partials/actions_emptystate.php'; ?>

	<main>
		<div class="container">

			<div class="row">
				<div class="col s12 m10 offset-m1">

					<div class="card emptystate">
						<div class="card-content">
							<span class="card-title">Bienvenido</span>
							<p>Para empezar a pagar tus facturas, seguí estos simples pasos.</p>
							<div class="row center-align mg-t-40 mg-b-0">
								<div class="col s12 m4 l4 mg-b-20">
									<p><img src="img/emptystate_paso_02.svg" class="circle max-150" alt=""></p>
									<a href="#nuevopago" class="btn btn-two-lines blue modal-trigger mg-t-10">Buscar empresas</a>
								</div>
								<div class="col s12 m4 l4 mg-b-20">
									<p><img src="img/emptystate_paso_01.svg" class="circle max-150" alt=""></p>
									<a href="alta_tarjeta.php" class="btn btn-two-lines blue mg-t-10">Ingresá un medio de pago</a>
								</div>

								<div class="col s12 m4 l4 mg-b-20">
									<p><img src="img/emptystate_paso_03.svg" class="circle max-150" alt=""></p>
									<p class="btn-flat gray-text mg-t-10">Pagá</p>
							</div>
							</div>
						</div>
						<!-- <div class="card-action center-align">
							<a href="#nuevopago" class="btn blue modal-trigger mg-r-30">Buscar facturas</a>
							<a href="alta_tarjeta.php" class="btn-flat blue-text ">Crear mi billetera virtual</a>
						</div>-->
					</div>
					<a href="emptystate_desde_banco.php">si ya tiene billetera</a>
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
