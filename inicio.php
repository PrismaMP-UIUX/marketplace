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
          <p>Seleccioná una o varias de las facturas que queres pagar. </p>
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
         <!-- <div class="col grid-item facturaItem">
              <div class="card-panel white hoverable center">
                <a href="#nuevopago" class="modal-trigger"><i class="material-icons large mg-t-20">add</i></a>
                <a href="#nuevopago" class="modal-trigger"><h3 class="center mg-t-10 mg-b-20 blue-text">Añadir Nueva Factura</h3></a>
              </div>
          </div> -->
          <!-- FIN AGREGAR PAGO -->

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

    //Ocultar el botón pagar al chequear la factura común
    $("input[type=checkbox].filled-in").on("click", function(){
      carritoMobile(this);
      if ($("input[type=checkbox].filled-in:checked").length > 0) {
        $(this).closest(".facturaItem").find(".accionDeLaCard").addClass("scale-transition scale-out");
      } else {
        $(this).closest(".facturaItem").find(".accionDeLaCard").removeClass("scale-transition scale-out");
      }
    });

    // //Ocultar el botón pagar al chequear la factura anidada
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

    //Para corregir el modal de eliminar/eliminar definitivamente
    $('#eliminar a.btn-flat').on("click", function(){
      $('.modal-content p.red-text').addClass('hide');
      $('.modal-content p.eliminar').show();
      $('a.red.modal-action span').text('eliminar');
    });


  });




  function modificarDescripcion(){
      $(".seudonimoTexto").text($("#seudonimoInput").val());
      $(".toggleEditSeudonimo").toggleClass("hide");
    }
    // Para que funcione el EDITAR ALIAS al presionar ENTER
    $("#seudonimoInput").keyup(function(event) {
        if (event.keyCode === 13) {
          modificarDescripcion();
        }
    });

    $(document).ready(function(){
      $(".material-tooltip").addClass("hide");
    });

  </script>



</body>
</html>
