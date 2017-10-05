<!-- Header -->
<?php include '_partials/head.php'; ?>
<body>

  <?php include '_partials/header_out.php'; ?>

  <main class="grey-text text-darken-2">
    <div class="container">

      <div class="row mg-t-20">
        <div class="col s12 m10 offset-m1 l6 offset-l3 ">
          <div class="card hoverable">
            <form>
              <div class="card-content">
                <span class="card-title">¿Nos conocemos?</span>
                <div class="row mg-t-20 mg-b-0">
                  <h6>Lamentablemente no reconocemos ningun usuario con esos datos</h6>
                  <h6>¡Pero puede ser una buena oportunidad para que te <a href="registro.php" class="orange-text">registres</a>!</h6>
                </div>
              </div>
            </form>
          </div>
          <p class="left nota">Powered by <a href="#" class="orange-text">Todo Pago</a></p>
          <p class="right"><a href="index.php">Ya lo recorde</a></p>
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

$("#ingresar").hide();
  $("tabs-content").change(function(a,b,c) {
    console.log(a);
    console.log(b);
    console.log(c);
  })
});
</script>

</body>
</html>
