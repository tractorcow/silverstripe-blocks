$(document).ready(function() {  

	/* Top Menu Dropdown Toggle */
	var topMenu = $('#TopBar .Menu .WithChildren');
	topMenu.mouseenter( function() {
		$(this).find('ul').show();
	});
	topMenu.mouseleave( function() {
		$(this).find('ul').hide();
	});

	/* Header Menu Dropdown Toggle */
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

	/* Tabs */
	$(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).slideToggle();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).slideToggle();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
});  