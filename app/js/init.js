var $container;
(function($){
  $(function(){
  	//Nav Menu
    $('.button-collapse').sideNav();
    $('.menu-back').click(function(){
    	$('.button-collapse').sideNav('hide')
    })
    $('.dropdown-button').dropdown({
    	hover: false,
    	constrainWidth: false,
    	belowOrigin: true,
    	stopPropagation: true
    	//mouseleave desactivado en maerialize.js line 1801
    });
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $('select').material_select();
  }); // end of document ready
})(jQuery); // end of jQuery name space 