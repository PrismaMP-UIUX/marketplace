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
							<span class="card-title">Recargas online</span>
							<p class="summary">La manera más fácil de obtener crédito para tus servicios.</p>
							<div class="row center-align mg-t-40 mg-b-0">
								<div class="col s12 m4 l4 mg-b-20">
									<p><a href="recargas_moviles.php" ><img src="img/rubros/recargas.svg" class="max-150" alt=""></p></a>
									<a href="recargas_moviles.php" class="waves-teal btn-flat"><strong>RECARGA CELULAR</strong></a>
								</div>
								<div class="col s12 m4 l4 mg-b-20">
									<p><a href="recargas_transportes.php" ><img src="img/rubros/transportes.svg" class="max-150" alt=""></p>
									<a href="recargas_transportes.php" class="waves-teal btn-flat"><strong>CARGA TRANSPORTE</strong></a>
								</div>
								<div class="col s12 m4 l4 mg-b-20">
									<p><a href="recargas_prepagos.php" ><img src="img/rubros/prepagos.svg" class="max-150" alt=""></p>
									<a href="recargas_prepagos.php" class="waves-teal btn-flat"><strong>CARGA PREPAGOS</strong></a>
								</div>
							</div>
						</div>
					</div>
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
