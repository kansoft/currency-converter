define([
    "jquery",
], function ($) {
    "use strict";

    function main(config, element) {
        var $element = $(element);
        var ajaxUrl = config.ajaxUrl;
        console.log(ajaxUrl);
        var dataForm = $('#curr-form');
        dataForm.mage('validation', {});

        $(document).on('click', '.submit', function (event) {
            if (dataForm.valid()) {
                event.preventDefault();
                var param = dataForm.serialize();
                $.ajax({
                    showLoader: true,
                    url: ajaxUrl,
                    data: param,
                    type: "POST"
                }).done(function (result) {
                    console.log(result);
                    $('#pln').val(result.currency);
                    return true;
                }).fail(function (jqXHR, textStatus, error) {
                    console.log('Error in submitting form with currency:' + error);

                });
            }
        });
    }

    return main;


});