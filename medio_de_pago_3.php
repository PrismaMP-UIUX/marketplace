<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>
	<div>
		<?php include '_partials/header.php'; ?>
		<?php include '_partials/nav.php'; ?>
	</div>
	<?php include '_partials/actions.php'; ?>

	<main>
		<div class="container">
			<div class="row">

				<div class="col s12 m10 offset-m1 l8 offset-l2">
					<!-- steps -->
					<div class="card">
						<div class="card-content">
							<div class="row">
								<div class="col s12 flex align-i-center flex-j-between">
									<span class="card-title left">Medios de Pago</span>
									<img src="img/mediosdepago/todopago.svg" alt="todopago" width="100px" class="right">
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6 class="pink-text"><b>Creá tu Billetera Virtual y recordá los datos de tu tarjeta para los próximos pagos.</b></h6>
									<p>
										¡Es rápido, fácil y seguro!  Deberás ingresar manualmente y por única vez todos los datos de la tarjeta de crédito o débito que quieras adherir.
									</p>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col s12">
									<h6 class="pink-text"><b>Sobre Todo Pago</b></h6>
								</div>
								<div class="col s12">
									<ul class="collapsible" data-collapsible="accordion">
										<li>
											<div class="collapsible-header grey lighten-5"><i class="material-icons">add</i>¿Qué es Todo Pago?</div>
											<div class="collapsible-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</p>
											</div>
										</li>
										<li>
											<div class="collapsible-header grey lighten-5"><i class="material-icons">add</i>Lorem ipsum dolor sit amet.</div>
											<div class="collapsible-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6 class="pink-text"><b>Lorem ipsum dolor sit amet</b></h6>
								</div>
								<div class="col s12">
									<ul class="collapsible" data-collapsible="accordion">
										<li>
											<div class="collapsible-header grey lighten-5"><i class="material-icons">add</i><span class="pink-text">¿Lorem ipsum, dolor?</span></div>
											<div class="collapsible-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div> -->
							<div class="row">
								<div class="col s12 m9 right right-align">
									<a class="btn blue waves-effect waves-light" href="alta_tarjeta.php"><span class="hide-on-small-only">Comencemos /</span> Agregar Medio de Pago</a>
								</div>
							</div>

						</div> <!-- card-content end -->
					</div> <!-- card end -->

				</div><!-- /col -->


				<div class="col s12">
					<p class="red-text center-align">(si ya tuviera medios de pago se mostraría esta otra pantalla. Pusimos todos los bancos para probar los íconos nomás:)</p>
				</div>

				<div class="col s12">


					<div class="card">
						<div class="card-content">
							<div class="flex align-i-center flex-j-between">
								<span class="card-title left">Medios de Pago</span>
								<img src="img/mediosdepago/todopago.svg" alt="todopago" width="100px" class="right">
							</div>
							<div class="row mg-b-0">
								<div class="col s12">
									<h6 class="pink-text"><b>Éstos son tus medios de pago:</b></h6>
								</div>
							</div>
							<div id="masonry-grid" class="row grid">

								<!-- Esta primera tarjeta es para desarrollo que la pidió sin logo de banco -->
								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago disabled grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9 pd-t-75">
											<!-- <img src="img/bancos/galicia.svg" alt="" class="mg-neg-t-9 height-80"> -->
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">&nbsp;</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/visa.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago disabled grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/galicia.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/visa.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/santanderrio.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/redlink.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/bancodelsol.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/master.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item disabled center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/bancorepublica.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/master.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item disabled center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/bst.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/visa.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/columbia.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/amex.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item disabled center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/comafi.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/master.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/efectivosi.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/visa.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/frances.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/amex.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/hsbc.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/master.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item disabled center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/icbc.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/visa.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/itau.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento mg-r-6">02/20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/maestro.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/macro.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/master.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item disabled center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/patagonia.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/visa.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/supervielle.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/amex.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9">
											<img src="img/bancos/tucuman.svg" alt="" class="mg-neg-t-9 height-80">
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/master.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9 pd-t-75">
										<!-- 	<img src="img/bancos/tarjeta_naranja.svg" alt="" class="mg-neg-t-9 height-80"> -->
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/tarjeta_naranja.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>
								<div class="col s12 m6 l4 grid-item center-align mg-b-25">
									<div class="mediodepago grey lighten-3 grey-text mg-t-30">
										<span class="right pointer tooltipped" data-position="top" data-text="Marcar como favorita" data-delay="50"><i class="material-icons fav">star_border</i></span>
										<div class="left-align mg-neg-b-9 pd-t-75">
										<!-- 	<img src="img/mediosdepago/tarjetashopping.svg" alt="" class="mg-neg-t-9 height-80"> -->
										</div>
										<p class="big left-align fonttarjeta">4006 1500 0004 6560</p>
										<p class="left-align small fonttarjeta">Juan Pablo Perez</p>
										<p class="left-align small fonttarjeta">VTO <span class="vencimiento-mes">02</span>/<span class="vencimiento-anio mg-r-6">20</span><a href="#editarVto" class="modal-trigger btn btn-floating blue"><i class="material-icons tiny">create</i></a><span class="right mg-neg-t-9"><img src="img/mediosdepago/tarjetashopping.svg" alt="" class="height-35"></span></p>
									</div>
									<div class="action">
										<a href="#habilitar-mp" class="btn-flat blue-text modal-trigger white waves-effect waves-light mg-t-10 hide">Habilitar</a>
										<!-- <a class="waves-effect waves-light blue-text btn-flat white mg-t-10" href="#">Editar <i class="material-icons right">edit</i></a> -->
										<a class="waves-effect waves-light white btn-erase btn-flat  modal-trigger mg-t-10" href="#eliminar-mp"><i class="material-icons left">delete_forever</i>Eliminar </a>
									</div>
								</div>

							</div> <!-- masonry end -->

							<div class="row">
								<div class="col s12">
									<a class="btn blue waves-effect waves-light right" href="alta_tarjeta.php"><i class="material-icons left">add_box</i> Agregar Medio de Pago</a>
								</div>
							</div>

						</div> <!-- card-content end -->
					</div> <!-- card end -->




					<!-- end steps -->
				</div>
			</div>



		</div>
	</main>

	<!-- Modal Structure // ELIMINAR MEDIO DE PAGO -->
	<div id="eliminar-mp" class="modal max-500">
		<div class="modal-content">
			<i class="material-icons right modal-close">close</i>
			<h3 class="card-title"><i class="material-icons left">delete_forever</i> Eliminar Medio de pago</h3>
			<p class="mg-t-30">Estás por eliminar la tarjeta de crédito Visa <b>4509XXXX-6012</b>.</p>
			<p class="mg-t-20">Al confirmar, se eliminará la tarjeta de tu billetera. Para agregarla nuevamente, deberás repetir la operación de agregar un nuevo medio de pago.</p>
		</div>
		<div class="modal-footer">
			<div class="left">
				<a class="btn-flat modal-action modal-close waves-effect waves-light">Cancelar <i class="material-icons left">close</i> </a>
			</div>
			<div class="right">
				<a href="" class="btn red white-text modal-action modal-close waves-effect waves-light"><i class="material-icons left">check</i> Eliminar tarjeta </a>
				<!-- <a href="" class="btn-flat blue-text modal-action modal-close waves-effect waves-light left tooltipped" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50">Eliminar definitivamente</a> -->
			</div>
		</div>
	</div>

	<!-- Modal Structure // HABILITAR MEDIO DE PAGO -->
	<div id="habilitar-mp" class="modal max-500">
		<div class="modal-content">
			<i class="material-icons right modal-close">close</i>
			<h3 class="card-title"><i class="material-icons left">check_circle</i> Habilitar Tarjeta</h3>
			<div class="row">
				<div class="col s8 offset-s2 center-align">
					<p class="pd-b-20">
						Ingresá a la billetera de Todo Pago que se encuentra en tu Home Banking para habilitar esta tarjeta de crédito
					</p>
					<a class="btn blue white-text modal-action modal-close waves-effect waves-light btn-home-banking">Ir a mi Home Banking</a>
			    </div>
			</div>
		</div>
	</div>


	<!-- Modal Structure // Editar Vto -->
	<div id="editarVto" class="modal max-500">
		<div class="modal-content">
			<i class="material-icons right modal-close">close</i>
			<h3 class="card-title"><i class="material-icons">create</i>Editar vencimiento</h3>
			<p class="mg-b-0 mg-t-10">Ingresá el vencimiento de la tarjeta <b>5439 XXXX XXXX</b></p>
			<div class="row mg-b-0">
				<!-- <div class="input-field col s12 m6 offset-m3">
					<input placeholder="MM/AA" id="vencimientoImput" type="text" class="validate">
				</div> -->
				<div class="input-field col s3 offset-s3">
          <input id="mes-vto" name="mes" type="text" pattern="^(0?[1-9]|1[012])$" maxlength="2" class="validate center-align" placeholder="MM" required>
        </div>
        <div class="input-field col s3">
          <input id="anio-vto" name="anio" type="text" pattern="\d*" maxlength="2" class="validate center-align" placeholder="AA" required>
        </div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="right-align">
				<a class="btn-flat modal-action modal-close waves-effect waves-light pd-r-15 pd-l-15 left"><i class="material-icons left">close</i> Cancelar</a>
				<a class="btn blue modal-action modal-close waves-effect waves-light modal-close tooltipped" data-position="top" data-text="Guardar" onclick="editarVencimiento()"><i class="material-icons left mg-r-5">save</i> Guardar</a>
			</div>
		</div>
	</div>


	<!-- Javascript -->
	<?php include '_partials/footer.php'; ?>


	<script>
		$(function(){
			$('.stepper').activateStepper();
		});

		var masonry;
		$(document).ready(function(){

			//Esconder carrito mobile del nav
			$('.cantidad').hide();

			$('.fav').on("click", function() {
				var text = $(this).text();
				$('.fav').text('star_border');
				$(this).text(text == 'star' ? 'star_border' : 'star');
			});

			// Masonry
			masonry = $('.grid').masonry({
				// options
				itemSelector: '.grid-item',
				horizontalOrder: true
			});

	 	})

		function editarVencimiento(){
			$('.vencimiento-mes').text($('#mes-vto').val());
			$('.vencimiento-anio').text($('#anio-vto').val());
			$('.grid').masonry();
			$('#editarVto').modal('close');
		}

  // Para que funcione el EDITAR ALIAS al presionar ENTER
  // $("#mes-vto").keyup(function(event) {
  // 	if (event.keyCode === 13) {
  // 		editarVencimiento();
  // 	}
  // });
  $("#anio-vto").keyup(function(event) {
  	if (event.keyCode === 13) {
  		editarVencimiento();
  	}
  });

</script>


</body>
</html>
