jQuery(document).ready(function(){
	


// Body and Header FadeIn

jQuery('body').delay(600).queue(function(){
	
	jQuery(this).addClass('fadein').clearQueue();

});


jQuery('header').delay(1000).queue(function(){
	
	jQuery(this).addClass('fadein').clearQueue();

});


// Animations


new WOW().init();


	
	
// Mobile Menu 
	

jQuery(".menu_wrapper").click(function() {
		
		jQuery('.mobile_dropdown').toggleClass('mobile_open');
		jQuery('header').toggleClass('black');
		jQuery('.menu_bars').toggleClass('mobile_open');
		jQuery(".menu_text").html(jQuery(".menu_text").html() == 'CLOSE' ? 'MENU' : 'CLOSE');
		
});




jQuery('.inner_mobile_dropdown ul li.menu-item-has-children a').click(function() {
	
	
	jQuery(this).next('ul.sub-menu').slideToggle();
	
	
	
});



	
	
// What We Do 
	
	
	jQuery(".single_box").click(function() {
		
		jQuery(this).next(".single_box_click_content").addClass("open");
		
		jQuery(this).next(".single_box_click_content").find(".single_box_slide_up").addClass('slide');
		
			jQuery(this).next('.single_box_click_content').find('span.white_line').delay(200).queue(function(){
	
			jQuery(this).addClass('slide_out').clearQueue();

		});

		
		
		
		
		
	});
	
	
	jQuery(".single_box_click_content").click(function() {
		
		jQuery(this).removeClass("open");
		
		jQuery(this).find(".single_box_slide_up").removeClass('slide');
		
		jQuery(this).find('span.white_line').removeClass('slide_out');
	
					
	});
	
	

	
	
	
	
	
	// First Letter 
	

	jQuery(function($) {
    //Grab first character for Drop Caps
    jQuery("div#container p:eq(0)").each(function() {
        var text = jQuery(this).html();
        var first = jQuery('<span>'+text.charAt(0)+'</span>').addClass('letter-inner-pages');
        jQuery(this).html(text.substring(1)).prepend(first);
    });
});



	
	
	// Consultation Scroll 




jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});

	
	
	
	// Case Results Main Page
	
	
	jQuery('.init_box').click(function(){
		
		jQuery(this).next('.click_box').addClass('open');
		jQuery(this).next('.click_box').children('.click_content').addClass('open');
		
	});
	
	jQuery('.click_box').click(function(){
		
		jQuery(this).removeClass('open');
		jQuery(this).children('.click_content').removeClass('open');
		
	});
	
	jQuery('.case_results_init').slick({
  	
		slidesToShow: 4,
		slidesToScroll: 4,
		arrows:false,
		
		centerMode: false,
	
		responsive: [
    {
      breakpoint: 1150,
      settings: {
        infinite: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				arrows:true,
				prevArrow: ".back",
				nextArrow: ".next",
				centerMode: true,
      }
    },
    {
      breakpoint: 620,
      settings: {
        infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows:true,
				prevArrow: ".back",
				nextArrow: ".next",
				centerMode: false,
      }
    }
    
  ]
});
	
	
	jQuery('.test_wrapper').slick({
  	infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:true,
		fade:true,
		adaptiveHeight: true,
		prevArrow: ".test_back",
		nextArrow: ".test_next",
		dots:true
	});
	
	
	jQuery('.reasons_slider').slick({
  	infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:true,
		prevArrow: ".reasons_back",
		nextArrow: ".reasons_next"
	
	});
	
	
	jQuery('.logo_slider').slick({
  	infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		dots:false,
		arrows:false,
		responsive: [
    {
      breakpoint: 1150,
      settings: {
        infinite: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				dots:true,
				arrows:false,
      }
    },
    {
      breakpoint: 620,
      settings: {
        infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows:false,
				dots:true
      }
    }
    
  ]
	
	});
	
// Inner Page Case Results
	
	
	jQuery('.single_case').click(function(){
		
		jQuery(this).next('.single_case_click').addClass('open');
		
		
	});
	
	
	jQuery('.single_case_click').click(function(){
		
		jQuery(this).removeClass('open');
		
	});
	
	

// Footer 



// Social Icons 





jQuery('.icon_reg').mouseenter(function(){
	
	
	jQuery(this).next('.icon_hover').addClass('icon_show');
	
	
});


jQuery('.social_icons_wrapper a').mouseleave(function(){
	
	
	jQuery('.icon_hover').removeClass('icon_show');
	
	
});




// Logo 


jQuery('.ilawyer_hover').hide();

jQuery('.ilawyer_wrapper').mouseenter(function(){
	
	jQuery('.ilawyer_reg').fadeOut();
	jQuery('.ilawyer_hover').fadeIn();

});

jQuery('.ilawyer_wrapper').mouseleave(function(){
	
	jQuery('.ilawyer_reg').fadeIn();
	jQuery('.ilawyer_hover').fadeOut();

});
	
	
	 	
	
}); // Document Ready