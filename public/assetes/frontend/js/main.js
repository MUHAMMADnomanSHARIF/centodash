/*
    Template Name: Artfurniture - eCommerce HTML5 Template
    Description: This is html5 template
    Author: HasTech
    Version: 1.0
*/
/*================================================
[  Table of contents  ]
================================================
	01. Sticky Menu
	02. jQuery MeanMenu
    03. Owl Carousel
	04. ScrollUp
    05. Wow js
    06. Isotope
    07. Slick Slider
    08. Newletter Modal On Load
    09. Scroll Down
 
======================================
[ End table content ]
======================================*/

(function ($) {
"use strict";

/*------------------------------------
    01. Sticky Menu
-------------------------------------- */  
    var windows = $(window);
    var stick = $(".header-sticky");
	windows.on('scroll',function() {    
		var scroll = windows.scrollTop();
		if (scroll < 245) {
			stick.removeClass("sticky");
		}else{
			stick.addClass("sticky");
		}
	}); 
    
/*------------------------------------
    02. jQuery MeanMenu
-------------------------------------- */
	$('#mobile-menu-active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .mobile-menu",
    });
    
/*----------------------------------------
    03. Owl Carousel
---------------------------------------- */
/*----------------------------------------
    Slider Carousel
---------------------------------------- */
    $('.slider-wrapper').owlCarousel({
        loop:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 2500,
        items:1,
        nav:false,
        dots: true
    });
/*----------------------------------------
    Product Carousel
---------------------------------------- */
    $('.product-carousel').owlCarousel({
        loop:true,
        items:5,
        nav:true,
        navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            420:{
                items:2
            },
            600:{
                items:3
            },
            800:{
                items:3
            },
            1024:{
                items:4
            },
            1200:{
                items:5
            }
        }
    });
/*----------------------------------------
    Feature Product Carousel
---------------------------------------- */
    $('.feature-product-carousel').owlCarousel({
        items:5,
        mouseDrag: false,
        responsive:{
            0:{
                items:1,
                mouseDrag: true
            },
            420:{
                items:2,
                mouseDrag: true
            },
            600:{
                items:3,
                mouseDrag: true
            },
            800:{
                items:3,
                mouseDrag: true
            },
            1024:{
                items:4,
                mouseDrag: true
            },
            1200:{
                items:5
            }
        }
    });
/*----------------------------------------
    Blog Carousel
---------------------------------------- */
    $('.blog-carousel').owlCarousel({
        items:3,
        mouseDrag: false,
        responsive:{
            0:{
                items:1,
                mouseDrag: true
            },
            600:{
                items:2,
                mouseDrag: true
            },
            800:{
                items:3
            }
        }
    });
/*----------------------------------------
    Product Carousel Two
---------------------------------------- */
    $('.product-carousel-two').owlCarousel({
        loop:true,
        items:4,
        nav:true,
        navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            420:{
                items:2
            },
            600:{
                items:3
            },
            800:{
                items:3
            },
            1024:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });
/*----------------------------------------
    Related Product Carousel
---------------------------------------- */
    $('.related-product-carousel').owlCarousel({
        items:4,
        mouseDrag: false,
        nav:false,
        navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1,
                mouseDrag: true,
                nav:true
            },
            400:{
                items:2,
                mouseDrag: true,
                nav:true
            },
            600:{
                items:3,
                mouseDrag: true,
                nav:true
            },
            800:{
                items:3,
                mouseDrag: true,
                nav:true
            },
            1024:{
                items:4
            },
            1200:{
                items:4
            }
        }
    });
/*------------------------------------------
    04. ScrollUp
------------------------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });  
    
/*------------------------------------------
    05. Wow js
-------------------------------------------- */    
    new WOW().init();
    
/*------------------------------------------
    06. Isotope
-------------------------------------------- */  
    $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-item'
        }
    });    
        
/*----------------------------------------
	07. Slick Slider
------------------------------------------*/
    $('.product-thumbnail-slider').slick({
        autoplay: false,
        infinite: true,
        centerPadding: '0px',
        focusOnSelect: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.product-image-slider',
        arrows: false,
    });
    $('.product-image-slider').slick({
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        autoplay: false,
        infinite: true,
        slidesToShow: 1,
        asNavFor: '.product-thumbnail-slider',
    });
    
/*-----------------------------------------
    08. Newletter Modal On Load
----------------------------------------- */ 
    var win = $(window);
    win.on('load', function() {
        $('#newslettermodal').modal('show');
    });	
    
/*------------------------------------
    09. Scroll Down
-------------------------------------- */  
    $('.scroll-down').on('click', function() {
        $('html, body').animate({scrollTop: $('.scroll-area').offset().top - 100 }, 'slow');
        return false;
    });

    
    // testimonial Section
    $('.owl-carousel').owlCarousel({
        items:3,
        loop:true,
        margin:10,
        merge:true,
        responsive:{
            0:{
                items:1
            },
            374:{
                items:1
                
            },

            678:{
                items:2
            },
            1000:{
                mergeFit:false
            }
        }
    });
    
})(jQuery);	

jQuery(document).ready(function($){
	//update these values if you change these breakpoints in the style.css file (or _layout.scss if you use SASS)
	var MqM= 768,
		MqL = 1024;

	var faqsSections = $('.cd-faq-group'),
		faqTrigger = $('.cd-faq-trigger'),
		faqsContainer = $('.cd-faq-items'),
		faqsCategoriesContainer = $('.cd-faq-categories'),
		faqsCategories = faqsCategoriesContainer.find('a'),
		closeFaqsContainer = $('.cd-close-panel');
	
	//select a faq section 
	faqsCategories.on('click', function(event){
		event.preventDefault();
		var selectedHref = $(this).attr('href'),
			target= $(selectedHref);
		if( $(window).width() < MqM) {
			faqsContainer.scrollTop(0).addClass('slide-in').children('ul').removeClass('selected').end().children(selectedHref).addClass('selected');
			closeFaqsContainer.addClass('move-left');
			$('body').addClass('cd-overlay');
		} else {
	        $('body,html').animate({ 'scrollTop': target.offset().top - 19}, 200); 
		}
	});

	//close faq lateral panel - mobile only
	$('body').bind('click touchstart', function(event){
		if( $(event.target).is('body.cd-overlay') || $(event.target).is('.cd-close-panel')) { 
			closePanel(event);
		}
	});
	faqsContainer.on('swiperight', function(event){
		closePanel(event);
	});

	//show faq content clicking on faqTrigger
	faqTrigger.on('click', function(event){
		event.preventDefault();
		$(this).next('.cd-faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
	});

	//update category sidebar while scrolling
	$(window).on('scroll', function(){
		if ( $(window).width() > MqL ) {
			(!window.requestAnimationFrame) ? updateCategory() : window.requestAnimationFrame(updateCategory); 
		}
	});

	$(window).on('resize', function(){
		if($(window).width() <= MqL) {
			faqsCategoriesContainer.removeClass('is-fixed').css({
				'-moz-transform': 'translateY(0)',
			    '-webkit-transform': 'translateY(0)',
				'-ms-transform': 'translateY(0)',
				'-o-transform': 'translateY(0)',
				'transform': 'translateY(0)',
			});
		}	
		if( faqsCategoriesContainer.hasClass('is-fixed') ) {
			faqsCategoriesContainer.css({
				'left': faqsContainer.offset().left,
			});
		}
	});

	function closePanel(e) {
		e.preventDefault();
		faqsContainer.removeClass('slide-in').find('li').show();
		closeFaqsContainer.removeClass('move-left');
		$('body').removeClass('cd-overlay');
	}

	function updateCategory(){
		updateCategoryPosition();
		updateSelectedCategory();
	}

	function updateCategoryPosition() {
		var top = $('.cd-faq').offset().top,
			height = jQuery('.cd-faq').height() - jQuery('.cd-faq-categories').height(),
			margin = 20;
		if( top - margin <= $(window).scrollTop() && top - margin + height > $(window).scrollTop() ) {
			var leftValue = faqsCategoriesContainer.offset().left,
				widthValue = faqsCategoriesContainer.width();
			faqsCategoriesContainer.addClass('is-fixed').css({
				'left': leftValue,
				'top': margin,
				'-moz-transform': 'translateZ(0)',
			    '-webkit-transform': 'translateZ(0)',
				'-ms-transform': 'translateZ(0)',
				'-o-transform': 'translateZ(0)',
				'transform': 'translateZ(0)',
			});
		} else if( top - margin + height <= $(window).scrollTop()) {
			var delta = top - margin + height - $(window).scrollTop();
			faqsCategoriesContainer.css({
				'-moz-transform': 'translateZ(0) translateY('+delta+'px)',
			    '-webkit-transform': 'translateZ(0) translateY('+delta+'px)',
				'-ms-transform': 'translateZ(0) translateY('+delta+'px)',
				'-o-transform': 'translateZ(0) translateY('+delta+'px)',
				'transform': 'translateZ(0) translateY('+delta+'px)',
			});
		} else { 
			faqsCategoriesContainer.removeClass('is-fixed').css({
				'left': 0,
				'top': 0,
			});
		}
	}

	function updateSelectedCategory() {
		faqsSections.each(function(){
			var actual = $(this),
				margin = parseInt($('.cd-faq-title').eq(1).css('marginTop').replace('px', '')),
				activeCategory = $('.cd-faq-categories a[href="#'+actual.attr('id')+'"]'),
				topSection = (activeCategory.parent('li').is(':first-child')) ? 0 : Math.round(actual.offset().top);
			
			if ( ( topSection - 20 <= $(window).scrollTop() ) && ( Math.round(actual.offset().top) + actual.height() + margin - 20 > $(window).scrollTop() ) ) {
				activeCategory.addClass('selected');
			}else {
				activeCategory.removeClass('selected');
			}
		});
	}
});



