$(document).ready(function() {  
	
	// Top menu dropdown toggle
	var topMenu = $('#TopBar .Menu .WithChildren');
	topMenu.mouseenter( function() {
		$(this).find('ul').show();
	});
	topMenu.mouseleave( function() {
		$(this).find('ul').hide();
	});

	// Header menu dropdown toggle
	var $headerMenu = $('#Header .Menu');
	$headerMenu.find('.WithChildren').click( function(e){
		e.preventDefault();
		/*var navString = '#'+$(this).data('ref');
		var $navMenu = $(navString).parent('nav');
		$navMenu.slideToggle('fast');*/
		//$headerMenu.find('li ul').slideUp('fast');
		var $subNav = $(this).find('ul');
		$subNav.slideToggle('fast');
	});
});  