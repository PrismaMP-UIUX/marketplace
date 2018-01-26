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
          <p>Por favor seleccioná una o varias de las facturas que queres pagar. </p>
        </div>
        <div class="col right mg-t-10 view hide-on-small-only">
          <!-- Vista:&nbsp; -->
          <a class="btn orange mg-r-3 disabled" href="inicio.php"><i class="material-icons">view_module</i></a>
          <a class="btn orange" href="inicioTabla.php"><i class="material-icons">format_list_bulleted</i></a>
        </div>
      </div>

      <div class="row hide-on-small-only">
        <!-- botón de pagar de nav.php /// MOBILE -->
        <!-- <div id="cantidad" class="col s12 mg-b-10 hide-on-med-and-up">
          <a href="#" class="btn-floating white-text blue pulse right" id="a-button"><span class="prisma accion-pagar large mg-l-15"></span></a>
        </div> -->
        <!-- fin botón de pagar de nav.php /// MOBILE -->
        <!-- Masonry -->
        <div id="masonry-grid" class="row grid">

          <!-- AGREGAR PAGO // ESTILO CARD -->
          <div class="col grid-item  facturaItem">
              <div class="card-panel white hoverable center">
                <a href="#nuevopago" class="modal-trigger"><i class="material-icons large mg-t-20">add</i></a>
                <a href="#nuevopago" class="modal-trigger"><h3 class="center mg-t-10 mg-b-20 blue-text">Añadir Nueva Factura</h3></a>
              </div>
          </div>
          <!-- FIN AGREGAR PAGO -->

          <div class="col grid-item  facturaItem">
            <div class="card grilla white hoverable nuevita animated zoomInDown"> <!--tada flipInX   -->
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/rubros/agua.svg" class="circle activator"></rubro>
                  <span class="card-title seudonimoTitulonuevita" id="">Aguas Cordobesas</span>
                </div>
                <a href="#adherir" id="adherirButton" class="soloennuevita btn-floating halfway-fab waves-effect waves-light orange pulse modal-trigger tooltipped" data-position="top" data-text="Guardar"><i class="material-icons">save</i></a>
                <a class="btn-floating halfway-fab waves-effect waves-light activator noennuevita"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias seudonimoTexto"><b>Aguas de casa</b></p>
                <span class="monto"><b>$200</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                  <!-- <span class="alertita red"><i class="material-icons tiny">report_problem</i> QUEDAN 3 DÍAS </span> -->
                </div>
                <p class="soloennuevita">
                  <span class="alertita orange-text tooltipped" data-position="top" data-text="Guardate esta factura <br> para que te recordemos <br> pagarla el mes que viene" data-delay="1"><i class="fa fa-certificate" aria-hidden="true"></i> Nueva</span><br>
                  <!-- <span class="alertita orange">Guardate la factura</span><br> -->
                </p>
                <input type="checkbox" class="filled-in" id="filled-in-box-30" onclick="showLi()"/>
                <label for="filled-in-box-30" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Alias: <span class="seudonimoTexto seudonimoTitulonuevita"></span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/11/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
              </div>
              <div class="card-action">
                <a class="btn blue modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>

          <div class="col grid-item  facturaItem">
            <div class="card grilla white hoverable nuevita animated zoomInDown"> <!--tada flipInX   -->
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/rubros/electricidad.svg" class="circle activator"></rubro>
                  <span class="card-title seudonimoTitulonuevita" id="">Luz de Mendoza</span>
                </div>
                <a href="#adherir" id="adherirButton" class="soloennuevita btn-floating halfway-fab waves-effect waves-light orange pulse modal-trigger tooltipped" data-position="top" data-text="Guardar"><i class="material-icons">save</i></a>
                <a class="btn-floating halfway-fab waves-effect waves-light activator noennuevita"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias seudonimoTexto"><b>Cortaste toda la loooz</b></p>
                <span class="monto"><b>$1234</b></span>
                <p class="soloennuevita">
                  <span class="alertita orange-text tooltipped" data-position="top" data-text="Guardate esta factura <br> para que te recordemos <br> pagarla el mes que viene" data-delay="1"><i class="fa fa-certificate" aria-hidden="true"></i> Nueva</span><br>
                  <!-- <span class="alertita orange">Guardate la factura</span><br> -->
                </p>
                <input type="checkbox" class="filled-in" id="filled-in-box-31" onclick="showLi()"/>
                <label for="filled-in-box-31" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Alias: <span class="seudonimoTexto seudonimoTitulonuevita"></span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/11/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                <a class="btn blue modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>

          <?php include '_partials/cards.php'; ?>

        </div>

      </div>

      <div class="row show-on-small hide-on-med-and-up">
        <?php include '_partials/tabla.php'; ?>
      </div>



    </div>


<?php include '_partials/pub.php'; ?>

</main>


<?php include '_partials/modal_eliminar.php'; ?>
<?php include '_partials/modal_adherir.php'; ?>
<?php include '_partials/modal_pagorapido.php'; ?>

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


    $("input[type=checkbox].filled-in").change(function(){
      // carritoMobile(this);
      // $(this).closest(".facturaItem").find(".accionDeLaCard").toggleClass("scale-transition scale-out");
      $(this).closest(".facturaItem").find(".card-action").toggleClass("active");
      setTimeout(function() {
          $('.grid').masonry();
      }, 500);
    });

    // Esto no esta en inicio.php
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

    $(".card input[type=checkbox].filled-in").change(function(){
      carrito(this);
      $(this).closest(".card").toggleClass("active");
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

    // Masonry
    masonry = $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      horizontalOrder: true
    });

    //Para que no se abra el collapsible-body al hacer click en Guardar/Pagar y abra el modal que corresponda.
    $(".not-collapse").on("click", function(e) {
      var modal_link = $(this).attr("href");
      $(modal_link).modal('open');
      e.stopPropagation();
    });

    //Para que factura anidada y mensual no puedan ser checkeadas al mismo tiempo
    $('.factura-anidada input[type="checkbox"].anidada').on("click", function(){
      if ($("input[type='checkbox'].anidada:checked").length > 0) {
        $("input[type='checkbox'].mensual").attr({ disabled: true, checked: false });
      } else {
        $("input[type='checkbox'].mensual").attr({ disabled: false, checked: false });
      }
    });


  });
function modificarDescripcion(){
  $(".seudonimoTexto").text($("#seudonimoInput").val());
  $(".toggleEditSeudonimo").toggleClass("hide");
}

function modificarDescripcionNuevita(){
  $(".seudonimoTexto").text($("#seudonimoInputNuevita").val());
  $('.collapsible-header').removeClass('nuevita');
  $('.card').removeClass('nuevita');
}
  // Para que funcione el EDITAR ALIAS al presionar ENTER
  $("#seudonimoInputNuevita").keyup(function(event) {
      if (event.keyCode === 13) {
        $('#adherir').modal('close');
        modificarDescripcionNuevita();
      }
  });

    $(document).ready(function(){
      $(".material-tooltip").addClass("hide");
    });





  </script>



</body>
</html>
