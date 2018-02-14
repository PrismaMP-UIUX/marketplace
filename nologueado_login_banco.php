<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header_out.php'; ?>

  <main class="grey-text text-darken-2">
	<div class="container">

	  <div class="row mg-t-20">
	   <div class="col s12 m10 offset-m1 l6 offset-l3">
		<div class="card hoverable">
		  <form>
			<div class="card-content">
        <div class="mg-b-20 clearfix">
          <span class="card-title left">Ingresá</span>
          <p class="enlace_postitulo right"><a href="nologueado_login.php">Ingresá con tu email</a></p>
        </div>

			  <div class="row mg-b-0">

				<div class="col s12">
					<ul id="tabs-swipe-demo" class="tabs tabs-fixed-width mg-b-15">
					  <li class="tab col s3 active"><a href="#documento">Documento</a></li>
					  <li class="tab col s3"><a class="" href="#usuario">Usuario</a></li>
					</ul>
				</div>

				<div class="input-field col s12">
				  <select>
						<option value="0" disabled selected>Seleccione Banco</option>
						<option data-icon="img/bancos_CH/bancos_CH_columbia.svg" value="1">Columbia</option>
						<option data-icon="img/bancos_CH/bancos_CH_itau.svg" value="2">Itaú</option>
						<option data-icon="img/bancos_CH/bancos_CH_santanderrio.svg" value="3">Santander Río</option>
						<option data-icon="img/bancos_CH/bancos_CH_comafi.svg" value="4">Banco Comafi</option>
						<option data-icon="img/bancos_CH/bancos_CH_hsbc.svg" value="5">HSBC</option>
						<option data-icon="img/bancos_CH/bancos_CH_tucuman.svg" value="6">Banco Tucumán</option>
						<option data-icon="img/bancos_CH/bancos_CH_galicia.svg" value="7">Galicia</option>
						<option data-icon="img/bancos_CH/bancos_CH_macro.svg" value="8">Macro</option>
						<option data-icon="img/bancos_CH/bancos_CH_icbc.svg" value="9">ICBC</option>
						<option data-icon="img/bancos_CH/bancos_CH_frances.svg" value="10">BBVA Francés</option>
						<option data-icon="img/bancos_CH/bancos_CH_patagonia.svg" value="11">Banco Patagonia</option>
						<option data-icon="img/bancos_CH/bancos_CH_supervielle.svg" value="12">Supervielle</option>
						<option data-icon="img/bancos_CH/bancos_CH_bancodelsol.svg" value="13">Banco del Sol</option>
						<option data-icon="img/bancos_CH/bancos_CH_bancorepublica.svg" value="14">Banco República</option>
						<option data-icon="img/bancos_CH/bancos_CH_bst.svg" value="15">BST</option>
						<option data-icon="img/bancos_CH/bancos_CH_efectivosi.svg" value="16">Efectivo Sí</option>
				  </select>
				  <label>Banco</label>
				</div>

				<div class="documento">
				  <div class="input-field col s12 m4">
				   <select>
					 <!-- <option value="" disabled selected>Tipo</option> -->
					 <option value="1">DNI</option>
					 <option value="2">Cédula</option>
					 <option value="3">Pasaporte</option>
				   </select>
				   <label>Documento</label>
				 </div>
				 <div class="input-field col s12 m8">
				  <input id="dni" type="text" class="validate">
				  <label for="dni">Número</label>
				</div>
			  </div>
			  <div class="usuario">
				<div class="input-field col s12">
				  <input id="usuario" type="text" class="validate">
				  <label for="usuario">Usuario bancario </label>
				</div>
			  </div>

			  <div class="input-field col s12">
				<input id="password" type="password" class="validate" placeholder=" ">
				<label for="password" data-error="La contraseña es incorrecta. Te quedan 5 intentos.">Contraseña</label>
				<a href="#" class="inside-icon"><i for="password" class="material-icons">remove_red_eye</i></a>
			  </div>

			</div>
		</div>
		<div class="card-action">
		  <div class="flex flex-j-between align-i-center flex-flow-wrap-reverse">
			<div class="mg-5">
				<a href="nologueado_olvide_usuario.php" class="block mg-b-5">Olvidé mi usuario</a>
        <a href="nologueado_olvide_pass.php" class="block">Olvidé mi contraseña</a>
			</div>
			<div class="mg-5">
			  <a href="inicio.php" class="btn blue">Ingresar</a>
			</div>
		  </div>
		</div>
	  </form>
	</div>
  </div>
</div>
</div>
</main>

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
  });

  $("li.tab").on("click", function () {
	//busco todos los links
	var tabs = $("li.tab a").map(function() {
		return "."+this.attributes['href'].value.slice(1);
	}).get();

	$(tabs.join(",")).removeClass("active").hide();

	$("."+this.children[0].attributes["href"].value.slice(1)).addClass("active").show();

  });

  $("#ingresar").hide();

  $("li.tab.active").trigger('click');

});
</script>

</body>
</html>
