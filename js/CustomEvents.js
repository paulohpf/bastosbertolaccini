$( document ).ready(function() {

	var location = window.location.pathname;

	if(location == "/" && window.location.search == "") {
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

    $('form[name="formcontato"]').submit(function() { //Antes de enviar
    	$('.topic.contato .container .btn-primary').prop("disabled", true);

    	let form = $(this).serializeArray();
    	let campos = $(form).length;
    	let camposArray = {};

    	for (var i = 0; i < campos; i++) {
    		camposArray[form[i].name] = form[i].value;
    	}

    	console.log(camposArray);

    	let formJSON = JSON.stringify(camposArray);

    	$.post("sender.php",{
    		json:       formJSON
    	},function(data,status){            
    		$('.topic.contato .container .alert').hide();
    		$('.topic.contato .container .alert').empty();
    		$('.topic.contato .container .alert').removeClass('alert-success, alert-warning');

    		if(data==1){
    			$('.topic.contato .container .alert').addClass('alert-success');
    			$('.topic.contato .container .alert').html('<span>Seu e-mail foi enviado, iremos responder assim que possível.</span>');
    			$('.topic.contato .container .alert').show("slow");
    			$('.topic.contato .container .btn-primary').prop("disabled", false);
    			$("form[name=formcontato]")[0].reset();
    			$("form[name=formcontato]").find('input, textarea').val('');
    		}else{
    			$('.topic.contato .container .alert').addClass('alert-warning');
    			$('.topic.contato .container .alert').html('<span>Seu e-mail não pôde foi enviado, tente novamente mais tarde.</span>');
    			$('.topic.contato .container .alert').show("slow");
    			$('.topic.contato .container .btn-primary').prop("disabled", false);                
    			console.error('Data:'+  data);
    			console.error('Status'+ status);
    		}
    	});
    });  
});