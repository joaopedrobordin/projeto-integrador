
 




jQuery.noConflict();
		jQuery(window).load(function(){
			jQuery('.listfilter a').click(function(){
				jQuery('.listfilter .current').removeClass('current');
				jQuery(this).addClass('current');
		 
				var selector = jQuery(this).attr('data-filter');
				//alert(selector);
				jQuery('.items > div').fadeIn();
				jQuery('.items > div').not(selector).hide('slow');
			});
		});


