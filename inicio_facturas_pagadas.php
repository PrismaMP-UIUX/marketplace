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
        <div class="col left">
          <p>Mariano, por favor seleccioná una o varias de las facturas que queres pagar. </p>
        </div>
        <div class="col right mg-t-10 view hide-on-small-only">
          <!-- Vista:&nbsp; -->
          <a class="btn orange mg-r-3 disabled" href="inicio.php"><i class="material-icons">view_module</i></a>
          <a class="btn orange" href="inicioTabla.php"><i class="material-icons">format_list_bulleted</i></a>
        </div>
      </div>

      <div class="row hide-on-small-only show-on-medium-and-up">
        <!-- botón de pagar de nav.php /// MOBILE -->
        <!-- <div id="cantidad" class="col s12 mg-b-10 hide-on-med-and-up">
          <a href="#" class="btn-floating white-text blue pulse right" id="a-button"><span class="prisma accion-pagar large mg-l-15"></span></a>
        </div> -->
        <!-- fin botón de pagar de nav.php /// MOBILE -->
        <!-- Masonry -->
        <div id="masonry-grid" class="row grid">

          <!-- AGREGAR PAGO // ESTILO CARD -->
          <div class="col grid-item facturaItem">
              <div class="card-panel white hoverable center">
                <a href="#nuevopago" class="modal-trigger"><i class="material-icons large mg-t-20">add</i></a>
                <a href="#nuevopago" class="modal-trigger"><h3 class="center mg-t-10 mg-b-20 blue-text">Añadir Nuevo Pago</h3></a>
              </div>
          </div>
          <!-- FIN AGREGAR PAGO -->

          <div id="ticketGas" class="col grid-item facturaItem" style="display: none;">
            <div class="card-panel grilla ticket z-depth-4">
              <div class="card-content">
                <div class="valign-wrapper">
                  <rubro>
                    <div class="rubro gas circle border-grey white width-100 z-depth-2 activator"></div>
                  </rubro>
                  <span class="card-title mg-l-8">Gas tia mardel</span>
                </div>
                <ul>
                  <li>Fecha: <b>15/08/2017</b></li>
                  <li>Hora: <b>14:05:55</b>
                  <li>Transacción: <b>00010001374</b></li>
                  <li>Identificacion: <b>32742510</b></li>
                  <li>Medio de pago: <b><img src="img/mediosdepago/visa.svg" class="tarjmp" alt=""> terminada en 9652</b></li>
                </ul>
                <h5 class="black-text right-align mg-t-0"><b>$1200,00</b></h5>
                <div class="flex flex-j-center">
                  <a href="#imprimir" class="modal-trigger btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Imprimir"><i class="material-icons tiny">print</i></a>
                  <a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Descargar"><i class="material-icons tiny">file_download</i></a>
                  <a href="#!" class="btn-floating blue tooltipped mg-r-10" data-position="top" data-delay="50" data-text="Enviar por mail"><i class="material-icons tiny">mail</i></a>
                </div>

              </div>
            </div>
          </div>

          <div id="facturaGasPaga" class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                <rubro><img src="img/metrogas.png" class="circle"></rubro>
                  <span class="card-title">Gas tia mardel</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$1200</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                  <span class="alertita red-text"><i class="fa fa-hourglass-half" aria-hidden="true"></i> QUEDAN 3 DÍAS</span>
                </div>
                <input type="checkbox" class="filled-in" id="filled-in-box-3" onclick="showLi()"/>
                <label for="filled-in-box-3" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Alias: <span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/11/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a class="btn blue modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>


          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                <rubro><img src="img/metrogas.png" class="circle"></rubro>
                  <span class="card-title">Gas tia mardel</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$1200</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                  <span class="alertita red-text"><i class="fa fa-hourglass-half" aria-hidden="true"></i> QUEDAN 3 DÍAS</span>
                </div>
                <input type="checkbox" class="filled-in" id="filled-in-box-3" onclick="showLi()"/>
                <label for="filled-in-box-3" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Alias: <span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/11/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a class="btn blue modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                <rubro><img src="img/metrogas.png" class="circle"></rubro>
                  <span class="card-title">Gas depto CABA</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$900</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/12/17</time></p>
                  <span class="alertita red-text"><i class="fa fa-hourglass-half" aria-hidden="true"></i> QUEDAN 6 DÍAS</span>
                </div>
                <input type="checkbox" class="filled-in" id="filled-in-box-3" onclick="showLi()"/>
                <label for="filled-in-box-3" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Alias: <span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/11/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a class="btn blue modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                <rubro> <img src="img/afip.svg" class="circle" sytle="border-radius: none;"></rubro>
                  <span class="card-title">Monotributo</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$450</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                </div>
                  <input type="checkbox" class="filled-in" id="filled-in-box-4" onclick="showLi()"/>
                  <label for="filled-in-box-4" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue">Pagar Afip</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                <rubro><img src="img/unicef.jpg" class="circle"></rubro>
                  <span class="card-title">Donar a Unicef</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$450</b></span>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue">Donar</a>
              </div>
            </div>
          </div>


          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                <rubro><img src="img/personal.jpg" class="circle"></rubro>
                  <span class="card-title">Personal</span>
                </div>
              </div>
              <div class="card-content">
                <p>Aviso propia</p>
                <p>Duplica tus minutos para llamadas a personal recargando por PagoMisCuentas</p>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue">Duplicar</a>
              </div>
            </div>
          </div>



          <!-- <div class="col s12 m8 l6 grid-item ">
            <div class="card grilla white hoverable">
              <div class="card-image">
                <img src="img/pub_p.png">
              </div>
              <div class="card-content">
                <p>Nunca te aburras con personal recargando por PagoMisCuentas</p>
              </div>
              <div class="card-action">
                <a href="" class="btn blue">Recargar!</a>
              </div>
            </div>
          </div> -->

          <div class="col s12 m4 l3 grid-item ">
            <div class="card grilla white hoverable">
              <div class="card-image">
                <img src="img/pub.jpg">
              </div>
              <div class="card-action">
                  <a href="" class="btn blue">Lo quiero!</a>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="row show-on-small hide-on-med-and-up">
        <?php include '_partials/tabla.php'; ?>
      </div>

    </div>

<?php include '_partials/pub.php'; ?>

</main>

<?php include '_partials/modal_imprimir.php'; ?>


  <!-- Modal Structure // ELIMINAR PAGO -->
  <div id="eliminar" class="modal">
    <div class="modal-content">
        <i class="material-icons right modal-close">close</i>
        <h3 class="card-title"><i class="material-icons left">delete_forever</i> Eliminar pago</h3>
        <p class="mg-t-30">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
    </div>
    <div class="modal-footer">
      <div class="right-align">
        <a href="" class="btn-flat green-text modal-action modal-close waves-effect waves-light"><i class="material-icons left">check</i> Sí, quiero eliminarlo</a>
        <a href="" class="btn red modal-action modal-close waves-effect waves-light"><i class="material-icons left">close</i> No quiero eliminarlo</a>
      </div>
    </div>
  </div>


  <!-- Modal Structure // ADHERIR PAGO -->
  <div id="adherir" class="modal">
    <div class="modal-content">
        <i class="material-icons right modal-close">close</i>
        <h3 class="card-title"><!-- <i class="material-icons left">delete_forever</i> Eliminar pago --></h3>
        <p class="mg-t-30"><b>¿Querés guardar tu factura para que aparezca el mes siguiente?</b></p>
            <p>Ingresá un alias (opcional):</p>
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3">
            <input placeholder="Ej: Celu de mamá" id="seudonimoInputNuevita" type="text" class="validate">
            <label for="first_name">Alias</label>
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <div class="right-align">
        <a class="btn-flat red-text modal-action modal-close waves-effect waves-light"><i class="material-icons left">check</i> No quiero guardarla</a>
        <a class="btn blue modal-action modal-close waves-effect waves-light modal-close" onclick="$('.seudonimoTitulonuevita').text($('#seudonimoInputNuevita').val());$('.card').removeClass('nuevita');$('.grid').masonry()"><i class="material-icons left">close</i> Guardarla</a>
      </div>
    </div>
  </div>

  <!-- Modal Structure // BUSCAR -->
  <a class="waves-effect waves-light btn modal-trigger hide" href="#buscarA" id="click1">Modal</a>
  <div id="buscarA" class="modal">
    <div class="modal-content">
        <i class="material-icons right modal-close">close</i>
        <h3 class="card-title"><!-- <i class="material-icons left">delete_forever</i> Eliminar pago --></h3>
        <p class="mg-t-30"><b>¿Querés guardar tu factura para que aparezca el mes siguiente?</b></p>
            <p>Ingresá un alias (opcional):</p>
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3">
            <input placeholder="Ej: Celu de mamá" id="seudonimoInputNuevita" type="text" class="validate">
            <label for="first_name">Alias</label>
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <div class="right-align">
        <a class="btn-flat red-text modal-action modal-close waves-effect waves-light"><i class="material-icons left">check</i> No quiero guardarla</a>
        <a class="btn blue modal-action modal-close waves-effect waves-light modal-close" onclick="$('.seudonimoTitulonuevita').text($('#seudonimoInputNuevita').val());$('.card').removeClass('nuevita');$('.grid').masonry()"><i class="material-icons left">close</i> Guardarla</a>
      </div>
    </div>
  </div>



<?php include '_partials/footer.php'; ?>

<!-- script seleccionar factura a pagar // "carrito" // ver archivo: nav.php -->
<script type="text/javascript">
function showLi() {
   if($(".total").text() != 0) {
     $('.cantidad').show();
   } else {
     $('.cantidad').hide();
   }
}
</script>
<!-- fin script seleccionar factura a pagar -->

<!-- script pagar mobile TOAST -->
<script type="text/javascript">
$(document).ready(function() {
  $("#a-button").on("click", function() {

    longStr = "<b>2</b> facturas por <b>$2450,90</b>"
    toastContent = "<p>" + longStr + "</p>" + '&nbsp;<span><button class="btn-flat orange-text toast-action" href="pagar.php">PAGAR</button></span>';
    Materialize.toast(toastContent, 15000);
  }); // #a-button click

}); // document ready

$(document).on('click', '#toast-container  .toast  .toast-action', function() {
    $("#toast-container").fadeOut(function(){
        $("#toast-container").remove();
    });
});


</script>

<script>
  $(".main-footer > ul > li > header").click(function(){
    var $target = $('html,body');
    $target.stop(true, true).delay(200).animate({scrollTop: $target.height()}, 1000);
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("input[type=checkbox]").change(function(){
      $(this).parent(".card-action").parent(".card").toggleClass("active");
    })

    $(".collapsible-header input[type=checkbox].filled-in").change(function(){
      carritoMobile(this);
    });

    //Ocultar el botón pagar al chequear la factura común
    $("input[type=checkbox].filled-in").on("click", function(){
      carritoMobile(this);
      if ($("input[type=checkbox].filled-in:checked").length > 0) {
        $(this).closest(".facturaItem").find(".accionDeLaCard").addClass("scale-transition scale-out");
      } else {
        $(this).closest(".facturaItem").find(".accionDeLaCard").removeClass("scale-transition scale-out");
      }
    });

    //Ocultar el botón pagar al chequear la factura anidada
    // $("input[type=checkbox].filled-in.anidada").on("click", function(){
    //   carritoMobile(this);
    //   if ($("input[type=checkbox].filled-in.anidada:checked").length > 0) {
    //     $(this).closest(".facturaItem").find(".accionDeLaCard").addClass("scale-transition scale-out");
    //   } else {
    //     $(this).closest(".facturaItem").find(".accionDeLaCard").removeClass("scale-transition scale-out");
    //   }
    // });

    // //Ocultar el botón pagar al chequear la factura mensual
    // $("input[type=checkbox].filled-in.mensual").on("click", function(){
    //   carritoMobile(this);
    //   if ($("input[type=checkbox].filled-in.mensual:checked").length > 0) {
    //     $(this).closest(".facturaItem").find(".accionDeLaCard").addClass("scale-transition scale-out");
    //   } else {
    //     $(this).closest(".facturaItem").find(".accionDeLaCard").removeClass("scale-transition scale-out");
    //   }
    // });

    function carritoMobile(check){
      $(check).parent(".card-action").parent(".card").toggleClass("active");
      var chks = $(".collapsible-header input[type=checkbox].filled-in:checked");
      var chksSize = chks.size();
      if(chksSize>0){
        var prices = chks.parents(".collapsible-header").find(".importe b");
        var total = 0;
        prices.each(function () {
          total += Number(this.textContent.replace('.','').replace(',','.').split("$")[1]);
        });
        total = total.format("2","3",".",",");
        $(".cantidad").show();
        $("#cantFacturas").text((chksSize==1) ? chksSize+" factura" : chksSize + " facturas");
        $(".total").text("$"+total);
        $(".totalFacturas").html(chksSize);
      }else{
        $(".cantidad").hide();
      }
    }

    carritoMobile();
  });
  function deleteItem(a) {
    $(a).siblings("div").addClass("active");
  }
  function closeDelete(b) {
    $(b).closest("div").removeClass("active");
  }

</script>

<script type="text/javascript">
  var masonry;
  $(document).ready(function() {

    $("input[type=checkbox].filled-in").change(function(){
      carritoMobile(this);
      $(this).closest(".facturaItem").find(".accionDeLaCard").toggleClass("scale-transition scale-out");
      $(this).closest(".facturaItem").find(".card-action").toggleClass("active");
      setTimeout(function() {
          $('.grid').masonry();
      }, 500);
    });

    $(".card input[type=checkbox].filled-in").change(function(){
      carrito(this);
      $(this).closest(".card").toggleClass("active");
      console.log("qq")
    });

    function carrito(check){
      $(check).parent(".card-action").parent(".card").toggleClass("active");
      var chks = $(".card input[type=checkbox].filled-in:checked");
      var chksSize = chks.size();
      if(chksSize>0){
        var prices = chks.parents(".card").find(".monto b");
        var total = 0;
        prices.each(function () {
          total += Number(this.textContent.replace('.','').replace(',','.').split("$")[1]);
        });
        total = total.format("2","3",".",",");
        $(".cantidad").show();
        $("#cantFacturas").text((chksSize==1) ? chksSize+" factura" : chksSize + " facturas");
        $(".total").text("$"+total);
        $(".totalFacturas").html(chksSize);
      }else{
        $(".cantidad").hide();
      }
    }

    carrito();

    var randomBoolean = Math.random() >= 0.5
    if(randomBoolean){
      $("#conVencimientos").removeClass();
      Materialize.toast('<span class="mg-r-20"><i class="fa fa-bell-o mg-r-8" aria-hidden="true"></i>Tu factura de AYSA (Agua de la tía) está por vencer</span><a href="pagar.php" class="btn white orange-text text-darken-1">Pagar</a>', 3000,'orange darken-1');
    }

    setMasonry();

    var xVal = parseInt($('#ticketGas').css('left')) - parseInt($('#facturaGasPaga').css('left')) + "px";
    var yVal = $('#ticketGas').css('top');
    var style = document.documentElement.appendChild(document.createElement("style"));
    var rule = " factura-ticket-animacion {\
        100% { \
          transform: translatex(" + xVal + ") translatey(" + yVal + "); \
          opacity: 0; \
        } \
    }";
    if (CSSRule.KEYFRAMES_RULE) { // W3C
        style.sheet.insertRule("@keyframes" + rule, 0);
    } else if (CSSRule.WEBKIT_KEYFRAMES_RULE) { // WebKit
        style.sheet.insertRule("@-webkit-keyframes" + rule, 0);
    }

    setTimeout (function(){
      $('#facturaGasPaga').addClass('animated flipOutY');
    }, 1200);


    setTimeout(function () {
      $('#facturaGasPaga').css('display', 'none');

      $('#ticketGas').addClass('animated flipInY');
      $('#ticketGas').css('display', '');
      //Ejecuto la funcion cuando se anima la card pagada
      rubroResponsive();

    }, 1700)
  });

  function setMasonry() {
    masonry = $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      horizontalOrder: true
    });
  }

  //Para que no se abra el collapsible-body al hacer click en Guardar/Pagar y abra el modal que corresponda.
  $(".not-collapse").on("click", function(e) {
    var modal_link = $(this).attr("href");
    $(modal_link).modal('open');
    e.stopPropagation();
  });

  //Funcion para que el div de img de rubro sea responsive
  function rubroResponsive(){
    $('div.rubro').each(function(index){
      $(this).css({
        'height': $(this).width() + 4 + 'px'
      })
    })
  }
  // Ejecuto la funcion cuando carga la pagina
  rubroResponsive();
  // Ejecuto la funcion cuando se cambia el tamaño de la pantalla
  $(window).resize(rubroResponsive);

  function modificarDescripcion(){
    $(".seudonimoTexto").text($("#seudonimoInput").val());
    $(".toggleEditSeudonimo").toggleClass("hide");
  }

  $(document).ready(function(){
      $(".material-tooltip").addClass("hide");
    });

  </script>

</body>
</html>
