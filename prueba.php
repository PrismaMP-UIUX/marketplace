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
                <li data-id-factura="1" class="collection-item avatar grey lighten-3 valign-wrapper facturaAPagar">
                  <img src="img/rubros/donaciones.svg" alt="servicio1" class="circle avatar-top hide-on-small-only">
                  <div class="flex align-i-center width-100">
                    <div class=" pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2">Cutucuchillo (<b>ElectroSur</b>)</span>
                      <span> un monto de</span>
                    </div>
                    <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                      <span>$</span>
                      <input maxlength="9" value="1001.01" id="inputEditImporte" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                      <div>
                          <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                              <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                          </a>
                          <a href="#!" class="pagarTotal hide btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                              <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                          </a>
                      </div>
                      <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                        <option value="0" data-icon="img/amex.png" class="">terminada en 7369</option>
                        <option value="1" data-icon="img/visa.png" selected class="">terminada en 9692</option>
                        <option value="2" data-icon="img/master.png" class="">terminada en 1844</option>
                        <option value="3" class="">CA $ 12345678901234578</option>
                        <option value="4" class="">Otro medio de pago</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>

                <li data-id-factura="2" class="collection-item avatar lighten-3 valign-wrapper facturaAPagar">
                  <img src="img/rubros/recargas.svg" alt="servicio1" class="circle avatar-top hide-on-small-only">
                  <div class="flex align-i-center width-100">
                    <div class="pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2"><b>Claro</b></span>
                      <span> un monto de</span>
                    </div>
                    <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                      <span>$</span>
                      <input maxlength="9" value="191.06" id="inputEditImporte" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                      <div>
                          <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                              <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                          </a>
                          <a href="#!" class="pagarTotal hide btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                              <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                          </a>
                      </div>
                      <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                          <option value="0" data-icon="img/visa.png" selected class="">terminada en 9692</option>
                          <option value="1" data-icon="img/amex.png" class="">terminada en 7369</option>
                          <option value="2" data-icon="img/master.png" class="">terminada en 1844</option>
                          <option value="3" class="">CA $ 12345678901234578</option>
                          <option value="4" class="">Otro medio de pago</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>


                <li data-id-factura="3" class="collection-item avatar grey lighten-3 valign-wrapper facturaAPagar">
                  <img src="img/rubros/gas.svg" alt="servicio1" class="circle avatar-top hide-on-small-only">
                  <div class="flex align-i-center width-100">
                    <div class=" pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2">Gas tía mardel(<b>Metrogas</b>)</span>
                      <span> un monto de</span>
                    </div>
                    <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                      <span>$</span>
                      <input maxlength="9" value="2100.00" id="inputEditImporte" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                      <div>
                          <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                              <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                          </a>
                          <a href="#!" class="pagarTotal hide btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                              <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                          </a>
                      </div>
                      <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                        <option value="0" data-icon="img/amex.png" class="">terminada en 7369</option>
                        <option value="1" data-icon="img/visa.png" selected class="">terminada en 9692</option>
                        <option value="2" data-icon="img/master.png" class="">terminada en 1844</option>
                        <option value="3" class="">CA $ 12345678901234578</option>
                        <option value="4" class="">Otro medio de pago</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-grow flex-j-end">
                    <a href="#!" class="grey-text borrarFactura tooltipped" data-text="Eliminar"><i class="material-icons left">delete_forever</i></a>
                  </div>
                </li>

                <li data-id-factura="4" class="collection-item avatar valign-wrapper lighten-3 facturaAPagar">
                  <div class="valign-wrapper">
                      <img src="img/rubros/recargas.svg" alt="servicio1" class="circle avatar-top hide-on-small-only">
                      <div class="flex align-i-center width-100">
                        <div class="   pd-t-10 pd-b-10 mg-r-5">
                          <span class="grey-text text-darken-2"><b>Claro</b></span>
                          <span> un monto de</span>
                        </div>
                        <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-130 grey-text text-darken-2">
                          <span>$</span>
                          <input value="1.00" id="inputEditImporte" type="text" class="max-70 pd-l-10 pd-r-15 mg-b-0" readonly="readonly">
                          <div>
                              <a href="#!" class="editar btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon" data-text="Modificar importe" data-position="top">
                                  <i class="material-icons mg-0" id="iconoEditReplay">edit</i>
                              </a>
                              <a href="#!" class="pagarTotal hide btn-floating blue boton-edicion valign-wrapper flex tooltipped inside-icon hide" data-text="Monto total" data-position="top" onclick="">
                                  <i class="material-icons mg-0" id="iconoEditReplay">replay</i>
                              </a>
                          </div>
                          <a href='#!' class='guardarMonto inside-icon btn-floating blue boton-edicion valign-wrapper flex tooltipped' data-text="Guardar" data-position="top"><i class='material-icons mg-0'>save</i></a>
                        </div>
                        <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                        <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                          <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                              <option value="0" data-icon="img/visa.png" selected class="" disabled>terminada en 9692</option>
                              <option value="1" data-icon="img/amex.png" class="" disabled>terminada en 7369</option>
                              <option value="2" data-icon="img/master.png" class="" disabled>terminada 1844</option>
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


                <li data-id-factura="5" class="collection-item avatar grey lighten-3 valign-wrapper facturaAPagar">
                  <img src="img/rubros/agua.svg" alt="servicio1" class="circle avatar-top hide-on-small-only">
                  <div class="flex align-i-center width-100">
                    <div class=" pd-t-10 pd-b-10 mg-r-5">
                      <span class="grey-text text-darken-2">Empresa con importe fijo (<b>Aysa</b>)</span>
                      <span> un monto de</span>
                    </div>
                    <div class="input-field height-45 flex align-i-center inputEditImporte mg-t-0 mg-l-0 mg-r-10 max-110 grey-text text-darken-2">
                      <span>$</span>
                      <input type="text" disabled value="1010.13" class="max-70 pd-l-10 pd-r-15 mg-b-0">
                    </div>
                    <span class="mg-r-10 height-45 pd-t-10 pd-b-10">con</span>
                    <div class="mg-r-10 tarjetas-contenedor flex align-i-center">
                      <select class=" select-wrapper icons select-sin-margen mg-r-10 seleccion-tarjeta">
                        <option value="0" data-icon="img/amex.png" class="">terminada en 7369</option>
                        <option value="1" data-icon="img/visa.png" selected class="">terminada en 9692</option>
                        <option value="2" data-icon="img/master.png" class="">terminada en 1844</option>
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
                <a class="btn-floating waves-effect waves-light white tooltipped" data-position="top" data-delay="50" data-text="Agregar otra"><i class="material-icons blue-text">add</i></a>
                <a class="btn-floating waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-text="Pagar"><i class="material-icons left">check</i></a>
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
  <?php include '_partials/modal_confirmacion_pago.php'; ?>
  <?php include '_partials/modal_pagar.php'; ?>
  <?php include '_partials/modal_eliminar_factura.php'; ?>

  <script type="text/javascript">
      var saveElement = null;

      // $(".borrarFactura tooltipped" data-text="Eliminar").each(function(){
      //  $(this).click(function(){
      //    saveElement = $(this).closest(".facturaAPagar").html();
      //    $(this).closest(".facturaAPagar").addClass('animated bounceOutLeft');
      //    $(this).closest(".facturaAPagar").delay(300).slideUp(300, function(){
      //       $(this).remove();
      //       if($(".listadefacturas li").length == 0) {
      //      window.location.replace("inicio.php");
      //       }
      //    });
      //    console.log(saveElement);
      //  });
      // });

      $(".borrarFactura tooltipped" data-text="Eliminar").click(function () {
        var $this = $(this);
        saveElement = $this.closest(".facturaAPagar").html();
        $('#eliminar-factura').modal('open');
        $(".modal-action.modal-close").on("click", function () {


          $this.closest(".facturaAPagar").addClass('animated bounceOutLeft');
          $this.closest(".facturaAPagar").delay(300).slideUp(300, function () {
            // $this.remove();
            if ($(".listadefacturas li").length == 0) {
              window.location.replace("inicio.php");
            }
          });

          var id_factura = $this.parents('li.facturaAPagar').data('id-factura');
          //console.log('id-factura: ', id_factura);
          var $toastContent = $('<div class="radial-timer s-animate"><div class="radial-timer-half"></div><div class="radial-timer-half"></div></div><span data-id-factura="' + id_factura + '">Agua Casa <b>(Aysa)</b></span>').add($('<a href="javascript:deshacerBorrarFactura(' + id_factura + ')" class="btn-flat toast-action blue-text text-lighten-3 mg-l-30"><b>Deshacer</b></a>'));
          Materialize.toast($toastContent, 20000);

        });
        console.log(saveElement);
      });

      function deshacerBorrarFactura(idFactura){
        $('li.facturaAPagar[data-id-factura='+idFactura+']').removeClass('bounceOutLeft').delay(300).addClass('bounceInLeft').slideDown(300);
        var toastElement = $('.toast span[data-id-factura='+idFactura+']').closest('.toast').first()[0];
        var toastInstance = toastElement.M_Toast;
        toastInstance.remove();
      }


      // Toast deshacer
      $(document).ready(function() {
        // $(".borrarFactura tooltipped" data-text="Eliminar").on("click", function() {
        //   // var $factura = $(this).parents('li.facturaAPagar');
        //   var id_factura = $(this).parents('li.facturaAPagar').data('id-factura');
        //   //console.log('id-factura: ', id_factura);
        //   var $toastContent = $('<div class="radial-timer s-animate"><div class="radial-timer-half"></div><div class="radial-timer-half"></div></div><span data-id-factura="'+id_factura+'">Agua Casa <b>(Aysa)</b></span>').add($('<a href="javascript:deshacerBorrarFactura('+id_factura+')" class="btn-flat toast-action blue-text text-lighten-3 mg-l-30"><b>Deshacer</b></a>'));
        //     Materialize.toast($toastContent, 20000);
        // });


        $('.cantidad').hide();
      });

      //On change select
      $(document).ready(function(){
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
              thisElement.find("div.tarjetas-contenedor").prepend("<img src=" + imgCardValCollection[thisIndex][imgVal] + " class='left imgCard mg-r-10 mg-t-5 mg-b-10 mg-r-10'>" );
            } else {
              thisElement.find(".imgCard").remove();
            };
          }
        });
      });

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
        $(this).parent().siblings("input").val("10.000,00");
      });

      $(".guardarMonto").click(function(){
        $(this).closest(".inputEditImporte").removeClass("max-155");
        $(this).toggleClass("active");
        $(this).siblings("div").children().toggleClass("hide");
        $(this).siblings("div").children(".editar").parent().siblings().not("span").removeClass("orange-text").addClass("grey-text").attr('readonly', 'readonly');
        $(".editar").removeClass("disabled");
      });



      // Total
      var total=0;
      $(".inputEditImporte").each(function(){
        total += parseFloat($(this).children("input").val());
      });
      $(".totalAPagar b span").text(total);

      var montoViejo = 0;
      $(".editar").click(function(){
        montoViejo = $(this).parent().siblings("input").val();
      });

      $(".guardarMonto").click(function(){
        total = (total - montoViejo) + parseFloat($(this).siblings("input").val());
        $(".totalAPagar b span").text(total);
      });
      $(".borrarFactura tooltipped" data-text="Eliminar").click(function(){
        console.log($(this).parent().siblings("div").find(".inputEditImporte input").val())
        total = total - parseFloat($(this).parent().siblings("div").find(".inputEditImporte input").val());
        $(".totalAPagar b span").text(total);
      });
</script>

</body>
</html>
