jQuery(document).ready(function(){
	
	
	
	// Case Results
	
	
	jQuery('.init_box').click(function(){
		
		jQuery(this).next('.click_box').addClass('open');
		
	});
	
	jQuery('.click_box').click(function(){
		
		jQuery(this).removeClass('open');
		
	});
	
	jQuery('.case_results_init').slick({
  	infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:true,
		prevArrow: ".back",
		nextArrow: ".next"
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
	 	
	
});