( function( $ ) {

    $(function() {
	    $(".anima-a").css('visibility','hidden');

    });
	$(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
            $('.anima-a').css('visibility','visible').addClass('animated fadeIn');
     	}

	});

} )( jQuery );