jQuery(document).ready(function(){jQuery("body").delay(600).queue(function(){jQuery(this).addClass("fadein").clearQueue()}),jQuery(".menu_wrapper").click(function(){jQuery(".mobile_dropdown").toggleClass("mobile_open"),jQuery("header").toggleClass("black"),jQuery(".menu_bars").toggleClass("mobile_open"),jQuery(".menu_text").html("CLOSE"==jQuery(".menu_text").html()?"MENU":"CLOSE")}),jQuery(".inner_mobile_dropdown ul li.menu-item-has-children a").click(function(){jQuery(this).next("ul.sub-menu").slideToggle()}),jQuery(".single_box").click(function(){jQuery(this).next(".single_box_click_content").addClass("open")}),jQuery(".single_box_click_content").click(function(){jQuery(this).removeClass("open")}),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},600),!1}})}),jQuery(".init_box").click(function(){jQuery(this).next(".click_box").addClass("open")}),jQuery(".click_box").click(function(){jQuery(this).removeClass("open")}),jQuery(".case_results_init").slick({slidesToShow:4,slidesToScroll:4,arrows:!1,centerMode:!1,responsive:[{breakpoint:1150,settings:{infinite:!0,slidesToShow:2,slidesToScroll:2,arrows:!0,prevArrow:".back",nextArrow:".next",centerMode:!0}},{breakpoint:620,settings:{infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".back",nextArrow:".next",centerMode:!1}}]}),jQuery(".test_wrapper").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,fade:!0,adaptiveHeight:!0,prevArrow:".test_back",nextArrow:".test_next",dots:!0}),jQuery(".reasons_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".reasons_back",nextArrow:".reasons_next"}),jQuery(".logo_slider").slick({infinite:!0,slidesToShow:4,slidesToScroll:4,dots:!1,arrows:!1,responsive:[{breakpoint:1150,settings:{infinite:!0,slidesToShow:2,slidesToScroll:2,dots:!0,arrows:!1}},{breakpoint:620,settings:{infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0}}]}),jQuery(".single_case").click(function(){jQuery(this).next(".single_case_click").addClass("open")}),jQuery(".single_case_click").click(function(){jQuery(this).removeClass("open")})});