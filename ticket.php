<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

	<div>
		<?php include '_partials/header.php'; ?>
		<?php include '_partials/nav.php'; ?>
	</div>
	<?php include '_partials/actions.php'; ?>

	<main class="grey-text text-darken-1">

		<div class="msj-error card-panel red lighten-4 black-text">
			<div class="container valign-wrapper flex-j-center">
				<i class="material-icons red-text text-darken-4 left mg-r-20 hide-on-small-only">announcement</i>
				<div>
					<p class="red-text text-darken-4 mg-0"> No pudimos realizar el pago de tu factura.<br>Tu cuenta <b>00137392</b> no posee suficiente saldo para pagar <b>Aysa (Agua de casa)</b></p>
				</div>
				<a href="#" class="cerrar" id=""><i class="material-icons right black-text mg-l-20">close</i></a>
			</div>
		</div>

		<div class="msj-ok card-panel green lighten-4 black-text">
			<div class="container valign-wrapper flex-j-center">
				<i class="material-icons green-text text-darken-3 left mg-r-20 hide-on-small-only">check_circle</i>
				<div>
					<p class="green-text text-darken-3 mg-0">Felicitaciones!</p>
					<p class="green-text text-darken-3 mg-b-0 mg-t-5">Una cosa menos para preocuparte.<br>Ya pagaste: <b>Aysa (Agua de casa)</b>, <b>Claro (Claro)</b>, <b>Metrogas (Gas Mardel tía)</b> y <b>Personal (Celu vieja)</b></p>
				</div>
				<a href="#" class="cerrar" id=""><i class="material-icons right black-text mg-l-20">close</i></a>
			</div>
		</div>

	<div class="container tickets">
		<!-- botones de acción -->
		<div class="row mg-t-50">
			<div class="flex flex-j-between align-i-center" id="accion">
				<div class="flex flex-j-start align-i-center">
          <a href="#!" class="btn blue white-text mg-b-5 tooltipped" data-text="Imprimir" data-position="top" data-delay="50" disabled><i class="material-icons left">local_printshop</i></a>
          <a href="#!" class="btn blue white-text mg-l-10 mg-b-5 tooltipped" data-text="Descargar" data-position="top" data-delay="50" disabled><i class="material-icons left">file_download</i></a>
          <a href="#!" class="btn blue white-text mg-l-10 mg-b-5 tooltipped" data-text="Enviar por mail" data-position="top" data-delay="50" disabled><i class="material-icons left">mail</i></a>
          <p class="mg-0 mg-b-5 mg-l-10 hide"><span class="checkedLen"></span> seleccionado(s)</p>
        </div>
				<a class="btn-flat blue-text left hide-on-small-only" href="inicio_facturas_pagadas.php"><i class="material-icons left">arrow_back</i> Volver al Inicio</a>
			</div>
		</div>
		<!-- tickets -->
		<div class="row">

			<div class="col s12 m4 l3"><!-- ticket 01 -->
				<div class="card-panel grilla ticket z-depth-4">
					<div class="card-content">
						<div class="valign-wrapper">
							<rubro class="mg-r-5">
								<div class="rubro agua circle border-grey white max-40 height-40 z-depth-2"></div>
							</rubro>
							<!-- <img src="img/rubros/agua.svg" class="circle"> -->
							<span class="card-title mg-l-8">Aguas Argentinas</span>
						</div>
						<ul>
							<li>Fecha: <b>15/08/2017</b></li>
							<li>Hora: <b>14:05:55</b>
							<li>Transacción: <b>00010001374</b></li>
							<li>Identificacion: <b>32742510</b></li>
							<li>Medio de pago: <b><img src="img/mediosdepago/visa.svg" class="tarjmp" alt=""> terminada en 9652</b></li>
						</ul>
						<h5 class="black-text right-align mg-t-0"><b>$250,00</b></h5></li>
						<div class="flex flex-j-center">
							<a href="#imprimir" class="modal-trigger btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Imprimir"><i class="material-icons tiny">print</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Descargar"><i class="material-icons tiny">file_download</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Enviar por mail"><i class="material-icons tiny">mail</i></a>
						</div>
						<input type="checkbox" class="filled-in" id="filled-in-box-1"/>
            <label for="filled-in-box-1" class="mg-t-20"><span>SELECCIONAR</span></label>
					</div>
				</div>
			</div><!-- fin ticket 01 -->


			<div class="col s12 m4 l3"><!-- ticket 02 -->
				<div class="card-panel grilla ticket z-depth-4">
					<div class="card-content">
						<div class="valign-wrapper">
							<rubro class="mg-r-5">
								<div class="rubro telefonia circle border-grey white max-40 height-40 z-depth-2"></div>
							</rubro>
							<!-- <img src="img/rubros/telefonia.svg" class="circle"> -->
							<span class="card-title mg-l-8">Movistar</span>
						</div>
						<ul>
							<li>Fecha: <b>15/08/2017</b></li>
							<li>Hora: <b>14:05:55</b>
							<li>Transacción: <b>00010001374</b></li>
							<li>Identificacion: <b>32742510</b></li>
							<li>Medio de pago: <b><img src="img/mediosdepago/amex.svg" class="tarjmp" alt=""> terminada en 1245</b></li>
						</ul>
						<h5 class="black-text right-align mg-t-0"><b>$670,50</b></h5></li>
						<div class="flex flex-j-center">
							<a href="#imprimir" class="modal-trigger btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Imprimir"><i class="material-icons tiny">print</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Descargar"><i class="material-icons tiny">file_download</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Enviar por mail"><i class="material-icons tiny">mail</i></a>
						</div>
						<input type="checkbox" class="filled-in" id="filled-in-box-2"/>
            <label for="filled-in-box-2" class="mg-t-20"><span>SELECCIONAR</span></label>
					</div>
				</div>
			</div><!-- fin ticket 02 -->


			<div class="col s12 m4 l3"><!-- ticket 03 -->
				<div class="card-panel grilla ticket z-depth-4">
					<div class="card-content">
						<div class="valign-wrapper">
							<rubro class="mg-r-5">
								<div class="rubro proveedoresinternet circle border-grey white max-40 height-40 z-depth-2"></div>
							</rubro>
							<!-- <img src="img/rubros/proveedoresinternet.svg" class="circle"> -->
							<span class="card-title mg-l-8">Fibertel</span>
						</div>
						<ul>
							<li>Fecha: <b>15/08/2017</b></li>
							<li>Hora: <b>14:05:55</b>
							<li>Transacción: <b>00010001374</b></li>
							<li>Identificacion: <b>32742510</b></li>
							<li>Medio de pago: <b><img src="img/mediosdepago/master.svg" class="tarjmp" alt=""> terminada en 5127</b></li>
						</ul>
						<h5 class="black-text right-align mg-t-0"><b>$1080,22</b></h5></li>
						<div class="flex flex-j-center">
							<a href="#imprimir" class="modal-trigger btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Imprimir"><i class="material-icons tiny">print</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Descargar"><i class="material-icons tiny">file_download</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Enviar por mail"><i class="material-icons tiny">mail</i></a>
						</div>
						<input type="checkbox" class="filled-in" id="filled-in-box-3"/>
            <label for="filled-in-box-3" class="mg-t-20"><span>SELECCIONAR</span></label>
					</div>
				</div>
			</div><!-- fin ticket 03 -->


			<div class="col s12 m4 l3"><!-- ticket 04 -->
				<div class="card-panel grilla ticket z-depth-4">
					<div class="card-content">
						<div class="valign-wrapper">
							<rubro class="mg-r-5">
								<div class="rubro gas circle border-grey white max-40 height-40 z-depth-2"></div>
							</rubro>
							<!-- <img src="img/rubros/gas.svg" class="circle"> -->
							<span class="card-title mg-l-8">Metrogas</span>
						</div>
						<ul>
							<li>Fecha: <b>15/08/2017</b></li>
							<li>Hora: <b>14:05:55</b>
							<li>Transacción: <b>00010001374</b></li>
							<li>Identificacion: <b>32742510</b></li>
							<li>Medio de pago: <b><img src="img/mediosdepago/visa.svg" class="tarjmp" alt=""> terminada en 9652</b></li>
						</ul>
						<h5 class="black-text right-align mg-t-0"><b>$527,41</b></h5></li>
						<div class="flex flex-j-center">
							<a href="#imprimir" class="modal-trigger btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Imprimir"><i class="material-icons tiny">print</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Descargar"><i class="material-icons tiny">file_download</i></a>
							<a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Enviar por mail"><i class="material-icons tiny">mail</i></a>
						</div>
						<input type="checkbox" class="filled-in" id="filled-in-box-4"/>
            <label for="filled-in-box-4" class="mg-t-20"><span>SELECCIONAR</span></label>
					</div>
				</div>
			</div><!-- fin ticket 04 -->


		</div>
		<!-- fin tickets -->


	</div>
</main>

<?php include '_partials/modal_imprimir.php'; ?>

<!-- Javascript -->
<?php include '_partials/footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function() {
	//   $("input[type=checkbox]").change(function(){
	//     $(this).parent(".card-action").parent(".card").toggleClass("serv_select");
	//   })

		$("tabs-content").change(function(a,b,c) {
			console.log(a);
			console.log(b);
			console.log(c);
		})

		//Escondo carrito
		$('.cantidad').hide();

		// MSJ OK/ERROR EN TICKET RANDOM, SOLO PARA MAQUETA
		// Utilizando randomBoolean cuando da TRUE muestro msj OK y cuando da FALSE muestro msj error...
		var randomBoolean = Math.random() >= 0.5
		console.log(randomBoolean);
		if (randomBoolean) {
			$('.msj-ok').show();
			$('.msj-error').hide();
		} else {
			$('.msj-error').show();
			$('.msj-ok').hide();
		}

		//calculo el heigth de la card para esconderla después...
		var cardPanelOkHeight = $('.msj-ok').css("height");
		var cardPanelErrorHeight = $('.msj-error').css("height");
		console.log(cardPanelOkHeight);
		console.log(cardPanelErrorHeight);
		//Escondo la card OK posicionandola detras del menú...
		$('.msj-ok .cerrar').on("click", function() {
			$('main').animate({top:"-"+cardPanelOkHeight});
			//Muestro un toast para deshacer...
			var $toastContentOk = $('<span>Msj Ok</span>').add($('<a href="#!" id="toastOk" class="btn-flat toast-action blue-text">Deshacer</a>'));
			Materialize.toast($toastContentOk, 5000);
		});
		//Si deshace vuelvo a mostrar la card... NO ESTARIA FUNCIONANDO :(
		$('#toastOk').on("click", function(){
			$('main').animate({top: cardPanelOkHeight});
		});
		//Escondo la card ERROR posicionandola detras del menú...
		$('.msj-error .cerrar').on("click", function() {
			$('main').animate({top:"-"+cardPanelErrorHeight});
			var $toastContentError = $('<span>Msj Error</span>').add($('<a href="#!" id="toastError" class="btn-flat toast-action blue-text">Deshacer</a>'));
			Materialize.toast($toastContentError, 5000);
		});
		//Si deshace vuelvo a mostrar la card... NO ESTARIA FUNCIONANDO :(
		$('#toastError').on("click", function(){
			$('main').animate({top: cardPanelErrorHeight});
		});

		//Cuando hace click en el check
    $("input[type=checkbox].filled-in").on("click", function() {
        //Muestra/oculta el boton de imprimir/descargar/mail
        var chksLen = $("input[type=checkbox].filled-in:checked").length;
        console.log(chksLen);
        if (chksLen > 0) {
            $('#accion a').removeAttr("disabled");
            $('#accion span.checkedLen').text(chksLen);
            $('#accion p').removeClass('hide').fadeIn();
        } else {
            $('#accion a').attr("disabled", "disabled");
            $('#accion span.checkedLen').text("");
            $('#accion p').addClass('hide');
        }
    });



	});
</script>


</body>
</html>
