<!-- Modal Structure // ADHERIR PAGO -->
  <div id="adherir" class="modal max-500">
    <div class="modal-content">
        <i class="material-icons right modal-close">close</i>
        <h3><i class="material-icons">save</i></h3>
        <p class="mg-b-0 mg-t-10">¿Querés guardarte ésta factura para que te <b>aparezca el mes que viene</b>? <i>Podes ponerle un alias para acordarte (opcional):</i></p>
        <!-- <p class="mg-b-0 mg-t-10"></p> -->
        <div class="row mg-b-0">
          <div class="input-field">
            <input placeholder="Ej: Celu de mamá" id="seudonimoInputNuevita" type="text" class="validate">
            <!-- <label for="first_name">Podes ponerle un alias para acordarte (opcional):</label> -->
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <div class="right-align">
        <a class="btn-flat modal-action modal-close waves-effect waves-light pd-r-15 pd-l-15 left"><i class="material-icons left">close</i> Cancelar</a>
        <a class="btn blue modal-action modal-close waves-effect waves-light modal-close" onclick="modificarDescripcionNuevita();"><i class="material-icons left">check</i> Guardar</a>
      </div>
    </div>
  </div>
