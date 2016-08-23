jQuery(document).ready(function(){
	


// Body FadeIn

jQuery('body').delay(600).queue(function(){
	
	jQuery(this).addClass('fadein').clearQueue();

});


	
	
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
		
	});
	
	
	jQuery(".single_box_click_content").click(function() {
		
		jQuery(this).removeClass("open");
		
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
		
	});
	
	jQuery('.click_box').click(function(){
		
		jQuery(this).removeClass('open');
		
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
	
	
	
	
	jQuery('.single_case').click(function(){
		
		jQuery(this).next('.single_case_click').addClass('open');
		
	});
	
	
	jQuery('.single_case_click').click(function(){
		
		jQuery(this).removeClass('open');
		
	});
	
	
	 	
	
}); // Document Ready