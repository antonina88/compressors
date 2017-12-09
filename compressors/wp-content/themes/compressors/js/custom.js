
$( window ).resize(function() {
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
});
//sticky header on scroll
$(document).ready(function () {
    $(window).load(function () {
        $(".sticky").sticky({topSpacing: 0});
    });
});

/* ==============================================
 WOW plugin triggers animate.css on scroll
 =============================================== */
$(document).ready(function () {
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 100, // distance to the element when triggering the animation (default is 0)
                mobile: false        // trigger animations on mobile devices (true is default)
            }
    );
    wow.init();
});



//change compressors-remeza and compressors-vortex 
/*$(document).ready(function () {
    let remezaTab = document.querySelector('li.compressors-remeza');
    let vortexTab = document.querySelector('li.compressors-vortex');
    
    let divRemeza = document.querySelector('div.compressors-remeza');
    let divVortex = document.querySelector('div.compressors-vortex');

    remezaTab.addEventListener('click', function(ev) {
        divRemeza.classList.add('active');
        console.log('ev', ev);
        divVortex.classList.remove('active');
    });

    vortexTab.addEventListener('click', function(ev) {
        divVortex.classList.add('active');
        console.log('ev', ev);
        divRemeza.classList.remove('active');
    })   
});
*/



//parallax
$(document).ready(function () {
    $(window).stellar({
        horizontalScrolling: false,
        responsive: true/*,
         scrollProperty: 'scroll',
         parallaxElements: false,
         horizontalScrolling: false,
         horizontalOffset: 0,
         verticalOffset: 0*/
    });
});

//owl carousel for work
$(document).ready(function () {

    $("#work-carousel").owlCarousel({
        // Most important owl features
        items: 4,
        itemsCustom: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 6000
    });

});


//owl carousel for news
$(document).ready(function () {

    $("#news-carousel").owlCarousel({
        // Most important owl features
        items: 2,
        itemsCustom: false,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});



//owl carousel for testimonials
$(document).ready(function () {

    $("#testi-carousel").owlCarousel({
        // Most important owl features
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});
//featured work carousel slider

$(document).ready(function () {

    $("#featured-work").owlCarousel({
        autoPlay: 5000, //Set AutoPlay to 3 seconds
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        pagination: false,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        stopOnHover: true

    });

});
/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 10,
        time: 800
    });
});







//MAGNIFIC POPUP
$(document).ready(function () {
$('.show-image').magnificPopup({type: 'image'});
});

/* ==============================================
 flex slider
 =============================================== */

$(document).ready(function () {
$('.main-flex-slider,.testi-slide').flexslider({
    slideshowSpeed: 5000,
    directionNav: false,
    animation: "fade"
});
});
//OWL CAROUSEL
$(document).ready(function () {
$("#clients-slider").owlCarousel({
    autoPlay: 3000,
    pagination: false,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [991, 2]
});
});


/*========tooltip and popovers====*/
$(document).ready(function () {
$("[data-toggle=popover]").popover();

$("[data-toggle=tooltip]").tooltip();
});



/* ==============================================
 mb.YTPlayer
 =============================================== */
$(document).ready(function () {
jQuery(function () {
    jQuery(".player").mb_YTPlayer();
});
});


//transparent header

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.transparent-header').css("background", "#252525");
        } else {
            $('.transparent-header').css("background", "transparent");
        }
    });
});

 //Search         
    (function () {

        $('.top-search').on('click', function() {
            $('.search').fadeIn(500, function() {
              $(this).toggleClass('search-toggle');
            });     
        });

        $('.search-close').on('click', function() {
            $('.search').fadeOut(500, function() {
                $(this).removeClass('search-toggle');
            }); 
        });

    }());



/***********************************************************
     * ACCORDION
     ***********************************************************/
    $('.panel-ico a[data-toggle="collapse"]').on('click', function () {
        if ($(this).closest('.panel-heading').hasClass('active')) {
            $(this).closest('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading a[data-toggle="collapse"]').closest('.panel-heading').removeClass('active');
            $(this).closest('.panel-heading').addClass('active');
        }
    });


(function () {

        var tables = $('.table-collapse');
           
            $.each(tables, function(index, value) {
                
                var rows = $(value).find('tr');

                if (rows.length > 4) {
                    for (var i = 4; i <= rows.length; i++) {
                       $(rows[i]).addClass('hide')
                    };
                } else {
                    $(value).siblings('.show-table-link').hide();
                };
            });

            $('.show-table-link').on('click', function(event) {
                event.preventDefault();
                
                var rows = $(this).prevAll('.table-collapse').find('tr');

                $.each(rows, function(index, value){
                    if ($(value).hasClass('hide')) {
                        $(value).removeClass('hide').addClass('vis')
                    };
                });

                $(this).hide();
                $(this).siblings('.hide-table-link').show();


            });

            $('.hide-table-link').on('click', function(event) {
                event.preventDefault();
                
                var rows = $(this).prevAll('.table-collapse').find('tr');

                $.each(rows, function(index, value){
                    if ($(value).hasClass('vis')) {
                        $(value).removeClass('vis').addClass('hide')
                    }
                });

                $(this).hide();
                $(this).siblings('.show-table-link').show();
            });
    
 

    }());


(function () {
$('.mansory-wrapper').imagesLoaded( function() {
                 $('.mansory-wrapper').masonry({
                  columnWidth: '.item',
                  itemSelector: '.item'
                });
            });

      }()); 

$( window ).resize(function() {
    
                 $('.mansory-wrapper').masonry({
                  columnWidth: '.item',
                  itemSelector: '.item'
                });
           
});