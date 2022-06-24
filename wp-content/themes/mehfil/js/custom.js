jQuery(document).ready(function(){
    /* jQuery('.group-button a[href*=\\#]:not([href=\\#])').click(function() {
        var windowWidth = jQuery(window).width();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });*/

    
 jQuery(".tab_content").hide();
    jQuery(".tab_content:first").show();

  /* if in tab mode */
    jQuery("ul.tabs li").click(function() {
		
      jQuery(".tab_content").hide();
      var activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+activeTab).fadeIn();		
		
      jQuery("ul.tabs li").removeClass("active");
      jQuery(this).addClass("active");

	  jQuery(".tab_drawer_heading").removeClass("d_active");
	  jQuery(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	jQuery(".tab_drawer_heading").click(function() {
      
      jQuery(".tab_content").hide();
      var d_activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+d_activeTab).fadeIn();
	  
	  jQuery(".tab_drawer_heading").removeClass("d_active");
      jQuery(this).addClass("d_active");
	  
	  jQuery("ul.tabs li").removeClass("active");
	  jQuery("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	jQuery('ul.tabs li').last().addClass("tab_last");
	    
    jQuery('[data-fancybox="gallery"]').fancybox({
	      toolbar  : false,
    });
    
});