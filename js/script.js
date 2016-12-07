( function( $ ) {

    $(function() {
	    $(".anima-a").css('visibility','hidden');
	    $(".anima-b").css('visibility','hidden');
	    $(".anima-c").css('visibility','hidden');
    });
	$(window).scroll(function() {
		var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
        	$('.anima-b').css('visibility','visible').addClass('animated fadeInRight')
            $('.anima-a').css('visibility','visible').addClass('animated fadeInLeft').one(animationEnd, function(){
                $('.anima-c').css('visibility','visible').addClass('animated fadeIn');
            });
     	}

	});

} )( jQuery );