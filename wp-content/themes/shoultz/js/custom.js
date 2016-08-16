jQuery(document).ready(function(){
	
	
	// What We Do 
	
	
	jQuery(".single_box").click(function() {
		
		jQuery(this).next(".single_box_click_content").addClass("open");
		
	});
	
	
	jQuery(".single_box_click_content").click(function() {
		
		jQuery(this).removeClass("open");
		
	});
	
	
	
	
	
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
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:true,
		prevArrow: ".reasons_back",
		nextArrow: ".reasons_next",
		dots:true
	
	});
	 	
	
});