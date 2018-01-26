<!-- Modal Structure // BUSCAR -->
<div id="nuevopago" class="modal">
	<div class="modal-content white">
		<i class="material-icons right modal-close">close</i>
		<div class="row mg-t-10 mg-b-0">
			<div class="col s12">
				<h3>Buscar</h3>
			</div>
		</div>

		<div class="row mg-b-0">
			<div class="col s12">
				<ul id="tabs-swipe-demo" class="tabs">
					<li class="tab col s6"><a class="active" href="#test1"><h6><span class="hide-on-small-only">POR </span>NOMBRE</h6></a></li>
					<li class="tab col s6"><a href="#test2"><h6><span class="hide-on-small-only">POR</span> RUBRO</h6></a></li>

				</ul>
			</div>
			<!-- buscar por nombre de empresa -->
			<div id="test1" class="col s12 mg-t-20">
				<div class="row">
					<div class="input-field col s12 m9">
						<!-- <i class="material-icons prefix">search</i> -->
						<input type="text" id="autocomplete-input" class="autocomplete " autocomplete="off">
						<label for="autocomplete-input">Nombre de empresa o servicio</label>
					</div>
					<div class="col s12 m3 right-align">
						<a href="#" class="btn blue waves-effect waves-light mg-t-15">Buscar</a>
					</div>
				</div>
			</div>

			<script>

			</script>

			<!-- buscar por rubro -->
			<div id="test2" class="col s12 mg-t-20">
				<div class="row">
					<div class="input-field col s12">
						<select>
							<option value="" disabled selected>Rubro</option>
							<option value="1">AFIP</option>
							<option value="AGUA">Agua</option>
							<option value="BPCT">Barrios Privados</option>
							<option value="CBAS">Clubes y Asociaciones</option>
							<option value="ADMC">Consorcios</option>
							<option value="COOP">Cooperativas</option>
							<option value="DNCS">Donaciones</option>
							<option value="ELEC">Electricidad</option>
							<option value="EMMD">Emergencias Medicas</option>
							<option value="IEDU">Establecimientos Educativos</option>
							<option value="GAS">Gas</option>
							<option value="MCPS">Impuestos Municipales</option>
							<option value="RNTS">Impuestos Provinciales</option>
							<option value="MDPG">Medicina Prepaga</option>
							<option value="TVCB">Operadores de TV</option>
							<option value="SVAR">Otros Servicios</option>
							<option value="PTNS">Patentes</option>
							<option value="PLAO">Planes de Ahorro</option>
							<option value="PRTM">Prestamos</option>
							<option value="ISP">Proveedores de Internet</option>
							<option value="RCEL">Recargas</option>
							<option value="SGDD">Seguridad</option>
							<option value="SGRS">Seguros</option>
							<option value="SGRT">Seguros de Retiro</option>
							<option value="SGVD">Seguros de Vida</option>
							<option value="WSP">Servicios Web</option>
							<option value="9">Solicitud de Informes</option>
							<option value="TCIN">Tarjetas de Credito</option>
							<option value="TLFN">Telefonia</option>
							<option value="VTUR">Viajes y Turismo</option>
						</select>
						<label>Seleccioná un rubro</label>
					</div>
					<p class="red-text">aparece cuando elije el rubro</p>
					<div class="input-field col s12">
						<select>
							<option value="" disabled selected>Seleccioná un subrubro</option>
							<option value="ABSA">ABSA</option>
							<option value="XDXT">Agua de los Andes</option>
							<option value="UAJH">Aguas Catamarca SAPEM</option>
							<option value="AACC">Aguas Cordobesas</option>
							<option value="PQTD">Aguas de Balcarce</option>
							<option value="ACNA">Aguas de Campana</option>
							<option value="ACSA">Aguas de Corrientes</option>
							<option value="AGUA">Aguas de Formosa</option>
							<option value="ASGO">Aguas de Santiago</option>
							<option value="AZRT">Aguas de Zárate SAPEM</option>
							<option value="KVVH">Aguas del Norte</option>
							<option value="YVGT">Aguas Mendocinas</option>
							<option value="IILU">Aguas Riojanas SAPEM</option>
							<option value="ARNG">Aguas Rionegrinas</option>
							<option value="ASSA">Aguas Santafesinas</option>
							<option value="UMFK">Aquavita</option>
							<option value="AYSA">AySA</option>
							<option value="GJUV">C de Trabajo Sudeste</option>
							<option value="MPHH">Coop Agua de Zavalla</option>
							<option value="QGJW">Coop de Agua Jacobacci</option>
							<option value="JFDC">Coparqui</option>
							<option value="COSE">COSEGO Aguas de Gorina</option>
							<option value="WOKE">COSPAL</option>
							<option value="EAMS">EAMSEP Zapala</option>
							<option value="EDOS">EDOS Concordia</option>
							<option value="EAOM">El Faldeo</option>
							<option value="EMAV">EMAV Las Varillas</option>
							<option value="EPAS">EPAS Neuquén</option>
							<option value="IRRI">Irrigación Mendoza</option>
							<option value="JTAV">Junta Vecinal Melipal</option>
							<option value="JVPL">JV Parque Playa Serena</option>
							<option value="LUMA">Lumaco</option>
							<option value="OSVM">Obras Sanit V Mercedes</option>
							<option value="OSSE">Obras Sanitarias MDP</option>
							<option value="OSSJ">OSSE San Juan</option>
							<option value="SAME">SAMEEP Chaco</option>
							<option value="SAM">SAMSA Misiones</option>
							<option value="SAPM">SAT SAPEM</option>
							<option value="IDIB">Servicio Integral Agua</option>
							<option value="SLAS">SLA - Subterránea</option>
							<option value="RSCH">SLA - Subterránea Plan</option>
							<option value="PUHH">SLA - Superficial</option>
							<option value="XQEA">SLA - Superficial Plan</option>
							<option value="SDAG">Sudamericana de Aguas</option>
						</select>
						<label>Seleccioná un subrubro</label>
					</div>
					<div class="input-field col s12">
						<select>
							<option value="" disabled selected>Seleccioná una empresa</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
						<label>Seleccioná una empresa</label>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- <div class="modal-footer">
		<div class="right-align">
			<a href="#" class="btn blue modal-action modal-action waves-effect waves-light">Buscar</a>
		</div>
	</div> -->
</div>
