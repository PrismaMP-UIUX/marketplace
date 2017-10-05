<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>


  <?php include '_partials/header.php'; ?>
  <?php include '_partials/nav.php'; ?>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2"> 
    <div class="container">
      <div class="row mg-t-20">
        <div class="col s12 l6 offset-l3"> 
          <div class="card margindown hoverable"> 
            <div class="card-content">
              <span class="card-title blue-text">Saldos y disponibles</span>
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header before-collapse tabla" collapsible-order="0">
                    <span>Caja de ahorro en pesos 0504501112200817</span>
                    <i class="material-icons rotate right hide">data_usage</i>
                  </div>
                  <div class="collapsible-body">
                    <ul>
                      <li>Saldo: $5000</li>
                      <li>Limite de pagos: $4500</li>
                      <li><b>$2500,00</b> disponibles para pagar hoy</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header before-collapse tabla" collapsible-order="1">
                    <span>Cuenta corriente en pesos 0504501112200817</span>
                    <i class="material-icons rotate right hide">data_usage</i>
                  </div>
                  <div class="collapsible-body">
                    <ul>
                      <li>Saldo: $5000</li>
                      <li>Limite de pagos: $4500</li>
                      <li><b>$2500,00</b> disponibles para pagar hoy</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header before-collapse tabla" collapsible-order="2">
                    <span>Caja de ahorro en dolares 0504501112200817</span>
                    <i class="material-icons rotate right hide">data_usage</i>
                  </div>
                  <div class="collapsible-body">
                    <ul>
                      <li>Saldo: $5000</li>
                      <li>Limite de pagos: $4500</li>
                      <li><b>$2500,00</b> disponibles para pagar hoy</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header before-collapse tabla" collapsible-order="3">
                    <span>Cuenta corriente en dolares 0504501112200817</span>
                    <i class="material-icons rotate right hide">data_usage</i>
                  </div>
                  <div class="collapsible-body">
                    <ul>
                      <li>Saldo: $5000</li>
                      <li>Limite de pagos: $4500</li>
                      <li><b>$2500,00</b> disponibles para pagar hoy</li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> 

    </div>
  </div>
</main>

<!-- Javascript -->
<?php include '_partials/footer.php'; ?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".before-collapse").on("click", function(e) {
      elem = this;
      if(!$(elem).hasClass("active")){
        var event = e;
        event.stopPropagation();
        $(elem).find(".material-icons").toggleClass("hide");
        setTimeout(function(){
          collap(Number(elem.attributes['collapsible-order'].value));
          $(elem).find(".material-icons").toggleClass("hide");
        }, 2000);
      }
   });
  });
</script>
</body>
</html>