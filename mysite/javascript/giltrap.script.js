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
	
	$('html').click(function() {
		$headerMenu.find('ul ul:visible').slideUp(function(){
			$headerMenu.find('.active').removeClass('active');
		});
	});

	$headerMenu.click(function(e){
	    e.stopPropagation();
	});

	$headerMenu.find('.WithChildren').click(function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).find('ul').slideUp();
			$(this).removeClass('active');
		}
		else {
			$headerMenu.find('.active ul').slideUp();
			$headerMenu.find('.active').removeClass('active');
			$(this).addClass('active');
			$(this).find('ul').slideDown();
		}
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