<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header.php'; ?>
  <?php include '_partials/nav.php'; ?>
  <?php include '_partials/actions.php'; ?>

  <main class="grey-text text-darken-2"> 
  <div class="container">

    <div class="row">
      <!-- Masonry -->
      <div id="masonry-grid" class="row">
        <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3 ">
          <div class="row">
            <h1>Pagar</h1>
            <p>¿Que mierda queres pagar Mariano?</p>
          </div>

          <div class="row">
            <div class="card-panel">
              <div class="row">
                <div class="col s12">
                <div class="card-tabs">
                <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
                  <li class="tab col s3"><a href="#test-swipe-1">Buscar por nombre</a></li>
                  <li class="tab col s3"><a class="active" href="#test-swipe-2">Buscar por rubro</a></li>
                </ul>
                </div>
                <div class="card-content">
                <div id="test-swipe-1" class="col s12 white">
                  <!-- <div class="card-content"> -->
                  <form>
                    <p>Buscar por nombre</p>
                    <div class="input-field">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Servicio o empresa</label>
                      <p class="right-align"><a href="" class="btn blue">Buscar</a></p>
                    </div>  
                    </form>
                  <!-- </div>   -->
                </div>
                <div id="test-swipe-2" class="col s12 white">
                  <!-- <div class="card-content">  -->
                    <form action="">
                    <p class="mg-b-30">No recuerdo el nombre, prefiero buscar por rubro</p>
                    <div class="input-field">
                      <select>
                        <option value="" disabled selected>Rubro</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                      <label>Seleccioná un rubro</label> 
                    </div>  
                    <div class="input-field">
                      <select>
                        <option value="" disabled selected>Subrubro</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                      <label>Seleccioná un rubro</label> 
                    </div>
                    <div class="input-field">
                      <select>
                        <option value="" disabled selected>Empresa</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                      <label>Seleccioná un rubro</label> 
                    </div>
                    <p class="right-align"><a href="" class="btn blue">Pagar</a></p>
                    </form>
                  <!-- </div> -->
                </div>
              </div>
              </div>
            </div>
              <!-- <div class="card-action right-align">
                  <a href="" class="btn-large mg-r-20">Pagarlo</a>
              </div> -->
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
  //   $("input[type=checkbox]").change(function(){
  //     $(this).parent(".card-action").parent(".card").toggleClass("serv_select");
  //   })

    $("tabs-content").change(function(a,b,c) {
      console.log(a);
      console.log(b);
      console.log(c);
    })
  });
</script>

</body>
</html>