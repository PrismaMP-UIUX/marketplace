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

    $(".card-plus a").click(function() {
        $(this).each(function(){
          $(this).closest(".card").find(".card-title").toggleClass("hide");
          $(this).closest(".card").find(".card-content").toggleClass("card-opened card-closed"); 
        });
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space 