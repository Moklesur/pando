/********************************************************
 ThemeTim
 Version:   1.0
 ********************************************************/
jQuery(function(){

    /*******************************************************************************
     * Camera Slider Load
     *******************************************************************************/
    if (jQuery('.main-slider').length) {
        jQuery('.main-slider').camera({
            height: '50%',
            loader: 'none',
            margin:'',
            alignment: 'center',
            minHeight: '600px',
            thumbnails: true,
            playPause: false,
            loaderColor: '#f9f9f9',
            loaderBgColor: '#ddd',
            hover: true,
            opacityOnGrid: false
        });
    }
    /*******************************************************************************
     * Thumbnails Carousel Slider
     *******************************************************************************/
    if(jQuery('.thumbnails').length){
        jQuery('.images .thumbnails').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            items:4,
            autoplay:true,
            nav: true,
            navText: ["<span><i class='fa fa-angle-left fa-2x'></i></span>","<span><i class='fa fa-angle-right  fa-2x'></i></span>"]
        });
    }
    /*******************************************************************************
     * Sticky
     *******************************************************************************/
    var head = jQuery( 'header' ).height();
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > head){
            jQuery('header').addClass("sticky");
        }
        else{
            jQuery('header').removeClass("sticky");
        }
    });
    /*******************************************************************************
     * Body Animation
     *******************************************************************************/
    if(jQuery('.animsition').length){
        jQuery(".animsition").animsition({
            inClass: 'fade-in',
            outClass: 'fade-out',
            inDuration: 1500,
            outDuration: 800,
            linkElement: '.primary-menu .navbar-collapse ul li a',
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'animsition-loading',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: [ 'animation-duration', '-webkit-animation-duration'],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay : false,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'body',
            transition: function(url){ window.location.href = url; }
        });
    }
    /*******************************************************************************
     * Smooth Scroll
     *******************************************************************************/
    jQuery.srSmoothscroll({
        step: 95,
        speed: 600,
        ease: 'swing',
        target: jQuery('body'),
        container: jQuery(window)
    })

});