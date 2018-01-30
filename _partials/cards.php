          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro>
                    <div class="rubro operadorestv circle border-grey white width-100 z-depth-2 activator"></div>
                    <!-- <img src="img/rubros/operadorestv.svg" class="circle activator"> -->
                  </rubro>
                  <span class="card-title">Cablevisión</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias seudonimoTexto"><b>Cable mamá</b></p>
                <span class="monto"><b>$450</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                </div>
                <p>
                  <span class="alertita red-text"><i class="fa fa-hourglass-half" aria-hidden="true"></i> QUEDAN 3 DÍAS</span>
                </p>
                <input type="checkbox" class="filled-in" id="filled-in-box-1" onclick="showLi()"/>
                <label for="filled-in-box-1" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Alias: <div style="display: inline-block"><span class="toggleEditSeudonimo seudonimoTexto" id="">Agua de Casa</span>  <a href="#" onclick="$('.toggleEditSeudonimo').toggleClass('hide');$('input.toggleEditSeudonimo').focus();" class="toggleEditSeudonimo"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a><div class="input-field mg-t-0"><input id="seudonimoInput" type="text" class="hide toggleEditSeudonimo"/><a href="#" class="hide toggleEditSeudonimo prefix icon-guardar tooltipped" data-position="top" data-text="Guardar" onclick="modificarDescripcion()"><i class="material-icons tiny gris-mas-oscuro-text">save</i></a></div></div></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/11/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a class="btn blue accionDeLaCard modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable vencida">
              <div class="servicio valign-wrapper grey lighten-1">
                <div class="valign-wrapper">
                  <rubro>
                    <div class="rubro recargas circle border-grey white width-100 z-depth-2 activator"></div>
                  </rubro>
                  <span class="card-title">Claro</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator" disabled><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias"><b>Mi celu</b></p>
                <span class="monto"><b>$850</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Venció el <time>01/09/17</time></p>
                  <span class="alertita red-text"><i class="fa fa-frown-o" aria-hidden="true"></i> VENCIDA</span>
                </div>
                <input type="checkbox" class="filled-in" id="filled-in-box-2" onclick="showLi()" disabled/>
                  <label for="filled-in-box-2" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <li>Empresa: <span>Claro</span></li>
                  <li>Alias: <span>Claro</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$850,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/12/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a href="pagar.php" class="btn orange darken-1" disabled>Pagar</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/metrogas.png" class="circle"></rubro>
                  <span class="card-title">Metrogas</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias"><b>Gas tia mardel</b></p>
                <span class="monto"><b>$1200</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                  <span class="alertita red-text"><i class="fa fa-hourglass-half" aria-hidden="true"></i> QUEDAN 3 DÍAS</span>
                </div>
                <input type="checkbox" class="filled-in" id="filled-in-box-3" onclick="showLi()"/>
                <label for="filled-in-box-3" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <li>Empresa: <span>AySA</span></li>
                  <li>Alias: <div style="display: inline-block"><span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></div></li>
                  <li>Identificación: 33444</li>
                  <li>Importe: <b>$450,00</b></li>
                  <li>Ref. Interna: 33322</li>
                  <li>Vencimiento: 10/11/17</li>
                  <li>Datos adic.: Cuota 1</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a class="btn blue accionDeLaCard modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/afip.svg" class="circle" sytle="border-radius: none;"></rubro>
                  <span class="card-title">Afip</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias"><b>Monotributo</b></p>
                <span class="monto"><b>$450</b></span>
                <div class="hide-on-small-only vencimiento">
                  <p>Vence el <time>10/11/17</time></p>
                </div>
                  <input type="checkbox" class="filled-in" id="filled-in-box-4" onclick="showLi()"/>
                  <label for="filled-in-box-4" class="mg-t-10"><span>AGREGAR AL PAGO</span></label>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue accionDeLaCard">Pagar Afip</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/unicef.jpg" class="circle"></rubro>
                  <span class="card-title">Donar a Unicef</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                  <span class="monto"><b>$450</b></span>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue accionDeLaCard">Donar</a>
              </div>
            </div>
          </div>


          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/personal.jpg" class="circle"></rubro>
                  <span class="card-title">Personal</span>
                </div>
              </div>
              <div class="card-content">
                <p>Aviso propia</p>
                <p>Duplica tus minutos para llamadas a personal recargando por PagoMisCuentas</p>
              </div>
              <div class="card-action">
                  <a href="" class="btn blue accionDeLaCard">Duplicar</a>
              </div>
            </div>
          </div>

          <!-- <div class="col s12 m8 l6 grid-item facturaItem ">
            <div class="card grilla white hoverable">
              <div class="card-image">
                <img src="img/pub_p.png">
              </div>
              <div class="card-content">
                <p>Nunca te aburras con personal recargando por PagoMisCuentas</p>
              </div>
              <div class="card-action">
                <a href="" class="btn blue accionDeLaCard">Recargar!</a>
              </div>
            </div>
          </div> -->

          <div class="col grid-item facturaItem ">
            <div class="card grilla white hoverable">
              <div class="card-image">
                <img src="img/pub.jpg">
              </div>
              <div class="card-action">
                  <a href="" class="btn blue accionDeLaCard">Lo quiero!</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/personal.jpg" class="circle"></rubro>
                  <span class="card-title">Celu vieja</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias"><b>Personal</b></p>
                <span class="monto"><b>$450</b></span>
                <p>Esta factura se pagará automáticamente</p>
                <span class="alertita red-text"><i class="material-icons tiny">event</i> el <time>10/11/17</time></span>
              </div>
              <div class="card-action">
                  <div class="switch">
                    <label>
                      <!-- No -->
                      <input type="checkbox" checked="checked" >
                      <span class="lever"></span>
                      Pago automático
                    </label>
                  </div>
              </div>
            </div>
          </div>



          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro>
                    <div class="rubro recargas circle border-grey white width-100 z-depth-2 activator"></div>
                  </rubro>
                  <span class="card-title">Movistar</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias"><b>Mi celu</b></p>
                <p class="grey-text">1149704224</p>
                <span class="alertita-multiline">
                  <span class="alertita green-text space-normal max-220"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> NO HAY FACTURAS PENDIENTES</span>
                </span>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <!-- <li>Empresa: <span>AySA</span></li> -->
                  <li>Alias: <div style="display: inline-block"><span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></div></li>
                  <li>Identificación: 33444</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a class="btn blue accionDeLaCard modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>

          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro><img src="img/metrogas.png" class="circle"></rubro>
                  <span class="card-title">Metrogas</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias"><b>Gas tia mardel</b></p>
                <p class="grey-text">(0420013573459)</p>
                <div class="hide-on-small-only vencimiento">
                  <p>Próxima factura: <time>10/11/17</time></p>
                </div>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <!-- <li>Empresa: <span>AySA</span></li> -->
                  <li>Alias: <div style="display: inline-block"><span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></div></li>
                  <li>Identificación: 33444</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <!-- <div class="card-action">
                  <a class="btn red modal-trigger" href="#pago-rapido">Eliminar</a>
              </div> -->
            </div>
          </div>
          <div class="col grid-item facturaItem">
            <div class="card grilla white hoverable">
              <div class="servicio valign-wrapper fondo-card-gris">
                <div class="valign-wrapper">
                  <rubro>
                    <div class="rubro agua circle border-grey white width-100 z-depth-2 activator"></div>
                  </rubro>
                  <span class="card-title">Aguas Argentinas de la Tia Rosa</span>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light activator"><i class="material-icons">more_vert</i></a>
              </div>
              <div class="card-content">
                <p class="alias"><b>Mi celu</b></p>
                <p class="grey-text">(1149704224)</p>
              </div>
              <div class="card-reveal">
                <span class="card-title"><i class="material-icons right grey-text">close</i></span>
                <ul>
                  <!-- <li>Empresa: <span>AySA</span></li> -->
                  <li>Alias: <div style="display: inline-block"><span>Agua de Casa</span> <a href="#"><i class="material-icons tiny gris-mas-oscuro-text">create</i></a></div></li>
                  <li>Identificación: 33444</li>
                </ul>
                <p class="right-align"><a class="btn-flat waves-effect red-text modal-trigger tooltipped" data-text="Eliminar" href="#eliminar"><i class="material-icons left">delete_forever</i> Eliminar</a></p>
              </div>
              <div class="card-action">
                  <a class="btn blue accionDeLaCard modal-trigger" href="#pago-rapido">Pagar</a>
              </div>
            </div>
          </div>
