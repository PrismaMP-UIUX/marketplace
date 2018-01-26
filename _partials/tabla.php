        <!-- collapsible -->
        <ul class="collapsible animated bounceInUp popout" data-collapsible="accordion">
          <li class="facturaItem">
            <div class="collapsible-header noselect nuevita">
              <div class="flex align-i-center">
                <input type="checkbox" class="filled-in " id="filled-in-box-93" onclick="showLi()"/>
                <label for="filled-in-box-93"></label>
              </div>

              <div class="mg-r-15 max-50 hide-on-small-only">
              <rubro><img src="data:image/png;base64,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YAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwRAAD8KQWuULAmAAGYAyUcBDwROB/KQ9ram4NAeIAAAAASUVORK5CYII=" class="circle responsive-img"></rubro>
              </div>
              <div class="mg-r-15 flex flex-grow align-i-center">
                <span class="mg-b-5 mg-t-5 blue-text mg-r-15 blue-text"><b>Aguas cordobesas</b> (<span class="blue-text seudonimoTexto">Aguita</span>)</span>
                <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$200,37</b></span>
                <span class="mg-b-5 mg-t-5 mg-r-15 vto">Vto: 10/12/2017</span>
                <span class="alertita orange-text mg-r-15 valign-wrapper tooltipped autoTooltip" data-position="top" data-text="Guardate esta factura <br> para que te recordemos <br> pagarla el mes que viene" data-delay="1"><i class="fa fa-certificate" aria-hidden="true"></i> Nueva</span>
                <a href="#adherir" class="left mg-b-5 mg-t-5 orange btn-floating flex flex-j-center mg-r-15 pulse modal-trigger scale-out scale-in soloennuevita not-collapse tooltipped" data-position="top" data-text="Guardar"><i class="material-icons mg-l-9 white-text">save</i></a>
                <a class="mg-b-5 mg-t-5 btn blue accionDeLaCard waves-effect modal-trigger not-collapse" href="#pago-rapido">Pagar</a>
              </div>
              <div class="flex flex align-i-center flex-j-end"><i class="material-icons more-details left rotateOnClick">expand_more</i></div>
            </div>
            <div class="collapsible-body">
              <aside class="flex align-i-center">
                <p>Empresa: <span>Metrogas</span></p>
                <div class="flex flex-inline align-i-center">
                  <p class="mg-r-5">Alias: <span class="toggleEditSeudonimo seudonimoTexto" id="">Aguita</span><a href="#" onclick="$('.toggleEditSeudonimo').toggleClass('hide'); $('input.toggleEditSeudonimo').focus();" class="toggleEditSeudonimo"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a><div class="input-field mg-t-0"><input id="" type="text" class="seudonimoInput hide toggleEditSeudonimo"/><a href="#" class="hide toggleEditSeudonimo prefix mg-neg-l-9 tooltipped" data-position="top" data-text="Guardar" onclick="modificarDescripcion()"><i class="material-icons tiny gris-mas-oscuro-text mg-r-10">save</i></a></div></p>
                </div>
                <p>Identificación: <span>33444</span></p>
                <p>Importe: <span>$200,00</span></p>
                <p>Ref. Interna: <span>33322</span></p>
                <p>Datos adicionales: <span>Cuota 1</span></p>
                <a class="btn btn-flat transparent red-text right eliminar tooltipped hide" data-text="Eliminar" href="#!" onclick="deleteItem(this)" ><i class="material-icons left">delete_forever</i> Eliminar</a>
              </aside>
              <div class="red-text block pd-l-30 eliminar-mobile">
                <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                <div class="pd-r-15">
                  <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                  <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                </div>
                <div class="right mg-r-15 mg-b-15">
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat red-text pd-l-10 pd-r-10"><i class="material-icons left">close</i> No eliminar</a>
                  <a href="#!" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                </div>
              </div>
            </div>
          </li>
          <li class="facturaItem factura-anidada">
            <div class="collapsible-header noselect flex">
              <div class="flex-inline width-100 factura-anual">
                <div class="flex align-i-center">
                  <input type="checkbox" class="filled-in anidada" id="filled-in-box-98" onclick="showLi()"/>
                  <label for="filled-in-box-98"></label>
                </div>
                <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/rubros/agua.svg" class="circle responsive-img"></rubro></div>
                <div class="mg-r-15 flex flex-grow align-i-center">
                  <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (<span class="blue-text seudonimoTexto">Agua de Casa</span>)</span>
                  <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$450</b></span>
                  <span class="mg-b-5 mg-t-5 mg-r-15 vto">Vto: 10/12/2017</span>
                  <span class="alertita violeta-oscuro-text mg-r-15 valign-wrapper">anual</span>
                  <a class="mg-b-5 mg-t-5 btn blue accionDeLaCard waves-effect  modal-trigger not-collapse" href="#pago-rapido">Pagar</a>
                  <a class="btn btn-flat transparent red-text right tooltipped mg-r-15" data-text="Eliminar" href="#!" onclick="$('.eliminar-anidada1').show('slow');"><i class="material-icons left">delete_forever</i> Eliminar</a>
                </div>
                <div class="flex flex align-i-center flex-j-end"><i class="material-icons more-details left rotateOnClick">expand_more</i></div>
              </div>
              <div class="eliminar-anidada1" style="display: none;">
                <div class="red-text block pd-l-30 eliminar-mobile">
                  <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                  <div class="pd-r-15">
                    <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                    <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                  </div>
                  <div class="right mg-r-15 mg-b-15">
                    <a href="#!" class="btn-flat red-text pd-l-10 pd-r-10" onclick="$('.eliminar-anidada1').hide('slow');"><i class="material-icons left">close</i> No eliminar</a>
                    <a href="inicioTabla.php" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                  </div>
                </div>
              </div>
              <div class="width-100 factura-mensual">
                <div class="flex-inline width-100 pd-l-30 pd-t-10 pd-b-10">
                  <div class="flex align-i-center">
                    <input type="checkbox" class="filled-in mensual" id="filled-mensual-1" onclick="showLi()"/>
                    <label for="filled-mensual-1"></label>
                  </div>
                  <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/rubros/agua.svg" class="circle responsive-img"></rubro></div>
                  <div class="mg-r-15 flex flex-grow align-i-center">
                    <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (<span class="blue-text seudonimoTexto">Agua de Casa</span>)</span>
                    <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$150</b></span>
                    <span class="mg-b-5 mg-t-5 mg-r-15 vto">Vto: 10/12/2017</span>
                    <span class="alertita violeta-text mg-r-15 valign-wrapper">mensual</span>
                    <a class="mg-b-5 mg-t-5 btn blue accionDeLaCard waves-effect  modal-trigger not-collapse" href="#pago-rapido">Pagar</a>
                    <a class="btn btn-flat transparent red-text right tooltipped mg-r-15" data-text="Eliminar" href="#!" onclick="$('.eliminar-anidada2').show('slow');" ><i class="material-icons left">delete_forever</i> Eliminar</a>
                  </div>
                </div>
              </div>
              <div class="eliminar-anidada2" style="display: none;">
                <div class="red-text block pd-l-30 eliminar-mobile">
                  <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                  <div class="pd-r-15">
                    <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                    <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                  </div>
                  <div class="right mg-r-15 mg-b-15">
                    <a href="#!" class="btn-flat red-text pd-l-10 pd-r-10" onclick="$('.eliminar-anidada2').hide('slow');"><i class="material-icons left">close</i> No eliminar</a>
                    <a href="inicioTabla.php" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                  </div>
                </div>
              </div>
              <div class="width-100 factura-mensual">
                <div class="flex-inline width-100 pd-l-30 pd-t-10 pd-b-10">
                  <div class="flex align-i-center">
                    <input type="checkbox" class="filled-in mensual" id="filled-mensual-2" onclick="showLi()"/>
                    <label for="filled-mensual-2"></label>
                  </div>
                  <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/rubros/agua.svg" class="circle responsive-img"></rubro></div>
                  <div class="mg-r-15 flex flex-grow align-i-center">
                    <span class="mg-b-5 mg-t-5 mg-r-15 blue-text"><b>Aysa</b> (<span class="blue-text seudonimoTexto">Agua de Casa</span>)</span>
                    <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$150</b></span>
                    <span class="mg-b-5 mg-t-5 mg-r-15 vto">Vto: 10/12/2017</span>
                    <span class="alertita violeta-text mg-r-15 valign-wrapper">mensual</span>
                    <a class="mg-b-5 mg-t-5 btn blue accionDeLaCard waves-effect  modal-trigger not-collapse" href="#pago-rapido">Pagar</a>
                    <a class="btn btn-flat transparent red-text right tooltipped mg-r-15" data-text="Eliminar" href="#!" onclick="$('.eliminar-anidada3').show('slow');" ><i class="material-icons left">delete_forever</i> Eliminar</a>
                  </div>
                </div>
              </div>
              <div class="eliminar-anidada3" style="display: none;">
                <div class="red-text block pd-l-30 eliminar-mobile">
                  <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                  <div class="pd-r-15">
                    <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                    <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                  </div>
                  <div class="right mg-r-15 mg-b-15">
                    <a href="#!" class="btn-flat red-text pd-l-10 pd-r-10" onclick="$('.eliminar-anidada3').hide('slow');"><i class="material-icons left">close</i> No eliminar</a>
                    <a href="inicioTabla.php" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="collapsible-body">
              <aside class="flex align-i-center">
                <p>Empresa: <span>Metrogas</span></p>
                <div class="flex flex-inline align-i-center">
                  <p class="mg-r-5">Alias: <span class="toggleEditSeudonimo seudonimoTexto" id="">Agua de Casa</span><a href="#" onclick="$('.toggleEditSeudonimo').toggleClass('hide'); $('input.toggleEditSeudonimo').focus();" class="toggleEditSeudonimo"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a><div class="input-field mg-t-0"><input id="" type="text" class="seudonimoInput hide toggleEditSeudonimo"/><a href="#" class="hide toggleEditSeudonimo prefix mg-neg-l-9 tooltipped" data-position="top" data-text="Guardar" onclick="modificarDescripcion()"><i class="material-icons tiny gris-mas-oscuro-text mg-r-10">save</i></a></div></p>
                </div>
                <p>Identificación: <span>33444</span></p>
                <p>Importe: <span>$200,00</span></p>
                <p>Ref. Interna: <span>33322</span></p>
                <p>Datos adicionales: <span>Cuota 1</span></p>
                <!-- <a class="btn btn-flat transparent red-text right tooltipped" data-text="Eliminar" href="#!" onclick="deleteItem(this)" ><i class="material-icons left">delete_forever</i> Eliminar</a> -->
                <a class="btn btn-flat transparent blue-text right" href="#!"><i class="material-icons left">file_download</i> Descargar</a>
              </aside>
              <!-- <div class="red-text block pd-l-30 eliminar-mobile">
                <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                <div class="pd-r-15">
                  <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                  <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                </div>
                <div class="right mg-r-15 mg-b-15">
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat red-text pd-l-10 pd-r-10"><i class="material-icons left">close</i> No eliminar</a>
                  <a href="#!" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                </div>
              </div> -->
            </div>
          </li>
          <li class="facturaItem">
            <div class="collapsible-header noselect">
              <div class="flex align-i-center">
                <input type="checkbox" class="filled-in" id="filled-in-box-96" onclick="showLi()"/>
                <label for="filled-in-box-96"></label>
              </div>

              <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/rubros/telefonia.svg" class="circle responsive-img"></rubro></div>
              <div class="mg-r-15 flex flex-grow align-i-center">
                <span class="mg-b-5 mg-t-5 blue-text mg-r-15"><b>Personal</b>  (<span class="blue-text seudonimoTexto">Mi celu</span>)</span>
                <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$650</b></span>
                <span class="mg-b-5 mg-t-5 mg-r-15 vto">Vto: 10/12/2017</span>
                <span class="alertita red-text mg-r-15 valign-wrapper"><i class="fa fa-hourglass-half" aria-hidden="true"></i> QUEDAN 3 DÍAS</span>
                <a class="mg-b-5 mg-t-5 btn blue accionDeLaCard waves-effect  modal-trigger not-collapse" href="#pago-rapido">Pagar</a>
              </div>
              <div class="flex flex align-i-center flex-j-end"><i class="material-icons more-details left rotateOnClick">expand_more</i></div>
            </div>
            <div class="collapsible-body">
              <aside class="flex align-i-center">
                <p>Empresa: <span>Metrogas</span></p>
                <div class="flex flex-inline align-i-center">
                  <p class="mg-r-5">Alias: <span class="toggleEditSeudonimo seudonimoTexto" id="">Agua de Casa</span><a href="#" onclick="$('.toggleEditSeudonimo').toggleClass('hide'); $('input.toggleEditSeudonimo').focus();" class="toggleEditSeudonimo"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a><div class="input-field mg-t-0"><input id="" type="text" class="seudonimoInput hide toggleEditSeudonimo"/><a href="#" class="hide toggleEditSeudonimo prefix mg-neg-l-9 tooltipped" data-position="top" data-text="Guardar" onclick="modificarDescripcion()"><i class="material-icons tiny gris-mas-oscuro-text mg-r-10">save</i></a></div></p>
                </div>
                <p>Identificación: <span>33444</span></p>
                <p>Importe: <span>$200,00</span></p>
                <p>Ref. Interna: <span>33322</span></p>
                <p>Datos adicionales: <span>Cuota 1</span></p>
                <a class="btn btn-flat transparent red-text right tooltipped" data-text="Eliminar" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
                <a class="btn btn-flat transparent blue-text right" href="#!"><i class="material-icons left">file_download</i> Descargar</a>
              </aside>
              <div class="red-text block pd-l-30 eliminar-mobile">
                <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                <div class="pd-r-15">
                  <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                  <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                </div>
                <div class="right mg-r-15 mg-b-15">
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat red-text pd-l-10 pd-r-10"><i class="material-icons left">close</i> No eliminar</a>
                  <a href="#!" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                </div>
                <br>
              </div>
            </div>
          </li>
          <li class="facturaItem">
            <div class="collapsible-header noselect grey lighten-3">
              <div class="flex align-i-center">
                <input type="checkbox" class="filled-in" id="filled-in-box-95" disabled />
                <label for="filled-in-box-95"></label>
              </div>

              <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/metrogas.png" class="circle responsive-img"></rubro></div>
              <div class="mg-r-15 flex flex-grow align-i-center">
                <span class="mg-b-5 mg-t-5 blue-text mg-r-15"><b>Metrogas</b>  (<span class="blue-text seudonimoTexto">Gas tía</span>)</span>
                <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$4650</b></span>
                <span class="alertita red-text mg-r-15 valign-wrapper"><i class="fa fa-frown-o" aria-hidden="true"></i> VENCIDA</span>
                <a class="mg-b-5 mg-t-5 btn blue accionDeLaCard waves-effect  modal-trigger disabled not-collapse" href="#pago-rapido">Pagar</a>
              </div>
              <div class="flex flex align-i-center flex-j-end"><i class="material-icons more-details left rotateOnClick">expand_more</i></div>
            </div>
            <div class="collapsible-body">
              <aside class="flex align-i-center">
                <p>Empresa: <span>Metrogas</span></p>
                <div class="flex flex-inline align-i-center">
                  <p class="mg-r-5">Alias: <span class="toggleEditSeudonimo seudonimoTexto" id="">Agua de Casa</span><a href="#" onclick="$('.toggleEditSeudonimo').toggleClass('hide'); $('input.toggleEditSeudonimo').focus();" class="toggleEditSeudonimo"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a><div class="input-field mg-t-0"><input id="" type="text" class="seudonimoInput hide toggleEditSeudonimo"/><a href="#" class="hide toggleEditSeudonimo prefix mg-neg-l-9 tooltipped" data-position="top" data-text="Guardar" onclick="modificarDescripcion()"><i class="material-icons tiny gris-mas-oscuro-text mg-r-10">save</i></a></div></p>
                </div>
                <p>Identificación: <span>33444</span></p>
                <p>Importe: <span>$200,00</span></p>
                <p>Ref. Interna: <span>33322</span></p>
                <p>Datos adicionales: <span>Cuota 1</span></p>
                <a class="btn btn-flat transparent red-text right tooltipped" data-text="Eliminar" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
                <a class="btn btn-flat transparent blue-text right" href="#!"><i class="material-icons left">file_download</i> Descargar</a>
              </aside>
              <div class="red-text block pd-l-30 eliminar-mobile">
                <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                <div class="pd-r-15">
                  <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                  <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                </div>
                <div class="right mg-r-15 mg-b-15">
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat red-text pd-l-10 pd-r-10"><i class="material-icons left">close</i> No eliminar</a>
                  <a href="#!" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                </div>
                <br>
              </div>
            </div>
          </li>
          <li class="facturaItem">
            <div class="collapsible-header noselect">
              <div class="flex align-i-center">
                <!-- <input type="checkbox" class="filled-in" id="filled-in-box-94" onclick="showLi()" disabled />
                <label for="filled-in-box-94"></label> -->
              </div>

              <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/claro.jpg" class="circle responsive-img"></rubro></div>
              <div class="mg-r-15 flex flex-grow align-i-center">
                <span class="blue-text mg-r-15">Claro</span>
                <span class="mg-r-15">Duplica tus minutos para llamadas a <b>Claro</b> recargando por PAGO MIS CUENTA</span>
                <a class="mg-b-5 mg-t-5 btn blue accionDeLaCard waves-effect " href="#!">Duplicar</a>
              </div>
            </div>
          </li>
          <li class="facturaItem">
            <div class="collapsible-header noselect">
              <div class="flex align-i-center">
                <!-- <input type="checkbox" class="filled-in" id="filled-in-box-90" onclick="showLi()" disabled/>
                <label for="filled-in-box-90"></label> -->
              </div>

              <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/aysa.jpg" class="circle responsive-img"></rubro></div>
              <div class="mg-r-15 flex flex-grow align-i-center">
                <span class="mg-b-5 mg-t-5 blue-text mg-r-15"><b>Aysa</b> (<span class="blue-text seudonimoTexto">Agua del Vecino</span>)</span>
                <span class="mg-b-5 mg-t-5 mg-r-15 green-text importe"><b>$1.250,47</b></span>
                <span class="alertita green-text mg-r-15 valign-wrapper"><i class="fa fa-check" aria-hidden="true"></i> pagada</span>
                <span><a class="btn-flat blue-text modal-trigger" href="#imprimir"><i class="fa fa-print tiny" aria-hidden="true"></i>imprimir</a></span>
              </div>
              <div class="flex flex align-i-center flex-j-end"><i class="material-icons more-details left rotateOnClick">expand_more</i></div>
            </div>
            <div class="collapsible-body">
              <aside class="flex align-i-center">
                <p>Fecha:<span>15/08/2017</span></p>
                <p>Hora:<span>14:05:55</span></p>
                <p>Transacción: <span>000100001274</span></p>
                <p>Identificación: <span>33444</span></p>
                <p>Importe: <span>$200,00</span></p>
                <p class="flex">Medio de pago: <span><img src="img/mediosdepago/visa.svg" class="max-30" alt=""></span><span> terminada en 9459</span></p>
                <a class="btn btn-flat transparent blue-text right" href="#!"><i class="material-icons left">file_download</i> Descargar</a>
                <a class="btn btn-flat transparent blue-text right" href="#!"><i class="material-icons left">mail</i> Enviar por Mail</a>
              </aside>
              <div class="red-text block pd-l-30 eliminar-mobile">
                <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                <div class="pd-r-15">
                  <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                  <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                </div>
                <div class="right mg-r-15 mg-b-15">
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat red-text pd-l-10 pd-r-10"><i class="material-icons left">close</i> No eliminar</a>
                  <a href="#!" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                </div>
                <br>
              </div>
            </div>
          </li>
          <li class="facturaItem">
            <div class="collapsible-header noselect">
              <div class="flex align-i-center">
                <input type="checkbox" class="filled-in" id="filled-in-box-92" />
                <label for="filled-in-box-92"></label>
              </div>

              <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/personal.jpg" class="circle responsive-img"></rubro></div>
              <div class="mg-r-15 flex flex-grow align-i-center">
                <span class="mg-b-5 mg-t-5 blue-text mg-r-15"><b>Personal</b> (<span class="blue-text seudonimoTexto">Celu Vieja</span>)</span>
                <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$250</b></span>
                <span class="mg-b-5 mg-t-5 mg-r-15 vto">Vto: 10/12/2017</span>
                <div class="mg-b-5 mg-t-5 switch mg-r-15">
                  <label>
                    <!-- No -->
                    <input type="checkbox" checked="checked" >
                    <span class="lever"></span>
                    Pago automático
                  </label>
                </div>
                <span class="mg-b-5 mg-t-5">Se pagará automáticamente el 10/12/2017</span>
              </div>
              <div class="flex flex align-i-center flex-grow flex-j-end"><i class="material-icons more-details left rotateOnClick">expand_more</i></div>
            </div>
            <div class="collapsible-body">
              <aside class="flex align-i-center">
                <p>Empresa: <span>Metrogas</span></p>
                <div class="flex flex-inline align-i-center">
                  <p class="mg-r-5">Alias: <span class="toggleEditSeudonimo seudonimoTexto" id="">Agua de Casa</span><a href="#" onclick="$('.toggleEditSeudonimo').toggleClass('hide'); $('input.toggleEditSeudonimo').focus();" class="toggleEditSeudonimo"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a><div class="input-field mg-t-0"><input id="" type="text" class="seudonimoInput hide toggleEditSeudonimo"/><a href="#" class="hide toggleEditSeudonimo prefix mg-neg-l-9 tooltipped" data-position="top" data-text="Guardar" onclick="modificarDescripcion()"><i class="material-icons tiny gris-mas-oscuro-text mg-r-10">save</i></a></div></p>
                </div>
                <p>Identificación: <span>33444</span></p>
                <p>Importe: <span>$200,00</span></p>
                <p>Ref. Interna: <span>33322</span></p>
                <p>Datos adicionales: <span>Cuota 1</span></p>
                <a class="btn btn-flat transparent red-text right tooltipped" data-text="Eliminar" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
                <a class="btn btn-flat transparent blue-text right" href="#!"><i class="material-icons left">file_download</i> Descargar</a>
              </aside>


              <div class="red-text block pd-l-30 eliminar-mobile">
                <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                <div class="pd-r-15">
                  <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                  <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                </div>
                <div class="right mg-r-15 mg-b-15">
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat red-text pd-l-10 pd-r-10"><i class="material-icons left">close</i> No eliminar</a>
                  <a href="#!" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                </div>
                <br>
              </div>
            </div>
          </li>
          <li class="facturaItem">
            <div class="collapsible-header noselect">

              <div class="mg-r-15 max-50 hide-on-small-only"><rubro><img src="img/rubros/proveedoresinternet.svg" class="circle responsive-img"></rubro></div>
              <div class="mg-r-15 flex flex-grow align-i-center">
                <span class="mg-b-5 mg-t-5 blue-text mg-r-15"><b>Telecentro</b>  (<span class="blue-text seudonimoTexto">Internet</span>)</span>
                <span class="mg-b-5 mg-t-5 mg-r-15 importe"><b>$650</b></span>
                <span class="mg-b-5 mg-t-5 mg-r-15 vto">Vto: 10/12/2017</span>
                <span class="alertita green-text mg-r-15 valign-wrapper"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> NO HAY FACTURAS PENDIENTES</span>
              </div>
              <div class="flex flex align-i-center flex-j-end"><i class="material-icons more-details left rotateOnClick">expand_more</i></div>
            </div>
            <div class="collapsible-body">
              <aside class="flex align-i-center">
                <div class="flex flex-inline align-i-center">
                  <p>Empresa: <span>Metrogas</span></p>
                  <p class="mg-r-5">Alias: <span class="toggleEditSeudonimo seudonimoTexto" id="">Agua de Casa</span><a href="#" onclick="$('.toggleEditSeudonimo').toggleClass('hide'); $('input.toggleEditSeudonimo').focus();" class="toggleEditSeudonimo"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a><div class="input-field mg-t-0"><input id="" type="text" class="seudonimoInput hide toggleEditSeudonimo"/><a href="#" class="hide toggleEditSeudonimo prefix mg-neg-l-9 tooltipped" data-position="top" data-text="Guardar" onclick="modificarDescripcion()"><i class="material-icons tiny gris-mas-oscuro-text mg-r-10">save</i></a></div></p>
                  <p>Identificación: <span>33444</span></p>
                </div>
                <!-- <p>Importe: <span>$200,00</span></p> -->
                <!-- <p>Ref. Interna: <span>33322</span></p> -->
                <!-- <p>Datos adicionales: <span>Cuota 1</span></p> -->
                <a class="btn btn-flat transparent red-text right tooltipped" data-text="Eliminar" href="#!" onclick="deleteItem(this)"><i class="material-icons left">delete_forever</i> Eliminar</a>
                <!-- <a class="btn btn-flat transparent blue-text right" href="#!"><i class="material-icons left">file_download</i> Descargar</a> -->
              </aside>
              <div class="red-text block pd-l-30 eliminar-mobile">
                <h5 class="red-text left-align flex alig-i-center flex-j-start"><i class="material-icons mg-neg-t-4 mg-r-5">delete_forever</i> Eliminar pago</h5>
                <div class="pd-r-15">
                  <p class="left-align">Estás a punto de <b>eliminar</b> de tus <b>PAGOS</b> Luz de Casa (<b>Edesur</b>). ¿Estás seguro?</p>
                  <p class="left-align">No te preocupes, ésta acción no va a eliminar ésta empresa. Para que no se te informen más facturas de éste servicio tenés que <a href="#definitivamente" class="modal-trigger tooltipped white-text nowrap" data-position="top" data-text="La factura se desvinculará para siempre" data-delay="50"><b class="red-text">eliminarla definitivamente</b></a>.</p>
                </div>
                <div class="right mg-r-15 mg-b-15">
                  <a href="#!" onclick="closeDelete(this)" class="btn-flat red-text pd-l-10 pd-r-10"><i class="material-icons left">close</i> No eliminar</a>
                  <a href="#!" class="btn white-text red pd-l-10 pd-r-10"><i class="material-icons left tooltipped" data-position="top" data-text="La factura volverá a aparecer el mes que viene" data-delay="50">check</i> Eliminar</a>
                </div>
                <br>
              </div>
            </div>
          </li>
        </ul>
