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
          <a class="btn orange mg-r-3 disabled" href="inicio.php"><i class="material-icons">view_module</i></a>
          <a class="btn orange" href="inicioTabla.php"><i class="material-icons">format_list_bulleted</i></a>
        </div>
      </div>

      <div class="row">
        <!-- botón de pagar de nav.php /// MOBILE -->
        <div id="cantidad" class="col s12 mg-b-10 hide-on-med-and-up">
          <a href="#" class="btn-floating white-text blue pulse right" id="a-button"><span class="prisma accion-pagar large mg-l-15"></span></a>
        </div>
        <!-- fin botón de pagar de nav.php /// MOBILE -->
        <!-- Masonry -->
        <div id="masonry-grid" class="row">
          <div class="col s12 m4 l3">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper">
                <div class="valign-wrapper">
                  <img src="img/aysa.jpg" class="circle activator">
                  <span class="card-title">Agua de casa</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light orange activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$450</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                  <span class="alertita"><i class="material-icons tiny">report_problem</i><b> QUEDAN 3 DÍAS</b></span>
                </div>
                <br>
                <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="showLi()"/>
                  <label for="filled-in-box-1"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Seudónimo: <span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Referencia Interna: asñlkfdjaoifsd</li>
                  <li>Vencimiento: 10/11/17</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger" href="#modal1"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a href="pagar.php" class="btn blue mg-r-20">Pagar</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l3">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper grey">
                <div class="valign-wrapper">
                  <img src="img/claro.jpg" class="circle activator">
                  <span class="card-title">Claro</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light orange activator" disabled><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$850</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Venció el <time>01/09/17</time></p>
                  <span class="alertita"><i class="material-icons tiny">report_problem</i><b> TU FACTURA VENCIÓ</b></span>
                </div>
                <br>
                <input type="checkbox" class="filled-in" id="filled-in-box-2" onclick="showLi()" disabled/>
                  <label for="filled-in-box-2"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right">close</i></span>
                <ul>
                  <li>Empresa: <span>Claro</span></li>
                  <li>Seudónimo: <span>Claro</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Importe: <b>$850,00</b></li>
                  <li>Referencia Interna: asñlkfdjaoifsd</li>
                  <li>Vencimiento: 10/12/17</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger" href="#modal1"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a href="pagar.php" class="btn blue mg-r-20" disabled>Pagar</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l3">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper">
                <div class="valign-wrapper">
                  <img src="img/metrogas.png" class="circle">
                  <span class="card-title">Gas tia mardel</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light orange activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$1200</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                  <span class="alertita"><i class="material-icons tiny">report_problem</i><b> QUEDAN 3 DÍAS</b></span>
                </div>
                <br>
                <input type="checkbox" class="filled-in" id="filled-in-box-3" onclick="showLi()"/>
                  <label for="filled-in-box-3"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Seudónimo: <span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Referencia Interna: asñlkfdjaoifsd</li>
                  <li>Vencimiento: 10/11/17</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger" href="#modal1"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a href="pagar.php" class="btn blue mg-r-20">Pagar</a>
              </div>
            </div>
          </div>

          <!-- AGREGAR PAGO // ESTILO CARD -->
          <div class="col s12 m4 l3">
              <div class="card-panel white hoverable center">
                <a href="#nuevopago" class="modal-trigger"><i class="material-icons large mg-t-80">add</i></a>
                <a href="#nuevopago" class="modal-trigger"><h3 class="center mg-t-30 mg-b-63">Añadir Nuevo Pago</h3></a>
              </div>
          </div>
          <!-- FIN AGREGAR PAGO -->
        </div>
        <div class="row">
          <div class="col s12 m4 l3">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper">
                <div class="valign-wrapper">
                  <img src="img/afip.jpg" class="circle" sytle="border-radius: none;">
                  <span class="card-title">Pagar Afip</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light orange activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$450</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                </div>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue mg-r-20">Ir al Sitio</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l3">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper">
                <div class="valign-wrapper">
                  <img src="img/personal.jpg" class="circle">
                  <span class="card-title">Donar a Claro</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light orange activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$450</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                </div>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue mg-r-20">Donar</a>
              </div>
            </div>
          </div>


           <div class="col s12 m4 l3">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper">
                <div class="valign-wrapper">
                  <img src="img/personal.jpg" class="circle">
                  <span class="card-title">Personal</span>
                </div>
              </div>
              <div class="card-content">
                <p>Duplica tus minutos para llamadas a personal recargando por PAGO MIS CUENTAS</p>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue mg-r-20">Añadir</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l3 ">
            <div class="card grilla white hoverable">
              <div class="card-image">
                <img src="img/publicidad_p.png">
              </div>
              <div class="card-content">
                <p>Duplica tus minutos para llamadas a personal recargando por PAGO MIS CUENTAS</p>
              </div>
              <div class="card-action">
                <a href="" class="btn blue mg-r-20">Añadir</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l3 ">
            <div class="card grilla white hoverable">
              <div class="card-image">
                <img src="img/publicidad.jpg">
              </div>
              <div class="card-action">
                  <a href="" class="btn blue mg-r-20">Añadir</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l3">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper">
                <div class="valign-wrapper">
                  <img src="img/personal.jpg" class="circle">
                  <span class="card-title">Celu vieja</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light orange activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <span class="monto"><b>$450</b></span>
                <p>Esta factura se pagará automáticamente</p>
                <div class="vencimiento">
                  <p>el <time>10/11/17</time></p>
                </div>
              <p class="red-text nota">Si ya se Rodri que automático ahora no va a aparecer</p>
              </div>
              <div class="card-action">
                  <div class="switch">
                    <label>
                      <!-- No -->
                      <input type="checkbox" checked="checked" >
                      <span class="lever"></span>
                      Automático
                    </label>
                  </div>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l3 ">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper green">
                <div class="valign-wrapper">
                  <img src="img/personal.jpg" class="circle">
                  <span class="card-title">Celu nuevo</span>
                </div>
              </div>
              <div class="card-content">
                <span class="alertita green"><i class="material-icons tiny">check</i><b> PAGADA</b></span><br>
                  <span class="monto green-text"><b>$450</b></span>
                <div class="hide-on-small-only vencimiento">
                </div>
              </div>
              <div class="card-action">
                  <a href="ticket.php" class="btn blue mg-r-20">Comprobante</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>

<!-- Modal Structure // ELIMINAR PAGO -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="container">
          <h3 class="center"><i class="material-icons small">delete_forever</i> Eliminar pago</h3>
      </div>

        <p class="center mg-t-30">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
    </div>
    <div class="modal-footer">
      <div class="right-align">
        <a href="" class="btn-flat green-text modal-action modal-close waves-effect waves-light"><i class="material-icons left">check</i> Sí, quiero eliminarlo</a>
        <a href="" class="btn-flat red-text modal-action modal-close waves-effect waves-light"><i class="material-icons left">close</i> No quiero eliminarlo</a>
      </div>
    </div>
  </div>

  <!-- Modal Structure // BUSCAR -->
    <div id="nuevopago" class="modal">
      <div class="modal-content white">
        <div class="container">
            <h3 class="left-align"><b>Buscar</b></h3>
            <p class="left-align grey-text mg-b-20">¿Qué servicio querés pagar?</p>
        </div>

        <div class="row mg-t-20">
    <div class="col s12">
      <ul id="tabs-swipe-demo" class="tabs mg-t-20">
        <li class="tab col s5"><a class="active" href="#test1"><h6 class="hide-on-small-only">BUSCAR POR NOMBRE</h6> <h6 class="hide-on-med-and-up">NOMBRE</h6></a></li>
        <li class="tab col s5"><a href="#test2"><h6 class="hide-on-small-only">BUSCAR POR RUBRO</h6> <h6 class="hide-on-med-and-up">RUBRO</h6></a></li>

      </ul>
    </div>
    <!-- buscar por nombre de empresa -->
    <div id="test1" class="col s12 mg-t-30">
      <div class="row">
        <div class="col m11 l10 s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">search</i>
              <input type="text" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">Nombre de Empresa</label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- buscar por rubro -->
    <div id="test2" class="col s12 mg-t-30">
      <div class="row">
        <div class="col m11 l10 s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">search</i>
              <input type="text" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">Rubro de Empresa</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


      </div>
      <div class="modal-footer">
        <div class="right-align">
          <a href="#" class="btn blue modal-action modal-action waves-effect waves-light mg-r-30 mg-b-10">Buscar</a>
        </div>
      </div>
    </div>

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



<script type="text/javascript">
  $(document).ready(function() {
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

    var randomBoolean = Math.random() >= 0.5
    if(randomBoolean){
      $("#conVencimientos").removeClass();
      Materialize.toast('<span class="hide-on-small-only"><i class="fa fa-bell-o" aria-hidden="true"></i>&nbsp;&nbsp;</span>Tu factura de AYSA está por vencer&nbsp;&nbsp;<a href="pagar.php" class="btn white orange-text">Pagar</a>', 1000000000,'orange darken-2');
    }

  });
  </script>



</body>
</html>
