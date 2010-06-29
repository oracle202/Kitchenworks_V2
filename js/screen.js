jQuery(document).ready(function($) {
	
	// Font Replacement
	Cufon.replace('.menu .nav > li > a', { hover: true });
	Cufon.replace('#slider-full-width h2, #slider h2', { hover: true });
	Cufon.replace('#home-3-sections h3', { hover: true });
	Cufon.replace('#sub-header h2');
	Cufon.replace('.aside h3, #products-aside h3', { hover: true });	
	Cufon.replace('.page h1, .page h2, .page h3, .page h4, .page h5, .page h6', { hover: true });
	Cufon.replace('.hentry h1, .hentry h2, .hentry h3, .hentry h4, .hentry h5, .hentry h6', { hover: true });
	Cufon.replace('#page-portfolio2 h3, #page-portfolio3 h3', { hover: true });
	Cufon.replace('#page-portfolio-detail h2');
	Cufon.replace('#products-main h2, #products-main h3', { hover: true });
	Cufon.replace('#page-product-detail h2');
	Cufon.replace('#footer-widgets h3', { hover: true });
	Cufon.now();
	
	
	// Dropdown menu using superfish	
	$('.nav').supersubs({
		minWidth: 		9,						// requires em unit.
		maxWidth: 		25,						// requires em unit.
		extraWidth: 	0						// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
    }).superfish({
		hoverClass:		'nav-hover',			// the class applied to hovered list items 
	//	pathClass:		'overideThisToUse',		// the class you have applied to list items that lead to the current page 
		pathLevels:		1,						// the number of levels of submenus that remain open or are restored using pathClass 
		delay:			400,					// the delay in milliseconds that the mouse can remain outside a submenu without it closing 
		animation:		{opacity:'show'},		// an object equivalent to first parameter of jQuery’s .animate() method 
		speed:			'normal',				// speed of the animation. Equivalent to second parameter of jQuery’s .animate() method 
		autoArrows:		false,					// if true, arrow mark-up generated automatically = cleaner source code at expense of initialisation performance 
		disableHI:		false					// set to true to disable hoverIntent detection 
	});
	
	
	/* Ajax Contact form validation and submit */
	$('form#contactForm').submit(function() {
		$('form#contactForm .error').remove();
		var hasError = false;
		$('.requiredField').each(function() {
			$(this).parent().parent().find('.field-error').remove();
			if(jQuery.trim($(this).val()) == '') {
				$(this).addClass('input-error');
				hasError = true;
			} else if($(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($(this).val()))) {
					$(this).addClass('input-error');
					hasError = true;
				}
			}
		});
		if(!hasError) {
			$('form#contactForm #submit').fadeOut('normal', function() {
				$(this).parent().append('<p class="highlight">Sending your message...</p>');
			});
			var formInput = $(this).serialize();
			$.ajax({
				type: "POST",
			   	url: $(this).attr('action'),
			   	data: formInput,
			   	success: function(data){
					$('#contact-form').fadeOut("normal", function() {				   
						$(this).before('<p class="highlight"><strong>Thanks!</strong> Your email was successfully sent. I check my email all the time, so I should be in touch soon.</p>');
					});
			   	},
				error: function(data){
					$('#contact-form').fadeOut("normal", function() {
						$(this).before('<p class="highlight"><strong>There was an error sending your message.</strong> Please try again later.</p>');
					});
			   	}
			});
		}
		
		return false;
		
	});
	
	$('.requiredField').blur(function() {
		if(jQuery.trim($(this).val()) != '' && !$(this).hasClass('email')) {
			$(this).removeClass('input-error');
		} 
	});
	
	$('.email').blur(function() {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if(emailReg.test(jQuery.trim($(this).val()))) {
			$(this).removeClass('input-error');
		} 
	});	
	
	
	/* Search Watermark */
	var watermark = "keywords...";
	if ($("#sub-header-search .search").val() == "") {
		$("#sub-header-search .search").val(watermark);
	}
	
	$("#sub-header-search .search")
		.focus(	function() {
			if (this.value == watermark) {
				this.value = "";
			}
		})
		.blur(function() {
			if (this.value == "") {
				this.value = watermark;
			}
		});
		
		
	// Image preloading and display a open icon when mouse hover lightbox images
    $('#content img').not("#content #slider-full-width img").each( function() {	
		
		$(this).wrap("<div class='image-holder' />");
		
		var imagePath = $(this).attr('src');
		
		$(this).removeAttr('src');
		$(this)
            .load( function() {
				$(this)
					.animate({opacity: 0.0}, 200)
					.animate({opacity: 1.0}, 500, function(){
					    $(this).unwrap();	
						
						var $lightbox = $(this).parent("a[rel^='lightbox']");	
						
						if ($lightbox.length > 0) {
							$(this).css("position", "relative");
							
							var $class = '';
							
							if($lightbox.attr('href').match(/(jpg|gif|jpeg|png|tif)/)) {
								$class = 'lightbox-image';
							} else {
								$class = 'lightbox-video';
							}
								
							if ($(this).length > 0)	{	
								var $span = $("<span class='" + $class + " ie6fix'></span>").appendTo($lightbox);
								
								$(this).bind('mouseenter', function(){
									$height = $(this).height();
									$width = $(this).width();
									$pos =  $(this).position();		
									$span.css({
										height:$height, 
										width:$width, 
										top:$pos.top, 
										left:$pos.left					
									});
								});
							}
						}
						
					});
			}).attr('src', imagePath);
    });
	
	
	/* PrettyPhoto */
	$("a[rel^='lightbox']").prettyPhoto({
		theme: 'light_square' /* light_rounded / dark_rounded / light_square / dark_square */		
	});
	
	
	/* Reduce opacity when mouse hover portfolio images */
	$("a[rel^='lightbox'] img").hover(function(){
		$(this).stop().fadeTo("normal", 0.5); // This sets the opacity to 60% on hover
	},function(){
		$(this).stop().fadeTo("normal", 1.0); // This sets the opacity back to 100% on mouseout
	});
	
	
	/* Fix IE7 z-index issue */	
    if($.browser.msie && $.browser.version.substring(0,1) == '7') {
		$(function() {
			var zIndexNumber = 1000;
			$('#header-container div').each(function() {
				$(this).css('zIndex', zIndexNumber);
				zIndexNumber -= 10;
			});
		});
    }	
	

	// Add transparency to slider description bottom box
	$('.text-bg').fadeTo(0, 0.7);
	

	// Add custom select box styling 
	$("#product-detail-description").jqTransform();

});