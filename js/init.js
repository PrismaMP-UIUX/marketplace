var $container;
var opsDrop = {
    hover: true,
    constrainWidth: false,
    belowOrigin: true,
    stopPropagation: false
    //mouseleave desactivado en maerialize.js line 1801
};
(function($){
  $(function(){
  	//Nav Menu
    $('.button-collapse').sideNav();
    $('.menu-back').click(function(){
    	$('.button-collapse').sideNav('hide')
    })

    $('.dropdown-button').dropdown(opsDrop);

    $('.carousel').carousel({fullWidth: true, indicators: true});
    $('select').material_select();
    $('ul.tabs').tabs({swipeable: false});
    $('.tooltipped').tooltip({html: true});
    $(".not-collapse").on("click", function(e) { e.stopPropagation(); });

    $(".modal").modal();

    $(".btn-floating").toggleClass("scale-out scale-in")

  }); // end of document ready
})(jQuery); // end of jQuery name space


/**
 * Number.prototype.format(n, x, s, c)
 *
 * @param integer n: length of decimal
 * @param integer x: length of whole part
 * @param mixed   s: sections delimiter
 * @param mixed   c: decimal delimiter
 */
Number.prototype.format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
        num = this.toFixed(Math.max(0, ~~n));

    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};

function collap(e){
    $('.collapsible').collapsible('open', e);
}

$(".material-icons[for]").on("mousedown", function(){
    $("#"+this.attributes["for"].value).prop("type", "text");
    console.log("over");
});

$(".material-icons[for]").on("mouseup", function(){
    $("#"+this.attributes["for"].value).prop("type", "password");
    console.log("leave");
});

$(".material-icons[for]").on("mouseleave", function(){
    $("#"+this.attributes["for"].value).prop("type", "password");
    console.log("leave");
});
