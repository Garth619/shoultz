jQuery(document).ready(function(){jQuery("body").delay(600).queue(function(){jQuery(this).addClass("fadein").clearQueue()}),jQuery("header").delay(1e3).queue(function(){jQuery(this).addClass("fadein").clearQueue()}),(new WOW).init(),jQuery(".menu_wrapper").click(function(){jQuery(".mobile_dropdown").toggleClass("mobile_open"),jQuery("header").toggleClass("black"),jQuery(".menu_bars").toggleClass("mobile_open"),jQuery(".menu_text").html("CLOSE"==jQuery(".menu_text").html()?"MENU":"CLOSE")}),jQuery(".inner_mobile_dropdown ul li.menu-item-has-children a").click(function(){jQuery(this).next("ul.sub-menu").slideToggle()}),jQuery(".single_box_wrapper.mobile .single_box").click(function(){jQuery(this).next(".single_box_click_content").addClass("open"),jQuery(this).next(".single_box_click_content").find(".single_box_slide_up").addClass("slide"),jQuery(this).next(".single_box_click_content").find("span.white_line").delay(200).queue(function(){jQuery(this).addClass("slide_out").clearQueue()})}),jQuery(".single_box_wrapper.mobile .single_box_click_content").click(function(){jQuery(this).removeClass("open"),jQuery(this).find(".single_box_slide_up").removeClass("slide"),jQuery(this).find("span.white_line").removeClass("slide_out")}),jQuery(".single_box_wrapper.desktop .single_box").mouseenter(function(){jQuery(this).next(".single_box_click_content").addClass("open"),jQuery(this).next(".single_box_click_content").find(".single_box_slide_up").addClass("slide"),jQuery(this).next(".single_box_click_content").find("span.white_line").delay(200).queue(function(){jQuery(this).addClass("slide_out").clearQueue()})}),jQuery(".single_box_wrapper.desktop .single_box_click_content").mouseleave(function(){jQuery(this).removeClass("open"),jQuery(this).find(".single_box_slide_up").removeClass("slide"),jQuery(this).find("span.white_line").removeClass("slide_out")}),jQuery(function($){jQuery("div#container p:eq(0)").each(function(){var e=jQuery(this).html(),i=jQuery("<span>"+e.charAt(0)+"</span>").addClass("letter-inner-pages");jQuery(this).html(e.substring(1)).prepend(i)})}),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},600),!1}})}),jQuery(".init_box").click(function(){jQuery(this).next(".click_box").addClass("open"),jQuery(this).next(".click_box").children(".click_content").addClass("open")}),jQuery(".click_box").click(function(){jQuery(this).removeClass("open"),jQuery(this).children(".click_content").removeClass("open")}),jQuery(".case_results_init").slick({slidesToShow:4,slidesToScroll:4,arrows:!1,centerMode:!1,responsive:[{breakpoint:1150,settings:{infinite:!0,slidesToShow:2,slidesToScroll:2,arrows:!0,prevArrow:".back",nextArrow:".next",centerMode:!0}},{breakpoint:620,settings:{infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".back",nextArrow:".next",centerMode:!1}}]}),jQuery(".test_wrapper").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,fade:!0,adaptiveHeight:!0,prevArrow:".test_back",nextArrow:".test_next",dots:!0}),jQuery(".reasons_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0,prevArrow:".reasons_back",nextArrow:".reasons_next"}),jQuery(".logo_slider").slick({infinite:!0,slidesToShow:4,slidesToScroll:4,dots:!1,arrows:!1,responsive:[{breakpoint:1150,settings:{infinite:!0,slidesToShow:2,slidesToScroll:2,dots:!0,arrows:!1}},{breakpoint:620,settings:{infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0}}]}),jQuery(".single_case").click(function(){jQuery(this).next(".single_case_click").addClass("open")}),jQuery(".single_case_click").click(function(){jQuery(this).removeClass("open")}),jQuery(".icon_reg").mouseenter(function(){jQuery(this).next(".icon_hover").addClass("icon_show")}),jQuery(".social_icons_wrapper a").mouseleave(function(){jQuery(".icon_hover").removeClass("icon_show")}),jQuery(".ilawyer_hover").hide(),jQuery(".ilawyer_wrapper").mouseenter(function(){jQuery(".ilawyer_reg").fadeOut(),jQuery(".ilawyer_hover").fadeIn()}),jQuery(".ilawyer_wrapper").mouseleave(function(){jQuery(".ilawyer_reg").fadeIn(),jQuery(".ilawyer_hover").fadeOut()})});