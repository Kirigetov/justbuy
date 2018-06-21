$(document).ready(function() {

    window.addEventListener("DOMContentLoaded", function() {
        if(window.matchMedia('(max-width: 580px)').matches) {
            if ($('[data-crm-widget="prices"]').length) {
                var widget = $("[data-crm-widget='prices']");

                widget.on('ready', function () {
                  var format = widget.find('.prices-format-container'),
                      formatTitle = format.find('.prices-format-left'),
                      formatBody = format.find('.prices-format-right');

                    formatBody.slideToggle("fast");

                    formatTitle.on('click', function () {
                        $(this).toggleClass('is-open');
                        formatBody.slideToggle("fast");
                    })
                });
            }
        }
    });
});