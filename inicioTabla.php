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
      <div class="header">
        <h1>Próximos vencimientos</h1>
        <p>Seleccioná las facturas próximas a vencer y aboná con el medio de pago que quieras.</p>
      </div>
      <div class="row">
        <div class="col right mg-t-10 view hide-on-small-only">
          <!--Vista -->
          <a class="btn orange mg-r-3" href="inicio.php"><i class="material-icons">view_module</i></a>
          <a class="btn orange disabled" href="inicioTabla.php"><i class="material-icons">format_list_bulleted</i></a>
        </div>
      </div>
<!-- botón de pagar de nav.php /// MOBILE -->
<!--       <div class="row">
        <div id="cantidad" class="col s12 mg-b-10 hide-on-med-and-up">
          <a href="#" class="btn-floating white-text blue pulse right" id="a-button"><span class="prisma accion-pagar large mg-l-15"></span></a>
        </div>
      </div> -->
  <!-- fin botón de pagar de nav.php /// MOBILE -->

      <div class="row" id="vistaTabla">
        <?php include '_partials/tabla.php'; ?>
      </div>


    <?php include '_partials/pub.php'; ?>

      <!-- end collapsible -->
  </div>
</main>
<!-- Javascript -->
<?php include '_partials/footer.php'; ?>
<?php include '_partials/modal_eliminar.php'; ?>
<?php include '_partials/modal_adherir.php'; ?>
<?php include '_partials/modal_pagorapido.php'; ?>
<?php include '_partials/modal_ticket.php'; ?>



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
<!-- fin script pagar mobile TOAST -->

<script type="text/javascript">
  $(document).ready(function() {
    $("input[type=checkbox]").change(function(){
      $(this).parent(".card-action").parent(".card").toggleClass("active");
    })

    // $("input[type=checkbox].filled-in").change(function(){
    //   carritoMobile(this);
    //   $(this).closest(".facturaItem").find(".accionDeLaCard").toggleClass("scale-transition scale-out");
    // });

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
    $("input[type=checkbox].filled-in.anidada").on("click", function(){
      carritoMobile(this);
      if ($("input[type=checkbox].filled-in.anidada:checked").length > 0) {
        $(this).closest(".facturaItem").find(".accionDeLaCard").addClass("scale-transition scale-out");
      } else {
        $(this).closest(".facturaItem").find(".accionDeLaCard").removeClass("scale-transition scale-out");
      }
    });

    //Ocultar el botón pagar al chequear la factura mensual
    $("input[type=checkbox].filled-in.mensual").on("click", function(){
      carritoMobile(this);
      if ($("input[type=checkbox].filled-in.mensual:checked").length > 0) {
        $(this).closest(".facturaItem").find(".accionDeLaCard").addClass("scale-transition scale-out");
      } else {
        $(this).closest(".facturaItem").find(".accionDeLaCard").removeClass("scale-transition scale-out");
      }
    });

    function carritoMobile(check){
      // $(check).parent(".card-action").parent(".card").toggleClass("active");
      var chks = $("input[type=checkbox].filled-in:checked");
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

    //Para que no se abra el collapsible-body al hacer click en Guardar/Pagar y abra el modal que corresponda.
    $(".not-collapse").on("click", function(e) {
      var modal_link = $(this).attr("href");
      $(modal_link).modal('open');
      e.stopPropagation();
    });

    //Para que factura anidada y mensual no puedan ser checkeadas al mismo tiempo
    // $.fn.hasAttr = function(name) {
    //    return this.attr(name) !== undefined;
    // };
    $('.factura-anidada input[type="checkbox"].anidada').on("click", function(){
      if ($("input[type='checkbox'].anidada:checked").length > 0) {
        $("input[type='checkbox'].mensual").attr({ disabled: true, checked: false });
      } else {
        $("input[type='checkbox'].mensual").attr({ disabled: false, checked: false });
      }

    });




  });


  function deleteItem(a) {
    $(a).parent().siblings(".eliminar-mobile").addClass("active");
  }
  function closeDelete(b) {
    $(b).closest(".eliminar-mobile").removeClass("active");
  }

  function modificarDescripcion(){
    $(".seudonimoTexto").text($(".seudonimoInput").val());
    $(".toggleEditSeudonimo").toggleClass("hide");
  }
    // Para que funcione el EDITAR ALIAS al presionar ENTER
  $(".seudonimoInput").keyup(function(event) {
      if (event.keyCode === 13) {
        modificarDescripcion();
      }
  });

  function modificarDescripcionNuevita(){
    $('.seudonimoTexto').text($('#seudonimoInputNuevita').val());
    $('.card').removeClass('nuevita');
    $('.grid').masonry();
    $('.collapsible-header').removeClass('nuevita');
    $('.collapsible-header span.alertita.orange').addClass('hide');
    $('.collapsible-body aside a.eliminar').removeClass('hide');

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
