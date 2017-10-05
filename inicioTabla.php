<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>


  <?php include '_partials/header.php'; ?>
  <?php include '_partials/nav.php'; ?>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">
      <div class="row">
        <div class="col left">
          <p>Mariano, por favor seleccioná una o varias de las facturas que queres pagar. </p>
        </div>
        <div class="col right mg-t-10 view hide-on-small-only">
          Vista:&nbsp;
          <a class="btn orange mg-r-3" href="inicio.php"><i class="material-icons">view_module</i></a>
          <a class="btn orange disabled" href="inicioTabla.php"><i class="material-icons">format_list_bulleted</i></a>
        </div>
      </div>

<!-- botón de pagar de nav.php /// MOBILE -->
      <div class="row">
        <div id="cantidad" class="col s12 mg-b-10 hide-on-med-and-up">
          <a href="#" class="btn-floating white-text blue pulse right" id="a-button"><span class="prisma accion-pagar large mg-l-15"></span></a>
        </div>
      </div>
  <!-- fin botón de pagar de nav.php /// MOBILE -->

      <!-- collapsible -->
      <div class="row">
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">
              <i class="material-icons left valign-wrapper">add_circle</i>
              <div class="col m1 s3">
                <img src="img/aysa.jpg" class="circle responsive-img valign-wrapper">
              </div>
              <div class="col m4 push-m1 s3">
                <span class="card-title valign-wrapper">Agua</span>
                <span class="blue-text hide-on-small-only">(<b>Aysa</b>)</span>
                <span class="hide-on-med-and-up red-text valign-wrapper"><b>$450.-</b></span>
              </div>
              <div class="col m2 hide-on-small-only valign-wrapper">
                <span><b>$450.-</b></span> <br>
              </div>
              <div class="col m3 s4 valign-wrapper">
                <span class="alertita left"><span class="hide-on-small-only"><b>QUEDAN</b></span> <b>3 DÍAS</b></span>
              </div>
              <div class="col s2 push-m1 valign-wrapper">
                <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="showLi()"/>
                <label for="filled-in-box-1"></label>
              </div>
              </div>
              <!-- vista detalle info -->
            <div class="collapsible-body">
                  <ul>
                    <li>Empresa: Metrogas</li>
                    <li>Seudónimo: Gas Mardel</li>
                    <li>Importe: <b>$200,00</b></li>
                    <li>Referencia interna: sadasmdoiea</li>
                    <li>Vencimiento: 10/12/2012</li>
                  </ul>
                  <a class="btn-flat waves-effect red-text right hide-on-small-only" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
                  <a class="btn-floating waves-effect waves-light red hide-on-med-and-up"><i class="material-icons">delete_forever</i></a>
                  <div class="red white-text block">
                    <h5 class="white-text center"><i class="material-icons">delete_forever</i> Eliminar pago</h5>
                    <div class="col s12">
                      <p class="center">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                    </div>
                    <div class="col s12 push-s1 m4 push-m9">
                      <a href="#" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">check</i> Si</a>
                      <a href="#!" onclick="closeDelete(this)" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">close</i> No</a>
                    </div>
                    <br>
                  </div>

            </div>
            <!-- fin vista detalle info -->
          </li>
          <li>
            <div class="collapsible-header">
              <i class="material-icons left valign-wrapper">add_circle</i>
              <div class="col m1 s3">
                <img src="img/claro.jpg" class="circle responsive-img valign-wrapper">
              </div>
              <div class="col m4 push-m1 s3">
                <span class="card-title valign-wrapper">Claro</span>
                <span class="hide-on-med-and-up green-text valign-wrapper"><b>$850.-</b></span>
              </div>
              <div class="col m2 hide-on-small-only valign-wrapper">
                <span class="green-text"><b>$850.-</b></span> <br>
              </div>
              <div class="col m2 s4 valign-wrapper">
                <span class="alertita green left"><b>PAGADA</b></span>
              </div>
              <div class="col s3 valign-wrapper">
                <a href="ticket.php" class="btn blue waves-effect waves-light hide-on-small-only mg-l-60">Comprobante</a>
                <a href="ticket.php" class="btn-floating blue waves-effect waves-light hide-on-med-and-up"><i class="material-icons mg-l-7">insert_drive_file</i></a>
              </div>
            </div>
            <div class="collapsible-body">
              <ul>
                <li>Empresa: Metrogas</li>
                <li>Seudónimo: Gas Mardel</li>
                <li>Importe: <b>$200,00</b></li>
                <li>Referencia interna: sadasmdoiea</li>
                <li>Vencimiento: 10/12/2012</li>
              </ul>
              <a class="btn-flat waves-effect red-text right hide-on-small-only" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
              <a class="btn-floating waves-effect waves-light red hide-on-med-and-up"><i class="material-icons">delete_forever</i></a>
              <div class="red white-text block">
                <h5 class="white-text center"><i class="material-icons">delete_forever</i> Eliminar pago</h5>
                <div class="col s12">
                  <p class="center">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                </div>
                <div class="col s12 push-s1 m4 push-m9">
                  <a href="#" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">check</i> Si</a>
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">close</i> No</a>
                </div>
                <br>
              </div>
            </div>
          </li>
          <li>
            <div class="collapsible-header grey lighten-3">
              <i class="material-icons left valign-wrapper">add_circle</i>
              <div class="col m1 s3">
                <img src="img/metrogas.png" class="circle responsive-img valign-wrapper">
              </div>
              <div class="col m4 push-m1 s3">
                <span class="card-title valign-wrapper grey-text">Gas tía Mardel</span>
                <span class="hide-on-small-only grey-text">(<b>Metrogas</b>)</span>
                <span class="hide-on-med-and-up red-text valign-wrapper"><b>$1200.-</b></span>
              </div>
              <div class="col m2 hide-on-small-only valign-wrapper">
                <span><b>$1200.-</b></span> <br>
              </div>
              <div class="col m3 s4 valign-wrapper">
                <span class="alertita left"><b>VENCIDA</b></span>
              </div>
              <div class="col s2 push-m1 valign-wrapper">
                <input type="checkbox" class="filled-in" id="filled-in-box-3" onclick="showLi()" disabled/>
                <label for="filled-in-box-3"></label>
              </div>
            </div>
            <div class="collapsible-body">
              <ul>
                <li>Empresa: Metrogas</li>
                <li>Seudónimo: Gas Mardel</li>
                <li>Importe: <b>$200,00</b></li>
                <li>Referencia interna: sadasmdoiea</li>
                <li>Vencimiento: 10/12/2012</li>
              </ul>
              <a class="btn-flat waves-effect red-text right hide-on-small-only" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
              <a class="btn-floating waves-effect waves-light red hide-on-med-and-up"><i class="material-icons">delete_forever</i></a>
              <div class="red white-text block">
                <h5 class="white-text center"><i class="material-icons">delete_forever</i> Eliminar pago</h5>
                <div class="col s12">
                  <p class="center">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                </div>
                <div class="col s12 push-s1 m4 push-m9">
                  <a href="#" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">check</i> Si</a>
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">close</i> No</a>
                </div>
                <br>
              </div>
            </div>
          </li>

          <li>
            <div class="collapsible-header">
              <i class="material-icons left valign-wrapper">add_circle</i>
              <div class="col m1 s3">
                <img src="img/afip.jpg" class="circle responsive-img valign-wrapper">
              </div>
              <div class="col m4 push-m1 s3">
                <span class="card-title valign-wrapper">Pagar AFIP</span>
                <span class="hide-on-med-and-up red-text valign-wrapper"><b>$600.-</b></span>
              </div>
              <div class="col m2 hide-on-small-only valign-wrapper">
                <span><b>$600.-</b></span> <br>
              </div>
              <div class="col m2 s4 valign-wrapper">
                <span class="alertita left"><span class="hide-on-small-only"><b>QUEDAN</b></span> <b>3 DÍAS</b></span>
              </div>
              <div class="col s3 push-m1 valign-wrapper">
                <a href="#" class="btn blue waves-effect waves-light hide-on-small-only">Sitio Web</a>
                <a href="#" class="btn-floating blue waves-effect waves-light hide-on-med-and-up"><i class="material-icons mg-l-7">launch</i></a>
              </div>
            </div>
            <div class="collapsible-body">
              <ul>
                <li>Empresa: Metrogas</li>
                <li>Seudónimo: Gas Mardel</li>
                <li>Importe: <b>$200,00</b></li>
                <li>Referencia interna: sadasmdoiea</li>
                <li>Vencimiento: 10/12/2012</li>
              </ul>
              <a class="btn-flat waves-effect red-text right hide-on-small-only" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
              <a class="btn-floating waves-effect waves-light red hide-on-med-and-up"><i class="material-icons">delete_forever</i></a>
              <div class="red white-text block">
                <h5 class="white-text center"><i class="material-icons">delete_forever</i> Eliminar pago</h5>
                <div class="col s12">
                  <p class="center">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                </div>
                <div class="col s12 push-s1 m4 push-m9">
                  <a href="#" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">check</i> Si</a>
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">close</i> No</a>
                </div>
                <br>
              </div>
            </div>
          </li>


          <li>
            <div class="collapsible-header">
              <i class="material-icons left valign-wrapper">add_circle</i>
              <div class="col m1 s3">
                <img src="img/personal.jpg" class="circle responsive-img valign-wrapper">
              </div>
              <div class="col m4 push-m1 s3">
                <span class="card-title valign-wrapper">(Publicidad) Personal</span>
              </div>
              <div class="col m4 s8 hide-on-small-only valign-wrapper">
                <span>Duplica tus minutos para llamadas a personal recargando por PAGO MIS CUENTAS</span> <br>
              </div>
              <div class="col s3 push-m1 valign-wrapper">
                <a href="#" class="btn blue waves-effect waves-light hide-on-small-only mg-l-20">Añadir</a>
                <a href="#" class="btn-floating blue waves-effect waves-light hide-on-med-and-up"><i class="material-icons mg-l-7">favorite_border</i></a>
              </div>
            </div>
          </li>


          <li>
            <div class="collapsible-header">
              <i class="material-icons left valign-wrapper">add_circle</i>
              <div class="col m1 s3">
                <img src="img/personal.jpg" class="circle responsive-img valign-wrapper">
              </div>
              <div class="col m4 push-m1 s3">
                <span class="card-title valign-wrapper">Donar a Claro</span>
                <span class="hide-on-med-and-up red-text valign-wrapper"><b>$600.-</b></span>
              </div>
              <div class="col m2 hide-on-small-only valign-wrapper">
                <span><b>$600.-</b></span> <br>
              </div>
              <div class="col m2 s4 valign-wrapper">
                <span class="alertita left"><span class="hide-on-small-only"><b>QUEDAN</b></span> <b>3 DÍAS</b></span>
              </div>
              <div class="col s3 push-m1 valign-wrapper">
                <a href="#" class="btn blue waves-effect waves-light hide-on-small-only mg-l-20">Donar</a>
                <a href="#" class="btn-floating blue waves-effect waves-light hide-on-med-and-up"><i class="material-icons mg-l-7">favorite_border</i></a>
              </div>
            </div>
            <div class="collapsible-body">
              <ul>
                <li>Empresa: Metrogas</li>
                <li>Seudónimo: Gas Mardel</li>
                <li>Importe: <b>$200,00</b></li>
                <li>Referencia interna: sadasmdoiea</li>
                <li>Vencimiento: 10/12/2012</li>
              </ul>
              <a class="btn-flat waves-effect red-text right hide-on-small-only" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
              <a class="btn-floating waves-effect waves-light red hide-on-med-and-up"><i class="material-icons">delete_forever</i></a>
              <div class="red white-text block">
                 <h5 class="white-text center"><i class="material-icons">delete_forever</i> Eliminar pago</h5>
                <div class="col s12">
                  <p class="center">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                </div>
                <div class="col s12 push-s1 m4 push-m9">
                  <a href="#" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">check</i> Si</a>
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat waves-effect white-text mg-b-10"><i class="material-icons left">close</i> No</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <!-- end collapsible -->
  </div>
</main>

<!-- Javascript -->
<?php include '_partials/footer.php'; ?>

<!-- script seleccionar factura a pagar // "carrito" // ver archivo: nav.php -->
<script type="text/javascript">
function showLi() {
   document.getElementById('cantidad').style.display = "block";
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

    $("input[type=checkbox].filled-in").change(function(){
      carrito(this);
    });

    function carrito(check){
      $(check).parent(".card-action").parent(".card").toggleClass("active");
      var chks = $("input[type=checkbox].filled-in:checked");
      var chksSize = chks.size();
      if(chksSize>0){
        var prices = chks.parents(".card").find(".monto b");
        var total = 0;
        prices.each(function () {
          total += Number(this.textContent.replace('.','').replace(',','.').split("$")[1]);
        });
        total = total.format("2","3",".",",");
        $(".carrito").addClass("active");
        $("#cantFacturas").text((chksSize==1) ? chksSize+" factura" : chksSize + " facturas");
        $("#total").text("$"+total);
      }else{
        $(".carrito").removeClass("active");
      }
    }

    carrito();
  });
  function deleteItem(a) {
    $(a).siblings("div").addClass("active");s
  }
  function closeDelete(b) {
    $(b).closest("div").removeClass("active");s
  }
</script>

</body>
</html>
