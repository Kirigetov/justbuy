
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