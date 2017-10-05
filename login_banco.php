<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header_out.php'; ?>

  <main class="grey-text text-darken-2">
	<div class="container">

	  <div class="row mg-t-20">
	   <div class="col s12 m10 offset-m1 l6 offset-l3 ">
		<div class="card hoverable">
		  <form>
			<div class="card-content">
			  <span class="card-title">Ingresa</span>
			  <p class="enlace_postitulo"><a href="index.php">Ingresá con tu email</a></p>

			  <div class="row mg-b-0">

				<div class="col s12">
					<ul id="tabs-swipe-demo" class="tabs tabs-fixed-width mg-b-15">
					  <li class="tab col s3 active"><a href="#documento">Documento</a></li>
					  <li class="tab col s3"><a class="" href="#usuario">Usuario</a></li>
					</ul>
				</div>

				<div class="input-field col s12">
				  <select>
					<option value="" disabled selected>Seleccione Banco</option>
					<option value="1">Santander Río</option>
					<option value="2">Comafi</option>
					<option value="3">ICBC</option>
					<option value="4">BBVA Francés</option>
				  </select>
				  <label>Banco</label>
				</div>

				<div class="documento">
				  <div class="input-field col s4">
				   <select>
					 <option value="" disabled selected>Tipo</option>
					 <option value="1">DNI</option>
					 <option value="2">Cédula</option>
					 <option value="3">Pasaporte</option>
				   </select>
				   <label>Documento</label>
				 </div>
				 <div class="input-field col s8">
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
				<input id="password" type="password" class="validate">
				<label for="password" data-error="La contraseña es incorrecta. Te quedan 5 intentos.">Contraseña</label>
				<a href="#" style="position: absolute; right: 40px; top: 12px;"><i for="password" class="material-icons">remove_red_eye</i></a>
			  </div>

			</div>
		</div>
		<div class="card-action">
		  <div class="row mg-b-0 valign-wrapper">
			<div class="col s6">
				<a href="olvide_usuario.php" class="usuario">Olvidé mi usuario</a>
        		<a href="olvide_pass.php" class="block">Olvidé mi contraseña</a>
			</div>
			<div class="col s4 right-align">
			  <a href="inicio.php" class="btn orange">Ingresar</a>
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
