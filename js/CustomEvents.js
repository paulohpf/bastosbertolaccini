$( document ).ready(function() {

	var location = window.location.pathname;

	if(location == "/") {
	    function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.navbar .navbar-nav li, .navbar .navbar-header').each(function () {
	        var currLink = $(this).find('a');
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top - 123 <= scrollPos && refElement.position().top + refElement.outerHeight() > scrollPos) {
	            $('.navbar-nav li').removeClass("active");
	            $(this).addClass("active");

		        if($(currLink.attr('href')).hasClass('active') == false){
		        	setTimeout(function(){
		        		$(currLink.attr('href')).addClass('active');
		        	}, 500);
		        }     
	        }
	        else{
	            $(this).c
	        }
	    });
		}
		
	    $(".scrollSuave").click(function(event){        
	        event.preventDefault();
	        $('html,body').animate({scrollTop:$(this.hash).offset().top - 93}, 800);
	   });
	} else {
		console.log("..");
	}

	$(document).on("scroll", onScroll);

	var $doc = $('html, body');
	//Links ativos
	$('.navbar-nav li, .navbar-header').click(function() {
	  $('.navbar-nav li').removeClass('active');
	  $(this).addClass( 'active' );
		
	});

	$('.navbar-nav li a').attr("href");

	$('.navbar-nav > li > a').each(function () {
		var href = this.href;
		var res = href.split("/");
	});
});