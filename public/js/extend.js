$(function ($) {

	"use strict";



    var $popular_category_slider = $(".popular-category-slider");

  //  $popular_category_slider.trigger('destroy.owl.carousel');
 // $('.popular-category-slider').owlCarousel('destroy');

    // $popular_category_slider.data('owlCarousel').destroy();
   // $popular_category_slider.removeClass('owl-carousel owl-loaded');
     //$popular_category_slider.find('.owl-stage-outer').children().unwrap();
    // $popular_category_slider.removeData();

    // popular_category_slider
    
    $popular_category_slider.owlCarousel({
        navText: [],
        nav: true,
        dots: false,
        loop: false,
        autoplayTimeout: 6000,
        smartSpeed: 1200,
        margin: 15,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 4,
            },
            1400: {
                items: 5
            }
        },
    });












        // newproduct-slider Area Start
        var $newproduct_slider = $(".features-slider");
        $newproduct_slider.owlCarousel({
            navText: ['<svg width="50%" height="50%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="50%" height="50%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
            nav: true,
            dots: false,
            autoplayTimeout: 6000,
            smartSpeed: 1200,
            loop: false,
            margin: 15,
            thumbs: false,
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                1200: {
                    items: 4,
                },
                1400: {
                    items: 5
                }
            },
        });
        


});


