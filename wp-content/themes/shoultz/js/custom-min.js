jQuery(document).ready(function(){jQuery(".single_box").click(function(){jQuery(this).next(".single_box_click_content").addClass("open")}),jQuery(".single_box_click_content").click(function(){jQuery(this).removeClass("open")}),jQuery(".init_box").click(function(){jQuery(this).next(".click_box").addClass("open")}),jQuery(".click_box").click(function(){jQuery(this).removeClass("open")}),jQuery(".case_results_init").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".back",nextArrow:".next"}),jQuery(".test_wrapper").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".test_back",nextArrow:".test_next",dots:!0}),jQuery(".reasons_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".reasons_back",nextArrow:".reasons_next"}),jQuery(".logo_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".reasons_back",nextArrow:".reasons_next",dots:!0})});