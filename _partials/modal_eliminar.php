<!-- Modal Structure // ELIMINAR PAGO -->
<div id="eliminar" class="modal max-500">
  <div class="modal-content">
      <i class="material-icons right modal-close">close</i>
      <h3 class="card-title"><i class="material-icons left">delete_forever</i> Eliminar factura</h3>
      <p class="mg-t-30 eliminar">Estás a punto de eliminar de tus pagos: Luz de Casa (<b>Edesur</b>) ¿Estás seguro?</p>
      <p class="eliminar">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de este servicio tenés que <a href="#!" class="modal-trigger tooltipped red-text" onclick="$('.modal-content p.hide').fadeIn().removeClass('hide'); $('.modal-content p.eliminar').hide(); $('a.red.modal-action span').text('eliminar definitivamente'); $('a.btn-flat').addClass('definitivamente');"  data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50">eliminarla definitivamente</a>.</p>
      <p class="hide red-text">¿Seguro querés eliminar definitivamente Luz de Casa (<b>Edesur</b>)?</p>
  </div>
  <div class="modal-footer">
    <div class="">
      <a class="btn-flat modal-action modal-close waves-effect waves-light left"><i class="material-icons left">close</i> Cancelar</a>
      <a href="" class="btn red white-text modal-action modal-close waves-effect waves-light right tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50"><i class="material-icons left">check</i> <span>eliminar</span></a>
      <!-- <a href="" class="btn-flat blue-text modal-action modal-close waves-effect waves-light left tooltipped" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50">Eliminar definitivamente</a> -->
    </div>
  </div>
</div>

<div id="definitivamente" class="modal max-500">
  <div class="modal-content">
      <i class="material-icons right modal-close">close</i>
      <h3 class="card-title"><i class="material-icons left">delete_forever</i> Eliminar definitivamente</h3>
      <p class="mg-t-30">¿Seguro querés eliminar definitivamente Luz de Casa (<b>Edesur</b>)?</p>
  </div>
  <div class="modal-footer">
    <div class="">
      <a class="btn-flat modal-action modal-close waves-effect waves-light left"><i class="material-icons left">close</i> Cancelar</a>
      <a href="" class="btn red white-text modal-action modal-close waves-effect waves-light right tooltipped eliminarDefinitivamente"  data-text="La factura se desvinculará para siempre"><i class="material-icons left">check</i> Eliminar definitivamente</a>
    </div>
  </div>
</div>
