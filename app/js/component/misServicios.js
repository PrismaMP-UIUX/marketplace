(function($){
  $(function(){
  	//Nav Menu 
    $('.misServicios > header button').click(function(){
      $('.misServicios > header button').closest("button").removeClass("active");
    	$(this).addClass("active");

      if( $(this).hasClass("vistaCard") ) {
        $('.misServicios > ul').removeClass("list").addClass("cards");
      } else {
        $('.misServicios > ul').removeClass("cards").addClass("list");
      }
    }) 
  }); // end of document ready
})(jQuery); // end of jQuery name space 