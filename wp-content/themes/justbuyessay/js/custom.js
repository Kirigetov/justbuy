
$(document).ready(function () {

    //SCROLL TOP BUTTON
    //-------------------------------------------------
    // (function($){
    //     var findWindowHeight = function(){
    //         return windowHeight = $(window).height();
    //     };
    //
    //     var addScrollButton = function(){
    //         if ($(window).scrollTop() > windowHeight && !$('#scrollButton').size()) {
    //             var scrollButton = '<div id="scrollButton" class="scroll-button"/>';
    //             $('body').append(scrollButton);
    //         }else if($(window).scrollTop() < windowHeight && $('#scrollButton').size()){
    //             $('#scrollButton').remove();
    //         }
    //     };
    //
    //     var scrollPage = function(){
    //         $('body, html').animate({scrollTop : 0}, 800);
    //     };
    //
    //     var windowHeight = findWindowHeight();
    //
    //     $(window).scroll(addScrollButton);
    //     $(window).resize(findWindowHeight);
    //
    //     $('body').on('click', '#scrollButton', scrollPage);
    // })(jQuery);

    //FIXED HEADER
    //-------------------------------------------------
    (function ($) {
        var fixedItem = $('.js-header'),
            fixedClass = 'is-scroll',
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

    //mobile menu dropdown
    (function(){
        var burger = document.querySelector('.js-burger'),
            header = document.querySelector('.js-header'),
            body   = document.querySelector('body');

        burger.onclick = function() {
            // this.classList.toggle('is-active');
            body.classList.toggle('fixed');
            header.classList.toggle('menu-opened');
        }
    }());

    //select2 for widgets
    if ($('[data-crm-widget="emailCollector"]').length) {
        var eCollector = $('[data-crm-widget="emailCollector"]');
        var windowWidth = window.outerWidth;

        eCollector.on('ready', function () {
            eCollector.find('#collectorform-type_of_work').select2({dropdownParent: $('.collector-select-container')});
            if (windowWidth < 1025) {
                $('#collectorform-type_of_work').on('select2:open', function () {
                    $('.select2-search input').prop('focus',false);
                });
            }
        });
    }

    if($('.js-reviews-land').length) {
        $('.js-reviews-land').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinity: false,
            nextArrow: $(".js-review-arrow-right"),
            prevArrow: $(".js-review-arrow-left"),
            fade: true,
            dots: true
        })
    }

    if($('.js-reviews').length) {

        var revSlider = $('.js-reviews');

        revSlider.on('init reInit', function(event, slick, currentSlide, nextSlide){
            var
                cur = $(slick.$slides[slick.currentSlide]),
                next = cur.next(),
                afterNext = next.next();

            next.addClass('slick-snext');
            afterNext.addClass('slick-afterNext');
            cur.removeClass('slick-snext').removeClass('slick-afterNext');
            slick.$prev = afterNext;
            slick.$next = next;
        }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var cur = $(slick.$slides[nextSlide]),
                next = cur.next();

            cur.removeClass('slick-snext');
            next.removeClass('slick-afterNext').addClass('slick-snext');
            cur.removeClass('slick-snext').removeClass('slick-afterNext');
        });

        revSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinity: false,
            nextArrow: $(".js-review-arrow-right"),
            prevArrow: $(".js-review-arrow-left"),
            dots: true,
            fade: true
        })

    }

});

// document.addEventListener('DOMContentLoaded', function () {
//
//     var emailCollector = document.querySelector('[data-crm-widget="emailCollector"]');
//
//     emailCollector.addEventListener('ready', function () {
//         emailCollector.querySelector('#collectorform-type_of_work').select2();
//
//     });
// });