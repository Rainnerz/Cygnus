var $document = $(document),
	$element = $('.navbar-scroll'),
	navbarSolid = 'navbar-solid';
	navbarTransparent = 'transparent';
	$document.scroll(function() {
		if ($document.scrollTop() >= 40) {
			$element.addClass(navbarSolid);
			$element.removeClass(navbarTransparent);
		} else {
			$element.addClass(navbarTransparent);
			$element.removeClass(navbarSolid);
		}
	});
	$(document).ready(function(){ 
		$(window).scroll(function(){ 
			if ($(this).scrollTop() > 100) { 
				$('#scroll').fadeIn(); 
			} else { 
				$('#scroll').fadeOut(); 
			} 
		}); 
		$('#scroll').click(function(){ 
			$("html, body").animate({ scrollTop: 0 }, 1100); 
			return false; 
		}); 
	});
	$(document).ready(function(){
		$('.slider').slider();
	});
	$(document).ready(function(){
		$('.sidenav').sidenav();
	});
	$(document).ready(function(){
		$('.parallax').parallax();
	});
	$(document).ready(function(){
		$('.tooltipped').tooltip();
	});