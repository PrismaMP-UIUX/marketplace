<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <div>
    <?php include '_partials/header.php'; ?>
    <?php include '_partials/nav.php'; ?>
  </div>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">
      <div class="row">
        <div class="col s12 "><!-- m12 l10 offset-l1  -->
          <!-- list -->

          <div class="card">
            <div class="card-content">
              <span class="card-title mg-b-20">Estas pagando</span>

              <hr class="mg-b-30 hide-on-small-only">

              <ul class="collection z-depth-1 listadefacturas">
                <li data-id-factura="1" class="collection-item avatar grey lighten-3 valign-wrapper facturaAPagar facturaActiva" data-nombre-empresa="Electrosur">
                  <rubro>
                    <div class="rubro donaciones circle avatar-top hide-on-small-only"></div>
                  </rubro>
                  <!-- <img src="img/rubros/donaciones.svg" alt="servicio1" class="circle avatar-top hide-on-small-only"> -->
                  <div class="flex align-i-center width-100">
                    <div class="pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2">Cutucuchillo (<b>ElectroSur</b>)</span>
                      <span> un monto de</span>
                    </div>
                    <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                      <span>$</span>
                      <input id="test65" value="1001.01" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                      <div>
                          <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                              <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                          </a>
                          <a href="#!" class="pagarTotal btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                              <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                          </a>
                      </div>
                      <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                        <option value="0" data-icon="img/mediosdepago/amex.svg" class="">terminada en 7369</option>
                        <option value="1" data-icon="img/mediosdepago/visa.svg" selected class="">terminada en 9692</option>
                        <option value="2" data-icon="img/mediosdepago/master.svg" class="">terminada en 1844</option>
                        <option value="3" class="">CA $ 12345678901234578</option>
                        <option value="4" class="">Otro medio de pago</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>

                <li data-id-factura="2" class="collection-item avatar lighten-3 valign-wrapper facturaAPagar facturaActiva" data-nombre-empresa="Claro">
                  <rubro>
                    <div class="rubro recargas circle avatar-top hide-on-small-only"></div>
                  </rubro>
                  <!-- <img src="img/rubros/recargas.svg" alt="servicio1" class="circle avatar-top hide-on-small-only"> -->
                  <div class="flex align-i-center width-100">
                    <div class="pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2"><b>Claro</b></span>
                      <span> un monto de</span>
                    </div>
                    <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                      <span>$</span>
                      <input value="191.06" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                      <div>
                          <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                              <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                          </a>
                          <a href="#!" class="pagarTotal btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                              <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                          </a>
                      </div>
                      <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                          <option value="0" data-icon="img/mediosdepago/visa.svg" selected class="">terminada en 9692</option>
                          <option value="1" data-icon="img/mediosdepago/amex.svg" class="">terminada en 7369</option>
                          <option value="2" data-icon="img/mediosdepago/master.svg" class="">terminada en 1844</option>
                          <option value="3" class="">CA $ 12345678901234578</option>
                          <option value="4" class="">Otro medio de pago</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>


                <li data-id-factura="3" class="collection-item avatar grey lighten-3 valign-wrapper facturaAPagar facturaActiva" data-nombre-empresa="Metrogas">
                  <rubro>
                    <div class="rubro gas circle avatar-top hide-on-small-only"></div>
                  </rubro>
                  <!-- <img src="img/rubros/gas.svg" alt="servicio1" class="circle avatar-top hide-on-small-only"> -->
                  <div class="flex align-i-center width-100">
                    <div class="pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2">Gas tía mardel(<b>Metrogas</b>)</span>
                      <span> un monto de</span>
                    </div>
                    <!-- <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                      <span>$</span>
                      <input value="2100" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                      <div>
                          <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                              <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                          </a>
                          <a href="#!" class="pagarTotal btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                              <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                          </a>
                      </div>
                      <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                    </div> -->
                    <div class="input-field height-45 flex align-i-center inputEditImporte selectImportesFijos mg-t-0 mg-l-0 mg-r-10 max-115 grey-text text-darken-2 left">
                      <span style="position: absolute;">$</span>
                      <div class="left mg-r-10">
                        <select class="left select-wrapper select-sin-margen select-importe pd-r-20">
                          <option value="0">2100</option>
                          <option value="1">2500</option>
                          <option value="2">3000</option>
                          <option value="3">1500</option>
                        </select>
                      </div>
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                        <option value="0" data-icon="img/mediosdepago/amex.svg" class="">terminada en 7369</option>
                        <option value="1" data-icon="img/mediosdepago/visa.svg" selected class="">terminada en 9692</option>
                        <option value="2" data-icon="img/mediosdepago/master.svg" class="">terminada en 1844</option>
                        <option value="3" class="">CA $ 12345678901234578</option>
                        <option value="4" class="">Otro medio de pago</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>

                <li data-id-factura="4" class="collection-item avatar valign-wrapper lighten-3 facturaAPagar facturaActiva" data-nombre-empresa="Claro">
                  <div class="valign-wrapper">
                      <rubro>
                      <div class="rubro recargas circle avatar-top hide-on-small-only"></div>
                    </rubro>
                      <!-- <img src="img/rubros/recargas.svg" alt="servicio1" class="circle avatar-top hide-on-small-only"> -->
                      <div class="flex align-i-center width-100">
                        <div class="pd-t-10 pd-b-10 mg-r-5">
                          <span class="grey-text text-darken-2"><b>Claro</b></span>
                          <span> un monto de</span>
                        </div>
                        <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                          <span>$</span>
                          <input value="1" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                          <div>
                              <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                                  <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                              </a>
                              <a href="#!" class="pagarTotal btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                                  <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                              </a>
                          </div>
                          <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                        </div>
                        <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                        <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                          <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                              <option value="0" data-icon="img/mediosdepago/visa.svg" selected class="" disabled>terminada en 9692</option>
                              <option value="1" data-icon="img/mediosdepago/amex.svg" class="" disabled>terminada en 7369</option>
                              <option value="2" data-icon="img/mediosdepago/master.svg" class="" disabled>terminada 1844</option>
                              <option value="3" class="" disabled>CA $ 12345678901234578</option>
                              <option value="4" class="">Otro medio de pago</option>
                          </select>
                        </div>
                        <p class="error-mp red-text mg-t-5 flex align-i-center"><i class="material-icons tiny red-text">announcement</i>Tenés medios de pago que no están disponibles para esta factura. <a href="alta_tarjeta.php" class="blue-text"><b>CREAR MEDIO DE PAGO</b></a></p>
                      </div>

                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>


                <li data-id-factura="5" class="collection-item avatar grey lighten-3 valign-wrapper facturaAPagar facturaActiva" data-nombre-empresa="Aysa">
                  <rubro>
                    <div class="rubro agua circle avatar-top hide-on-small-only"></div>
                  </rubro>
                  <!-- <img src="img/rubros/agua.svg" alt="servicio1" class="circle avatar-top hide-on-small-only"> -->
                  <div class="flex align-i-center width-100">
                    <div class="pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2">Empresa con importe fijo (<b>Aysa</b>)</span>
                      <span> un monto de</span>
                    </div>
                    <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-110 grey-text text-darken-2">
                      <span>$</span>
                      <input value="1010.13" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                        <option value="0" data-icon="img/mediosdepago/amex.svg" class="">terminada en 7369</option>
                        <option value="1" data-icon="img/mediosdepago/visa.svg" selected class="">terminada en 9692</option>
                        <option value="2" data-icon="img/mediosdepago/master.svg" class="">terminada en 1844</option>
                        <option value="3" class="">CA $ 12345678901234578</option>
                        <option value="4" class="">Otro medio de pago</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>

              </ul>
              <!-- end list -->

              <div class="row mg-b-0">
                <div class="col s12">
                  <h3 class="right-align mg-b-0 totalAPagar">Total <b>$<span></span></b></h3>
                </div>
              </div>



            </div>

            <div class="card-action">
              <!-- Botones de acción - DESKTOP -->
              <div class="hide-on-small-only justify-between">
                <a href="inicio.php" class="btn white btn-flat waves-effect waves-light red-text"><i class="material-icons left">close</i> Borrar todas</a>
                <div class="padre">
                  <a href="inicio.php" class="btn-flat waves-effect waves-light orange-text mg-r-5"><i class="material-icons left">add</i> Agregar otra</a>
                  <a class="btn modal-trigger blue waves-effect waves-light" href="#confimarcion-pago"><i class="material-icons left">check</i> Pagar</a>
                </div>
              </div><!-- fin botones de acción - DESKTOP -->

              <!-- botones de acción - MOBILE -->
              <div class="hide-on-med-and-up ">
                <a href="inicio.php" class="btn-floating waves-effect waves-red white" data-position="top" data-delay="50" data-text="Borrar todas"><i class="material-icons red-text">close</i></a>
                <a href="inicio.php" class="btn-floating waves-effect waves-light white tooltipped" data-position="top" data-delay="50" data-text="Agregar otra"><i class="material-icons blue-text">add</i></a>
                <a href="#confimarcion-pago" class="btn-floating modal-trigger waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-text="Pagar"><i class="material-icons left">check</i></a>
              </div><!-- fin botones de acción - MOBILE -->
            </div>

          </div>


        </div>
      </div>

    </div>
  </main>
<!--  <div id="toast-container">
    <div class="toast orange darken-2" style="top: 0px; transition: transform 0.2s, opacity 0.2s;">

    </div>
  </div> -->

  <!-- Javascript -->
  <?php include '_partials/footer.php'; ?>
  <?php include '_partials/modal_pagar.php'; ?>
  <?php include '_partials/modal_confirmacion_pago.php'; ?>
  <?php include '_partials/modal_eliminar_factura.php'; ?>

  <script type="text/javascript">

      $(document).ready(function() {

        var imgCardValCollection = [];

        $(".facturaAPagar").each(function(){
          var imgCardVal = [];
          var thisElement = $(this);
          var thisIndex = $(this).index();
          var optionCount = [];

          $(this).find("select.seleccion-tarjeta option").each(function(){
            var iSrc = $(this).attr("data-icon");
            imgCardVal.push(iSrc);
          });

          $(this).find("select.seleccion-tarjeta").on('change', function(e){
            var optionNumber = thisElement.find("select.seleccion-tarjeta option").length;
            for (i=1; i <= optionNumber; i++) {
              optionCount.push([i] - 1 )
            };

            var tarjetaSeleccionada = thisElement.find("select.seleccion-tarjeta").val();
            var empresaSeleccionada = $(this).val();

            console.log(tarjetaSeleccionada + +  optionCount.pop())

            if( tarjetaSeleccionada == optionCount.pop() + 1 ) {
            $('#otropago').modal('open');
          }

            setCardImage(tarjetaSeleccionada);
          });

          imgCardValCollection.push(imgCardVal)
          setCardImage(0);

          function setCardImage(imgVal) {
            if(imgCardValCollection[thisIndex][imgVal] != undefined){
              thisElement.find(".imgCard").remove();
              thisElement.find("div.tarjetas-contenedor").prepend("<img src=" + imgCardValCollection[thisIndex][imgVal] + " class='left imgCard mg-r-10 mg-t-5 mg-b-10 mg-r-10' width='45px'> " );
            } else {
              thisElement.find(".imgCard").remove();
            };
          }
        });

        $('.inputEditImporte input').on('keyup', function() {
    			match = (/(\d{0,5})[^.]*((?:\.\d{0,2})?)/g).exec(this.value.replace(/[^\d.]/g, ''));
    			this.value = match[1] + match[2];
    		});

        //"autotab" para el modal #otropago
        $(".date-card").keyup(function () {
          if (this.value.length == this.maxLength) {
            var $next = $('.date-card2').focus();
            // console.log($next);
            // if ($next.length){
            //   $(this).next('.date-card').focus();
            // }
            // else {
            //   $(this).blur();
            // }
          }
        });


      });

      $(".borrarFactura").click(function () {
        var $this = $(this);

        $('#eliminar-factura').data('id-factura', $this.closest('.facturaAPagar').data('id-factura'));
        $('#eliminar-factura').modal('open');
      });

      $("#eliminar-factura #btn-eliminar").on("click", function () {
      	var id_factura = $('#eliminar-factura').data('id-factura');
		var elemFactura = $('.facturaAPagar[data-id-factura=' + id_factura + ']');

		elemFactura.addClass('animated bounceOutLeft').removeClass('facturaActiva');
		elemFactura.delay(300).slideUp(300, function () {
			// $this.remove();
			if ($(".listadefacturas li.facturaAPagar.facturaActiva").length == 0) {
			  setTimeout(function() { window.location.replace("inicio.php") }, 30000);
			}
		});

		var btnDeshacer = $('<a href="javascript:deshacerBorrarFactura(' + id_factura + ')" class="btn-flat toast-action blue-text text-lighten-3 mg-l-30"><b>Deshacer</b></a>')

		var $toastContent = $('<div class="radial-timer s-animate"> \
								<div class="radial-timer-half"></div> \
								<div class="radial-timer-half"></div> \
							  </div> \
							  <span data-id-factura="' + id_factura + '">' + elemFactura.data('nombre-empresa') + '</span>')
							.add(btnDeshacer);
		Materialize.toast($toastContent, 20000);

	  	updateTotal();
   	  });

      function deshacerBorrarFactura(idFactura){
        $('.facturaAPagar[data-id-factura=' + idFactura + ']').removeClass('bounceOutLeft').delay(300).addClass('bounceInLeft facturaActiva').slideDown(300);
        var toastElement = $('.toast span[data-id-factura=' + idFactura + ']').closest('.toast').first()[0];
        var toastInstance = toastElement.M_Toast;
        toastInstance.remove();

	  	updateTotal();
      }

      // Edit Importe
      $(".editar").click(function(){
        $(".editar").not($(this)).addClass("disabled");
        $(this).toggleClass("hide");
        $(this).siblings().toggleClass("hide");
        $(this).closest(".inputEditImporte").addClass("max-155");
        $(this).closest(".inputEditImporte").children(".guardarMonto").toggleClass("active");
        $(this).parent().siblings("input").removeClass("grey-text").addClass("orange-text").focus().removeAttr('readonly');
      })

      $(".pagarTotal").click(function(){
        $(this).parent().siblings("input").val("10000.00");
      });

      $(".guardarMonto").click(function(){
        $(this).closest(".inputEditImporte").removeClass("max-155");
        $(this).toggleClass("active");
        $(this).siblings("div").children().toggleClass("hide");
        $(this).siblings("div").children(".editar").parent().siblings().not("span").removeClass("orange-text").addClass("grey-text").attr('readonly', 'readonly');
        $(".editar").removeClass("disabled");

	  	updateTotal();
      });

      //Cuando elige un importe a pagar del dropdown
      $(".facturaAPagar.facturaActiva .inputEditImporte.selectImportesFijos").change(function(){
        if ($(".facturaAPagar.facturaActiva .inputEditImporte.selectImportesFijos ul li").hasClass('active')){
          updateTotal();
        }
      });

	  updateTotal();

      function updateTotal() {

        setTimeout(function () {

            var total = 0;

            $(".facturaAPagar.facturaActiva .inputEditImporte").each(function(){
              //si tiene la clase selectImportesFijos es el dropdown para elegir cuanto pagar
              if($(this).hasClass('selectImportesFijos')){
                //si el li tiene la clase active es pq clickeó para elegir otro numero que no sea el primero
                if($(this).find('ul.select-dropdown li').hasClass('active')){
                  //si tiene el active, o sea, clickeó, el total deberia tomar el valor del li.active.selected
                  total += parseFloat($(".facturaAPagar.facturaActiva .inputEditImporte.selectImportesFijos .select-importe .select-dropdown li.active.selected span").text());
                // console.log("clickeó el drop "+total);
                } else {
                  //si no tiene el active, o sea, no clickeó, el total deberia tomar el valor del primer li span
                  total += parseFloat($(".facturaAPagar.facturaActiva .inputEditImporte.selectImportesFijos .select-importe .select-dropdown li:first-of-type span:first-of-type").text());
                // console.log("no clickeó el drop "+total);
                }
              //si no tiene la clase selectImportesFijos el valor lo toma del input ya definido.
              } else {
                total += parseFloat($(this).children("input").val());
                // console.log("salió "+total);
              }

              // console.log("ni entró "+total);
            });

            $(".totalAPagar b span").text(total.toFixed(2));

        }, 500);

      }



</script>

</body>
</html>
