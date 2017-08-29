var $container;
(function($){
  $(function(){
  	//Nav Menu
    $('.button-collapse').sideNav();
    $('.menu-back').click(function(){
    	$('.button-collapse').sideNav('hide')
    })
    $('.dropdown-button').dropdown({
    	hover: true,
    	constrainWidth: false,
    	belowOrigin: true,
    	stopPropagation: true
    	//mouseleave desactivado en maerialize.js line 1801
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space 