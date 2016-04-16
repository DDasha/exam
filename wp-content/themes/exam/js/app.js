$(document).ready(function() {

    //variables
    var hamburger = $('.hamburger');
    var menu = $('.menu-primary-menu-container');
    var layerTop = $('.layer-top');
    var layerMiddle = $('.layer-middle');
    var layerBottom = $('.layer-bottom');

    // remove events
    hamburger.click(function(e) {
        e.stopPropagation();
    });

    // toggle hamburger
    hamburger.click(function() {
        menu.slideToggle();
        if ( $('.layer-top').hasClass('layer-top-cross') ) {
            layerTop.removeClass('layer-top-cross');
            layerMiddle.removeClass('layer-middle-cross');
            layerBottom.removeClass('layer-bottom-cross');
        } else {
            layerTop.addClass('layer-top-cross');
            layerMiddle.addClass('layer-middle-cross');
            layerBottom.addClass('layer-bottom-cross');
        }
    });

    // show menu after resize window
    $(function() {
        $(window).resize(function() {
            if(window.matchMedia('(min-width: 1050px)').matches) {
                menu.show();
            } else {
                menu.hide();
                layerTop.removeClass('layer-top-cross');
                layerMiddle.removeClass('layer-middle-cross');
                layerBottom.removeClass('layer-bottom-cross');
            }
        });
    });

    // close menu if click is not on it
    $('body').click(function() {
        if(window.matchMedia('(max-width: 1050px)').matches) {
            menu.slideUp();
            layerTop.removeClass('layer-top-cross');
            layerMiddle.removeClass('layer-middle-cross');
            layerBottom.removeClass('layer-bottom-cross');
        }
    });

    // flexslider
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlsContainer: $(".custom-controls-container"),
            customDirectionNav: $(".custom-navigation a")
        });
        // carousel
        for( var i = 1; i < $('.partners li a').length; i ++) {
            $('.partners li a').innerHTML = i;
        }
    });
});

