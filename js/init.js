var $container;
var opsDrop = {
	hover: true,
	constrainWidth: false,
	belowOrigin: true,
	alignment: 'right',
	stopPropagation: false
	//mouseleave desactivado en maerialize.js line 1801
};
var opsDropClick = {
	hover: false,
	constrainWidth: false,
	belowOrigin: true,
	alignment: 'right'
	// stopPropagation: false
	//mouseleave desactivado en maerialize.js line 1801
};

(function($) {

	$(function() {

		// Timeout Warning 9000 (9 segundos de muestra) / 180.000 (aparece a los 3 minutos) -- test 6000 // 3000
    setTimeout( function(){Materialize.toast('<span class="valign-wrapper"><i class="material-icons hide-on-small-only">timer</i>&nbsp;&nbsp;¿Seguís ahí? Tu sesión está por expirar</span>', 9000,'grey darken-3')}, 180000 );

    // Timeout Caida 190.000 (aparece a los 3 minutos y 10 segundos y dura 999999999 infinito ) -- test 10.000
    setTimeout( function(){Materialize.toast('<span class="valign-wrapper"><i class="material-icons left hide-on-small-only">hourglass_empty</i>&nbsp;&nbsp;Tu sesión expiró.</span><a href="nologueado_login.php" class="btn-flat transparent white-text"><span class="hide-on-small-only"><i class="material-icons left">exit_to_app</i>&nbsp;&nbsp;</span>Reingresar </a>', 999999999,'grey darken-3')}, 190000 );

		function getParameterByName(name, url) {
			if (!url) url = window.location.href;
			name = name.replace(/[\[\]]/g, "\\$&");
			var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			results = regex.exec(url);
			if (!results) return null;
			if (!results[2]) return '';
			return decodeURIComponent(results[2].replace(/\+/g, " "));
		}

		// query string: ?foo=lorem&bar=&baz
		var buscador = getParameterByName('buscador'); // "lorem"
		var bar = getParameterByName('bar'); // "" (present with empty value)
		var baz = getParameterByName('baz'); // "" (present with no value)
		var qux = getParameterByName('qux'); // null (absent)

		// Pestaña activa en buscar.php
		$("#tabs-swipe-demo").children("li").children("a").removeClass("active");
		if(buscador === "resultados") {
			$("#tabs-swipe-demo").children("li:nth-of-type(1)").children("a").addClass("active");
			$("#test-swipe-1").css("display","block");
		} else if (buscador === "rubros") {
			$("#tabs-swipe-demo").children("li:nth-of-type(2)").children("a").addClass("active");
			$("#test-swipe-2").css("display","block");
		} else {
			$("#tabs-swipe-demo").children("li:nth-of-type(3)").children("a").addClass("active");
			$("#test-swipe-3").css("display","block");
		}

		//Nav Menu
		$(".button-collapse").sideNav({
			edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens,
    });
		$(".menu-back").click(function() {
			$(".button-collapse").sideNav("hide");
		});

		$(".dropdown-button").dropdown(opsDrop);

		$(".carousel").carousel({ fullWidth: true, indicators: true });
		$("select").material_select();
		$("ul.tabs").tabs({ swipeable: false });
		$(".tooltipped").tooltip({ html: true });
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15, // Creates a dropdown of 15 years to control year,
		    format: 'dd/mm/yyyy',
		    today: 'Hoy',
		    clear: 'Limpiar',
		    close: 'Aceptar',
		    closeOnSelect: false // Close upon selecting a date,
		  });
		$(".not-collapse").on("click", function(e) {
			e.stopPropagation();
		});

		$(".modal").modal();
		$('#nuevopago').modal({
			ready: function() { $('ul.tabs').tabs(); }
		});

		$(".dropdownOnClickTo").click(function(){
			$(this).dropdown(opsDropClick);
		});

		$(".main-search").click(function(){
			$(this).children("input").focus();
		});
		$(".main-search input").focus(function(){
			$(this).attr("placeholder", "¿Qué querés pagar?")
			$(this).parent().parent().addClass("active");
		}).blur(function(){
			$(".autocomplete-content").removeClass("z-depth-4");
			$(this).parent().parent().removeClass("active");
			$(this).attr("placeholder", "¿Qué querés pagar?");
			$(this).val("")
		});
		$("#autocomplete-input").blur(function(){
			$(".autocomplete-content").removeClass("z-depth-4");
		});

		$('.dropdown-button + .dropdown-content').on('click', function(event) {
			event.stopPropagation();
		});
		$('.porRubro').on('mousedown', function(event) {
			event.preventDefault();
		});


		$("#mobile-search").click(function(){
			$(this).children("input").focus();
		});
		$("#mobile-search input").focus(function(){
			$(this).attr("placeholder", "¿Qué querés pagar?")
			$('.logo_banco.left').addClass("active");
			$(this).parent().addClass("active");

		}).blur(function(){
			$(".autocomplete-content").removeClass("z-depth-4");
			if ($(".porRubro").data('clicked') != true) {
				$('.logo_banco.left').removeClass("active");
				$(this).parent().removeClass("active");
				$(this).attr("placeholder", " ");
				$(this).val("")
			}
		});

		// nueva clave con focus
		$("#newPass input").focus(function(){
			$(".autoPassValidatorContent").removeClass("hide").addClass("zoomIn animated");
		});
		// nueva clave sin foco
		$("#newPass input").blur(function(){
			$(".autoPassValidatorContent").addClass("hide");
		});

		// repetir nueva clave VACIA con foco
		$("#repeatNewPass input").focus(function(){
			if ($(this).val().length == 0 ) {
				$(this).siblings("i").remove();
			};
		});
		// repetir nueva clave con foco
		$("#repeatNewPass input").on("keyup", function (e) {
			if ($(this).val() == $("#newPass input").val()) {
				$(this).parent().addClass("equalPass");
				$(this).removeClass("invalid").addClass("valid");
			} else {
				$(this).parent().addClass("equalPass");
				$(this).removeClass("valid").addClass("invalid");
			}
			if ($("#newPass input").val() != $(this).val()) {
				$(this).siblings("i").remove();
				$(this).parent().append("<i class='material-icons red-text inside-icon'>close</i>");
				$(this).parent().addClass("equalPass");
				$(this).removeClass("valid").addClass("invalid");
			} else {
				$(this).siblings("i").remove();
				$(this).parent().append("<i class='material-icons green-text inside-icon'>check</i>");
			}
			if ($(this).val() < 1 ) {
				$(this).removeClass('valid invalid');
				$(this).siblings("a").fadeOut();
				$(this).siblings("a").siblings('i').fadeOut();
				// $(this).child("i.material-icons")fadeOut();
				// $(this).child('i').addClass('scale-transition scale-out');
			}
		});
		// repetir nueva clave sin foco
		$("#repeatNewPass input").blur(function(){
			if ($(this).val() != $("#newPass input").val()) {
				$(this).removeClass("valid invalid").parent().addClass("equalPass");
			}
			if ($(this).val().length > 0 ) {
				$(this).parent().addClass("equalPass");
			} else {
				$(this).parent().removeClass("equalPass");
				$(this).siblings("i").remove();
			};
		});

		$(".autoPassValidator input").focus(function(){
			$('.autoPassValidator .tooltipped').trigger("mouseenter.tooltip");
		});
		$(".autoPassValidator input").blur(function(){
			$('.autoPassValidator .tooltipped').trigger("mouseleave.tooltip");
			if($(".passNotValid").length > 0) {
				$(this).removeClass("valid").addClass("invalid");
			} else {
				$(this).removeClass("invalid").addClass("valid");
			}
		});

		$(".onKeyPressValidator input").keyup(function(){
			if($(".passNotValid").length > 0) {
				$(this).removeClass("valid").addClass("invalid");
			} else {
				$(this).removeClass("invalid").addClass("valid");
			}
		});

		$(".autoPassValidator input").on("keyup", function (e) {
			var idQty = $(this).val();

			function validator(cond, resp){
				if(resp === true) {
					$(".condition" + cond).children("i").remove();
					$(".autoPassValidatorContent").children(".condition" + cond).prepend("<i class='material-icons passNotValid tiny red-text text-lighten-2'>info</i>");
					$(".autoPassValidatorContent").children(".condition" + cond).children("i");
				} else if (resp == false){
					$(".condition" + cond).children("i").remove()
					$(".autoPassValidatorContent").children(".condition" + cond).prepend("<i class='material-icons tiny green-text text-lighten-3'>check_circle</i>");
					$(".autoPassValidatorContent").children(".condition" + cond).children("i").addClass("").removeClass("passNotValid");
				} else {
					$(".condition" + cond).children("i").remove()
					$(".autoPassValidatorContent").children(".condition" + cond).prepend("<i class='material-icons tiny'>info</i>");
				}
			}

			// 8 dígitos
			if (idQty.length === 8) {
				validator(1,false);
			} else {
				validator(1, true);
			};

			// Solo numeros
			if (idQty.length > 0) {
				if (idQty !== "" && !$.isNumeric(idQty)) {
					validator(2, true);
				} else if (idQty !== "" && $.isNumeric(idQty)) {
					validator(2,false);
				};
			} else {
				validator(2);
			};

			// No documento (fijar en variable)
			if(idQty.length === 8) {
				var miDoc = 33655034;
				if (idQty == miDoc) {
					validator(3, true);
				} else {
					validator(3,false,false);
				};
			} else {
				validator(3);
			};

			// No cumple (fijar en variable)
			// if(idQty.length === 8) {
			// 	var miCumple = 01021988;
		 //    if (idQty == miCumple) {

		 //    	validator(4, true);
			// 	} else {
			// 		validator(4,false);
			// 	};
			// } else {
			// 	validator(4);
			// };
			// No sequenciales y no consecutivos
			function seq( arr ) {
				var diff1, diff2, result = [];
				for ( var i = 0, len = arr.length; i < len - 2; i += 1 ) {
					diff1 = arr[i] - arr[i+1];
					diff2 = arr[i+1] - arr[i+2];
					equalValues = arr[i]
					if ( Math.abs( diff1 ) === 1 && diff1 === diff2 ) {
						result.push( i );
					}
				}
				var currentNum = arr[0];
				var currentConsecutive = 1;
				var maxConsecutive = 2;
				for (i = 1; i < arr.length; i++) {
					if (arr[i] == currentNum) {
						currentConsecutive++;
						maxConsecutive = Math.max(maxConsecutive, currentConsecutive);
					} else {
						currentNum = arr[i];
						currentConsecutive = 1;
					}
				}
				return result.length > 0 ? result : null;
			}
			function same(arr) {
				for (var idx = 0; idx < arr.length ; idx++) {
					if (arr[idx] == arr[idx+1] && arr[idx+1] == arr[idx+2]){
						return true;
					}
				}
				return false;
			};



			if(idQty.length >= 3) {
				var arrLastChars = idQty.split('').map(Number);
				var result = seq( arrLastChars );
				var sameVal = same(idQty);

				if (result == null && sameVal == false) {
					validator(5,false);
				} else {
					validator(5, true);
				}
			} else {
				validator(5);
			}

			// Primeros y últimos
			if(idQty.length == 8) {
				var primeros = $(this).val().substring(0,4);
				var ultimos = $(this).val().substring(4,8);

				if (primeros == ultimos) {
					validator(6,true);
				} else {
					validator(6,false);
				};
			} else {
				validator(6);
			}

			// Cuando cambies
			// var miClaveAnterior = 13572469;
	  //   if(idQty.length == 8) {
		 //    if (idQty == miClaveAnterior) {
		 //    	validator(7,true);
			// 	} else {
		 //    	validator(7,false);
			// 	};
			// } else {
			// 	validator(7);
			// }

			});

		$(".btn-floating").toggleClass("scale-out scale-in");

		$("input.autocomplete").autocomplete({
			data: {
				EmpresaElectricidad: "img/rubros/electricidad.svg",
				EmpresaAgua: "img/rubros/agua.svg",
				BarrioPrivado: "img/rubros/barriosprivados.svg",
				Impuestos: "img/rubros/impuestos.svg",
				// EstablecimientosEducativos: "img/rubros/establecimientoseducativos.svg",
				MedicinaPrepaga: "img/rubros/prepaga.svg",
				EmergenciasMedicas: "img/rubros/emergencias.svg",
				Recargas: "img/rubros/recargas.svg",
				Patentes: "img/rubros/patentes.svg",
				OperadoresTV: "img/rubros/operadorestv.svg",
				Consorcios: "img/rubros/consorcios.svg",
				Clubes: "img/rubros/clubesyasociaciones.svg",
				Gas: "img/rubros/gas.svg",
				Coperativas: "img/rubros/cooperativas.svg",
				Donaciones: "img/rubros/donaciones.svg",
				ServiciosWeb: "img/rubros/serviciosweb.svg",
				Seguridad: "img/rubros/seguridad.svg",
				ProveedorInternet: "img/rubros/proveedoresinternet.svg",
				SegurosDeVida: "img/rubros/segurodevida.svg",
				TarjetasCredito: "img/rubros/tarjetasdecredito.svg",
				Seguros: "img/rubros/seguros.svg",
				SegurosDeRetiro: "img/rubros/segurosderetiro.svg",
				Telefonía: "img/rubros/telefonia.svg",
				ViajesYTurismo: "img/rubros/viajesyturismo.svg",
				OtrosServicios: "img/rubros/otrosservicios.svg",
				Prestamos: "img/rubros/prestamos.svg",
				PlanesDeAhorro: "img/rubros/planesdeahorro.svg",
				SolicitudesDeInformes: "img/rubros/solicituddeinformes.svg",
				Afip: "img/rubros/afip.svg",
				VEP: "img/rubros/afip.svg",
				// Apple: null,
				ABSA: "img/rubros/agua.svg",
				"Cruz Roja": "img/rubros/donaciones.svg",
				Personal: "img/rubros/recargas.svg",
				// Agua de los Andes: null,
				// Aguas Catamarca SAPEM: null,
				// Aguas Cordobesas: null,
				// Aguas de Balcarce: null,
				// Aguas de Campana: null,
				// Aguas de Corrientes: null,
				// Aguas de Formosa: null,
				// Aguas de Santiago: null,
				// Aguas de Zárate SAPEM: null,
				// Aguas del Norte: null,
				// Aguas Mendocinas: null,
				// Aguas Riojanas SAPEM: null,
				// Aguas Rionegrinas: null,
				// Aguas Santafesinas: null,
				Aquavita: "img/rubros/agua.svg",
				AySA: "img/rubros/agua.svg",
				// C de Trabajo Sudeste: null,
				// Coop Agua de Zavalla: null,
				// Coop de Agua Jacobacci: null,
				// Coparqui: null,
				Google: 'https://placehold.it/250x250',
				// COSEGO Aguas de Gorina: null,
				// COSPAL: null,
				// EAMSEP Zapala: null,
				// EDOS Concordia: null,
				// El Faldeo: null,
				// EMAV Las Varillas: null,
				// EPAS Neuquén: null,
				// Irrigación Mendoza: null,
				// Junta Vecinal Melipal: null,
				// JV Parque Playa Serena: null,
				// Lumaco: null,
				// Obras Sanit V Mercedes: null,
				// Obras Sanitarias MDP: null,
				// OSSE San Juan: null,
				// SAMEEP Chaco: null,
				// AMSA Misiones: null,
				// SAT SAPEM: null,
				// Servicio Integral Agua: null,
				// Sudamericana de Aguas: null,
				// Microsoft: null,
				Google: "https://placehold.it/250x250"
			},
			limit: 5, // The max amount of results that can be shown at once. Default: Infinity.
			onAutocomplete: function(val) {
				$(".autocomplete").val("");
				if(val === "VEP") {
					$('.buscador-detalles').modal();
					$('#bd-1').modal('open');
				}
				if(val === "ABSA") {
					$('.buscador-detalles').modal();
					$('#bd-2').modal('open');
				}
				if(val === "Cruz Roja") {
					$('.buscador-detalles').modal();
					$('#bd-3').modal('open');
				}
				if(val === "AySA") {
					$('.buscador-detalles').modal();
					$('#bd-4').modal('open');
				}
				if(val === "Personal") {
					$('.buscador-detalles').modal();
					$('#bd-5').modal('open');
				}
				if(val === "Ver más...") {
					window.location.href = 'buscar.php?buscador=resultados';
				}
			},
			minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
		});
		$('.autocomplete-content').on('mousedown', function(event) {
			event.preventDefault();
		});
		$("input.autocomplete").keyup(function(){


			if ($(this).val() != "") {
				$(".autocomplete-content").addClass("z-depth-4");
			} else {
				$(".autocomplete-content").removeClass("z-depth-4");
			};
			if($(this).val() != "" && $(".busqueda-avanzada").length != 1) {
				$(this).siblings(".autocomplete-content.dropdown-content").append("<li class='busqueda-avanzada flex flex-j-center relative'><span class='grey-text pd-15 mg-0'>Ver más...</span></li>")
			} else if ($(".busqueda-avanzada").length == 1) {
			} else {
				$(".busqueda-avanzada").remove();
			}
		});

		$('form.tarjeta').card({
			container: '.card-wrapper',
			width: 280,


			formSelectors: {
				numberInput: "input#tarjeta", // optional — default input[name="number"]
				expiryInput: "input#mes, input#anio", // optional — default input[name="expiry"]
				cvcInput: "input#seguridad", // optional — default input[name="cvc"]
				nameInput: 'input[name="first-name"], input[name="last-name"]'
			}
		});

		$(".rubro-detalle").click(function(){
			$(this).children("i").toggleClass("active");
		});

		$(window).scroll(function() {
			var hT = $('.main-footer header').offset().top + 36,
			hH = $('.main-footer header').outerHeight() + 36,
			wH = $(window).height(),
			wS = $(this).scrollTop();
			if (wS > (hT-wH - 1)) {
				// $("#prisma-actions").css({
				// 	bottom: "auto",
				// 	top: "-45px",
				// 	position: "absolute"
				// }).appendTo(".main-footer");
			} else {
				$("#prisma-actions").attr("style", " ");
			}
		});

		$("#main-footer-collpasible").click(function(){
			if( $("#prisma-actions").length > 0 ){
				$("#prisma-actions").css({
					bottom: "auto",
					top: "-45px",
					position: "absolute"
				}).appendTo(".main-footer");
				//$('#prisma-actions > ul > li > a:lastoftype').addClass('mobile-fab-tip')
			}
		});

		$('.tooltipped').each(function(){
			var thisTooltip = $(this);
			thisTooltip.tooltip({
				delay: 50,
				tooltip: function() {
					var position = thisTooltip.data("position") || "";
					return "<div class='tooltipCustomized "+position+"-tooltip'>"+thisTooltip.data("text")+"</div>"
				},
				html: true})
			$('.tooltipCustomized').parent().addClass("material-tooltipCustomized");

			if ($(this).hasClass("toHideInMobile")) {
				$('.tooltipCustomized').addClass("hide-on-small-only");
			};
			$(document).click(function(){
				$(".autoTooltip").trigger("mouseleave");
			});
		});

		// $(".rotateOnClick").click(function() {
		// 	if ($(this).closest("#usuario").length == 1) {
		// 		if ( $("#usuario .rotateOnClick").hasClass("active") ) {
		// 			$("#usuario .rotateOnClick").removeClass("active")
		// 		} else {
		// 			$("#usuario .rotateOnClick").addClass("active")
		// 		}
		// 	} else {
		// 		if ($(this).closest(".collapsible-header").length == 0) {
		// 			$(".rotateOnClick").not(this).removeClass("active");
		// 			$(this).toggleClass("active");
		// 		};
		// 	}
		// });
		$("#usuario").click(function() {
			if ( $("#usuario .rotateOnClick").hasClass("active") ) {
				$("#usuario .rotateOnClick").removeClass("active")
			} else {
				$("#usuario .rotateOnClick").addClass("active")
			}
		});
		$("#usuario").mouseenter(function() {
			if ($(this).find(".rotateOnClick").closest("#usuario").length == 1) {
				if ( $(this).find(".rotateOnClick").hasClass("active") ) {
					$(this).find(".rotateOnClick").removeClass("active")
				} else {
					$(this).find(".rotateOnClick").addClass("active")
				}
			} else {};
		});
		$("#usuario").mouseleave(function() {
			if ($(this).find(".rotateOnClick").closest("#usuario").length == 1) {
				if ( $(this).find(".rotateOnClick").hasClass("active") ) {
					$(this).find(".rotateOnClick").removeClass("active")
				}
			} else {};
		});
		$(".rotateOnClick").closest(".collapsible-header").on("click", function() {
			$(".rotateOnClick").not($(this).find(".rotateOnClick")).removeClass("active");
			$(this).find(".rotateOnClick").toggleClass("active");
		});
		$("#ordenarMonto").on("click", function() {
			$(".rotateOnClick").not($(this).find(".rotateOnClick")).removeClass("active");
			$(this).find(".rotateOnClick").toggleClass("active");
		});
		$("#ordenarFecha").on("click", function() {
			$(".rotateOnClick").not($(this).find(".rotateOnClick")).removeClass("active");
			$(this).find(".rotateOnClick").toggleClass("active");
		});


		$(".autoTooltip").trigger("mouseenter");
		var width = 0;


		$('#prisma-actions').on("click", function(){
			if ($(this).hasClass('active')) {
				$(this).closeFAB();
			} else {
				$(this).openFAB();
			}
		});

		$('#prisma-actions-mobile').on("click", function(e){
			if ($(this).hasClass('active') && e.target != $(this).find('i.material-icons')[0]) {
				$(this).closeFAB();
			}
		});

		// Funciones del buscador
		$('select').not('.disabled').material_select();

		var rubrosContenedorHeight = 0;
		var rubroPosition = 0;
		var rubroWidth = 0;

		$('.rubros-por-rubro > a').click(function(){

		  // Seleccionar rubro
		  if ($(this).hasClass("rubroNoActivo")) {
		    rubrosContenedorHeight = $(".rubros-por-rubro").height();
		    rubroPosition = $(this).position();
		    chipTextW =$(this).find("div p").width();
		    rubroWidth = $(this).width() + 30;

		    $(this).next().css("margin-left", rubroWidth);

		    $(this).removeClass("rubroNoActivo");
		    $(this).addClass("rubroActivo ");

		    $(this).css({
		      "position": "absolute",
		      "top" : rubroPosition.top,
		      "left" : rubroPosition.left
		    });
		    $('.rubros-por-rubro > a').not(this).fadeOut();
		    $(".rubros-por-rubro").height(rubrosContenedorHeight);

		    //Escondo el dropwdown de rubros
		    $('#test-swipe-2 .row:first-of-type').hide();

		    // Cambia las coordenadas de la posición a 0 para que se produzca la animación
		    $(this).delay(200).queue(function(next){

		      $(this).css({
		        "top" : 0,
		        "left" : 0
		      });
		      next();
		    }).delay(100).queue(function (next) {
		      $(".rubros-por-rubro").height(70);
		      next();
		    });

		    // Transform to chip animation
		    $(this).children("div").width(chipTextW + 60);

		    // Habilita subrubro
		    $(".subrubro").removeClass("hide");
		  }

		  // Cerrar rubro
		  else {

		  	//muestro el dropwdown de rubros
		  	$('#test-swipe-2 .row:first-of-type').show();

		    $(this).children("div").attr("style", "");

		    $(".rubros-por-rubro").height(rubrosContenedorHeight);
		    $(this).delay(500).queue(function(next){
		      $(this).css({
		        "position": "static"
		      });
		      next();
		    });
		    $('.rubros-por-rubro > a').attr("style","");

		    $(this).removeClass("rubroActivo");
		    $(this).addClass("rubroNoActivo");

		    // Deshabilita subrubro y empresa
		    $(".subrubro").addClass("hide");
		    $(".empresa-del-rubro").addClass("hide");
		  }
		});

		// Habilita empresa
		$('.subrubro').on('change', function(e) {
		  $(".empresa-del-rubro").removeClass("hide");
		});

		// Dispara modal de empresa
		$("#seleccionarEmpresa").on('change', function(e){
		  var empresaSeleccionada = $(this).val();

		  if(empresaSeleccionada == 1) {
		    $('.buscador-detalles').modal();
		    $('#bd-1').modal('open');
		  }
		  if(empresaSeleccionada == 2) {
		    $('.buscador-detalles').modal();
		    $('#bd-2').modal('open');
		  }
		  if(empresaSeleccionada == 3) {
		    $('.buscador-detalles').modal();
		    $('#bd-3').modal('open');
		  }
		  if(empresaSeleccionada == 4) {
		    $('.buscador-detalles').modal();
		    $('#bd-4').modal('open');
		  }
		  if(empresaSeleccionada == 5) {
		    $('.buscador-detalles').modal();
		    $('#bd-5').modal('open');
		  }
		})
		$('.cantidad').hide();

		$('#swipe-pagos #seleccionDeRubro .rubros > a').click(function(){
		  $("#seleccionDeRubro").addClass("hide");
		  $("#seleccionEmpresa").removeClass("hide");
		  var rubroText = $(this).children("p").text();
		  $(".chip-rubro").text(rubroText);
		});

		$('#swipe-pagos #seleccionEmpresa a').click(function(){
		  $("#seleccionEmpresa").addClass("hide");
		  $("#historial-main").removeClass("hide");

		  var empresaText = $(this).children("span").text();
		  $(".chip-empresa").text(empresaText);
		});

		$('#swipe-pagos #historial-main .rubros > a').click(function(){
		  $("#seleccionDeRubro").removeClass("hide");
		  $("#historial-main").addClass("hide");
		});

		$("#trigger-filtros-mobile").click(function(){
		  $("#filtros-mobile").toggleClass("hide");
		});
		if($('input#amount')){
			$('input#amount').focus(function(){
					$('input#amount').inputmask({ alias : "decimal", prefix: '$', digits:0, rightAlign:false, groupSparator:'.' });
		
			});
		}
	}); // end of document ready
})(jQuery); // end of jQuery name space

function openSearch(){
	$(".main-search").addClass("active");
	$(".main-search input").focus();
}

/**
 * Number.prototype.format(n, x, s, c)
 *
 * @param integer n: length of decimal
 * @param integer x: length of whole part
 * @param mixed   s: sections delimiter
 * @param mixed   c: decimal delimiter
 */
 Number.prototype.format = function(n, x, s, c) {
 	var re = "\\d(?=(\\d{" + (x || 3) + "})+" + (n > 0 ? "\\D" : "$") + ")",
 	num = this.toFixed(Math.max(0, ~~n));

 	return (c ? num.replace(".", c) : num).replace(
 	                                               new RegExp(re, "g"),
 	                                               "$&" + (s || ",")
 	                                               );
 };

 function collap(e) {
 	$(".collapsible").collapsible("open", e);
 }

 $(".material-icons[for]").on("mousedown", function() {
 	if (is_touch_device()) {
 		//Para la segunda vez que hace click en mobile
 		if ($("#" + this.attributes["for"].value).prop("type") == "text") {
 			$("#" + this.attributes["for"].value).prop("type", "password");
 		}
 		else {
 			$("#" + this.attributes["for"].value).prop("type", "text");
 		}
 	}
 	else
 		$("#" + this.attributes["for"].value).prop("type", "text");
 });

 $(".material-icons[for]").on("mouseup", function() {
 	if (!is_touch_device())
 		$("#" + this.attributes["for"].value).prop("type", "password");
 });

 $(".material-icons[for]").on("mouseleave", function() {
 	if (!is_touch_device())
 		$("#" + this.attributes["for"].value).prop("type", "password");
 });

function is_touch_device() {
  return 'ontouchstart' in window        // works on most browsers
      || navigator.maxTouchPoints;       // works on IE10/11 and Surface
};

$('#mobileNuevoPago').click(function() {
	$('#nuevopago').modal('open');
});

$('#mobileAltaTarjeta').click(function() {
	window.location.href = 'alta_tarjeta.php';
});

$('#mobileSalir').click(function() {
	$('#salir').modal('open');
});

$("body").on("contextmenu", '#mobileNuevoPago, #mobileAltaTarjeta, #mobileSalir', function() { return false; });

$('input[name="donation"][type="radio"]').on('click', function(e) {
  var target = $(this).data('target'),
    $target = $(target);
  $target.siblings().addClass('hide').end().removeClass('hide');
});