/*jslint browser: true*/

/*global $, jQuery ,*/
(function ($) {

    "use strict";

    var $window = $(window),
        $body = $('body'),
        $fshppMenuTablet = $('.fshp-header'),
        $fshppMenu = $('.fshp-header-slide'),
        $fshppToggleMenuOpen = $('.toggle-slide-icon-open'),
        $fshppToggleMenuHide = $('.toggle-slide-icon-close'),
        $fshpFooter = $('.fshp-footer'),
        $mainSlider = $('.main-slider'),
        $screenshotsSlider = $('.screenshots-slider'),
        $testimonialSslider = $('.testimonial-slider'),
        $teamSlider = $('.team-slider'),
        $logosSlider = $('.logos-slider'),
        $reviewsSlider = $('.reviews-slider');


    $(document).ready(function () {

        setTimeout(function () {
            AOS.init({
                once: true
            });
        }, 500);

        
        // Inline background image...
        $("[data-bg]").each(function () {
            const image = $(this).attr("data-bg");
            $(this).css({
                backgroundImage: 'url("' + image + '")',
            });
        });


        /*START SCROLL SPY JS*/
        $body.scrollspy({
            target: '#main_menu',
        });
        /*END SCROLL SPY JS*/
        $window.scroll(function () {
            var currentLink = $(this);
            if ($(currentLink).scrollTop() > 300) {
                $fshppMenuTablet.addClass("sticky");
            } else {
                $fshppMenuTablet.removeClass("sticky");
            }

        });

        $window.scroll(function () {
            var currentLink = $(this);
            if ($(currentLink).scrollTop() > 300) {
                $fshppMenu.addClass("sticky");
            } else {
                $fshppMenu.removeClass("sticky");
            }

        });


        // Footer Nav toggles...
        $('#mftProducts').on('click', function (e) {
            e.preventDefault();
            if ($('.product__toggle-wrap').hasClass('active')) {
                $('.mft__toggle').removeClass('active');
            } else {
                $('.mft__toggle').removeClass('active');
                $('.product__toggle-wrap').addClass('active');
            }
        });
        $('#mftChat').on('click', function (e) {
            e.preventDefault();
            if ($('.chat__toggle-wrap').hasClass('active')) {
                $('.mft__toggle').removeClass('active');
            } else {
                $('.mft__toggle').removeClass('active');
                $('.chat__toggle-wrap').addClass('active');
            }
        });


    });


    $('#v-pills-tab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })


    /* =====================================
    *  Parallax on Scroll 
    ====================================== */
    window.addEventListener('scroll', scrollFunc);

    function scrollFunc() {
    var windowScroll = this.scrollY; 
    
    }

}(jQuery));


jQuery($ => {
    "use strict";

    /* =====================================
             Fancy Box Image viewer
      ====================================== */
    var n = $('.lightbox-form-wrapper');
    $('[data-fancybox]').fancybox({
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 600,
        'speedOut': 200,
        buttons: [
            'slideShow',
            'fullScreen',
            'thumbs',
            'share',
            // 'download',
            'zoom',
            'close'
        ],
        beforeShow: function() {
            n.parent().hasClass(".fancybox-container") || n.prependTo(".fancybox-container"), n.addClass("show");
        },
        beforeClose: function() {
            n.removeClass("show")
        }
    });

});

// Home page trus logos carousel init...
$('#trustLogos').owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    nav: true,
    rewindNav:true,
    rewindSpeed: 0,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2
        },
        575: {
            items: 3
        },
        767: {
            items: 4
        },
        991: {
            //items: 5
            items: 4
        },
        1299: {
            items: 7
        }
    }
});

// Home page News carousel init...
$('#hmNews').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        575: {
            items: 2
        },
        1366: {
            items: 3
        }
    }
});

// Home page Reviews carousel init...
$('#hmReviews').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        }
    }
});

// ===============================================

window.onscroll = function () {
    scrollFunction();
}

function scrollFunction() {
    let stickyNav = document.getElementById("sticky_nav");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        stickyNav.classList.add("animate_nav");
    } else {
        stickyNav.classList.remove("animate_nav");
    }
}




document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new Mmenu( "#mmenu", {
            "navbar": {
                title : "<a href='#' ><img src='http://socius.allshoreresources.com/wp-content/uploads/2020/02/logo.png'></a><a href='' id='close-button' class='menu-close-button' ><i class='fas fa-times'></i></a>"
            },
           "extensions": [
            "position-front",
            "position-right",
              "theme-white",
              "pagedim-black",
           ]
        }
        );

        const api = menu.API;

            document.querySelector( "#close-button" )
                .addEventListener(
                    "click", ( evnt ) => {
                        evnt.preventDefault();
                        api.close();
                    }
                );
    }
);


$(document).ready(function($) {

    $('.gallery__grid-row [class^="grid_col"] figure a').each(function(){

        $(this).click(function(){
            var clickedVal = $(this).data('fancybox');
            console.log(clickedVal);
            $('.lightbox-form-wrapper .lightbox-form-inner .lightbox-form-header .lightbox-form-promo-text').removeClass('show');
            $('.promo-' + clickedVal).addClass('show');
        });

    })

});
