
$(document).ready(function () {
    //SLICKNAV MENU
    //-------------------------------------------------
    (function($){
        $('#nav').slicknav({prependTo: '#mobile_nav'});

        //create additional menu near slicknav menu
        $('#mobile_nav').find('.mobile-nav-show').prependTo('#mobile_nav').wrapAll('<ul class="mobile-nav-visible" />');

        //close slicknav menu after click outside an element
        $(document).on('click', function(event) {
            if(!$(event.target).closest('.slicknav_menu').length && !$(event.target).is('.slicknav_menu')) {
                if($('.slicknav_open').size()) {
                    $('#nav').slicknav('close');
                }
            }
        })
    })(jQuery);


    //SCROLL TOP BUTTON
    //-------------------------------------------------
    (function($){
        var findWindowHeight = function(){
            return windowHeight = $(window).height();
        };

        var addScrollButton = function(){
            if ($(window).scrollTop() > windowHeight && !$('#scrollButton').size()) {
                var scrollButton = '<div id="scrollButton" class="scroll-button"/>';
                $('body').append(scrollButton);
            }else if($(window).scrollTop() < windowHeight && $('#scrollButton').size()){
                $('#scrollButton').remove();
            }
        };

        var scrollPage = function(){
            $('body, html').animate({scrollTop : 0}, 800);
        };

        var windowHeight = findWindowHeight();

        $(window).scroll(addScrollButton);
        $(window).resize(findWindowHeight);

        $('body').on('click', '#scrollButton', scrollPage);
    })(jQuery);

    //FIXED HEADER
    //-------------------------------------------------
    (function ($) {
        var fixedItem = $('.js-header'),
            fixedClass = 'is-small',
            minMarginTop;

        if (fixedItem.size()) {
            var scrollTopValue = function () {
                return $(window).scrollTop()
            };

            var fixedFunc = function () {
                fixedItem.addClass(fixedClass);
            };

            var unfixedFunc = function () {
                fixedItem.removeClass(fixedClass);
            };

            var toggleFixedFunc = function () {

                minMarginTop = fixedItem.height();

                if (scrollTopValue() > minMarginTop) {
                    fixedFunc();
                } else if (scrollTopValue() === 0) {
                    unfixedFunc();
                }
            };

            $(window).on('scroll', toggleFixedFunc);
            $(window).on('load', toggleFixedFunc);
        }
    })(jQuery);

    /*------------------------------
     SLICK SLIDER - HOW ABOUT IT
     ------------------------------*/
    // if($('.js-slider-reviews').length){
    //     if (window.matchMedia("(max-width: 1023px)").matches) {
    //         $('.js-slider-reviews').slick({
    //             dots: true,
    //             arrows: false,
    //             infinite: false,
    //             slidesToShow: 1,
    //             slidesToScroll: 1
    //         });
    //     }
    // }
    //
    // if($('.js-items-cards').length){
    //     if (window.matchMedia("(max-width: 1023px)").matches) {
    //         $('.js-items-cards').each(function () {
    //             $(this).slick({
    //                 dots: true,
    //                 arrows: false,
    //                 infinite: false,
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             });
    //         })
    //     }
    // }

    // if($('.js-review-slider').length){
    //     $('.js-review-slider').slick({
    //         dots: false,
    //         arrows: true,
    //         infinite: false,
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         responsive: [
    //             {
    //                 breakpoint: 768,
    //                 settings: {
    //                     dots: true
    //                 }
    //             },
    //             {
    //                 breakpoint: 760,
    //                 settings: {
    //                     arrows: false,
    //                     dots: true
    //                 }
    //             }
    //         ]
    //     });
    // }
    //
    // if($('.js-review-round-slider').length){
    //     if (window.matchMedia("(max-width: 1023px)").matches) {
    //         $('.js-review-round-slider').slick({
    //             dots: false,
    //             arrows: true,
    //             infinite: false,
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //             responsive: [
    //                 {
    //                     breakpoint: 760,
    //                     settings: {
    //                         arrows: false,
    //                         dots: true
    //                     }
    //                 }
    //             ]
    //         });
    //     }
    // }
    //
    // if($('.js-slider-guarantees').length){
    //     if (window.matchMedia("(max-width: 800px)").matches) {
    //         $('.js-slider-guarantees').slick({
    //             dots: true,
    //             arrows: false,
    //             infinite: false,
    //             slidesToShow: 1,
    //             slidesToScroll: 1
    //         });
    //     }
    // }


    /*------------------------------
     CONTENT-ACCORDION
     ------------------------------*/
    // (function($) {
    //     if( $('.js-content-accordion').length ) {
    //         var firstHeader = $('.js-content-accordion').find('[data-accordion=header]').first();
    //
    //         firstHeader.addClass('open');
    //     }
    //
    //     $('[data-accordion=container]').on('click', accordionHandler);
    //
    //     function accordionHandler (e) {
    //         var header = $(e.target).closest('[data-accordion=header]');
    //
    //         if ( header.length ) {
    //             header.toggleClass('open');
    //         }
    //     }
    //
    // })(jQuery);


    /*------------------------------
     HOVER BTNS
     ------------------------------*/
    // function showHoverBtns(btnClass) {
    //
    //     var btns = document.querySelectorAll(btnClass);
    //
    //     btns.forEach(function (item) {
    //
    //         item.onmousemove = function (e) {
    //
    //             var x = e.pageX - item.offsetLeft - item.offsetParent.offsetLeft;
    //             var y = e.pageY - item.offsetTop - item.offsetParent.offsetTop;
    //             item.style.setProperty('--x', x + 'px');
    //             item.style.setProperty('--y', y + 'px');
    //         }
    //     });
    // }

    // showHoverBtns('.js-btn-hover'); //for all btns but not for widget btns
    //
    // (function() {
    //
    //     if (document.querySelector('[data-crm-widget="simplePriceCalc"]')) {
    //
    //         var simpleCalcForm = document.querySelector('[data-crm-widget="simplePriceCalc"]');
    //
    //         simpleCalcForm.addEventListener('ready', function () {
    //
    //             var btnSubmit = simpleCalcForm.querySelector('.simple-calc__submit button');
    //             btnSubmit.classList.add('btn-hover', 'js-btn-form-hover');
    //
    //             setTimeout(function () {
    //                 showHoverBtns('.js-btn-form-hover');
    //             }, 500);
    //         });
    //     }
    // })();

    // (function() {
    //
    //     if (document.querySelector('[data-crm-widget="discountPriceCalc"]')) {
    //
    //         var simpleCalcForm = document.querySelector('[data-crm-widget="discountPriceCalc"]');
    //
    //         simpleCalcForm.addEventListener('ready', function () {
    //
    //             var btnSubmit = simpleCalcForm.querySelector('.cw-order-button');
    //             btnSubmit.classList.add('btn-hover', 'js-btn-form-hover');
    //
    //             setTimeout(function () {
    //                 showHoverBtns('.js-btn-form-hover');
    //             }, 1000);
    //         });
    //     }
    // })();

    //menu
    // (function ( $ ) {
    //
    //     $.fn.sidenav = function( status ) {
    //         var side = $( this );
    //
    //         if ( status == 'open') {
    //             open( side );
    //             $(".js-overlay").fadeIn(500);
    //             $("body").addClass( 'is-hidden' );
    //         } else if ( status == 'close' ) {
    //             close( side );
    //             $(".js-overlay").fadeOut(500);
    //             $("body").removeClass( 'is-hidden' );
    //
    //         }
    //     };
    //
    //     var open = function ( obj ) {
    //         obj.addClass( 'open' );
    //     }
    //
    //     var close = function ( obj ) {
    //         obj.removeClass( 'open' );
    //     }
    //
    // }( jQuery ));
    //
    // var sidenavMain = $("#sidenavMain");
    //
    //
    // $('#openNavMain').on('click', function () {
    //     sidenavMain.sidenav('open');
    // });
    //
    // $('#closeNavMain').on('click', function () {
    //     sidenavMain.sidenav('close');
    // });
    //
    // $('.js-overlay').on('click', function () {
    //     sidenavMain.sidenav('close');
    // });

    //mobile menu dropdown
    (function(){
        var burger = document.querySelector('.js-burger'),
            header = document.querySelector('.js-header');

        burger.onclick = function() {
            this.classList.toggle('is-active');
            header.classList.toggle('menu-opened');
        }
    }());
});

