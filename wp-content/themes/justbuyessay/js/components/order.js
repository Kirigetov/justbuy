"use strict";
$(document).ready(function(){

    if ($('[data-crm-widget=form]').length) {
        var form = $('[data-crm-widget=form]');

        form.on('ready', function () {
            form.find('#essayform-type_of_work').select2({dropdownParent: $('.field-essayform-type_of_work')});
            form.find('#essayform-paper_subject').select2({dropdownParent: $('.field-essayform-paper_subject')});
            form.find('#essayform-level_work').select2({

                closeOnSelect: false
            }).on("select2:closing", function(e) {
                e.preventDefault();
            }).on("select2:closed", function(e) {
                list.select2("open");
            });
            $('#essayform-level_work').select2("open");

            form.find('#essayform-language_work').select2({dropdownParent: $('.field-essayform-language_work')});
        });
    }
});
